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
    $less->compileFile('less/156.less', 'css/156.css');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Module 156</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 

        <link href="css/156.css" rel="stylesheet" type="text/css"/>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css" >
    <script src="js/swiper.min.js"></script>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/owl.carousel.js" ></script>

    </head>

    <body>
         <?php  $dir_block.include'156-content.php'; ?>
    </body>
</html>