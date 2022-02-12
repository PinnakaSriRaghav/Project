<?php

require_once('connect.php');

function user_logged_in()
{
  if (isset($_SESSION['login_success'])) {
    return true;
  }
  return false;
}
