<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('_meta.php'); ?>
    <title>Mafullar - Red mafullar from Ayano Tateyama</title>

    <?php include('_head.php'); ?>

  </head>
  <body id="ctop">
    <?php include('_header.php'); ?>
    <div class="container">


      <div class="row">
        <div class="col-lg-10 col-xs-12">
          <?php include('components/_dropdowns.php'); ?>
          <?php include('components/_buttons.php'); ?>
          <?php include('components/_input.php'); ?>
          <?php include('components/_navs.php'); ?>
          <?php include('components/_navbar.php'); ?>
          <?php include('components/_labels.php'); ?>
          <?php include('components/_frames.php'); ?>
          <?php include('components/_progressbar.php'); ?>

          

        </div>
        <div class="col-lg-2 col-xs-12">

            <ul class="nav nav-pills nav-stacked mf-panel" style="position: fixed; right: 0px; width: 200px;">
              <li class="presentation"><a href="#ctop">Top</a></li>
              <li class="presentation"><a href="#dropdowns">Dropdowns</a></li>
              <li class="presentation"><a href="#buttons">Buttons</a></li>
              <li class="presentation"><a href="#inputs">Inputs</a></li>
            </ul>


        </div>

        </div>
      </div>
    </div>

    <?php include('_footer.php'); ?>
    <?php include('_script.php'); ?>
    <script>
    // handle links with @href started with '#' only
$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document

      var pos = $id.offset().top;


    // animated top scrolling
    $('body, html').animate({scrollTop: pos}, 'slow');
});
    </script>

  </body>
</html>
