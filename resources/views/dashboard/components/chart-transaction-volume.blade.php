<!--begin::Card-->
<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header h-auto">
        <!--begin::Title-->
        <div class="card-title py-5">
            <h3 class="card-label">Transaction Volume</h3>
        </div>
        <!--end::Title-->
    </div>
    <!--end::Header-->
    <div class="card-body">
        <!--begin::Chart-->
        <div id="chart_1"></div>
        <!--end::Chart-->
    </div>
</div>
<!--end::Card-->

@push('addon-script')
    <script>
        var KTApexChartsDemo = function () {
            // Private functions
            var _demo1 = function () {
                const apexChart = "#chart_1";
                var options = {
                    series: [{
                        name: "Desktops",
                        data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                    }],
                    chart: {
                        height: 350,
                        type: 'line',
                        zoom: {
                            enabled: false
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'straight'
                    },
                    grid: {
                        row: {
                            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                            opacity: 0.5
                        },
                    },
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                    },
                    colors: [primary]
                };

                var chart = new ApexCharts(document.querySelector(apexChart), options);
                chart.render();
            }

            return {
                // public functions
                init: function () {
                    _demo1();
                }
            };
        }();

        // Initialize chart when DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            KTApexChartsDemo.init();
        });
    </script>
@endpush
