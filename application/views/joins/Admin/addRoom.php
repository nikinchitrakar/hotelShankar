<
<div id="page-wrapper">
<div class="box">
    <div class="container">
        <div class="col-md-6">
            <div class="form-area">
                <form role="form" enctype="multipart/form-data" action="add_room_data" method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center; ">Add Rooms</h3>
                   
                    <label>Room Number</label>
                    <br>
                    <div class="form-group">
                        <input type="Number" class="form-control" id="room-no" name="room-no"  placeholder="Room Number" required>
                    </div>
                    
                    <br>
                    <label>Room Type</label>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control" id="room-type" name="room-type"  placeholder="Room Type" required>
                    </div>
                    
                    <br>
                    <label>Room Name</label>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control" id="room-name" name="room-name"  placeholder="Room Name" required>
                    </div>
                    <br>
                    <label>Room Details</label>
                    <br>
                    <div class="form-group">
                        <textarea name="rdetail" class="form-control" id="room-detail" name="room-detail"  placeholder="Room Details" required> </textarea>
                    </div>
                    <br>
                    <label>Upload Image</label>
                           
                    <div class="control-group">
                        <div class="controls">
                            <input type="file" id="userfile" name="userfile" class="input-file" >
                        </div>
                    </div>
                    <br>
                    <label>Room Price</label>
                    <br>
                    <div class="form-group">
                        <input type="Number" class="form-control" id="room-price" name="room-price"  placeholder="Room Price" required>
                    </div>
                   <label>Room Capasity</label>
                    <br>
                    <div class="form-group">
                        <input type="Number" class="form-control" id="room-capasity" name="room-capasity"  placeholder="Room Price" required>
                    </div>
                    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary pull-right">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
