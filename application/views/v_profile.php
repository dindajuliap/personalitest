<div class="container my-5">
  <div class="row mx-lg-5 mx-md-4 mx-sm-4" id="row">
    <div class="col-lg-2 col-md-4 col-sm-4" id="middle">
      <img src="<?= base_url('assets/img/profile/'.$user['user_photo']) ?>" id="profile-photo">
    </div>

    <div class="col-lg-10 col-md-8 col-sm-8" id="middle">
      <h3 class="ml-3"><b><?= $user['user_fullname'] ?></b></h3>
      <h6 class="text-muted ml-3">@<?= $user['user_username'] ?></h6>
      <a class="btn mt-1 ml-3 btn-xs" id="edit">Edit profile picture</a>
    </div>
  </div>

  <?php if($user['user_bio'] != NULL) : ?>
    <p class="mx-lg-5 mx-md-4 mx-sm-4 mt-3"><?= $user['user_bio'] ?></p>
  <?php endif ?>

  
</div>

<style>
  #row{ display: table }
  #top{ display: table-cell; vertical-align: top }
  #middle{ display: table-cell; vertical-align: middle }
  #bottom{ display: table-cell; vertical-align: bottom }
  #edit{ background: lightgrey; color: dimgrey; padding: 5px 40px; border-radius: 5px }
  h3{ color: #88619A }
  h6{ font-weight: normal; margin-top: -5px }
  #profile-photo{ width: 100%; border-radius: 50%; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1) }
</style>
