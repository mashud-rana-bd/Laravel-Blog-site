@extends('admin.app')



@section('content')
	
	<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">


        	<div class="card-header">
                <h3 class="card-title">Category Title</h3>
              </div>

            @include('admin.includes.error')

        	<form role="form" method="POST" action="{{route('category.store')}}">

            {{ csrf_field() }}

                <div class="card-body">

                	<div class="col-lg-12">
		                  <div class="form-group">
		                    <label for="name">Category</label>
		                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Title">
		                  </div>

		                  <div class="form-group">
		                    <label for="slug">Category Slug</label>
		                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
		                  </div>
		             </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-warning" href="{{route('category.index')}}">Back To All Category</a>

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



@endsection