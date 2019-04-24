<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('users/create'); ?>
<!--<form action="--><?php //base_url('posts/create') ?><!--">-->
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control"  name="name" placeholder="Add name">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control"  name="username" placeholder="Add username">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control"  name="password" placeholder="Add password">
    </div>
<div class="form-group">
    <label>Re-Password</label>
    <input type="password" class="form-control"  name="re-password" placeholder="Add re-password">
</div>
    <div style="text-align: center"><button type="submit" class="btn btn-primary">Submit</button></div>
</form>
