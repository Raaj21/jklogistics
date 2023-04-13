@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Service Master</h2>
            </div>
            <div class="pull-right">
                @can('service-create')
                <a class="btn btn-success" href="{{ route('service.mastercreate') }}"> Create New Master Service</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($masterdata as $master)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $master->name }}</td>
	        <td>

                <img src="{{ url($master->image) }}" width="50px" height="50px">

            </td>

	        <td>
                <form action="{{ route('service.masterdestroy',$master->id) }}" method="POST">

                    @can('service-edit')
                    <a class="btn btn-primary" href="{{ route('service.masteredit',$master->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('service-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $masterdata->links() !!}


<p class="text-center text-primary"><small>Copyright © 2023,Earney Digital Service Solutions Pvt Ltd.</small></p>
@endsection
