<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Title;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        $titles = Title::all();

        return view('records.index', compact('titles'));
    }

    public function store(Request $request)
    {
        Record::create([
            'title_id' => $request->title_id,
            'date'     => $request->date,
            'amount'   => $request->amount,
            'comment'  => $request->comment,
        ]);

        return redirect()->route('records.index');
    }
}