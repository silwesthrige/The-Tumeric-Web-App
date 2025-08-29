<footer class="footer mt-auto py-3 bg-light border-top">
  <div class="container-fluid">
    <div class="row align-items-center">
      <!-- Left side -->
      <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
        <p class="mb-0 text-muted">
          &copy; <?php echo date('Y'); ?> <strong>Food Delivery Admin Dashboard</strong>. All rights reserved.
        </p>
        <small class="text-muted me-3">Version 1.0.0</small>
      </div>

      <!-- Right side -->
      <div class="col-md-6 text-center text-md-end">
        <small class="text-muted me-3">Contact Us : </small>
        <!-- WhatsApp -->
        <a href="https://wa.me/+94771656886" target="_blank" rel="noopener noreferrer" 
           class="icon-link text-success me-3">
          <i class="bi bi-whatsapp fs-5"></i>
        </a>
        <!-- Gmail compose -->
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=matheeshaanajan01@gmail.com" 
           target="_blank" rel="noopener noreferrer" 
           class="icon-link text-danger me-3">
          <i class="bi bi-envelope-fill fs-5"></i>
        </a>
        <!-- Location -->
         <a href="https://www.google.com/maps/place/Colombo,+Sri+Lanka/" 
           target="_blank" rel="noopener noreferrer" 
           class="icon-link text-primary">
          <i class="bi bi-geo-alt-fill fs-5"></i>
        </a>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<!-- Custom CSS -->
<style>
  .icon-link {
    transition: transform 0.2s ease, color 0.2s ease;
  }
  .icon-link:hover {
    transform: scale(1.2);
    opacity: 0.8;
  }
</style>
