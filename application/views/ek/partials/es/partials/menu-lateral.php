<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- ************* MENÚ LATERAL VERTICAL ***********************************************  -->
      <!--Sidebar-->
          <div class="col-md-4">
            <div id="stickyblock-start">
              <div class="js-sticky-block g-sticky-block--lg pt-4" data-responsive="true" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">


                <ul class="list-unstyled g-mb-30">
                      <li class="mb-1">

                    <!-- side-menu-active -->
          <a class="<?= $idPage === 'permiso-puntos' ? 'side-menu-active' : '' ?> d-block u-link-v5 g-color-text g-bg-secondary g-font-size-15 g-px-15 g-py-10" href="<?= $this->init->baseUrl ?>index.php/permisoPuntos">
                      <i class="g-font-size-15 g-pos-rel g-top-2 mr-1 fa fa-arrow-right"></i>
                      ¿Qué es el permiso por puntos?
                    </a>
                  </li>
                  <li class="mb-1">
                    <a class="<?= $idPage === 'infracciones' ? 'side-menu-active' : '' ?> d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-15 rounded g-pl-20--hover g-px-15 g-py-10" href="<?= $this->init->baseUrl ?>index.php/infracciones">
                      <i class="g-font-size-15 g-pos-rel g-top-2 mr-1 fa fa-arrow-right"></i>
                      Infracciones que quitan puntos
                    </a>
                  </li>
                  <li class="mb-1">
                    <a class="<?= $idPage === 'faq' ? 'side-menu-active' : '' ?> d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-15 rounded g-pl-20--hover g-px-15 g-py-10" href="<?= $this->init->baseUrl ?>index.php/faq">
                      <i class="g-font-size-15 g-pos-rel g-top-2 mr-1 fa fa-arrow-right"></i>
                      Preguntas frecuentes
                    </a>
                  </li>
                  <li class="mb-1">
                    <a class="<?= $idPage === 'perdida-puntos' ? 'side-menu-active' : '' ?> d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-15 rounded g-pl-20--hover g-px-15 g-py-10" href="<?= $this->init->baseUrl ?>index.php/perdidaPuntos">
                      <i class="g-font-size-15 g-pos-rel g-top-2 mr-1 fa fa-arrow-right"></i>
                      He perdido puntos
                    </a>
                  </li>
                  <li class="mb-1">
                    <a class="<?= $idPage === 'perdida-permiso' ? 'side-menu-active' : '' ?> d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-15 rounded g-pl-20--hover g-px-15 g-py-15" href="<?= $this->init->baseUrl ?>index.php/perdidaPermiso">
                      <i class="g-font-size-15 g-pos-rel g-top-2 mr-1 fa fa-arrow-right"></i>
                      He perdido el permiso
                    </a>
                  </li>
                  <li class="mb-1">
                    <a class="<?= $idPage === 'cursos-precios' ? 'side-menu-active' : '' ?> d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-15 rounded g-pl-20--hover g-px-15 g-py-10" href="<?= $this->init->baseUrl ?>index.php/cursosPrecios">
                      <i class="g-font-size-15 g-pos-rel g-top-2 mr-1 fa fa-arrow-right"></i>
                      Cursos y precios
                    </a>
                  </li>
                  <li class="mb-1">
                    <a class="<?= $idPage === 'centros' ? 'side-menu-active' : '' ?> d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-15 rounded g-pl-20--hover g-px-15 g-py-10" href="<?= $this->init->baseUrl ?>index.php/centros">
                      <i class="g-font-size-15 g-pos-rel g-top-2 mr-1 fa fa-arrow-right"></i>
                      Centros de recuperación de puntos
                    </a>
                  </li>
                 
				  
				  <!-- 
				  <li class="mb-1">
                    <a class="<?= $idPage === 'links-interes' ? 'side-menu-active' : '' ?> d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-15 rounded g-pl-20--hover g-px-15 g-py-10" href="<?= $this->init->baseUrl ?>index.php/linksInteres">
                      <i class="g-font-size-15 g-pos-rel g-top-2 mr-1 fa fa-arrow-right"></i>
                      Enlaces de interés
                    </a>
                  </li> 
				  

                  <li class="mb-1">
                    <a class="<?= $idPage === 'buzon' ? 'side-menu-active' : '' ?> d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-15 rounded g-pl-20--hover g-px-15 g-py-10" href="<?= $this->init->baseUrl ?>index.php/buzon">
                      <i class="g-font-size-15 g-pos-rel g-top-2 mr-1 fa fa-arrow-right"></i>
                      Buzón de sugerencias
                    </a>
                  </li>


				  -->

                </ul>








        <!-- <div class="media g-mb-10">

          <div class="d-flex mr-3">
                    <span>
                      <img src="<?= $this->init->baseUrl ?>assets-vial/img/icon-plus-color.png">
                    </span>
                  </div>

          <div class="media-body">
                    <p class="mb-0">
                      <a href="https://www.cnae.com/index.aspx/permiso-por-puntos/guia-del-permiso-por-puntos" class="g-color-bluehight g-line-height-1_2 g-font-size-24 g-color-primary--hover">
                        Breve guía del <br>Permiso por Puntos
                      </a>
                    </p>
                  </div>

        </div> -->


           
			
			<!-- 
			 
			 <div class="media g-mb-10">

          <div class="d-flex mr-3">
                    <span>
                      <img src="<?= $this->init->baseUrl ?>assets-vial/img/icon-plus-color.png">
                    </span>
                  </div>

          <div class="media-body">
                        <p class="mb-0">
                          <a href="https://www.cnae.com/index.aspx/autoescuelas/legislacion" class="g-color-bluehight g-line-height-1_2 g-font-size-24 g-color-primary--hover">
                            Legislación y <br>Normativa
                          </a>
                        </p>
					 </div>

           
		   </div>



			-->






          </div>
      </div>
    </div>
<!-- ************* MENÚ LATERAL VERTICAL ***********************************************  -->