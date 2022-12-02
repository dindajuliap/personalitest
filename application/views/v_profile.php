<div class="container my-4">
  <div class="row mx-lg-5 mx-md-4 mx-sm-4 px-lg-5" id="row">
    <div class="col-lg-2 col-md-4 col-sm-4" id="middle">
      <img src="<?= base_url('assets/img/profile/'.$user['user_photo']) ?>" id="profile-photo">
    </div>

    <div class="col-lg-10 col-md-8 col-sm-8" id="middle">
      <h3 class="ml-3"><b><?= $user['user_fullname'] ?></b></h3>
      <h6 class="text-muted ml-3">@<?= $user['user_username'] ?></h6>
      <a class="btn mt-1 ml-3 btn-xs" id="edit" type="button" data-toggle="modal" data-target="#EditModal">Edit profile picture</a>
    </div>
  </div>

  <div class="row mx-lg-5 mx-md-4 mx-sm-4 px-lg-5 mt-3"><hr></div>

  <div class="row mx-lg-5 mx-md-4 mx-sm-4 px-lg-5">
    <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
      <label>Email</label>
      <input type="text" disabled value="<?= $user['user_email'] ?>" class="form-control">

      <label class="mt-3">Phone Number</label>
      <input type="text" disabled value="<?= '+62 '.substr($user['user_phone'], 1, -8).'-'.substr($user['user_phone'], 4, -4).'-'.substr($user['user_phone'], 8) ?>" class="form-control">

      <div class="row mt-3">
        <div class="col-lg-6 col-md-6 col-sm-6"><label>Your Bio</label></div>
        <div class="col-lg-6 col-md-6 col-sm-6 text-right text-sm mt-1"><a id="edit-modal" data-toggle="modal" data-target="#BioModal">Edit</a></div>
      </div>
      <textarea disabled class="form-control" id="bio"><?= $user['user_bio'] ?></textarea>
    </div>

    <div class="col-lg-1 col-md-1"></div>

    <div class="col-lg-7 col-md-7 col-sm-12 mt-lg-2 mt-md-2 mt-sm-4">
      <h5><b>Your Personality</b></h5>

      <?php if(!$result) : ?>
        <p class="text-muted" style="margin-top: -4px">You haven't take any tests yet.</p>
      <?php else : ?>
        <div class="row">
          <?php $i = 2; foreach($result as $key) : ?>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-md-3 mt-sm-3 mt-lg-2">
              <a href="<?= base_url('personality-test/result/'.$key->test_result_id) ?>" style="text-decoration: none">
                <div class="card" id="card">
                  <img id="illustration" src="<?= base_url('assets/img/result/'.$key->result_description_photo) ?>">
            			<h5 class="mt-2" align="center"><b><?= $key->result_description_title ?></b></h5>
                </div>
              </a>
            </div>
          <?php $i++; endforeach ?>
        </div>
      <?php endif ?>
    </div>
  </div>
</div>

<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('setting/profile_picture') ?>" method="post">
        <div class="modal-body mx-3 my-2">
          <h4 class="modal-title" style="color: #88619A" id="exampleModalLabel"><b>Edit Profile Picture</b></h4>
          <p class="text-muted my-0">Choose one that will be your new profile picture.</p>

          <div class="row">
            <?php foreach($profile_picture as $key) : ?>
              <label class="switch col-lg-4 col-md-4 col-sm-4">
                <input type="radio" value="<?= $key->profile_picture ?>" name="profile_picture" id="profile_picture">
                <div class="card card-photo"><img src="<?= base_url('assets/img/profile/'.$key->profile_picture) ?>" id="img"></div>
              </label>
            <?php endforeach ?>
          </div>

          <div class="row text-right mt-5">
            <button type="reset" class="btn mr-1 ml-auto" style="background: indianred; color: white" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn mx-2" style="color: white; background: #88619A">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="BioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('setting/bio') ?>" method="post">
        <div class="modal-body mx-3 my-2">
          <h4 class="modal-title" style="color: #88619A" id="exampleModalLabel"><b>Edit Your Bio</b></h4>
          <p class="text-muted mt-0">Write a description about yourself.</p>
          <textarea class="form-control mt-3" rows="2" maxlength="100" name="user_bio" style="padding: 7px 15px 10px 15px"><?= $user['user_bio'] ?></textarea>

          <div class="row text-right mt-4">
            <button type="reset" class="btn mr-1 ml-auto" style="background: indianred; color: white" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn mx-2" style="color: white; background: #88619A">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  textarea{ resize: none }
  #row{ display: table }
  #top{ display: table-cell; vertical-align: top }
  #middle{ display: table-cell; vertical-align: middle }
  #bottom{ display: table-cell; vertical-align: bottom }
  #edit{ background: lightgrey; color: dimgrey; padding: 5px 40px; border-radius: 5px }
  h6{ font-weight: normal; margin-top: -5px }
  #profile-photo{ width: 100%; border-radius: 50%; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1) }
  .switch{ margin-bottom: -20px }
  .switch #profile_picture{ opacity: 0; width: 0; height: 0 }
  .card-photo{ width: 100%; border-radius: 5px; box-shadow: none; padding: 0px }
  #profile_picture:checked + .card{ width: 100%; color: #88619A; box-shadow: 0px 0px 10px #2196F3 }
  #img{ width: 100%; height: 100%; border-radius: 5px }
  #card{ background: white; color: #88619A; box-shadow: 1px 1px 3px rgba(0 0 0 0.1); margin: auto; width: 100%; padding: 15px 20px 20px 20px; height: 100%; border-radius: 10px }
  #illustration{ width: 60%; margin: auto }
  hr{ width: 100% }
  #edit-modal{ text-decoration: none; color: indianred; cursor: pointer }
  #bio{ height: 87px }

  @media only screen and (max-width: 1024px){
    #illustration{ width: 50% }
    #bio{ height: 65px }
  }
</style>
