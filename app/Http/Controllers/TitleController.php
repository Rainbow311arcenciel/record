<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    public function index(Request $request)
    {
        $titles = Title::all();
        $selectedTitle = $request->title_id;

        return view('titles.index', compact('titles', 'selectedTitle'));
    }
}