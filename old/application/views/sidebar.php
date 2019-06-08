<ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
	
	<li class="list-group-item <?php echo $this->uri->segment(1) == 'billing' ? 'active' : ''?>">
		<a href="<?php echo base_url()?>billing"><i class="fa fa-bar-chart-o"></i> Report Billing KWH </a>
	</li>
	<li class="list-group-item <?php echo $this->uri->segment(1) == 'riwayat_kwh' ? 'active' : ''?>">
		<a href="<?php echo base_url()?>riwayat_kwh"><i class="fa fa-pencil"></i> Data Riwayat LWBP</a>
	</li>
	<li class="list-group-item <?php echo $this->uri->segment(1) == 'riwayat_kwh2' ? 'active' : ''?>">
		<a href="<?php echo base_url()?>riwayat_kwh2"><i class="fa fa-pencil"></i> Data Riwayat WBP</a>
	</li>
	<li class="list-group-item <?php echo $this->uri->segment(1) == 'client' ? 'active' : ''?>">
		<a href="<?php echo base_url()?>client"><i class="fa fa-pencil"></i> Data Client</a>
	</li>
	<li class="list-group-item <?php echo $this->uri->segment(1) == 'golongan_tarif' ? 'active' : ''?>">
		<a href="<?php echo base_url()?>golongan_tarif"><i class="fa fa-pencil"></i> Data Golongan Tarif</a>
	</li>	
	<li class="list-group-item <?php echo $this->uri->segment(1) == 'pphkwh' ? 'active' : ''?>">
		<a href="<?php echo base_url()?>pphkwh"><i class="fa fa-pencil"></i> Data PPH</a>
	</li>
	
	
	
</ul>