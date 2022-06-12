<?php

namespace App\Http\Controllers\Api\Timeline;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth:airlock']);
    // }

    public function __invoke(Request $request)
    {
        $articles = null;
        $likeRankings = null;

        if (Auth::user()){
            $ownPost = Article::where('user_id', Auth::user()->id)->first();
            $followed = Auth::user()->followings()->pluck('followee_id')->first();

            if((empty($ownPost)) || (empty($followed)) || (empty($ownPost) && empty($followed))){
                $likeRankings = Article::withCount('likes')
                    ->orderBy('likes_count', 'desc')
                    ->limit(1)
                    ->get();
            }

            if ((empty($ownPost) && !empty($followed)) || (!empty($ownPost))){
                $likeRankings = null;
                    $articles = Article::query()
                    ->whereIn('user_id', Auth::user()->followings()->pluck('followee_id')) // フォロー中ユーザー
                    ->orWhere('user_id', Auth::user()->id) // 自分
                    ->latest() // 最新順
                    ->paginate(1);
            }
        } else {
            $likeRankings = Article::withCount('likes')
                ->orderBy('likes_count', 'desc')
                ->limit(1)
                ->get();
        }

        return response()->json([
            'articles' => $articles,
            'likeRankings' => $likeRankings,
        ]);
    }
}
