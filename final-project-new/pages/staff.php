<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Staff Management</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addStaffModal">
                    <i class="fas fa-plus me-1"></i>Add Staff Member
                </button>
            </div>
        </div>

        <!-- Staff Stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card">
                    <div class="stats-number" id="totalStaff">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Active employees</div>
                    <i class="fas fa-users stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card success">
                    <div class="stats-number" id="onDutyStaff">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Currently working</div>
                    <i class="fas fa-user-check stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card warning">
                    <div class="stats-number" id="onBreakStaff">
                       <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Break time</div>
                    <i class="fas fa-coffee stats-icon"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stats-card info">
                    <div class="stats-number" id="offDutyStaff">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="stats-label">Not scheduled</div>
                    <i class="fas fa-user-times stats-icon"></i>
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
                        <div class="row" id="departmentOverview">
                            <div class="col-md-4 mb-3">
                                <div class="department-card">
                                    <div class="card border-primary">
                                        <div class="card-body text-center">
                                            <i class="fas fa-fire fa-2x text-primary mb-2"></i>
                                            <h6>Kitchen</h6>
                                            <div class="d-flex justify-content-between">
                                                <small>Total: <span id="kitchen-total">0</span></small>
                                                <small class="text-success">Active: <span id="kitchen-active">0</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="department-card">
                                    <div class="card border-info">
                                        <div class="card-body text-center">
                                            <i class="fas fa-headset fa-2x text-info mb-2"></i>
                                            <h6>Customer Service</h6>
                                            <div class="d-flex justify-content-between">
                                                <small>Total: <span id="service-total">0</span></small>
                                                <small class="text-success">Active: <span id="service-active">0</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="department-card">
                                    <div class="card border-warning">
                                        <div class="card-body text-center">
                                            <i class="fas fa-users-cog fa-2x text-warning mb-2"></i>
                                            <h6>Management</h6>
                                            <div class="d-flex justify-content-between">
                                                <small>Total: <span id="management-total">0</span></small>
                                                <small class="text-success">Active: <span id="management-active">0</span></small>
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
                                <th>Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="staffTableBody">
                            <!-- Staff will be loaded here -->
                            <tr>
                                <td colspan="8" class="text-center">
                                    <div class="loading-container">
                                        <div class="loading"></div>
                                        <p class="mt-2 text-muted">Loading staff members...</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast container for positioning -->
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;"></div>

    <!-- Add Staff Modal -->
    <div class="modal fade" id="addStaffModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Staff Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addStaffForm" class="needs-validation" novalidate>
                        <!-- Photo Upload Section -->
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <div class="photo-upload-container">
                                    <div class="photo-preview" id="photoPreview">
                                        <i class="fas fa-camera fa-2x text-muted"></i>
                                        <p class="text-muted mt-2">Click to upload photo</p>
                                    </div>
                                    <input type="file" class="d-none" id="staffPhoto" accept="image/*">
                                    <div class="upload-progress d-none" id="uploadProgress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                                        </div>
                                        <small class="text-muted">Uploading photo...</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="staffName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="staffName" required>
                                <div class="invalid-feedback">Please provide a valid name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="staffEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="staffEmail" required>
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="staffPhone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="staffPhone" required>
                                <div class="invalid-feedback">Please provide a valid phone number.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="staffDepartment" class="form-label">Department</label>
                                <select class="form-select" id="staffDepartment" required>
                                    <option value="">Select Department</option>
                                    <option value="kitchen">Kitchen</option>
                                    <option value="service">Customer Service</option>
                                    <option value="management">Management</option>
                                </select>
                                <div class="invalid-feedback">Please select a department.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="staffRole" class="form-label">Role</label>
                                <input type="text" class="form-control" id="staffRole" placeholder="e.g., Chef, Manager" required>
                                <div class="invalid-feedback">Please provide a role.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="staffSalary" class="form-label">Salary (£)</label>
                                <input type="number" class="form-control" id="staffSalary" min="0" step="0.01" required>
                                <div class="invalid-feedback">Please provide a valid salary.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="staffAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="staffAddress" rows="3" required></textarea>
                            <div class="invalid-feedback">Please provide an address.</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="joinDate" class="form-label">Joining Date</label>
                                <input type="date" class="form-control" id="joinDate" required>
                                <div class="invalid-feedback">Please provide a joining date.</div>
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
                                <div class="invalid-feedback">Please select a shift type.</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="addStaffBtn">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
                        Add Staff Member
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Staff Modal -->
    <div class="modal fade" id="editStaffModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Staff Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editStaffForm" class="needs-validation" novalidate>
                        <input type="hidden" id="editStaffId">
                        
                        <!-- Photo Upload Section for Edit -->
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <div class="photo-upload-container">
                                    <div class="photo-preview" id="editPhotoPreview">
                                        <i class="fas fa-camera fa-2x text-muted"></i>
                                        <p class="text-muted mt-2">Click to upload photo</p>
                                    </div>
                                    <input type="file" class="d-none" id="editStaffPhoto" accept="image/*">
                                    <div class="upload-progress d-none" id="editUploadProgress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                                        </div>
                                        <small class="text-muted">Uploading photo...</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editStaffName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="editStaffName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editStaffEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="editStaffEmail" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editStaffPhone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="editStaffPhone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editStaffDepartment" class="form-label">Department</label>
                                <select class="form-select" id="editStaffDepartment" required>
                                    <option value="">Select Department</option>
                                    <option value="kitchen">Kitchen</option>
                                    <option value="service">Customer Service</option>
                                    <option value="management">Management</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editStaffRole" class="form-label">Role</label>
                                <input type="text" class="form-control" id="editStaffRole" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editStaffSalary" class="form-label">Salary (£)</label>
                                <input type="number" class="form-control" id="editStaffSalary" min="0" step="0.01" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="editStaffAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="editStaffAddress" rows="3" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="editJoinDate" class="form-label">Joining Date</label>
                                <input type="date" class="form-control" id="editJoinDate" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editShiftType" class="form-label">Shift Type</label>
                                <select class="form-select" id="editShiftType" required>
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
                    <button type="button" class="btn btn-primary" id="updateStaffBtn">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
                        Update Staff Member
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Staff Details Modal -->
    <div class="modal fade" id="staffDetailsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staffDetailsTitle">Staff Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="staffDetailsBody">
                    <!-- Staff details will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning" id="editFromDetailsBtn">Edit Details</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Stats Cards Styling - Matching Dashboard */
        .stats-card {
            background: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            position: relative;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
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
        
        .stats-card:not(.success):not(.warning):not(.info) {
            border-left: 4px solid #0d6efd;
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

        /* Loading Spinner - Matching Dashboard */
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

        .loading-container {
            padding: 2rem;
        }

        /* Card Styling - Matching Dashboard */
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

        .btn-outline-secondary.active {
            background-color: #858796;
            border-color: #858796;
            color: #fff;
        }

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
            object-fit: cover;
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
            object-fit: cover;
        }

        /* Photo Upload Styles */
        .photo-upload-container {
            margin-bottom: 1rem;
        }

        .photo-preview {
            width: 120px;
            height: 120px;
            border: 2px dashed #dee2e6;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin: 0 auto;
            transition: all 0.3s ease;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .photo-preview:hover {
            border-color: #0d6efd;
            background-color: #f8f9fa;
        }

        .photo-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .photo-preview.has-image {
            border: 2px solid #28a745;
        }

        .upload-progress {
            margin-top: 10px;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
        }

        .status-buttons {
            display: flex;
            gap: 3px;
            margin-bottom: 5px;
        }

        .status-btn {
            padding: 4px 8px;
            font-size: 0.75rem;
            border-radius: 4px;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all 0.2s;
            min-width: 32px;
        }

        .status-btn:hover {
            transform: scale(1.05);
            opacity: 0.8;
        }

        .status-btn.active {
            border: 2px solid #000;
            box-shadow: 0 0 5px rgba(0,0,0,0.3);
        }

        /* Error Message Styling */
        .error-message {
            color: #dc3545;
            text-align: center;
            padding: 1rem;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 0.375rem;
            margin: 0.5rem 0;
        }

        /* Department Cards from original */
        .department-card .card {
            transition: all 0.3s ease;
        }

        .department-card:hover .card {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        /* Card title styling */
        .card-title {
            font-weight: 600;
            color: #5a5c69;
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
            orderBy,
            onSnapshot,
            getDoc
        } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";
        import {
            getStorage,
            ref,
            uploadBytes,
            getDownloadURL,
            uploadBytesResumable
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
        let allStaff = [];
        let nextEmployeeId = 1;
        let autoRefreshInterval;

        // Utility functions
        function showToast(message, type = 'success') {
            // Create toast container if it doesn't exist
            let toastContainer = document.querySelector('.toast-container');
            if (!toastContainer) {
                toastContainer = document.createElement('div');
                toastContainer.className = 'toast-container position-fixed top-0 end-0 p-3';
                toastContainer.style.zIndex = '1055';
                document.body.appendChild(toastContainer);
            }

            const toast = document.createElement('div');
            toast.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0`;
            toast.setAttribute('role', 'alert');
            toast.setAttribute('aria-live', 'assertive');
            toast.setAttribute('aria-atomic', 'true');
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;

            toastContainer.appendChild(toast);
            const bsToast = new bootstrap.Toast(toast, { delay: 3000 });
            bsToast.show();

            toast.addEventListener('hidden.bs.toast', () => {
                if (toastContainer.contains(toast)) {
                    toastContainer.removeChild(toast);
                }
            });
        }

        function formatDate(date) {
            return new Date(date).toLocaleDateString('en-US', { 
                year: 'numeric', 
                month: 'short', 
                day: 'numeric' 
            });
        }

        function formatCurrency(amount) {
            return new Intl.NumberFormat('en-GB', {
                style: 'currency',
                currency: 'GBP'
            }).format(amount);
        }

        function getInitials(name) {
            return name.split(' ').map(word => word.charAt(0)).join('').toUpperCase().slice(0, 2);
        }

        function getStatusBadge(status) {
            const badges = {
                'on_duty': 'bg-success',
                'on_break': 'bg-warning',
                'off_duty': 'bg-danger'
            };
            const displayNames = {
                'on_duty': 'On Duty',
                'on_break': 'On Break',
                'off_duty': 'Off Duty'
            };
            return `<span class="badge ${badges[status]}">${displayNames[status]}</span>`;
        }

        function getDepartmentBadge(department) {
            const badges = {
                'kitchen': 'bg-primary',
                'service': 'bg-info',
                'management': 'bg-warning'
            };
            const displayNames = {
                'kitchen': 'Kitchen',
                'service': 'Customer Service',
                'management': 'Management'
            };
            return `<span class="badge ${badges[department]}">${displayNames[department]}</span>`;
        }

        function getShiftDisplay(shiftType) {
            const shifts = {
                'morning': 'Morning (6 AM - 2 PM)',
                'evening': 'Evening (2 PM - 10 PM)',
                'night': 'Night (10 PM - 6 AM)',
                'full': 'Full Day (10 AM - 10 PM)'
            };
            return shifts[shiftType] || shiftType;
        }

        function generateEmployeeId() {
            return `EMP${String(nextEmployeeId++).padStart(3, '0')}`;
        }

        function showError(message) {
            const errorHtml = `<div class="error-message">${message}</div>`;
            document.querySelectorAll('.stats-number').forEach(el => {
                if (el.querySelector('.loading')) {
                    el.innerHTML = 'Error';
                }
            });
        }

        // Photo upload function
        async function uploadPhoto(file, employeeId, isEdit = false) {
            const progressId = isEdit ? 'editUploadProgress' : 'uploadProgress';
            const progressElement = document.getElementById(progressId);
            const progressBar = progressElement.querySelector('.progress-bar');
            
            progressElement.classList.remove('d-none');
            
            try {
                // Create a reference to the storage location
                const storageRef = ref(storage, `staff-photos/${employeeId}-${Date.now()}.jpg`);
                
                // Upload the file with progress tracking
                const uploadTask = uploadBytesResumable(storageRef, file);
                
                return new Promise((resolve, reject) => {
                    uploadTask.on('state_changed',
                        (snapshot) => {
                            // Progress monitoring
                            const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                            progressBar.style.width = progress + '%';
                        },
                        (error) => {
                            // Error handling
                            progressElement.classList.add('d-none');
                            console.error('Upload error:', error);
                            reject(error);
                        },
                        async () => {
                            // Upload completed successfully
                            try {
                                const downloadURL = await getDownloadURL(uploadTask.snapshot.ref);
                                progressElement.classList.add('d-none');
                                resolve(downloadURL);
                            } catch (error) {
                                progressElement.classList.add('d-none');
                                reject(error);
                            }
                        }
                    );
                });
            } catch (error) {
                progressElement.classList.add('d-none');
                throw error;
            }
        }

        // Setup photo upload handlers
        function setupPhotoUpload() {
            // Add staff photo upload
            const photoPreview = document.getElementById('photoPreview');
            const photoInput = document.getElementById('staffPhoto');
            
            photoPreview.addEventListener('click', () => {
                photoInput.click();
            });
            
            photoInput.addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        photoPreview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
                        photoPreview.classList.add('has-image');
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Edit staff photo upload
            const editPhotoPreview = document.getElementById('editPhotoPreview');
            const editPhotoInput = document.getElementById('editStaffPhoto');
            
            editPhotoPreview.addEventListener('click', () => {
                editPhotoInput.click();
            });
            
            editPhotoInput.addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        editPhotoPreview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
                        editPhotoPreview.classList.add('has-image');
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        // Auto refresh functionality
        function startAutoRefresh() {
            // Clear any existing interval
            if (autoRefreshInterval) {
                clearInterval(autoRefreshInterval);
            }
            
            // Set up new interval for 5 seconds
            autoRefreshInterval = setInterval(() => {
                loadStaff();
            }, 5000);
        }

        function stopAutoRefresh() {
            if (autoRefreshInterval) {
                clearInterval(autoRefreshInterval);
                autoRefreshInterval = null;
            }
        }

        // Load staff from Firestore
        async function loadStaff() {
            try {
                const staffRef = collection(db, 'staff');
                const q = query(staffRef, orderBy('createdAt', 'desc'));
                const querySnapshot = await getDocs(q);
                
                allStaff = [];
                let maxEmpId = 0;
                querySnapshot.forEach((doc) => {
                    const staffData = { id: doc.id, ...doc.data() };
                    allStaff.push(staffData);
                    
                    // Track highest employee ID number
                    if (staffData.employeeId) {
                        const idNum = parseInt(staffData.employeeId.replace('EMP', ''));
                        if (idNum > maxEmpId) {
                            maxEmpId = idNum;
                        }
                    }
                });
                
                nextEmployeeId = maxEmpId + 1;
                updateStaffDisplay();
                updateStats();
                updateDepartmentOverview();
            } catch (error) {
                console.error('Error loading staff:', error);
                showToast('Error loading staff', 'error');
                showError('Failed to load staff data');
            }
        }

        // Update staff display
        function updateStaffDisplay() {
            const tbody = document.getElementById('staffTableBody');
            
            if (allStaff.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan="8" class="text-center text-muted py-4">
                            <i class="fas fa-users fa-3x mb-3 text-muted"></i>
                            <p>No staff members found</p>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addStaffModal">
                                <i class="fas fa-plus me-1"></i>Add First Staff Member
                            </button>
                        </td>
                    </tr>
                `;
                return;
            }
            
            tbody.innerHTML = '';
            
            allStaff.forEach(staff => {
                const row = document.createElement('tr');
                row.setAttribute('data-department', staff.department);
                
                const avatarContent = staff.photoURL 
                    ? `<img src="${staff.photoURL}" alt="${staff.name}" class="avatar-circle">`
                    : `<div class="avatar-circle">${getInitials(staff.name)}</div>`;
                
                row.innerHTML = `
                    <td>
                        <div class="d-flex align-items-center">
                            ${avatarContent}
                            <div class="ms-3">
                                <strong>${staff.name}</strong><br>
                                <small class="text-muted">ID: ${staff.employeeId}</small>
                            </div>
                        </div>
                    </td>
                    <td>${getDepartmentBadge(staff.department)}</td>
                    <td>${staff.role}</td>
                    <td>
                        <div>
                            <i class="fas fa-phone me-1"></i>${staff.phone}<br>
                            <i class="fas fa-envelope me-1"></i>${staff.email}
                        </div>
                    </td>
                    <td>
                        <div>
                            <strong>${staff.shiftType.charAt(0).toUpperCase() + staff.shiftType.slice(1)}</strong><br>
                            <small class="text-muted">${getShiftDisplay(staff.shiftType).split('(')[1]?.replace(')', '')}</small>
                        </div>
                    </td>
                    <td>
                        <div class="status-buttons">
                            <button class="status-btn bg-success text-white ${staff.status === 'on_duty' ? 'active' : ''}" 
                                    data-staff-id="${staff.id}" data-status="on_duty" title="On Duty">
                                <i class="fas fa-check"></i>
                            </button>
                            <button class="status-btn bg-warning text-white ${staff.status === 'on_break' ? 'active' : ''}" 
                                    data-staff-id="${staff.id}" data-status="on_break" title="On Break">
                                <i class="fas fa-pause"></i>
                            </button>
                            <button class="status-btn bg-danger text-white ${(staff.status === 'off_duty' || !staff.status) ? 'active' : ''}" 
                                    data-staff-id="${staff.id}" data-status="off_duty" title="Off Duty">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div>
                            ${getStatusBadge(staff.status || 'off_duty')}
                        </div>
                    </td>
                    <td><strong>${formatCurrency(staff.salary)}</strong></td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-primary view-details-btn" data-staff-id="${staff.id}" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-outline-warning edit-staff-btn" data-staff-id="${staff.id}" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-outline-danger delete-staff-btn" data-staff-id="${staff.id}" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                `;
                
                tbody.appendChild(row);
            });
            
            // Setup event listeners after creating the table
            setupTableEventListeners();
        }

        // Update stats
        function updateStats() {
            const totalStaff = allStaff.length;
            const onDuty = allStaff.filter(staff => staff.status === 'on_duty').length;
            const onBreak = allStaff.filter(staff => staff.status === 'on_break').length;
            const offDuty = allStaff.filter(staff => staff.status === 'off_duty' || !staff.status).length;

            document.getElementById('totalStaff').textContent = totalStaff;
            document.getElementById('onDutyStaff').textContent = onDuty;
            document.getElementById('onBreakStaff').textContent = onBreak;
            document.getElementById('offDutyStaff').textContent = offDuty;
        }

        // Update department overview
        function updateDepartmentOverview() {
            const departments = ['kitchen', 'service', 'management'];
            
            departments.forEach(dept => {
                const deptStaff = allStaff.filter(staff => staff.department === dept);
                const activeStaff = deptStaff.filter(staff => staff.status === 'on_duty').length;
                
                document.getElementById(`${dept}-total`).textContent = deptStaff.length;
                document.getElementById(`${dept}-active`).textContent = activeStaff;
            });
        }

        // Create staff
        async function createStaff(staffData) {
            try {
                const employeeId = generateEmployeeId();
                let photoURL = null;

                // Handle photo upload if provided
                const photoFile = document.getElementById('staffPhoto').files[0];
                if (photoFile) {
                    try {
                        photoURL = await uploadPhoto(photoFile, employeeId);
                    } catch (photoError) {
                        console.error('Photo upload failed:', photoError);
                        showToast('Staff added but photo upload failed', 'warning');
                    }
                }

                const docRef = await addDoc(collection(db, 'staff'), {
                    ...staffData,
                    employeeId: employeeId,
                    status: 'off_duty',
                    photoURL: photoURL,
                    createdAt: new Date().toISOString()
                });
                
                showToast('Staff member added successfully!');
                loadStaff();
                return docRef.id;
            } catch (error) {
                console.error('Error creating staff:', error);
                showToast('Error creating staff member', 'error');
                throw error;
            }
        }

        // Update staff
        async function updateStaff(id, staffData) {
            try {
                const staff = allStaff.find(s => s.id === id);
                let photoURL = staff?.photoURL || null;

                // Handle photo upload if new photo provided
                const photoFile = document.getElementById('editStaffPhoto').files[0];
                if (photoFile) {
                    try {
                        photoURL = await uploadPhoto(photoFile, staff.employeeId, true);
                    } catch (photoError) {
                        console.error('Photo upload failed:', photoError);
                        showToast('Staff updated but photo upload failed', 'warning');
                    }
                }

                const staffRef = doc(db, 'staff', id);
                await updateDoc(staffRef, {
                    ...staffData,
                    photoURL: photoURL,
                    updatedAt: new Date().toISOString()
                });
                
                showToast('Staff member updated successfully!');
                loadStaff();
            } catch (error) {
                console.error('Error updating staff:', error);
                showToast('Error updating staff member', 'error');
                throw error;
            }
        }

        // Setup event listeners for dynamically created buttons
        function setupTableEventListeners() {
            // Remove existing event listeners to prevent duplicates
            const tbody = document.getElementById('staffTableBody');
            
            // Status buttons
            tbody.querySelectorAll('.status-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const staffId = this.dataset.staffId;
                    const status = this.dataset.status;
                    updateStaffStatus(staffId, status);
                });
            });
            
            // View details buttons
            tbody.querySelectorAll('.view-details-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const staffId = this.dataset.staffId;
                    viewStaffDetails(staffId);
                });
            });
            
            // Edit buttons
            tbody.querySelectorAll('.edit-staff-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const staffId = this.dataset.staffId;
                    editStaff(staffId);
                });
            });
            
            // Delete buttons
            tbody.querySelectorAll('.delete-staff-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const staffId = this.dataset.staffId;
                    deleteStaff(staffId);
                });
            });
        }

        // Update staff status
        async function updateStaffStatus(id, newStatus) {
            try {
                const staffRef = doc(db, 'staff', id);
                await updateDoc(staffRef, {
                    status: newStatus,
                    updatedAt: new Date().toISOString()
                });
                
                const statusNames = {
                    'on_duty': 'On Duty',
                    'on_break': 'On Break',
                    'off_duty': 'Off Duty'
                };
                
                showToast(`Staff status updated to ${statusNames[newStatus]}`);
                loadStaff();
            } catch (error) {
                console.error('Error updating staff status:', error);
                showToast('Error updating staff status', 'error');
            }
        }

        // Delete staff
        async function deleteStaff(id) {
            if (!confirm('Are you sure you want to delete this staff member?')) {
                return;
            }
            
            try {
                await deleteDoc(doc(db, 'staff', id));
                showToast('Staff member deleted successfully!');
                loadStaff();
            } catch (error) {
                console.error('Error deleting staff:', error);
                showToast('Error deleting staff member', 'error');
            }
        }

        // Edit staff
        function editStaff(id) {
            const staff = allStaff.find(s => s.id === id);
            if (!staff) return;
            
            // Populate edit form
            document.getElementById('editStaffId').value = id;
            document.getElementById('editStaffName').value = staff.name;
            document.getElementById('editStaffEmail').value = staff.email;
            document.getElementById('editStaffPhone').value = staff.phone;
            document.getElementById('editStaffDepartment').value = staff.department;
            document.getElementById('editStaffRole').value = staff.role;
            document.getElementById('editStaffSalary').value = staff.salary;
            document.getElementById('editStaffAddress').value = staff.address;
            document.getElementById('editJoinDate').value = staff.joinDate;
            document.getElementById('editShiftType').value = staff.shiftType;
            
            // Set photo preview
            const editPhotoPreview = document.getElementById('editPhotoPreview');
            if (staff.photoURL) {
                editPhotoPreview.innerHTML = `<img src="${staff.photoURL}" alt="${staff.name}">`;
                editPhotoPreview.classList.add('has-image');
            } else {
                editPhotoPreview.innerHTML = `
                    <i class="fas fa-camera fa-2x text-muted"></i>
                    <p class="text-muted mt-2">Click to upload photo</p>
                `;
                editPhotoPreview.classList.remove('has-image');
            }
            
            new bootstrap.Modal(document.getElementById('editStaffModal')).show();
        }

        // View staff details
        function viewStaffDetails(id) {
            const staff = allStaff.find(s => s.id === id);
            if (!staff) return;
            
            document.getElementById('staffDetailsTitle').textContent = `Staff Details - ${staff.name}`;
            
            const avatarContent = staff.photoURL 
                ? `<img src="${staff.photoURL}" alt="${staff.name}" class="avatar-circle-large mx-auto mb-3">`
                : `<div class="avatar-circle-large mx-auto mb-3">${getInitials(staff.name)}</div>`;
            
            document.getElementById('staffDetailsBody').innerHTML = `
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center mb-3">
                            ${avatarContent}
                            <h5>${staff.name}</h5>
                            <span class="badge bg-primary">${staff.role}</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6>Personal Information</h6>
                        <p><i class="fas fa-envelope me-2"></i>${staff.email}</p>
                        <p><i class="fas fa-phone me-2"></i>${staff.phone}</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i>${staff.address}</p>
                        
                        <h6 class="mt-4">Employment Details</h6>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Employee ID:</strong> ${staff.employeeId}</p>
                                <p><strong>Department:</strong> ${staff.department}</p>
                                <p><strong>Joining Date:</strong> ${formatDate(staff.joinDate)}</p>
                            </div>
                            <div class="col-6">
                                <p><strong>Shift:</strong> ${getShiftDisplay(staff.shiftType)}</p>
                                <p><strong>Salary:</strong> ${formatCurrency(staff.salary)}</p>
                                <p><strong>Status:</strong> ${getStatusBadge(staff.status || 'off_duty')}</p>
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
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>${getStatusBadge(staff.status || 'off_duty')}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            `;
            
            // Store staff ID for edit button
            document.getElementById('editFromDetailsBtn').onclick = () => {
                bootstrap.Modal.getInstance(document.getElementById('staffDetailsModal')).hide();
                setTimeout(() => editStaff(id), 300);
            };
            
            new bootstrap.Modal(document.getElementById('staffDetailsModal')).show();
        }

        // Reset photo preview
        function resetPhotoPreview(previewId) {
            const preview = document.getElementById(previewId);
            preview.innerHTML = `
                <i class="fas fa-camera fa-2x text-muted"></i>
                <p class="text-muted mt-2">Click to upload photo</p>
            `;
            preview.classList.remove('has-image');
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Set default joining date to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('joinDate').value = today;
            
            // Setup photo upload functionality
            setupPhotoUpload();
            
            // Load staff data
            loadStaff();
            
            // Start auto refresh
            startAutoRefresh();
        });

        // Stop auto refresh when page is not visible
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                stopAutoRefresh();
            } else {
                startAutoRefresh();
            }
        });

        // Add staff form handler
        document.getElementById('addStaffBtn').addEventListener('click', async function() {
            const form = document.getElementById('addStaffForm');
            const btn = this;
            const spinner = btn.querySelector('.spinner-border');
            
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
            
            try {
                btn.disabled = true;
                spinner.classList.remove('d-none');
                
                const staffData = {
                    name: document.getElementById('staffName').value,
                    email: document.getElementById('staffEmail').value,
                    phone: document.getElementById('staffPhone').value,
                    department: document.getElementById('staffDepartment').value,
                    role: document.getElementById('staffRole').value,
                    salary: parseFloat(document.getElementById('staffSalary').value),
                    address: document.getElementById('staffAddress').value,
                    joinDate: document.getElementById('joinDate').value,
                    shiftType: document.getElementById('shiftType').value
                };
                
                await createStaff(staffData);
                
                // Reset form and close modal
                form.reset();
                form.classList.remove('was-validated');
                resetPhotoPreview('photoPreview');
                document.getElementById('staffPhoto').value = '';
                bootstrap.Modal.getInstance(document.getElementById('addStaffModal')).hide();
                
                // Reset default date
                document.getElementById('joinDate').value = new Date().toISOString().split('T')[0];
                
            } catch (error) {
                console.error('Error:', error);
            } finally {
                btn.disabled = false;
                spinner.classList.add('d-none');
            }
        });

        // Update staff form handler
        document.getElementById('updateStaffBtn').addEventListener('click', async function() {
            const form = document.getElementById('editStaffForm');
            const btn = this;
            const spinner = btn.querySelector('.spinner-border');
            
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
            
            try {
                btn.disabled = true;
                spinner.classList.remove('d-none');
                
                const staffData = {
                    name: document.getElementById('editStaffName').value,
                    email: document.getElementById('editStaffEmail').value,
                    phone: document.getElementById('editStaffPhone').value,
                    department: document.getElementById('editStaffDepartment').value,
                    role: document.getElementById('editStaffRole').value,
                    salary: parseFloat(document.getElementById('editStaffSalary').value),
                    address: document.getElementById('editStaffAddress').value,
                    joinDate: document.getElementById('editJoinDate').value,
                    shiftType: document.getElementById('editShiftType').value
                };
                
                const staffId = document.getElementById('editStaffId').value;
                await updateStaff(staffId, staffData);
                
                // Reset form and close modal
                form.reset();
                form.classList.remove('was-validated');
                resetPhotoPreview('editPhotoPreview');
                document.getElementById('editStaffPhoto').value = '';
                bootstrap.Modal.getInstance(document.getElementById('editStaffModal')).hide();
                
            } catch (error) {
                console.error('Error:', error);
            } finally {
                btn.disabled = false;
                spinner.classList.add('d-none');
            }
        });

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

        // Clean up on page unload
        window.addEventListener('beforeunload', function() {
            stopAutoRefresh();
        });

    </script>
</body>
</html>