<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="main-boxes g-pt-80 g-pb-20">
        <div class="container">
          <div class="row">
          <!--Main content-->
          <div class="col-md-8">
      <h3 class="g-font-weight-100 g-font-size-50">Buzón de sugerencias</h3>
              <p class="g-font-size-16 g-mt-20 g-mb-30">¿Tienes algo que contarnos?. Ponte en contacto con nosotros rellenando el siguiente formulario:</p>
              <form method="post" action="<?= $this->init->baseUrl ?>index.php/sendfrombuzon">
                <input type="hidden" name="<?= $csrf['name'] ?>" value="<?= $csrf['hash'] ?>">
              <div class="g-mb-30">
                <div class="g-mb-30">
                  <label for="nombre" class="g-font-weight-500 g-font-size-16 g-pl-30">Su nombre:</label>
                  <input id="nombre" type="text" placeholder="Indique su nombre" class="form-control u-shadow-v19 g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="buzon_nombre" required maxlength="20" value="<?php echo isset($_SESSION['DISTINTIVA-REQUEST']) ? $_SESSION['DISTINTIVA-REQUEST']['buzon_nombre'] : '' ?>">
                </div>
                <div class="g-mb-30">
                  <label for="apellidos" class="g-font-weight-500 g-font-size-16 g-pl-30">Sus apellidos:</label>
                  <input id="apellidos" type="text" placeholder="Indique sus apellidos" class="form-control u-shadow-v19  g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="buzon_apellidos" required value="<?php echo isset($_SESSION['DISTINTIVA-REQUEST']) ? $_SESSION['DISTINTIVA-REQUEST']['buzon_apellidos'] : '' ?>">
                </div>
                <div class="g-mb-30">
                  <label for="autoescuela" class="g-font-weight-500 g-font-size-16 g-pl-30">Autoescuela:</label>
                  <input id="autoescuela" type="text" placeholder="Indique el nombre de la autoescuela" class="form-control u-shadow-v19  g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="buzon_autoescuela" required value="<?php echo isset($_SESSION['DISTINTIVA-REQUEST']) ? $_SESSION['DISTINTIVA-REQUEST']['buzon_autoescuela'] : '' ?>">
                </div>
                <div class="g-mb-30">
                  <label for="email" class="g-font-weight-500 g-font-size-16 g-pl-30">Su dirección de correo:</label>
                  <input id="email" type="email" placeholder="Indique su mail" class="form-control u-shadow-v19  g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="buzon_email" required value="<?php echo isset($_SESSION['DISTINTIVA-REQUEST']) ? $_SESSION['DISTINTIVA-REQUEST']['buzon_email'] : '' ?>">
                </div>
                <div class="g-mb-30">
                  <label for="telefono" class="g-font-weight-500 g-font-size-16 g-pl-30">Teléfono de contacto:</label>
                  <input id="telefono" type="text" placeholder="Indique el teléfono de contacto" class="form-control u-shadow-v19  g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="buzon_telefono" required value="<?php echo isset($_SESSION['DISTINTIVA-REQUEST']) ? $_SESSION['DISTINTIVA-REQUEST']['buzon_telefono'] : '' ?>">
                </div>
                <div class="g-mb-30">
                  <label for="comentario" class="g-font-weight-500 g-font-size-16 g-pl-30">Su comentario:</label>
                  <textarea id="comentario" rows="6" placeholder="Díganos cual es su sugerencia" class="form-control u-shadow-v19  g-bg-white g-font-size-16 g-rounded-5 g-px-30 g-py-13 g-mb-30" name="buzon_comentario" required><?php echo isset($_SESSION['DISTINTIVA-REQUEST']) ? $_SESSION['DISTINTIVA-REQUEST']['buzon_comentario'] : '' ?></textarea>
                </div>


        <!-- <p class="g-font-size-13">
        Los datos personales recabados tienen la finalidad de la gestión de las sugerencias recibidas. Mediante el envío de este formulario acepto y consiento el tratamiento de los mismos, de conformidad con lo dispuesto en la <a href="<?= $this->init->baseUrl ?>index.php/PoliticaPrivacidad">Política de Privacidad</a>.
        </p> -->
          <div class="g-mb-0">
                  <div class="checkbox">
                      <input checked="" type="checkbox" name="privacy">
                      <label>
                      Acepto la <a class="g-font-size-14" href="javascript:;" data-toggle="modal" data-target="#myModal">
                      Política de Privacidad</a>
                    </label>
                  </div>
                </div>

                <button type="submit" class="nav-link btn btn-primary g-color-white g-color-white--hover g-color-primary--hover g-font-size-16 g-mt-20">Enviar la información ›
                </button>
            </div>
          </form>
          </div>
          <?php $this->load->view('ek/partials/menu-lateral') ?>
        </div>
      </div>
    </section>

<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Políticas de privacidad</h4>
          </div>
          <div class="modal-body">
            <?php $this->load->view('ek/partials/politica-de-privacidad/top-info') ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="nav-link btn btn-primary g-color-white g-color-white--hover g-color-primary--hover g-font-size-16 g-mt-20" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>