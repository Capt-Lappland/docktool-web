<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function index(): array
    {
        return DB::select('SELECT * FROM `dock-info` ORDER BY id DESC LIMIT 20;');
    }
}
