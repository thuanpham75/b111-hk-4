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
    $less->compileFile('less/120.less', 'css/120.css');
    
?>
<!DOCTYPE html>

<html lang="en-US">
    <head>
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css" >
        <title>Module 120</title>

        <link href="css/120.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.js"></script>
        <script src="js/swiper.min.js"></script>
       
    </head>
    <body class="home page page-id-299 page-template page-template-page-templates page-template-template-fullwidth-not-header page-template-page-templatestemplate-fullwidth-not-header-php wpb-js-composer js-comp-ver-4.10 vc_responsive">
        <?php  $dir_block.include'120-content.php'; ?>
    </body>
</html>