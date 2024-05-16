<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // 仮データ
    protected $attributes = [
        'category_id'=> 1,
        'gender' => '1',
    ];


    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
