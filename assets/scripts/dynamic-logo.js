function defineObjects() {
  $objects = new Array(
    {
      name: "camii",
      slug: "part5",
      width: "451",
      height: "663"
    },
    {
      name: "house1",
      slug: "part4",
      width: "356",
      height: "376"
    },
    {
      name: "house2",
      slug: "part6",
      width: "296",
      height: "335"
    },
    {
      name: "tower",
      slug: "part1",
      width: "260",
      height: "1000"
    },
    {
      name: "tree",
      slug: "part2",
      width: "205",
      height: "315"
    },
    {
      name: "bicycle",
      slug: "part3",
      width: "88",
      height: "60"
    }
  );
  $settings = new Array(
    {
      path: 'assets/images/dynamic-logo/',
      imgtype: 'svg'
    }
  );
}

function placeObjects(canvas) {

  $.each($objects, function(i) {

    // set object styles
    $style =
      'position: absolute;' +
      'bottom: 0;' +
      'left: ' + 0 + 'px;';

    // create img object
    $object =
      '<img title="' +
      $objects[i].name +
      '" src="' +
      $settings[0].path +
      $objects[i].slug +
      '.' + $settings[0].imgtype +
      '" alt="" style="' +
      $style +
      '" />';

    // append object to canvas
    canvas.append($object);

  });

}

function randomiseObjects(objects, canvas) {

  $canvas_width = canvas.outerWidth();
  $canvas_height = canvas.outerHeight();
  $limit_left = 0;
  $limit_right = 0;
  $occupied = new Array();

  $.each($objects, function(i) {

    k = 0;
    kmax = 10; // maximum amount of placement attempts
    flag = false;
    while (k < kmax && flag == false) {

      // randomise position
      $obj_calc_width = $objects[i].width / (1000 / $canvas_height);
      $obj_left = $limit_left + ($canvas_width - $obj_calc_width - $limit_left - $limit_right) * Math.random();
      $obj_right = $obj_left + $obj_calc_width;

      // check if chosen position overlaps with previous objects
      flag = true;
      $.each($occupied, function(j) {
        if ( $obj_left > $occupied[j].left && $obj_left < $occupied[j].right ) {
          flag = false;
          return false;
        } else if ( $obj_right < $occupied[j].right && $obj_right > $occupied[j].left ) {
          flag = false;
          return false;
        } else {
          flag = true;
        }
      });

      k++;

    }

    $occupied.push(
      {
        left: parseInt($obj_left),
        right: parseInt($obj_right)
      }
    );

    canvas.find('img[title="' + $objects[i].name + '"]').css('left', $obj_left);

    // debugger
    //canvas.append('<code><small><b>' + $objects[i].name + '</b>: ' + $occupied[i].left + ' – ' + $occupied[i].right  + '; ' + flag + ', k: ' + k + '</small></code><br />');

  });
}

$(document).ready(function() {

  randomiseObjects( $objects, $('#dynamic_logo') );

  dynamic_logo_interval = setInterval(function(){ randomiseObjects( $objects, $('#dynamic_logo') ); }, 3000);

  $('#dynamic_logo').click(function() {
    randomiseObjects( $objects, $('#dynamic_logo') );
    $(this).blur();
    clearInterval(dynamic_logo_interval);
    dynamic_logo_interval = setInterval(function(){ randomiseObjects( $objects, $('#dynamic_logo') ); }, 3000);
  });

});