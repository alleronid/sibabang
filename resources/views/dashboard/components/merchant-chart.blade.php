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
        <div id="chartMer_1"></div>
        <!--end::Chart-->
    </div>
</div>
<!--end::Card-->

@push('addon-script')
    <script>
        var KTApexChartsDemo = function () {
            var chart;

            var _demo1 = function (data, categories) {
                const apexChart = "#chartMer_1";
                var options = {
                    series: [{
                        name: "Transaction",
                        data: data
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
                            colors: ['#f3f3f3', 'transparent'],
                            opacity: 0.5
                        },
                    },
                    xaxis: {
                        categories: categories,
                    },
                    colors: ['#4F46E5']
                };

                chart = new ApexCharts(document.querySelector(apexChart), options);
                chart.render();
            }

            return {
                init: function (data, categories) {
                    _demo1(data, categories);
                },
                update: function (data, categories) {
                    chart.updateOptions({
                        series: [{
                            data: data
                        }],
                        xaxis: {
                            categories: categories
                        }
                    });
                }
            };
        }();

        document.addEventListener('DOMContentLoaded', function() {
            KTApexChartsDemo.init([], []);
        });

        function updateChart(data, categories) {
            KTApexChartsDemo.update(data, categories);
        }
    </script>
@endpush
