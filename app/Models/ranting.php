<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ranting extends Model
{
    use HasFactory;
    protected $table = 'ranting';
    protected $tanggal_lahir = ['date'];
    public $timestamps = false;
}
