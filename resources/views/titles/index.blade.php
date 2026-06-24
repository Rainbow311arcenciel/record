<h1>項目一覧</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>項目名</th>
    </tr>

    @foreach($titles as $title)
        <tr>
            <td>{{ $title->id }}</td>
            <td>{{ $title->name }}</td>
        </tr>
    @endforeach
</table>

<hr>

<h2>レコード登録</h2>

<form method="POST" action="{{ route('records.store') }}">
    @csrf

    <div>
        <label>項目</label>
        <select name="title_id">
            @foreach($titles as $title)
                <option value="{{ $title->id }}">
                    {{ $title->name }}
                </option>
            @endforeach
        </select>
    </div>

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

    <button type="submit">登録</button>
</form>