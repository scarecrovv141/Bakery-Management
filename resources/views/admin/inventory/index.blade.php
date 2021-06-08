@extends('layouts.app')

@section('title','Inventory')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('inventory.create') }}" class="btn btn-primary">Add New Product</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Inventory</h4></div>
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
                                        Created At
                                    </th>
                                    <th>
                                        Updated At
                                    </th>
                                    <th>Action</th>

                                    </thead>
                                    <tbody>
                                    @foreach($inventories as $key =>$inventory)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $inventory->PID }}</td>
                                            <td>{{ $inventory->name }}</td>
                                            <td>{{ $inventory->created_at }}</td>
                                            <td>{{ $inventory->updated_at }}</td>
                                            <td><a href="{{ route('inventory.edit', $inventory->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{$inventory->id}}" action="{{route('inventory.destroy', $inventory->id)}}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure You Want To Delete This?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{$inventory->id}}').submit();
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

