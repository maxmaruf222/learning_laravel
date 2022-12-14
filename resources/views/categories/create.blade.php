@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('success'))
                <strong class="alert alert-info">{{ Session::get('success') }}</strong>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a class="btn btn-sm btn-primary" href="{{ route('category.index'); }}">Return to all Category</a>
                    <br>
                    <form method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName">Category Name</label>
                          <input name="category_name" type="name" class="form-control @error('category_name') is-invalid @enderror " aria-describedby="nameHelp" placeholder="Name">
                        @error('category_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        </div><br>
                        <button type="submit" class="btn btn-primary">Add new</button>
                      </form>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
