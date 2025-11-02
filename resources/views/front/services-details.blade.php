@include('layouts.frontheader')

<section class="service_banner banner">
    <div class="container">
        <h1 class="title_48"><span style="color:#005762;">{{ $service->title }}</span></h1>
        <p>{!! $service->description !!}</p>
        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn_0 mt-50" data-product="{{ $service->title }}">Enquire Now <svg width="12" height="11" viewBox="0 0 12 11"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 10.5L11 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M2.11108 0.5H11V8.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg> 
        </a> 
    </div> 
</section>
<section class="mt-100 service_how">
    <div class="container">
        <h2 class="how_head"><span>How It Works</span></h2>
        {!! $service->howitworks_short_desc !!}   
        @php
            $countOfHowItWorks = $howitsworks->count(); // original collection/array count
            $howItWorksClass = 'how_3'; // default

            if ($countOfHowItWorks == 4) {
                $howItWorksClass = 'how_4';
            } elseif ($countOfHowItWorks == 5) {
                $howItWorksClass = 'how_5';
            }
        @endphp
  
        <div class="{{ $howItWorksClass }}">
            @foreach ($howitsworks as $howitwork)
                <div class="how_3_1">
                    <div class="how_wrapper">
                        <img src="{{ asset('public/admin/howitworks/' . $howitwork->image)}}" alt="" class="img-fluid br-10">
                        <div class="how_ctnt">
                            <h4 class="title_24 yellow_txt">{{ $howitwork->name }}:</h4>
                            {!! preg_replace('/<p(.*?)>/', '<p$1 class="text-white mb-0">', $howitwork->description) !!}
                            
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
       @php
            $desc = trim(strip_tags($service->howitworks_desc));
        @endphp
        
        @if(!empty($desc))
            {!! preg_replace('/<p(.*?)>/', '<p$1 class="para_36 mb-0">', $service->howitworks_desc) !!}
        @endif

   </div>
</section>
<section class="mt-100">
    <div class="container-fluid service_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="title_48 blue_txt">Why It’s Worth Investing</h1>
                    {!! $service->its_worth_description !!}
                    {{-- <ul class="why">
                        <li><span>Sales & Marketing Power: </span>Developers like Emaar rely on architectural models
                            to convert buyers. A model allows clients to immediately see where their home, office, or
                            retail unit sits within a masterplan — improving buying confidence.</li>
                        <li><span>Investor Presentations:</span>Models communicate scale and ambition clearly, making it
                            easier to secure funding.</li>
                        <li><span>Government Approvals:</span>Authorities can better understand the project layout,
                            zoning, and environmental impact through a physical model.</li>
                        <li><span>Public Engagement:</span> In urban planning, large-scale models help communities and
                            visitors visualize future projects, strengthening trust.</li>
                        <li><span>Design Validation: </span> Detect structural or design flaws before they become costly
                            construction issues.</li>
                    </ul> --}}
                     
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/admin/its_worth_image/' . $service->its_worth_image)}}" alt="why" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-100">
    <div class="container">
        <h1 class="title_48 blue_txt text-center">How ARC 3D Exceeds Expectations</h1>
        @if($service->title == 'Large-Scale Model Making')
            <p>ARC 3D is one of the UAE’s few companies with expertise in producing mega-scale architectural and industrial models. Our work has been showcased by Emaar, Modon, Dubai Government entities, and defense clients.
            </p>
        @endif
        <div class="expect_wrapper">
            <div class="expect_slider">
                @foreach ($exceeds_expectations as $exceeds_expectation)
                    <div>
                        <div class="expect_slide">
                            <h3 class="title_24">{{ $exceeds_expectation->name }}:</h3>
                            {!! $exceeds_expectation->description !!}
                        </div>
                    </div>
                    
                @endforeach
                
            </div>
        </div>
    </div>
</section>
<section class="mt-100">
    <div class="serv_img_wrapper">
        <div class="serv_img_slider">
            @foreach ($feature_projects as $feature_project)
                <div>
                    <div class="serv_img_slide">
                        <img src="{{ asset('public/admin/featureproject_image/' . $feature_project->image)}}" alt="{{ $feature_project->alt_tag }}">
                        <div class="serv_img_ctnt">
                            <h3 class="title_24 yellow_txt">{{ $feature_project->title }}</h3>
                            {!! preg_replace('/<p(.*?)>/', '<p$1 class="text-white mb-0">', $feature_project->description) !!}
                            
                        </div>
                    </div>
                </div>
                
            @endforeach
            
        </div>
    </div>
</section> 


@include('layouts.enquiry')
@include('layouts.frontfooter')