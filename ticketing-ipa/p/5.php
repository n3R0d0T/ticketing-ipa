<?php
error_reporting(0);
session_start();
//checking second page values for empty,If it finds any blank field then redirected to second page
if (isset($_POST['submit'])){
   // if (empty($_POST['facebook'])
	//|| empty($_POST['twitter'])
	//|| empty($_POST['instagram'])){
		
		//setting error message
  /*      $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: 3.php");*///redirecting to second page
    
	//} else {
		//fetching all values posted from second page and storing it in variable
        
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
   // }
} 
/*else {
    if (empty($_SESSION['error_page3'])) {
        header("location: order-details-day-1");//redirecting to first page
    }
}*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Royalty registration for kids">
    <meta name="author" content="Nero Mangollado">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Provincial and Internation Purchase Assistance - Reminder</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/getmdl-select.min.css">
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.components.ext.min.css">
    <script src="js/material.components.ext.min.js"></script>
    <script>
/*       (function() {
    'use strict';
    var dialogButton = document.querySelector('.dialog-button');
    var dialog = document.querySelector('#dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
    });
  }()); */
    </script>
  </head>
  <body>
    <div id="app" class="modal">
        <form action="registration-complete" method="post" id="formData">
             <div class='responseBox sent'><h5>Reminder!</h5><h6>1. This form is available until <em>March 27, 2017, 12NN</em><br/><br/>
                 

2. Once total amount is emailed to you, you have until <em>March 29, 2017, 12NN</em> to send back your deposit slip/proof of payment.<br/><br/>
                 3. If payments are not received at the deadline you will automatically be removed from the list.<br/><br/>

4. No exchange. No refund. So THINK and DECIDE carefully before clicking.</h6></div>
             <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored agreeButton" name="submit">
            Submit
            </button>
          
            <p id="error"> <span><?php
//To show error of page 2
if (!empty($_SESSION['error_page2'])) {
    echo $_SESSION['error_page2'];
    unset($_SESSION['error_page2']);
}
                
                ?></span></p>
        </form>
    </div>
    <script src="js/getmdl-select.min.js"></script>
  </body>
</html>