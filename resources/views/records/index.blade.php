<!DOCTYPE html>
<html>
<head>
    <title>Record List</title>
</head>
<body>

<h1>家計簿一覧</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>日付</th>
        <th>項目</th>
        <th>金額</th>
        <th>コメント</th>
    </tr>

    @foreach($records as $record)
    <tr>
        <td>{{ $record->id }}</td>
        <td>{{ $record->date }}</td>
        <td>{{ $record->title }}</td>
        <td>{{ $record->amount }}</td>
        <td>{{ $record->comment }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>