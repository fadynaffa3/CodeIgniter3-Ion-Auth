<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rake extends CI_Controller {

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

  public function db($function) {
    if($this -> before_action()) {
      $this -> $function();
    }
  }

  private function migrate($version = '') {
    //TODO
    //return migrations in a well displayed table
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

  private function setup() {
    //TODO
    //Create the database from the config file database name and driver
    if ($this->before_action()) {
      $this->load->dbforge();
    }
  }

}
