<?php

namespace App\Http\Controllers;

use App\Models\Pen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenController extends Controller
{
    // Eloquentはモデルの制約を受ける
    public function fillPen()
    {
        $pen = new Pen();
        $uuid = (string)Str::uuid();
        $pen->fill([
            'id' =>20,
            'uuid' => $uuid,
            'name' => 'FillPen',
            'price' => 1500,
        ]);
        $pen->save();
    }

    // Eloquentはモデルの制約を受ける
    // 記述量が少ないので利用されることが多い
    public function createPen()
    {
        $uuid = (string)Str::uuid();
        Pen::create([
            'id' =>20,
            'uuid' => $uuid,
            'name' => 'CreatePen',
            'price' => 1200,
        ]);
    }

    // insertメソッドでは、$guardedと$fillableのプロパティの制約が適用されない
    // 複数代入から保護されていない
    public function insertPen()
    {
        $pen = new Pen();
        $uuid = (string)Str::uuid();
        $pen->insert([
            'id' =>20,
            'uuid' => $uuid,
            'name' => 'InsertPen',
            'price' => 1800,
        ]);
    }
}
