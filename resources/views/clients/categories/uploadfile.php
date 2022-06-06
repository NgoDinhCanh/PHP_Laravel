<h1>Add Chuyen muc</h1>

<form action="<?php echo route('categories.uploadfile'); ?>" method="POST" enctype="multipart/form-data">
    <div>
        <input type="file" name="photo" id="" />
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit">Upload file</button>
</form>