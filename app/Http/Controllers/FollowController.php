<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FollowController extends Controller
{
   public function follow(User $user)
    {
        $follower = Auth::user();
        $following = $user;

        // Check if the current user is already following the given user
        if (!$follower->isFollowing($following)) {
            // If not, create a new follow relationship
            Follow::create([
                'follower_id' => $follower->id,
                'following_id' => $following->id,
            ]);

            return redirect()->back()->with('success', 'Berhasil mengikuti ' . $following->name);
        } else {
            // If already following, unfollow the user
            $follower->unfollow($following);

            return redirect()->back()->with('success', 'Berhasil berhenti mengikuti ' . $following->name);
        }
    }
}
