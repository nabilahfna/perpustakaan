<!-- Begin Page Content --> 
<div class="container-fluid"> 

<!-- row table-->   
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <span class="fas fa-users text-primary mt-2 "> Form Ubah Data transaksi</span>         
    </div>

<?php
	$id_transaksi=$_GET['id'];
	$q_tampil_transaksi=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_transaksi'");
	$r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi);
	?>
	
<div id="label-page"><h3>Edit Data Transaksi</h3></div>
<div id="content">
	<form action="proses/transaksi-edit-proses.php" method="post" enctype="multipart/form-data">
	
		
		
		
