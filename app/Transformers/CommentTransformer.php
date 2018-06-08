<?php

namespace App\Transformers;

use App\Models\Comment;
use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract
{
	public function transform(Comment $comment)
	{
		return [
			'id' => $comment->id,
			'user_id' => (int)$comment->user_id,
			'article_id' => (int)$comment->article_id,
			'content' => $comment->content,
			'created_at' => $comment->created_at->toDateTimeString(),
			'updated_at' => $comment->updated_at->toDateTimeString(),
		];
	}
}