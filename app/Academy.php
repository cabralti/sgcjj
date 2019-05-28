<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    protected $fillable = [
        'social_name',
        'name',
        'document',
        'email',
        'telephone',
        'zipcode',
        'street',
        'neighborhood',
        'city',
        'state',
        'teacher_name',
        'teacher_band',
        'teacher_document',
        'teacher_document_secondary',
        'teacher_cell',
        'teacher_email'
    ];

    public function setDocumentAttribute($value)
    {
        $this->attributes['document'] = $this->clearField($value);
    }

    public function setTelephoneAttribute($value)
    {
        $this->attributes['telephone'] = $this->clearField($value);
    }

    public function setZipcodeAttribute($value)
    {
        $this->attributes['zipcode'] = $this->clearField($value);
    }

    public function setTeacherDocumentAttribute($value)
    {
        $this->attributes['teacher_document'] = $this->clearField($value);
    }

    public function setTeacherCellAttribute($value)
    {
        $this->attributes['teacher_cell'] = $this->clearField($value);
    }

    private function clearField(?string $param)
    {
        if (empty($param)) {
            return '';
        }

        return (string)str_replace(['.', '-', '/', '(', ') ', ' '], '', $param);
    }
}
