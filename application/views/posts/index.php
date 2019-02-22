<h2><?php echo $title ?></h2>
<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <small class="post-date"> Posted on: <?php echo $post['create_at']?><br></small>
    <?php echo $post['body']; ?>
    <br><br>
<p><a class="btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a></p>
<?php endforeach; ?>
