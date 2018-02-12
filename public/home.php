<?php require_once "header.php"; ?>
<?php require_once "navigation-top.php"; ?>
<?php require_once "topnav.php"; ?>

    <div id="band" class="container text-center">
        <?php
            $objPages = new Pages();
            $about = $objPages->getPages('about');
        ?>

                <p class="text-center"><strong><?php echo $about['page_header']; ?></strong></p>
                <p><?php echo Helper::shortenString($about['body'], 2000); ?> <a class="pull-right btn btn-xs btn-info" href="?page=details&id=<?php echo $about['slug']; ?>">বিস্তারিত....</a> </p>


        <div id="slider1">
            <a class="buttons prev" href="#">&#60;</a>
            <div class="viewport">
                <ul class="overview">
                    <li><img src="media/works (1).jpg" width="240" height="121" /></li>
                    <li><img src="media/works (2).jpg"   width="240" height="121" /></li>
                    <li><img src="media/works (3).jpg"  width="240" height="121" /></li>
                    <li><img src="media/works (4).jpg"  width="240" height="121" /></li>
                    <li><img src="media/works (5).jpg"  width="240" height="121" /></li>

                </ul>
            </div>
            <a class="buttons next" href="#">&#62;</a>
        </div>
    </div>

    <div id="tour" class="bg-1">
    <div id="text-carousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="row">
            <div class="carousel-inner">
                <?php
                $objWork = new Works();
                $first = $objWork->getFirst();
                ?>
                <div class="item active">
                    <div class="carousel-content">
                        <div class="media">
                            <a class="pull-left">
                                <img class="media-object" src="<?php echo Works::$path.$first['image']; ?>" width="400" height="320" />
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading"><?php echo $first['title']; ?></h3>
                                <div>
                                    <p><?php echo Helper::shortenString($first['description'], 3500); ?><a class="btn btn-xs btn-warning" href="?page=first">বিস্তারিত</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php

$pages = $objWork->getWork();
if(!empty($pages)){
    foreach ($pages as $page) {
        $image = $objWork->getImageById($page['works_id']);
        ?>
        <div class="item">
            <div class="carousel-content">
                <div class="media">
                    <a class="pull-left">
                        <img class="media-object" src="<?php echo Works::$path.$image['image_name'];  ?>" width="400" height="320" />
                    </a>
                    <div class="media-body">
                        <div>
                            <h3 class="media-heading"><?php echo $page['works_title']; ?></h3>
                            <p><?php echo Helper::shortenString($page['works_description'], 3500); ?> <a class="btn btn-xs btn-warning" href="?page=work-details">বিস্তারিত </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <?php }

} else { ?>
    <p>There is no details work</p>
<?php }

?>



                </div>

        </div>
        <!-- Controls --> <a class="left carousel-control" href="#text-carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#text-carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

    </div>
    </div>
<br>
    <div id="foot">
        <div class="row">
            <div class="col-sm-6">
                <div id="googleMap" style="width:100%;height:350px"></div>

            </div>
            <div class="col-sm-6">
                <iframe width="100%" height="350"
                        src="https://www.youtube.com/embed/L4WZJjfQEVY?autoplay=0">
                </iframe>
            </div>
        </div>
    </div>
    <!-- Container (Contact Section) -->
    <div id="contact" class="container">
        <h3 class="text-center">আপনার মতামত</h3>


        <div class="row">
            <div class="col-md-4">
                <p>Fan? Drop a note.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>রাজশাহী , বাংলাদেশ</p>
                <p><span class="glyphicon glyphicon-phone"></span>Phone: +88 072154585</p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: fajlehossainbadsha@gmail.com</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Add Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var myCenter = new google.maps.LatLng(24.3635886, 88.6241351);

        function initialize() {
            var mapProp = {
                center:myCenter,
                zoom:12,
                scrollwheel:false,
                draggable:false,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker = new google.maps.Marker({
                position:myCenter,
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


<?php require_once "footer.php"; ?>