<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Analytics Dashboard</h1>
</div>

<!-- Key Metrics -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="stats-number">$1,24,750</div>
            <div class="stats-label">Total Revenue</div>
            <div class="stats-change text-success">
                <i class="fas fa-arrow-up me-1"></i>+12.5%
            </div>
            <i class="fas fa-rupee-sign stats-icon"></i>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card success">
            <div class="stats-number">1,247</div>
            <div class="stats-label">Total Orders</div>
            <div class="stats-change text-success">
                <i class="fas fa-arrow-up me-1"></i>+8.2%
            </div>
            <i class="fas fa-shopping-cart stats-icon"></i>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card warning">
            <div class="stats-number">$385</div>
            <div class="stats-label">Avg Order Value</div>
            <div class="stats-change text-danger">
                <i class="fas fa-arrow-down me-1"></i>-2.1%
            </div>
            <i class="fas fa-chart-line stats-icon"></i>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card info">
            <div class="stats-number">892</div>
            <div class="stats-label">Active Customers</div>
            <div class="stats-change text-success">
                <i class="fas fa-arrow-up me-1"></i>+15.3%
            </div>
            <i class="fas fa-users stats-icon"></i>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="row mb-4">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-chart-area me-2"></i>Revenue Trend
                </h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="revenueChart" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-chart-pie me-2"></i>Order Status Distribution
                </h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="orderStatusChart" style="height: 300px;"></canvas>
                </div>
                <div class="mt-3">
                    <div class="d-flex justify-content-between mb-2">
                        <span><i class="fas fa-circle text-success me-2"></i>Delivered</span>
                        <strong>68%</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span><i class="fas fa-circle text-primary me-2"></i>Preparing</span>
                        <strong>18%</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span><i class="fas fa-circle text-warning me-2"></i>Pending</span>
                        <strong>10%</strong>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span><i class="fas fa-circle text-danger me-2"></i>Cancelled</span>
                        <strong>4%</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Performance Metrics -->
<div class="row mb-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-utensils me-2"></i>Top Selling Items
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Orders</th>
                                <th>Revenue</th>
                                <th>Trend</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.pexels.com/photos/1893556/pexels-photo-1893556.jpeg?auto=compress&cs=tinysrgb&w=40&h=40&fit=crop" 
                                             alt="Biryani" class="rounded me-2" width="30" height="30">
                                        <span>Chicken Biryani</span>
                                    </div>
                                </td>
                                <td><strong>156</strong></td>
                                <td><strong>₹31,200</strong></td>
                                <td><span class="text-success"><i class="fas fa-arrow-up"></i> +12%</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg?auto=compress&cs=tinysrgb&w=40&h=40&fit=crop" 
                                             alt="Pizza" class="rounded me-2" width="30" height="30">
                                        <span>Pizza Margherita</span>
                                    </div>
                                </td>
                                <td><strong>124</strong></td>
                                <td><strong>₹39,680</strong></td>
                                <td><span class="text-success"><i class="fas fa-arrow-up"></i> +8%</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&w=40&h=40&fit=crop" 
                                             alt="Burger" class="rounded me-2" width="30" height="30">
                                        <span>Burger Combo</span>
                                    </div>
                                </td>
                                <td><strong>98</strong></td>
                                <td><strong>₹27,440</strong></td>
                                <td><span class="text-danger"><i class="fas fa-arrow-down"></i> -3%</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&w=40&h=40&fit=crop" 
                                             alt="Pasta" class="rounded me-2" width="30" height="30">
                                        <span>Pasta Alfredo</span>
                                    </div>
                                </td>
                                <td><strong>87</strong></td>
                                <td><strong>₹21,750</strong></td>
                                <td><span class="text-success"><i class="fas fa-arrow-up"></i> +15%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-clock me-2"></i>Peak Hours Analysis
                </h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="peakHoursChart" style="height: 250px;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Customer Analytics -->
<div class="row mb-4">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-user-plus me-2"></i>Customer Acquisition
                </h5>
            </div>
            <div class="card-body text-center">
                <div class="mb-3">
                    <h3 class="text-primary">156</h3>
                    <p class="text-muted">New customers this month</p>
                </div>
                <div class="progress mb-3" style="height: 10px;">
                    <div class="progress-bar bg-primary" style="width: 78%"></div>
                </div>
                <small class="text-muted">78% of monthly target achieved</small>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-redo me-2"></i>Customer Retention
                </h5>
            </div>
            <div class="card-body text-center">
                <div class="mb-3">
                    <h3 class="text-success">72%</h3>
                    <p class="text-muted">Returning customers</p>
                </div>
                <div class="progress mb-3" style="height: 10px;">
                    <div class="progress-bar bg-success" style="width: 72%"></div>
                </div>
                <small class="text-muted">Above industry average (65%)</small>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-star me-2"></i>Customer Satisfaction
                </h5>
            </div>
            <div class="card-body text-center">
                <div class="mb-3">
                    <h3 class="text-warning">4.8</h3>
                    <p class="text-muted">Average rating</p>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </div>
                <small class="text-muted">Based on 1,247 reviews</small>
            </div>
        </div>
    </div>
</div>

<!-- Delivery Analytics -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-truck me-2"></i>Delivery Performance
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <h4 class="text-primary">18 min</h4>
                        <p class="text-muted">Average Delivery Time</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <h4 class="text-success">96.5%</h4>
                        <p class="text-muted">On-Time Delivery Rate</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <h4 class="text-info">2.3 km</h4>
                        <p class="text-muted">Average Distance</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <h4 class="text-warning">$25</h4>
                        <p class="text-muted">Average Delivery Cost</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.stats-change {
    font-size: 0.875rem;
    font-weight: 600;
    margin-top: 5px;
}

.chart-container canvas {
    max-height: 300px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart');
    if (revenueCtx) {
        const ctx = revenueCtx.getContext('2d');
        
        // Simple line chart simulation
        revenueCtx.width = revenueCtx.offsetWidth;
        revenueCtx.height = 300;
        
        ctx.strokeStyle = '#ff6b6b';
        ctx.lineWidth = 3;
        ctx.beginPath();
        
        const revenuePoints = [
            {x: 50, y: 250}, {x: 150, y: 200}, {x: 250, y: 180},
            {x: 350, y: 160}, {x: 450, y: 140}, {x: 550, y: 100},
            {x: 650, y: 80}
        ];
        
        ctx.moveTo(revenuePoints[0].x, revenuePoints[0].y);
        for (let i = 1; i < revenuePoints.length; i++) {
            ctx.lineTo(revenuePoints[i].x, revenuePoints[i].y);
        }
        ctx.stroke();
        
        // Add labels
        ctx.fillStyle = '#666';
        ctx.font = '12px Arial';
        ctx.fillText('Revenue trend over the last 7 days', 50, 30);
    }
    
    // Order Status Pie Chart
    const statusCtx = document.getElementById('orderStatusChart');
    if (statusCtx) {
        const ctx = statusCtx.getContext('2d');
        
        statusCtx.width = statusCtx.offsetWidth;
        statusCtx.height = 300;
        
        const centerX = statusCtx.width / 2;
        const centerY = statusCtx.height / 2;
        const radius = 80;
        
        const data = [
            {label: 'Delivered', value: 68, color: '#28a745'},
            {label: 'Preparing', value: 18, color: '#007bff'},
            {label: 'Pending', value: 10, color: '#ffc107'},
            {label: 'Cancelled', value: 4, color: '#dc3545'}
        ];
        
        let currentAngle = 0;
        
        data.forEach(segment => {
            const sliceAngle = (segment.value / 100) * 2 * Math.PI;
            
            ctx.beginPath();
            ctx.moveTo(centerX, centerY);
            ctx.arc(centerX, centerY, radius, currentAngle, currentAngle + sliceAngle);
            ctx.closePath();
            ctx.fillStyle = segment.color;
            ctx.fill();
            
            currentAngle += sliceAngle;
        });
    }
    
    // Peak Hours Chart
    const peakCtx = document.getElementById('peakHoursChart');
    if (peakCtx) {
        const ctx = peakCtx.getContext('2d');
        
        peakCtx.width = peakCtx.offsetWidth;
        peakCtx.height = 250;
        
        const hours = ['9AM', '12PM', '3PM', '6PM', '9PM'];
        const orders = [20, 45, 30, 80, 65];
        const barWidth = 40;
        const spacing = 60;
        
        ctx.fillStyle = '#4ecdc4';
        
        orders.forEach((orderCount, index) => {
            const barHeight = (orderCount / 100) * 150;
            const x = 50 + index * spacing;
            const y = 200 - barHeight;
            
            ctx.fillRect(x, y, barWidth, barHeight);
            
            // Add labels
            ctx.fillStyle = '#666';
            ctx.font = '12px Arial';
            ctx.fillText(hours[index], x + 5, 220);
            ctx.fillText(orderCount, x + 15, y - 5);
            ctx.fillStyle = '#4ecdc4';
        });
    }
});
</script>