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

    <svg width="100" height="100">
      <circle cx="20" cy="20" r="20" fill="green" />
      <circle cx="70" cy="70" r="20" fill="purple" />
      <text x="20" y="25" font-family="sans-serif" font-size="12px" fill="white" text-anchor="middle">Hello!</text>
    </svg>


    <svg width="200" height="100">
        <rect x="0" y="0" width="200" height="100" stroke="red" stroke-width="3px" fill="white"/>
        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle">TEXT</text>
    </svg>


<?php include 'inc_bottom_includes.php' ; ?>

<script>

    $(document).ready(function(){








        // ... end document ready function
    });



</script>



<?php include 'inc_bottom_includes.php' ; ?>

</body>
</html>


