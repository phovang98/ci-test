<h2><?php echo $post['title']; ?></h2>
<small class="post-date"> Posted on: <?php echo $post['create_at']?><br></small>
<img src="<?php echo base_url('public/images/posts/'); ?><?php echo $post['post_image'];?>" alt="">
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-info" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
