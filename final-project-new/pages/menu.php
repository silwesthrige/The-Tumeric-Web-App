
    <style>
        .category-card {
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            min-height: 160px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-width: 150px;
            flex-shrink: 0;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .category-card.active {
            border-color: #007bff;
            background-color: #f8f9fa;
        }

        .category-card .card-body {
            padding: 1rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .category-card h6 {
            margin: 0.5rem 0;
            font-weight: 600;
            font-size: 0.9rem;
            line-height: 1.2;
            min-height: 2.4em;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .category-card .badge {
            margin-bottom: 0.5rem;
            font-size: 0.75rem;
            padding: 0.35em 0.65em;
        }

        .category-card .btn-group {
            margin-top: 0.5rem;
        }

        .category-card .btn-sm {
            padding: 0.2rem 0.4rem;
            font-size: 0.7rem;
        }

        .loading {
            opacity: 0.6;
            pointer-events: none;
        }

        .btn-loading {
            position: relative;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            margin: auto;
            border: 2px solid transparent;
            border-top-color: #ffffff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .image-preview {
            max-width: 200px;
            max-height: 150px;
            margin-top: 10px;
            border-radius: 8px;
        }

        .upload-area {
            border: 2px dashed #dee2e6;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: border-color 0.3s ease;
        }

        .upload-area:hover {
            border-color: #007bff;
        }

        .upload-area.dragover {
            border-color: #007bff;
            background-color: #f8f9fa;
        }

        .table img {
            object-fit: cover;
        }

        .card {
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
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
            border-bottom: 2px solid #e3e6f0;
            font-weight: 800;
            color: #5a5c69;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
        }

        .table td {
            border-top: 1px solid #e3e6f0;
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
            border-bottom: 1px solid #e3e6f0 !important;
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
            border-bottom: 1px solid #e3e6f0;
            background-color: #f8f9fc;
        }

        .modal-footer {
            border-top: 1px solid #e3e6f0;
            background-color: #f8f9fc;
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

        .category-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #e3e6f0;
            margin-bottom: 0.5rem;
        }

        .category-icon {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        /* Categories horizontal scroll */
        .categories-scroll-container {
            overflow-x: auto;
            overflow-y: hidden;
            padding-bottom: 10px;
        }

        .categories-scroll-container::-webkit-scrollbar {
            height: 6px;
        }

        .categories-scroll-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .categories-scroll-container::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        .categories-scroll-container::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .categories-flex {
            display: flex;
            gap: 15px;
            padding: 10px 0;
        }

        .category-item {
            min-width: 160px;
            max-width: 160px;
            width: 160px;
            flex-shrink: 0;
        }

        .category-item .category-card {
            height: 200px;
            width: 100%;
        }

        /* Make category action buttons always visible */
        .category-actions {
            opacity: 1;
        }

        /* Bootstrap button styling for toolbar */
        .btn-toolbar .btn {
            margin-right: 0.25rem;
        }

        .btn-toolbar .btn-group {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Menu Management</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                        <i class="fas fa-tags me-2"></i>Add Category
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
                        <div class="categories-scroll-container">
                            <div class="categories-flex" id="categoriesContainer">
                                <div class="category-item">
                                    <div class="card text-center category-card active" data-category="all">
                                        <div class="card-body">
                                            <i class="fas fa-utensils category-icon text-primary"></i>
                                            <h6>All Items</h6>
                                            <span class="badge bg-primary" id="count-all">0</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dynamic categories will be loaded here -->
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
                <div id="loadingIndicator" class="text-center py-4" style="display: none;">
                     <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    <p class="mt-2">Loading menu items...</p>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover" id="menuTable">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price(£)</th>
                                <th>Cook Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="menuTableBody">
                            <!-- Dynamic content will be loaded here -->
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
                    <div class="modal-body">
                        <form class="needs-validation" id="addCategoryForm" novalidate>
                            <div class="mb-3">
                                <label for="categoryName" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="categoryName" required>
                                <div class="invalid-feedback">Please provide a valid category name.</div>
                            </div>

                            <div class="mb-3">
                                <label for="categoryImageUpload" class="form-label">Category Image</label>
                                <div class="upload-area" id="categoryUploadArea">
                                    <i class="fas fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                                    <p class="mb-2">Click to upload or drag and drop</p>
                                    <input type="file" class="form-control" id="categoryImageUpload" accept="image/*" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="document.getElementById('categoryImageUpload').click()">
                                        Choose File
                                    </button>
                                </div>
                                <img id="categoryImagePreview" class="image-preview" style="display: none;" alt="Preview">
                                <div class="form-text">Upload an image for the category (JPG, PNG, GIF - Max 5MB)</div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" form="addCategoryForm" id="categorySubmitBtn">Add Category</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Category Modal -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" id="editCategoryForm" novalidate>
                            <input type="hidden" id="editCategoryId">
                            <div class="mb-3">
                                <label for="editCategoryName" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="editCategoryName" required>
                                <div class="invalid-feedback">Please provide a valid category name.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Current Image</label>
                                <img id="editCategoryCurrentImage" class="image-preview mb-2" style="display: block;" alt="Current image">
                            </div>

                            <div class="mb-3">
                                <label for="editCategoryImageUpload" class="form-label">Update Image (Optional)</label>
                                <div class="upload-area" id="editCategoryUploadArea">
                                    <i class="fas fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                                    <p class="mb-2">Click to upload or drag and drop a new image</p>
                                    <input type="file" class="form-control" id="editCategoryImageUpload" accept="image/*" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="document.getElementById('editCategoryImageUpload').click()">
                                        Choose File
                                    </button>
                                </div>
                                <img id="editCategoryImagePreview" class="image-preview" style="display: none;" alt="Preview">
                                <div class="form-text">Upload a new image to replace the current one (JPG, PNG, GIF - Max 5MB)</div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" form="editCategoryForm" id="editCategorySubmitBtn">Update Category</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- View Item Modal -->
        <div class="modal fade" id="viewItemModal" tabindex="-1" aria-labelledby="viewItemModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewItemModalLabel">Item Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="viewItemImage" class="img-fluid rounded mb-3" alt="Food item image">
                            </div>
                            <div class="col-md-6">
                                <h3 id="viewItemName" class="mb-3"></h3>
                                <p><strong>Category:</strong> <span id="viewItemCategory" class="badge bg-primary"></span></p>
                                <p><strong>Price(£):</strong> <span id="viewItemPrice" class="text-success fw-bold fs-5"></span></p>
                                <p><strong>Cook Time:</strong> <span id="viewItemCookTime"></span> minutes</p>
                                <p><strong>Status:</strong> <span id="viewItemStatus"></span></p>
                                <p><strong>Orders:</strong> <span id="viewItemOrders"></span></p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <h5>Short Description</h5>
                                <p id="viewItemShortDesc" class="text-muted"></p>
                                <h5>Full Description</h5>
                                <p id="viewItemFullDesc"></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="editFromViewBtn">Edit Item</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addItemModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Food Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" id="addItemForm" novalidate>
                            <div class="mb-3">
                                <label for="itemName" class="form-label">Food Name</label>
                                <input type="text" class="form-control" id="itemName" required>
                                <div class="invalid-feedback">Please provide a valid food name.</div>
                            </div>

                            <div class="mb-3">
                                <label for="shortDescription" class="form-label">Short Description</label>
                                <input type="text" class="form-control" id="shortDescription" maxlength="120" required>
                                <div class="form-text">Maximum 120 characters</div>
                                <div class="invalid-feedback">Please provide a short description.</div>
                            </div>

                            <div class="mb-3">
                                <label for="itemDescription" class="form-label">Full Description</label>
                                <textarea class="form-control" id="itemDescription" rows="4" required></textarea>
                                <div class="invalid-feedback">Please provide a full description.</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="itemPrice" class="form-label">Price (£)</label>
                                    <input type="number" class="form-control" id="itemPrice" step="0.01" min="0" required>
                                    <div class="invalid-feedback">Please provide a valid price.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="prepTime" class="form-label">Cook Time (minutes)</label>
                                    <input type="number" class="form-control" id="prepTime" min="1" required>
                                    <div class="invalid-feedback">Please provide cook time.</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="itemCategory" class="form-label">Category</label>
                                <select class="form-select" id="itemCategory" required>
                                    <option value="">Select Category</option>
                                    <!-- Dynamic categories will be loaded here -->
                                </select>
                                <div class="invalid-feedback">Please select a category.</div>
                            </div>

                            <div class="mb-3">
                                <label for="imageUpload" class="form-label">Food Image</label>
                                <div class="upload-area" id="uploadArea">
                                    <i class="fas fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                                    <p class="mb-2">Click to upload or drag and drop</p>
                                    <input type="file" class="form-control" id="imageUpload" accept="image/*" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="document.getElementById('imageUpload').click()">
                                        Choose File
                                    </button>
                                </div>
                                <img id="imagePreview" class="image-preview" style="display: none;" alt="Preview">
                                <div class="form-text">Upload an image of the food item (JPG, PNG, GIF - Max 5MB)</div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" form="addItemForm" id="submitBtn">Add Item</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Item Modal -->
        <div class="modal fade" id="editItemModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Food Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" id="editItemForm" novalidate>
                            <input type="hidden" id="editItemId">
                            <div class="mb-3">
                                <label for="editItemName" class="form-label">Food Name</label>
                                <input type="text" class="form-control" id="editItemName" required>
                                <div class="invalid-feedback">Please provide a valid food name.</div>
                            </div>

                            <div class="mb-3">
                                <label for="editShortDescription" class="form-label">Short Description</label>
                                <input type="text" class="form-control" id="editShortDescription" maxlength="120" required>
                                <div class="form-text">Maximum 120 characters</div>
                                <div class="invalid-feedback">Please provide a short description.</div>
                            </div>

                            <div class="mb-3">
                                <label for="editItemDescription" class="form-label">Full Description</label>
                                <textarea class="form-control" id="editItemDescription" rows="4" required></textarea>
                                <div class="invalid-feedback">Please provide a full description.</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="editItemPrice" class="form-label">Price (£)</label>
                                    <input type="number" class="form-control" id="editItemPrice" step="0.01" min="0" required>
                                    <div class="invalid-feedback">Please provide a valid price.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="editPrepTime" class="form-label">Cook Time (minutes)</label>
                                    <input type="number" class="form-control" id="editPrepTime" min="1" required>
                                    <div class="invalid-feedback">Please provide cook time.</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="editItemCategory" class="form-label">Category</label>
                                <select class="form-select" id="editItemCategory" required>
                                    <option value="">Select Category</option>
                                    <!-- Dynamic categories will be loaded here -->
                                </select>
                                <div class="invalid-feedback">Please select a category.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Current Image</label>
                                <img id="editCurrentImage" class="image-preview mb-2" style="display: block;" alt="Current image">
                            </div>

                            <div class="mb-3">
                                <label for="editImageUpload" class="form-label">Update Image (Optional)</label>
                                <div class="upload-area" id="editUploadArea">
                                    <i class="fas fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                                    <p class="mb-2">Click to upload or drag and drop a new image</p>
                                    <input type="file" class="form-control" id="editImageUpload" accept="image/*" style="display: none;">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="document.getElementById('editImageUpload').click()">
                                        Choose File
                                    </button>
                                </div>
                                <img id="editImagePreview" class="image-preview" style="display: none;" alt="Preview">
                                <div class="form-text">Upload a new image to replace the current one (JPG, PNG, GIF - Max 5MB)</div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" form="editItemForm" id="editSubmitBtn">Update Item</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        let allMenuItems = [];
        let allCategories = [];
        let currentFilter = 'all';

        function toggleAvailability(button, itemId) {
            const row = button.closest('tr');
            const statusBadge = row.querySelector('td:nth-child(6) .badge');
            const icon = button.querySelector('i');
            
            if (statusBadge.textContent === 'Available') {
                statusBadge.textContent = 'Out of Stock';
                statusBadge.className = 'badge bg-danger';
                icon.className = 'fas fa-eye';
                button.className = 'btn btn-outline-success btn-sm';
                updateItemStatus(itemId, 'out-of-stock');
            } else {
                statusBadge.textContent = 'Available';
                statusBadge.className = 'badge bg-success';
                icon.className = 'fas fa-eye-slash';
                button.className = 'btn btn-outline-warning btn-sm';
                updateItemStatus(itemId, 'available');
            }
        }

        // Category filtering
        function setupCategoryFiltering() {
            document.querySelectorAll('.category-card').forEach(card => {
                card.addEventListener('click', function() {
                    // Remove active class from all cards
                    document.querySelectorAll('.category-card').forEach(c => c.classList.remove('active'));
                    
                    // Add active class to clicked card
                    this.classList.add('active');
                    
                    const category = this.dataset.category;
                    currentFilter = category;
                    filterMenuByCategory(category);
                });
            });
        }

        function filterMenuByCategory(category) {
            const rows = document.querySelectorAll('#menuTable tbody tr');
            
            rows.forEach(row => {
                if (category === 'all') {
                    row.style.display = '';
                } else {
                    const categoryCell = row.querySelector('td:nth-child(3)');
                    if (categoryCell) {
                        const categoryBadge = categoryCell.querySelector('.badge');
                        if (categoryBadge) {
                            const categoryId = categoryBadge.dataset.categoryId;
                            
                            if (categoryId === category) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        }
                    }
                }
            });
        }

        function updateCategoryCounts() {
            // Count all items
            let allCount = allMenuItems.length;
            document.getElementById('count-all').textContent = allCount;

            // Count items per category
            allCategories.forEach(category => {
                const count = allMenuItems.filter(item => item.category === category.categoryId).length;
                const countElement = document.getElementById(`count-${category.categoryId}`);
                if (countElement) {
                    countElement.textContent = count;
                }
            });
        }

        // Search functionality
        document.getElementById('menuSearch').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('#menuTable tbody tr');
            
            rows.forEach(row => {
                const nameCell = row.querySelector('td:nth-child(2) strong');
                const descCell = row.querySelector('td:nth-child(2) small');
                
                if (nameCell && descCell) {
                    const foodName = nameCell.textContent.toLowerCase();
                    const shortDisc = descCell.textContent.toLowerCase();
                    
                    if (foodName.includes(searchTerm) || shortDisc.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
        });

        // Fixed image upload functionality
        function setupImageUpload(uploadAreaId, fileInputId, previewId) {
            const uploadArea = document.getElementById(uploadAreaId);
            const fileInput = document.getElementById(fileInputId);
            const preview = document.getElementById(previewId);

            // Remove any existing event listeners
            const newUploadArea = uploadArea.cloneNode(true);
            uploadArea.parentNode.replaceChild(newUploadArea, uploadArea);
            
            const newFileInput = document.getElementById(fileInputId);

            // Drag and drop functionality
            newUploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                e.stopPropagation();
                newUploadArea.classList.add('dragover');
            });

            newUploadArea.addEventListener('dragleave', (e) => {
                e.preventDefault();
                e.stopPropagation();
                newUploadArea.classList.remove('dragover');
            });

            newUploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                e.stopPropagation();
                newUploadArea.classList.remove('dragover');
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    handleFileSelect(files[0], preview);
                    // Create a new FileList and assign it
                    const dt = new DataTransfer();
                    dt.items.add(files[0]);
                    newFileInput.files = dt.files;
                }
            });

            // Click to upload - only on the upload area, not the button
            newUploadArea.addEventListener('click', (e) => {
                // Don't trigger if clicking on the button
                if (e.target.tagName !== 'BUTTON' && e.target.tagName !== 'I') {
                    newFileInput.click();
                }
            });

            // File input change event
            newFileInput.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    handleFileSelect(e.target.files[0], preview);
                }
            });

            // Button click event
            const chooseButton = newUploadArea.querySelector('button');
            if (chooseButton) {
                chooseButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    newFileInput.click();
                });
            }
        }

        function handleFileSelect(file, preview) {
            if (file && file.type.startsWith('image/')) {
                if (file.size > 5 * 1024 * 1024) { // 5MB limit
                    alert('File size must be less than 5MB');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = (e) => {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }

        // Initialize image upload for all modals
        function initializeImageUploads() {
            setupImageUpload('uploadArea', 'imageUpload', 'imagePreview');
            setupImageUpload('editUploadArea', 'editImageUpload', 'editImagePreview');
            setupImageUpload('categoryUploadArea', 'categoryImageUpload', 'categoryImagePreview');
            setupImageUpload('editCategoryUploadArea', 'editCategoryImageUpload', 'editCategoryImagePreview');
        }
    </script>

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-analytics.js";
        import { 
            getFirestore, 
            collection, 
            addDoc, 
            getDocs, 
            doc, 
            updateDoc, 
            deleteDoc,
            getDoc,
            serverTimestamp,
            arrayUnion,
            arrayRemove 
        } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";
        import { 
            getStorage, 
            ref, 
            uploadBytes, 
            getDownloadURL 
        } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-storage.js";

        // Your web app's Firebase configuration
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
        const analytics = getAnalytics(app);
        const db = getFirestore(app);
        const storage = getStorage(app);

        // Make functions globally available
        window.loadData = loadData;
        window.updateItemStatus = updateItemStatus;
        window.deleteMenuItem = deleteMenuItem;
        window.editMenuItem = editMenuItem;
        window.viewMenuItem = viewMenuItem;
        window.deleteCategory = deleteCategory;
        window.editCategory = editCategory;

        // Add category form submission handler
        const categoryForm = document.getElementById("addCategoryForm");
        const categorySubmitBtn = document.getElementById("categorySubmitBtn");

        categoryForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            // Validate form
            if (!categoryForm.checkValidity()) {
                e.stopPropagation();
                categoryForm.classList.add('was-validated');
                return;
            }

            // Show loading state
            categorySubmitBtn.disabled = true;
            categorySubmitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Adding...';

            const categoryName = document.getElementById("categoryName").value.trim();
            const imageFile = document.getElementById("categoryImageUpload").files[0];

            try {
                let imageUrl = "https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop";

                // Upload image if provided
                if (imageFile) {
                    const imageRef = ref(storage, `category-images/${Date.now()}_${imageFile.name}`);
                    const uploadResult = await uploadBytes(imageRef, imageFile);
                    imageUrl = await getDownloadURL(uploadResult.ref);
                }

                // Add document to Firestore
                const docRef = await addDoc(collection(db, "category"), {
                    categoryName: categoryName,
                    imageUrl: imageUrl,
                    FoodId: [],
                    createdAt: serverTimestamp()
                });

                // Generate categoryId using the document ID
                const categoryId = docRef.id;

                // Update the document to include the categoryId
                await updateDoc(docRef, {
                    categoryId: categoryId
                });

                console.log("Category added with ID: ", docRef.id);
                
                // Show success message
                alert("Category added successfully!");
                
                // Reset form and hide modal
                categoryForm.reset();
                categoryForm.classList.remove('was-validated');
                document.getElementById('categoryImagePreview').style.display = 'none';
                const addCategoryModal = bootstrap.Modal.getInstance(document.getElementById("addCategoryModal"));
                addCategoryModal.hide();
                
                // Reload data and reinitialize everything
                await loadData();
                
                // Re-initialize image uploads after data load
                setTimeout(() => {
                    initializeImageUploads();
                    updateCategoryCounts();
                }, 200);

            } catch (error) {
                console.error("Error adding category: ", error);
                alert("Failed to add category. Please try again.");
            } finally {
                // Reset button state
                categorySubmitBtn.disabled = false;
                categorySubmitBtn.innerHTML = 'Add Category';
            }
        });

        // Edit category form submission handler
        const editCategoryForm = document.getElementById("editCategoryForm");
        const editCategorySubmitBtn = document.getElementById("editCategorySubmitBtn");

        editCategoryForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            // Validate form
            if (!editCategoryForm.checkValidity()) {
                e.stopPropagation();
                editCategoryForm.classList.add('was-validated');
                return;
            }

            // Show loading state
            editCategorySubmitBtn.disabled = true;
            editCategorySubmitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Updating...';

            const categoryId = document.getElementById("editCategoryId").value;
            const categoryName = document.getElementById("editCategoryName").value.trim();
            const imageFile = document.getElementById("editCategoryImageUpload").files[0];

            try {
                let updateData = {
                    categoryName: categoryName,
                    updatedAt: serverTimestamp()
                };

                // Upload new image if provided
                if (imageFile) {
                    const imageRef = ref(storage, `category-images/${Date.now()}_${imageFile.name}`);
                    const uploadResult = await uploadBytes(imageRef, imageFile);
                    updateData.imageUrl = await getDownloadURL(uploadResult.ref);
                }

                // Update document in Firestore
                const categoryRef = doc(db, "category", categoryId);
                await updateDoc(categoryRef, updateData);

                console.log("Category updated successfully");
                
                // Show success message
                alert("Category updated successfully!");
                
                // Reset form and hide modal
                editCategoryForm.reset();
                editCategoryForm.classList.remove('was-validated');
                document.getElementById('editCategoryImagePreview').style.display = 'none';
                const editCategoryModal = bootstrap.Modal.getInstance(document.getElementById("editCategoryModal"));
                editCategoryModal.hide();
                
                // Reload data and reinitialize everything
                await loadData();
                
                // Re-initialize image uploads after data load
                setTimeout(() => {
                    initializeImageUploads();
                    updateCategoryCounts();
                }, 200);

            } catch (error) {
                console.error("Error updating category: ", error);
                alert("Failed to update category. Please try again.");
            } finally {
                // Reset button state
                editCategorySubmitBtn.disabled = false;
                editCategorySubmitBtn.innerHTML = 'Update Category';
            }
        });

        // Add form submission handler
        const form = document.getElementById("addItemForm");
        const submitBtn = document.getElementById("submitBtn");

        form.addEventListener("submit", async function (e) {
            e.preventDefault();

            // Validate form
            if (!form.checkValidity()) {
                e.stopPropagation();
                form.classList.add('was-validated');
                return;
            }

            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Adding...';

            const name = document.getElementById("itemName").value.trim();
            const shortDesc = document.getElementById("shortDescription").value.trim();
            const fullDesc = document.getElementById("itemDescription").value.trim();
            const price = parseFloat(document.getElementById("itemPrice").value);
            const cookTime = parseInt(document.getElementById("prepTime").value);
            const categoryId = document.getElementById("itemCategory").value;
            const imageFile = document.getElementById("imageUpload").files[0];

            try {
                let imageUrl = "https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop";

                // Upload image if provided
                if (imageFile) {
                    const imageRef = ref(storage, `menu-images/${Date.now()}_${imageFile.name}`);
                    const uploadResult = await uploadBytes(imageRef, imageFile);
                    imageUrl = await getDownloadURL(uploadResult.ref);
                }

                // Add document to Firestore first to get the collection ID
                const docRef = await addDoc(collection(db, "menus"), {
                    foodName: name,
                    shortDisc: shortDesc,
                    disc: fullDesc,
                    price: price,
                    cookedTime: cookTime,
                    category: categoryId,
                    imageUrl: imageUrl,
                    status: "available",
                    createdAt: serverTimestamp(),
                    orders: 0
                });

                // Generate foodId using the collection ID to ensure they're the same
                const foodId = docRef.id;

                // Update the document to include the foodId
                await updateDoc(docRef, {
                    foodId: foodId
                });

                // Update category's FoodId array
                const categoryRef = doc(db, "category", categoryId);
                await updateDoc(categoryRef, {
                    FoodId: arrayUnion(foodId)
                });

                console.log("Document written with ID: ", docRef.id);
                
                // Show success message
                alert("Item added successfully!");
                
                // Reset form and hide modal
                form.reset();
                form.classList.remove('was-validated');
                document.getElementById('imagePreview').style.display = 'none';
                const addItemModal = bootstrap.Modal.getInstance(document.getElementById("addItemModal"));
                addItemModal.hide();
                
                // Reload data and reinitialize everything
                await loadData();
                
                // Re-initialize image uploads after data load
                setTimeout(() => {
                    initializeImageUploads();
                    updateCategoryCounts();
                }, 200);

            } catch (error) {
                console.error("Error adding document: ", error);
                alert("Failed to add item. Please check your internet connection and try again.");
            } finally {
                // Reset button state
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Add Item';
            }
        });

        // Edit form submission handler
        const editForm = document.getElementById("editItemForm");
        const editSubmitBtn = document.getElementById("editSubmitBtn");

        editForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            // Validate form
            if (!editForm.checkValidity()) {
                e.stopPropagation();
                editForm.classList.add('was-validated');
                return;
            }

            // Show loading state
            editSubmitBtn.disabled = true;
            editSubmitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Updating...';

            const itemId = document.getElementById("editItemId").value;
            const name = document.getElementById("editItemName").value.trim();
            const shortDesc = document.getElementById("editShortDescription").value.trim();
            const fullDesc = document.getElementById("editItemDescription").value.trim();
            const price = parseFloat(document.getElementById("editItemPrice").value);
            const cookTime = parseInt(document.getElementById("editPrepTime").value);
            const newCategoryId = document.getElementById("editItemCategory").value;
            const imageFile = document.getElementById("editImageUpload").files[0];

            try {
                // Get current item data to check category change
                const itemDoc = await getDoc(doc(db, "menus", itemId));
                const currentItem = itemDoc.data();
                const oldCategoryId = currentItem.category;

                let updateData = {
                    foodName: name,
                    shortDisc: shortDesc,
                    disc: fullDesc,
                    price: price,
                    cookedTime: cookTime,
                    category: newCategoryId,
                    updatedAt: serverTimestamp()
                };

                // Upload new image if provided
                if (imageFile) {
                    const imageRef = ref(storage, `menu-images/${Date.now()}_${imageFile.name}`);
                    const uploadResult = await uploadBytes(imageRef, imageFile);
                    updateData.imageUrl = await getDownloadURL(uploadResult.ref);
                }

                // Update document in Firestore
                const itemRef = doc(db, "menus", itemId);
                await updateDoc(itemRef, updateData);

                // If category changed, update category FoodId arrays
                if (oldCategoryId !== newCategoryId) {
                    // Remove from old category
                    if (oldCategoryId) {
                        const oldCategoryRef = doc(db, "category", oldCategoryId);
                        await updateDoc(oldCategoryRef, {
                            FoodId: arrayRemove(itemId)
                        });
                    }

                    // Add to new category
                    const newCategoryRef = doc(db, "category", newCategoryId);
                    await updateDoc(newCategoryRef, {
                        FoodId: arrayUnion(itemId)
                    });
                }

                console.log("Document updated successfully");
                
                // Show success message
                alert("Item updated successfully!");
                
                // Reset form and hide modal
                editForm.reset();
                editForm.classList.remove('was-validated');
                document.getElementById('editImagePreview').style.display = 'none';
                const editItemModal = bootstrap.Modal.getInstance(document.getElementById("editItemModal"));
                editItemModal.hide();
                
                // Reload data and reinitialize everything
                await loadData();
                
                // Re-initialize image uploads after data load
                setTimeout(() => {
                    initializeImageUploads();
                    updateCategoryCounts();
                }, 200);

            } catch (error) {
                console.error("Error updating document: ", error);
                alert("Failed to update item. Please check your internet connection and try again.");
            } finally {
                // Reset button state
                editSubmitBtn.disabled = false;
                editSubmitBtn.innerHTML = 'Update Item';
            }
        });

        // Function to load categories from Firestore
        async function loadCategories() {
            try {
                const querySnapshot = await getDocs(collection(db, "category"));
                allCategories = [];
                
                querySnapshot.forEach((doc) => {
                    const category = doc.data();
                    category.id = doc.id;
                    allCategories.push(category);
                });

                // Update categories display
                updateCategoriesDisplay();
                updateCategoryDropdowns();
                
            } catch (error) {
                console.error("Error loading categories: ", error);
            }
        }

        // Function to update categories display
        function updateCategoriesDisplay() {
            const container = document.getElementById('categoriesContainer');
            
            // Keep the "All Items" card
            const allItemsCard = container.querySelector('[data-category="all"]');
            if (allItemsCard) {
                const allItemsContainer = allItemsCard.parentElement;
                // Clear everything except the all items card
                container.innerHTML = '';
                container.appendChild(allItemsContainer);
            } else {
                // If "All Items" card doesn't exist, create it
                container.innerHTML = `
                    <div class="category-item">
                        <div class="card text-center category-card active" data-category="all">
                            <div class="card-body">
                                <i class="fas fa-utensils category-icon text-primary"></i>
                                <h6>All Items</h6>
                                <span class="badge bg-primary" id="count-all">0</span>
                            </div>
                        </div>
                    </div>
                `;
            }

            // Add dynamic categories
            allCategories.forEach(category => {
                const categoryCard = document.createElement('div');
                categoryCard.className = 'category-item';
                categoryCard.innerHTML = `
                    <div class="card text-center category-card" data-category="${category.categoryId}">
                        <div class="card-body">
                            <img src="${category.imageUrl}" alt="${category.categoryName}" class="category-image">
                            <h6>${category.categoryName}</h6>
                            <span class="badge bg-secondary" id="count-${category.categoryId}">0</span>
                            <div class="category-actions">
                                <div class="btn-group btn-group-sm mt-2">
                                    <button class="btn btn-outline-primary btn-sm" onclick="editCategory('${category.categoryId}')" title="Edit Category">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm" onclick="deleteCategory('${category.categoryId}')" title="Delete Category">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                container.appendChild(categoryCard);
            });

            // Re-setup category filtering
            setTimeout(() => {
                setupCategoryFiltering();
            }, 100);
        }

        // Function to update category dropdowns
        function updateCategoryDropdowns() {
            const addCategorySelect = document.getElementById('itemCategory');
            const editCategorySelect = document.getElementById('editItemCategory');

            // Clear existing options (except the first default option)
            addCategorySelect.innerHTML = '<option value="">Select Category</option>';
            editCategorySelect.innerHTML = '<option value="">Select Category</option>';

            // Add categories to dropdowns
            allCategories.forEach(category => {
                const option = `<option value="${category.categoryId}">${category.categoryName}</option>`;
                addCategorySelect.innerHTML += option;
                editCategorySelect.innerHTML += option;
            });
        }

        // Function to load menu items from Firestore
        async function loadMenuItems() {
            const loadingIndicator = document.getElementById('loadingIndicator');
            const tableBody = document.getElementById('menuTableBody');
            
            try {
                loadingIndicator.style.display = 'block';
                tableBody.innerHTML = '';
                
                const querySnapshot = await getDocs(collection(db, "menus"));
                
                if (querySnapshot.empty) {
                    tableBody.innerHTML = `
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">
                                <i class="fas fa-utensils fa-2x mb-3 d-block"></i>
                                No menu items found. Add your first item!
                            </td>
                        </tr>`;
                    allMenuItems = [];
                    updateCategoryCounts();
                    return;
                }
                
                allMenuItems = [];
                querySnapshot.forEach((doc) => {
                    const item = doc.data();
                    item.id = doc.id;
                    allMenuItems.push(item);
                    const row = createMenuItemRow(doc.id, item);
                    tableBody.appendChild(row);
                });
                
                updateCategoryCounts();
                
                // Re-apply current filter
                if (currentFilter !== 'all') {
                    filterMenuByCategory(currentFilter);
                }
                
            } catch (error) {
                console.error("Error loading menu items: ", error);
                tableBody.innerHTML = `
                    <tr>
                        <td colspan="7" class="text-center py-4 text-danger">
                            <i class="fas fa-exclamation-triangle fa-2x mb-3 d-block"></i>
                            Error loading menu items. Please try again.
                        </td>
                    </tr>`;
                allMenuItems = [];
                updateCategoryCounts();
            } finally {
                loadingIndicator.style.display = 'none';
            }
        }

        // Function to load all data
        async function loadData() {
            await loadCategories();
            await loadMenuItems();
            
            // Update category counts after loading
            updateCategoryCounts();
            
            // Re-setup category filtering after loading
            setTimeout(() => {
                setupCategoryFiltering();
                // Re-apply current filter if not 'all'
                if (currentFilter !== 'all') {
                    filterMenuByCategory(currentFilter);
                }
            }, 150);
        }

        // Function to create menu item row
        function createMenuItemRow(id, item) {
            const row = document.createElement('tr');
            const category = allCategories.find(cat => cat.categoryId === item.category);
            const categoryName = category ? category.categoryName : 'Unknown';
            
            row.innerHTML = `
                <td>
                    <img src="${item.imageUrl || 'https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop'}" 
                         alt="${item.foodName}" class="rounded" width="50" height="50"
                         onerror="this.src='https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop'">
                </td>
                <td>
                    <div>
                        <strong>${item.foodName}</strong><br>
                        <small class="text-muted">${item.shortDisc}</small>
                    </div>
                </td>
                <td><span class="badge bg-primary" data-category-id="${item.category}">${categoryName}</span></td>
                <td><strong>£${item.price}</strong></td>
                <td>${item.cookedTime} min</td>
                <td><span class="badge ${item.status === 'available' ? 'bg-success' : 'bg-danger'}">${item.status === 'available' ? 'Available' : 'Out of Stock'}</span></td>
                <td>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-info" onclick="viewMenuItem('${id}')" title="View Details">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-outline-primary" onclick="editMenuItem('${id}')" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-outline-${item.status === 'available' ? 'warning' : 'success'}" 
                                onclick="toggleAvailability(this, '${id}')" title="Toggle Availability">
                            <i class="fas ${item.status === 'available' ? 'fa-eye-slash' : 'fa-eye'}"></i>
                        </button>
                        <button class="btn btn-outline-danger" onclick="deleteMenuItem('${id}')" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            `;
            return row;
        }

        // Function to update item status
        async function updateItemStatus(itemId, status) {
            try {
                const itemRef = doc(db, "menus", itemId);
                await updateDoc(itemRef, {
                    status: status,
                    updatedAt: serverTimestamp()
                });
                console.log("Status updated successfully");
                
                // Update the item in allMenuItems array
                const itemIndex = allMenuItems.findIndex(item => item.id === itemId);
                if (itemIndex !== -1) {
                    allMenuItems[itemIndex].status = status;
                }
            } catch (error) {
                console.error("Error updating status: ", error);
                alert("Failed to update item status");
            }
        }

        // Function to delete menu item
        async function deleteMenuItem(itemId) {
            if (!confirm("Are you sure you want to delete this item? This action cannot be undone.")) {
                return;
            }

            try {
                // Get item data to remove from category
                const itemDoc = await getDoc(doc(db, "menus", itemId));
                const itemData = itemDoc.data();
                
                // Remove from category's FoodId array
                if (itemData.category) {
                    const categoryRef = doc(db, "category", itemData.category);
                    await updateDoc(categoryRef, {
                        FoodId: arrayRemove(itemId)
                    });
                }

                // Delete the menu item
                await deleteDoc(doc(db, "menus", itemId));
                console.log("Document successfully deleted!");
                
                // Remove from allMenuItems array
                allMenuItems = allMenuItems.filter(item => item.id !== itemId);
                
                // Reload data and reinitialize everything
                await loadData();
                
                // Re-initialize image uploads after data load
                setTimeout(() => {
                    initializeImageUploads();
                    updateCategoryCounts();
                }, 200);
                
                alert("Item deleted successfully!");
            } catch (error) {
                console.error("Error removing document: ", error);
                alert("Failed to delete item");
            }
        }

        // Function to delete category
        async function deleteCategory(categoryId) {
            // Check if category has items
            const categoryData = allCategories.find(cat => cat.categoryId === categoryId);
            if (categoryData && categoryData.FoodId && categoryData.FoodId.length > 0) {
                alert("Cannot delete category that contains menu items. Please move or delete all items in this category first.");
                return;
            }

            if (!confirm("Are you sure you want to delete this category? This action cannot be undone.")) {
                return;
            }

            try {
                await deleteDoc(doc(db, "category", categoryId));
                console.log("Category successfully deleted!");
                
                alert("Category deleted successfully!");
                
                // Reload data and reinitialize everything
                await loadData();
                
                // Re-initialize image uploads after data load
                setTimeout(() => {
                    initializeImageUploads();
                    updateCategoryCounts();
                }, 200);
                
            } catch (error) {
                console.error("Error deleting category: ", error);
                alert("Failed to delete category");
            }
        }

        // Function to edit category
        async function editCategory(categoryId) {
            try {
                const categoryDoc = await getDoc(doc(db, "category", categoryId));
                if (categoryDoc.exists()) {
                    const category = categoryDoc.data();
                    
                    // Populate edit form
                    document.getElementById('editCategoryId').value = categoryId;
                    document.getElementById('editCategoryName').value = category.categoryName;
                    
                    // Show current image
                    const currentImage = document.getElementById('editCategoryCurrentImage');
                    currentImage.src = category.imageUrl || 'https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=200&h=150&fit=crop';
                    currentImage.style.display = 'block';
                    
                    // Hide preview and reset file input
                    document.getElementById('editCategoryImagePreview').style.display = 'none';
                    document.getElementById('editCategoryImageUpload').value = '';
                    
                    // Show modal
                    const editModal = new bootstrap.Modal(document.getElementById('editCategoryModal'));
                    editModal.show();
                } else {
                    alert("Category not found!");
                }
            } catch (error) {
                console.error("Error loading category for edit: ", error);
                alert("Failed to load category details");
            }
        }

        // Function to view menu item
        async function viewMenuItem(itemId) {
            try {
                const itemDoc = await getDoc(doc(db, "menus", itemId));
                if (itemDoc.exists()) {
                    const item = itemDoc.data();
                    const category = allCategories.find(cat => cat.categoryId === item.category);
                    const categoryName = category ? category.categoryName : 'Unknown';
                    
                    // Populate view modal
                    document.getElementById('viewItemImage').src = item.imageUrl || 'https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop';
                    document.getElementById('viewItemName').textContent = item.foodName;
                    document.getElementById('viewItemCategory').textContent = categoryName;
                    document.getElementById('viewItemPrice').textContent = `£${item.price}`;
                    document.getElementById('viewItemCookTime').textContent = item.cookedTime;
                    document.getElementById('viewItemOrders').textContent = item.orders || 0;
                    document.getElementById('viewItemShortDesc').textContent = item.shortDisc;
                    document.getElementById('viewItemFullDesc').textContent = item.disc;
                    
                    // Set status badge
                    const statusElement = document.getElementById('viewItemStatus');
                    statusElement.textContent = item.status === 'available' ? 'Available' : 'Out of Stock';
                    statusElement.className = `badge ${item.status === 'available' ? 'bg-success' : 'bg-danger'}`;
                    
                    // Set up edit button
                    document.getElementById('editFromViewBtn').onclick = () => {
                        bootstrap.Modal.getInstance(document.getElementById('viewItemModal')).hide();
                        editMenuItem(itemId);
                    };
                    
                    // Show modal
                    const viewModal = new bootstrap.Modal(document.getElementById('viewItemModal'));
                    viewModal.show();
                } else {
                    alert("Item not found!");
                }
            } catch (error) {
                console.error("Error loading item for view: ", error);
                alert("Failed to load item details");
            }
        }
        
        async function editMenuItem(itemId) {
            try {
                const itemDoc = await getDoc(doc(db, "menus", itemId));
                if (itemDoc.exists()) {
                    const item = itemDoc.data();
                    
                    // Populate edit form
                    document.getElementById('editItemId').value = itemId;
                    document.getElementById('editItemName').value = item.foodName;
                    document.getElementById('editShortDescription').value = item.shortDisc;
                    document.getElementById('editItemDescription').value = item.disc;
                    document.getElementById('editItemPrice').value = item.price;
                    document.getElementById('editPrepTime').value = item.cookedTime;
                    document.getElementById('editItemCategory').value = item.category;
                    
                    // Show current image
                    const currentImage = document.getElementById('editCurrentImage');
                    currentImage.src = item.imageUrl || 'https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=200&h=150&fit=crop';
                    currentImage.style.display = 'block';
                    
                    // Hide preview and reset file input
                    document.getElementById('editImagePreview').style.display = 'none';
                    document.getElementById('editImageUpload').value = '';
                    
                    // Show modal
                    const editModal = new bootstrap.Modal(document.getElementById('editItemModal'));
                    editModal.show();
                } else {
                    alert("Item not found!");
                }
            } catch (error) {
                console.error("Error loading item for edit: ", error);
                alert("Failed to load item details");
            }
        }

        // Load all data when page loads
        document.addEventListener('DOMContentLoaded', function() {
            loadData();
            
            // Initialize image uploads after DOM is loaded
            setTimeout(() => {
                initializeImageUploads();
            }, 100);
            
            // Re-initialize image uploads when modals are shown
            document.getElementById('addItemModal').addEventListener('shown.bs.modal', function () {
                setTimeout(() => {
                    initializeImageUploads();
                }, 100);
            });
            
            document.getElementById('editItemModal').addEventListener('shown.bs.modal', function () {
                setTimeout(() => {
                    initializeImageUploads();
                }, 100);
            });
            
            document.getElementById('addCategoryModal').addEventListener('shown.bs.modal', function () {
                setTimeout(() => {
                    initializeImageUploads();
                }, 100);
            });
            
            document.getElementById('editCategoryModal').addEventListener('shown.bs.modal', function () {
                setTimeout(() => {
                    initializeImageUploads();
                }, 100);
            });
        });
    </script>
</body>
</html>