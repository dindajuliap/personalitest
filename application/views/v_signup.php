<div class="row" id="row">
  <div class="col-lg-5 col-md-12 col-sm-12 text-lg-right text-md-center text-sm-center" id="col1">
    <img src="<?= base_url('assets/img/photo-2.png') ?>" id="illustration">
  </div>

  <div class="col-lg-7 col-md-12 col-sm-12" id="col2">
    <div id="form" class="py-5">
      <form action="" method="post">
        <h3><b>SIGN UP</b></h3>
        <p class="text-muted">Please fill in all of the information.</p>

        <input type="text" name="user_fullname" class="form-control mt-2" placeholder="Full name" autocomplete="off" maxlength="200">
        <small class="form-text text-danger text-xs mt-2" style="margin-bottom: -5px"><?= form_error('user_fullname') ?></small>

        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="text" name="user_email" class="form-control" placeholder="Email" autocomplete="off" maxlength="200">
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="text" name="user_phone" class="form-control" placeholder="Phone number" autocomplete="off" maxlength="13">
          </div>
        </div>

        <div class="row mt-0" style="margin-bottom: -4px">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <small class="form-text text-danger text-xs mt-2" style="margin-bottom: -17px"><?= form_error('user_email') ?></small>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <small class="form-text text-danger text-xs mt-2" style="margin-bottom: -17px"><?= form_error('user_phone') ?></small>
          </div>
        </div>

        <input type="text" name="user_username" class="form-control mt-3" placeholder="Username" autocomplete="off" maxlength="200">
        <small class="form-text text-danger text-xs mt-2" style="margin-bottom: -5px"><?= form_error('user_username') ?></small>

        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="password" name="user_password" class="form-control" id="user_password" placeholder="Password">
            <span id="show1" onclick="show1()"><i class="fa fa-eye icon"></i></span>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm password">
            <span id="show2" onclick="show2()"><i class="fa fa-eye icon"></i></span>
          </div>
        </div>
        <small class="form-text text-danger text-xs" style="margin: -20px 0 -15px 0"><?= form_error('user_password') ?></small>

        <button type="submit" class="form-control btn mt-3" id="signup">Sign Up</button>
      </form>

      <div class="row mt-2">
        <hr style="border-color: silver; width: 45%">
        or
        <hr style="border-color: silver; width: 45%">
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <a href="<?= base_url('sign-in') ?>" class="btn mt-2" id="signin">Sign in here!</a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  html, body{ width: 100%; height: 85% }
  #row{ width: 100%; height: 85%; display: table }
  #col1, #col2{ width: 100%; height: 85%; display: table-cell; vertical-align: middle }
  #col1{ color: #88619A }
  #col2{ color: grey }
  h3{ color: #88619A }
  #illustration{ width: 85%; margin-left: 140px }
  #form{ width: 60%; margin: auto }
  #user_password, #password_confirmation{ padding-right: 16.5% }
  #show1, #show2{ position: relative; z-index: 1; left: 87%; top: -31px; cursor: pointer; color: #AFAFAF }
  #signup{ background: #88619A; color: white; width: 100%; border-radius: 5px }
  #signin{ color: indianred; border-color: indianred; width: 100%; border-radius: 5px }
  #signin:hover{ background: indianred; color: white }
  .form-control{ border-radius: 5px }
  p{ margin-top: -5px }

  @media only screen and (max-width: 1024px){
    #col1, #col2{ display: table-row }
    #illustration{ width: 35%; margin: 0px auto -40px auto }
    #user_password, #password_confirmation{ padding-right: 20% }
    #show1, #show2{ left: 84% }
  }
</style>

<script type="text/javascript">
  function show1(){
    var x = document.getElementById('user_password').type;

    if (x == 'password'){
      document.getElementById('user_password').type = 'text';
      document.getElementById('show').innerHTML = '<i class="fa fa-eye-slash icon"></i>';
    }
    else{
      document.getElementById('user_password').type = 'password';
      document.getElementById('show').innerHTML = '<i class="fa fa-eye icon"></i>';
    }
  }

  function show2(){
    var x = document.getElementById('password_confirmation').type;

    if (x == 'password'){
      document.getElementById('password_confirmation').type = 'text';
      document.getElementById('show').innerHTML = '<i class="fa fa-eye-slash icon"></i>';
    }
    else{
      document.getElementById('password_confirmation').type = 'password';
      document.getElementById('show').innerHTML = '<i class="fa fa-eye icon"></i>';
    }
  }
</script>
