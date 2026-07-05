<h1>「{{ $title->name }}」のレコード一覧</h1>

<a href="{{ route('titles.index') }}">項目一覧に戻る</a>

<hr>

<table border="1">
    <thead>
        <tr>
            <th>日付</th>
            <th>金額</th>
            <th>コメント</th>
        </tr>
    </thead>
    <tbody>
        @forelse($records as $record)
            <tr>
                <td>{{ $record->date }}</td>
                <td>{{ number_format($record->amount) }} 円</td>
                <td>{{ $record->comment }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">レコードがありません。</td>
            </tr>
        @endforelse
    </tbody>
</table>

<hr>

<h2>レコード登録</h2>

<form method="POST" action="{{ route('records.store') }}">
    @csrf

    <input type="hidden" name="title_id" value="{{ $title->id }}">

    <div>
        <label>日付</label>
        <input type="date" name="date" required value="{{ date('Y-m-d') }}">
    </div>

    <div>
        <label>金額</label>
        <input type="number" name="amount" required>
    </div>

    <div>
        <label>コメント</label>
        <textarea name="comment"></textarea>
    </div>

    <button type="submit">登録</button>
</form>