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