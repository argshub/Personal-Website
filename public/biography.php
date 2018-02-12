<?php require_once "header.php"; ?>
<?php require_once "topnav.php"; ?>

<div id="band" class="container text-center">
    <?php $objPage = new Pages();
    $rows = $objPage->getBio();
    if(!empty($rows)){ ?>
        <h3><strong>জীবন বিত্তান্ত:: ফজলে হোসেন বাদশা, এম. পি.</strong></h3>
 <?php        $objPaging = new Paging($rows, 1);
        $bios = $objPaging->getRecords();
        foreach ($bios as $bio) {
            $image = !empty($bio['pages_image']) ? Pages::$path.$bio['pages_image'] : Pages::$path."unavailable.png";
            $width = Helper::getImgSize($image, 0);
            $height = Helper::getImgSize($image, 1);
            $width = $width > 400 ? 400 : $width;
            $height = $height > 600 ? 600 : $height;
            ?>

            <div class="media">
                <div class="media-body">
                    <p><em><?php echo $bio['name']; ?></em></p>
                    <p class="pull-right"><i><?php echo $bio['author']; ?></i></p>
                    <br>
                    <br><br><br><br>
                    <h3 class="media-heading"><strong><?php echo $bio['pages_title']; ?></strong></h3>
                    <p><?php echo $bio['pages_description']; ?></p>
                </div>
            </div>


            <?php


        }

echo $objPaging->getLinks();        ?>
            </div>





  <?php  }
    ?>



<?php require_once "footer.php"; ?>