<?php

$id = Url::getParam('id');

if(empty($id)){
    require_once "error.php";
} else {
    $objPages = new Pages();
    $about_page = $objPages->getPages($id);

    require_once "header.php";
    require_once "topnav.php"; ?>

    <div id="band" class="container text-center">
        <?php
        $objPages = new Pages();
        $about = $objPages->getPages('about');
        ?>
        <h3><strong><?php echo $about['page_header']; ?></strong></h3>
        <p><?php echo $about['body']; ?></p>
        <a class="pull-right btn  btn-warning btn-xs" href="javascript:history.go(-1)">Go Back..</a>
        <br>

    </div>

<?php    require_once "footer.php";
} ?>