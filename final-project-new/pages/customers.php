<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Customer Management</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-envelope me-1"></i>Send Newsletter
            </button>
        </div>
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
            <i class="fas fa-plus me-1"></i>Add Customer
        </button>
    </div>
</div>

<!-- Customer Stats -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-primary">Total Customers</h5>
                <h2 class="text-primary">1,247</h2>
                <small class="text-muted">+12% this month</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-success">Active Customers</h5>
                <h2 class="text-success">892</h2>
                <small class="text-muted">Ordered this month</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-warning">New Customers</h5>
                <h2 class="text-warning">156</h2>
                <small class="text-muted">This month</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-info">Avg Order Value</h5>
                <h2 class="text-info">$385</h2>
                <small class="text-muted">Per customer</small>
            </div>
        </div>
    </div>
</div>

<!-- Customer Filters -->
<div class="card mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <label for="customerTypeFilter" class="form-label">Customer Type</label>
                <select class="form-select" id="customerTypeFilter">
                    <option value="">All Customers</option>
                    <option value="new">New Customers</option>
                    <option value="regular">Regular Customers</option>
                    <option value="vip">VIP Customers</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="locationFilter" class="form-label">Location</label>
                <select class="form-select" id="locationFilter">
                    <option value="">All Locations</option>
                    <option value="downtown">Downtown</option>
                    <option value="suburbs">Suburbs</option>
                    <option value="uptown">Uptown</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="dateFilter" class="form-label">Registration Date</label>
                <input type="date" class="form-control" id="dateFilter">
            </div>
            <div class="col-md-3">
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
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">JD</div>
                                <div>
                                    <strong>John Doe</strong><br>
                                    <small class="text-muted">Customer since Jan 2024</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <i class="fas fa-phone me-1"></i>+91 9876543210<br>
                                <i class="fas fa-envelope me-1"></i>john@email.com
                            </div>
                        </td>
                        <td>
                            <div>
                                Downtown<br>
                                <small class="text-muted">123 Main Street</small>
                            </div>
                        </td>
                        <td>
                            <div>
                                <strong>24</strong><br>
                                <small class="text-muted">orders</small>
                            </div>
                        </td>
                        <td><strong>₹9,240</strong></td>
                        <td>
                            <div>
                                <strong>Today</strong><br>
                                <small class="text-muted">2:30 PM</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">VIP</span></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#customerDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-info">
                                    <i class="fas fa-envelope"></i>
                                </button>
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">JS</div>
                                <div>
                                    <strong>Jane Smith</strong><br>
                                    <small class="text-muted">Customer since Mar 2024</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <i class="fas fa-phone me-1"></i>+91 9876543211<br>
                                <i class="fas fa-envelope me-1"></i>jane@email.com
                            </div>
                        </td>
                        <td>
                            <div>
                                Suburbs<br>
                                <small class="text-muted">456 Oak Avenue</small>
                            </div>
                        </td>
                        <td>
                            <div>
                                <strong>12</strong><br>
                                <small class="text-muted">orders</small>
                            </div>
                        </td>
                        <td><strong>₹4,680</strong></td>
                        <td>
                            <div>
                                <strong>Yesterday</strong><br>
                                <small class="text-muted">7:45 PM</small>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">Regular</span></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#customerDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-info">
                                    <i class="fas fa-envelope"></i>
                                </button>
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">MJ</div>
                                <div>
                                    <strong>Mike Johnson</strong><br>
                                    <small class="text-muted">Customer since Dec 2024</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <i class="fas fa-phone me-1"></i>+91 9876543212<br>
                                <i class="fas fa-envelope me-1"></i>mike@email.com
                            </div>
                        </td>
                        <td>
                            <div>
                                Uptown<br>
                                <small class="text-muted">789 Pine Road</small>
                            </div>
                        </td>
                        <td>
                            <div>
                                <strong>3</strong><br>
                                <small class="text-muted">orders</small>
                            </div>
                        </td>
                        <td><strong>₹840</strong></td>
                        <td>
                            <div>
                                <strong>3 days ago</strong><br>
                                <small class="text-muted">6:15 PM</small>
                            </div>
                        </td>
                        <td><span class="badge bg-warning">New</span></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#customerDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-info">
                                    <i class="fas fa-envelope"></i>
                                </button>
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Customer Modal -->
<div class="modal fade" id="addCustomerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="customerName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="customerName" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="customerEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerPhone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="customerPhone" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerAddress" class="form-label">Address</label>
                        <textarea class="form-control" id="customerAddress" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="customerLocation" class="form-label">Location</label>
                        <select class="form-select" id="customerLocation" required>
                            <option value="">Select Location</option>
                            <option value="downtown">Downtown</option>
                            <option value="suburbs">Suburbs</option>
                            <option value="uptown">Uptown</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Customer</button>
            </div>
        </div>
    </div>
</div>

<!-- Customer Details Modal -->
<div class="modal fade" id="customerDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Customer Details - John Doe</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center mb-3">
                            <div class="avatar-circle-large mx-auto mb-3">JD</div>
                            <h5>John Doe</h5>
                            <span class="badge bg-success">VIP Customer</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6>Contact Information</h6>
                        <p><i class="fas fa-envelope me-2"></i>john@email.com</p>
                        <p><i class="fas fa-phone me-2"></i>+91 9876543210</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i>123 Main Street, Downtown</p>
                        
                        <h6 class="mt-4">Order Statistics</h6>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Total Orders:</strong> 24</p>
                                <p><strong>Total Spent:</strong> ₹9,240</p>
                            </div>
                            <div class="col-6">
                                <p><strong>Average Order:</strong> ₹385</p>
                                <p><strong>Last Order:</strong> Today, 2:30 PM</p>
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
                            <tr>
                                <td>#1234</td>
                                <td>Today, 2:30 PM</td>
                                <td>Chicken Biryani x2</td>
                                <td>₹450</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>#1220</td>
                                <td>Dec 20, 7:15 PM</td>
                                <td>Pizza Margherita</td>
                                <td>₹320</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Send Message</button>
                <button type="button" class="btn btn-primary">Edit Customer</button>
            </div>
        </div>
    </div>
</div>

<style>
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
}
</style>