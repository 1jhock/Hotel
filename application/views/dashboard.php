<div class="heading">
	<div class="row">
		<div class="col-lg-4"><img src="<?=base_url()?>img/lnu.png" alt="" class="img-responsive pull-right"></div>
		<div class="col-lg-4">
			<h1 class="text-center">LNU House</h1>
			<p class="text-center">Cor. P. Paterno &amp; Sta. Cruz Street <br>Tacloban City</p>
		</div>
		<div class="col-lg-4"><img src="<?=base_url()?>img/lnu-house.png" alt="" class="img-responsive pull-left"></div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4">
		<!-- DASHBOARD -->
			<h1>Dashboard</h1>
			<div class="glance">
				<div class="row">
					<div class="col-xs-4">
						<div class="glance-icon">
							<h1 class="text-center"><i class="fa fa-users"></i></h1>
						</div>
					</div>
					<div class="col-xs-8">
						<div class="glance-body">
							<h3 class="glance-title">Registered Users</h3>
							<h4 class="glance-content"><?=$total?></h4>
						</div>
					</div>
				</div>
			</div>
			<!-- end of DASHBOARD -->
			<hr>
			<!-- ROOMS -->
			<div class="glance">
				<div class="row">
					<div class="col-xs-4">
						<div class="rooms-icon">
							<h1 class="text-center"><i class="fa fa-suitcase"></i></h1>
						</div>
					</div>
					<div class="col-xs-8">
						<div class="glance-body">
							<h3 class="rooms-title">Rooms</h3>
							<h4 class="rooms-content">Available: <?=$rooms?></h4>
						</div>
					</div>
				</div>
			</div>
			<!-- end of rooms -->
			<hr>
			<!-- DEPARTURES -->
			
				<div class="glance">
					<div class="row">
						<div class="col-xs-4">
							<div class="departure-icon">
								<h1 class="text-center"><i class="fa fa-taxi"></i></h1>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="glance-body">
								<h3 class="departure-title">Departures</h3>
								<h4 class="departure-content"><?=$total_depart?></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="glance-container">
				<table class="table table-striped">
					<tbody>
					<?php if(!$departures) : ?>
						<tr class="no-content">
							<h4 class="text-center">No Guest/s are departing w/n month</h4>
						</tr>
					<?php else: ?>
						<?php foreach($departures as $departure) : ?>
							<tr>
								<td><?=$departure->name?></td>
								<td><?=$this->registration->format_time($departure->departure)?></td>
							</tr>
						<?php endforeach; ?>
					<?php endif; ?>
					</tbody>
				</table>
			</div>
			<!-- end of departures -->
			
		</div>
		<div class="col-lg-8">
			<h1>Guests</h1><div class="text-right">
			<a href="<?=base_url()?>hotel_admin/all_rooms" class="update-new"><i class="fa fa-tag"></i>&nbsp;Rooms</a>&nbsp;
			<a href="<?=base_url()?>hotel_admin/register" class="new"><i class="fa fa-plus-square-o"></i>&nbsp;New</a></div>
			
			<div class="all">
				<table class="table table-striped table-bordered" id="member_list">
				<thead  id="table_heading">
						<tr class="text-center">
							<td><strong><i class="fa fa-user green"></i>&nbsp;Name</strong></td>
							<td><strong><i class="fa fa-arrow-right red"></i>&nbsp;Arrival</strong></td>
							<td><strong><i class="fa fa-arrow-left orange"></i>&nbsp;Departure</strong></td>
							<td><strong><i class="fa fa-asterisk blue"></i>&nbsp;Quantity</strong></td>
							<td><strong><i class="fa fa-credit-card purple"></i>&nbsp;Payment</strong></td>
							<td><strong><i class="fa fa-paper-plane grey"></i>&nbsp;Action</strong></td>
						</tr>
					</thead>
					<tbody>
				
							<?php if(!$members) : ?>
								<h3 class="text-center">No Registered Guests</h3>
							<?php else: ?>
								<?php foreach($members as $member) : ?>
									<tr>
										<td><a href="<?=base_url()?>hotel_admin/current_info/<?=$member->register_id?>"><?=$member->name?></a></td>
										<td><?=$this->registration->format_time($member->arrival)?></td>
										<td><?=$this->registration->format_time($member->departure)?></td>
										<td><?=$member->num_person?></td>
										<td><?=$member->payment?></td>
										<td id="actions"><a href="<?=base_url()?>hotel_admin/update_guest/<?=$member->register_id?>" class="update"><i class="fa fa-edit"></i>&nbsp;Update</a>&nbsp;&nbsp;<a class="delete" href="<?=base_url()?>hotel_admin/delete_guest/<?=$member->register_id?>"><i class="fa fa-trash-o"></i>&nbsp;Delete</a></td>
									</tr>
								<?php endforeach; ?>
							<?php endif; ?>
					
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</div>