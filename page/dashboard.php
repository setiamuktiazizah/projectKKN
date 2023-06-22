	<style>
		.grid-container {
		display: grid;
		grid-template-columns: auto auto auto;
		}

		.grid-item {
		background-color: rgba(255, 255, 255, 0.5);
		font-size: 30px;
		text-align: center;
		}
	</style>
	<?php if (@$_SESSION['logged'] == true) : ?>

	  <div class="callout callout-info">
	    <h4>Selamat datang <?= $_SESSION['name'] ?></h4>

	    <p>Sistem Pendukung Keputusan dalam Memilih Desa yang Sesuai dengan Program Kerja KKN dengan Metode Fuzzy AHP</p>
	  </div>
	<?php else : ?>

	  <div class="callout callout-info">
	    <h4>Halo, Selamat Datang!</h4>

	    <p>Website ini merupakan website sistem pendukung keputusan dalam memilih desa yang sesuai dengan program kerja KKN</p>

	  </div>
	  <div class="grid-container">
		<div>
			<img src="kkn-uns.jpg" width="400" height="280" style="margin-left: 0px; margin-bottom: 20px;" class="rounded" />
		</div>
		<div>
			<h4 style="margin-left:10px; "><b>Pengertian KKN</b></h4>
			<p style="text-align: justify; margin-left:10px">
				Kuliah Kerja Nyata (KKN) merupakan bentuk kegiatan pengabdian masyarakat oleh mahasiswa dengan pendekatan 
				lintas keilmuan dan sektoral pada waktu dan daerah tertentu di Indonesia. Pelaksanaan kegiatan KKN memerlukan 
				program kerja atau kegiatan yang bersifat membangun dan mengedukasi masyarakat. Program kerja KKN harus
				mengedepankan manfaat, tetapi juga harus bersifat seru untuk menarik perhatian warga. Namun, seringkali 
				program kerja yang dijalankan hanya sebatas memenuhi kewajiban tanpa memperhatikan keadaan desa tempat KKN 
				sehingga dampak yang dihasilkan kurang dirasakan oleh warga sekitar. Oleh karena itu, hadirnya sistem pendukung 
				keputusan ini untuk mempermudah mahasiswa dalam menentukan program kerja yang dijalankan agar sesuai dan tepat 
				sasaran dengan desa tempat KKN. Dalam sistem pendukung keputusan ini melibatkan beberapa aspek kriteria, 
				diantaranya akses dan sarana transportasi, sumber air, tingkat pendidikan, tingkat kesehatan, jarak dengan pusat kota, 
				ketersediaan akses internet, dan daerah rawan bencana. Pemilihan kriteria ini didasarkan pada aspek - aspek yang berpengaruh 
				dalam penentuan program kerja berdasarkan hasil observasi penulis. 
			</p>
		</div>	
	  </div>
	  <h4 class="box-title"><b>Contoh Program Kerja KKN</b></h4>
	  <div class="box box-primary box solid">
		<div class="box-header with-border">
			<h5 class="box-title" style="font-size: medium;">Kerja Bakti Lingkungan</h5>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped">
			<div class="grid-container">
				<div>
					<img src="kerja-bakti.jpg" width="180" height="150" style="margin-left: 0px; margin-bottom: 20px; margin-top: 5px" class="rounded" />
				</div>
				<div>
					<p  style="text-align: justify; margin-left:10px; margin-top: 10px">
					Kerja bakti adalah salah satu bentuk kegiatan yang sering dilakukan dalam Program Kerja KKN. 
					Kerja bakti adalah kegiatan bersama masyarakat untuk membersihkan, memperbaiki, atau merawat lingkungan sekitar. 
					Tujuan dari kerja bakti adalah meningkatkan kebersihan dan kualitas lingkungan serta memperbaiki infrastruktur yang ada.
					</p>
				</div>	
			</div>
			</table>
		</div>
	  </div>
	  <div class="box box-primary box solid">
		<div class="box-header with-border">
			<h5 class="box-title"  style="font-size: medium;">Pelatihan mengenai pembuatan pupuk kompos yang berkualitas dan cara menanggulangi hama</h5>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped">
			<div class="grid-container">
				<div>
					<img src="kompos.jpeg" width="180" height="150" style="margin-left: 0px; margin-bottom: 20px; margin-top: 5px" class="rounded" />
				</div>
				<div>
					<p  style="text-align: justify; margin-left:10px; margin-top: 10px">			
						Pelatihan mengenai pembuatan pupuk kompos yang berkualitas dan cara menanggulangi hama adalah program yang 
						dirancang untuk memberikan pengetahuan dan keterampilan kepada peserta tentang teknik-produksi pupuk kompos 
						yang efektif serta strategi pengendalian hama yang ramah lingkungan. Pelatihan ini bertujuan untuk mempromosikan 
						praktik pertanian berkelanjutan dan pengelolaan limbah organik.	
					</p>
				</div>	
			</div>
			</table>
		</div>
	  </div>
	<?php endif; ?>