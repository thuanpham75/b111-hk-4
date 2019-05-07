<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/150.less', 'css/150.css');
    
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Module 150</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="css/150.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery/jquery.js"></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/jquery-1.11.0.min.js" ></script> <!--menu-->
        <script src="js/menu.js" ></script>

    </head>

    <body>
               <?php  $dir_block.include'150-content.php'; ?>
    </body>
</html>
