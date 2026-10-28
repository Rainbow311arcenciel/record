<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Title;

class RecordController extends Controller
{
    public function index(Request $request, Title $title)
    {
    // 並び順を取得する（asc または desc）
        $direction = $request->query('direction', 'desc');

        // asc と desc 以外の値は desc にする
        if (!in_array($direction, ['asc', 'desc'], true)) {
            $direction = 'desc';
        }

        // 日付順にレコードを取得する（同日の場合は id 順）
        $records = $title->records()
        ->orderBy('date', $direction)
        ->orderBy('id', $direction)
        ->get();

        return view('records.index', compact(
            'title',
            'records',
            'direction'
        ));
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