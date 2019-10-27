<?php

namespace App;

use App\Support\Cropper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    protected $fillable = [
        'academy',
        'athlete',
        'type_document',
        'name',
        'path'
    ];

    public function getUrlCroppedAttribute()
    {
        return Storage::url(Cropper::thumb($this->path, 1366, 768));
    }

    public function typeDocuments()
    {
        return $this->belongsTo(TypeDocument::class, 'type_document', 'id');
    }
}
