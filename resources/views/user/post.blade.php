@extends('user.app')


@section('bg-img',  asset('user/img/post-bg.jpg'))

@section('title', $post->title)

@section('sub-heading', $post->subtitle)

@section('main-content')

<div id="fb-root"></div>

{{-- Facebook comment --}}
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          	<small class="">Create at: {{$post->created_at->diffForHumans()}}</small></a>
			
			
          	<small class="pull-right">Categories:
			
				@foreach ($post->categories as $category)
					<a href="">{{$category->name}}</a>
				@endforeach
			</small>

			<div class=""style="text-align: justify;">
            {{strip_tags($post->body)}}
			</div>	
			

			
			<h5 style="margin-top: 20px">Tag Clouds</h5>
				@foreach ($post->tags as $tag)
					<small  style="border-radius:5px;border: 1.5px solid gray;padding:4px;margin: 2px; ">
					<a href="">{{$tag->name}}</a> 
					</small>
				@endforeach

			

            
          </div>
          <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
        </div>
      </div>
    </article>

    <hr>




@endsection