<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rake extends CI_Controller {

  public function index() {
    //TODO
    //link all available actions

  }

  public function before_action() {
    if (ENVIRONMENT != 'development')
      return false;
    return true;
  }

  public function migrate($version = '') {
    //TODO
    //return migrations in a well displayed table
    if ($this->before_action()) {
      $this->load->library('migration');
      $versions = $this->migration->find_migrations();
      ksort($versions);
      if ($version == '') {
        foreach ($versions as $v => $k) {
          $this->migration->version($v);
          echo "$v </br>";
        }
      }
      else if ($version == $this->migration->version($version)) {
        echo "Migrated Successfully $version";
      }
    }
  }

  public function setup() {
    //TODO
    //Create the database from the config file database name and driver
    if ($this->before_action()) {
      $this->load->dbforge();
    }
  }

  public function create($filename = '') {
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
  public function giveMeTemplate($filename)
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
