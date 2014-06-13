<?php include('init.php'); ?>
﻿<!DOCTYPE html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
    <meta name="author" content="pocketpadel.com"/>
    <meta name="language" content="ES"/>
    <meta name="title" content="Pocket Padel, información sobre torneos, clubs y más"/>
    <meta name="description" content="Pocket Padel, información sobre torneos, clubs y más" />
    <meta name="keywords" content="pocket,padel,torneos,clubs,app,servicios,benalmadena,malaga,españa,abax" />
    <meta name="robots" content="index,follow" />
    <title>Inicio</title>
    <link rel="shortcut icon" href="images/favicon.ico" /> 
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/cookies.css" type="text/css"/>
    <link rel="stylesheet" href="css/mapa.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="js/all-in-one-min.js"></script>
    <script type="text/javascript" src="js/setup.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/section.js"></script>
    <script type="text/javascript" src="js/ui/jquery.ui.effect-slide.js"></script>
</head>
<body>
    <?php include('header.php'); ?>
     <!-- MAIN -->
    <div class="main">

        <section id="mySection" class="homepage_widgets_bg clearfix">
            <div class="clear padding20"></div>
            <div class="container clearfix">
                <div align="center">
                    <!--<img  src="images/mapa.png" heigth="78%" width="78%" ></img> --> 
                    <!-- MAPA-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                <div id="worldmap"></div>
                            </div>
                        </div>
                    </div>
                    <script src="http://code.jquery.com/jquery.js"></script>
                    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
                    <script src="dist/jquery.twism.js"></script>
                    <script>
                        //it is not most optimal way, not used regions should not be computed
                        $(document).ready(function() {
                            $('#worldmap').twism("create",
                                    {
                                        map: "custom",
                                        customMap: 'images/mapa.svg',
                                        height: 600,
                                        width: 800,
                                        border: "white",
                                        color: "lightgray",
                                        hoverColor: "lightgray",
                                        hoverBorder: "white",
                                        backgroundColor: "88F",
                                        labels: true,
                                        individualCountrySettings: true,
                                        hideCountries: true,
                                        click: function(country) {
                                            switch (country)
                                            {
                                                case "path370":
                                                    alert("M&aacute;laga");
                                                    break;
                                                case "path338":
                                                    alert("Granada");
                                                    break;
                                                case "path322":
                                                    alert("C&oacute;rdoba");
                                                    break;
                                                case "path232":
                                                    alert("Toledo");
                                                    break;
                                                default:
                                                    break;
                                            }
                                        },
                                        hover: function() {
                                            alert("a");
                                            return;
                                        },
                                        //set highlighted regions
                                        individualCountrySettings: [{
                                                name: "path370",
                                                color: "#ff9191",
                                                border: "white",
                                                hoverColor: "#a75f5f"

                                            },
                                            {
                                                name: "path338",
                                                color: "#68ffb6",
                                                border: "white",
                                                hoverColor: "#49b380"
                                            },
                                            {
                                                name: "path322",
                                                color: "#fffe8c",
                                                border: "white",
                                                hoverColor: "#cdcc70"
                                            },
                                            {
                                                name: "path232",
                                                color: "#6ffff3",
                                                border: "white",
                                                hoverColor: "#439a93"
                                            }]

                                    });//"path338","path322","path232",

                        });
                    </script>
                    <!--MAPA-->
                    <br>
                    <br>
                </div>

            </div>
            <div class="clear padding20"></div>
        </section>
    </div>
    <!-- /MAIN -->
</body>
</html>
