@extends('layouts.app')

@section('title', 'Sweet')

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
                            <h4 class="card-title ">Add New Chocolates and Sweets</h4></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('sweet.store') }}" enctype="multipart/form-data">
                                @csrf
                              
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">PID</label>
                                            <input type="text" class="form-control" name="PID">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Sweet_Name</label>
                                            <input type="text" class="form-control" name="Sweet_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Price</label>
                                            <input type="text" class="form-control" name="Price">
                                        </div>
		                                    </div>
		                                </div>
		                    
		                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Quantity</label>
                                            <input type="text" class="form-control" name="Quantity">
                                        </div>
                                    </div>
                                </div>
		                    <div class="row">
		                      <div class="col-md-12">
		                        <label class="bmd-label-floating">Image</label>
		                        <input type="file" name="image">
		                      </div>
		                    </div>
                                <a href="{{ route('sweet.index') }}"class="btn btn-danger">Back</a>
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

