<div class="carousel-inner">
    <?php
    $get_slides = "select * from slider limit 0,1";
    $run_slides = mysqli_query($con, $get_slides);
    while ($row_slides = mysqli_fetch_array($run_slides)) {
        $slide_name = $row_slides['slide_name'];
        $slide_image = $row_slides['slide_image'];

        echo "
                            <div class='item active'>
                            <img src='admin_area/slide_images/$slide_image'>
                            </div>
                        ";
    }

    ?>
</div>