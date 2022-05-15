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
                                <h4 class="title">{{__(@$content->data_values->title)}}</h4>
                                <p class="mb-sm-4 mb-3">{{__(@$content->data_values->short_details)}}</p>
                                <form class="create-account-form" method="post" action="{{route('user.login')}}"
                                      onsubmit="return submitUserForm();">
                                    @csrf







                                    <table width="100%" border="0" cellspacing="5" cellpadding="0">
                                        <tbody><tr>
                                            <td>&nbsp;</td>
                                            <td align="left" valign="middle">&nbsp;</td>
                                            <td colspan="2" align="left" valign="middle">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td colspan="3" class="nec">
                                                <div class="validerrors"></div>
                                                <div class="validerrors"><p></p></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="2%">&nbsp;</td>
                                            <td width="26%">Username:</td>
                                            <td colspan="2">
                                                <input type="text" name="username" value="{{old('username')}}"
                                                       placeholder="@lang('Username')" class="categorylist" size="45"  maxlength="65" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Password:</td>
                                            <td colspan="2">

                                                <input type="password" id="myInputThree" class="categorylist" size="45"  maxlength="65" name="password"
                                                       placeholder="@lang('Password')" required>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Password:</td>
                                            <td colspan="2">

                                                @if(reCaptcha())
                                                    <div class="form-group my-3">
                                                        @php echo reCaptcha(); @endphp
                                                    </div>
                                                @endif
                                                    @include($activeTemplate.'partials.custom-captcha')

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td><a href="{{route('user.password.request')}}">@lang('Forget Password?')</a></td>
                                            <td >
                                                <input type="submit" class="categorylist" value="@lang('Login Account')">
                                            </td>
                                        </tr>



                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td><b>If you do not have an account with <span class="nec"><strong>Learn and Earn IT.</strong></span> : <a href="https://www.learnandearnit.com/register">Register</a></b></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        </tbody></table>


                                </form>
                            </div>

                    </div>
                </div>

        </div>
    </section>



@endsection


@push('script')
    <script>
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">@lang("Captcha field is required.")</span>';
                return false;
            }
            return true;
        }
        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>
@endpush
