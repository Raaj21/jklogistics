@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Service</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('service.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('service.update',$service->id) }}" method="POST">
    	@csrf
        @method('PUT')



         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Service type:</strong>
                    <select name="master_id" id="cars" class="form-control">
                    <option value="">Select Service</option>
                    @foreach($masterdata as $master)
                    <option value="{{$master->id}}"  @if($service->service_master_id == $master->id) selected @endif>{{$master->name}}</option>
                    @endforeach
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Title:</strong>
		            <input type="text" name="title" value="{{ $service->title }}" class="form-control" placeholder="Title">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Service Decription:</strong>
                    <textarea class="tinymce-editor" name="description" class="form-control">{{ $service->description }}</textarea>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Branch image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="branchimage">
                    <input type="hidden" name="image_update" class="form-control" value= "{{ $service->image }}">
		        </div>
		    </div>



		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Copyright © 2023,Earney Digital Service Solutions Pvt Ltd.</small></p>
@endsection

@section('custome_script')

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">



$(document).ready(function () {
    tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });




  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='branchForm']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      "files[]": {
                required: true,
                filesize: 20971520,

            },


    },

    // Specify validation error messages
    messages: {
        name: "Please enter your firstname",
        "files[]": "Please enter your file",

    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});


</script>
@endsection

