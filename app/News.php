<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table ="news";
    protected $fillable = ['title', 'alias', 'previev', 'content','published_at'];
    public function getRouteKeyName()
    {
        return 'alias';
    }

}
