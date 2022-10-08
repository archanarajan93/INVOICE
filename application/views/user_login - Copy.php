<?php //$user_session = $this->session->userdata("ACCSTAYLOGIN"); if($user_session && isset($user_session["user_name"])){ redirect('/Dashboard', 'refresh'); }?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accounts | User Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <meta name="theme-color" content="#00a7c7">
    <meta name="msapplication-navbutton-color" content="#00a7c7">
    <meta name="apple-mobile-web-app-status-bar-style" content="#00a7c7">
    <?php $this->load->view('inc/styles');?>
    <style>
            .errorbox
{
    border: 1px solid red;
  box-shadow: red; }
/*tab*/
@media (min-width: 1200px) {
   #loginModal .modal-dialog {
        width: 410px;
        margin: 30px auto;
    }
}

#loginModal .modal-content {
    background-color:transparent;
    border:none;
    box-shadow:none;
}
.login-box {
    position: relative;
    width: 100%;
    z-index: 9999;
    margin:10% auto;
}
    .login-box input {
        height: 20px;
        width: 88%;
    }
.login-box .nav-pills li {
    padding: 10px;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
    background: #1a72b4;
}
.login-box .nav-pills li.active {
    background: rgba(249, 248, 248, 1);
    border-top: 1px solid #ecebeb;
    border-left: 1px solid #ecebeb;
    border-right: 1px solid #ecebeb;
    box-shadow: 3px -1px 5px #ecebeb;
}
.login-box .nav-pills li.active a{
    color:#847d7d !important;
    background-color:transparent !important;
}
.login-box .nav-pills li a{
    color:#fff !important;
    background-color:transparent !important;
}
.login-box .tab-content {
    background: rgba(249, 248, 248, 1);
    min-height: 328px;
    padding: 15px;
    box-shadow: 0px 3px 6px #ecebeb;
    margin-left:1px;
}
.separator {
    color:#847d7d;
    text-align: center;
    margin-top: 23px;
}
.login-box .btn-fb{
    background-color: #3b5999;
    border-radius: 0;
    color: #fff;
    float: left;
    margin-top: 5px;
    width: 93%;
    line-height: 21px;
    text-transform: uppercase;
    font-weight: 900;
    font-style: normal;
}
.login-box .btn-gplus{
    float: left;
    width: 93%;
    background-color: #ea4335;
    color: #fff;
    border-radius: 0;
    margin-top: 10px;
    text-transform: uppercase;
    font-weight: 900;
    font-style: normal;
}
.login-box .btn-reg {
    background-color: #3b7fd4;
    border-radius: 0;
    color: #fff;
    margin-top: 5px;
    width: 31%;
    line-height: 21px;
    text-transform: uppercase;
    font-weight: 900;
    font-style: normal;
}
.forgot-pass {
display: inline-block;
margin-top: 7px;
}
.inp-label {
    float:left;
    width:22%;
    display:inline-block;
    padding: 7px;
    font-size: 16px;
    font-family: sans-serif;
    color:#847d7d;
}
.inp-box {
float:left;
width:74%;
display:inline-block;
}
.login-box .row {
    margin-bottom: 4px;
}
.reginp-label {
    float:left;
    width:34%;
    display:inline-block;
    padding: 7px;
    font-size: 15px;
    font-family: sans-serif;
    color:#847d7d;
}
.reginp-box {
float:left;
width:62%;
display:inline-block;
}
.inp-box .form-control,.reginp-box .form-control {
    border-radius:0;
}
.btn-row {
padding:10px;
}
#register_form .btn-row {
padding:10px 4px 10px 10px;
}
.nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.nav > li > a {
    font-family: 'Ubuntu', sans-serif;
    margin: 0px 18px !important;
    padding: 0;
    font-size: 1.3em;
}
.nav-pills>li>a {
    border-radius: 4px;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tab-content>.tab-pane {
    display: none;
}
.tab-content>.active {
    display: block;
}
.alert {
  font-size: 0.85em;
}
.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.hidden {
    display: none!important;
}
.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.alert-warning {
    color: #ea7c69;
    background-color: #fcefe3;
    border-color: #faebcc;
    text-align: center;
}
.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}
.form-control {
    display: block;
    width: 98%;
    height: 34px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
}
        .user-image {
    float: left;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: 1px;
}
.prof-title {
    margin-top: 2px;
    float: left;
}
.img-circle {
    border-radius: 50%;
}
#user_info {
float:left;
padding:0;
}
.account-box {
    z-index: 991;
    /*line-height: normal;*/
    background: #fff;
    border: 1px solid #ccc;
    border-color: rgba(0,0,0,.2);
    color: #000;
    -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.2);
    box-shadow: 0 2px 10px rgba(0,0,0,.2);
    padding: 0;
    display: none;
    outline: none;
    overflow: hidden;
    position: absolute;
    right: 19px;
    top: 32px;
    -webkit-animation: gb__a .2s;
    animation: gb__a .2s;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -webkit-user-select: text;
}
    .account-box li {
        list-style-type:none;
        padding:24px;
    }
.account-box .prof {
    white-space: nowrap;
    border: 1px solid #ccc;
    border-color: rgba(0,0,0,.2);
}
    .account-box .prof-box {
        border: none;
        vertical-align: top;
        display:inline-block;
        height: 96px;
        width: 96px;
    }
.prof-box img {
        float: left;
        width:96px;
        height:96px;
        border-radius:50%;
}
    .account-box .desc-box {
        display: inline-block;
        vertical-align: top;
        padding: 21px 0 24px 17px;
        line-height: 33px;
        overflow: hidden;
    }
    .account-box h1{
        font-weight: bold;
        font-size:15px;
        margin: -4px 0 1px 0;
        text-overflow: ellipsis;
        overflow: hidden;
    }
.user-footer {
    padding: 7px 11px 33px 24px !important;
    background: #f5f5f5;
}
    .user-footer .btn {
    float: right;
    padding: 2px 12px;
    position: relative;
    display: inline-block;
    border-radius: 0;
    color: #8a8888;
    }
    .news-publish-info {
    color: #969696;
    font-size: 11px;
    font-family: kfont;
    border-bottom: dashed 1px #dadada;
    padding-bottom: 3px !important;
    width: 99%;
    margin-left: 9px;
}
        .banner {
 
  min-height: 670px;
  background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -ms-background-size: cover;
  -o-background-size: cover;
}
    </style>
  </head>
<body style="display: block;">

    <div  class="banner">
      <div class="login-box-body">
            <div id="tabs" class="col-md-3 col-xs-4 login-box">
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="#1b" data-toggle="tab" aria-expanded="true">LOGIN</a>
                    </li>
                    <li class="">
                        <a href="#2b" data-toggle="tab" aria-expanded="false">REGISTER FREE</a>
                    </li>
                </ul>
                <div class="tab-content clearfix">
                    <!--Tab #1 - Register-->
                    <div class="tab-pane active" id="1b">
                        <div class="width-100 pull-left">
                            <div class="alert alert-success hidden" id="login_success_msg"></div>
                        </div>
                        <div class="width-100 pull-left">
                            <div class="alert alert-warning hidden" id="error_msg"></div>
                        </div>
                        <form action="/" name="login_form" id="login_form" autocomplete="off" novalidate="" style="padding:18px;" method="post" accept-charset="utf-8">
                            <div class="row" style="margin-top: 7px;">
                                <span class="inp-label">Email</span>
                                <span class="inp-box">
                                    <input type="email" class="form-control" minlength="3" maxlength="150" name="profile_name" id="user_mail" value="" required="" />
                                </span>
                            </div>
                            <div class="row" style="margin-top: 7px;">
                                <span class="inp-label">Password</span>
                                <span class="inp-box">
                                    <input type="password" class="form-control" minlength="3" maxlength="150" name="profile_name" id="user_pass" value="" required="" />
                                </span>
                            </div>
                            <div class="row btn-row text-center">
                                <button type="button" class="btn btn-reg ladda-button" id="login_btn" data-style="zoom-in">
                                    <span class="ladda-label">
                                        <b>LOGIN</b>
                                    </span>
                                    <span class="ladda-spinner"></span>
                                </button>
                                <a href="javascript:void(0)" class="forgot-pass" data-toggle="modal" id="forgotPopup">Forgot your password ?</a>

                            </div>
                        </form>
                    </div>
                    <!--Tab #2 - Search Matches-->
                    <div class="tab-pane" id="2b">
                        <form action="AuthController/CreateStudentDetails" name="register_form" id="register_form" autocomplete="off"  style="padding:18px;" method="post" ">
                            <div class="width-100 pull-left">
                                <div class="alert alert-success hidden" id="reg_msg"></div>
                            </div>
                            <div class="width-100 pull-left">
                                <div class="alert alert-warning hidden" id="rgerr_msg"></div>
                            </div>
                            <div class="row">
                                <span class="reginp-label">Name</span>
                                <span class="reginp-box">
                                    <input type="text" required class="form-control" style="width: 88%; height: 28%;" minlength="3" maxlength="150" name="reg_name" id="reg_name" value=""  />
                                </span>
                            </div>
                            <div class="row">
                                <span class="reginp-label">Email</span>
                                <span class="reginp-box">
                                    <input type="email" required class="form-control" style="width: 88%; height: 28%;" minlength="3" maxlength="150" name="reg_email" id="reg_email" value="" />
                                </span>
                            </div>
                            <div class="row">
                                <span class="reginp-label">Mobile</span>
                                <span class="reginp-box">
                                    <input type="text" required class="form-control" style="width: 88%; height: 28%;" minlength="3" maxlength="150" name="reg_mobile" id="reg_mobile" value="" />
                                </span>
                            </div>
                            <div class="row">
                                <span class="reginp-label">Password</span>
                                <span class="reginp-box">
                                    <input type="password" required class="form-control " style="width: 88%; height: 28%;" minlength="3" maxlength="150" name="reg_pass" id="reg_pass" value="" />
                                </span>
                            </div>
                            <div class="row">
                                <span class="reginp-label">Date of birth</span>
                                <span class="reginp-box">
                                    <input type="text" required class="form-control" style="width: 88%; height: 28%;" minlength="3" maxlength="150" name="dob" id="dob" value=""  />
                                </span>
                                
                            </div>
                            <div class="row">
                                <span class="reginp-label">Gender</span>
                                <div class="row">
                                    
                                <label class="w3layouts">
                                <input type="radio" required name="gender" id="male" value="1"  />Male
                               </label>
                               <label class="w3layouts label2">
                                <input type="radio" required name="gender" id="female" value="2" />Female
                                </label>
                                </div>
                            </div>
                            <div class="row">
                                <span class="reginp-label">County</span>
                                <span class="reginp-box">
                                    <select required class="form-control" id="country" name="country">
                                    <option value="1">INDIA</option>
                                    </select>
                                </span>
                            </div>
                            <div class="row">
                                <span class="reginp-label">STATE</span>
                                <span class="reginp-box">
                                    <select required class="form-control" id="state" name="state">
                                    <?php foreach($state_rec as $rec){ ?>
                                    <option value="<?php echo $rec->state_code;?>"><?php echo $rec->state_name; ?></option>
                                    <?php  } ?>
                                    </select>
                                </span>
                            </div>
                            
                            <div class="row btn-row">

                                <button type="button" class="btn btn-reg ladda-button" id="reg_btn" data-style="zoom-in">
                                    <span class="ladda-label">
                                        <b>REGISTER</b>
                                    </span>
                                    <span class="ladda-spinner"></span>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <script> var page = 'login';</script>
    <?php $this->load->view('inc/scripts');
         
    ?>
    <script>
        $("#reg_btn").click(function () {
            var regName = $("#reg_name").val(),
                regMob = $("#reg_mobile").val(),
                regEmail = $("#reg_email").val(),
                regPass = $("#reg_pass").val(),
                regDob = $("#dob").val(),
                regMail = $("#male").val(),
                regFemale = $("#female").val(),
                regCountry = $("#country").val(),
                regState = $("#state").val(),
                regForm = $("#register_form"),
                error = 0;

            if (regName = '') {
                error++;
            }if (regMob = '') {
                error++;
            }if (regEmail = '') {
                error++;
            }if (regPass = '') {
                error++;
            }if (regDob = '') {
                error++;
            }if (regMail = '') {
                error++;
            }if (regCountry = '') {
                error++;
            }if (regState = '') {
                error++;
            }
            if (error === '0') {
                regForm.submit();
            }

        });
    
   
    </script>
</body>
</html>
