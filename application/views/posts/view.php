<br>
<h3><?php echo $post['title']; ?></h3>


<div class="row"> 
	<div class="col-md-12">
		
		<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
		<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
	</div>
</div>
<div class = "post-body">
	
	<?php echo $post['body']; ?>
</div>

<hr>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form>
<a class="btn btn-info" href="edit/<?php echo $post['slug']; ?>">Edit</a>