<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model {

    protected  $fillable = ['keyword'];

    /**
     * Finds a keyword by its keyword or creates a new one
     * @param $keyword
     * @return Keyword
     */
    public static function findOrCreate($keyword) {
        $keyword = strtolower($keyword);
        if ($keywordObject = Keyword::where('keyword', $keyword)->first()) {
            return $keywordObject;
        }
        return Keyword::create(['keyword' => $keyword]);
    }

    public function questions()
    {
        return $this->belongsToMany('Wundership\Question');
    }

}
