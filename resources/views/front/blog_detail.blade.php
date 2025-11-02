@include('layouts.frontheader') 
<section class="service_banner banner blog-content">
    <div class="container">
        <h1 class="title_48">
        <span style="color:#005762;">{{ $blogs->title }}</span>
        </h1>
        <p>{{date('M',strtotime($blogs->date))}}
                          {{date('d',strtotime($blogs->date))}} 
                          {{date('Y',strtotime($blogs->date))}}</p>
        {!! $blogs->short_description !!}
    </div>
</section>
<section class="mt-50 blog-content">
    <div class="container">
        <img src="{{asset('public/admin/blogs/detail_image/' . $blogs->detail_image)}}" alt="{{ $blogs->detail_image_alt }}" class="img-fluid">
    </div>
</section>
<section class="mt-50 blog-content">
   
    <div class="container">
        {!! $blogs->detail_description !!}
        
    </div>
</section>
<section class="accoding">
    <div class="container">
        @if (!empty($blogs->title_description) && count($blogs->title_description) > 0)
            <h4 class="text-center mb-5">Frequently Asked Questions</h4>
            <div class="row">
                <div class="col-lg-12">
                    <div id="accordionExample">
                        @foreach ($blogs->title_description as $index => $faq)
                            <div class="mb-4">
                                <h2 class="according_head" 
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $index }}"
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $index }}">
                                    {{ $faq['faq_title'] }}
                                </h2>
                                <div id="collapse{{ $index }}" 
                                    class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                    data-bs-parent="#accordionExample">
                                    <div>
                                        {!! $faq['faq_description'] !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>

@include('layouts.frontfooter')