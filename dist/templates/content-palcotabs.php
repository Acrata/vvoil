
<div class="tlab-voil">
<input  class="inp-voil"id="tab1" type="radio" name="tabs" checked>
<label for="tab1" class="lab-voil"><?php pll_e("Calle");?></label>

  <input class="inp-voil" id="tab2" type="radio" name="tabs">
<label for="tab2" class="lab-voil"><?php pll_e("Palco");?></label>
            <section class="tab-voil" id="content1">
				<?php echo $calle_voil; ?>
            <?php //TODO contenido de la seccion de calle?>
            </section>
            <section class="tab-voil" id="content2">
				<?php echo $palco_voil; ?>
				<?php //the_content(); ?>
            </section>
</div>
