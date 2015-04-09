<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model {
    use SoftDeletes;

    protected $fillable = ['name', 'extension', 'stored_name', 'path'];

    public function owner()
    {
        return $this->morphTo();
    }
}
