@extends($activeTemplate.'layouts.master')

@section('content')
    @include($activeTemplate . 'layouts.breadcrumb')


    {{-- <link href="https://www.learnandearnint.com/assets/front/styles.css" rel="stylesheet" type="text/css" /> --}}



    {{-- <script type="text/javascript" src="https://www.learnandearnint.com/assets/front/jquery.js"></script> --}}
    {{-- <script type="text/javascript" src="https://www.learnandearnint.com/assets/front/jcarousellite_1.js"></script> --}}



    <style>
        @media (min-width: 992px) {
            .padding-top {
                padding-top: 00px;
            }

            * {
                margin: 0px;
                padding: 0px;
                list-style: none;
            }

            .nec {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
                text-decoration: none;
                color: #F00;
            }


            .categorylist {
                font-family: Arial, Helvetica, sans-serif;
                margin-bottom: 6px;
                font-size: 12px;
                height: 25px;
                font-weight: normal;
                color: #2b2b2b;
                text-decoration: none;
                background-color: #e4e4e4;
                padding: 3px;
                border: 1px solid #000101;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                -khtml-border-radius: 5px;
                border-radius: 5px;
            }


            input[type=checkbox],
            input[type=radio] {
                box-sizing: border-box;
                padding: 0;
                height: 12px;
            }

    </style>

    <section class="contact-info  padding-top" style="width: auto !important;">
        <div class="container">
            <div>
                <div class="login-area account-area">
                    <div class="row m-0">

                        <div class="col-lg-8 p-0">
                            <div class="common-form-style bg-one create-account">
                                <h4 class="title">{{ __(@$content->data_values->title) }}</h4>
                                <p class="mb-sm-4 mb-3">{{ __(@$content->data_values->short_details) }}</p>
                                <form class="create-account-form form-row" method="post"
                                    action="{{ route('user.register') }}" onsubmit="return  ();">
                                    @csrf






                                    <table border="0" cellspacing="1" cellpadding="0">


                                        <tr>
                                            <td></td>
                                            <td><strong>First Name: <span class="nec">*</span></strong></td>
                                            <td><input type="text" name="firstname" value="{{ old('firstname') }}"
                                                    class="categorylist" size="45" maxlength="65"
                                                    style="padding-left:5px;" autocomplete="off" required></td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Last Name: <span class="nec">*</span></strong></td>
                                            <td><input type="text" name="lastname" class="categorylist"
                                                    value="{{ old('lastname') }}"
                                                    placeholder="@lang('Enter your last name')*" required></td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Username: <span class="nec">*</span></strong></td>
                                            <td><input type="text" name="username" class="categorylist"
                                                    value="{{ old('username') }}"
                                                    placeholder="@lang('Enter your username')*" required></td>
                                        </tr>

                                        @if ($ref_user == null)
                                            <tr>
                                                <td></td>
                                                <td><strong>Refer By:<span class="nec"> *</span></strong></td>
                                                <td><input type="text" name="referral" class="categorylist"
                                                        value="{{ old('referral') }}" id="ref_name"
                                                        placeholder="@lang('Refer by')*" required>

                                                    <div id="ref"></div>
                                                    &nbsp <span id="referral"></span> &nbsp


                                                    <span style="color:#ff0000;font-weight:bold;font-size:24px;">(LAEI
                                                        LAEI)</span>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td></td>
                                                <td><strong>Select Position: <span class="nec">*</span></strong>
                                                </td>
                                                <td>

                                                    <select name="position" class="categorylist" id="position" required>
                                                        <option value="">@lang('Select position')*</option>
                                                        @foreach (mlmPositions() as $k => $v)
                                                            <option value="{{ $k }}">@lang($v)</option>
                                                        @endforeach
                                                    </select>

                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td></td>
                                                <td>Refer By:</td>
                                                <td><input type="text" name="referral" class="referral"
                                                        value="{{ $ref_user->username }}"
                                                        placeholder="@lang('Enter referral username')*" required readonly>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td></td>
                                                <td><strong>Select Position: <span class="nec">*</span></strong>
                                                </td>
                                                <td> <select class="position" id="position" required disabled>
                                                        <option value="">@lang('Select position')*</option>
                                                        @foreach (mlmPositions() as $k => $v)
                                                            <option @if ($position == $k) selected @endif
                                                                value="{{ $k }}">@lang($v)</option>
                                                        @endforeach
                                                    </select>
                                                    <input type="hidden" name="position" value="{{ $position }}">
                                                    @php echo $joining; @endphp
                                                </td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <td></td>
                                            <td><strong>Email: <span class="nec">*</span></strong></td>
                                            <td><input type="email" name="email" class="categorylist"
                                                    value="{{ old('email') }}" placeholder="@lang('Enter your email')*"
                                                    required></td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>Mobile Phone Number: <span class="nec">*</span></strong>
                                            </td>
                                            <td>


                                                <select class="categorylist" name="country_code">
                                                    @include('partials.country_code')
                                                </select>
                                                <input type="text" class="categorylist" name="mobile" value="{{ old('mobile') }}"
                                                    placeholder="@lang('Your Phone Number')" required>


                                            </td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>Password: <span class="nec">*</span></strong></td>
                                            <td>
                                                <input type="password" name="password" id="myInputTwo" value="{{ old('password') }}"
                                                    class="categorylist" placeholder="@lang('Password')*">


                                                @if ($general->secure_password)
                                                    <p class="text-danger my-1 capital">@lang('At least 1 capital letter is
                                                        required')</p>
                                                    <p class="text-danger my-1 number">@lang('At least 1 number is
                                                        required')</p>
                                                    <p class="text-danger my-1 special">@lang('At least 1 special character
                                                        is required')</p>
                                                @endif
                                            </td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Confirm Password: <span class="nec">*</span></strong>
                                            </td>
                                            <td><input type="password" name="password_confirmation" class="categorylist"
                                                    id="myInputTwo" value="{{ old('password_confirmation') }}" placeholder="@lang('Confirm password')*" required></td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>Birthday: <span class="nec">*</span></strong></td>
                                            <td>















                                                <table border="0" cellspacing="5" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left" valign="middle">
                                                                <select class="categorylist" name="birthday_month"
                                                                    id="birth" required>
                                                                    <option value="">@lang('Birthday Month')*</option>
                                                                    <option value="Jan" style="padding-left:5px;">Jan
                                                                    </option>
                                                                    <option value="Feb">@lang('Feb')</option>
                                                                    <option value="Mar">Mar</option>
                                                                    <option value="Apr">Apr</option>
                                                                    <option value="May">May</option>
                                                                    <option value="Jun">Jun</option>
                                                                    <option value="Jul">Jul</option>
                                                                    <option value="Aug">Aug</option>
                                                                    <option value="Sep">Sep</option>
                                                                    <option value="Oct">Oct</option>
                                                                    <option value="Nov">Nov</option>
                                                                    <option value="Dec">Dec</option>
                                                                </select>

                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <select class="categorylist" name="borth_day" id="date2"
                                                                    required>


                                                                    <option value="" style="padding-left:5px;">Birth Day*
                                                                    </option>
                                                                    <option value="01" style="padding-left:5px;">01</option>
                                                                    <option value="02" style="padding-left:5px;">02</option>
                                                                    <option value="03" style="padding-left:5px;">03</option>
                                                                    <option value="04" style="padding-left:5px;">04</option>
                                                                    <option value="05" style="padding-left:5px;">05</option>
                                                                    <option value="06" style="padding-left:5px;">06</option>
                                                                    <option value="07" style="padding-left:5px;">07</option>
                                                                    <option value="08" style="padding-left:5px;">08</option>
                                                                    <option value="09" style="padding-left:5px;">09</option>
                                                                    <option value="10" style="padding-left:5px;">10</option>
                                                                    <option value="11" style="padding-left:5px;">11</option>
                                                                    <option value="12" style="padding-left:5px;">12</option>
                                                                    <option value="13" style="padding-left:5px;">13</option>
                                                                    <option value="14" style="padding-left:5px;">14</option>
                                                                    <option value="15" style="padding-left:5px;">15</option>
                                                                    <option value="16" style="padding-left:5px;">16</option>
                                                                    <option value="17" style="padding-left:5px;">17</option>
                                                                    <option value="18" style="padding-left:5px;">18</option>
                                                                    <option value="19" style="padding-left:5px;">19</option>
                                                                    <option value="20" style="padding-left:5px;">20</option>
                                                                    <option value="21" style="padding-left:5px;">21</option>
                                                                    <option value="22" style="padding-left:5px;">22</option>
                                                                    <option value="23" style="padding-left:5px;">23</option>
                                                                    <option value="24" style="padding-left:5px;">24</option>
                                                                    <option value="25" style="padding-left:5px;">25</option>
                                                                    <option value="26" style="padding-left:5px;">26</option>
                                                                    <option value="27" style="padding-left:5px;">27</option>
                                                                    <option value="28" style="padding-left:5px;">28</option>
                                                                    <option value="29" style="padding-left:5px;">29</option>
                                                                    <option value="30" style="padding-left:5px;">30</option>
                                                                    <option value="31" style="padding-left:5px;">31</option>
                                                                </select>
                                                            </td>
                                                            <td align="left" valign="middle">
                                                                <select class="categorylist" name="birth_year" id="date3"
                                                                    required>
                                                                    <option value="" style="padding-left:5px;">Birth Year*
                                                                    </option>

                                                                    <option value="1974" style="padding-left:5px;">1974
                                                                    </option>
                                                                    <option value="1975" style="padding-left:5px;">1975
                                                                    </option>
                                                                    <option value="1976" style="padding-left:5px;">1976
                                                                    </option>
                                                                    <option value="1977" style="padding-left:5px;">1977
                                                                    </option>
                                                                    <option value="1978" style="padding-left:5px;">1978
                                                                    </option>
                                                                    <option value="1979" style="padding-left:5px;">1979
                                                                    </option>
                                                                    <option value="1980" style="padding-left:5px;">1980
                                                                    </option>
                                                                    <option value="1981" style="padding-left:5px;">1981
                                                                    </option>
                                                                    <option value="1982" style="padding-left:5px;">1982
                                                                    </option>
                                                                    <option value="1983" style="padding-left:5px;">1983
                                                                    </option>
                                                                    <option value="1984" style="padding-left:5px;">1984
                                                                    </option>
                                                                    <option value="1985" style="padding-left:5px;">1985
                                                                    </option>
                                                                    <option value="1986" style="padding-left:5px;">1986
                                                                    </option>
                                                                    <option value="1987" style="padding-left:5px;">1987
                                                                    </option>
                                                                    <option value="1988" style="padding-left:5px;">1988
                                                                    </option>
                                                                    <option value="1989" style="padding-left:5px;">1989
                                                                    </option>
                                                                    <option value="1990" style="padding-left:5px;">1990
                                                                    </option>
                                                                    <option value="1991" style="padding-left:5px;">1991
                                                                    </option>
                                                                    <option value="1992" style="padding-left:5px;">1992
                                                                    </option>
                                                                    <option value="1993" style="padding-left:5px;">1993
                                                                    </option>
                                                                    <option value="1994" style="padding-left:5px;">1994
                                                                    </option>
                                                                    <option value="1995" style="padding-left:5px;">1995
                                                                    </option>
                                                                    <option value="1996" style="padding-left:5px;">1996
                                                                    </option>
                                                                    <option value="1997" style="padding-left:5px;">1997
                                                                    </option>
                                                                    <option value="1998" style="padding-left:5px;">1998
                                                                    </option>
                                                                    <option value="1999" style="padding-left:5px;">1999
                                                                    </option>
                                                                    <option value="2000" style="padding-left:5px;">2000
                                                                    </option>
                                                                    <option value="2001" style="padding-left:5px;">2001
                                                                    </option>
                                                                    <option value="2002" style="padding-left:5px;">2002
                                                                    </option>
                                                                    <option value="2003" style="padding-left:5px;">2003
                                                                    </option>
                                                                    <option value="2004" style="padding-left:5px;">2004
                                                                    </option>
                                                                    <option value="2005" style="padding-left:5px;">2005
                                                                    </option>
                                                                    <option value="2006" style="padding-left:5px;">2006
                                                                    </option>
                                                                    <option value="2007" style="padding-left:5px;">2007
                                                                    </option>
                                                                    <option value="2008" style="padding-left:5px;">2008
                                                                    </option>
                                                                    <option value="2009" style="padding-left:5px;">2009
                                                                    </option>
                                                                    <option value="2010" style="padding-left:5px;">2010
                                                                    </option>
                                                                    <option value="2011" style="padding-left:5px;">2011
                                                                    </option>
                                                                    <option value="2012" style="padding-left:5px;">2012
                                                                    </option>
                                                                    <option value="2013" style="padding-left:5px;">2013
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>




























                                            </td>
                                        </tr>





                                        <tr>
                                            <td></td>
                                            <td><strong>Gender: <span class="nec">*</span></strong></td>
                                            <td style="display: flex;">

                                                <label class="col-md-2" for="flexRadioDefault1">
                                                    Male
                                                </label>
                                                <label class="col-md-3">
                                                    <input class="categorylist" type="radio" name="gender" value="Male"
                                                        id="flexRadioDefault1" @if( old('gender')=="Male") checked @endif>
                                                </label>

                                                <label class="form-check-label col-md-2">
                                                    Female
                                                </label>
                                                <label class="col-md-3">
                                                    <input class="categorylist" type="radio" name="gender" value="Female"
                                                        id="flexRadioDefault1" @if( old('gender')=="Female") checked @endif>
                                                </label>

                                            </td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>Street Address:</strong></td>
                                            <td> <input type="text" name="street" class="categorylist"
                                                    placeholder="@lang('Street Address')" value="{{ old('street') }}"
                                                    id="ref_name"></td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>Street Address <br>line 2:</strong></td>
                                            <td><input type="text" class="categorylist" name="streetone"
                                                    placeholder="@lang('Street Address Line 2')"
                                                    value="{{ old('streetone') }}">
                                            </td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>City:</strong></td>
                                            <td><input type="text" name="city" class="categorylist"
                                                    value="{{ old('city') }}" placeholder="@lang('Enter your city')*"
                                                    required></td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>State / Province:</strong></td>
                                            <td><input type="text" class="categorylist" name="state"
                                                    value="{{ old('state') }}" placeholder="@lang('Enter your state')*"
                                                    required></td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>Zipcode:</strong></td>
                                            <td><input type="text" name="zip" class="categorylist"
                                                    value="{{ old('zip') }}" placeholder="@lang('Enter your zip')"></td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>Country: <span class="nec">*</span></strong></td>
                                            <td><input type="text" class="categorylist" name="country"
                                                    placeholder="@lang('Country')" readonly /></td>
                                        </tr>







                                        <tr>
                                            <td></td>
                                            <td><strong>National ID Number: <span class="nec">*</span></strong>
                                            </td>
                                            <td><input type="text" name="cnic" class="categorylist"
                                                    placeholder="@lang('National Id Number')*" value="{{ old('cnic') }}"
                                                    max="13"></td>
                                        </tr>


                                        <tr style="display: none;">
                                            <td></td>
                                            <td><strong>Payment Processor:</strong></td>
                                            <td>

                                                <select class="categorylist" name="payment_processor" id="birth">
                                                    <option value="">Payment Processor</option>
                                                    <option value="Perfect Money">Perfect Money</option>
                                                    <option value="Perfect Money">Ego</option>

                                                </select>

                                            </td>
                                        </tr>


                                        <tr style="display: none;">
                                            <td></td>
                                            <td><strong>Your Merchent Account:</strong></td>
                                            <td><input type="text" class="categorylist" name="merchant_account"
                                                    placeholder="@lang('Your Merchant Account')"
                                                    value="{{ old('merchant_account') }}"></td>
                                        </tr>


                                        <tr style="display: none;">
                                            <td></td>
                                            <td><strong>Your Placement:</strong></td>
                                            <td style="display: flex;">


                                                <label class="col-md-2" for="flexRadioDefault1">
                                                    Left
                                                </label>
                                                <label class="col-md-3">
                                                    <input class="categorylist" type="radio" value="Left" name="placement"
                                                        id="flexRadioDefault1">
                                                </label>

                                                <label class="form-check-label col-md-2">
                                                    Right
                                                </label>
                                                <label class="col-md-3">
                                                    <input class="categorylist" type="radio" value="Right"
                                                        name="placement" id="flexRadioDefault1">
                                                </label>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Interested in Package: <span
                                                        class="nec">*</span></strong></td>
                                            <td>


                                                <select class="categorylist" name="package_plan" id="birth" required>
                                                    <option value="" style="padding-left:5px;">Interested in Package*
                                                    </option>
                                                    <option value="Supervisor" style="padding-left:5px;" @if( old('package_plan')=="Supervisor") selected @endif>Supervisor</option>
                                                    <option value="Manager" style="padding-left:5px;" @if( old('package_plan')=="Manager") selected @endif>Manager</option>
                                                    <option value="Director" style="padding-left:5px;" @if( old('package_plan')=="Director") selected @endif>Director</option>
                                                    <option value="Executive Director" style="padding-left:5px;" @if( old('package_plan')=="Executive Director") selected @endif>Executive
                                                        Director (200 Ads)</option>

                                                </select>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Working Place: <span class="nec">*</span></strong></td>
                                            <td style="display: flex;">

                                                <label class="col-md-2" for="flexRadioDefault1">
                                                    Home
                                                </label>
                                                <label class="col-md-3">
                                                    <input class="categorylist" type="radio" value="Home"
                                                        name="working_place" id="flexRadioDefault1" @if( old('working_place')=="Home") checked @endif>
                                                </label>

                                                <label class="form-check-label col-md-2">
                                                    Office
                                                </label>
                                                <label class="col-md-3">
                                                    <input class="categorylist" type="radio" value="Office"
                                                        name="working_place" @if( old('working_place')=="Office") checked @endif id="flexRadioDefault1">
                                                </label>


                                            </td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Interested in: <span class="nec">*</span></strong></td>
                                            <td style="display: flex;">


                                                <label class="col-md-2" for="flexRadioDefault1">
                                                    Product
                                                </label>
                                                <label class="col-md-3">
                                                    <input class="categorylist" type="radio" value="Product"
                                                        name="interested_in" id="flexRadioDefault1" required @if( old('interested_in')=="Product") checked @endif>
                                                </label>

                                                <label class="form-check-label col-md-2">
                                                    Advertisement
                                                </label>
                                                <label class="col-md-3">
                                                    <input class="categorylist" type="radio" value="advertisement"
                                                        name="interested_in" id="flexRadioDefault1" required @if( old('interested_in')=="advertisement") checked @endif>
                                                </label>


                                            </td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Question 1: <span class="nec">*</span></strong></td>
                                            <td>
                                                <input name="questionone" type="text" class="categorylist"
                                                    style="padding-left:5px;" size="45" readonly=""
                                                    value="What Is Your Mother Name?">
                                            </td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Answer 1: <span class="nec">*</span></strong></td>
                                            <td><input type="text" class="categorylist" name="answerone"
                                                    placeholder="@lang('Answer1')*" value="{{ old('answerone') }}"
                                                    required></td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Question 2: <span class="nec">*</span></strong></td>
                                            <td>


                                                <select class="categorylist" name="questiontwo" id="question2" readonly>
                                                    <option value="What is the name of your favorite pet?"
                                                        style="padding-left:5px;">What Is The Name Of Your Favorite Pet?
                                                    </option>
                                                    <option value="In what city were you born?" style="padding-left:5px;">In
                                                        What City Were You Born?</option>
                                                    <option value="What high school did you attend?"
                                                        style="padding-left:5px;">What High School Did You Attend?</option>
                                                </select>


                                            </td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td><strong>Answer 2: <span class="nec">*</span></strong></td>
                                            <td><input type="text" name="answertwo" class="categorylist"
                                                    placeholder="@lang('Answer2')*" value="{{ old('answertwo') }}"
                                                    required></td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td><strong>Human Verification: <span class="nec">*</span></strong>
                                            </td>
                                            <td>

                                                @if (reCaptcha())
                                                    <div class="col-md-6 ">
                                                        <div class="form-group my-3">
                                                            @php echo reCaptcha(); @endphp
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="form-group col-md-12">
                                                    @include($activeTemplate . 'partials.custom-captcha')
                                                </div>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td colspan="3">

                                                <div class="form-group col-md-12">
                                                    <input type="submit" value="Create an Account"  </div>
                                            </td>
                                        </tr>





                                    </table>







                                </form>
                                <p class="terms-and-conditions">@lang('First Read Our All') <a
                                        href="{{ route('terms') }}">
                                        @lang('Terms & Conditions')</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@push('script')
    <script>
        (function($) {
            "use strict";
            var not_select_msg = $('#position-test').html();
            $(document).on('keyup', '#ref_name', function() {
                var ref_id = $('#ref_name').val();
                var token = "{{ csrf_token() }}";
                $.ajax({
                    type: "POST",
                    url: "{{ route('check.referral') }}",
                    data: {
                        'ref_id': ref_id,
                        '_token': token
                    },
                    success: function(data) {
                        if (data.success) {
                            $('select[name=position]').removeAttr('disabled');
                            $('#position-test').text('');
                        } else {
                            $('select[name=position]').attr('disabled', true);
                            $('#position-test').html(not_select_msg);
                        }
                        $("#ref").html(data.msg);
                    }
                });
            });

            $(document).on('change', '#position', function() {
                updateHand();
            });

            function updateHand() {
                var pos = $('#position').val();
                var referrer_id = $('#referrer_id').val();
                var token = "{{ csrf_token() }}";
                $.ajax({
                    type: "POST",
                    url: "{{ route('get.user.position') }}",
                    data: {
                        'referrer': referrer_id,
                        'position': pos,
                        '_token': token
                    },
                    success: function(data) {
                        $("#position-test").html(data.msg);
                    }
                });
            }

            @if (@$country_code)
                $(`option[data-code={{ $country_code }}]`).attr('selected', '');
            @endif
            $('select[name=country_code]').change(function() {
                $('input[name=country]').val($('select[name=country_code] :selected').data('country'));
            }).change();

            function submitUserForm() {
                var response = grecaptcha.getResponse();
                if (response.length == 0) {
                    document.getElementById('g-recaptcha-error').innerHTML =
                        '<span style="color:red;">@lang("Captcha field is required.")</span>';
                    return false;
                }
                return true;
            }

            function verifyCaptcha() {
                document.getElementById('g-recaptcha-error').innerHTML = '';
            }

            @if ($general->secure_password)
                $('input[name=password]').on('input', function () {
                var password = $(this).val();
                var capital = /[ABCDEFGHIJKLMNOPQRSTUVWXYZ]/;
                var capital = capital.test(password);
                if (!capital) {
                $('.capital').removeClass('d-none');
                } else {
                $('.capital').addClass('d-none');
                }
                var number = /[123456790]/;
                var number = number.test(password);
                if (!number) {
                $('.number').removeClass('d-none');
                } else {
                $('.number').addClass('d-none');
                }
                var special = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
                    var special = special.test(password);
                    if (!special) {
                    $('.special').removeClass('d-none');
                    } else {
                    $('.special').addClass('d-none');
                    }

                    });
            @endif

            @if (old('position'))
                $(`select[name=position]`).val('{{ old('position') }}');
            @endif

        })(jQuery);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select[name="birthday_month"] option[value="{{ old('birthday_month') }}"]').attr('selected', 'selected');
            $('select[name="borth_day"] option[value="{{ old('borth_day') }}"]').attr('selected', 'selected');
            $('select[name="birth_year"] option[value="{{ old('birth_year') }}"]').attr('selected', 'selected');
        });
    </script>


@endpush
