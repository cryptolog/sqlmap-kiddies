<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SQLMap Kiddies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="favicon.ico" rel="icon" type="image/x-icon" />
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>
        <?php $page = "googledork";
        require_once("include/menu.php"); ?>
        <div class="container">
            <div class="row"><div class="span12"><div id="alert-cache" class="alert alert-error fade in"><a class="close" data-dismiss="alert">×</a>Thiz page doez not work biatch.</div></div></div>
            <div class="hero-unit">
                <fieldset>
                    <legend>Enter your URL<span class='icon-arrow-right'></span></legend>
                    <input id="url" name="url" type="text" size="50" /><br />
                    <input id="submit" type="button" name="submit" value="Submit" />
                </fieldset>
                <legend>Result<span class='icon-arrow-right'></span></legend>
                <div class="hero-unit result" id="result"></div>
            </div>
            <hr>
            <?php $page = "index";
            require_once("include/footer.php");
            ?>
        </div>
    </body>
</html>

