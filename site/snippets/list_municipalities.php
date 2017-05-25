<!-- Component-specific dependencies -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<style>
  #list_municipalities .card {
    margin-bottom: 1rem;
    padding: 1rem;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  #municipality_search {
    width: 100%;
    max-width: 300px;
  }
</style>



<div class="row u-pv20">
  <div class="col-xs-12">

    <div class="field-group field-group--grey u-inlineblock u-relative">
      <input type="text" id="municipality_search" value="<?= get('m_q') ?>" name="m_q" placeholder="Search..." />

      <a href="javascript:void(0)" id="municipality_clear" class="u-pinnedtopright" style="display: none; padding: 10px 15px;">
        <i class="ion ion-android-close ion-15x"></i>
      </a>
    </div><br>

    <em class="c-greyLight"><small id="filtercount">&nbsp;</small></em>

  </div>
</div>

<div id="list_municipalities" class="row u-mb20">

  <?
  foreach ($data as $key => $il) :
    $il_name = $key;
    $il_code = '';
    foreach ($il as $key2 => $ilce) :
      if ($key2 == 'il') :
        $il_name = ucwords(mb_strtolower($ilce['belediye-ismi']));
        $il_code = ' <span class="c-greyLight">(' . $ilce['plaka'] . ')</span>';
      else :
      ?>

        <div class="item col-xs-12 col-sm-6 col-md-4">
          <div class="card">
            <? $ilce_name = ucwords(mb_strtolower($ilce['belediye-ismi'])) ?>
            <h4 data-type="district" title="Belediye İsmi" style="margin: 0;"><?= $ilce_name ?></h4>
            <p data-type="city" title="İl İsmi" style="margin: 0 0 5px;" class="c-grey"><?= $il_name ?></p>

            <? if (array_key_exists('belediye-tel', $ilce)) : ?>
              <i class="ion ion-fw ion-ios-telephone u-mr10 c-greyLight"></i>
              <a href="tel:<?= $ilce['belediye-tel'] ?>" target="_blank">
                <small data-type="telephone"><?= $ilce['belediye-tel'] ?></small>
              </a><br>
            <? endif ?>

            <? if (array_key_exists('belediye-mail', $ilce)) : ?>
              <i class="ion ion-fw ion-android-mail u-mr10 c-greyLight"></i>
              <a href="mailto:<?= $ilce['belediye-mail'] ?>" target="_blank">
                <small data-type="email"><?= $ilce['belediye-mail'] ?></small>
              </a><br>
            <? endif ?>

            <? if (array_key_exists('belediye-web', $ilce)) : ?>
              <i class="ion ion-fw ion-link u-mr10 c-greyLight"></i>
              <? $url = (strpos($ilce['belediye-web'], 'http') !== false) ? $ilce['belediye-web'] : 'http://' . $ilce['belediye-web']; ?>
              <a href="<?= $url ?>" target="_blank">
                <small data-type="website"><?= $ilce['belediye-web'] ?></small>
              </a><br>
            <? endif ?>

            <? if (array_key_exists('nufus', $ilce)) : ?>
              <i class="ion ion-fw ion-ios-people u-mr10 c-greyLight"></i>
              <small data-type="population"><?= number_format($ilce['nufus']) ?></small><br>
            <? endif ?>

          </div>
        </div>

      <?
      endif;
    endforeach;
  endforeach;
  ?>

</div>



<script>
  $(document).ready(function() {

    var qsRegex = $('#municipality_search').val();

    $grid = $('#list_municipalities').isotope({
      itemSelector: '.item',
      layoutMode: 'fitRows',
      filter: function() {
        return qsRegex ? $(this).html().match( qsRegex ) : true;
      }
    });

    var iso = $grid.data('isotope');

    // use value of search field to filter
    var $quicksearch = $('#municipality_search').keyup( debounce( function() {
      qsRegex = new RegExp( $quicksearch.val(), 'gi' );
      $grid.isotope();
      updateFilterCount();
      toggleClearButton();
    }, 200 ) );

    $('#municipality_clear').click(function() {
      $quicksearch.val('');
      qsRegex = '';
      $grid.isotope();
      updateFilterCount();
      toggleClearButton();
    });

    // debounce so filtering doesn't happen every millisecond
    function debounce( fn, threshold ) {
      var timeout;
      return function debounced() {
        if ( timeout ) {
          clearTimeout( timeout );
        }
        function delayed() {
          fn();
          timeout = null;
        }
        timeout = setTimeout( delayed, threshold || 100 );
      }
    }

    function updateFilterCount() {
      str = iso.filteredItems.length + ' result';
      if(iso.filteredItems.length !== 1) { str += 's'; }
      $('#filtercount').text(str);
    }

    function toggleClearButton() {
      if($('#municipality_search').val().length > 0) {
        $('#municipality_clear').show();
      } else {
        $('#municipality_clear').hide();
      }
    }

    updateFilterCount();
    toggleClearButton();
  });
</script>