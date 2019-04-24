<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
<!--<form action="--><?php //base_url('posts/create') ?><!--">-->
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control"  name="title" placeholder="Add title">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" id="editor1" name="body" placeholder="Add body"></textarea>
    </div>
    <div class="form-group">
        <label for="">Category</label>
        <select name="category_id" class="form-control">
            <?php foreach ($categories as $category ): ?>
                <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
            <?php endforeach; ?>
        </select>
    </div>
<!--    <input id="datepicker" name="create_at" width="276" />-->
    <div class="form-group">
        <label>Upload Image</label>
        <input type="file" name="postfile" size="20">
    </div>
    <div style="text-align: center"><button type="submit" class="btn btn-primary">Submit</button></div>
</form>
