<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if (!isset($member)) {
  redirect_to(url_for('/members/index.php'));
}
?>

<dl>
  <dt>First name</dt>
  <dd><input type="text" name="member[first_name]" value="<?php echo h($member->first_name); ?>" /></dd>
</dl>

<dl>
  <dt>Last name</dt>
  <dd><input type="text" name="member[last_name]" value="<?php echo h($member->last_name); ?>" /></dd>
</dl>

<dl>
  <dt>Email</dt>
  <dd><input type="text" name="member[email]" value="<?php echo h($member->email); ?>" /></dd>
</dl>

<?php if($session->is_admin_logged_in()) { ?> 
  <dl>
    <dt>Member Type</dt>
    <dd>
      <select name="member[member_type]" value="">
        <option value="m" <?php if($member->member_type === "m") { echo 'selected'; } ?>>Member</option>
        <option value="a" <?php if($member->member_type === "a") { echo 'selected'; } ?> >Admin</option>
      </select>
    </dd>
  </dl>
<?php } ?>

<dl>
  <dt>Username</dt>
  <dd><input type="text" name="member[username]" value="<?php echo h($member->username); ?>" /></dd>
</dl>

<dl>
  <dt>Password</dt>
  <dd><input type="password" name="member[password]" value="" /></dd>
</dl>

<dl>
  <dt>Confirm Password</dt>
  <dd><input type="password" name="member[confirm_password]" value="" /></dd>
</dl>
