@extends('admin.index')
@section('content')
<div class="table-responsive">
<table class="table table-hover width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>User Name</th>
      <th>Class</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user as $userList)
    <tr>
      <td>{!! $userList["ID"] !!}</td>
      <td>{!! $userList["UserName"] !!}</td>
      <td>{!! $userList["Class"] !!}</td>
      <td>{!! $userList["Email"] !!}</td>
      <td>{!! $userList["Password"] !!}</td>
      <td>
      <a onclick='javascript:confirmationDelete($(this));return false;' href="{{ route('Equipment.getDeleteUser',$userList["ID"]) }}"><i class="fa fa-trash"></i>&nbsp;Delete</a>
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