@php
    $faqTitle = getContent('faq.content', true);
    $faqs = getContent('faq.element');
@endphp



<style type="text/css">
    .sabi-arow {
  border-top: 2px solid #be5501;
}
.padding-top, .padding-bottom{
    padding-top:100px !important;
    padding-bottom:100px !important;
}
.about-content p {
  margin-bottom: 15px !important;
}
.footer-top{
    display:none !important;
}
.foot_links{
    text-align: center;
    color: white;
    margin-top: 20px;
}
.foot_links li a{
    color:white;
}
</style>

<section class="faq-section padding-top padding-bottom section-bg" style="width: auto !important;">
    <div class="container">
        <div class="section-header">
            <h2 class="title">@lang(@$faqTitle->data_values->heading)</h2>
            <p>@lang(@$faqTitle->data_values->subheading)</p>
        </div>
        <div class="row mb--20">
            <div class="col-lg-12">
                <div class="faq-wrapper style-two">
                    @foreach($faqs as $key => $faql)
                        <div class="faq-item">
                            <div class="faq-title">
                                <h6 class="title">{{ __(@$faql->data_values->question) }}</h6>
                                <div class="right-icon"></div>
                            </div>
                            <div class="faq-content">
                                <p>{{ __(@$faql->data_values->answer) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

    <footer class="footer-section pt-80 bg-overlay-black bg_img" style="padding:50px 0 50px;">
    <div class="container">
        <div class="row justify-content-center">
            
                <div class="col-lg-4 col-md-4">
                    <h3 style="font-size:20px;text-align:center;color:white;">Quick Links</h3>
                    <ul class="foot_links">
                        <li><a href="#" title="">Who we are</a></li>
                        <li><a href="#" title="">Recent Payouts</a></li>
                        <li><a href="#" title="">Referral Contests</a></li>
                        <li><a href="#" title="">Faq</a></li>
                        <li><a href="#" title="">Terms</a></li>
                    </ul>
                    
                    
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3 style="font-size:20px;text-align:center;color:white;">Referal Contest</h3>
                    <ul class="foot_links">
                        <li><a href="#" title="">Read More</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3 style="font-size:20px;text-align:center;color:white;">We Support</h3>
                    <ul class="foot_links">
                        <li><img src="assets/font/payment.png" alt="" style="width:200px;"></li>
                    </ul>
                </div>
        </div>
        <div class="footer-bottom-area">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <p>{{__(@$footer->data_values->copyright)}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>

