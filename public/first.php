<?php require_once "header.php"; ?>
<?php require_once "topnav.php"; ?>

<div id="band" class="container text-center">
    <?php
    $objWork = new Works();
    $first = $objWork->getFirst();
    ?>


        <div class="media">
            <a class="pull-left">

            </a>
            <div class="media-body">
                <h3 class="media-heading"><?php echo $first['title']; ?></h3><br>

                <p><a class="pull-left">
                        <img class="media-object" src="<?php echo Works::$path.$first['image']; ?>" width="350" />
                    </a>
                    <?php echo $first['description']; ?></p>

            </div>
        </div>


</div>

<?php require_once "footer.php"; ?>
