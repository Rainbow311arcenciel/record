<h1>「{{ $title->name }}」のレコード一覧</h1>

<a href="{{ route('titles.index') }}">項目一覧に戻る</a>

<hr>


<h2>レコード登録</h2>

<form action="{{ route('records.store') }}" method="POST">
    @csrf

    <input type="hidden" name="title_id" value="{{ $title->id }}">

    <p>
        <label for="date">日付</label><br>
        <input type="date" id="date" name="date" required value="{{ date('Y-m-d') }}">
    </p>

    <p>
        <label for="amount">金額</label><br>
        <input type="number" id="amount" name="amount" required>
    </p>

    <p>
        <label for="comment">コメント</label><br>
        <textarea id="comment" name="comment"></textarea>
    </p>

    <button type="submit">登録</button>
</form>

<hr>

<h2>レコード一覧</h2>

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