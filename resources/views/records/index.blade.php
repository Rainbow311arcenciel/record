<h1>レコード登録</h1>

<form method="POST" action="{{ route('records.store') }}">
    @csrf

    <div>
        <label>項目</label>
        <select name="title_id">
            @foreach($titles as $item)
                <option value="{{ $item->id }}">
                    {{ $item->name }}
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