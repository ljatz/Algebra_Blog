<?php

namespace App\Services;

use Sentinel;
use App\Models\Post;

class Posts 
{
	public function countPosts() {
		$posts = Post::where('user_id', Sentinel::getUser()->id)->count();
		
		return $posts;
	}
}