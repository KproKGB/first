<?php
session_destroy();
setcookie(session_name(), '');
header("Location: " . $_SERVER['PHP_SELF']);