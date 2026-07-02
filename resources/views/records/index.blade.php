
<h2>レコード登録</h2>

<form method="POST" action="{{ route('records.store') }}">
    @csrf

    <div>
        <label>項目</label>
        <select name="title_id">
    @foreach($titles as $title)
        <option value="{{ $title->id }}"
            {{ isset($selectedTitle) && $selectedTitle == $title->id ? 'selected' : '' }}>
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