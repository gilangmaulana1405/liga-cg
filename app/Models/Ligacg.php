<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligacg extends Model
{
    use HasFactory;

    public $table = "ligacg";
    protected $guarded = ['id'];
}
