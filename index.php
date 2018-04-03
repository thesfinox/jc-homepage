<!DOCTYPE html>

<?php

$DB_SNAME = "localhost";
$DB_SPORT = "12598";
$DB_UNAME = "jc_admin";
$DB_UPSSW = "k27XaYt8Dp";
$DB_DNAME = "journalclub";
$DB_TABLE = "jc_schedule";

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

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Torino - PhD programme in Physics - Journal Club">
    <meta name="author" content="Riccardo Finotello">
    <meta name="keywords" content="journal club, torino, phd, physics, university">
    <meta name="theme-color" content="#1997ea">
    <title>PhD Torino - Journal Club</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {position: relative;}
        .card-img-top {width:100%; height:100%; border-top-left-radius: calc(.25rem - 1px); border-top-right-radius: calc(.25rem - 1px);}
        .cow {line-height:0.65;}
        .next-event {perspective: 800px;}
        .past-event {perspective: 800px;}
        .caption-bg {opacity: 0.5;}
        .caption-bg:hover {opacity: 0.8;}
    </style>

    <link rel="manifest" href="./manifest.json">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.4.0/scrollreveal.min.js"></script>
    <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script async src="./js/lazyload.min.js"></script>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
    </script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.3/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
    <script async src="./js/manup.min.js"></script>
    <script src="./js/main.min.js"></script>
    <script>
        window.sr = ScrollReveal();
    </script>

</head>

<body data-spy="scroll" data-target="#phdnav" data-offset="0">

<div class="jumbotron mb-0 py-3">
    <div class="container text-center">
        <h1 class="text-uppercase mb-3">
            Torino Doctoral School in<br>
            Physics and Astrophysics
        </h1>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-auto">
                <img src="./images/campusnet.png" height="100" alt="Campusnet Logo">
            </div>
            <div class="col-md-auto">
                <h3 class="text-uppercase mt-3">
                    Graduate Students<br>
                    Journal Club
                </h3>
            </div>
        </div>
    </div>
</div>

<nav id="phdnav" class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="#">
        <img class="lazyload" data-src="./images/campusnet.png" src="./images/30.jpg" height="30" alt="Campusnet">
        PhD Torino
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#pic-carousel">
                    Pictures 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#notices">
                    Notice board 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#next">
                    Next event(s) 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#calendar">
                    Calendar 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#past">
                    Past events 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#links">
                    Links 
                </a>
            </li>
        </ul>
    </div>
</nav>

<div id="pic-carousel" class="container mt-5 carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#pic-carousel" data-slide-to="0" class="active">
        <li data-target="#pic-carousel" data-slide-to="1">
        <li data-target="#pic-carousel" data-slide-to="2">
        <li data-target="#pic-carousel" data-slide-to="3">
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 lazyload" data-src="./images/01_carousel.jpg" src="./images/1400.jpg" alt="Virasoro">
            <div class="carousel-caption d-none d-md-block bg-dark rounded caption-bg">
                <h5>Full blackboard</h5>
                <p>Some simple stringy computations...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 lazyload" data-src="./images/02_carousel.jpg" src="./images/1400.jpg" alt="PhD Students">
            <div class="carousel-caption d-none d-md-block bg-dark rounded caption-bg">
                <h5>The office</h5>
                <p>A graduate selfie with cookies and coffe...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 lazyload" data-src="./images/03_carousel.jpg" src="./images/1400.jpg" alt="Talks">
            <div class="carousel-caption d-none d-md-block bg-dark rounded caption-bg">
                <h5>The talks</h5>
                <p>Fancy titles...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 lazyload" data-src="./images/04_carousel.jpg" src="./images/1400.jpg" alt="Boson">
            <div class="carousel-caption d-none d-md-block bg-dark rounded caption-bg">
                <h5>The Higgs Boson</h5>
                <p>There it is! Even in the plush version...</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#pic-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#pic-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="notices" class="container alert alert-primary mt-5 alert-dismissable fade show" role="alert">
    <h2 class="alert-heading text-center">Notice board</h2>
    <hr>
<?php
    $file = './notices/message.md';
    if (file_exists($file) and filesize($file)) {

        include './notices/Parsedown.php';

        $message = file_get_contents($file);

        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">";
            echo "<span aria-hidden=\"true\">&times;</span>";
        echo "</button>";

        $parsedown = new Parsedown();
        $parsedown->setSafeMode(true);

        echo "<blockquote>";
            echo $parsedown->text($message);
            echo "<footer class=\"blockquote-footer\">The webmasters</footer>";
        echo "</blockquote>";
    }
    else {
        echo "<blockquote>";
            echo "<p>There are no public messages on the bulletin board for today.</p>";
            echo "<p>Have a nice day and remember: you are awesome!</p>";
            echo "<footer class=\"blockquote-footer\">The webmasters</footer>";
        echo "</blockquote>";
    }
?>
</div>

<div class="container mt-3">

    <div id="next" class="container text-center mt-5 py-3">
        <h2>Next event(s)</h2>
        <hr>
    </div>

    <div class="next-event mt-3">

    <?php

        $DB_QUERY = "SELECT * FROM " . $DB_TABLE . " WHERE DATE >= CURDATE() ORDER BY DATE";
        $JC_TABLE = $DB_DCONN->query($DB_QUERY);

        if ($JC_TABLE->num_rows > 0) {

            while ($row = $JC_TABLE->fetch_assoc()) {

                echo "<article class=\"next-event-inner\">";
                    echo "<div class=\"card col mb-3 py-3\">";
                        echo "<div class=\"card-body\">";
                            echo "<h3 class=\"card-title\">";
                                echo $row["TITLE"];
                            echo "</h3>";
                            echo "<h4 class=\"card-subtitle\">";
                                echo "<strong>" . $row["SPEAKER"] . "</strong>";
                            echo "</h4>";

                            if ($abstract = $row["ABSTRACT"]) {

                                echo "<div class=\"abstract text-justify py-3\">";
                                    echo "<p class=\"card-text lead\">" . $abstract . "</p>";
                                echo "</div>";

                                echo "<form action=\"/journalclub/tex_files/abstract.php\" target=\"_blank\" method=\"post\" enctype=\"text/plain\">";
                                    echo "<input type=\"hidden\" name=\"autore\" value=\"" . $row["SPEAKER"] . "\">";
                                    echo "<input type=\"hidden\" name=\"titolo\" value=\"" . $row["TITLE"] . "\">";
                                    echo "<input type=\"hidden\" name=\"data\" value=\"" . $row["DATE"] . "\">";
                                    echo "<input type=\"hidden\" name=\"sommario\" value=\"" . $abstract . "\">";
                                    echo "<input class=\"admin btn btn-primary mb-3\" style=\"display:none;\" type=\"submit\" name=\"PDF\" value=\"PDF-generate\">";
                                echo "</form>";

                                echo "<a class=\"btn btn-primary\" href=\"./tex_files/abstract/" . $row["DATE"] . ".pdf\" target=\"_blank\" role=\"button\" rel=\"noopener\">PDF</a>";

                            }

                            if ($reference = $row["REFERENCE"]) {

                                echo "<ul class=\"list-group list-group-flush mt-3\">";
                                    echo "<li class=\"list-group-item\"><b>Main reference:</b> <a href=\"" . $reference . "\" target=\"_blank\" rel=\"noopener\">" . $row["REFERENCE_TXT"] . "</a></li>";
                            
                                if ($reference2 = $row["REFERENCE2"]) {

                                    echo "<li class=\"list-group-item\"><b>Complementary reference:</b> <a href=\"" . $reference2 . "\" target=\"_blank\" rel=\"noopener\">" . $row["REFERENCE2_TXT"] . "</a></li>";
                                }

                                echo "</ul>";

                            }

                            $date = date("l j\<\s\u\p\>S\<\/\s\u\p\> F Y", strtotime($row["DATE"]));
                            $time = date("g:i a", strtotime($row["TIME"]));

                            echo "<ul class=\"list-group list-group-flush mt-3\">";
                                echo "<li class=\"list-group-item\"><b>Date:</b> " . $date . "</li>";
                                echo "<li class=\"list-group-item\"><b>Time:</b> " . $time . "</li>";
                                echo "<li class=\"list-group-item\"><b>Location:</b> " . $row["PLACE"] . "</li>";
                            echo "</ul>";
                        echo "</div>";
                    echo "</div>";
                echo "</article>";
            }

        }
        else {
            echo "<div class=\"container next-event-inner alert alert-light\" role=\"alert\">";
                echo "<p class=\"lead\">There are no seminars scheduled, so here is a thinking cow:</p>";
                echo "<div class=\"row justify-content-center\">";
                    $text = shell_exec("/usr/games/fortune -n400 -s | /usr/games/cowthink -W25");
                    echo "<div class=\"col-auto\">";
                        echo "<pre class=\"cow\">" . nl2br($text) . "</pre>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }

    ?>

    </div>

    <div id="calendar" class="container text-center mt-5">
        <div class="py-3">
            <h2>Calendar</h2>
            <hr>
        </div>
        <div class="embed-responsive embed-responsive-4by3 calendar-frame">
            <iframe title="journal-club-calendar" class="embed-responsive-item" src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showCalendars=0&amp;height=600&amp;wkst=2&amp;hl=en_GB&amp;bgcolor=%23ffffff&amp;src=edu.unito.it_85c3lhbnljm4i0nua2500li1ps%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Europe%2FRome" style="border:none" width="800" height="600"></iframe>
        </div>
    </div>

    <div id="past" class="container text-center mt-5 py-3">
        <h2>Past events</h2>
        <hr>
    </div>

    <div class="past-event mt-3">

    <?php

    $DB_QUERY = "SELECT * FROM " . $DB_TABLE . " WHERE DATE < CURDATE() ORDER BY DATE DESC";
    $JC_TABLE = $DB_DCONN->query($DB_QUERY);
    if ($JC_TABLE->num_rows > 0) {

        while ($row = $JC_TABLE->fetch_assoc()) {

            echo "<article class=\"past-event-inner\">";
                echo "<div class=\"card col mb-3 py-3\">";
                    echo "<div class=\"card-body\">";
                        echo "<h3 class=\"card-title\">";
                            echo $row["TITLE"];
                        echo "</h3>";
                        echo "<h4 class=\"card-subtitle text-muted\">";
                            echo $row["SPEAKER"];
                        echo "</h4>";

                        if ($abstract = $row["ABSTRACT"]) {

                            echo "<div class=\"abstract text-justify py-3\">";
                                echo "<p class=\"card-text\">" . $abstract . "</p>";
                            echo "</div>";

                            echo "<form action=\"/journalclub/tex_files/abstract.php\" target=\"_blank\" method=\"post\" enctype=\"text/plain\">";
                                echo "<input type=\"hidden\" name=\"autore\" value=\"" . $row["SPEAKER"] . "\">";
                                echo "<input type=\"hidden\" name=\"titolo\" value=\"" . $row["TITLE"] . "\">";
                                echo "<input type=\"hidden\" name=\"data\" value=\"" . $row["DATE"] . "\">";
                                echo "<input type=\"hidden\" name=\"sommario\" value=\"" . $abstract . "\">";
                                echo "<input class=\"admin btn btn-primary mb-3\" style=\"display:none;\" type=\"submit\" name=\"PDF\" value=\"PDF-generate\">";
                            echo "</form>";

                            echo "<a class=\"btn btn-primary\" href=\"./tex_files/abstract/" . $row["DATE"] . ".pdf\" target=\"_blank\" role=\"button\" rel=\"noopener\">PDF</a>";

                        }

                        if ($reference = $row["REFERENCE"]) {

                            echo "<ul class=\"list-group list-group-flush mt-3\">";
                                echo "<li class=\"list-group-item\"><b>Main reference:</b> <a href=\"" . $reference . "\" target=\"_blank\" rel=\"noopener\">" . $row["REFERENCE_TXT"] . "</a></li>";
                                    
                            if ($reference2 = $row["REFERENCE2"]) {

                                    echo "<li class=\"list-group-item\"><b>Complementary reference:</b> <a href=\"" . $reference2 . "\" target=\"_blank\" rel=\"noopener\">" . $row["REFERENCE2_TXT"] . "</a></li>";
                            }

                            echo "</ul>";

                        }

                        $date = date("l j\<\s\u\p\>S\<\/\s\u\p\> F Y", strtotime($row["DATE"]));

                        echo "<ul class=\"list-group list-group-flush mt-3\">";
                            echo "<li class=\"list-group-item\"><b>Date:</b> " . $date . "</li>";
                        echo "</ul>";
                    echo "</div>";
            echo "</div>";
        echo "</article>";

        }

    }

    ?>

    </div>

</div>

<div class="container mt-5">
    <div id="links" class="text-center py-3">
        <h2>Useful links</h2>
        <hr>
    </div>

    <div class="row useful-links">
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
            <div class="card text-center">
                <img class="card-img-top lazyload" height="250" data-src="./images/dottorato.jpg" src="./images/250.jpg" alt="Torino Graduate School">
                <div class="card-body">
                    <h5 class="card-title">Graduate School Home</h5>
                    <a href="http://dottorato.ph.unito.it/" class="btn btn-primary" target="_blank" rel="noopener">Link </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
            <div class="card text-center">
                <img class="card-img-top lazyload" height="250" data-src="./images/infn.jpg" src="./images/250.jpg" alt="INFN Sezione di Torino">
                <div class="card-body">
                    <h5 class="card-title">INFN Sezione di Torino</h5>
                    <a href="https://www.to.infn.it/" class="btn btn-primary" target="_blank" rel="noopener">Link </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
            <div class="card text-center">
                <img class="card-img-top lazyload" height="250" data-src="./images/arxiv.jpg" src="./images/250.jpg" alt="ArXiv.org">
                <div class="card-body">
                    <h5 class="card-title">ArXiv.org</h5>
                    <a href="https://arxiv.org/" class="btn btn-primary" target="_blank" rel="noopener">Link </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
            <div class="card text-center">
                <img class="card-img-top lazyload" height="250" data-src="./images/inspire.jpg" src="./images/250.jpg" alt="INSPIRE-HEP">
                <div class="card-body">
                    <h5 class="card-title">InSPIRE</h5>
                    <a href="https://inspirehep.net/" class="btn btn-primary" target="_blank" rel="noopener">Link </a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer bg-primary mt-5 py-3 text-center">
    <div class="text-white">
        <i>Idea and Design by the students of the Graduate School in Physics and Astrophysics</i> - 2018 - 
        <a class="text-white" href="https://gitlab.com/phd-torino-physics/jc-homepage" target="_blank" rel="noopener">
            Source code
        </a>
    </div>
</footer>

<script>
    sr.reveal('.next-event-inner');
    sr.reveal('.past-event-inner');
    sr.reveal('.calendar-frame');
    sr.reveal('.useful-links');
</script>

<script>
    window.addEventListener('load', function(event) {
        lazyload();
    });
</script>
</body>

</html>
