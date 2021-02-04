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


        var bardata =

            [
                {
                    "district" : "Baoan", "Amount": 33
                },
                {
                    "district" : "Nanshan", "Amount": 83
                },
                {
                    "district" : "Shekou", "Amount": 46
                },
                {
                    "district" : "Luohu", "Amount": 12
                }

            ];

        var sl = [{"Name": "Baoan", "Amt": 23} ];

//        alert(bardata[2].Amount);

        var bardata2 = [20, 30, 45, 15];
        var height = 400,
            width = 600,
            barHeight = 50,
            barOffset = 5;

        d3.select('#viz').append('svg')
            .attr('width', width)
            .attr('height', height)
            .style('background', '#ffffff')
            .selectAll('rect').data(bardata2)
            .enter().append('rect')
            .style('fill', '#C61C6F')
            .attr('height', barHeight)
            .attr('width', function (d, i) {
                return bardata2[i];
            })
            .attr('y', function (d, i) {

                return i * (barHeight + barOffset);

            })
            .attr('x', 120);

            d3.select('svg').selectAll('text').data(bardata2)
            .enter().append('text')
                .attr('x', 120)
                .attr('dominant-baseline', 'middle')
                .attr('fill', "white")
            // just below, i is 0 at some point so it
            // throws off the Y for Text such that it is
            // totally out of site and no adjustments will help
            .attr('y', function (d,i) {
                return i * (barHeight + barOffset) + (barHeight/2);
            })
            .text(function (d,i) {
                return bardata2[i];
            });




//        var svgContainer = d3.select("#viz");
//        var svgText = svgContainer.append("text");
//        svgText.attr("x",50).attr("y",50);
//        svgText.text("hi");

//        d3.select("svg").selectAll("p")
//            .data(bardata2)
//            .enter()
//            .append("p")
//            .text("New paragraph!");

//        d3.select("svg").selectAll('svg:text').data(bardata)
//            .enter().append('svg:text')
//            .attr("text-anchor", "middle")
//            .attr('fill', 'black')
//            .attr('stroke', 'black')
//            .style("font-size", "15px")
//            .text(function (d,i) {
//                return d[i].district;
//            })
//            .attr('y', function (d, i) {
//
//            return i * (barHeight + barOffset);
//
//            })
//            .attr('x', 120);





//    .append('text')
//            .attr('fill', 'black')
//            .attr('stroke', 'black')
//            .style("font-size", "15px")
//            .text(function (d) {
//                return d;
//            })
//            .attr('x', 0)
//            .attr('y', function (d, i) {
//                return i * (barHeight + barOffset);
//            });







        // ... end document ready function
    });



</script>



<?php include 'inc_bottom_includes.php' ; ?>

</body>
</html>


