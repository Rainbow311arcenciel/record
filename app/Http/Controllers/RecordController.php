<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

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

    public function create(Title $title)
    {
        return view('records.create', compact('title'));
    }

    public function store(Request $request, Title $title)
    {
        $validated = $request->validate([
            'date' => ['required', 'date'],
            'amount' => ['required', 'integer'],
            'comment' => ['nullable', 'string', 'max:255'],
        ]);

        // 保存処理

        return redirect()->route('records.index', $title);
    }
}