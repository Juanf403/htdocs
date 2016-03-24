<!DOCTYPE html>
<html class="no-js" lang="en"><head>
<meta charset="utf-8">
<title>jQuery collagePlus Example</title>





<!-- <link rel="stylesheet" href="css/consultapure.css" type="text/css" /> -->
<!-- <link rel="stylesheet" href="css/custom.css" type="text/css" /> -->
<link rel="stylesheet" href="css/frontend.css" type="text/css" />
<!-- <link rel="stylesheet" href="css/galleria.mediagrid.css" type="text/css" />
<link rel="stylesheet" href="css/jplayer.media.grid.css" type="text/css" /> -->


<style type="text/css" media="all">
html body {
margin: 0;
padding: 0;
background-color: rgb(230, 230, 230);
}
.footnote {
font-family: arial;
color: #999;
padding: 10px;
font-size: 12px;
}
.footnote a {
color: #09f;
text-decoration: none;
}
.Collage {
/*This is where you set the padding you want between the images*/
padding: 10px;
}
.Collage img {
margin: 0;
padding: 0;
display: inline-block;
vertical-align: bottom;
opacity: 1;
/*This is where you set the border you want for the image*/
border: 6px solid #FFF;
}
/* In this example, this is the main item being resized */
.Image_Wrapper {
/* to get the fade in effect, set opacity to 0 on the first element within the gallery area */
opacity: 0;
-moz-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
-webkit-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
}
.Caption {
font-size: 14px;
font-weight: normal;
font-family: arial;
}
.Caption_Content {
/* padding:10px; */
color: #FFF;
padding: 20px;
}
</style>









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
    position:relative;
    float:left;
      -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
div.show-image:hover img{
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





<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/mediagrid/mgjs/jquery.collagePlus.js"></script>
<script src="/mediagrid/mgjs/jquery.removeWhitespace.js"></script>
<script src="/mediagrid/mgjs/jquery.collageCaption.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $(document).ready(function(){
            collage();
        });
    });
    
    function collage() {
        $('.Collage').removeWhitespace().collagePlus(
            {
                'fadeSpeed' : 2000,
                'targetHeight' : 200
            }
        ).collageCaption();
    };
     
    var resizeTimer = null;
    $(window).bind('resize', function() {
        // hide all the images until we resize them
        /*$('.Collage .Image_Wrapper').css("opacity", 0);*/
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });

  </script>
</head>
<body>



<div class="modal fade" id="modal-form" style="display: none;" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">

                      <div  id="mg_inside_close" onclick="overhide()">
                        <i class="fa fa-times" style="font-size:20px; color:rgb(141, 0, 3);"></i>
                      </div>
        
                          <div class="mg_item_featured">
                                  <script src="js/mg_pack.js" type="text/javascript"></script>
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


<!-- <div class="row wrapper">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <div class="input-group">
          <input type="text" class="input form-control" placeholder="Buscar">
          <span class="input-group-btn"> 
            <button class="btn btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
          </span>
        </div>
      </div>
      <div class="col-sm-3">
      </div>
    </div> -->

<div class="Collage">
    <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" style="width: 240px; height: 240px;">
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

    <div class="Image_Wrapper" style=" margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" data-caption="This is some data &lt;u&gt;with&lt;/u&gt;html in it. Also a really long sentence with a &lt;a href='http://www.bbc.co.uk'&gt;link&lt;/a&gt; in it" style=
    "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/320x300/E0E4CC/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" data-caption=
    "This is some data &lt;u&gt;with&lt;/u&gt;html in it This is some data &lt;u&gt;with&lt;/u&gt;html in it. Also a really long sentence with a &lt;a href='http://www.bbc.co.uk'&gt;link&lt;/a&gt; in it This is some data &lt;u&gt;with&lt;/u&gt;html in it. Also a really long sentence with a &lt;a href='http://www.bbc.co.uk'&gt;link&lt;/a&gt; in it"
    style="margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/472x500/F38630/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" style="margin-bottom: 10px; margin-right: 0px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/540x360/FA6900/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" style=
    " margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/800x600/ECD078/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" style="margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" style="width: 240px; height: 240px;" ></a>
    </div>

<div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" style="width: 240px; height: 240px;">
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

    <div class="Image_Wrapper" style=" margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" data-caption="This is some data &lt;u&gt;with&lt;/u&gt;html in it. Also a really long sentence with a &lt;a href='http://www.bbc.co.uk'&gt;link&lt;/a&gt; in it" style=
    "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/320x300/E0E4CC/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" data-caption=
    "This is some data &lt;u&gt;with&lt;/u&gt;html in it This is some data &lt;u&gt;with&lt;/u&gt;html in it. Also a really long sentence with a &lt;a href='http://www.bbc.co.uk'&gt;link&lt;/a&gt; in it This is some data &lt;u&gt;with&lt;/u&gt;html in it. Also a really long sentence with a &lt;a href='http://www.bbc.co.uk'&gt;link&lt;/a&gt; in it"
    style="margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/472x500/F38630/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" style="margin-bottom: 10px; margin-right: 0px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/540x360/FA6900/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" style=
    " margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/800x600/ECD078/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" style="margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" style="width: 240px; height: 240px;" ></a>
    </div>
    <div class="item">
        <div class="Image_Wrapper show-image" style=
        "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;" \>
            <img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" style="width: 240px; height: 240px;">
            <div class="botonesImage" >
                <a class="linkDown" target="_blank" href="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" ><i class="fa fa-download"></i></a>
                <a class="linkPlus" data-toggle="modal" href="#modal-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

    <div class="Image_Wrapper" style=" margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/320x192_97_1_r_FFFFFF_329a633f9bac8009d39edaa9e5f1a226.jpg" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" data-caption="This is some data &lt;u&gt;with&lt;/u&gt;html in it. Also a really long sentence with a &lt;a href='http://www.bbc.co.uk'&gt;link&lt;/a&gt; in it" style=
    "margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/320x300/E0E4CC/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" data-caption=
    "This is some data &lt;u&gt;with&lt;/u&gt;html in it This is some data &lt;u&gt;with&lt;/u&gt;html in it. Also a really long sentence with a &lt;a href='http://www.bbc.co.uk'&gt;link&lt;/a&gt; in it This is some data &lt;u&gt;with&lt;/u&gt;html in it. Also a really long sentence with a &lt;a href='http://www.bbc.co.uk'&gt;link&lt;/a&gt; in it"
    style="margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/472x500/F38630/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" style="margin-bottom: 10px; margin-right: 0px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/540x360/FA6900/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" style=
    " margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://placehold.it/800x600/ECD078/ffffff" style="width: 240px; height: 240px;"></a>
    </div>

    <div class="Image_Wrapper" style="margin-right: 10px; display: inline-block; vertical-align: bottom; overflow: hidden; opacity: 1;">
        <a><img src="http://www.lcweb.it/wp-content/uploads/ewpt_cache/240x192_97_1_c_FFFFFF_5f41517feab159cc22f52d5e69acb5c0.jpg" style="width: 240px; height: 240px;" ></a>
    </div>
</div>





<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


</script>

</body></html>