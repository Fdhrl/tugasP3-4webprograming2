<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 

class Anggota extends Model
{
    public $timestamps = true; 
    protected $table = "Anggota"; 
    protected $guarded = ['id']; 
}
