<div class="row" style="margin-top: 20px;">
    <div class="col-md-3">
        <div class="card card-sm">
            <div class="card-body">
                <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Current Credits</span>
                <div class="d-flex align-items-end justify-content-between">
                    <div>
                        <span class="d-block">
                            <span class="display-5 font-weight-400 text-dark">${{number_format(auth()->user()->credits_value,2)}}</span>
                            <small>Available Credits</small>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-sm">
            <div class="card-body">
                <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Purchased Services</span>
                <div class="d-flex align-items-end justify-content-between">
                    <div>
                        <span class="d-block">
                            <span class="display-5 font-weight-400 text-dark">00</span>
                            <small>Available Credits</small>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>