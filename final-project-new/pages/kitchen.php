<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kitchen Management</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-sync me-1"></i>Refresh
            </button>
        </div>
        <button type="button" class="btn btn-sm btn-success">
            <i class="fas fa-play me-1"></i>Start Kitchen
        </button>
    </div>
</div>

<!-- Kitchen Stats -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card text-center border-warning">
            <div class="card-body">
                <h5 class="card-title text-warning">Queue</h5>
                <h2 class="text-warning">8</h2>
                <small class="text-muted">Orders waiting</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center border-primary">
            <div class="card-body">
                <h5 class="card-title text-primary">Preparing</h5>
                <h2 class="text-primary">5</h2>
                <small class="text-muted">In progress</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center border-success">
            <div class="card-body">
                <h5 class="card-title text-success">Ready</h5>
                <h2 class="text-success">3</h2>
                <small class="text-muted">For pickup</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center border-info">
            <div class="card-body">
                <h5 class="card-title text-info">Avg Time</h5>
                <h2 class="text-info">18m</h2>
                <small class="text-muted">Preparation time</small>
            </div>
        </div>
    </div>
</div>

<!-- Kitchen Board -->
<div class="row">
    <!-- Queue Column -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h5 class="card-title mb-0">
                    <i class="fas fa-clock me-2"></i>Queue (8)
                </h5>
            </div>
            <div class="card-body p-2">
                <div class="kitchen-order-card mb-3">
                    <div class="card border-warning">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h6 class="card-title mb-0">#1234</h6>
                                <span class="badge bg-warning">5 min ago</span>
                            </div>
                            <div class="order-items mb-2">
                                <div class="item">
                                    <strong>2x Chicken Biryani</strong>
                                    <div class="text-muted small">Extra spicy, No onions</div>
                                </div>
                                <div class="item">
                                    <strong>2x Raita</strong>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">John Doe</small>
                                <button class="btn btn-primary btn-sm" onclick="moveToPreparation(1234)">
                                    <i class="fas fa-play me-1"></i>Start
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kitchen-order-card mb-3">
                    <div class="card border-warning">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h6 class="card-title mb-0">#1235</h6>
                                <span class="badge bg-warning">8 min ago</span>
                            </div>
                            <div class="order-items mb-2">
                                <div class="item">
                                    <strong>1x Pizza Margherita</strong>
                                    <div class="text-muted small">Large, Extra cheese</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Jane Smith</small>
                                <button class="btn btn-primary btn-sm" onclick="moveToPreparation(1235)">
                                    <i class="fas fa-play me-1"></i>Start
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preparing Column -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">
                    <i class="fas fa-fire me-2"></i>Preparing (5)
                </h5>
            </div>
            <div class="card-body p-2">
                <div class="kitchen-order-card mb-3">
                    <div class="card border-primary">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h6 class="card-title mb-0">#1230</h6>
                                <span class="badge bg-primary">12 min</span>
                            </div>
                            <div class="order-items mb-2">
                                <div class="item">
                                    <strong>1x Burger Combo</strong>
                                    <div class="text-muted small">No pickles, Extra sauce</div>
                                </div>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-primary" style="width: 75%"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Mike Johnson</small>
                                <button class="btn btn-success btn-sm" onclick="moveToReady(1230)">
                                    <i class="fas fa-check me-1"></i>Ready
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kitchen-order-card mb-3">
                    <div class="card border-primary">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h6 class="card-title mb-0">#1231</h6>
                                <span class="badge bg-primary">8 min</span>
                            </div>
                            <div class="order-items mb-2">
                                <div class="item">
                                    <strong>2x Pasta Alfredo</strong>
                                </div>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-primary" style="width: 45%"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Sarah Wilson</small>
                                <button class="btn btn-success btn-sm" onclick="moveToReady(1231)">
                                    <i class="fas fa-check me-1"></i>Ready
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ready Column -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="card-title mb-0">
                    <i class="fas fa-check-circle me-2"></i>Ready (3)
                </h5>
            </div>
            <div class="card-body p-2">
                <div class="kitchen-order-card mb-3">
                    <div class="card border-success">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h6 class="card-title mb-0">#1228</h6>
                                <span class="badge bg-success">Ready</span>
                            </div>
                            <div class="order-items mb-2">
                                <div class="item">
                                    <strong>1x Chicken Tikka</strong>
                                </div>
                                <div class="item">
                                    <strong>2x Naan</strong>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">David Brown</small>
                                <button class="btn btn-info btn-sm" onclick="notifyDelivery(1228)">
                                    <i class="fas fa-bell me-1"></i>Notify
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kitchen-order-card mb-3">
                    <div class="card border-success">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h6 class="card-title mb-0">#1229</h6>
                                <span class="badge bg-success">Ready</span>
                            </div>
                            <div class="order-items mb-2">
                                <div class="item">
                                    <strong>1x Fish Curry</strong>
                                </div>
                                <div class="item">
                                    <strong>2x Rice</strong>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Lisa Garcia</small>
                                <button class="btn btn-info btn-sm" onclick="notifyDelivery(1229)">
                                    <i class="fas fa-bell me-1"></i>Notify
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.kitchen-order-card {
    transition: all 0.3s ease;
}

.kitchen-order-card:hover {
    transform: translateY(-2px);
}

.order-items .item {
    margin-bottom: 5px;
}

.order-items .item:last-child {
    margin-bottom: 0;
}

.progress {
    background-color: rgba(0,0,0,0.1);
}
</style>

<script>
function moveToPreparation(orderId) {
    showNotification(`Order #${orderId} moved to preparation`, 'success');
    // Here you would implement the actual move logic
}

function moveToReady(orderId) {
    showNotification(`Order #${orderId} is ready for pickup`, 'success');
    // Here you would implement the actual move logic
}

function notifyDelivery(orderId) {
    showNotification(`Delivery team notified for order #${orderId}`, 'info');
    // Here you would implement the notification logic
}

// Auto-refresh kitchen board every 30 seconds
setInterval(function() {
    // In a real application, this would fetch updated data from the server
    console.log('Refreshing kitchen board...');
}, 30000);
</script>