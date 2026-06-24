<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Title;

class RecordController extends Controller
{
    public function index()
    {
        $titles = Title::all();

        return view('records.index', compact('titles'));
    }

    public function create($title)
    {
        return view('records.create', compact('title'));
    }

    public function store(Request $request, $title)
    {
        $validated = $request->validate([
            'date' => ['required', 'date'],
            'amount' => ['required', 'integer'],
            'comment' => ['nullable', 'string', 'max:255'],
        ]);

        // 保存処理
        // Record::create([...]);

        return redirect()->route('records.index', $title);
    }
}
