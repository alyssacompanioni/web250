<?php 
require_once('../private/initialize.php');

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['member'];
  $member = new Member($args);
  $result = $member->save();

  if($result === true) {
    $new_id = $member->id;
    $session->message('Your member account was created successfully.');
    $session->login($member);
    redirect_to(url_for('/index.php'));
  } else {
    // show errors
  }

} else {
  // display the form
  $member = new Member;
}
?>
<?php $page_title = 'Create a Member Account'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/members/index.php'); ?>">&laquo; Back to List</a>

  <div class="member new">
    <h1>Create a Member</h1>

    <?php echo display_errors($member->errors); ?>

    <form action="<?php echo url_for('/index.php'); ?>" method="post">

      <?php include('members/form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create a Member Account" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
?>
