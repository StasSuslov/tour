<html>
<head>
    <title>Туроператор от Бога</title>
    <link href="style/style.css" rel="stylesheet" type="text/css" media="all">
    <meta charset="utf-8">
</head>
    <body>
        <div id="panel"></div>
        <div id="wrap">
            <div id="header">
                <?php include ('header.php');?>
            </div>
            <div id="block-menu">
                <?php include ('top-menu.php');?>
            </div>
            <div id="content">
                <?php
                $type = isset($_GET['type']) ? $_GET['type'] : null;
                switch ($type)
                {
                    case 1:
                        include ("list_tours.php");
                        break;
                    case 2:
                        include ("order_tour.php");
                        break;
                    case 3:
                        include ("our_tourists.php");
                        break;
                    case 4:
                        include ("usefull.php");
                        break;
                    case 5:
                        include ("about_company.php");
                        break;
                    case 6:
                        include ("auth.php");
                        break;
                    case 7:
                        include ("registration.php");
                        break;
                    case 8:
                        include ("order_processing.php");
                        break;
					
					case 9:
                        include ("baical.php");
                        break;
                    case 10:
                        include ("petergof.php");
                        break;
                    case 11:
                        include ("yantar.php");
                        break;
                    case 12:
                        include ("murmansk.php");
                        break;
					case 13:
                        include ("Novgorod.php");
                        break;
                    case 14:
                        include ("corporativ.php");
                        break;
                    case 15:
                        include ("auth_proc.php");
						break;
                    default:
                        #include ("list_tours\corporate_events\main_content.php");
						include ("main_content.php");
                        break;
                }
                ?>

            </div>
            <div id="footer">
                <?php include ('footer.php');?>
            </div>
        </div>
    </body>
</html>