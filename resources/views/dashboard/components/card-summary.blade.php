<div class="row">
    <!-- Total Revenue -->
    <div class="col-md-3">
        <div class="card card-custom" style="border-radius: 8px; position: relative;">
            <div class="card-body p-4">
                <div style="position: absolute; top: 15px; right: 15px; color: #1bc5bd;">
                    <span id="total-revenue-percentage"></span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div style="width: 36px; height: 36px; background-color: #e8fff3; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                        <i class="fas fa-money-bill" style="color: #1bc5bd;"></i>
                    </div>
                    <span class="text-muted">Total Revenue</span>
                </div>
                <h3 class="mb-0 font-weight-bold" id="total-revenue">0</h3>
                <div class="mt-2">
                    <span class="text-success" id="total-revenue-lastweek"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Transactions -->
    <div class="col-md-3">
        <div class="card card-custom" style="border-radius: 8px;">
            <div class="card-body p-4">
                <div style="position: absolute; top: 15px; right: 15px; color: #1bc5bd;">
                    <span id="total-transactions-percentage"></span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div style="width: 36px; height: 36px; background-color: #e8fff3; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                        <i class="fas fa-chart-bar" style="color: #1bc5bd;"></i>
                    </div>
                    <span class="text-muted">Total Transactions</span>
                </div>
                <h3 class="mb-0 font-weight-bold" id="total-transactions">0</h3>
                <div class="mt-2">
                    <span class="text-success" id="total-transactions-lastweek"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Registered Companies -->
    <div class="col-md-3">
        <div class="card card-custom" style="border-radius: 8px;">
            <div class="card-body p-4">
                <div style="position: absolute; top: 15px; right: 15px; color: #1bc5bd;">
                    <span id="total-registered-percentage"></span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div style="width: 36px; height: 36px; background-color: #eee5ff; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                        <i class="fas fa-user" style="color: #8950fc;"></i>
                    </div>
                    <span class="text-muted">Registered Companies</span>
                </div>
                <h3 class="mb-0 font-weight-bold" id="total-registered">0</h3>
                <div class="mt-2">
                    <span class="text-success" id="total-registered-lastmonth"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Rate -->
    <div class="col-md-3">
        <div class="card card-custom" style="border-radius: 8px;">
            <div class="card-body p-4">
                <div style="position: absolute; top: 15px; right: 15px; color: #1bc5bd;">
                    <span id="success-rate-percentage"></span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div style="width: 36px; height: 36px; background-color: #f3e6ff; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                        <i class="fas fa-check" style="color: #8950fc;"></i>
                    </div>
                    <span class="text-muted">Success Rate</span>
                </div>
                <h3 class="mb-0 font-weight-bold" id="success-rate">0</h3>
                <div class="mt-2">
                    <span class="text-success" id="success-rate-lastweek"></span>
                </div>
            </div>
        </div>
    </div>
</div>
@push('addon-script')
    <script>
        /*
        $(document).ready(function() {
            $('#filterCompany').change(function() {
                var company_id = $(this).val();
                var merchant_id = $('#filterMerchant').val();
                window.location.href = "{{ route('merchant-bank.index') }}?company_id=" + company_id + "&merchant_id=" + merchant_id;
            });

            $('#filterMerchant').change(function() {
                var company_id = $('#filterCompany').val();
                var merchant_id = $(this).val();
                window.location.href = "{{ route('merchant-bank.index') }}?company_id=" + company_id + "&merchant_id=" + merchant_id;
            });
        });
        */
        function formatRupiah(amount) {
            return amount.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0, // Rupiah doesn't use cents
            });
        }

        function formatNumber(amount) {
            return amount.toLocaleString("id-ID"); // Format number with thousands separator
        }

        function calculateSuccessRate(success, total) {
            return total > 0 ? ((success / total) * 100).toFixed(1) : 0;
        }

        function loadDashboardStats() {
            company = $("#company_id").val() ?? '';

            $.ajax({
                url: "{{ route('admin.dashboard.summary') }}",
                method: "POST",
                data: {
                    company: company,
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function (response) {
                    /*
                    $("#selected-range-revenue").text(`↑ $${response.selected_range_revenue.toLocaleString()} vs ${timeRange.replace('_', ' ')}`);
                    $("#conversion-rate").text(`${response.conversion_rate}%`);
                    $("#average-order-value").text(`$${response.average_order_value.toFixed(2)}`);
                    $("#repeat-customers").text(`${response.repeat_customers}%`);
                    */

                    /*** TOTAL REVENUE ***/
                    let totalRevenue = parseFloat(response.total_revenue);
                    let lastWeekRevenue = parseFloat(response.last_week_revenue);
                    let revenueDifference = Math.abs(totalRevenue - lastWeekRevenue);
                    let formatDifference = formatRupiah(revenueDifference);
                    let percentageChange = lastWeekRevenue > 0 ? ((revenueDifference / lastWeekRevenue) * 100).toFixed(1) : 0;

                    $("#total-revenue").text(`${formatRupiah(response.total_revenue)}`);

                    if (totalRevenue > lastWeekRevenue) {
                        $("#total-revenue-lastweek")
                            .removeClass("text-danger")
                            .addClass("text-success")
                            .html(`↑ ${formatDifference} vs last week`);

                        $("#total-revenue-percentage")
                            .removeClass("text-danger")
                            .addClass("text-success")
                            .text(`↑ ${percentageChange}%`);
                    } else if (totalRevenue < lastWeekRevenue) {
                        $("#total-revenue-lastweek")
                            .removeClass("text-success")
                            .addClass("text-danger")
                            .html(`↓ ${formatDifference} vs last week`);

                        $("#total-revenue-percentage")
                            .removeClass("text-success")
                            .addClass("text-danger")
                            .text(`↓ ${percentageChange}%`);
                    } else {
                        $("#total-revenue-lastweek")
                            .removeClass("text-success text-danger")
                            .addClass("text-muted")
                            .html(`No change vs last week`);

                        $("#total-revenue-percentage")
                            .removeClass("text-success text-danger")
                            .addClass("text-muted").text('')
                    }

                    /*** TOTAL TRANSACTIONS ***/
                    let totalTransactions = parseInt(response.count_transactions);
                    let lastWeekTransactions = parseInt(response.last_week_transactions);
                    let transactionDifference = Math.abs(totalTransactions - lastWeekTransactions);
                    let formatDifferenceTransactions = formatNumber(transactionDifference);
                    let percentageChangeTransactions = lastWeekTransactions > 0 ? ((transactionDifference / lastWeekTransactions) * 100).toFixed(1) : 0;

                    $("#total-transactions").text(`${formatNumber(response.count_transactions)}`);

                    if (totalTransactions > lastWeekTransactions) {
                        $("#total-transactions-lastweek")
                            .removeClass("text-danger")
                            .addClass("text-success")
                            .html(`↑ ${formatDifferenceTransactions} vs last week`);

                        $("#total-transactions-percentage")
                            .removeClass("text-danger")
                            .addClass("text-success")
                            .text(`↑ ${percentageChangeTransactions}%`);
                    } else if (totalTransactions < lastWeekTransactions) {
                        $("#total-transactions-lastweek")
                            .removeClass("text-success")
                            .addClass("text-danger")
                            .html(`↓ ${formatDifferenceTransactions} vs last week`);

                        $("#total-transactions-percentage")
                            .removeClass("text-success")
                            .addClass("text-danger")
                            .text(`↓ ${percentageChangeTransactions}%`);
                    } else {
                        $("#total-transactions-lastweek")
                            .removeClass("text-success text-danger")
                            .addClass("text-muted")
                            .html(`No change vs last week`);

                        $("#total-transactions-percentage")
                            .removeClass("text-success text-danger")
                            .addClass("text-muted")
                            .text('');
                    }

                    /*** TOTAL REGISTERED COMPANIES ***/
                    let totalRegistered = parseInt(response.count_companies);
                    let lastMonthRegistered = parseInt(response.last_month_companies);
                    let registeredDifference = Math.abs(totalRegistered - lastMonthRegistered);
                    let formatDifferenceRegistered = formatNumber(registeredDifference);
                    let percentageChangeRegistered = lastMonthRegistered > 0 ? ((registeredDifference / lastMonthRegistered) * 100).toFixed(1) : 0;

                    $("#total-registered").text(`${formatNumber(response.count_companies)}`);

                    if (totalRegistered > lastMonthRegistered) {
                        $("#total-registered-lastmonth")
                            .removeClass("text-danger")
                            .addClass("text-success")
                            .html(`↑ ${formatDifferenceRegistered} vs last month`);

                        $("#total-registered-percentage")
                            .removeClass("text-danger")
                            .addClass("text-success")
                            .text(`↑ ${percentageChangeRegistered}%`);
                    } else if (totalRegistered < lastMonthRegistered) {
                        $("#total-registered-lastmonth")
                            .removeClass("text-success")
                            .addClass("text-danger")
                            .html(`↓ ${formatDifferenceRegistered} vs last month`);

                        $("#total-registered-percentage")
                            .removeClass("text-success")
                            .addClass("text-danger")
                            .text(`↓ ${percentageChangeRegistered}%`);
                    } else {
                        $("#total-registered-lastmonth")
                            .removeClass("text-success text-danger")
                            .addClass("text-muted")
                            .html(`No change vs last month`);

                        $("#total-registered-percentage")
                            .removeClass("text-success text-danger")
                            .addClass("text-muted")
                            .text('');

                    }
                    /*** SUCCESS RATE ***/
                    let successTransactions = parseInt(response.count_success_transactions);
                    let counttotalTransactions = parseInt(response.count_all_transactions);
                    let lastWeekSuccessTransactions = parseInt(response.last_week_success_transactions);
                    let lastWeekTotalTransactions = parseInt(response.last_week_all_transactions);

                    let successRate = calculateSuccessRate(successTransactions, counttotalTransactions);
                    let lastWeekSuccessRate = calculateSuccessRate(lastWeekSuccessTransactions, lastWeekTotalTransactions);
                    let successRateDifference = Math.abs(successRate - lastWeekSuccessRate);
                    let percentageChangeSuccessRate = lastWeekSuccessRate > 0 ? ((successRateDifference / lastWeekSuccessRate) * 100).toFixed(1) : 0;

                    $("#success-rate").text(`${successRate}%`);

                    if (successRate > lastWeekSuccessRate) {
                        $("#success-rate-lastweek")
                            .removeClass("text-danger")
                            .addClass("text-success")
                            .html(`↑ ${successRateDifference}% vs last week`);

                        $("#success-rate-percentage")
                            .removeClass("text-danger")
                            .addClass("text-success")
                            .text(`↑ ${percentageChangeSuccessRate}%`);
                    } else if (successRate < lastWeekSuccessRate) {
                        $("#success-rate-lastweek")
                            .removeClass("text-success")
                            .addClass("text-danger")
                            .html(`↓ ${successRateDifference}% vs last week`);

                        $("#success-rate-percentage")
                            .removeClass("text-success")
                            .addClass("text-danger")
                            .text(`↓ ${percentageChangeSuccessRate}%`);
                    } else {
                        $("#success-rate-lastweek")
                            .removeClass("text-success text-danger")
                            .addClass("text-muted")
                            .html(`No change vs last week`);

                        $("#success-rate-percentage")
                            .removeClass("text-success text-danger")
                            .addClass("text-muted")
                            .text('');
                    }
                },

                error: function () {
                    console.error("Failed to fetch dashboard statistics.");
                }
            });
        }

        $(document).ready(function() {
            loadDashboardStats();
        });
    </script>
@endpush
