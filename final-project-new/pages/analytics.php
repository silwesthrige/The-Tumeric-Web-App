
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
            border-left: 4px solid #007bff;
            transition: transform 0.2s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-2px);
        }
        
        .stats-card.success {
            border-left-color: #28a745;
        }
        
        .stats-card.warning {
            border-left-color: #ffc107;
        }
        
        .stats-card.info {
            border-left-color: #17a2b8;
        }

        .stats-card.gemini {
            border-left-color: #8e44ad;
        }
        
        .stats-number {
            font-size: 2rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .stats-label {
            color: #6c757d;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .stats-change {
            font-size: 0.875rem;
            font-weight: 600;
            margin-top: 8px;
        }
        
        .stats-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.8rem;
            color: rgba(0, 0, 0, 0.1);
        }
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
        }
        
        .card-header {
            background: white;
            border-bottom: 1px solid #eee;
            border-radius: 15px 15px 0 0 !important;
        }
        
        .chart-container {
            position: relative;
            height: 300px;
        }
        
        .loading {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            color: #6c757d;
        }
        
        .error {
            color: #dc3545;
            text-align: center;
            padding: 20px;
        }
        
        .table th {
            border-top: none;
            font-weight: 600;
            color: #495057;
            font-size: 0.9rem;
        }
        
        .progress {
            height: 8px;
            border-radius: 10px;
        }
        
        .food-item-img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 8px;
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: 0.15em;
        }
        .h2 {
            font-size: 2rem;
            font-weight: 400;
            line-height: 1.2;
            color: #495057;
        }

        .chart-toggle-buttons {
            position: absolute;
            top: 10px;
            right: 15px;
            z-index: 10;
        }

        .chart-toggle-buttons .btn {
            padding: 0.25rem 0.75rem;
            font-size: 0.875rem;
            margin-left: 0.25rem;
        }

        .gemini-ai-badge {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-size: 0.75rem;
            padding: 2px 8px;
            border-radius: 10px;
            margin-left: 8px;
        }

        .gemini-ai-badge i {
            margin-right: 4px;
        }

        .trending-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            margin-bottom: 8px;
            transition: all 0.2s ease;
        }

        .trending-item:hover {
            border-color: #8e44ad;
            transform: translateX(2px);
        }

        .trending-rank {
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.8rem;
            margin-right: 10px;
        }

        .trending-details {
            flex-grow: 1;
        }

        .trending-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 2px;
        }

        .trending-category {
            font-size: 0.8rem;
            color: #6c757d;
        }

        .trending-trend {
            font-size: 0.8rem;
            font-weight: 600;
        }

        .trend-up { color: #28a745; }
        .trend-hot { color: #dc3545; }
        .trend-stable { color: #6c757d; }
    </style>
</head>
<body>
    <!-- Main Content -->
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Analytics Dashboard</h1>
        </div>

        <!-- Key Metrics -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card">
                    <div class="stats-number" id="totalRevenue"><i class="spinner-border spinner-border-sm"></i></div>
                    <div class="stats-label">Total Revenue</div>
                    <div class="stats-change text-success" id="revenueChange">
                        <i class="fas fa-arrow-up me-1"></i>Calculating...
                    </div>
                    <i class="fas fa-pound-sign stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card success">
                    <div class="stats-number" id="totalOrders"><i class="spinner-border spinner-border-sm"></i></div>
                    <div class="stats-label">Total Orders</div>
                    <div class="stats-change text-success" id="ordersChange">
                        <i class="fas fa-arrow-up me-1"></i>Calculating...
                    </div>
                    <i class="fas fa-shopping-cart stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card warning">
                    <div class="stats-number" id="avgOrderValue"><i class="spinner-border spinner-border-sm"></i></div>
                    <div class="stats-label">Avg Order Value</div>
                    <div class="stats-change" id="aovChange">
                        <i class="fas fa-arrow-up me-1"></i>Calculating...
                    </div>
                    <i class="fas fa-chart-line stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card info">
                    <div class="stats-number" id="activeCustomers"><i class="spinner-border spinner-border-sm"></i></div>
                    <div class="stats-label">Active Customers</div>
                    <div class="stats-change text-success" id="customersChange">
                        <i class="fas fa-arrow-up me-1"></i>Calculating...
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
                        <div class="chart-toggle-buttons">
                            <button type="button" class="btn btn-sm btn-primary" id="weeklyBtn" onclick="switchRevenueChart('weekly')">Weekly</button>
                            <button type="button" class="btn btn-sm btn-outline-primary" id="monthlyBtn" onclick="switchRevenueChart('monthly')">Monthly</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-fire me-2"></i>Top Selling in India
                            <span class="gemini-ai-badge">
                                <i class="fas fa-robot"></i>Gemini AI
                            </span>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="loading text-center" id="trendingItemsLoading">
                            <i class="fas fa-spinner fa-spin"></i>
                        </div>
                        <div id="trendingItemsContainer" style="display: none;">
                            <div class="text-muted mb-2" style="font-size: 0.85rem;">
                                <i class="fas fa-calendar-week me-1"></i>This week's trending items
                            </div>
                            <div id="trendingItemsList">
                                <!-- AI-generated trending items will be populated here -->
                            </div>
                        </div>
                        <div id="trendingItemsError" style="display: none;" class="text-center text-muted">
                            <i class="fas fa-exclamation-triangle"></i>
                            <p class="mb-0 mt-2">Unable to load trending data</p>
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
                        <div class="loading" id="topItemsLoading">
                            <i class="fas fa-spinner fa-spin"></i>
                        </div>
                        <div class="table-responsive" id="topItemsTable" style="display: none;">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Orders</th>
                                        <th>Revenue</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody id="topItemsBody">
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
                            <i class="fas fa-exclamation-triangle me-2"></i>Low Demand Items
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="loading" id="lowDemandLoading">
                            <i class="fas fa-spinner fa-spin"></i>
                        </div>
                        <div class="table-responsive" id="lowDemandTable" style="display: none;">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Orders</th>
                                        <th>Revenue</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="lowDemandBody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Trends by Hour and Average Ratings Row -->
        <div class="row mb-4">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-clock me-2"></i>Order Trends by Hour
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="hourlyChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-star me-2"></i>Average Ratings
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="ratingsChart"></canvas>
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
                            <h3 class="text-primary" id="newCustomers"><i class="spinner-border spinner-border-sm"></i></h3>
                            <p class="text-muted">New customers this month</p>
                        </div>
                        <div class="progress mb-3" style="height: 10px;">
                            <div class="progress-bar bg-primary" id="newCustomersProgress" style="width: 0%"></div>
                        </div>
                        <small class="text-muted" id="acquisitionTarget"><i class="spinner-border spinner-border-sm"></i></small>
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
                            <h3 class="text-success" id="retentionRate"><i class="spinner-border spinner-border-sm"></i></h3>
                            <p class="text-muted">Returning customers</p>
                        </div>
                        <div class="progress mb-3" style="height: 10px;">
                            <div class="progress-bar bg-success" id="retentionProgress" style="width: 0%"></div>
                        </div>
                        <small class="text-muted" id="retentionComparison"><i class="spinner-border spinner-border-sm"></i></small>
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
                            <h3 class="text-warning" id="avgRating"><i class="spinner-border spinner-border-sm"></i></h3>
                            <p class="text-muted">Average rating</p>
                        </div>
                        <div class="d-flex justify-content-center mb-3" id="starRating">
                            <!-- Stars will be populated by JavaScript -->
                        </div>
                        <small class="text-muted" id="totalReviews"><i class="spinner-border spinner-border-sm"></i></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Firebase Configuration -->
    <script type="module">
        // Firebase configuration and initialization
        import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";
        import { getFirestore, collection, getDocs, query, where, orderBy, limit } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";

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

        // Global variables for charts
        let revenueChart, ratingsChart, hourlyChart;
        let currentRevenueView = 'weekly'; // Track current view
        let ordersData = []; // Store orders data for chart switching

        // Utility functions
        function formatCurrency(amount) {
            return new Intl.NumberFormat('en-GB', {
                style: 'currency',
                currency: 'GBP',
                minimumFractionDigits: 0
            }).format(amount);
        }

        function formatNumber(num) {
            return new Intl.NumberFormat('en-IN').format(num);
        }

        function getDateDaysAgo(days) {
            const date = new Date();
            date.setDate(date.getDate() - days);
            return date;
        }

        function showError(elementId, message) {
            document.getElementById(elementId).innerHTML = `<div class="error">Error: ${message}</div>`;
        }

        // Gemini AI simulation function (simulates AI-powered trending data)
        async function fetchTrendingFoodItems() {
            try {
                console.log('Fetching trending food items from simulated Gemini AI...');
                
                // Simulate API delay
                await new Promise(resolve => setTimeout(resolve, 2000));
                
                // Simulated trending Indian food data (in real implementation, this would call Gemini AI API)
                const trendingItems = [
                    {
                        name: "Butter Chicken",
                        category: "North Indian",
                        trend: "hot",
                        popularity: 95
                    },
                    {
                        name: "Biryani",
                        category: "Rice Dishes",
                        trend: "up",
                        popularity: 92
                    },
                    {
                        name: "Masala Dosa",
                        category: "South Indian",
                        trend: "up",
                        popularity: 88
                    },
                    {
                        name: "Paneer Tikka",
                        category: "Appetizers",
                        trend: "stable",
                        popularity: 85
                    },
                    {
                        name: "Chole Bhature",
                        category: "Street Food",
                        trend: "hot",
                        popularity: 82
                    }
                ];

                console.log('Trending items fetched:', trendingItems);
                return trendingItems;
            } catch (error) {
                console.error('Error fetching trending items:', error);
                throw error;
            }
        }

        function updateTrendingItems(trendingItems) {
            const loading = document.getElementById('trendingItemsLoading');
            const container = document.getElementById('trendingItemsContainer');
            const errorDiv = document.getElementById('trendingItemsError');
            const itemsList = document.getElementById('trendingItemsList');

            loading.style.display = 'none';

            if (trendingItems && trendingItems.length > 0) {
                itemsList.innerHTML = '';
                
                trendingItems.forEach((item, index) => {
                    const trendIcon = item.trend === 'hot' ? 'fas fa-fire' : 
                                     item.trend === 'up' ? 'fas fa-arrow-up' : 
                                     'fas fa-minus';
                    const trendClass = item.trend === 'hot' ? 'trend-hot' : 
                                      item.trend === 'up' ? 'trend-up' : 
                                      'trend-stable';

                    const itemElement = document.createElement('div');
                    itemElement.className = 'trending-item';
                    itemElement.innerHTML = `
                        <div class="trending-rank">${index + 1}</div>
                        <div class="trending-details">
                            <div class="trending-name">${item.name}</div>
                            <div class="trending-category">${item.category}</div>
                        </div>
                        <div class="trending-trend ${trendClass}">
                            <i class="${trendIcon} me-1"></i>
                            ${item.trend === 'hot' ? 'Hot' : item.trend === 'up' ? '+' + (item.popularity - 70) + '%' : 'Stable'}
                        </div>
                    `;
                    itemsList.appendChild(itemElement);
                });

                container.style.display = 'block';
                errorDiv.style.display = 'none';
            } else {
                container.style.display = 'none';
                errorDiv.style.display = 'block';
            }
        }

        // Data fetching functions with better error handling
        async function fetchOrders() {
            try {
                console.log('Attempting to fetch orders...');
                const ordersRef = collection(db, 'orders');
                const snapshot = await getDocs(ordersRef);
                console.log(`Fetched ${snapshot.docs.length} orders`);
                
                const orders = snapshot.docs.map(doc => {
                    const data = doc.data();
                    console.log('Order data sample:', data);
                    return {
                        id: doc.id,
                        ...data,
                        // Handle different timestamp formats
                        createdAt: data.createdAt?.toDate ? data.createdAt.toDate() : 
                                  data.createdAt ? new Date(data.createdAt) : new Date()
                    };
                });
                
                console.log('Processed orders:', orders.length);
                return orders;
            } catch (error) {
                console.error('Error fetching orders:', error);
                console.error('Error details:', error.message, error.code);
                return [];
            }
        }

        async function fetchUsers() {
            try {
                console.log('Attempting to fetch users...');
                const usersRef = collection(db, 'users');
                const snapshot = await getDocs(usersRef);
                console.log(`Fetched ${snapshot.docs.length} users`);
                
                const users = snapshot.docs.map(doc => ({
                    id: doc.id,
                    ...doc.data()
                }));
                
                console.log('Users sample:', users.slice(0, 2));
                return users;
            } catch (error) {
                console.error('Error fetching users:', error);
                console.error('Error details:', error.message, error.code);
                return [];
            }
        }

        async function fetchMenus() {
            try {
                console.log('Attempting to fetch menus...');
                const menusRef = collection(db, 'menus');
                const snapshot = await getDocs(menusRef);
                console.log(`Fetched ${snapshot.docs.length} menus`);
                
                const menus = snapshot.docs.map(doc => ({
                    id: doc.id,
                    ...doc.data()
                }));
                
                console.log('Menus sample:', menus.slice(0, 2));
                return menus;
            } catch (error) {
                console.error('Error fetching menus:', error);
                console.error('Error details:', error.message, error.code);
                return [];
            }
        }

        async function fetchCategories() {
            try {
                console.log('Attempting to fetch categories...');
                const categoriesRef = collection(db, 'category');
                const snapshot = await getDocs(categoriesRef);
                console.log(`Fetched ${snapshot.docs.length} categories`);
                
                const categories = snapshot.docs.map(doc => ({
                    id: doc.id,
                    ...doc.data()
                }));
                
                console.log('Categories sample:', categories.slice(0, 2));
                return categories;
            } catch (error) {
                console.error('Error fetching categories:', error);
                console.error('Error details:', error.message, error.code);
                return [];
            }
        }

        async function fetchFeedbacks() {
            try {
                console.log('Attempting to fetch feedbacks...');
                const feedbacksRef = collection(db, 'feedbacks');
                const snapshot = await getDocs(feedbacksRef);
                console.log(`Fetched ${snapshot.docs.length} feedbacks`);
                
                const feedbacks = snapshot.docs.map(doc => {
                    const data = doc.data();
                    return {
                        id: doc.id,
                        ...data,
                        createdAt: data.createdAt?.toDate ? data.createdAt.toDate() : 
                                  data.createdAt ? new Date(data.createdAt) : new Date()
                    };
                });
                
                console.log('Feedbacks sample:', feedbacks.slice(0, 2));
                return feedbacks;
            } catch (error) {
                console.error('Error fetching feedbacks:', error);
                console.error('Error details:', error.message, error.code);
                return [];
            }
        }

        // Test Firebase connection
        async function testFirebaseConnection() {
            try {
                console.log('Testing Firebase connection...');
                console.log('Firebase app:', app);
                console.log('Firestore instance:', db);
                
                // Try to fetch a single document to test connection
                const testRef = collection(db, 'orders');
                const testQuery = query(testRef, limit(1));
                const testSnapshot = await getDocs(testQuery);
                
                console.log('Connection test successful. Document count:', testSnapshot.docs.length);
                if (testSnapshot.docs.length > 0) {
                    console.log('Sample document:', testSnapshot.docs[0].data());
                }
                
                return true;
            } catch (error) {
                console.error('Firebase connection test failed:', error);
                console.error('Error code:', error.code);
                console.error('Error message:', error.message);
                return false;
            }
        }

        // Analytics calculations
        function calculateKeyMetrics(orders, users) {
            const now = new Date();
            const thirtyDaysAgo = getDateDaysAgo(30);
            const sixtyDaysAgo = getDateDaysAgo(60);

            // Current month orders - exclude rejected orders
            const currentMonthOrders = orders.filter(order => 
                order.createdAt >= thirtyDaysAgo && order.status?.toLowerCase() !== 'rejected'
            );
            const previousMonthOrders = orders.filter(order => 
                order.createdAt >= sixtyDaysAgo && order.createdAt < thirtyDaysAgo && order.status?.toLowerCase() !== 'rejected'
            );

            // Total revenue
            const totalRevenue = currentMonthOrders.reduce((sum, order) => sum + (order.total || 0), 0);
            const previousRevenue = previousMonthOrders.reduce((sum, order) => sum + (order.total || 0), 0);
            const revenueChange = previousRevenue > 0 ? ((totalRevenue - previousRevenue) / previousRevenue * 100).toFixed(1) : 0;

            // Total orders
            const totalOrders = currentMonthOrders.length;
            const previousOrdersCount = previousMonthOrders.length;
            const ordersChange = previousOrdersCount > 0 ? ((totalOrders - previousOrdersCount) / previousOrdersCount * 100).toFixed(1) : 0;

            // Average order value
            const avgOrderValue = totalOrders > 0 ? totalRevenue / totalOrders : 0;
            const previousAvgOrderValue = previousOrdersCount > 0 ? previousRevenue / previousOrdersCount : 0;
            const aovChange = previousAvgOrderValue > 0 ? ((avgOrderValue - previousAvgOrderValue) / previousAvgOrderValue * 100).toFixed(1) : 0;

            // Active customers (customers who ordered in last 30 days)
            const activeCustomers = new Set(currentMonthOrders.map(order => order.userId)).size;
            const previousActiveCustomers = new Set(previousMonthOrders.map(order => order.userId)).size;
            const customersChange = previousActiveCustomers > 0 ? ((activeCustomers - previousActiveCustomers) / previousActiveCustomers * 100).toFixed(1) : 0;

            return {
                totalRevenue,
                revenueChange,
                totalOrders,
                ordersChange,
                avgOrderValue,
                aovChange,
                activeCustomers,
                customersChange
            };
        }

        function calculateTopItems(orders, menus, categories) {
            const itemStats = {};
            const allMenuItems = {};
            
            // First, create a map of all menu items
            menus.forEach(menu => {
                allMenuItems[menu.foodId] = {
                    foodId: menu.foodId,
                    name: menu.foodName,
                    categoryId: menu.category,
                    categoryName: 'Unknown',
                    imageUrl: menu.imageUrl,
                    price: menu.price,
                    orders: 0,
                    revenue: 0,
                    status: menu.status || 'active'
                };
            });

            // Add category names
            categories.forEach(category => {
                Object.values(allMenuItems).forEach(item => {
                    if (item.categoryId === category.categoryId) {
                        item.categoryName = category.categoryName || 'Unknown';
                    }
                });
            });

            // Count orders for items that have been ordered
            orders.forEach(order => {
                if (order.items && Array.isArray(order.items)) {
                    order.items.forEach(item => {
                        const foodId = item.foodId;
                        if (allMenuItems[foodId]) {
                            allMenuItems[foodId].orders += item.qty || 1;
                            allMenuItems[foodId].revenue += (item.price || 0) * (item.qty || 1);
                        }
                    });
                }
            });

            const sortedItems = Object.values(allMenuItems).sort((a, b) => b.revenue - a.revenue);

            // Get top items (items with orders > 0)
            const topItems = sortedItems.filter(item => item.orders > 0).slice(0, 5);

            // Get low demand items (items with 0 orders or very low orders) - Show only first 5
            const lowDemandItems = sortedItems
                .filter(item => item.orders <= 2) // 0, 1, or 2 orders
                .slice(0, 5); // Show only first 5 low demand items

            return {
                topItems,
                lowDemandItems
            };
        }

        function calculateHourlyTrends(orders) {
            const hourlyData = Array(24).fill(0);
            
            orders.forEach(order => {
                const hour = order.createdAt.getHours();
                hourlyData[hour]++;
            });

            return hourlyData;
        }

        function calculateCustomerMetrics(orders, users, feedbacks) {
            const now = new Date();
            const thirtyDaysAgo = getDateDaysAgo(30);
            
            // New customers this month
            const newCustomers = users.filter(user => {
                const firstOrder = orders
                    .filter(order => order.userId === user.userId)
                    .sort((a, b) => a.createdAt - b.createdAt)[0];
                return firstOrder && firstOrder.createdAt >= thirtyDaysAgo;
            }).length;

            // Returning customers
            const customerOrderCounts = {};
            orders.forEach(order => {
                if (order.userId) {
                    customerOrderCounts[order.userId] = (customerOrderCounts[order.userId] || 0) + 1;
                }
            });

            const returningCustomers = Object.values(customerOrderCounts).filter(count => count > 1).length;
            const totalCustomersWithOrders = Object.keys(customerOrderCounts).length;
            const retentionRate = totalCustomersWithOrders > 0 ? (returningCustomers / totalCustomersWithOrders * 100).toFixed(0) : 0;

            // Average rating
            const validRatings = feedbacks.filter(f => f.rating && f.rating > 0);
            const avgRating = validRatings.length > 0 ? 
                (validRatings.reduce((sum, f) => sum + f.rating, 0) / validRatings.length).toFixed(1) : '0.0';

            return {
                newCustomers,
                retentionRate,
                avgRating,
                totalReviews: validRatings.length
            };
        }

        // Chart creation functions
        function createRevenueChart(orders, view = 'weekly') {
            const ctx = document.getElementById('revenueChart').getContext('2d');
            
            let chartData;
            if (view === 'weekly') {
                chartData = generateWeeklyRevenueData(orders);
            } else {
                chartData = generateMonthlyRevenueData(orders);
            }

            if (revenueChart) {
                revenueChart.destroy();
            }

            revenueChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: chartData.labels,
                    datasets: [{
                        label: 'Revenue',
                        data: chartData.data,
                        borderColor: '#007bff',
                        backgroundColor: 'rgba(0, 123, 255, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return '£' + value.toLocaleString('en-GB');
                                }
                            }
                        }
                    }
                }
            });
        }

        function generateWeeklyRevenueData(orders) {
            const dailyRevenue = {};
            for (let i = 6; i >= 0; i--) {
                const date = getDateDaysAgo(i);
                const dateStr = date.toISOString().split('T')[0];
                dailyRevenue[dateStr] = 0;
            }

            orders.forEach(order => {
                const dateStr = order.createdAt.toISOString().split('T')[0];
                if (dailyRevenue.hasOwnProperty(dateStr)) {
                    dailyRevenue[dateStr] += order.total || 0;
                }
            });

            const labels = Object.keys(dailyRevenue).map(date => {
                const d = new Date(date);
                return d.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
            });
            const data = Object.values(dailyRevenue);

            return { labels, data };
        }

        function generateMonthlyRevenueData(orders) {
            const monthlyRevenue = {};
            for (let i = 5; i >= 0; i--) {
                const date = new Date();
                date.setMonth(date.getMonth() - i);
                const monthKey = date.getFullYear() + '-' + String(date.getMonth() + 1).padStart(2, '0');
                monthlyRevenue[monthKey] = 0;
            }

            orders.forEach(order => {
                const orderDate = order.createdAt;
                const monthKey = orderDate.getFullYear() + '-' + String(orderDate.getMonth() + 1).padStart(2, '0');
                if (monthlyRevenue.hasOwnProperty(monthKey)) {
                    monthlyRevenue[monthKey] += order.total || 0;
                }
            });

            const labels = Object.keys(monthlyRevenue).map(monthKey => {
                const [year, month] = monthKey.split('-');
                const date = new Date(year, month - 1);
                return date.toLocaleDateString('en-US', { month: 'short', year: 'numeric' });
            });
            const data = Object.values(monthlyRevenue);

            return { labels, data };
        }

        function createRatingsChart(feedbacks) {
            const ctx = document.getElementById('ratingsChart').getContext('2d');
            
            const ratingCounts = [0, 0, 0, 0, 0]; // For ratings 1-5
            feedbacks.forEach(feedback => {
                if (feedback.rating && feedback.rating >= 1 && feedback.rating <= 5) {
                    ratingCounts[feedback.rating - 1]++;
                }
            });

            if (ratingsChart) {
                ratingsChart.destroy();
            }

            ratingsChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['1 Star', '2 Stars', '3 Stars', '4 Stars', '5 Stars'],
                    datasets: [{
                        data: ratingCounts,
                        backgroundColor: [
                            '#dc3545',
                            '#fd7e14',
                            '#ffc107',
                            '#28a745',
                            '#20c997'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true
                            }
                        }
                    }
                }
            });
        }

        function createHourlyChart(orders) {
            const ctx = document.getElementById('hourlyChart').getContext('2d');
            
            const hourlyData = calculateHourlyTrends(orders);
            const labels = Array.from({length: 24}, (_, i) => {
                const hour = i === 0 ? 12 : i > 12 ? i - 12 : i;
                const period = i < 12 ? 'AM' : 'PM';
                return `${hour}${period}`;
            });

            if (hourlyChart) {
                hourlyChart.destroy();
            }

            hourlyChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Orders',
                        data: hourlyData,
                        backgroundColor: '#4ecdc4',
                        borderColor: '#4ecdc4',
                        borderWidth: 1,
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });
        }

        // Chart switching function
        window.switchRevenueChart = function(view) {
            currentRevenueView = view;
            
            // Update button states
            document.getElementById('weeklyBtn').className = view === 'weekly' ? 'btn btn-sm btn-primary' : 'btn btn-sm btn-outline-primary';
            document.getElementById('monthlyBtn').className = view === 'monthly' ? 'btn btn-sm btn-primary' : 'btn btn-sm btn-outline-primary';
            
            // Recreate chart with stored orders data
            createRevenueChart(ordersData, view);
        };

        // UI update functions
        function updateKeyMetrics(metrics) {
            document.getElementById('totalRevenue').textContent = formatCurrency(metrics.totalRevenue);
            document.getElementById('totalOrders').textContent = formatNumber(metrics.totalOrders);
            document.getElementById('avgOrderValue').textContent = formatCurrency(metrics.avgOrderValue);
            document.getElementById('activeCustomers').textContent = formatNumber(metrics.activeCustomers);

            // Update changes
            updateChangeIndicator('revenueChange', metrics.revenueChange);
            updateChangeIndicator('ordersChange', metrics.ordersChange);
            updateChangeIndicator('aovChange', metrics.aovChange);
            updateChangeIndicator('customersChange', metrics.customersChange);
        }

        function updateChangeIndicator(elementId, change) {
            const element = document.getElementById(elementId);
            const isPositive = parseFloat(change) >= 0;
            
            element.className = `stats-change ${isPositive ? 'text-success' : 'text-danger'}`;
            element.innerHTML = `
                <i class="fas fa-arrow-${isPositive ? 'up' : 'down'} me-1"></i>
                ${isPositive ? '+' : ''}${change}%
            `;
        }

        function updateTopItems(topItems) {
            const tbody = document.getElementById('topItemsBody');
            const loading = document.getElementById('topItemsLoading');
            const table = document.getElementById('topItemsTable');

            tbody.innerHTML = '';
            
            if (topItems.length === 0) {
                tbody.innerHTML = '<tr><td colspan="4" class="text-center text-muted">No data available</td></tr>';
            } else {
                topItems.forEach(item => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="${item.imageUrl || 'https://via.placeholder.com/40'}" 
                                     alt="${item.name}" class="food-item-img me-2"
                                     onerror="this.src='https://via.placeholder.com/40'">
                                <span>${item.name}</span>
                            </div>
                        </td>
                        <td><strong>${formatNumber(item.orders)}</strong></td>
                        <td><strong>${formatCurrency(item.revenue)}</strong></td>
                        <td><span class="badge bg-success">${item.categoryName}</span></td>
                    `;
                    tbody.appendChild(row);
                });
            }

            loading.style.display = 'none';
            table.style.display = 'block';
        }

        function updateLowDemandItems(lowDemandItems) {
            const tbody = document.getElementById('lowDemandBody');
            const loading = document.getElementById('lowDemandLoading');
            const table = document.getElementById('lowDemandTable');

            tbody.innerHTML = '';
            
            if (lowDemandItems.length === 0) {
                tbody.innerHTML = '<tr><td colspan="4" class="text-center text-muted">No data available</td></tr>';
            } else {
                lowDemandItems.forEach(item => {
                    const row = document.createElement('tr');
                    const statusBadge = item.orders === 0 ? 
                        '<span class="badge bg-danger">Never Ordered</span>' : 
                        `<span class="badge bg-warning">Only ${item.orders} order${item.orders > 1 ? 's' : ''}</span>`;
                    
                    row.innerHTML = `
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="${item.imageUrl || 'https://via.placeholder.com/40'}" 
                                     alt="${item.name}" class="food-item-img me-2"
                                     onerror="this.src='https://via.placeholder.com/40'">
                                <span>${item.name}</span>
                            </div>
                        </td>
                        <td><strong>${formatNumber(item.orders)}</strong></td>
                        <td><strong>${formatCurrency(item.revenue)}</strong></td>
                        <td>${statusBadge}</td>
                    `;
                    tbody.appendChild(row);
                });
            }

            loading.style.display = 'none';
            table.style.display = 'block';
        }

        function updateCustomerMetrics(metrics) {
            document.getElementById('newCustomers').textContent = formatNumber(metrics.newCustomers);
            document.getElementById('retentionRate').textContent = `${metrics.retentionRate}%`;
            document.getElementById('avgRating').textContent = metrics.avgRating;
            document.getElementById('totalReviews').textContent = `Based on ${formatNumber(metrics.totalReviews)} reviews`;

            // Update progress bars
            const newCustomersTarget = 200; // Example target
            const newCustomersProgress = Math.min((metrics.newCustomers / newCustomersTarget) * 100, 100);
            document.getElementById('newCustomersProgress').style.width = `${newCustomersProgress}%`;
            document.getElementById('acquisitionTarget').textContent = `${newCustomersProgress.toFixed(0)}% of monthly target (${newCustomersTarget}) achieved`;

            document.getElementById('retentionProgress').style.width = `${metrics.retentionRate}%`;
            const industryAverage = 65;
            const comparison = metrics.retentionRate > industryAverage ? 'Above' : 'Below';
            document.getElementById('retentionComparison').textContent = `${comparison} industry average (${industryAverage}%)`;

            // Update star rating
            updateStarRating(parseFloat(metrics.avgRating));
        }

        function updateStarRating(rating) {
            const starContainer = document.getElementById('starRating');
            starContainer.innerHTML = '';
            
            for (let i = 1; i <= 5; i++) {
                const star = document.createElement('i');
                star.className = i <= rating ? 'fas fa-star text-warning' : 'far fa-star text-warning';
                starContainer.appendChild(star);
            }
        }

        // Main dashboard initialization - runs only once on page load
        async function initializeDashboard() {
            try {
                console.log('=== Starting Dashboard Initialization ===');
                
                // Test Firebase connection first
                const connectionWorking = await testFirebaseConnection();
                if (!connectionWorking) {
                    throw new Error('Firebase connection failed');
                }

                // Fetch trending items from simulated Gemini AI
                console.log('=== Fetching Trending Items ===');
                try {
                    const trendingItems = await fetchTrendingFoodItems();
                    updateTrendingItems(trendingItems);
                } catch (error) {
                    console.error('Error fetching trending items:', error);
                    updateTrendingItems(null);
                }

                // Fetch all data with individual error handling
                console.log('=== Fetching Data ===');
                
                const orders = await fetchOrders();
                ordersData = orders; // Store orders data for chart switching
                console.log(`Orders loaded: ${orders.length}`);
                
                const users = await fetchUsers();
                console.log(`Users loaded: ${users.length}`);
                
                const menus = await fetchMenus();
                console.log(`Menus loaded: ${menus.length}`);
                
                const categories = await fetchCategories();
                console.log(`Categories loaded: ${categories.length}`);
                
                const feedbacks = await fetchFeedbacks();
                console.log(`Feedbacks loaded: ${feedbacks.length}`);

                // Check if we have any data
                if (orders.length === 0 && users.length === 0 && menus.length === 0 && feedbacks.length === 0) {
                    console.warn('No data found in any collection');
                    showNoDataMessage();
                    return;
                }

                console.log('=== Calculating Metrics ===');
                
                // Calculate metrics with fallbacks
                let keyMetrics, itemData, customerMetrics;
                
                try {
                    keyMetrics = calculateKeyMetrics(orders, users);
                    console.log('Key metrics calculated:', keyMetrics);
                } catch (error) {
                    console.error('Error calculating key metrics:', error);
                    keyMetrics = {
                        totalRevenue: 0,
                        revenueChange: 0,
                        totalOrders: orders.length || 0,
                        ordersChange: 0,
                        avgOrderValue: 0,
                        aovChange: 0,
                        activeCustomers: users.length || 0,
                        customersChange: 0
                    };
                }

                try {
                    itemData = calculateTopItems(orders, menus, categories);
                    console.log('Item data calculated:', itemData.topItems.length, 'top items,', itemData.lowDemandItems.length, 'low demand items');
                } catch (error) {
                    console.error('Error calculating item data:', error);
                    itemData = {
                        topItems: [],
                        lowDemandItems: []
                    };
                }

                try {
                    customerMetrics = calculateCustomerMetrics(orders, users, feedbacks);
                    console.log('Customer metrics calculated:', customerMetrics);
                } catch (error) {
                    console.error('Error calculating customer metrics:', error);
                    customerMetrics = {
                        newCustomers: 0,
                        retentionRate: 0,
                        avgRating: '0.0',
                        totalReviews: 0
                    };
                }

                console.log('=== Updating UI ===');
                
                // Update UI
                updateKeyMetrics(keyMetrics);
                updateTopItems(itemData.topItems);
                updateLowDemandItems(itemData.lowDemandItems);
                updateCustomerMetrics(customerMetrics);

                console.log('=== Creating Charts ===');
                
                // Create charts with error handling
                try {
                    createRevenueChart(orders, currentRevenueView);
                    console.log('Revenue chart created');
                } catch (error) {
                    console.error('Error creating revenue chart:', error);
                }

                try {
                    createRatingsChart(feedbacks);
                    console.log('Ratings chart created');
                } catch (error) {
                    console.error('Error creating ratings chart:', error);
                }

                try {
                    createHourlyChart(orders);
                    console.log('Hourly chart created');
                } catch (error) {
                    console.error('Error creating hourly chart:', error);
                }

                console.log('=== Dashboard initialized successfully ===');

            } catch (error) {
                console.error('=== Critical Error initializing dashboard ===', error);
                
                // Show detailed error information
                showErrorState(error);
            }
        }

        // Auto-refresh function for only top 4 key metrics
        async function autoRefreshKeyMetrics() {
            try {
                console.log('=== Auto-refreshing Key Metrics ===');
                
                // Fetch only the data needed for key metrics
                const orders = await fetchOrders();
                const users = await fetchUsers();

                if (orders.length === 0 && users.length === 0) {
                    console.warn('No data found for key metrics refresh');
                    return;
                }

                // Calculate only key metrics
                let keyMetrics;
                try {
                    keyMetrics = calculateKeyMetrics(orders, users);
                    console.log('Key metrics refreshed:', keyMetrics);
                } catch (error) {
                    console.error('Error calculating key metrics during refresh:', error);
                    keyMetrics = {
                        totalRevenue: 0,
                        revenueChange: 0,
                        totalOrders: orders.length || 0,
                        ordersChange: 0,
                        avgOrderValue: 0,
                        aovChange: 0,
                        activeCustomers: users.length || 0,
                        customersChange: 0
                    };
                }

                // Update only the top 4 key metrics
                updateKeyMetrics(keyMetrics);

                console.log('=== Key metrics auto-refresh completed ===');

            } catch (error) {
                console.error('=== Error during auto-refresh ===', error);
            }
        }

        function showNoDataMessage() {
            const errorElements = ['totalRevenue', 'totalOrders', 'avgOrderValue', 'activeCustomers', 'newCustomers', 'retentionRate', 'avgRating'];
            errorElements.forEach(id => {
                const element = document.getElementById(id);
                if (element) {
                    element.innerHTML = '<span class="text-muted">No Data</span>';
                }
            });

            // Show message in top items table
            document.getElementById('topItemsLoading').innerHTML = `
                <div class="text-center p-4">
                    <i class="fas fa-exclamation-triangle text-warning mb-2" style="font-size: 2rem;"></i>
                    <h5>No Data Available</h5>
                    <p class="text-muted">No data found in Firestore collections. Please check:</p>
                    <ul class="text-start text-muted">
                        <li>Database has data in collections: orders, users, menus, category, feedbacks</li>
                        <li>Firestore security rules allow read access</li>
                        <li>Firebase project configuration is correct</li>
                    </ul>
                </div>
            `;

            // Show message in low demand items table
            document.getElementById('lowDemandLoading').innerHTML = `
                <div class="text-center p-4">
                    <i class="fas fa-exclamation-triangle text-warning mb-2" style="font-size: 2rem;"></i>
                    <h5>No Data Available</h5>
                    <p class="text-muted">No data found in Firestore collections.</p>
                </div>
            `;
        }

        function showErrorState(error) {
            const errorElements = ['totalRevenue', 'totalOrders', 'avgOrderValue', 'activeCustomers', 'newCustomers', 'retentionRate', 'avgRating'];
            errorElements.forEach(id => {
                const element = document.getElementById(id);
                if (element) {
                    element.innerHTML = '<span class="text-danger">Error</span>';
                }
            });

            // Show detailed error in top items area
            document.getElementById('topItemsLoading').innerHTML = `
                <div class="text-center p-4">
                    <i class="fas fa-exclamation-circle text-danger mb-2" style="font-size: 2rem;"></i>
                    <h5>Connection Error</h5>
                    <p class="text-muted">Failed to load data from Firebase:</p>
                    <div class="alert alert-danger text-start">
                        <strong>Error:</strong> ${error.message}<br>
                        ${error.code ? `<strong>Code:</strong> ${error.code}` : ''}
                    </div>
                    <p class="text-muted small">Please check the browser console for detailed logs.</p>
                </div>
            `;

            // Show error in low demand items area
            document.getElementById('lowDemandLoading').innerHTML = `
                <div class="text-center p-4">
                    <i class="fas fa-exclamation-circle text-danger mb-2" style="font-size: 2rem;"></i>
                    <h5>Connection Error</h5>
                    <p class="text-muted">Failed to load data from Firebase</p>
                </div>
            `;

            // Show error in charts
            const chartContainers = document.querySelectorAll('.chart-container');
            chartContainers.forEach(container => {
                container.innerHTML = `<div class="error text-center p-4">
                    <i class="fas fa-chart-line-down text-muted mb-2" style="font-size: 2rem;"></i>
                    <p>Failed to load chart data</p>
                </div>`;
            });
        }

        // Initialize dashboard when page loads
        document.addEventListener('DOMContentLoaded', function() {
            console.log('=== DOM Loaded - Starting Dashboard ===');
            console.log('Current URL:', window.location.href);
            console.log('Firebase config check:', firebaseConfig);
            
            // Add a connection status indicator
            const header = document.querySelector('.d-flex.justify-content-between');
            const statusIndicator = document.createElement('div');
            statusIndicator.innerHTML = `
                <div id="connectionStatus" class="badge bg-secondary">
                    <i class="spinner-border spinner-border-sm me-1"></i>Connecting...
                </div>
            `;
            header.appendChild(statusIndicator);
            
            initializeDashboard().then(() => {
                document.getElementById('connectionStatus').innerHTML = 
                    '<i class="fas fa-check-circle me-1"></i>Connected';
                document.getElementById('connectionStatus').className = 'badge bg-success';
            }).catch((error) => {
                document.getElementById('connectionStatus').innerHTML = 
                    '<i class="fas fa-exclamation-circle me-1"></i>Connection Failed';
                document.getElementById('connectionStatus').className = 'badge bg-danger';
                console.error('Dashboard initialization failed:', error);
            });
        });

        // Debug function - call this in browser console to check data
        window.debugDashboard = async function() {
            console.log('=== Debug Dashboard ===');
            try {
                const orders = await fetchOrders();
                const users = await fetchUsers();
                const menus = await fetchMenus();
                const categories = await fetchCategories();
                const feedbacks = await fetchFeedbacks();
                
                console.log('Debug Results:');
                console.log('Orders:', orders.length, orders.slice(0, 3));
                console.log('Users:', users.length, users.slice(0, 3));
                console.log('Menus:', menus.length, menus.slice(0, 3));
                console.log('Categories:', categories.length, categories.slice(0, 3));
                console.log('Feedbacks:', feedbacks.length, feedbacks.slice(0, 3));
                
                return { orders, users, menus, categories, feedbacks };
            } catch (error) {
                console.error('Debug failed:', error);
                return null;
            }
        };

        // Test specific collection - call in console like: testCollection('orders')
        window.testCollection = async function(collectionName) {
            try {
                console.log(`Testing collection: ${collectionName}`);
                const ref = collection(db, collectionName);
                const snapshot = await getDocs(ref);
                console.log(`${collectionName} collection:`, snapshot.docs.length, 'documents');
                
                if (snapshot.docs.length > 0) {
                    console.log('Sample documents:');
                    snapshot.docs.slice(0, 3).forEach((doc, index) => {
                        console.log(`Document ${index + 1}:`, { id: doc.id, data: doc.data() });
                    });
                }
                
                return snapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
            } catch (error) {
                console.error(`Error testing ${collectionName}:`, error);
                return null;
            }
        };

        // Auto-refresh functionality - refresh only top 4 key metrics every 5 seconds
        setInterval(() => { 
            console.log('Auto-refreshing key metrics only...'); 
            autoRefreshKeyMetrics(); 
        }, 5000);

        // Auto-refresh trending items every 30 seconds
        setInterval(async () => {
            console.log('Auto-refreshing trending items...');
            try {
                const trendingItems = await fetchTrendingFoodItems();
                updateTrendingItems(trendingItems);
            } catch (error) {
                console.error('Error refreshing trending items:', error);
            }
        }, 30000);

    </script>
</body>
</html>