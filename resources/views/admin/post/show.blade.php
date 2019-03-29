@extends('admin.app')

@section('head')

<link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.css')}}">

@endsection


@section('content')

@include('admin.includes.success')


{{--Tag table --}}

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tag Table</h3>
              <a style="margin-left: 917px;margin-top: -28px;" class="col-lg-offset-5 btn btn-info" href="{{route('post.create')}}">Add New post</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Post Title</th>
                  <th>Subtitle</th>
                  <th>Slug</th>
                  <th>Created at</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                	@foreach ($posts as $post)
                		<tr>
		                  <td>{{$loop->index+1 }}</td>
		                  <td>{{$post->title}}</td>
		                  <td>{{$post->subtitle}}</td>
		                  <td>{{$post->slug}}</td>
		                  <td>{{$post->created_at}}</td>
		                  <td><a href="{{route('post.edit',$post->id)}}"><span class="fa fa-pencil-square-o btn btn-success"></span></a> </td>

		                  <td>

                        {{-- delete button --}}
                        
		                  	<form id="delete-form-{{$post->id}}" method="POST" action="{{route('post.destroy', $post->id)}}" style="display: none">

		                  		{{ csrf_field() }}

		                  		{{method_field('DELETE')}}

		                  	</form>

		                  		<a href="" onclick="if(confirm('Are you sure, you want to delete this?'))

		                  		{
		                  		event.preventDefault();
		                  		document.getElementById('delete-form-{{$post->id}}').submit();

		                  		}
		                  		else{
		                  			
		                  			event.preventDefault();

		                  		}"><span class="fa fa-trash btn btn-danger"></span></a>
		                  		
		                  	
		                  </td>


		                </tr>
                	@endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Post Title</th>
                  <th>Subtitle</th>
                  <th>Slug</th>
                  <th>Created at</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>




@endsection

@section('footer')

<script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.js')}}"></script>


<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

@endsection