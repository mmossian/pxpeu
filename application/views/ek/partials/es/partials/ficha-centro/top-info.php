<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
  //var_dump($centro);
  $dataCentro = [
    'latitude' => $centro->latitude,
    'longitude' => $centro->longitude,
    'nombre' => $centro->nombre,
    'direccion' => $centro->direccion_simple,
    'localidad' => $centro->localidad,
    'provincia' => $centro->provincia
  ];
?>
<section class="main-boxes g-pt-80 g-pb-20">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="g-max-width-960 mx-auto">
            <!-- Course Details -->
            <div id="carouseDetails" class="row g-pb-40">
              <div class="col-lg-1 g-mb-20 g-mb-0--lg">
                <span class="u-icon-v1 u-icon-size--xl g-color-primary g-bg-secondary g-font-size-30 rounded-circle">
                  <i class="fa fa-building"></i>
                </span>
              </div>

              <div class="col-lg-11">
                <div class="g-pl-15--lg">
                  <h3 class="g-font-weight-100 g-font-size-28 g-line-height-1_2 g-mt-20"><?= $centro->nombre ?></h3>
                  <ul class="list-unstyled mb-0 g-font-size-18">
                    <li class="py-1">
                      <i class="g-color-primary g-font-size-10 mr-2 fa fa-circle"></i>
                      <strong>Dirección:</strong> <?= $centro->direccion_simple ?>
                    </li>
                    <li class="py-1">
                      <i class="g-color-primary g-font-size-10 mr-2 fa fa-circle"></i>
                      <strong>Municipio:</strong> <?= $centro->localidad ?>
                    </li>
                    <li class="py-1">
                      <i class="g-color-primary g-font-size-10 mr-2 fa fa-circle"></i>
                      <strong>Territorio Histórico:</strong> <?= $centro->provincia ?>
                    </li>
                    <li class="py-1">
                      <i class="g-color-primary g-font-size-10 mr-2 fa fa-circle"></i>
                      <strong>Tlf.:</strong> <?= $centro->telefono1 ?> <?= is_null($centro->telefono2) ? '' :  ' - '.$centro->telefono2?>
                    </li>
                   <!--  <li class="py-1">
                      <i class="g-color-primary g-font-size-10 mr-2 fa fa-circle"></i>
                      <strong>Fax:</strong>
                    </li> -->
                    <li class="py-1">
                      <i class="g-color-primary g-font-size-10 mr-2 fa fa-circle"></i>
                      <strong>Correo:</strong> <a class="g-color-primary" href="mailto:<?= $centro->email ?>"><?= $centro->email ?></a>
                    </li>
                </ul>
                </div>
              </div>
            </div>
            <!-- End Course Details -->

            <h3 class="g-font-weight-100 g-font-size-24 g-line-height-1_2 g-mb-30 ">Formas de pago admitidas por el centro</h3>

			<div class="row">
          <div class="col-lg-6 g-mb-30  g-py-20">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="u-icon-v2 g-btn-border-primary rounded-circle g-mb-20">
                <i class="fa fa-university g-color-primary"></i>
              </span>
              <h3 class="h5 g-color-black mb-0">Pago por Banco</h3>
              <p class="g-mb-0 g-color-green g-font-weight-500 text-uppercase"><?= $centro->pagobanco == 1 ? 'Admitida' : 'No Admitida' ?></p>
            </div>
            <!-- End Icon Blocks -->
          </div>

			     <div class="col-lg-6 g-mb-30 g-brd-x g-brd-secondary-light-v2 g-py-20">
              <!-- Icon Blocks -->
              <div class="text-center">
                <span class="u-icon-v2 g-btn-border-primary rounded-circle g-mb-20">
                  <i class="fa fa-credit-card g-color-primary"></i>
                </span>
                <h3 class="h5 g-color-black mb-0">Tarjeta de Crédito</h3>
                <p class="g-mb-0 <?=  $centro->pagotarjeta == 1 ? 'g-color-green' : 'g-color-red' ?> g-font-weight-500 text-uppercase"><?= $centro->pagotarjeta == 1 ? 'Admitida' : 'No Admitida' ?></p>
              </div>
              <!-- End Icon Blocks -->
          </div>
			<!--
			<div class="col-lg-4 g-mb-30  g-py-20">

              <div class="text-center">
                <span class="u-icon-v2 g-btn-border-primary rounded-circle g-mb-20">
                  <i class="fa fa-money g-color-primary"></i>
                </span>
                <h3 class="h5 g-color-black mb-0">Pago en Efectivo</h3>
                <p class="g-mb-0 g-color-red g-font-weight-500 text-uppercase">No Admitida</p>
              </div>

            </div> -->




			</div>

			<small>* No se aceptan tarjetas American Express</small>
            <!--Tabs con info del centro-->
            <div class="g-py-60">
              <!-- Nav tabs -->
              <ul class="nav justify-content-center u-nav-v1-1 u-nav-primary u-nav-rounded-3 g-mb-20" role="tablist" data-target="nav-1-1-primary-hor-center" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block u-btn-outline-primary g-mb-20">
                <li class="nav-item">
                  <a class="nav-link active g-font-size-18" data-toggle="tab" href="#nav-1-1-primary-hor-center--1" role="tab">Próximos cursos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link g-font-size-18" data-toggle="tab" href="#nav-1-1-primary-hor-center--2" role="tab">Localización </a>
                </li>
              </ul>
              <!-- End Nav tabs -->
              <!-- Tab panes -->
            <div id="nav-1-1-primary-hor-center" class="tab-content">
              <div class="tab-pane fade show active" id="nav-1-1-primary-hor-center--1" role="tabpanel">
                <!-- Table Striped Rows -->
                <div class="g-mt-20 g-pb-80">
                  <?php if(count($cursos) == 0): ?>
                    <div class="alert alert-warning text-center">No hay cursos disponibles</div>
                  <?php else: ?>
                    <!-- <h5 class="g-mb-10">Próximos cursos de Recuperación de Puntos del centro</h5> -->
                    <table class="table g-font-size-16 table-cursos">
                      <thead>
                        <tr>
                          <th>Fecha</th>
                          <th>Horario</th>
                          <th>Tipo</th>
                          <th>Idioma</th>
                          <th>Precio</th>
                         <!--  <th></th> -->
                        </tr>
                      </thead>

                      <tbody>
                        <?php foreach($cursos as $k => $c): ?>
                          <tr class="row-curso-<?php echo $k ?>">
                            <td>
                              <p><?= mdate('%d/%m/%Y', mysql_to_unix($c->fecha_inicio.' 00:00:00')) ?></p>
                              <?php if(!is_null($c->dia2)): ?>
                                <p><?php echo mdate('%d/%m/%Y', mysql_to_unix($c->dia2.' 00:00:00')) ?></p>
                              <?php endif ?>
                              <?php if(!is_null($c->dia3)): ?>
                                <p><?php echo mdate('%d/%m/%Y', mysql_to_unix($c->dia3.' 00:00:00')) ?></p>
                              <?php endif ?>
                              <?php if(!is_null($c->dia4)): ?>
                                <p><?php echo mdate('%d/%m/%Y', mysql_to_unix($c->dia4.' 00:00:00')) ?></p>
                              <?php endif ?>
                              <?php if(!is_null($c->dia5)): ?>
                                <p><?php echo mdate('%d/%m/%Y', mysql_to_unix($c->dia5.' 00:00:00')) ?></p>
                              <?php endif ?>
                              <?php if(!is_null($c->dia6)): ?>
                                <p><?php echo mdate('%d/%m/%Y', mysql_to_unix($c->dia6.' 00:00:00')) ?></p>
                              <?php endif ?>
                            </td>
                            <td>
                                <p><?= $c->fecha_fin ?></p>
                                <?php if(!is_null($c->horario2)): ?>
                                <p><?php echo $c->horario2 ?></p>
                              <?php endif ?>
                              <?php if(!is_null($c->horario3)): ?>
                                <p><?php echo $c->horario3 ?></p>
                              <?php endif ?>
                              <?php if(!is_null($c->horario4)): ?>
                                <p><?php echo $c->horario4 ?></p>
                              <?php endif ?>
                              <?php if(!is_null($c->horario5)): ?>
                                <p><?php echo $c->horario5 ?></p>
                              <?php endif ?>
                              <?php if(!is_null($c->horario6)): ?>
                                <p><?php echo $c->horario6 ?></p>
                              <?php endif ?>
                            </td>
                            <td><?= $c->curso ?></td>
                            <td><?= $c->idioma ?></td>
                            <td>€ <?= $c->precio ?></td>
                           <!--  <td>
                              <a href="<?= $this->init->baseUrl ?>index.php/preinscripcion" class="btn btn-sm g-px-10 g-bg-bluehight g-color-white g-color-white--hover g-color-primary--hover g-font-size-14">Preinscripción</a>
                            </td> -->
                          </tr>
                          <tr class="row-curso-<?php echo $k ?>">
                            <td colspan="5" class="buttons-table text-right border border-top-0 border-right-0 border-left-0 border-secondary">
                              <a href="<?php echo $this->init->baseUrl ?>index.php/preinscripcion/index/<?php echo $c->id_centro ?>/<?php echo $c->id_calendario ?>" class="btn btn-sm  g-bg-bluehight g-color-white g-color-white--hover g-color-primary--hover g-font-size-13">Preinscripción</a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  <?php endif ?>
                </div>
                <!-- End Table Striped Rows -->
              </div>

              <div class="tab-pane fade" id="nav-1-1-primary-hor-center--2">
                <div class="h-100" id="data-center" role="tabpanel" data-centro='<?= json_encode($dataCentro) ?>'>
                  <!-- Google Map -->
                  <div id="map" class="js-g-map embed-responsive embed-responsive-21by9 h-100 map">
                  </div>
                  <!-- End Google Map -->
                </div>
              </div>
          </div>
          <!-- End Tab panes -->


            </div>
            <!--end tabs con info del centro-->
          </div>
          </div>
          </div>
          </div>
      </section>
      <!--End Top Info-->