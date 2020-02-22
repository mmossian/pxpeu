<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--Cursos-->
<section class="g-py-0">
        <div class="container">
          <div class="row">
			<div class="col-lg-6">
			  <h3 class="g-font-size-40 g-font-weight-400 g-mb-50">Precio de Cursos año 2018</h3>
			  <div class="row">
			    <div class="col-md-3">
			      <span class="g-elipse">
			        <img src="<?= $this->init->baseUrl ?>assets-vial/img/icon-curso-dark.png"/>
			      </span>
			    </div>
			    <div class="col-md-9">
			      <ul class="list-unstyled g-pl-10">
			        <li class="g-font-size-26 g-pt-5 g-font-weight-700">Curso Recuperación total</li>
			        <li class="g-font-size-18 g-mt-minus-5">(Si has perdido el permiso)</li>
			        <li class="g-font-size-22 g-font-weight-700 g-mt-10 g-color-bluehight">327,97 € + IVA</li>
			      </ul>
			    </div>
			  </div>
			  <div class="row g-mt-20">
			    <div class="col-md-3">
			      <span class="g-elipse">
			        <img src="<?= $this->init->baseUrl ?>assets-vial/img/icon-curso-high.png"/>
			      </span>
			    </div>
			    <div class="col-md-9">
			      <ul class="list-unstyled g-pl-10">
			        <li class="g-font-size-26 g-pt-5 g-font-weight-700">Curso Recuperación parcial</li>
			        <li class="g-font-size-18 g-mt-minus-5">(6 puntos máx.)</li>
			        <li class="g-font-size-22 g-font-weight-700 g-mt-10 g-color-bluehight">174,41 € + IVA</li>
			      </ul>
			    </div>
			  </div>
			  <p class="g-mb-0 g-font-size-17 g-mt-30">
			    Estas tarifas incluyen el material didáctico, pero no la tasa de<br class="hidden--sm">
			    examen (30 € aprox.)
			  </p>
			  <a href="<?= $this->init->baseUrl ?>index.php/cursosPrecios" class="btn g-color-primary g-btn-border-primary g-bg-primary--hover g-color-white--hover g-font-size-14 text-uppercase g-rounded-5 g-px-40 g-py-20 g-mt-40">
			    Todo sobre los cursos
			  </a>
			</div>
			<!--End Cursos-->

			<!--Preguntas-->
			<div class="col-lg-6 g-py-30 g-py-0--lg">
			  <h3 class="g-font-size-40 g-font-weight-400 g-mb-50--lg">Preguntas frecuentes</h3>
			  <ul class="list-unstyled g-mb-0 g-faqs">
			      <li class="mb-1">
			        <a class="d-block u-link-v5 g-color-primary--hover g-color-text g-font-size-20 g-pl-20--hover g-px-10 g-py-20" href="<?=  $this->init->baseUrl ?>index.php/infracciones">
			          <i class="fa fa-angle-right g-mr-20 g-color-bluehight"></i>
			          ¿Qué infracciones quitan puntos?
			        </a>
			      </li>
			      <li class="mb-1">
			        <a class="d-block u-link-v5 g-color-primary--hover g-color-text g-font-size-20 g-pl-20--hover g-px-10 g-py-20" href="<?=  $this->init->baseUrl ?>index.php/faq#cuanto-duran-los-cursos">
			          <i class="fa fa-angle-right g-mr-20 g-color-bluehight"></i>
			          ¿Cuánto duran los cursos?
			        </a>
			      </li>
			      <li class="mb-1">
			        <a class="d-block u-link-v5 g-color-primary--hover g-color-text g-font-size-20 g-pl-20--hover g-px-10 g-py-20" href="<?=  $this->init->baseUrl ?>index.php/faq#cuantos-puntos-me-corresponden-por-mi-antigüedad">
			          <i class="fa fa-angle-right g-mr-20 g-color-bluehight"></i>
			          ¿Cuántos puntos me corresponden por mi antigüedad?
			        </a>
			      </li>
			      <li class="mb-1">
			        <a class="d-block u-link-v5 g-color-primary--hover g-color-text g-font-size-20 g-pl-20--hover g-px-10 g-py-20" href="<?=  $this->init->baseUrl ?>index.php/faq#donde-puedo-consultar-mi-saldo-de-puntos">
			          <i class="fa fa-angle-right g-mr-20 g-color-bluehight"></i>
			          ¿Dónde puedo consultar mi saldo de puntos?
			        </a>
			      </li>
			  </ul>
			  <a href="<?= $this->init->baseUrl ?>index.php/faq" class="btn g-color-primary g-btn-border-primary g-bg-primary--hover g-color-white--hover g-font-size-14 text-uppercase g-rounded-5 g-px-40 g-py-20 g-mt-40">
			    Respondemos las preguntas más habituales
			  </a>
			</div>
		</div>
	</div>
</section>
<!--End Preguntas-->