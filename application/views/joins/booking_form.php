<div class="box">
    <div class="container">
        <div class="col-md-5">
            <div class="form-area">
                <form role="form" action="../add_user_data" method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center; "><?=$page;?> Form</h3>

                    

                    
                    <select name="room_no"> 
                        <option value="" required="required" >Room Number:</option>           

                       <!--  <ul class="dropdown-menu" role="menu"> -->

                        <?php
                            foreach($query as $row): 
                        ?>
                            <option><?=$row->room_no;?></option>
                        <?php endforeach; ?>   
                        
                    </select>
                    <br>
                    <br>
                       
                   
                    <div class="form-group">
                        <input type="text" class="form-control" id="fname" name="fname"  placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Mobile Number" required>
                    </div>

                    <div class="form-group registration-date">
                        <label class="control-label col-sm-3" for="registration-date">Check In Date:</label>
                        <div class="input-group registration-date-time">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                            <input class="form-control" name="registration-date-in" id="registration-date-in" type="date">

                            <!-- <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="addNow()"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Now</button>
                            </span> -->

                        </div>
                    </div>
                    <div class="form-group registration-date">
                        <label class="control-label col-sm-3" for="registration-date">Check Out Date:</label>
                        <div class="input-group registration-date-time">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                            <input class="form-control" name="registration-date-out" id="registration-date-out" type="date">

                            <!-- <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="addNow()"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Now</button>
                            </span> -->
                        </div>
                    </div>


                   
                    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary pull-right">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
</div>

