<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class FollowingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
    |--------------------------------------------------------------------------
    | フォローの一覧
    |--------------------------------------------------------------------------
    */
    public function __invoke(string $username)
    {
        $user = User::where('username', $username)->first()
            ->load('followings.followers');

        $followings = $user->followings->sortByDesc('created_at');

        return view('users.followings', [
            'user' => $user,
            'followings' => $followings,
        ]);
    }
}
