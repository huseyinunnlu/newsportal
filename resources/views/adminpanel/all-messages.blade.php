@extends('adminpanel.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i>All Messages</h1>
    </div>
    <div class="search-div">
      <div class="col-sm-9">
        All({{count($data)}})
      </div>

      @if (Session::has('message'))
      {{Session('message')}}
      @endif

      <div class="col-sm-3">
        <input type="text" id="search" name="search" class="form-control" placeholder="Search Pages">
      </div>
    </div>  

    <div class="clearfix"></div>
      <form method="post" action="{{url('multipleDelete')}}">
    <div class="filter-div">
           {{ csrf_field() }}
           <input type="hidden" name="tbl" value="{{encrypt('messages')}}">
           <input type="hidden" name="tblid" value="{{encrypt('id')}}">
        <div class="col-sm-2">
          <select name="bulk-action" class="form-control">
            <option value="0">Bulk Action</option>
            <option value="1">Move to Trash</option>
          </select>
        </div>

        <div class="col-sm-1">
          <div class="row">
            <button class="btn btn-default">Apply</button>
          </div>  
        </div>
  
    </div>  
    
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th><input type="checkbox" id="select-all"> Sender</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Message</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>

            @if (count($data) > 0)
            @foreach ($data as $message)      
            <tr>
              <td>
                <input type="checkbox" name="select-data[]" value="{{$message->id}}"> 
                {{$message->name}}
              </td>
              <td>{{$message->email}}</td>
              <td>{{$message->phone}}</td>


              <!--resim büyütmek için önemli -->
              <td>{{substr($message->message,0,100)}}<a href="#expand{{$message->id}}" data-toggle="modal">Expand</a></td>
              <td>{{$message->created_at}}</td>     
              <div class="modal" id="expand{{$message->id}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <a href="#" class="close" data-dismiss="modal">&times;</a>
                    <h4 class="modal-title">Sendt By: {{$message->name}}</h4>
                  <div class="modal-body">
                    {{$message->message}}
                  </div>
                  <div class="modal-footer">
                     <p>{{$message->created_at}}</p>
                     <p>{{$message->phone}}</p>
                     <p>{{$message->email}}</p>
                   </div>
                  </div>
                </div>
              </div>    
              </div>  
              <!--resim büyütmek için önemli -->
            </tr>
            @endforeach
            @else

            <p>No Messages found</p>

            @endif

          </tbody>
        </table>
      </div>
    </div>
</form>
    <div class="clearfix"></div>



    <div class="filter-div">
      <form method="post">
        <div class="col-sm-2">
          <select name="action" class="form-control">
            <option>Bulk Action</option>
            <option>Move to Trash</option>
          </select>
        </div>

        <div class="col-sm-1">
          <div class="row">
            <button class="btn btn-default">Apply</button>
          </div>  
        </div>
      </form>
    </div>
  </div>
</div>

@stop

</body>
</html>