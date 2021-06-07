<div class="row">
    <div class="col-md-6">

        <h4>Server Brandwidth</h4> <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">SART</span>
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                            <span class="d-block">
                                <span class="display-5 font-weight-400 text-dark">21 KBs</span>
                            </span>
                            </div><br>


                        </div>

                        <p>Start: Standed Limit</p>
                    </div>
                </div>
            </div>

            @foreach($brandwidth_data as $brandwdh)
                <div class="col-md-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">{{$brandwdh->protocol}}</span>
                            <div class="d-flex align-items-end justify-content-between">
                                <div>
                            <span class="d-block">
                                <span class="display-5 font-weight-400 text-dark">{{round($brandwdh->bytes / 1024,2)}} KBs</span>
                            </span>
                                </div><br>


                            </div>

                            <p>Start: {{gmdate("Y-m-d", $brandwdh->month_start)}}  </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-6">
        <h4>Bucket Information</h4> <br>


                <div class="card">
                    <h6 class="card-header border-0">
                        <div style="color: grey">
                            <i class="fa fa-cloud" style="padding-right: 10px;"></i> Server Details
                        </div>
                    </h6>
                    <div class="card-body pa-0">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table table-sm mb-0">
                                    <tbody id="server_details_summery">
                                    <tr>
                                        <th class="w-70" scope="row">Cpanel</th>
                                        <th class="w-30" scope="row">
                                            <form method="POST" action="{{route('frontend.user.hostbucket.login_cpanel',$hosting_details->id)}}" target="_blank">
                                                {{csrf_field()}}
                                                <input type="hidden" name="token" value="/HJOH8ZVLMQ6BG214SL2XTC4TQD2CY2SC">
                                                <input type="hidden" name="user" value="ruwankavinga">
                                                <button class="btn btn-primary  btn-xs">Open</button>
                                            </form>
                                            {{--<a href="" class="">Open Cpanel</a>--}}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="w-70">Running Status:</td>
                                        <td id="running_time" class="w-30">20 Days 01 </td>
                                    </tr>
                                    <tr>
                                        <td class="w-70">IP Address</td>
                                        <td class="w-30">{{$hosting_details->ip}}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-70">DB</td>
                                        <td class="w-30">Maria DB (MySQL)</td>
                                    </tr>
                                    <tr>
                                        <td class="w-70">Main Name Server</td>
                                        <td class="w-30">{{$hosting_details->name_server}}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-70">Bucket Username</td>
                                        <td class="w-30">{{$hosting_details->username}}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-70">Bucket Supported Email</td>
                                        <td class="w-30">{{$hosting_details->support_email}}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-70">Uptime</td>
                                        <td class="w-30">99.99%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="row">
            <div class="col-md-12">
                <a href="{{route('frontend.user.hostbucket.error_log',$hosting_details->id)}}" class="btn btn-secondary btn-xs">
                    <i class="fa fa-file-text"></i>
                    Error Logs
                </a>
                <a href="" class="btn btn-secondary btn-xs">
                    <i class="fa fa-save"></i>
                    BackUp
                </a>
                <a href="" class="btn btn-secondary btn-xs">
                    <i class="fa fa-leaf"></i>
                    DNS Information
                </a>
                <a href="" class="btn btn-secondary btn-xs">
                    <i class="fa fa-file-text"></i>
                    Domains
                </a>
                <a href="" class="btn btn-secondary btn-xs">
                    <i class="fa fa-lock"></i>
                    SSL
                </a>
            </div>

        </div>
    </div>
</div>


<script>
    // Set the date we're counting down to
    var countDownDate = new Date("{{date_format(date_create($hosting_details->estimate_date),'M d, Y H:i:s')}}").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("running_time").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
