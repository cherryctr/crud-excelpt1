<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
<table>
<tr>
<th>No</th>
<th>Title</th>
<th>Description</th>
</tr>
@foreach ($users as $key => $item)
<tr>
<td>{{ ++$key }}</td>
<td>{{ $item->name }}</td>
<td>{{ $item->email }}</td>
</tr>
@endforeach
</table>

</body>
</html>