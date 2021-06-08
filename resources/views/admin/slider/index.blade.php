@extends('layouts.app')

@section('title', 'Slider')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
	      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{route('slider.create')}}" class="btn btn-primary">Add New Product</a>
              @if(session('successMsg'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Success - </b> {{ session('successMsg') }}"</span>
                  </div>
              @endif
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Fast Food</h4>
                  <p class="card-category">Fast Food Inventory Management</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          PID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Quantity
                        </th>
                        <th>
                          Image
                        </th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      	@foreach($sliders as $key=>$slider)
                      	<tr>
                          <td>{{ $key+1 }}</td>
                      		<td>{{$slider->PID}}</td>
                      		<td>{{$slider->Name}}</td>
                      		<td>{{$slider->Price}}</td>
                            <td>{{$slider->Quantity}}</td>
                      		<td><img class="img-responsive img-thumbnail" src="{{asset('uploads/slider/'. $slider->image)}}" style="height:100px; width:100px"></td>
                          <td>
                                                <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy',$slider->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $slider->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                      	</tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('script')
<script scr="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script scr="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
  <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush
