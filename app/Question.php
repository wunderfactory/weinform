<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    protected  $fillable = ['question', 'answer',];
    protected $appends = array('searchScore');

    public function keywords()
    {
        return $this->belongsToMany('Wundership\Keyword');
    }

    public function categories()
    {
        return $this->belongsToMany('Wundership\Category');
    }

    public function getSearchScoreAttribute()
    {
        return $this->searchScore(\Session::get('faq_search', ""));
    }

    public function scopeSearchKeyword($query, $search)
    {
        foreach (explode(' ', $search) as $keyword) {
            $query = $query->orWhereHas('keywords', function($innerQuery) use($keyword) {
                $innerQuery->where('keyword', 'like', '%'.$keyword.'%');
            });
        }
        return $query;
    }

    public function scopeSearchCategory($query, $search)
    {
        foreach (explode(' ', $search) as $category) {
            $query = $query->orWhereHas('categories', function($innerQuery) use($category) {
                $innerQuery->where('name', 'like', '%'.$category.'%');
            });
        }
        return $query;
    }

    public function scopeSearchQuestion($query, $search)
    {
       return $query->orWhere('question', 'like', '%'.$search.'%')->orWhere('answer', 'like', '%'.$search.'%');
    }

    public function scopeSearch($query, $search)
    {
        \Session::set('faq_search', $search);
        return $query->searchKeyword($search)->searchQuestion($search)->searchCategory($search);
    }

    public function searchScore($search = "")
    {
        if ($search == "") return 0;
        $count = substr_count_ins($this['answer'], $search);
        $count += substr_count_ins($this['question'], $search);
        foreach($this->keywords as $keyword) {
            $count += substr_count_ins($keyword->keyword, $search);
        }
        foreach($this->categories as $category) {
            $count += substr_count_ins($category->name, $search);
        }
        return $count;
    }
}