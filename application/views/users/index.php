<h2><?php echo $title ?></h2>
<a class="btn btn-success float-right" href="<?php echo base_url('users/create');?>">Create User</a>
<div class="clearfix"></div>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
    <tr class="table-primary">
        <th scope="row"><?= $user['id']?></th>
        <td><?= $user['name']?></td>
        <td><?= $user['username']?></td>
        <td><?= $user['password']?></td>
    </tr>
    <?php endforeach; ?>
</table>