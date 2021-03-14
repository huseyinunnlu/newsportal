@extends('adminpanel.master')
@section('content')



<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Add New Advertisement</h1>
		</div>

    <div class="col-sm-12">
      @if (Session::has('message'))
      {{Session('message')}}
      @endif
    </div>  

    <div class="col-sm-12">
     <div class="row">
      <form method="post" action="{{url('addads')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('reklams')}}">
        <div class="col-sm-12">
          <div class="form-group">  
           <input type="text" name="image" class="form-control" placeholder="İmage url">
         </div> 
         <div class="form-group">	
           <input type="text" name="title" class="form-control" placeholder="Enter title here">
         </div>	
         <div class="form-group">  
          <input type="text" name="url" class="form-control" placeholder="Enter url">
        </div>	
        <div class="form-group">
          <label>Location</label>
          <select name="position" class="form-control">
            <option>leaderboard</option>
            <option>sidebar-top</option>
            <option>sidebar-bottom</option>
          </select>
        </div>			
        <div class="form-group">
          <label>Status</label>
          <select name="status" class="form-control">
            <option>display</option>
            <option>hide</option>
          </select>
        </div> 
        <div class="form-group">
          <button class="btn btn-primary">Add Advertisement</button>
        </div>   	
      </div>
    </form>
  </div>
</div>
</div>
</div>  
@stop