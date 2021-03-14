@extends('adminpanel.master')
@section('content')



<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Add New Post</h1>
		</div>

    <div class="col-sm-12">
      @if (Session::has('message'))
      {{Session('message')}}
      @endif
    </div>  

    <div class="col-sm-12">
     <div class="row">
      <form method="post" action="{{url('updatepost')}}/{{$data->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('posts')}}">
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="col-sm-9">
          <div class="form-group">
            <img src="{{$data->image}}" style="width:100px;">  
             <input type="text" name="image" class="form-control" placeholder="İmage url" value="{{$data->image}}">
           </div> 
          <div class="form-group">	
           <input type="text" name="title" class="form-control" placeholder="Enter title here" value="{{$data->title}}">
         </div>	
         <div class="form-group">  
          <input type="text" name="slug" class="form-control" placeholder="Enter slug here" value="{{$data->slug}}">
        </div>					
        <div class="form-group">		
         <textarea class="form-control" name="description" rows="15">{!!$data->description!!}</textarea>
         <div class="col-sm-12 word-count">Word count: 0</div>
       </div>	
     </div>
     <div class="col-sm-3">
      <div class="content publish-box">
       <h4>Publish  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
       <div class="form-group">
        <button class="btn btn-default" name="status" value="draft">Save Draft</button>
      </div>
      <p>Status: Draft <a href="#">Edit</a></p>
      <p>Visibility: Public <a href="#">Edit</a></p>
      <p>Publish: Immediately <a href="#">Edit</a></p>
      <div class="row">
        <div class="col-sm-12 main-button">
         <button class="btn btn-primary pull-right" name="status" value="publish">Publish</button>
       </div>
     </div>	
   </div>

   <div class="content cat-content">
     <h4>Category  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
     @foreach ($categories as $cat)
     <p><label for="{{$cat->id}}"><input type="checkbox" name="category_id[]"  @if(in_array($cat->id,$postcat)) checked @endif value="{{$cat->id}}"> {{$cat->title}}</label></p>
     @endforeach
   </div>
   <div class="content featured-image">
    <h4>Featured Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>
    @if ($data->image != '')
    <p><img id="output" style="max-width: 100%" src="{{$data->image}}}"></p>
    <p><input type="file" accept="image/* " name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
    <p><label for="file" style="cursor: pointer;" class="btn btn-warning">Replace Featured Image</label></p>
    @else
    <p>No data upload image</p>
    <p><img id="output" style="max-width: 100%" ></p>
    <p><input type="file" accept="image/* " name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
    <p><label for="file" style="cursor: pointer;" class="btn btn-warning">Set Featured Image</label></p>
    @endif
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
<head>
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>
<body>
  <script>
    CKEDITOR.replace( 'description' );
  </script>
</body>
<script>
  var loadFile = function(event) {
    var image = document.getElementById('output');
    img.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
@stop