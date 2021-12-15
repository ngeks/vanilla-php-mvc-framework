<?php require APPROOT . '/views/includes/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <p>
    <strong>Email: </strong><?php echo $data['email']; ?><br />
    <strong>Project: </strong><a href="<?php echo $data['github']; ?>"><?php echo $data['github']; ?></a><br />
    <strong>Version: </strong><?php echo $data['version']; ?>
  </p>
<?php require APPROOT . '/views/includes/footer.php'; ?>