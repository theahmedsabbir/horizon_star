@extends('backend.master')

@section('title')
    Service
@endsection

@section('content')
@if ($data['page'] == 'index')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Manage Service</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Service /
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
          @foreach($data['services'] as $service)
              <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>
                      <img src="{{ asset('/assets/service/'.$service->image) }}" height="80" width="80" />
                  </td>
                  <td>{{ $service->name ?? '' }}</td>
                  <td>{!! substr($service->description, 0, 500) ?? '' !!}</td>
                  <td>
                      <a href="{{ url('/admin/service/edit/'.$service->id. '/' . $service->slug) }}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ url('/admin/service/delete/'.$service->id. '/' . $service->slug) }}" onclick="return confirm('Are you sure delete this service ?')" class="btn btn-sm btn-danger">Delete</a>
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
	  <h4>Create Service</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/service/manage') }}">Service</a> / Create
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/service/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
      				<label for="">Name</label>
      				<input type="text" name="name" value="" class="form-control" placeholder="Service name" required>
	  				@if ($errors->has('name'))
	  					<div class="text-danger">{{ $errors->first('name') }}</div>
	  				@endif
      			</div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="description" rows="5" placeholder="Service description"></textarea>
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
	  <h4>Edit Service</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/service/manage') }}">Service</a> / Edit
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/service/update/'.$service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $service->name ?? old('name') }}" class="form-control" placeholder="Product name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="description" placeholder="Service description">{{ $service->description ?? old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <div class="text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Images</label>
                    <input type="file" name="image" value="" class="form-control" accept="images/*">
                    <img src="{{ asset('/assets/service/'.$service->image) }}" height="100" width="100" />
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
