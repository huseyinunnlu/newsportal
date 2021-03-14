@extends('adminpanel.master')
@section('content')



<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Edit Advertisement</h1>
		</div>

    <div class="col-sm-12">
      @if (Session::has('message'))
      {{Session('message')}}
      @endif
    </div>  

    <div class="col-sm-12">
     <div class="row">
      <form method="post" action="{{url('updateads')}}/{{$data->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('reklams')}}">
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="col-sm-9">


           <div class="form-group">  
            <img src="{{$data->image}}"style="margin-bottom: 15px;" width="20%;">
           <input type="text" name="image" class="form-control" value="{{$data->image}}" placeholder="İmage url">
         </div> 
         <div class="form-group"> 
           <input type="text" name="title" class="form-control" value="{{$data->title}}" placeholder="Enter title here">
         </div> 
         <div class="form-group">  
          <input type="text" name="url" class="form-control" value="{{$data->url}}" placeholder="Enter url">
        </div>  
        <div class="form-group">
          <label>Location</label>
          <select name="position" class="form-control">
            <option>{{$data->position}}<option>
            @if($data->position !='leaderboard')
            <option>leaderboard</option>
            @endif
            @if($data->position !='sidebar-top')
            <option>sidebar-top</option>
            @endif
            @if($data->position !='sidebar-bottom')
            <option>sidebar-bottom</option>
            @endif
          </select>
        </div>      
        <div class="form-group">
          <label>Status</label>
          <select name="status" class="form-control">
            <option>{{$data->status}}</option>
              @if($data->status !='display')
            <option>display</option>
            @else
            <option>hide</option>
            @endif
          </select>
        </div> 
        <div class="form-group">
          <button class="btn btn-primary">Edit Advertisement</button>
        </div>    

    </div>
  </form>
</div>
</div>
</div>
</div>
@stop