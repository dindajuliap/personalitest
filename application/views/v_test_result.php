<div class="container mt-4 mb-5">
  <div class="col-lg-7 col-md-9 col-sm-12 mx-auto">
    <a href="<?= base_url('profile/'.$user['user_username']) ?>" style="color: black">
      <div class="row mx-0">
        <i class="fa fa-long-arrow-alt-left mr-3"></i>
        <p id="back">Back</p>
      </div>
    </a>
  </div>

  <div class="col-lg-7 col-md-9 col-sm-12 mx-auto">
    <div id="title"><h2><b><?= $result['result_description_title'] ?></b></h2></div>
  </div>

  <div class="row mx-0 mt-4">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="text-center">
        <img src="<?= base_url('assets/img/result/'.$result['result_description_photo']) ?>" id="illustration">
      </div>
    </div>
  </div>

  <div class="col-lg-7 col-md-9 col-sm-12 mt-4 mx-auto"><?= $result['result_description'] ?></div>
</div>

<style>
  h2{ color: #88619A }
  p{ margin-top: -5px }
  #illustration{ width: 30% }
  #back{ margin-top: -4.8px; text-decoration: none }
  #title{ margin-left: 30px; margin-top: -15px }

  @media only screen and (max-width: 1024px){
    #illustration{ width: 70% }
  }
</style>
