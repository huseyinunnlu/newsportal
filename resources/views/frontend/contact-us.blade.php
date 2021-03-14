@extends('frontend.master')
@section('content')
<head>
	<title>Contact Us - Newsportal</title>
</head>
<div class="wrapper">
	<div class="row" style="margin-top:30px;">
		<div class="col-md-8">
			<div class="col-md-12" style="padding:15px 15px 30px 0px;">				
				<div class="col-md-12">
					<h2>Contact Us</h2>
						<div class="col-sm-12">
							@if (Session::has('message'))
							{{Session('message')}}
							@endif
						</div> 
				</div>
				<div class="col-sm-6">
					<form action="{{url('sendmessage')}}" method="post">
						{{ csrf_field() }} 
						<input type="hidden" name="tbl" value="{{encrypt('messages')}}">
						<div class="form-group">
							<label>Your Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Your Email</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Your Phone</label>
							<input type="number" name="phone" class="form-control">
						</div>
						<div class="form-group">
							<label>Your Message</label><br>
							<textarea style="border: 1px solid gray; width: 250px; height: 50px;" claas="form-control" name="message" rows="5"></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-success">Send</button>
						</div> 
					</form>
				</div>



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