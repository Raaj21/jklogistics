@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Branch</h2>
            </div>
            <div class="pull-right">
                @can('branch-create')
                <a class="btn btn-success" href="{{ route('branch.create') }}"> Create New Branch</a>
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
	    @foreach ($branches as $branch)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $branch->title }}</td>
	        <td>

                <img src="{{ url($branch->image) }}" width="50px" height="50px">

            </td>

	        <td>
                <form action="{{ route('branch.destroy',$branch->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('branch.show',$branch->id) }}">Show</a>
                    @can('branch-edit')
                    <a class="btn btn-primary" href="{{ route('branch.edit',$branch->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('branch-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $branches->links() !!}


<p class="text-center text-primary"><small>Copyright © 2023,Earney Digital Service Solutions Pvt Ltd.</small></p>
@endsection
