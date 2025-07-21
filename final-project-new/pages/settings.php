<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Settings</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-success">
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
                            <div class="row">
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
                                        <option value="INR" selected>US Dollar ($)</option>
                                        <option value="USD">Sri Lankan Rupees (Rs)</option>
                                        <option value="USD">Indian Rupee (₹)</option>
                                        <option value="EUR">Euro (€)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="restaurantName" class="form-label">Restaurant Name</label>
                                    <input type="text" class="form-control" id="restaurantName" value="Delicious Bites">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="restaurantEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="restaurantEmail" value="info@deliciousbites.com">
                                </div>
                                <div class="col-md-6">
                                    <label for="restaurantWebsite" class="form-label">Website</label>
                                    <input type="url" class="form-control" id="restaurantWebsite" value="https://deliciousbites.com">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="restaurantDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="restaurantDescription" rows="4">We serve the finest Indian cuisine with authentic flavors and fresh ingredients. Our chefs bring traditional recipes with a modern twist.</textarea>
                            </div>
                            <div class="row">
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
                            <div class="row">
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
                            <div class="row">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="deliveryRadius" class="form-label">Delivery Radius (km)</label>
                                    <input type="number" class="form-control" id="deliveryRadius" value="10">
                                </div>
                                <div class="col-md-6">
                                    <label for="minOrderValue" class="form-label">Minimum Order Value ($)</label>
                                    <input type="number" class="form-control" id="minOrderValue" value="200">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="deliveryCharge" class="form-label">Delivery Charge ($)</label>
                                    <input type="number" class="form-control" id="deliveryCharge" value="30">
                                </div>
                                <div class="col-md-6">
                                    <label for="freeDeliveryAbove" class="form-label">Free Delivery Above ($)</label>
                                    <input type="number" class="form-control" id="freeDeliveryAbove" value="500">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="avgDeliveryTime" class="form-label">Average Delivery Time (minutes)</label>
                                    <input type="number" class="form-control" id="avgDeliveryTime" value="30">
                                </div>
                                <div class="col-md-6">
                                    <label for="maxDeliveryTime" class="form-label">Maximum Delivery Time (minutes)</label>
                                    <input type="number" class="form-control" id="maxDeliveryTime" value="60">
                                </div>
                            </div>
                            
                            <h6 class="mt-4">Delivery Zones</h6>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Zone</th>
                                            <th>Distance (km)</th>
                                            <th>Charge (₹)</th>
                                            <th>Time (min)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Zone 1</td>
                                            <td>0-3</td>
                                            <td>20</td>
                                            <td>20-30</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zone 2</td>
                                            <td>3-7</td>
                                            <td>30</td>
                                            <td>30-45</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zone 3</td>
                                            <td>7-10</td>
                                            <td>50</td>
                                            <td>45-60</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">Edit</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                            
                            <h6>SMS Notifications</h6>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="smsNewOrder" checked>
                                    <label class="form-check-label" for="smsNewOrder">
                                        New Order SMS
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="smsOrderReady">
                                    <label class="form-check-label" for="smsOrderReady">
                                        Order Ready SMS
                                    </label>
                                </div>
                            </div>
                            
                            <h6>Push Notifications</h6>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="pushNewOrder" checked>
                                    <label class="form-check-label" for="pushNewOrder">
                                        New Order Push Notifications
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="pushPromotion">
                                    <label class="form-check-label" for="pushPromotion">
                                        Promotion Notifications
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
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="minPasswordLength" class="form-label">Minimum Password Length</label>
                                    <input type="number" class="form-control" id="minPasswordLength" value="8">
                                </div>
                                <div class="col-md-6">
                                    <label for="passwordExpiry" class="form-label">Password Expiry (days)</label>
                                    <input type="number" class="form-control" id="passwordExpiry" value="90">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="requireSpecialChar" checked>
                                    <label class="form-check-label" for="requireSpecialChar">
                                        Require special characters
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="requireNumbers" checked>
                                    <label class="form-check-label" for="requireNumbers">
                                        Require numbers
                                    </label>
                                </div>
                            </div>
                            
                            <h6>Session Settings</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="sessionTimeout" class="form-label">Session Timeout (minutes)</label>
                                    <input type="number" class="form-control" id="sessionTimeout" value="30">
                                </div>
                                <div class="col-md-6">
                                    <label for="maxLoginAttempts" class="form-label">Max Login Attempts</label>
                                    <input type="number" class="form-control" id="maxLoginAttempts" value="5">
                                </div>
                            </div>
                            
                            <h6 class="mt-4">Two-Factor Authentication</h6>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="enable2FA">
                                    <label class="form-check-label" for="enable2FA">
                                        Enable Two-Factor Authentication
                                    </label>
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
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-download me-1"></i>Create Backup
                            </button>
                            <button type="button" class="btn btn-outline-primary">
                                <i class="fas fa-database me-1"></i>Database Only
                            </button>
                            <button type="button" class="btn btn-outline-primary">
                                <i class="fas fa-images me-1"></i>Files Only
                            </button>
                        </div>
                        
                        <h6>Recent Backups</h6>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Size</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dec 21, 2024 02:00 AM</td>
                                        <td>Full Backup</td>
                                        <td>245 MB</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Download</button>
                                            <button class="btn btn-sm btn-outline-success">Restore</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dec 20, 2024 02:00 AM</td>
                                        <td>Full Backup</td>
                                        <td>238 MB</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Download</button>
                                            <button class="btn btn-sm btn-outline-success">Restore</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <h6 class="mt-4">Restore from Backup</h6>
                        <div class="mb-3">
                            <label for="backupFile" class="form-label">Select Backup File</label>
                            <input type="file" class="form-control" id="backupFile" accept=".zip,.sql">
                        </div>
                        <button type="button" class="btn btn-warning">
                            <i class="fas fa-upload me-1"></i>Restore from File
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Save settings functionality
    document.querySelector('.btn-success').addEventListener('click', function() {
        // Collect all form data
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
    document.querySelector('button[onclick*="Create Backup"]')?.addEventListener('click', function() {
        this.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Creating Backup...';
        this.disabled = true;
        
        setTimeout(() => {
            this.innerHTML = '<i class="fas fa-download me-1"></i>Create Backup';
            this.disabled = false;
            showNotification('Backup created successfully!', 'success');
        }, 3000);
    });
});
</script>