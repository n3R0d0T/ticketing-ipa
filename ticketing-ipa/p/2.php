<?php
session_start();

//checking first page values for empty,If it finds any blank field then redirected to first page
if (isset($_POST['email'])){
    if (empty($_POST['fName'])
    || empty($_POST['lName'])
	|| empty($_POST['email'])
	|| empty($_POST['mobileNo'])){
//    || empty($_POST['picture'])
//    || !empty($_FILES['picture']["tmp_name"])){
        
		//setting error message
		$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: personal-info"); //redirecting to first page
    
        
	} else {
    
	//Sanitizing email field to remove unwanted characters
        $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	
	//After sanitization Validation is performed
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		
	//Validating Contact Field	using regex
            if (!preg_match('/^[\+0-9\-\(\)\s]*$/', $_POST['mobileNo'])){
			
                $_SESSION['error'] = "Not a valid phone number.";
                header("location: personal-info");
            }
            
        } else {
            $_SESSION['error'] = "Invalid Email Address";
            header("location: personal-info");//redirecting to first page
        }
/*        $_SESSION['fName'] = $_POST['fName'];
        $_SESSION['lName'] = $_POST['lName'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['mobileNo'] = $_POST['mobileNo'];
        $_SESSION['mailingAdd'] = $_POST['mailingAdd'];*/
             foreach ($_POST as $key => $value) {
                $_SESSION['post'][$key] = $value;
        }
    }
} else {
    if (empty($_SESSION['error_page2'])) {
        header("location: personal-info");//redirecting to first page
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Royalty registration for kids">
    <meta name="author" content="Nero Mangollado">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Provincial and Internation Purchase Assistance - Social Media Accounts</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.components.ext.min.css">
    <script src="js/material.components.ext.min.js"></script>
<!--
    <script>
      function skillChanged() {
      var skill = document.querySelector('input[name = "skill"]:checked').value;      
      document.getElementById("skills").value = skill;
      }   
    </script>
-->
  </head>
  <body>
    <div id="app" class="modal">
        <form action="order-details-day-1" method="post" id="formData">
        <div class='heading'><div class='modul'>Social Media Links</div></div>
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample3" name="facebook">
            <label class="mdl-textfield__label" for="sample3">Facebook</label>
        </div>
        <p class="mdl-color-text--light-blue-900"><em>ex. facebook.com/username</em>.</p>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample4" name="twitter">
            <label class="mdl-textfield__label" for="sample4">Twitter</label>
        </div>
        <p class="mdl-color-text--light-blue-400"><em>ex. @username</em>.</p>
             <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample5" name="instagram">
            <label class="mdl-textfield__label" for="sample5">Instagram</label>
        </div>
        <p class="mdl-color-text--blue-grey"><em>ex. @username</em>.</p>
            <p><em>* Enter at least one social media account</em>.</p>
            <p><em>* So that we can tag you for future and last minute updates</em>.</p>
          <!--<label for="firstName">First Name</label>
          <input type="text" name="fName" value="">
          <label for="lastName">Last Name</label>
          <input type="text" name="lName" value="">
          <label for="email">Email</label>
          <input type="email" name="email" value="" id="email">
          <label for="mobileNo">Mobile Number</label>
          <input type="text" name="mNumber" value="">
          <label for="mailAddress">Mailing Address</label>
          <input type="text" name="mAddress" value="">-->

          <!--<ul class="radioList">
            <li><input type="radio" name="skill" value="Junior" id="Junior" onchange="skillChanged()"><label for="Junior"></label></li>
            <li><input type="radio" name="skill" value="Intermediate" id="Intermediate" onchange="skillChanged()"><label for="Intermediate"></label></li> 
            <li><input type="radio" name="skill" value="Senior" id="Senior" onchange="skillChanged()"><label for="Senior"></label></li> 
          </ul>  
          <input type="text" id="skills" value="">-->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored agreeButton">
            Next
            </button>
            <p id="error"> <span><?php
//To show error of page 2
if (!empty($_SESSION['error_page2'])) {
    echo $_SESSION['error_page2'];
    unset($_SESSION['error_page2']);
}
?>
                </span>
        </form>
        
    </div>
    <script src="js/script.js"></script>
  </body>
</html>