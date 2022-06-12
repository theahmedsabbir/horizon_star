@extends('backend.master')

@section('title')
    About
@endsection

@section('content')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Manage About</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ About /
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/about/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
                <input type="hidden" name="id" value="{{ $aboutUpdate->id ?? ' ' }}">
                <div class="form-group">
                    <label for="">Heading</label>
                    <input type="text" name="heading" class="form-control" value="{{ $aboutUpdate->heading ? $aboutUpdate->heading : old('heading') }}">
                    @if ($errors->has('heading'))
                        <div class="text-danger">{{ $errors->first('heading') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $aboutUpdate->title ? $aboutUpdate->title : old('title') }}">
                    @if ($errors->has('title'))
                        <div class="text-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="description" rows="5" placeholder="About description">{{ $aboutUpdate->description ? $aboutUpdate->description : old('description')}}</textarea>
                    @if ($errors->has('description'))
                        <div class="text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Image Content</label>
                    <input type="text" name="image_content" class="form-control" value="{{ $aboutUpdate->image_content ? $aboutUpdate->image_content : old('image_content') }}">
                    @if ($errors->has('image_content'))
                        <div class="text-danger">{{ $errors->first('image_content') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control"/>
                    @if(!empty($aboutUpdate->image))
                        <img src="{{ asset('/assets/about/'.$aboutUpdate->image) }}" />
                    @endif
                    @if ($errors->has('image'))
                        <div class="text-danger">{{ $errors->first('image') }}</div>
                    @endif
                </div>
      			<div class="form-group">
      				<button type="submit" class="btn btn-teal mt-3">Submit</button>
      			</div>
      		</form>
      	</div>
      </div>
	</div>
    <!-- br-section-wrapper -->
</div>
@endsection
