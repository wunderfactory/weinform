<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    protected  $fillable = ['question', 'answer',];

    public function keywords()
    {
        return $this->belongsToMany('Wundership\Keyword');
    }

    public function categories()
    {
        return $this->belongsToMany('Wundership\Category');
    }
}