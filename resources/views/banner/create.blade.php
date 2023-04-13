@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Banner</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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


    <form action="{{ route('banner.store') }}" method="POST" name= "bannerForm" enctype="multipart/form-data" >
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="title" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Image:</strong>
                    <input type="file" name="files[]" id="file" class="form-control" placeholder="Name"  id="file" multiple onchange="checkFileDetails()"  >
                    <p id="fileInfo"></p>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
@section('custome_script')

<script type="text/javascript">

$(document).ready(function () {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='bannerForm']").validate({
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

    function checkFileDetails() {
        var fi = document.getElementById('file');
        if (fi.files.length > 0) {      // FIRST CHECK IF ANY FILE IS SELECTED.

            for (var i = 0; i <= fi.files.length - 1; i++) {
                var fileName, fileExtension, fileSize, fileType, dateModified;

                // FILE NAME AND EXTENSION.
                fileName = fi.files.item(i).name;
                fileExtension = fileName.replace(/^.*\./, '');

                // CHECK IF ITS AN IMAGE FILE.
                // TO GET THE IMAGE WIDTH AND HEIGHT, WE'LL USE fileReader().
                if (fileExtension == 'png' || fileExtension == 'jpg' || fileExtension == 'jpeg') {
                   readImageFile(fi.files.item(i));             // GET IMAGE INFO USING fileReader().
                }
                else {
                    // IF THE FILE IS NOT AN IMAGE.

                    fileSize = fi.files.item(i).size;  // FILE SIZE.
                    fileType = fi.files.item(i).type;  // FILE TYPE.
                    dateModified = fi.files.item(i).lastModifiedDate;  // FILE LAST MODIFIED.

                    document.getElementById('fileInfo').innerHTML =
                        document.getElementById('fileInfo').innerHTML + '<br /> ' +
                            'Name: <b>' + fileName + '</b> <br />' +
                            'File Extension: <b>' + fileExtension + '</b> <br />' +
                            'Size: <b>' + Math.round((fileSize / 1024)) + '</b> KB <br />' +
                            'Type: <b>' + fileType + '</b> <br />' +
                            'Last Modified: <b>' + dateModified + '</b> <br />';
                }
            }

            // GET THE IMAGE WIDTH AND HEIGHT USING fileReader() API.
            function readImageFile(file) {
                var reader = new FileReader(); // CREATE AN NEW INSTANCE.

                reader.onload = function (e) {
                    var img = new Image();
                    img.src = e.target.result;

                    img.onload = function () {
                        var w = this.width;  // 8001
                        var h = this.height; //4500
                       if(w <= '8000' &&  h <= '4500'){
                        document.getElementById('fileInfo').innerHTML =
                            document.getElementById('fileInfo').innerHTML + '<br /> ' +
                                'Name: <b>' + file.name + '</b> <br />' +
                                'Size: <b>' + Math.round((file.size / 1024)) + '</b> KB <br />' +
                                'Width: <b>' + w + '</b> <br />' +
                                'Height: <b>' + h + '</b> <br />' ;



                       }





                        // document.getElementById('fileInfo').innerHTML =
                        //     document.getElementById('fileInfo').innerHTML + '<br /> ' +
                        //         'Name: <b>' + file.name + '</b> <br />' +
                        //         'File Extension: <b>' + fileExtension + '</b> <br />' +
                        //         'Size: <b>' + Math.round((file.size / 1024)) + '</b> KB <br />' +
                        //         'Width: <b>' + w + '</b> <br />' +
                        //         'Height: <b>' + h + '</b> <br />' +
                        //         'Type: <b>' + file.type + '</b> <br />' +
                        //         'Last Modified: <b>' + file.lastModifiedDate + '</b> <br />';
                    }
                };
                document.getElementById("fileInfo").value = null;
                reader.readAsDataURL(file);
            }
        }
    }
</script>
@endsection
