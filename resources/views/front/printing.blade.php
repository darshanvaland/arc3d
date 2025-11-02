@include('layouts.frontheader')
@php
    use App\Models\Industries;
@endphp
<style>
     .gsap_text span {
      display: inline-block;
      /*transform: translateY(20px);*/
      opacity: 0.1;
    }
    /*.gsap_text{font-size:36px;line-height:42px;}*/
</style>
<section class="service_banner banner">
    <div class="container">
        <h1 class="title_48 blue_txt">3D Printing Technologies</h1>
        <p>{!! $service->description !!}</p>
        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn_0 mt-50" data-product="{{ $service->title }}">Enquire Now <svg width="12" height="11" viewBox="0 0 12 11"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 10.5L11 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M2.11108 0.5H11V8.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </a>
    </div>
</section>
<section class="mt-100">
    <div class="container gsap_wrapper">
        <p class="para_36 gsap_text">Every technology has unique strengths. By combining them with our design expertise and finishing capabilities, we provide precise, reliable, and cost-effective models that help businesses innovate faster, reduce risks,and achieve milestones with confidence.</p>
        
    </div>
</section>

@foreach ($printings as $printing)
    <section class="mt-100" id="printing_{{ $printing->url }}">
        <div class="container-fluid service_wrapper">
            <div class="container">
                <h1 class="title_48 blue_txt">{{ $printing->title }}</h1>
                {!! $printing->description !!}

                <div class="row mt-50 align-items-center">
                    @if($loop->iteration % 2 == 1) 
                        {{-- Image Left --}}
                       
                        <div class="col-lg-6 order-1 order-lg-1">
                            <div class="row">
                                <div class="col-lg-4">
                                    <span class="yellow_pill">Materials Used</span>
                                    {!! $printing->printing_material_desc !!}
                                </div>
                                <div class="col-lg-8 bl">
                                    <span class="yellow_pill">What This Technology Offers</span>
                                    {!! $printing->printing_technology_desc !!}
                                </div> 
                                <div class="col-lg-12 mt-md-5">
                                    <span class="yellow_pill">Benefits to Businesses</span>
                                    {!! $printing->printing_btob_desc !!}
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-6 order-2 order-lg-2 mb-3 mb-md-0">
                            <img src="{{ asset('public/admin/printing_image/' . $printing->image) }}" alt="3-d" class="img-fluid br-10">
                        </div>
                    @else
                        {{-- Image Right --}}
                       
                        <div class="col-lg-6 order-2 order-lg-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <span class="yellow_pill">Materials Used</span>
                                    {!! $printing->printing_material_desc !!}
                                </div>
                                <div class="col-lg-8 bl">
                                    <span class="yellow_pill">What This Technology Offers</span>
                                    {!! $printing->printing_technology_desc !!}
                                </div> 
                                <div class="col-lg-12 mt-md-5">
                                    <span class="yellow_pill">Benefits to Businesses</span>
                                    {!! $printing->printing_btob_desc !!}
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-6 order-1 order-lg-1 mb-3 mb-md-0">
                            <img src="{{ asset('public/admin/printing_image/' .  $printing->image) }}" alt="3-d" class="img-fluid br-10">
                        </div>
                    @endif

                    <div class="col-lg-12 order-3 mt-50">
                        <span class="yellow_pill">Applications</span>
                        @php
                            $AppIds = json_decode($printing->industires);
                            $industries = Industries::where('status', 'Active')->whereIn('id' ,$AppIds)->get();
                        @endphp 
                        <div class="serv_app_wrapper mt-md-5">
                            <div class="serv_app_slider_multi">
                                @foreach ($industries as $industry) 
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
                                                <img src="{{ asset('public/admin/industries_image/' . $industry->image)}}" alt="" class="img-fluid br-10">
                                            </div>
                                            <h2 class="slide_title">{{ $industry->title }}</h2>
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
                                                {!! $industry->description !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach

 
<section class="mt-100">
    <div class="container">
        <div class="serv_cta row br-10">
            <div class="col-lg-3">
                <div class="title_48 yellow_txt mb-0">Why Businesses Trust ARC 3D</div>
            </div>
            <div class="col-lg-9 serv_cta_ctnt">
                <div class="">
                    <ul>
                        <li>Technology Choice: We select the right process (SLA, FDM, SLS) for your specific needs.</li>
                        <li>End-to-End Solutions: From design, material selection, and printing to finishing and
                            delivery.
                        </li>
                        <li>Multi-Industry Expertise: Serving architecture, defense, oil & gas, aerospace, medical,
                            jewelry,
                            consumer goods.</li>
                        <li>Proven Business Impact: Reduce development time, lower costs, improve presentations, and
                            accelerate approvals.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
    //   gsap
 gsap.registerPlugin(ScrollTrigger);

// Split text but keep HTML tags intact
function splitTextKeepHTML(element) {
  element.childNodes.forEach(node => {
    if (node.nodeType === Node.TEXT_NODE) {
      let words = node.textContent.split(/(\s+)/); // split including spaces
      words.forEach(word => {
        let span = document.createElement("span");
        span.style.display = "inline-block";
        span.style.whiteSpace = "pre"; // preserve spacing
        span.textContent = word;
        element.insertBefore(span, node);
      });
      element.removeChild(node);
    } else if (node.nodeType === Node.ELEMENT_NODE) {
      splitTextKeepHTML(node); // recursive for <b>, <i>, etc
    }
  });
}

// Apply splitting
document.querySelectorAll(".gsap_text").forEach(el => {
  splitTextKeepHTML(el);
});

// Master timeline (scroll-synced)
let tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".gsap_wrapper",
    start: "top 80%",
    end: "bottom 20%",
    scrub: true, // scroll synced
    markers: false
  }
});

// Animate each line sequentially
document.querySelectorAll(".gsap_text").forEach((el, i) => {
  // Set initial state for spans
  gsap.set(el.querySelectorAll("span"), { opacity: 0.1 });

  // Add animation to timeline
  tl.to(
    el.querySelectorAll("span"),
    {
      opacity: 1,
      stagger: 0.04, // stagger within the line
      duration: 1, // duration for the line
      ease: "power3.out"
    },
    i * 1.2 // increased delay to ensure previous line completes
  );
});
</script>
@include('layouts.enquiry')
@include('layouts.frontfooter')