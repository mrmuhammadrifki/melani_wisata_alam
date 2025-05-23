<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['name', 'email', 'phone', 'message'];

}