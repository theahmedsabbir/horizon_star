@extends('backend.master')

@section('title')
    Technology
@endsection

@section('content')
@if ($data['page'] == 'index')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Manage Technology</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Technology /
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="table-wrapper table-responsive">
        <table id="datatable3" class="table display nowrap">
          <thead>
            <tr>
              <th class="text-capitalize">#</th>
              <th class="text-capitalize">Image</th>
              <th class="text-capitalize">Name</th>
              <th class="text-capitalize">Description</th>
              <th class="text-capitalize">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data['technology'] as $technology)
              <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>
                      <img src="{{ asset('/assets/technology/'.$technology->image) }}" height="80" width="80" />
                  </td>
                  <td>{{ $technology->name ?? '' }}</td>
                  <td>{!! substr($technology->description, 0, 300) ?? '' !!}</td>
                  <td>
                      <a href="{{ url('/admin/technology/edit/'.$technology->id. '/' . $technology->slug) }}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ url('/admin/technology/delete/'.$technology->id. '/' . $technology->slug) }}" onclick="return confirm('Are you sure delete this technology ?')" class="btn btn-sm btn-danger">Delete</a>
                  </td>
              </tr>
          @endforeach
          </tbody>
        </table>
      </div><!-- table-wrapper -->

    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
@endif
@if ($data['page'] == 'create')

              {{-- @dd($data['products']) --}}
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Create Technology</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/technology/manage') }}">Technology</a> / Create
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/technology/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
      				<label for="">Name</label>
      				<input type="text" name="name" value="" class="form-control" placeholder="Technology name" required>
	  				@if ($errors->has('name'))
	  					<div class="text-danger">{{ $errors->first('name') }}</div>
	  				@endif
      			</div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="description" rows="5" placeholder="Technology description"></textarea>
                    @if ($errors->has('description'))
                        <div class="text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Images</label>
                    <input type="file" name="image" value="" class="form-control" accept="images/*">
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
@endif
@if ($data['page'] == 'edit')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Edit Technology</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/technology/manage') }}">Technology</a> / Edit
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/technology/update/'.$technology->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $technology->name ?? old('name') }}" class="form-control" placeholder="Technology name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="description" placeholder="Technology description">{{ $technology->description ?? old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <div class="text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Images</label>
                    <input type="file" name="image" value="" class="form-control" accept="images/*">
                    <img src="{{ asset('/assets/technology/'.$technology->image) }}" height="100" width="100" />
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
@endif
@endsection
