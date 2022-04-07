<?php
 unset($_SESSION['id']);
 unset($_SESSION['type']);
 unset($_SESSION['user_id']);
 unset($_SESSION['user_firstname']);
 unset($_SESSION['user_phone']);
 session_destroy();
 header("Location: /");
?>