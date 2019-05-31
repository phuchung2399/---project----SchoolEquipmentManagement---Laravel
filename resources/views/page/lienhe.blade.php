@extends('master')
@section('content')
<div class="beta-map">
    <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1407828576904"></iframe></div>
</div>
<div class="container">
    <div id="content" class="space-top-none">

        <div class="space50">&nbsp;</div>
        <div class="row">
            <div class="col-sm-8">
                <h2>Đóng góp ý kiến</h2>
                <div class="space20">&nbsp;</div>
                <form action="{{route('mailComment')}}" method="post" class="contact-form">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />  
                <div class="form-block">
                        <input name="yourname" type="text" placeholder="Tên của bạn...">
                    </div>
                    <div class="form-block">
                        <input name="youremail" type="email" placeholder="Email của bạn...">
                    </div>
                    <div class="form-block">
                        <textarea name="yourmessage" placeholder="Ý Kiến..."></textarea>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h2>Thông tin liên hệ</h2>
                <div class="space20">&nbsp;</div>

                <h6 class="contact-title">Địa chỉ</h6>
                <p>
                    99 Tô hiến thành, phường An Hải Bắc<br>
                    Quận Sơn Trà, TP. Đà Nẵng
                </p>
                <p>
                    101 Lê Hê Hữa Trác, phường An Hải Đông<br>
                    Quận Sơn Trà, TP. Đà Nẵng
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title">Việc làm</h6>
                <p>
                    Chúng tôi luôn luôn tìm kiếm những người tài năng<br> để
                    gia nhập đội ngũ của chúng tôi.. <br>
                    <a href="#">CamHR@laravel.com</a>
                </p>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection