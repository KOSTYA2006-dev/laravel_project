<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articals extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'fio',
        'artical_name',
        'artical_description',
        'topic',
        'previu_img',
        'colledj',
        

    ];
}
