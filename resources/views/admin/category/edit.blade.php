@extends('admin.app')


@section('content')
	
	<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">


        	<div class="card-header">
                <h3 class="card-title">Tag Title</h3>
              </div>


              @include('admin.includes.error')


        	<form role="form"  action="{{route('category.update',$category->id)}}" method="POST">

            {{ csrf_field() }}

            {{ method_field('PUT') }}

                <div class="card-body">

                	<div class="col-lg-12">
		                  <div class="form-group">
		                    <label for="name">Category</label>
		                    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
		                  </div>

		                  <div class="form-group">
		                    <label for="slug">Post Slug</label>
		                    <input type="text" class="form-control" id="slug" name="slug" value="{{$category->slug}}">
		                  </div>
		             </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-warning" href="{{route('category.index')}}">Back To Tag List</a>
                  
                </div>
              </form>
          <!-- /.card -->

         
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>



@endsection