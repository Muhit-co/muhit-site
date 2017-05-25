<? snippet('header') ?>

<style>
  #list_municipalities .card {
    margin-bottom: 1rem;
    padding: 1rem;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
</style>

<main id="top" style="min-height: calc(100vh - 254px); padding-top: 74px;">

  <div class="row">
    <div class="col-xs-12 u-mt40">

      <h3><?= $page->title()->html() ?></h3>

      <?= $page->text()->kirbytext() ?>

      <?
      $jsonfile = $page->files()->filterBy('extension', 'json')->first();
      $json = file_get_contents($jsonfile->url());
      $data = json_decode($json, true);

      // echo '<pre style="display: block; max-height: 200px; margin-bottom: 20px; overflow: scroll;">';
      // print_r($data);
      // echo '</pre>';

      ?>
      </div>
    </div>

    <? snippet('list_municipalities', ['data' => $data]) ?>

  </div>

</main>

<? snippet('footer') ?>