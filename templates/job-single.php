<?php include 'inc/header.php' ?>
<h2 class="page-header"><?= $job->job_title;?> (<?= $job->location ?>)</h2>
<small>Posted By: <?= $job->contact_user; ?> On <?= $job->post_date?> </small>
<hr>
<p class="lead"><?= $job->description ?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Company: </strong><?=  $job->company ?></li>
    <li class="list-group-item"><strong>Salary: </strong><?= $job->salary ?></li>
    <li class="list-group-item"><strong>Contact Email: </strong><?=  $job->contact_email ?></li>
</ul>
<br><br>
<a href="index.php" style="text-decoration: none;">Go Back</a>
<br><br>
<div class="well">
    <a href="edit.php?id=<?= $job->id; ?>" class="btn btn-secondary">Edit</a>
    <form style="display: inline;" method="post" action="job.php">
        <input type="hidden" name="del_id" value="<?=$job->id?>">
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>
<br>

<?php include 'inc/footer.php' ?>
