<?php echo form_open('users/login'); ?>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1 class="text-center"><?php echo $title ?></h1>
      <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Enter password" required autofocus>
      </div>
      <button type="submit" class="btn btn-outline-primary" name="button">Login</button>
    </div>

  </div>

<?php echo form_close(); ?>
