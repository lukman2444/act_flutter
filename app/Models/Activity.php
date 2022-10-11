<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = "act";
    protected $fillable = ["nik", "fullname", "subdivisi", "location", "target", "date_visit", "stk_numbers", "data_gambar" ];
}
