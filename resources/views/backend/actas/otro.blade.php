@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')

	<div class="col-md-12">
		<div class="page-header">
			<h2>9.Otros antecedentes</h2>
		</div>
	</div>

	<div class="col-lg-12">
        <form method="POST" enctype="multipart/form-data" action="backend/actas/otro" id="my-dropzone" class="dropzone" v-on:submit.prevent="setData">
            <div class="form-control" style="height:100px;">
                Drop your files here
            </div>
            <div class="dropzone-previews"></div>
            <button type="submit" class="btn btn-success" id="submit">Save</button>
        </form>
    </div>

@stop

@section('scripts')
	<script>
	    Dropzone.options.myDropzone = {
	        autoProcessQueue: false,
	        uploadMultiple: true,
	        maxFilezise: 10,
	        maxFiles: 2,
	        
	        init: function() {
	            var submitBtn = document.querySelector("#submit");
	            myDropzone = this;
	            
	            submitBtn.addEventListener("click", function(e){
	                e.preventDefault();
	                e.stopPropagation();
	                myDropzone.processQueue();
	            });
	            this.on("addedfile", function(file) {
	                alert("file uploaded");
	            });
	            
	            this.on("complete", function(file) {
	                myDropzone.removeFile(file);
	            });

	            this.on("success", 
	                myDropzone.processQueue.bind(myDropzone)
	            );
	        }
	    };
	</script>
@stop