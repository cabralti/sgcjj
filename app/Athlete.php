<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    protected $fillable = [
        'academy',
        'name',
        'date_of_birth',
        'sex',
        'document',
        'document_secondary',
        'cell',
        'email',
        'zipcode',
        'street',
        'neighborhood',
        'city',
        'state',
        'band',
        'status'
    ];

    public function academy()
    {
        return $this->belongsTo(Academy::class, 'academy', 'id');
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $this->convertStringToDate($value);
    }

    public function getDateOfBirthAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function setDocumentAttribute($value)
    {
        $this->attributes['document'] = $this->clearField($value);
    }

    public function setCellAttribute($value)
    {
        $this->attributes['cell'] = $this->clearField($value);
    }

    public function getCellAttribute($value)
    {
        return "(" . substr($value, 0, 2) . ") " . substr($value, 2, 5) . "-" . substr($value, 7, 4);
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function convertStringToDate(?string $param)
    {
        if (empty($param)) {
            return null;
        }
        list($day, $month, $year) = explode('/', $param);
        return (new \DateTime($year . '-' . $month . '-' . $day))->format('Y-m-d');
    }

    public function clearField(?string $param)
    {
        if (empty($param)) {
            return '';
        }

        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}