$(function() {
		$('#dang-nhap').click(function(e) {
			e.preventDefault();
			var url = this.attr('data-url');
			$.ajaxSetup({
			        headers: {
			            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			        }
			});
			$.ajax({
					url : url,
					method : 'post',
					data: {
						'email' : $('#email').val(),
						'password' : $('#password').val()
					},
					success: function (data) {
						console.log(data);
						if (data.error == true) {
							$('.error').hide();
							if (data.message.email != undefined) {	
								$('.errorEmail').show().text(data.message.email[0]);
							}
							if (data.message.password != undefined) {
								$('.errorPassword').show().text(data.message.password[0]);
							}
							if (data.message.errorlogin != undefined) {
								$('.errorLogin').show().text(data.message.errorlogin[0]);
							}
						} else {
							window.location.href = "http://localhost/authentication/public/"
						}
					}
				});
		})
	});