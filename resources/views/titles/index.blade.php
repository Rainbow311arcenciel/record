<!DOCTYPE html>
<html>
<head>
    <title>Title List</title>
</head>
<body>

<h1>項目一覧</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>項目名</th>
    </tr>

    @foreach($titles as $title)
    <tr>
        <td>{{ $title->id }}</td>
        <td>{{ $title->item_title }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>