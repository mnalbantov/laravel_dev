<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $primaryKey = 'article_id';

    protected $fillable  = ['article_id','name','short_description','article_body','user_id','published_at'];
    public  $timestamps = false;
    /**
     * The article belongs to some user in our application
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {

        return $this->belongsTo('App\User');
    }
}
