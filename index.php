<!DOCTYPE html>

<?php

$DB_SNAME = "";
$DB_SPORT = "";
$DB_UNAME = "";
$DB_UPSSW = "";
$DB_DNAME = "";
$DB_TABLE = "";

$DB_DCONN = new mysqli($DB_SNAME, $DB_UNAME,
                       $DB_UPSSW, $DB_DNAME,
                       $DB_SPORT);

if ($DB_DCONN->connect_errno) {
    
    echo "Failed to connect to MySQL: (" .
         $DB_DCONN->connect_errno . 
         ") " . 
         $DB_DCONN->connect_error;

}

?>


<html lang="en">

<head>
    
    <!-- Compatibility with Microsoft Edge -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <!-- Necessary for mobile-friendly view and scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    <!-- Charset: use UTF-8 for wider compatibility -->
    <meta charset="UTF-8">

<!--
    Just a few notes before we start:

    IMAGES:
    - make sure to upload and use only PNG (if strictly needed) or JPG
    images,
    - the latter should always be Progressive JPG and not too large in
    size,
    - we use a lazy loading utility in order to speed up page loading: we
    can use some dummy images before we load the actual picture but please
    make sure the dummies are no more than 10-20 kB in size,

    HTML/CSS/JS:
    - the actual webpage will be dynamic and written in PHP, therefore this
    is just a static port of the original page with some ad hoc content,
    - if you find a way to write such a huge CSS file in a better way, we
    can think about switching to a custom file instead of using Bootstrap,

    CODING ETIQUETTE:
    - please remember to keep the indentation as consistent as possible
    through the whole file,
    - remember to comment appropriately every single bit of code you
    change/use!!!
    -->

    <!-- Page metadata -->
    <meta name="description" content="Torino - PhD programme in Physics - Journal Club">
    <meta name="author" content="Riccardo Finotello, Michael Korsmeier">
    <meta name="keywords" content="journal club, torino, phd, physics, university">
    <meta name="theme-color" content="#608CB0">

    <!-- Title -->
    <title>PhD Torino - Journal Club</title>

    <!-- Manifest file (web app) -->
    <link rel="manifest" href="./manifest.json">

    <!-- CSS file -->
    <link rel="stylesheet" href="./css/main.min.css">

    <!-- Inline CSS (faster loading) -->
    <style>
        body {position: relative;}
        .cow {line-height:0.65;}
    </style>

    <!-- Scripts to open and close the menu of the mobile verion -->
    <script src="./js/menue.min.js" async></script>

    <!-- Scripts to control the picture gallery -->
    <script src="./js/gallery.min.js" async></script>

    <!-- Scrollreveal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.4.0/scrollreveal.min.js"></script>

    <!-- LaTeX rendering with MathJax -->
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
    </script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.3/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>

    <!-- Main file for scripts (e.g.: service worker install) -->
    <script src="./js/main.min.js"></script>

    <!-- Initialise scroll reveal -->
    <script>
        window.sr = ScrollReveal();
    </script>

    <!-- Images for webapp functionalities -->
    <link rel="apple-touch-icon" sizes="152x152" href="./images/campusnet_152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./images/campusnet_120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/campusnet_76x76.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./images/campusnet_60x60.png">
    <link rel="apple-touch-icon" sizes="57x57" href="./images/campusnet_57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./images/campusnet_72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./images/campusnet_114x114.png">
    <link rel="icon" sizes="128x128" href="./images/campusnet_128x128.png">
    <link rel="icon" sizes="192x192" href="./images/campusnet_192x192.png">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="MyJC">
    <meta name="application-name" content="MyJC">
    <meta name="msapplication-TileColor" content="undefined">
    <meta name="msapplication-square70x70logo" content="./images/campusnet_70x70.png">
    <meta name="msapplication-square150x150logo" content="./images/campusnet_150x150.png">
    <meta name="msapplication-wide310x150logo" content="./images/campusnet_310x150.png">
    <meta name="msapplication-square310x310logo" content="./images/campusnet_310x310.png">

</head>

<!-- Start slide show upon loading the page -->
<body onload="start()">
    
<!--Banner-->
<div id="banner">
    <div class="pageWidth">
        <div class='img'>
            <img src="./images/campusnet_banner.png" alt="Physics Department of the University of Torino">
        </div>
        <div class="title">
            <div>
            <h2>Torino Doctoral School in Physics and Astrophysics</h2>
            <hr>
            <h1>Graduate Students Journal Club</h1>
            </div>
        </div>
        <div class="end"></div>
    </div>
</div>

<!-- Navbar -->
<div id="menue_bar">
    <button id="open_close" role="button" aria-label="Navigation button">
    </button>
    <div id="menue">
        <a href="#"><div class="point">
            Home
        </div></a>
        <a href="#nextEvent"><div class="point">
            Next Event
        </div></a>
        <a href="#pastEvents"><div class="point">
            Past Events
        </div></a>
        <a href="#links"><div class="point">
            Links
        </div></a>
        <a href="#contact"><div class="point">
            Contact
        </div></a>
        <div class="end">
        </div>
    </div>
</div>

<!-- Containers to have a maximal page width -->
<div class="pageWidth" >
    <div id="content">
        
        <!--Picture gallery-->
        <div class='galleryPictureBox'>
           <div class='galleryPictureBoxTop'>
               <div class='galleryPictureContent'>
                   
                    <img class='galleryPicture' src="images/01_carousel.jpg" alt="Slide 1">
                    <img class='galleryPicture' src="images/02_carousel.jpg" alt="Slide 2" style='opacity:0;'>
                    <img class='galleryPicture' src="images/03_carousel.jpg" alt="Slide 3" style='opacity:0;'>
                    
                    <div class='galleryTouch'></div>
                    <img class='galleryButtonLeft' src='images/pictures_button_left.png' alt="Left button"   onclick='gallery_last();'>
                    <img class='galleryButtonRight' src='images/pictures_button_right.png' alt="Right button" onclick='gallery_next();'>
                </div>
            </div>
        </div>
        
        <!-- Alert box -->
        <h1 class="section-header">Notice board</h1>
        <hr>
        <!-- PHP driven notice -->
        <?php
            $file = './bulletin/message.md';
            if (file_exists($file) and filesize($file)) {

                include './bulletin/Parsedown.php';

                $message = file_get_contents($file);
                $parsedown = new Parsedown();
                $parsedown->setSafeMode(true);

                echo "<article class=\"bulletin\">";
                    echo $parsedown->text($message);
                    echo "<p class=\"sign\">&#126;The webmasters&#126;</p>";
                echo "</article>";
            }
            else {
                echo "<article class=\"bulletin\">";
                    echo "<p>There are no public messages on the bulletin board for today.</p>";
                    echo "<p>Have a nice day and remember: you are awesome!</p>";
                    echo "<p class=\"sign\">&#126;The webmasters&#126;</p>";
                echo "</article>";
            }
        ?>
        
        <!-- Forthcoming events -->
        <h1 id="nextEvent" class="section-header">Next event(s)</h1>
        <hr>
        <?php

            $DB_QUERY = "SELECT * FROM " . $DB_TABLE . " WHERE DATE >= CURDATE() ORDER BY DATE";
            $JC_TABLE = $DB_DCONN->query($DB_QUERY);

            if ($JC_TABLE->num_rows > 0) {

                while ($row = $JC_TABLE->fetch_assoc()) {

                    echo "<div class=\"card-body\">";
                    echo "<article>";
                        echo "<div>";
                            echo "<div>";
                                echo "<h1>";
                                    echo $row["TITLE"];
                                echo "</h1>";
                                echo "<h2>";
                                    echo "<strong>" . $row["SPEAKER"] . "</strong>";
                                echo "</h2>";

                                if ($abstract = $row["ABSTRACT"]) {

                                    echo "<div>";
                                        echo "<p class=\"next-abstract\">" . $abstract . "</p>";
                                    echo "</div>";

                                    echo "<form action=\"./abstract/abstract.php\" target=\"_blank\" method=\"post\" enctype=\"text/plain\">";
                                        echo "<input type=\"hidden\" name=\"autore\" value=\"" . $row["SPEAKER"] . "\">";
                                        echo "<input type=\"hidden\" name=\"titolo\" value=\"" . $row["TITLE"] . "\">";
                                        echo "<input type=\"hidden\" name=\"data\" value=\"" . $row["DATE"] . "\">";
                                        echo "<input type=\"hidden\" name=\"sommario\" value=\"" . $abstract . "\">";
                                        echo "<input class=\"admin\" style=\"display:none;\" type=\"submit\" name=\"PDF\" value=\"PDF-generate\">";
                                    echo "</form>";

                                    echo "<a href=\"./abstract/abstract/" . $row["DATE"] . ".pdf\" target=\"_blank\" role=\"button\" rel=\"noopener noreferrer\">PDF</a>";

                                }

                                if ($reference = $row["REFERENCE"]) {

                                    echo "<ul>";
                                        echo "<li><b>Main reference:</b> <a href=\"" . $reference . "\" target=\"_blank\" rel=\"noopener noreferrer\">" . $row["REFERENCE_TXT"] . "</a></li>";
                                
                                    if ($reference2 = $row["REFERENCE2"]) {

                                        echo "<li><b>Other reference:</b> <a href=\"" . $reference2 . "\" target=\"_blank\" rel=\"noopener noreferrer\">" . $row["REFERENCE2_TXT"] . "</a></li>";
                                    }

                                    echo "</ul>";

                                }
                                
                                if ($attachment = $row["PROCEEDING"]) {

                                    echo "<ul>";
                                        echo "<li><b>Attachment(s):</b> <a href=\"" . $attachment . "\" target=\"_blank\" rel=\"noopener noreferrer\">" . $row["PROCEEDING_TXT"] . "</a></li>";
                                    echo "</ul>";
                                }

                                $date = date("l j\<\s\u\p\>S\<\/\s\u\p\> F Y", strtotime($row["DATE"]));
                                $time = date("g:i a", strtotime($row["TIME"]));

                                echo "<ul>";
                                    echo "<li><b>Date:</b> " . $date . "</li>";
                                    echo "<li><b>Time:</b> " . $time . "</li>";
                                    echo "<li><b>Location:</b> " . $row["PLACE"] . "</li>";
                                echo "</ul>";
                            echo "</div>";
                        echo "</div>";
                    echo "</article>";
                    echo "</div>";
                }

            }
            else {
                echo "<div class=\"card-body\">";
                    echo "<p>There are no seminars scheduled, so here is a thinking cow:</p>";
                    echo "<div>";
                        $text = shell_exec("/usr/games/fortune -n400 -s | /usr/games/cowthink -W25");
                        echo "<div>";
                            echo "<pre class=\"cow\">" . nl2br($text) . "</pre>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            }

        ?>

        <!-- Calendar -->
        <h1 class="section-header">Calendar</h1>
        <hr>        
        <div class="calendar">
            <iframe title="journal-club-calendar" src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showCalendars=0&amp;height=600&amp;wkst=2&amp;hl=en_GB&amp;bgcolor=%23ffffff&amp;src=edu.unito.it_85c3lhbnljm4i0nua2500li1ps%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Europe%2FRome" style="border:none" width="800" height="600"></iframe>
        </div>
        
        <!-- Past events -->
        <h1 id="pastEvents" class="section-header">Past events</h1>
        <hr>
        <?php

        $DB_QUERY = "SELECT * FROM " . $DB_TABLE . " WHERE DATE < CURDATE() ORDER BY DATE DESC";
        $JC_TABLE = $DB_DCONN->query($DB_QUERY);
        if ($JC_TABLE->num_rows > 0) {

            while ($row = $JC_TABLE->fetch_assoc()) {

                echo "<div class=\"card-body\">";
                echo "<article>";
                    echo "<div>";
                        echo "<div>";
                            echo "<h1>";
                                echo $row["TITLE"];
                            echo "</h1>";
                            echo "<h2>";
                                echo "<strong>" . $row["SPEAKER"] . "</strong>";
                            echo "</h2>";

                            if ($abstract = $row["ABSTRACT"]) {

                                echo "<div>";
                                    echo "<p>" . $abstract . "</p>";
                                echo "</div>";

                                echo "<form action=\"./abstract/abstract.php\" target=\"_blank\" method=\"post\" enctype=\"text/plain\">";
                                    echo "<input type=\"hidden\" name=\"autore\" value=\"" . $row["SPEAKER"] . "\">";
                                    echo "<input type=\"hidden\" name=\"titolo\" value=\"" . $row["TITLE"] . "\">";
                                    echo "<input type=\"hidden\" name=\"data\" value=\"" . $row["DATE"] . "\">";
                                    echo "<input type=\"hidden\" name=\"sommario\" value=\"" . $abstract . "\">";
                                    echo "<input class=\"admin\" style=\"display:none;\" type=\"submit\" name=\"PDF\" value=\"PDF-generate\">";
                                echo "</form>";

                                echo "<a href=\"./abstract/abstract/" . $row["DATE"] . ".pdf\" target=\"_blank\" role=\"button\" rel=\"noopener noreferrer\">PDF</a>";

                            }

                            if ($reference = $row["REFERENCE"]) {

                                echo "<ul>";
                                    echo "<li><b>Main reference:</b> <a href=\"" . $reference . "\" target=\"_blank\" rel=\"noopener noreferrer\">" . $row["REFERENCE_TXT"] . "</a></li>";
                                        
                                if ($reference2 = $row["REFERENCE2"]) {

                                        echo "<li><b>Other reference:</b> <a href=\"" . $reference2 . "\" target=\"_blank\" rel=\"noopener noreferrer\">" . $row["REFERENCE2_TXT"] . "</a></li>";
                                }

                                echo "</ul>";

                            }
                            
                            if ($attachment = $row["PROCEEDING"]) {

                                    echo "<ul>";
                                        echo "<li><b>Attachment(s):</b> <a href=\"" . $attachment . "\" target=\"_blank\" rel=\"noopener noreferrer\">" . $row["PROCEEDING_TXT"] . "</a></li>";
                                    echo "</ul>";
                                }

                            $date = date("l j\<\s\u\p\>S\<\/\s\u\p\> F Y", strtotime($row["DATE"]));

                            echo "<ul>";
                                echo "<li><b>Date:</b> " . $date . "</li>";
                            echo "</ul>";
                        echo "</div>";
                echo "</div>";
            echo "</article>";
            echo "</div>";
            }

        }

        ?>
        
    </div> <!-- end of id="content" -->
</div> <!-- end of id="pageWidth" -->


<div id="links">
    <div class="pageWidth" >
        
        <!-- We finally show some useful links using the grid view of Bootstrap CSS
         file: we need to instruct the CSS to display all the links in one line on
         larger devices and two lines on smaller devices. -->
        <h1 class="section-header">Useful Links</h1>
        
            <a href="http://dottorato.ph.unito.it/" target="_blank" rel="noopener noreferrer">
                <div class="link">
                    <img  src="./images/dottorato.jpg" alt="Torino Graduate School">
                    <h2> Graduate School Home </h2>
                </div><!--  class="link" -->
            </a>
            <a href="https://www.to.infn.it/" target="_blank" rel="noopener noreferrer">
                <div class="link">
                    <img  src="./images/infn.jpg" alt="INFN Sezione di Torino">
                    <h2> INFN Sezione di Torino </h2>
                </div><!--  class="link" -->
            </a>
            <a href="https://arxiv.org/" target="_blank" rel="noopener noreferrer">
                <div class="link">
                    <img  src="./images/arxiv.jpg" alt="ArXiv.org">
                    <h2> ArXiv.org </h2>
                </div><!--  class="link" -->
            </a>
            <a href="https://inspirehep.net/" target="_blank" rel="noopener noreferrer">
                <div class="link">
                    <img  src="./images/inspire.jpg" alt="INSPIRE-HEP">
                    <h2> INSPIRE-HEP </h2>
                </div><!--  class="link" -->
            </a>
            <div class="clear"></div>

        </div> <!--  id="links" -->
        
</div>


<div id="footer">
    <div class="pageWidth">
        <div id="contact">
        Department of Physics<br>
        Universit&#224; degli Studi di Torino<br>and INFN - Sezione di Torino <br>
        via Pietro Giuria 1 <br>
        10125 Torino, Italy <br>
        <br>
        Contact: <br>
        <div class="contact-name"><strong>Riccardo Finotello</strong></div> <div class="mail"><div></div>riccardo.finotello@unito.&#237;t</div>
        <br>
        <div class="contact-name"><strong>Michael Korsmeier</strong></div> <div class="mail"><div></div>michael.korsmeier@to.infn.&#237;t</div>
        <br>
        <div class="gitlab-page">For bug report and info, please visit our <a href="https://gitlab.com/phd-torino-physics/jc-homepage" target="_blank" rel="noopener noreferrer">Gitlab page</a>.</div>
        </div>
    </div>
</div>

<!-- Start slideshow as page has loaded -->    
<script type="text/javascript">
function start(){
    StartSlideShow();
    start_menue();
}
</script>

<!-- Event listener to open and close menu -->
<script>
    document.getElementById('open_close').onclick = function () {
        if (shown==0){
            show();
        }else{
            hide();
        }
    };
</script>

<!-- Scrollreveal -->
<script>
    sr.reveal('.section-header');
    sr.reveal('.card-body');
    sr.reveal('.calendar');
    sr.reveal('.bulletin');
    sr.reveal('#links');
</script>

</body>

</html>
