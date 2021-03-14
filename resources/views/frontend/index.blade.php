@extends('frontend.master')
@section('content')
<img src="">
<div class="wrapper">
    @if(count($featured) > 0 )
    <div class="row">
        @foreach($featured as $key=>$f)
        @if($key == 0)
        <div class="col-md-6">
            <div class="relative">
              <a href="{{url('article')}}/{{$f->id}}"><img src="{{$f->image}}" width="100%" />
                  <span class="caption">{{$f->title}}</span>
              </a>
          </div>
      </div>
      @endif
      @endforeach
      <div class="col-md-6">
          <div class="row">
            @ foreach($featured as $key=>$f)
            @if($key > 0 && $key < 3)
            <div class="col-md-6">
              <div class="relative">
                  <a href="{{url('article')}}/{{$f->id}}"><img src="{{$f->image}}" width="100%" />
                      <span class="caption">{{$f->title}}</span>
                  </a>
              </div>
          </div>
          @endif
          @endforeach
      </div>
      <div class="row" style="margin-top:30px;">
        @foreach($featured as $key=>$f)
        @if($key > 3 && $key < 6)
        <div class="col-md-6">
          <div class="relative">
              <a href="{{url('article')}}/{{$f->id}}"><img src="{{$f->image}}" width="100%" />
                  <span class="caption">{{$f->title}}</span>
              </a>
          </div>

      </div>
      @endif
      @endforeach
  </div>        
</div>
</div>
@endif


<div class="row" style="margin-top:30px;">
   <div class="col-md-8">
    <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px;">
       <div class="col-md-12">
          <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">NEWS</span></h3>
      </div>
      <div class="col-md-6">
        @foreach($general as $key=>$g)
        @if($key == 0)
        <h3 style="text-align: center; color:#fff;background-color: #000; padding: 10px 0px; margin: 0px;">{{$g->title}}</h3>
        <a href="{{url('article')}}/{{$g->id}}"  style="text-decoration: none; color:#000;">
           <img src="{{$g->image}}" width="100%" style="margin-bottom:15px;" />
           <p align="justify">{!! substr($g->description,0,300) !!}</p>Read more<span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
           @endif
           @endforeach
       </div>
       <div class="col-md-6">

        @foreach($general as $key=>$g)
        @if($key > 0 && $key < 6)
        <a href="{{url('article')}}/{{$g->id}}">
            <div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                <div class="col-md-4">
                    <div class="row">
                        <img src="{{$g->image}}" width="100%" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <h4>{{$g->title}}</h4>
                    </div>
                </div>
            </div>
        </a>
        @endif
        @endforeach 
    </div>
</div>

<div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
  <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">SPORT</span></h3>
  @foreach($sport->take(5) as $s)
  <a href="{{url('article')}}/{{$s->id}}">
    <img src="{{$s->image}}">
</a>
@endforeach  
</div>



<div class="row">
 <div class="col-md-6">
    <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
     <div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
        <h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">ECONOMY</span></h3>
        @foreach($economy as $key=>$ec)
        @if($key == 0)
            <h3 style="text-align: center; color:#fff;background-color: #000; padding: 10px 0px; margin: 0px;">{{$ec->title}}</h3>
            <a style="color: #000;" href="{{url('article')}}/{{$ec->id}}">
            <img src="{{$ec->image}}" width="100%" style="margin-bottom:15px;" />
            <p align="justify">{!! substr($ec->description,0,300)!!}</p>Read more <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        @endif
        @endforeach

        @foreach($economy as $key=>$ec)
        @if($key > 0 && $key < 5)
        <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
            <a href="{{url('article')}}/{{$ec->id}}"><div class="col-md-4">
                <div class="row fashion">
                    <img src="{{$ec->image}}" width="100%">
                </div>
            </div>
            <div class="col-md-8">
             <div class="row">
               <h4>{{$ec->title}}</h4>
           </div>
       </div></a>
   </div>
        @endif
        @endforeach
</div>
</div>



<div class="col-md-6">
    <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
     <div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
        <h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">POLITIC</span></h3>
        @foreach($politic as $key=>$p)
        @if($key == 0)
            <h3 style="text-align: center; color:#fff;background-color: #000; padding: 10px 0px; margin: 0px;">{{$p->title}}</h3>
            <a style="color: #000;" href="{{url('article')}}/{{$p->id}}">
            <img src="{{$ec->image}}" width="100%" style="margin-bottom:15px;" />
            <p align="justify">{!! substr($p->description,0,300)!!}</p>Read more <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        @endif
        @endforeach

        @foreach($politic as $key=>$p)
        @if($key > 0 && $key < 5)
        <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
            <a href="{{url('article')}}/{{$p->id}}"><div class="col-md-4">
                <div class="row fashion">
                    <img src="{{$p->image}}" width="100%">
                </div>
            </div>
            <div class="col-md-8">
             <div class="row">
               <h4>{{$p->title}}</h4>
           </div>
       </div></a>
   </div>
        @endif
        @endforeach
</div>
</div>
</div>
</div>


<div class="col-md-4">
    <div class="col-md-12" style="border:1px solid #ccc; padding:15px;">
     <h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">MORE NEWS</span></h3>




  @foreach($allposts->take(5) as $all)
    
     <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
        <a href="{{url('article')}}/{{$all->id}}">
       <div class="col-md-4">
        <div class="row">
          <img src="{{$all->image}}" width="100%" style="margin-left:-15px;" />
      </div>
  </div>
  <div class="col-md-8">
    <div class="row" style="padding-left:10px;">
      <h4>{{$all->title}}</h4>
  </div>
</div>
</a>
</div>
@endforeach







<div class="col-md-12 text-center" style="padding:30px 0px;">
   <img src="images/add.jpg" width="80%" />
</div>    
</div>
</div>
</div>
</div> 
@stop

