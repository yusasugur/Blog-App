<h2>
    <?= $title ?>
</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
<form>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" rows="2"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach ($categories as $category): ?>
      <option value="<?php echo $category['id']; ?>">
          <?php echo $category['name']; ?>
       </option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <input type="file" name="userfile" value="20">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
