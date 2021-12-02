<body class="d-flex flex-column h-100">

	<!-- Begin page content -->
	<main class="flex-shrink-0">
		<div class="container">
			<form method="GET" action="<?= base_url(); ?>/registeradmin/process">
				<?= csrf_field(); ?>
				<div class="mb-3">
					<label for="name" class="form-label">Nama</label>
					<input type="text" class="form-control" id="nama" value="<?= session()->get('nama'); ?>" name="name" readonly>
				</div>
				<div class="mb-3">
					<label for="username" class="form-label">Username</label>
					<input type="text" class="form-control" id="username" name="username" value="<?= session()->get('username'); ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="text" class="form-control" id="password" name="password" value="<?= session()->get('password'); ?>" readonly>
				</div>
			</form>
			<hr />

			<p><a href="<?php echo base_url() ?>/loginadmin">LOGOUT</a></p><br>
		</div>
	</main>
</body>