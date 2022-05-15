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
                        
                        Start Date 9th December 2012<br>
                        End Date 26th January 2030<br>

                        Prizes :<br><br>

                         

                        Refer 06 New upgraded members and earn $30<br>

                        Refer 10 New upgraded members and earn $90<br><br>

                        Refer others to https://www.learnandearnit.com/ and win Lucrative Prizes! The more people you refer, the greater your chance of winning a prize! The process is simple. Just follow the steps below to get started.<br>

                        Register for your free membership at https://www.learnandearnit.com/  (if you already a member skip this step).<br>
                        Start Promoting your referral link i.e https://www.learnandearnit.com/USERNAME<br>

                        <h3 style="font-size:20px;margin-top: 20px;">Rules:</h3>

                        <p style="margin-top:20px;">The following rules apply to the Referral Program and all associated contests and prize drawings.</p>

 

    In order to receive credit for referring a new member, that member must create and upgrade their account between the two dates listed at the top of this page ("start date" and "end date"). This is called the "Contest Period".<br>
    All prize payments will be made into User account manually after contest period ended.<br>
    All winners are announce after the end date of contest.<br>
    Only one prize will be given to per user based on the highest level achieved  i.e.  A user sponsor 30 member will get $00 reward and  will not be eligible for $00 one.<br>
    Any attempts to defraud this system will invalidate all referrals for the member account in question and this member may be banned from future prize drawings.
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
