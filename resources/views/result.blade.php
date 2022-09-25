<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result.blade.php</title>
</head>
<body>
    {{-- how to use componnet? --}}
    {{-- must be needed : --}}
    < x-exmple.Header :name="$Cname" />
    <h1>{{$number['a']}}</h1> 

 <!-- using view -->
 {{-- <h1> Developer name: {{ $name }}</h1> --}}
    
</body>
</html>