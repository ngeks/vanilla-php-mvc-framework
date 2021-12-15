<?php require APPROOT . '/views/includes/header.php'; ?>
<section class="py-5 text-center bg-light rounded-3 container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light"><?php echo $data['title']; ?></h1>
      <p class="lead text-muted"><?php echo $data['description']; ?></p>
    </div>
  </div>
</section>
<?php require APPROOT . '/views/includes/footer.php'; ?>