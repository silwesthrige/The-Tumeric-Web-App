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
                <button class="btn btn-light border rounded-pill px-3 py-1 d-flex align-items-center gap-2" id="notifDropdown" data-bs-toggle="dropdown">
                    <i class="fas fa-bell text-warning"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><h6 class="dropdown-header">Notifications</h6></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-cart me-2"></i>New order received</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-star me-2"></i>New review posted</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-exclamation-triangle me-2"></i>Low stock alert</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">View all notifications</a></li>
                </ul>
            </div>

            <!-- Admin Profile Dropdown -->
            <div class="dropdown">
                <button class="btn btn-light border rounded-pill px-3 py-1 d-flex align-items-center gap-2" id="userDropdown" data-bs-toggle="dropdown">
                    <img src="public/images/profile.png" alt="Admin" width="32" height="32" class="rounded-circle">
                    <span class="d-none d-md-inline"><?php echo $_SESSION['user_name'] ?? 'Admin'; ?></span>
                    <i class="fas fa-chevron-down small"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <i class="fas fa-user me-2"></i>Profile
                        </a>
                    </li>
                    <li><a class="dropdown-item" href="index.php?page=settings"><i class="fas fa-cog me-2"></i>Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header bg-orange-transparent">
        <h5 class="modal-title" id="profileModalLabel">Admin Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="text-center mb-4 position-relative">
          <img src="public/images/profile.png" class="rounded-circle border" width="80" height="80" alt="Admin" id="profileImage">
          <button class="btn btn-sm btn-outline-secondary position-absolute top-0 end-0" title="Edit Photo">
            <i class="fas fa-edit"></i>
          </button>
          <h5 class="mt-3 mb-0"><?php echo $_SESSION['user_name'] ?? 'Admin'; ?></h5>
          <small class="text-muted">Administrator</small>
        </div>

        <div class="mb-3 d-flex align-items-center justify-content-between">
          <div class="flex-grow-1 me-2">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="<?php echo $_SESSION['user_email'] ?? 'admin@example.com'; ?>" readonly>
          </div>
          <button class="btn btn-outline-secondary btn-sm mt-4" title="Edit Email"><i class="fas fa-edit"></i></button>
        </div>

        <div class="mb-3 d-flex align-items-center justify-content-between">
          <div class="flex-grow-1 me-2">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" value="<?php echo $_SESSION['user_name'] ?? 'admin'; ?>" readonly>
          </div>
          <button class="btn btn-outline-secondary btn-sm mt-4" title="Edit Username"><i class="fas fa-edit"></i></button>
        </div>

        <div class="mb-3 d-flex align-items-center justify-content-between">
          <div class="flex-grow-1 me-2">
            <label class="form-label">Role</label>
            <input type="text" class="form-control" value="Administrator" readonly>
          </div>
          <button class="btn btn-outline-secondary btn-sm mt-4" title="Edit Role"><i class="fas fa-edit"></i></button>
        </div>
      </div>

      <div class="modal-footer">
        <a href="index.php?page=settings" class="btn btn-outline-primary">
          <i class="fas fa-cog me-1"></i>Settings
        </a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
    function updateDateTime() {
        const now = new Date();
        const options = {
            weekday: 'short',
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        };
        document.getElementById("dateTimeText").textContent = now.toLocaleString('en-US', options);
    }

    setInterval(updateDateTime, 1000); // update every second
    updateDateTime(); // run once immediately
</script>
