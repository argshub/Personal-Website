
<?php require_once "header.php"; ?>
<?php require_once "topnav.php"; ?>

<div id="band" class="container text-center">
    <?php $objWork = new Works();
    $rows = $objWork->getWork();
    if(!empty($rows)){ ?>
    <?php        $objPaging = new Paging($rows, 1);
    $bios = $objPaging->getRecords();
    foreach ($bios as $bio) {
        $images = $objWork->getImg($bio['works_id']);

        ?>

        <div class="media">
            <a class="pull-left">

            </a>
            <div class="media-body">
                <h3 class="media-heading"><?php echo $bio['works_title']; ?></h3><br>

                <p><a class="pull-left">
                        <?php
                        foreach ($images as $image) { ?>
                            <img class="media-object" src="<?php echo Works::$path.$image['image_name']; ?>" width="350" /><br>
                      <?php  }
                        ?>

                    </a>
                    <?php echo $bio['works_description']; ?></p>

            </div>
        </div>


        <?php


    }

    echo $objPaging->getLinks();        ?>
</div>





<?php  }
?>



<?php require_once "footer.php"; ?>




