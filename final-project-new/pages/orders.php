<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Orders Management</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newOrderModal">
                    <i class="fas fa-plus me-1"></i>New Order
                </button>
            </div>
        </div>

        <!-- Order Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card stats-card warning text-center">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Pending</h5>
                        <h2 class="text-warning" id="pendingCount">-</h2>
                        <small class="text-muted">Awaiting confirmation</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stats-card text-center">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Preparing</h5>
                        <h2 class="text-primary" id="preparingCount">-</h2>
                        <small class="text-muted">In kitchen</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stats-card info text-center">
                    <div class="card-body">
                        <h5 class="card-title text-info">Out for Delivery</h5>
                        <h2 class="text-info" id="deliveryCount">-</h2>
                        <small class="text-muted">On the way</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stats-card success text-center">
                    <div class="card-body">
                        <h5 class="card-title text-success">Delivered</h5>
                        <h2 class="text-success" id="deliveredCount">-</h2>
                        <small class="text-muted">Completed today</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-list me-2"></i>All Orders
                        </h5>
                    </div>
                    <div class="col-auto">
                        <div class="btn-group btn-group-sm me-2">
                            <button class="btn btn-outline-secondary active" data-filter="all">All</button>
                            <button class="btn btn-outline-secondary" data-filter="pending">Pending</button>
                            <button class="btn btn-outline-secondary" data-filter="confirmed">Confirmed</button>
                            <button class="btn btn-outline-secondary" data-filter="preparing">Preparing</button>
                            <button class="btn btn-outline-secondary" data-filter="out_for_delivery">Out for Delivery</button>
                            <button class="btn btn-outline-secondary" data-filter="delivered">Delivered</button>
                        </div>
                        <input type="text" class="form-control" id="orderSearch" placeholder="Search orders..." style="width: 200px; display: inline-block;">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="ordersTable">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Order Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ordersTableBody">
                            <!-- Orders will be loaded here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- New Order Modal -->
    <div class="modal fade" id="newOrderModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="newOrderForm" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="customerSelect" class="form-label">Customer</label>
                                <select class="form-select" id="customerSelect" required>
                                    <option value="">Select Customer</option>
                                </select>
                                <div class="invalid-feedback">Please select a customer.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="deliveryAddress" class="form-label">Delivery Address</label>
                                <textarea class="form-control" id="deliveryAddress" rows="2" required></textarea>
                                <div class="invalid-feedback">Please provide delivery address.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Order Items</label>
                            <div id="orderItems">
                                <div class="row mb-2 order-item">
                                    <div class="col-md-6">
                                        <select class="form-select food-select" required>
                                            <option value="">Select Item</option>
                                        </select>
                                        <div class="invalid-feedback">Please select an item.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" class="form-control quantity-input" placeholder="Qty" min="1" value="1" required>
                                        <div class="invalid-feedback">Please enter quantity.</div>
                                    </div>
                                    <div class="col-md-2">
                                        <span class="form-control-plaintext item-price">$0</span>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-outline-danger btn-sm remove-item" disabled>
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="addItemBtn">
                                <i class="fas fa-plus me-1"></i>Add Item
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Total: $<span id="orderTotal">0</span></strong>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="createOrderBtn">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
                        Create Order
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Order Modal -->
    <div class="modal fade" id="editOrderModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editOrderForm" class="needs-validation" novalidate>
                        <input type="hidden" id="editOrderId">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editCustomerSelect" class="form-label">Customer</label>
                                <select class="form-select" id="editCustomerSelect" required>
                                    <option value="">Select Customer</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="editDeliveryAddress" class="form-label">Delivery Address</label>
                                <textarea class="form-control" id="editDeliveryAddress" rows="2" required></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Order Items</label>
                            <div id="editOrderItems">
                                <!-- Items will be loaded here -->
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="editAddItemBtn">
                                <i class="fas fa-plus me-1"></i>Add Item
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Total: $<span id="editOrderTotal">0</span></strong>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="updateOrderBtn">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
                        Update Order
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Details Modal -->
    <div class="modal fade" id="orderDetailsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderDetailsTitle">Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="orderDetailsBody">
                    <!-- Order details will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="printReceipt()">Print Receipt</button>
                </div>
            </div>
        </div>
    </div>

    <style>
    .card {
        border: 1px solid #e3e6f0;
        border-radius: 0.35rem;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }

    .card-header {
        background-color: #f8f9fc;
        border-bottom: 1px solid #e3e6f0;
        padding: 0.75rem 1.25rem;
    }

    .card-body {
        padding: 1.25rem;
    }

    .table {
        color: #5a5c69;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #e3e6f0;
        font-weight: 800;
        color: #5a5c69;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05rem;
    }

    .table td {
        border-top: 1px solid #e3e6f0;
        vertical-align: middle;
    }

    .table-hover tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.025);
    }

    .btn {
        font-weight: 400;
        border-radius: 0.35rem;
        font-size: 0.875rem;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.8125rem;
        border-radius: 0.2rem;
    }

    .badge {
        font-weight: 700;
        font-size: 0.65rem;
        border-radius: 10rem;
        padding: 0.25em 0.6em;
    }

    .border-bottom {
        border-bottom: 1px solid #e3e6f0 !important;
    }

    .h2 {
        font-size: 2rem;
        font-weight: 400;
        line-height: 1.2;
        color: #5a5c69;
    }

    .text-muted {
        color: #858796 !important;
    }

    .modal-header {
        border-bottom: 1px solid #e3e6f0;
        background-color: #f8f9fc;
    }

    .modal-footer {
        border-top: 1px solid #e3e6f0;
        background-color: #f8f9fc;
    }

    .form-control {
        border: 1px solid #d1d3e2;
        border-radius: 0.35rem;
        color: #6e707e;
    }

    .form-control:focus {
        border-color: #bac8f3;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }

    .form-select {
        border: 1px solid #d1d3e2;
        border-radius: 0.35rem;
        color: #6e707e;
    }

    .form-label {
        margin-bottom: 0.5rem;
        font-weight: 700;
        color: #5a5c69;
        font-size: 0.875rem;
    }

    .container-fluid {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .stats-card {
        border-left: 0.25rem solid #4e73df;
    }

    .stats-card.success {
        border-left-color: #1cc88a;
    }

    .stats-card.warning {
        border-left-color: #f6c23e;
    }

    .stats-card.info {
        border-left-color: #36b9cc;
    }

    .btn-outline-secondary.active {
        background-color: #858796;
        border-color: #858796;
        color: #fff;
    }

    .order-item {
        border: 1px solid #e3e6f0;
        border-radius: 0.35rem;
        padding: 0.75rem;
        margin-bottom: 0.5rem;
        background-color: #f8f9fc;
    }
    </style>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Firebase Configuration -->
    <script type="module">
        // Firebase modules
        import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";
        import { 
            getFirestore, 
            collection, 
            addDoc, 
            getDocs, 
            doc, 
            updateDoc, 
            deleteDoc,
            query,
            where,
            orderBy,
            onSnapshot,
            getDoc
        } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";

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
        let allOrders = [];
        let allUsers = [];
        let allMenuItems = [];
        let nextOrderId = 1;
        let isInitialLoad = true;

        // Utility functions
        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0`;
            toast.setAttribute('role', 'alert');
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;

            document.body.appendChild(toast);
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();

            toast.addEventListener('hidden.bs.toast', () => {
                document.body.removeChild(toast);
            });
        }

        function showTopNotification(message, type = 'info') {
            // Create notification container if it doesn't exist
            let notificationContainer = document.getElementById('notificationContainer');
            if (!notificationContainer) {
                notificationContainer = document.createElement('div');
                notificationContainer.id = 'notificationContainer';
                notificationContainer.style.cssText = `
                    position: fixed;
                    top: 70px;
                    right: 20px;
                    z-index: 9999;
                    pointer-events: none;
                    width: 350px;
                `;
                document.body.appendChild(notificationContainer);
            }

            // Create notification
            const notification = document.createElement('div');
            notification.className = `alert alert-${type} alert-dismissible fade show mb-2`;
            notification.style.cssText = `
                pointer-events: auto;
                box-shadow: 0 2px 8px rgba(0,0,0,0.15);
                border-radius: 8px;
                animation: slideInRight 0.3s ease-out;
                padding: 12px 16px;
                font-size: 0.95rem;
                border: none;
                min-height: 50px;
            `;
            
            const iconMap = {
                'success': 'check-circle',
                'warning': 'exclamation-triangle', 
                'info': 'info-circle',
                'danger': 'times-circle'
            };
            
            notification.innerHTML = `
                <div class="d-flex align-items-center">
                    <i class="fas fa-${iconMap[type]} me-3" style="font-size: 1rem;"></i>
                    <span style="font-size: 0.9rem; line-height: 1.4; flex-grow: 1;">${message}</span>
                    <button type="button" class="btn-close ms-3" data-bs-dismiss="alert" style="font-size: 0.8rem;"></button>
                </div>
            `;

            // Add CSS animation if not already added
            if (!document.getElementById('notificationStyles')) {
                const style = document.createElement('style');
                style.id = 'notificationStyles';
                style.textContent = `
                    @keyframes slideInRight {
                        from { transform: translateX(100%); opacity: 0; }
                        to { transform: translateX(0); opacity: 1; }
                    }
                    @keyframes slideOutRight {
                        from { transform: translateX(0); opacity: 1; }
                        to { transform: translateX(100%); opacity: 0; }
                    }
                    .notification-exit {
                        animation: slideOutRight 0.3s ease-in forwards;
                    }
                `;
                document.head.appendChild(style);
            }

            notificationContainer.appendChild(notification);

            // Auto remove after 4 seconds
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.classList.add('notification-exit');
                    setTimeout(() => {
                        if (notification.parentNode) {
                            notification.remove();
                        }
                    }, 300);
                }
            }, 4000);

            // Handle manual close
            const closeBtn = notification.querySelector('.btn-close');
            closeBtn.addEventListener('click', () => {
                notification.classList.add('notification-exit');
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.remove();
                    }
                }, 300);
            });
        }

        function formatDate(date) {
            const now = new Date();
            const orderDate = new Date(date);
            const isToday = orderDate.toDateString() === now.toDateString();
            
            if (isToday) {
                return orderDate.toLocaleTimeString('en-US', { 
                    hour: 'numeric', 
                    minute: '2-digit',
                    hour12: true 
                });
            } else {
                return orderDate.toLocaleDateString('en-US', { 
                    month: 'short', 
                    day: 'numeric',
                    hour: 'numeric',
                    minute: '2-digit'
                });
            }
        }

        function formatCurrency(amount) {
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD'
            }).format(amount);
        }

        function getStatusBadge(status) {
            const badges = {
                'pending': 'bg-warning',
                'confirmed': 'bg-info',
                'preparing': 'bg-primary',
                'out_for_delivery': 'bg-info',
                'delivered': 'bg-success',
                'cancelled': 'bg-danger',
                'rejected': 'bg-danger'
            };
            const displayNames = {
                'pending': 'Pending',
                'confirmed': 'Confirmed',
                'preparing': 'Preparing',
                'out_for_delivery': 'Out for Delivery',
                'delivered': 'Delivered',
                'cancelled': 'Cancelled',
                'rejected': 'Rejected'
            };
            return `<span class="badge ${badges[status]}">${displayNames[status]}</span>`;
        }

        function getNextOrderId() {
            return nextOrderId++;
        }

        // Load data from Firestore
        async function loadUsers() {
            try {
                const usersRef = collection(db, 'users');
                const querySnapshot = await getDocs(usersRef);
                
                allUsers = [];
                querySnapshot.forEach((doc) => {
                    const userData = { id: doc.id, ...doc.data() };
                    // Use userId from the document if it exists, otherwise use doc.id
                    userData.userId = userData.userId || doc.id;
                    allUsers.push(userData);
                });
                
                populateCustomerSelects();
            } catch (error) {
                console.error('Error loading users:', error);
            }
        }

        async function loadMenuItems() {
            try {
                const menuRef = collection(db, 'menus');
                const querySnapshot = await getDocs(menuRef);
                
                allMenuItems = [];
                querySnapshot.forEach((doc) => {
                    const menuData = { id: doc.id, ...doc.data() };
                    // Ensure we have the required fields
                    menuData.foodId = menuData.foodId || doc.id;
                    menuData.foodName = menuData.foodName || menuData.name || 'Unnamed Item';
                    menuData.price = menuData.price || 0;
                    allMenuItems.push(menuData);
                });
                
                console.log('Loaded menu items:', allMenuItems);
                populateFoodSelects();
            } catch (error) {
                console.error('Error loading menu items:', error);
                showToast('Error loading menu items', 'error');
            }
        }

        async function loadOrders() {
            try {
                const ordersRef = collection(db, 'orders');
                const q = query(ordersRef, orderBy('createdAt', 'desc'));
                
                // Use onSnapshot for real-time updates
                onSnapshot(q, (querySnapshot) => {
                    const newOrders = [];
                    let maxOrderId = 0;
                    
                    querySnapshot.forEach((doc) => {
                        const orderData = { id: doc.id, ...doc.data() };
                        newOrders.push(orderData);
                        if (orderData.orderId > maxOrderId) {
                            maxOrderId = orderData.orderId;
                        }
                    });
                    
                    // Check for new orders (only after initial load)
                    if (!isInitialLoad) {
                        const previousOrderIds = allOrders.map(order => order.id);
                        const newOrdersAdded = newOrders.filter(order => !previousOrderIds.includes(order.id));
                        
                        newOrdersAdded.forEach(order => {
                            const customer = allUsers.find(u => u.userId === order.userId);
                            const customerName = customer ? (customer.name || customer.username || 'Unknown Customer') : 'Unknown Customer';
                            showTopNotification(`🆕 New order #${order.orderId} from ${customerName}`, 'success');
                        });
                        
                        // Check for status changes
                        allOrders.forEach(oldOrder => {
                            const updatedOrder = newOrders.find(order => order.id === oldOrder.id);
                            if (updatedOrder && updatedOrder.status !== oldOrder.status) {
                                const statusMessages = {
                                    'confirmed': '✅ Order confirmed',
                                    'preparing': '👨‍🍳 Order is being prepared',
                                    'out_for_delivery': '🚚 Order out for delivery',
                                    'delivered': '📦 Order delivered',
                                    'cancelled': '❌ Order cancelled',
                                    'rejected': '🚫 Order rejected'
                                };
                                
                                const message = statusMessages[updatedOrder.status] || `Status changed to ${updatedOrder.status}`;
                                const notificationType = updatedOrder.status === 'delivered' ? 'success' : 
                                                       updatedOrder.status === 'cancelled' || updatedOrder.status === 'rejected' ? 'warning' : 'info';
                                
                                showTopNotification(`${message} - Order #${updatedOrder.orderId}`, notificationType);
                            }
                        });
                    }
                    
                    allOrders = newOrders;
                    nextOrderId = maxOrderId + 1;
                    updateOrdersDisplay();
                    updateStats();
                    
                    if (isInitialLoad) {
                        isInitialLoad = false;
                    }
                });
                
            } catch (error) {
                console.error('Error loading orders:', error);
                showToast('Error loading orders', 'error');
            }
        }

        // Populate selects
        function populateCustomerSelects() {
            const selects = [document.getElementById('customerSelect'), document.getElementById('editCustomerSelect')];
            
            selects.forEach(select => {
                if (select) {
                    select.innerHTML = '<option value="">Select Customer</option>';
                    allUsers.forEach(user => {
                        const userDisplayName = user.name || user.username || 'Unnamed User';
                        const userContact = user.phone || user.email || '';
                        const displayText = userContact ? `${userDisplayName} - ${userContact}` : userDisplayName;
                        select.innerHTML += `<option value="${user.userId}">${displayText}</option>`;
                    });
                }
            });
        }

        function populateFoodSelects() {
            document.querySelectorAll('.food-select').forEach(select => {
                select.innerHTML = '<option value="">Select Item</option>';
                
                if (allMenuItems.length === 0) {
                    select.innerHTML += '<option value="" disabled>No menu items available</option>';
                    return;
                }
                
                allMenuItems.forEach(item => {
                    select.innerHTML += `<option value="${item.foodId}" data-price="${item.price}" data-name="${item.foodName}">${item.foodName} - ${formatCurrency(item.price)}</option>`;
                });
            });
            
            console.log('Populated food selects with', allMenuItems.length, 'items');
        }

        // Update displays
        function updateOrdersDisplay() {
            updateOrdersTable();
        }

        function updateOrdersTable() {
            const tbody = document.getElementById('ordersTableBody');
            tbody.innerHTML = '';
            
            allOrders.forEach(order => {
                const customer = allUsers.find(u => u.userId === order.userId);
                const customerName = customer ? (customer.name || customer.username || 'Unknown Customer') : 'Unknown Customer';
                const customerPhone = customer ? (customer.phone || customer.email || '') : 'N/A';
                
                // Get order items details
                let itemsDisplay = '';
                let totalQuantity = 0;
                let calculatedTotal = 0;
                
                if (order.items && typeof order.items === 'object') {
                    const itemKeys = Object.keys(order.items);
                    itemKeys.forEach((key, index) => {
                        const item = order.items[key];
                        totalQuantity += item.qty;
                        calculatedTotal += (item.price * item.qty);
                        
                        if (index === 0) {
                            itemsDisplay = `${item.name} x${item.qty}`;
                        } else if (index === 1) {
                            itemsDisplay += `<br><small class="text-muted">+${itemKeys.length - 1} more items</small>`;
                        }
                    });
                } else {
                    itemsDisplay = 'No items';
                }
                
                tbody.innerHTML += `
                    <tr data-status="${order.status}" data-order-id="${order.orderId}">
                        <td><strong>#${order.orderId}</strong></td>
                        <td>
                            <div>
                                <strong>${customerName}</strong><br>
                                <small class="text-muted">${customerPhone}</small>
                            </div>
                        </td>
                        <td>
                            <div>${itemsDisplay}</div>
                        </td>
                        <td><strong>${formatCurrency(calculatedTotal)}</strong></td>
                        <td>${getStatusBadge(order.status)}</td>
                        <td>
                            <div>
                                <strong>${formatDate(order.createdAt)}</strong><br>
                                <small class="text-muted">${new Date(order.createdAt).toDateString() === new Date().toDateString() ? 'Today' : new Date(order.createdAt).toLocaleDateString()}</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                ${getActionButtons(order)}
                                <button class="btn btn-outline-info" onclick="viewOrderDetails('${order.id}')" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-primary" onclick="editOrder('${order.id}')" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-danger" onclick="deleteOrder('${order.id}')" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
        }

        function getActionButtons(order) {
            switch (order.status) {
                case 'pending':
                    return `
                        <button class="btn btn-outline-success" onclick="updateOrderStatus('${order.id}', 'confirmed')" title="Confirm">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="btn btn-outline-danger" onclick="updateOrderStatus('${order.id}', 'rejected')" title="Reject">
                            <i class="fas fa-times"></i>
                        </button>
                    `;
                case 'confirmed':
                    return `
                        <button class="btn btn-outline-primary" onclick="updateOrderStatus('${order.id}', 'preparing')" title="Start Preparing">
                            <i class="fas fa-utensils"></i>
                        </button>
                    `;
                case 'preparing':
                    return `
                        <button class="btn btn-outline-info" onclick="updateOrderStatus('${order.id}', 'out_for_delivery')" title="Out for Delivery">
                            <i class="fas fa-truck"></i>
                        </button>
                    `;
                case 'out_for_delivery':
                    return `
                        <button class="btn btn-outline-success" onclick="updateOrderStatus('${order.id}', 'delivered')" title="Mark Delivered">
                            <i class="fas fa-check-double"></i>
                        </button>
                    `;
                default:
                    return '';
            }
        }

        function updateStats() {
            const today = new Date().toDateString();
            
            const pending = allOrders.filter(order => order.status === 'pending').length;
            const preparing = allOrders.filter(order => order.status === 'preparing').length;
            const delivery = allOrders.filter(order => order.status === 'out_for_delivery').length;
            const delivered = allOrders.filter(order => 
                order.status === 'delivered' && 
                new Date(order.createdAt).toDateString() === today
            ).length;

            document.getElementById('pendingCount').textContent = pending;
            document.getElementById('preparingCount').textContent = preparing;
            document.getElementById('deliveryCount').textContent = delivery;
            document.getElementById('deliveredCount').textContent = delivered;
        }

        // Order operations
        async function createOrder(orderData) {
            try {
                const docRef = await addDoc(collection(db, 'orders'), {
                    createdAt: new Date().toISOString(),
                    deliveryAddress: orderData.deliveryAddress,
                    items: orderData.items,
                    orderId: getNextOrderId(),
                    status: 'pending',
                    updatedAt: new Date().toISOString(),
                    userId: orderData.userId
                });
                
                showToast('Order created successfully!');
                // Real-time listener will handle the update and notification
                return docRef.id;
            } catch (error) {
                console.error('Error creating order:', error);
                showToast('Error creating order', 'error');
                throw error;
            }
        }

        async function updateOrder(id, orderData) {
            try {
                const orderRef = doc(db, 'orders', id);
                await updateDoc(orderRef, {
                    deliveryAddress: orderData.deliveryAddress,
                    items: orderData.items,
                    updatedAt: new Date().toISOString(),
                    userId: orderData.userId
                });
                
                showToast('Order updated successfully!');
                // Real-time listener will handle the update
            } catch (error) {
                console.error('Error updating order:', error);
                showToast('Error updating order', 'error');
                throw error;
            }
        }

        // Global functions for window access
        window.updateOrderStatus = async function(id, newStatus) {
            try {
                const orderRef = doc(db, 'orders', id);
                await updateDoc(orderRef, { 
                    status: newStatus,
                    updatedAt: new Date().toISOString()
                });
                
                // Don't show toast here as the real-time listener will handle the notification
                console.log(`Order ${newStatus} successfully!`);
            } catch (error) {
                console.error('Error updating order status:', error);
                showToast('Error updating order status', 'error');
            }
        };

        window.deleteOrder = async function(id) {
            if (!confirm('Are you sure you want to delete this order?')) {
                return;
            }
            
            try {
                await deleteDoc(doc(db, 'orders', id));
                showToast('Order deleted successfully!');
                // Real-time listener will handle the update
            } catch (error) {
                console.error('Error deleting order:', error);
                showToast('Error deleting order', 'error');
            }
        };

        window.editOrder = function(id) {
            const order = allOrders.find(o => o.id === id);
            if (!order) return;
            
            // Populate edit form
            document.getElementById('editOrderId').value = id;
            document.getElementById('editCustomerSelect').value = order.userId;
            document.getElementById('editDeliveryAddress').value = order.deliveryAddress;
            
            // Populate items
            const itemsContainer = document.getElementById('editOrderItems');
            itemsContainer.innerHTML = '';
            
            if (order.items && typeof order.items === 'object') {
                const itemKeys = Object.keys(order.items);
                itemKeys.forEach((key, index) => {
                    const item = order.items[key];
                    addEditOrderItem(item.foodId, item.qty, index === 0);
                });
            } else {
                addEditOrderItem('', 1, true);
            }
            
            calculateEditOrderTotal();
            new bootstrap.Modal(document.getElementById('editOrderModal')).show();
        };

        window.viewOrderDetails = function(id) {
            const order = allOrders.find(o => o.id === id);
            if (!order) return;
            
            const customer = allUsers.find(u => u.userId === order.userId);
            const customerName = customer ? (customer.name || customer.username || 'Unknown Customer') : 'Unknown Customer';
            const customerPhone = customer ? (customer.phone || customer.email || '') : 'N/A';
            
            document.getElementById('orderDetailsTitle').textContent = `Order Details - #${order.orderId}`;
            
            let itemsHtml = '';
            let subtotal = 0;
            
            if (order.items && typeof order.items === 'object') {
                Object.keys(order.items).forEach(key => {
                    const item = order.items[key];
                    const itemTotal = item.price * item.qty;
                    subtotal += itemTotal;
                    
                    itemsHtml += `
                        <tr>
                            <td>${item.name}</td>
                            <td>${item.qty}</td>
                            <td>${formatCurrency(item.price)}</td>
                            <td>${formatCurrency(itemTotal)}</td>
                        </tr>
                    `;
                });
            }
            
            document.getElementById('orderDetailsBody').innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                        <h6>Customer Information</h6>
                        <p><strong>Name:</strong> ${customerName}</p>
                        <p><strong>Phone:</strong> ${customerPhone}</p>
                        <p><strong>Address:</strong> ${order.deliveryAddress}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Order Information</h6>
                        <p><strong>Order ID:</strong> #${order.orderId}</p>
                        <p><strong>Status:</strong> ${getStatusBadge(order.status)}</p>
                        <p><strong>Order Time:</strong> ${formatDate(order.createdAt)}</p>
                        <p><strong>Total:</strong> ${formatCurrency(subtotal)}</p>
                    </div>
                </div>
                <hr>
                <h6>Order Items</h6>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${itemsHtml}
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3">Total</th>
                                <th>${formatCurrency(subtotal)}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            `;
            
            new bootstrap.Modal(document.getElementById('orderDetailsModal')).show();
        };

        window.printReceipt = function() {
            window.print();
        };

        // Order item management
        function addOrderItem(foodId = '', quantity = 1, isFirst = false) {
            const itemsContainer = document.getElementById('orderItems');
            const itemDiv = document.createElement('div');
            itemDiv.className = 'row mb-2 order-item';
            
            itemDiv.innerHTML = `
                <div class="col-md-6">
                    <select class="form-select food-select" required>
                        <option value="">Select Item</option>
                    </select>
                    <div class="invalid-feedback">Please select an item.</div>
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control quantity-input" placeholder="Qty" min="1" value="${quantity}" required>
                    <div class="invalid-feedback">Please enter quantity.</div>
                </div>
                <div class="col-md-2">
                    <span class="form-control-plaintext item-price">$0</span>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-outline-danger btn-sm remove-item" ${isFirst ? 'disabled' : ''}>
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `;
            
            itemsContainer.appendChild(itemDiv);
            
            // Populate food select
            const foodSelect = itemDiv.querySelector('.food-select');
            foodSelect.innerHTML = '<option value="">Select Item</option>';
            
            if (allMenuItems.length === 0) {
                foodSelect.innerHTML += '<option value="" disabled>No menu items available</option>';
            } else {
                allMenuItems.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.foodId;
                    option.setAttribute('data-price', item.price);
                    option.setAttribute('data-name', item.foodName);
                    option.textContent = `${item.foodName} - ${formatCurrency(item.price)}`;
                    if (item.foodId === foodId) option.selected = true;
                    foodSelect.appendChild(option);
                });
            }
            
            // Add event listeners
            foodSelect.addEventListener('change', calculateOrderTotal);
            itemDiv.querySelector('.quantity-input').addEventListener('input', calculateOrderTotal);
            itemDiv.querySelector('.remove-item').addEventListener('click', function() {
                itemDiv.remove();
                calculateOrderTotal();
                updateRemoveButtons();
            });
            
            calculateOrderTotal();
            updateRemoveButtons();
        }

        function addEditOrderItem(foodId = '', quantity = 1, isFirst = false) {
            const itemsContainer = document.getElementById('editOrderItems');
            const itemDiv = document.createElement('div');
            itemDiv.className = 'row mb-2 order-item';
            
            itemDiv.innerHTML = `
                <div class="col-md-6">
                    <select class="form-select food-select" required>
                        <option value="">Select Item</option>
                    </select>
                    <div class="invalid-feedback">Please select an item.</div>
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control quantity-input" placeholder="Qty" min="1" value="${quantity}" required>
                    <div class="invalid-feedback">Please enter quantity.</div>
                </div>
                <div class="col-md-2">
                    <span class="form-control-plaintext item-price">$0</span>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-outline-danger btn-sm remove-item" ${isFirst ? 'disabled' : ''}>
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `;
            
            itemsContainer.appendChild(itemDiv);
            
            // Populate food select
            const foodSelect = itemDiv.querySelector('.food-select');
            foodSelect.innerHTML = '<option value="">Select Item</option>';
            
            if (allMenuItems.length === 0) {
                foodSelect.innerHTML += '<option value="" disabled>No menu items available</option>';
            } else {
                allMenuItems.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.foodId;
                    option.setAttribute('data-price', item.price);
                    option.setAttribute('data-name', item.foodName);
                    option.textContent = `${item.foodName} - ${formatCurrency(item.price)}`;
                    if (item.foodId === foodId) option.selected = true;
                    foodSelect.appendChild(option);
                });
            }
            
            // Add event listeners
            foodSelect.addEventListener('change', calculateEditOrderTotal);
            itemDiv.querySelector('.quantity-input').addEventListener('input', calculateEditOrderTotal);
            itemDiv.querySelector('.remove-item').addEventListener('click', function() {
                itemDiv.remove();
                calculateEditOrderTotal();
                updateEditRemoveButtons();
            });
            
            calculateEditOrderTotal();
            updateEditRemoveButtons();
        }

        function calculateOrderTotal() {
            let total = 0;
            document.querySelectorAll('#orderItems .order-item').forEach(item => {
                const select = item.querySelector('.food-select');
                const quantityInput = item.querySelector('.quantity-input');
                const priceSpan = item.querySelector('.item-price');
                
                const selectedOption = select.options[select.selectedIndex];
                const price = selectedOption ? parseFloat(selectedOption.getAttribute('data-price')) || 0 : 0;
                const quantity = parseInt(quantityInput.value) || 0;
                const itemTotal = price * quantity;
                
                priceSpan.textContent = formatCurrency(itemTotal);
                total += itemTotal;
            });
            
            document.getElementById('orderTotal').textContent = total;
        }

        function calculateEditOrderTotal() {
            let total = 0;
            document.querySelectorAll('#editOrderItems .order-item').forEach(item => {
                const select = item.querySelector('.food-select');
                const quantityInput = item.querySelector('.quantity-input');
                const priceSpan = item.querySelector('.item-price');
                
                const selectedOption = select.options[select.selectedIndex];
                const price = selectedOption ? parseFloat(selectedOption.getAttribute('data-price')) || 0 : 0;
                const quantity = parseInt(quantityInput.value) || 0;
                const itemTotal = price * quantity;
                
                priceSpan.textContent = formatCurrency(itemTotal);
                total += itemTotal;
            });
            
            document.getElementById('editOrderTotal').textContent = total;
        }

        function updateRemoveButtons() {
            const items = document.querySelectorAll('#orderItems .order-item');
            items.forEach((item, index) => {
                const removeBtn = item.querySelector('.remove-item');
                removeBtn.disabled = items.length === 1;
            });
        }

        function updateEditRemoveButtons() {
            const items = document.querySelectorAll('#editOrderItems .order-item');
            items.forEach((item, index) => {
                const removeBtn = item.querySelector('.remove-item');
                removeBtn.disabled = items.length === 1;
            });
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Load initial data
            loadUsers();
            loadMenuItems();
            loadOrders();
            
            // Add initial order item
            addOrderItem('', 1, true);
        });

        // Create order form handler
        document.getElementById('createOrderBtn').addEventListener('click', async function() {
            const form = document.getElementById('newOrderForm');
            const btn = this;
            const spinner = btn.querySelector('.spinner-border');
            
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
            
            try {
                btn.disabled = true;
                spinner.classList.remove('d-none');
                
                // Collect order items
                const items = {};
                let hasValidItems = false;
                let itemIndex = 0;
                
                document.querySelectorAll('#orderItems .order-item').forEach(item => {
                    const foodSelect = item.querySelector('.food-select');
                    const quantityInput = item.querySelector('.quantity-input');
                    const selectedOption = foodSelect.options[foodSelect.selectedIndex];
                    
                    if (foodSelect.value && quantityInput.value && selectedOption) {
                        items[itemIndex.toString()] = {
                            foodId: foodSelect.value,
                            name: selectedOption.getAttribute('data-name'),
                            price: parseFloat(selectedOption.getAttribute('data-price')),
                            qty: parseInt(quantityInput.value)
                        };
                        itemIndex++;
                        hasValidItems = true;
                    }
                });
                
                if (!hasValidItems) {
                    showToast('Please add at least one item to the order', 'error');
                    return;
                }
                
                const orderData = {
                    deliveryAddress: document.getElementById('deliveryAddress').value,
                    items: items,
                    userId: document.getElementById('customerSelect').value
                };
                
                await createOrder(orderData);
                
                // Reset form and close modal
                form.reset();
                form.classList.remove('was-validated');
                document.getElementById('orderItems').innerHTML = '';
                addOrderItem('', 1, true);
                bootstrap.Modal.getInstance(document.getElementById('newOrderModal')).hide();
                
            } catch (error) {
                console.error('Error:', error);
            } finally {
                btn.disabled = false;
                spinner.classList.add('d-none');
            }
        });

        // Update order form handler
        document.getElementById('updateOrderBtn').addEventListener('click', async function() {
            const form = document.getElementById('editOrderForm');
            const btn = this;
            const spinner = btn.querySelector('.spinner-border');
            
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
            
            try {
                btn.disabled = true;
                spinner.classList.remove('d-none');
                
                // Collect order items
                const items = {};
                let hasValidItems = false;
                let itemIndex = 0;
                
                document.querySelectorAll('#editOrderItems .order-item').forEach(item => {
                    const foodSelect = item.querySelector('.food-select');
                    const quantityInput = item.querySelector('.quantity-input');
                    const selectedOption = foodSelect.options[foodSelect.selectedIndex];
                    
                    if (foodSelect.value && quantityInput.value && selectedOption) {
                        items[itemIndex.toString()] = {
                            foodId: foodSelect.value,
                            name: selectedOption.getAttribute('data-name'),
                            price: parseFloat(selectedOption.getAttribute('data-price')),
                            qty: parseInt(quantityInput.value)
                        };
                        itemIndex++;
                        hasValidItems = true;
                    }
                });
                
                if (!hasValidItems) {
                    showToast('Please add at least one item to the order', 'error');
                    return;
                }
                
                const orderId = document.getElementById('editOrderId').value;
                
                const orderData = {
                    deliveryAddress: document.getElementById('editDeliveryAddress').value,
                    items: items,
                    userId: document.getElementById('editCustomerSelect').value
                };
                
                await updateOrder(orderId, orderData);
                
                // Reset form and close modal
                form.reset();
                form.classList.remove('was-validated');
                bootstrap.Modal.getInstance(document.getElementById('editOrderModal')).hide();
                
            } catch (error) {
                console.error('Error:', error);
            } finally {
                btn.disabled = false;
                spinner.classList.add('d-none');
            }
        });

        // Add item buttons
        document.getElementById('addItemBtn').addEventListener('click', function() {
            addOrderItem();
        });

        document.getElementById('editAddItemBtn').addEventListener('click', function() {
            addEditOrderItem();
        });

        // Filter orders by status
        document.querySelectorAll('[data-filter]').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('[data-filter]').forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                const rows = document.querySelectorAll('tbody tr[data-status]');
                
                rows.forEach(row => {
                    if (filter === 'all' || row.dataset.status === filter) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });

        // Search functionality
        document.getElementById('orderSearch').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('#ordersTableBody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Form validation
        document.querySelectorAll('.needs-validation').forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });

    </script>
</body>
</html>