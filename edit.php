<?php
include_once 'config/init.php';
?>
<?php
$job = new Job;
$job_id = isset($_GET['id']) ? $_GET['id'] : null;
if (isset($_POST['submit'])) {
   // Create Data array
   $data = array();
   $data['job_title'] = $_POST['job_title'];
   $data['company'] = $_POST['company'];
   $data['category_id'] = $_POST['category'];
   $data['description'] = $_POST['description'];
   $data['location'] = $_POST['location'];
   $data['salary'] = $_POST['salary'];
   $data['contact_email'] = $_POST['contact_email'];
   $data['contact_user'] = $_POST['contact_user'];
   foreach ($data as $key => $value) {
      if (empty($value) || $value == 0) {
         redirect('edit.php', "Please Fill all fields and choose a category", 'error');
      }else{
         addslashes($value);
      }
   }
  
   if ($job->update($job_id, $data)) {
      redirect('index.php', "Your job has been Updated", 'success');
   } else {
      redirect('index.php', "Something Went Wrong", 'error');
   }
}
$template = new Template('templates/job-edit.php');
$template->job = $job->getJob($job_id);

$template->categories = $job->getCategories();
echo $template;
