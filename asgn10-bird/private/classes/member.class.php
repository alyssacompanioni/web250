<?php 

class Member extends DatabaseObject {

  static protected $table_name = "members";
  static protected $db_columns = ['id', 'first_name', 'last_name', 'email', 'username', 'hashed_password', 'member_type'];

  public $id;
  public $first_name;
  public $last_name;
  public $email;
  public $username;
  public $password;
  public $confirm_password;
  protected $hashed_password;
  protected $password_required = true;
  public $member_type = 'm';
  




}
?>
