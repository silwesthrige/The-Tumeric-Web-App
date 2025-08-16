
<body>
    <!-- Toast Container -->
    <div class="toast-container position-fixed top-0 end-0 p-3" id="toastContainer"></div>

    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Customer Management</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="sendNewsletter()">
                        <i class="fas fa-envelope me-1"></i>Send Newsletter
                    </button>
                </div>
            </div>
        </div>

        <!-- Customer Stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card">
                    <div class="stats-number" id="totalCustomers">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Total Customers</div>
                    <small class="text-muted" id="customerGrowth">Loading...</small>
                    <i class="fas fa-users stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card success">
                    <div class="stats-number" id="activeCustomers">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Active Customers</div>
                    <small class="text-muted">Ordered this month</small>
                    <i class="fas fa-user-check stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card warning">
                    <div class="stats-number" id="newCustomers">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">New Customers</div>
                    <small class="text-muted">This month</small>
                    <i class="fas fa-user-plus stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card info">
                    <div class="stats-number" id="avgOrderValue">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Avg Order Value</div>
                    <small class="text-muted">Per customer</small>
                    <i class="fas fa-pound-sign stats-icon"></i>
                </div>
            </div>
        </div>

        <!-- Customer Filters -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-filter me-2"></i>Filters
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="dateFilter" class="form-label">Registration Date</label>
                        <input type="date" class="form-control" id="dateFilter">
                    </div>
                    <div class="col-md-6">
                        <label for="customerSearch" class="form-label">Search</label>
                        <input type="text" class="form-control" id="customerSearch" placeholder="Search customers...">
                    </div>
                </div>
            </div>
        </div>

        <!-- Customers Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-users me-2"></i>Customer List
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="customersTable">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Contact</th>
                                <th>Location</th>
                                <th>Orders</th>
                                <th>Total Spent</th>
                                <th>Last Order</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="customersTableBody">
                            <tr>
                                <td colspan="7" class="text-center">Loading customers...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Customer Modal -->
    <div class="modal fade" id="editCustomerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editCustomerForm" class="needs-validation" novalidate>
                        <input type="hidden" id="editCustomerId">
                        <div class="mb-3 text-center">
                            <div class="avatar-circle-large mx-auto mb-3" id="editCustomerAvatar">
                                <img id="editCustomerImage" class="d-none" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                                <span id="editCustomerInitials"></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="editCustomerName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="editCustomerName" required>
                        </div>
                        <div class="mb-3">
                            <label for="editCustomerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editCustomerEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="editCustomerPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="editCustomerPhone" required>
                        </div>
                        <div class="mb-3">
                            <label for="editCustomerAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="editCustomerAddress" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editCustomerProfileImage" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="editCustomerProfileImage" accept="image/*">
                            <small class="text-muted">Leave empty to keep current image</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="updateCustomerBtn">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
                        Update Customer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Customer Details Modal -->
    <div class="modal fade" id="customerDetailsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customerDetailsTitle">Customer Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="customerDetailsBody">
                    <!-- Customer details will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" id="sendEmailBtn">Send Message</button>
                    <button type="button" class="btn btn-primary" id="editFromDetailsBtn">Edit Customer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Send Email Modal -->
    <div class="modal fade" id="sendEmailModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="sendEmailForm">
                        <div class="mb-3">
                            <label for="emailRecipient" class="form-label">To:</label>
                            <input type="email" class="form-control" id="emailRecipient" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="emailSubject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="emailSubject" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="emailMessage" rows="5" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="sendEmail()">Send Email</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .stats-card {
            background: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            position: relative;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border-left: 4px solid #0d6efd;
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

        .card-body {
            padding: 1.25rem;
        }

        .table {
            color: #5a5c69;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            font-weight: 800;
            color: #5a5c69;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
        }

        .table td {
            border-top: 1px solid #dee2e6;
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
            border-bottom: 1px solid #dee2e6 !important;
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
            border-bottom: 1px solid #dee2e6;
            background-color: #f8f9fa;
        }

        .modal-footer {
            border-top: 1px solid #dee2e6;
            background-color: #f8f9fa;
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

        .avatar-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            position: relative;
            overflow: hidden;
        }

        .avatar-circle-large {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 24px;
            position: relative;
            overflow: hidden;
        }

        .avatar-circle img, .avatar-circle-large img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        .toast-container {
            z-index: 9999 !important;
        }
    </style>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="module">
        // Firebase modules
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
        import { 
            getFirestore, 
            collection, 
            getDocs, 
            doc, 
            updateDoc, 
            deleteDoc,
            query,
            orderBy
        } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-firestore.js";
        import { 
            getStorage, 
            ref, 
            uploadBytes, 
            getDownloadURL
        } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-storage.js";

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
        const storage = getStorage(app);

        // Global variables
        let allCustomers = [];
        let allOrders = [];
        let filteredCustomers = [];
        let refreshInterval;

        // Utility functions
        function showToast(message, type = 'success') {
            const toastContainer = document.getElementById('toastContainer');
            const toastId = 'toast-' + Date.now();
            
            const toast = document.createElement('div');
            toast.id = toastId;
            toast.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0`;
            toast.setAttribute('role', 'alert');
            toast.setAttribute('aria-live', 'assertive');
            toast.setAttribute('aria-atomic', 'true');
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            `;

            toastContainer.appendChild(toast);
            const bsToast = new bootstrap.Toast(toast, { delay: 5000 });
            bsToast.show();

            toast.addEventListener('hidden.bs.toast', () => {
                if (toastContainer.contains(toast)) {
                    toastContainer.removeChild(toast);
                }
            });
        }

        function formatDate(dateString) {
            if (!dateString) return 'N/A';
            try {
                const date = new Date(dateString);
                const now = new Date();
                const isToday = date.toDateString() === now.toDateString();
                
                if (isToday) {
                    return date.toLocaleTimeString('en-US', { 
                        hour: 'numeric', 
                        minute: '2-digit',
                        hour12: true 
                    });
                } else {
                    return date.toLocaleDateString('en-US', { 
                        month: 'short', 
                        day: 'numeric',
                        year: 'numeric'
                    });
                }
            } catch (error) {
                return 'Invalid Date';
            }
        }

        function formatCurrency(amount) {
         if (typeof amount !== 'number' || isNaN(amount)) amount = 0;
          return new Intl.NumberFormat('en-GB', {
          style: 'currency',
         currency: 'GBP'
         }).format(amount);
        }

        function getInitials(name) {
            if (!name) return 'UN';
            return name.split(' ').map(word => word.charAt(0)).join('').toUpperCase().slice(0, 2);
        }

        // Load data from Firestore
        async function loadCustomers() {
            try {
                console.log('Loading customers...');
                const usersRef = collection(db, 'users');
                const q = query(usersRef, orderBy('createdAt', 'desc'));
                const querySnapshot = await getDocs(q);
                
                allCustomers = [];
                querySnapshot.forEach((doc) => {
                    allCustomers.push({ id: doc.id, ...doc.data() });
                });
                
                console.log(`Loaded ${allCustomers.length} customers`);
                filteredCustomers = [...allCustomers];
                updateCustomersTable();
                updateStats();
            } catch (error) {
                console.error('Error loading customers:', error);
                showToast('Error loading customers: ' + error.message, 'error');
                document.getElementById('customersTableBody').innerHTML = 
                    '<tr><td colspan="7" class="text-center text-danger">Error loading customers</td></tr>';
            }
        }

        async function loadOrders() {
            try {
                console.log('Loading orders...');
                const ordersRef = collection(db, 'orders');
                const querySnapshot = await getDocs(ordersRef);
                
                allOrders = [];
                querySnapshot.forEach((doc) => {
                    allOrders.push({ id: doc.id, ...doc.data() });
                });
                
                console.log(`Loaded ${allOrders.length} orders`);
                updateStats();
                updateCustomersTable();
            } catch (error) {
                console.error('Error loading orders:', error);
                showToast('Error loading orders: ' + error.message, 'error');
            }
        }

        // Auto refresh function
        async function refreshData() {
            try {
                console.log('Auto refreshing data...');
                await Promise.all([loadCustomers(), loadOrders()]);
            } catch (error) {
                console.error('Error during auto refresh:', error);
            }
        }

        // Start auto refresh
        function startAutoRefresh() {
            // Clear existing interval if any
            if (refreshInterval) {
                clearInterval(refreshInterval);
            }
            
            // Set up new interval for 5 seconds
            refreshInterval = setInterval(refreshData, 5000);
            console.log('Auto refresh started (5 seconds interval)');
        }

        // Stop auto refresh
        function stopAutoRefresh() {
            if (refreshInterval) {
                clearInterval(refreshInterval);
                refreshInterval = null;
                console.log('Auto refresh stopped');
            }
        }

        // Update table
        function updateCustomersTable() {
            const tbody = document.getElementById('customersTableBody');
            
            if (!filteredCustomers || filteredCustomers.length === 0) {
                tbody.innerHTML = '<tr><td colspan="7" class="text-center">No customers found</td></tr>';
                return;
            }

            tbody.innerHTML = '';
            
            filteredCustomers.forEach(customer => {
                const customerOrders = allOrders.filter(order => 
                    order.userId === customer.id || order.userId === customer.userId
                );
                
                const orderCount = customerOrders.length;
                const totalSpent = customerOrders.reduce((sum, order) => sum + (parseFloat(order.total) || 0), 0);
                const lastOrder = customerOrders.sort((a, b) => 
                    new Date(b.createdTime || b.createdAt || 0) - new Date(a.createdTime || a.createdAt || 0)
                )[0];
                
                const locationDisplay = customer.address ? customer.address.split(',')[0] : 'Unknown';
                
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="avatar-circle me-3">
                                ${customer.profileImageUrl ? 
                                    `<img src="${customer.profileImageUrl}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">` :
                                    getInitials(customer.name)
                                }
                            </div>
                            <div>
                                <strong>${customer.name || 'Unknown'}</strong><br>
                                <small class="text-muted">Customer since ${formatDate(customer.createdAt)}</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <i class="fas fa-phone me-1"></i>${customer.phone || 'N/A'}<br>
                            <i class="fas fa-envelope me-1"></i>${customer.email || 'N/A'}
                        </div>
                    </td>
                    <td>
                        <div>
                            ${locationDisplay}<br>
                            <small class="text-muted">${customer.address || 'No address'}</small>
                        </div>
                    </td>
                    <td>
                        <div>
                            <strong>${orderCount}</strong><br>
                            <small class="text-muted">orders</small>
                        </div>
                    </td>
                    <td><strong>${formatCurrency(totalSpent)}</strong></td>
                    <td>
                        <div>
                            ${lastOrder ? 
                                `<strong>${formatDate(lastOrder.createdTime || lastOrder.createdAt)}</strong>` :
                                '<small class="text-muted">No orders</small>'
                            }
                        </div>
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-primary" onclick="viewCustomerDetails('${customer.id}')" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-outline-info" onclick="openSendEmail('${customer.email}', '${customer.name}')" title="Send Email">
                                <i class="fas fa-envelope"></i>
                            </button>
                            <button class="btn btn-outline-warning" onclick="editCustomer('${customer.id}')" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-outline-danger" onclick="deleteCustomer('${customer.id}')" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                `;
                tbody.appendChild(row);
            });
        }

        function updateStats() {
            const totalCustomers = allCustomers.length;
            const currentMonth = new Date().getMonth();
            const currentYear = new Date().getFullYear();
            
            const newCustomers = allCustomers.filter(customer => {
                if (!customer.createdAt) return false;
                const createdDate = new Date(customer.createdAt);
                return createdDate.getMonth() === currentMonth && createdDate.getFullYear() === currentYear;
            }).length;
            
            const activeCustomers = allCustomers.filter(customer => {
                return allOrders.some(order => {
                    if (!order.createdTime && !order.createdAt) return false;
                    const orderDate = new Date(order.createdTime || order.createdAt);
                    return (order.userId === customer.id || order.userId === customer.userId) && 
                           orderDate.getMonth() === currentMonth && 
                           orderDate.getFullYear() === currentYear;
                });
            }).length;
            
            const totalRevenue = allOrders.reduce((sum, order) => sum + (parseFloat(order.total) || 0), 0);
            const avgOrderValue = allOrders.length > 0 ? totalRevenue / allOrders.length : 0;
            const growthRate = totalCustomers > 0 ? Math.round((newCustomers / totalCustomers) * 100) : 0;
            
            // Update stats with actual values and remove spinners
            document.getElementById('totalCustomers').innerHTML = totalCustomers;
            document.getElementById('activeCustomers').innerHTML = activeCustomers;
            document.getElementById('newCustomers').innerHTML = newCustomers;
            document.getElementById('avgOrderValue').innerHTML = formatCurrency(avgOrderValue);
            document.getElementById('customerGrowth').textContent = `+${growthRate}% this month`;
        }

        // Upload image to Firebase Storage
        async function uploadImage(file, path) {
            try {
                const storageRef = ref(storage, path);
                const snapshot = await uploadBytes(storageRef, file);
                return await getDownloadURL(snapshot.ref);
            } catch (error) {
                console.error('Error uploading image:', error);
                throw error;
            }
        }

        // Customer operations
        async function updateCustomer(id, customerData, imageFile) {
            try {
                let updateData = { ...customerData };
                
                if (imageFile) {
                    const imagePath = `customers/${Date.now()}_${imageFile.name}`;
                    updateData.profileImageUrl = await uploadImage(imageFile, imagePath);
                }
                
                const customerRef = doc(db, 'users', id);
                await updateDoc(customerRef, updateData);
                
                showToast('Customer updated successfully!');
                await loadCustomers();
            } catch (error) {
                console.error('Error updating customer:', error);
                showToast('Error updating customer: ' + error.message, 'error');
                throw error;
            }
        }

        // Global functions
        window.deleteCustomer = async function(id) {
            if (!confirm('Are you sure you want to delete this customer? This action cannot be undone.')) {
                return;
            }
            
            try {
                await deleteDoc(doc(db, 'users', id));
                showToast('Customer deleted successfully!');
                await loadCustomers();
            } catch (error) {
                console.error('Error deleting customer:', error);
                showToast('Error deleting customer: ' + error.message, 'error');
            }
        };

        window.editCustomer = function(id) {
            const customer = allCustomers.find(c => c.id === id);
            if (!customer) {
                showToast('Customer not found', 'error');
                return;
            }
            
            document.getElementById('editCustomerId').value = id;
            document.getElementById('editCustomerName').value = customer.name || '';
            document.getElementById('editCustomerEmail').value = customer.email || '';
            document.getElementById('editCustomerPhone').value = customer.phone || '';
            document.getElementById('editCustomerAddress').value = customer.address || '';
            
            const avatarImg = document.getElementById('editCustomerImage');
            const avatarInitials = document.getElementById('editCustomerInitials');
            
            if (customer.profileImageUrl) {
                avatarImg.src = customer.profileImageUrl;
                avatarImg.classList.remove('d-none');
                avatarInitials.style.display = 'none';
            } else {
                avatarImg.classList.add('d-none');
                avatarInitials.textContent = getInitials(customer.name);
                avatarInitials.style.display = 'flex';
            }
            
            new bootstrap.Modal(document.getElementById('editCustomerModal')).show();
        };

        window.viewCustomerDetails = function(id) {
            const customer = allCustomers.find(c => c.id === id);
            if (!customer) {
                showToast('Customer not found', 'error');
                return;
            }
            
            const customerOrders = allOrders.filter(order => 
                order.userId === customer.id || order.userId === customer.userId
            );
            
            const orderCount = customerOrders.length;
            const totalSpent = customerOrders.reduce((sum, order) => sum + (parseFloat(order.total) || 0), 0);
            const avgOrderValue = orderCount > 0 ? totalSpent / orderCount : 0;
            
            const sortedOrders = customerOrders.sort((a, b) => 
                new Date(b.createdTime || b.createdAt || 0) - new Date(a.createdTime || a.createdAt || 0)
            );
            
            let customerType = { badge: 'bg-warning', label: 'New' };
            if (orderCount >= 20 || totalSpent >= 10000) {
                customerType = { badge: 'bg-success', label: 'VIP' };
            } else if (orderCount >= 5) {
                customerType = { badge: 'bg-primary', label: 'Regular' };
            }
            
            document.getElementById('customerDetailsTitle').textContent = `Customer Details - ${customer.name}`;
            
            const recentOrders = sortedOrders.slice(0, 5);
            let ordersHtml = '';
            
            if (recentOrders.length > 0) {
                recentOrders.forEach(order => {
                    const status = order.status || 'unknown';
                    let statusBadge = 'bg-secondary';
                    switch(status.toLowerCase()) {
                        case 'delivered': statusBadge = 'bg-success'; break;
                        case 'pending': statusBadge = 'bg-warning'; break;
                        case 'preparing': statusBadge = 'bg-primary'; break;
                        case 'out_for_delivery': statusBadge = 'bg-info'; break;
                        case 'cancelled': statusBadge = 'bg-danger'; break;
                    }
                    
                    const itemCount = order.items ? order.items.length : 0;
                    const itemsDisplay = itemCount === 1 ? '1 item' : `${itemCount} items`;
                    
                    ordersHtml += `
                        <tr>
                            <td>#${order.orderID || order.id || 'N/A'}</td>
                            <td>${formatDate(order.createdTime || order.createdAt)}</td>
                            <td>${itemsDisplay}</td>
                            <td>${formatCurrency(parseFloat(order.total) || 0)}</td>
                            <td><span class="badge ${statusBadge}">${status.charAt(0).toUpperCase() + status.slice(1)}</span></td>
                        </tr>
                    `;
                });
            } else {
                ordersHtml = '<tr><td colspan="5" class="text-center">No orders found</td></tr>';
            }
            
            document.getElementById('customerDetailsBody').innerHTML = `
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center mb-3">
                            <div class="avatar-circle-large mx-auto mb-3">
                                ${customer.profileImageUrl ? 
                                    `<img src="${customer.profileImageUrl}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">` :
                                    getInitials(customer.name)
                                }
                            </div>
                            <h5>${customer.name || 'Unknown'}</h5>
                            <span class="badge ${customerType.badge}">${customerType.label} Customer</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6>Contact Information</h6>
                        <p><i class="fas fa-envelope me-2"></i>${customer.email || 'N/A'}</p>
                        <p><i class="fas fa-phone me-2"></i>${customer.phone || 'N/A'}</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i>${customer.address || 'N/A'}</p>
                        
                        <h6 class="mt-4">Order Statistics</h6>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Total Orders:</strong> ${orderCount}</p>
                                <p><strong>Total Spent:</strong> ${formatCurrency(totalSpent)}</p>
                            </div>
                            <div class="col-6">
                                <p><strong>Average Order:</strong> ${formatCurrency(avgOrderValue)}</p>
                                <p><strong>Last Order:</strong> ${sortedOrders[0] ? formatDate(sortedOrders[0].createdTime || sortedOrders[0].createdAt) : 'No orders'}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr>
                
                <h6>Recent Orders</h6>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${ordersHtml}
                        </tbody>
                    </table>
                </div>
            `;
            
            document.getElementById('editFromDetailsBtn').onclick = () => {
                bootstrap.Modal.getInstance(document.getElementById('customerDetailsModal')).hide();
                setTimeout(() => editCustomer(id), 300);
            };
            
            document.getElementById('sendEmailBtn').onclick = () => {
                bootstrap.Modal.getInstance(document.getElementById('customerDetailsModal')).hide();
                setTimeout(() => openSendEmail(customer.email, customer.name), 300);
            };
            
            new bootstrap.Modal(document.getElementById('customerDetailsModal')).show();
        };

        window.openSendEmail = function(email, name) {
            if (!email) {
                showToast('Customer email not available', 'error');
                return;
            }
            
            document.getElementById('emailRecipient').value = email;
            document.getElementById('emailSubject').value = `Hello ${name || 'Customer'}!`;
            document.getElementById('emailMessage').value = '';
            new bootstrap.Modal(document.getElementById('sendEmailModal')).show();
        };

        window.sendEmail = function() {
            const recipient = document.getElementById('emailRecipient').value;
            const subject = document.getElementById('emailSubject').value;
            const message = document.getElementById('emailMessage').value;
            
            if (!subject || !message) {
                showToast('Please fill in all fields', 'error');
                return;
            }
            
            const gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=${encodeURIComponent(recipient)}&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(message)}`;
            window.open(gmailUrl, '_blank');
            
            bootstrap.Modal.getInstance(document.getElementById('sendEmailModal')).hide();
            showToast('Gmail opened with pre-filled email!');
        };

        window.sendNewsletter = function() {
            if (allCustomers.length === 0) {
                showToast('No customers found to send newsletter', 'error');
                return;
            }
            
            const emails = allCustomers.map(customer => customer.email).filter(email => email);
            if (emails.length === 0) {
                showToast('No customer emails found', 'error');
                return;
            }
            
            const subject = 'Newsletter from The Turmeric Indian Cuisine';
            const message = `Dear valued customer,

Thank you for being part of our family! We're excited to share our latest updates with you.

🍛 NEW MENU ITEMS:
- Authentic Biryani varieties
- Fresh seasonal curries
- Special weekend dishes

🎉 SPECIAL OFFERS:
- 15% off on orders above ₹2000
- Free delivery on weekends
- Loyalty points for regular customers

📍 RESTAURANT UPDATES:
- Extended hours: Now open until 11 PM
- Online ordering available
- Catering services for events

We appreciate your continued support and look forward to serving you soon!

Best regards,
The Turmeric Indian Cuisine Team

---
Visit us: www.theturmericindian.com
Call us: (555) 123-4567
Follow us on social media for daily updates!`;
            
            const gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1&bcc=${encodeURIComponent(emails.join(','))}&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(message)}`;
            window.open(gmailUrl, '_blank');
            
            showToast(`Newsletter prepared for ${emails.length} customers in Gmail!`);
        };

        // Filter functionality
        function applyFilters() {
            const dateFilter = document.getElementById('dateFilter').value;
            const searchFilter = document.getElementById('customerSearch').value.toLowerCase();
            
            filteredCustomers = allCustomers.filter(customer => {
                let matchesDate = true;
                let matchesSearch = true;
                
                if (dateFilter) {
                    const filterDate = new Date(dateFilter);
                    const customerDate = new Date(customer.createdAt);
                    matchesDate = customerDate.toDateString() === filterDate.toDateString();
                }
                
                if (searchFilter) {
                    const searchText = `${customer.name || ''} ${customer.email || ''} ${customer.phone || ''} ${customer.address || ''}`.toLowerCase();
                    matchesSearch = searchText.includes(searchFilter);
                }
                
                return matchesDate && matchesSearch;
            });
            
            updateCustomersTable();
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Initializing Customer Management System...');
            
            // Load data
            loadCustomers();
            loadOrders();
            
            // Start auto refresh
            startAutoRefresh();
            
            // Set up filter listeners
            document.getElementById('dateFilter').addEventListener('change', applyFilters);
            document.getElementById('customerSearch').addEventListener('input', applyFilters);
            
            // Update customer form handler
            document.getElementById('updateCustomerBtn').addEventListener('click', async function() {
                const form = document.getElementById('editCustomerForm');
                const btn = this;
                const spinner = btn.querySelector('.spinner-border');
                
                if (!form.checkValidity()) {
                    form.classList.add('was-validated');
                    return;
                }
                
                try {
                    btn.disabled = true;
                    spinner.classList.remove('d-none');
                    
                    const customerData = {
                        name: document.getElementById('editCustomerName').value,
                        email: document.getElementById('editCustomerEmail').value,
                        phone: document.getElementById('editCustomerPhone').value,
                        address: document.getElementById('editCustomerAddress').value
                    };
                    
                    const imageFile = document.getElementById('editCustomerProfileImage').files[0];
                    const customerId = document.getElementById('editCustomerId').value;
                    
                    await updateCustomer(customerId, customerData, imageFile);
                    
                    form.reset();
                    form.classList.remove('was-validated');
                    bootstrap.Modal.getInstance(document.getElementById('editCustomerModal')).hide();
                    
                } catch (error) {
                    console.error('Error updating customer:', error);
                } finally {
                    btn.disabled = false;
                    spinner.classList.add('d-none');
                }
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

            // Stop auto refresh when page is unloaded
            window.addEventListener('beforeunload', stopAutoRefresh);
        });

    </script>
</body>
</html>