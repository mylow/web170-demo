<?php

$page = basename($_SERVER['SCRIPT_NAME']);
$title = '';
if ($page == 'index.php') { $title = 'Home';}

if ($page == 'about.php') { $title = 'About'; }

if ($page == 'services.php') { $title = 'Services'; }

if ($page == 'services-1.php') { $title = 'Overnight Stays'; }

if ($page == 'services-2.php') { $title = 'Walks'; }

if ($page == 'services-3.php') { $title = 'Home visits'; }

if ($page == 'availability.php') { $title = 'Availability'; }

if ($page == 'gallery.php') { $title = 'Gallery'; }

if ($page == 'blog.php') { $title = 'Blog'; }

if ($page == 'contact.php') { $title = 'Contact'; }

?>