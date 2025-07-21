// Admin Dashboard JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Sidebar toggle functionality
    const sidebarToggle = document.getElementById('sidebarCollapse');
    const sidebar = document.getElementById('sidebar');
    
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
    }

    // Active menu highlighting
    const currentPage = new URLSearchParams(window.location.search).get('page') || 'dashboard';
    const menuLinks = document.querySelectorAll('#sidebar ul li a');
    
    menuLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href && href.includes(`page=${currentPage}`)) {
            link.classList.add('active');
        }
    });

    // Auto-refresh for real-time data (every 30 seconds)
    setInterval(function() {
        updateDashboardStats();
    }, 30000);

    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
});

// Update dashboard statistics
function updateDashboardStats() {
    // Simulate real-time updates
    const statsElements = document.querySelectorAll('.stats-number');
    statsElements.forEach(element => {
        const currentValue = parseInt(element.textContent);
        const change = Math.floor(Math.random() * 10) - 5; // Random change between -5 and +5
        const newValue = Math.max(0, currentValue + change);
        
        if (change !== 0) {
            element.style.transition = 'all 0.3s ease';
            element.textContent = newValue;
            
            // Add visual feedback for changes
            if (change > 0) {
                element.style.color = '#28a745';
            } else {
                element.style.color = '#dc3545';
            }
            
            setTimeout(() => {
                element.style.color = '';
            }, 1000);
        }
    });
}

// Order status update
function updateOrderStatus(orderId, status) {
    // Simulate API call
    const button = event.target;
    const originalText = button.textContent;
    
    button.innerHTML = '<span class="loading"></span> Updating...';
    button.disabled = true;
    
    setTimeout(() => {
        button.textContent = originalText;
        button.disabled = false;
        
        // Update status badge
        const statusBadge = document.querySelector(`#order-${orderId} .status-badge`);
        if (statusBadge) {
            statusBadge.textContent = status;
            statusBadge.className = `badge status-badge ${getStatusClass(status)}`;
        }
        
        showNotification('Order status updated successfully!', 'success');
    }, 1500);
}

// Get status class for badges
function getStatusClass(status) {
    const statusClasses = {
        'pending': 'bg-warning',
        'confirmed': 'bg-info',
        'preparing': 'bg-primary',
        'ready': 'bg-success',
        'delivered': 'bg-success',
        'cancelled': 'bg-danger'
    };
    return statusClasses[status.toLowerCase()] || 'bg-secondary';
}

// Show notification
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 5000);
}

// Search functionality
function searchTable(inputId, tableId) {
    const input = document.getElementById(inputId);
    const table = document.getElementById(tableId);
    
    if (!input || !table) return;
    
    input.addEventListener('keyup', function() {
        const filter = this.value.toLowerCase();
        const rows = table.getElementsByTagName('tr');
        
        for (let i = 1; i < rows.length; i++) {
            const row = rows[i];
            const cells = row.getElementsByTagName('td');
            let found = false;
            
            for (let j = 0; j < cells.length; j++) {
                if (cells[j].textContent.toLowerCase().includes(filter)) {
                    found = true;
                    break;
                }
            }
            
            row.style.display = found ? '' : 'none';
        }
    });
}

// Export data functionality
function exportData(format, data) {
    if (format === 'csv') {
        exportToCSV(data);
    } else if (format === 'pdf') {
        exportToPDF(data);
    }
}

function exportToCSV(data) {
    // Simple CSV export implementation
    showNotification('CSV export functionality would be implemented here', 'info');
}

function exportToPDF(data) {
    // PDF export implementation
    showNotification('PDF export functionality would be implemented here', 'info');
}

// Modal handling
function openModal(modalId) {
    const modal = new bootstrap.Modal(document.getElementById(modalId));
    modal.show();
}

function closeModal(modalId) {
    const modal = bootstrap.Modal.getInstance(document.getElementById(modalId));
    if (modal) {
        modal.hide();
    }
}

// Date range picker initialization
function initializeDatePicker() {
    const dateInputs = document.querySelectorAll('input[type="date"]');
    dateInputs.forEach(input => {
        if (!input.value) {
            input.value = new Date().toISOString().split('T')[0];
        }
    });
}

// Call initialization functions
document.addEventListener('DOMContentLoaded', function() {
    initializeDatePicker();
    
    // Initialize search for tables
    searchTable('orderSearch', 'ordersTable');
    searchTable('customerSearch', 'customersTable');
    searchTable('menuSearch', 'menuTable');
});