<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

// Get current page from URL parameter
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Define all available pages
$all_pages = ['dashboard', 'orders', 'kitchen', 'menu', 'customers', 'analytics', 'promotions', 'reviews', 'reports', 'staff', 'settings'];

// Define role-based access control
$user_role = $_SESSION['user_role'] ?? 'guest';

if ($user_role === 'admin') {
    // Admin has access to all pages
    $allowed_pages = $all_pages;
} elseif ($user_role === 'cashier') {
    // Cashier has access to limited pages
    $allowed_pages = ['dashboard', 'orders', 'reviews'];
} else {
    // Default: only dashboard access
    $allowed_pages = ['dashboard'];
}

// Check if requested page is allowed for current user role
if (!in_array($page, $allowed_pages)) {
    // Redirect to dashboard if trying to access unauthorized page
    header('Location: index.php?page=dashboard&error=access_denied');
    exit();
}

// If page doesn't exist, default to dashboard
if (!in_array($page, $all_pages)) {
    $page = 'dashboard';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Admin Dashboard - The Turmeric</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/admin.css" rel="stylesheet">
    <style>
        .access-denied-alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>
                
        <!-- Main Content -->
        <div id="content">
            <!-- Top Navigation -->
            <?php include 'includes/header.php'; ?>
                        
            <!-- Page Content -->
            <div class="container-fluid p-4">
                <?php
                // Show access denied message if present in URL
                if (isset($_GET['error']) && $_GET['error'] === 'access_denied') {
                    echo '<div class="alert alert-warning access-denied-alert" role="alert">';
                    echo '<i class="fas fa-exclamation-triangle me-2"></i>';
                    echo 'Access denied. You do not have permission to view that page.';
                    echo '</div>';
                }
                
                // Include the requested page
                $page_file = "pages/{$page}.php";
                if (file_exists($page_file)) {
                    include $page_file;
                } else {
                    include 'pages/dashboard.php';
                }
                ?>
            </div>
                        
            <!-- Footer -->
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/admin.js"></script>
    
    <!-- Role-based UI Script -->
    <script>
        // Pass user role to JavaScript for client-side UI adjustments
        window.userRole = '<?php echo $user_role; ?>';
        window.allowedPages = <?php echo json_encode($allowed_pages); ?>;
        
        // Hide navigation items that user doesn't have access to
        document.addEventListener('DOMContentLoaded', function() {
            if (window.userRole === 'cashier') {
                // Hide menu items that cashiers shouldn't see
                const restrictedItems = ['kitchen', 'menu', 'customers', 'analytics', 'promotions', 'reports', 'staff', 'settings'];
                
                restrictedItems.forEach(item => {
                    const menuItem = document.querySelector(`[href*="page=${item}"]`);
                    if (menuItem) {
                        const listItem = menuItem.closest('li');
                        if (listItem) {
                            listItem.style.display = 'none';
                        }
                    }
                });
            }
        });
    </script>
    <script src="assets/js/auth.js"></script>
</body>
</html>