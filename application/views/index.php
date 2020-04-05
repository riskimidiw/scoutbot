<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>ScoutBot</title>
</head>

<body>
	<div class="container mt-5">
		<h2 class="text-center mb-4">Weighted Product</h2>

		<div class="row">
			<div class="col-2 mx-auto">
				<a href="<?= base_url('/player/new') ?>" class="btn btn-primary mb-3">Add new player</a>
			</div>
			<div class="col-10">
				<form action="<?= base_url('/') ?>" method="post">
					<div class="form-row">
						<div class="col mx-auto">
							<input name="price" class="form-control text-center" type="number" required value="<?= $this->session->flashdata('price') ?>">
							<label class="text-center d-block">Price</label>
						</div>
						<div class="col mx-auto">
							<input name="attack" class="form-control text-center" type="number" required value="<?= $this->session->flashdata('attack') ?>">
							<label class="text-center d-block">Attack</label>
						</div>
						<div class="col mx-auto">
							<input name="defense" class="form-control text-center" type="number" required value="<?= $this->session->flashdata('defense') ?>">
							<label class="text-center d-block">Defense</label>
						</div>
						<div class="col mx-auto">
							<input name="stamina" class="form-control text-center"type="number" required value="<?= $this->session->flashdata('stamina') ?>">
							<label class="text-center d-block">Stamina</label>
						</div>
						<div class="col mx-auto">
							<input name="aggression" class="form-control text-center" type="number" required value="<?= $this->session->flashdata('aggression') ?>">
							<label class="text-center d-block">Aggression</label>
						</div>
						<div class="col mx-auto">
							<button type="submit" class="btn btn-success btn-block">Search</button>
						</div>
						<div class="col mx-auto">
							<a href="<?= base_url('/player/reset') ?>" class="btn btn-danger btn-block">Reset</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row mt-4">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Name</th>
						<th scope="col">Club</th>
						<th scope="col">Price</th>
						<th scope="col">Attack</th>
						<th scope="col">Defense</th>
						<th scope="col">Stamina</th>
						<th scope="col">Aggression</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$count = 1;
						$formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
					?>
					<?php foreach ($players as $player) : ?>
						<tr>
							<td><?= $count++ ?></td>
							<td><?= $player['name'] ?></td>
							<td><?= $player['club'] ?></td>
							<td><?= $formatter->formatCurrency($player['price'], "USD") ?></td>
							<td><?= $player['attack'] ?></td>
							<td><?= $player['defense'] ?></td>
							<td><?= $player['stamina'] ?></td>
							<td><?= $player['aggression'] ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>