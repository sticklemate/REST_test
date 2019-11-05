<head>
<!-- Our Custom CSS -->
  <link rel="stylesheet" href="/testsite/wp-content/themes//sass/theme/vwp_introjs.css">
    <link rel="stylesheet" href="/testsite/wp-content/themes//css/jquery.mCustomScrollbar.min.css">
    <script src="/testsite/wp-content/themes//js/jquery.min.js"></script>
    <script src="/testsite/wp-content/themes//js/classie.js"></script>
</head>

<body class="cbp-spmenu-push cbp-spmenu-push" >

<button type="button" id="restapi-btn">RESTAPI TEST</button>
<div id="restapi-container">

</div>
<br>

<div class="admin-quick-add">
  <h3>Modifying the JSON file</h3>
  <input type="number" name="title" placeholder="RotateX">
  <input type="number" name="content" placeholder="RotateY">
  
  <button id="quick-add-button">Create Post</button>
</div>


  <div id="showRightPush" class="">
    <span></span>
    <span></span>
    <span></span>
    <div class="text-right w-100 fscreen">
      <div class="">
        <a class="full-screen" onclick="fullscreen()" id="fullscreen" href="#"></a>
      </div>
      <div class="">
        <a href="javascript:void(0)" onclick="introJs().start();" class="help-tip page-scroll"></a>
      </div>
    </div>
  </div>

  <nav id="sidebar" class="navbar cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" >
    <div>
      <div class="sidebar"><?php get_template_part( 'loop-templates/scorm/vwp-scorm', 'nav' ); ?> </div>
    </div>
  </nav>

  <div id="content" class="cbp-spmenu-push-toleft">
      <?php get_template_part( 'loop-templates/scorm/vwp', 'header' ); ?>
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'loop-templates/scorm/vwp-scorm', 'content' ); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
    <div class="b-0 container">
      <?php get_template_part( 'loop-templates/scorm/vwp', 'bottom_navigation' ); ?>
    </div>
  </div>

</body>


<!-- content ----------------------------------->
<?php get_template_part( 'loop-templates/scorm/vwp', 'footer' ); ?>

<script src="/testsite/wp-content/themes//js/menu.js"></script>
<script src="/testsite/wp-content/themes//js/introjs.js"></script>
<script src="/testsite/wp-content/themes//js/modernizr.custom.js"></script>
<script src="/testsite/wp-content/themes//js/jquery.mCustomScrollbar.concat.min.js"></script>
