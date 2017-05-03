<?php
session_start();
//checking second page values for empty,If it finds any blank field then redirected to second page
if (isset($_POST['facebook'])){
    if (empty($_POST['facebook'])
	|| empty($_POST['twitter'])
	|| empty($_POST['instagram'])){
		
		//setting error message
  /*      $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: 3.php");*///redirecting to second page
    
	} else {
		//fetching all values posted from second page and storing it in variable
        
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
    }
} else {
    if (empty($_SESSION['error_page3'])) {
        header("location: social-accounts");//redirecting to first page
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
    <title>Provincial and Internation Purchase Assistance - Order Details Day 1</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/getmdl-select.min.css">
    <link rel="stylesheet" href="css/dialog-polyfill.css">
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.components.ext.min.css">
    <script src="js/material.components.ext.min.js"></script>
    <script src="js/dialog-polyfill.js"></script>
    
  </head>
  <body>
    <div id="app" class="modal">
        <form action="order-details-day-2" method="post" id="formData3">
            <div class='heading'><div class='modul'>Order Details for Day 1</div></div>
                            <!--<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="dayOne">
                                <input type="radio" id="dayOne" class="mdl-radio__button" name="dayoption" value="1" checked/>
                                <span class="mdl-radio__label">Day 1</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="dayTwo">
                                <input type="radio" id="dayTwo" class="mdl-radio__button" name="dayoption" value="2"/>
                                <span class="mdl-radio__label">Day 2</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="bothDays">
                                <input type="radio" id="bothDays" class="mdl-radio__button" name="dayoption" value="3"/>
                                <span class="mdl-radio__label">Both Days</span>
             
</label>-->
                <!--<ul class="section-price-list mdl-list">
                        <li class="mdl-list__item mdl-list__item--three-line">
                            <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-avatar">check_circle</i>
                                    <span>VIP STANDING A-E</span>
                                <span class="mdl-list__item-text-body">
                                    Price: &#8369; 11, 025.00<br/>
                                    VIP Standing A to E.
                </span>
            </span>
  </li>
  <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">check_circle</i>
      <span>VIP Seated A</span>
      <span class="mdl-list__item-text-body">
        Price: &#8369; 13, 125.00<br/>
          Available sections: 201-207 and 216-222.
      </span>
    </span>
  </li>
  <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">check_circle</i>
      <span>VIP Seated B</span>
      <span class="mdl-list__item-text-body">
            Price: &#8369; 10, 500.00<br/>
          Available sections: 203-207 and 216-220.
      </span>
    </span>
  </li>
                    <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">check_circle</i>
      <span>VIP Seated C</span>
      <span class="mdl-list__item-text-body">
        Price: &#8369; 7, 875.00<br/>
          Available sections: 202-207 and 216-221.
      </span>
    </span>
  </li>
                    <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">check_circle</i>
      <span>Upper Box A</span>
      <span class="mdl-list__item-text-body">
        Price: &#8369; 5, 775.00<br/>
          Available sections: 401-407 and 416-422.
      </span>
    </span>
  </li>
                    <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">check_circle</i>
      <span>Upper Box B</span>
      <span class="mdl-list__item-text-body">
        Price: &#8369; 4, 725.00<br/>
          Available sections: 403A/403B-407 and 416-420A/420B.
      </span>
    </span>
  </li>
                    <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">check_circle</i>
      <span>General Admission</span>
      <span class="mdl-list__item-text-body">
        Price: &#8369; 2, 100.00<br/>
          Available sections: 501-507 and 516-522.
      </span>
    </span>
  </li>
                    <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">check_circle</i>
      <span>Generic Admission</span>
      <span class="mdl-list__item-text-body">
        Price: &#8369; 1, 050.00<br/>
          Available sections: 503A/503B-507 and 516-520A/520B.
      </span>
    </span>
  </li>
</ul>-->
            <!--<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--9-col"><h6>VIP STANDING Price: &#8369; 11, 025.00</h6>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="vipstandA">
                                <input type="checkbox" name="vipstandingA" id="vipstandA" value="VIP Standing A" class="mdl-checkbox__input"/>
                                <span class="mdl-checkbox__label">VIP Standing A</span>
                            </label>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" name="quantity[]">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div>
      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="vipstandB">
                                <input type="checkbox" name="vipstandingB" id="vipstandB" value="VIP Standing B" class="mdl-checkbox__input"/>
                                <span class="mdl-checkbox__label">VIP Standing B</span>
                            </label>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" name="quantity[]">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div>
      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="vipstandC">
                                <input type="checkbox" name="vipstandingC" id="vipstandC" value="VIP Standing C" class="mdl-checkbox__input"/>
                                <span class="mdl-checkbox__label">VIP Standing C</span>
                            </label>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" name="quantity[]">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div>
      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="vipstandD">
                                <input type="checkbox" name="vipstandingD" id="vipstandD" value="VIP Standing D" class="mdl-checkbox__input"/>
                                <span class="mdl-checkbox__label">VIP Standing D</span>
                            </label>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" name="quantity[]">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div>
      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="vipstandE">
                                <input type="checkbox" name="vipstandingE" id="vipstandE" value="VIP Standing E" class="mdl-checkbox__input"/>
                                <span class="mdl-checkbox__label">VIP Standing E</span>
                            </label>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" name="quantity[]">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div>
                </div>
</div>-->
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
            <br/>
            
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
      <div class="mdl-tabs__tab-bar">
          <a href="#vip-standing-panel" class="mdl-tabs__tab is-active">VIP&nbsp;Standing</a>
          <a href="#vip-seated-panel" class="mdl-tabs__tab">VIP&nbsp;Seated</a>
          <a href="#upper-box-panel" class="mdl-tabs__tab">Upper&nbsp;Box</a>
          <a href="#general-admission-panel" class="mdl-tabs__tab">General&nbsp;Admission</a>
          <a href="#generic-admission-panel" class="mdl-tabs__tab">Generic&nbsp;Admission</a>
      </div>
    
      <div class="mdl-tabs__panel is-active" id="vip-standing-panel">
          <br/>
          <h4 class="" style="margin-left: 150px;"><em>Price: &#8369; 11, 025.00</em></h4>
        <ul style="list-style: none; margin-left: 150px;">
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vipstanding_text">
            <input class="mdl-textfield__input" type="text" name="vipstanding_a" value="VIP Standing A" disabled>
            <label class="mdl-textfield__label" for="vipstanding_text"> Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vipstanding_a">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vipstanding_text">
            <input class="mdl-textfield__input" type="text" name="vipstanding_b" value="VIP Standing B" disabled>
            <label class="mdl-textfield__label" for="vipstanding_text"> Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vipstanding_b">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vipstanding_text">
            <input class="mdl-textfield__input" type="text" name="vipstanding_c" value="VIP Standing C" disabled>
            <label class="mdl-textfield__label" for="vipstanding_text"> Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vipstanding_c">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vipstanding_text">
            <input class="mdl-textfield__input" type="text" name="vipstanding_d" value="VIP Standing D" disabled>
            <label class="mdl-textfield__label" for="vipstanding_text"> Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vipstanding_d">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vipstanding_text">
            <input class="mdl-textfield__input" type="text" name="vipstanding_e" value="VIP Standing E" disabled>
            <label class="mdl-textfield__label" for="vipstanding_a_text"> Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vipstanding_e">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
        </ul>
      </div>
      <div class="mdl-tabs__panel" id="vip-seated-panel">
          <br/>
          <h4 class=""><em>VIP Seated A Price: &#8369; 13,125.00</em></h4>
          <ul style="list-style: none; margin-left: 150px;">
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_201" value="VIP Seated A 201" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_201">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_202" value="VIP Seated A 202" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_202">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_203" value="VIP Seated A 203" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_203">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_204" value="VIP Seated A 204" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_204">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_205" value="VIP Seated A 205" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_205">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_206" value="VIP Seated A 206" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_206">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_207" value="VIP Seated A 207" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_207">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_216" value="VIP Seated A 216" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_216">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_217" value="VIP Seated A 217" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_217">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_218" value="VIP Seated A 218" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_218">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_219" value="VIP Seated A 219" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_219">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_220" value="VIP Seated A 220" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_220">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_221" value="VIP Seated A 221" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_221">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_a_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_a_222" value="VIP Seated A 222" disabled>
            <label class="mdl-textfield__label" for="vip_seated_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_a_222">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
          </ul>
          
          <br/>
          <h4 class=""><em>VIP Seated B Price: &#8369; 10,500.00</em></h4>
          <ul style="list-style: none; margin-left: 150px;">
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_203" value="VIP Seated B 203" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_203">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_204" value="VIP Seated B 204" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_204">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_205" value="VIP Seated B 205" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_205">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_206" value="VIP Seated B 206" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_206">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_207" value="VIP Seated B 207" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_207">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_216" value="VIP Seated B 216" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_216">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_217" value="VIP Seated B 217" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_217">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_218" value="VIP Seated B 218" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_218">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_219" value="VIP Seated B 219" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_219">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_b_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_b_220" value="VIP Seated B 220" disabled>
            <label class="mdl-textfield__label" for="vip_seated_b_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_b_220">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
          </ul>
          
           <br/>
          <h4 class=""><em>VIP Seated C Price: &#8369; 7,875.00</em></h4>
          <ul style="list-style: none; margin-left: 150px;">
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_202" value="VIP Seated C 202" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_202">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_203" value="VIP Seated C 203" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_203">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_204" value="VIP Seated C 204" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_204">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_205" value="VIP Seated C 205" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_205">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_206" value="VIP Seated C 206" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_206">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_207" value="VIP Seated C 207" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_207">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_216" value="VIP Seated C 216" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_216">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_217" value="VIP Seated C 217" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_217">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_218" value="VIP Seated C 218" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_218">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_219" value="VIP Seated C 219" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_219">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_220" value="VIP Seated C 220" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_220">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="vip_seated_c_text">
            <input class="mdl-textfield__input" type="text" name="vip_seated_c_221" value="VIP Seated C 221" disabled>
            <label class="mdl-textfield__label" for="vip_seated_c_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_vip_seated_c_221">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
          </ul>
      </div>
      <div class="mdl-tabs__panel" id="upper-box-panel">
         <br/>
          <h4 class=""><em>Upper Box A Price: &#8369; 5,775.00</em></h4>
          <ul style="list-style: none; margin-left: 150px;">
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_401" value="Upper Box A 401" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_401">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_402" value="Upper Box A 402" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_402">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_403A" value="Upper Box A 403A" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_403A">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_403B" value="Upper Box A 403B" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_403B">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_404" value="Upper Box A 404" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_404">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_405" value="Upper Box A 405" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_405">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_406" value="Upper Box A 406" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_406">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_407" value="Upper Box A 407" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_407">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_416" value="Upper Box A 416" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_416">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_417" value="Upper Box A 417" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_417">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_418" value="Upper Box A 418" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_418">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_419" value="Upper Box A 419" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_419">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_420A" value="Upper Box A 420A" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_420A">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_420B" value="Upper Box A 420B" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_420B">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_421" value="Upper Box A 421" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_421">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_a_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_422" value="Upper Box A 422" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_422">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
          </ul>
          
          <br/>
          <h4 class=""><em>Upper Box B Price: &#8369; 4,725.00</em></h4>
          <ul style="list-style: none; margin-left: 150px;">
              <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_403A" value="Upper Box B 403A" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_403A">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_403B" value="Upper Box B 403B" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_403B">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_404" value="Upper Box B 404" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_404">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_405" value="Upper Box B 405" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_405">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_406" value="Upper Box B 406" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_406">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_407" value="Upper Box B 407" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_407">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_416" value="Upper Box B 416" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_416">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_417" value="Upper Box B 417" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_417">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_418" value="Upper Box B 418" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_418">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_419" value="Upper Box B 419" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_419">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_420A" value="Upper Box B 420A" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_420A">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
               <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="upper_box_b_text">
            <input class="mdl-textfield__input" type="text" name="upper_box_b_420B" value="Upper Box B 420B" disabled>
            <label class="mdl-textfield__label" for="upper_box_a_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_upper_box_b_420B">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
          </ul>


      </div>
    <div class="mdl-tabs__panel" id="general-admission-panel">
        <br/>
          <h4 class=""><em>Price: &#8369; 2,100.00 - Maximum of 2 for all sections.</em></h4>
        <ul style="list-style: none; margin-left: 150px;">
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_501" value="General Admission 501" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_501">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_502" value="General Admission 502" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_502">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_503A" value="General Admission 503A" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_503A">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_503B" value="General Admission 503B" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_503B">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_504" value="General Admission 504" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_504">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_505" value="General Admission 505" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_505">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_506" value="General Admission 506" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_506">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_507" value="General Admission 507" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_507">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_516" value="General Admission 516" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_516">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_517" value="General Admission 517" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_517">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_518" value="General Admission 518" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_518">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_519" value="General Admission 519" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_519">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_520A" value="General Admission 520A" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_520A">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_520B" value="General Admission 520B" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_520B">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_521" value="General Admission 521" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_521">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
            <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="general_admission_text">
            <input class="mdl-textfield__input" type="text" name="general_522" value="General Admission 522" disabled>
            <label class="mdl-textfield__label" for="general_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_general_522">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
        </ul>
        
      </div>
    <div class="mdl-tabs__panel" id="generic-admission-panel">
         <br/>
          <h4 class=""><em>Price: &#8369; 1,050.00 - Maximum of 2 for all sections.</em></h4>
        <ul style="list-style: none; margin-left: 150px;">
          <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_503A" value="Generic Admission 503A" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_503A">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_503B" value="Generic Admission 503B" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_503B">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_504" value="Generic Admission 504" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_504">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_505" value="Generic Admission 505" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_505">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_506" value="Generic Admission 506" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_506">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_507" value="Generic Admission 507" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_507">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_516" value="Generic Admission 516" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_516">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_517" value="Generic Admission 517" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_517">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_518" value="Generic Admission 518" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_518">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_519" value="Generic Admission 519" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_519">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_520A" value="Generic Admission 520A" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_520A">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
             <li><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="generic_admission_text">
            <input class="mdl-textfield__input" type="text" name="generic_520B" value="Generic Admission 520B" disabled>
            <label class="mdl-textfield__label" for="generic_admission_text">Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="qty_generic_520B">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div></li>
        </ul>
      </div>
    </div>
          <!--  <div class="mdl-grid" id="section-quantity-input">
  <div class="mdl-cell mdl-cell--10-col"><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="main_section_text">
            <input class="mdl-textfield__input" type="text" name="main_section[]">
            <label class="mdl-textfield__label" for="main_section_text">Main Section</label>
        </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="quantity_text">
            <input class="mdl-textfield__input" type="text" name="quantity[]">
            <label class="mdl-textfield__label" for="quantity_text">Quantity</label>
        </div> </div>
                            <button class="mdl-button mdl-js-button mdl-button--icon" id="add_order">
            <i class="material-icons">add</i>
                        </button>
                <button class="mdl-button mdl-js-button mdl-button--icon" id="add_order">
            <i class="material-icons">delete</i>
                        </button>
                </div>-->

            
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored agreeButton" name="submit">
            Next
            </button>
                
            <p id="error"><span><?php
                    if (!empty($_SESSION['error_page4'])) {
                        echo $_SESSION['error_page4'];
                        unset($_SESSION['error_page4']);
                    }
                    ?>
                </span>
            </p>
        </form>
        
    </div>
    <script src="js/getmdl-select.min.js"></script>
    <script>
    	
    </script>
  </body>
</html>