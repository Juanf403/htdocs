<?php

$displayFloat;
$item;
if(isset($_GET['item'])){
	$displayFloat = "block";
}
else{
	$displayFloat ="none";
}
if(isset($_GET['item'])){
  $item= $_GET['item'];
}
else
{
  $item=0;
}

?>

<link rel="stylesheet" href="css/consultapure.css" type="text/css" />
<link rel="stylesheet" href="css/custom.css" type="text/css" />
<link rel="stylesheet" href="css/frontend.css" type="text/css" />
<link rel="stylesheet" href="css/galleria.mediagrid.css" type="text/css" />
<link rel="stylesheet" href="css/jplayer.media.grid.css" type="text/css" />

<!-- Script tagsearch boost -->
<script src="js/typehead.js"></script>
<style>
div.show-image img{
/*    -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;*/
width: 100%
}

div.show-image{
  border: 10px solid #fff;
	position:relative;
	float:left;
	margin:5px;
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
div.show-image:hover img{
    /*opacity:0.5;*/
    -webkit-filter: grayscale(100%);
    -moz-filter:grayscale(100%);
    -o-filder:grayscale(100%);
    -ms-filter:grayscale(100%);
    filter:grayscale(100%);
    width: 100%;

}

div.show-image:hover .botonesImage{
  display: block;
  bottom: 10px;
  width: 100%;
  text-align: center;
  position:absolute;
  bottom:40px;
}


i.fa.fa-plus{
	font-size: xx-large;
  color:#8d0003;

}

i.fa.fa-download {
	font-size: xx-large;
  color:#8d0003;
}

i.fa.fa-download.title_icon {
  font-size: medium;
  color:rgba(127, 127, 127, 1);
}
#testId:after{
  content:none;

}
div.show-image .botonesImage {
    position:absolute;
    display:none;
}
div.show-image .botonesImage.update {
    top:0;
    left:0;
}
div.show-image .botonesImage.delete {
    top:0;
    left:79%;
}
div.show-image:hover .linkDown {
left:10px;
position: absolute;
}

div.show-image:hover .linkPlus{
right:10px;
position:absolute;
}
/*incomplete Css for pop up div*/

/*pop-Window*/ 
#pop-window {
width:100%;
height:100%;
opacity:.9;
top:0;
left:0;
display:none;
position:relative;
background-color:#313131;
overflow:auto
z-index:9000;
}
a#close {
position:absolute;
right:-14px;
top:-14px;
cursor:pointer;
}
div#popupInfo{
position:absolute;
left:50px;
top:17%;
/*margin-left:-202px;*/
font-family:'Raleway',sans-serif;
}
div.popupInfo p {
margin-top:30px
}
div.popupInfo h2 {
background-color:#FEFFED;
padding:20px 35px;
margin:-10px -50px;
text-align:center;
border-radius:10px 10px 0 0;
}
div.popupInfo hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc;
}


div.popupInfo span {
color:red;
font-weight:700;
}

#mg_overlay_content{

}
</style>


<!-- Header Start -->
    <div class="row wrapper">
      <div class="col-sm-9">
        <div class="pillbox clearfix" id="MyPillbox">
          <ul>
            <li class="label bg-dark">Item One</li>
            <li class="label bg-warning">Item Three</li>
            <li class="label bg-danger">Item Four</li>
            <li class="label bg-info">Item Five</li>
            <li class="label bg-dark">bankai</li>
            <input placeholder="buscar" type="text">
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
        <a href="#" class="btn btn-info btn-lg">Search</a>
      </div>
    </div>
    <!-- Header End -->

        <div class="modal fade" id="modal-form" style="display: none;" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">

                      <div  id="mg_inside_close" onclick="overhide()">
                        <i class="fa fa-times" style="font-size:20px; color:rgb(141, 0, 3);"></i>
                      </div>

                          
                          <div class="mg_item_featured">
                                  <script src="js/mg_pack.js" type="text/javascript"></script>

                                  <!--  -->
                                  <img alt="Various Tracks" 
                                  src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/960x0_95_3_l_fdfdfd_31eca7cb61f863aa76b1192f3fa9f433.jpg" 
                                  style="opacity: 1;">


                                  <script type="text/javascript">

                                  </script>
                              </div>





                          <div class="mg_item_content">
                            <div class="mg_content_left">
                                  <h1 class="mg_item_title">Various Tracks</h1>

                                  <ul class="mg_cust_options">
                                      <li><i class="mg_cust_opt_icon fa fa-microphone"></i> <span>Autor</span> Nombre Autor</li>
                                      <li><i class="mg_cust_opt_icon fa fa-clock-o"></i> <span>Fecha</span> 20 may</li>
                                      <li><i class="mg_cust_opt_icon fa fa-download title_icon"></i><span id="testId"><a style="color:blue" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/960x0_95_3_l_fdfdfd_31eca7cb61f863aa76b1192f3fa9f433.jpg">Descarga</a></span></li>
                                      <!-- mg_cust_opt_icon  -->
                                  </ul>
                                </div>
                                  <div class="mg_item_text mg_widetext" >
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>

                                      <p>Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  </div>
                                  <br style="clear: both;">
                              </div>

                       </div> 
                      <div class="mg_layout_side mg_lb_audio">
                          <div>


                          </div>
                      </div>

              </div>
            </div><!-- /.modal-content --> 
          </div><!-- /.modal-dialog -->




<div class="pop-up" id="pop-window"> 
  <a href="#" id="close" onclick="pop_hide();return false;" class="btn btn-sm btn-default"><i class="fa fa-times"></i></a>
  <div id="popupInfo">
  <!-- Contact Us Form -->
  
    <h2>Contact Us</h2>
    <hr>

    <!-- php function returning this stuff -->
    <div class="row wrapper">
      <div class="col-sm-8 m-b-xs">
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
      </div>
      <div class="col-sm-4">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Buscar"> 
          <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> 
            <i class="fa fa-search"></i> </button> </span>
        </div>
      </div>

    </div>


    
    <a href="javascript:%20check_empty()" id="submit"><i class="fa fa-download"></i></a>
  </div>
</div>

<div id="wrapper">
  <div id="list">

    <!-- Método uno -->
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
					<img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
					<div class="botonesImage" >

						<a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
						<a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
					</div>
        </div>
		  </div>


      <!-- Método dos -->
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"><noscript>
      <img alt="Custom content &#8211; Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Image Random" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"><noscript>
        <img alt="Image Random" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg">
      <noscript><img alt="Custom content &#8211; Google maps" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"></noscript>
          <div class="botonesImage" >
           <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"><noscript>
      <img alt="Custom content &#8211; Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"><noscript>
      <img alt="Custom content &#8211; Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Image Random" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"><noscript>
        <img alt="Image Random" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg">
      <noscript><img alt="Custom content &#8211; Google maps" src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Image Random" src="http://1.bp.blogspot.com/-cD0mdqrG1VU/T2e1Uqzjo3I/AAAAAAAAASI/4Oki1HXl_WY/s1600/random.jpg"><noscript>
        <img alt="Image Random" src="http://1.bp.blogspot.com/-cD0mdqrG1VU/T2e1Uqzjo3I/AAAAAAAAASI/4Oki1HXl_WY/s1600/random.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" href="admin.php?m=<?php echo  "resultadosBusqueda&item=123" ?>" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown" fullurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" mobileurl="http://www.lcweb.it/wp-content/uploads/ewpt_cache/400x267_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg"><noscript>
          <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" alt="Rusty crown"  /></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="show-image">
      <img alt="Custom content – Google maps" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg">
      <noscript><img alt="Custom content &#8211; Google maps" src="http://www.mildred.co/issueassets/22/14RSowlhat.jpg"></noscript>
          <div class="botonesImage" >
            <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
            <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>

  </div>
</div>
<script type="text/javascript">

	/* Funciona en conjunto con consultaIE9.css ,
	 en vez de consulta.css
	 */

	/*$( window ).load( function(){
		    $( '#list' ).masonry( { itemSelector: '.item' } );
		});

	$( window ).load( function(){
	    	var columns    = 3,
	        setColumns = function() { columns = $( window ).width() > 640 ? 3 : $( window ).width() > 320 ? 2 : 1; };
	 
	    setColumns();
	    $( window ).resize( setColumns );
	 
	    $( '#list' ).masonry({
	        itemSelector: '.item',
	        columnWidth:  function( containerWidth ) { return containerWidth / columns; }});
		});*/
</script>