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
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-warning">Pending</h5>
                <h2 class="text-warning">23</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-primary">Preparing</h5>
                <h2 class="text-primary">15</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-info">Ready</h5>
                <h2 class="text-info">8</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-success">Delivered</h5>
                <h2 class="text-success">142</h2>
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
                <input type="text" class="form-control" id="orderSearch" placeholder="Search orders...">
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
                <tbody>
                    <tr id="order-1234">
                        <td><strong>#1234</strong></td>
                        <td>
                            <div>
                                <strong>John Doe</strong><br>
                                <small class="text-muted">+91 9876543210</small>
                            </div>
                        </td>
                        <td>
                            <div>
                                Chicken Biryani x2<br>
                                <small class="text-muted">Raita, Pickle</small>
                            </div>
                        </td>
                        <td><strong>₹450</strong></td>
                        <td><span class="badge bg-warning status-badge">Pending</span></td>
                        <td>
                            <div>
                                <strong>2:30 PM</strong><br>
                                <small class="text-muted">Today</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" onclick="updateOrderStatus(1234, 'confirmed')">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#orderDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr id="order-1235">
                        <td><strong>#1235</strong></td>
                        <td>
                            <div>
                                <strong>Jane Smith</strong><br>
                                <small class="text-muted">+91 9876543211</small>
                            </div>
                        </td>
                        <td>
                            <div>
                                Pizza Margherita<br>
                                <small class="text-muted">Large, Extra Cheese</small>
                            </div>
                        </td>
                        <td><strong>₹320</strong></td>
                        <td><span class="badge bg-primary status-badge">Preparing</span></td>
                        <td>
                            <div>
                                <strong>2:25 PM</strong><br>
                                <small class="text-muted">Today</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-success" onclick="updateOrderStatus(1235, 'ready')">
                                    <i class="fas fa-check-double"></i>
                                </button>
                                <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#orderDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr id="order-1236">
                        <td><strong>#1236</strong></td>
                        <td>
                            <div>
                                <strong>Mike Johnson</strong><br>
                                <small class="text-muted">+91 9876543212</small>
                            </div>
                        </td>
                        <td>
                            <div>
                                Burger Combo<br>
                                <small class="text-muted">Fries, Coke</small>
                            </div>
                        </td>
                        <td><strong>₹280</strong></td>
                        <td><span class="badge bg-success status-badge">Ready</span></td>
                        <td>
                            <div>
                                <strong>2:20 PM</strong><br>
                                <small class="text-muted">Today</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-success" onclick="updateOrderStatus(1236, 'delivered')">
                                    <i class="fas fa-truck"></i>
                                </button>
                                <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#orderDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="customerName" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="customerName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="customerPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="customerPhone" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="customerAddress" class="form-label">Delivery Address</label>
                        <textarea class="form-control" id="customerAddress" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="orderItems" class="form-label">Order Items</label>
                        <div id="orderItems">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <select class="form-select" required>
                                        <option value="">Select Item</option>
                                        <option value="biryani">Chicken Biryani</option>
                                        <option value="pizza">Pizza Margherita</option>
                                        <option value="burger">Burger Combo</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" placeholder="Quantity" min="1" value="1">
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-plus me-1"></i>Add Item
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Create Order</button>
            </div>
        </div>
    </div>
</div>

<!-- Order Details Modal -->
<div class="modal fade" id="orderDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Order Details - #1234</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Customer Information</h6>
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Phone:</strong> +91 9876543210</p>
                        <p><strong>Address:</strong> 123 Main Street, City</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Order Information</h6>
                        <p><strong>Order ID:</strong> #1234</p>
                        <p><strong>Status:</strong> <span class="badge bg-warning">Pending</span></p>
                        <p><strong>Order Time:</strong> 2:30 PM, Today</p>
                        <p><strong>Total:</strong> ₹450</p>
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
                            <tr>
                                <td>Chicken Biryani</td>
                                <td>2</td>
                                <td>₹200</td>
                                <td>₹400</td>
                            </tr>
                            <tr>
                                <td>Raita</td>
                                <td>2</td>
                                <td>₹25</td>
                                <td>₹50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Print Receipt</button>
            </div>
        </div>
    </div>
</div>