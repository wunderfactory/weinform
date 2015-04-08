<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class File extends Model {

    protected $fillable = ['name', 'extension', 'stored_name', 'path'];

    public static function file (UploadedFile $file, $owner)
    {
        $newFile = File::create([
            'name'          => $file->getClientOriginalName(),
            'extension'     => $file->getClientOriginalExtension(),
            'stored_name'   => str_random(64).'.'.$file->getClientOriginalExtension(),
            'path'          => 'app/profile_pictures',
        ]);
        $newFile->owner()->associate($owner);
        $newFile->save();
        $file->move(storage_path($newFile->path), $newFile->stored_name);
        return $newFile;
    }

    public function owner()
    {
        return $this->morphTo();
    }

    public function fullPath(){
        return storage_path($this->path.'/'.$this->stored_name);
    }
}
