<?php

if (!defined('CCADMIN')) { echo "NO DICE"; exit; }

if (empty($_GET['process'])) {
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'config.php');
$base_url = BASE_URL;
echo <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>Generate Embed Code</title>
  <link href="{$base_url}/css.php?admin=1" rel="stylesheet">
  <script src="{$base_url}/js.php?admin=1"></script>
</head>
 <body class="navbar-fixed sidebar-nav fixed-nav" style="background-color: white;overflow-y:hidden;">
             <div class="col-sm-6 col-lg-6">
                <div class="card">
                <div class="card-block">
                  <form style="height:100%" action="?module=dashboard&action=loadexternal&type=module&name=announcements&process=true" method="post">

                   <div class="form-group row">
		            <div class="col-md-6">
                <div class="note note-success">
                  Please enter a unique id for announcements push notifications.</div>
		            </div>
		          </div>

		          <div class="form-group row">
		            <div class="col-md-6">
		              <label for="ccyear">Unique id:</label>
		            </div>
		             <div class="col-md-6">
		             <textarea class="form-control" name="announcementpushid">{$announcementpushid}</textarea>
		            </div>
		          </div>

                    <div class="row col-md-4" style="">
                       <input type="submit" value="Update Settings" class="btn btn-primary">
                    </div>
                    </form>
                </div>
                </div>
              </div>
EOD;
} else {
	configeditor($_POST);
	header("Location:?module=dashboard&action=loadexternal&type=module&name=announcements");
}
