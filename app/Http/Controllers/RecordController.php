<?php

namespace App\Http\Controllers;

use App\Models\Title;

class RecordController extends Controller
{
    public function index(Title $title)
    {
        $records = $title->records;

        return view('records.index', compact(
            'title',
            'records'
        ));
    }
}