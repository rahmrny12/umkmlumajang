<div class="row justify-content-center">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">No.</th>
							<th scope="col">Nama User</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($user_all as $data) : ?>
							<tr>
								<th scope="row"><?= $i++ ?></th>
								<td><?= $data['name'] ?></td>
								<td><a href="<?= base_url() ?>admin/biodata_show/<?= $data['id'] ?>" class="btn btn-primary">Lihat Biodata</a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>