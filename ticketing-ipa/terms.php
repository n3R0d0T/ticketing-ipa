<?php
//Session starts here
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Royalty registration for kids">
    <meta name="author" content="Nero Mangollado">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Provincial and Internation Purchase Assistance - Terms</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/dialog-polyfill.css">
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.components.ext.min.css">
    <script src="js/material.components.ext.min.js"></script>
    <script src="js/dialog-polyfill.js"></script>
  </head>
  <body>
    <div id="app" class="modal">
        <form action="personal-info" method="post" id="formData2">
            <img style="position: center;" src="img/terms.jpg"/>

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
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="agree-check">
                                <input type="checkbox" name="agree-check" id="agree-check" class="mdl-checkbox__input"/>
                                <span class="mdl-checkbox__label">I agree, read and understand the terms and conditions indicated above.</span>
                            </label>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored agreeButton" id="agree-button" disabled>
            Next
            </button>
            
                       <p id="error"><span> <?php
                    if (!empty($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </span></p> 
        </form>
        <script>
            var chk = document.getElementById('agree-check');
            var btn = document.getElementById('agree-button');
 // when unchecked or checked, run the function
        chk.onchange = function(){
            if(this.checked){
            btn.disabled = false;
                } else {
                btn.disabled = true;
                    }

            }
        </script>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>