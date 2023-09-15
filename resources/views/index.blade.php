<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    <div class="container">
        <table border="1px">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Skor</th>
                <th>action</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>
                    <a href="{{route('show', $student -> id)}}"> {{$student->name}}</a>
                </td>
                <td>{{$student->score}}</td>  
            <td>
                <form action="{{ route('edit', $student)}}" method="get">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
                <form action="{{ route('delete', $student)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
            </tr>                
            @endforeach

        </table>
        Current page: {{ $students->currentPage()}} <br>
        Total Halaman: {{$students->total()}}<br>
        Data Per Halaman: {{$students->perPage()}}

        {{$students->links('pagination::bootstrap-4')}}
    </div>
</body>
</html>