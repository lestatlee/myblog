<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//
    protected $dates = [
        'published_at'
    ];
    protected $fillable = array(
        'title',
        'intro',
        'content'
    );
}