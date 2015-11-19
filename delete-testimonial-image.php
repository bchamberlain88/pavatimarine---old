<?php include("./connect.php");

    $del = $_GET['del'];
    mysql_query("DELETE FROM testimonial_img WHERE image = '$del'");
    unlink("./imgs/testimonials/$del");

?>