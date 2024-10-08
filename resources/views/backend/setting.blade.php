@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Post</h5>
    <div class="card-body">
    <form method="post" action="{{route('settings.update')}}">
        @csrf 
        {{-- @method('PATCH') --}}
        {{-- {{dd($data)}} --}}
<<<<<<< HEAD
        
        <div class="form-group">
          <label for="short_des" class="col-form-label">Short Description <span class="text-danger">*</span></label>
          <textarea class="form-control" id="quote" name="short_des">
        {{ isset($data->short_des) ? $data->short_des : '' }}
        </textarea>
=======
        <div class="form-group">
          <label for="short_des" class="col-form-label">Short Description <span class="text-danger">*</span></label>
          <textarea class="form-control" id="quote" name="short_des">{{$data->short_des}}</textarea>
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
          @error('short_des')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
<<<<<<< HEAD

        <div class="form-group">
          <label for="description" class="col-form-label">Description <span class="text-danger">*</span></label>
          <textarea class="form-control" id="description" name="description">{{ isset($data->description) ? $data->description : '' }}</textarea>
=======
        <div class="form-group">
          <label for="description" class="col-form-label">Description <span class="text-danger">*</span></label>
          <textarea class="form-control" id="description" name="description">{{$data->description}}</textarea>
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Logo <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
<<<<<<< HEAD
          <input id="thumbnail1" class="form-control" type="text" name="logo" value="{{ isset($data->logo) ? $data->logo : '' }}">
=======
          <input id="thumbnail1" class="form-control" type="text" name="logo" value="{{$data->logo}}">
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
        </div>
        <div id="holder1" style="margin-top:15px;max-height:100px;"></div>

          @error('logo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
<<<<<<< HEAD
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{ isset($data->photo) ? $data->photo : '' }}">
=======
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$data->photo}}">
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="address" class="col-form-label">Address <span class="text-danger">*</span></label>
<<<<<<< HEAD
          <input type="text" class="form-control" name="address" required value="{{ isset($data->address) ? $data->address : '' }}">
=======
          <input type="text" class="form-control" name="address" required value="{{$data->address}}">
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
          @error('address')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
<<<<<<< HEAD

        <div class="form-group">
          <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
          <input type="email" class="form-control" name="email" required value="{{ isset($data->email) ? $data->email : '' }}">
=======
        <div class="form-group">
          <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
          <input type="email" class="form-control" name="email" required value="{{$data->email}}">
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
          @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
<<<<<<< HEAD

        <div class="form-group">
          <label for="phone" class="col-form-label">Phone Number <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="phone" required value="{{ isset($data->phone) ? $data->phone : '' }}">
=======
        <div class="form-group">
          <label for="phone" class="col-form-label">Phone Number <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="phone" required value="{{$data->phone}}">
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
          @error('phone')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<<<<<<< HEAD
@endpush

=======

@endpush
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');
<<<<<<< HEAD

    $(document).ready(function() {
      $('#summary').summernote({
        placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
      });
=======
    $(document).ready(function() {
    $('#summary').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
    });

    $(document).ready(function() {
      $('#quote').summernote({
        placeholder: "Write short Quote.....",
<<<<<<< HEAD
        tabsize: 2,
        height: 100
      });
    });

    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Write detailed description.....",
        tabsize: 2,
        height: 150
=======
          tabsize: 2,
          height: 100
      });
    });
    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Write detail description.....",
          tabsize: 2,
          height: 150
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
      });
    });
</script>
@endpush