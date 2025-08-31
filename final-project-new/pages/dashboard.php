
    <style>
        .stats-card {
            background: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            position: relative;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        
        .stats-card.success {
            border-left: 4px solid #198754;
        }
        
        .stats-card.warning {
            border-left: 4px solid #ffc107;
        }
        
        .stats-card.info {
            border-left: 4px solid #0dcaf0;
        }
        
        .stats-card:not(.success):not(.warning):not(.info) {
            border-left: 4px solid #0d6efd;
        }
        
        .stats-number {
            font-size: 2rem;
            font-weight: 700;
            color: #495057;
            margin-bottom: 0.25rem;
        }
        
        .stats-label {
            font-size: 0.875rem;
            color: #6c757d;
            margin-bottom: 0;
        }
        
        .stats-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: #dee2e6;
        }
        
        .card {
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 0.75rem 1.25rem;
        }
        
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }
        
        .list-group-item {
            border-left: 0;
            border-right: 0;
            border-top: 0;
            border-bottom: 1px solid #dee2e6;
            padding: 0.75rem 0;
        }
        
        .list-group-item:last-child {
            border-bottom: 0;
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
        
        .error-message {
            color: #dc3545;
            text-align: center;
            padding: 1rem;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 0.375rem;
            margin: 0.5rem 0;
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
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>

        <!-- Stats Cards -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card">
                    <div class="stats-number" id="todayOrders">
                         <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Today's Orders</div>
                    <i class="fas fa-shopping-cart stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card success">
                    <div class="stats-number" id="todayRevenue">
                         <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Today's Revenue</div>
                    <i class="fas fa-pound-sign stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card warning">
                    <div class="stats-number" id="pendingDeliveries">
                         <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Pending Deliveries</div>
                    <i class="fas fa-truck stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card info">
                    <div class="stats-number" id="averageRating">
                         <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
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
                            <canvas id="salesChart"></canvas>
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
                        <div id="recentOrders">
                            <div class="text-center">
                                 <div class="spinner-border spinner-border-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                 </div>
                                <p class="mt-2">Loading recent orders...</p>
                            </div>
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
                                <a href="index.php?page=orders" class="btn btn-outline-primary w-100 h-100 d-flex flex-column justify-content-center" onclick="createNewOrder(); return false;">
                                    <i class="fas fa-plus fa-2x mb-2"></i>
                                    <span>New Order</span>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="index.php?page=menu" class="btn btn-outline-success w-100 h-100 d-flex flex-column justify-content-center" onclick="addMenuItem(); return false;">
                                    <i class="fas fa-utensils fa-2x mb-2"></i>
                                    <span>Add Menu Item</span>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="index.php?page=promotions" class="btn btn-outline-warning w-100 h-100 d-flex flex-column justify-content-center" onclick="createPromotion(); return false;">
                                    <i class="fas fa-percentage fa-2x mb-2"></i>
                                    <span>Create Promotion</span>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="index.php?page=reports" class="btn btn-outline-info w-100 h-100 d-flex flex-column justify-content-center" onclick="viewReports(); return false;">
                                    <i class="fas fa-chart-bar fa-2x mb-2"></i>
                                    <span>View Reports</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- New Order Modal -->
    <div class="modal fade" id="newOrderModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="newOrderForm">
                        <div class="mb-3">
                            <label class="form-label">Customer</label>
                            <select class="form-select" id="customerId" required>
                                <option value="">Select Customer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Delivery Address</label>
                            <textarea class="form-control" id="deliveryAddress" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Menu Items</label>
                            <div id="menuItems"></div>
                        </div>
                        <div class="mb-3">
                            <strong>Total: £<span id="orderTotal">0</span></strong>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="submitOrder()">Create Order</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    
    <!-- Firebase Configuration -->
    <script type="module">
        // Firebase imports
        import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";
        import { getFirestore, collection, getDocs, addDoc, query, orderBy, limit, where, onSnapshot } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";

        // Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyCqvtp0IWvJFQgbVuj4NsSgQQDVtvwD1tY",
            authDomain: "the-tumaric-indian-cusine.firebaseapp.com",
            projectId: "the-tumaric-indian-cusine",
            storageBucket: "the-tumaric-indian-cusine.firebasestorage.app",
            messagingSenderId: "808473473804",
            appId: "1:808473473804:web:2c7cf4c307f3a3d1a78f29",
            measurementId: "G-S35W1JTW9L"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const db = getFirestore(app);

        // Global variables
        let salesChart;
        let ordersData = [];
        let usersData = [];
        let menusData = [];
        let feedbacksData = [];
        let autoRefreshInterval;

        // Initialize dashboard
        document.addEventListener('DOMContentLoaded', function() {
            initializeDashboard();
            startAutoRefresh();
        });

        async function initializeDashboard() {
            try {
                await loadData();
                updateStatCards();
                loadRecentOrders();
                initializeSalesChart();
                setupRealTimeListeners();
            } catch (error) {
                console.error('Error initializing dashboard:', error);
                showError('Failed to load dashboard data');
            }
        }

        function startAutoRefresh() {
            // Auto refresh every 5 seconds
            autoRefreshInterval = setInterval(async () => {
                try {
                    await loadData();
                    updateStatCards();
                    loadRecentOrders();
                    updateSalesChart();
                } catch (error) {
                    console.error('Error during auto refresh:', error);
                }
            }, 5000);
        }

        async function loadData() {
            try {
                // Load orders
                const ordersSnapshot = await getDocs(collection(db, 'orders'));
                ordersData = ordersSnapshot.docs.map(doc => ({
                    id: doc.id,
                    ...doc.data()
                }));

                // Load users
                const usersSnapshot = await getDocs(collection(db, 'users'));
                usersData = usersSnapshot.docs.map(doc => ({
                    id: doc.id,
                    ...doc.data()
                }));

                // Load menus
                const menusSnapshot = await getDocs(collection(db, 'menus'));
                menusData = menusSnapshot.docs.map(doc => ({
                    id: doc.id,
                    ...doc.data()
                }));

                // Load feedbacks
                const feedbacksSnapshot = await getDocs(collection(db, 'feedbacks'));
                feedbacksData = feedbacksSnapshot.docs.map(doc => ({
                    id: doc.id,
                    ...doc.data()
                }));

            } catch (error) {
                console.error('Error loading data:', error);
                throw error;
            }
        }

        function updateStatCards() {
            // Get today's date range
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);

            // Filter today's orders
            const todayOrders = ordersData.filter(order => {
                const orderDate = order.createdAt?.toDate ? order.createdAt.toDate() : new Date(order.createdAt);
                return orderDate >= today && orderDate < tomorrow;
            });

            // Today's Orders Count
            document.getElementById('todayOrders').textContent = todayOrders.length.toLocaleString();

            // Today's Revenue - exclude rejected orders
            const todayRevenue = todayOrders
                .filter(order => order.status?.toLowerCase() !== 'rejected')
                .reduce((sum, order) => sum + (order.total || 0), 0);
            document.getElementById('todayRevenue').textContent = '£' + todayRevenue.toLocaleString();

            // Pending Deliveries (all pending orders, not just today's)
            const pendingDeliveries = ordersData.filter(order => 
                order.status === 'pending' || order.status === 'preparing' || order.status === 'ready'
            ).length;
            document.getElementById('pendingDeliveries').textContent = pendingDeliveries;

            // Average Rating
            const averageRating = feedbacksData.length > 0 
                ? (feedbacksData.reduce((sum, feedback) => sum + (feedback.rating || 0), 0) / feedbacksData.length).toFixed(1)
                : '0.0';
            document.getElementById('averageRating').textContent = averageRating;
        }

        function loadRecentOrders() {
            const recentOrdersContainer = document.getElementById('recentOrders');
            
            if (ordersData.length === 0) {
                recentOrdersContainer.innerHTML = '<p class="text-center text-muted">No orders found</p>';
                return;
            }

            // Sort orders by creation date and take last 5
            const recentOrders = ordersData
                .sort((a, b) => {
                    const dateA = a.createdAt?.toDate ? a.createdAt.toDate() : new Date(a.createdAt);
                    const dateB = b.createdAt?.toDate ? b.createdAt.toDate() : new Date(b.createdAt);
                    return dateB - dateA;
                })
                .slice(0, 5);

            let html = '<div class="list-group list-group-flush">';
            
            recentOrders.forEach(order => {
                const timeAgo = getTimeAgo(order.createdAt?.toDate ? order.createdAt.toDate() : new Date(order.createdAt));
                const badgeClass = getStatusBadgeClass(order.status);
                const itemsText = order.items?.length > 0 ? order.items[0].name + (order.items.length > 1 ? ` +${order.items.length - 1} more` : '') : 'No items';
                
                html += `
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <div>
                            <h6 class="mb-1">Order #${order.orderId || order.id}</h6>
                            <p class="mb-1 text-muted small">${itemsText}</p>
                            <small class="text-muted">${timeAgo}</small>
                        </div>
                        <span class="badge ${badgeClass} rounded-pill">${order.status || 'Unknown'}</span>
                    </div>
                `;
            });
            
            html += '</div>';
            html += `
                <div class="text-center mt-3">
                    <a href="index.php?page=orders" class="btn btn-outline-primary btn-sm" onclick="viewAllOrders(); return false;">View All Orders</a>
                </div>
            `;
            
            recentOrdersContainer.innerHTML = html;
        }

        function initializeSalesChart() {
            const ctx = document.getElementById('salesChart').getContext('2d');
            
            // Generate last 7 days data
            const last7Days = [];
            const salesData = [];
            
            for (let i = 6; i >= 0; i--) {
                const date = new Date();
                date.setDate(date.getDate() - i);
                date.setHours(0, 0, 0, 0);
                
                const nextDate = new Date(date);
                nextDate.setDate(nextDate.getDate() + 1);
                
                const dayRevenue = ordersData
                    .filter(order => {
                        const orderDate = order.createdAt?.toDate ? order.createdAt.toDate() : new Date(order.createdAt);
                        return orderDate >= date && orderDate < nextDate;
                    })
                    .reduce((sum, order) => sum + (order.total || 0), 0);
                
                last7Days.push(date.toLocaleDateString('en-US', { weekday: 'short' }));
                salesData.push(dayRevenue);
            }

            salesChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: last7Days,
                    datasets: [{
                        label: 'Revenue (£)',
                        data: salesData,
                        borderColor: 'rgb(75, 192, 192)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        tension: 0.1,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return '£' + value.toLocaleString();
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        }
                    }
                }
            });
        }

        function setupRealTimeListeners() {
            // Listen for new orders
            onSnapshot(collection(db, 'orders'), (snapshot) => {
                ordersData = snapshot.docs.map(doc => ({
                    id: doc.id,
                    ...doc.data()
                }));
                updateStatCards();
                loadRecentOrders();
                updateSalesChart();
            });

            // Listen for new feedbacks
            onSnapshot(collection(db, 'feedbacks'), (snapshot) => {
                feedbacksData = snapshot.docs.map(doc => ({
                    id: doc.id,
                    ...doc.data()
                }));
                updateStatCards();
            });
        }

        function updateSalesChart() {
            if (!salesChart) return;
            
            // Update chart data
            const last7Days = [];
            const salesData = [];
            
            for (let i = 6; i >= 0; i--) {
                const date = new Date();
                date.setDate(date.getDate() - i);
                date.setHours(0, 0, 0, 0);
                
                const nextDate = new Date(date);
                nextDate.setDate(nextDate.getDate() + 1);
                
                const dayRevenue = ordersData
                    .filter(order => {
                        const orderDate = order.createdAt?.toDate ? order.createdAt.toDate() : new Date(order.createdAt);
                        return orderDate >= date && orderDate < nextDate;
                    })
                    .reduce((sum, order) => sum + (order.total || 0), 0);
                
                last7Days.push(date.toLocaleDateString('en-US', { weekday: 'short' }));
                salesData.push(dayRevenue);
            }
            
            salesChart.data.labels = last7Days;
            salesChart.data.datasets[0].data = salesData;
            salesChart.update();
        }

        // Utility functions
        function getTimeAgo(date) {
            const now = new Date();
            const diffInMinutes = Math.floor((now - date) / (1000 * 60));
            
            if (diffInMinutes < 1) return 'Just now';
            if (diffInMinutes < 60) return `${diffInMinutes} minutes ago`;
            if (diffInMinutes < 1440) return `${Math.floor(diffInMinutes / 60)} hours ago`;
            return `${Math.floor(diffInMinutes / 1440)} days ago`;
        }

        function getStatusBadgeClass(status) {
            switch (status?.toLowerCase()) {
                case 'pending': return 'bg-warning';
                case 'preparing': return 'bg-primary';
                case 'ready': return 'bg-success';
                case 'delivered': return 'bg-info';
                case 'cancelled': return 'bg-danger';
                default: return 'bg-secondary';
            }
        }

        function showError(message) {
            const errorHtml = `<div class="error-message">${message}</div>`;
            document.querySelectorAll('.stats-number').forEach(el => {
                if (el.querySelector('.loading')) {
                    el.innerHTML = 'Error';
                }
            });
        }

        // Navigation Functions
        window.navigateToPage = function(page) {
            // Check if we're in a PHP environment or single-page application
            if (typeof window !== 'undefined' && window.location.href.includes('index.php')) {
                // PHP template navigation
                window.location.href = `index.php?page=${page}`;
            } else {
                // For standalone dashboard, show appropriate modals or redirect
                switch(page) {
                    case 'orders':
                        showOrdersPage();
                        break;
                    case 'menu':
                        showMenuPage();
                        break;
                    case 'promotions':
                        showPromotionsPage();
                        break;
                    case 'reports':
                        showReportsPage();
                        break;
                    default:
                        // For now, show a coming soon message
                        alert(`${page.charAt(0).toUpperCase() + page.slice(1)} page functionality will be available soon!`);
                }
            }
        };

        // Quick Action Functions
        window.createNewOrder = function() {
            // Check if this should navigate to orders page or show modal
            if (typeof window !== 'undefined' && window.location.href.includes('index.php')) {
                window.location.href = 'index.php?page=orders';
            } else {
                showNewOrderModal();
            }
        };

        window.showNewOrderModal = async function() {
            try {
                // Load users for customer dropdown
                const customerSelect = document.getElementById('customerId');
                customerSelect.innerHTML = '<option value="">Select Customer</option>';
                
                usersData.forEach(user => {
                    customerSelect.innerHTML += `<option value="${user.id}">${user.name || user.email || 'User ' + user.id}</option>`;
                });

                // Load menu items
                const menuContainer = document.getElementById('menuItems');
                menuContainer.innerHTML = '';
                
                menusData.forEach(item => {
                    menuContainer.innerHTML += `
                        <div class="form-check d-flex justify-content-between align-items-center mb-2">
                            <div>
                                <input class="form-check-input menu-item" type="checkbox" value="${item.id}" 
                                       data-price="${item.price}" data-name="${item.name || 'Unnamed Item'}">
                                <label class="form-check-label">
                                    ${item.name || 'Unnamed Item'} - £${item.price || 0}
                                </label>
                            </div>
                            <input type="number" class="form-control" style="width: 80px;" placeholder="Qty" 
                                   min="1" value="1" onchange="updateOrderTotal()">
                        </div>
                    `;
                });

                // Show modal
                new bootstrap.Modal(document.getElementById('newOrderModal')).show();
                
            } catch (error) {
                console.error('Error loading order modal:', error);
                alert('Error loading order form');
            }
        };

        window.updateOrderTotal = function() {
            let total = 0;
            document.querySelectorAll('.menu-item:checked').forEach(checkbox => {
                const price = parseFloat(checkbox.dataset.price) || 0;
                const qty = parseInt(checkbox.closest('.form-check').querySelector('input[type="number"]').value) || 1;
                total += price * qty;
            });
            document.getElementById('orderTotal').textContent = total;
        };

        window.submitOrder = async function() {
            try {
                const customerId = document.getElementById('customerId').value;
                const deliveryAddress = document.getElementById('deliveryAddress').value;
                
                if (!customerId || !deliveryAddress) {
                    alert('Please fill in all required fields');
                    return;
                }

                const selectedItems = [];
                let total = 0;

                document.querySelectorAll('.menu-item:checked').forEach(checkbox => {
                    const price = parseFloat(checkbox.dataset.price) || 0;
                    const name = checkbox.dataset.name;
                    const qty = parseInt(checkbox.closest('.form-check').querySelector('input[type="number"]').value) || 1;
                    
                    selectedItems.push({
                        foodId: checkbox.value,
                        name: name,
                        price: price,
                        qty: qty
                    });
                    
                    total += price * qty;
                });

                if (selectedItems.length === 0) {
                    alert('Please select at least one menu item');
                    return;
                }

                const orderData = {
                    createdAt: new Date(),
                    updatedAt: new Date(),
                    deliveryAddress: deliveryAddress,
                    items: selectedItems,
                    orderId: 'ORD' + Date.now(),
                    status: 'pending',
                    total: total,
                    userId: customerId
                };

                await addDoc(collection(db, 'orders'), orderData);
                
                // Close modal and reset form
                bootstrap.Modal.getInstance(document.getElementById('newOrderModal')).hide();
                document.getElementById('newOrderForm').reset();
                document.getElementById('orderTotal').textContent = '0';
                
                alert('Order created successfully!');
                
            } catch (error) {
                console.error('Error creating order:', error);
                alert('Error creating order');
            }
        };

        window.addMenuItem = function() {
            navigateToPage('menu');
        };

        window.createPromotion = function() {
            navigateToPage('promotions');
        };

        window.viewReports = function() {
            navigateToPage('reports');
        };

        window.viewAllOrders = function() {
            navigateToPage('orders');
        };

        // Page display functions for standalone mode
        window.showOrdersPage = function() {
            // Create a full-screen modal or redirect to orders management
            alert('Orders Management Page\n\nFeatures:\n• View all orders\n• Update order status\n• Track deliveries\n• Customer details\n\nThis would show a complete orders management interface.');
        };

        window.showMenuPage = function() {
            alert('Menu Management Page\n\nFeatures:\n• Add new menu items\n• Edit existing items\n• Manage categories\n• Set pricing\n• Upload images\n\nThis would show a complete menu management interface.');
        };

        window.showPromotionsPage = function() {
            alert('Promotions Management Page\n\nFeatures:\n• Create discount coupons\n• Set promotional offers\n• Manage seasonal deals\n• Track promotion usage\n\nThis would show a complete promotions management interface.');
        };

        window.showReportsPage = function() {
            alert('Reports & Analytics Page\n\nFeatures:\n• Detailed sales reports\n• Customer analytics\n• Performance metrics\n• Export capabilities\n• Revenue trends\n\nThis would show comprehensive reporting dashboards.');
        };

        // Add event listeners for menu item checkboxes
        document.addEventListener('change', function(e) {
            if (e.target.classList.contains('menu-item')) {
                updateOrderTotal();
            }
        });

        // Clean up auto refresh on page unload
        window.addEventListener('beforeunload', function() {
            if (autoRefreshInterval) {
                clearInterval(autoRefreshInterval);
            }
        });

    </script>
</body>
</html>