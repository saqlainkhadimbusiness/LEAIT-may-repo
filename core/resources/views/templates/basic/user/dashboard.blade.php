@extends($activeTemplate . 'user.layouts.app')

@section('panel')
    <style>
        table tr td {
            font-weight: bolder;
            font-size: 18px;
        }

    </style>
    <div class="row mb-none-30">
        {{-- @if ($general->notice != null) --}}
        {{-- <div class="col-lg-12 col-sm-6 mb-30"> --}}
        {{-- <div class="card border--light"> --}}
        {{-- <div class="card-header">@lang('Notice')</div> --}}
        {{-- <div class="card-body"> --}}
        {{-- <p class="card-text">@php echo $general->notice; @endphp</p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- @endif --}}
        {{-- @if ($general->free_user_notice != null) --}}
        {{-- <div class="col-lg-12 col-sm-6 mb-30"> --}}
        {{-- <div class="card border--light"> --}}
        {{-- @if ($general->notice == null) --}}
        {{-- <div class="card-header">@lang('Notice')</div>   @endif --}}
        {{-- <div class="card-body"> --}}
        {{-- <p class="card-text"> @php echo $general->free_user_notice; @endphp </p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- @endif --}}



        <style>
            @media screen and (min-width: 480px) {

                .table-bordered {
                    border: 2px solid black;
                }



                .table td {
                    color: black;
                    width: 50%;
                    text-align: left;
                    background: linear-gradient(to bottom, #00ccff 0%, #ffffff 100%);


                }

                th {
                    color: black;
                    text-align: left;
                    background: linear-gradient(to bottom, #058caf 0%, #ffffff 100%);


                }
            }


            @media screen and (max-width: 480px) {
                .table td {
                    color: black;
                    width: 50%;
                    text-align: left;
                    padding: 5px !important;
                    font-size: 12px;
                    background: linear-gradient(to bottom, #00ccff 0%, #ffffff 100%);
                }


                .table-bordered {
                    border: 2px solid black;
                }

            }

        </style>


        <table class="table table-bordered "
            style="width: 80%; margin-left: auto; margin-right: auto; margin-bottom: 119px; width: 90%;">
            <thead>

            </thead>
            <tbody>


                <tr class="table-dark">
                    <th colspan="2">
                        <h5 style="color: black;">
                            <center>Personal Information</center>
                        </h5>
                    </th>
                </tr>



                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Name</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;"> {{ auth()->user()->username }}</b></td>
                </tr>


                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Email</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;"> {{ auth()->user()->email }}</b></td>
                </tr>


                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Account Type</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;"> {!! $accountType !!}</b></td>
                </tr>


                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Referreal Link</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;">
                        {{ route('user.register') }}/?ref={{ auth()->user()->username }}&position=left
                        </br>{{ route('user.register') }}?ref={{ auth()->user()->username }}&position=right</b></td>
                </tr>



                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Sponsored By</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;">
                        {{ isset($sponsoredBy) ? $sponsoredBy->firstname . ' ' . $sponsoredBy->lastname : '' }}</b></td>
                </tr>



                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Members Sponsored</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;"> {{ $total_ref }}</b></td>
                </tr>

                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Total Left Referrals</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;">
                        {{ auth()->user()->userExtra->free_left + auth()->user()->userExtra->paid_left }}</b></td>
                </tr>


                </tr>


                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Total Right Referrals</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;">
                        {{ auth()->user()->userExtra->free_right + auth()->user()->userExtra->paid_right }}</b></td>
                </tr>

                <tr class="table-dark">
                    <th colspan="2">
                        <h5 style="color: black;">
                            <center>Bonuses</center>
                        </h5>
                    </th>
                </tr>


                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Cash Wallet</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;">  {{ getAmount(auth()->user()->balance) }} {{ $general->cur_text }}</b></td>
                </tr>


                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Direct Refer Bonus</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;"> {{ getAmount(auth()->user()->total_ref_com) }} {{ $general->cur_text }}
                    </b></td>
                </tr>
                <tr>
                    <td style="text-align: left"><b style="font-size: 14px;">   Cycler Bonus</b></td>
                    <td style="text-align: left"><b style="font-size: 14px;"> {{ getAmount(auth()->user()->total_binary_com) }}
                       {{ $general->cur_text }}</b></td>
               </tr>

               <tr>
                    <td style="text-align: left"><b style="font-size: 14px;"> Matching Bonus</b></td>
                    <td style="text-align: left"><b style="font-size: 14px;">
                    {{ auth()->user()->userExtra->bv_left + auth()->user()->userExtra->bv_right }}
                    {{ $general->cur_text }}</b></td>
                </tr>

                <tr>
                    <td style="text-align: left"><b style="font-size: 14px;"> Pairing Bonus</b></td>
                    <td style="text-align: left"><b style="font-size: 14px;">  0 {{ $general->cur_text }}</b></td>
               </tr>

               <tr>
                    <td style="text-align: left"><b style="font-size: 14px;"> Promotion Bonus</b></td>
                    <td style="text-align: left"><b style="font-size: 14px;">  0 USD</b></td>
               </tr>


                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Phase Bonus</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;">  0 USD</b></td>
                </tr>


                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> PTC ads Earning</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;"> {{ $adRevenue }} {{ $general->cur_text }}</b></td>
                </tr>



                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> <b style="font-size: 14px;">My Cash Balance</b></b></td>
                     <td style="text-align: left"><b style="font-size: 14px;">{{ getAmount(auth()->user()->balance) +$adRevenue +auth()->user()->userExtra->bv_left +auth()->user()->userExtra->bv_right +getAmount(auth()->user()->total_ref_com)+getAmount(auth()->user()->total_binary_com) - $withdraw_bonuses }} {{ $general->cur_text }}</b></td>
                </tr>


                <tr>
                     <td style="text-align: left"><b style="font-size: 14px;"> Request For Withdraw</b></td>
                     <td style="text-align: left"><b style="font-size: 14px;"> <a href="https://learnandearnit.com/user/withdraw"><b style="font-size: 14px;">Click Here For
                                Sending Request For Withdraw</b></a>
                    </b></td>








            </tbody>
        </table>




























        <!--
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--success b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-wallet"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ getAmount(auth()->user()->balance) }}</span>
                            <span class="currency-sign">{{ $general->cur_text }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Current Balance')</span>
                        </div>
                        <a href="{{ route('user.report.transactions') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--primary b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-cloud-upload-alt "></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ getAmount($totalDeposit) }}</span>
                            <span class="currency-sign">{{ $general->cur_text }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Deposit')</span>
                        </div>
                        <a href="{{ route('user.report.deposit') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--10 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-cloud-download-alt"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ getAmount($totalWithdraw) }}</span>
                            <span class="currency-sign">{{ $general->cur_text }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Withdraw')</span>
                        </div>
                        <a href="{{ route('user.report.withdraw') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--teal b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-check"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ $completeWithdraw }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Complete Withdraw')</span>
                        </div>
                        <a href="{{ route('user.report.withdraw') }}?type=complete"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--warning b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-spinner"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ $pendingWithdraw }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Pending Withdraw')</span>
                        </div>
                        <a href="{{ route('user.report.withdraw') }}?type=complete"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--danger b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-ban"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ $rejectWithdraw }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Reject Withdraw')</span>
                        </div>
                        <a href="{{ route('user.report.withdraw') }}?type=reject"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--cyan b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-money-bill-wave"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ getAmount(auth()->user()->total_invest) }}</span>
                            <span class="currency-sign">{{ $general->cur_text }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Invest')</span>
                        </div>
                        <a href="{{ route('user.report.invest') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--12 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-money-bill"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ getAmount(auth()->user()->total_ref_com) }}</span>
                            <span class="currency-sign">{{ $general->cur_text }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Referral Commission')</span>
                        </div>
                        <a href="{{ route('user.report.refCom') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--info b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="fa fa-tree"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ getAmount(auth()->user()->total_binary_com) }}</span>
                            <span class="currency-sign">{{ $general->cur_text }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Binary Commission')</span>
                        </div>
                        <a href="{{ route('user.report.binaryCom') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--3 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-users"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ $total_ref }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Referral')</span>
                        </div>
                        <a href="{{ route('user.my.ref') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--15 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="fa fa-arrow-circle-left"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                                <span class="amount">{{ auth()->user()->userExtra->free_left + auth()->user()->userExtra->paid_left }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Left')</span>
                        </div>
                        <a href="{{ route('user.my.tree') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--10 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span
                                class="amount">{{ auth()->user()->userExtra->free_right + auth()->user()->userExtra->paid_left }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Right')</span>
                        </div>
                        <a href="{{ route('user.my.tree') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--17 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-cart-arrow-down"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span
                                class="amount">{{ auth()->user()->userExtra->bv_left + auth()->user()->userExtra->bv_right }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total BV')</span>
                        </div>
                        <a href="{{ route('user.bv.log') }}?type=paidBV"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--19 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-arrow-alt-circle-left"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ getAmount(auth()->user()->userExtra->bv_left) }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Left BV')</span>
                        </div>
                        <a href="{{ route('user.bv.log') }}?type=leftBV"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--11 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-arrow-alt-circle-right"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ getAmount(auth()->user()->userExtra->bv_right) }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Right BV')</span>
                        </div>
                        <a href="{{ route('user.bv.log') }}?type=rightBV"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--13 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-hand-holding-usd"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ getAmount($totalBvCut) }}</span>
                            <span class="currency-sign">{{ $general->cur_text }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Bv Cut')</span>
                        </div>
                        <a href="{{ route('user.bv.log') }}?type=cutBV"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>-->



    </div>
@endsection
