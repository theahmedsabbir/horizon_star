@extends('backend.master')

@section('title')
    Career
@endsection

@section('content')
@if ($data['page'] == 'index')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Manage Career</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Career /
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
          @foreach($data['careers'] as $career)
              <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>
                      <img src="{{ asset('/assets/career/'.$career->image) }}" height="80" width="80" />
                  </td>
                  <td>{{ $career->name ?? '' }}</td>
                  <td>{!! substr($career->description, 0, 300) ?? '' !!}</td>
                  <td>
                      <a href="{{ url('/admin/career/edit/'.$career->id. '/' . $career->slug) }}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ url('/admin/career/delete/'.$career->id. '/' . $career->slug) }}" onclick="return confirm('Are you sure delete this career ?')" class="btn btn-sm btn-danger">Delete</a>
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
	  <h4>Create Career</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/career/manage') }}">Career</a> / Create
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/career/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
      				<label for="">Name</label>
      				<input type="text" name="name" value="" class="form-control" placeholder="Career name" required>
	  				@if ($errors->has('name'))
	  					<div class="text-danger">{{ $errors->first('name') }}</div>
	  				@endif
      			</div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="description" rows="5" placeholder="Career description"></textarea>
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
	  <h4>Edit Career</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/career/manage') }}">Career</a> / Edit
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/career/update/'.$career->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $career->name ?? old('name') }}" class="form-control" placeholder="Career name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="description" placeholder="Career description">{{ $career->description ?? old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <div class="text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Images</label>
                    <input type="file" name="image" value="" class="form-control" accept="images/*">
                    <img src="{{ asset('/assets/career/'.$career->image) }}" height="100" width="100" />
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
