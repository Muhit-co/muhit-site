<div id="list_municipalities" class="row u-pv20">

  <?
  foreach ($data as $key => $il) :
    $il_name = $key;
    foreach ($il as $key2 => $ilce) :
      if ($key2 == 'il') :
        $il_name = ucwords(mb_strtolower($ilce['belediye-ismi'])) . ' <span class="c-greyLight">(' . $ilce['plaka'] . ')</span>';
      else :
      ?>

        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card">
            <h4 title="Belediye İsmi" style="margin: 0;"><?= ucwords(mb_strtolower($ilce['belediye-ismi'])) ?></h4>
            <p title="İl İsmi" style="margin: 0 0 5px;" class="c-grey"><?= $il_name ?></p>

            <? if (array_key_exists('belediye-tel', $ilce)) : ?>
              <i class="ion ion-fw ion-ios-telephone u-mr10 c-greyLight"></i>
              <a href="tel:<?= $ilce['belediye-tel'] ?>" target="_blank">
                <small><?= $ilce['belediye-tel'] ?></small>
              </a><br>
            <? endif ?>

            <? if (array_key_exists('belediye-mail', $ilce)) : ?>
              <i class="ion ion-fw ion-android-mail u-mr10 c-greyLight"></i>
              <a href="mailto:<?= $ilce['belediye-mail'] ?>" target="_blank">
                <small><?= $ilce['belediye-mail'] ?></small>
              </a><br>
            <? endif ?>

            <? if (array_key_exists('belediye-web', $ilce)) : ?>
              <i class="ion ion-fw ion-link u-mr10 c-greyLight"></i>
              <? $url = (strpos($ilce['belediye-web'], 'http') !== false) ? $ilce['belediye-web'] : 'http://' . $ilce['belediye-web']; ?>
              <a href="<?= $url ?>" target="_blank">
                <small><?= $ilce['belediye-web'] ?></small>
              </a><br>
            <? endif ?>

            <? if (array_key_exists('nufus', $ilce)) : ?>
              <i class="ion ion-fw ion-ios-people u-mr10 c-greyLight"></i>
              <small><?= number_format($ilce['nufus']) ?></small><br>
            <? endif ?>

          </div>
        </div>

      <?
      endif;
    endforeach;
  endforeach;
  ?>

</div>
