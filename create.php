<?php
include_once 'config/init.php';
?>
<?php
$job = new Job;
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
         redirect('create.php', "Please Fill all fields and choose a category", 'error');
      }else{
         addslashes($value);
      }
   }
   if ($job->create($data)) {
      redirect('index.php', "Your job has been listed", 'success');
   } else {
      redirect('index.php', "Something Went Wrong", 'error');
   }
}
$template = new Template('templates/job-create.php');
$template->categories = $job->getCategories();
echo $template;
