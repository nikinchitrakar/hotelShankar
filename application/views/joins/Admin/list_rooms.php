<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet">
<div id="page-wrapper">
	<div class="span7">   
		<div class="widget stacked widget-table action-table">

			<div class="widget-header">
				<i class="icon-th-list"></i>
				<h3>Room Information Table</h3>
			</div> <!-- /widget-header -->

			<div class="widget-content">

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Room No.</th>
							<th>Room Type</th>
							<th>Room Name</th>
							<th>Room Details</th>
							<th>Room Price</th>
							<th>Room Capacity</th>
							<!-- <th class="td-actions"></th> -->
						</tr>
					</thead>
					<tbody>
						<?php
       						foreach($query1 as $row1){ 
        		        ?>
						<tr>
							<td><?=$row1->room_no;?></td>
							<td><?=$row1->room_type;?></td>
							<?php foreach ($query as $row){
								if($row1->room_type==$row->room_type)	
								{
									echo "<td>$row->room_name</td>
									<td>$row->room_description</td>
									<td>$row->room_price;</td>
									<td>$row->room_capacity;</td>";
									break;
								}
							}
							?>
								<<!-- td class="td-actions">
									<a href="javascript:;" class="btn btn-small btn-primary">
										<i class="btn-icon-only icon-ok"></i>										
									</a>
									
									<a href="javascript:;" class="btn btn-small">
										<i class="btn-icon-only icon-remove"></i>										
									</a>
								</td> -->
							</tr>
							<?php
								};
							?>
							
											</tbody>
										</table>

									</div> <!-- /widget-content -->

								</div> <!-- /widget -->
							</div>
						</div>
