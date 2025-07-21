<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Reviews & Ratings</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-primary">
            <i class="fas fa-reply me-1"></i>Respond to Reviews
        </button>
    </div>
</div>

<!-- Review Stats -->
<div class="row mb-4">
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-warning">Average Rating</h5>
                <h2 class="text-warning">4.8</h2>
                <div class="mb-2">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </div>
                <small class="text-muted">Based on 1,247 reviews</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-primary">Total Reviews</h5>
                <h2 class="text-primary">1,247</h2>
                <small class="text-muted">+23 this week</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-success">Positive Reviews</h5>
                <h2 class="text-success">89%</h2>
                <small class="text-muted">4-5 star ratings</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title text-danger">Pending Responses</h5>
                <h2 class="text-danger">12</h2>
                <small class="text-muted">Need attention</small>
            </div>
        </div>
    </div>
</div>

<!-- Rating Distribution -->
<div class="row mb-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-chart-bar me-2"></i>Rating Distribution
                </h5>
            </div>
            <div class="card-body">
                <div class="rating-distribution">
                    <div class="d-flex align-items-center mb-3">
                        <span class="me-3">5 <i class="fas fa-star text-warning"></i></span>
                        <div class="progress flex-grow-1 me-3" style="height: 20px;">
                            <div class="progress-bar bg-success" style="width: 68%"></div>
                        </div>
                        <span class="text-muted">68% (847)</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <span class="me-3">4 <i class="fas fa-star text-warning"></i></span>
                        <div class="progress flex-grow-1 me-3" style="height: 20px;">
                            <div class="progress-bar bg-primary" style="width: 21%"></div>
                        </div>
                        <span class="text-muted">21% (262)</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <span class="me-3">3 <i class="fas fa-star text-warning"></i></span>
                        <div class="progress flex-grow-1 me-3" style="height: 20px;">
                            <div class="progress-bar bg-warning" style="width: 7%"></div>
                        </div>
                        <span class="text-muted">7% (87)</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <span class="me-3">2 <i class="fas fa-star text-warning"></i></span>
                        <div class="progress flex-grow-1 me-3" style="height: 20px;">
                            <div class="progress-bar bg-orange" style="width: 3%"></div>
                        </div>
                        <span class="text-muted">3% (37)</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="me-3">1 <i class="fas fa-star text-warning"></i></span>
                        <div class="progress flex-grow-1 me-3" style="height: 20px;">
                            <div class="progress-bar bg-danger" style="width: 1%"></div>
                        </div>
                        <span class="text-muted">1% (14)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-trending-up me-2"></i>Review Trends
                </h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="reviewTrendChart" style="height: 200px;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Review Filters -->
<div class="card mb-4">
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
                <label for="statusFilter" class="form-label">Response Status</label>
                <select class="form-select" id="statusFilter">
                    <option value="">All Reviews</option>
                    <option value="responded">Responded</option>
                    <option value="pending">Pending Response</option>
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
                <label for="reviewSearch" class="form-label">Search</label>
                <input type="text" class="form-control" id="reviewSearch" placeholder="Search reviews...">
            </div>
        </div>
    </div>
</div>

<!-- Reviews List -->
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">
            <i class="fas fa-comments me-2"></i>Customer Reviews
        </h5>
    </div>
    <div class="card-body">
        <div class="review-item border-bottom pb-4 mb-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div class="d-flex align-items-center">
                    <div class="avatar-circle me-3">JD</div>
                    <div>
                        <h6 class="mb-1">John Doe</h6>
                        <div class="rating mb-1">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <small class="text-muted">Order #1234 • 2 hours ago</small>
                    </div>
                </div>
                <div class="text-end">
                    <span class="badge bg-danger">Pending Response</span>
                </div>
            </div>
            <div class="review-content mb-3">
                <p class="mb-2">"Excellent food quality and fast delivery! The chicken biryani was perfectly cooked and the flavors were amazing. Will definitely order again."</p>
                <div class="review-images">
                    <img src="https://images.pexels.com/photos/1893556/pexels-photo-1893556.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" 
                         alt="Review Image" class="rounded me-2" width="60" height="60">
                </div>
            </div>
            <div class="review-actions">
                <button class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#responseModal">
                    <i class="fas fa-reply me-1"></i>Respond
                </button>
                <button class="btn btn-outline-success btn-sm me-2">
                    <i class="fas fa-thumbs-up me-1"></i>Helpful
                </button>
                <button class="btn btn-outline-warning btn-sm">
                    <i class="fas fa-flag me-1"></i>Flag
                </button>
            </div>
        </div>

        <div class="review-item border-bottom pb-4 mb-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div class="d-flex align-items-center">
                    <div class="avatar-circle me-3">JS</div>
                    <div>
                        <h6 class="mb-1">Jane Smith</h6>
                        <div class="rating mb-1">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-muted"></i>
                        </div>
                        <small class="text-muted">Order #1235 • 1 day ago</small>
                    </div>
                </div>
                <div class="text-end">
                    <span class="badge bg-success">Responded</span>
                </div>
            </div>
            <div class="review-content mb-3">
                <p class="mb-2">"Good pizza but delivery was a bit slow. The taste was great though and the portion size was generous."</p>
            </div>
            <div class="admin-response bg-light p-3 rounded mb-3">
                <div class="d-flex align-items-center mb-2">
                    <i class="fas fa-store me-2 text-primary"></i>
                    <strong>Restaurant Response</strong>
                    <small class="text-muted ms-auto">1 day ago</small>
                </div>
                <p class="mb-0">"Thank you for your feedback, Jane! We apologize for the delay and are working to improve our delivery times. We're glad you enjoyed the pizza!"</p>
            </div>
            <div class="review-actions">
                <button class="btn btn-outline-primary btn-sm me-2">
                    <i class="fas fa-edit me-1"></i>Edit Response
                </button>
                <button class="btn btn-outline-success btn-sm me-2">
                    <i class="fas fa-thumbs-up me-1"></i>Helpful
                </button>
            </div>
        </div>

        <div class="review-item border-bottom pb-4 mb-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div class="d-flex align-items-center">
                    <div class="avatar-circle me-3">MJ</div>
                    <div>
                        <h6 class="mb-1">Mike Johnson</h6>
                        <div class="rating mb-1">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                        </div>
                        <small class="text-muted">Order #1236 • 2 days ago</small>
                    </div>
                </div>
                <div class="text-end">
                    <span class="badge bg-danger">Pending Response</span>
                </div>
            </div>
            <div class="review-content mb-3">
                <p class="mb-2">"Food was cold when it arrived and the burger was not as described. Very disappointed with this order."</p>
            </div>
            <div class="review-actions">
                <button class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#responseModal">
                    <i class="fas fa-reply me-1"></i>Respond
                </button>
                <button class="btn btn-outline-warning btn-sm me-2">
                    <i class="fas fa-phone me-1"></i>Call Customer
                </button>
                <button class="btn btn-outline-info btn-sm">
                    <i class="fas fa-gift me-1"></i>Offer Compensation
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Response Modal -->
<div class="modal fade" id="responseModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Respond to Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Customer Review</label>
                    <div class="bg-light p-3 rounded">
                        <div class="d-flex align-items-center mb-2">
                            <strong>John Doe</strong>
                            <div class="rating ms-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                        <p class="mb-0">"Excellent food quality and fast delivery! The chicken biryani was perfectly cooked and the flavors were amazing. Will definitely order again."</p>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="responseText" class="form-label">Your Response</label>
                    <textarea class="form-control" id="responseText" rows="4" placeholder="Thank you for your review..."></textarea>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="offerDiscount">
                        <label class="form-check-label" for="offerDiscount">
                            Offer discount for next order
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Send Response</button>
            </div>
        </div>
    </div>
</div>

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
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Review trend chart
    const trendCtx = document.getElementById('reviewTrendChart');
    if (trendCtx) {
        const ctx = trendCtx.getContext('2d');
        
        trendCtx.width = trendCtx.offsetWidth;
        trendCtx.height = 200;
        
        ctx.strokeStyle = '#28a745';
        ctx.lineWidth = 3;
        ctx.beginPath();
        
        const trendPoints = [
            {x: 50, y: 150}, {x: 150, y: 120}, {x: 250, y: 100},
            {x: 350, y: 80}, {x: 450, y: 60}, {x: 550, y: 40}
        ];
        
        ctx.moveTo(trendPoints[0].x, trendPoints[0].y);
        for (let i = 1; i < trendPoints.length; i++) {
            ctx.lineTo(trendPoints[i].x, trendPoints[i].y);
        }
        ctx.stroke();
        
        // Add labels
        ctx.fillStyle = '#666';
        ctx.font = '12px Arial';
        ctx.fillText('Review count trend (last 6 months)', 50, 30);
    }
});

// Filter reviews
function filterReviews() {
    const ratingFilter = document.getElementById('ratingFilter').value;
    const statusFilter = document.getElementById('statusFilter').value;
    const searchTerm = document.getElementById('reviewSearch').value.toLowerCase();
    
    // In a real application, this would filter the reviews
    console.log('Filtering reviews:', { ratingFilter, statusFilter, searchTerm });
}

// Add event listeners for filters
document.getElementById('ratingFilter').addEventListener('change', filterReviews);
document.getElementById('statusFilter').addEventListener('change', filterReviews);
document.getElementById('reviewSearch').addEventListener('input', filterReviews);
</script>