<div class="profile">
	<div class="container">
		<h3><?=$info->name?></h3>
	</div>
</div>
<div class="container">
	<div class="row">
	<br>
	<div class="pull-right"><a href="<?=base_url()?>hotel_admin/update_guest/<?=$info->register_id?>" class="update-new"><i class="fa fa-edit"></i>&nbsp;Change</a>&nbsp;&nbsp;<a href="<?=base_url()?>hotel_admin" class="new"><i class="fa fa-line-chart"></i>&nbsp;Dashboard</a></div>
	<br>
	<br>
		<table class="table table-striped table-bordered">
			<tbody>
				<tr>
					<td><strong>Folio #</strong></td>
					<td><?=$info->folio?></td>
				</tr>
				<tr>
					<td><strong>Adddress</strong></td>
					<td><?=$info->address?></td>
				</tr>
				<tr>
					<td><strong>Nationality</strong></td>
					<td><?=$info->nationality?></td>
				</tr>
				<tr>
					<td><strong>Birthdate</strong></td>
					<td><?=$info->birthdate?></td>
				</tr>
				<tr>
					<td><strong>Profession</strong></td>
					<td><?=$info->profession?></td>
				</tr>
				<tr>
					<td><strong>Residence / Password</strong></td>
					<td><?=$info->res_id?></td>
				</tr>
				<tr>
					<td><strong># Person</strong></td>
					<td><?=$info->num_person?></td>
				</tr>
				<tr>
					<td><strong>Arrival</strong></td>
					<td><?=$info->arrival?></td>
				</tr>
				<tr>
					<td><strong>Departure</strong></td>
					<td><?=$info->departure?></td>
				</tr>
				<tr>
					<td><strong>Room</strong></td>
					<td><?=$info->room?></td>
				</tr>
				<tr>
					<td><strong>Destination</strong></td>
					<td><?=$info->destination?></td>
				</tr>
				<tr>
					<td><strong>Payment</strong></td>
					<td><?=$info->payment?></td>
				</tr>
				<tr>
					<td><strong>OR #</strong></td>
					<td><?=$info->or_num?></td>
				</tr>
				<tr>
					<td><strong>Charge to</strong></td>
					<td><?=$info->charge_to?></td>
				</tr>
				<tr>
					<td><strong>Registrar</strong></td>
					<td><?=$info->registrar?></td>
				</tr>
			</tbody>
		</table>
		
	</div>
</div>