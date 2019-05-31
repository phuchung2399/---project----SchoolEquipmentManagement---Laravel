@extends('master')
@section('content')
<div class="registration-form">
				<form action="{{route('page.register')}}" method="post" class="beta-form-checkout" id="registration" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="row">
						<div class="col-sm-3"></div>										
						<div class="col-sm-6">
							<center>
								<h1>Đăng kí</h1>
							</center>
							<div class="space20">&nbsp;</div>
							
							<div class="form-group">
							<label for="user_name">User Name*</label>
							<center>
								<input type="text" name="UserName" id="input" class="form-control" placeholder="User Name"  required>
							</center>
							</div>
					
							<div class="form-group">
							<label for="your_class">Class*</label>
							<center>
								<input type="text" name="Class" id="input" class="form-control" placeholder="Class" required>
							</center>
							</div>
							<div class="form-group">
							<label for="email">Email*</label>
							<center>
								<input type="email" name="Email" id="input" class="form-control" placeholder="Email"  required>
							</center>							
							</div>


							<div class="form-group">
							<label for="password">Password*</label>
							<center>
								<input type="password" name="Password" id="input" class="form-control" placeholder="Password" required="required" >
							</center>
							</div>
							
							<div class="form-group">
							<label for="password">Re password*</label>
							<center>
								<input type="password" name="re_password" id="input" class="form-control" placeholder="Re password" required="required" >
							</center>
							</div>						
								@if(count($errors)>0)
									<div class="alert alert-danger">
										@foreach($errors->all() as $err)
										{{$err}}
										@endforeach
									</div>
								@endif
								@if(Session::has('thanhcong'))
									<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
								@endif
							<div class="form-group">
								<center>
									<button type="submit" class="btn btn-primary">Register</button>
								</center>
							</div>


						</div>
					</div>
				</form>
			</div>
			@endsection