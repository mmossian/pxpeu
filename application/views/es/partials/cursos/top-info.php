<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="main-boxes g-pt-80 g-pb-20">
    <div class="container-fluid g-max-width-960 mx-auto">
      <div class="row">
      <!--Main content-->
      <div class="col-md-12">
          <p class="g-font-size-16 g-mt-20 g-mb-30">
            En esta página encontrará los centros y los cursos que mejor se adapten a sus necesidades. Puede consultar los datos de los centros o cursos y matricularse en el curso seleccionado.
          </p>
          <h4 class="g-mb-30">Seleccione los parámetros de búsqueda:</h4>
          <form id="frm-tbl-cursos">
            <input type="hidden" name="<?= $csrf['name'] ?>" value="<?= $csrf['hash'] ?>">
            <div class="g-mb-30 row g-pa-30 box-find">
              <div class="g-mb-30 col-md-4">
                <label for="provincia" class="g-font-weight-500 g-font-size-15 g-pl-30">Territorio Histórico:</label>
                <select id="provincia" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-5 g-pl-30 g-py-12"
                          data-placeholder="Provincia"
                          data-open-icon="fa fa-angle-down"
                          name="id_provincia"
                          data-close-icon="fa fa-angle-up">
                  <option class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active" value="-1">Seleccionar</option>
                  <?php foreach($provincias as $p): ?>
                    <option
                      class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                      value="<?=$p->id_provincia?>"
                      >
                        <?=$p->provincia?>
                      </option>
                  <?php endforeach ?>
                </select>
              </div>

              <div class="g-mb-30 col-md-4">
                <label for="localitat" class="g-font-weight-500 g-font-size-15 g-pl-30">Municipio:</label>
                <select id="localitat" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-5 g-pl-30 g-py-12"
                          name="id_localidad"
                          data-placeholder="Localitat"
                          data-open-icon="fa fa-angle-down"
                          data-close-icon="fa fa-angle-up">
                </select>
              </div>

              <div class="g-mb-30 col-md-4">
                <label for="tipus-de-curs" class="g-font-weight-500 g-font-size-15 g-pl-30">Tipo de curso:</label>
                <select id="tipus-de-curs" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-5 g-pl-30 g-py-12"
                          name="id_curso"
                          data-placeholder="tipus-de-curs"
                          data-open-icon="fa fa-angle-down"
                          data-close-icon="fa fa-angle-up">
                  <?php foreach($cursos as $c): ?>
                    <option class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active" value="<?= $c->id_curso ?>"><?= $c->curso ?></option>
                  <?php endforeach ?>
                </select>
              </div>

              <div class="col-md-12 text-center">
                <button type="button" class="btn w-100 g-max-width-270 btn-primary g-color-white g-color-white--hover g-color-primary--hover g-font-size-16 g-py-10 g-px-100" id="btn-show-tbl-cursos">Buscar
                </button>
              </div>
            </div>
          </form>






      <!-- Table Striped Rows -->
      <div class="g-mt-50 g-pb-80">
        <div class="alert alert-warning text-center d-none" id="message-no-results">No se encontraron resultados</div>
        <table class="table g-font-size-16 table-cursos d-none" id="tbl-cursos">
          <thead>
            <!-- // Fecha  Horario   Tipo  Idioma  Centro  Dirección   Precio -->
            <tr>
              <th>Fecha</th>
              <th>Horario</th>
              <th>Tipo</th>
               <th>Idioma</th>
              <th>Centro </th>
              <th>Dirección</th>
              <th>Precio (sin IVA)</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
      <!-- End Table Striped Rows -->

      </div>

    </div>
  </section>