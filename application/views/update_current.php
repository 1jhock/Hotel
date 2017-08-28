
	<?php if(isset($error)) : ?>
		<div class="status">
			<div class="error-status">
			<span class="pull-right"><i class="fa fa-close" id="close"></i></span>
			<h4 class="text-center"><?=$error; ?></h4>
		</div>
		</div>
	<?php endif; ?>

<div class="heading">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"><h1 class="text-center">UPDATE</h1></div>
		<div class="col-lg-4">
		<form id="new_reg" action="" method="post">
				<div class="form-group pull-right">
				<label for="folio">Folio</label>
				<input type="text" class="form-control" id="folio" name="folio" value="<?=$current->folio?>">
			</div>
		</div>
	</div>
</div>

<div class="container">
	<br>
	<a href="<?=base_url()?>hotel_admin" class="pull-right new"><i class="fa fa-line-chart"></i>&nbsp;Dashboard</a>
	<br>
	<br>
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Mr./Mrs./Ms.</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Surname | Given Name | M.I." value="<?=$current->name?>">
				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" name="address" placeholder="Complete Address" value="<?=$current->address?>">
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-lg-6">
							<label for="nationality">Nationality</label>
							<input type="text" class="form-control" name="nationality" id="nationality" value="<?=$current->nationality?>">
						</div>
						<div class="col-lg-6">
							<label for="bithdate">Birthdate</label>
							<input type="date" class="form-control" name="birthdate" id="birthdate" value="<?=$current->birthdate?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-lg-6">
							<label for="company">Company</label>
							<input type="text" class="form-control" name="company" id="company" value="<?=$current->company?>">
						</div>
						<div class="col-lg-6">
							<label for="prfession">Profession</label>
							<input type="text" class="form-control" name="profession" id="profession" value="<?=$current->profession?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="credentials">Password/ID/Residence No.</label>
					<input type="text" class="form-control" id="credentials" name="credentials" value="<?=$current->res_id?>">
				</div>
			</div>
			<div class="col-lg-4 input-container">
				<div class="form-group">
					<label for="num_person">No. of Person/s</label>
					<input type="number" class="form-control" name="num_person" id="num_person" value="<?=$current->num_person?>">
				</div>

				<div class="form-group">
					<label for="arrival">Arrival</label>
					<input type="date" class="form-control" name="date_arrival" id="arrival" value="<?=$current->arrival?>">
				</div>

				<div class="form-group">
					<label for="depart">Departure</label>
					<input type="date" class="form-control" name="date_depart" id="depart" value="<?=$current->departure?>">
				</div>
				<hr>
				<div class="form-group">
					<label for="room">Room #</label><span class="pull-right" id="view-rates">View Rates</span>
					<select name="room" id="room" class="form-control" value="<?=$current->room?>">
						<option value="234">301</option>
						<option value="244">302</option>
						<option value="244">303</option>
						<option value="236">304</option>
						<option value="242">305</option>
						<option value="865">306</option>
						<option value="564">307</option>
						<option value="343">308</option>
						<option value="343">309</option>
						<option value="343">310</option>
						<option value="343">311</option>
						<option value="343">311</option>
					</select>
					<br>
					<div id="rates">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td><strong>Room</strong></td>
									<td><strong>Rates</strong></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Single Room</td>
									<td>P 750 per room</td>
								</tr>
								<tr>
									<td>Twin Room</td>
									<td>850 per room</td>
								</tr>
								<tr>
									<td>Suite Room</td>
									<td>1,600 per room</td>
								</tr>
								<tr>
									<td>Extra Bed</td>
									<td>150 per bed</td>
								</tr>
								<tr>
									<td>Joiner</td>
									<td>80 per joiner</td>
								</tr>
								<tr>
									<td>Guest House</td>
									<td>1,000 per room</td>
								</tr>
							</tbody>
						</table>
						<hr>
					</div>
				</div>

				<div class="form-group">
					<label for="destination">Destination</label>
					<input type="text" class="form-control" name="destination" id="destination" value="<?=$current->destination?>">
				</div>

			</div>
		</div>
		
		<small><i class="fa fa-exclamation-circle"></i>&nbsp;The Hotel is not responsible for any loss of valuables inside the room</small>
		<hr>

		<div class="row">
			<div class="col-lg-4">
				<div class="register-container">
					<div class="form-group">
					<h4>Payment Method</h4>
					
					<input <?php echo ($current->payment == 'Cash') ? 'checked' : ''  ?> type="radio" name="payment" value="Cash" id="cash">
					<label for="cash">Cash</label>  <br>
					<input <?php echo ($current->payment == 'Credit') ? 'checked' : ''  ?> type="radio" name="payment" value="Credit" id="credit">
					<label for="credit">Credit</label>
				</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="form-group">
					<label for="or">OR #</label>
					<input type="text" class="form-control" name="or" id="or" value="<?=$current->or_num?>">
				</div>
			</div>

			<div class="col-lg-4">
				<div class="register-container">
					<div class="form-group">
					<label for="charge_to">Charge to</label>
					<input type="text" class="form-control" name="charge_to" id="charge_to" value="<?=$current->charge_to?>">
				</div>

				<div class="form-group">
					<label for="registrar">Registrar's Initial/Practicum</label>
					<input type="text" class="form-control" name="registrar" id="registrar" value="<?=$current->registrar?>">
				</div>
				</div>
			</div>
		</div>
		<hr>
		<button class="btn btn-info center-block" type="submit">Update</button>
		</form>
		<br>
		<br>
		<br>
		<br>
	</div>