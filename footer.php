 </div><!-- End .container -->
</div><!-- end wrap-->
<div class="row">
    <!-- Card -->
<div class="card testimonial-card">

    <!-- Bacground color -->
    <div class="card-up indigo lighten-1">
    </div>

    <!-- Avatar -->
    <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle">
    </div>

    <div class="card-body">
        <!-- Name -->
        <h4 class="card-title">Anna Doe</h4>
        <hr>
        <!-- Quotation -->
        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
    </div>

</div>
<!-- Card -->
<!-- Card Light -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Social shares button -->
    <a class="activator waves-effect waves-light mr-4"><i class="fa fa-share-alt"></i></a>
    <!-- Title -->
    <h4 class="card-title">Card title</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- Link -->
    <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fa fa-angle-double-right"></i></h5></a>

  </div>

</div>
</div>
<!-- Card Light -->
 
 </div><!-- End .container -->
</div><!-- end wrap-->

 
<!--Footer-->
<footer class="page-footer primary-color-dark center-on-small-only">
       <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-md-3 offset-md-1">
              <?php if ( is_active_sidebar( 'footer' ) ) : ?>
              <?php dynamic_sidebar( 'footer' ); ?>
              <?php endif; ?>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">First column:</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer1',
                'theme_location'    => 'footer1',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Second column:</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer2',
                'theme_location'    => 'footer2',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Third column:</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer3',
                'theme_location'    => 'footer3',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.injazdev.com"  rel="nofollow">InjazDev </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<?php wp_footer(); ?>
<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>

</body>
</html>     
