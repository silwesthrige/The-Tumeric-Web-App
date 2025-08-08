<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews & Ratings - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .review-item {
            transition: all 0.3s ease;
        }

        .review-item:hover {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin: -15px;
            margin-bottom: 15px;
        }

        .rating i {
            font-size: 14px;
        }

        .admin-response {
            border-left: 4px solid #007bff;
        }

        .avatar-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        .bg-orange {
            background-color: #fd7e14 !important;
        }

        .loading {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
        }

        .trend-chart {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .trend-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .no-reviews {
            text-align: center;
            padding: 50px 20px;
            color: #6c757d;
        }

        .error-message {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }

        .success-message {
            background-color: #d1edff;
            border: 1px solid #bee5eb;
            color: #0c5460;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <!-- Header -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Reviews & Ratings</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn btn-sm btn-primary" onclick="refreshData()">
                    <i class="fas fa-sync-alt me-1"></i>Refresh
                </button>
            </div>
        </div>

        <!-- Review Stats -->
        <div class="row mb-4" id="statsRow">
            <div class="loading">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <!-- Rating Distribution -->
        <div class="row mb-4" id="chartsRow" style="display: none;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-chart-bar me-2"></i>Rating Distribution
                        </h5>
                    </div>
                    <div class="card-body" id="ratingDistribution">
                        <!-- Distribution will be populated here -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Review Filters -->
        <div class="card mb-4" id="filtersCard" style="display: none;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="ratingFilter" class="form-label">Rating</label>
                        <select class="form-select" id="ratingFilter">
                            <option value="">All Ratings</option>
                            <option value="5">5 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="2">2 Stars</option>
                            <option value="1">1 Star</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="dateFilter" class="form-label">Date Range</label>
                        <select class="form-select" id="dateFilter">
                            <option value="">All Time</option>
                            <option value="today">Today</option>
                            <option value="week">This Week</option>
                            <option value="month">This Month</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="anonymousFilter" class="form-label">User Type</label>
                        <select class="form-select" id="anonymousFilter">
                            <option value="">All Users</option>
                            <option value="false">Registered Users</option>
                            <option value="true">Anonymous Users</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="reviewSearch" class="form-label">Search</label>
                        <input type="text" class="form-control" id="reviewSearch" placeholder="Search reviews...">
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews List -->
        <div class="card" id="reviewsCard" style="display: none;">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-comments me-2"></i>Customer Reviews (<span id="reviewCount">0</span>)
                </h5>
            </div>
            <div class="card-body" id="reviewsList">
                <!-- Reviews will be populated here -->
            </div>
        </div>

        <!-- Loading indicator for reviews -->
        <div id="reviewsLoading" class="text-center py-5" style="display: none;">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading reviews...</span>
            </div>
        </div>
    </div>

    <!-- Details Modal -->
    <div class="modal fade" id="detailsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Review Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="detailsContent">
                    <!-- Review details will be populated here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module">
        // Import Firebase modules
        import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";
        import { getFirestore, collection, getDocs, doc, getDoc, query, orderBy, where, onSnapshot, updateDoc, addDoc, serverTimestamp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";

        // Firebase configuration
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
        const db = getFirestore(app);

        // Global variables
        let allFeedbacks = [];
        let filteredFeedbacks = [];
        let users = {};

        // Initialize the dashboard
        async function initDashboard() {
            try {
                await Promise.all([loadUsers(), loadFeedbacks()]);
                renderStats();
                renderRatingDistribution();
                renderReviews();
                setupEventListeners();
                
                // Show content
                document.getElementById('filtersCard').style.display = 'block';
                document.getElementById('reviewsCard').style.display = 'block';
                document.getElementById('chartsRow').style.display = 'flex';
            } catch (error) {
                console.error('Error initializing dashboard:', error);
                showError('Failed to load dashboard data. Please refresh the page.');
            }
        }

        // Load users data
        async function loadUsers() {
            try {
                const usersSnapshot = await getDocs(collection(db, 'users'));
                users = {};
                usersSnapshot.forEach(doc => {
                    const userData = doc.data();
                    users[doc.id] = {
                        name: userData.name || userData.displayName || 'Unknown User',
                        email: userData.email || 'No email',
                        ...userData
                    };
                });
            } catch (error) {
                console.error('Error loading users:', error);
            }
        }

        // Load feedbacks from Firestore
        async function loadFeedbacks() {
            try {
                const feedbacksQuery = query(
                    collection(db, 'feedbacks'),
                    orderBy('createdAt', 'desc')
                );
                
                const snapshot = await getDocs(feedbacksQuery);
                allFeedbacks = [];
                
                snapshot.forEach(doc => {
                    const data = doc.data();
                    allFeedbacks.push({
                        id: doc.id,
                        ...data,
                        createdAt: data.createdAt?.toDate() || new Date(),
                        updatedAt: data.updatedAt?.toDate() || new Date()
                    });
                });

                filteredFeedbacks = [...allFeedbacks];
                console.log(`Loaded ${allFeedbacks.length} feedbacks`);
            } catch (error) {
                console.error('Error loading feedbacks:', error);
                throw error;
            }
        }

        // Render statistics
        function renderStats() {
            const totalReviews = allFeedbacks.length;
            const averageRating = totalReviews > 0 
                ? (allFeedbacks.reduce((sum, f) => sum + f.rating, 0) / totalReviews).toFixed(1)
                : 0;
            
            const positiveReviews = allFeedbacks.filter(f => f.rating >= 4).length;
            const positivePercentage = totalReviews > 0 
                ? Math.round((positiveReviews / totalReviews) * 100)
                : 0;

            // Get recent reviews (this week)
            const oneWeekAgo = new Date();
            oneWeekAgo.setDate(oneWeekAgo.getDate() - 7);
            const recentReviews = allFeedbacks.filter(f => f.createdAt >= oneWeekAgo).length;

            const statsHTML = `
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title text-warning">Average Rating</h5>
                            <h2 class="text-warning">${averageRating}</h2>
                            <div class="mb-2">
                                ${generateStarRating(parseFloat(averageRating))}
                            </div>
                            <small class="text-muted">Based on ${totalReviews} reviews</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Total Reviews</h5>
                            <h2 class="text-primary">${totalReviews}</h2>
                            <small class="text-muted">+${recentReviews} this week</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title text-success">Positive Reviews</h5>
                            <h2 class="text-success">${positivePercentage}%</h2>
                            <small class="text-muted">4-5 star ratings</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title text-info">Anonymous Reviews</h5>
                            <h2 class="text-info">${allFeedbacks.filter(f => f.isAnonymous).length}</h2>
                            <small class="text-muted">Anonymous feedback</small>
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('statsRow').innerHTML = statsHTML;
        }

        // Generate star rating HTML
        function generateStarRating(rating, size = 14) {
            let stars = '';
            for (let i = 1; i <= 5; i++) {
                if (i <= rating) {
                    stars += `<i class="fas fa-star text-warning" style="font-size: ${size}px;"></i>`;
                } else if (i - 0.5 <= rating) {
                    stars += `<i class="fas fa-star-half-alt text-warning" style="font-size: ${size}px;"></i>`;
                } else {
                    stars += `<i class="far fa-star text-muted" style="font-size: ${size}px;"></i>`;
                }
            }
            return stars;
        }

        // Render rating distribution
        function renderRatingDistribution() {
            const distribution = [0, 0, 0, 0, 0]; // Index 0-4 for ratings 1-5
            
            allFeedbacks.forEach(feedback => {
                if (feedback.rating >= 1 && feedback.rating <= 5) {
                    distribution[feedback.rating - 1]++;
                }
            });

            const total = allFeedbacks.length;
            
            let distributionHTML = '';
            for (let i = 4; i >= 0; i--) { // 5 to 1 stars
                const rating = i + 1;
                const count = distribution[i];
                const percentage = total > 0 ? Math.round((count / total) * 100) : 0;
                
                let barClass = 'bg-success';
                if (rating === 4) barClass = 'bg-primary';
                else if (rating === 3) barClass = 'bg-warning';
                else if (rating === 2) barClass = 'bg-orange';
                else if (rating === 1) barClass = 'bg-danger';

                distributionHTML += `
                    <div class="d-flex align-items-center mb-3">
                        <span class="me-3">${rating} <i class="fas fa-star text-warning"></i></span>
                        <div class="progress flex-grow-1 me-3" style="height: 20px;">
                            <div class="progress-bar ${barClass}" style="width: ${percentage}%"></div>
                        </div>
                        <span class="text-muted">${percentage}% (${count})</span>
                    </div>
                `;
            }

            document.getElementById('ratingDistribution').innerHTML = distributionHTML;
        }

        // Render reviews
        function renderReviews() {
            const reviewsList = document.getElementById('reviewsList');
            const reviewCount = document.getElementById('reviewCount');
            
            reviewCount.textContent = filteredFeedbacks.length;

            if (filteredFeedbacks.length === 0) {
                reviewsList.innerHTML = `
                    <div class="no-reviews">
                        <i class="fas fa-comments fa-3x text-muted mb-3"></i>
                        <h5>No reviews found</h5>
                        <p class="text-muted">Try adjusting your filters or check back later for new reviews.</p>
                    </div>
                `;
                return;
            }

            let reviewsHTML = '';
            
            filteredFeedbacks.forEach(feedback => {
                const user = users[feedback.userId] || { name: 'Unknown User', email: 'No email' };
                const userName = feedback.isAnonymous ? 'Anonymous User' : user.name;
                const userInitials = feedback.isAnonymous ? 'AU' : getInitials(user.name);
                
                const timeAgo = getTimeAgo(feedback.createdAt);
                const categories = feedback.categories && feedback.categories.length > 0 
                    ? feedback.categories.join(', ') 
                    : 'General';

                reviewsHTML += `
                    <div class="review-item border-bottom pb-4 mb-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">${userInitials}</div>
                                <div>
                                    <h6 class="mb-1">${userName}</h6>
                                    <div class="rating mb-1">
                                        ${generateStarRating(feedback.rating)}
                                    </div>
                                    <small class="text-muted">${categories} • ${timeAgo}</small>
                                </div>
                            </div>
                            <div class="text-end">
                                ${feedback.isAnonymous ? '<span class="badge bg-secondary">Anonymous</span>' : ''}
                            </div>
                        </div>
                        <div class="review-content mb-3">
                            <p class="mb-2">"${feedback.comment || 'No comment provided'}"</p>
                        </div>
                        <div class="review-actions">
                            <button class="btn btn-outline-info btn-sm" onclick="openDetailsModal('${feedback.id}')">
                                <i class="fas fa-info-circle me-1"></i>Details
                            </button>
                        </div>
                    </div>
                `;
            });

            reviewsList.innerHTML = reviewsHTML;
        }

        // Get user initials
        function getInitials(name) {
            if (!name) return 'U';
            const names = name.trim().split(' ');
            if (names.length === 1) return names[0].charAt(0).toUpperCase();
            return (names[0].charAt(0) + names[names.length - 1].charAt(0)).toUpperCase();
        }

        // Get time ago string
        function getTimeAgo(date) {
            const now = new Date();
            const diffTime = Math.abs(now - date);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            
            if (diffDays === 1) return '1 day ago';
            if (diffDays < 7) return `${diffDays} days ago`;
            if (diffDays < 30) return `${Math.ceil(diffDays / 7)} weeks ago`;
            if (diffDays < 365) return `${Math.ceil(diffDays / 30)} months ago`;
            return `${Math.ceil(diffDays / 365)} years ago`;
        }

        // Filter reviews
        function filterReviews() {
            const ratingFilter = document.getElementById('ratingFilter').value;
            const dateFilter = document.getElementById('dateFilter').value;
            const anonymousFilter = document.getElementById('anonymousFilter').value;
            const searchTerm = document.getElementById('reviewSearch').value.toLowerCase();

            filteredFeedbacks = allFeedbacks.filter(feedback => {
                // Rating filter
                if (ratingFilter && feedback.rating.toString() !== ratingFilter) {
                    return false;
                }

                // Date filter
                if (dateFilter) {
                    const now = new Date();
                    const feedbackDate = feedback.createdAt;
                    
                    switch (dateFilter) {
                        case 'today':
                            if (feedbackDate.toDateString() !== now.toDateString()) return false;
                            break;
                        case 'week':
                            const oneWeekAgo = new Date(now.getTime() - 7 * 24 * 60 * 60 * 1000);
                            if (feedbackDate < oneWeekAgo) return false;
                            break;
                        case 'month':
                            const oneMonthAgo = new Date(now.getTime() - 30 * 24 * 60 * 60 * 1000);
                            if (feedbackDate < oneMonthAgo) return false;
                            break;
                    }
                }

                // Anonymous filter
                if (anonymousFilter) {
                    const isAnonymous = anonymousFilter === 'true';
                    if (feedback.isAnonymous !== isAnonymous) return false;
                }

                // Search filter
                if (searchTerm) {
                    const searchableText = [
                        feedback.comment || '',
                        feedback.categories?.join(' ') || '',
                        feedback.isAnonymous ? 'anonymous' : users[feedback.userId]?.name || ''
                    ].join(' ').toLowerCase();
                    
                    if (!searchableText.includes(searchTerm)) return false;
                }

                return true;
            });

            renderReviews();
        }

        // Setup event listeners
        function setupEventListeners() {
            document.getElementById('ratingFilter').addEventListener('change', filterReviews);
            document.getElementById('dateFilter').addEventListener('change', filterReviews);
            document.getElementById('anonymousFilter').addEventListener('change', filterReviews);
            document.getElementById('reviewSearch').addEventListener('input', filterReviews);
        }

        // Open details modal
        window.openDetailsModal = function(reviewId) {
            const feedback = allFeedbacks.find(f => f.id === reviewId);
            if (!feedback) return;

            const user = users[feedback.userId] || { name: 'Unknown User', email: 'No email' };
            const userName = feedback.isAnonymous ? 'Anonymous User' : user.name;
            const userEmail = feedback.isAnonymous ? 'Anonymous' : user.email;
            
            const categories = feedback.categories && feedback.categories.length > 0 
                ? feedback.categories.join(', ') 
                : 'General';

            document.getElementById('detailsContent').innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-muted mb-2">Customer Information</h6>
                        <p><strong>Name:</strong> ${userName}</p>
                        <p><strong>Email:</strong> ${userEmail}</p>
                        <p><strong>User Type:</strong> ${feedback.isAnonymous ? 'Anonymous' : 'Registered'}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted mb-2">Review Information</h6>
                        <p><strong>Rating:</strong> ${generateStarRating(feedback.rating)} (${feedback.rating}/5)</p>
                        <p><strong>Categories:</strong> ${categories}</p>
                        <p><strong>Date:</strong> ${feedback.createdAt.toLocaleDateString()} at ${feedback.createdAt.toLocaleTimeString()}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h6 class="text-muted mb-2">Review Comment</h6>
                        <div class="bg-light p-3 rounded">
                            <p class="mb-0">${feedback.comment || 'No comment provided'}</p>
                        </div>
                    </div>
                </div>
                ${feedback.updatedAt && feedback.updatedAt.getTime() !== feedback.createdAt.getTime() ? `
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p class="text-muted small mb-0"><i class="fas fa-edit me-1"></i>Last updated: ${feedback.updatedAt.toLocaleDateString()} at ${feedback.updatedAt.toLocaleTimeString()}</p>
                    </div>
                </div>
                ` : ''}
            `;

            new bootstrap.Modal(document.getElementById('detailsModal')).show();
        };

        // Refresh data
        window.refreshData = async function() {
            document.getElementById('statsRow').innerHTML = `
                <div class="loading">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            `;
            
            await initDashboard();
            showSuccess('Data refreshed successfully!');
        };

        // Show error message
        function showError(message) {
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.innerHTML = `<i class="fas fa-exclamation-triangle me-2"></i>${message}`;
            document.body.insertBefore(errorDiv, document.body.firstChild);
            
            setTimeout(() => errorDiv.remove(), 5000);
        }

        // Show success message
        function showSuccess(message) {
            const successDiv = document.createElement('div');
            successDiv.className = 'success-message';
            successDiv.innerHTML = `<i class="fas fa-check-circle me-2"></i>${message}`;
            document.body.insertBefore(successDiv, document.body.firstChild);
            
            setTimeout(() => successDiv.remove(), 3000);
        }

        // Initialize dashboard when page loads
        document.addEventListener('DOMContentLoaded', initDashboard);
    </script>
</body>
</html>