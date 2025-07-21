<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Staff Management</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addStaffModal">
            <i class="fas fa-plus me-1"></i>Add Staff Member
        </button>
    </div>
</div>

<!-- Staff Stats -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-primary">Total Staff</h5>
                <h2 class="text-primary">24</h2>
                <small class="text-muted">Active employees</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-success">On Duty</h5>
                <h2 class="text-success">18</h2>
                <small class="text-muted">Currently working</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-warning">On Break</h5>
                <h2 class="text-warning">4</h2>
                <small class="text-muted">Break time</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-danger">Off Duty</h5>
                <h2 class="text-danger">2</h2>
                <small class="text-muted">Not scheduled</small>
            </div>
        </div>
    </div>
</div>

<!-- Department Overview -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-building me-2"></i>Department Overview
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="department-card">
                            <div class="card border-primary">
                                <div class="card-body text-center">
                                    <i class="fas fa-fire fa-2x text-primary mb-2"></i>
                                    <h6>Kitchen</h6>
                                    <div class="d-flex justify-content-between">
                                        <small>Total: 8</small>
                                        <small class="text-success">Active: 6</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="department-card">
                            <div class="card border-success">
                                <div class="card-body text-center">
                                    <i class="fas fa-motorcycle fa-2x text-success mb-2"></i>
                                    <h6>Delivery</h6>
                                    <div class="d-flex justify-content-between">
                                        <small>Total: 6</small>
                                        <small class="text-success">Active: 5</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="department-card">
                            <div class="card border-info">
                                <div class="card-body text-center">
                                    <i class="fas fa-headset fa-2x text-info mb-2"></i>
                                    <h6>Customer Service</h6>
                                    <div class="d-flex justify-content-between">
                                        <small>Total: 4</small>
                                        <small class="text-success">Active: 3</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="department-card">
                            <div class="card border-warning">
                                <div class="card-body text-center">
                                    <i class="fas fa-users-cog fa-2x text-warning mb-2"></i>
                                    <h6>Management</h6>
                                    <div class="d-flex justify-content-between">
                                        <small>Total: 6</small>
                                        <small class="text-success">Active: 4</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Staff List -->
<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="card-title mb-0">
                    <i class="fas fa-users me-2"></i>Staff Members
                </h5>
            </div>
            <div class="col-auto">
                <div class="btn-group btn-group-sm me-2">
                    <button class="btn btn-outline-secondary active" data-filter="all">All</button>
                    <button class="btn btn-outline-secondary" data-filter="kitchen">Kitchen</button>
                    <button class="btn btn-outline-secondary" data-filter="delivery">Delivery</button>
                    <button class="btn btn-outline-secondary" data-filter="service">Service</button>
                    <button class="btn btn-outline-secondary" data-filter="management">Management</button>
                </div>
                <input type="text" class="form-control form-control-sm d-inline-block" id="staffSearch" placeholder="Search staff..." style="width: 200px;">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="staffTable">
                <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Department</th>
                        <th>Role</th>
                        <th>Contact</th>
                        <th>Shift</th>
                        <th>Status</th>
                        <th>Performance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-department="kitchen">
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">RC</div>
                                <div>
                                    <strong>Raj Chandra</strong><br>
                                    <small class="text-muted">ID: EMP001</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">Kitchen</span></td>
                        <td>Head Chef</td>
                        <td>
                            <div>
                                <i class="fas fa-phone me-1"></i>+91 9876543210<br>
                                <i class="fas fa-envelope me-1"></i>raj@restaurant.com
                            </div>
                        </td>
                        <td>
                            <div>
                                <strong>Morning</strong><br>
                                <small class="text-muted">6:00 AM - 2:00 PM</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">On Duty</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress me-2" style="width: 60px; height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 92%"></div>
                                </div>
                                <small>92%</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staffDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-info">
                                    <i class="fas fa-clock"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-department="delivery">
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">AS</div>
                                <div>
                                    <strong>Amit Singh</strong><br>
                                    <small class="text-muted">ID: EMP002</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Delivery</span></td>
                        <td>Delivery Executive</td>
                        <td>
                            <div>
                                <i class="fas fa-phone me-1"></i>+91 9876543211<br>
                                <i class="fas fa-envelope me-1"></i>amit@restaurant.com
                            </div>
                        </td>
                        <td>
                            <div>
                                <strong>Full Day</strong><br>
                                <small class="text-muted">10:00 AM - 10:00 PM</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">On Duty</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress me-2" style="width: 60px; height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 88%"></div>
                                </div>
                                <small>88%</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staffDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-info">
                                    <i class="fas fa-clock"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-department="service">
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">PK</div>
                                <div>
                                    <strong>Priya Kumari</strong><br>
                                    <small class="text-muted">ID: EMP003</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info">Customer Service</span></td>
                        <td>Customer Support</td>
                        <td>
                            <div>
                                <i class="fas fa-phone me-1"></i>+91 9876543212<br>
                                <i class="fas fa-envelope me-1"></i>priya@restaurant.com
                            </div>
                        </td>
                        <td>
                            <div>
                                <strong>Evening</strong><br>
                                <small class="text-muted">2:00 PM - 10:00 PM</small>
                            </div>
                        </td>
                        <td><span class="badge bg-warning">On Break</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress me-2" style="width: 60px; height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 95%"></div>
                                </div>
                                <small>95%</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staffDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-info">
                                    <i class="fas fa-clock"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr data-department="management">
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">SK</div>
                                <div>
                                    <strong>Suresh Kumar</strong><br>
                                    <small class="text-muted">ID: EMP004</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-warning">Management</span></td>
                        <td>Restaurant Manager</td>
                        <td>
                            <div>
                                <i class="fas fa-phone me-1"></i>+91 9876543213<br>
                                <i class="fas fa-envelope me-1"></i>suresh@restaurant.com
                            </div>
                        </td>
                        <td>
                            <div>
                                <strong>Full Day</strong><br>
                                <small class="text-muted">9:00 AM - 9:00 PM</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">On Duty</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress me-2" style="width: 60px; height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 97%"></div>
                                </div>
                                <small>97%</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staffDetailsModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-info">
                                    <i class="fas fa-clock"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Staff Modal -->
<div class="modal fade" id="addStaffModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Staff Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="staffName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="staffName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="staffEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="staffEmail" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="staffPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="staffPhone" required>
                        </div>
                        <div class="col-md-6">
                            <label for="staffDepartment" class="form-label">Department</label>
                            <select class="form-select" id="staffDepartment" required>
                                <option value="">Select Department</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="delivery">Delivery</option>
                                <option value="service">Customer Service</option>
                                <option value="management">Management</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="staffRole" class="form-label">Role</label>
                            <input type="text" class="form-control" id="staffRole" placeholder="e.g., Chef, Delivery Executive" required>
                        </div>
                        <div class="col-md-6">
                            <label for="staffSalary" class="form-label">Salary (₹)</label>
                            <input type="number" class="form-control" id="staffSalary" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="staffAddress" class="form-label">Address</label>
                        <textarea class="form-control" id="staffAddress" rows="3" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="joinDate" class="form-label">Joining Date</label>
                            <input type="date" class="form-control" id="joinDate" required>
                        </div>
                        <div class="col-md-6">
                            <label for="shiftType" class="form-label">Shift Type</label>
                            <select class="form-select" id="shiftType" required>
                                <option value="">Select Shift</option>
                                <option value="morning">Morning (6 AM - 2 PM)</option>
                                <option value="evening">Evening (2 PM - 10 PM)</option>
                                <option value="night">Night (10 PM - 6 AM)</option>
                                <option value="full">Full Day (10 AM - 10 PM)</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Staff Member</button>
            </div>
        </div>
    </div>
</div>

<!-- Staff Details Modal -->
<div class="modal fade" id="staffDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Staff Details - Raj Chandra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center mb-3">
                            <div class="avatar-circle-large mx-auto mb-3">RC</div>
                            <h5>Raj Chandra</h5>
                            <span class="badge bg-primary">Head Chef</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6>Personal Information</h6>
                        <p><i class="fas fa-envelope me-2"></i>raj@restaurant.com</p>
                        <p><i class="fas fa-phone me-2"></i>+91 9876543210</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i>123 Main Street, City</p>
                        
                        <h6 class="mt-4">Employment Details</h6>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Employee ID:</strong> EMP001</p>
                                <p><strong>Department:</strong> Kitchen</p>
                                <p><strong>Joining Date:</strong> Jan 15, 2023</p>
                            </div>
                            <div class="col-6">
                                <p><strong>Shift:</strong> Morning (6 AM - 2 PM)</p>
                                <p><strong>Salary:</strong> ₹35,000</p>
                                <p><strong>Performance:</strong> 92%</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr>
                
                <h6>Recent Activity</h6>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Hours</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Today</td>
                                <td>6:00 AM</td>
                                <td>-</td>
                                <td>6h 30m</td>
                                <td><span class="badge bg-success">On Duty</span></td>
                            </tr>
                            <tr>
                                <td>Yesterday</td>
                                <td>6:00 AM</td>
                                <td>2:15 PM</td>
                                <td>8h 15m</td>
                                <td><span class="badge bg-success">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Edit Details</button>
                <button type="button" class="btn btn-info">View Full Report</button>
            </div>
        </div>
    </div>
</div>

<style>
.department-card {
    transition: all 0.3s ease;
    cursor: pointer;
}

.department-card:hover {
    transform: translateY(-5px);
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

<script>
// Filter staff by department
document.querySelectorAll('[data-filter]').forEach(button => {
    button.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('[data-filter]').forEach(btn => btn.classList.remove('active'));
        
        // Add active class to clicked button
        this.classList.add('active');
        
        const filter = this.dataset.filter;
        const rows = document.querySelectorAll('#staffTable tbody tr[data-department]');
        
        rows.forEach(row => {
            if (filter === 'all' || row.dataset.department === filter) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});

// Search functionality
document.getElementById('staffSearch').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('#staffTable tbody tr');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Set default joining date to today
document.addEventListener('DOMContentLoaded', function() {
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('joinDate').value = today;
});
</script>