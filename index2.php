<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>D3</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">


    <script type="text/javascript" src="d3mine.js" charset="utf-8"></script>
    <!--    <link rel="stylesheet" type="text/css" media="screen" href="includes/bootstrap/css/bootstrap.min.css">-->

    <link rel="stylesheet" type="text/css" media="screen" href="cssdata_apt.css">
<!--    <script type="text/javascript" src="includes/d3/d3.js" charset="utf-8"></script>-->
<!--    <script type="text/javascript" src="d3.min.js" charset="utf-8"></script>-->

    <!-- NOTE RE jQuery UI Tabs files" size: it "cost" a total of 52kb for the the three ui files i needed to
          include to get the tabs functionality, there are the two below and the .js file at the bottom of the page  -->
<!--    <link rel="stylesheet" type="text/css" media="screen" href="jqueryuitabs/jquery-ui.min.css">-->
<!--    <link rel="stylesheet" type="text/css" media="screen" href="jqueryuitabs/jquery-ui.theme.min.css">-->
    <link rel="icon" href="images/jslogo.png">

</head>
<body>

<div>d3</div>

<div id="viz"></div>
<p></p>

<!--<script type="text/javascript" src="includes/jquery-1.11.3.min.js"></script>-->
<!--<script type="text/javascript" src="includes/bootstrap/js/bootstrap.min.js"></script>-->





<script>




    $(document).ready({


        d3.select("#viz").append("svg").attr("width", 600).attr("height", 400).attr("id", "new").style("background", "#93A1A1");

        d3.select("#viz").append("p").attr("class", "blue_p");


    d3.selectAll("p")
        .data([4, 8, 15, 16, 23, 42])
        .style("font-size", function(d) { return d + "px"; });

        // ... end document ready function
    });


</script>
<script type="text/javascript" src="d3mine.js" charset="utf-8"></script>
</body>
</html>




