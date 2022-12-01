<div class="container mx-auto mt-1 mb-5">
  <div class="row">
    <?php foreach($question_type as $key) : ?>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <div class="card" id="card">
          <img id="illustration" src="<?= base_url('assets/img/question-type/'.$key->question_type_cover) ?>">
    			<h5 class="mt-2"><b><?= $key->question_type ?></b></h5>
    			<p><?= $key->question_type_description ?></p>
          <a href="<?= base_url('personality-test/'.$key->question_type_id) ?>" class="btn" id="link">Take the Test</a>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>

<style>
  p{ color: grey; margin-top: -7px}
  #card{ background: white; color: #88619A; box-shadow: 1px 1px 3px rgba(0 0 0 0.1); margin: auto; width: 100%; padding: 15px 20px 20px 20px; height: 100%; border-radius: 10px }
  #illustration{ width: 60%; margin: auto }
  #link{ background: #88619A; color: white; width: 100%; padding: 5px; border-radius: 5px }

  @media only screen and (max-width: 1024px){
    #illustration{ width: 50% }
  }
</style>
