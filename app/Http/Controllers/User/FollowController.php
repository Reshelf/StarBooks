<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// メール
use Illuminate\Support\Facades\Mail;
use App\Mail\user\NewFollowedUserMail;

use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
    }

    /*
    |--------------------------------------------------------------------------
    | フォローする
    |--------------------------------------------------------------------------
    */
    public function __invoke($lang, Request $request, string $username)
    {
        $user = User::where(['username' => $username])->first();

        if ($user->id === $request->user()->id) {
            return abort('404', 'Cannot follow yourself.');
        }

        $request->user()->followings()->detach($user);
        $request->user()->followings()->attach($user);

        // フォローされたらメール通知を送る
        if ($user->m_notice_2 === 1) {
            $email = $user->email;

            $mailData = [
                'send_user' => $request->user(),
                'received_user' => $user,
            ];
            Mail::send(new NewFollowedUserMail($mailData));
        }


        return ['username' => $username];
    }
}
