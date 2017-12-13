<nav class="navbar navbar-fixed-top navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="./"><span class="fa fa-home"></span> Pendaftaran Kepanitiaan PSSI</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" data-toggle="modal" data-target="#myModal2">Pendaftaran Kepanitiaan</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal">Pendaftaran Panitia</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengumuman <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=pengumumanKepanitiaanPage'?>">Pengumuman Kepanitiaan</a></li>
						<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=pengumumanPage'?>">Pengumuman Panitia</a></li>
					</ul>
				</li>
				<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=loginPage'?>">Masuk</a></li>
			</ul>
		</div>
	</div>
</nav>
