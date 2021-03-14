@extends('adminpanel.master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Categories</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			@if (Session::has('message'))
			{{Session('message')}}
			@endif
			<h3>Website Settings</h3>
			@if(empty($data))

							<!-- ADD -->


			<form method="post" action="{{url('addsettings')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
				<div class="form-group">
					<label>Logo</label>
					<input type="file" name="image" class="form-control">
					<p>The name is how it appears on your site.</p>
				</div>

				<div class="form-group">
					<label>About Us</label>
					<textarea name="about" class="form-control" rows="10"></textarea>
				</div>

				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Social</label>
						<input type="url" name="social[]" class="form-control">
						<p class="text-muted">e.g https://www.google.com</p>
					</div>
				</div>

				<div class="text-right">
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Add Settings</button>
				</div>
			</form>	
			@else

				<!-- UPDATE -->

			<form method="post" action="{{url('updatesettings')}}/{{$data->id}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
				<input type="hidden" name="id" value="{{$data->id}}">
				<div class="form-group">
					<label>Logo</label>
					@if(!empty($data->image))
					<p><img src="{{url('public/settings')}}/{{$data->image}}"></p>
					<label class="btn btn-warning"> Replace İmage
					<input type="file" name="image" class="form-control" style="display:none;">
					</label>
					@else
					<input type="file" name="image" class="form-control">
					@endif
					<p>The name is how it appears on your site.</p>
				</div>

				<div class="form-group ">
					<label>About Us</label>
					<textarea name="about" class="form-control" rows="15">{{$data->about}}</textarea>
				</div>

				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Social</label>
						@foreach($data->social as $social)
						<input type="url" name="social[]" class="form-control" value="{{$social}}">
						@endforeach
						<p class="text-muted">e.g https://www.google.com</p>
					</div>
				</div>

				<div class="text-right">
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Update Settings</button>
				</div>
			</form>	

			@endif
		</div>
	</div>
</div>
<script>
	$('#addSocialField').click(function(){
		newDiv = $(document.createElement('div')).attr("class","form-group");
		newDiv.after().html('<input type="url" name="social[]" class="form-control"></div>');
		newDiv.appendTo("#socialFieldGroup");
	})
</script>
@stop