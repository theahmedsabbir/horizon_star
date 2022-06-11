@extends('backend.master')

@section('title')
    Mission & Vision
@endsection

@section('content')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Manage Mission & Vision</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Mission & Vision /
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/mission/vision/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
                <input type="hidden" name="id" value="{{ $missionVision->id ?? ' ' }}">
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="description" rows="5" placeholder="Mission and Vision description">{{ $missionVision->description ?? old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <div class="text-danger">{{ $errors->first('description') }}</div>
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
