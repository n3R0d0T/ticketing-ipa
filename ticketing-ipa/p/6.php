
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Royalty registration for kids">
    <meta name="author" content="Nero Mangollado">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10; url=http://btspulpppa-ipa.pulpliveworld.com/terms">
    <title>Provincial and Internation Purchase Assistance - Registration Complete!</title>
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
        <div id="formData">
             <?php
               error_reporting(0);
               session_start();

                if (isset($_POST['submit'])) {
                    if (!empty($_SESSION['post'])){

                        /*if (empty($_POST['statuscheck'])
						|| empty($_POST['concert'])
						|| empty($_POST['messagetext'])){
                            
							//Setting error for page 3
							$_SESSION['error_page4'] = "Mandatory field(s) are missing, Please fill it again";
                            header("location: 4.php"); //redirecting to third page
                        } else {*/
                            
                            foreach ($_POST as $key => $value) {
                                $_SESSION['post'][$key] = $value;
                                
                            }
							//function to extract array
                            extract($_SESSION['post']);
                            
                         /**     if ($_SESSION['dayoption'] = 'Both Days') {
                            	if ($_SESSION['section'] = NULL){
                            	$array = array($_SESSION['day1section'], $_SESSION['day2section']);
                            	$_SESSION['section'] = implode(" ", $array); }
                            	$query = mysql_query("insert into royalty_list (FirstName, LastName, Email, mobileNumber, MailingAddress, IDPicture, Facebook, Twitter, Instagram, DayOption, Section, paymentOption, PulpStatus, ConcertExp, Message, orderdatetime) values('$fName','$lName','$email','$mobileNo','$mailingAdd','" . $_SESSION['picture'] . "','$facebook','$twitter','$instagram','$dayoption','$section', '$paymentOption','$statuscheck', '$concert', '$messagetext', current_timestamp())", $connection);
                            		if ($query){
                            		echo "Bothdays";
                            		}else{
                            		
                            		$_SESSION['section']=$_SESSION['dsection'];
                            		
                            }
                            }**/
							
							//Storing values in database
                            $con = mysql_connect("localhost", "pulpweb_nero", "PU1P@dmiN");
                            $db = mysql_select_db("pulpweb_btsroyalty", $con);
                           /** mysql_query("insert into royalty_list (FirstName, LastName, Email, mobileNumber, MailingAddress, IDPicture, Facebook, Twitter, Instagram, DayOption, Section, section2, section3, paymentOption, PulpStatus, ConcertExp, Message, orderdatetime) values('$fName','$lName','$email','$mobileNo','$mailingAdd','" . $_SESSION['picture'] . "','$facebook','$twitter','$instagram','$dayoption', '$dsection', '$day1section', '$day2section', '$paymentOption','$statuscheck', '$concert', '$messagetext', current_timestamp())", $con);**/
                            
                  /**          $result = mysql_query("SELECT * FROM royalty_ppa WHERE first_name='".$fName."' OR last_name='".$lName."' LIMIT 1");
$num_rows = mysql_num_rows($result);

if ($num_rows >= 1) {
  	echo "<div class='responseBox returned'><div class='warrning'></div><h4>YOU ALREADY REAGISTERED!</h4><h5>DATA WAS NOT SAVED</h5></div>";
}**/

    
    $query =  mysql_query("insert into royalty_ppa (first_name, last_name, email, mobile_number, mail_address, soc_facebook, soc_twitter, soc_instagram, order_datetime) values('$fName','$lName','$email','$mobileNo','$mailingAdd','$facebook','$twitter','$instagram', current_timestamp())", $con);
    $query2 = mysql_query("insert into royalty_ppa_order_d1 (vipstanding_a,
             vipstanding_b,
             vipstanding_c,
             vipstanding_d,
             vipstanding_e,
             vip_seated_a_201,
             vip_seated_a_202,
             vip_seated_a_203,
             vip_seated_a_204,
             vip_seated_a_205,
             vip_seated_a_206,
             vip_seated_a_207,
             vip_seated_a_216,
             vip_seated_a_217,
             vip_seated_a_218,
             vip_seated_a_219,
             vip_seated_a_220,
             vip_seated_a_221,
             vip_seated_a_222,
             vip_seated_b_203,
             vip_seated_b_204,
             vip_seated_b_205,
             vip_seated_b_206,
             vip_seated_b_207,
             vip_seated_b_216,
             vip_seated_b_217,
             vip_seated_b_218,
             vip_seated_b_219,
             vip_seated_b_220,
             vip_seated_c_202,
             vip_seated_c_203,
             vip_seated_c_204,
             vip_seated_c_205,
             vip_seated_c_206,
             vip_seated_c_207,
             vip_seated_c_216,
             vip_seated_c_217,
             vip_seated_c_218,
             vip_seated_c_219,
             vip_seated_c_220,
             vip_seated_c_221,
             upper_box_401,
             upper_box_402,
             upper_box_403A,
             upper_box_403B,
             upper_box_404,
             upper_box_405,
             upper_box_406,
             upper_box_407,
             upper_box_416,
             upper_box_417,
             upper_box_418,
             upper_box_419,
             upper_box_420A,
             upper_box_420B,
             upper_box_421,
             upper_box_422,
             upper_box_b_403A,
             upper_box_b_403B,
             upper_box_b_404,
             upper_box_b_405,
             upper_box_b_406,
             upper_box_b_407,
             upper_box_b_416,
             upper_box_b_417,
             upper_box_b_418,
             upper_box_b_419,
             upper_box_b_420A,
             upper_box_b_420B,
             general_501,
             general_502,
             general_503A,
             general_503B,
             general_504,
             general_505,
             general_506,
             general_507,
             general_516,
             general_517,
             general_518,
             general_519,
             general_520A,
             general_520B,
             general_521,
             general_522,
             generic_503A,
             generic_503B,
             generic_504,
             generic_505,
             generic_506,
             generic_507,
             generic_516,
             generic_517,
             generic_518,
             generic_519,
             generic_520A,
             generic_520B) values ('$qty_vipstanding_a',
            '$qty_vipstanding_b', 
            '$qty_vipstanding_c',
            '$qty_vipstanding_d',
            '$qty_vipstanding_e', 
            '$qty_vip_seated_a_201', 
            '$qty_vip_seated_a_202', 
            '$qty_vip_seated_a_203', 
            '$qty_vip_seated_a_204', 
            '$qty_vip_seated_a_205', 
            '$qty_vip_seated_a_206', 
            '$qty_vip_seated_a_207', 
            '$qty_vip_seated_a_216', 
            '$qty_vip_seated_a_217', 
            '$qty_vip_seated_a_218', 
            '$qty_vip_seated_a_219', 
            '$qty_vip_seated_a_220', 
            '$qty_vip_seated_a_221', 
            '$qty_vip_seated_a_222', 
            '$qty_vip_seated_b_203', 
            '$qty_vip_seated_b_204', 
            '$qty_vip_seated_b_205', 
            '$qty_vip_seated_b_206', 
            '$qty_vip_seated_b_207', 
            '$qty_vip_seated_b_216', 
            '$qty_vip_seated_b_217', 
            '$qty_vip_seated_b_218', 
            '$qty_vip_seated_b_219', 
            '$qty_vip_seated_b_220', 
            '$qty_vip_seated_c_202', 
            '$qty_vip_seated_c_203', 
            '$qty_vip_seated_c_204', 
            '$qty_vip_seated_c_205', 
            '$qty_vip_seated_c_206', 
            '$qty_vip_seated_c_207', 
            '$qty_vip_seated_c_216', 
            '$qty_vip_seated_c_217', 
            '$qty_vip_seated_c_218', 
            '$qty_vip_seated_c_219', 
            '$qty_vip_seated_c_220', 
            '$qty_vip_seated_c_221', 
            '$qty_upper_box_401', 
            '$qty_upper_box_402', 
            '$qty_upper_box_403A', 
            '$qty_upper_box_403B', 
            '$qty_upper_box_404', 
            '$qty_upper_box_405', 
            '$qty_upper_box_406', 
            '$qty_upper_box_407', 
            '$qty_upper_box_416', 
            '$qty_upper_box_417', 
            '$qty_upper_box_418', 
            '$qty_upper_box_419', 
            '$qty_upper_box_420A', 
            '$qty_upper_box_420B', 
            '$qty_upper_box_421', 
            '$qty_upper_box_422', 
            '$qty_upper_box_b_403A', 
            '$qty_upper_box_b_403B', 
            '$qty_upper_box_b_404', 
            '$qty_upper_box_b_405', 
            '$qty_upper_box_b_406', 
            '$qty_upper_box_b_407', 
            '$qty_upper_box_b_416', 
            '$qty_upper_box_b_417', 
            '$qty_upper_box_b_418', 
            '$qty_upper_box_b_419', 
            '$qty_upper_box_b_420A', 
            '$qty_upper_box_b_420B', 
            '$qty_general_501', 
            '$qty_general_502', 
            '$qty_general_503A', 
            '$qty_general_503B', 
            '$qty_general_504', 
            '$qty_general_505', 
            '$qty_general_506', 
            '$qty_general_507', 
            '$qty_general_516', 
            '$qty_general_517', 
            '$qty_general_518', 
            '$qty_general_519', 
            '$qty_general_520A', 
            '$qty_general_520B', 
            '$qty_general_521', 
            '$qty_general_522', 
            '$qty_generic_503A', 
            '$qty_generic_503B', 
            '$qty_generic_504', 
            '$qty_generic_505', 
            '$qty_generic_506', 
            '$qty_generic_507', 
            '$qty_generic_516', 
            '$qty_generic_517', 
            '$qty_generic_518', 
            '$qty_generic_519', 
            '$qty_generic_520A', 
            '$qty_generic_520B')", $con);
            
            $query3 = mysql_query("insert into royalty_ppa_order_d2 (vipstanding_a,
             vipstanding_b,
             vipstanding_c,
             vipstanding_d,
             vipstanding_e,
             vip_seated_a_201,
             vip_seated_a_202,
             vip_seated_a_203,
             vip_seated_a_204,
             vip_seated_a_205,
             vip_seated_a_206,
             vip_seated_a_207,
             vip_seated_a_216,
             vip_seated_a_217,
             vip_seated_a_218,
             vip_seated_a_219,
             vip_seated_a_220,
             vip_seated_a_221,
             vip_seated_a_222,
             vip_seated_b_203,
             vip_seated_b_204,
             vip_seated_b_205,
             vip_seated_b_206,
             vip_seated_b_207,
             vip_seated_b_216,
             vip_seated_b_217,
             vip_seated_b_218,
             vip_seated_b_219,
             vip_seated_b_220,
             vip_seated_c_202,
             vip_seated_c_203,
             vip_seated_c_204,
             vip_seated_c_205,
             vip_seated_c_206,
             vip_seated_c_207,
             vip_seated_c_216,
             vip_seated_c_217,
             vip_seated_c_218,
             vip_seated_c_219,
             vip_seated_c_220,
             vip_seated_c_221,
             upper_box_401,
             upper_box_402,
             upper_box_403A,
             upper_box_403B,
             upper_box_404,
             upper_box_405,
             upper_box_406,
             upper_box_407,
             upper_box_416,
             upper_box_417,
             upper_box_418,
             upper_box_419,
             upper_box_420A,
             upper_box_420B,
             upper_box_421,
             upper_box_422,
             upper_box_b_403A,
             upper_box_b_403B,
             upper_box_b_404,
             upper_box_b_405,
             upper_box_b_406,
             upper_box_b_407,
             upper_box_b_416,
             upper_box_b_417,
             upper_box_b_418,
             upper_box_b_419,
             upper_box_b_420A,
             upper_box_b_420B,
             general_501,
             general_502,
             general_503A,
             general_503B,
             general_504,
             general_505,
             general_506,
             general_507,
             general_516,
             general_517,
             general_518,
             general_519,
             general_520A,
             general_520B,
             general_521,
             general_522,
             generic_503A,
             generic_503B,
             generic_504,
             generic_505,
             generic_506,
             generic_507,
             generic_516,
             generic_517,
             generic_518,
             generic_519,
             generic_520A,
             generic_520B) values ('$d2_qty_vipstanding_a',
            '$d2_qty_vipstanding_b',
            '$d2_qty_vipstanding_c',
            '$d2_qty_vipstanding_d',
            '$d2_qty_vipstanding_e',
            '$d2_qty_vip_seated_a_201',
            '$d2_qty_vip_seated_a_202',
            '$d2_qty_vip_seated_a_203',
            '$d2_qty_vip_seated_a_204',
            '$d2_qty_vip_seated_a_205',
            '$d2_qty_vip_seated_a_206',
            '$d2_qty_vip_seated_a_207',
            '$d2_qty_vip_seated_a_216',
            '$d2_qty_vip_seated_a_217',
            '$d2_qty_vip_seated_a_218',
            '$d2_qty_vip_seated_a_219',
            '$d2_qty_vip_seated_a_220',
            '$d2_qty_vip_seated_a_221',
            '$d2_qty_vip_seated_a_222',
            '$d2_qty_vip_seated_b_203',
            '$d2_qty_vip_seated_b_204',
            '$d2_qty_vip_seated_b_205',
            '$d2_qty_vip_seated_b_206',
            '$d2_qty_vip_seated_b_207',
            '$d2_qty_vip_seated_b_216',
            '$d2_qty_vip_seated_b_217',
            '$d2_qty_vip_seated_b_218',
            '$d2_qty_vip_seated_b_219',
            '$d2_qty_vip_seated_b_220',
            '$d2_qty_vip_seated_c_202',
            '$d2_qty_vip_seated_c_203',
            '$d2_qty_vip_seated_c_204',
            '$d2_qty_vip_seated_c_205',
            '$d2_qty_vip_seated_c_206',
            '$d2_qty_vip_seated_c_207',
            '$d2_qty_vip_seated_c_216',
            '$d2_qty_vip_seated_c_217',
            '$d2_qty_vip_seated_c_218',
            '$d2_qty_vip_seated_c_219',
            '$d2_qty_vip_seated_c_220',
            '$d2_qty_vip_seated_c_221',
            '$d2_qty_upper_box_401',
            '$d2_qty_upper_box_402',
            '$d2_qty_upper_box_403A',
            '$d2_qty_upper_box_403B',
            '$d2_qty_upper_box_404',
            '$d2_qty_upper_box_405',
            '$d2_qty_upper_box_406',
            '$d2_qty_upper_box_407',
            '$d2_qty_upper_box_416',
            '$d2_qty_upper_box_417',
            '$d2_qty_upper_box_418',
            '$d2_qty_upper_box_419',
            '$d2_qty_upper_box_420A',
            '$d2_qty_upper_box_420B',
            '$d2_qty_upper_box_421',
            '$d2_qty_upper_box_422',
            '$d2_qty_upper_box_b_403A',
            '$d2_qty_upper_box_b_403B',
            '$d2_qty_upper_box_b_404',
            '$d2_qty_upper_box_b_405',
            '$d2_qty_upper_box_b_406',
            '$d2_qty_upper_box_b_407',
            '$d2_qty_upper_box_b_416',
            '$d2_qty_upper_box_b_417',
            '$d2_qty_upper_box_b_418',
            '$d2_qty_upper_box_b_419',
            '$d2_qty_upper_box_b_420A',
            '$d2_qty_upper_box_b_420B',
            '$d2_qty_general_501',
            '$d2_qty_general_502',
            '$d2_qty_general_503A',
            '$d2_qty_general_503B',
            '$d2_qty_general_504',
            '$d2_qty_general_505',
            '$d2_qty_general_506',
            '$d2_qty_general_507',
            '$d2_qty_general_516',
            '$d2_qty_general_517',
            '$d2_qty_general_518',
            '$d2_qty_general_519',
            '$d2_qty_general_520A',
            '$d2_qty_general_520B',
            '$d2_qty_general_521',
            '$d2_qty_general_522',
            '$d2_qty_generic_503A',
            '$d2_qty_generic_503B',
            '$d2_qty_generic_504',
            '$d2_qty_generic_505',
            '$d2_qty_generic_506',
            '$d2_qty_generic_507',
            '$d2_qty_generic_516',
            '$d2_qty_generic_517',
            '$d2_qty_generic_518',
            '$d2_qty_generic_519',
            '$d2_qty_generic_520A',
            '$d2_qty_generic_520B')", $con);
  // do something else
  if ($query && $query2 && $query3){
                               
    echo "<div class='responseBox sent'><h5>Thank you for your order!
</h5><h6>An email confirmation will be sent to you with instructions on how to pay and claim your order.</h6><div class='checkmark'></div></div>";
      
                                
                              //  echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
                             
  } else {
               // echo mysql_error();
               echo "<div class='responseBox returned'><div class='warrning'></div><h5>SERVER RETURNED AN ERROR</h5><h4>DATA WAS NOT SAVED</h4></div>";
             }

                               

                            

							//destroying session
                            unset($_SESSION['post']);
                          //  unset($_SESSION['picture']);
                          
   			// header("Location: 1.php", true, 303);

                 //   }
                    } else {
                        header("location: personal-info"); //redirecting to first page
                    }
                } else {
                    header("location: personal-info"); //redirecting to first page
                }
                ?>
        </div>
    </div>
    <script src="js/getmdl-select.min.js"></script>
  </body>
</html>