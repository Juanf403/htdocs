<div class="motopress-wrapper content-holder clearfix">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="row">
          <div class="span12">
            <div class="post-203 page type-page status-publish hentry" id="post-203">
              <div class="row">
                <div class="span3" style="margin-bottom:30px;text-align:center;">
                    <a href="#"><img alt="" src="images/servicios/<?php echo $imagen; ?>"></a>
                </div>
                <div class="span9">
                  <ul id="portfolio-grid" class="filterable-portfolio thumbnails portfolio-3cols" data-cols="3cols">
<script>
  jQuery(document).ready(function($) {
    var $container = $('#portfolio-grid'),
      items_count = $(".portfolio_item").size();

    $(window).load(function(){
      var selector = window.location.hash.replace( /^#category/, '.term' );

      if(selector == "#"){
        selector = '';
      }

      setColumnWidth();
      $container.isotope({
        itemSelector : '.portfolio_item',
        hiddenClass : 'portfolio_hidden',
        resizable : false,
        transformsEnabled : true,
        layoutMode: 'fitRows',
        filter: selector
      })

      $('#filters .active').removeClass('active')
      $('#filters li a[data-filter="'+selector+'"]').parent('li').addClass('active');
      change_hash(selector);

      $(window).on("debouncedresize", function( event ) {
        arrange();
      });
    });

    function getNumColumns(){
      var $folioWrapper = $('#portfolio-grid').data('cols');

      if($folioWrapper == '2cols') {
        var winWidth = $("#portfolio-grid").width(),
          column = 2;
        if (winWidth<380) column = 1;
        return column;
      }

      else if ($folioWrapper == '3cols') {
        var winWidth = $("#portfolio-grid").width(),
          column = 3;
        if (winWidth<380) column = 1;
        else if(winWidth>=380 && winWidth<788) column = 2;
        else if(winWidth>=788 && winWidth<1160) column = 3;
        else if(winWidth>=1160) column = 3;
        return column;
      }

      else if ($folioWrapper == '4cols') {
        var winWidth = $("#portfolio-grid").width(),
          column = 4;
        if (winWidth<380) column = 1;
        else if(winWidth>=380 && winWidth<788) column = 2;
        else if(winWidth>=788 && winWidth<1160) column = 3;
        else if(winWidth>=1160) column = 4;
        return column;
      }
    }

    function setColumnWidth(){
      var columns = getNumColumns(),
        containerWidth = $("#portfolio-grid").width(),
        postWidth = containerWidth/columns;
      postWidth = Math.floor(postWidth);

      $(".portfolio_item").each(function(index){
        $(this).css({"width":postWidth+"px"});
      });
    }

    function arrange(){
      setColumnWidth();
      $container.isotope('reLayout');
    }

    // Filter projects
    $('.filter a').click(function(){
      var $this = $(this).parent('li');
      // don't proceed if already active
      if ( $this.hasClass('active') ) {
        return;
      }


      var $optionSet = $this.parents('.filter');
      // change active class
      $optionSet.find('.active').removeClass('active');
      $this.addClass('active');

      var selector = $(this).attr('data-filter');
      $container.isotope({ filter: selector });
      change_hash(selector)

      var hiddenItems = 0,
        showenItems = 0;
      $(".portfolio_item").each(function(){
        if ( $(this).hasClass('portfolio_hidden') ) {
          hiddenItems++;
        };
      });

      showenItems = items_count - hiddenItems;
      if ( ($(this).attr('data-count')) > showenItems ) {
        $(".pagination__posts").css({"display" : "block"});
      } else {
        $(".pagination__posts").css({"display" : "none"});
      }
      return false;
    });
    function change_hash(hash){
      hash = hash.replace( /^.term/, 'category' );
      window.location.href = '#'+hash;

      $('.pagination a').each(function(){
        var item = $(this),
          href = item.attr('href'),
          end_slice = href.indexOf('#')==-1 ? href.length : href.indexOf('#') ;

        href = href.slice(0, end_slice);
        item.attr({'href':href+'#'+hash})
      })
    }
  });
</script>
<?php
                  $query = mysql_query("SELECT * FROM galeria WHERE lugar='".$ver."' ORDER BY idgaleria DESC");
                  while($q = mysql_fetch_object($query)){
                    echo '<li class="portfolio_item ">
                      <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                          <a href="images/galeria/'.$q->imagen.'" class="image-wrap" title="" rel="prettyPhoto"><img src="images/galeria/'.$q->imagen.'" /><span class="zoom-icon"></span></a>
                        </figure>
                      </div> 
                    </li>';
                  }
?>
                  </ul>
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