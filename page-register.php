<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Jobick : Job Admin Bootstrap 5 Template" />
	<meta property="og:title" content="Jobick : Job Admin Bootstrap 5 Template" />
	<meta property="og:description" content="Jobick : Job Admin Bootstrap 5 Template" />
	<meta property="og:image" content="https://jobick.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Jobick Job Admin</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" id="uname" class="form-control" placeholder="username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" id="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" id="pass" class="form-control" value="Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Confirm Password</strong></label>
                                            <input type="password" id="cpass" class="form-control" value="Confirm Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Phone</strong></label>
                                            <input type="text" id="phone" class="form-control" value="Phone">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Whatsapp Number</strong></label>
                                            <input type="text" id="wphone" class="form-control" value="Whatsapp Number">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" id="sign-up" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="page-login.html">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/dlabnav-init.js"></script>

</body>
</html>


    
<script type="text/javascript">
            
            $(document).ready(function(){
    
                $(document).on("click" , "#sign-up" , function(){
    
                    var username = $("#uname").val();
                    var email = $("#email").val();
                    var password = $("#pass").val();
                    var conpassword = $("#cpass").val();
                    var phone = $("#phone").val();
                    var whatsapp = $("#wphone").val();

                    var result = password.localeCompare(conpassword);


                    if(password.localeCompare(conpassword) == 0){
                        
                        var obj = {
                            
                            fullname : username,
                            email : email,
                            password : conpassword ,
                            phone :  phone,
                            whatsapp : whatsapp ,
                        }

                        fetch('http://localhost:3001/alfajar/user/signup' , {

                            method: "POST",
                            body : JSON.stringify(obj),
                            headers : {
                                'Content-Type' : 'application/json'
                            },
                        })
                        .then((response) => response.json())
                        .then((resp) => {
                            if(resp.message == "Success"){

                                swal({
                                    title: "Success!",
                                    text: "You are registered!",
                                    icon: "success",
                                    button: "Okay!",
                                });
                            
                            }else{
                                swal({
                                    title: "Failed!",
                                    text: "Wrong Credentials!",
                                    icon: "error",
                                    button: "Okay!",
                                });
                            }
                        })

                    }else{

                        swal({
                        title: "Failed!",
                        text: "Password Doesn't Match!",
                        icon: "error",
                        button: "Okay!",
                    });

                    }
    
              
                });
    
            });
    
        </script>