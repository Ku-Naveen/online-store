<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public static function getuserData(){
        $value = DB::table('users')->orderBy('id', 'asc')->get();
        return $value;
    }
}
