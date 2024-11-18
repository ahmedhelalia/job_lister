<?php include 'inc/header.php' ?>
<h2 class="page-header">Create Job Listing</h2>
<form action="create.php" method="post">
<div  >
    <label style="margin-top:3px;">company</label>
    <input type="text" class="form-control" name="company">
</div>
<div style="margin-top:3px;" >
    <label style="margin-top:3px;">Category</label>
    <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php endforeach; ?>
        </select>
</div>
<div style="margin-top:3px;" >
    <label style="margin-top:3px;">Job Title</label>
    <input type="text" class="form-control" name="job_title">
</div>
<div style="margin-top:3px;">
    <label style="margin-top:3px;">Description</label>
    <textarea class="form-control" name="description"></textarea>
</div>
<div style="margin-top:3px;">
    <label style="margin-top:3px;">Location</label>
    <input type="text" class="form-control" name="location">
</div>
<div style="margin-top:3px;" >
    <label style="margin-top:3px;">Salary</label>
    <input type="text" class="form-control" name="salary">
</div>
<div style="margin-top:3px;" >
    <label style="margin-top:3px;">Contact User</label>
    <input type="text" class="form-control" name="contact_user">
</div>
<div style="margin-top: 3px;">
    <label style="margin-top:3px;">Contact Email</label>
    <input type="email" class="form-control" name="contact_email">
</div>
<input style="margin:5px;" type="submit" class="btn btn-secondary" value="submit" name="submit">
</form>
<?php include 'inc/footer.php' ?>