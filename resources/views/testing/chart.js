<div class="row mt-4">
<div class="col-md-6">
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">Sales Breakdown</h3>
        </div>
        <div class="card-body">
            <h2 class="mb-3">$<span id="totalSalesDisplay">0</span> <span class="trend-indicator trend-up ml-2">+<span id="totalSalesGrowthDisplay">0</span>%</span></h2>
            <p class="text-muted">All time sales</p>

            <div class="sales-chart">
                <div id="metronicBar" class="sales-metronic"></div>
                <div id="bundleBar" class="sales-bundle"></div>
                <div id="nestBar" class="sales-nest"></div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <div class="d-flex align-items-center">
                    <span class="mr-2" style="width: 10px; height: 10px; background-color: #1bc5bd; display: inline-block; border-radius: 50%;"></span>
                    <span>Metronic (<span id="metronicPercent">0</span>%)</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="mr-2" style="width: 10px; height: 10px; background-color: #f64e60; display: inline-block; border-radius: 50%;"></span>
                    <span>Bundle (<span id="bundlePercent">0</span>%)</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="mr-2" style="width: 10px; height: 10px; background-color: #8950fc; display: inline-block; border-radius: 50%;"></span>
                    <span>MetronicNest (<span id="nestPercent">0</span>%)</span>
                </div>
            </div>

            <hr>

            <div class="mt-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="d-flex align-items-center">
                        <div class="channel-icon">
                            <i class="fas fa-store text-muted"></i>
                        </div>
                        <span>Online Store</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="font-weight-bold mr-2">$<span id="onlineSalesDisplay">0</span></span>
                        <span class="trend-indicator trend-up">+<span id="onlineGrowthDisplay">0</span>%</span>
                    </div>
                </div>
                <div class="progress mb-3">
                    <div id="onlineProgress" class="progress-bar progress-bar-online" role="progressbar" style="width: 0%"></div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="d-flex align-items-center">
                        <div class="channel-icon">
                            <i class="fab fa-facebook-f text-primary"></i>
                        </div>
                        <span>Facebook</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="font-weight-bold mr-2">$<span id="facebookSalesDisplay">0</span></span>
                        <span id="facebookTrendDisplay" class="trend-indicator trend-down">-<span id="facebookGrowthDisplay">0</span>%</span>
                    </div>
                </div>
                <div class="progress mb-3">
                    <div id="facebookProgress" class="progress-bar progress-bar-facebook" role="progressbar" style="width: 0%"></div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="d-flex align-items-center">
                        <div class="channel-icon">
                            <i class="fab fa-instagram text-danger"></i>
                        </div>
                        <span>Instagram</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="font-weight-bold mr-2">$<span id="instagramSalesDisplay">0</span></span>
                        <span class="trend-indicator trend-up">+<span id="instagramGrowthDisplay">0</span>%</span>
                    </div>
                </div>
                <div class="progress">
                    <div id="instagramProgress" class="progress-bar progress-bar-instagram" role="progressbar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">Monthly Performance</h3>
        </div>
        <div class="card-body">
            <canvas id="salesChart" height="250"></canvas>
        </div>
    </div>
</div>
</div>

const salesData = {
    totalSales: 999999999,
    totalSalesGrowth: 12.5,

    // Product breakdown percentages
    products: {
        metronic: 5,
        bundle: 90,
        nest: 5
    },

    // Sales channels
    channels: {
        online: {
            sales: 275379,
            growth: 15.3,
            percentage: 60
        },
        facebook: {
            sales: 91793,
            growth: 8.2,
            percentage: 20,
            trending: 'down' // 'up' or 'down'
        },
        instagram: {
            sales: 91793,
            growth: 22.7,
            percentage: 20
        }
    },

    // Monthly performance data for chart
    monthlyData: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
            {
                label: 'This Year',
                data: [30000, 35000, 42000, 48000, 52000, 58000, 62000, 65000, 68000, 72000, 76000, 82000],
                borderColor: '#1bc5bd',
                backgroundColor: 'rgba(27, 197, 189, 0.1)',
                fill: true
            },
            {
                label: 'Last Year',
                data: [25000, 28000, 32000, 38000, 42000, 45000, 48000, 51000, 54000, 57000, 60000, 65000],
                borderColor: '#8950fc',
                backgroundColor: 'rgba(137, 80, 252, 0.1)',
                fill: true
            }
        ]
    }
};

// Format numbers with commas
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Update text display values
document.getElementById('totalSalesDisplay').textContent = formatNumber(salesData.totalSales);
document.getElementById('totalSalesGrowthDisplay').textContent = salesData.totalSalesGrowth;

// Update product percentages
document.getElementById('metronicPercent').textContent = salesData.products.metronic;
document.getElementById('bundlePercent').textContent = salesData.products.bundle;
document.getElementById('nestPercent').textContent = salesData.products.nest;

// Update sales bars (simplified visual representation)
document.getElementById('metronicBar').style.width = salesData.products.metronic + '%';
document.getElementById('bundleBar').style.width = salesData.products.bundle + '%';
document.getElementById('nestBar').style.width = salesData.products.nest + '%';

// Update sales channels
document.getElementById('onlineSalesDisplay').textContent = formatNumber(salesData.channels.online.sales);
document.getElementById('onlineGrowthDisplay').textContent = salesData.channels.online.growth;
document.getElementById('onlineProgress').style.width = salesData.channels.online.percentage + '%';

document.getElementById('facebookSalesDisplay').textContent = formatNumber(salesData.channels.facebook.sales);
document.getElementById('facebookGrowthDisplay').textContent = salesData.channels.facebook.growth;
document.getElementById('facebookProgress').style.width = salesData.channels.facebook.percentage + '%';

// Update Facebook trend indicator (up or down)
if (salesData.channels.facebook.trending === 'up') {
    document.getElementById('facebookTrendDisplay').className = 'trend-indicator trend-up';
    document.getElementById('facebookTrendDisplay').innerHTML = '+<span id="facebookGrowthDisplay">' + salesData.channels.facebook.growth + '</span>%';
} else {
    document.getElementById('facebookTrendDisplay').className = 'trend-indicator trend-down';
    document.getElementById('facebookTrendDisplay').innerHTML = '-<span id="facebookGrowthDisplay">' + salesData.channels.facebook.growth + '</span>%';
}

document.getElementById('instagramSalesDisplay').textContent = formatNumber(salesData.channels.instagram.sales);
document.getElementById('instagramGrowthDisplay').textContent = salesData.channels.instagram.growth;
document.getElementById('instagramProgress').style.width = salesData.channels.instagram.percentage + '%';

// Initialize Chart.js for sales chart
function initializeChart() {
    const ctx = document.getElementById('salesChart').getContext('2d');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: salesData.monthlyData.labels,
            datasets: salesData.monthlyData.datasets
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return '$' + value.toLocaleString();
                        }
                    }
                }
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            plugins: {
                legend: {
                    position: 'bottom'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': $' + context.raw.toLocaleString();
                        }
                    }
                }
            }
        }
    });
}

// Initialize chart when DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeChart();
});

@push('addon-style')
<style>
    .card-custom {
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
        transition: transform 0.3s;
    }
    .card-custom:hover {
        transform: translateY(-5px);
    }
    .symbol {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }
    .symbol-light-success {
        background-color: rgba(27, 197, 189, 0.15);
    }
    .symbol-light-primary {
        background-color: rgba(54, 153, 255, 0.15);
    }
    .symbol-light-danger {
        background-color: rgba(246, 78, 96, 0.15);
    }
    .symbol-light-warning {
        background-color: rgba(255, 184, 34, 0.15);
    }
    .card-spacer {
        padding: 1.5rem;
    }
    .progress {
        height: 10px;
        margin-top: 10px;
    }
    .trend-indicator {
        display: inline-flex;
        align-items: center;
        padding: 2px 8px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: bold;
    }
    .trend-up {
        background-color: rgba(27, 197, 189, 0.15);
        color: #1bc5bd;
    }
    .trend-down {
        background-color: rgba(246, 78, 96, 0.15);
        color: #f64e60;
    }
    .sales-chart {
        height: 10px;
        margin: 10px 0 20px 0;
        border-radius: 5px;
        overflow: hidden;
        display: flex;
    }
    .sales-metronic {
        background-color: #1bc5bd;
        height: 100%;
        width: 58%;
    }
    .sales-bundle {
        background-color: #f64e60;
        height: 100%;
        width: 27%;
    }
    .sales-nest {
        background-color: #8950fc;
        height: 100%;
        width: 15%;
    }
    .channel-icon {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: #f8f9fa;
        margin-right: 10px;
    }
</style>
@endpush