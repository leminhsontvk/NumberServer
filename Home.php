<!DOCTYPE html>
<html>
<head>
    <title>LMSQ Apps | Number</title>
    <link href="Themes/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="Themes/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="Themes/css/flexslider.css" type="text/css" media="screen" />
    <script src="Themes/js/jquery.min.js"></script>
    <script src="Themes/js/bootstrap.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,700italic,700,600italic,600,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
<div class="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <h1><a href="Home.php">LMSQ Apps<span>Number</span></a></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-bottom">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--francisco">
                            <ul class="nav navbar-nav menu__list">
                                <li class="menu__item menu__item--current"><a href="Home.php" class="menu__link"><span class="menu__helper">Number</span></a></li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="content">
    <div class="page-w3">
        <div class="container">
            <div class="grid_3 grid_4">
                <div class="page-header">
                    <h3>Number Random:</h3>
                </div>
            </div>
            <form method="GET">
                <fieldset disabled="">
                    <div class="form-group">
                        <label>API Key:</label>
                        <input type="password" id="APIKey" name="APIKey" class="form-control" placeholder="API Key" value="LMSAPIKey">
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="Type">Random Type:</label>
                    <select id="Type" class="form-control" name="WhatType">
                        <option name="TypeA" value="A">Type A</option>
                        <option name="TypeB" value="B">Type B</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Team">Random Type:</label>
                    <select id="Team" class="form-control" name="WhatTeam">
                        <option name="Team" value="0">None</option>
                        <option name="TeamA" value="1">Team A</option>
                        <option name="TeamB" value="2">Team B</option>
                        <option name="TeamC" value="3">Team C</option>
                        <option name="TeamD" value="4">Team D</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="Do" class="form-control" placeholder="Max Member" value="1">
                    <input type="hidden" id="APIKey" name="APIKey" class="form-control" placeholder="API Key" value="">
                </div>
                <button type="submit" class="btn btn-primary">Random</button>
            </form>
        </div>
    </div>
    <div class="page-w3">
        <div class="container">
            <div class="grid_3 grid_4">
                <div class="page-header">
                    <h3>Result:</h3>
                </div>
            </div>
            <?php
            if ($_REQUEST['Do'] == 1)
            {
                if (strcasecmp($_REQUEST['WhatType'], 'A') == 0)
                {
                    include 'GoFirst.php';
                };
                if (strcasecmp($_REQUEST['WhatType'], 'B') == 0)
                {
                    include 'API.php';
                };
            }
            ?>
        </div>
    </div>
</div>