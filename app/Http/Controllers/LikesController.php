<?php

namespace App\Http\Controllers;

use App\Models\Likes;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Services\MessageService;

class LikesController extends Controller
{
    protected $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

   public function likePost(Request $request, Posts $post)
    {
       try {
         $user = auth()->user();

        // Check if the user already liked the post
        $existingLike = Likes::where('user_id', $user->id)->where('posts_id', $post->id)->first();

        if ($existingLike) {
            // If the user already liked, remove the like (unlike)
            $existingLike->delete();
            $message = 'Post unliked successfully.';
        } else {
            // If the user hasn't liked, create a new like
            Likes::create([
                'user_id' => $user->id,
                'posts_id' => $post->id,
            ]);
            $message = 'Post liked successfully.';
        }
        // Jika berhasil, atur pesan dan ikon
            $message = 'Like berhasil diberikan.';
            $icon = '<i class="fa-regular fa-circle-check"></i>';
            $type = 'success';

       }  catch (\Exception $e) {
            // Jika terjadi error, atur pesan dan ikon
            $message = 'Terjadi kesalahan saat like posting.';
            $icon = '<i class="fa-regular fa-circle-xmark"></i>';
            $type = 'error';
        }
       return redirect()->back()->with(compact('message', 'icon', 'type'));
    }
}
