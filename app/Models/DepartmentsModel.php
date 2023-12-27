<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentsModel extends Model
{
    use HasFactory;
    protected $table = 'departments_table';
    protected $guarded = array();
}
