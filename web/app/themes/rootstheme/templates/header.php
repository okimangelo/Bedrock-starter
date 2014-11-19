<header id="main_header" class="banner navbar navbar-static-top" role="banner">
  <div class="container">
      <div class="row">
          <section class="col-md-12">
              <div id="nav_wrapper" class="clearfix">
                  <a href="<?php echo get_bloginfo('url');?>" class="col-md-4 col-xs-9 no-padding"><img id="logo" src="<?php echo get_bloginfo('url');?>/app/themes/healthcarelatheme/assets/img/logo_hcla.jpg" alt="HCLA Homepage" class="img-responsive"></a>
                  <nav class="navbar navbar-default col-md-8" role="navigation">

                          <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top_nav">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>
                          </div>
                          <div class="collapse navbar-collapse" id="top_nav">
                                  <?php
                                  if (has_nav_menu('primary_navigation')) :
                                      wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
                                  endif;
                                  ?>

                              <div id="translate_wrapper">
                                  <div id="google_translate_element" style="float: left; padding-top: 7px;"></div><script type="text/javascript">
                                      function googleTranslateElementInit() {
                                          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                      }
                                  </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                              </div>
                          </div>

                  </nav>

              </div>
          </section>
      </div>
  </div>
</header>

<div class="container">
    <div class="row">
        <section class="col-md-12 col-xs-12">
            <div id="top_wrapper" class="clearfix">
                <?php if(is_home() || is_page_template('template-home.php')) :?>
                <aside class="home-slider">
                    <?php echo do_shortcode('[image-carousel category="homepage,highlights" showcontrols="false"]');?>
                </aside>
                <?php endif;?>

                <div id="bottom_nav" class="col-md-12 col-xs-12">
                    <ul class="list-unstyled">
                        <li id="enroll-btn" class="nav-icon-wrapper col-md-2 col-sm-2 col-xs-12">
                            <a href="/enroll" class="nav-icon nav-icon-left">
                                <div id="enroll" class="nav-img">
                                </div>
                                How to<br>Enroll with HCLA
                            </a>
                        </li>
                        <li id="find-btn" class="nav-icon-wrapper col-md-2 col-sm-2 col-xs-12">
                            <a href="/find_clinic" class="nav-icon">
                                <div id="find" class="nav-img">
                                </div>
                                Find HCLA<br>Clinic in Your Area
                            </a>
                        </li>
                        <li id="community-btn" class="nav-icon-wrapper col-md-2 col-sm-2 col-xs-12">
                            <a href="/directory" class="nav-icon">
                                <div id="community" class="nav-img">
                                </div>
                                Community<br>Clinic Directory
                            </a>
                        </li>
                        <li id="latest-btn" class="nav-icon-wrapper col-md-2 col-sm-2 col-xs-12">
                            <a href="/news" class="nav-icon">
                                <div id="latest" class="nav-img">
                                </div>
                                Latest<br>HCLA News
                            </a>
                        </li>
                        <li id="urgency-btn" class="nav-icon-wrapper col-md-2 col-sm-2 col-xs-12">
                            <a href="/health_plans" class="nav-icon">
                                <div id="urgency" class="nav-img">
                                </div>
                                Contracted<br>Health Plans
                            </a>
                        </li>
                        <li id="contracted-btn" class="nav-icon-wrapper col-md-2 col-sm-2 col-xs-12">
                            <a href="/health_hospitals" class="nav-icon">
                                <div id="contracted" class="nav-img">
                                </div>
                                Contracted<br>Hospitals
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>

