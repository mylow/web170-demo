 <nav class="menu">
        <div id="inside-nav">
            <a href="index.php"><img src="images/logo.png" class="logo-main" />
            <h1 class="head-name">Kandice's Dog Care</h1></a>
        </div>    
<ul class="active">
        <li <?php if ($page == 'about.php') { echo 'class="current"'; } ?>><a href="about.php">About</a></li>
        <li <?php if ($page == 'services.php' || $page == 'services-1.php' || $page == 'services-2.php' || $page == 'services-3.php') { echo 'class="current"'; } ?>><a href="services.php">Services</a></li>
        <li <?php if ($page == 'availability.php') { echo 'class="current"'; } ?>><a href="availability.php">Availability</a></li>
        <li <?php if ($page == 'gallery.php') { echo 'class="current"'; } ?>><a href="gallery.php">Gallery</a></li>
        <!--<li <//?php if ($page == 'blog.php') { echo 'class="current"'; } ?>><a href="blog.php">Blog</a></li>-->
        <li <?php if ($page == 'contact.php') { echo 'class="current"'; } ?>><a href="contact.php">Contact</a></li>
        <li><a href="book.php" class="book">Book Now</a></li>
     </ul>
 
    <a class="toggle-nav" href="#">&#9776;</a>

</nav>