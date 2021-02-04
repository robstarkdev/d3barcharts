<?php
?>



<!DOCTYPE html><meta charset="utf-8">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>new d3</title>


    <?php include 'inc_headtag.php' ?>
    <link rel="stylesheet" type="text/css" media="screen" href="cssdata_apt.css">

</head>
<body>

<div class="box_pie"><svg width="350" height="350"></svg></div>


<!--<div id="vizcontainer">--
<!--    <svg style="width:500px;height:500px;border:1px lightgray solid;">-->
<!---->
<!---->
<!---->
<!--    </svg>-->
<!--</div>-->

<?php include 'inc_bottom_includes.php' ; ?>

<script>

    $(document).ready(function(){


       var data = [3, 5, 8, 17];

        var datalabels =

        [
            {
                "label" : "Baoan"
            },
            {
                "label" : "Shekou"
            },
            {
                "label" : "Luohu"
            },
            {
                "label" : "Nanshan"
            }


        ];

        var svg = d3.select("svg"),
            width = svg.attr("width"),
            height = svg.attr("height"),
            radius = Math.min(width, height) / 2,
            g = svg.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

        var color = d3.scaleOrdinal(['#99ff66','#377eb8', '#ff7f00', '#cc66ff']);

        //#984ea3

        // Generate the pie
        var pie = d3.pie();

        // Generate the arcs
        var arc = d3.arc()
            .innerRadius(60)
            .outerRadius(radius);

        //Generate groups
        var arcs = g.selectAll("arc")
            .data(pie(data))
            .enter()
            .append("g")
            .attr("class", "arc");

        //Draw arc paths
        arcs.append("path")
            .attr("fill", function(d, i) {
                return color(i);
            })
            .attr("d", arc);

        // for the text-anchor property: start | middle | end
        // here i try to rotate the labels
//    .attr("transform", function(d) {
//            var c = arc.centroid(d);
//            return "translate(" + c[0] + "," + c[1] + ")" + "rotate(" + angle(d) + ")";
//        })
        arcs.append("svg:text")
            .attr("transform", function(d) {
                var c = arc.centroid(d);
                return "translate(" + c[0] + "," + c[1] + ")";
            })
            .attr('dy', '2em')
            .attr("text-anchor", "middle")
            .attr('fill', 'black')
            .style("font-size", "15px")
            .style("color", "whitesmoke")
            .style("text-decoration", "bold")
            .text(
                function(d, i) {
                    return datalabels[i].label;
                });

        function angle(d) {
            var a = (d.startAngle + d.endAngle) * 90 / Math.PI - 90;
            return a > 90 ? a - 180 : a;
        }

//        arcs.append("text")
//            .attr("text-anchor", "middle")
//            .text(function(d,i) {
//                return datalabels[i].label;
//            });




//        d3.select("svg")
//            .append("circle")
//            .attr("r", 20)
//            .attr("cx",20)
//            .attr("cy",20)
//            .style("fill","red");
//        d3.select("svg")
//            .append("text")
//            .attr("id", "a")
//            .attr("x",20)
//            .attr("y",20)
//            .style("opacity", 0)
//            .text("HELLO WORLD");
//        d3.select("svg")
//            .append("circle")
//            .attr("r", 100)
//            .attr("cx",400)
//            .attr("cy",400)
//            .style("fill","lightblue");
//        d3.select("svg")
//            .append("text")
//            .attr("id", "b")
//            .attr("x",400)
//            .attr("y",400)
//            .style("opacity", 0)
//            .text("Uh, hi.");
//
//
//        d3.select("#a").transition().delay(1000).style("opacity", 1);
//        d3.select("#b").transition().delay(3000).style("opacity", .75);
//
//


        //    d3.select("svg")
        //        .append("line")
        //        .attr("x1", 20)
        //        .attr("y1", 20)
        //        .attr("x2",400)
        //        .attr("y2",400)
        //        .style("stroke", "black")
        //        .style("stroke-width","2px");
        //
        //    d3.select("svg")
        //        .append("circle")
        //        .attr("r", 20)
        //        .attr("cx",20)
        //        .attr("cy",20)
        //        .style("fill","red");
        //    d3.select("svg")
        //        .append("text")
        //        .attr("x",20)
        //        .attr("y",20)
        //        .text("HELLO");
        //
        //
        //    d3.select("svg")
        //        .append("circle")
        //        .attr("r", 100)
        //        .attr("cx",400)
        //        .attr("cy",400)
        //        .style("fill","lightblue");
        //    d3.select("svg")
        //        .append("text")
        //        .attr("x",400)
        //        .attr("y",400)
        //        .text("WORLD");




        // ... end document ready function
    });



</script>



<?php include 'inc_bottom_includes.php' ; ?>

</body>
</html>


