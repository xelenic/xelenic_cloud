<div class="row">
    <div class="col-md-6">
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
                                <th class="w-70" scope="row">Storage</th>
                                <th class="w-30" scope="row">1024 MB</th>
                            </tr>
                            <tr>
                                <td class="w-70">SSL</td>
                                <td class="w-30">Free SSL (LifeTime)</td>
                            </tr>
                            <tr>
                                <td class="w-70">LiteSpeed WebServer</td>
                                <td class="w-30">Yes</td>
                            </tr>
                            <tr>
                                <td class="w-70">DB</td>
                                <td class="w-30">Maria DB (MySQL)</td>
                            </tr>
                            <tr>
                                <td class="w-70">Control Panel</td>
                                <td class="w-30">Cpanel/Xelenic</td>
                            </tr>
                            <tr>
                                <td class="w-70">Backup Servers</td>
                                <td class="w-30">Yes</td>
                            </tr>
                            <tr>
                                <td class="w-70">PHP Version</td>
                                <td class="w-30">Lastest Version</td>
                            </tr>
                            <tr>
                                <td class="w-70">Uptime</td>
                                <td class="w-30">99.99%</td>
                            </tr>
                            </tbody>
                            <tfoot id="cost_calulation">
                            <tr class="bg-light">
                                <th class="text-dark text-uppercase" scope="row">Cost</th>
                                <th class="text-dark font-18" scope="row">24H / $0.006</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Server Name</label>
            <input type="text" name="bucket_name" class="form-control" required>
            <div class="errr_description" style="color: red;"></div>
        </div>
        <div class="form-group">
            <label>Select Package</label>
            <select class="form-control" name="package_name" id="package_selector" onchange="get_package_details()" required>
                @foreach($package_details as $package)
                    <option value="{{$package->name}}">{{$package->name_description}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Billing Type</label>
                    <select name="billing_type" id="billing_type" class="form-control" onchange="select_payment_type()" required>
                        <option value="credit_limit">Credit Limit</option>
                        <option value="time_limit">Time Limit</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <input type="hidden" id="estimated_cost_input" name="estimated_cost_input">
                <div class="form-group" id="credit_value">
                    <label>Your Value</label>
                    <input name="estimated_value" type="number" oninput="credit_value()" min="1" id="cvalue" value="1"  max="{{auth()->user()->credits_value}}" class="form-control"  required>
                </div>
                <div class="form-group" id="date_type" style="display: none;">
                    <label>Days</label>
                    <input type="number" min="1" oninput="credit_days()" id="credits_days" value="1" class="form-control"  required>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h5 style="color: dimgrey;font-size: 15px;">Available Credits</h5>
                        <h4 style="color: dimgrey;">$ {{number_format(auth()->user()->credits_value,2)}}</h4>
                    </div>
                    <div class="col-md-4">
                        <h5 style="color: dimgrey;font-size: 15px;">Estimated Cost</h5>
                        <h4 id="estimated_cost" style="color: dimgrey;">$ 10.00</h4>
                    </div>
                    <div class="col-md-4">
                        <h5 id="estimate_date_label" style="color: dimgrey;font-size: 15px;">Estimated Date</h5>
                        <h4 id="estimated_date" style="color: dimgrey;">2021/03/01</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>