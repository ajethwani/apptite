
<!DOCTYPE html>
<html lang="en-us"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta charset="utf-8">

<title>Funshoppers Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h3 class="animated bounceInDown">Funshoppers</h3>
<div class="form">
<div class="header"><h2>Register Now!</h2></div>
<br>
<div class="login">




<div>
<ul>
<li>
<span class="un"><i class="fa fa-user"></i></span><input type="email" required class="text email_id" name="email" placeholder="EmailId" id="login-user"  ></li>
<li>
<button type="submit" name="register" class="btn btn_register">Register</button>
<br>
<div class="result" style="color:white;text-align:center">
   <img class="loader" src="assets/image/hourglass.svg">
</div>
</li>
</ul>
</div>




</div><br>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $('.loader').hide();
  $('.btn_register').click(function(){
      $('.loader').show();
    var email=$('.email_id').val();
    $.ajax({
                    type: 'POST',
                    url: 'api/admin_reg.php',
                    data:{
                        email:email
                        },
                    success: function(data) {
                        $('.loader').hide();
                        $('.result').html(data);
                    }
                });
  });
});
</script>


</body></html>
