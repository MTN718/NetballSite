<style type="text/css">
  .login-box, .register-box {
    width: 360px;
    margin: 7% auto;
}
.login-logo, .register-logo {
    font-size: 35px;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 300;
}
.login-logo, .register-logo {
    font-size: 35px;
    text-align: center;
    font-weight: 300;
}
.login-box-body, .register-box-body {
    background: #fff;
    padding: 20px;
    border-top: 0;
    color: #666;
}
.login-box-msg, .register-box-msg {
    margin: 0;
    text-align: center;
    padding: 0 20px 20px 20px;
}
.has-feedback {
    position: relative;
}
.form-group {
    margin-bottom: 15px;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    .glyphicon-envelope::before {
    content: "\2709";
}
.form-control-feedback {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    pointer-events: none;
}
.btn-primary {
    background-color: #3c8dbc;
    border-color: #367fa9;
}
.btn-block {
    display: block;
    width: 100%;
}
.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.fa-key::before {
    content: "\f084";
}
.fa{
      display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}s
.glyphicon-lock::before {
    content: "\e033";
}

.fa-key::before {

    content: "\f084";

}
.form-control-feedback {
    line-height: 34px;
    text-align: center;
    pointer-events: none;
}
.glyphicon {
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
}
</style>





<body class="hold-transition login-page" style="background: url(<?php echo base_url(); ?>assets/images/fullsize.jpg) center top  #313540;background-size: cover;">



<div class="login-box">
  <div class="login-logo">
    <a style="color: #F8B604;"><b style="color: #F8B604;"> Net  </b> Ball </a>
  </div>
  <!-- /.login-logo -->
  <div class="alert alert-warning alert-dismissable fade in login-warning-block" style="display: none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong>&nbsp;please enter username and password
  </div>
  <div class="alert alert-danger alert-dismissable fade in login-error-block" style="display: none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Invalid!</strong>&nbsp;username or password
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form method="post" action="<?php echo site_url('admin/loginfrom'); ?>" name="loginform">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required="required"/>
       <!--  <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input id="password" class="form-control" type="password" name="password" placeholder="Password"
               required="required"/>
        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
      </div>
      <div>
        <!-- /.col -->
        <div>
          <button type="submit" class="btn btn-primary btn-block btn-flat">&nbsp;login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
