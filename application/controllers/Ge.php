<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ge extends CI_Controller {

  public function index() {
    //TODO
    //link all available actions

  }

  public function before_action() {
    if (ENVIRONMENT == 'production')
      return false;
    else
      return true;
  }

  public function generate($thing, $name) {
    if($this -> before_action()) {
      $this -> $thing($name);
    }
  }

  private function migration($filename = '') {
    //Create a new migration file
    if(!empty($filename)) {
      $this->config->load('migration');
      $config = ($this->config->config);
      $migration_path = $config['migration_path'];
      $file = $migration_path.date('Ymdhis')."_".$filename.".php";
      $ourFileHandle = fopen($file, 'w') or die("can't open file");
      fwrite($ourFileHandle, $this->giveMeTemplate($filename));
      fclose($ourFileHandle);
      chmod($file, 0777);
    }
  }
  private function giveMeTemplate($filename)
  {
    //TODO
    //add more options here
    return $template = '<?php
class Migration_'.$filename.' extends CI_Migration {
  public function up() {
    //$this->dbforge->create_table("");
  }
  public function down() {
    //$this->dbforge->drop_table("");
  }
}';
    }
}
