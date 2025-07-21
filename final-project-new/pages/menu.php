<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu Management</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
              <i class="fas fa-tags me-2"></i>Add Categories
            </button>
        </div>
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addItemModal">
            <i class="fas fa-plus me-1"></i>Add Item
        </button>
    </div>
</div>

<!-- Menu Categories -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-tags me-2"></i>Categories
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <div class="card text-center category-card" data-category="all">
                            <div class="card-body">
                                <i class="fas fa-utensils fa-2x mb-2 text-primary"></i>
                                <h6>All Items</h6>
                                <span class="badge bg-primary">24</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card text-center category-card" data-category="appetizers">
                            <div class="card-body">
                                <i class="fas fa-cookie-bite fa-2x mb-2 text-warning"></i>
                                <h6>Appetizers</h6>
                                <span class="badge bg-warning">6</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card text-center category-card" data-category="mains">
                            <div class="card-body">
                                <i class="fas fa-drumstick-bite fa-2x mb-2 text-success"></i>
                                <h6>Main Course</h6>
                                <span class="badge bg-success">12</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card text-center category-card" data-category="beverages">
                            <div class="card-body">
                                <i class="fas fa-glass-martini fa-2x mb-2 text-info"></i>
                                <h6>Beverages</h6>
                                <span class="badge bg-info">4</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card text-center category-card" data-category="desserts">
                            <div class="card-body">
                                <i class="fas fa-ice-cream fa-2x mb-2 text-danger"></i>
                                <h6>Desserts</h6>
                                <span class="badge bg-danger">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Menu Items -->
<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="card-title mb-0">
                    <i class="fas fa-list me-2"></i>Menu Items
                </h5>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" id="menuSearch" placeholder="Search menu items...">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="menuTable">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Orders</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="https://images.pexels.com/photos/1893556/pexels-photo-1893556.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" 
                                 alt="Chicken Biryani" class="rounded" width="50" height="50">
                        </td>
                        <td>
                            <div>
                                <strong>Chicken Biryani</strong><br>
                                <small class="text-muted">Aromatic basmati rice with tender chicken</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Main Course</span></td>
                        <td><strong>₹200</strong></td>
                        <td><span class="badge bg-success">Available</span></td>
                        <td>
                            <div>
                                <strong>45</strong><br>
                                <small class="text-muted">This week</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editItemModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-warning" onclick="toggleAvailability(this)">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" 
                                 alt="Pizza Margherita" class="rounded" width="50" height="50">
                        </td>
                        <td>
                            <div>
                                <strong>Pizza Margherita</strong><br>
                                <small class="text-muted">Classic pizza with tomato, mozzarella, and basil</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Main Course</span></td>
                        <td><strong>₹320</strong></td>
                        <td><span class="badge bg-success">Available</span></td>
                        <td>
                            <div>
                                <strong>32</strong><br>
                                <small class="text-muted">This week</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editItemModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-warning" onclick="toggleAvailability(this)">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" 
                                 alt="Burger Combo" class="rounded" width="50" height="50">
                        </td>
                        <td>
                            <div>
                                <strong>Burger Combo</strong><br>
                                <small class="text-muted">Beef burger with fries and drink</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Main Course</span></td>
                        <td><strong>₹280</strong></td>
                        <td><span class="badge bg-danger">Out of Stock</span></td>
                        <td>
                            <div>
                                <strong>28</strong><br>
                                <small class="text-muted">This week</small>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editItemModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-success" onclick="toggleAvailability(this)">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addCategoryForm">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoryIcon" class="form-label">Icon (FontAwesome class)</label>
                        <input type="text" class="form-control" id="categoryIcon" placeholder="e.g. fas fa-bread-slice" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoryColor" class="form-label">Badge Color (Bootstrap class)</label>
                        <select class="form-select" id="categoryColor" required>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="success">Success</option>
                            <option value="danger">Danger</option>
                            <option value="warning">Warning</option>
                            <option value="info">Info</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add Item Modal -->
<div class="modal fade" id="addItemModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Menu Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="itemName" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="itemName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="itemCategory" class="form-label">Category</label>
                            <select class="form-select" id="itemCategory" required>
                                <option value="">Select Category</option>
                                <option value="appetizers">Appetizers</option>
                                <option value="mains">Main Course</option>
                                <option value="beverages">Beverages</option>
                                <option value="desserts">Desserts</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="itemDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="itemDescription" rows="3" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="itemPrice" class="form-label">Price (₹)</label>
                            <input type="number" class="form-control" id="itemPrice" step="0.01" required>
                        </div>
                        <div class="col-md-4">
                            <label for="prepTime" class="form-label">Prep Time (minutes)</label>
                            <input type="number" class="form-control" id="prepTime" required>
                        </div>
                        <div class="col-md-4">
                            <label for="itemStatus" class="form-label">Status</label>
                            <select class="form-select" id="itemStatus" required>
                                <option value="available">Available</option>
                                <option value="unavailable">Unavailable</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="itemImage" class="form-label">Item Image</label>
                        <input type="file" class="form-control" id="itemImage" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dietary Information</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="vegetarian">
                            <label class="form-check-label" for="vegetarian">Vegetarian</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="vegan">
                            <label class="form-check-label" for="vegan">Vegan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="glutenFree">
                            <label class="form-check-label" for="glutenFree">Gluten Free</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="spicy">
                            <label class="form-check-label" for="spicy">Spicy</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Item</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Item Modal -->
<div class="modal fade" id="editItemModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Menu Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <!-- Same form as add item modal, but pre-filled with existing data -->
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="editItemName" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="editItemName" value="Chicken Biryani" required>
                        </div>
                        <div class="col-md-6">
                            <label for="editItemCategory" class="form-label">Category</label>
                            <select class="form-select" id="editItemCategory" required>
                                <option value="">Select Category</option>
                                <option value="appetizers">Appetizers</option>
                                <option value="mains" selected>Main Course</option>
                                <option value="beverages">Beverages</option>
                                <option value="desserts">Desserts</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editItemDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editItemDescription" rows="3" required>Aromatic basmati rice with tender chicken</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="editItemPrice" class="form-label">Price (₹)</label>
                            <input type="number" class="form-control" id="editItemPrice" value="200" step="0.01" required>
                        </div>
                        <div class="col-md-4">
                            <label for="editPrepTime" class="form-label">Prep Time (minutes)</label>
                            <input type="number" class="form-control" id="editPrepTime" value="25" required>
                        </div>
                        <div class="col-md-4">
                            <label for="editItemStatus" class="form-label">Status</label>
                            <select class="form-select" id="editItemStatus" required>
                                <option value="available" selected>Available</option>
                                <option value="unavailable">Unavailable</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Update Item</button>
            </div>
        </div>
    </div>
</div>

<style>
.category-card {
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.category-card.active {
    border-color: #007bff;
    background-color: #f8f9fa;
}
</style>

<script>
function toggleAvailability(button) {
    const row = button.closest('tr');
    const statusBadge = row.querySelector('td:nth-child(5) .badge');
    const icon = button.querySelector('i');
    
    if (statusBadge.textContent === 'Available') {
        statusBadge.textContent = 'Out of Stock';
        statusBadge.className = 'badge bg-danger';
        icon.className = 'fas fa-eye';
        button.className = 'btn btn-outline-success';
        showNotification('Item marked as out of stock', 'warning');
    } else {
        statusBadge.textContent = 'Available';
        statusBadge.className = 'badge bg-success';
        icon.className = 'fas fa-eye-slash';
        button.className = 'btn btn-outline-warning';
        showNotification('Item marked as available', 'success');
    }
}

// Category filtering
document.querySelectorAll('.category-card').forEach(card => {
    card.addEventListener('click', function() {
        // Remove active class from all cards
        document.querySelectorAll('.category-card').forEach(c => c.classList.remove('active'));
        
        // Add active class to clicked card
        this.classList.add('active');
        
        const category = this.dataset.category;
        filterMenuByCategory(category);
    });
});

function filterMenuByCategory(category) {
    const rows = document.querySelectorAll('#menuTable tbody tr');
    
    rows.forEach(row => {
        if (category === 'all') {
            row.style.display = '';
        } else {
            const categoryBadge = row.querySelector('td:nth-child(3) .badge');
            const itemCategory = categoryBadge.textContent.toLowerCase().replace(' ', '');
            
            if (itemCategory.includes(category)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });
}

// Set default active category
document.querySelector('.category-card[data-category="all"]').classList.add('active');
</script>