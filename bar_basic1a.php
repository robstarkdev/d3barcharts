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

        var bardata = [75, 30, 98, 15, 44, 23, 5];
        var height = 400,
            width = 600,
            barWidth = 50,
            barOffset = 5;

        // here, the original values are being transposed
        // with a scale that starts from 0 and goes to
        // the max value in the dataset, which is 45 here.
        // that is called the domain, then the "range" is
        // going to be from 0 to the height of our svg graphic, 400
        var yScale = d3.scaleLinear()
            .domain([0, d3.max(bardata)])
            .range([0,height]);

        var xScale = d3.scaleBand()
            .domain(bardata)
            // you also have .paddingInner(), .paddingouter()
            .padding(.2)
            .range([0, width]);

        d3.select('#viz').append('svg')
            .attr('width', width)
            .attr('height', height)
            .style('background', '#ffffff')
            .selectAll('rect').data(bardata)
            .enter().append('rect')
            .style('fill', '#C61C6F')
            .attr('width', function (d) {
                return xScale.bandwidth();
            })
            .attr('height', function (d) {
                return yScale(d);
            })
            .attr('x', function (d) {

                return xScale(d);

            })
            .attr('y', function (d) {

                return height - yScale(d);
            });




        // ... end document ready function
    });



</script>



<?php include 'inc_bottom_includes.php' ; ?>

</body>
</html>


