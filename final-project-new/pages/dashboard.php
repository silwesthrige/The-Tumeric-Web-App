<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<!-- Stats Cards -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="stats-number">1,247</div>
            <div class="stats-label">Total Orders</div>
            <i class="fas fa-shopping-cart stats-icon"></i>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card success">
            <div class="stats-number">$45,230</div>
            <div class="stats-label">Today's Revenue</div>
            <i class="fas fa-rupee-sign stats-icon"></i>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card warning">
            <div class="stats-number">23</div>
            <div class="stats-label">Pending Deliveries</div>
            <i class="fas fa-truck stats-icon"></i>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card info">
            <div class="stats-number">4.8</div>
            <div class="stats-label">Average Rating</div>
            <i class="fas fa-star stats-icon"></i>
        </div>
    </div>
</div>

<!-- Charts and Recent Activity -->
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-chart-line me-2"></i>Sales Overview
                </h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="salesChart" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-clock me-2"></i>Recent Orders
                </h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <div>
                            <h6 class="mb-1">Order #1234</h6>
                            <p class="mb-1 text-muted small">Chicken Biryani x2</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                        <span class="badge bg-warning rounded-pill">Pending</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <div>
                            <h6 class="mb-1">Order #1235</h6>
                            <p class="mb-1 text-muted small">Pizza Margherita</p>
                            <small class="text-muted">5 minutes ago</small>
                        </div>
                        <span class="badge bg-primary rounded-pill">Preparing</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <div>
                            <h6 class="mb-1">Order #1236</h6>
                            <p class="mb-1 text-muted small">Burger Combo</p>
                            <small class="text-muted">8 minutes ago</small>
                        </div>
                        <span class="badge bg-success rounded-pill">Ready</span>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="index.php?page=orders" class="btn btn-outline-primary btn-sm">View All Orders</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-bolt me-2"></i>Quick Actions
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <a href="index.php?page=orders" class="btn btn-outline-primary w-100 h-100 d-flex flex-column justify-content-center">
                            <i class="fas fa-plus fa-2x mb-2"></i>
                            <span>New Order</span>
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="index.php?page=menu" class="btn btn-outline-success w-100 h-100 d-flex flex-column justify-content-center">
                            <i class="fas fa-utensils fa-2x mb-2"></i>
                            <span>Add Menu Item</span>
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="index.php?page=promotions" class="btn btn-outline-warning w-100 h-100 d-flex flex-column justify-content-center">
                            <i class="fas fa-percentage fa-2x mb-2"></i>
                            <span>Create Promotion</span>
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="index.php?page=reports" class="btn btn-outline-info w-100 h-100 d-flex flex-column justify-content-center">
                            <i class="fas fa-chart-bar fa-2x mb-2"></i>
                            <span>View Reports</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Simple chart implementation (you can replace with Chart.js or similar)
document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('salesChart');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        
        // Simple line chart simulation
        canvas.width = canvas.offsetWidth;
        canvas.height = 300;
        
        ctx.strokeStyle = '#ff6b6b';
        ctx.lineWidth = 3;
        ctx.beginPath();
        
        const points = [
            {x: 50, y: 200},
            {x: 150, y: 150},
            {x: 250, y: 100},
            {x: 350, y: 120},
            {x: 450, y: 80},
            {x: 550, y: 60}
        ];
        
        ctx.moveTo(points[0].x, points[0].y);
        for (let i = 1; i < points.length; i++) {
            ctx.lineTo(points[i].x, points[i].y);
        }
        ctx.stroke();
        
        // Add some styling text
        ctx.fillStyle = '#666';
        ctx.font = '14px Arial';
        ctx.fillText('Sales trend for the last 6 months', 50, 30);
    }
});
</script>