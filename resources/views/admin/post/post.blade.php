@extends('admin.app')

@section('head')

<link href="{{asset('admin/dist/css/select2.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">


        	<div class="card-header">
                <h3 class="card-title">Titles</h3>
              </div>

              @include('admin.includes.error')

        	<form role="form" action="{{route('post.store')}}" method="POST">

        		{{ csrf_field() }}

                <div class="card-body">

                	<div class="col-lg-12">
		                  <div class="form-group">
		                    <label for="title">Post Title</label>
		                    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title">
		                  </div>

		                  <div class="form-group">
		                    <label for="subtitle">Post Sub Title</label>
		                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Post Sub Title">
		                  </div>

		                  <div class="form-group">
		                    <label for="slug">Post Slug</label>
		                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
		                  </div>
		             </div>

		             {{-- select2 function --}}
					<div class="form-group">
						<label for="slug">Select Tags</label>
			             <select class="select2 form-control" name="tags[]" multiple="multiple" data-placeholer="Choose Tags" tabindex="-1" area-hidden="true">
							  @foreach ($tags as $tag)
							  	<option value="{{$tag->id}}">{{$tag->name}}</option>
							  @endforeach
							  
							  
						</select>

					</div>

					<div class="form-group">
						<label for="slug">Select Category</label>
			             <select class="select2 form-control" name="categories[]" multiple="multiple" >
			             	 
							   @foreach ($categories as $category)
							  	<option value="{{$category->id}}">{{$category->name}}</option>
							  @endforeach
						</select>

					</div>


                  <div class="col-lg-6">
	                  <div class="form-group">
	                    <label for="image">File input</label>
	                    <div class="input-group">
	                      <div class="custom-file">
	                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
	                        <label class="custom-file-label" for="image">Choose file</label>
	                      </div>
	                      <div class="input-group-append">
	                        <span class="input-group-text" id="">Upload</span>
	                      </div>
	                    </div>
	                  </div>
                  </div>


                   <div class="card card-outline card-info">
			            <div class="card-header">
			              <h3 class="card-title">
			                Write post body Here
			                <small>Simple and fast</small>
			              </h3>
			              <!-- tools box -->
			              <div class="card-tools">
			                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
			                        title="Collapse">
			                  <i class="fa fa-minus"></i></button>
			              </div>
			              <!-- /. tools -->
			            </div>
			            <!-- /.card-header -->
			            <div class="card-body pad">
			              <div class="mb-3">
			                <textarea class="textarea" name="body" placeholder="Place some text here"
			                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
			              </div>
			            </div>
			          </div>



                  <div class="form-check">
                    <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" value="1">
                    <label class="form-check-label" for="exampleCheck1">Public</label>
                  </div>
                 </div>
                <!-- /.card-body -->

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
          <!-- /.card -->

         
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>

 @endsection

 @section('footer')

<script src="{{asset('admin/dist/js/select2.min.js')}}"></script>

<script>
	$(document).ready(function() {
    $('.select2').select2();
	});
</script>

 @endsection