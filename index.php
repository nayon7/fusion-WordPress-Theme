
<?php 

/*

Template Name: One page Template

*/

  
 ?>


<?php get_header(); ?>


<?php get_header(); ?>
    <!--================ Start Home Banner Area =================-->

    <?php

    global $post;
    $args = array( 'posts_per_page' => 2, 'post_type'=> 'slide', 'orderby' => 'menu_order', 'order' => 'ASC' );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post); ?>
     
    <?php 
       $btn_text= get_post_meta($post->ID, 'btn_text', true); 
       $btn_link= get_post_meta($post->ID, 'btn_link', true); 
    ?>
    <section style="background-image: url(<?php the_post_thumbnail_url(); ?>);" class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                  <?php the_title(); ?>
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                  <?php the_content(); ?>
                </h2>
                <div>
                  <a href="#" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                  <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
       <?php endforeach; wp_reset_query(); ?>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Awesome Feature</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
        <?php

        global $post;
        $args = array( 'posts_per_page' => 6, 'post_type'=> 'feature', 'orderby' => 'menu_order', 'order' => 'ASC' );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) : setup_postdata($post); ?>
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">

              <div class="icon">         <?php
                  // Must be inside a loop.
                   
                  if ( has_post_thumbnail() ) {
                      the_post_thumbnail('thumbnail');
                  }
                
                  ?></div>
              <div class="desc">
                <h4 class="mt-3 mb-2"><?php the_title(); ?></h4>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
       <?php endforeach; wp_reset_query(); ?>
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Popular Courses</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
           <?php 

            global $post;
            $args = array( 'posts_per_page' => 5, 'post_type'=> 'course', 'orderby' => 'menu_order', 'order' => 'ASC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>

              <div class="single_course">
                <div class="course_head">
              <?php
                  // Must be inside a loop.
                   
                  if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                  }
                
                  ?>

                </div>
                <div class="course_content">
                  <span class="price">$25</span>
                  <span class="tag mb-4 d-inline-block">design</span>
                  <h4 class="mb-3">
                    <?php the_title(); ?>
                  </h4>
                  <?php the_content(); ?>
                </div>
              </div>

             <?php endforeach; wp_reset_query(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->
    <div class="section_gap registration_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Register Now</h1>
                <p>
                  There is a moment in the life of any aspiring astronomer that
                  it is time to buy that first telescope. It’s exciting to think
                  about setting up your own viewing station.
                </p>
              </div>
              <div class="col clockinner1 clockinner">
                <h1 class="days">150</h1>
                <span class="smalltext">Days</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours">23</h1>
                <span class="smalltext">Hours</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="minutes">47</h1>
                <span class="smalltext">Mins</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="seconds">59</h1>
                <span class="smalltext">Secs</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Courses for Free</h3>
              <p>It is high time for learning</p>
              <form
                class="form_area"
                id="myForm"
                action="mail.html"
                method="post"
              >
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <input
                      name="name"
                      placeholder="Your Name"
                      required=""
                      type="text"
                    />
                    <input
                      name="name"
                      placeholder="Your Phone Number"
                      required=""
                      type="tel"
                    />
                    <input
                      name="email"
                      placeholder="Your Email Address"
                      pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                      required=""
                      type="email"
                    />
                  </div>
                  <div class="col-lg-12 text-center">
                    <button class="primary-btn">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
    <section class="trainer_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Expert Trainers</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
        <?php 

            global $post;
            $args = array( 'posts_per_page' => 5, 'post_type'=> 'trainer', 'orderby' => 'menu_order', 'order' => 'ASC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>



          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
                   <?php
                  // Must be inside a loop.
                   
                  if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                  }
                
                  ?>
            </div>
            <div class="meta-text text-sm-center">
              <h4><?php the_title(); ?></h4>
              <div class="mb-4">
                <?php the_content(); ?>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

        <?php endforeach; wp_reset_query(); ?>
        </div>
      </div>
    </section>
    <!--================ End Trainers Area =================-->





    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Client say about me</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">
        <?php 

        global $post;
        $args = array( 'posts_per_page' => 5, 'post_type'=> 'testimonial', 'orderby' => 'menu_order', 'order' => 'ASC' );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) : setup_postdata($post); ?>


            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">

                  <?php
                  // Must be inside a loop.
                   
                  if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                  }
                
                  ?>
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>

   <?php endforeach; wp_reset_query(); ?>

          </div>
        </div>
      </div>
    </div>
    <!--================ End Testimonial Area =================-->
<?php get_footer(); ?>


 <?php get_footer(); ?>