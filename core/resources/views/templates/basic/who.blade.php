@extends($activeTemplate.'layouts.master')

@section('content')



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
    <div class="contact-info  padding-top">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-10 col-md-12 col-lg-12">
                    <p style="text-align:justify;">
                        
                    Learn and Earn International headed by young and capable professionals, having high quality dedication and experience in handling people, Finance and management activities and successful carriers in multilevel or relationship marketing.
                    After deep study and research of the market it has been realized that more people are pursuing this business as a serious career.

                    Learn and Earn International is an idea to merge different proven online advertising and online earning system into a single system with simplicity of operation and ease to understand.</p>

                   <h3 style="font-size:26px;"> Our Vision and Mission</h3>

<p style="text-align:justify;margin-top:20px;"> 

            Dreams, Vision of future, Achievements, prosperity, success etc. seems to be good words in Book but practically not meant for common people. For that at present people are very confused and the switching over ratio is very high.<br>

            Considering all the factors and parameters, Learn and Earn International introduces the concept Prosperity For Everyone, which is a global business opportunity but not an employment. It is an opportunity which creates a steady flow of income.<br>

            Accordingly the plan has been designed keeping a balance with the needs and dreams of any common people, visualizing in front of him what he wants in life, how he is going to achieve it and when does he wants to achieve it.<br>

            Learn and Earn International provides people an opportunity to be self entrepreneur and offers the individual an opportunity to participate in a business perfectly suited to all who have dreams and are willing to invest genuine efforts to make their dreams come true.<br>

            Learn and Earn International introduces a unique direct selling plan which is dynamic, vibrant, rapidly expanding channel of distribution for the marketing of products and services directly to consumers. It allows the sellers to build a business through their own sales efforts and inviting others to become sellers and give remuneration based on a seller's personal sales and on the combined sales of those people they have sponsored, trained and motivated.<br>

            Let us be innovative, define new ways of doing business, be helpful for each other and make everyone smile. 
                    </p>
                </div>
                
                
            </div>
        </div>
    </div>

    

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


@endsection
