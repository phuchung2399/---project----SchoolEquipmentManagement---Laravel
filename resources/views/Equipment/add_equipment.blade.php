@extends('admin.index')
@section('content')
<div class="card mb-3" style="width:50%;margin-left: 25%">
  <div class="card-header">
    <i class="fas fa-table"></i>
  </div>
  <div class="card-body">        

  <form action="{{route('Equipment.postAdd')}}" method="POST" style="width: 85%;margin: 5% 5%;" enctype="multipart/form-data" autocomplete="off">
        <legend>Add Equipment</legend>
        <input autocomplete="false" name="hidden" type="text" style="display:none;">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">ID of user:</label>
          <br>
          <input type="text" class="form-control" name="username" id="username" placeholder="Nhập từ khóa..." />
          <div id="listname" style="z-index: 3333;position: absolute"></div>
        </div>


        <div class="form-group">
        <label for="">Role of user:</label><br>
          <select name="role" class="form-control">
            @foreach($category as $value)
              <option value="{!! $value['id'] !!}">{!! $value["name_category"] !!}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
        <label for="">Trademark:</label><br>
        <select name="trademark" class="form-control">
            @foreach($trademark as $value)
          <option value="{!! $value['id'] !!}">{!! $value["name"] !!}</option>
            @endforeach
          </select>
        </div>

    <div class="form-group">
        <label for="">VerificationCode:</label>
        <input type="text" class="form-control" name="code" placeholder="Input field">
        </div>

        <div class="form-group">
        <label for="">Date equip:</label>
        <input type="Date" class="form-control" name="date" placeholder="Input field">
        </div>


      <br>

        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    
  </div>
</div>
  
@endsection