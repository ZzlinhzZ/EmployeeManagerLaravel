<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID',
        '社員番号',
        '氏名',
        '部署',
        '性別',
    ];
}
