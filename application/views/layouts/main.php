<!DOCTYPE html>
<html lang="en">
  <head>
    <title>  </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php  echo base_url();?>css/bootstrap.min.css">
    <?php if(!empty(lang()) && lang() == 'arabic') { ?>
    <link rel="stylesheet" type="text/css" href="<?php  echo base_url();?>css/bootstrap-rtl.min.css">
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php  echo base_url();?>css/style.css">
    <script src="<?php  echo base_url();?>js/jquery-2.1.4.min.js"></script>
    <script src="<?php  echo base_url();?>js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid" id="website">
      

      <div id="main_content" class="row">
        <div id="bg" class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
          <?php $this->load->view("$content"); ?>
        </div>s
      </div>

    </div>
  </body>
</html>
