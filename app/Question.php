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

    public function scopeSearchKeyword($query, $search) {
        foreach (explode(' ', $search) as $keyword) {
            $query = $query->orWhereHas('keywords', function($innerQuery) use($keyword) {
                $innerQuery->where('keyword', 'like', '%'.$keyword.'%');
            });
        }
        return $query;
    }

    public function scopeSearchCategory($query, $search) {
        foreach (explode(' ', $search) as $category) {
            $query = $query->orWhereHas('categories', function($innerQuery) use($category) {
                $innerQuery->where('name', 'like', '%'.$category.'%');
            });
        }
        return $query;
    }

    public function scopeSearchQuestion($query, $search) {
       return $query->orWhere('question', 'like', '%'.$search.'%')->orWhere('answer', 'like', '%'.$search.'%');
    }

    public function scopeSearch($query, $search){
        return $query->searchKeyword($search)->searchQuestion($search)->searchCategory($search);
    }

}