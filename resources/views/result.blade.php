<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result.blade.php</title>
</head>
<body>
    <h1>This is result page</h1><hr>

    <p>Cookie</p>
    <h2>Name: {{ Cookie::get('name', 'default')}}</h2><hr>

    <p>session</p>
    <h1>Name: {{ session()->get('name', 'default')}}</h1>

</body>
</html>