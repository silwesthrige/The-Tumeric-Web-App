// Authentication helper functions

// Logout function
async function logout() {
    try {
        const response = await fetch('auth_handler.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                action: 'logout'
            })
        });

        const data = await response.json();
        
        if (data.success) {
            // Redirect to login page
            window.location.href = 'login.php';
        } else {
            console.error('Logout failed:', data.message);
            // Fallback: redirect to logout.php
            window.location.href = 'logout.php';
        }
    } catch (error) {
        console.error('Error during logout:', error);
        // Fallback: redirect to logout.php
        window.location.href = 'logout.php';
    }
}

// Check if user has access to a specific page
function hasAccess(page) {
    if (window.allowedPages && Array.isArray(window.allowedPages)) {
        return window.allowedPages.includes(page);
    }
    return false;
}

// Redirect with access denied message
function redirectWithAccessDenied() {
    window.location.href = 'index.php?page=dashboard&error=access_denied';
}

// Check user role
function getUserRole() {
    return window.userRole || 'guest';
}

// Check if user is admin
function isAdmin() {
    return getUserRole() === 'admin';
}

// Check if user is cashier
function isCashier() {
    return getUserRole() === 'cashier';
}

// Initialize role-based UI
function initRoleBasedUI() {
    const userRole = getUserRole();
    
    // Add role class to body for CSS targeting
    document.body.classList.add(`role-${userRole}`);
    
    // Show/hide elements based on role
    if (userRole === 'cashier') {
        // Hide admin-only elements
        const adminOnlyElements = document.querySelectorAll('.admin-only');
        adminOnlyElements.forEach(element => {
            element.style.display = 'none';
        });
    }
}

// Auto-initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initRoleBasedUI();
    
    // Add logout event listeners
    const logoutButtons = document.querySelectorAll('.logout-btn');
    logoutButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Show confirmation dialog
            if (confirm('Are you sure you want to logout?')) {
                logout();
            }
        });
    });
});

// Session timeout warning (optional)
let sessionTimeout;
let warningTimeout;

function resetSessionTimer() {
    clearTimeout(sessionTimeout);
    clearTimeout(warningTimeout);
    
    // Warn user 5 minutes before session expires (25 minutes)
    warningTimeout = setTimeout(() => {
        if (confirm('Your session will expire in 5 minutes. Do you want to continue working?')) {
            // User wants to continue, reset timer
            resetSessionTimer();
        }
    }, 25 * 60 * 1000); // 25 minutes
    
    // Auto logout after 30 minutes of inactivity
    sessionTimeout = setTimeout(() => {
        alert('Your session has expired. You will be redirected to the login page.');
        logout();
    }, 30 * 60 * 1000); // 30 minutes
}

// Reset timer on user activity
document.addEventListener('mousemove', resetSessionTimer);
document.addEventListener('keypress', resetSessionTimer);
document.addEventListener('click', resetSessionTimer);
document.addEventListener('scroll', resetSessionTimer);

// Initialize session timer
resetSessionTimer();