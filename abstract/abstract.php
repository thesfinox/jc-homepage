<?php

// This is the file we use to generate the abstract and title PDF file

/* Content is passed to the file through a POST request: the data we send will
 * not be visible through the address bar. We first parse it and then generate
 * a .tex file. Then we call the server "pdflatex" command and then display the
 * output.
 */
if ($content = file_get_contents('php://input')) {

    $author = trim(explode("titolo=", explode("autore=", $content)[1])[0]);
    $title = trim(explode("data=", explode("titolo=", $content)[1])[0]);
    $date_tmp = trim(explode("sommario=", explode("data=", $content)[1])[0]);
    $date = date("l \$j^{S}\$ F Y", strtotime($date_tmp));
    $abstract = trim(explode("PDF=", explode("sommario=", $content)[1])[0]);

    $file = fopen("./abstract/" . $date_tmp . ".tex", "w") or die("Cannot open file!");
    $tex = "\\documentclass[12pt,a4paper]{article}
\\pdfoutput=1
\\pdfminorversion=7\n
\\usepackage[utf8]{inputenc}
\\usepackage{amsmath}
\\usepackage{amsfonts}
\\usepackage{amssymb}
\\usepackage{bookmark}\n
\\author{\\textsc{" . $author . "}}
\\title{\\textbf{" . $title . "}}
\\date{" . $date . "}\n
\\hypersetup
{
    pdftitle={" . $title . "},
    pdfsubject={Journal Club},
    pdfauthor={" . $author . "},
    pdfkeywords={journal club, physics, seminar, colloquium, phd},
    pdfcreator={pdfTeX Tex Live on Raspbian server},
    pdfproducer={pdfLaTeX},
    pdflang={en-GB},
    hidelinks
}\n
\\pagenumbering{gobble}\n
\\begin{document}\n
    \\maketitle\n
    \\begin{abstract}\n
        " . $abstract . "\n
    \\end{abstract}\n
\\end{document}\n";

    fwrite($file,$tex);
    fclose($file);

    chdir("./abstract");
    $filename = $date_tmp . ".pdf";
    $pdfcmd = "pdflatex -interaction=batchmode -output-format=pdf " . $date_tmp . ".tex";
    exec($pdfcmd);

    // These headers are necessary to read and display the PDF file
    if (file_exists($filename)) {

        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="'.basename($filename).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
        exit;
    }

}

?>
