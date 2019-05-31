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

    public function getDocumentAttribute($value)
    {
        return substr($value, 0, 2) . '.' . substr($value, 2, 3) . '.' . substr($value, 5, 3) . '/0001-' . substr($value, 12, 2);
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

    public function setTeacherDocumentAttribute($value)
    {
        $this->attributes['teacher_document'] = $this->clearField($value);
    }

    public function getTeacherDocumentAttribute($value)
    {
        return substr($value, 0, 3) . '.' . substr($value, 3, 3) . '.' . substr($value, 6, 3) . '-' . substr($value, 9, 2);
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

        return str_replace(['.', '-', '/', '(', ') ', ' '], '', $param);
    }
}
