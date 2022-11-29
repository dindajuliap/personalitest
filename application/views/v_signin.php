<div class="row" id="row">
  <div class="col-lg-5 col-md-12 col-sm-12 text-lg-right text-sm-center text-md-center" id="col1">
    <img src="<?= base_url('assets/img/illustration-1.png') ?>" id="illustration">
  </div>

  <div class="col-lg-7 col-md-12 col-sm-12" id="col2">
    <div id="form" class="py-5">
      <form action="" method="post">
        <h3><b>SIGN IN</b></h3>
        <p class="text-muted">Welcome back! Please sign in to your account.</p>

        <div class="mt-4"><?= $this->session->flashdata('message') ?></div>

        <input type="text" name="email_username" class="form-control mt-3" placeholder="Email or username" autocomplete="off">
        <small class="form-text text-danger mt-2"><?= form_error('email_username') ?></small>

        <input type="password" name="user_password" class="form-control mt-3" id="user_password" placeholder="Password">
        <span id="show" onclick="show()"><i class="fa fa-eye icon"></i></span>
        <small class="form-text text-danger" style="margin: -20px 0 -15px 0"><?= form_error('user_password') ?></small>

        <button type="submit" class="form-control btn mt-3" id="signin">Sign In</button>
      </form>

      <div class="mt-2">
        <a type="button" data-toggle="modal" data-target="#ForgotPassword" id="forgot">Forgot password?</a>
      </div>

      <div class="modal fade" id="ForgotPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="<?= base_url('forgot-password') ?>" method="post">
              <div class="modal-body mx-3 my-2">
                <h4 class="modal-title" style="color: #88619A" id="exampleModalLabel"><b>Forgot Password</b></h4>
                <p class="text-muted mt-0">Enter the email address associated with your account.</p>

                <div class="form-group mt-2">
                  <input type="email" placeholder="Enter email address" class="form-control" name="user_email" required autocomplete="off" maxlength="200">
                </div>

                <div class="row text-right">
                  <button type="reset" class="btn mr-1 ml-auto" style="background: indianred; color: white" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn mx-2" style="color: white; background: #88619A">Send Email</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="row mt-2">
        <hr style="border-color: silver; width: 45%">
        or
        <hr style="border-color: silver; width: 45%">
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <a href="<?= base_url('sign-up') ?>" class="btn mt-2" id="signup">Sign up here!</a>
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
  #user_password{ padding-right: 9% }
  #show{ position: relative; z-index: 1; left: 93%; top: -31px; cursor: pointer; color: #AFAFAF }
  #signin{ background: #88619A; color: white; width: 100%; border-radius: 5px }
  #signup{ color: indianred; border-color: indianred; width: 100%; border-radius: 5px }
  #signup:hover{ background: indianred; color: white }
  #forgot{ color: darkgrey }
  #forgot:hover{ color: grey }
  .form-control{ border-radius: 5px }
  p{ margin-top: -5px }

  @media only screen and (max-width: 1024px){
    #col1, #col2{ display: table-row }
    #illustration{ width: 30%; margin: 0px auto -40px auto }
    #show{ left: 92% }
    #user_password{ padding-right: 11% }
  }
</style>

<script type="text/javascript">
  function show(){
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
</script>
