<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batche extends Model
{
    protected $table = 'batches';
    protected $primaryKey = 'id';
    protected $fillable = ['batch_name', 'course_name', 'start_date'];
}
