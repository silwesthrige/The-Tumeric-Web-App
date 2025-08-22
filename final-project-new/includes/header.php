
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
            max-height: 400px;
            overflow-y: auto;
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

        /* Enhanced Notification styles */
        .notification-item {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .notification-item:hover {
            background-color: #f8f9fa;
            transform: translateX(2px);
        }

        .notification-new {
            background-color: #e3f2fd;
            border-left: 4px solid #2196f3;
        }

        .notification-order {
            border-left-color: #28a745;
        }

        .notification-feedback {
            border-left-color: #ffc107;
        }

        .notification-time {
            font-size: 0.75rem;
            color: #6c757d;
        }

        .notification-badge-animate {
            animation: pulse 2s infinite;
        }

        .notification-bell-shake {
            animation: shake 0.5s ease-in-out;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes shake {
            0%, 100% {
                transform: translateX(0);
            }
            10%, 30%, 50%, 70%, 90% {
                transform: translateX(-2px);
            }
            20%, 40%, 60%, 80% {
                transform: translateX(2px);
            }
        }

        .no-notifications {
            padding: 2rem 1rem;
            text-align: center;
            color: #6c757d;
        }

        .notification-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-bottom: 1px solid #dee2e6;
        }

        /* Order specific notification styles */
        .order-notification {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
        }

        .order-notification .notification-icon {
            color: #28a745;
            font-size: 1.2rem;
        }

        .order-total {
            font-weight: 600;
            color: #28a745;
        }

        .order-id {
            font-family: 'Courier New', monospace;
            background: #f8f9fa;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 0.85rem;
        }

        /* Status indicators */
        .status-pending {
            color: #ffc107;
        }

        .status-confirmed {
            color: #17a2b8;
        }

        .status-preparing {
            color: #fd7e14;
        }

        .status-ready {
            color: #28a745;
        }

        .status-completed {
            color: #6c757d;
        }

        /* Auto-refresh indicator */
        .auto-refresh-indicator {
            position: fixed;
            top: 70px;
            right: 20px;
            background: #28a745;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            opacity: 0;
            transform: translateY(-20px);
            transition: all 0.3s ease;
            z-index: 1050;
        }

        .auto-refresh-indicator.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Profile Modal Improvements */
        .profile-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .profile-avatar {
            position: relative;
            display: inline-block;
        }

        .profile-avatar img {
            border: 4px solid white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .profile-details {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .detail-item {
            padding: 0.75rem 0;
            border-bottom: 1px solid #f1f3f4;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: #495057;
            font-size: 0.9rem;
            margin-bottom: 0.25rem;
        }

        .detail-value {
            color: #212529;
            font-size: 1rem;
        }

        .status-stats {
            background: white;
            border-radius: 12px;
            padding: 1rem;
            margin-top: 1rem;
        }

        .stat-item {
            text-align: center;
            padding: 0.75rem;
            border-radius: 8px;
            background: #f8f9fa;
            transition: transform 0.2s ease;
        }

        .stat-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .user-name {
            font-size: 1.5rem;
            font-weight: 600;
            color: #212529;
            margin-bottom: 0.25rem;
        }

        .user-role {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .notification-sound-toggle {
            font-size: 0.8rem;
            padding: 2px 8px;
            border-radius: 12px;
        }

        @media (max-width: 768px) {
            .profile-section {
                padding: 1rem;
            }
            
            .profile-details {
                padding: 1rem;
            }
            
            .user-name {
                font-size: 1.25rem;
            }

            .auto-refresh-indicator {
                right: 10px;
                font-size: 0.8rem;
                padding: 6px 12px;
            }
        }
    </style>
</head>
<body>

<!-- Auto-refresh indicator -->
<div id="autoRefreshIndicator" class="auto-refresh-indicator">
    <i class="fas fa-sync-alt me-1"></i>
    <span id="refreshText">Checking for new orders...</span>
</div>

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
                    <i class="fas fa-bell text-warning" id="notificationBellIcon"></i>
                    <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle" 
                          id="notificationBadge" style="display: none;">0</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notifDropdown" style="width: 380px;">
                    <li>
                        <div class="notification-header d-flex justify-content-between align-items-center px-3 py-2">
                            <h6 class="mb-0">
                                <i class="fas fa-bell me-2"></i>Notifications
                                <span class="badge bg-secondary ms-2" id="totalNotificationCount">0</span>
                            </h6>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm notification-sound-toggle" 
                                        id="soundToggle" 
                                        title="Toggle sound notifications">
                                    <i class="fas fa-volume-up"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-primary" 
                                        id="markAllRead" 
                                        style="display: none;"
                                        title="Mark all as read">
                                    <i class="fas fa-check-double me-1"></i>Mark All Read
                                </button>
                            </div>
                        </div>
                    </li>
                    <div id="notificationsList">
                        <li class="no-notifications">
                            <i class="fas fa-bell-slash mb-2 text-muted"></i>
                            <div>No notifications</div>
                            <small class="text-muted">New orders will appear here</small>
                        </li>
                    </div>
                    <li class="border-top">
                        <a class="dropdown-item text-primary text-center" href="index.php?page=orders" id="viewAllNotifications">
                            <i class="fas fa-eye me-2"></i>View all orders
                        </a>
                    </li>
                </ul>
            </div>

            <!-- User Profile Dropdown -->
            <div class="dropdown">
                <button class="btn btn-light border rounded-pill px-3 py-1 d-flex align-items-center gap-2" 
                        type="button"
                        id="userDropdown" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                    <img src="<?php echo !empty($_SESSION['user_image']) ? $_SESSION['user_image'] : 'public/images/profile.png'; ?>" 
                         alt="User" 
                         width="32" 
                         height="32" 
                         class="rounded-circle profile-img">
                    <span class="d-none d-md-inline"><?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Admin User'); ?></span>
                    <i class="fas fa-chevron-down small"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <i class="fas fa-user me-2 text-primary"></i>Profile
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#" onclick="handleLogout(event)"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-orange-transparent border-0">
                <h5 class="modal-title d-flex align-items-center" id="profileModalLabel">
                    <i class="fas fa-user-circle me-2 text-primary"></i>User Profile
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <!-- Profile Section -->
                <div class="profile-section">
                    <div class="row align-items-center">
                        <!-- Left Side - Profile Photo, Name, and Role -->
                        <div class="col-md-4 text-center">
                            <div class="profile-avatar mb-3">
                                <img src="<?php echo !empty($_SESSION['user_image']) ? $_SESSION['user_image'] : 'public/images/profile.png'; ?>" 
                                     class="rounded-circle profile-img" 
                                     width="100" 
                                     height="100" 
                                     alt="User" 
                                     id="profileImage">
                            </div>
                            <div class="user-name"><?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Admin User'); ?></div>
                            <div class="user-role"><?php echo ucfirst($_SESSION['user_role'] ?? 'Administrator'); ?></div>
                        </div>

                        <!-- Right Side - User Details -->
                        <div class="col-md-8">
                            <div class="profile-details">
                                <div class="detail-item">
                                    <div class="detail-label">
                                        <i class="fas fa-envelope me-2 text-primary"></i>Email Address
                                    </div>
                                    <div class="detail-value"><?php echo htmlspecialchars($_SESSION['user_email'] ?? 'admin@turmericrestaurant.com'); ?></div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-label">
                                        <i class="fas fa-user me-2 text-primary"></i>Username
                                    </div>
                                    <div class="detail-value"><?php echo htmlspecialchars($_SESSION['user_name'] ?? 'admin_user'); ?></div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-label">
                                        <i class="fas fa-id-badge me-2 text-primary"></i>User ID
                                    </div>
                                    <div class="detail-value"><?php echo htmlspecialchars($_SESSION['user_id'] ?? 'N/A'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="px-4 pb-4">
                    <div class="status-stats">
                        <div class="row g-3">
                            <div class="col-4">
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="fas fa-calendar-alt text-primary"></i>
                                    </div>
                                    <div class="small fw-semibold">Last Login</div>
                                    <div class="small text-muted" id="lastLoginTime">Loading...</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="fas fa-clock text-success"></i>
                                    </div>
                                    <div class="small fw-semibold">Active Since</div>
                                    <div class="small text-muted" id="activeSinceDate">Loading...</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="fas fa-shield-alt text-warning" id="statusIcon"></i>
                                    </div>
                                    <div class="small fw-semibold">Status</div>
                                    <div class="small text-success fw-semibold" id="userStatus">Loading...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer border-0 bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i>Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JavaScript Bundle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Firebase and Real-time Notifications -->
<script type="module">
    import { db } from './includes/dbcon.js';
    import { 
        collection, 
        query, 
        orderBy, 
        limit, 
        onSnapshot, 
        doc, 
        getDoc,
        where,
        Timestamp
    } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";

    // Notification management
    let notifications = [];
    let unreadCount = 0;
    let processedOrderIds = new Set();
    let soundEnabled = localStorage.getItem('notificationSound') !== 'false';
    let lastOrderCheck = new Date();

    // Sound for notifications
    const notificationSound = new Audio('data:audio/wav;base64,UklGRnoGAABXQVZFZm10IAAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwFJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiw=');

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

    // Format time ago
    function timeAgo(date) {
        const now = new Date();
        const diffInMinutes = Math.floor((now - date) / 60000);
        
        if (diffInMinutes < 1) return 'Just now';
        if (diffInMinutes < 60) return `${diffInMinutes}m ago`;
        
        const diffInHours = Math.floor(diffInMinutes / 60);
        if (diffInHours < 24) return `${diffInHours}h ago`;
        
        const diffInDays = Math.floor(diffInHours / 24);
        if (diffInDays < 7) return `${diffInDays}d ago`;
        
        return date.toLocaleDateString();
    }

    // Get user name from users collection
    async function getUserName(userId) {
        try {
            const userDoc = await getDoc(doc(db, 'users', userId));
            return userDoc.exists() ? (userDoc.data().name || userDoc.data().username || 'Customer') : 'Customer';
        } catch (error) {
            console.error('Error fetching user:', error);
            return 'Customer';
        }
    }

    // Get status color class
    function getStatusColorClass(status) {
        const statusColors = {
            'pending': 'status-pending',
            'confirmed': 'status-confirmed',
            'preparing': 'status-preparing',
            'ready': 'status-ready',
            'completed': 'status-completed',
            'cancelled': 'text-danger'
        };
        return statusColors[status?.toLowerCase()] || 'text-muted';
    }

    // Format currency
    function formatCurrency(amount) {
        return new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD'
        }).format(amount);
    }

    // Show auto-refresh indicator
    function showAutoRefreshIndicator(message = 'Checking for new orders...') {
        const indicator = document.getElementById('autoRefreshIndicator');
        const text = document.getElementById('refreshText');
        text.textContent = message;
        indicator.classList.add('show');
        
        setTimeout(() => {
            indicator.classList.remove('show');
        }, 2000);
    }

    // Play notification sound
    function playNotificationSound() {
        if (soundEnabled) {
            try {
                notificationSound.play().catch(e => console.log('Sound play failed:', e));
            } catch (error) {
                console.log('Audio not supported:', error);
            }
        }
    }

    // Update notification badge
    function updateNotificationBadge() {
        const badge = document.getElementById('notificationBadge');
        const markAllBtn = document.getElementById('markAllRead');
        const totalCount = document.getElementById('totalNotificationCount');
        const bellIcon = document.getElementById('notificationBellIcon');
        
        totalCount.textContent = notifications.length;
        
        if (unreadCount > 0) {
            badge.textContent = unreadCount > 99 ? '99+' : unreadCount;
            badge.style.display = 'block';
            badge.classList.add('notification-badge-animate');
            markAllBtn.style.display = 'block';
            bellIcon.classList.add('notification-bell-shake');
            
            // Remove shake animation after it completes
            setTimeout(() => {
                bellIcon.classList.remove('notification-bell-shake');
            }, 500);
        } else {
            badge.style.display = 'none';
            badge.classList.remove('notification-badge-animate');
            markAllBtn.style.display = 'none';
        }
    }

    // Get order items summary
    function getOrderItemsSummary(items) {
        if (!items || items.length === 0) return 'No items';
        if (items.length === 1) return items[0].name;
        if (items.length === 2) return `${items[0].name}, ${items[1].name}`;
        return `${items[0].name} and ${items.length - 1} more items`;
    }

    // Render notifications
    function renderNotifications() {
        const notificationsList = document.getElementById('notificationsList');
        
        if (notifications.length === 0) {
            notificationsList.innerHTML = `
                <li class="no-notifications">
                    <i class="fas fa-bell-slash mb-2 text-muted"></i>
                    <div>No notifications</div>
                    <small class="text-muted">New orders will appear here</small>
                </li>
            `;
            return;
        }

        const notificationHTML = notifications.map(notification => `
            <li class="notification-item ${notification.type === 'order' ? 'notification-order' : ''} ${notification.isNew ? 'notification-new' : ''}" 
                data-notification-id="${notification.id}">
                <a class="dropdown-item py-3" href="#" style="text-decoration: none;">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="fas fa-${notification.icon} ${notification.iconColor} notification-icon"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-1">
                                <div class="fw-semibold">${notification.title}</div>
                                <div class="order-total">${notification.total || ''}</div>
                            </div>
                            <div class="text-muted small mb-1">${notification.message}</div>
                            ${notification.orderId ? `<div class="order-id mb-1">#${notification.orderId}</div>` : ''}
                            ${notification.status ? `<div class="small ${getStatusColorClass(notification.status)}">Status: ${notification.status}</div>` : ''}
                            <div class="notification-time">${notification.timeAgo}</div>
                        </div>
                        ${notification.isNew ? '<div class="ms-2"><span class="badge bg-success rounded-pill">New</span></div>' : ''}
                    </div>
                </a>
            </li>
        `).join('');

        notificationsList.innerHTML = notificationHTML;
    }

    // Process new order notification
    async function processNewOrder(orderData, orderId) {
        // Check if we've already processed this order
        if (processedOrderIds.has(orderId)) {
            return;
        }

        try {
            const userName = await getUserName(orderData.userId);
            const orderTime = orderData.createdAt?.toDate() || new Date();
            const itemsSummary = getOrderItemsSummary(orderData.items);
            
            const notification = {
                id: orderId,
                type: 'order',
                title: 'New Order Received',
                message: `From ${userName} • ${itemsSummary}`,
                icon: 'shopping-cart',
                iconColor: 'text-success',
                timestamp: orderTime,
                timeAgo: timeAgo(orderTime),
                isNew: true,
                total: formatCurrency(orderData.total || 0),
                orderId: orderId.substring(0, 8).toUpperCase(),
                status: orderData.status || 'pending',
                userName: userName
            };
            
            // Add to beginning of notifications array
            notifications.unshift(notification);
            
            // Keep only last 50 notifications
            if (notifications.length > 50) {
                notifications = notifications.slice(0, 50);
            }
            
            // Mark as processed
            processedOrderIds.add(orderId);
            unreadCount++;
            
            // Update UI
            updateNotificationBadge();
            renderNotifications();
            
            // Play sound and show indicator
            playNotificationSound();
            showAutoRefreshIndicator(`New order from ${userName}!`);
            
            // Show browser notification if supported
            if ('Notification' in window && Notification.permission === 'granted') {
                new Notification('New Order Received!', {
                    body: `Order #${notification.orderId} from ${userName} - ${notification.total}`,
                    icon: 'public/images/UK PJ Logo.png',
                    badge: 'public/images/UK PJ Logo.png',
                    tag: orderId,
                    requireInteraction: true
                });
            }
            
            console.log('New order notification processed:', orderId);
            
        } catch (error) {
            console.error('Error processing new order notification:', error);
        }
    }

    // Initialize real-time order listener
    function initializeOrderListener() {
        try {
            // Create query for recent orders
            const ordersQuery = query(
                collection(db, 'orders'),
                orderBy('createdAt', 'desc'),
                limit(20)
            );

            // Set up real-time listener
            const unsubscribe = onSnapshot(ordersQuery, (snapshot) => {
                let newOrdersCount = 0;
                
                snapshot.docChanges().forEach((change) => {
                    if (change.type === 'added') {
                        const orderData = change.doc.data();
                        const orderId = change.doc.id;
                        
                        // Check if this is a genuinely new order (created in last 2 minutes)
                        if (orderData.createdAt) {
                            const orderTime = orderData.createdAt.toDate();
                            const now = new Date();
                            const timeDiffMinutes = (now - orderTime) / (1000 * 60);
                            
                            // Only process very recent orders and those we haven't seen before
                            if (timeDiffMinutes < 2 && !processedOrderIds.has(orderId)) {
                                processNewOrder(orderData, orderId);
                                newOrdersCount++;
                            } else if (!processedOrderIds.has(orderId)) {
                                // Add older orders to processed list without notification
                                processedOrderIds.add(orderId);
                            }
                        }
                    }
                    
                    // Handle order updates (status changes, etc.)
                    if (change.type === 'modified') {
                        const orderId = change.doc.id;
                        const orderData = change.doc.data();
                        
                        // Find existing notification and update it
                        const existingNotification = notifications.find(n => n.id === orderId);
                        if (existingNotification) {
                            existingNotification.status = orderData.status;
                            existingNotification.timeAgo = timeAgo(existingNotification.timestamp);
                            renderNotifications();
                        }
                    }
                });
                
                if (newOrdersCount > 0) {
                    console.log(`Processed ${newOrdersCount} new orders`);
                }
                
            }, (error) => {
                console.error('Error in order listener:', error);
                showAutoRefreshIndicator('Connection error - retrying...');
                
                // Retry connection after 5 seconds
                setTimeout(() => {
                    initializeOrderListener();
                }, 5000);
            });

            return unsubscribe;
            
        } catch (error) {
            console.error('Error initializing order listener:', error);
        }
    }

    // Request notification permission
    function requestNotificationPermission() {
        if ('Notification' in window) {
            if (Notification.permission === 'default') {
                Notification.requestPermission().then(permission => {
                    if (permission === 'granted') {
                        console.log('Notification permission granted');
                    }
                });
            }
        }
    }

    // Toggle sound notifications
    function toggleSound() {
        soundEnabled = !soundEnabled;
        localStorage.setItem('notificationSound', soundEnabled);
        
        const soundToggle = document.getElementById('soundToggle');
        const icon = soundToggle.querySelector('i');
        
        if (soundEnabled) {
            icon.className = 'fas fa-volume-up';
            soundToggle.title = 'Disable sound notifications';
            soundToggle.classList.remove('btn-outline-secondary');
            soundToggle.classList.add('btn-outline-success');
        } else {
            icon.className = 'fas fa-volume-mute';
            soundToggle.title = 'Enable sound notifications';
            soundToggle.classList.remove('btn-outline-success');
            soundToggle.classList.add('btn-outline-secondary');
        }
    }

    // Update profile statistics
    function updateProfileStats() {
        // Get last login time (current session start)
        const sessionStart = sessionStorage.getItem('sessionStart');
        let lastLoginTime = 'Today';
        
        if (sessionStart) {
            const loginDate = new Date(sessionStart);
            const now = new Date();
            const diffInHours = Math.floor((now - loginDate) / (1000 * 60 * 60));
            
            if (diffInHours < 1) {
                lastLoginTime = 'Just now';
            } else if (diffInHours < 24) {
                lastLoginTime = `${diffInHours}h ago`;
            } else {
                const diffInDays = Math.floor(diffInHours / 24);
                lastLoginTime = `${diffInDays}d ago`;
            }
        } else {
            sessionStorage.setItem('sessionStart', new Date().toISOString());
        }
        
        const activeSinceYear = localStorage.getItem('userActiveSince') || new Date().getFullYear();
        const isActive = true;
        const statusText = isActive ? 'Online' : 'Offline';
        const statusColor = isActive ? 'text-success' : 'text-danger';
        const statusIcon = isActive ? 'fas fa-circle text-success' : 'fas fa-circle text-danger';
        
        // Update DOM elements
        document.getElementById('lastLoginTime').textContent = lastLoginTime;
        document.getElementById('activeSinceDate').textContent = activeSinceYear;
        document.getElementById('userStatus').textContent = statusText;
        document.getElementById('userStatus').className = `small fw-semibold ${statusColor}`;
        document.getElementById('statusIcon').className = statusIcon;
        
        if (!localStorage.getItem('userActiveSince')) {
            localStorage.setItem('userActiveSince', new Date().getFullYear());
        }
    }

    // Event listeners
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Initializing admin dashboard...');
        
        // Initialize clock
        setInterval(updateDateTime, 1000);
        updateDateTime();
        
        // Request notification permission
        requestNotificationPermission();
        
        // Initialize Firebase listeners
        const unsubscribe = initializeOrderListener();
        
        // Store unsubscribe function for cleanup
        window.unsubscribeOrderListener = unsubscribe;

        // Set up sound toggle
        const soundToggle = document.getElementById('soundToggle');
        soundToggle.addEventListener('click', toggleSound);
        
        // Initialize sound toggle state
        if (!soundEnabled) {
            soundToggle.querySelector('i').className = 'fas fa-volume-mute';
            soundToggle.title = 'Enable sound notifications';
            soundToggle.classList.add('btn-outline-secondary');
        } else {
            soundToggle.classList.add('btn-outline-success');
        }

        // Mark all as read
        document.getElementById('markAllRead').addEventListener('click', function(e) {
            e.preventDefault();
            notifications.forEach(notification => notification.isNew = false);
            unreadCount = 0;
            updateNotificationBadge();
            renderNotifications();
            
            // Show confirmation
            showAutoRefreshIndicator('All notifications marked as read');
        });

        // Notification click handler
        document.addEventListener('click', function(e) {
            const notificationItem = e.target.closest('.notification-item');
            if (notificationItem) {
                e.preventDefault();
                const notificationId = notificationItem.dataset.notificationId;
                
                if (notificationId) {
                    // Mark as read
                    const notification = notifications.find(n => n.id === notificationId);
                    if (notification && notification.isNew) {
                        notification.isNew = false;
                        unreadCount = Math.max(0, unreadCount - 1);
                        updateNotificationBadge();
                        renderNotifications();
                    }
                    
                    // Navigate to orders page
                    window.location.href = `index.php?page=orders&highlight=${notificationId}`;
                }
            }
        });

        // Profile modal event
        const profileModal = document.getElementById('profileModal');
        profileModal.addEventListener('shown.bs.modal', function () {
            updateProfileStats();
        });

        // Update time ago every minute
        setInterval(() => {
            let updated = false;
            notifications.forEach(notification => {
                const newTimeAgo = timeAgo(notification.timestamp);
                if (newTimeAgo !== notification.timeAgo) {
                    notification.timeAgo = newTimeAgo;
                    updated = true;
                }
            });
            if (updated) {
                renderNotifications();
            }
        }, 5000);

        // Cleanup on page unload
        window.addEventListener('beforeunload', function() {
            if (window.unsubscribeOrderListener) {
                window.unsubscribeOrderListener();
            }
        });

        // Listen for new feedbacks
        const feedbacksQuery = query(
            collection(db, 'feedbacks'),
            orderBy('createdAt', 'desc'),
            limit(10)
        );

        onSnapshot(feedbacksQuery, (snapshot) => {
            snapshot.docChanges().forEach((change) => {
                if (change.type === 'added') {
                    const feedbackData = change.doc.data();
                    const feedbackId = change.doc.id;
                    
                    // Only process recent feedback
                    const feedbackTime = feedbackData.createdAt.toDate();
                    const now = new Date();
                    const timeDiff = (now - feedbackTime) / 1000 / 60; // minutes
                    
                    if (timeDiff < 5) {
                        processNewFeedback(feedbackData, feedbackId);
                    }
                }
            });
        });

    // Process new feedback
    async function processNewFeedback(feedbackData, feedbackId) {
        const userName = await getUserName(feedbackData.userId);
        const notification = {
            id: `feedback_${feedbackId}`,
            type: 'feedback',
            title: 'New Review Posted',
            message: `${userName} left a ${feedbackData.rating}-star review`,
            icon: 'star',
            iconColor: 'text-warning',
            timestamp: feedbackData.createdAt.toDate(),
            timeAgo: timeAgo(feedbackData.createdAt.toDate()),
            isNew: true
        };
        
        notifications.unshift(notification);
        
        if (notifications.length > 50) {
            notifications = notifications.slice(0, 50);
        }
        
        unreadCount++;
        updateNotificationBadge();
        renderNotifications();
        
        // Show browser notification
        if ('Notification' in window && Notification.permission === 'granted') {
            new Notification('New Review Posted', {
                body: notification.message,
                icon: 'public/images/UK PJ Logo.png'
            });
        }
    }
    });
</script>

<script>
// Single logout function to prevent double confirmation
function handleLogout(event) {
    event.preventDefault();
    if (confirm('Are you sure you want to logout?')) {
        // Clean up Firebase listeners
        if (window.unsubscribeOrderListener) {
            window.unsubscribeOrderListener();
        }
        
        if (typeof logout === 'function') {
            logout();
        } else {
            window.location.href = 'logout.php';
        }
    }
}
</script>

</body>
</html>