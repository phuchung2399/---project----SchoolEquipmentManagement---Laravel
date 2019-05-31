@extends('admin.index')
@section('content')
    @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul> 
            </div>
        @endif
        <div class="card mb-3" style="width:50%;margin-left: 25%">
  <div class="card-header">
    <i class="fas fa-table"></i>
    
  </div>
  <div class="card-body">  
    <form action="{{route('Equipment.postEdit',$id)}}" method="POST" role="form" enctype="multipart/form-data" autocomplete="off">
     
      {{ csrf_field() }}
      <input autocomplete="false" name="hidden" type="text" style="display:none;">
      
      <legend>EDIT EQUIPMENT</legend>
    
      <div class="form-group">
          <label for="">ID of user:</label>
          <br>
          <input type="text" class="form-control" value="{{$equipment->User_ID}}" name="username" id="username"  />
          <div id="listname" style="z-index: 3333;position: absolute"></div>
        </div>


        <div class="form-group">
        <label for="">Role of user:</label><br>
          <select name="role" class="form-control">
            @foreach($category as $value)
              @if($equipment->Cate_ID == $value->id)
                <option value="{!! $value->id !!}" selected>{!! $value->name_category!!}</option>
              @else
                <option value="{!! $value->id !!}" >{!! $value->name_category!!}</option>
              @endif
            @endforeach
          </select>
        </div>

        <div class="form-group">
        <label for="">Trademark:</label><br>
        <select name="trademark" class="form-control">
            @foreach($trademark as $value)
              @if($equipment->Trademark_ID == $value['id'])
                <option value="{!! $value['id'] !!}" selected>{!! $value["name"] !!}</option>
              @else
                <option value="{!! $value['id'] !!}">{!! $value["name"] !!}</option>
              @endif
            @endforeach
          </select>
        </div>

       <div class="form-group">
        <label for="">VerificationCode:</label>
        <input type="text" class="form-control" value="{{$equipment->VerificationCode}}" name="code" placeholder="Input field">
        </div>

        <div class="form-group">
        <label for="">Date equip:</label>
        <input type="Date" class="form-control" value="{{ $equipment->Date_Equip}}" name="date" placeholder="Input field">
        </div>
      <center><button type="submit" class="btn btn-primary">Edit equipment</button></center>
      
    </form>
  </div>
    <div class="col-md-4"></div>
@endsection