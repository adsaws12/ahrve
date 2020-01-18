<?php

session_start();
session_destroy();
setcookie('user_info', null);
header('Location: http://localhost/ahrve');