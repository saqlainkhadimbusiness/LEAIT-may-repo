@extends($activeTemplate . 'user.layouts.app')

@section('panel')
    <style>
        @media screen and (min-width: 480px) {

            .table-bordered {
                border: 2px solid black;
            }



            td {
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

                background: linear-gradient(to bottom, #00ccff 0%, #ffffff 100%);
            }

            * {
                font-size: 12px;
                font-weight: 900;
            }

            .table-bordered {
                border: 2px solid black;
            }

        }

    </style>


    @if (!empty($planname))
        <table class=" table table-bordered "
            style="width: 80%; margin-left: auto; margin-right: auto; margin-bottom: 119px; width: 90%;">
            <thead>
            </thead>
            <tbody>
                <tr class="table-dark">
                    <th colspan="2">
                        <h5 style="color: black;"> <b style="font-size: 14px;color:black;"> Ads View Status</b></h5>
                    </th>
                </tr>
                <tr>
                    <td style="text-align: left"> <b style="font-size: 14px;color:black;"> Total Ads Earnings:</b></td>
                    <td style="text-align: left"> <b style="font-size: 14px;color:black;"> {{ $adRevenue }}
                            {{ $general->cur_text }}</b></td>
                </tr>


                <tr>
                    <td style="text-align: left"> <b style="font-size: 14px;color:black;"> Ads View Today:</b></td>
                    <td style="text-align: left"> <b style="font-size: 14px;color:black;">
                            {{ isset($ads_status->today_views) && $ads_status->today_views ? $ads_status->today_views : 0 }}
                        </b></td>
                </tr>

                <tr>
                    <td style="text-align: left"> <b style="font-size: 14px;color:black;"> Max Allowed:</td>
                    <td style="text-align: left">
                        <b style="font-size: 14px;color:black;">
                            {{ isset($ads_status->max_views) && $ads_status->max_views ? $ads_status->max_views : 0 }}</b>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class=" table table-bordered "
            style="width: 80%; margin-left: auto; margin-right: auto; margin-bottom: 119px; width: 90%;">
            <thead>
                <tr class="table-dark">
                    <th colspan="2">
                        <h5 style="color: black;"> <b style="font-size: 14px;color:black;"> Ads Link</b></h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ad_records as $key => $ad)
                    <tr>
                        <td style="text-align:left;"><b style="font-size: 14px;color:black;"> <a
                                    href="{{ route('user.viewads', [$ad->id]) }}" style="text-align:center;">
                                    {{ $ad->ad_link }}</a> Earnings:$0.005 | Timer: 20
                            </b>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    @endif

    @if (empty($planname))
        <h2 style="padding:24px;font-size:25px;">You have not purchased any plan yet, to see ads purchase
            plan first.</h2>
    @endif
    </div>
    <div class="card-footer py-4">

    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session()->has('add_watched') && session('add_watched') == 1)
        <script>
            title = " Thankyou&#129505; For Watching Ad, Your Ads Revenue Has Been Added To Your Total Ads Earning";
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: title,
                showConfirmButton: false,
                timer: 5000
            });
        </script>
    @elseif (session()->has('add_watched') && session('add_watched') == 0)
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: 'Reason: add already view',
            });
        </script>
    @endif
    <?php session()->forget('add_watched'); ?>
@endsection
