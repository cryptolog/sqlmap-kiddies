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
        <?php $page = "history"; require_once("include/menu.php"); ?>
        <?php $file_db = new PDO('sqlite:db/history.sqlite3'); ?>
        <div class="container">
            <div class="hero-unit">
                <fieldset>
                    <legend><p>History <span class='icon-file'></span></p></legend>
                    <span class="help-block">Here is the history of your tests.</span>
                    <div class="hero-unit" style="background-color: #FFF;">
                      <div class="row-fluid">
                        <div class="accordion" id="accordion">
                          <?php
                          $websites = $file_db->query('SELECT * FROM websites');
                          foreach($websites as $website) {
                          ?>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $website['id'] ?>">
                                <?php echo  $website['name']; ?>
                                <?php echo "<span class='pull-right'>" . date("m/d/Y", $website['time']) . "</span>"; ?>
                              </a>
                            </div>
                            <div id="collapse<?php echo $website['id'] ?>" class="accordion-body collapse in">
                              <div class="accordion-inner">
                                <table class="table table-striped">
                                  <?php
                                  $links = $file_db->query("SELECT * FROM links WHERE website_id ='". $website['id']. "'");
                                  foreach($links as $link) {
                                    echo "<tr>";
                                    echo "<td>" . $link['url'] . "</td>";
                                    if($link['success'] == 1){
                                      echo "<td><span class='label label-success'>Successed</td>";
                                    }else{
                                      echo "<td><span class='label label-important'>Failed</td>";
                                    }
                                    echo "</span>";
                                    echo "</tr>";
                                  }
                                  ?>
                                </table>
                              </div>
                            </div>
                          </div>

                          <?php
                          }
                          ?>
                        </div>
                        <table class="table table-stripped">
                        </table>
                      </div>
                    </div>
                </fieldset>
            </div>
            <hr />
            <?php require_once("include/footer.php"); ?>
        </div>
    </body>
</html>