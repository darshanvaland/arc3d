@include('layouts.frontheader')
<section class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="title_48">
                    <span class="blue_txt">Career</span>
                    <br>Build the Future With Us
                </h1>
                <div class="banner_para">
                    <p>Join a team of innovators, creators, and problem-solvers who are redefining how the world builds,
                        designs, and experiences architecture. With cutting-edge 3D printing and bold ideas, we’re
                        shaping tomorrow — today.</p>
                </div>
                <a href="#position" class="btn_0">View Open Positions <svg width="12" height="11"
                        viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 10.5L11 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2.11108 0.5H11V8.5" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="pc_banner_wrapper">
                    <img src="{{asset('public/front/images/career_banner.png')}}" alt="career" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-100">
    <div class="container">
        <h1 class="title_48 text-center">
            <span class="blue_txt">Why Choose a Career With Us?</span>
        </h1>
        <div class="row">
            <div class="col-lg-3 mb-3 mb-md-0">
                <div class="cc_box">
                    <img src="{{asset('public/front/images/ied.svg')}}" alt="Innovation Every Day" class="img-fluid">
                    <div>
                        <h4 class="slide_title">Innovation Every Day:</h4>
                        <p>Work on groundbreaking projects that push design and technology forward.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3 mb-md-0">
                <div class="cc_box">
                    <img src="{{asset('public/front/images/gwu.svg')}}" alt="Grow With Us" class="img-fluid">
                    <div>
                        <h4 class="slide_title">Grow With Us:</h4>
                        <p>We invest in your skills, career path, and personal development.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3 mb-md-0">
                <div class="cc_box">
                    <img src="{{asset('public/front/images/collab_culture.svg')}}" alt="Collaborative Culture"
                        class="img-fluid">
                    <div>
                        <h4 class="slide_title">Collaborative Culture:</h4>
                        <p>A supportive team where every idea matters.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3 mb-md-0">
                <div class="cc_box">
                    <img src="{{asset('public/front/images/b&b.svg')}}" alt="Balance & Benefits" class="img-fluid">
                    <div>
                        <h4 class="slide_title">Balance & Benefits:</h4>
                        <p>Flexible work culture, wellness perks, and opportunities to thrive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-100">
    <img src="{{asset('public/front/images/career_img.png')}}" alt="" class="img-fluid">
    <div class="container">
        <div class="life_inside">
            <h1 class="title_48 ">
                <span class="blue_txt">Life Inside Our Studio</span>
            </h1>
            <p>From brainstorming sessions and design sprints to celebrations and coffee breaks, our workplace is a
                blend of creativity, energy, and collaboration. We believe in working hard, supporting each other, and
                having fun along the way.</p>
        </div>
    </div>
</section>
<section class="mt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="title_48 mb-0" id="position">
                    <span class="blue_txt">Find Your Next Role</span>
                </h1>
                <p>Explore opportunities that match your skills and passion. Whether you’re a designer, engineer,
                    project manager, or visionary, we have a place for you.</p>
            </div>
        </div>
        <div class="row mt-50">
            <div class="col-lg-6 mb-3 mb-md-0">
                <div class="job_box">
                    <h3 class="title_24">3D Printing Specialist</h3>
                    <div class="work_time">Full-time</div>
                    <p>We’re looking for a skilled 3D Printing Specialist to operate, maintain, and optimize our advanced 3D printing machines. You’ll work closely with our design and engineering teams to bring architectural concepts to life with precision and creativity.</p>
                    <a href="mailto:hr@arc3d.ae" target="_blank" class="btn_0">Apply Now <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.5L11 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M2.11108 0.5H11V8.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mb-3 mb-md-0">
                <div class="job_box">
                    <h3 class="title_24">Architectural Model Maker</h3>
                    <div class="work_time">Full-time</div>
                    <p>As an Architectural Model Maker, you’ll transform architectural drawings into stunning 3D-printed models. Your work will help clients, investors, and authorities visualize projects with clarity and impact.</p>
                    <a href="mailto:hr@arc3d.ae" target="_blank" class="btn_0">Apply Now <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 10.5L11 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M2.11108 0.5H11V8.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.frontfooter')