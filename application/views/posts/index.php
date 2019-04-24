<h2><?php echo $title ?></h2>
<a class="btn btn-success float-right" href="<?php echo base_url();?>posts/create">Create Post</a>
<div class="clearfix"></div>
<?php foreach ($posts as $post) : ?>
    <div class="row">
        <div class="col-md-3">
            <img class="thumbnail" src="<?php echo base_url('public/images/posts/');?><?php echo $post['post_image']; ?>" alt="">
        </div>
        <div class="col-md-9">
            <h3><?php echo $post['title']; ?></h3>
            <small class="post-date"> Posted on: <?php echo $post['create_at']?> in <strong><?php echo $post['name'] ?></strong></small><br>
            <?php echo word_limiter($post['body'], 70); ?>
            <br><br>
            <p><a class="btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a></p>
        </div>
    </div>

<?php endforeach; ?>
