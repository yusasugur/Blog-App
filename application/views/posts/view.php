<h2><?= $post['title'] ?></h2>

<small class="post-date" >Posted on: <?php echo $post["created_at"]; ?></small> <br>

<div class="post-body">
  <?php echo $post['body']; ?>
</div>

<?php if ($this->session->userdata('user_id')==$post['user_id']): ?>

<hr>
<a class="btn btn-outline-primary" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>

<?php echo form_open('posts/delete/'.$post['id']) ?>
<input type="submit" value="Delete" class="btn btn-outline-danger">
</form>
<hr>
<?php endif; ?>

<?php foreach ($comments as $comment): ?>
<h3><?php echo $comment['name']; ?></h3>
<p><?php echo $comment['email']; ?></p>
<small><?php echo $comment['body'] ?></small>
<?php endforeach; ?>
<hr>


<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
<div class="form-group">
  <label>Name</label>
  <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
  <label>Email</label>
  <input type="text" name="email" class="form-control">
</div>
<div class="form-group">
  <label>Body</label>
  <textarea name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
