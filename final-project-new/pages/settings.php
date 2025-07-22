<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .header-section {
            padding: 1rem 0;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #dee2e6;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .header-title {
            margin: 0;
            flex-shrink: 0;
        }

        .header-actions {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Settings</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn btn-sm btn-success" id="saveAllBtn">
                    <i class="fas fa-save me-1"></i>Save All Changes
                </button>
            </div>
        </div>

        <!-- Settings Navigation -->
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="settings-tab" role="tablist">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="pill" data-bs-target="#general" type="button" role="tab">
                                <i class="fas fa-cog me-2"></i>General Settings
                            </button>
                            <button class="nav-link" id="restaurant-tab" data-bs-toggle="pill" data-bs-target="#restaurant" type="button" role="tab">
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
                            <button class="nav-link" id="notifications-tab" data-bs-toggle="pill" data-bs-target="#notifications" type="button" role="tab">
                                <i class="fas fa-bell me-2"></i>Notifications
                            </button>
                            <button class="nav-link" id="security-tab" data-bs-toggle="pill" data-bs-target="#security" type="button" role="tab">
                                <i class="fas fa-shield-alt me-2"></i>Security
                            </button>
                            <button class="nav-link" id="backup-tab" data-bs-toggle="pill" data-bs-target="#backup" type="button" role="tab">
                                <i class="fas fa-database me-2"></i>Backup & Restore
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-9">
                <div class="tab-content" id="settings-tabContent">
                    <!-- General Settings -->
                    <div class="tab-pane fade show active" id="general" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">General Settings</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="timezone" class="form-label">Timezone</label>
                                            <select class="form-select" id="timezone">
                                                <option value="Asia/Kolkata" selected>Asia/Kolkata (IST)</option>
                                                <option value="UTC">UTC</option>
                                                <option value="America/New_York">America/New_York (EST)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="currency" class="form-label">Currency</label>
                                            <select class="form-select" id="currency">
                                                <option value="INR" selected>Indian Rupee (₹)</option>
                                                <option value="USD">US Dollar ($)</option>
                                                <option value="LKR">Sri Lankan Rupees (Rs)</option>
                                                <option value="EUR">Euro (€)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="dateFormat" class="form-label">Date Format</label>
                                            <select class="form-select" id="dateFormat">
                                                <option value="DD/MM/YYYY" selected>DD/MM/YYYY</option>
                                                <option value="MM/DD/YYYY">MM/DD/YYYY</option>
                                                <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="language" class="form-label">Language</label>
                                            <select class="form-select" id="language">
                                                <option value="en" selected>English</option>
                                                <option value="si">Sinhala</option>
                                                <option value="hi">Hindi</option>
                                                <option value="es">Spanish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="maintenanceMode">
                                            <label class="form-check-label" for="maintenanceMode">
                                                Maintenance Mode
                                            </label>
                                            <div class="form-text">Enable this to temporarily disable online ordering</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Restaurant Info -->
                    <div class="tab-pane fade" id="restaurant" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Restaurant Information</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="restaurantName" class="form-label">Restaurant Name</label>
                                            <input type="text" class="form-control" id="restaurantName" value="The Turmeric Indian Cuisine">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="restaurantPhone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="restaurantPhone" value="+91 9876543210">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="restaurantAddress" class="form-label">Address</label>
                                        <textarea class="form-control" id="restaurantAddress" rows="3">123 Main Street, Downtown, City - 400001</textarea>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="restaurantEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="restaurantEmail" value="info@turmericindian.com">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="restaurantWebsite" class="form-label">Website</label>
                                            <input type="url" class="form-control" id="restaurantWebsite" value="https://turmericindian.com">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="restaurantDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="restaurantDescription" rows="4">We serve the finest Indian cuisine with authentic flavors and fresh ingredients. Our chefs bring traditional recipes with a modern twist.</textarea>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="openingTime" class="form-label">Opening Time</label>
                                            <input type="time" class="form-control" id="openingTime" value="10:00">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="closingTime" class="form-label">Closing Time</label>
                                            <input type="time" class="form-control" id="closingTime" value="23:00">
                                        </div>
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
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                        <i class="fas fa-plus me-1"></i>Add User
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
                                <form>
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
                                    
                                    <h6>Payment Gateway Configuration</h6>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="razorpayKey" class="form-label">Razorpay Key ID</label>
                                            <input type="text" class="form-control" id="razorpayKey" placeholder="rzp_test_xxxxxxxxxx">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="razorpaySecret" class="form-label">Razorpay Secret</label>
                                            <input type="password" class="form-control" id="razorpaySecret" placeholder="Enter secret key">
                                        </div>
                                    </div>
                                    
                                    <h6 class="mt-4">Tax Settings</h6>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="gstRate" class="form-label">GST Rate (%)</label>
                                            <input type="number" class="form-control" id="gstRate" value="18" step="0.01">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="serviceCharge" class="form-label">Service Charge (%)</label>
                                            <input type="number" class="form-control" id="serviceCharge" value="5" step="0.01">
                                        </div>
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
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="deliveryRadius" class="form-label">Delivery Radius (km)</label>
                                            <input type="number" class="form-control" id="deliveryRadius" value="10">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="minOrderValue" class="form-label">Minimum Order Value (₹)</label>
                                            <input type="number" class="form-control" id="minOrderValue" value="200">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="deliveryCharge" class="form-label">Delivery Charge (₹)</label>
                                            <input type="number" class="form-control" id="deliveryCharge" value="30">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="freeDeliveryAbove" class="form-label">Free Delivery Above (₹)</label>
                                            <input type="number" class="form-control" id="freeDeliveryAbove" value="500">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="avgDeliveryTime" class="form-label">Average Delivery Time (minutes)</label>
                                            <input type="number" class="form-control" id="avgDeliveryTime" value="30">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="maxDeliveryTime" class="form-label">Maximum Delivery Time (minutes)</label>
                                            <input type="number" class="form-control" id="maxDeliveryTime" value="60">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Notifications -->
                    <div class="tab-pane fade" id="notifications" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Notification Settings</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <h6>Email Notifications</h6>
                                    <div class="mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="emailNewOrder" checked>
                                            <label class="form-check-label" for="emailNewOrder">
                                                New Order Notifications
                                            </label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="emailLowStock" checked>
                                            <label class="form-check-label" for="emailLowStock">
                                                Low Stock Alerts
                                            </label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="emailDailyReport">
                                            <label class="form-check-label" for="emailDailyReport">
                                                Daily Sales Report
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Security -->
                    <div class="tab-pane fade" id="security" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Security Settings</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <h6>Password Policy</h6>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="minPasswordLength" class="form-label">Minimum Password Length</label>
                                            <input type="number" class="form-control" id="minPasswordLength" value="8">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="passwordExpiry" class="form-label">Password Expiry (days)</label>
                                            <input type="number" class="form-control" id="passwordExpiry" value="90">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Backup & Restore -->
                    <div class="tab-pane fade" id="backup" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Backup & Restore</h5>
                            </div>
                            <div class="card-body">
                                <h6>Automatic Backup</h6>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="autoBackup" checked>
                                            <label class="form-check-label" for="autoBackup">
                                                Enable Automatic Backup
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="backupFrequency" class="form-label">Backup Frequency</label>
                                        <select class="form-select" id="backupFrequency">
                                            <option value="daily" selected>Daily</option>
                                            <option value="weekly">Weekly</option>
                                            <option value="monthly">Monthly</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <h6>Manual Backup</h6>
                                <div class="d-flex gap-2 mb-4">
                                    <button type="button" class="btn btn-primary" id="createBackupBtn">
                                        <i class="fas fa-download me-1"></i>Create Backup
                                    </button>
                                    <button type="button" class="btn btn-outline-primary">
                                        <i class="fas fa-database me-1"></i>Database Only
                                    </button>
                                    <button type="button" class="btn btn-outline-primary">
                                        <i class="fas fa-images me-1"></i>Files Only
                                    </button>
                                </div>
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
                        <button type="submit" class="btn btn-primary" form="addUserForm" id="addUserBtn">Add User</button>
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
                        <button type="submit" class="btn btn-primary" form="editUserForm" id="editUserBtn">Update User</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        let allUsers = [];

        // Image upload functionality for users
        function setupUserImageUpload(uploadAreaId, fileInputId, previewId) {
            const uploadArea = document.getElementById(uploadAreaId);
            const fileInput = document.getElementById(fileInputId);
            const preview = document.getElementById(previewId);

            if (!uploadArea || !fileInput || !preview) return;

            // Drag and drop functionality
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

            // Click to upload
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
                if (file.size > 2 * 1024 * 1024) { // 2MB limit
                    alert('File size must be less than 2MB');
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

        // Initialize image upload for both user modals
        document.addEventListener('DOMContentLoaded', function() {
            setupUserImageUpload('userUploadArea', 'userImageUpload', 'userImagePreview');
            setupUserImageUpload('editUserUploadArea', 'editUserImageUpload', 'editUserImagePreview');
        });

        // Save all settings functionality
        document.getElementById('saveAllBtn').addEventListener('click', function() {
            const settings = {};
            
            // Get all form inputs
            document.querySelectorAll('input, select, textarea').forEach(input => {
                if (input.type === 'checkbox') {
                    settings[input.id] = input.checked;
                } else {
                    settings[input.id] = input.value;
                }
            });
            
            // Simulate saving
            this.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Saving...';
            this.disabled = true;
            
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-check me-1"></i>Saved!';
                
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-save me-1"></i>Save All Changes';
                    this.disabled = false;
                    showNotification('Settings saved successfully!', 'success');
                }, 1000);
            }, 2000);
        });

        // Backup functionality
        document.getElementById('createBackupBtn')?.addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Creating Backup...';
            this.disabled = true;
            
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-download me-1"></i>Create Backup';
                this.disabled = false;
                showNotification('Backup created successfully!', 'success');
            }, 3000);
        });

        // Show notification function
        function showNotification(message, type = 'info') {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `alert alert-${type === 'success' ? 'success' : 'info'} alert-dismissible fade show position-fixed`;
            notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
            notification.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            document.body.appendChild(notification);
            
            // Auto remove after 3 seconds
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 3000);
        }
    </script>

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
            serverTimestamp 
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

        // Make functions globally available
        window.loadUsers = loadUsers;
        window.deleteUser = deleteUser;
        window.editUser = editUser;

        // Add user form submission handler
        const addUserForm = document.getElementById("addUserForm");
        const addUserBtn = document.getElementById("addUserBtn");

        addUserForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            // Validate form
            if (!addUserForm.checkValidity()) {
                e.stopPropagation();
                addUserForm.classList.add('was-validated');
                return;
            }

            // Show loading state
            addUserBtn.disabled = true;
            addUserBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Adding User...';

            const username = document.getElementById("userName").value.trim();
            const email = document.getElementById("userEmail").value.trim();
            const password = document.getElementById("userPassword").value.trim();
            const role = document.getElementById("userRole").value;
            const imageFile = document.getElementById("userImageUpload").files[0];

            try {
                let imageUrl = "https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop";

                // Upload image if provided
                if (imageFile) {
                    const imageRef = ref(storage, `user-images/${Date.now()}_${imageFile.name}`);
                    const uploadResult = await uploadBytes(imageRef, imageFile);
                    imageUrl = await getDownloadURL(uploadResult.ref);
                }

                // Add user document to Firestore
                const docRef = await addDoc(collection(db, "userManage"), {
                    username: username,
                    email: email,
                    password: password, // Note: In production, passwords should be hashed
                    role: role,
                    imageUrl: imageUrl,
                    createdAt: serverTimestamp(),
                    isActive: true
                });

                console.log("User added with ID: ", docRef.id);
                
                // Show success message
                alert("User added successfully!");
                
                // Reset form and hide modal
                addUserForm.reset();
                addUserForm.classList.remove('was-validated');
                document.getElementById('userImagePreview').style.display = 'none';
                bootstrap.Modal.getInstance(document.getElementById("addUserModal")).hide();
                
                // Reload users
                loadUsers();

            } catch (error) {
                console.error("Error adding user: ", error);
                alert("Failed to add user. Please try again.");
            } finally {
                // Reset button state
                addUserBtn.disabled = false;
                addUserBtn.innerHTML = 'Add User';
            }
        });

        // Edit user form submission handler
        const editUserForm = document.getElementById("editUserForm");
        const editUserBtn = document.getElementById("editUserBtn");

        editUserForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            // Validate form
            if (!editUserForm.checkValidity()) {
                e.stopPropagation();
                editUserForm.classList.add('was-validated');
                return;
            }

            // Show loading state
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

                // Add password to update data only if provided
                if (password) {
                    updateData.password = password;
                }

                // Upload new image if provided
                if (imageFile) {
                    const imageRef = ref(storage, `user-images/${Date.now()}_${imageFile.name}`);
                    const uploadResult = await uploadBytes(imageRef, imageFile);
                    updateData.imageUrl = await getDownloadURL(uploadResult.ref);
                }

                // Update user document in Firestore
                const userRef = doc(db, "userManage", userId);
                await updateDoc(userRef, updateData);

                console.log("User updated successfully");
                
                // Show success message
                alert("User updated successfully!");
                
                // Reset form and hide modal
                editUserForm.reset();
                editUserForm.classList.remove('was-validated');
                document.getElementById('editUserImagePreview').style.display = 'none';
                bootstrap.Modal.getInstance(document.getElementById("editUserModal")).hide();
                
                // Reload users
                loadUsers();

            } catch (error) {
                console.error("Error updating user: ", error);
                alert("Failed to update user. Please try again.");
            } finally {
                // Reset button state
                editUserBtn.disabled = false;
                editUserBtn.innerHTML = 'Update User';
            }
        });

        // Function to load users from Firestore
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

        // Function to create user table row
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

        // Function to delete user
        async function deleteUser(userId) {
            if (!confirm("Are you sure you want to delete this user? This action cannot be undone.")) {
                return;
            }

            try {
                await deleteDoc(doc(db, "userManage", userId));
                console.log("User successfully deleted!");
                
                // Remove from allUsers array
                allUsers = allUsers.filter(user => user.id !== userId);
                
                loadUsers(); // Reload the list
                alert("User deleted successfully!");
            } catch (error) {
                console.error("Error removing user: ", error);
                alert("Failed to delete user");
            }
        }

        // Function to edit user
        async function editUser(userId) {
            try {
                const userDoc = await getDoc(doc(db, "userManage", userId));
                if (userDoc.exists()) {
                    const user = userDoc.data();
                    
                    // Populate edit form
                    document.getElementById('editUserId').value = userId;
                    document.getElementById('editUserName').value = user.username;
                    document.getElementById('editUserEmail').value = user.email;
                    document.getElementById('editUserPassword').value = ''; // Don't pre-fill password
                    document.getElementById('editUserRole').value = user.role;
                    
                    // Show current image
                    const currentImage = document.getElementById('editCurrentUserImage');
                    currentImage.src = user.imageUrl || 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=150&fit=crop';
                    currentImage.style.display = 'block';
                    
                    // Hide preview and reset file input
                    document.getElementById('editUserImagePreview').style.display = 'none';
                    document.getElementById('editUserImageUpload').value = '';
                    
                    // Show modal
                    const editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
                    editModal.show();
                } else {
                    alert("User not found!");
                }
            } catch (error) {
                console.error("Error loading user for edit: ", error);
                alert("Failed to load user details");
            }
        }

        // Load users when page loads and when users tab is clicked
        document.addEventListener('DOMContentLoaded', function() {
            loadUsers();
        });

        // Reload users when users tab is clicked
        document.getElementById('users-tab').addEventListener('click', function() {
            loadUsers();
        });
    </script>
</body>
</html>