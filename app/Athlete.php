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
        'status',
        'responsible_name',
        'responsible_document_secondary',
        'responsible_cell',
        'responsible_email'
    ];

    public function academy()
    {
        return $this->belongsTo(Academy::class, 'academy', 'id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class, 'athlete', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status', 'id');
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

    public function setResponsibleCellAttribute($value)
    {
        $this->attributes['responsible_cell'] = $this->clearField($value);
    }

    public function getResponsibleCellAttribute($value)
    {
        return "(" . substr($value, 0, 2) . ") " . substr($value, 2, 5) . "-" . substr($value, 7, 4);
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
