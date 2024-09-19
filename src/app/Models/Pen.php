<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pen extends Model
{
    use HasFactory;

    // $guardedプロパティ⇒指定したカラムに対して書換を不可能にする
    // ブラックリスト
    protected $guarded = [
        'id'
    ];

    // $fillableプロパティ⇒指定したカラムに対して書換を可能にする
    // ホワイトリスト
    protected $fillable = [
        'uuid', 'name', 'price'
    ];
}
