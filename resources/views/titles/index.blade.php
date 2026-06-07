<h1>項目一覧</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>項目名</th>
    </tr>

    @foreach($titles as $title)
        <tr>
            <td>{{ $title->id }}</td>

            <td>
                <a href="{{ route('records.index', $title->id) }}">
                    {{ $title->name }}
                </a>
                <a href="{{ route('records.create', $title) }}">
                 記録を追加
                </a>
            </td>
        </tr>
    @endforeach
</table>