<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="main-boxes g-pt-80 g-pb-20">
	<div class="container">
          <div class="row">
          <!--Main content-->
          <div class="col-md-8">
		          <h3 class="g-font-weight-100 g-font-size-50">Preinscripción</h3>
		           <h4>Información del Curso</h4>
		         <ul class="unstyled-list">
						<li><b>Fecha:</b>
							<ul>
								<li>
									<?php echo mdate('%d/%m/%Y', mysql_to_unix($curso->fecha_inicio.' 00:00:00')) ?>
								</li>
								<?php if(!is_null($curso->dia2)): ?>
									<li><?php echo mdate('%d/%m/%Y', mysql_to_unix($curso->dia2.' 00:00:00')) ?></li>
								<?php endif ?>
								<?php if(!is_null($curso->dia3)): ?>
									<li><?php echo mdate('%d/%m/%Y', mysql_to_unix($curso->dia3.' 00:00:00')) ?></li>
								<?php endif ?>
								<?php if(!is_null($curso->dia4)): ?>
									<li><?php echo mdate('%d/%m/%Y', mysql_to_unix($curso->dia4.' 00:00:00')) ?></li>
								<?php endif ?>
								<?php if(!is_null($curso->dia5)): ?>
									<li><?php echo mdate('%d/%m/%Y', mysql_to_unix($curso->dia5.' 00:00:00')) ?></li>
								<?php endif ?>
								<?php if(!is_null($curso->dia6)): ?></li>
									<li><?php echo mdate('%d/%m/%Y', mysql_to_unix($curso->dia6.' 00:00:00')) ?></li>
								<?php endif ?>
								</li>
							</ul>
						</li>
						<li><b>Horario:</b>
							<ul>
								<li>
									<?php echo $curso->fecha_fin ?>
								</li>

								<?php if(!is_null($curso->horario2)): ?>
									<li><?php echo $curso->horario2 ?></li>
								<?php endif ?>
								<?php if(!is_null($curso->horario3)): ?>
									<li><?php echo $curso->horario3 ?></li>
								<?php endif ?>
								<?php if(!is_null($curso->horario4)): ?>
									<li><?php echo $curso->horario4 ?></li>
								<?php endif ?>
								<?php if(!is_null($curso->horario5)): ?>
									<li><?php echo $curso->horario5 ?></li>
								<?php endif ?>
								<?php if(!is_null($curso->horario6)): ?>
									<li><?php echo $curso->horario6 ?></li>
								<?php endif ?>
							</ul>
						</li>
						<li><b>Tipo:</b> <?php echo $curso->curso ?></li>
						<li><b>Idioma:</b> <?php echo $curso->idioma ?></li>
						<li><b>Centro:</b> <?php echo $curso->nombre ?></li>
						<li><b>Dirección:</b> <?php echo $curso->direccion ?></li>
						<li><b>Precio:</b> € <?php echo $curso->precio ?></li>
					</ul>
              <p class="g-font-size-16 g-mt-20 g-mb-30">Rellenando el siguiente formulario:</p>
              <form method="post" action="<?= $this->init->baseUrl ?>index.php/formulariopreinscripcion">
              	<input type="hidden" name="<?= $csrf['name'] ?>" value="<?= $csrf['hash'] ?>">
              	<input type="hidden" name="id_centro" value="<?= $id_centro ?>">
              	<input type="hidden" name="id_calendario" value="<?= $curso->id_calendario ?>">
	              <div class="g-mb-30">
	                <div class="g-mb-30">
	                  <label for="nombre" class="g-font-weight-500 g-font-size-16 g-pl-30">Su nombre:</label>
	                  <input id="nombre" type="text" placeholder="Indique su nombre" class="form-control u-shadow-v19 g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="pre_nombre" required>
	                </div>
	                <div class="g-mb-30">
	                  <label for="apellidos" class="g-font-weight-500 g-font-size-16 g-pl-30">Sus apellidos:</label>
	                  <input id="apellidos" type="text" placeholder="Indique sus apellidos" class="form-control u-shadow-v19  g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="pre_apellidos" required>
	                </div>
	                <div class="g-mb-30">
	                  <label for="telefono" class="g-font-weight-500 g-font-size-16 g-pl-30">Teléfono de contacto:</label>
	                  <input id="telefono" type="text" placeholder="Indique el teléfono de contacto" class="form-control u-shadow-v19  g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="pre_telefono" required>
	                </div>
	                <div class="g-mb-30">
	                    <label for="dni" class="g-font-weight-500 g-font-size-16 g-pl-30">DNI:</label>
	                    <input id="dni" type="text" placeholder="Indique su DNI" class="form-control u-shadow-v19  g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="pre_dni" required>
	                </div>
	                <div class="g-mb-30">
	                    <label for="idioma-preferencia" class="g-font-weight-500 g-font-size-16 g-pl-30">Idioma de preferencia:</label>
	                    <select id="idioma-preferencia" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-5 g-pl-30 g-py-12"
	                            data-placeholder="Idioma de preferencia"
	                            data-open-icon="fa fa-angle-down"
	                            data-close-icon="fa fa-angle-up"
	                            name="pre_idioma">
	                    <option class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active" value="espanol">Español</option>
	                    <option class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active" value="euskera">Euskera</option>
	                  </select>
	                </div>
	                <div class="g-mb-0">
                <div class="checkbox">
                      <input type="checkbox" name="privacy">
                      <label>
                      Acepto la <a class="g-font-size-14" href="javascript:;" data-toggle="modal" data-target="#myModal">
                      Política de Protección de Datos</a>
                    </label>
                  </div>
	                <button type="submit" class="nav-link btn btn-primary g-color-white g-color-white--hover g-color-primary--hover g-font-size-16 g-mt-20">Preinscibirme ›
	                </button>
	            </div>
          	</form>
          </div>
</section>