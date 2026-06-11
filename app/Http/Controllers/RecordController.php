<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
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

        return redirect('/titles');
    }
}