@extends('admin.index')

@section('content')
<div class="table-responsive">
<table class="table table-hover width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>User_ID</th>    
      <th>User name</th>
      <th>Category</th>
      <th>Trademark</th>
      <th>Verification code</th>
      <th>Date equip</th>
      <th>Status</th>
      <th>Function</th>
    </tr>
  </thead>
  <tbody>
    @foreach($equipment as $equip)
    <tr>
      <td>{!! $equip["id"] !!}</td>
      <td>{!! $equip["user_id"] !!}</td>
    
      @foreach($users as $user)
        @if( $equip["user_id"] == $user["id"])
          <td>{!! $user["username"] !!}</td>
        @endif
      @endforeach
      
      @foreach($category as $cate)
        @if( $equip["cate_id"] == $cate["id"])
          <td>{!! $cate["name_category"] !!}</td>     
        @endif
      @endforeach

      @foreach($trademark as $trade)
        @if( $equip["Trademark_id"] == $trade["id"])
          <td>{!! $trade["name"] !!}</td>   
        @endif
      @endforeach

      <td>{!! $equip["VerificationCode"] !!}</td>
      <td>{!! $equip["date_equip"] !!}</td>
      <td>{!! $equip["Status"] !!}</td>

      <td>
        <a href='/Project/projectLaravel/public/edit/{!! $equip["id"] !!}'><i class="fa fa-edit"></i>&nbsp;Update</a>
        <a onclick='javascript:confirmationDelete($(this));return false;' href='/Project/projectLaravel/public/deleteEquipment/{!! $equip["id"] !!}'><i class="fa fa-trash"></i>&nbsp;Delete</a>
      </td>
    </tr>
    @endforeach        
  </tbody>
</table>
</div>
<script type="text/javascript">
  function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
</script>
@endsection