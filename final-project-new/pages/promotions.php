<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotions & Offers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Promotions & Offers</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createPromotionModal">
                    <i class="fas fa-plus me-1"></i>Create Promotion
                </button>
            </div>
        </div>

        <!-- Promotion Stats -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card stats-card text-center">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Total Promotions</h5>
                        <h2 class="text-primary" id="totalPromotionsCount">-</h2>
                        <small class="text-muted">All time created</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stats-card success text-center">
                    <div class="card-body">
                        <h5 class="card-title text-success">Most Used Promo</h5>
                        <h2 class="text-success" id="mostUsedPromo">-</h2>
                        <small class="text-muted">Highest redemptions</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stats-card warning text-center">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Avg. Discount</h5>
                        <h2 class="text-warning" id="avgDiscount">-</h2>
                        <small class="text-muted">Average value offered</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stats-card info text-center">
                    <div class="card-body">
                        <h5 class="card-title text-info">Expiring Soon</h5>
                        <h2 class="text-info" id="expiringSoon">-</h2>
                        <small class="text-muted">Next 7 days</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Promotions -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-fire me-2"></i>Active Promotions
                </h5>
            </div>
            <div class="card-body">
                <div class="row" id="activePromotionsContainer">
                    <!-- Active promotions will be loaded here -->
                </div>
            </div>
        </div>

        <!-- All Promotions Table -->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-list me-2"></i>All Promotions
                        </h5>
                    </div>
                    <div class="col-auto">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-secondary active" data-filter="all">All</button>
                            <button class="btn btn-outline-secondary" data-filter="active">Active</button>
                            <button class="btn btn-outline-secondary" data-filter="paused">Paused</button>
                            <button class="btn btn-outline-secondary" data-filter="expired">Expired</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Discount</th>
                                <th>Usage</th>
                                <th>Valid Until</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="promotionsTableBody">
                            <!-- Promotions will be loaded here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Promotion Modal -->
    <div class="modal fade" id="createPromotionModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Promotion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="createPromotionForm" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="promoCode" class="form-label">Promotion Code</label>
                                <input type="text" class="form-control" id="promoCode" placeholder="e.g., SAVE20" required>
                                <div class="invalid-feedback">Please provide a promotion code.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="promoName" class="form-label">Promotion Name</label>
                                <input type="text" class="form-control" id="promoName" placeholder="e.g., Summer Sale" required>
                                <div class="invalid-feedback">Please provide a promotion name.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="promoDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="promoDescription" rows="3" placeholder="Describe the promotion..." required></textarea>
                            <div class="invalid-feedback">Please provide a description.</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="discountType" class="form-label">Discount Type</label>
                                <select class="form-select" id="discountType" required>
                                    <option value="">Select Type</option>
                                    <option value="percentage">Percentage</option>
                                    <option value="fixed">Fixed Amount</option>
                                    <option value="bogo">Buy One Get One</option>
                                </select>
                                <div class="invalid-feedback">Please select a discount type.</div>
                            </div>
                            <div class="col-md-4">
                                <label for="discountValue" class="form-label">Discount Value</label>
                                <input type="number" class="form-control" id="discountValue" placeholder="20" required min="0">
                                <div class="invalid-feedback">Please provide a valid discount value.</div>
                            </div>
                            <div class="col-md-4">
                                <label for="minOrderValue" class="form-label">Min Order Value (₹)</label>
                                <input type="number" class="form-control" id="minOrderValue" placeholder="0" min="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="startDate" class="form-label">Start Date</label>
                                <input type="datetime-local" class="form-control" id="startDate" required>
                                <div class="invalid-feedback">Please select a start date.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="endDate" class="form-label">End Date</label>
                                <input type="datetime-local" class="form-control" id="endDate" required>
                                <div class="invalid-feedback">Please select an end date.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="usageLimit" class="form-label">Usage Limit</label>
                                <input type="number" class="form-control" id="usageLimit" placeholder="100" min="1" required>
                                <div class="invalid-feedback">Please provide a usage limit.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="promoImage" class="form-label">Promotion Image</label>
                                <input type="file" class="form-control" id="promoImage" accept="image/*">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="createPromotionBtn">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
                        Create Promotion
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Promotion Modal -->
    <div class="modal fade" id="editPromotionModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Promotion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editPromotionForm" class="needs-validation" novalidate>
                        <input type="hidden" id="editPromoId">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editPromoCode" class="form-label">Promotion Code</label>
                                <input type="text" class="form-control" id="editPromoCode" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editPromoName" class="form-label">Promotion Name</label>
                                <input type="text" class="form-control" id="editPromoName" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="editPromoDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="editPromoDescription" rows="3" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="editDiscountType" class="form-label">Discount Type</label>
                                <select class="form-select" id="editDiscountType" required>
                                    <option value="percentage">Percentage</option>
                                    <option value="fixed">Fixed Amount</option>
                                    <option value="bogo">Buy One Get One</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="editDiscountValue" class="form-label">Discount Value</label>
                                <input type="number" class="form-control" id="editDiscountValue" required min="0">
                            </div>
                            <div class="col-md-4">
                                <label for="editMinOrderValue" class="form-label">Min Order Value (₹)</label>
                                <input type="number" class="form-control" id="editMinOrderValue" min="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editStartDate" class="form-label">Start Date</label>
                                <input type="datetime-local" class="form-control" id="editStartDate" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editEndDate" class="form-label">End Date</label>
                                <input type="datetime-local" class="form-control" id="editEndDate" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editUsageLimit" class="form-label">Usage Limit</label>
                                <input type="number" class="form-control" id="editUsageLimit" min="1" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editPromoImage" class="form-label">Promotion Image</label>
                                <input type="file" class="form-control" id="editPromoImage" accept="image/*">
                                <small class="text-muted">Leave empty to keep current image</small>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="updatePromotionBtn">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
                        Update Promotion
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
    .promotion-card {
        transition: all 0.3s ease;
    }

    .promotion-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .progress {
        background-color: rgba(0,0,0,0.1);
    }

    .loading {
        opacity: 0.6;
        pointer-events: none;
    }

    /* Enhanced UI Styles */
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

    .text-xs {
        font-size: 0.7rem;
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

    .btn-group .btn {
        border-color: #d1d3e2;
    }

    .btn-outline-primary {
        color: #4e73df;
        border-color: #4e73df;
    }

    .btn-outline-primary:hover {
        background-color: #4e73df;
        border-color: #4e73df;
    }

    .btn-outline-warning {
        color: #f6c23e;
        border-color: #f6c23e;
    }

    .btn-outline-warning:hover {
        background-color: #f6c23e;
        border-color: #f6c23e;
    }

    .btn-outline-danger {
        color: #e74a3b;
        border-color: #e74a3b;
    }

    .btn-outline-danger:hover {
        background-color: #e74a3b;
        border-color: #e74a3b;
    }

    .btn-outline-success {
        color: #1cc88a;
        border-color: #1cc88a;
    }

    .btn-outline-success:hover {
        background-color: #1cc88a;
        border-color: #1cc88a;
    }

    .btn-outline-info {
        color: #36b9cc;
        border-color: #36b9cc;
    }

    .btn-outline-info:hover {
        background-color: #36b9cc;
        border-color: #36b9cc;
    }

    .btn-outline-secondary {
        color: #858796;
        border-color: #d1d3e2;
    }

    .btn-outline-secondary:hover {
        background-color: #858796;
        border-color: #858796;
    }

    .btn-outline-secondary.active {
        background-color: #858796;
        border-color: #858796;
        color: #fff;
    }

    code {
        background-color: #f8f9fc;
        color: #e83e8c;
        padding: 0.2rem 0.4rem;
        border-radius: 0.2rem;
        font-size: 0.875rem;
    }

    .container-fluid {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .promotion-card .card-header {
        font-weight: 700;
    }

    .promotion-card .progress {
        height: 0.25rem;
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
            Timestamp
        } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";
        import { 
            getStorage, 
            ref, 
            uploadBytes, 
            getDownloadURL 
        } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-storage.js";

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
        let allPromotions = [];

        // Utility functions
        function showToast(message, type = 'success') {
            // Create toast element
            const toast = document.createElement('div');
            toast.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0`;
            toast.setAttribute('role', 'alert');
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;

            // Add to page
            document.body.appendChild(toast);
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();

            // Remove after hiding
            toast.addEventListener('hidden.bs.toast', () => {
                document.body.removeChild(toast);
            });
        }

        function formatDate(dateInput) {
            let date;
            
            // Handle both Timestamp and Date objects
            if (dateInput && typeof dateInput.toDate === 'function') {
                // It's a Firestore Timestamp
                date = dateInput.toDate();
            } else if (dateInput instanceof Date) {
                // It's already a Date object
                date = dateInput;
            } else if (typeof dateInput === 'string') {
                // It's a string, parse it
                date = new Date(dateInput);
            } else {
                // Fallback
                return 'Invalid Date';
            }
            
            return date.toLocaleDateString();
        }

        function formatCurrency(amount) {
            return new Intl.NumberFormat('en-IN', {
                style: 'currency',
                currency: 'INR'
            }).format(amount);
        }

        function getPromotionStatus(promotion) {
            const now = new Date();
            let endDate, startDate;
            
            // Handle both Timestamp and Date objects
            if (promotion.endDate && typeof promotion.endDate.toDate === 'function') {
                endDate = promotion.endDate.toDate();
            } else {
                endDate = new Date(promotion.endDate);
            }
            
            if (promotion.startDate && typeof promotion.startDate.toDate === 'function') {
                startDate = promotion.startDate.toDate();
            } else {
                startDate = new Date(promotion.startDate);
            }
            
            if (promotion.status === 'paused') return 'paused';
            if (endDate < now) return 'expired';
            if (startDate > now) return 'scheduled';
            if ((promotion.usageCount || 0) >= promotion.usageLimit) return 'exhausted';
            return 'active';
        }

        function getStatusBadge(status) {
            const badges = {
                'active': 'bg-success',
                'paused': 'bg-warning',
                'expired': 'bg-danger',
                'scheduled': 'bg-info',
                'exhausted': 'bg-secondary'
            };
            return `<span class="badge ${badges[status]}">${status.charAt(0).toUpperCase() + status.slice(1)}</span>`;
        }

        // Convert Date to datetime-local format
        function dateToInputFormat(dateInput) {
            let date;
            
            // Handle both Timestamp and Date objects
            if (dateInput && typeof dateInput.toDate === 'function') {
                // It's a Firestore Timestamp
                date = dateInput.toDate();
            } else if (dateInput instanceof Date) {
                // It's already a Date object
                date = dateInput;
            } else if (typeof dateInput === 'string') {
                // It's a string, parse it
                date = new Date(dateInput);
            } else {
                // Fallback to current date
                date = new Date();
            }
            
            // Convert to local timezone and format for datetime-local input
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            const hours = String(date.getHours()).padStart(2, '0');
            const minutes = String(date.getMinutes()).padStart(2, '0');
            
            return `${year}-${month}-${day}T${hours}:${minutes}`;
        }

        // Upload image to Firebase Storage
        async function uploadImage(file, path) {
            const storageRef = ref(storage, path);
            const snapshot = await uploadBytes(storageRef, file);
            return await getDownloadURL(snapshot.ref);
        }

        // Load promotions from Firestore
        async function loadPromotions() {
            try {
                const promotionsRef = collection(db, 'promotions');
                const q = query(promotionsRef, orderBy('createdAt', 'desc'));
                const querySnapshot = await getDocs(q);
                
                allPromotions = [];
                querySnapshot.forEach((doc) => {
                    allPromotions.push({ id: doc.id, ...doc.data() });
                });
                
                updatePromotionsDisplay();
                updateStats();
            } catch (error) {
                console.error('Error loading promotions:', error);
                showToast('Error loading promotions', 'error');
            }
        }

        // Update promotions display
        function updatePromotionsDisplay() {
            updateActivePromotionsCards();
            updatePromotionsTable();
        }

        // Update active promotions cards
        function updateActivePromotionsCards() {
            const container = document.getElementById('activePromotionsContainer');
            const activePromotions = allPromotions.filter(promo => getPromotionStatus(promo) === 'active').slice(0, 3);
            
            container.innerHTML = '';
            
            if (activePromotions.length === 0) {
                container.innerHTML = '<div class="col-12 text-center text-muted">No active promotions available</div>';
                return;
            }
            
            activePromotions.forEach(promotion => {
                const usageCount = promotion.usageCount || 0;
                const usagePercentage = Math.round((usageCount / promotion.usageLimit) * 100);
                const discountDisplay = promotion.discountType === 'percentage' 
                    ? `${promotion.discountValue}%` 
                    : `₹${promotion.discountValue}`;
                
                container.innerHTML += `
                    <div class="col-lg-4 mb-3">
                        <div class="card border-left-success promotion-card">
                            <div class="card-header bg-light border-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0 font-weight-bold text-primary">${promotion.code}</h6>
                                    <span class="badge badge-success">Active</span>
                                </div>
                            </div>
                            <div class="card-body">
                                ${promotion.imageUrl ? `<img src="${promotion.imageUrl}" alt="Promotion Image" class="mb-3 rounded" style="max-height: 100px; object-fit: contain; display: block; margin-left: auto; margin-right: auto;">` : ''}
                                <h5 class="card-title text-gray-900">${promotion.name}</h5>
                                <p class="card-text text-gray-600">${promotion.description}</p>
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>Valid until: ${formatDate(promotion.endDate)}
                                    </small>
                                </div>
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="fas fa-users me-1"></i>Used: ${usageCount}/${promotion.usageLimit} times
                                    </small>
                                </div>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" style="width: ${usagePercentage}%"></div>
                                </div>
                                <div class="btn-group btn-group-sm w-100">
                                    <button class="btn btn-outline-primary" onclick="editPromotion('${promotion.id}')">Edit</button>
                                    <button class="btn btn-outline-warning" onclick="togglePromotionStatus('${promotion.id}', 'paused')">Pause</button>
                                    <button class="btn btn-outline-danger" onclick="deletePromotion('${promotion.id}')">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
        }

        // Update promotions table
        function updatePromotionsTable() {
            const tbody = document.getElementById('promotionsTableBody');
            tbody.innerHTML = '';
            
            if (allPromotions.length === 0) {
                tbody.innerHTML = '<tr><td colspan="8" class="text-center text-muted">No promotions available</td></tr>';
                return;
            }
            
            allPromotions.forEach(promotion => {
                const status = getPromotionStatus(promotion);
                const usageCount = promotion.usageCount || 0;
                const usagePercentage = Math.round((usageCount / promotion.usageLimit) * 100);
                const discountDisplay = promotion.discountType === 'percentage' 
                    ? `${promotion.discountValue}%` 
                    : `₹${promotion.discountValue}`;
                
                tbody.innerHTML += `
                    <tr data-status="${status}">
                        <td><code>${promotion.code}</code></td>
                        <td>${promotion.name}</td>
                        <td><span class="badge ${promotion.discountType === 'percentage' ? 'bg-info' : 'bg-success'}">${promotion.discountType === 'percentage' ? 'Percentage' : 'Fixed Amount'}</span></td>
                        <td><strong>${discountDisplay}</strong></td>
                        <td>
                            <div>
                                <strong>${usageCount}/${promotion.usageLimit}</strong><br>
                                <small class="text-muted">${usagePercentage}% used</small>
                            </div>
                        </td>
                        <td>${formatDate(promotion.endDate)}</td>
                        <td>${getStatusBadge(status)}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" onclick="editPromotion('${promotion.id}')" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                ${status === 'active' ? 
                                    `<button class="btn btn-outline-warning" onclick="togglePromotionStatus('${promotion.id}', 'paused')" title="Pause">
                                        <i class="fas fa-pause"></i>
                                    </button>` :
                                    status === 'paused' ?
                                    `<button class="btn btn-outline-success" onclick="togglePromotionStatus('${promotion.id}', 'active')" title="Resume">
                                        <i class="fas fa-play"></i>
                                    </button>` : ''
                                }
                                <button class="btn btn-outline-danger" onclick="deletePromotion('${promotion.id}')" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
        }

        // Update stats
        function updateStats() {
            // Total Promotions
            const totalPromotions = allPromotions.length;
            document.getElementById('totalPromotionsCount').textContent = totalPromotions;

            // Most Used Promo
            let mostUsed = { code: 'None', usageCount: 0 };
            allPromotions.forEach(promo => {
                const usageCount = promo.usageCount || 0;
                if (usageCount > mostUsed.usageCount) {
                    mostUsed = { code: promo.code, usageCount };
                }
            });
            document.getElementById('mostUsedPromo').textContent = mostUsed.code;

            // Average Discount
            if (totalPromotions > 0) {
                const totalDiscount = allPromotions.reduce((sum, promo) => {
                    if (promo.discountType === 'percentage') {
                        return sum + promo.discountValue;
                    } else {
                        return sum + (promo.discountValue / 10); // Convert fixed amount to percentage equivalent
                    }
                }, 0);
                const avgDiscount = Math.round(totalDiscount / totalPromotions);
                document.getElementById('avgDiscount').textContent = `${avgDiscount}%`;
            } else {
                document.getElementById('avgDiscount').textContent = '0%';
            }

            // Expiring Soon (next 7 days)
            const sevenDaysFromNow = new Date();
            sevenDaysFromNow.setDate(sevenDaysFromNow.getDate() + 7);
            
            const expiringSoon = allPromotions.filter(promo => {
                let endDate;
                if (promo.endDate && typeof promo.endDate.toDate === 'function') {
                    endDate = promo.endDate.toDate();
                } else {
                    endDate = new Date(promo.endDate);
                }
                
                const now = new Date();
                return endDate > now && endDate <= sevenDaysFromNow && getPromotionStatus(promo) === 'active';
            }).length;
            
            document.getElementById('expiringSoon').textContent = expiringSoon;
        }

        // Create promotion
        async function createPromotion(promotionData, imageFile) {
            try {
                let imageUrl = '';
                
                if (imageFile) {
                    const imagePath = `promotions/${Date.now()}_${imageFile.name}`;
                    imageUrl = await uploadImage(imageFile, imagePath);
                }
                
                // Convert dates to Firestore Timestamps
                const dataWithTimestamps = {
                    ...promotionData,
                    imageUrl,
                    usageCount: 0,
                    startDate: Timestamp.fromDate(new Date(promotionData.startDate)),
                    endDate: Timestamp.fromDate(new Date(promotionData.endDate)),
                    createdAt: Timestamp.now(),
                    updatedAt: Timestamp.now()
                };
                
                const docRef = await addDoc(collection(db, 'promotions'), dataWithTimestamps);
                
                showToast('Promotion created successfully!');
                loadPromotions();
                return docRef.id;
            } catch (error) {
                console.error('Error creating promotion:', error);
                showToast('Error creating promotion', 'error');
                throw error;
            }
        }

        // Update promotion
        async function updatePromotion(id, promotionData, imageFile) {
            try {
                let updateData = { 
                    ...promotionData, 
                    updatedAt: Timestamp.now(),
                    startDate: Timestamp.fromDate(new Date(promotionData.startDate)),
                    endDate: Timestamp.fromDate(new Date(promotionData.endDate))
                };
                
                if (imageFile) {
                    const imagePath = `promotions/${Date.now()}_${imageFile.name}`;
                    updateData.imageUrl = await uploadImage(imageFile, imagePath);
                }
                
                const promotionRef = doc(db, 'promotions', id);
                await updateDoc(promotionRef, updateData);
                
                showToast('Promotion updated successfully!');
                loadPromotions();
            } catch (error) {
                console.error('Error updating promotion:', error);
                showToast('Error updating promotion', 'error');
                throw error;
            }
        }

        // Delete promotion
        window.deletePromotion = async function(id) {
            if (!confirm('Are you sure you want to delete this promotion?')) {
                return;
            }
            
            try {
                await deleteDoc(doc(db, 'promotions', id));
                showToast('Promotion deleted successfully!');
                loadPromotions();
            } catch (error) {
                console.error('Error deleting promotion:', error);
                showToast('Error deleting promotion', 'error');
            }
        };

        // Toggle promotion status
        window.togglePromotionStatus = async function(id, newStatus) {
            try {
                const promotionRef = doc(db, 'promotions', id);
                await updateDoc(promotionRef, { 
                    status: newStatus,
                    updatedAt: Timestamp.now()
                });
                
                showToast(`Promotion ${newStatus === 'paused' ? 'paused' : 'resumed'} successfully!`);
                loadPromotions();
            } catch (error) {
                console.error('Error updating promotion status:', error);
                showToast('Error updating promotion status', 'error');
            }
        };

        // Edit promotion - FIXED VERSION
        window.editPromotion = function(id) {
            const promotion = allPromotions.find(p => p.id === id);
            if (!promotion) {
                showToast('Promotion not found', 'error');
                return;
            }
            
            try {
                // Populate edit form with current values
                document.getElementById('editPromoId').value = id;
                document.getElementById('editPromoCode').value = promotion.code || '';
                document.getElementById('editPromoName').value = promotion.name || '';
                document.getElementById('editPromoDescription').value = promotion.description || '';
                document.getElementById('editDiscountType').value = promotion.discountType || 'percentage';
                document.getElementById('editDiscountValue').value = promotion.discountValue || 0;
                document.getElementById('editMinOrderValue').value = promotion.minOrderValue || 0;
                document.getElementById('editUsageLimit').value = promotion.usageLimit || 1;
                
                // Handle date formatting for datetime-local inputs
                document.getElementById('editStartDate').value = dateToInputFormat(promotion.startDate);
                document.getElementById('editEndDate').value = dateToInputFormat(promotion.endDate);
                
                // Reset file input and validation
                document.getElementById('editPromoImage').value = '';
                const form = document.getElementById('editPromotionForm');
                form.classList.remove('was-validated');
                
                // Show modal
                const modal = new bootstrap.Modal(document.getElementById('editPromotionModal'));
                modal.show();
                
            } catch (error) {
                console.error('Error populating edit form:', error);
                showToast('Error loading promotion data', 'error');
            }
        };

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Set default dates for create form
            const now = new Date();
            const startDate = document.getElementById('startDate');
            const endDate = document.getElementById('endDate');
            
            if (startDate) {
                startDate.value = dateToInputFormat(now);
            }
            
            if (endDate) {
                const futureDate = new Date(now.getTime() + 30 * 24 * 60 * 60 * 1000); // 30 days from now
                endDate.value = dateToInputFormat(futureDate);
            }

            // Load promotions on page load
            loadPromotions();
        });

        // Create promotion form handler
        document.getElementById('createPromotionBtn').addEventListener('click', async function() {
            const form = document.getElementById('createPromotionForm');
            const btn = this;
            const spinner = btn.querySelector('.spinner-border');
            
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
            
            // Validate dates
            const startDate = new Date(document.getElementById('startDate').value);
            const endDate = new Date(document.getElementById('endDate').value);
            
            if (endDate <= startDate) {
                showToast('End date must be after start date', 'error');
                return;
            }
            
            try {
                btn.disabled = true;
                spinner.classList.remove('d-none');
                
                const promotionData = {
                    code: document.getElementById('promoCode').value.toUpperCase(),
                    name: document.getElementById('promoName').value,
                    description: document.getElementById('promoDescription').value,
                    discountType: document.getElementById('discountType').value,
                    discountValue: parseFloat(document.getElementById('discountValue').value),
                    minOrderValue: parseFloat(document.getElementById('minOrderValue').value) || 0,
                    startDate: startDate.toISOString(),
                    endDate: endDate.toISOString(),
                    usageLimit: parseInt(document.getElementById('usageLimit').value),
                    status: 'active'
                };
                
                const imageFile = document.getElementById('promoImage').files[0];
                
                await createPromotion(promotionData, imageFile);
                
                // Reset form and close modal
                form.reset();
                form.classList.remove('was-validated');
                bootstrap.Modal.getInstance(document.getElementById('createPromotionModal')).hide();
                
            } catch (error) {
                console.error('Error:', error);
            } finally {
                btn.disabled = false;
                spinner.classList.add('d-none');
            }
        });

        // Update promotion form handler - FIXED VERSION
        document.getElementById('updatePromotionBtn').addEventListener('click', async function() {
            const form = document.getElementById('editPromotionForm');
            const btn = this;
            const spinner = btn.querySelector('.spinner-border');
            
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
            
            // Validate dates
            const startDate = new Date(document.getElementById('editStartDate').value);
            const endDate = new Date(document.getElementById('editEndDate').value);
            
            if (endDate <= startDate) {
                showToast('End date must be after start date', 'error');
                return;
            }
            
            try {
                btn.disabled = true;
                spinner.classList.remove('d-none');
                
                const promotionData = {
                    code: document.getElementById('editPromoCode').value.toUpperCase(),
                    name: document.getElementById('editPromoName').value,
                    description: document.getElementById('editPromoDescription').value,
                    discountType: document.getElementById('editDiscountType').value,
                    discountValue: parseFloat(document.getElementById('editDiscountValue').value),
                    minOrderValue: parseFloat(document.getElementById('editMinOrderValue').value) || 0,
                    startDate: startDate.toISOString(),
                    endDate: endDate.toISOString(),
                    usageLimit: parseInt(document.getElementById('editUsageLimit').value)
                };
                
                const imageFile = document.getElementById('editPromoImage').files[0];
                const promotionId = document.getElementById('editPromoId').value;
                
                await updatePromotion(promotionId, promotionData, imageFile);
                
                // Reset form and close modal
                form.reset();
                form.classList.remove('was-validated');
                bootstrap.Modal.getInstance(document.getElementById('editPromotionModal')).hide();
                
            } catch (error) {
                console.error('Error:', error);
            } finally {
                btn.disabled = false;
                spinner.classList.add('d-none');
            }
        });

        // Filter promotions by status
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

        // Auto-generate promotion code
        document.getElementById('promoName').addEventListener('input', function() {
            const name = this.value;
            const codeField = document.getElementById('promoCode');
            
            if (name && !codeField.value) {
                // Generate code from name (first letters + random number)
                const words = name.split(' ');
                let code = '';
                words.forEach(word => {
                    if (word.length > 0) {
                        code += word.charAt(0).toUpperCase();
                    }
                });
                code += Math.floor(Math.random() * 100);
                codeField.value = code;
            }
        });

        // Real-time promotion monitoring (optional)
        // Uncomment the following code to enable real-time updates
        /*
        const promotionsRef = collection(db, 'promotions');
        onSnapshot(promotionsRef, (snapshot) => {
            allPromotions = [];
            snapshot.forEach((doc) => {
                allPromotions.push({ id: doc.id, ...doc.data() });
            });
            updatePromotionsDisplay();
            updateStats();
        });
        */

    </script>
</body>
</html>