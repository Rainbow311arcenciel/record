<h1>レコード登録</h1>

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
