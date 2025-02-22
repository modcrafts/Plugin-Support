<?php

namespace Azuriom\Plugin\Support\Controllers\Admin;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Http\Requests\AttachmentRequest;
use Azuriom\Plugin\Support\Models\Comment;

class CommentAttachmentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Azuriom\Http\Requests\AttachmentRequest  $request
     * @param  string  $pendingId
     * @return \Illuminate\Http\Response
     */
    public function pending(AttachmentRequest $request, string $pendingId)
    {
        $imageUrl = Comment::storePendingAttachment($pendingId, $request->file('file'));

        return response()->json(['location' => $imageUrl]);
    }
}
