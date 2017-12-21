<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
	
	use Sluggable;
	
	/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','slug','content','user_id'];
	
	/**
	*
	* The Eloquent User model namespace
	*
	* @var string
	*
	*/
	protected static $userModel = 'App\Models\Post';
	
	/**
	*
	* Returns the user relationship
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*
	*/
	public function user()
	{
		return $this->belongsTo(static::$userModel, 'user_id');
	}
	
	/**
	* Save Post
	*
	* @param array $post
	* @return object
	*
	*/
	
	public function savePost($post)
	{
		return $this->fill($post)->save();
	}
	
	/**
	* Update Post
	*
	* @param array $post
	* @return object
	*
	*/
	
	public function updatePost($post)
	{
		return $this->update($post);
	}
	
}
