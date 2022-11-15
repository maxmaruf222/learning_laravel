<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relationship</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <br><br>
    <div class="table-responsive">
        <h2 class="bg-info">Result from hasTo</h2>
        <table class="table table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th>Category</th>
                    <th>Sub Category</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr class="table-primary" >
                        <td>{{ $data->category_name }}</td>
                        <td>{{ $data->subCategory->category_name }}</td>
                    </tr>
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>
</div>
</body>
</html>