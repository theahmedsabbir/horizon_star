@extends('backend.master')

@section('title')
    Solution
@endsection

@section('content')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Manage Solution</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Solution /
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/solution/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
                <input type="hidden" name="id" value="{{ $solutionUpdate->id ?? ' ' }}">
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="title" rows="5" placeholder="About description">{{ $solutionUpdate->title ? $solutionUpdate->title : old('description')}}</textarea>
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
