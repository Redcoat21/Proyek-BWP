<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTaken extends Model
{
    use HasFactory;

    protected $primaryKey = ['username', 'course'];
    protected $keyType = ['string', 'int'];

}
