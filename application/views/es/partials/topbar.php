<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $segment = $this->uri->uri_string();
?>
<div class="g-bg-main">

  <!--Header top-->
  <section class="grey-top">
    <div class="container g-py-10">
          <div class="enlace-dep">
              <a href="https://www.trafikoa.eus/wps/portal/trafico/!ut/p/z1/04_Sj9CPykssy0xPLMnMz0vMAfIjo8ziXTycTI2CzdwsLU2cvVwNXEIMjA0gQD-ckIIooLQBDuAI0h-lD1Th7-MZZhpo7OjuaBJoaubs42VpADdAH78JUWArTJy8jEJDfcNcHE1MTEMMfQI94Qb4eeTnpuoHp5bqF-RGGGQGpCsCALacCm0!/dz/d5/L0lHSkovd0RNQU5rQUVnQSEhLzROVkUvZXM!/" target="_blank">
                <img src="<?= $this->init->baseUrl ?>assets-vial/img/logo/gobierno-vasco.png" alt="Eusko Jaurlaritza - Gobierno Vasco"/>
                <span>Departamento de <br>Seguridad</span>
              </a>
          </div>
    </div>
  </section>
  <!--end header top-->


  <div class="container g-py-5 text-right">
    <ul class="list-inline g-mb-0 navbar-right">
    <!-- Links -->
      <li class="list-inline-item u-link-v5 g-color-white g-font-size-14 g-px-10--sm g-py-15">
        <i class="fa fa-phone g-px-5"></i>900 10 13 14
      </li>
      <li class="list-inline-item  d-lg-inline-block u-link-v5 g-px-10--sm g-py-15">
        <a class="g-color-white g-font-size-14" href="mailto:info@pxpeuskadi.eus"><i class="fa fa-envelope g-px-5"></i>info@pxpeuskadi.eus</a>
      </li>
      <!-- <li class="list-inline-item d-none d-lg-inline-block u-link-v5 g-px-10 g-py-15">
        <a class="g-color-white g-font-size-14" href="https://www.cnae.com/index.aspx/quienes-somos">Quienes somos</a>
      </li> -->

      <li class="list-inline-item  d-lg-inline-block u-link-v5 g-px-5 g-py-15 it-lang">
        <a class="g-color-white g-link-underline g-font-size-14" href="<?= $this->init->baseUrl ?>index.php/idioma/index/ek/<?= $segment ?>">EU</a>
      </li>
      <li class="list-inline-item u-link-v5 g-color-white g-font-size-14 g-px-0 g-py-15">
        |
	    </li>
	    <li class="list-inline-item  d-lg-inline-block u-link-v5 g-px-5 g-py-15">
       <a class="g-color-white g-font-size-14" href="<?= $this->init->baseUrl ?>index.php/idioma/index/es/<?= $segment ?>">ES</a>
      </li>


    <!-- End Links -->
    </ul>
  </div>
</div>