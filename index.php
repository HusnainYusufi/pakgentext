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
	<title>Clive Shoes Portal</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/clive-favicon.ico" />
    
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
										<a href="index.html"><img src="images/paklogo.jpeg" class="img-fluid" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                 
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" id="email" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" id="password" class="form-control" >
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                         <button style="background-color: #dc2125" type="submit" class="btn btn-primary btn-block" id="sign-in">Sign Me In</button>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
  <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/dlabnav-init.js"></script>
    
 <script type="text/javascript">
            
        $(document).ready(function(){

            $(document).on("click" , "#sign-in" , function(){

                var email = $("#email").val();
                var password = $("#password").val();

                window.location.href = "./index2.php";

                // var obj = {

                //     email : email,
                //     password : password
                // }

                // fetch('http://localhost:3000/portal/userLogin' , {

                //     method: "POST",
                //     body : JSON.stringify(obj),
                //     headers : {
                //         'Content-Type' : 'application/json'
                //     },
                // })
                // .then((response) => response.json())
                // .then((resp) => {
                //     if(resp.message == "Success"){

                      
                //         $.each(resp, function (index, value) { 
                //             sessionStorage.setItem("name", value.fullname);
                //             sessionStorage.setItem("loggedin", value.isLoggedIn);
                        
                //         });
                //         window.location.href = 'index.php';
                //     }else{
                //          swal({
                //             title: "Failed!",
                //             text: "Wrong Credentials!",
                //             icon: "error",
                //             button: "Okay!",
                //          });
                //     }
                // })
            });

        });

    </script>