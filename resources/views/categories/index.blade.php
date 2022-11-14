






@extends('layouts.app')

@section('content')

//this code will be run in stack

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Sub category table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">All Sub Category</h3>
                        </div>
                        <a class="btn btn-sm btn-primary" href="{{ route('category.create'); }}">Add Category</a>
                        @if (Session::has('success'))
                            <strong class="alert alert-sm alert-info">{{ Session::get('success') }}</strong>
                        @endif
                        <br>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key =>$row)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $row->category_name }}</td>
                                        <td>{{ $row->category_slug }}</td>
                                        <td>
                                            <a href="{{ route('category.edit', $row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <div class="btn btn-sm">
                                                <form  action="{{ route('category.delete', $row->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class=" btn btn-sm btn-danger" type="submit" value="Delete">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
        </div>
@endsection




















{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category index') }}</div>

                <div class="card-body">
                    <a class="btn btn-sm btn-primary" href="{{ route('category.create'); }}">Add Category</a>
                    @if (Session::has('success'))
                        <strong class="alert alert-sm alert-info">{{ Session::get('success') }}</strong>
                    @endif
                    <br>

                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key =>$row)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $row->category_name }}</td>
                                    <td>{{ $row->category_slug }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <div class="btn btn-sm">
                                            <form  action="{{ route('category.delete', $row->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input class=" btn btn-sm btn-danger" type="submit" value="Delete">
                                            </form>
                                        </div>
                                        
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
