@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Banner</h2>
            </div>
            <div class="pull-right">
                @can('banner-create')
                <a class="btn btn-success" href="{{ route('banner.create') }}"> Create New Banner</a>
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
	    @foreach ($banners as $banner)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $banner->title }}</td>
	        <td>
                @php
                $bannerimages = explode(',', $banner->image );

                @endphp
                @foreach($bannerimages as $bannerimag)
                <img src="{{ url($bannerimag) }}" width="50px" height="50px">
                @endforeach
            </td>

	        <td>
                <form action="{{ route('banner.destroy',$banner->id) }}" method="POST">
                    <!-- <a class="btn btn-info" href="{{ route('products.show',$banner->id) }}">Show</a> -->
                    <!-- @can('banner-edit')
                    <a class="btn btn-primary" href="{{ route('banner.edit',$banner->id) }}">Edit</a>
                    @endcan -->


                    @csrf
                    @method('DELETE')
                    @can('banner-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $banners->links() !!}


<p class="text-center text-primary"><small>Copyright © 2023,Earney Digital Service Solutions Pvt Ltd.</small></p>
@endsection
