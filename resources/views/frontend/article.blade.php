@extends('frontend.master')
@section('content')
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v9.0" nonce="9gDQf6vE"></script>
<div class="wrapper">
	<div class="row" style="margin-top:30px;">
		<div class="col-md-8">
			<div class="col-md-12" style="padding:15px 15px 30px 0px;">				
				
				<div class="col-md-12">
					<div class="text-right">{{$data->views}} views</div>
					<img src="{{$data->image}}" width="100%" style="margin-bottom:15px;" />
					<h3 style="color:#000; font-size: 300%;">{{$data->title}}</h3>
					{!! $data->description !!}
					<div class="share-this">
					<h4>Share this</h4>
					<div class="fb-share-button" data-href="{{url('article')}}/{{$data->id}}" data-layout="button" data-size="small"></div>
					<span style="position: relative; top: 5px;">
					<a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small">Tweet</a>
					</span>
					<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script><script type="IN/Share" data-url="{{url('article')}}/{{$data->id}}"></script>
					</div>
				</div>	

				<div class="col-md-12">
					<h3 style="color:#000; font-size: 180%; margin:30px 0 20px 0;">You May Also Like</h3>
				</div>	
				@foreach($more->take(3) as $m)	
				<div class="col-md-4">
					<a href="{{url('article')}}/{{$m->id}}" style="text-decoration: none; color: #000;">
					<img src="{{$m->image}}" width="100%"/>
					<h3 style="margin-bottom:5px; color: #000;">{{$m->title}}</h3>
					<p align="justify">{!! substr($m->description,0,100)!!}</p>
					</a>
				</div>
				@endforeach
			</div>       
		</div>
		<!-- right section -->
		<div class="col-md-4">
			<div class="col-md-12" style="padding:15px;">
				<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">MORE NEWS</span></h3>
				

					@foreach($more->take(5) as $m)
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<a href="{{url('article')}}/{{$m->id}}">
						<div class="col-md-4">
							<div class="row">
								<img src="{{$m->image}}" width="100%" style="margin-left:-15px;"/>
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<h4>{{$m->title}}</h4>
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