<!doctype html>
<html lang="en">
<head>
  <title>RESULT_PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div>
        <hr>
        <h3>INSERT INTO </h3>
        <hr>
        <div>
            <form action="{{ route('add.store') }}" method="POST">
                @csrf
                @if (session()->has('success'))
                    <strong class="text-success">{{ session()->get('success') }}</strong>
                @endif
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="name" name="name" class="form-control" placeholder="Enter name" @error('name') is-invalid @enderror> <br>
                  <input type="email" name="email" class="form-control" placeholder="Enter email" @error('email') is-invalid @enderror> <br>
                  <input type="password" name="password" class="form-control" placeholder="Enter Password" @error('email') is-invalid @enderror>
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div>
        <hr>
        <h3>SELECT FROM ALL FROM USER</h3>
        <hr>
        @if (session()->has('row_success'))
                    <strong class="text-success">{{ session()->get('row_success') }}</strong>
        @endif
        <div>
            @foreach ($users as $key=> $item)
            <hr>
            <p>id: {{$item->id}}</p>
            <p>Name: {{$item->name}}</p>
            <p>Email: {{$item->email}}</p>
            <p>Password: {{$item->password}}</p>
            

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger">
                    <form action="{{ route('form.delete',$item->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </button>
                <button type="button" class="btn btn-primary">
                    <form action="{{ route('form.edit',$item->id) }}" method="POST">
                        @csrf
                        <input class="btn btn-primary" type="submit" value="Edit">
                    </form>
                </button>
              </div>
            @endforeach
        </div><hr>
    </div>





    {{-- <div>
        <hr>
        <h3>Result title</h3>
        <hr>
        <div>
            result hare
        </div>
    </div> --}}
</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>
</html>