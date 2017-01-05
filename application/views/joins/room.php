
    <div class="container">
       <?php
       foreach($query as $row): 
            // $name = $row->room_name;;
            // $dec =  $row->room_dec;
            // $price =  $row->room_price;

       ?>
        <div id="rooms" class="row list-group"> 
            <div class="item col-xs-4 col-lg-4"> 
                <div class="thumbnail"> 
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> <div class="caption"> 
                    <h4 class="group inner list-group-item-heading"> <?=$row->room_name;?></h4> 
                    <p class="group inner list-group-item-text"> <?=$row->room_description;?>
                    </p> 
                    <div class="row"> 
                        <div class="col-xs-12 col-md-6"> 
                            <p class="lead">Rs. <?=$row->room_price;?></p> 
                        </div> 
                        <div class="col-xs-12 col-md-6"> 
                            <?php
                                $id=$row->room_id;
                            ?>
                            <a class="btn btn-success" href="<?=site_url("hotel/booking/$row->room_type");?>">Book</a>
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 

        <?php endforeach; ?>
        <!-- <div class="item col-xs-4 col-lg-4"> 
            <div class="thumbnail"> 
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> 
                <div class="caption"> 
                    <h4 class="group inner list-group-item-heading"> Double Bed Room</h4> 
                    <p class="group inner list-group-item-text"> Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p> 
                    <div class="row"> 
                        <div class="col-xs-12 col-md-6"> 
                            <p class="lead"> $21.000</p> 
                        </div> 
                        <div class="col-xs-12 col-md-6"> 
                        <a class="btn btn-success" href="">Book</a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
        <div class="item col-xs-4 col-lg-4"> 
            <div class="thumbnail"> 
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> 
                <div class="caption"> 
                    <h4 class="group inner list-group-item-heading"> Hammock Room</h4> 
                    <p class="group inner list-group-item-text"> Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p> 
                    <div class="row"> 
                        <div class="col-xs-12 col-md-6"> 
                        <p class="lead"> $21.000</p> 
                        </div> 
                        <div class="col-xs-12 col-md-6"> 
                        <a class="btn btn-success" href="#">Book</a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
        <div class="item col-xs-4 col-lg-4"> 
            <div class="thumbnail"> 
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> 
                <div class="caption"> 
                    <h4 class="group inner list-group-item-heading"> Cheap Room</h4> 
                    <p class="group inner list-group-item-text"> Product description... Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p> 
                    <div class="row"> 
                        <div class="col-xs-12 col-md-6"> 
                        <p class="lead"> $21.000</p> 
                        </div> 
                        <div class="col-xs-12 col-md-6"> 
                        <a class="btn btn-success" href="#">Book</a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
        <div class="item col-xs-4 col-lg-4"> 
            <div class="thumbnail"> 
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> 
                <div class="caption"> 
                    <h4 class="group inner list-group-item-heading">Luxery Room</h4> 
                    <p class="group inner list-group-item-text"> Product description... Lorem ipsum dolor sit amet, consectetuer 
                    adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p> 
                    <div class="row"> 
                        <div class="col-xs-12 col-md-6"> 
                            <p class="lead"> $21.000</p> 
                        </div> 
                        <div class="col-xs-12 col-md-6"> 
                        <a class="btn btn-success" href="#">Book</a> 
                        </div> 
                    </div> 
                </div> 
            </div>  
        </div> 
        <div class="item col-xs-4 col-lg-4"> 
            <div class="thumbnail"> 
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> 
                <div class="caption"> 
                    <h4 class="group inner list-group-item-heading"> VIP Room</h4> 
                    <p class="group inner list-group-item-text"> Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing 
                    elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p> 
                    <div class="row"> 
                        <div class="col-xs-12 col-md-6"> 
                            <p class="lead"> $21.000</p> 
                        </div> 
                        <div class="col-xs-12 col-md-6"> 
                        <a class="btn btn-success" href="#">Book</a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> --> 
    </div> 
</div>

    </div>