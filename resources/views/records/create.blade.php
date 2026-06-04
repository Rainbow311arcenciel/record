<form action="{{ route('records.store', $title) }}" method="POST">
    @csrf

    <div>
        <label for="date">日付</label>
        <input
            type="date"
            id="date"
            name="date"
            value="{{ old('date') }}"
        >
    </div>

    <div>
        <label for="amount">金額</label>
        <input
            type="number"
            id="amount"
            name="amount"
            value="{{ old('amount') }}"
        >
    </div>

    <div>
        <label for="comment">コメント</label>
        <textarea
            id="comment"
            name="comment"
        >{{ old('comment') }}</textarea>
    </div>

    <button type="submit">登録</button>
</form>