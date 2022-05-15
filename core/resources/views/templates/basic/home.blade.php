



@extends($activeTemplate.'layouts.master')

@section('content')

    @php
        $sliders = getContent('slider.element');
    @endphp
    <section class="banner-slider" style="width: 100% !important">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="banner-container bg-overlay bg_img" data-background="{{getImage('assets/images/frontend/slider/' . @$slider->data_values->background_image, '1920x850')}}">
                        <div class="container">
                            <div class="banner-content">
                                <h3 class="sub-title" style="color:white;">{{__(@$slider->data_values->description)}}</h3>
                                <!--<h3 class="sub-title">{{__(@$slider->data_values->title)}}</h3>-->
                                <!--<h1 class="title">{{__(@$slider->data_values->subtitle)}}</h1>-->
                                <div class="button-area">
                                    <!--<h2>{{__(@$slider->data_values->description)}}</h2>-->
                                    <div class="button-group">
                                        <!--<a href="{{__(@$slider->data_values->left_button_link)}}" class="custom-button active">{{__(@$slider->data_values->left_button)}}</a>
                                        <a href="{{__(@$slider->data_values->right_button_link)}}" class="custom-button">{{__(@$slider->data_values->right_button)}}</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="banner-prev"><i class="fas fa-angle-left"></i></div>
        <div class="banner-next"><i class="fas fa-angle-right"></i></div>
    </section>

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

<section id="marq_members" class="about-section" style="background-color:white !important;padding-top:30px;padding-bottom:50px;width:100% !important;">
    
    <div class="container" style="margin-top: -161px !important;">     

    <div class="sabi-layer">
        

    
        <div class="sabi-mamber sabi-arow" style="border-top: 2px solid #2b72ff !important;background: #2b72ff !important;">
            <strong>LAEI</strong> Members</div>
        <div class="sabi-text sabi-mamber-border" style="border-top: 2px solid #2b72ff !important;">
            <marquee direction="left" scrollamount="3" width="100%">
                Muhammad Anwar...<span style="color:#2b72ff"><strong>MAnwar</strong></span>...Lahore...
                         
                Pakistan *** 
                Majidali atif...<span style="color:#2b72ff"><strong>Majidali116</strong></span>...Lahore...
                         
                Pakistan *** 
                Ali Haider...<span style="color:#2b72ff"><strong>Haider1177</strong></span>...Lahore...
                         
                Pakistan *** 
                Mohsin Naseem...<span style="color:#2b72ff"><strong>Mohsin699</strong></span>...Lahore ...
                         
                Pakistan *** 
                Fahad Mahmood...<span style="color:#2b72ff"><strong>Fahadm7866</strong></span>...Lahore...
                         
                Pakistan *** 
       
            </marquee>
        </div>
    <div class="clear"></div>
        <div class="sabi-super sabi-arow" style="border-top: 2px solid #e56a10 !important;background:#e56a10 !important;"><strong>LAEI</strong> Supervisor</div>
        <div class="sabi-text sabi-super-border" style="border-top: 2px solid #e56a10 !important;">   
            <marquee direction="left" scrollamount="4" width="100%">
                Abdul Rehman...<span style="color:#e56a10"><strong>Abdulrehmans177</strong></span>...Lahore...
                         
                Pakistan *** 
                Waleed Akram...<span style="color:#e56a10"><strong>MWaleed333</strong></span>......
                         
                Pakistan *** 
                Roshan Khan...<span style="color:#e56a10"><strong>Roshan333</strong></span>...Lahore...
                         
                Pakistan *** 
                Muhammad Shakeel Sarwar...<span style="color:#e56a10"><strong>Shakeel444</strong></span>...Lahore...
                         
                Pakistan *** 
                Rab Nawaz...<span style="color:#e56a10"><strong>Rabnawaz333</strong></span>...Lahore...
                         
                Pakistan *** 
                Ali Hassan Riaz...<span style="color:#e56a10"><strong>Alihassan2222</strong></span>...Lahore...
                         
                Pakistan *** 
                Hamza Iqbal...<span style="color:#e56a10"><strong>Hamza77</strong></span>...Lahore...
                         
                Pakistan *** 
                amaan waseem...<span style="color:#e56a10"><strong>Amaan177</strong></span>...Lahore...
                         
                Pakistan *** 
                Sikander Azeem...<span style="color:#e56a10"><strong>Sikander333</strong></span>...Lahore...
                         
                Pakistan *** 
    
            </marquee>
        </div>
    <div class="clear"></div>
        <div class="sabi-manager sabi-arow" style="border-top: 2px solid #000 !important;background:#000 !important;"><strong>LAEI</strong> Manager</div>
        <div class="sabi-text sabi-manager-border" style="border-top: 2px solid #000 !important;">
            <marquee direction="left" scrollamount="4" width="100%">
                Faizan Ali...<span style="color:#000"><strong>Faizi215</strong></span>...Lahore...
                         
                Pakistan *** 
                Maryam imran...<span style="color:#000"><strong>Maryam177</strong></span>...Lahore...
                         
                Pakistan *** 
                Saba Haris...<span style="color:#000"><strong>Saba117</strong></span>...Lahore...
                         
                Pakistan *** 
                Ali Maroof...<span style="color:#000"><strong>Maroof786</strong></span>...Lahore...
                         
                Pakistan *** 
                    
            </marquee>
        </div>
    <div class="clear"></div>
        <div class="sabi-director sabi-arow" style="border-top: 2px solid #ff0000 !important;background:#ff0000 !important;"><strong>LAEI</strong> Director</div>
        <div class="sabi-text sabi-director-border" style="border-top: 2px solid #ff0000 !important;">
            <marquee direction="left" scrollamount="4" width="100%">
                Muqadas Falk shair...<span style="color:#ff0000"><strong>Muqadas786</strong></span>...Lahore ...
                         
                            Pakistan *** 
                Hina Raees...<span style="color:#ff0000"><strong>Hina331</strong></span>...Lahore...
                         
                            Pakistan *** 
                Mehwish Asif...<span style="color:#ff0000"><strong>Mehwish2222</strong></span>...Lahore...
                         
                            Pakistan *** 
                Umer Ali...<span style="color:#ff0000"><strong>Umer7866</strong></span>...Lahore...
                         
                            Pakistan *** 
                Fahad Mahboob...<span style="color:#ff0000"><strong>Fahad7866</strong></span>...Lahore...
                         
                            Pakistan *** 
                    
            </marquee>
        </div>
    <div class="clear"></div>
    <div class="sabi-ex sabi-arow" style="border-top: 2px solid #ffbc03 !important;background:#ffbc03 !important;"><strong>LAEI</strong> Ex-Director</div>
    <div class="sabi-text sabi-ex-border" style="border-top: 2px solid #ffbc03 !important;">
            <marquee direction="left" scrollamount="4" width="100%">
                ...<span style="color:#ffbc03"><strong></strong></span>......
		 
                 *** 
                 ...<span style="color:#ffbc03"><strong></strong></span>......
                		 
                 *** 
                Itfa Aslam...<span style="color:#e56a10"><strong>Itfa127</strong></span>...Faisalabad...
                		 
                Pakistan *** 
                Rimsha Siddique...<span style="color:#e56a10"><strong>Rimsha127</strong></span>...Gujranwala...
                		 
                Pakistan *** 
                Naseem Akhtar...<span style="color:#e56a10"><strong>Naseem127</strong></span>...Gujranwala...
                		 
                Zimbabwe *** 
            </marquee>
        </div>
        
    <div class="clear"></div>

        


    
        

        

       
    </section>
    
    
    <section class="about-section" style="background-color:white !important;padding-top:60px;padding-bottom:50px;width:100% !important">

        <div class="container">
           
           <img src="assets/images/learn2.jpeg" class="img-fluid" alt="Responsive image" style="margin-bottom:20px;">
           <img src="assets/images/learn1.jpeg" class="img-fluid" alt="Responsive image">
            
        </div>
        
    </section>

    <!-- About -->

    <section id="advertising" class="about-section" style="background-color:white !important;width:100% !important;padding-bottom:20px !important;padding-top:30px;">
        <div class="container">
            <div class="row justify-content-between mb--50">
                <div class="col-md-12">
                    <div class="section-header left-style" style="margin-bottom:10px;">
                            <h2 class="title" style="font-size:30px !important;margin-bottom:10px !important;">Products & Advertising</h2>
                        </div>
                        <div align="justify">Learn and Earn &amp; International (LAEI) is an online new innovative 
                            profit sharing advertising system which you can use to advertise your 
                            sites and earn limitless profits. All you need to do is to purchase 
                            advertising credits for your sites. Learn and Earn &amp; International 
                            (LAEI) provides earning opportunities while working on your advertising 
                            needs. Members will have access to limitless profit depending on their 
                            engagement in the site. Upon purchasing each position, you will be given
                             08,000 advertisement credits. These credits will be your key to push 
                            banners ads that will be viewable by the other members. The more credits
                             you purchase the more opportunities of showcasing your advertisements. 
                            But the buck does not stop there. As you continue to enjoy the perks of 
                            advertising, you are also creating your profit sharing ladder. Time is 
                            money, money is everything. Our System wants to help you maximize your 
                            online earnings while minimizing your efforts with our short term and 
                            long term earning plans.
                            </div><br><br>
                </div>
                <div class="col-lg-6 pr-xl-5 mb-50">
                    <img src="https://www.learnandearnint.com/assets/front/imgs/abtimg.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-lg-6 mb-50">
                    <div class="about-content">
                        
                        <div align="justify">
                            <p class="para2" style="color: #4e1c3a;font-size: 36px;font-family: 'Monotype Corsiva';">
                            <strong class="advertising-hdng">If you're looking for an easy way to earn fast moneys online, you've found it.</strong>
                            </p>
                            <br>
                            
                            <p>
                            We shaped this system to make it as easy as likely to earn real money! 
                        Our system will enable you to earn extra income online short period and 
                        long period. This is not a <span style="color:#0055e5;font-size:15px;"><strong>“get rich swift”</strong></span> structure but more a <span style="color:#0055e5;font-size:15px;"><strong>“balanced increase your revenue”</strong></span> type of program. This is the easiest and the best way to earn real cash online. <span style="color:#0055e5;font-size:15px;"><strong>Don't falter to join us.</strong></span>
                              </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="learn_it" style="background-color:white !important;padding-top:0px;padding-bottom:30px;width:100% !important;">
        <div class="container">
            <br>
            <div class="jumbotron" style="padding: 40px 1rem !important;background-image: url(https://www.learnandearnint.com/assets/front/imgs/center-text2.png);
background-repeat: no-repeat !important;margin-bottom: 1rem !important;">
                
                <h3 style="font-size:30px;">Learn and Earn International (LAEI) is Hybrid system of the best proven earning opportunities. All in one system.</h3>

            </div>
            <br>
            
            <div class="jumbotron" style="padding: 32px 1rem !important;
background-image: url(https://www.learnandearnint.com/assets/front/imgs/mainheadingbg.jpg);text-align: center;">
                
                <a href="" style="font-size:30px;"><h3 style="font-size:30px;color:white;text-align:center;">Learn and Earn International</h3></a>

            </div>
            <br>
            <div class="jumbotron" style="padding: 32px 1rem !important;
background-image: url(https://www.learnandearnint.com/assets/front/imgs/mainheadingbg.jpg);text-align: center;">
                
                <a href="" style="font-size:30px;"><h3 style="font-size:30px;color:white;text-align:center;">How LAEI'S Advantage Plan Works?</h3></a>

            </div>
            <br>
            <img src="assets/images/learn1.jpeg" class="img-fluid" alt="Responsive image">
        </div>
    </section>

    
    <section id="binary" style="background-color:white !important;padding-top:0px;padding-bottom:50px;width:100% !important;">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="font-size:30px;">Binary system (Pairing Bonus System)</h3>
                    <p style="text-align:justify;margin-top:10px;">Receivelarge amount of cash with Learn and Earn International LTD Position placed in 1:1 set of binary (Pairing system). It can help all members to earn real huge cash amount with small energy. Receive $4 on a set of 1memberon your right side &1member on your left side. It would be enduring infinity earning for unlimited level's gravity.</p>
                    <p>* Receive $4 on each pair set of 1:1 sales</p>
                    <p>* Fast to earn and longtime earning</p>
                    <p>* Receive $6 Direct Sponsor Bonus</p>
                    <p>* Receive up to $1500 Every Month with single position
                    <p>* Spillover & Spill under Supported.</p>
                </div>
            </div>
        </div>
        <br><br>

        <div class="container">
            <div class="row">
            <div class="col-md-4" style="background-color:#f7f7f7;padding:20px 18px !important;">
                 <h4 style="font-size:20px !important;">Here is The Chart</h4> of 10 straight lines paying you a total of $10,235 passive Income over and over again
                 <table class="table table-responsive">
                     <tr>
                         <th>AD LEVELS</th>
                         <th>PACKAGE COST</th>
                         <th>CYCLE EARNINGS</th>
                         <th>CASH BALANCE</th>
                     </tr>
                     <tbody>
                         <tr>
                             <td>1</td>
                             <td>$5</td>
                             <td>$15.00</td>
                             <td>$5</td>
                         </tr>
                         <tr>
                             <td>2</td>
                             <td>$10</td>
                             <td>$30.00</td>
                             <td>$10</td>
                         </tr>
                         <tr>
                             <td>3</td>
                             <td>$20</td>
                             <td>$60.00</td>
                             <td>$20</td>
                         </tr>
                         <tr>
                             <td>4</td>
                             <td>$40</td>
                             <td>$120.00</td>
                             <td>$40</td>
                         </tr>
                         <tr>
                             <td>5</td>
                             <td>$80</td>
                             <td>$240.00</td>
                             <td>$80</td>
                         </tr>
                         <tr>
                             <td>6</td>
                             <td>$160</td>
                             <td>$480.00</td>
                             <td>$160</td>
                         </tr>
                         <tr>
                             <td>7</td>
                             <td>$320</td>
                             <td>$960.00</td>
                             <td>$320</td>
                         </tr>
                         <tr>
                             <td>8</td>
                             <td>$640</td>
                             <td>$1,920.00</td>
                             <td>$640</td>
                         </tr>
                         <tr>
                             <td>9</td>
                             <td>$1280</td>
                             <td>$3,840.00</td>
                             <td>$1,280</td>
                         </tr>
                         <tr>
                             <td>10</td>
                             <td>$2,500</td>
                             <td>$7,500.00</td>
                             <td>$7,500</td>
                         </tr>
                     </tbody>
                 </table>
            </div>
            <div class="col-md-8">
                <h3 style="font-size:30px;text-align:center;">LAEI Multi Straight Line Cycler</h3>
                <p style="margin-top:10px;text-align:justify;">Learn and Earn International is based on passive income. The 10 straight line cyclers are the core of the system. When 300% business will come and members earn 300% income. Every time a new position is bought in a line a percentage of the cost of that position is added to the top position. When that top position reach 300% it’s full and cycles out When a position reaches 300% it’s full and cycles out. Our unique “overflow” system will place a new position at the bottom of the next line and deduct the cost of that position from the cycle earnings. The remaining is added to the available balance of that member. Only in the last line (the $2500 line) this doesn’t happen because there is no next line after the last line of course.</p>
                
                <h3 style="font-size:30px;text-align:center;">Follow Me Phases System</h3>
                <div class="follow_phases" style="margin-top:10px;text-align:justify;">
                    Learn and Earn International Follow me phases program gives you andchance to earn more. The Learn and Earn International Follow me Phases is one business having 8 phasesrewards plans. Once you join our program you're entered into the Basic Phases. At No additional out-of-pocket costs, you can CYCLE into the Member, Super Visor, Manager, Director, Executive Director, Area Manager, City Manager and Country Manager Phases. That's the beauty of our REFLEX upgrade system. Each Phase pays a greater Bonus.
                   <p>* Member Phase will pay you $30 per Phase.</p>
                   <p>* Super VisorPhase will pay you $60 per phase.</p>
                   <p>* ManagerPhase will pay you $120 per phase.</p>
                   <p>* Director Phase will pay you $240 per phase.</p>
                   <p>* Executive Director Phase will pay you $480 per phase.</p>
                   <p>* Area ManagerPhase will pay you $960 per phase.</p>
                   <p>* City Manager Phase will pay you $1920 per phase.</p>
                   <p>* Country Manager Phase will pay you $3840 per phas.</p>
                </div>
            </div>
            <br>
             
        </div>
    </div>

    </section>

    <!-- About -->
    
    <section id="learnearncom" class="about-section" style="background-color:white !important;padding-top:0px;padding-bottom:0px;width:100% !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron" style="padding: 32px 1rem !important;text-align: center;background-color: #116BF3;">
                        
                        <a href="" style="font-size:20px;"><h3 style="font-size:20px;color:white;text-align:center;">learnandearnit.com is an evolutionary, dynamic and result oriented business and Advertising Platform with direction and more focus on Advertising and Marketing</h3></a>
        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why" class="about-section" style="background-color:white !important;padding-top:0px;padding-bottom:0px;width:100% !important;">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 mb-50">
                    <div class="about-content">
                        <div class="jumbotron" style="padding: 32px 1rem !important;text-align: center;background-color: #116BF3;">
                        
                            <h3 style="font-size:30px;color:white;text-align:center;">Why LAEIT</h3>
        
                        </div><br>
                        <div align="justify" style="background: #4C88BC;color: white;padding: 20px;border-radius: 15px;">

                            <p>* You just found the one in a lifetime opportunity to earn.</p>
                            <p>* Our lawful & realistic International business.</p>
                            <p>* 10 ways of improbable income streams.</p>
                            <p>* Learn and Earn International is very easy to Understand.</p>
                            <p>* No need experience.</p>
                            <p>* Daily and Guaranteed payments.</p>
                            <p>* Spillover & spill under supported.</p>
                            <p>* Fast and Professional customer Support.</p>
                            <p>* Confluence of 3 most popular systems Binary (Pairing System), Square line & Follow me Phases first time in the world.</p>
                            <p>* A Powerful Advertising Platform for new members.</p>
                            <p>* Impassive and Fast income opportunity.</p>
                            <p>* Every day when you get up in the morning you see grow up in your money.</p>
                            <p>* Get Paid on Every referral Level.</p>
                            <p>* Earn Unlimited Earning with binary (pairing system) daily up to $100 and up to $1500/Month.</p>
                            <p>* Earn a paycheck weekly so replace your Job and work from home, Realistic earning from realistic work.</p>
                            <p>* Monthly 2 sponsors required then earn $30+$90 PTC ads.</p>

                        </div>    
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="success" style="background-color:white !important;padding-top:0px;padding-bottom:50px;width:100% !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron" style="padding: 32px 1rem !important;text-align: center;background-color: #116BF3;">
                        
                            <h3 style="font-size:30px;color:white;text-align:center;">Our Success</h3>
        
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="#">
                    <img src="assets/images/learn1.jpeg" class="img-fluid" alt="Responsive image"></a>
                </div>
                <div class="col-md-6">
                    <p style="text-align:justify;margin-top:20px;">
                        
                    Thanks to great vision and smart business practices, we're a very profitable company.
                    But that's not the only way we measure our success. We also measure it by how many people's lives we help make better off than before. While most businesses thrive on competition, we ask the question, "Why can't success depend on sharing?" It works like this. You're rewarded for sharing our products with others. You're rewarded even more by helping others to do the same. So that the more successful those people become, the more you benefit.
                    </p>
                </div>
                <div class="col-md-6"><br>
                    <img src="https://www.learnandearnint.com/assets/front/imgs/abtimg.png" class="img-fluid" alt="Responsive image">
                </div>
                
            </div> 
        </div>
    </section>
    
    <section id="sharing_group" style="background-color:white !important;padding-top:0px;padding-bottom:50px;width:100% !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron" style="padding: 32px 1rem !important;text-align: center;background-color: #116BF3;">
                        
                            <h3 style="font-size:30px;color:white;text-align:center;">LAEIT Income Sharing Group</h3><br>
                            <p style="color:white;text-align:justify;">Learn and Earn International adding 2% from every Sale and send it to LAEIgroup income, this accumulated amount will be distributed equally among all qualified members on monthly basis. “Qualification for LAEI Bonus Group” Every member can earn and qualify for LAEI Bonus by finishing 5 Phases Pairs. </p>
        
                    </div>
                </div>
                 <div class="col-md-12 text-center">
                    
                    <img src="assets/images/learn.jpeg" class="img-fluid" alt="Responsive image">
                </div>
                
            </div> 
        </div>
    </section>
    
    @php
    $subscribe = getContent('subscribe.content', true);
@endphp

    <section id="subscribe" class="subscribe-section" style="background-color:white !important;padding-top:0px;padding-bottom:50px;width:100% !important;">
        <div class="container">
            <div class="row" style="background-image: url(https://www.learnandearnint.com/assets/front/imgs/signuparea-bg.png);background-repeat: no-repeat;padding:9px 22px;">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <div class="col-md-7"></div>
                            <div class="col-md-5">
                                <form class="subscribe-form" method="post" action="{{route('subscriber.store')}}">
                                @csrf
                                
                                     <input style="height: 33px;border-radius: 10px;background:#f4f6f7;border:0px solid black;width: 77%;" type="email" name="email"  placeholder="@lang('Enter Your email address')" required>
                                    <button type="submit" style="height: 35px;border-radius: 8px;right: -16px;
border: none;
width: 84px;">
                                        Submit
                                    </button>
                                </form>    
                            </div>
                           
                        
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

@endsection




