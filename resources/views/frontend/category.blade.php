@extends('frontend.master')
@section('content')

	<div class="wrapper">

		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">
					<div class="col-md-12">
						<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742; text-transform: uppercase;">{{$cat->title}}</span></h3>
					</div>
					@if(count($posts) > 0 )
					<div class="col-md-12">
						@foreach($posts as $key=>$post)
						@if($key == 0)
						<a style="text-decoration: none; color: #000;" href="{{url('article')}}/{{$post->id}}">
						<img src="{{$post->image}}" width="100%" style="margin-bottom:15px;" />
						<h3>{{$post->title}}</h3>
						<p align="justify">{!! substr($post->description,0,300)!!}</p>Read more <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
						@endif
						@endforeach
					</div>
					<div class="row">

						@foreach($posts as $key=>$post)
						@if($key > 0 && $key < 3)

						<div class="col-md-6">
							<a style="text-decoration: none; color: #000;" href="{{url('article')}}/{{$post->id}}">
								<h3>{{$post->title}}</h3>
								<img src="{{$post->image}}" width="100%" style="margin-bottom:15px;" />
								<p align="justify">{!! substr($post->description,0,300)!!}</p>Read more <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						</div>
						</div>
						@endif  
						@endforeach
						@foreach($posts as $key=>$post)
						@if($key > 3&& $key < 5)

						<div class="col-md-6">
							<a style="text-decoration: none; color: #000;" href="{{url('article')}}/{{$post->id}}">
								<h3>{{$post->title}}</h3>
								<img src="{{$post->image}}" width="100%" style="margin-bottom:15px;" />
								<p align="justify">{!! substr($post->description,0,300)!!}</p>Read more <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						@endif  
						@endforeach    
					</div>  
					@endif          
				</div>        
			</div>

<!-- right section -->

		</div> 
	</div>
@stop
