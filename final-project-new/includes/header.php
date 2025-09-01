
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
            border-radius: 12px;
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
            cursor: pointer;
        }

        .notification-item:hover {
            background-color: #f8f9fa !important;
            transform: translateX(2px);
        }

        .notification-new {
            background-color: #e3f2fd !important;
            border-left: 4px solid #2196f3 !important;
        }

        .notification-read {
            background-color: #fafafa;
            opacity: 0.85;
        }

        .notification-order {
            border-left-color: #28a745 !important;
        }

        .notification-feedback {
            border-left-color: #ffc107 !important;
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
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-2px); }
            20%, 40%, 60%, 80% { transform: translateX(2px); }
        }

        .no-notifications {
            padding: 2rem 1rem;
            text-align: center;
            color: #6c757d;
        }

        .notification-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-bottom: 1px solid #dee2e6;
            border-radius: 12px 12px 0 0;
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
        .status-pending { color: #ffc107; }
        .status-confirmed { color: #17a2b8; }
        .status-preparing { color: #fd7e14; }
        .status-ready { color: #28a745; }
        .status-completed { color: #6c757d; }

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
            padding: 4px 8px;
            border-radius: 12px;
            transition: all 0.2s ease;
        }

        .notification-sound-toggle:hover {
            transform: scale(1.05);
        }

        /* Enhanced notification item styling */
        .notification-item .dropdown-item {
            border-radius: 8px;
            margin: 2px 4px;
            transition: all 0.3s ease;
        }

        .notification-item .dropdown-item:hover {
            background-color: rgba(0, 123, 255, 0.1) !important;
            transform: translateX(3px);
        }

        /* Read notification styling */
        .notification-read .dropdown-item {
            background-color: rgba(248, 249, 250, 0.5) !important;
        }

        .notification-read .notification-icon {
            opacity: 0.6;
        }

        .notification-read .fw-semibold {
            font-weight: normal !important;
        }

        /* Improved badge styling */
        .notification-badge {
            background: linear-gradient(45deg, #dc3545, #c82333) !important;
            box-shadow: 0 2px 4px rgba(220, 53, 69, 0.3);
            font-size: 0.7rem;
            min-width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Loading state */
        .notification-loading {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .notification-loading .spinner-border {
            width: 2rem;
            height: 2rem;
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

            .dropdown-menu {
                width: 350px !important;
                max-width: 90vw !important;
            }
        }

        /* Connection status indicator */
        .connection-status {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 8px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            z-index: 1060;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .connection-status.show {
            opacity: 1;
        }

        .connection-status.online {
            background: #28a745;
            color: white;
        }

        .connection-status.offline {
            background: #dc3545;
            color: white;
        }
    </style>
</head>
<body>

<!-- Auto-refresh indicator -->
<div id="autoRefreshIndicator" class="auto-refresh-indicator">
    <i class="fas fa-sync-alt me-1"></i>
    <span id="refreshText">Checking for new orders...</span>
</div>

<!-- Connection status indicator -->
<div id="connectionStatus" class="connection-status">
    <i class="fas fa-wifi me-1"></i>
    <span>Connected</span>
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
                    <span class="badge notification-badge rounded-pill position-absolute top-0 start-100 translate-middle" 
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
                                <button class="btn btn-sm notification-sound-toggle btn-outline-success" 
                                        id="soundToggle" 
                                        title="Toggle sound notifications">
                                    <i class="fas fa-volume-up"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-primary" 
                                        id="markAllRead" 
                                        style="display: none;"
                                        title="Mark all as read">
                                    <i class="fas fa-check-double me-1"></i>All Read
                                </button>
                            </div>
                        </div>
                    </li>
                    <div id="notificationsList">
                        <li class="notification-loading">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
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
                                     width="180" 
                                     height="180" 
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

    // Notification management with persistent storage
    let notifications = [];
    let unreadCount = 0;
    let processedOrderIds = new Set();
    let processedFeedbackIds = new Set();
    let readNotifications = new Set(); // Track read notifications
    let soundEnabled = localStorage.getItem('notificationSound') !== 'false';
    let lastOrderCheck = new Date();
    let isInitialized = false;

    // Storage keys
    const STORAGE_KEYS = {
        NOTIFICATIONS: 'admin_notifications',
        READ_NOTIFICATIONS: 'admin_read_notifications',
        PROCESSED_ORDERS: 'admin_processed_orders',
        PROCESSED_FEEDBACK: 'admin_processed_feedback',
        SOUND_ENABLED: 'notificationSound'
    };

    // Sound for notifications
    const notificationSound = new Audio('data:audio/wav;base64,UklGRnoGAABXQVZFZm10IAAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwFJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiwGJHfH8N2QQAoUXrTp66hVFApGn+PoxGUrBSV+zPLZfiw=');

    // Load data from localStorage
    function loadStoredData() {
        try {
            // Load notifications
            const storedNotifications = localStorage.getItem(STORAGE_KEYS.NOTIFICATIONS);
            if (storedNotifications) {
                notifications = JSON.parse(storedNotifications);
                // Convert timestamp strings back to Date objects
                notifications.forEach(notification => {
                    if (typeof notification.timestamp === 'string') {
                        notification.timestamp = new Date(notification.timestamp);
                    }
                });
            }

            // Load read notifications
            const storedReadNotifications = localStorage.getItem(STORAGE_KEYS.READ_NOTIFICATIONS);
            if (storedReadNotifications) {
                readNotifications = new Set(JSON.parse(storedReadNotifications));
            }

            // Load processed orders
            const storedProcessedOrders = localStorage.getItem(STORAGE_KEYS.PROCESSED_ORDERS);
            if (storedProcessedOrders) {
                processedOrderIds = new Set(JSON.parse(storedProcessedOrders));
            }

            // Load processed feedback
            const storedProcessedFeedback = localStorage.getItem(STORAGE_KEYS.PROCESSED_FEEDBACK);
            if (storedProcessedFeedback) {
                processedFeedbackIds = new Set(JSON.parse(storedProcessedFeedback));
            }

            // Load sound preference
            soundEnabled = localStorage.getItem(STORAGE_KEYS.SOUND_ENABLED) !== 'false';

            console.log(`Loaded ${notifications.length} notifications, ${readNotifications.size} read notifications`);
        } catch (error) {
            console.error('Error loading stored data:', error);
            // Reset to default values on error
            notifications = [];
            readNotifications = new Set();
            processedOrderIds = new Set();
            processedFeedbackIds = new Set();
        }
    }

    // Save data to localStorage
    function saveStoredData() {
        try {
            // Save notifications
            localStorage.setItem(STORAGE_KEYS.NOTIFICATIONS, JSON.stringify(notifications));
            
            // Save read notifications
            localStorage.setItem(STORAGE_KEYS.READ_NOTIFICATIONS, JSON.stringify([...readNotifications]));
            
            // Save processed orders
            localStorage.setItem(STORAGE_KEYS.PROCESSED_ORDERS, JSON.stringify([...processedOrderIds]));
            
            // Save processed feedback
            localStorage.setItem(STORAGE_KEYS.PROCESSED_FEEDBACK, JSON.stringify([...processedFeedbackIds]));
            
            // Save sound preference
            localStorage.setItem(STORAGE_KEYS.SOUND_ENABLED, soundEnabled);
            
        } catch (error) {
            console.error('Error saving data:', error);
        }
    }

    // Helper function to safely convert string date to Date object
    function parseDate(dateValue) {
        if (!dateValue) return new Date();
        
        try {
            // If it's already a Date object
            if (dateValue instanceof Date) return dateValue;
            
            // If it's a Firestore Timestamp
            if (dateValue && typeof dateValue.toDate === 'function') {
                return dateValue.toDate();
            }
            
            // If it's a string, try to parse it
            if (typeof dateValue === 'string') {
                const parsed = new Date(dateValue);
                return isNaN(parsed.getTime()) ? new Date() : parsed;
            }
            
            // If it's a number (timestamp)
            if (typeof dateValue === 'number') {
                return new Date(dateValue);
            }
            
            // Fallback to current date
            return new Date();
        } catch (error) {
            console.error('Error parsing date:', error);
            return new Date();
        }
    }

    // Real-time clock function
    function updateDateTime() {
        try {
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
            const dateTimeElement = document.getElementById("dateTimeText");
            if (dateTimeElement) {
                dateTimeElement.textContent = now.toLocaleString('en-US', options);
            }
        } catch (error) {
            console.error('Error updating date time:', error);
        }
    }

    // Format time ago
    function timeAgo(date) {
        try {
            const now = new Date();
            const validDate = parseDate(date);
            const diffInMinutes = Math.floor((now - validDate) / 60000);
            
            if (diffInMinutes < 1) return 'Just now';
            if (diffInMinutes < 60) return `${diffInMinutes}m ago`;
            
            const diffInHours = Math.floor(diffInMinutes / 60);
            if (diffInHours < 24) return `${diffInHours}h ago`;
            
            const diffInDays = Math.floor(diffInHours / 24);
            if (diffInDays < 7) return `${diffInDays}d ago`;
            
            return validDate.toLocaleDateString();
        } catch (error) {
            console.error('Error calculating time ago:', error);
            return 'Unknown';
        }
    }

    // Get user name from users collection
    async function getUserName(userId) {
        try {
            if (!userId) return 'Customer';
            
            const userDoc = await getDoc(doc(db, 'users', userId));
            if (userDoc.exists()) {
                const userData = userDoc.data();
                return userData.name || userData.username || userData.firstName || 'Customer';
            }
            return 'Customer';
        } catch (error) {
            console.error('Error fetching user:', error);
            return 'Customer';
        }
    }

    // Get status color class
    function getStatusColorClass(status) {
        const statusColors = {
            'pending': 'text-warning',
            'confirmed': 'text-info',
            'preparing': 'text-primary',
            'ready': 'text-success',
            'completed': 'text-success',
            'cancelled': 'text-danger',
            'delivered': 'text-success'
        };
        return statusColors[status?.toLowerCase()] || 'text-muted';
    }

    // Format currency
    function formatCurrency(amount) {
        try {
            const numAmount = typeof amount === 'string' ? parseFloat(amount) : (amount || 0);
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD'
            }).format(numAmount);
        } catch (error) {
            console.error('Error formatting currency:', error);
            return '$0.00';
        }
    }

    // Play notification sound
    function playNotificationSound() {
        if (soundEnabled) {
            try {
                notificationSound.currentTime = 0;
                notificationSound.play().catch(e => console.log('Sound play failed:', e));
            } catch (error) {
                console.log('Audio not supported:', error);
            }
        }
    }

    // Calculate unread count
    function calculateUnreadCount() {
        unreadCount = notifications.filter(notification => !readNotifications.has(notification.id)).length;
        return unreadCount;
    }

    // Update notification badge
    function updateNotificationBadge() {
        try {
            calculateUnreadCount();
            
            const badge = document.getElementById('notificationBadge');
            const markAllBtn = document.getElementById('markAllRead');
            const totalCount = document.getElementById('totalNotificationCount');
            const bellIcon = document.getElementById('notificationBellIcon');
            
            if (totalCount) totalCount.textContent = notifications.length;
            
            if (unreadCount > 0) {
                if (badge) {
                    badge.textContent = unreadCount > 99 ? '99+' : unreadCount;
                    badge.style.display = 'inline-block';
                    badge.classList.add('notification-badge-animate');
                }
                if (markAllBtn) markAllBtn.style.display = 'block';
                if (bellIcon) {
                    bellIcon.classList.add('notification-bell-shake');
                    
                    // Remove shake animation after it completes
                    setTimeout(() => {
                        bellIcon.classList.remove('notification-bell-shake');
                    }, 600);
                }
            } else {
                if (badge) {
                    badge.style.display = 'none';
                    badge.classList.remove('notification-badge-animate');
                }
                if (markAllBtn) markAllBtn.style.display = 'none';
                if (bellIcon) {
                    bellIcon.classList.remove('notification-bell-shake');
                }
            }
        } catch (error) {
            console.error('Error updating notification badge:', error);
        }
    }

    // Get order items summary
    function getOrderItemsSummary(items) {
        try {
            if (!items || !Array.isArray(items) || items.length === 0) return 'No items';
            
            if (items.length === 1) {
                return items[0].name || items[0].itemName || 'Unknown item';
            }
            if (items.length === 2) {
                const item1 = items[0].name || items[0].itemName || 'Item';
                const item2 = items[1].name || items[1].itemName || 'Item';
                return `${item1}, ${item2}`;
            }
            const firstItem = items[0].name || items[0].itemName || 'Item';
            return `${firstItem} and ${items.length - 1} more items`;
        } catch (error) {
            console.error('Error processing order items:', error);
            return `${items?.length || 0} items`;
        }
    }

    // Render notifications
    function renderNotifications() {
        try {
            const notificationsList = document.getElementById('notificationsList');
            if (!notificationsList) return;
            
            if (notifications.length === 0) {
                notificationsList.innerHTML = `
                    <li class="dropdown-item-text text-center py-4">
                        <div class="text-muted">
                            <i class="fas fa-bell-slash mb-2 fa-2x d-block"></i>
                            <div class="fw-semibold">No notifications</div>
                            <small>New orders will appear here</small>
                        </div>
                    </li>
                `;
                return;
            }

            const notificationHTML = notifications.slice(0, 10).map(notification => {
                const isRead = readNotifications.has(notification.id);
                const readClass = isRead ? 'notification-read' : '';
                const newClass = !isRead ? 'notification-new' : '';
                
                return `
                    <li class="notification-item ${notification.type === 'order' ? 'notification-order' : ''} ${newClass} ${readClass}" 
                        data-notification-id="${notification.id}">
                        <a class="dropdown-item py-3 border-bottom" href="#" style="text-decoration: none;">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="fas fa-${notification.icon} ${notification.iconColor} notification-icon fs-5"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start mb-1">
                                        <div class="${isRead ? 'text-muted' : 'fw-semibold text-dark'}">${notification.title}</div>
                                        ${notification.total ? `<div class="text-success fw-semibold">${notification.total}</div>` : ''}
                                    </div>
                                    <div class="text-muted small mb-1">${notification.message}</div>
                                    ${notification.orderId ? `<div class="text-primary small mb-1 fw-semibold">#${notification.orderId}</div>` : ''}
                                    ${notification.status ? `<div class="small ${getStatusColorClass(notification.status)} fw-semibold text-capitalize">Status: ${notification.status}</div>` : ''}
                                    <div class="text-muted small">${notification.timeAgo}</div>
                                </div>
                                ${!isRead ? '<div class="ms-2"><span class="badge bg-success rounded-pill">New</span></div>' : ''}
                            </div>
                        </a>
                    </li>
                `;
            }).join('');

            if (notifications.length > 10) {
                notificationsList.innerHTML = notificationHTML + `
                    <li class="dropdown-item-text text-center py-2 border-top">
                        <small class="text-muted">Showing 10 of ${notifications.length} notifications</small>
                    </li>
                `;
            } else {
                notificationsList.innerHTML = notificationHTML;
            }
        } catch (error) {
            console.error('Error rendering notifications:', error);
        }
    }

    // Process new order notification
    async function processNewOrder(orderData, orderId) {
        try {
            // Check if we've already processed this order
            if (processedOrderIds.has(orderId)) {
                return;
            }

            console.log('Processing new order:', orderId, orderData);

            const userName = await getUserName(orderData.userId || orderData.customerId);
            const orderTime = parseDate(orderData.createdAt || orderData.timestamp);
            const itemsSummary = getOrderItemsSummary(orderData.items || orderData.orderItems);
            
            // Safely get orderId - use the document ID if orderData.orderId is not available
            const displayOrderId = orderData.orderId || orderData.orderNumber || orderId;
            
            const notification = {
                id: orderId,
                type: 'order',
                title: 'New Order Received',
                message: `From ${userName} • ${itemsSummary}`,
                icon: 'shopping-cart',
                iconColor: 'text-success',
                timestamp: orderTime,
                timeAgo: timeAgo(orderTime),
                total: formatCurrency(orderData.total || orderData.totalAmount || orderData.amount),
                orderId: displayOrderId.toString().substring(0, 8).toUpperCase(),
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
            
            // Save to localStorage
            saveStoredData();
            
            // Update UI
            updateNotificationBadge();
            renderNotifications();
            
            // Play sound
            playNotificationSound();
            
            // Show browser notification if supported
            if ('Notification' in window && Notification.permission === 'granted') {
                new Notification('New Order Received!', {
                    body: `Order #${notification.orderId} from ${userName} - ${notification.total}`,
                    icon: '/favicon.ico',
                    badge: '/favicon.ico',
                    tag: orderId,
                    requireInteraction: false
                });
            }
            
            console.log('New order notification processed successfully:', orderId);
            
        } catch (error) {
            console.error('Error processing new order notification:', error);
        }
    }

    // Initialize real-time order listener
    function initializeOrderListener() {
        try {
            console.log('Initializing order listener...');
            
            // Create query for recent orders
            const ordersQuery = query(
                collection(db, 'orders'),
                orderBy('createdAt', 'desc'),
                limit(30)
            );

            // Set up real-time listener
            const unsubscribe = onSnapshot(ordersQuery, (snapshot) => {
                try {
                    let newOrdersCount = 0;
                    
                    snapshot.docChanges().forEach((change) => {
                        const orderData = change.doc.data();
                        const orderId = change.doc.id;
                        
                        if (change.type === 'added') {
                            // Check if this is a genuinely new order (created in last 5 minutes)
                            if (orderData.createdAt) {
                                const orderTime = parseDate(orderData.createdAt);
                                const now = new Date();
                                const timeDiffMinutes = (now - orderTime) / (1000 * 60);
                                
                                // Only process very recent orders and those we haven't seen before
                                if (timeDiffMinutes < 5 && !processedOrderIds.has(orderId)) {
                                    processNewOrder(orderData, orderId);
                                    newOrdersCount++;
                                } else if (!processedOrderIds.has(orderId)) {
                                    // Add older orders to processed list without notification
                                    processedOrderIds.add(orderId);
                                    saveStoredData();
                                }
                            } else if (!processedOrderIds.has(orderId)) {
                                // Handle orders without createdAt timestamp
                                processedOrderIds.add(orderId);
                                saveStoredData();
                            }
                        }
                        
                        // Handle order updates (status changes, etc.)
                        if (change.type === 'modified') {
                            const existingNotification = notifications.find(n => n.id === orderId);
                            if (existingNotification) {
                                existingNotification.status = orderData.status || 'pending';
                                existingNotification.timeAgo = timeAgo(existingNotification.timestamp);
                                saveStoredData();
                                renderNotifications();
                            }
                        }
                    });
                    
                    if (newOrdersCount > 0) {
                        console.log(`Processed ${newOrdersCount} new orders`);
                    }
                } catch (error) {
                    console.error('Error processing snapshot changes:', error);
                }
                
            }, (error) => {
                console.error('Error in order listener:', error);
                showConnectionStatus(false);
                
                // Retry connection after 5 seconds
                setTimeout(() => {
                    console.log('Retrying order listener connection...');
                    initializeOrderListener();
                }, 5000);
            });

            // Don't show connection status on initial load
            return unsubscribe;
            
        } catch (error) {
            console.error('Error initializing order listener:', error);
            showConnectionStatus(false);
            return null;
        }
    }

    // Request notification permission
    function requestNotificationPermission() {
        if ('Notification' in window) {
            if (Notification.permission === 'default') {
                Notification.requestPermission().then(permission => {
                    if (permission === 'granted') {
                        console.log('Notification permission granted');
                        
                        // Show test notification
                        new Notification('Notifications Enabled', {
                            body: 'You will now receive order notifications',
                            icon: '/favicon.ico'
                        });
                    }
                }).catch(error => {
                    console.error('Error requesting notification permission:', error);
                });
            }
        }
    }

    // Show connection status
    function showConnectionStatus(isOnline) {
        try {
            const statusElement = document.getElementById('connectionStatus');
            if (!statusElement) return;
            
            statusElement.className = `connection-status ${isOnline ? 'online' : 'offline'} show`;
            statusElement.innerHTML = `
                <i class="fas fa-${isOnline ? 'wifi' : 'exclamation-triangle'} me-1"></i>
                <span>${isOnline ? 'Connected' : 'Connection Lost'}</span>
            `;
            
            // Hide after 3 seconds if online, keep visible if offline
            if (isOnline) {
                setTimeout(() => {
                    statusElement.classList.remove('show');
                }, 3000);
            }
        } catch (error) {
            console.error('Error showing connection status:', error);
        }
    }

    // Toggle sound notifications
    function toggleSound() {
        try {
            soundEnabled = !soundEnabled;
            saveStoredData();
            
            const soundToggle = document.getElementById('soundToggle');
            if (!soundToggle) return;
            
            const icon = soundToggle.querySelector('i');
            
            if (soundEnabled) {
                if (icon) icon.className = 'fas fa-volume-up';
                soundToggle.title = 'Disable sound notifications';
                soundToggle.classList.remove('btn-outline-secondary');
                soundToggle.classList.add('btn-outline-success');
                
                // Play test sound
                playNotificationSound();
            } else {
                if (icon) icon.className = 'fas fa-volume-mute';
                soundToggle.title = 'Enable sound notifications';
                soundToggle.classList.remove('btn-outline-success');
                soundToggle.classList.add('btn-outline-secondary');
            }
        } catch (error) {
            console.error('Error toggling sound:', error);
        }
    }

    // Update profile statistics
    function updateProfileStats() {
        try {
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
            
            // Update DOM elements with null checks
            const lastLoginElement = document.getElementById('lastLoginTime');
            const activeSinceElement = document.getElementById('activeSinceDate');
            const userStatusElement = document.getElementById('userStatus');
            const statusIconElement = document.getElementById('statusIcon');
            
            if (lastLoginElement) lastLoginElement.textContent = lastLoginTime;
            if (activeSinceElement) activeSinceElement.textContent = activeSinceYear;
            if (userStatusElement) {
                userStatusElement.textContent = statusText;
                userStatusElement.className = `small fw-semibold ${statusColor}`;
            }
            if (statusIconElement) statusIconElement.className = statusIcon;
            
            if (!localStorage.getItem('userActiveSince')) {
                localStorage.setItem('userActiveSince', new Date().getFullYear());
            }
        } catch (error) {
            console.error('Error updating profile stats:', error);
        }
    }

    // Process new feedback
    async function processNewFeedback(feedbackData, feedbackId) {
        try {
            // Check if we've already processed this feedback
            if (processedFeedbackIds.has(feedbackId)) {
                return;
            }

            const userName = await getUserName(feedbackData.userId || feedbackData.customerId);
            const feedbackTime = parseDate(feedbackData.createdAt || feedbackData.timestamp);
            
            const notification = {
                id: `feedback_${feedbackId}`,
                type: 'feedback',
                title: 'New Review Posted',
                message: `${userName} left a ${feedbackData.rating || 'N/A'}-star review`,
                icon: 'star',
                iconColor: 'text-warning',
                timestamp: feedbackTime,
                timeAgo: timeAgo(feedbackTime)
            };
            
            notifications.unshift(notification);
            
            if (notifications.length > 50) {
                notifications = notifications.slice(0, 50);
            }
            
            processedFeedbackIds.add(feedbackId);
            saveStoredData();
            updateNotificationBadge();
            renderNotifications();
            
            // Show browser notification
            if ('Notification' in window && Notification.permission === 'granted') {
                new Notification('New Review Posted', {
                    body: notification.message,
                    icon: '/favicon.ico'
                });
            }
        } catch (error) {
            console.error('Error processing new feedback notification:', error);
        }
    }

    // Initialize feedback listener
    function initializeFeedbackListener() {
        try {
            const feedbacksQuery = query(
                collection(db, 'feedbacks'),
                orderBy('createdAt', 'desc'),
                limit(20)
            );

            onSnapshot(feedbacksQuery, (snapshot) => {
                snapshot.docChanges().forEach((change) => {
                    if (change.type === 'added') {
                        const feedbackData = change.doc.data();
                        const feedbackId = change.doc.id;
                        
                        // Only process recent feedback (last 5 minutes)
                        const feedbackTime = parseDate(feedbackData.createdAt);
                        const now = new Date();
                        const timeDiff = (now - feedbackTime) / 1000 / 60; // minutes
                        
                        if (timeDiff < 5 && !processedFeedbackIds.has(feedbackId)) {
                            processNewFeedback(feedbackData, feedbackId);
                        } else if (!processedFeedbackIds.has(feedbackId)) {
                            processedFeedbackIds.add(feedbackId);
                            saveStoredData();
                        }
                    }
                });
            }, (error) => {
                console.error('Error in feedback listener:', error);
            });
        } catch (error) {
            console.error('Error setting up feedback listener:', error);
        }
    }

    // Mark notification as read
    function markNotificationAsRead(notificationId) {
        try {
            if (!readNotifications.has(notificationId)) {
                readNotifications.add(notificationId);
                saveStoredData();
                updateNotificationBadge();
                renderNotifications();
                console.log('Notification marked as read:', notificationId);
                return true;
            }
            return false;
        } catch (error) {
            console.error('Error marking notification as read:', error);
            return false;
        }
    }

    // Mark all notifications as read
    function markAllNotificationsAsRead() {
        try {
            notifications.forEach(notification => {
                readNotifications.add(notification.id);
            });
            saveStoredData();
            updateNotificationBadge();
            renderNotifications();
            console.log('All notifications marked as read');
        } catch (error) {
            console.error('Error marking all notifications as read:', error);
        }
    }

    // Clear all notifications
    function clearAllNotifications() {
        try {
            notifications = [];
            readNotifications.clear();
            saveStoredData();
            updateNotificationBadge();
            renderNotifications();
            console.log('All notifications cleared');
        } catch (error) {
            console.error('Error clearing notifications:', error);
        }
    }

    // Event listeners
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Initializing admin dashboard...');
        
        try {
            // Load stored data first
            loadStoredData();
            
            // Initialize clock
            setInterval(updateDateTime, 1000);
            updateDateTime();
            
            // Request notification permission
            requestNotificationPermission();
            
            // Initialize Firebase listeners
            const orderUnsubscribe = initializeOrderListener();
            const feedbackUnsubscribe = initializeFeedbackListener();
            
            // Store unsubscribe functions for cleanup
            window.unsubscribeOrderListener = orderUnsubscribe;
            window.unsubscribeFeedbackListener = feedbackUnsubscribe;

            // Set up sound toggle
            const soundToggle = document.getElementById('soundToggle');
            if (soundToggle) {
                soundToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    toggleSound();
                });
                
                // Initialize sound toggle state
                if (!soundEnabled) {
                    const icon = soundToggle.querySelector('i');
                    if (icon) icon.className = 'fas fa-volume-mute';
                    soundToggle.title = 'Enable sound notifications';
                    soundToggle.classList.add('btn-outline-secondary');
                    soundToggle.classList.remove('btn-outline-success');
                } else {
                    const icon = soundToggle.querySelector('i');
                    if (icon) icon.className = 'fas fa-volume-up';
                    soundToggle.title = 'Disable sound notifications';
                    soundToggle.classList.add('btn-outline-success');
                    soundToggle.classList.remove('btn-outline-secondary');
                }
            }

            // Mark all as read button
            const markAllBtn = document.getElementById('markAllRead');
            if (markAllBtn) {
                markAllBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    markAllNotificationsAsRead();
                });
            }

            // Notification click handler
            document.addEventListener('click', function(e) {
                const notificationItem = e.target.closest('.notification-item');
                if (notificationItem) {
                    e.preventDefault();
                    const notificationId = notificationItem.dataset.notificationId;
                    
                    if (notificationId) {
                        // Mark as read
                        markNotificationAsRead(notificationId);
                        
                        // Navigate based on notification type
                        const notification = notifications.find(n => n.id === notificationId);
                        if (notification) {
                            if (notification.type === 'order') {
                                window.location.href = `index.php?page=orders&highlight=${notificationId}`;
                            } else if (notification.type === 'feedback') {
                                window.location.href = `index.php?page=reviews&highlight=${notificationId}`;
                            }
                        }
                    }
                }
            });

            // Profile modal event
            const profileModal = document.getElementById('profileModal');
            if (profileModal) {
                profileModal.addEventListener('shown.bs.modal', function () {
                    updateProfileStats();
                });
            }

            // Initial render
            updateNotificationBadge();
            renderNotifications();

            // Update time ago every 30 seconds
            setInterval(() => {
                try {
                    let updated = false;
                    notifications.forEach(notification => {
                        const newTimeAgo = timeAgo(notification.timestamp);
                        if (newTimeAgo !== notification.timeAgo) {
                            notification.timeAgo = newTimeAgo;
                            updated = true;
                        }
                    });
                    if (updated) {
                        saveStoredData();
                        renderNotifications();
                    }
                } catch (error) {
                    console.error('Error updating time ago:', error);
                }
            }, 30000);

            // Connection status handlers
            window.addEventListener('online', function() {
                console.log('Connection restored');
                showConnectionStatus(true);
                // Reinitialize listeners if needed
                if (!window.unsubscribeOrderListener) {
                    window.unsubscribeOrderListener = initializeOrderListener();
                }
            });

            window.addEventListener('offline', function() {
                console.log('Connection lost');
                showConnectionStatus(false);
            });

            // Cleanup on page unload
            window.addEventListener('beforeunload', function() {
                try {
                    if (window.unsubscribeOrderListener) {
                        window.unsubscribeOrderListener();
                    }
                    if (window.unsubscribeFeedbackListener) {
                        window.unsubscribeFeedbackListener();
                    }
                } catch (error) {
                    console.error('Error during cleanup:', error);
                }
            });

            // Handle page visibility change (pause/resume listeners when tab is hidden/shown)
            document.addEventListener('visibilitychange', function() {
                try {
                    if (document.hidden) {
                        console.log('Page hidden - notifications will continue in background');
                    } else {
                        console.log('Page visible - refreshing notifications');
                        renderNotifications();
                        updateNotificationBadge();
                    }
                } catch (error) {
                    console.error('Error handling visibility change:', error);
                }
            });

            // Clean up old notifications (older than 7 days)
            const cleanupOldNotifications = () => {
                try {
                    const sevenDaysAgo = new Date();
                    sevenDaysAgo.setDate(sevenDaysAgo.getDate() - 7);
                    
                    const beforeCount = notifications.length;
                    notifications = notifications.filter(notification => {
                        const notificationDate = parseDate(notification.timestamp);
                        return notificationDate > sevenDaysAgo;
                    });
                    
                    if (notifications.length !== beforeCount) {
                        console.log(`Cleaned up ${beforeCount - notifications.length} old notifications`);
                        saveStoredData();
                        updateNotificationBadge();
                        renderNotifications();
                    }
                } catch (error) {
                    console.error('Error cleaning up old notifications:', error);
                }
            };

            // Run cleanup on initialization and then every hour
            cleanupOldNotifications();
            setInterval(cleanupOldNotifications, 60 * 60 * 1000);

            // Mark as initialized
            isInitialized = true;
            console.log('Admin dashboard initialized successfully');
            
        } catch (error) {
            console.error('Error initializing dashboard:', error);
        }
    });

    // Global functions for external access
    window.adminNotifications = {
        toggleSound: toggleSound,
        updateNotificationBadge: updateNotificationBadge,
        renderNotifications: renderNotifications,
        markNotificationAsRead: markNotificationAsRead,
        markAllNotificationsAsRead: markAllNotificationsAsRead,
        clearAllNotifications: clearAllNotifications,
        playNotificationSound: playNotificationSound,
        getNotificationCount: () => notifications.length,
        getUnreadCount: () => calculateUnreadCount(),
        getNotifications: () => notifications.slice(),
        loadStoredData: loadStoredData,
        saveStoredData: saveStoredData
    };

    // Expose key functions globally for debugging
    window.debugNotifications = {
        notifications: () => notifications,
        readNotifications: () => Array.from(readNotifications),
        processedOrderIds: () => Array.from(processedOrderIds),
        processedFeedbackIds: () => Array.from(processedFeedbackIds),
        unreadCount: () => calculateUnreadCount(),
        soundEnabled: () => soundEnabled,
        isInitialized: () => isInitialized,
        clearStorage: () => {
            Object.values(STORAGE_KEYS).forEach(key => localStorage.removeItem(key));
            console.log('All notification storage cleared');
        },
        testNotification: () => {
            const testNotification = {
                id: 'test_' + Date.now(),
                type: 'order',
                title: 'Test Notification',
                message: 'This is a test notification',
                icon: 'bell',
                iconColor: 'text-primary',
                timestamp: new Date(),
                timeAgo: 'Just now',
                total: '$25.99',
                orderId: 'TEST123',
                status: 'pending'
            };
            notifications.unshift(testNotification);
            saveStoredData();
            updateNotificationBadge();
            renderNotifications();
            playNotificationSound();
            console.log('Test notification added');
        }
    };

</script>

<script>
// Single logout function to prevent double confirmation
function handleLogout(event) {
    try {
        event.preventDefault();
        if (confirm('Are you sure you want to logout?')) {
            // Clean up Firebase listeners
            if (window.unsubscribeOrderListener) {
                window.unsubscribeOrderListener();
            }
            if (window.unsubscribeFeedbackListener) {
                window.unsubscribeFeedbackListener();
            }
            
            // Clear session data
            sessionStorage.clear();
            
            // Redirect to logout
            if (typeof logout === 'function') {
                logout();
            } else {
                window.location.href = 'logout.php';
            }
        }
    } catch (error) {
        console.error('Error during logout:', error);
        window.location.href = 'logout.php';
    }
}

// Additional utility functions
function refreshDashboard() {
    try {
        console.log('Refreshing dashboard...');
        if (window.adminNotifications) {
            window.adminNotifications.renderNotifications();
            window.adminNotifications.updateNotificationBadge();
        }
        
        // Refresh any charts or data if needed
        if (typeof refreshCharts === 'function') {
            refreshCharts();
        }
        
        console.log('Dashboard refreshed');
    } catch (error) {
        console.error('Error refreshing dashboard:', error);
    }
}

// Auto-refresh dashboard every 5 minutes
setInterval(refreshDashboard, 5 * 60 * 1000);

// Performance monitoring
if ('performance' in window) {
    window.addEventListener('load', function() {
        setTimeout(function() {
            const perfData = performance.getEntriesByType('navigation')[0];
            if (perfData) {
                console.log('Page load time:', perfData.loadEventEnd - perfData.loadEventStart, 'ms');
            }
        }, 0);
    });
}

// Error handler for uncaught errors
window.addEventListener('error', function(event) {
    console.error('Global error caught:', event.error);
    
    // Try to maintain notification functionality even if other parts fail
    try {
        if (window.adminNotifications) {
            window.adminNotifications.renderNotifications();
        }
    } catch (e) {
        console.error('Could not recover notifications:', e);
    }
});

// Storage quota management
function checkStorageQuota() {
    try {
        if ('storage' in navigator && 'estimate' in navigator.storage) {
            navigator.storage.estimate().then(quota => {
                const usedPercentage = (quota.usage / quota.quota) * 100;
                if (usedPercentage > 80) {
                    console.warn(`Storage usage high: ${usedPercentage.toFixed(1)}%`);
                    // Clean up old notifications if storage is getting full
                    if (window.debugNotifications) {
                        const notifications = window.debugNotifications.notifications();
                        if (notifications.length > 20) {
                            // Keep only the 20 most recent notifications
                            const recentNotifications = notifications.slice(0, 20);
                            localStorage.setItem('admin_notifications', JSON.stringify(recentNotifications));
                            console.log('Cleaned up old notifications due to storage constraints');
                        }
                    }
                }
            }).catch(error => {
                console.error('Error checking storage quota:', error);
            });
        }
    } catch (error) {
        console.error('Storage quota check failed:', error);
    }
}

// Check storage quota periodically
setInterval(checkStorageQuota, 10 * 60 * 1000); // Every 10 minutes

// Initialize storage check
setTimeout(checkStorageQuota, 5000);
</script>

</body>
</html>