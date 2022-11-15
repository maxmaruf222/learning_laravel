@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a class="btn btn-small btn-primary" href="{{ route('subCategory.index') }}">all category</a>
                    <form method="POST" action="{{ route('subCategory.update', $data->id ) }}">
                        @csrf
                       <div class="form-group">
                          <label for="exampleInputName">Category Name</label>
                          <input disabled type="name" class="form-control aria-describedby="nameHelp" value="{{ $data->Category->category_name }}">
                          <label for="exampleInputName">Sub Category Name</label>
                          <input name="category_name" type="name" class="form-control @error('category_name') is-invalid @enderror " aria-describedby="nameHelp" value="{{ $data->category_name }}">
                        @error('category_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div><br>
                        <button type="submit" class="btn btn-primary">Update Now</button>
                      </form>
                </div>
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
