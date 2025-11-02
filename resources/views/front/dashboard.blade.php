@include('layouts.frontheader')
<!--@include('layouts.loader')-->
@include('layouts.cursor')
<style>
    .select2-container--default .select2-selection--single{
        border-radius: 0px;
        border:none;
        border-bottom: 1px solid #aaa;
    }
    .dyn_call{border:none;border-radius: 0px;border-bottom: 1px solid #aaa;width:100%;}
    .dyn_code{border:none;border-radius: 0px;border-bottom: 1px solid #aaa;}
</style>
<section class="hero"class="main-content" id="mainContent">
    <div class="container-fluid">
        <div class="row hero_parent">
            <div class="col-lg-5 hero_left">
                <h1 class="title_48"><span style="color:#005762;"> The Curve of Innovation:</span><br> Advanced 3D
                    Printing & Model Making</h1>
                <p>Empowering architects, designers, innovators, and industries across the UAE with precision-driven, high-quality 3D printing and prototyping services that transform ideas into impactful realities.</p>
                <div class="hero_btn">
                    <a href="{{ route('front.contact') }}" class="btn_0">Get a Quote
                        <svg class="ms-2" width="12" height="11" viewBox="0 0 12 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.5L11 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.11108 0.5H11V8.5" stroke="white" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a> 
                    <a href="{{ route('front.projects') }}" class="btn_1">
                        View Portfolio
                    </a>
                </div> 
            </div> 
            <div class="col-lg-7 position-relative">
                <div class="model_wrapper">
                    <div class="left-bar"></div>
                    <div class="hero_slider_for">
                        
                        <div class="hero_slide hero_slide_1">
                            <div class="col-lg-12 mx-auto ">
                                <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    
                                   <model-viewer
                                        src="{{ asset('public/front/images/3d/F-16.glb') }}"    
                                        alt="3D Engine Model"
                                        poster="{{ asset('public/front/images/her_thumb-poster-3.png') }}"
                                        shadow-intensity="1"
                                        exposure="0.7"
                                        brightness="1"
                                        shadow-soft="0"
                                        allow-upside-down="true"
                                        camera-controls
                                        auto-rotate
                                        camera-target="auto" 
                                        touch-action="pan-x pan-y"
                                        class="hero_model engineModel f-16"
                                        
                                        id="f16-viewer"  camera-orbit="0deg 90deg 0.8m"       field-of-view="90deg"                >
                                    </model-viewer>
                                <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
                            </div>
                        </div>
                        
                        <div class="hero_slide hero_slide_1">
                            <div class="col-lg-10 mx-auto">
                                <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    
                                  <model-viewer
                                    src="{{ asset('public/front/images/3d/engine.glb') }}"
                                    alt="3D Engine Model"
                                    poster="{{ asset('public/front/images/her_thumb-poster-1.png') }}"
                                    shadow-intensity="1"
                                    exposure="0.7"
                                    brightness="1"
                                    shadow-soft="0"
                                    drain-battery="true"
                                    allow-upside-down="true"
                                    camera-controls
                                    auto-rotate
                                    touch-action="pan-x pan-y"
                                    class="hero_model engineModel engine_1"
                                    
                                  ></model-viewer>
                                <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
                            </div>
                        </div>
                        
                        <div class="hero_slide hero_slide_1">
                               <div class="col-lg-10 mx-auto">
                                <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    
                                  <model-viewer
                                    src="{{ asset('public/front/images/3d/sheikh-zayed-mosque.glb') }}"   
                                    alt="3D Engine Model"
                                    poster="{{ asset('public/front/images/her_thumb-poster-2.png') }}"
                                    shadow-intensity="1"
                                    exposure="0.5"
                                    brightness="1"
                                    shadow-soft="0"
                                    drain-battery="true"
                                    allow-upside-down="true"
                                    camera-controls
                                    auto-rotate
                                    touch-action="pan-x pan-y"z
                                    class="hero_model engineModel sheikh-zayed-mosque"
                                   
                                  ></model-viewer>
                                <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
                            </div>
                        </div>
                        <div class="hero_slide hero_slide_1">
                               <div class="col-lg-10 mx-auto">
                                <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    
                                  <model-viewer
                                    src="{{ asset('public/front/images/3d/Hulk_Joint1.glb') }}"   
                                    alt="3D Engine Model"
                                    poster="{{ asset('public/front/images/her_thumb-poster-4.png') }}"
                                    shadow-soft="0"
                                    drain-battery="true"
                                    allow-upside-down="true"
                                    camera-controls
                                    auto-rotate
                                    touch-action="pan-x pan-y"z
                                    class="hero_model"
                                   
                                  ></model-viewer>
                                <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
                            </div>
                        </div>
                        
                        
                    </div></div>
                    <div class="thumb_wrapper">
                        <div class="hero_slider_nav">
                            <div class="nav-item">
                                <img src="{{ asset('public/front/images/hero_thumb_2.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="nav-item">
                                <img src="{{ asset('public/front/images/her_thumb-1.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="nav-item">
                                <img src="{{ asset('public/front/images/her_thumb-3.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="nav-item">
                                <img src="{{ asset('public/front/images/her_thumb-4.png')}}" alt="" class="img-fluid">
                            </div>
                            
                        </div>
                    </div>
                
            </div>
            <script>
document.addEventListener('DOMContentLoaded', function() {
    const viewer = document.getElementById('f16-viewer');
    const mobileBreakpoint = 991; // Standard breakpoint for tablet/mobile

    function adjustCameraSettings() {
        if (window.innerWidth <= mobileBreakpoint) {
            // --- MOBILE DISPLAY ---
            // Remove the attributes to use 'model-viewer's auto-framing default
            viewer.removeAttribute('camera-orbit');
            viewer.removeAttribute('field-of-view');
        } else {
            // --- DESKTOP DISPLAY ---
            // Set the custom values for a laptop screen
            viewer.setAttribute('camera-orbit', '0deg 90deg 0.8m');
            viewer.setAttribute('field-of-view', '90deg');
        }
    }

    // Run once on load
    adjustCameraSettings();

    // Run again if the user resizes the window (e.g., rotates tablet/resizes browser)
    window.addEventListener('resize', adjustCameraSettings);
});
</script>
        </div>
    </div>
</section>
<script>
  // ✅ Function to apply touch-action only on mobile
  function applyTouchAction() {
    const styleId = 'mv-touch-style';
    let styleTag = document.getElementById(styleId);

    if (window.innerWidth < 992) {
      if (!styleTag) {
        styleTag = document.createElement('style');
        styleTag.id = styleId;
        styleTag.innerHTML = `model-viewer { touch-action: pan-y !important; }`;
        document.head.appendChild(styleTag);
      }
    } else {
      if (styleTag) styleTag.remove();
    }
  }

  // ✅ Run on load & resize
  applyTouchAction();
  window.addEventListener('resize', applyTouchAction);
</script>

<script>
  // ✅ Your rotation script (unchanged)
  const modelViewer = document.querySelector('#myModel');
  let rotate = false;

  function rotateModel() {
    if (rotate) {
      const orbit = modelViewer.getCameraOrbit();
      const newTheta = orbit.theta + 0.8;
      modelViewer.cameraOrbit = `${newTheta}deg ${orbit.phi}deg ${orbit.radius}m`;
    }
    requestAnimationFrame(rotateModel);
  }
  rotateModel();

  modelViewer.addEventListener('mouseenter', () => (rotate = true));
  modelViewer.addEventListener('mouseleave', () => (rotate = false));
</script>

<script>
  // ✅ Remove wheel scroll blocking on mobile (optional improvement)
  document.addEventListener('DOMContentLoaded', function () {
    const modelViewers = document.querySelectorAll('.engineModel');

    modelViewers.forEach(function (mv) {
      mv.addEventListener(
        'wheel',
        function (e) {
          // Only prevent wheel on desktop (not mobile touch)
          if (window.innerWidth >= 992) {
            e.preventDefault();
            e.stopPropagation();
          }
        },
        { passive: false }
      );
    });
  });
</script>

<!-- our core --> 
<section class="core mt-100 ">
    <div class="container-fluid">
        <h2 class="title_48 text-center" style="color:#005762;">Our Core Services</h2>
        <div class="core_wrapper">
            @foreach ($our_services as $our_service)
                <div class="comp_bus_child">
                    <!-- First section: Image + Number -->
                    <div class="comp_bus_front">
                        <div class="comp_bus_fronts">
                            <span>
                                <img class="img-fluid" src="{{ asset('public/admin/service_image/' . $our_service->image)}}" alt="{{ $our_service->alt_tag }}"></span>
                            <h6 class="comp_bus_num">{{ $our_service->title }}</h6>
                        </div>
                    </div>
                    <!-- Second section: Title + Description --> 
                    <div class="comp_bus_back">
                        <span><img class="img-fluid" src="{{ asset('public/admin/back_service_image/' . $our_service->back_image)}}" alt="{{ $our_service->back_alt_tag }}"></span>
                        <div class="comp_bus_back_bt">
                            <h6 class="comp_bus_num">{{ $our_service->title }}</h6>
                            {!! preg_replace('/<p(.*?)>/', '<p$1 class="comp_bus_ext">', $our_service->service_short_desc) !!}
                        </div>
                    </div>
                </div> 
            @endforeach 
        </div>
        <div class="mob_core_wrapper">
            <div class="mob_core_slider">
                @foreach ($our_services as $our_service)
                    <div>
                        <div class="comp_bus_child">
                            <div class="comp_bus_back">
                                <span><img class="img-fluid" src="{{ asset('public/admin/back_service_image/' . $our_service->back_image)}}" alt="{{ $our_service->back_alt_tag }}"></span>
                                <div class="comp_bus_back_bt">
                                    <h6 class="comp_bus_num">{{ $our_service->title }}</h6>
                                    {!! preg_replace('/<p(.*?)>/', '<p$1 class="comp_bus_ext">', $our_service->service_short_desc) !!}
                                </div>
                            </div>
                        </div> 
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section> 
<!-- info -->
<section class="info mt-100">
    <div class="container-fluid">
        <div class="container">
            <div class="col-lg-8">
                <h2 class="title_48 mb-3 blue_txt">
                    Scaling Innovation & Expanding Horizons
                    <!--Transforming ideas into global realities from the Capital of Innovation Abu Dhabi.-->
                </h2>
                <p>ARC 3D has been at the forefront of innovation and growth, continuously redefining what is possible with advanced 3D printing technologies. With over 4 years of dedicated expertise, 
                ARC 3D has successfully expanded its presence across 10+ countries, delivering excellence in design, production, and large-scale model making. Background wall/photo or other provided image to be used here.</p>
            </div>
            <div class="stats_wrapper">
                <div class="stats_box">
                    <!-- <h2 class="count title_48 mb-0 invisible">50000</h2> -->
                    <h2 class="count title_48 mb-0" data-count="50000" data-suffix="+">0</h2>
                    <p class="mb-0">Parts Delivered</p>
                </div>
                <div class="stats_box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <h2 class="count title_48 mb-0" data-count="4" data-suffix="+">0</h2>
                    <p class="mb-0">Years in the business</p>
                </div>
                <div class="stats_box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                    <h2 class="count title_48 mb-0" data-count="2000" data-suffix="+">0</h2>
                    <p class="mb-0">Customers Served</p>
                </div>
                <div class="stats_box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100">
                    <h2 class="count title_48 mb-0" data-count="10" data-suffix="+">0</h2>
                    <p class="mb-0">Countries Served</p>
                </div>
            </div>
        </div>
        <img src="{{ asset('public/front/images/info_bg.png')}}" alt="info" class="img-fluid">
    </div>
</section>
<!-- industries -->
<section class="inds mt-100">
    <div class="container">
        <div class="text-center">
            <h2 class="title_48 blue_txt">Industries We Serve</h2>
            <p>We bring precision, innovation, and creativity to a wide range of industries. From concept to
                creation,<br>
                our advanced technology and expertise help businesses turn ideas into tangible solutions.</p>
        </div>

        <div class="inds_slider_wrapper">
            <div class="inds_slider">
                @foreach ($industries as $industrie)
                    
                    <div>
                        <div class="inds_slide">
                            <div class="inds_top">
                                <div class="plus_icon">
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.028 10.64V6.464H0.9V4.736H5.028V0.56H6.852V4.736H10.98V6.464H6.852V10.64H5.028Z"
                                            fill="#111" />
                                    </svg>

                                </div>
                                <img src="{{ asset('public/admin/industries_image/' . $industrie->image)}}" alt="" class="img-fluid">
                            </div>
                            <h2 class="slide_title">{{ $industrie->title }}</h2>

                            <div class="inds_backslide">
                                <div class="inds_top">
                                    <div class="plus_icon">
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.028 10.64V6.464H0.9V4.736H5.028V0.56H6.852V4.736H10.98V6.464H6.852V10.64H5.028Z"
                                                fill="#111" />
                                        </svg>

                                    </div>
                                </div>
                                <p>{!! $industrie->description !!}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
                
            </div> 
        </div>
        
    </div>
</section>
<!-- industries -->
<!-- partners -->
<section class="partner mt-100">
    <div class="container">
        <div class="text-center">
            <h2 class="title_48 mb-3">Our Valued Partnerships</h2>
            <p>Over the years, ARC 3D has proudly partnered with leading government entities, corporations, and
                innovators. Our clientele <br> reflects the trust placed in our expertise and the impact of our
                solutions.
            </p> 
        </div> 
        <div class="partner_wrapper">
            <div class="partner_slider">
                @foreach ($our_trusted_partners as $our_trusted_partner)
                    <div class="partner_slide">
                        <img src="{{ asset('public/admin/trusted_partner/' . $our_trusted_partner->image)}}" alt="{{ $our_trusted_partner->alt_tag }}" class="img-fluid">
                    </div>
                @endforeach
                
            </div> 
        </div>
    </div>
</section>
<div class="partner_bg">
    <img src="{{ asset('public/front/images/bg-2.webp')}}" alt="partner_bg" class="img-fluid">
</div>
<!-- partners -->
<!-- tech -->
<section class="tech">
    <div class="container">
        <div class="tech_head">
            <h2 class="title_48 blue_txt">Technologies We Offer</h2>
            <p>We utilize multiple 3D printing technologies to meet diverse project needs—whether it’s high-detail
                prototypes, functional parts, or large-scale models.</p>
        </div>
        <div class="tech_wrapper">
            <div class="tech_slider">
                @foreach ($technologies as $technologie)
                    <div class="tech_slide">
                        <a href="{{ route('front.printing') }}#printing_{{ $technologie->url }}">
                            <div class="tech_icon">
                                <img src="{{ asset('public/admin/technologies_image/' . $technologie->image)}}" alt="{{ $technologie->alt_tag  }}" class="img-fluid">
                            </div>
                            <div class="tech_des">
                                <div class="tech_left">
                                    <h2 class="head_2">{{ $technologie->shortname }} <span>({{ $technologie->fullname }})</span></h2>
                                    <p>{!! $technologie->description !!}</p>
                                </div>
                                <div class="tech_right">
                                    <img src="{{ asset('public/front/images/tech_arr.svg')}}" alt="" class="arrow_2">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach 
                
            </div>
        </div>
    </div>
</section>
<!-- tech -->
<!-- steps -->
<section class="steps mt-100">
    <div class="container">
        <div class="col-lg-8 mx-auto text-center">
            <h2 class="title_48 blue_txt">Turning Vision into Reality</h2>
            <p class="mb-0">Turning your concept into a stunning physical model has never been easier. From a simple
                sketch to a fully detailed CAD design, our process ensures precision, speed, and premium quality — every
                step of the way.</p>
        </div>
        <div class="step_wrapper">
            <div class="step step_1" data-aos="flip-left" data-aos-duration="800" data-aos-delay="0">
                <div class="step_image">
                    <img src="{{ asset('public/front/images/step_1.png')}}" alt="step_1" class="img-fluid">
                </div>
                <div class="step_content">
                    <h3 class="title_36">Step 1</h3>
                    <h4 class="title_24">Share Your<br> Design</h4>
                </div>
            </div>
            <div class="step_arrow" data-aos="fade-right" data-aos-duration="600" data-aos-delay="400">
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="29" viewBox="0 0 51 29" fill="none">
                    <path
                        d="M35.5762 0.675293C35.9651 0.283257 36.5981 0.280568 36.9902 0.669434L49.9902 13.562C50.037 13.6084 50.0793 13.6595 50.1162 13.7144C50.1391 13.7485 50.1593 13.7843 50.1777 13.8208C50.2465 13.9564 50.2861 14.1095 50.2861 14.272C50.2861 14.4416 50.2426 14.6008 50.168 14.7407C50.1212 14.8286 50.0622 14.9105 49.9902 14.9819L36.9902 27.8745C36.5982 28.2633 35.9651 28.2605 35.5762 27.8687C35.1873 27.4765 35.1899 26.8435 35.582 26.4546L46.8574 15.272H1C0.447769 15.272 8.76084e-05 14.8242 0 14.272C0 13.7197 0.447715 13.272 1 13.272H46.8574L35.582 2.08936C35.1899 1.70045 35.1873 1.06743 35.5762 0.675293Z"
                        fill="#CE632B" />
                </svg>

            </div>
            <div class="step step_1" data-aos="fade-right" data-aos-duration="800" data-aos-delay="700">
                <div class="step_image">
                    <img src="{{ asset('public/front/images/step_2.png')}}" alt="step_1" class="img-fluid">
                </div>
                <div class="step_content">
                    <h3 class="title_36">Step 2</h3>
                    <h4 class="title_24">Choose Material &<br> Technology</h4>
                </div>
            </div>
            <div class="step_arrow" data-aos="fade-right" data-aos-duration="600" data-aos-delay="1000">
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="29" viewBox="0 0 51 29" fill="none">
                    <path
                        d="M35.5762 0.675293C35.9651 0.283257 36.5981 0.280568 36.9902 0.669434L49.9902 13.562C50.037 13.6084 50.0793 13.6595 50.1162 13.7144C50.1391 13.7485 50.1593 13.7843 50.1777 13.8208C50.2465 13.9564 50.2861 14.1095 50.2861 14.272C50.2861 14.4416 50.2426 14.6008 50.168 14.7407C50.1212 14.8286 50.0622 14.9105 49.9902 14.9819L36.9902 27.8745C36.5982 28.2633 35.9651 28.2605 35.5762 27.8687C35.1873 27.4765 35.1899 26.8435 35.582 26.4546L46.8574 15.272H1C0.447769 15.272 8.76084e-05 14.8242 0 14.272C0 13.7197 0.447715 13.272 1 13.272H46.8574L35.582 2.08936C35.1899 1.70045 35.1873 1.06743 35.5762 0.675293Z"
                        fill="#CE632B" />
                </svg>

            </div>
            <div class="step step_1" data-aos="fade-right" data-aos-duration="800" data-aos-delay="1300">
                <div class="step_image">
                    <img src="{{ asset('public/front/images/step_3.png')}}" alt="step_1" class="img-fluid">
                </div>
                <div class="step_content">
                    <h3 class="title_36">Step 3</h3>
                    <h4 class="title_24">Precision Printing & <br> Finishing</h4>
                </div>
            </div>
            <div class="step_arrow"  data-aos="fade-right" data-aos-duration="600" data-aos-delay="1600">
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="29" viewBox="0 0 51 29" fill="none">
                    <path
                        d="M35.5762 0.675293C35.9651 0.283257 36.5981 0.280568 36.9902 0.669434L49.9902 13.562C50.037 13.6084 50.0793 13.6595 50.1162 13.7144C50.1391 13.7485 50.1593 13.7843 50.1777 13.8208C50.2465 13.9564 50.2861 14.1095 50.2861 14.272C50.2861 14.4416 50.2426 14.6008 50.168 14.7407C50.1212 14.8286 50.0622 14.9105 49.9902 14.9819L36.9902 27.8745C36.5982 28.2633 35.9651 28.2605 35.5762 27.8687C35.1873 27.4765 35.1899 26.8435 35.582 26.4546L46.8574 15.272H1C0.447769 15.272 8.76084e-05 14.8242 0 14.272C0 13.7197 0.447715 13.272 1 13.272H46.8574L35.582 2.08936C35.1899 1.70045 35.1873 1.06743 35.5762 0.675293Z"
                        fill="#CE632B" />
                </svg>

            </div>
            <div class="step step_1" data-aos="fade-right" data-aos-duration="800" data-aos-delay="1900">
                <div class="step_image">
                    <img src="{{ asset('public/front/images/step_4.png')}}" alt="step_1" class="img-fluid">
                </div>
                <div class="step_content">
                    <h3 class="title_36">Step 4</h3>
                    <h4 class="title_24">Fast & Secure <br> Delivery</h4>
                </div>
            </div>
        </div>
        <div class="mob_step_wrapper">
            <div class="mob_step_slider">
                <div>
                    <div class="step step_1">
                        <div class="step_image">
                            <img src="{{ asset('public/front/images/step_1.png')}}" alt="step_1" class="img-fluid">
                        </div>
                        <div class="step_content">
                            <h3 class="title_36">Step 1</h3>
                            <h4 class="title_24">Share Your<br> Design</h4>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="step step_1">
                        <div class="step_image">
                            <img src="{{ asset('public/front/images/step_2.png')}}" alt="step_1" class="img-fluid">
                        </div>
                        <div class="step_content">
                            <h3 class="title_36">Step 2</h3>
                            <h4 class="title_24">Choose Material &<br> Technology</h4>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="step step_1">
                        <div class="step_image">
                            <img src="{{ asset('public/front/images/step_3.png')}}" alt="step_1" class="img-fluid">
                        </div>
                        <div class="step_content">
                            <h3 class="title_36">Step 3</h3>
                            <h4 class="title_24">Precision Printing & <br> Finishing</h4>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="step step_1">
                        <div class="step_image">
                            <img src="{{ asset('public/front/images/step_4.png')}}" alt="step_1" class="img-fluid">
                        </div>
                        <div class="step_content">
                            <h3 class="title_36">Step 4</h3>
                            <h4 class="title_24">Fast & Secure <br> Delivery</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- steps -->
<section class="testimonial mt-100 d-none">
    <div class="container">
        <div class="text-center">
            <h2 class="title_48 blue_txt">What our clients say</h2>
            <p class="mb-0">Trusted by innovators across the UAE — hear their stories of precision, creativity, and
                unmatched service.</p>
        </div>
        <div class="testi_wrapper">
            <div class="testi_slider">
                <div>
                    <div class="testi_slide">
                        <div>
                            <img src="{{ asset('public/front/images/testi_1.png')}}" alt="testi-1" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('public/front/images/star.svg')}}" alt="star" class="img-fluid">
                            <p class="mb-0 mt-3 mt-md-4">I had the luxury to work with ARC3D team on a project for
                                my company through
                                the last 3 months.I was astonished by the level of dedication they gave to my project
                                and the attention to the details at a specific point I felt they are the owners of the
                                project. The quality of the</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi_slide">
                        <div>
                            <img src="{{ asset('public/front/images/testi_1.png')}}" alt="testi-1" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('public/front/images/star.svg')}}" alt="star" class="img-fluid">
                            <p class="mb-0 mt-3 mt-md-4">I had the luxury to work with ARC3D team on a project for
                                my company through
                                the last 3 months.I was astonished by the level of dedication they gave to my project
                                and the attention to the details at a specific point I felt they are the owners of the
                                project. The quality of the</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi_slide">
                        <div>
                            <img src="{{ asset('public/front/images/testi_1.png')}}" alt="testi-1" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('public/front/images/star.svg')}}" alt="star" class="img-fluid">
                            <p class="mb-0 mt-3 mt-md-4">I had the luxury to work with ARC3D team on a project for
                                my company through
                                the last 3 months.I was astonished by the level of dedication they gave to my project
                                and the attention to the details at a specific point I felt they are the owners of the
                                project. The quality of the</p>
                        </div>
                    </div> 
                </div>
                <div>
                    <div class="testi_slide">
                        <div>
                            <img src="{{ asset('public/front/images/testi_1.png')}}" alt="testi-1" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('public/front/images/star.svg')}}" alt="star" class="img-fluid">
                            <p class="mb-0 mt-3 mt-md-4">I had the luxury to work with ARC3D team on a project for
                                my company through
                                the last 3 months.I was astonished by the level of dedication they gave to my project
                                and the attention to the details at a specific point I felt they are the owners of the
                                project. The quality of the</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="mt-100"></div>
<!--<div class="partner_bg">-->
<!--    <img src="{{ asset('public/front/images/bg-2.webp')}}" alt="partner_bg" class="img-fluid">-->
<!--</div>-->
<!-- feature -->
<section class="feature-box">
    <div class="container">
        <div class="head-box d-flex flex-wrap">
            <h2 class="title_48 blue_txt mb-2 mb-md-0">Featured Projects</h2>
            <a class="btn_0" href="{{ route('front.projects') }}">View Projects <i class="fa-solid fa-arrow-right"></i></a>
        </div>
 
        <div class="featured-projects-grid">
            @foreach ($featureProjects as $featureProject)
                <div class="featured-project-item custom-hand-cursor-target">
                    <img src="{{ asset('public/admin/featureproject_image/' . $featureProject->image)}}" alt="{{ $featureProject->alt_tag }}">
                    <div class="featured-project-overlay">
                        <h3>{{ $featureProject->title }}</h3>
                        <p>{!! $featureProject->description  !!}</p>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>

</section>
<section class="contact mt-50">
    <div class="container">
        <div class="contact_head">
            <div class="col-lg-7">
                <h2 class="title_62">Are you ready to realize a 3D idea?<br>
                    Looking for a partner for the execution?</h2>
            </div>
            <div class="contact_btn">
                <div class="ct_arrow">
                    <a href="javascript:void(0);" class="btn_0">Enquire Now <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.5L11 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M2.11108 0.5H11V8.5" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                    <svg class="arrow_svg" xmlns="http://www.w3.org/2000/svg" width="134" height="117"
                        viewBox="0 0 134 117" fill="none">
                        <path
                            d="M126 1.5H127V0.5H126V1.5ZM125.293 116.707C125.683 117.098 126.317 117.098 126.707 116.707L133.071 110.343C133.462 109.953 133.462 109.319 133.071 108.929C132.681 108.538 132.047 108.538 131.657 108.929L126 114.586L120.343 108.929C119.953 108.538 119.319 108.538 118.929 108.929C118.538 109.319 118.538 109.953 118.929 110.343L125.293 116.707ZM0.5 1.5V2.5H126V1.5V0.5H0.5V1.5ZM126 1.5H125V116H126H127V1.5H126Z"
                            fill="#DDAB28" />
                    </svg>
                </div>
                <img src="{{ asset('public/front/images/ct_wheel.svg')}}" alt="" class="tyre_img">
            </div>
        </div>
        <div class="row gx-lg-5 mt-50">
            <div class="col-lg-6 pe-xl-5">
                <h2 class="title_48 blue_txt">Contact Us</h2>
                <div class="map_wrapper">
                    <iframe
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.953158163078!2d54.5146118!3d24.3481243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e3f5b8e550657%3A0x43dd205ad3d4b2b7!2sArc%203D%20Printing%20Solutions%20LLC!5e0!3m2!1sen!2sin!4v1759744648491!5m2!1sen!2sin" 
                        width="100%" height="450" style="border-radius:10px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="Arc-3D"></iframe>
                </div>
                <div class="ct_info">
                    <img src="{{ asset('public/front/images/loc_pin.svg')}}" alt="location" class="img-fluid">
                    <a href="https://maps.app.goo.gl/DT4Cf2s33jR6BRar8" target="_blank">Musaffah, Abu Dhabi, United Arab Emirates</a>
                </div>
                <div class="ct_info">
                    <img src="{{ asset('public/front/images/call_pin.svg')}}" alt="call" class="img-fluid">
                    <a href="tel:+971542797571" target="_blank" class="ct_a">+971 54 279 7571</a>
                </div>
                <div class="ct_info mb-0 ">
                    <img src="{{ asset('public/front/images/mail_pin.svg')}}" alt="mail" class="img-fluid">
                    <div>
                        <a href="mailto:info@arc3d.ae" target="_blank" class="ct_a">General enquiries - info@arc3d.ae</a><br>
                        <a href="mailto:sales@arc3d.ae" target="_blank" class="ct_a">Sales - sales@arc3d.ae </a><br>
                        <a href="mailto:hr@arc3d.ae" target="_blank" class="ct_a">Hr - hr@arc3d.ae </a>
                    </div>
                </div>
            </div>
            
             @php
            use App\Models\Country;
            // Fetch all countries
            $countries = Country::select('id', 'name', 'phonecode')->get();
            @endphp
            
            <div class="col-lg-6">
                <div class="ct_form" id="enquiryform">
                    <h2 class="title_48 blue_txt mb-2">Get in Touch </h2>
                    <p class="mb-0">Fill out the form below, and we’ll get back to you shortly.</p>
                    <form action="{{ route('front.contact_submit') }}" id="home_comman_form" method="post" >
                        @csrf
                        <div class="row"> 
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" name="fullname" class="form-control" id="home_first_name"
                                        placeholder="Enter your first name"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" maxlength="70">
                                    <label for="home_first_name">Full Name<span class="required-star">*</span></label>
                                </div>
                            </div>
                            <!--Honeypot Field (hidden) -->
                            <div style="display:none;">
                                <label>Leave this field empty</label>
                                <input type="text" name="fax_number" autocomplete="off">
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" name="company_name" class="form-control" id="home_company_name"
                                        placeholder="Enter your last name"
                                        >
                                    <label for="home_company_name">Company Name<span class="required-star">*</span></label>
                                </div>
                            </div>
                            
                             <div class="col-lg-12 mb-4 mb-md-5">
                                <label for="country" class="mb-2">Choose a Country<span class="required-star">*</span></label>
                                <select id="country" name="country" class="form-select" style="width:100%">
                                    <option value="" hidden>Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->name }}" data-phonecode="{{ $country->phonecode }}">
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Phone code and number -->
                            <div class="col-lg-12">
                                <div class="mb-4 mb-md-5">
                                    <label for="home_contact_number">Contact Number<span class="required-star mb-2">*</span></label>
                                    <div class="row align-items-center gap-2">
                                        <input type="text" class="dyn_code form-control text-center col" id="phone_code" name="phone_code"
                                               style="max-width:100px;" readonly placeholder="+Code">
                                        <input type="text" class="dyn_call form-control col" id="home_contact_number" name="contact_number"
                                               placeholder="Enter your phone number"
                                               oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,20);" >
                                    </div>

                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="home_email"
                                        placeholder="name@example.com">
                                    <label for="home_email">Email<span class="required-star">*</span></label>
                                </div>
                            </div> 
                            <!--<div class="col-lg-6">-->
                            <!--    <div class="form-floating">-->
                            <!--        <input type="number" class="form-control" name="contact_number" id="home_contact_number"-->
                            <!--            placeholder="Enter your contact number"-->
                            <!--            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" maxlength="12" minlength="10">-->
                            <!--        <label for="home_contact_number">Contact Number<span class="required-star">*</span></label>-->
                            <!--    </div> -->
                            <!--</div>-->
                            <div class="col-lg-12">
                                <div class="form-floating mb-0">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="home_message" name="message"></textarea>
                                    <label for="home_message">Message</label>
                                </div>
                            </div>  
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault" style="font-size:14px;">
                                        I agree to the Privacy Policy and Terms and Condition
                                    </label>
                                </div>
                            </div>  

                            <div class="row align-items-center mb-4">
                                <div class="col-auto">
                                    <img id="captcha-image-comman-form" src="{{ route('captcha.image') }}" alt="CAPTCHA Image" style="border: 1px solid #ccc; height: 40px;">
                                </div>
                                <div class="col-auto">
                                    <svg id="reload-button-comman-form" style="cursor: pointer;" id="reload-button" width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.539 9.54947C19.539 4.46972 15.5667 0.755859 10.4869 0.755859C5.40715 0.755859 1.34335 4.81966 1.34335 9.89941C1.34335 14.9792 5.40715 19.043 10.4869 19.043C12.9252 19.043 14.9571 18.027 16.5826 16.6047" stroke="#333" stroke-miterlimit="10" stroke-linecap="round"></path>
                                        <path d="M21.5833 5.86837L19.589 9.66244L15.4799 8.32953" stroke="#333" stroke-miterlimit="10" stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div class="col-auto mt-3 mt-md-0">
                                    <input class="form-control" type="text" id="custom_captcha_comman_form" placeholder="Enter captcha" autocomplete="off">
                                </div>
                                <small id="custom_captcha_error_comman_form" class="text-danger" style="display:none;">Please verify captcha.</small>
                            </div>

                            <div class="col-lg-12">
                                <a href="javascript:void(0);" class="btn_0" id="HomeSubmitButton">Submit Now <svg width="12" height="11" viewBox="0 0 12 11"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 10.5L11 0.5" stroke="white" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M2.11108 0.5H11V8.5" stroke="white" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        

                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</section> 
@include('layouts.frontfooter')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const phoneCodeInput = document.getElementById("phone_code");

    // Initialize Select2 for country dropdown
    $('#country').select2({
        placeholder: 'Select Country',
        allowClear: true,
        width: '100%'
    });

    // Update phone code on country change
    $('#country').on('change', function () {
        // Get selected option's data-phonecode
        const phoneCode = $(this).find(':selected').data('phonecode');
        phoneCodeInput.value = phoneCode ? '+' + phoneCode : '';
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('home_comman_form');
    const submitButton = document.getElementById('HomeSubmitButton');


    const firstName = document.getElementById('home_first_name');
    const companyName = document.getElementById('home_company_name');
    const email = document.getElementById('home_email');
    const contact = document.getElementById('home_contact_number');
    // const message = document.getElementById('home_message');
    const checkbox = document.getElementById('flexCheckDefault');
    const captchaInput = document.getElementById('custom_captcha_comman_form');
    const country = document.getElementById('country');

    const captchaError = document.getElementById('custom_captcha_error_comman_form');
    const captchaImage = document.getElementById('captcha-image-comman-form');
    const reloadButton = document.getElementById('reload-button-comman-form');

    // Reload CAPTCHA image
    reloadButton.addEventListener('click', function () {
        captchaImage.src = '{{ route("captcha.image") }}?' + Date.now();
    });

    // Utility to create error messages
    function createErrorElement(input) {
        let error = document.createElement('small');
        error.className = "text-danger mt-1";
        error.style.display = "none";
        input.parentNode.appendChild(error);
        return error;
    }

    const firstNameError = createErrorElement(firstName);
    const companyNameError = createErrorElement(companyName);
    const emailError = createErrorElement(email);
    const contactError = createErrorElement(contact);
    // const messageError = createErrorElement(message);
    const checkboxError = createErrorElement(checkbox);
    const countryError = createErrorElement(country);

    // Validation helpers
    function isValidName(name) {
        return /^[A-Za-z\s]+$/.test(name);
    }

    // Anti-spam email pattern check
    function checkSpamEmail(email) {
        const spamPatterns = [
            /^[a-zA-Z]{8,}[0-9]{6,}@/,
            /^[0-9]+@/,
            /(temp-mail|10minutemail|mailinator|guerrillamail|yopmail|throwawaymail|form-check.online|seismologiomail|ru|mailport.lat)/i,
            /^(test|demo|example|noreply|fake|admin|info|random|dummy)/i,
            /^(.)(\1){5,}@/
        ];
        for (let pattern of spamPatterns) {
            if (pattern.test(email)) return false;
        }
        return true;
    }
    function isValidEmail(email) {
        return /^[a-zA-Z0-9._%+-]{2,64}@[a-zA-Z0-9.-]+\.[A-Za-z]{2,10}$/.test(email);
    }
    function isValidContact(number) {
        return /^\d{10,}$/.test(number); 
    }


    function isValidCountry(value) {
        return value.trim() !== ''; // ✅ Added
    }

    function isRequired(value) {
        return value.trim() !== '';
    }

    let validationStarted = false; // track if submit was clicked once

    // Validation function with custom messages
    function validateField(input, errorEl, validator, emptyMsg, invalidMsg) {
        let value = input.value.trim();
        if (value === '') {
            errorEl.textContent = emptyMsg;
            errorEl.style.display = 'block';
            return false;
        } else if (!validator(value)) {
            errorEl.textContent = invalidMsg;
            errorEl.style.display = 'block';
            return false;
        } else {
            errorEl.style.display = 'none';
            return true;
        }
    }


    function validateCaptcha() {
        if (captchaInput.value.trim() === '') {
            captchaError.style.display = 'block';
            captchaError.textContent = "Please enter the captcha.";
            return false;
        } else if (captchaInput.value.trim().length !== 4) {
            captchaError.style.display = 'block';
            captchaError.textContent = "Captcha must be 4 digits.";
            return false;
        } else {
            captchaError.style.display = 'none';
            return true;
        }
    }

    // Attach live validation only after first submit
    function attachLiveValidation() {
        firstName.addEventListener('input', () => { if (validationStarted) validateField(firstName, firstNameError, isValidName, "Full name is required", "Enter a valid full name"); });
        companyName.addEventListener('input', () => { if (validationStarted) validateField(companyName, companyNameError, isRequired, "Company name is required", "Enter a valid company name"); });
        email.addEventListener('input', () => { if (validationStarted) validateField(email, emailError, isValidEmail, "Email is required", "Enter a valid email"); });
        contact.addEventListener('input', () => { if (validationStarted) validateField(contact, contactError, isValidContact, "Contact number is required", "Enter a valid contact number"); });
        // message.addEventListener('input', () => { if (validationStarted) validateMessage(); });
        captchaInput.addEventListener('input', () => { if (validationStarted) validateCaptcha(); });
        checkbox.addEventListener('change', () => { if (validationStarted) checkboxError.style.display = checkbox.checked ? 'none' : 'block'; });
        country.addEventListener('change', () => { if (validationStarted) validateField(country, countryError, isValidCountry, "Please select a country", "Please select a valid country"); }); // ✅ Added
    }

    attachLiveValidation();

    // Handle button click instead of submit
    submitButton.addEventListener('click', function (e) { 
        e.preventDefault(); 
        validationStarted = true; // enable live validation after this click

        let isValid = true; 

        if (!validateField(firstName, firstNameError, isValidName, "Full name is required", "Enter a valid full name")) isValid = false;
        if (!validateField(companyName, companyNameError, isRequired, "Company name is required", "Enter a valid company name")) isValid = false;
        const emailVal = email.value.trim();
        if (!validateField(email, emailError, isValidEmail, "Email is required", "Enter a valid email")){
          isValid = false;  
        } else if (!checkSpamEmail(emailVal)) {
            emailError.textContent = "This email is not allowed.";
            emailError.style.display = 'block';
            isValid = false;
        } else {
            emailError.style.display = 'none';
        }



        if (!validateField(contact, contactError, isValidContact, "Contact number is required", "Enter a valid contact number")) isValid = false;
        // if (!validateMessage()) isValid = false;
        if (!checkbox.checked) {
            checkboxError.textContent = "You must agree to the Privacy Policy and Terms.";
            checkboxError.style.display = 'block';
            isValid = false;
        } else { 
            checkboxError.style.display = 'none';
        }
        if (!validateCaptcha()) isValid = false;
        if (!validateField(country, countryError, isValidCountry, "Please select a country", "Please select a valid country")) {
            isValid = false; // ✅ Added
        }
        if (!isValid) return;

        // Lock button
        submitButton.textContent = 'Verifying captcha...';
        submitButton.classList.add("disabled");

        // Verify captcha via AJAX
        $.ajax({
            url: '{{ route("captcha.verify") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                custom_captcha: captchaInput.value.trim()
            },
            success: function (response) {
                if (response.success) {
                    submitButton.textContent = 'Submitting...';
                    form.submit();
                } else {
                    captchaImage.src = '{{ route("captcha.image") }}?' + Date.now();
                    captchaError.style.display = 'block';
                    captchaError.textContent = response.message;
                    submitButton.textContent = 'Submit Now';
                    submitButton.classList.remove("disabled");
                }
            },
            error: function () {
                            console.log('Something went wrong. Please try again.');

                submitButton.textContent = 'Submit Now';
                submitButton.classList.remove("disabled");
            } 
        });
    });

});


</script>
