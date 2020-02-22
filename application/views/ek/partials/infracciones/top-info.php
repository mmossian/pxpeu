<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="main-boxes g-pt-80 g-pb-20">
        <div class="container">
          <div class="row">
          <!--Main content-->


		  <div class="col-md-8">


		  <h3 class="g-font-weight-100 g-font-size-50">Infracciones que quitan puntos</h3>

           <p>Quitan puntos las conductas más peligrosas en la carretera: la excesiva velocidad, la conducción bajo los efectos del alcohol o las drogas, el no uso del cinturón de seguridad, de los Sistemas de Retención Infantil (SRI) o del casco (cuando el vehículo es una moto, un ciclomotor o, en algunos supuestos, la bicicleta), el uso del teléfono móvil mientras se conduce, etc. </p>


			<h5>Multas y puntos por exceso de velocidad</h5>
			<img class="img-fluid g-mt-20 g-mb-40" src="<?= $this->init->baseUrl ?>assets-vial/img/cuadro-velocidad-es-2015.png" alt="tabla infraccion exceso velocidad multa y puntos"/>

			<p>Más abajo, en esta misma página, tienes la estadística de las <a href="#infracciones-mas-habituales">infracciones más habituales que restan puntos</a>. </p>
			<br />



            <!--ITEM-->
            <div class="item-puntos">
              <h4>¿Qué pasa si pierdo todos los puntos?</h4>
              <p>
                Que no puedes conducir porque pierdes el permiso.
              </p>
            </div>

            <!--ITEM-->
            <div class="item-puntos">
              <h4>¿Cómo recupero el carné?</h4>
              <p>
                Has de hacer un <a href="<?= $this->init->baseUrl ?>index.php/cursos">curso de sensibilización y reeducación vial</a> en un centro autorizado (también son conocidos como cursos de recuperación total)
                y luego someterte a un examen en la Jefatura Provincial de Tráfico.
              </p>
            </div>

            <!--ITEM-->
            <div class="item-puntos">
              <h4>¿Cómo puedo encontrar un centro autorizado?</h4>
              <p>
                 En esta misma página tienes un <a href="<?= $this->init->baseUrl ?>index.php/centros">buscador de centos autorizados</a>. Hay unos 250 en todo el país.
              </p>
            </div>



			 <!--CTA BUTTON continuación -->
			 <div class="text-center g-mt-50">
			    <a href="<?= $this->init->baseUrl ?>index.php/infracciones" class="btn g-color-primary g-btn-border-primary g-bg-primary--hover g-color-white--hover g-font-size-14 text-uppercase g-rounded-5 g-px-40 g-py-20">
                  Preguntas Frecuentes ›
                </a>
              </div>



          </div>






 <?php $this->load->view('ek/partials/menu-lateral') ?>




		  </div>
        </div>
      </section>
      <!--End Top Info-->