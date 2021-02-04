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

        var bardata = [75, 30, 98, 15, 44, 42, 38];

        bardata.sort(function(a, b){return b-a});
        var height = 250,
            width = 250,
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

        var colors = d3.scaleLinear()
            .domain([0, d3.max(bardata)])
            .range(["white", 'green']);


        // i'm doing this so i can transition the
        // drawing of the bars
        var mychart = d3.select('#viz').append('svg')
            .attr('width', width)
            .attr('height', height)
            .style('background', 'silver')
            .selectAll('rect').data(bardata)
            .enter().append('rect')
            .attr('fill', function (d) {
                return colors(d);
            })
            .attr('width', function (d) {
                return xScale.bandwidth();
            })
            .attr('height', 0)
            .attr('x', function (d) {

                return xScale(d);
            })
            .attr('y', height)
            .on('mouseover', function (d) {

                tooltip.transition().duration(150)
                    .style('opacity', 0.9);

                tooltip.html(d)
                    .style('left', (d3.event.pageX -35) + 'px')
                    .style('top', (d3.event.pageY -30) + 'px');

                // you could use .style('fill', 'yellow') if you wanted
                d3.select(this)
                    .style('opacity', 0.5)

            })
            .on('mouseout', function (d) {
                d3.select(this)
                    .style('opacity', 1)
                tooltip.transition().duration(150)
                    .style('opacity', 0);

            });



            var tooltip = d3.select('body').append('div')
                .style('position', 'absolute')
                .style('padding', '0 10px')
                .style('background', 'white')
                .style('opacity', 0);

            mychart.transition()
                .attr('height', function (d) {
            return yScale(d);
            })
            .attr('y', function (d) {

                return height - yScale(d);
            })
                .delay(function (d,i) {
                    return i * 40;
                })
                .duration(300);
                //.ease(d3.easeCircle)
                //.ease(d3.easeBack)
                //.ease(d3.easeBounceOut);




        // ... end document ready function
    });



</script>



<?php include 'inc_bottom_includes.php' ; ?>

</body>
</html>


