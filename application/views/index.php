<!-- ************* MENÚ SUPERIOR INCLUDE ***********************************************  -->
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Title -->
    <title>Pxp Euskadi</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?= $this->init->baseUrl ?>assets-vial/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?= $this->init->baseUrl ?>assets-vial/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $this->init->baseUrl ?>assets-vial/vendor/animate.css">
    <link rel="stylesheet" href="<?= $this->init->baseUrl ?>assets-vial/vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="<?= $this->init->baseUrl ?>assets-vial/css/styles.multipage-education.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?= $this->init->baseUrl ?>assets-vial/css/custom.css">

  </head>

  <body>
    <main>
      <!-- Header -->
      <header id="js-header" class="u-header">
        <div class="u-header__section">
          <!-- Topbar -->
          <?php $this->load->view($this->init->appLang.'/partials/topbar') ?>
          <!-- End Topbar -->

          <div class="container">
            <!-- Nav -->
            <?php $this->load->view($this->init->appLang.'/partials/nav') ?>
            <!-- End Nav -->
          </div>
        </div>
      </header>
      <!-- End Header -->

      <?php if(isset($_SESSION['DISTINTIVA-MESSAGE'])):?>
        <?php $this->load->view('inline-message') ?>
      <?php endif?>
      <?php foreach($files['views'] as $view): ?>
        <?php $this->load->view($view) ?>
      <?php endforeach ?>
      <?php $this->load->view('action') ?>
<!-- ************* FOOTER INCLUDE ***********************************************  -->
	  <!-- Footer -->
      <?php $this->load->view($this->init->appLang.'/partials/footer') ?>

      <!-- End Footer -->
<!-- ************* FOOTER INCLUDE ***********************************************  -->
      <!-- Go to Top -->
      <?php $this->load->view($this->init->appLang.'/partials/go-to-top') ?>
      <!-- End Go to Top -->
    </main>

    <!-- JS Global Compulsory -->
    <script src="<?= $this->init->baseUrl ?>assets-vial/vendor/jquery/jquery.min.js"></script>
    <script src="<?= $this->init->baseUrl ?>assets-vial/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="<?= $this->init->baseUrl ?>assets-vial/vendor/popper.min.js"></script>
    <script src="<?= $this->init->baseUrl ?>assets-vial/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->

    <!-- JS Unify -->
    <script src="<?= $this->init->baseUrl ?>assets-vial/js/hs.core.js"></script>
    <script src="<?= $this->init->baseUrl ?>assets-vial/js/components/hs.header.js"></script>
    <script src="<?= $this->init->baseUrl ?>assets-vial/js/helpers/hs.hamburgers.js"></script>
    <script src="<?= $this->init->baseUrl ?>assets-vial/js/components/hs.dropdown.js"></script>
    <script src="<?= $this->init->baseUrl ?>assets-vial/js/helpers/hs.height-calc.js"></script>
    <script src="<?= $this->init->baseUrl ?>assets-vial/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="<?= $this->init->baseUrl ?>assets-vial/js/custom.js"></script>
    <?php if(isset($files['js'])): ?>
        <?php foreach($files['js'] as $js): ?>
          <script src="<?= $js ?>" type="text/javascript"></script>
        <?php endforeach ?>
      <?php endif ?>

    <!-- JS Plugins Init. -->
    <script>
      var DomRootEl = $(document.body),
          BaseUrl = '<?= $this->init->baseUrl ?>',
          Processing = "<?= $this->lang->line('message-processing') ?>";
      <?php if(isset($files['fns'])): ?>
        <?php foreach($files['fns'] as $fns): ?>
          <?= $fns ?>
        <?php endforeach ?>
      <?php endif ?>
    </script>
  </body>
</html>
