<?php

namespace App\Http\Controllers\Books\Episode;

use App\Models\Book;
use App\Models\Episode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
    |--------------------------------------------------------------------------
    | エピソードの更新
    |--------------------------------------------------------------------------
    */
    public function __invoke(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | データのセット | 作品
        |--------------------------------------------------------------------------
        */
        $book = Book::find($request->book_id);
        $episode = Episode::find($request->episode_id);

        /*
        |--------------------------------------------------------------------------
        | データの保存 | エピソード
        |--------------------------------------------------------------------------
        */
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'images' => 'required|array|min:19|max:200',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        // サムネイル
        if ($request->has('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            $filePath = 'app/books/' . $book->title . '/' . $episode->number . '/thumbnail/' . $fileName;


            $img =  \Image::make($file)->resize(
                600,
                600,
                function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }
            )->limitColors(null)->encode('webp', 0.01); // 多分最大は0.1

            Storage::disk('s3')->put($filePath, $img);
            $episode->thumbnail = Storage::disk('s3')->url($filePath);
        }

        // コンテンツ
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {

                $file = $image;
                $fileName = $image->getClientOriginalName();
                $filePath = 'app/books/' . $book->title . '/' . $episode->number . '/' . $fileName;

                $img =  \Image::make($file)->resize(
                    3200,
                    null,
                    function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    }
                )->limitColors(null)->encode('webp', 0.01); // 多分最大は0.1

                Storage::disk('s3')->put($filePath, $img);
                $imgData[] = Storage::disk('s3')->url($filePath);
            }
            $episode->contents = json_encode($imgData);
        }

        $episode->save();

        return back()->with('success', 'エピソードを更新しました！');
    }
}
