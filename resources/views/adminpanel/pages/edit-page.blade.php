@extends('adminpanel.master')
@section('content')



<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Add New Page</h1>
		</div>

    <div class="col-sm-12">
      @if (Session::has('message'))
      {{Session('message')}}
      @endif
    </div>  

    <div class="col-sm-12">
     <div class="row">
      <form method="post" action="{{url('updatepage')}}/{{$data->id}}">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('pages')}}">
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="col-sm-9">
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
@stop