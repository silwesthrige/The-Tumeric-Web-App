
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .stats-card {
            background: #fff;
            border: none;
            border-radius: 0.75rem;
            padding: 1.5rem;
            position: relative;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        
        .stats-card.primary {
            border-left: 4px solid #0d6efd;
        }
        
        .stats-card.success {
            border-left: 4px solid #198754;
        }
        
        .stats-card.info {
            border-left: 4px solid #0dcaf0;
        }
        
        .stats-card.warning {
            border-left: 4px solid #ffc107;
        }
        
        .stats-icon {
            position: absolute;
            right: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2.5rem;
            color: #dee2e6;
        }
        
        .report-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        
        .report-description {
            font-size: 0.875rem;
            color: #6c757d;
            margin-bottom: 1rem;
        }
        
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
            padding: 1.25rem 1.5rem;
            border-radius: 0.75rem 0.75rem 0 0 !important;
        }
        
        .card-title {
            color: #495057;
            font-weight: 600;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table th {
            border-top: none;
            font-weight: 600;
            color: #495057;
            background-color: #f8f9fa;
        }
        
        .btn-toolbar .btn {
            border-radius: 0.5rem;
            font-weight: 500;
        }
        
        .loading-spinner {
            display: none;
            text-align: center;
            padding: 2rem;
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #0d6efd;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
        }
        
        .report-preview {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            background: #fff;
        }
        
        .badge {
            font-weight: 500;
        }
        
        .btn-group-sm .btn {
            border-radius: 0.375rem;
        }
        
        .generate-btn {
            background-color: #ea580c;
            border: 2px solid #ea580c;
            color: #fff;
            border-radius: 0.5rem;
            padding: 0.25rem 0.75rem;
            font-size: 0.8125rem;
            font-weight: 500;
            transition: all 0.3s ease;
            }

            .generate-btn:hover {
            background-color: #ea580c;
            color: #fff;
            transform: translateY(-1px);
            }

        
        .stats-card .generate-btn {
            background-color: transparent;
            border: 2px solid #495057;
            color: #495057;
            border-radius: 0.5rem;
            padding: 0.25rem 0.75rem;
            font-size: 0.8125rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .stats-card .generate-btn:hover {
            background-color: #ea580c;
            color: #fff;
            transform: translateY(-1px);
        }
        
        .h2 {
            font-size: 2rem;
            font-weight: 400;
            line-height: 1.2;
            color: #495057;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Notification container -->
        <div id="notificationContainer"></div>

        <!-- Header -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Reports</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="generate-btn" data-bs-toggle="modal" data-bs-target="#generateReportModal">
    <i class="fas fa-plus me-1"></i> Generate Report
</button>

            </div>
        </div>

        <!-- Quick Report Cards -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card primary" data-report="sales">
                    <div class="report-title">Sales Report</div>
                    <div class="report-description">Revenue, orders, and trends</div>
                    <button class="generate-btn">Generate</button>
                    <i class="fas fa-chart-line stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card success" data-report="inventory">
                    <div class="report-title">Menu Report</div>
                    <div class="report-description">Menu items performance</div>
                    <button class="generate-btn">Generate</button>
                    <i class="fas fa-boxes stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card info" data-report="customer">
                    <div class="report-title">Customer Report</div>
                    <div class="report-description">Customer analytics and behavior</div>
                    <button class="generate-btn">Generate</button>
                    <i class="fas fa-users stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card warning" data-report="feedback">
                    <div class="report-title">Feedback Report</div>
                    <div class="report-description">Customer feedback analysis</div>
                    <button class="generate-btn">Generate</button>
                    <i class="fas fa-star stats-icon"></i>
                </div>
            </div>
        </div>

        <!-- Recent Reports -->
        <div class="row">
            <div class="col-12">
                <div class="card">
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
                                <tbody id="reportsTable">
                                    <!-- Reports will be populated here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Generate Report Modal -->
        <div class="modal fade" id="generateReportModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Generate Custom Report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="reportForm" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="reportType" class="form-label">Report Type</label>
                                <select class="form-select" id="reportType" required>
                                    <option value="">Select Report Type</option>
                                    <option value="sales">Sales Report</option>
                                    <option value="inventory">Menu Analysis Report</option>
                                    <option value="customer">Customer Report</option>
                                    <option value="feedback">Feedback Report</option>
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
                        </form>
                        <div class="loading-spinner" id="loadingSpinner">
                            <div class="loading"></div>
                            <p class="mt-2">Generating report...</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="generateReport()">Generate PDF Report</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report Preview Modal -->
        <div class="modal fade" id="reportPreviewModal" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewTitle">Report Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="report-preview" id="reportPreview">
                            <!-- Report content will be displayed here -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="downloadPreviewBtn">Download PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Firebase and required libraries -->
    <script type="module">
        // Firebase configuration
        import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";
        import { getFirestore, collection, getDocs, query, where, orderBy, limit, Timestamp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";

        const firebaseConfig = {
            apiKey: "AIzaSyCqvtp0IWvJFQgbVuj4NsSgQQDVtvwD1tY",
            authDomain: "the-tumaric-indian-cusine.firebaseapp.com",
            projectId: "the-tumaric-indian-cusine",
            storageBucket: "the-tumaric-indian-cusine.firebasestorage.app",
            messagingSenderId: "808473473804",
            appId: "1:808473473804:web:2c7cf4c307f3a3d1a78f29",
            measurementId: "G-S35W1JTW9L"
        };

        const app = initializeApp(firebaseConfig);
        const db = getFirestore(app);

        // Make db available globally
        window.db = db;
        window.dbModules = { collection, getDocs, query, where, orderBy, limit, Timestamp };

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            initializePage();
            loadRecentReports();
            
            // Make functions globally available for testing
            window.testDeleteFunction = function() {
                console.log('Delete function is available');
                deleteReport('test');
            };
        });

        function initializePage() {
            // Set default dates
            const today = new Date();
            const lastMonth = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
            
            document.getElementById('startDate').value = lastMonth.toISOString().split('T')[0];
            document.getElementById('endDate').value = today.toISOString().split('T')[0];
        }

        function loadRecentReports() {
            const recentReports = JSON.parse(localStorage.getItem('generatedReports') || '[]');
            const tbody = document.getElementById('reportsTable');
            
            if (recentReports.length === 0) {
                tbody.innerHTML = '<tr><td colspan="6" class="text-center text-muted">No reports generated yet</td></tr>';
                return;
            }

            tbody.innerHTML = recentReports.map(report => `
                <tr>
                    <td>
                        <div>
                            <strong>${report.name}</strong><br>
                            <small class="text-muted">${report.description}</small>
                        </div>
                    </td>
                    <td><span class="badge bg-${getReportBadgeColor(report.type)}">${getReportTypeLabel(report.type)}</span></td>
                    <td>${formatDateRange(report.startDate, report.endDate)}</td>
                    <td>
                        <div>
                            <strong>${new Date(report.generatedAt).toLocaleString()}</strong><br>
                            <small class="text-muted">by Admin User</small>
                        </div>
                    </td>
                    <td><span class="badge bg-success">Ready</span></td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-primary" onclick="downloadReport('${report.id}')">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="btn btn-outline-info" onclick="viewReport('${report.id}')">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-outline-secondary" onclick="shareReport('${report.id}')">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `).join('');
        }

        function getReportBadgeColor(type) {
            const colors = {
                sales: 'primary',
                inventory: 'success',
                customer: 'info',
                feedback: 'warning'
            };
            return colors[type] || 'secondary';
        }

        function getReportTypeLabel(type) {
            const labels = {
                sales: 'Sales',
                inventory: 'Menu',
                customer: 'Customer',
                feedback: 'Feedback'
            };
            return labels[type] || type;
        }

        function formatDateRange(startDate, endDate) {
            const start = new Date(startDate).toLocaleDateString();
            const end = new Date(endDate).toLocaleDateString();
            return `${start} - ${end}`;
        }

        // Make functions globally available
        window.loadRecentReports = loadRecentReports;
        window.getReportBadgeColor = getReportBadgeColor;
        window.getReportTypeLabel = getReportTypeLabel;
        window.formatDateRange = formatDateRange;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    
    <script>
        // Report generation and management functions
        function showNotification(message, type = 'info') {
            const container = document.getElementById('notificationContainer');
            const alertClass = type === 'success' ? 'alert-success' : 
                              type === 'warning' ? 'alert-warning' : 
                              type === 'danger' ? 'alert-danger' : 'alert-info';
            
            const notification = document.createElement('div');
            notification.className = `alert ${alertClass} alert-dismissible fade show notification`;
            notification.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            container.appendChild(notification);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 5000);
        }

        async function generateReport() {
            const reportType = document.getElementById('reportType').value;
            const reportName = document.getElementById('reportName').value;
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            
            if (!reportType || !reportName || !startDate || !endDate) {
                showNotification('Please fill in all required fields', 'warning');
                return;
            }

            // Show loading spinner
            document.getElementById('loadingSpinner').style.display = 'block';
            document.querySelector('.modal-footer').style.display = 'none';
            
            try {
                const reportData = await fetchReportData(reportType, startDate, endDate);
                const reportContent = generateReportContent(reportType, reportData, reportName, startDate, endDate);
                
                // Save report to localStorage
                const report = {
                    id: Date.now().toString(),
                    name: reportName,
                    type: reportType,
                    startDate: startDate,
                    endDate: endDate,
                    generatedAt: new Date().toISOString(),
                    content: reportContent,
                    description: getReportDescription(reportType)
                };
                
                const reports = JSON.parse(localStorage.getItem('generatedReports') || '[]');
                reports.unshift(report);
                localStorage.setItem('generatedReports', JSON.stringify(reports.slice(0, 10))); // Keep only last 10 reports
                
                // Generate and download PDF
                generatePDF(reportContent, reportName);
                
                // Close modal and refresh reports list
                const modal = bootstrap.Modal.getInstance(document.getElementById('generateReportModal'));
                modal.hide();
                
                loadRecentReports();
                showNotification(`${reportName} has been generated successfully!`, 'success');
                
            } catch (error) {
                console.error('Error generating report:', error);
                showNotification('Error generating report. Please try again.', 'danger');
            } finally {
                // Hide loading spinner
                document.getElementById('loadingSpinner').style.display = 'none';
                document.querySelector('.modal-footer').style.display = 'flex';
            }
        }

        async function fetchReportData(reportType, startDate, endDate) {
            const { collection, getDocs, query, where, orderBy, Timestamp } = window.dbModules;
            const db = window.db;
            
            let data = {};
            
            try {
                switch (reportType) {
                    case 'sales':
                        // Fetch orders data - since createdAt is stored as string, fetch all and filter in memory
                        const ordersSnapshot = await getDocs(collection(db, 'orders'));
                        const allOrders = ordersSnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
                        
                        // Filter orders by date range (createdAt is string)
                        const startDateStr = startDate;
                        const endDateStr = endDate;
                        
                        data.orders = allOrders.filter(order => {
                            if (!order.createdAt) return false;
                            // Extract date part from createdAt string (assuming format like "2024-01-15" or "2024-01-15T10:30:00")
                            const orderDate = order.createdAt.split('T')[0];
                            return orderDate >= startDateStr && orderDate <= endDateStr;
                        });
                        
                        // Fetch menu data for item details
                        const menusSnapshot = await getDocs(collection(db, 'menus'));
                        data.menus = menusSnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
                        break;
                        
                    case 'inventory':
                        // Fetch menu data
                        const menuSnapshot = await getDocs(collection(db, 'menus'));
                        data.menus = menuSnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
                        
                        // Fetch orders for menu analysis - filter by date
                        const allMenuOrdersSnapshot = await getDocs(collection(db, 'orders'));
                        const allMenuOrders = allMenuOrdersSnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
                        
                        data.orders = allMenuOrders.filter(order => {
                            if (!order.createdAt) return false;
                            const orderDate = order.createdAt.split('T')[0];
                            return orderDate >= startDate && orderDate <= endDate;
                        });
                        break;
                        
                    case 'customer':
                        // Fetch users data
                        const usersSnapshot = await getDocs(collection(db, 'users'));
                        data.users = usersSnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
                        
                        // Fetch orders for customer analysis - filter by date
                        const allCustomerOrdersSnapshot = await getDocs(collection(db, 'orders'));
                        const allCustomerOrders = allCustomerOrdersSnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
                        
                        data.orders = allCustomerOrders.filter(order => {
                            if (!order.createdAt) return false;
                            const orderDate = order.createdAt.split('T')[0];
                            return orderDate >= startDate && orderDate <= endDate;
                        });
                        break;
                        
                    case 'feedback':
                        // Fetch feedback data - since createdAt might be string here too
                        const feedbackSnapshot = await getDocs(collection(db, 'feedbacks'));
                        const allFeedbacks = feedbackSnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
                        
                        data.feedbacks = allFeedbacks.filter(feedback => {
                            if (!feedback.createdAt) return false;
                            // Handle both string and Timestamp
                            let feedbackDate;
                            if (typeof feedback.createdAt === 'string') {
                                feedbackDate = feedback.createdAt.split('T')[0];
                            } else if (feedback.createdAt?.toDate) {
                                feedbackDate = feedback.createdAt.toDate().toISOString().split('T')[0];
                            } else {
                                return false;
                            }
                            return feedbackDate >= startDate && feedbackDate <= endDate;
                        });
                        
                        // Fetch users for feedback analysis
                        const feedbackUsersSnapshot = await getDocs(collection(db, 'users'));
                        data.users = feedbackUsersSnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
                        break;
                }
            } catch (error) {
                console.error('Error fetching data:', error);
                throw error;
            }
            
            return data;
        }

        function generateReportContent(reportType, data, reportName, startDate, endDate) {
            switch (reportType) {
                case 'sales':
                    return generateSalesReport(data, reportName, startDate, endDate);
                case 'inventory':
                    return generateMenuReport(data, reportName, startDate, endDate);
                case 'customer':
                    return generateCustomerReport(data, reportName, startDate, endDate);
                case 'feedback':
                    return generateFeedbackReport(data, reportName, startDate, endDate);
                default:
                    return '<p>Report type not supported</p>';
            }
        }

        function generateSalesReport(data, reportName, startDate, endDate) {
            const orders = data.orders || [];
            const menus = data.menus || [];
            
            // Calculate metrics
            const totalRevenue = orders.reduce((sum, order) => sum + (parseFloat(order.total) || 0), 0);
            const totalOrders = orders.length;
            const avgOrderValue = totalOrders > 0 ? totalRevenue / totalOrders : 0;
            
            // Status distribution
            const statusCounts = orders.reduce((acc, order) => {
                const status = order.status || 'unknown';
                acc[status] = (acc[status] || 0) + 1;
                return acc;
            }, {});
            
            // Popular items
            const itemCounts = {};
            const itemRevenue = {};
            orders.forEach(order => {
                if (order.items && Array.isArray(order.items)) {
                    order.items.forEach(item => {
                        const itemName = item.name || 'Unknown Item';
                        const qty = parseInt(item.qty) || 0;
                        const price = parseFloat(item.price) || 0;
                        
                        itemCounts[itemName] = (itemCounts[itemName] || 0) + qty;
                        itemRevenue[itemName] = (itemRevenue[itemName] || 0) + (price * qty);
                    });
                }
            });
            
            const popularItems = Object.entries(itemCounts)
                .sort(([,a], [,b]) => b - a)
                .slice(0, 10);

            return `
                <div class="report-content">
                    <h2>${reportName}</h2>
                    <p><strong>Period:</strong> ${new Date(startDate).toLocaleDateString()} - ${new Date(endDate).toLocaleDateString()}</p>
                    <hr>
                    
                    <h3>Sales Summary</h3>
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-primary">£${totalRevenue.toFixed(2)}</h4>
                                    <p class="text-muted">Total Revenue</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-success">${totalOrders}</h4>
                                    <p class="text-muted">Total Orders</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-warning">£${avgOrderValue.toFixed(2)}</h4>
                                    <p class="text-muted">Avg Order Value</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-info">${totalOrders > 0 ? ((statusCounts.delivered || 0) / totalOrders * 100).toFixed(1) : 0}%</h4>
                                    <p class="text-muted">Success Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3>Order Status Distribution</h3>
                    <div class="mb-4">
                        ${Object.entries(statusCounts).map(([status, count]) => `
                            <div class="d-flex justify-content-between">
                                <span>${status.charAt(0).toUpperCase() + status.slice(1)}:</span>
                                <strong>${count} orders</strong>
                            </div>
                        `).join('')}
                    </div>
                    
                    <h3>Top Selling Items</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Item Name</th>
                                <th>Quantity Sold</th>
                                <th>Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${popularItems.length > 0 ? popularItems.map(([name, qty], index) => `
                                <tr>
                                    <td>${index + 1}</td>
                                    <td>${name}</td>
                                    <td>${qty}</td>
                                    <td>£${(itemRevenue[name] || 0).toFixed(2)}</td>
                                </tr>
                            `).join('') : '<tr><td colspan="4" class="text-center text-muted">No items sold in this period</td></tr>'}
                        </tbody>
                    </table>
                    
                    <h3>Recent Orders</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Items</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${orders.length > 0 ? orders.slice(0, 20).map(order => `
                                <tr>
                                    <td>${order.orderId || 'N/A'}</td>
                                    <td>${order.createdAt ? new Date(order.createdAt).toLocaleDateString() : 'N/A'}</td>
                                    <td>£${parseFloat(order.total || 0).toFixed(2)}</td>
                                    <td><span class="badge bg-secondary">${order.status || 'N/A'}</span></td>
                                    <td>${order.items ? order.items.length : 0} items</td>
                                </tr>
                            `).join('') : '<tr><td colspan="5" class="text-center text-muted">No orders found in this period</td></tr>'}
                        </tbody>
                    </table>
                </div>
            `;
        }

        function generateMenuReport(data, reportName, startDate, endDate) {
            const menus = data.menus || [];
            const orders = data.orders || [];
            
            // Calculate item performance
            const itemStats = {};
            orders.forEach(order => {
                if (order.items && Array.isArray(order.items)) {
                    order.items.forEach(item => {
                        const foodId = item.foodId || item.name;
                        if (!itemStats[foodId]) {
                            itemStats[foodId] = {
                                name: item.name || 'Unknown',
                                totalSold: 0,
                                totalRevenue: 0
                            };
                        }
                        itemStats[foodId].totalSold += parseInt(item.qty) || 0;
                        itemStats[foodId].totalRevenue += (parseFloat(item.price) || 0) * (parseInt(item.qty) || 0);
                    });
                }
            });

            // Calculate category stats
            const categoryStats = menus.reduce((acc, item) => {
                const category = item.category || 'Uncategorized';
                if (!acc[category]) {
                    acc[category] = { count: 0, totalPrice: 0 };
                }
                acc[category].count++;
                acc[category].totalPrice += parseFloat(item.price) || 0;
                return acc;
            }, {});

            return `
                <div class="report-content">
                    <h2>${reportName}</h2>
                    <p><strong>Period:</strong> ${new Date(startDate).toLocaleDateString()} - ${new Date(endDate).toLocaleDateString()}</p>
                    <hr>
                    
                    <h3>Menu Overview</h3>
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-primary">${menus.length}</h4>
                                    <p class="text-muted">Total Menu Items</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-success">${menus.filter(item => item.status === 'active' || !item.status).length}</h4>
                                    <p class="text-muted">Active Items</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-warning">${menus.filter(item => item.status === 'inactive').length}</h4>
                                    <p class="text-muted">Inactive Items</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-info">${Object.keys(categoryStats).length}</h4>
                                    <p class="text-muted">Categories</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3>Items by Category</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Item Count</th>
                                <th>Avg Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${Object.entries(categoryStats).map(([category, stats]) => `
                                <tr>
                                    <td>${category}</td>
                                    <td>${stats.count}</td>
                                    <td>£${(stats.totalPrice / stats.count).toFixed(2)}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                    
                    <h3>Item Performance (Sales Period)</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Units Sold</th>
                                <th>Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${Object.keys(itemStats).length > 0 ? 
                                Object.entries(itemStats)
                                    .sort(([,a], [,b]) => b.totalSold - a.totalSold)
                                    .slice(0, 20)
                                    .map(([foodId, stats]) => `
                                    <tr>
                                        <td>${stats.name}</td>
                                        <td>${stats.totalSold}</td>
                                        <td>£${stats.totalRevenue.toFixed(2)}</td>
                                    </tr>
                                `).join('') : 
                                '<tr><td colspan="3" class="text-center text-muted">No sales data available for this period</td></tr>'
                            }
                        </tbody>
                    </table>
                    
                    <h3>All Menu Items</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Cook Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${menus.map(item => `
                                <tr>
                                    <td>${item.foodName || item.name || 'N/A'}</td>
                                    <td>${item.category || 'N/A'}</td>
                                    <td>£${parseFloat(item.price || 0).toFixed(2)}</td>
                                    <td><span class="badge bg-${item.status === 'active' || !item.status ? 'success' : 'secondary'}">${item.status || 'active'}</span></td>
                                    <td>${item.cookedTime || item.cookTime || 'N/A'} min</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                </div>
            `;
        }

        function generateCustomerReport(data, reportName, startDate, endDate) {
            const users = data.users || [];
            const orders = data.orders || [];
            
            // Calculate customer metrics
            const customerOrders = orders.reduce((acc, order) => {
                const userId = order.userId || 'unknown';
                if (!acc[userId]) {
                    acc[userId] = [];
                }
                acc[userId].push(order);
                return acc;
            }, {});
            
            const customerStats = Object.entries(customerOrders).map(([userId, userOrders]) => {
                const user = users.find(u => u.userId === userId || u.id === userId) || {};
                const totalSpent = userOrders.reduce((sum, order) => sum + (parseFloat(order.total) || 0), 0);
                return {
                    userId,
                    name: user.name || 'Unknown',
                    email: user.email || 'N/A',
                    phone: user.phone || 'N/A',
                    orderCount: userOrders.length,
                    totalSpent,
                    avgOrderValue: totalSpent / userOrders.length
                };
            }).sort((a, b) => b.totalSpent - a.totalSpent);

            return `
                <div class="report-content">
                    <h2>${reportName}</h2>
                    <p><strong>Period:</strong> ${new Date(startDate).toLocaleDateString()} - ${new Date(endDate).toLocaleDateString()}</p>
                    <hr>
                    
                    <h3>Customer Overview</h3>
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-primary">${users.length}</h4>
                                    <p class="text-muted">Total Customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-success">${Object.keys(customerOrders).length}</h4>
                                    <p class="text-muted">Active Customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-warning">${customerStats.length > 0 ? (customerStats.reduce((sum, c) => sum + c.orderCount, 0) / customerStats.length).toFixed(1) : 0}</h4>
                                    <p class="text-muted">Avg Orders per Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-info">£${customerStats.length > 0 ? (customerStats.reduce((sum, c) => sum + c.avgOrderValue, 0) / customerStats.length).toFixed(2) : '0.00'}</h4>
                                    <p class="text-muted">Avg Customer Value</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3>Top Customers (by Revenue)</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Orders</th>
                                <th>Total Spent</th>
                                <th>Avg Order</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${customerStats.length > 0 ? customerStats.slice(0, 20).map((customer, index) => `
                                <tr>
                                    <td>${index + 1}</td>
                                    <td>${customer.name}</td>
                                    <td>${customer.email}</td>
                                    <td>${customer.phone}</td>
                                    <td>${customer.orderCount}</td>
                                    <td>£${customer.totalSpent.toFixed(2)}</td>
                                    <td>£${customer.avgOrderValue.toFixed(2)}</td>
                                </tr>
                            `).join('') : '<tr><td colspan="7" class="text-center text-muted">No customer data available for this period</td></tr>'}
                        </tbody>
                    </table>
                    
                    <h3>Customer Registration Summary</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Favorite Foods</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${users.slice(0, 50).map(user => `
                                <tr>
                                    <td>${user.name || 'N/A'}</td>
                                    <td>${user.email || 'N/A'}</td>
                                    <td>${user.phone || 'N/A'}</td>
                                    <td>${user.address || 'N/A'}</td>
                                    <td>${Array.isArray(user.favFoods) ? user.favFoods.length : 0} items</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                </div>
            `;
        }

        function generateFeedbackReport(data, reportName, startDate, endDate) {
            const feedbacks = data.feedbacks || [];
            const users = data.users || [];
            
            // Calculate feedback metrics
            const avgRating = feedbacks.length > 0 ? 
                feedbacks.reduce((sum, feedback) => sum + (parseFloat(feedback.rating) || 0), 0) / feedbacks.length : 0;
            
            const ratingDistribution = feedbacks.reduce((acc, feedback) => {
                const rating = Math.floor(parseFloat(feedback.rating) || 0);
                acc[rating] = (acc[rating] || 0) + 1;
                return acc;
            }, {});
            
            const categoryFeedback = feedbacks.reduce((acc, feedback) => {
                if (feedback.categories && Array.isArray(feedback.categories)) {
                    feedback.categories.forEach(category => {
                        if (!acc[category]) {
                            acc[category] = { count: 0, totalRating: 0 };
                        }
                        acc[category].count++;
                        acc[category].totalRating += parseFloat(feedback.rating) || 0;
                    });
                }
                return acc;
            }, {});

            return `
                <div class="report-content">
                    <h2>${reportName}</h2>
                    <p><strong>Period:</strong> ${new Date(startDate).toLocaleDateString()} - ${new Date(endDate).toLocaleDateString()}</p>
                    <hr>
                    
                    <h3>Feedback Summary</h3>
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-primary">${feedbacks.length}</h4>
                                    <p class="text-muted">Total Feedback</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-success">${avgRating.toFixed(1)} ⭐</h4>
                                    <p class="text-muted">Average Rating</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-warning">${feedbacks.filter(f => !f.isAnonymous).length}</h4>
                                    <p class="text-muted">Named Reviews</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="text-info">${feedbacks.filter(f => f.isAnonymous).length}</h4>
                                    <p class="text-muted">Anonymous Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3>Rating Distribution</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Rating</th>
                                <th>Count</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${[5, 4, 3, 2, 1].map(rating => {
                                const count = ratingDistribution[rating] || 0;
                                const percentage = feedbacks.length > 0 ? (count / feedbacks.length * 100).toFixed(1) : 0;
                                return `
                                    <tr>
                                        <td>${rating} Star${rating !== 1 ? 's' : ''}</td>
                                        <td>${count}</td>
                                        <td>${percentage}%</td>
                                    </tr>
                                `;
                            }).join('')}
                        </tbody>
                    </table>
                    
                    <h3>Feedback by Category</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Count</th>
                                <th>Avg Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${Object.keys(categoryFeedback).length > 0 ? 
                                Object.entries(categoryFeedback).map(([category, stats]) => `
                                <tr>
                                    <td>${category}</td>
                                    <td>${stats.count}</td>
                                    <td>${(stats.totalRating / stats.count).toFixed(1)} ⭐</td>
                                </tr>
                            `).join('') : 
                            '<tr><td colspan="3" class="text-center text-muted">No category data available</td></tr>'
                            }
                        </tbody>
                    </table>
                    
                    <h3>Recent Feedback</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Rating</th>
                                <th>Categories</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${feedbacks.length > 0 ? feedbacks.slice(0, 20).map(feedback => {
                                const user = users.find(u => u.userId === feedback.userId || u.id === feedback.userId) || {};
                                let feedbackDate = 'N/A';
                                if (feedback.createdAt) {
                                    if (typeof feedback.createdAt === 'string') {
                                        feedbackDate = new Date(feedback.createdAt).toLocaleDateString();
                                    } else if (feedback.createdAt?.toDate) {
                                        feedbackDate = feedback.createdAt.toDate().toLocaleDateString();
                                    }
                                }
                                return `
                                    <tr>
                                        <td>${feedbackDate}</td>
                                        <td>${feedback.isAnonymous ? 'Anonymous' : (user.name || 'Unknown')}</td>
                                        <td>${parseFloat(feedback.rating || 0).toFixed(1)} ⭐</td>
                                        <td>${Array.isArray(feedback.categories) ? feedback.categories.join(', ') : 'N/A'}</td>
                                        <td>${feedback.comment || 'No comment'}</td>
                                    </tr>
                                `;
                            }).join('') : '<tr><td colspan="5" class="text-center text-muted">No feedback available for this period</td></tr>'}
                        </tbody>
                    </table>
                </div>
            `;
        }

        // Enhanced PDF generation with restaurant header
        async function generatePDF(content, reportName) {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF('p', 'mm', 'a4');
            
            // PDF styling
            const pageWidth = 210;
            const pageHeight = 297;
            const margin = 20;
            const maxWidth = pageWidth - (margin * 2);
            let currentY = margin;
            
            // Restaurant details
            const restaurantName = 'THE TURMERIC INDIAN CUISINE RESTAURANTS';
            const logoPath = 'public/images/UK PJ Logo.png';
            
            // Function to add restaurant header
            async function addRestaurantHeader() {
                try {
                    // Try to load and add logo
                    const logoImg = new Image();
                    logoImg.crossOrigin = 'anonymous';
                    
                    await new Promise((resolve, reject) => {
                        logoImg.onload = () => {
                            try {
                                // Create canvas to convert image to base64
                                const canvas = document.createElement('canvas');
                                const ctx = canvas.getContext('2d');
                                canvas.width = logoImg.width;
                                canvas.height = logoImg.height;
                                ctx.drawImage(logoImg, 0, 0);
                                
                                const logoBase64 = canvas.toDataURL('image/png');
                                
                                // Add logo to PDF (30mm width, maintaining aspect ratio)
                                const logoWidth = 30;
                                const logoHeight = (logoImg.height / logoImg.width) * logoWidth;
                                doc.addImage(logoBase64, 'PNG', margin, currentY, logoWidth, logoHeight);
                                
                                // Add restaurant name next to logo
                                doc.setFontSize(16);
                                doc.setFont(undefined, 'bold');
                                doc.setTextColor(139, 69, 19); // Brown color for Indian theme
                                
                                const textY = currentY + (logoHeight / 2) + 2;
                                doc.text(restaurantName, margin + logoWidth + 10, textY);
                                
                                currentY += Math.max(logoHeight, 20) + 10;
                                resolve();
                            } catch (error) {
                                console.warn('Error processing logo:', error);
                                // Fallback to text-only header
                                addTextOnlyHeader();
                                resolve();
                            }
                        };
                        
                        logoImg.onerror = () => {
                            console.warn('Could not load logo, using text-only header');
                            addTextOnlyHeader();
                            resolve();
                        };
                        
                        // Set timeout for logo loading
                        setTimeout(() => {
                            console.warn('Logo loading timeout, using text-only header');
                            addTextOnlyHeader();
                            resolve();
                        }, 3000);
                        
                        logoImg.src = logoPath;
                    });
                    
                } catch (error) {
                    console.warn('Error loading logo:', error);
                    addTextOnlyHeader();
                }
                
                function addTextOnlyHeader() {
                    // Text-only header fallback
                    doc.setFontSize(18);
                    doc.setFont(undefined, 'bold');
                    doc.setTextColor(139, 69, 19); // Brown color
                    doc.text(restaurantName, margin, currentY);
                    currentY += 15;
                    
                    // Add subtitle
                    doc.setFontSize(10);
                    doc.setFont(undefined, 'normal');
                    doc.setTextColor(100, 100, 100);
                    doc.text('Admin Dashboard Report', margin, currentY);
                    currentY += 10;
                }
                
                // Add separator line
                doc.setDrawColor(139, 69, 19);
                doc.setLineWidth(0.5);
                doc.line(margin, currentY, pageWidth - margin, currentY);
                currentY += 15;
            }
            
            // Add restaurant header to first page
            await addRestaurantHeader();
            
            // Parse HTML content for PDF
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = content;
            
            // Helper function to add new page if needed
            function checkPageBreak(height = 10) {
                if (currentY + height > pageHeight - margin) {
                    doc.addPage();
                    currentY = margin;
                    return true;
                }
                return false;
            }
            
            // Helper function to add text with word wrapping
            function addWrappedText(text, fontSize = 10, isBold = false, isHeader = false) {
                doc.setFontSize(fontSize);
                if (isBold) doc.setFont(undefined, 'bold');
                else doc.setFont(undefined, 'normal');
                
                if (isHeader) {
                    checkPageBreak(15);
                    doc.setTextColor(40, 40, 40);
                } else {
                    doc.setTextColor(60, 60, 60);
                }
                
                const lines = doc.splitTextToSize(text, maxWidth);
                lines.forEach(line => {
                    checkPageBreak(fontSize * 0.4);
                    doc.text(line, margin, currentY);
                    currentY += fontSize * 0.4;
                });
                
                currentY += isHeader ? 8 : 4;
            }
            
            // Extract content sections
            const titleElement = tempDiv.querySelector('h2');
            const title = titleElement ? titleElement.textContent : reportName;
            
            // Add report title
            doc.setFontSize(16);
            doc.setFont(undefined, 'bold');
            doc.setTextColor(0, 0, 0);
            doc.text(title, margin, currentY);
            currentY += 12;
            
            // Add period info
            const periodText = tempDiv.querySelector('p').textContent;
            doc.setFontSize(10);
            doc.setFont(undefined, 'normal');
            doc.setTextColor(100, 100, 100);
            doc.text(periodText, margin, currentY);
            currentY += 10;
            
            // Add a line separator
            doc.setDrawColor(200, 200, 200);
            doc.setLineWidth(0.3);
            doc.line(margin, currentY, pageWidth - margin, currentY);
            currentY += 10;
            
            // Process sections
            const sections = tempDiv.querySelectorAll('h3');
            sections.forEach(section => {
                const sectionTitle = section.textContent;
                addWrappedText(sectionTitle, 14, true, true);
                
                // Get content after this section
                let nextElement = section.nextElementSibling;
                while (nextElement && nextElement.tagName !== 'H3') {
                    if (nextElement.tagName === 'P') {
                        addWrappedText(nextElement.textContent, 10);
                    } else if (nextElement.tagName === 'DIV' && nextElement.className.includes('row')) {
                        // Handle summary cards
                        const cards = nextElement.querySelectorAll('.card-body');
                        cards.forEach((card, index) => {
                            const value = card.querySelector('h4') ? card.querySelector('h4').textContent : '';
                            const label = card.querySelector('p') ? card.querySelector('p').textContent : '';
                            addWrappedText(`${label}: ${value}`, 10, true);
                        });
                        currentY += 5;
                    } else if (nextElement.tagName === 'TABLE') {
                        // Handle tables
                        checkPageBreak(20);
                        
                        const headers = Array.from(nextElement.querySelectorAll('thead th')).map(th => th.textContent);
                        const rows = Array.from(nextElement.querySelectorAll('tbody tr')).map(tr => 
                            Array.from(tr.querySelectorAll('td')).map(td => td.textContent.replace(/\s+/g, ' ').trim())
                        );
                        
                        if (headers.length > 0 && rows.length > 0) {
                            // Calculate column widths
                            const colWidth = maxWidth / headers.length;
                            
                            // Table headers
                            doc.setFillColor(245, 245, 245);
                            doc.rect(margin, currentY - 5, maxWidth, 8, 'F');
                            
                            doc.setFontSize(9);
                            doc.setFont(undefined, 'bold');
                            doc.setTextColor(0, 0, 0);
                            
                            headers.forEach((header, i) => {
                                const x = margin + (i * colWidth);
                                doc.text(header, x + 2, currentY);
                            });
                            currentY += 10;
                            
                            // Table rows
                            doc.setFont(undefined, 'normal');
                            doc.setFontSize(8);
                            doc.setTextColor(60, 60, 60);
                            
                            rows.slice(0, 25).forEach((row, rowIndex) => { // Limit rows to prevent overcrowding
                                checkPageBreak(6);
                                
                                if (rowIndex % 2 === 1) {
                                    doc.setFillColor(252, 252, 252);
                                    doc.rect(margin, currentY - 4, maxWidth, 6, 'F');
                                }
                                
                                row.forEach((cell, i) => {
                                    const x = margin + (i * colWidth);
                                    const cellText = cell.length > 25 ? cell.substring(0, 25) + '...' : cell;
                                    doc.text(cellText, x + 2, currentY);
                                });
                                currentY += 6;
                            });
                            
                            if (rows.length > 25) {
                                addWrappedText(`... and ${rows.length - 25} more rows`, 8, false);
                            }
                            
                            currentY += 10;
                        }
                    }
                    nextElement = nextElement.nextElementSibling;
                }
            });
            
            // Add footer to all pages
            const totalPages = doc.internal.getNumberOfPages();
            for (let i = 1; i <= totalPages; i++) {
                doc.setPage(i);
                doc.setFontSize(8);
                doc.setTextColor(150, 150, 150);
                doc.text(`Generated on ${new Date().toLocaleDateString()} - Page ${i} of ${totalPages}`, margin, pageHeight - 10);
                doc.text('The Turmeric Indian Cuisine - Admin Dashboard', pageWidth - margin - 70, pageHeight - 10);
            }
            
            // Download the PDF
            const fileName = `${reportName.replace(/[^a-z0-9]/gi, '_')}_${new Date().toISOString().split('T')[0]}.pdf`;
            doc.save(fileName);
        }

        function getReportDescription(reportType) {
            const descriptions = {
                sales: 'Comprehensive sales analysis with revenue and order metrics',
                inventory: 'Menu performance and item analysis report',
                customer: 'Customer behavior and analytics insights',
                feedback: 'Customer feedback and rating analysis'
            };
            return descriptions[reportType] || 'Custom report analysis';
        }

        function downloadReport(reportId) {
            const reports = JSON.parse(localStorage.getItem('generatedReports') || '[]');
            const report = reports.find(r => r.id === reportId);
            
            if (report) {
                generatePDF(report.content, report.name);
                showNotification('Report downloaded successfully!', 'success');
            } else {
                showNotification('Report not found', 'danger');
            }
        }

        function viewReport(reportId) {
            const reports = JSON.parse(localStorage.getItem('generatedReports') || '[]');
            const report = reports.find(r => r.id === reportId);
            
            if (report) {
                document.getElementById('previewTitle').textContent = report.name;
                document.getElementById('reportPreview').innerHTML = report.content;
                document.getElementById('downloadPreviewBtn').onclick = () => downloadReport(reportId);
                
                const modal = new bootstrap.Modal(document.getElementById('reportPreviewModal'));
                modal.show();
            } else {
                showNotification('Report not found', 'danger');
            }
        }

        function shareReport(reportId) {
            // Simple share functionality - could be extended to email, etc.
            const reports = JSON.parse(localStorage.getItem('generatedReports') || '[]');
            const report = reports.find(r => r.id === reportId);
            
            if (report && navigator.share) {
                navigator.share({
                    title: report.name,
                    text: `Check out this ${report.type} report: ${report.name}`,
                    url: window.location.href
                }).catch(() => {
                    // Fallback: copy link to clipboard
                    navigator.clipboard.writeText(window.location.href);
                    showNotification('Report link copied to clipboard!', 'info');
                });
            } else {
                // Fallback: copy link to clipboard
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(window.location.href);
                    showNotification('Report link copied to clipboard!', 'info');
                } else {
                    showNotification('Share functionality not supported', 'warning');
                }
            }
        }

        function deleteReport(reportId) {
            if (confirm('Are you sure you want to delete this report? This action cannot be undone.')) {
                const reports = JSON.parse(localStorage.getItem('generatedReports') || '[]');
                const updatedReports = reports.filter(r => r.id !== reportId);
                localStorage.setItem('generatedReports', JSON.stringify(updatedReports));
                
                loadRecentReports();
                showNotification('Report deleted successfully!', 'success');
            }
        }

        // Make functions globally available
        window.generateReport = generateReport;
        window.downloadReport = downloadReport;
        window.viewReport = viewReport;
        window.shareReport = shareReport;
        window.deleteReport = deleteReport;

        // Report card click handlers
        document.querySelectorAll('.stats-card').forEach(card => {
            card.addEventListener('click', function() {
                const reportType = this.dataset.report;
                document.getElementById('reportType').value = reportType;
                
                // Set default name based on type
                const reportNames = {
                    sales: 'Sales Performance Report',
                    inventory: 'Menu Analysis Report',
                    customer: 'Customer Analytics Report',
                    feedback: 'Feedback Analysis Report'
                };
                
                document.getElementById('reportName').value = reportNames[reportType] || '';
                
                // Open modal
                const modal = new bootstrap.Modal(document.getElementById('generateReportModal'));
                modal.show();
            });
        });

        // Form reset on modal close
        document.getElementById('generateReportModal').addEventListener('hidden.bs.modal', function() {
            document.getElementById('reportForm').reset();
            document.getElementById('loadingSpinner').style.display = 'none';
            document.querySelector('.modal-footer').style.display = 'flex';
        });
    </script>
</body>
</html>