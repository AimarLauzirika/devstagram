<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    //
    public function store(User $user)
    {
            // dd($user->id); //seguido
            // dd(auth()->user()->username); //seguidor


            Follower::create([
                'user_id' => $user->id,
                'follower_id' => auth()->user()->id,
            ]);
            // $follow = new Follower();
            // $follow->user_id = $user->user_id;
            // $follow->follower_id = auth()->user()->user_id;

            // $follow->save();

            return back();
    }

    public function destroy(User $user)
    {
        // dd('user_id: '.$user->id );
        Follower::where([['user_id', '=', $user->id], ['follower_id', '=', auth()->user()->id]])->delete();

        return back();
    }
}
