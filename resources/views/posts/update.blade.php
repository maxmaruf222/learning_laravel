@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            @if (Session::has('success'))
                <strong class="alert alert-info">{{ Session::get('success') }}</strong>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Add Post') }}</div>
                <div class="card-body">
                    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="Category">Category</label>
                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" >
                                @foreach ($category as $row)
                                @if ($row->id == $post->category_id)
                                   <option selected value="{{ $row->id }}">{{ $row->category_name }}</option>
                                @endif
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="SubCategory">SubCategory</label>
                            <select class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id" >
                            @foreach ($subcategory as $row)
                              @if ($row->id == $post->category_id)
                                 <option selected value="{{ $row->id }}">{{ $row->category_name }}</option>
                              @endif
                            @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="postTitle">Post Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" >
                          </div>
                          <div class="form-group">
                            <label for="postDescription">Post Description</label>
                            <textarea id="summernote" class="form-control @error('description') is-invalid @enderror" name="description" cols="30" rows="5"  >{{ $post->description }}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="postTags">Post Tags</label>
                            <input type="text" class="form-control @error('tags') is-invalid @enderror" name="tags" value="{{ $post->tags }}" >
                          </div>
                          <div class="form-group">
                            <label for="postData">Post Date</label>
                            <input type="date" class="form-control @error('post_date') is-invalid @enderror" name="post_date" value="{{ $post->post_date }}" >
                          </div>
                          <div class="form-group">
                            <label for="ProductInputFile">File input</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="hidden" value="{{ $post->img }}" name="old_img" >
                                <input type="file" class="custom-file-input @error('img') is-invalid @enderror" id="ProductInputFile" name="img" >
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div>
                            </div>
                          </div>
                          <div class="form-check">
                            <input name="status" value="1" type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">Publish Now</label>
                          </div>
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
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
