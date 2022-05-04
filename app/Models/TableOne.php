<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableOne extends Model
{
    use HasFactory;

    protected $table = "tbl1";
}
