@extends('layouts.app')

@section('title','Slider')

@push('css')
	
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            	@include('layouts.partial.msg')

              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add New Item</h4>
              
                </div>
                <div class="card-body">
                	<form method="POST" action="{{route('slider.update',$slider->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">PID</label>
                          <input type="text" class="form-control" name="PID"
                          value="{{$slider->PID}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="Name"
                          value="{{$slider->Name}}">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="integer" class="form-control" name="Price"
                          value="{{$slider->Price}}">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quantity</label>
                          <input type="integer" class="form-control" name="Quantity"
                          value="{{$slider->Quantity}}">
                        </div>
                      </div>
                    </div>	
                    <div class="row">
                      <div class="col-md-12">
                      	<label class="control-label">Image</label>
                        <input type="file" name="image"> 
                      </div>
                    </div>
                    <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                	</form>
                    
                  </div>
                </div>
              
            </div>
 
          </div>
        </div>
      </div>
@endsection

@push('script')

@endpush