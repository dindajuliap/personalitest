<div class="container my-5 px-5">
  <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
    <a href="<?= base_url('profile/'.$user['user_username']) ?>" style="color: black">
      <div class="row mx-0">
        <i class="fa fa-long-arrow-alt-left mr-3"></i>
        <p id="back">Back</p>
      </div>
    </a>

    <div id="title"><h3><b>Change Password</b></h3></div>

    <div class="mt-4 col-lg-12 col-md-12 col-sm-12 mx-auto">
      <form action="" method="post">
        <label for="password1">Old Password</label>
        <input type="password" id="password1" name="password1" class="form-control">
        <span id="show1" onclick="show1()"><i class="fa fa-eye icon"></i></span>
        <small class="form-text text-danger"><?= form_error('password1') ?></small>

        <label for="password2" class="mt-2">New Password</label>
        <input type="password" id="password2" name="password2" class="form-control">
        <span id="show2" onclick="show2()"><i class="fa fa-eye icon"></i></span>
        <small class="form-text text-danger"><?= form_error('password2') ?></small>

        <label for="password3" class="mt-2">Confirm New Password</label>
        <input type="password" id="password3" name="password3" class="form-control">
        <span id="show3" onclick="show3()"><i class="fa fa-eye icon"></i></span>
        <small class="form-text text-danger"><?= form_error('password3') ?></small>

        <button type="submit" class="form-control btn mt-4" id="save">Save New Password</button>
      </form>
    </div>
  </div>
</div>

<div id="footer">
  <footer class="sticky-footer py-3" style="width: 100%; color: silver">
    <div class="text-center">
      <div>Copyright &copy; 2022 PersonaliTest, All right reserved</div>
    </div>
  </footer>
</div>

<style>
  #back{ margin-top: -4.8px; text-decoration: none }
  #title{ margin-left: 30px; margin-top: -15px; color: #88619A }
  #show1, #show2, #show3{ position: relative; z-index: 1; left: 95%; top: -31px; cursor: pointer; color: #AFAFAF }
  .form-text{ margin-top: -20px; margin-bottom: -20px }
  .form-control{ border-radius: 5px; padding-right: 43px }
  #save{ background: #88619A; color: white; width: 100%; border-radius: 5px }
  #footer{ bottom: 0; width: 100%; position: fixed; z-index: 1 }
  form{ margin-left: 23px }

  @media only screen and (max-width: 1024px){
    #show1, #show2, #show3{ left: 92% }
  }
</style>

<script type="text/javascript">
  function show1(){
    var x = document.getElementById('password1').type;

    if (x == 'password'){
      document.getElementById('password1').type = 'text';
      document.getElementById('show1').innerHTML = '<i class="fa fa-eye-slash icon"></i>';
    }
    else{
      document.getElementById('password1').type = 'password';
      document.getElementById('show1').innerHTML = '<i class="fa fa-eye icon"></i>';
    }
  }

  function show2(){
    var x = document.getElementById('password2').type;

    if (x == 'password'){
      document.getElementById('password2').type = 'text';
      document.getElementById('show2').innerHTML = '<i class="fa fa-eye-slash icon"></i>';
    }
    else{
      document.getElementById('password2').type = 'password';
      document.getElementById('show2').innerHTML = '<i class="fa fa-eye icon"></i>';
    }
  }

  function show3(){
    var x = document.getElementById('password3').type;

    if (x == 'password'){
      document.getElementById('password3').type = 'text';
      document.getElementById('show3').innerHTML = '<i class="fa fa-eye-slash icon"></i>';
    }
    else{
      document.getElementById('password3').type = 'password';
      document.getElementById('show3').innerHTML = '<i class="fa fa-eye icon"></i>';
    }
  }
</script>
