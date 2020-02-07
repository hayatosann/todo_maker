<?php
  require_once('./Models/Task.php');

  $title = $_POST['title'];
  $contents = $_POST['contents'];
  $currentTime = date("Y/m/d H:i:s");

  $task = new Task();
  $task->create([$title, $contents, $currentTime]);

  header('location:index.php');