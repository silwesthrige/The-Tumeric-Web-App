
    <style>
        .nav-pills .nav-link {
            color: #666;
            border-radius: 8px;
            margin-bottom: 5px;
            transition: all 0.3s ease;
        }

        .nav-pills .nav-link:hover {
            background-color: #f8f9fa;
            color: #333;
        }

        .nav-pills .nav-link.active {
            background-color: #007bff;
            color: white;
        }

        .form-check-input:checked {
            background-color: #007bff;
            border-color: #007bff;
        }

        .card {
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .upload-area {
            border: 2px dashed #dee2e6;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: border-color 0.3s ease;
            cursor: pointer;
        }

        .upload-area:hover {
            border-color: #007bff;
        }

        .upload-area.dragover {
            border-color: #007bff;
            background-color: #f8f9fa;
        }

        .image-preview {
            max-width: 100px;
            max-height: 100px;
            margin-top: 10px;
            border-radius: 8px;
            object-fit: cover;
        }

        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading-spinner {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
        }
        .h2 {
            font-size: 2rem;
            font-weight: 400;
            line-height: 1.2;
            color: #495057;
        }
        .btn-custom {
            border-radius: 0.5rem;
            font-size: 0.8125rem;
            font-weight: 500;
            padding: 0.35rem 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            transition: all 0.3s ease;
            background-color: #ea580c;
            border: 1px solid #ea580c;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #c2410c;
            border-color: #c2410c;
            color: #fff;
            transform: translateY(-1px);
        }

        /* Secondary outline (for reload buttons - keep existing colors) */
        .btn-custom-outline {
            background-color: #fff;
            border: 1px solid #6c757d;
            color: #6c757d;
            border-radius: 0.5rem;
            font-size: 0.8125rem;
            font-weight: 500;
            padding: 0.35rem 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            transition: all 0.3s ease;
        }
        .btn-custom-outline:hover {
            background-color: #6c757d;
            color: #fff;
            transform: translateY(-1px);
        }

    </style>
</head>
<body>
    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-2 mb-0">Processing...</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Restaurant Settings</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn-custom" id="saveAllBtn">
                    <i class="fas fa-save"></i> Save All Changes
                </button>
            </div>
        </div>

        <!-- Settings Navigation -->
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="settings-tab" role="tablist">
                            <button class="nav-link active" id="restaurant-tab" data-bs-toggle="pill" data-bs-target="#restaurant" type="button" role="tab">
                                <i class="fas fa-store me-2"></i>Restaurant Info
                            </button>
                            <button class="nav-link" id="users-tab" data-bs-toggle="pill" data-bs-target="#users" type="button" role="tab">
                                <i class="fas fa-users me-2"></i>User Management
                            </button>
                            <button class="nav-link" id="payment-tab" data-bs-toggle="pill" data-bs-target="#payment" type="button" role="tab">
                                <i class="fas fa-credit-card me-2"></i>Payment Settings
                            </button>
                            <button class="nav-link" id="delivery-tab" data-bs-toggle="pill" data-bs-target="#delivery" type="button" role="tab">
                                <i class="fas fa-truck me-2"></i>Delivery Settings
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-9">
                <div class="tab-content" id="settings-tabContent">
                    
                    <!-- Restaurant Info -->
                    <div class="tab-pane fade show active" id="restaurant" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Restaurant Information</h5>
                            </div>
                            <div class="card-body">
                                <form id="restaurantForm">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="restaurantName" class="form-label">Restaurant Name</label>
                                            <input type="text" class="form-control" id="restaurantName" name="restaurantName" value="The Turmeric Indian Cuisine">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="restaurantPhone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="restaurantPhone" name="restaurantPhone" value="+91 9876543210">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="restaurantAddress" class="form-label">Address</label>
                                        <textarea class="form-control" id="restaurantAddress" name="restaurantAddress" rows="3">123 Main Street, Downtown, City - 400001</textarea>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="restaurantEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="restaurantEmail" name="restaurantEmail" value="info@turmericindian.com">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="restaurantWebsite" class="form-label">Website</label>
                                            <input type="url" class="form-control" id="restaurantWebsite" name="restaurantWebsite" value="https://turmericindian.com">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="restaurantDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="restaurantDescription" name="restaurantDescription" rows="4">We serve the finest Indian cuisine with authentic flavors and fresh ingredients. Our chefs bring traditional recipes with a modern twist.</textarea>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="openingTime" class="form-label">Opening Time</label>
                                            <input type="time" class="form-control" id="openingTime" name="openingTime" value="10:00">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="closingTime" class="form-label">Closing Time</label>
                                            <input type="time" class="form-control" id="closingTime" name="closingTime" value="23:00">
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button type="submit" class="btn-custom">
                                            <i class="fas fa-save"></i> Save Restaurant Info
                                        </button>
                                        <button type="button" class="btn-custom-outline" id="loadRestaurantBtn">
                                            <i class="fas fa-sync"></i> Reload
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- User Management -->
                    <div class="tab-pane fade" id="users" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">User Management</h5>
                                    <button type="button" class="btn-custom" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                        <i class="fas fa-user-plus"></i> Add User
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="usersLoadingIndicator" class="text-center py-4" style="display: none;">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <p class="mt-2">Loading users...</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="usersTable">
                                        <thead>
                                            <tr>
                                                <th>Avatar</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Created</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="usersTableBody">
                                            <!-- Dynamic content will be loaded here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Settings -->
                    <div class="tab-pane fade" id="payment" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Payment Settings</h5>
                            </div>
                            <div class="card-body">
                                <form id="paymentForm">
                                    <h6>Payment Methods</h6>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="cashOnDelivery" checked>
                                                <label class="form-check-label" for="cashOnDelivery">
                                                    Cash on Delivery
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="onlinePayment" checked>
                                                <label class="form-check-label" for="onlinePayment">
                                                    Online Payment
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button type="submit" class="btn-custom">
                                            <i class="fas fa-save"></i> Save Payment Settings
                                        </button>
                                        <button type="button" class="btn-custom-outline" id="loadPaymentBtn">
                                            <i class="fas fa-sync me-1"></i>Reload
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Delivery Settings -->
                    <div class="tab-pane fade" id="delivery" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Delivery Settings</h5>
                            </div>
                            <div class="card-body">
                                <form id="deliveryForm">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="deliveryRadius" class="form-label">Delivery Radius (km)</label>
                                            <input type="number" class="form-control" id="deliveryRadius" name="deliveryRadius" value="10">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="minOrderValue" class="form-label">Minimum Order Value (£)</label>
                                            <input type="number" class="form-control" id="minOrderValue" name="minOrderValue" value="20">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="deliveryCharge" class="form-label">Delivery Charge (£)</label>
                                            <input type="number" class="form-control" id="deliveryCharge" name="deliveryCharge" value="3">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="freeDeliveryAbove" class="form-label">Free Delivery Above (£)</label>
                                            <input type="number" class="form-control" id="freeDeliveryAbove" name="freeDeliveryAbove" value="25">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="avgDeliveryTime" class="form-label">Average Delivery Time (minutes)</label>
                                            <input type="number" class="form-control" id="avgDeliveryTime" name="avgDeliveryTime" value="30">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="maxDeliveryTime" class="form-label">Maximum Delivery Time (minutes)</label>
                                            <input type="number" class="form-control" id="maxDeliveryTime" name="maxDeliveryTime" value="60">
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button type="submit" class="btn-custom">
                                            <i class="fas fa-save"></i> Save Delivery Settings
                                        </button>
                                        <button type="button" class="btn-custom-outline" id="loadDeliveryBtn">
                                            <i class="fas fa-sync me-1"></i>Reload
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add User Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" id="addUserForm" novalidate>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="userName" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="userName" required>
                                    <div class="invalid-feedback">Please provide a valid username.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="userEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="userEmail" required>
                                    <div class="invalid-feedback">Please provide a valid email address.</div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="userPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="userPassword" required minlength="6">
                                    <div class="invalid-feedback">Password must be at least 6 characters long.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="userRole" class="form-label">Role</label>
                                    <select class="form-select" id="userRole" required>
                                        <option value="">Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="cashier">Cashier</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a role.</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="userImageUpload" class="form-label">Profile Picture</label>
                                <div class="upload-area" id="userUploadArea">
                                    <i class="fas fa-user-circle fa-3x text-muted mb-2"></i>
                                    <p class="mb-2">Click to upload profile picture</p>
                                    <input type="file" class="form-control" id="userImageUpload" accept="image/*" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="document.getElementById('userImageUpload').click()">
                                        Choose File
                                    </button>
                                </div>
                                <img id="userImagePreview" class="image-preview" style="display: none;" alt="Preview">
                                <div class="form-text">Upload a profile picture (JPG, PNG, GIF - Max 2MB)</div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn-custom" form="addUserForm" id="addUserBtn">Add User</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit User Modal -->
        <div class="modal fade" id="editUserModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" id="editUserForm" novalidate>
                            <input type="hidden" id="editUserId">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="editUserName" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="editUserName" required>
                                    <div class="invalid-feedback">Please provide a valid username.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="editUserEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="editUserEmail" required>
                                    <div class="invalid-feedback">Please provide a valid email address.</div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="editUserPassword" class="form-label">Password (Leave empty to keep current)</label>
                                    <input type="password" class="form-control" id="editUserPassword" minlength="6">
                                    <div class="invalid-feedback">Password must be at least 6 characters long.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="editUserRole" class="form-label">Role</label>
                                    <select class="form-select" id="editUserRole" required>
                                        <option value="">Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="cashier">Cashier</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a role.</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Current Profile Picture</label>
                                <img id="editCurrentUserImage" class="image-preview mb-2" style="display: block;" alt="Current image">
                            </div>

                            <div class="mb-3">
                                <label for="editUserImageUpload" class="form-label">Update Profile Picture (Optional)</label>
                                <div class="upload-area" id="editUserUploadArea">
                                    <i class="fas fa-user-circle fa-3x text-muted mb-2"></i>
                                    <p class="mb-2">Click to upload new profile picture</p>
                                    <input type="file" class="form-control" id="editUserImageUpload" accept="image/*" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="document.getElementById('editUserImageUpload').click()">
                                        Choose File
                                    </button>
                                </div>
                                <img id="editUserImagePreview" class="image-preview" style="display: none;" alt="Preview">
                                <div class="form-text">Upload a new profile picture to replace the current one (JPG, PNG, GIF - Max 2MB)</div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn-custom" form="editUserForm" id="editUserBtn">Update User</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script type="module">
        // Import Firebase modules
        import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-analytics.js";
        import { 
            getFirestore, 
            collection, 
            addDoc, 
            getDocs, 
            doc, 
            updateDoc, 
            deleteDoc,
            getDoc,
            serverTimestamp,
            setDoc
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
        const analytics = getAnalytics(app);
        const db = getFirestore(app);
        const storage = getStorage(app);

        // Global variables
        let allUsers = [];

        // Utility functions
        function showLoading() {
            document.getElementById('loadingOverlay').style.display = 'flex';
        }

        function hideLoading() {
            document.getElementById('loadingOverlay').style.display = 'none';
        }

        function showNotification(message, type = 'success') {
            const alertClass = type === 'error' ? 'alert-danger' : 'alert-success';
            const notification = document.createElement('div');
            notification.className = `alert ${alertClass} alert-dismissible fade show position-fixed`;
            notification.style.cssText = 'top: 20px; right: 20px; z-index: 10000; min-width: 300px;';
            notification.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 5000);
        }

        // Restaurant Info Functions
        async function saveRestaurantInfo(formData) {
            try {
                showLoading();
                const restaurantData = {
                    name: formData.restaurantName,
                    phone: formData.restaurantPhone,
                    address: formData.restaurantAddress,
                    email: formData.restaurantEmail,
                    website: formData.restaurantWebsite,
                    description: formData.restaurantDescription,
                    openingTime: formData.openingTime,
                    closingTime: formData.closingTime,
                    updatedAt: serverTimestamp()
                };

                await setDoc(doc(db, "settings", "restaurant"), restaurantData);
                showNotification('Restaurant information saved successfully!');
            } catch (error) {
                console.error("Error saving restaurant info:", error);
                showNotification('Error saving restaurant information!', 'error');
            } finally {
                hideLoading();
            }
        }

        async function loadRestaurantInfo() {
            try {
                const docRef = doc(db, "settings", "restaurant");
                const docSnap = await getDoc(docRef);
                
                if (docSnap.exists()) {
                    const data = docSnap.data();
                    document.getElementById('restaurantName').value = data.name || '';
                    document.getElementById('restaurantPhone').value = data.phone || '';
                    document.getElementById('restaurantAddress').value = data.address || '';
                    document.getElementById('restaurantEmail').value = data.email || '';
                    document.getElementById('restaurantWebsite').value = data.website || '';
                    document.getElementById('restaurantDescription').value = data.description || '';
                    document.getElementById('openingTime').value = data.openingTime || '10:00';
                    document.getElementById('closingTime').value = data.closingTime || '23:00';
                }
            } catch (error) {
                console.error("Error loading restaurant info:", error);
                showNotification('Error loading restaurant information!', 'error');
            }
        }

        // Payment Settings Functions
        async function savePaymentSettings(formData) {
            try {
                showLoading();
                const paymentData = {
                    cashOnDelivery: formData.cashOnDelivery,
                    onlinePayment: formData.onlinePayment,
                    updatedAt: serverTimestamp()
                };

                await setDoc(doc(db, "settings", "payment"), paymentData);
                showNotification('Payment settings saved successfully!');
            } catch (error) {
                console.error("Error saving payment settings:", error);
                showNotification('Error saving payment settings!', 'error');
            } finally {
                hideLoading();
            }
        }

        async function loadPaymentSettings() {
            try {
                const docRef = doc(db, "settings", "payment");
                const docSnap = await getDoc(docRef);
                
                if (docSnap.exists()) {
                    const data = docSnap.data();
                    document.getElementById('cashOnDelivery').checked = data.cashOnDelivery !== false;
                    document.getElementById('onlinePayment').checked = data.onlinePayment !== false;
                }
            } catch (error) {
                console.error("Error loading payment settings:", error);
                showNotification('Error loading payment settings!', 'error');
            }
        }

        // Delivery Settings Functions
        async function saveDeliverySettings(formData) {
            try {
                showLoading();
                const deliveryData = {
                    deliveryRadius: parseFloat(formData.deliveryRadius) || 10,
                    minOrderValue: parseFloat(formData.minOrderValue) || 20,
                    deliveryCharge: parseFloat(formData.deliveryCharge) || 3,
                    freeDeliveryAbove: parseFloat(formData.freeDeliveryAbove) || 25,
                    avgDeliveryTime: parseInt(formData.avgDeliveryTime) || 30,
                    maxDeliveryTime: parseInt(formData.maxDeliveryTime) || 60,
                    updatedAt: serverTimestamp()
                };

                await setDoc(doc(db, "settings", "delivery"), deliveryData);
                showNotification('Delivery settings saved successfully!');
            } catch (error) {
                console.error("Error saving delivery settings:", error);
                showNotification('Error saving delivery settings!', 'error');
            } finally {
                hideLoading();
            }
        }

        async function loadDeliverySettings() {
            try {
                const docRef = doc(db, "settings", "delivery");
                const docSnap = await getDoc(docRef);
                
                if (docSnap.exists()) {
                    const data = docSnap.data();
                    document.getElementById('deliveryRadius').value = data.deliveryRadius || 10;
                    document.getElementById('minOrderValue').value = data.minOrderValue || 20;
                    document.getElementById('deliveryCharge').value = data.deliveryCharge || 3;
                    document.getElementById('freeDeliveryAbove').value = data.freeDeliveryAbove || 25;
                    document.getElementById('avgDeliveryTime').value = data.avgDeliveryTime || 30;
                    document.getElementById('maxDeliveryTime').value = data.maxDeliveryTime || 60;
                }
            } catch (error) {
                console.error("Error loading delivery settings:", error);
                showNotification('Error loading delivery settings!', 'error');
            }
        }

        // User Management Functions
        async function loadUsers() {
            const loadingIndicator = document.getElementById('usersLoadingIndicator');
            const tableBody = document.getElementById('usersTableBody');
            
            try {
                loadingIndicator.style.display = 'block';
                tableBody.innerHTML = '';
                
                const querySnapshot = await getDocs(collection(db, "userManage"));
                
                if (querySnapshot.empty) {
                    tableBody.innerHTML = `
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                <i class="fas fa-users fa-2x mb-3 d-block"></i>
                                No users found. Add your first user!
                            </td>
                        </tr>`;
                    allUsers = [];
                    return;
                }
                
                allUsers = [];
                querySnapshot.forEach((doc) => {
                    const user = doc.data();
                    user.id = doc.id;
                    allUsers.push(user);
                    const row = createUserRow(doc.id, user);
                    tableBody.appendChild(row);
                });
                
            } catch (error) {
                console.error("Error loading users: ", error);
                tableBody.innerHTML = `
                    <tr>
                        <td colspan="6" class="text-center py-4 text-danger">
                            <i class="fas fa-exclamation-triangle fa-2x mb-3 d-block"></i>
                            Error loading users. Please try again.
                        </td>
                    </tr>`;
                allUsers = [];
            } finally {
                loadingIndicator.style.display = 'none';
            }
        }

        function createUserRow(id, user) {
            const row = document.createElement('tr');
            const createdDate = user.createdAt ? new Date(user.createdAt.seconds * 1000).toLocaleDateString() : 'N/A';
            
            row.innerHTML = `
                <td>
                    <img src="${user.imageUrl || 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop'}" 
                         alt="${user.username}" class="user-avatar"
                         onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop'">
                </td>
                <td><strong>${user.username}</strong></td>
                <td>${user.email}</td>
                <td><span class="badge bg-${user.role === 'admin' ? 'danger' : 'info'}">${user.role.charAt(0).toUpperCase() + user.role.slice(1)}</span></td>
                <td>${createdDate}</td>
                <td>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-primary" onclick="editUser('${id}')" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-outline-danger" onclick="deleteUser('${id}')" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            `;
            return row;
        }

        async function deleteUser(userId) {
            if (!confirm("Are you sure you want to delete this user? This action cannot be undone.")) {
                return;
            }

            try {
                showLoading();
                await deleteDoc(doc(db, "userManage", userId));
                allUsers = allUsers.filter(user => user.id !== userId);
                loadUsers();
                showNotification("User deleted successfully!");
            } catch (error) {
                console.error("Error removing user: ", error);
                showNotification("Failed to delete user", 'error');
            } finally {
                hideLoading();
            }
        }

        async function editUser(userId) {
            try {
                const userDoc = await getDoc(doc(db, "userManage", userId));
                if (userDoc.exists()) {
                    const user = userDoc.data();
                    
                    document.getElementById('editUserId').value = userId;
                    document.getElementById('editUserName').value = user.username;
                    document.getElementById('editUserEmail').value = user.email;
                    document.getElementById('editUserPassword').value = '';
                    document.getElementById('editUserRole').value = user.role;
                    
                    const currentImage = document.getElementById('editCurrentUserImage');
                    currentImage.src = user.imageUrl || 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=150&fit=crop';
                    currentImage.style.display = 'block';
                    
                    document.getElementById('editUserImagePreview').style.display = 'none';
                    document.getElementById('editUserImageUpload').value = '';
                    
                    const editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
                    editModal.show();
                } else {
                    showNotification("User not found!", 'error');
                }
            } catch (error) {
                console.error("Error loading user for edit: ", error);
                showNotification("Failed to load user details", 'error');
            }
        }

        // Image upload functionality
        function setupUserImageUpload(uploadAreaId, fileInputId, previewId) {
            const uploadArea = document.getElementById(uploadAreaId);
            const fileInput = document.getElementById(fileInputId);
            const preview = document.getElementById(previewId);

            if (!uploadArea || !fileInput || !preview) return;

            uploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadArea.classList.add('dragover');
            });

            uploadArea.addEventListener('dragleave', () => {
                uploadArea.classList.remove('dragover');
            });

            uploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadArea.classList.remove('dragover');
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    handleUserFileSelect(files[0], preview);
                    fileInput.files = files;
                }
            });

            uploadArea.addEventListener('click', (e) => {
                if (e.target.tagName !== 'BUTTON') {
                    fileInput.click();
                }
            });

            fileInput.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    handleUserFileSelect(e.target.files[0], preview);
                }
            });
        }

        function handleUserFileSelect(file, preview) {
            if (file && file.type.startsWith('image/')) {
                if (file.size > 2 * 1024 * 1024) {
                    showNotification('File size must be less than 2MB', 'error');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = (e) => {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }

        // Form Event Listeners
        document.getElementById('restaurantForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const data = Object.fromEntries(formData.entries());
            await saveRestaurantInfo(data);
        });

        document.getElementById('paymentForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = {
                cashOnDelivery: document.getElementById('cashOnDelivery').checked,
                onlinePayment: document.getElementById('onlinePayment').checked
            };
            await savePaymentSettings(formData);
        });

        document.getElementById('deliveryForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const data = Object.fromEntries(formData.entries());
            await saveDeliverySettings(data);
        });

        // Add user form submission
        document.getElementById("addUserForm").addEventListener("submit", async function (e) {
            e.preventDefault();

            if (!this.checkValidity()) {
                e.stopPropagation();
                this.classList.add('was-validated');
                return;
            }

            const addUserBtn = document.getElementById("addUserBtn");
            addUserBtn.disabled = true;
            addUserBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Adding User...';

            const username = document.getElementById("userName").value.trim();
            const email = document.getElementById("userEmail").value.trim();
            const password = document.getElementById("userPassword").value.trim();
            const role = document.getElementById("userRole").value;
            const imageFile = document.getElementById("userImageUpload").files[0];

            try {
                let imageUrl = "https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop";

                if (imageFile) {
                    const imageRef = ref(storage, `user-images/${Date.now()}_${imageFile.name}`);
                    const uploadResult = await uploadBytes(imageRef, imageFile);
                    imageUrl = await getDownloadURL(uploadResult.ref);
                }

                const docRef = await addDoc(collection(db, "userManage"), {
                    username: username,
                    email: email,
                    password: password,
                    role: role,
                    imageUrl: imageUrl,
                    createdAt: serverTimestamp(),
                    isActive: true
                });

                showNotification("User added successfully!");
                
                this.reset();
                this.classList.remove('was-validated');
                document.getElementById('userImagePreview').style.display = 'none';
                bootstrap.Modal.getInstance(document.getElementById("addUserModal")).hide();
                
                loadUsers();

            } catch (error) {
                console.error("Error adding user: ", error);
                showNotification("Failed to add user. Please try again.", 'error');
            } finally {
                addUserBtn.disabled = false;
                addUserBtn.innerHTML = 'Add User';
            }
        });

        // Edit user form submission
        document.getElementById("editUserForm").addEventListener("submit", async function (e) {
            e.preventDefault();

            if (!this.checkValidity()) {
                e.stopPropagation();
                this.classList.add('was-validated');
                return;
            }

            const editUserBtn = document.getElementById("editUserBtn");
            editUserBtn.disabled = true;
            editUserBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Updating...';

            const userId = document.getElementById("editUserId").value;
            const username = document.getElementById("editUserName").value.trim();
            const email = document.getElementById("editUserEmail").value.trim();
            const password = document.getElementById("editUserPassword").value.trim();
            const role = document.getElementById("editUserRole").value;
            const imageFile = document.getElementById("editUserImageUpload").files[0];

            try {
                let updateData = {
                    username: username,
                    email: email,
                    role: role,
                    updatedAt: serverTimestamp()
                };

                if (password) {
                    updateData.password = password;
                }

                if (imageFile) {
                    const imageRef = ref(storage, `user-images/${Date.now()}_${imageFile.name}`);
                    const uploadResult = await uploadBytes(imageRef, imageFile);
                    updateData.imageUrl = await getDownloadURL(uploadResult.ref);
                }

                const userRef = doc(db, "userManage", userId);
                await updateDoc(userRef, updateData);

                showNotification("User updated successfully!");
                
                this.reset();
                this.classList.remove('was-validated');
                document.getElementById('editUserImagePreview').style.display = 'none';
                bootstrap.Modal.getInstance(document.getElementById("editUserModal")).hide();
                
                loadUsers();

            } catch (error) {
                console.error("Error updating user: ", error);
                showNotification("Failed to update user. Please try again.", 'error');
            } finally {
                editUserBtn.disabled = false;
                editUserBtn.innerHTML = 'Update User';
            }
        });

        // Save all settings button
        document.getElementById('saveAllBtn').addEventListener('click', async function() {
            try {
                this.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Saving...';
                this.disabled = true;

                // Get all form data
                const restaurantData = {
                    restaurantName: document.getElementById('restaurantName').value,
                    restaurantPhone: document.getElementById('restaurantPhone').value,
                    restaurantAddress: document.getElementById('restaurantAddress').value,
                    restaurantEmail: document.getElementById('restaurantEmail').value,
                    restaurantWebsite: document.getElementById('restaurantWebsite').value,
                    restaurantDescription: document.getElementById('restaurantDescription').value,
                    openingTime: document.getElementById('openingTime').value,
                    closingTime: document.getElementById('closingTime').value
                };

                const paymentData = {
                    cashOnDelivery: document.getElementById('cashOnDelivery').checked,
                    onlinePayment: document.getElementById('onlinePayment').checked
                };

                const deliveryData = {
                    deliveryRadius: document.getElementById('deliveryRadius').value,
                    minOrderValue: document.getElementById('minOrderValue').value,
                    deliveryCharge: document.getElementById('deliveryCharge').value,
                    freeDeliveryAbove: document.getElementById('freeDeliveryAbove').value,
                    avgDeliveryTime: document.getElementById('avgDeliveryTime').value,
                    maxDeliveryTime: document.getElementById('maxDeliveryTime').value
                };

                // Save all settings
                await Promise.all([
                    saveRestaurantInfo(restaurantData),
                    savePaymentSettings(paymentData),
                    saveDeliverySettings(deliveryData)
                ]);

                this.innerHTML = '<i class="fas fa-check me-1"></i>Saved!';
                
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-save me-1"></i>Save All Changes';
                    this.disabled = false;
                }, 2000);

            } catch (error) {
                console.error('Error saving all settings:', error);
                showNotification('Error saving some settings!', 'error');
                this.innerHTML = '<i class="fas fa-save me-1"></i>Save All Changes';
                this.disabled = false;
            }
        });

        // Load buttons
        document.getElementById('loadRestaurantBtn').addEventListener('click', loadRestaurantInfo);
        document.getElementById('loadPaymentBtn').addEventListener('click', loadPaymentSettings);
        document.getElementById('loadDeliveryBtn').addEventListener('click', loadDeliverySettings);

        // Make functions globally available
        window.loadUsers = loadUsers;
        window.deleteUser = deleteUser;
        window.editUser = editUser;

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            setupUserImageUpload('userUploadArea', 'userImageUpload', 'userImagePreview');
            setupUserImageUpload('editUserUploadArea', 'editUserImageUpload', 'editUserImagePreview');
            
            // Load all settings
            loadRestaurantInfo();
            loadPaymentSettings();
            loadDeliverySettings();
            loadUsers();
        });

        // Load users when users tab is clicked
        document.getElementById('users-tab').addEventListener('click', function() {
            loadUsers();
        });
    </script>
</body>
</html>