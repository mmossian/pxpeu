<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="main-boxes g-pt-80 g-pb-20">
  <!-- Address & Map -->
  <div class=" g-mb-80">
    <div class="container g-pos-rel">
      <div class="row">
        <div class="col-md-4 align-self-center">
          <div class="g-pa-30 box-find">
          <form id="frm-centros">
            <input type="hidden" name="<?= $csrf['name'] ?>" value="<?= $csrf['hash'] ?>">
            <h4 class="g-mb-30">Seleccione los parámetros de búsqueda:</h4>
            <div class="g-mb-30">
              <label for="provincia" class="g-font-weight-500 g-font-size-15 g-pl-30">Territorio Histórico:</label>
              <select id="provincia" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-5 g-pl-30 g-py-12"
                        name="id_provincia"
                        data-placeholder="Provincia"
                        data-open-icon="fa fa-angle-down"
                        data-close-icon="fa fa-angle-up">
                <option class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active" value="-1">TODOS</option>
                <?php foreach($provincias as $p): ?>
                  <option class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active" value="<?= $p->id_provincia ?>"><?= $p->provincia ?></option>
                <?php endforeach ?>
              </select>
            </div>

            <div class="g-mb-30">
              <label for="localitat" class="g-font-weight-500 g-font-size-15 g-pl-30">Municipio:</label>
              <select id="localitat" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-5 g-pl-30 g-py-12"
                        name="id_localidad"
                        data-placeholder="Localitat"
                        data-open-icon="fa fa-angle-down"
                        data-close-icon="fa fa-angle-up">
                <option class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active todos" value="-1">TODOS</option>
			       </select>
            </div>

            <div class="g-mb-30">
              <label for="tipus-de-curs" class="g-font-weight-500 g-font-size-15 g-pl-30">Tipo de curso:</label>
              <select id="tipus-de-curs" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-5 g-pl-30 g-py-12"
                        name="id_curso"
                        data-placeholder="tipus-de-curs"
                        data-open-icon="fa fa-angle-down"
                        data-close-icon="fa fa-angle-up">
                <option class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active" value="-1">TODOS</option>
                <?php foreach($cursos as $c): ?>
                  <option class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active" value="<?= $c->id_curso ?>"><?= $c->curso ?></option>
                <?php endforeach ?>
              </select>
            </div>

            <!-- <button type="button" class="nav-link btn btn-block btn-primary g-color-white g-color-white--hover g-color-primary--hover g-font-size-16 g-mt-20 g-py-12" id="btn-search-centros">Buscar
            </button> -->
          </form>
        </div>
        </div>

        <div class="col-md-8 align-self-center h-100 g-pos-abs--md g-top-0 g-right-0 g-pr-0--md">
          <!-- Google Map -->
          <div id="map" class="js-g-map embed-responsive embed-responsive-21by9 h-100 map">
          </div>
          <!-- End Google Map -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Address & Map -->

</section>