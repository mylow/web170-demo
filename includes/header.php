<html>
<head>
    <?php include 'includes/titles.php';?>
    <title><?=$title?></title>
    <link href="css/custom.css" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <script type="text/javascript" src="js/jquery.tosrus.min.all.js"></script>
    <link rel="stylesheet" href="css/jquery.tosrus.all.css"/>
    <script src="js/gallery.js"></script>
    <link rel="stylesheet" href="css/gallery-js.css"/>
    <link rel='stylesheet' href='css/fullcalendar.css' />
    <script src='js/moment.min.js'></script>
    <script src='js/fullcalendar.js'></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyB0RnxEpWOkM2SRg8kZZTFZ5jKdYNqKzMQ">
</script>
    <script src="js/maplace.min.js"></script>
    <script src="js/calendar.js"></script>
    <link rel="stylesheet" type="text/css" href="css/view.css" media="all">
    <script type="text/javascript" src="js/view.js"></script>
    <script>
            jQuery(document).ready(function() {
            jQuery('.toggle-nav').click(function(e) {
            jQuery(this).toggleClass('active');
            jQuery('.menu ul').toggleClass('active');
            e.preventDefault();
            });
        });
    </script>
    <script> 
        $(document).ready(function() {
          $("#wrapper").tosrus({
            autoplay   : {
            play       : true
            },
            slides     : {
            scale      : "fill"
            },
            buttons    : true,
            pagination : {
            add        : true
            },
            timeout : 8000
            }).trigger( "next" );
            });
    </script>
    <script>
    $(document).ready(function () {
	
	$('#toggle-view li').click(function () {

		var text = $(this).children('div.panel');

		if (text.is(':hidden')) {
			text.slideDown('500');
			$(this).children('span').html('-');		
		} else {
			text.slideUp('500');
			$(this).children('span').html('+');		
		}
		
	});

});
    </script>
    <script>
    $(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

});
    </script>
        <script type="text/javascript">
    var maplace = new Maplace();
maplace.Load();
    </script>
    </head>
    <body>
        
        <div id="top-info">
            <a href="index.php"><img src="images/logo.png" class="logo-main" />
            <h1 class="head-name">Kandice's Dog Care</h1></a>
            <ul id="social-list">
           <li><a href="#"><img src="images/twitter.png" class="logo-social" /></a></li>
           <li><a href="#"><img src="images/facebook.png" class="logo-social" /></a></li>
           <li><a href="#"><img src="images/instagram.png" class="logo-social" /></a></li>
        </ul>
        </div>
   