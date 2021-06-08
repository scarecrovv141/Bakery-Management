@extends('layouts.app')

@section('title','Cake')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('cake.create') }}" class="btn btn-primary">Add New Cake</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">cake</h4></div>
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
                                        Cake Name
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
                                    @foreach($cakes as $key=>$cake)
                        <tr>
                          <td>{{ $key+1 }}</td>
                                            <td>{{ $cake->PID }}</td>
                                            <td>{{ $cake->Cake_name }}</td>
                                            <td>{{ $cake->Price }}</td>
                                            <td>{{ $cake->Quantity }}</td>
                                            <td>{{ $cake->image }}</td>
                                            <td><a href="{{ route('cake.edit', $cake->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{$cake->id}}" action="{{route('cake.destroy', $cake->id)}}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure You Want To Delete This?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{$cake->id}}').submit();
                                            }else{
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

