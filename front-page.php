<?php
get_header();
?>

<div class="site-wrap">

    

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div>
        <div class="site-navbar bg-light">
          <div class="row justify-content-between">
            <div class="col-4 logo-block ml-3">
              <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Logo_MagiBIM.svg" alt="logo MagiBim company"></a>
              <div class="site-logo-txt">Инновации в&nbsp;инженерном проектировании</div>
            </div>
            <div class="col-7">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class="active"><a href="<?php echo esc_url( home_url( "/" ) ); ?>">ГЛАВНАЯ</a></li>
                    <li class="has-children">
                      <a href="#">О КОМПАНИИ</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="#">Menu1</a></li>
                        <li><a href="#">Menu2</a></li>
                        <li><a href="#">Menu3</a></li>
                        <li class="has-children">
                          <a href="#">Sub Menus</a>
                          <ul class="dropdown">
                            <li><a href="#">Menu1</a></li>
                            <li><a href="#">Menu2</a></li>
                            <li><a href="#">Menu3</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#">Контакты</a></li>
                    <li class="mob-menu-button"><a href="#"><span class="d-inline-block text-white btn btn-top-menu">Личный кабинет</span></a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- ==================  Section buttons ================== -->

    <div class="container top-programm-button mb-4">
      <a href="#" class="shad media-image">
        <div class="programm-button">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_top_01.svg" alt="">
          <h4>MagiBIM<br>Аудитор</h4>
        </div>
      </a>
      <a href="#" class="shad">
        <div href="#" class="programm-button">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_top_02.svg" alt="">
          <h4>MagiBIM<br>Координатор</h4>
        </div>
      </a>
      <a href="#" class="shad">
        <div class="programm-button">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_top_03.svg" alt="">
          <h4>MagiBIM<br>Cloud</h4>
        </div>
      </a>
      <a href="#" class="shad">
        <div class="programm-button">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_top_04.svg" alt="">
          <h4>MagiBIM<br>Инженер</h4>
        </div>
      </a>
      <a href="#" class="shad">
        <div class="programm-button">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_top_05.svg" alt="">
          <h4>MagiBIM<br>Эксперт</h4>
        </div>
      </a>   
    </div>

  
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover inner-page overlay" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_01_cover.jpg);" data-aos="fade" data-stellar-background-ratio="0.8">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Проект здания производственного комплекса</h1>
              <span class="caption1 d-block text-white mt-1">Voluptam a ipsum inctior rernam seque corro maximus quamusantios et fugitis qui in enis as eostrum faccus eatus magnient lam eicium reptatquas quost, ommo et et, et est et aliatur, office</span>
              <a href="#" class="btn btn-light rounded mt-4">Подробнее</a>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover inner-page overlay" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_02_cover.jpg);" data-aos="fade" data-stellar-background-ratio="0.8">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Проект здания производственного комплекса</h1>
              <span class="caption1 d-block text-white mt-1">Voluptam a ipsum inctior rernam seque corro maximus quamusantios et fugitis qui in enis as eostrum faccus eatus magnient lam eicium reptatquas quost, ommo et et, et est et aliatur, office</span>
              <a href="#" class="btn btn-light rounded mt-4">Подробнее</a>
            </div>
          </div>
        </div>
      </div> 

      <div class="site-blocks-cover inner-page overlay" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_03_cover.jpg);" data-aos="fade" data-stellar-background-ratio="0.8">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Проект здания производственного комплекса</h1>
              <span class="caption1 d-block text-white mt-1">Voluptam a ipsum inctior rernam seque corro maximus quamusantios et fugitis qui in enis as eostrum faccus eatus magnient lam eicium reptatquas quost, ommo et et, et est et aliatur, office</span>
              <a href="#" class="btn btn-light rounded mt-4">Подробнее</a>
            </div>
          </div>
        </div>
      </div> 

      <div class="site-blocks-cover inner-page overlay" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_04_cover.jpg);" data-aos="fade" data-stellar-background-ratio="0.8">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Проект здания производственного комплекса</h1>
              <span class="caption1 d-block text-white mt-1">Voluptam a ipsum inctior rernam seque corro maximus quamusantios et fugitis qui in enis as eostrum faccus eatus magnient lam eicium reptatquas quost, ommo et et, et est et aliatur, office</span>
              <a href="#" class="btn btn-light rounded mt-4">Подробнее</a>
            </div>
          </div>
        </div>
      </div> 


    </div>

    <!-- <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">Products &amp; Services</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Insurance Coverage</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">
              <div class="media-image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Home Insurance</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
                  <p><a href="#" class="btn btn-primary text-white px-4"><span class="caption">Learn More</span></a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Auto Insurance</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
                  <p><a href="#" class="btn btn-primary text-white px-4"><span class="caption">Learn More</span></a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_3.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Travel Insurance</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
                  <p><a href="#" class="btn btn-primary text-white px-4"><span class="caption">Learn More</span></a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Home Insurance</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
                  <p><a href="#" class="btn btn-primary text-white px-4"><span class="caption">Learn More</span></a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Auto Insurance</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
                  <p><a href="#" class="btn btn-primary text-white px-4"><span class="caption">Learn More</span></a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_3.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Travel Insurance</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
                  <p><a href="#" class="btn btn-primary text-white px-4"><span class="caption">Learn More</span></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- ==================  Section "О КОМПАНИИ" ================== -->

    
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center font-secondary">
            <h2 class="site-section-heading text-uppercase text-center font-secondary ext">О компании</h2></div>
        </div>
    
        <div class="row mb-5 text-big-slogan" data-aos="fade">Rionet paruptas se expel imodipis rem. La verrore volore imolupt ionsequist, tem aspde por molupta volorporis quatuda porerfide por</div>

      
        <!-- Большое фото + подпись -->
        <!-- <div class="row mb-5">
          <div class="col-md-12">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about_1.jpg" alt="image" class="img-fluid">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ml-auto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid eius facilis voluptatem eligendi magnam accusamus vel commodi asperiores sint rem reprehenderit nobis nesciunt veniam qui fugit doloremque numquam quod.</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p>
          </div>
        </div> -->



    
  

      <div class="site-half">
        <div class="col-12">
         <div class="site-half-img" style="background-image: url('images/img_02.jpg');"></div>         
        </div>
         <div class="img-bg-1" style="background-image: url('images/img_02.jpg');" data-aos="fade-right"></div>         
        <div class="col-md-5 ml-md-auto py-5">
            <div class="about-txt-photo" data-aos="fade">
              <div class="txt-top-line"></div>              
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid eius facilis voluptatem eligendi magnam accusamus vel commodi asperiores sint rem reprehenderit nobis nesciunt veniam qui fugit doloremque numquam quod.</p>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p>  
              
            </div>
        </div>
      </div>

      <div class="site-half">
        <div class="col-12">
         <div class="site-half-img" style="background-image: url('images/img_03.jpg');"></div>         
        </div>
         <div class="img-bg-1 right" style="background-image: url('images/img_03.jpg');" data-aos="fade-left"></div>      
        <div class="container">
          <div class="row no-gutters align-items-stretch">
            <div class="col-md-5 mr-md-auto py-5">
                <div class="about-txt-photo" data-aos="fade">
                  <div class="txt-top-line"></div>              
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid eius facilis voluptatem eligendi magnam accusamus vel commodi asperiores sint rem reprehenderit nobis nesciunt veniam qui fugit doloremque numquam quodLorem ipsum dolor sit amet distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p>  
                  
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-half">
        <div class="col-12">
         <div class="site-half-img" style="background-image: url('images/img_04.jpg');"></div>         
        </div>
         <div class="img-bg-1" style="background-image: url('images/img_04.jpg');" data-aos="fade-right"></div>
        <div class="container">
          <div class="row no-gutters align-items-stretch">
            <div class="col-md-5 ml-md-auto py-5">
                <div class="about-txt-photo" data-aos="fade">
                  <div class="txt-top-line"></div>              
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid eius facilis voluptatem eligendi magnam accusamus vel commodi asperiores sint rem reprehenderit nobis nesciunt veniam qui fugit doloremque numquam quod.</p>

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p>  
                  
                </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>



    
  <!-- ==================  Section "ПОЧЕМУ МЫ" ================== -->

    <div class="site-section" data-aos="zoom-in-up">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-uppercase text-center font-secondary ext">ПОЧЕМУ МЫ</h2>
          </div>
        </div>
      
        <div class="row border-responsive">

          <div class="col-md-6 col-lg-4 mb-6">
            <div class="text-left wy-me-block">
              <div class="icon-bottom"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_bottom_01.svg" alt=""></div>
              <div>
                <h6 class="text-uppercase h5 mb-2 mt-2">Header small</h6>
                <p>Magnit litiorestium eat odist as repreptatias sam, qui dem facerferibus rectium et eum archicatur solupici cus aceaque</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-6">
            <div class="text-left wy-me-block">
              <div class="icon-bottom"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_bottom_02.svg" alt=""></div>
              <div>
                <h6 class="text-uppercase h5 mb-2 mt-2">Header small</h6>
                <p>Magnit litiorestium eat odist as repreptatias sam, qui dem facerferibus rectium et eum archicatur solupici cus aceaque</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-6">
            <div class="text-left wy-me-block">
              <div class="icon-bottom"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_bottom_04.svg" alt=""></div>
              <div>
                <h6 class="text-uppercase h5 mb-2 mt-2">Header small</h6>
                <p>Magnit litiorestium eat odist as repreptatias sam, qui dem facerferibus rectium et eum archicatur solupici cus aceaque</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-6">
            <div class="text-left wy-me-block">
              <div class="icon-bottom"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_bottom_05.svg" alt=""></div>
              <div>
                <h6 class="text-uppercase h5 mb-2 mt-2">Header small</h6>
                <p>Magnit litiorestium eat odist as repreptatias sam, qui dem facerferibus rectium et eum archicatur solupici cus aceaque</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-6">
            <div class="text-left wy-me-block">
              <div class="icon-bottom"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_bottom_06.svg" alt=""></div>
              <div>
                <h6 class="text-uppercase h5 mb-2 mt-2">Header small</h6>
                <p>Magnit litiorestium eat odist as repreptatias sam, qui dem facerferibus rectium et eum archicatur solupici cus aceaque</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-6">
            <div class="text-left wy-me-block">
              <div class="icon-bottom"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/MB_icon_bottom_07.svg" alt=""></div>
              <div>
                <h6 class="text-uppercase h5 mb-2 mt-2">Header small</h6>
                <p>Magnit litiorestium eat odist as repreptatias sam, qui dem facerferibus rectium et eum archicatur solupici cus aceaque</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <!-- <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="mb-5"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_1.jpg" alt="Image" class="img-fluid"></p>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="site-section-heading mb-3 font-secondary text-uppercase">Thousands of Houses Damage Each Year</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ad, tempora incidunt accusantium. Similique magni quaerat beatae illo aliquid. Libero non ipsa nisi, corporis architecto incidunt rem repellendus asperiores numquam!</p>
            <p><a href="#" class="btn btn-outline-primary py-2 px-4">Insured Yours Now</a></p>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="site-section" style="background-image: url('images/topography.png'); background-attachment: fixed">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center text-uppercase">Our Founders</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_2.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
            <h2 class="h5 ">Alex Peters</h2>
            <span class="d-block mb-4">CEO, Co-Founder</span>
            <p class="font-weig mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita et aliquam fuga dicta amet ad laborum error recusandae, voluptatibus quam minima sed, saepe odio voluptatem. Sed unde hic, vitae fugiat.</p>
          </div>
          <div class="col-md-6 text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_3.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
            <h2 class="h5">Shane Cripton</h2>
            <span class="d-block mb-4">President, Co-Founder</span> 
            <p class="font-weig mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita et aliquam fuga dicta amet ad laborum error recusandae, voluptatibus quam minima sed, saepe odio voluptatem. Sed unde hic, vitae fugiat.</p>
          </div>
        </div>
      </div>  
    </div> -->
    
    

    <!-- <div class="site-section block-14 bg-light nav-direction-white">

      <div class="container">
        
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center text-uppercase">Testimonies</h2>
          </div>
        </div>

        <div class="nonloop-block-14 owl-carousel">
          
          <div class="p-5">
            <div class="d-block block-testimony w-75 mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div>
                <h2 class="h5 mb-4">Katie Johnson</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-5">
            <div class="d-block block-testimony w-75 mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div>
                <h2 class="h5 mb-4">Jun Mars</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-5">
            <div class="d-block block-testimony w-75 mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_3.jpg" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div>
                <h2 class="h5 mb-4">Shane Holmes</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-5">
            <div class="d-block block-testimony w-75 mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_4.jpg" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div>
                <h2 class="h5 mb-4">Mark Johnson</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>

        </div>

      </div>
      
    </div> -->

    <!-- <div class="py-5 bg-primary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <h2 class="text-uppercase text-white mb-0">Small Business Insurance Company</h2>
          </div>
          <div class="col-md-3 ml-auto text-center text-md-left">
            <a href="#" class="btn btn-bg-primary d-inline-block d-md-block font-secondary text-uppercase">Contact Us</a> 
          </div>
        </div>
      </div>
    </div> -->


  </div>

    <!-- ==================  footer ================== -->

<?php
get_footer();
