<?php
?>



<!DOCTYPE html><meta charset="utf-8">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bar Chart Basic</title>


    <?php include 'inc_headtag.php' ?>
    <link rel="stylesheet" type="text/css" media="screen" href="cssbar_basic.css">

</head>
<body>

<div class="container">

    <div id="viz">


    </div>


</div>


<?php include 'inc_bottom_includes.php' ; ?>

<script>

    $(document).ready(function(){

        var bardata = [20, 30, 45, 15];
        var height = 400,
            width = 600,
            barHeight = 50,
            barOffset = 5;

        d3.select('#viz').append('svg')
            .attr('width', width)
            .attr('height', height)
            .style('background', '#ffffff')
            .selectAll('rect').data(bardata)
            .enter().append('rect')
            .style('fill', '#C61C6F')
            .attr('height', barHeight)
            .attr('width', function (d) {
                return d;
            })
            .attr('y', function (d, i) {

                return i * (barHeight + barOffset);

            });
//            .attr('x', function (d) {
//
//                return width - d;
//            });




        // ... end document ready function
    });



</script>



<?php include 'inc_bottom_includes.php' ; ?>

</body>
</html>


