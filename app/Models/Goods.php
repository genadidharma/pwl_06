<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    public static function goods(){
        return Goods::orderBy('category')
            ->get();
    }
}
