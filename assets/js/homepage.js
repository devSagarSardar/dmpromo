$("#username").on('change', function(){
    var UserName = $("#username").val();
    if(UserName != ""){
        $.ajax({
            url: "include/ajax.php",
            type: "POST",
            data: {
                UserName :UserName,
            },
            success: function(dataResult) {
                if(dataResult != 0){
                $("#FormID").html(dataResult);
                }
            }
        });
    }
 });
// <!-- ============================ -->

document.oncontextmenu =new Function("return false;")
$(document).keydown(function (event) {
if (event.keyCode == 123) { // Prevent F12
  return false;
} else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
  return false;
}
});

document.onkeydown = function(e) {
if (e.ctrlKey && 
  (
  //   e.keyCode === 67 || 
  //   e.keyCode === 86 || 
    e.keyCode === 85 || 
    e.keyCode === 117)) {
  return false;
} else {
  return true;
}
};
$(document).keypress("u",function(e) {
if(e.ctrlKey)
{
return false;
}
else
{
return true;
}
});


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