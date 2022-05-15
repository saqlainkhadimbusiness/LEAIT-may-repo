@extends($activeTemplate.'layouts.master')

@section('content')

    @include($activeTemplate.'layouts.breadcrumb')




    <style>

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


    </style>

    <section class="account-section padding-bottom padding-top" style="widows: 100% !important;     width: auto !important;">
        <div class="container">
                <div class="signup-area account-area">
                    <div class="row m-0 flex-wrap-reverse">
                            <div class="common-form-style bg-one login-account">
                                <h4 class="title">THANK YOU FOR YOUR REGISTRATION</h4>
                                <p class="mb-sm-4 mb-3">Kindly <a href="/login">Click Here</a> for login to your account.</p>
                            </div>

                    </div>
                </div>

        </div>
    </section>



@endsection
