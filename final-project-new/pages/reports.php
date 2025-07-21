<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Reports & Analytics</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#generateReportModal">
            <i class="fas fa-plus me-1"></i>Generate Report
        </button>
    </div>
</div>

<!-- Quick Report Cards -->
<div class="row mb-4">
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card report-card" data-report="sales">
            <div class="card-body text-center">
                <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                <h5 class="card-title">Sales Report</h5>
                <p class="card-text">Revenue, orders, and trends</p>
                <button class="btn btn-primary btn-sm">Generate</button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card report-card" data-report="inventory">
            <div class="card-body text-center">
                <i class="fas fa-boxes fa-3x text-success mb-3"></i>
                <h5 class="card-title">Inventory Report</h5>
                <p class="card-text">Stock levels and usage</p>
                <button class="btn btn-success btn-sm">Generate</button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card report-card" data-report="customer">
            <div class="card-body text-center">
                <i class="fas fa-users fa-3x text-info mb-3"></i>
                <h5 class="card-title">Customer Report</h5>
                <p class="card-text">Customer analytics and behavior</p>
                <button class="btn btn-info btn-sm">Generate</button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card report-card" data-report="financial">
            <div class="card-body text-center">
                <i class="fas fa-rupee-sign fa-3x text-warning mb-3"></i>
                <h5 class="card-title">Financial Report</h5>
                <p class="card-text">Profit, expenses, and taxes</p>
                <button class="btn btn-warning btn-sm">Generate</button>
            </div>
        </div>
    </div>
</div>

<!-- Recent Reports -->
<div class="card mb-4">
    <div class="card-header">
        <h5 class="card-title mb-0">
            <i class="fas fa-history me-2"></i>Recent Reports
        </h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Report Name</th>
                        <th>Type</th>
                        <th>Date Range</th>
                        <th>Generated</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <strong>Monthly Sales Summary</strong><br>
                                <small class="text-muted">December 2024 sales analysis</small>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">Sales</span></td>
                        <td>Dec 1 - Dec 31, 2024</td>
                        <td>
                            <div>
                                <strong>Today, 10:30 AM</strong><br>
                                <small class="text-muted">by Admin User</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Ready</span></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary">
                                    <i class="fas fa-download"></i>
                                </button>
                                <button class="btn btn-outline-info">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <strong>Customer Behavior Analysis</strong><br>
                                <small class="text-muted">Q4 customer insights</small>
                            </div>
                        </td>
                        <td><span class="badge bg-info">Customer</span></td>
                        <td>Oct 1 - Dec 31, 2024</td>
                        <td>
                            <div>
                                <strong>Yesterday, 3:45 PM</strong><br>
                                <small class="text-muted">by Admin User</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Ready</span></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary">
                                    <i class="fas fa-download"></i>
                                </button>
                                <button class="btn btn-outline-info">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <strong>Inventory Status Report</strong><br>
                                <small class="text-muted">Current stock levels</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Inventory</span></td>
                        <td>Real-time</td>
                        <td>
                            <div>
                                <strong>2 days ago, 9:15 AM</strong><br>
                                <small class="text-muted">by Kitchen Manager</small>
                            </div>
                        </td>
                        <td><span class="badge bg-warning">Processing</span></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-secondary" disabled>
                                    <i class="fas fa-clock"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Report Dashboard -->
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-chart-area me-2"></i>Sales Performance Overview
                </h5>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-3 text-center">
                        <h4 class="text-primary">₹1,24,750</h4>
                        <p class="text-muted">Total Revenue</p>
                        <small class="text-success"><i class="fas fa-arrow-up"></i> +12.5%</small>
                    </div>
                    <div class="col-md-3 text-center">
                        <h4 class="text-success">1,247</h4>
                        <p class="text-muted">Total Orders</p>
                        <small class="text-success"><i class="fas fa-arrow-up"></i> +8.2%</small>
                    </div>
                    <div class="col-md-3 text-center">
                        <h4 class="text-warning">₹385</h4>
                        <p class="text-muted">Avg Order Value</p>
                        <small class="text-danger"><i class="fas fa-arrow-down"></i> -2.1%</small>
                    </div>
                    <div class="col-md-3 text-center">
                        <h4 class="text-info">96.5%</h4>
                        <p class="text-muted">Order Success Rate</p>
                        <small class="text-success"><i class="fas fa-arrow-up"></i> +1.2%</small>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="salesOverviewChart" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-trophy me-2"></i>Top Performing Items
                </h5>
            </div>
            <div class="card-body">
                <div class="top-item mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="rank-badge me-3">1</div>
                            <div>
                                <strong>Chicken Biryani</strong><br>
                                <small class="text-muted">156 orders</small>
                            </div>
                        </div>
                        <div class="text-end">
                            <strong>₹31,200</strong><br>
                            <small class="text-success">+12%</small>
                        </div>
                    </div>
                </div>
                <div class="top-item mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="rank-badge me-3">2</div>
                            <div>
                                <strong>Pizza Margherita</strong><br>
                                <small class="text-muted">124 orders</small>
                            </div>
                        </div>
                        <div class="text-end">
                            <strong>₹39,680</strong><br>
                            <small class="text-success">+8%</small>
                        </div>
                    </div>
                </div>
                <div class="top-item mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="rank-badge me-3">3</div>
                            <div>
                                <strong>Burger Combo</strong><br>
                                <small class="text-muted">98 orders</small>
                            </div>
                        </div>
                        <div class="text-end">
                            <strong>₹27,440</strong><br>
                            <small class="text-danger">-3%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-clock me-2"></i>Peak Hours
                </h5>
            </div>
            <div class="card-body">
                <div class="peak-hour mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>12:00 PM - 2:00 PM</span>
                        <div>
                            <strong>245 orders</strong>
                            <div class="progress mt-1" style="height: 5px; width: 100px;">
                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="peak-hour mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>7:00 PM - 9:00 PM</span>
                        <div>
                            <strong>198 orders</strong>
                            <div class="progress mt-1" style="height: 5px; width: 100px;">
                                <div class="progress-bar bg-warning" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="peak-hour mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>6:00 PM - 8:00 PM</span>
                        <div>
                            <strong>156 orders</strong>
                            <div class="progress mt-1" style="height: 5px; width: 100px;">
                                <div class="progress-bar bg-primary" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Generate Report Modal -->
<div class="modal fade" id="generateReportModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generate Custom Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="reportType" class="form-label">Report Type</label>
                        <select class="form-select" id="reportType" required>
                            <option value="">Select Report Type</option>
                            <option value="sales">Sales Report</option>
                            <option value="inventory">Inventory Report</option>
                            <option value="customer">Customer Report</option>
                            <option value="financial">Financial Report</option>
                            <option value="delivery">Delivery Performance</option>
                            <option value="menu">Menu Analysis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="reportName" class="form-label">Report Name</label>
                        <input type="text" class="form-control" id="reportName" placeholder="e.g., Monthly Sales Summary" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate" required>
                        </div>
                        <div class="col-md-6">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Include Sections</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="includeCharts" checked>
                            <label class="form-check-label" for="includeCharts">Charts and Graphs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="includeDetails" checked>
                            <label class="form-check-label" for="includeDetails">Detailed Data</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="includeComparison">
                            <label class="form-check-label" for="includeComparison">Period Comparison</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="reportFormat" class="form-label">Export Format</label>
                        <select class="form-select" id="reportFormat" required>
                            <option value="pdf">PDF</option>
                            <option value="excel">Excel</option>
                            <option value="csv">CSV</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="generateReport()">Generate Report</button>
            </div>
        </div>
    </div>
</div>

<style>
.report-card {
    transition: all 0.3s ease;
    cursor: pointer;
}

.report-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.rank-badge {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
}

.top-item {
    padding: 10px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.top-item:hover {
    background-color: #f8f9fa;
}

.peak-hour {
    padding: 8px 0;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sales overview chart
    const salesCtx = document.getElementById('salesOverviewChart');
    if (salesCtx) {
        const ctx = salesCtx.getContext('2d');
        
        salesCtx.width = salesCtx.offsetWidth;
        salesCtx.height = 300;
        
        // Draw a simple area chart
        ctx.fillStyle = 'rgba(255, 107, 107, 0.1)';
        ctx.strokeStyle = '#ff6b6b';
        ctx.lineWidth = 3;
        
        const points = [
            {x: 50, y: 250}, {x: 150, y: 200}, {x: 250, y: 180},
            {x: 350, y: 160}, {x: 450, y: 140}, {x: 550, y: 100},
            {x: 650, y: 80}
        ];
        
        // Fill area
        ctx.beginPath();
        ctx.moveTo(points[0].x, 280);
        points.forEach(point => ctx.lineTo(point.x, point.y));
        ctx.lineTo(points[points.length - 1].x, 280);
        ctx.closePath();
        ctx.fill();
        
        // Draw line
        ctx.beginPath();
        ctx.moveTo(points[0].x, points[0].y);
        for (let i = 1; i < points.length; i++) {
            ctx.lineTo(points[i].x, points[i].y);
        }
        ctx.stroke();
        
        // Add labels
        ctx.fillStyle = '#666';
        ctx.font = '12px Arial';
        ctx.fillText('Sales trend over the last 7 days', 50, 30);
    }
    
    // Set default dates
    const today = new Date();
    const lastMonth = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
    
    document.getElementById('startDate').value = lastMonth.toISOString().split('T')[0];
    document.getElementById('endDate').value = today.toISOString().split('T')[0];
});

function generateReport() {
    const reportType = document.getElementById('reportType').value;
    const reportName = document.getElementById('reportName').value;
    const startDate = document.getElementById('startDate').value;
    const endDate = document.getElementById('endDate').value;
    const format = document.getElementById('reportFormat').value;
    
    if (!reportType || !reportName || !startDate || !endDate) {
        showNotification('Please fill in all required fields', 'warning');
        return;
    }
    
    // Close modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('generateReportModal'));
    modal.hide();
    
    // Show loading notification
    showNotification('Report generation started. You will be notified when it\'s ready.', 'info');
    
    // Simulate report generation
    setTimeout(() => {
        showNotification(`${reportName} has been generated successfully!`, 'success');
    }, 3000);
}

// Report card click handlers
document.querySelectorAll('.report-card').forEach(card => {
    card.addEventListener('click', function() {
        const reportType = this.dataset.report;
        document.getElementById('reportType').value = reportType;
        
        // Set default name based on type
        const reportNames = {
            sales: 'Sales Performance Report',
            inventory: 'Inventory Status Report',
            customer: 'Customer Analytics Report',
            financial: 'Financial Summary Report'
        };
        
        document.getElementById('reportName').value = reportNames[reportType] || '';
        
        // Open modal
        const modal = new bootstrap.Modal(document.getElementById('generateReportModal'));
        modal.show();
    });
});
</script>