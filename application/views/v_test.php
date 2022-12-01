<div class="container mt-4 mb-5">
  <h3><b><?= $question_type['question_type'] ?> Test</b></h3>
  <p class="text-muted">Answer all of the question and see the result after!</p>

  <form method="post" action="<?= base_url('personality_test/process') ?>">
    <input type="hidden" name="question_type_id" value="<?= $question_type['question_type_id'] ?>">

    <ol>
      <?php $no = 0 ?>
      <?php foreach($question as $key) : ?>
        <?php $no++ ?>
        <?php $answer = $this->db->get_where('answer_table', ['question_id' => $key->question_id])->result() ?>

        <input type="hidden" value="<?= $key->question_id ?>" name="question_id<?= $no ?>">
        <h6 class="mt-4"><li><?= $key->question ?></li></h6>

        <?php foreach($answer as $key1) : ?>
          <label class="switch col-12">
            <input type="radio" value="<?= $key1->answer_id ?>" name="answer_id<?= $no ?>" id="answer">
            <div class="card"><h6><?= $key1->answer ?></h6></div>
          </label>
        <?php endforeach ?>
      <?php endforeach ?>
    </ol>

    <div class="row mx-2 mt-4">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <button type="submit" id="result" class="btn">See the Result</button>
      </div>
    </div>
  </form>
</div>

<style>
  .container{ padding: 0px 180px }
  form{ width: 100% }
  ol{ margin-left: -22px }
  h3{ color: #88619A }
  p{ margin-top: -5px }
  .switch{ margin: -18px -7px -12px -9px }
  .switch #answer{ opacity: 0; width: 0; height: 0 }
  .card{ width: 100%; border-radius: 5px; box-shadow: none; border: 1px solid #D9D9D9; padding: 15px 15px 10px 15px }
  #answer:checked + .card{ width: 100%; border: 1px solid #88619A; color: #88619A; box-shadow: none }
  #reset, #result{ color: white; width: 100%; border-radius: 5px }
  #reset{ background: indianred }
  #result{ background: #88619A }

  @media only screen and (max-width: 1024px){
    .container{ padding: 0px }
  }
</style>
