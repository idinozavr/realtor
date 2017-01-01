<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function getLastNews()
    {
        $news = $this->latest('views')->published()->get();
        return $news;
    }

    public function scopePublished($query)
    {
        $query->where('published', '=', true)
            ->where('created_at','<=',Carbon::now());
    }
    public function scopeUnPublished($query)
    {
        $query->where('published', '=', false)
            ->orWhere('created_at','>',Carbon::now());
    }




}
