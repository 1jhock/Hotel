<div class="heading">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"><h1 class="text-center">Rooms</h1></div>
		<div class="col-lg-4"></div>
	</div>
</div>

<div class="container-fluid">
	<br>
	<a href="<?=base_url()?>hotel_admin" class="pull-right new" style="transform: translateX(-13px);"><i class="fa fa-line-chart"></i>&nbsp;Dashboard</a>
	<br>
	<div class="row">
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 301</h4>
			<hr>
				<?php if(!$one) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($one as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 302</h4>
			<hr>
				<?php if(!$two) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($two as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 303</h4>
			<hr>
				<?php if(!$three) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($three as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 304</h4>
			<hr>
				<?php if(!$four) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($four as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 305</h4>
			<hr>
				<?php if(!$five) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($five as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 306</h4>
			<hr>
				<?php if(!$six) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($six as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 307</h4>
			<hr>
				<?php if(!$seven) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($seven as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 308</h4>
			<hr>
				<?php if(!$eight) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($eight as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 309</h4>
			<hr>
				<?php if(!$nine) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($nine as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 310</h4>
			<hr>
				<?php if(!$ten) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($ten as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 311</h4>
			<hr>
				<?php if(!$eleven) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($eleven as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="room">
			<h4 class="text-center">Room 312</h4>
			<hr>
				<?php if(!$twelve) : ?>
					<h4 class="text-center">Room is available</h4>
				<?php else : ?>
					<?php foreach($one as $taken) : ?>
						<?= $taken->name ?> <br>
						Arrival: <?= $taken->arrival ?> <br>
						Departure: <?= $taken->departure ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
