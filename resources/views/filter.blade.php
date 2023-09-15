<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter</title>
</head>
<body>
    <div class="container">
        <table border="1px">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>score</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->score}}</td>  
            </tr>                
            @endforeach

        </table>
</body>
</html>