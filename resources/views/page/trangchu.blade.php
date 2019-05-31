@extends('master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-7">
            
            <div id="slider">
                 <button class="control_prev"><i class="fa fa-chevron-left"></i></button>
				 <ul>
				    @foreach($image as $sl) 
				      <li>
				      	<img src='image/{{$sl["Image"]}}' style="width:100%">
				      </li>
				    @endforeach
				 </ul>  
				 <button class="control_next"><i class="fa fa-chevron-right"></i></button>
			</div>
        </div>
		<div class="col-sm-5">

			<div class="registration-form">

			    <form method="post" action="{{route('form.DangNhap')}}" enctype="multipart/form-data">
			    	{{ csrf_field() }}
			        <h3 class="text-center">Form Đăng Nhập</h3>
	                @if($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{!! $error !!}</li>
								@endforeach
							</ul> 
						</div>
					@endif
			        <div class="form-group">
			            <center><input  type="text" name="username"  minlength="2" placeholder="Email" required></center>
			        </div>
			        <div class="form-group"></div>
						<input type="password" name="password" id="input" minlength="8" class="form-control" placeholder="Password" required="required" >
						<a href="{{route('register')}}"><span style="margin-top: 10px; float: right;">Tạo tài khoản</span></a>
					</div>
					<div class="form-group"></div>
					<center><button style="margin-top: 20px; margin-right: -150px;" type="submit" class="btn btn-primary">Đăng nhập</button></center>
					</div>
			    </form>
			</div>
	    </div>
	</div>
</div> <!-- container -->
<br> <br>
<div class="container">
	<div class="row">

		<h1>Các mẹo sửa máy tính</h1>
		<div class="col-sm-6">
			<h3><b>Cách sửa về mạng</b></h3>
		      <br>
		      <div class="col-sm-6">
		      	<img src=".\image\LoiKhongVaoDuocMang-640.jpg">
		      </div>
		      <div class="col-sm-6">
			      	Mạng Lan là một giải pháp tiện lợi để tăng tính hiệu quả trong công việc. Nhất là đối với các công việc đặc thù đòi hỏi tính tập thể, làm việc theo nhóm. Trong cùng mạng Lan, mọi người có thể dễ dàng trao đổi các Project, chia sẻ tài nguyên, dữ liệu cho các máy tính...
			     <a style="background-color: white	 " href="https://hoangtham.com/cach-sua-loi-khong-tim-thay-may-tinh-khac-trong-mang-lan-voi-win-7-8-10/
				    ">Xem thêm...
				 </a>
		     </div>
		       
		      
		</div>
		<div class="col-sm-6">
			<h3><b>Lỗi màng hình và cách khắc phục</b></h3>
		      <br>
		      <div class="col-sm-6">
		      	<img src=".\image\phai-lam-sao-khi-gap-man-hinh-xanh-chet-choc-tren-windows-01.jpg">
		      </div>
		      <div class="col-sm-6">
			      	Sau một thời gian dài sử dụng liên tục, màn hình máy tính của bạn xảy ra lỗi hoặc bị hư hỏng và bạn không biết nguyên nhân dẫn đến vấn đề cũng như cách khắc phục ra sao? Vậy thì bài viết dưới đây chính là câu trả lời thỏa đáng nhất dành cho bạn...
			       <a style="background-color: white " href="http://vienmaytinh.com/cac-loi-thuong-gap-o-man-hinh-va-cach-khac-phuc.html">Xem thêm...
				   </a>
		      </div>
		</div>
	</div>
</div>
       <br><br>

 <div class="container">
	<div class="row">
		<div class="col-sm-6">
		     <h3><b>Cách sửa màn hình bị đảo ngược</b></h3> 
		      <br>
		      <div class="col-sm-6">
		      	<img src=".\image\manhinh.jpg">
		      </div>
		      <div class="col-sm-6">
			      	Bạn đang dùng vi tính bỗng màn hình bị đảo ngược gây hoang mang lo sợ. Đừng lo lắng vì ngay dưới đây sửa chữa máy tính tại nhà 247 sẽ hướng dẫn cách sửa màn hình vi tính bị lộn ngược...
			      <a style="background-color: white " href="https://quantrimang.com/sua-loi-man-hinh-may-tinh-bi-quay-nguoc-116907">Xem thêm...
				  </a>
		      </div>
		      
		 </div>
		 <div class="col-sm-6">
			<h3><b>Cách sửa mainboard máy tính</b></h3>
			   <br>
		       <div class="col-sm-6">
		      	<img src=".\image\mainboard.jpg">
		      </div>
		      <div class="col-sm-6">
			      	Với các bạn đã có kinh nghiệm trong quá trình láp ráp và sửa main máy tính thì việc khỏi cần card test main là rất bình thường. Nhưng nếu bạn gặp một sự cố nặng hơn thì việc đó rất cần thiết...
			      <a style="background-color: white " href="http://suamaytinhtainha247.com/Tin-tuc/2673575/136/Cach-sua-mainboard-may-tinh.html">Xem thêm...
				 </a>
		      </div>
		   </div>
		</div>
	</div>
</div>
       <br><br>      
<div class="container">
	<div class="row">
		
		<div class="col-sm-6">
			<h3><b>Cách sửa lỗi RAM kêu khi khởi động máy tính</b></h3>
		      <br>
		      <div class="col-sm-6">
		      	<img src=".\image\ramkeu.jpg">
		      </div>
		      <div class="col-sm-6">
		      		Khi khởi động máy tính, nhiều người dùng thường nghe thấy có những tiếng kêu “bip, bip” phát ra. Có nhiều nguyên nhân, và có nhiều cách chẩn đoán. Vì tiếng kêu phát ra khác nhau về số lượng, khoảng cách giữa mỗi lần kêu nên sẽ có những lỗi khác nhau...
			      <a style="background-color: white " href="http://thuthuat.taimienphi.vn/sua-loi-ram-keu-bip-bip-khi-khoi-dong-605n.aspx">Xem thêm...
				 </a>
		      </div>
		</div>
		<div class="col-sm-6">
			<h3><b>Giải quyết tình trạng ngốn RAM và CPU của Windows 10</b></h3>	      
		      <br>
		      <div class="col-sm-6">
		      	<img src=".\image\ram.jpg">
		      </div>
		      <div class="col-sm-6">
		      		Nhiều người dùng Windows 10 báo cáo trên Reddit và diễn đàn Microsoft về một số tiến trình (ntoskrnl.exe) trong Windows 10 làm chậm máy vì dùng quá nhiều RAM và CPU. Dưới đây là một số cách để nâng cao RAM và CPU trong Windows 10...
			      <a style="background-color: white " href="https://www.techsignin.com/lam-the-nao/giai-quyet-ngon-ram-cpu-trong-windows-10/">Xem thêm...
				 </a>
		      </div>
		      
		</div>

	</div>
</div>
<br> <br>
	@endsection