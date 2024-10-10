
<!doctype html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/loginpage.css"/>
    <title>Bulk WAPP</title>
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="card" style="box-shadow: 0px 0px 26px #dcdcdc;border: 1px solid #2a40a761; ">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 test-login" style="margin:auto;text-align:center;">
					 					<!-- <img src="assets/images/logo/bulklogin.jpg" class="img-responsive" style="max-width:100%;" alt="Login Screen" title="Login Screen"> -->
                    <img src="assets/images/logo/bulklogin.jpeg" class="img-responsive" style="max-width:100%;" alt="Login Screen" title="Login Screen">
                </div>
                <div class="col-md-6">
                    <form method="POST" name="signin" id="FormID" onsubmit="return checkform(this);" autocomplete="off">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group ">
									<label for="username">Member ID</label>
                                    <input id="username" type="text" class="form-control form-control-lg" name="username" placeholder="Username" required="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control form-control-lg" name="password" required="" autocomplete="off">
                                </div>
                            </div>
                            
                        </div>
                        <div class="capbox" style="text-align:center;">
                             <div class="form-control" id="CaptchaDiv" style="-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;-o-user-select: none;user-select: none;
                                background: url(assets/images/captcha_back.jpg) 45% 78%;
                                color: #000;
                                text-align: center;
                                border-radius: 5px;
                                font-size: 16px;
                                font-weight: bold;
                                letter-spacing: 0.4em;"><span ></span>
                             </div>
                             <div class="capbox-inner">
                                <input type="hidden" id="txtCaptcha" class="preventcopy"><br>
                                <input type="text" class="form-control" placeholder="Enter Captch Code" name="CaptchaInput" id="CaptchaInput" size="15"><br>
                             </div>
                          </div>
                        <div class="text-center">
							<button class="btn btn-success btn-lg" style="background: #2a40a7;" type="submit" name="logn">Login</button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="assets/js/jquery-3.6.4.min.js"></script>
<script src="assets/js/homepage.js"></script>
<script type="text/javascript">

function checkform(theform){
    var why = "";
    
    if(theform.CaptchaInput.value == ""){
    why += "- Please Enter CAPTCHA Code.\n";
    }
    if(theform.CaptchaInput.value != ""){
    if(ValidCaptcha(theform.CaptchaInput.value) == false){
    why += "- The CAPTCHA Code Does Not Match.\n";
    }
    }
    if(why != ""){
    alert(why);
    return false;
    }
    }
    
    var a = Math.ceil(Math.random() * 9)+ '';
    var b = Math.ceil(Math.random() * 9)+ '';
    var c = Math.ceil(Math.random() * 9)+ '';
    var d = Math.ceil(Math.random() * 9)+ '';
    var e = Math.ceil(Math.random() * 9)+ '';
    
    var code = a + b + c + d + e;
    document.getElementById("txtCaptcha").value = code;
    document.getElementById("CaptchaDiv").innerHTML = code;
    
    // Validate input against the generated number
    function ValidCaptcha(){
    var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
    var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
    if (str1 == str2){
    return true;
    }else{
    return false;
    }
    }
    
    // Remove the spaces from the entered and generated code
    function removeSpaces(string){
    return string.split(' ').join('');
    }
</script>

