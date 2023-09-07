<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HumanResourceModel extends Model
{
    use HasFactory;
    protected $table = 'humanresource_table';
    protected $guarded = array();
}
