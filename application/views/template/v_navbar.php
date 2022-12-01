<nav class="navbar navbar-expand navbar-light bg-white">
  <a class="navbar-brand ml-3">
    <img src="<?= base_url('assets/img/logo-1.png') ?>" id="logo" class="mr-1" style="margin-top: -5px">

    <?php if($this->session->userdata('signin_status') == FALSE) : ?>
      <b>PersonaliTest</b>
    <?php endif ?>
  </a>

  <?php if($this->session->userdata('signin_status') == TRUE) : ?>
    <div class="navbar-nav">
      <a class="nav-link <?php if($title == 'Home') : ?>active<?php endif ?>" href="<?= base_url('home') ?>">Home</a></b>
      <a class="nav-link <?php if($title == 'Personality Test') : ?>active<?php endif ?>" href="<?= base_url('personality-test') ?>">Personality Test</a></b>
    </div>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link <?php if($title == $user['user_fullname']) : ?>active<?php endif ?>" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="img-profilee rounded-circle" src="<?= base_url('assets/img/profile/'.$user['user_photo']) ?>" style="width: 30px">
          <span class="ml-2 d-lg-inline text-sm"><?= $user['user_fullname'] ?></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?= base_url('profile/'.$user['user_username']) ?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>

          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="<?= base_url('signout') ?>" id="signout">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Sign Out
          </a>
        </div>
      </li>
    </ul>
  <?php endif ?>
</nav>

<script>
  $(document).on('click', '#signout', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Warning!',
      text: "Are you sure you want to sign out?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#88619A',
      cancelButtonColor: 'grey',
      cancelButtonText: 'Cancel',
      confirmButtonText: 'Sure'
    }).then((result) =>{
      if(result.value){
        document.location.href = href;
      }
    })
  });
</script>

<style>
  #logo{ width: 30px }
</style>
