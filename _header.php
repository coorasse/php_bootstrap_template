<?php
include('variables.inc');
?>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="<?php echo $google_webmaster_verification_key; ?>"/>
    <title><?php echo $main_title; ?> - <?php echo $title; ?></title>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" media="all">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <h1><a href="/" title="Root link title" rel="home">Root link text <?php echo $title; ?></a></h1>

    <ul class="nav nav-pills">
        <li <?php if ($page == 'home') echo "class=\"active\"";?>><a href="/">Home</a></li>
        <li <?php if ($page == 'page_1') echo "class=\"active\"";?>><a href="/page_1.php">Page 1</a></li>
        <li><a href="http://www.google.it" title="External link" target="_blank">External link</a></li>
    </ul>