<!DOCTYPE html>
<html>
<head>
  @include('admin.layouts.head')
</head>

<body class="hold-transition skin-purple sidebar-mini">

  @include('admin.layouts.header')

<div class="main_right_menu">

  @include('admin.layouts.right')
  
</div>

<section class="content">
      <div class="container-fluid">
      	@include('admin.layouts.body_top')
      		
      		
				@section('content')
          
				@show

			
 		</div><!-- /.container-fluid -->
</section>

<footer class="main-footer">
		@include('admin.layouts.footer')
</footer>

		@include('admin.layouts.script')
</body>
</html>