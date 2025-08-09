
    <style>
        .bg-orange-transparent {
            background-color: rgba(255, 165, 0, 0.1);
        }
        
        .navbar-brand {
            text-decoration: none;
        }
        
        .navbar-brand:hover {
            text-decoration: none;
        }
        
        .dropdown-menu {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .rounded-pill {
            border-radius: 50rem !important;
        }
        
        .profile-img {
            object-fit: cover;
        }
        
        /* Custom styles for better mobile responsiveness */
        @media (max-width: 768px) {
            .navbar-brand span {
                font-size: 1rem !important;
            }
            
            .d-flex.gap-3 {
                gap: 0.5rem !important;
            }
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm px-3 py-2">
    <div class="container-fluid">
        
        <!-- Sidebar Toggle (Mobile) -->
        <button type="button" id="sidebarCollapse" class="btn btn-outline-primary d-lg-none me-2">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Logo + Title -->
        <a class="navbar-brand d-flex flex-column align-items-start" href="index.php">
            <span class="fw-bold fs-5" style="color: #0f172a;">THE TURMERIC INDIAN CUISINE RESTAURANTS</span>
            <small class="text-secondary" style="font-size: 15px;">Admin Dashboard</small>
        </a>

        <!-- Right Section -->
        <div class="d-flex align-items-center ms-auto gap-3">

            <!-- Real-time Clock -->
            <div class="d-flex align-items-center text-muted small" id="dateTimeDisplay">
                <i class="fas fa-clock me-2 text-primary"></i>
                <span id="dateTimeText">Loading time...</span>
            </div>

            <!-- Notifications -->
            <div class="dropdown">
                <button class="btn btn-light border rounded-pill px-3 py-1 d-flex align-items-center gap-2 position-relative" 
                        type="button" 
                        id="notifDropdown" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                    <i class="fas fa-bell text-warning"></i>
                    <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle">3</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notifDropdown">
                    <li><h6 class="dropdown-header"><i class="fas fa-bell me-2"></i>Notifications</h6></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-cart me-2 text-success"></i>New order received</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-star me-2 text-warning"></i>New review posted</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-exclamation-triangle me-2 text-danger"></i>Low stock alert</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-primary" href="#"><i class="fas fa-eye me-2"></i>View all notifications</a></li>
                </ul>
            </div>

            <!-- Admin Profile Dropdown -->
            <div class="dropdown">
                <button class="btn btn-light border rounded-pill px-3 py-1 d-flex align-items-center gap-2" 
                        type="button"
                        id="userDropdown" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                    <img src="public/images/profile.png" 
                         alt="Admin" 
                         width="32" 
                         height="32" 
                         class="rounded-circle profile-img">
                    <span class="d-none d-md-inline">Admin User</span>
                    <i class="fas fa-chevron-down small"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <i class="fas fa-user me-2 text-primary"></i>Profile
                        </a>
                    </li>
                    <li><a class="dropdown-item" href="index.php?page=settings"><i class="fas fa-cog me-2 text-secondary"></i>Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header bg-orange-transparent border-0">
                <h5 class="modal-title d-flex align-items-center" id="profileModalLabel">
                    <i class="fas fa-user-circle me-2 text-primary"></i>Admin Profile
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4 position-relative">
                    <div class="position-relative d-inline-block">
                        <img src="public/images/profile.png" 
                             class="rounded-circle border border-3 profile-img" 
                             width="80" 
                             height="80" 
                             alt="Admin" 
                             id="profileImage">
                        <button class="btn btn-sm btn-outline-secondary position-absolute" 
                                style="top: -5px; right: -5px; border-radius: 50%;" 
                                title="Edit Photo"
                                type="button">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <h5 class="mt-3 mb-0">Admin User</h5>
                    <small class="text-muted badge bg-light text-dark">Administrator</small>
                </div>

                <div class="mb-3">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="flex-grow-1 me-2">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" 
                                   class="form-control" 
                                   value="admin@turmericrestaurant.com" 
                                   readonly>
                        </div>
                        <button class="btn btn-outline-secondary btn-sm" 
                                title="Edit Email"
                                type="button">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="flex-grow-1 me-2">
                            <label class="form-label fw-semibold">Username</label>
                            <input type="text" 
                                   class="form-control" 
                                   value="admin_user" 
                                   readonly>
                        </div>
                        <button class="btn btn-outline-secondary btn-sm" 
                                title="Edit Username"
                                type="button">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="flex-grow-1 me-2">
                            <label class="form-label fw-semibold">Role</label>
                            <input type="text" 
                                   class="form-control" 
                                   value="Administrator" 
                                   readonly>
                        </div>
                        <button class="btn btn-outline-secondary btn-sm" 
                                title="Edit Role"
                                type="button">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                </div>

                <!-- Additional Profile Stats -->
                <div class="row mt-4">
                    <div class="col-4 text-center">
                        <div class="border rounded p-2">
                            <i class="fas fa-calendar-alt text-primary mb-1"></i>
                            <div class="small fw-semibold">Last Login</div>
                            <div class="small text-muted">Today</div>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="border rounded p-2">
                            <i class="fas fa-clock text-success mb-1"></i>
                            <div class="small fw-semibold">Active Since</div>
                            <div class="small text-muted">2024</div>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="border rounded p-2">
                            <i class="fas fa-shield-alt text-warning mb-1"></i>
                            <div class="small fw-semibold">Status</div>
                            <div class="small text-muted">Active</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer border-0">
                <a href="index.php?page=settings" class="btn btn-outline-primary">
                    <i class="fas fa-cog me-1"></i>Settings
                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i>Close
                </button>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap 5 JavaScript Bundle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
    // Real-time clock function
    function updateDateTime() {
        const now = new Date();
        const options = {
            weekday: 'short',
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        };
        document.getElementById("dateTimeText").textContent = now.toLocaleString('en-US', options);
    }

    // Sidebar toggle functionality
    document.getElementById('sidebarCollapse').addEventListener('click', function() {
        // Add your sidebar toggle logic here
        console.log('Sidebar toggle clicked');
        // Example: document.getElementById('sidebar').classList.toggle('show');
    });

    // Initialize clock
    setInterval(updateDateTime, 1000);
    updateDateTime();

    // Add some interactive feedback
    document.addEventListener('DOMContentLoaded', function() {
        // Profile modal event
        const profileModal = document.getElementById('profileModal');
        profileModal.addEventListener('shown.bs.modal', function () {
            console.log('Profile modal opened');
        });

        // Notification click events
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                if (this.getAttribute('href') === '#') {
                    e.preventDefault();
                    console.log('Clicked:', this.textContent.trim());
                }
            });
        });

        // Edit button functionality
        document.querySelectorAll('.btn-outline-secondary').forEach(btn => {
            btn.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                if (input && input.hasAttribute('readonly')) {
                    input.removeAttribute('readonly');
                    input.focus();
                    this.innerHTML = '<i class="fas fa-save"></i>';
                    this.classList.remove('btn-outline-secondary');
                    this.classList.add('btn-success');
                } else if (input) {
                    input.setAttribute('readonly', true);
                    this.innerHTML = '<i class="fas fa-edit"></i>';
                    this.classList.remove('btn-success');
                    this.classList.add('btn-outline-secondary');
                }
            });
        });
    });
</script>

</body>
</html>