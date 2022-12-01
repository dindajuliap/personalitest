<h1 align="center" class="mt-4"><b>Welcome to PersonaliTest</b></h1>

<p class="text-muted mx-5 px-lg-5 px-md-3 px-sm-3 text-center">
  Do you already know about yourself? Have you ever asked what you look like in the eyes of
  others? To find out this, you can take some of the tests that we provide on this website.
  Let's do the test right away by pressing the button below!
</p>

<div class="text-center">
  <a href="<?= base_url('personality-test') ?>" class="btn mt-2 mx-auto" id="test">
    Take the Test <i class="fa fa-arrow-right ml-2 text-md"></i>
  </a>
</div>

<div class="row mx-0 mt-3">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="text-center">
      <img src="<?= base_url('assets/img/photo-3.png') ?>" id="illustration">
    </div>
  </div>
</div>

<style>
  body{ color: #88619A }
  #illustration{ width: 50% }
  #test{ color: #88619A; border: 1px solid #88619A; padding: 10px 30px; font-size: 18px; border-radius: 5px }
  #test:hover{ color: white; background: #88619A }

  @media only screen and (max-width: 1024px){
    #illustration{ width: 100% }
  }
</style>
