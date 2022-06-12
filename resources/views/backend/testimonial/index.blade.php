@extends('backend.master')

@section('title')
    Testimonial
@endsection

@section('content')
@if ($data['page'] == 'index')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Manage Testimonial</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Testimonial /
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
              <th class="text-capitalize">Position</th>
              <th class="text-capitalize">Description</th>
              <th class="text-capitalize">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data['testimonials'] as $testimonial)
              <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $testimonial->position ?? '' }}</td>
                  <td>{!! substr($testimonial->description, 0, 500) ?? '' !!}</td>
                  <td>
                      <a href="{{ url('/admin/testimonial/edit/'.$testimonial->id. '/' . $testimonial->slug) }}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ url('/admin/testimonial/delete/'.$testimonial->id. '/' . $testimonial->slug) }}" onclick="return confirm('Are you sure delete this testimonial ?')" class="btn btn-sm btn-danger">Delete</a>
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
	  <h4>Create Testimonial</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/testimonial/manage') }}">Testimonial</a> / Create
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/testimonial/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
      				<label for="">Position</label>
      				<input type="text" name="position" value="" class="form-control" placeholder="Position..." required>
	  				@if ($errors->has('position'))
	  					<div class="text-danger">{{ $errors->first('position') }}</div>
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
	  <h4>Edit Testimonial</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/testimonial/manage') }}">Testimonial</a> / Edit
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/testimonial/update/'.$testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="position" value="{{ $testimonial->position ?? old('position') }}" class="form-control" placeholder="Position..." required>
                    @if ($errors->has('position'))
                        <div class="text-danger">{{ $errors->first('position') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control summernote" name="description" placeholder="Service description">{{ $testimonial->description ?? old('description') }}</textarea>
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
@endif
@endsection
