@extends('backend.master')

@section('title')
    Expert
@endsection

@section('content')
@if ($data['page'] == 'index')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Manage Expert</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Expert /
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
              <th class="text-capitalize">Position</th>
              <th class="text-capitalize">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data['experts'] as $expert)
              <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>
                      <img src="{{ asset('/assets/expert/'.$expert->image) }}" height="80" width="80" />
                  </td>
                  <td>{{ $expert->name ?? ' ' }}</td>
                  <td>{{ $expert->position ?? ' ' }}</td>
                  <td>
                      <a href="{{ url('/admin/expert/edit/'.$expert->id) }}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ url('/admin/expert/delete/'.$expert->id) }}" onclick="return confirm('Are you sure delete this expert ?')" class="btn btn-sm btn-danger">Delete</a>
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
	  <h4>Create Expert</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/expert/manage') }}">Expert</a> / Create
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/expert/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
      				<label for="">Name</label>
      				<input type="text" name="name" value="" class="form-control" placeholder="Position name" required>
	  				@if ($errors->has('name'))
	  					<div class="text-danger">{{ $errors->first('name') }}</div>
	  				@endif
      			</div>
                <div class="form-group">
                    <label for="">Position</label>
                    <input type="text" name="position" value="" class="form-control" placeholder="Position..." required>
                    @if ($errors->has('position'))
                        <div class="text-danger">{{ $errors->first('position') }}</div>
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
	  <h4>Edit Expert</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/expert/manage') }}">Expert</a> / Edit
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/expert/update/'.$expert->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $expert->name ?? old('name') }}" class="form-control" placeholder="Position name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Position</label>
                    <input type="text" name="position" value="{{ $expert->position ?? old('position') }}" class="form-control" placeholder="Position..." required>
                    @if ($errors->has('position'))
                        <div class="text-danger">{{ $errors->first('position') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Images</label>
                    <input type="file" name="image" value="" class="form-control" accept="images/*">
                    <img src="{{ asset('/assets/expert/'.$expert->image) }}" height="100" width="100" />
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
