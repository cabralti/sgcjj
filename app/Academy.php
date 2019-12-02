<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    protected $fillable = [
        'teacher',
        'social_name',
        'name',
        'academy_document',
        'email',
        'telephone',
        'zipcode',
        'street',
        'neighborhood',
        'city',
        'state',
        'status',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher', 'id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class, 'academy', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status', 'id');
    }

    public function setAcademyDocumentAttribute($value)
    {
        $this->attributes['academy_document'] = $this->clearField($value);
    }

    public function getAcademyDocumentAttribute($value)
    {
        return substr($value, 0, 2) . '.' . substr($value, 2, 3) . '.' . substr($value, 5, 3) . '/' . substr($value, 8, 4) . '-' . substr($value, 12, 2);
    }

    public function setTelephoneAttribute($value)
    {
        $this->attributes['telephone'] = $this->clearField($value);
    }

    public function setZipcodeAttribute($value)
    {
        $this->attributes['zipcode'] = $this->clearField($value);
    }

    public function getZipcodeAttribute($value)
    {
        return substr($value, 0, 5) . '-' . substr($value, 5, 3);
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function setEmailAttribute($value)
    {
        return strtolower(trim($value));
    }

    private function clearField(?string $param)
    {
        if (empty($param)) {
            return '';
        }

        return str_replace(['.', '-', '/', '(', ') ', ' '], '', $param);
    }
}
