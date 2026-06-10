<h1>{{ $title->name }}一覧</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>金額</th>
        <th>メモ</th>
    </tr>

    @foreach($records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->amount }}</td>
            <td>{{ $record->memo }}</td>
        </tr>
    @endforeach
</table>
<h1>記録登録</h1>

<form action="{{ route('records.store', $title) }}" method="POST">
    @csrf

    <div>
        <label>日付</label>
        <input type="date" name="date">
    </div>

    <div>
        <label>金額</label>
        <input type="number" name="amount">
    </div>

    <div>
        <label>コメント</label>
        <textarea name="comment"></textarea>
    </div>

    <button type="submit">
        登録
    </button>
</form>