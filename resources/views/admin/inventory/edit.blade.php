@extends('layouts.app')

@section('title', 'Inventory')

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
                            <h4 class="card-title ">Update Inventory</h4></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('inventory.update', $inventory->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">PID</label>
                                            <input type="text" class="form-control" name="PID" value="{{$inventory->PID}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$inventory->name}}">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('inventory.index') }}"class="btn btn-danger">Back</a>
                                <button type="'submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush

