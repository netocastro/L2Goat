
<div class="container">
	<ul class="nav nav-pills nav-fill mt-5 rounded border" id="myTab" role="tablist">

		<li class="nav-item">
			<a class="nav-link active" id="raid-boss-tab" data-toggle="tab" href="#raid-boss" role="tab" aria-controls="raid-boss" aria-selected="true">Raid boss</a> <!-- clocar condicao, pra que se caso cadastro nao seja realizado ele venha altomatimante pra essa aba-->
		</li>
		<li class="nav-item">
			<a class="nav-link " id="big-boss-tab" data-toggle="tab" href="#big-boss" role="tab" aria-controls="big-boss" aria-selected="false">Big boss</a> <!-- clocar condicao, pra que se caso cadastro nao seja realizado ele venha altomatimante pra essa aba-->
		</li>
		<li class="nav-item">
			<a class="nav-link" id="top-pvp-tab" data-toggle="tab" href="#top-pvp" role="tab" aria-controls="top-pvp" aria-selected="false">Top pvp</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="top-pk-tab" data-toggle="tab" href="#top-pk" role="tab" aria-controls="top-pk" aria-selected="false">Top pks</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="top-clan-tab" data-toggle="tab" href="#top-clan" role="tab" aria-controls="top-clan" aria-selected="false">Top Clan</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="heroes-tab" data-toggle="tab" href="#heroes" role="tab" aria-controls="heroes" aria-selected="false">Heroes</a>
		</li>
	</ul>

	<div class="tab-content mt-5 bg-transparent text-light" id="myTabContent">
		<div class="tab-pane fade show  active " id="raid-boss" role="tabpanel" aria-labelledby="raid-boss-tab">
			<h3>Raid Boss Status</h3>
			<div class="row">
				<div class="col-lg-1 col-0"></div>
				<div class="col-lg-10 col-12">
					<table class="table mb-5 table-striped  table-sm bg-transparent text-light ">
						<thead class="text-center">
							<tr>
								<th> Name </th>
								<th> Level </th>
								<th> Status </th>
								<th> Respawn </th>
							</tr>
						</thead>
						<tbody id="tbody-boss" class="text-center">
							<?php foreach ($raidBoss as $boss) : ?>
								<tr>
			
									<td><?= $boss->bossName() ?></td>
									<td class="px-5"><?= $boss->getLevel() ?></td> 
									<td><?= statusBoss($boss->respawn_time) ?></td>
									<td><?= respawnTime($boss->respawn_time) ?></td>
								</tr>
								
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-lg-1 col-0"></div>
			</div>
		</div>

		<div class="tab-pane fade" id="big-boss" role="tabpanel" aria-labelledby="big-boss-tab">
			<h3>Big Boss Status</h3>
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<table class="table mb-5 table-striped  table-sm bg-transparent text-light ">
						<thead class="text-center">
							<tr>   
								<th> Name </th>
								<th> Level </th>
								<th> Status </th>
								<th> Respawn </th>
							</tr>
						</thead>
						<tbody id="tbody-big-boss" class="text-center">
							<?php foreach ($bigBoss as $boss) : ?>
								<tr>
									<td><?= $boss->bossName() ?></td>
									<td class="px-5"><?= $boss->getLevel() ?></td> 
									<td><?= statusBoss($boss->respawn_time) ?></td>
									<td><?= respawnTime($boss->respawn_time) ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-1"></div>
			</div>
		</div>

		<div class="tab-pane fade" id="top-pvp" role="tabpanel" aria-labelledby="top-pvp-tab">
			<h3>Top PVP</h3>
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<table class="table mb-5 table-striped table-sm bg-transparent text-center text-light">
						<thead>
							<tr>
								<th> Position </th>
								<th> Name </th>
								<th> Kills </th>
								<th> class </th>
								<th> clan </th>
								<th> Level </th>
							</tr>
						</thead>
						<tbody id="tbody-top-pvp">
							<?php foreach ($topPvp as $key => $character) : ?>
								<tr>
									<td><?= $key + 1 ?></td>
									<td><?= $character->char_name ?></td>
									<td><?= $character->pvpkills ?></td>
									<td><?= $character->className() ?></td>
									<td><?= ($character->clanName() ? $character->clanName()->clan_name : '-') ?></td>
									<td><?= $character->level ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-1"></div>
			</div>
		</div>

		<div class="tab-pane fade" id="top-pk" role="tabpanel" aria-labelledby="top-pk-tab">
			<h3>Top Pk</h3>
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<table class="table mb-5 table-striped text-light table-sm bg-transparent text-center">
						<thead>
							<tr>
								<th> Position </th>
								<th> Name </th>
								<th> Pks </th>
								<th> Class </th>
								<th> Clan </th>
								<th> Level </th>
							</tr>
						</thead>
						<tbody id="tbody-top-pk">
							<?php foreach ($topPk as $key => $character) : ?>
								<tr>
									<td><?= $key + 1 ?></td>
									<td><?= $character->char_name ?></td>
									<td><?= $character->pkkills ?></td>
									<td><?= $character->className() ?></td>
									<td><?= ($character->clanName() ? $character->clanName()->clan_name : '-') ?></td>
									<td><?= $character->level ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-1"></div>
			</div>
		</div>

		<div class="tab-pane fade" id="top-clan" role="tabpanel" aria-labelledby="top-clan-tab">
			<h3>Top clan</h3>
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<table class="table mb-5 table-striped  table-sm bg-transparent text-light text-center ">
						<thead>
							<tr>
								<th> Position </th>
								<th> Name </th>
								<th> Level </th>
								<th> Leader </th>
								<!--<th> Nome Ally </th> -->
							</tr>
						</thead>
						<tbody id="tbody-top-clan">
							<?php foreach ($topClan as $key => $clan) : ?>
								<tr>
									<!-- faltachamar o metodo  char name -->
									<td><?= $key + 1 ?></td>
									<td><?= $clan->clan_name ?></td>
									<td><?= $clan->clan_level ?></td>
									<td><?= $clan->nameLeader() // leader_name
										?></td>
									<!--<td><?= $clan->ally_name ?></td> -->
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-1"></div>
			</div>
		</div>

		<div class="tab-pane fade" id="heroes" role="tabpanel" aria-labelledby="heroes-tab">
			<h3>Heroes</h3>
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<table class="table mb-5 table-striped  table-sm bg-transparent text-light text-center">
						<thead>
							<tr>
								<!--<th> ID </th> -->
								<th> Name </th>
								<th> Class </th>
								<th> count </th>

							</tr>
						</thead>
						<tbody id="tbody-heroes">
							<?php foreach ($heroes as $hero) : ?>
								<tr>
									<td><?= $hero->charName() ?></td>
									<td><?= $hero->className() ?></td>
									<td><?= $hero->count ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-1"></div>
			</div>
		</div>
	</div>
</div>
