<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result | page</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nmae</th>
                <th scope="col">Gender</th>
                <th scope="col">Group</th>
                <th scope="col">Status</th>
                <th scope="col">Create Date</th>
                <th scope="col">Update Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $row)
              <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->gender }}</td>
                <td>{{ $row->group }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
              </tr>
              @endforeach
              
              
            </tbody>
        </table>
        {{ $students->links('pagination::bootstrap-5') }}
    </div>
</body>
</html>

