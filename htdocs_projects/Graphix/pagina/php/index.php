<script type="text/javascript">
      jQuery(document).ready(function($) {
        if(!device.mobile() && !device.tablet()){
            liteModeSwitcher = false;
        }else{
            liteModeSwitcher = true;
        }
        if($.browser.msie && parseInt($.browser.version) < 9){
             liteModeSwitcher = true;
        }

            jQuery('#parallax-slider-5591cb119172d').parallaxSlider({
                parallaxEffect: "parallax_effect_high",
              parallaxInvert: false,   animateLayout: "simple-fade-eff",
              duration: 1500,
              autoSwitcher: true,
              autoSwitcherDelay: 10000,
              scrolling_description: true,
              slider_navs: true,
              slider_pagination: "none_pagination",
              liteMode :liteModeSwitcher
            });

        });
</script>
<div class="parallax-slider" id="parallax-slider-5591cb119172d">
  <ul class="baseList">
    <?php
    $query   = mysql_query("SELECT * FROM sliders ORDER BY idslider DESC") or die(mysql_error());
    while($q = mysql_fetch_object($query)){
      echo '<li data-preview="images/sliders/'.$q->archivo.'"></li>';
    }
    ?>
  </ul>
</div>

<div class="motopress-wrapper content-holder clearfix">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="row">
          <div class="span12">
            <div class="slider_off"></div>
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="post-203 page type-page status-publish hentry" id="post-203">
              <div class="row">
                <div class="span3" style="margin-bottom:30px;text-align:center;">
                  <a href="index.php?m=servicios&ver=anuncios"><img class="servicios" alt="" src="images/servicios/ANUNCIOS.png"></a>
                </div>
                <div class="span3" style="margin-bottom:30px;text-align:center;">
                  <a href="index.php?m=servicios&ver=bordados"><img class="servicios" alt="" src="images/servicios/BORDADOS.png"></a>
                </div>
                <div class="span3" style="margin-bottom:30px;text-align:center;">
                  <a href="index.php?m=servicios&ver=diseno"><img class="servicios" alt="" src="images/servicios/DISENO.png"></a>
                </div>
                <div class="span3" style="margin-bottom:30px;text-align:center;">
                  <a href="index.php?m=servicios&ver=imprenta"><img class="servicios" alt="" src="images/servicios/IMPRENTA.png"></a>
                </div>
                <div class="span3" style="margin-bottom:30px;text-align:center;">
                  <a href="index.php?m=servicios&ver=impresion"><img class="servicios" alt="" src="images/servicios/IMPRESION.png"></a>
                </div>
                <div class="span3" style="margin-bottom:30px;text-align:center;">
                  <a href="index.php?m=servicios&ver=neon"><img class="servicios" alt="" src="images/servicios/NEON.png"></a>
                </div>
                <div class="span3" style="margin-bottom:30px;text-align:center;">
                  <a href="index.php?m=servicios&ver=rotulacion"><img class="servicios" alt="" src="images/servicios/ROTULACION.png"></a>
                </div>
                <div class="span3" style="margin-bottom:30px;text-align:center;">
                  <a href="index.php?m=servicios&ver=serigrafia"><img class="servicios" alt="" src="images/servicios/SERIGRAFIA.png"></a>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>