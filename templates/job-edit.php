<?php include 'inc/header.php' ?>
<h2 class="page-header">Edit Job Listing</h2>
<form action="edit.php?id=<?= $job->id; ?>" method="post">
    <div>
        <label style="margin-top:3px;">company</label>
        <input type="text" class="form-control" name="company" value="<?= $job->company ?>">
    </div>
    <div style="margin-top:3px;">
        <label style="margin-top:3px;">Category</label>
        <select class="form-control" name="category">

            <option value="0">Choose Category</option>
            <?php foreach ($categories as $category): ?>
                <?php if ($job->category_id == $category->id): ?>
                    <option selected value="<?= $category->id ?>"><?php echo $category->name ?></option>
                <?php else: ?>
                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php endif; ?>

            <?php endforeach; ?>
        </select>
    </div>
    <div style="margin-top:3px;">
        <label style="margin-top:3px;">Job Title</label>
        <input type="text" class="form-control" name="job_title" value="<?= $job->job_title ?>">
    </div>
    <div style="margin-top:3px;">
        <label style="margin-top:3px;">Description</label>
        <textarea class="form-control" name="description"><?= $job->description ?></textarea>
    </div>
    <div style="margin-top:3px;">
        <label style="margin-top:3px;">Location</label>
        <input type="text" class="form-control" name="location" value="<?= $job->location ?>">
    </div>
    <div style="margin-top:3px;">
        <label style="margin-top:3px;">Salary</label>
        <input type="text" class="form-control" name="salary" value="<?= $job->salary ?>">
    </div>
    <div style="margin-top:3px;">
        <label style="margin-top:3px;">Contact User</label>
        <input type="text" class="form-control" name="contact_user" value="<?= $job->contact_user ?>">
    </div>
    <div style="margin-top: 3px;">
        <label style="margin-top:3px;">Contact Email</label>
        <input type="email" class="form-control" name="contact_email" value="<?= $job->contact_email ?>">
    </div>
    <input style="margin:5px;" type="submit" class="btn btn-secondary" value="submit" name="submit">
</form>
<?php include 'inc/footer.php' ?>