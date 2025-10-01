<?php

class ParseCSV {

  public static $delimiter = ',';

  private $filename;
  private $header;
  private $data=[];
  private $row_count = 0;

  //How: This function sets the $filename handler by using the file($filename) function 
  //Why: Creates a file handler variable to easily reference for opening/closing the file
  public function __construct($filename='') {
    if($filename != '') {
      $this->file($filename);
    }
  }

  //How: returns a boolean value that is used by the __construct($filename) method to ensure that the file is usable
  //Why: This function provides built-in error checking to make sure the file exists and is readable 
  public function file($filename) {
    if(!file_exists($filename)) {
      echo "File does not exist.";
      return false;
    } elseif(!is_readable($filename)) {
      echo "File is not readable.";
      return false;
    }
    $this->filename = $filename;
    return true;
  }

  //How: This function ensures the file is set, resets the instance of any parser object that has possibly read the data from the CSV file already (to prevent duplicate information), parses the information in a CSV file, closes the file when it is done, and returns the data from the file into an array that can be easily accessed
  //Why: This function completes all necessary actions to properly error check, reset, open, read, and close a CSV file to make the data accessible to the user
  public function parse() {
    if(!isset($this->filename)) {
      echo "File not set.";
      return false;
    }

    // clear any previous results
    $this->reset();

    //$file is a file handler
    $file = fopen($this->filename, 'r');
    while(!feof($file)) {
      $row = fgetcsv($file, 0, self::$delimiter);
      if($row == [NULL] || $row === FALSE) { continue; }
      if(!$this->header) {
     	  $this->header = $row;
      } else {
        $this->data[] = array_combine($this->header, $row);
        $this->row_count++;
     	}
    }
    fclose($file);
    return $this->data;
  }

  //How: This function can be used to access the array of objects read from the CSV file
  //Why: Allows for easy/efficient access of the result that have already been read without having to call the parse() function again. 
  public function last_results() {
    return $this->data;
  }

  //How: This function can be used to access the number of rows that has been read by the parser
  //Why: Allows for an easy count of the number of objects in a CSV file
  public function row_count() {
    return $this->row_count;
  }

  //How: Resets the data array within the instance of a parser
  //Why: This is used in the parse() function to avoid duplicate information before reading the CSV file
  private function reset() {
    $this->header = NULL;
    $this->data = [];
    $this->row_count = 0;
  }

}

?>
