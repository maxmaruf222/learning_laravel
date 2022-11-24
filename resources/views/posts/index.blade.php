@extends('layouts.app')

@section('content')

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
              <li class="breadcrumb-item active">Category table</li>
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
                          <h3 class="card-title">All Category</h3>
                        </div>
                        <a class="btn btn-sm btn-primary" href="{{ route('subCategory.create'); }}">Add SubCategory</a>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Category</th>
                                    <th>SubCategory</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $key =>$post)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $post->category->category_name }}</td>
                                        <td>{{ $post->subcategory->category_name }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{date('d F Y' , strtotime($post->post_date)) }}</td>
                                        @if ($post->status == 1)
                                             <td>Active</td> 
                                        @else
                                             <td>Inactive</td>
                                        @endif
                                        <td>
                                            <a href="" class="btn btn-sm btn-info">Edit</a>
                                            <div class="btn btn-sm">
                                                <form  action="{{ route('post.destroy', $post->id) }}" method="POST">
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

        <script>
          @if(Session::has('message'))
          toastr.options =
          {
              "closeButton" : true,
              "progressBar" : true
          }
                  toastr.success("{{ session('message') }}");
          @endif
      
          @if(Session::has('error'))
          toastr.options =
          {
              "closeButton" : true,
              "progressBar" : true
          }
                  toastr.error("{{ session('error') }}");
          @endif
      
          @if(Session::has('info'))
          toastr.options =
          {
              "closeButton" : true,
              "progressBar" : true
          }
                  toastr.info("{{ session('info') }}");
          @endif
      
          @if(Session::has('warning'))
          toastr.options =
          {
              "closeButton" : true,
              "progressBar" : true
          }
                  toastr.warning("{{ session('warning') }}");
          @endif
        </script> 
@endsection