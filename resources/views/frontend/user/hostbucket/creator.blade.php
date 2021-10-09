@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">
        <div class="container-fluid px-xxl-65 px-xl-20">
            @include('frontend.breadcums.breadcums',[
          'breadcrumb' => [
                  [
                      'name' =>'Host Bucket',
                      'url' => route('frontend.user.hostbucket'),
                      'is_active' => null
                  ],
                   [
                      'name' =>'Create',
                      'url' => route('frontend.user.hostbucket.create'),
                      'is_active' => 'yes'
                  ]
           ]
          ])


            <form id="regForm" action="{{route('frontend.user.hostbucket.create_hostbucket')}}" method="post">
                {{csrf_field()}}
                <div class="tab">
                    @include('frontend.user.hostbucket.section.package_selection')
                </div>

                <div class="tab">
                    @include('frontend.user.hostbucket.section.license_agreement')

                </div>

                <div class="tab">
                   @include('frontend.user.hostbucket.section.configration')
                </div>

                <div class="tab">
                   @include('frontend.user.hostbucket.section.final_summery')
                </div>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button class="btn btn-primary"  type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

            </form>

            @push('after-script')

            <script>
                $( document ).ready(function() {
                    var randomstring = Math.random().toString(36).slice(-8);

                    $('#host_password').val(randomstring);
                });
            </script>

            <script>


                    $('input').keypress(function () {
                        $('input').attr('class', 'form-control');
                        $('.errr_description').html('');
                    });

                function validateEmail(email) {
                    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(email);
                }
                    $( document ).ready(function() {
                        var billing_type = $('#billing_type').val();
                        get_package_details();
                        caclulation(billing_type);
                    });
                    function credit_value() {
                        var billing_type = $('#billing_type').val();
                        caclulation(billing_type);
                    }
                    function summery_update() {
                        var host_username = $('#host_username').val();
                        var host_email = $('#host_email').val();
                        var host_domain = $('#host_domain').val();
                        var host_pssword = $('#host_password').val();
                        $('#domain_summery').html(host_domain);
                        $('#username_summery').html(host_username);
                        $('#password_summery').html(host_pssword);
                        $('#email_summery').html(host_email);
                    }

                    function credit_days() {
                        var billing_type = $('#billing_type').val();
                        caclulation(billing_type);
                    }
                    function select_payment_type() {
                       var getVadlue = $('#billing_type').val();
                       if(getVadlue == 'time_limit')
                       {
                          $('#credit_value').hide();
                          $('#date_type').show();
                           caclulation('time_limit');
                       }else if (getVadlue == 'credit_limit'){
                           $('#credit_value').show();
                           $('#date_type').hide();
                           caclulation('credit_limit');
                       }
                    }
                    function caclulation(billin_type) {
                        var package_name = $('#package_selector').val();
                        var credit_value = $('#cvalue').val();
                        var credits_days = $('#credits_days').val();
                        $.get("{{url('')}}/api/cost_calulcate/" + package_name + '/' + billin_type + '/' + credit_value + '/' + credits_days , function(data, status){
                            var my_object = JSON.parse(data);
                            $('#estimate_date_label').html('Estimate Date('+my_object.days +')');
                            $('#estimated_date').html(
                                '<h4>' +
                                    my_object.estimate_date
                                + '</h4>');
                            $('#estimated_cost').html(
                                '<h4> $ ' +
                                my_object.total_calculation
                                + '</h4>'
                                );
                            $('#estimated_cost_input').val(data);

                            $('#estimated_cost_summery').html('$ '+my_object.total_calculation);
                            $('#expire_date_summery').html(my_object.estimate_date);
                            $('#running_days_summery').html(my_object.days+' Days');
                            console.log(my_object);
                        });
                    }
                    function get_package_details() {
                        var package_name = $('#package_selector').val();
                        $.get("{{url('')}}/api/get_package_details/"+package_name, function(data, status){
                            var myObj = JSON.parse(data);
                            $('#server_details_summery').html(
                                '' +
                                '<tr>' +
                                '<th class="w-70" scope="row">Storage</th>' +
                                '<th class="w-30" scope="row">'+myObj.quota+' MB</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<th class="w-70" scope="row">Max FTP</th>' +
                                '<th class="w-30" scope="row">'+myObj.maxftp+'</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<th class="w-70" scope="row">Brand Width Limit</th>' +
                                '<th class="w-30" scope="row">'+myObj.bwlimit+' MB</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<th class="w-70" scope="row">Max SQL</th>' +
                                '<th class="w-30" scope="row">'+myObj.maxsql+'</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<th class="w-70" scope="row">Database</th>' +
                                '<th class="w-30" scope="row">'+myObj.database +'</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<th class="w-70" scope="row">SSL</th>' +
                                '<th class="w-30" scope="row">'+myObj.ssl+'</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<th class="w-70" scope="row">Storage</th>' +
                                '<th class="w-30" scope="row">'+myObj.quota+' MB</th>' +
                                '</tr>' +
                                '<tr>' +
                                '<th class="w-70" scope="row">Cpanel</th>' +
                                '<th class="w-30" scope="row">Cpanel</th>' +
                                '</tr>' +
                                ''
                            );
                            $('#package_summery').html('' +
                                '<tr>' +
                                    '<th class="w-70" scope="row">Storage</th>' +
                                    '<th class="w-30" scope="row">'+myObj.quota+' MB</th>' +
                                '</tr>' +
                                '<tr>' +
                                    '<th class="w-70" scope="row">Max FTP</th>' +
                                    '<th class="w-30" scope="row">'+myObj.maxftp+'</th>' +
                                '</tr>' +
                                '<tr>' +
                                    '<th class="w-70" scope="row">Brand Width Limit</th>' +
                                    '<th class="w-30" scope="row">'+myObj.bwlimit+' MB</th>' +
                                '</tr>' +
                                '<tr>' +
                                    '<th class="w-70" scope="row">Max SQL</th>' +
                                    '<th class="w-30" scope="row">'+myObj.maxsql+'</th>' +
                                '</tr>' +
                                '<tr>' +
                                    '<th class="w-70" scope="row">Database</th>' +
                                    '<th class="w-30" scope="row">'+myObj.database +'</th>' +
                                '</tr>' +
                                '<tr>' +
                                    '<th class="w-70" scope="row">SSL</th>' +
                                    '<th class="w-30" scope="row">'+myObj.ssl+'</th>' +
                                '</tr>' +
                                '<tr>' +
                                    '<th class="w-70" scope="row">Storage</th>' +
                                    '<th class="w-30" scope="row">'+myObj.quota+' MB</th>' +
                                '</tr>' +
                                '<tr>' +
                                    '<th class="w-70" scope="row">Cpanel</th>' +
                                    '<th class="w-30" scope="row">Cpanel</th>' +
                                '</tr>' +
                                '');
                            $('#cost_calulation').html(
                                '<tr>' +
                                    '<tr class="bg-light">' +
                                        '<th class="text-dark text-uppercase" scope="row">Cost Per (24H)</th>' +
                                    '<th class="text-dark font-18" scope="row">$'+myObj.day_cost+'</th> ' +
                                '</tr>');
                            $('#package_summery_cost').html(
                                '<tr>' +
                                '<tr class="bg-light">' +
                                '<th class="text-dark text-uppercase" scope="row">Cost Per (24H)</th>' +
                                '<th class="text-dark font-18" scope="row">$'+myObj.day_cost+'</th> ' +
                                '</tr>');
                            var billing_type = $('#billing_type').val();
                            caclulation(billing_type);
                            console.log('ssss');
                        });
                    }
                    var currentTab = 0;
                    showTab(currentTab);
                    function showTab(n) {
                        var x = document.getElementsByClassName("tab");
                        x[n].style.display = "block";
                        if (n == 0) {
                            document.getElementById("prevBtn").style.display = "none";
                        } else {
                            document.getElementById("prevBtn").style.display = "inline";
                        }
                        if (n == (x.length - 1)) {
                            document.getElementById("nextBtn").innerHTML = "Submit";
                        } else {
                            document.getElementById("nextBtn").innerHTML = "Next";
                        }
                        fixStepIndicator(n)
                    }
                    function nextPrev(n) {
                        var x = document.getElementsByClassName("tab");
                        if (n == 1 && !validateForm()) return false;
                        x[currentTab].style.display = "none";
                        currentTab = currentTab + n;
                        if (currentTab >= x.length) {
                            document.getElementById("regForm").submit();
                            return false;
                        }
                        showTab(currentTab);
                    }
                    function validateForm() {
                        var x, y, i, l, host_email, pssword, valid = true;
                        x = document.getElementsByClassName("tab");
                        y = x[currentTab].getElementsByTagName("input");
                        l = x[currentTab].getElementsByClassName("errr_description");
                        host_email = x[currentTab].getElementsByClassName('host_email');
                        pssword = x[currentTab].getElementsByClassName("pass");
                        var password = $('#host_password').val();
                        var conform_host_password = $('#conform_host_password').val();
                        for (i = 0; i < y.length; i++) {
                            if (y[i].value == "") {
                                y[i].className += " invalid";
                                l[i].innerHTML = "<span style='color:red'> This field required</span>";
                                valid = false;
                            }else{

                            }
                            if (password == conform_host_password)
                            {

                            }else{
                                pssword[i].className += " invalid";
                                pssword[i].innerHTML = "<span style='color:red'>Password not match</span>";
                                valid = false;
                            }
                        }
                        if (valid) {
                            document.getElementsByClassName("step")[currentTab].className += " finish";
                        }
                        return valid;
                    }
                    function fixStepIndicator(n) {
                        var i, x = document.getElementsByClassName("step");
                        for (i = 0; i < x.length; i++) {
                            x[i].className = x[i].className.replace(" active", "");
                        }
                        x[n].className += " active";
                    }

            </script>

            @endpush




        </div>
    </div>




@endsection
