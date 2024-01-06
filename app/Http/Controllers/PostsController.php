<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Services\MessageService;

class PostsController extends Controller
{

protected $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function posts(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'titles' => 'required',
            'content.*' => 'nullable|file|mimes:jpeg,png,gif,mp4|max:20480', // Sesuaikan dengan kebutuhan Anda
        ]);

        try {
            $user_id = $request->input('user_id');
            $title = $request->input('titles'); // Fix the input name to 'titles'
            
            // Initialize content as an empty array
            $content = [];

            // If there's a title, add it to the content array
            if (!empty($title)) {
                $content['titles'] = $title;
            }

            // If there are media files uploaded, move them to the public directory
            if ($request->hasFile('content')) {
                $mediaPaths = [];

                foreach ($request->file('content') as $media) {
                    $mediaPath = 'media/' . $media->getClientOriginalName(); // Save in the public directory
                    $media->move(public_path('media'), $mediaPath);
                    $mediaPaths[] = $mediaPath;
                }

                $content['media'] = $mediaPaths;
            }

            // Convert the content array to a JSON string
            $contentJson = json_encode($content);

            // Create the post with the content JSON string
            $post = Posts::create([
                'user_id' => $user_id,
                'titles' => $title, // Fix the column name to 'titles'
                'content' => $contentJson,
            ]);

            // Jika berhasil, atur pesan dan ikon
            $message = 'Posting berhasil disimpan.';
            $icon = '<i class="fa-regular fa-circle-check"></i>';
            $type = 'success';
        } catch (\Exception $e) {
            // Jika terjadi error, atur pesan dan ikon
            $message = 'Terjadi kesalahan saat menyimpan posting.';
            $icon = '<i class="fa-regular fa-circle-xmark"></i>';
            $type = 'error';
        }

        // Kembalikan ke tampilan dengan pesan, ikon, dan jenis pesan
        return redirect()->back()->with(compact('message', 'icon', 'type'));
    }

}