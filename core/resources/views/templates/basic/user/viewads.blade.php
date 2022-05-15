@extends($activeTemplate . 'user.layouts.app')

@section('panel')
    <div class="row">
        <div class="col-lg-12">




                    <div class="row design-order-process">
                        <div class="col-lg-6 col-sm-12 mb-10">
                            <div class="faq-contact">




                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="panel-title text-center">@lang('Ad Timer')</h4>
                                        </div>
                                        <div class="card-body text-center">

                                           <div id="timer" style="color:red;"></div>

                                          <input type="hidden" value="{{Auth::user()->id}}" class="user_id">
                                          <input type="hidden" value="{{$id}}" class="ad_id">
                                        </div>

                                    </div>

                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="faq-contact">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="panel-title">@lang('Ad Preview')</h4>
                                    </div>
                                    <div class="card-body text-justify min-height-310">
                                        <iframe width="460" height="315" src="{{$adlink}}" frameborder="0" allowfullscreen></iframe>
                                    </div>

                                    <div class="card-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




        </div>
    </div>

@endsection

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    function incTimer() {
        var currentMinutes = Math.floor(totalSecs / 20);
        var currentSeconds = totalSecs % 20;
        if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
        //if(currentMinutes <= 9) currentMinutes = "0" + currentMinutes;
        totalSecs++;
        $("#timer").text(currentSeconds);
        setTimeout('incTimer()', 1000);

    }

    totalSecs = 0;

    $(document).ready(function() {
            var url="{{route('user.ads_status')}}";
            incTimer();


       window.setTimeout(function() {
        save_ad_revenue();
            function save_ad_revenue(){
                //alert('run');
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                var user_id=$(".user_id").val();
                //alert(user_id);
                var ad_id=$(".ad_id").val();
                url=url+'?add_id='+ad_id+'&user_id='+user_id
                // $.ajax({
                //   type:'POST',
                //   url:"{{route('user.addrevenue')}}",
                //   data:{user_id:user_id,ad_id:ad_id},
                //   success:function(data) {

                //       //alert(data);

                //   },
                //   error:function(){
                //       alert('sorry');
                //   }
                // });

            }
            window.location.href = url;
        }, 20000);
    });
</script>
