<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <nav class="js-mega-menu navbar navbar-expand-lg g-px-0 g-py-5 g-py-3--lg">
  <!-- Logo -->
  <a class="navbar-brand text-center" href="<?= $this->init->baseUrl ?>">
    <img class="img-fluid" src="<?= $this->init->baseUrl ?>assets-vial/img/logo/pxp-euskadi.jpg" alt="PxP Euskadi">
    <span class="claim g-font-size-12">Trabajando al servicio de los centros de formación vial</span>
  </a>
  <!-- End Logo -->

  <!-- Responsive Toggle Button -->
  <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0" type="button"
          aria-label="Toggle navigation"
          aria-expanded="false"
          aria-controls="navBar"
          data-toggle="collapse"
          data-target="#navBar">
    <span class="hamburger hamburger--slider g-px-0">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </span>
  </button>
  <!-- End Responsive Toggle Button -->

  <!-- Navigation -->
  <div id="navBar" class="collapse navbar-collapse">
    <ul class="navbar-nav align-items-lg-center g-py-30 g-py-0--lg">

      <li class="nav-item <?= $idPage == 'home' ? 'active' : '' ?>">
        <a class="nav-link g-color-primary--hover g-font-size-17 g-font-size-17--xl g-pl-0--lg g-px-20--lg g-py-10 g-py-30--lg" href="<?= $this->init->baseUrl ?>">
          Inicio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link g-color-primary--hover d-none--lg g-font-size-17 g-font-size-17--xl g-px-20--lg g-py-10 g-py-30--lg" href="https://www.cnae.com/index.aspx/quienes-somos">
          Quienes Somos
        </a>
      </li>
      <li class="nav-item <?= $idPage == 'permiso-puntos' ? 'active' : '' ?>">
        <a class="nav-link g-color-primary--hover g-font-size-17 g-font-size-17--xl g-px-20--lg g-py-10 g-py-30--lg" href="<?= $this->init->baseUrl ?>index.php/permisopuntos">
          Permiso por puntos
        </a>
      </li>
      <li class="nav-item <?= $idPage == 'cursos' ? 'active' : '' ?>">
        <a class="nav-link g-color-primary--hover g-font-size-17 g-font-size-17--xl g-px-20--lg g-py-10 g-py-30--lg" href="<?= $this->init->baseUrl ?>index.php/cursos">
          Cursos
        </a>
      </li>
      <li class="nav-item <?= $idPage == 'centros' ? 'active' : '' ?>">
        <a class="nav-link g-color-primary--hover g-font-size-17 g-font-size-17--xl g-px-20--lg g-py-10 g-py-30--lg" href="<?= $this->init->baseUrl ?>index.php/centros">
          Centros
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-primary g-color-white g-color-white--hover g-color-primary--hover g-font-size-17 g-font-size-17--xl g-px-15--lg g-ml-50--lg" href="<?= $this->init->baseUrl ?>index.php/accesoalumnos">
          Acceso Alumnado ›
        </a>
      </li>
    </ul>
  </div>
  <!-- End Navigation -->
</nav>