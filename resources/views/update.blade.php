<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div>
            <hr>
            <h3>UPDATE INTO </h3>
            <hr>
            <div>
                
                <form action="{{ route('form.update', $data->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="Name">Name</label>
                      <input value="{{ $data->name }}" type="name" name="name" class="form-control" placeholder="Enter name" @error('name') is-invalid @enderror> <br>
                      <label for="Name">Email</label>
                      <input value="{{ $data->email }}" type="email" name="email" class="form-control" placeholder="Enter email" @error('email') is-invalid @enderror> <br>
                      <label for="Name">password</label>
                      <input value="{{ $data->password }}" type="" name="password" class="form-control" placeholder="Enter Password" @error('password') is-invalid @enderror>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>