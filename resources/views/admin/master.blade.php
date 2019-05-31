<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .container {
            padding: 400px 200px;
        }

        .background1 {
            background: transparent url("img/background1.png") center 0 no-repeat;
        }

        .background2 {
            background: transparent url("img/background2.png") center 0 no-repeat;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <!-- Custom fonts for this template-->
    <link href="http://localhost:8000/Project/projectLaravel/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="http://localhost:8000/Project/projectLaravel/public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="http://localhost:8000/Project/projectLaravel/public/css/sb-admin.css" rel="stylesheet">
</head>
<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://localhost:8000/Project/projectLaravel/public/vendor/jquery/jquery.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="http://localhost:8000/Project/projectLaravel/public/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="http://localhost:8000/Project/projectLaravel/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Page level plugin JavaScript-->
<!-- Custom scripts for all pages-->
<script src="http://localhost:8000/Project/projectLaravel/public/js/sb-admin.min.js"></script>
<!-- Demo scripts for this page-->
<script>
    $(document).ready(function() {
        $('#username').keyup(function() { //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
            var query = $(this).val(); //lấy gía trị ng dùng gõ
            if (query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
            {
                var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                $.ajax({
                    url: "{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
                    method: "POST", // phương thức gửi dữ liệu.
                    data: {
                        query: query,
                        _token: _token
                    },
                    success: function(data) { //dữ liệu nhận về
                        $('#listname').fadeIn();
                        $('#listname').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là listname
                    }
                });
            }
        });

        $(document).on('click', 'li', function() {
            $('#username').val($(this).text());
            $('#listname').fadeOut();
        });

    });
    $(document).ready(function() {
        $("input#username").blur(function() {
            $('#listname').fadeOut();
        });
    })
</script>