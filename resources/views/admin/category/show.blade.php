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
              <a style="margin-left: 890px; margin-top: -28px;" class="col-lg-offset-5 btn btn-info" href="{{route('category.create')}}">Add New category</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Category Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                	@foreach ($category as $category)
                		<tr>
		                  <td>{{$loop->index+1 }}</td>
		                  <td>{{$category->name}}
		                  </td>
		                  <td>{{$category->slug}}</td>
		                  <td><a href="{{route('category.edit',$category->id)}}"><span class="fa fa-pencil-square-o btn btn-success"></span></a> </td>
                      
                    <td>

                        {{-- delete button --}}
                        
                        <form id="delete-form-{{$category->id}}" method="POST" action="{{route('category.destroy', $category->id)}}" style="display: none">

                          {{ csrf_field() }}

                          {{method_field('DELETE')}}

                        </form>

                          <a href="" onclick="if(confirm('Are you sure, you want to delete this?'))

                          {
                          event.preventDefault();
                          document.getElementById('delete-form-{{$category->id}}').submit();

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
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
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