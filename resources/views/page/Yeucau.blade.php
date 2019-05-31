@extends('master')
@section('content')
<div class="registration-form">
    <form method="post" action="{{route('mail')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <h3 class="text-center">Form Gửi Yêu Cầu</h3>
        <div class="form-group">
            <center><input class="form-control item" type="text" name="ten" pattern="[a-Z]" placeholder="Tên sinh viên..." required></center>
        </div>
        <div class="form-group">
            <center><input class="form-control item" type="text" name="lop" pattern="[a-Z]" placeholder="Lớp  - phòng học...." value="lớp - phòng" required></center>
        </div>
        <div class="form-group">
            <center><input class="form-control item" type="text" name="thietBi" pattern="[a-Z]"  placeholder="Tên thiết bị hư hỏng...." required></center>
        </div>
        
        <div class="form-group">
            <center><button class="btn btn-primary btn-block create-account" type="submit" style="width: 30%">Submit</button></center>
        </div>
    </form>
</div>
@endsection

	

	
		
	
