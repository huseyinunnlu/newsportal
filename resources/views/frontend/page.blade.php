@extends('frontend.master')
@section('content')

<div class="wrapper">
	<div class="row" style="margin-top:30px;">
		<div class="col-md-8">
			<div class="col-md-12" style="padding:15px 15px 30px 0px;">				
				
				<div class="col-md-12">
					<h3 style="color:#000; font-size: 300%;">{{$data->title}}</h3>
					{!! $data->description !!}
					<div class="share-this">
				<div class="col-md-12">
					<h3 style="color:#000; font-size: 180%; margin:30px 0 20px 0;">You May Also Like</h3>
				</div>	
				@foreach($lastest->take(3) as $last)	
				<div class="col-md-4">
					<a href="{{url('article')}}/{{$last->id}}" style="text-decoration: none; color: #000;">
					<img src="{{$last->image}}" width="100%"/>
					<h3 style="margin-bottom:5px; color: #000;">{{$last->title}}</h3>
					<p align="justify">{!! substr($last->description,0,100)!!}</p>
					</a>
				</div>
				@endforeach
			</div>       
		</div>
		<!-- right section -->
		<div class="col-md-4">
			<div class="col-md-12" style="padding:15px;">
				<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">MORE NEWS</span></h3>
				

					@foreach($lastest->take(5) as $last)
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<a href="{{url('article')}}/{{$last->id}}">
						<div class="col-md-4">
							<div class="row">
								<img src="{{$last->image}}" width="100%" style="margin-left:-15px;"/>
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<h4>{{$last->title}}</h4>
							</div>
						</div>
						</a>
					</div>
					@endforeach

				</div>
				<div class="col-md-12 text-center" style="padding:30px 0px;">
					<img src="/images/add.jpg" width="80%" />
				</div>    
			</div>
		</div>
	</div> 
</div>
@stop