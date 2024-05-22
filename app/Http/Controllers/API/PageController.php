<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function leaderboard() {
        $rawData = DB::select('SELECT lpu.name AS name, SUM(lpp.total) AS total FROM laravel_pt.users lpu JOIN laravel_pt.planted_trees lpp WHERE lpu.id = lpp.uid GROUP BY lpu.name ORDER BY SUM(lpp.total) DESC');
        $this->datas = array_map(function ($data) {
            return (array) $data;
        }, $rawData);
        return $rawData;
    }

    public function removeTree() {
        $rawData = DB::select('SELECT lpu.id, lpu.name FROM laravel_pt.users lpu');
        $this->datas = array_map(function ($data) {
            return (array) $data;
        }, $rawData);
        return $rawData;
    }
}
