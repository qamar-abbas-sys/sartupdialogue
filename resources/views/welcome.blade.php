@extends('welcomelayout')
@section('title','Welcome Page')
@section('content')

    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5 mt-0">
		    <div class="container text-center">
			    <h2 class="heading">Podcast - A Perfect Place that Made For People to Learn.</h2>
			    <div class="intro">Welcome to my Site. Subscribe and get my latest post in your inbox.</div>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
		    </div><!--//container-->
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5 mt-5">
		    <div class="container">
			@if(count($posts)>0)
						@foreach($posts as $post)
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{asset('imgs/thumb/'.$post->thumb)}}" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1">{{$post->title}}</h3>
						    <div class="meta mb-1"><span class="date">{{$post->timestamps}}</span><span class="time"></span><span class="comment"><a href="#">{{count($post->comments)}} Comment</a></span></div>
						    <div class="intro">{{$post->detail}}</div>
						    <a class="more-link" href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">Read more &rarr;</a>
					    </div><!--//media-body-->
					</div><!--//media-->
						
				</div><!--//item-->
				@endforeach
						@else
					<p class="alert alert-danger">No Post Found</p>
					@endif
			</div>
			<!-- Pagination -->
			{{$posts->links()}}
	    </section>
	    
	    
    

</body>
</html> 

