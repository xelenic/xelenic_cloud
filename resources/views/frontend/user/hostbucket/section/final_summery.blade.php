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
                            <tbody id="package_summery">
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
                            <tfoot id="package_summery_cost">
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
        <div class="card">
            <div class="card-body">
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <tbody id="server_details_summery">
                            <tr>
                                <th class="w-70" scope="row">Domain</th>
                                <th class="w-30" scope="row" id="domain_summery">www.google.com/style</th>
                            </tr>
                            <tr>
                                <td class="w-70">Username</td>
                                <td class="w-30" id="username_summery">Xelenic</td>
                            </tr>
                            <tr>
                                <td class="w-70">Password</td>
                                <td class="w-30" id="password_summery">987923sdhfyySDSA</td>
                            </tr>
                            <tr>
                                <td class="w-70">Email</td>
                                <td class="w-30" id="email_summery">sanjayaharasana@gmail.com</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <tfoot id="cost_calulation">
                            <tr class="bg-light">
                                <th class="text-dark text-uppercase" scope="row">Available Credits</th>
                                <th class="text-dark font-18" scope="row">{{auth()->user()->credit_value}}</th>
                            </tr>
                            <tr class="bg-light">
                                <th class="text-dark text-uppercase" scope="row">Estimated Cost</th>
                                <th class="text-dark font-18" id="estimated_cost_summery" scope="row">00</th>
                            </tr>
                            <tr class="bg-light">
                                <th class="text-dark text-uppercase" scope="row">Expire Date</th>
                                <th class="text-dark font-18" id="expire_date_summery" scope="row">00</th>
                            </tr>
                            <tr class="bg-light">
                                <th class="text-dark text-uppercase" scope="row">Server Running Days</th>
                                <th class="text-dark font-18" id="running_days_summery" scope="row">00</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>