<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Title;

class RecordController extends Controller
{
    public function index(Title $title)
    {
        $records = $title->records()->orderBy('date', 'desc')->get();
        return view('records.index', compact('title', 'records'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_id' => 'required|exists:titles,id',
            'date' => 'required|date',
            'amount' => 'required|integer',
            'comment' => 'nullable|string',
        ]);

        Record::create([
            'title_id' => $request->title_id,
            'date' => $request->date,
            'amount' => $request->amount,
            'comment' => $request->comment,
        ]);

        return redirect()->route('records.index', $request->title_id);
    }
}