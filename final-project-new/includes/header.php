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

        /* Notification styles */
        .notification-item {
            transition: background-color 0.2s ease;
        }

        .notification-item:hover {
            background-color: #f8f9fa;
        }

        .notification-new {
            background-color: #e3f2fd;
            border-left: 3px solid #2196f3;
        }

        .notification-time {
            font-size: 0.75rem;
            color: #6c757d;
        }

        .notification-badge-animate {
            animation: pulse 2s infinite;
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

        .no-notifications {
            padding: 2rem 1rem;
            text-align: center;
            color: #6c757d;
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
                    <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle" id="notificationBadge" style="display: none;">0</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notifDropdown" style="width: 350px;">
                    <li>
                        <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                            <h6 class="mb-0"><i class="fas fa-bell me-2"></i>Notifications</h6>
                            <button class="btn btn-sm btn-outline-primary" id="markAllRead" style="display: none;">
                                <i class="fas fa-check-double me-1"></i>Mark All Read
                            </button>
                        </div>
                    </li>
                    <div id="notificationsList">
                        <li class="no-notifications">
                            <i class="fas fa-bell-slash mb-2 text-muted"></i>
                            <div>No notifications</div>
                        </li>
                    </div>
                    <li class="border-top">
                        <a class="dropdown-item text-primary text-center" href="#" id="viewAllNotifications">
                            <i class="fas fa-eye me-2"></i>View all notifications
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
        return `${diffInDays}d ago`;
    }

    // Get user name from users collection
    async function getUserName(userId) {
        try {
            const userDoc = await getDoc(doc(db, 'users', userId));
            return userDoc.exists() ? userDoc.data().name || 'Unknown User' : 'Unknown User';
        } catch (error) {
            console.error('Error fetching user:', error);
            return 'Unknown User';
        }
    }

    // Update notification badge
    function updateNotificationBadge() {
        const badge = document.getElementById('notificationBadge');
        const markAllBtn = document.getElementById('markAllRead');
        
        if (unreadCount > 0) {
            badge.textContent = unreadCount > 99 ? '99+' : unreadCount;
            badge.style.display = 'block';
            badge.classList.add('notification-badge-animate');
            markAllBtn.style.display = 'block';
        } else {
            badge.style.display = 'none';
            badge.classList.remove('notification-badge-animate');
            markAllBtn.style.display = 'none';
        }
    }

    // Render notifications
    function renderNotifications() {
        const notificationsList = document.getElementById('notificationsList');
        
        if (notifications.length === 0) {
            notificationsList.innerHTML = `
                <li class="no-notifications">
                    <i class="fas fa-bell-slash mb-2 text-muted"></i>
                    <div>No notifications</div>
                </li>
            `;
            return;
        }

        const notificationHTML = notifications.map(notification => `
            <li class="notification-item ${notification.isNew ? 'notification-new' : ''}">
                <a class="dropdown-item py-3" href="#" data-notification-id="${notification.id}">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="fas fa-${notification.icon} ${notification.iconColor}"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">${notification.title}</div>
                            <div class="text-muted small">${notification.message}</div>
                            <div class="notification-time">${notification.timeAgo}</div>
                        </div>
                        ${notification.isNew ? '<div class="ms-2"><span class="badge bg-primary rounded-pill">New</span></div>' : ''}
                    </div>
                </a>
            </li>
        `).join('');

        notificationsList.innerHTML = notificationHTML;
    }

    // Process new order
    async function processNewOrder(orderData, orderId) {
        const userName = await getUserName(orderData.userId);
        const notification = {
            id: `order_${orderId}`,
            type: 'order',
            title: 'New Order Received',
            message: `Order #${orderId.substring(0, 8)} from ${userName} - $${orderData.total}`,
            icon: 'shopping-cart',
            iconColor: 'text-success',
            timestamp: orderData.createdAt.toDate(),
            timeAgo: timeAgo(orderData.createdAt.toDate()),
            isNew: true
        };
        
        // Add to beginning of notifications array
        notifications.unshift(notification);
        
        // Keep only last 50 notifications
        if (notifications.length > 50) {
            notifications = notifications.slice(0, 50);
        }
        
        unreadCount++;
        updateNotificationBadge();
        renderNotifications();
        
        // Show browser notification if supported
        if ('Notification' in window && Notification.permission === 'granted') {
            new Notification('New Order Received', {
                body: notification.message,
                icon: 'public/images/UK PJ Logo.png'
            });
        }
    }

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

    // Initialize real-time listeners
    function initializeNotificationListeners() {
        // Listen for new orders
        const ordersQuery = query(
            collection(db, 'orders'),
            orderBy('createdAt', 'desc'),
            limit(10)
        );

        onSnapshot(ordersQuery, (snapshot) => {
            snapshot.docChanges().forEach((change) => {
                if (change.type === 'added') {
                    const orderData = change.doc.data();
                    const orderId = change.doc.id;
                    
                    // Only process if it's a recent order (within last 5 minutes)
                    const orderTime = orderData.createdAt.toDate();
                    const now = new Date();
                    const timeDiff = (now - orderTime) / 1000 / 60; // minutes
                    
                    if (timeDiff < 5) {
                        processNewOrder(orderData, orderId);
                    }
                }
            });
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
    }

    // Request notification permission
    function requestNotificationPermission() {
        if ('Notification' in window && Notification.permission === 'default') {
            Notification.requestPermission();
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
            // Set session start if not exists
            sessionStorage.setItem('sessionStart', new Date().toISOString());
        }
        
        // Get active since date (simulate from user creation or default to this year)
        const activeSinceYear = localStorage.getItem('userActiveSince') || new Date().getFullYear();
        const activeSinceDate = activeSinceYear;
        
        // Set user status based on activity (simulate online status)
        const isActive = true; // Since they're currently logged in
        const statusText = isActive ? 'Online' : 'Offline';
        const statusColor = isActive ? 'text-success' : 'text-danger';
        const statusIcon = isActive ? 'fas fa-circle text-success' : 'fas fa-circle text-danger';
        
        // Update the DOM elements
        document.getElementById('lastLoginTime').textContent = lastLoginTime;
        document.getElementById('activeSinceDate').textContent = activeSinceDate;
        document.getElementById('userStatus').textContent = statusText;
        document.getElementById('userStatus').className = `small fw-semibold ${statusColor}`;
        document.getElementById('statusIcon').className = statusIcon;
        
        // Store active since year if not exists
        if (!localStorage.getItem('userActiveSince')) {
            localStorage.setItem('userActiveSince', new Date().getFullYear());
        }
    }

    // Event listeners
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize clock
        setInterval(updateDateTime, 1000);
        updateDateTime();
        
        // Request notification permission
        requestNotificationPermission();
        
        // Initialize Firebase listeners
        initializeNotificationListeners();

        // Mark all as read
        document.getElementById('markAllRead').addEventListener('click', function() {
            notifications.forEach(notification => notification.isNew = false);
            unreadCount = 0;
            updateNotificationBadge();
            renderNotifications();
        });

        // Notification click handler
        document.addEventListener('click', function(e) {
            if (e.target.closest('.notification-item')) {
                const notificationId = e.target.closest('[data-notification-id]')?.dataset.notificationId;
                if (notificationId) {
                    // Find and mark as read
                    const notification = notifications.find(n => n.id === notificationId);
                    if (notification && notification.isNew) {
                        notification.isNew = false;
                        unreadCount--;
                        updateNotificationBadge();
                        renderNotifications();
                    }
                    
                    // Handle navigation based on notification type
                    if (notification.type === 'order') {
                        window.location.href = 'index.php?page=orders';
                    } else if (notification.type === 'feedback') {
                        window.location.href = 'index.php?page=reviews';
                    }
                }
            }
        });

        // Sidebar toggle functionality
        document.getElementById('sidebarCollapse')?.addEventListener('click', function() {
            console.log('Sidebar toggle clicked');
        });

        // Profile modal event
        const profileModal = document.getElementById('profileModal');
        profileModal.addEventListener('shown.bs.modal', function () {
            console.log('Profile modal opened');
            updateProfileStats();
        });

        // Update time ago every minute
        setInterval(() => {
            notifications.forEach(notification => {
                notification.timeAgo = timeAgo(notification.timestamp);
            });
            renderNotifications();
        }, 60000);
    });
</script>

<script>
// Single logout function to prevent double confirmation
function handleLogout(event) {
    event.preventDefault();
    if (confirm('Are you sure you want to logout?')) {
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