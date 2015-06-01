<html>
<head>

</head>
<body>
    <br>
    <center>
    <table border="10" style="width:67%">
    <tr>
        
        <th><h4><center>Nama Kegiatan</center></h4></th>
        <th><h4><center>Status</center></h4></th>
        <th><h4><center>Catatan - Pak Onggo</center></h4></th>
        <th><h4><center>Catatan - Pak Dwi </center></h4></th>
        <th><h4><center>Catatan - Bu Nanik</center></h4></th>
    </tr>
     <?php foreach($records as $row):?>
     <tr>
		<?php $acc = $row->acc; ?>
        <th><h4><center><?php 	if($acc == '0') echo "<font color='red'>".$row->nama_kegiatan."</font>";
								else echo $row->nama_kegiatan?></center> </h4></th>
            
             <?php $dana = $row->dana; ?>
			 
         <th><h4><center><?php if($acc == '0'){
                            echo "<font color='red'>Proposal anda ditolak</font>";}  
                       else if ($acc == '1'){
                            echo 'Proposal anda belum di Proses';} 
                       else if (($acc == '2' && $dana == '1')||($acc == '3' && $dana == '0')) {
                            echo 'Proposal anda telah disetujui Pak Onggo';}  
                       else if ($acc == '3' && $dana == '1'){  
                         echo 'Proposal anda telah disetujui Pak Dwi';}
                       else if ($acc == '4'){
                            echo 'Proposal anda telah disetujui Bu Nanik  ';} ?> <center></h4>
			
         <th><h4><center><?php if($acc == '0') echo "<font color='red'>".$row->catatan1."</font>";
								else echo $row->catatan1 ?> </center></h4></th>  
         <th><h4><center><?php if($acc == '0') echo "<font color='red'>".$row->catatan2."</font>";
								else echo $row->catatan2 ?> </center></h4></th>  
         <th><h4><center><?php if($acc == '0') echo "<font color='red'>".$row->catatan3."</font>";
								else echo $row->catatan3 ?> </center></h4></th>  

    </tr>
    <?php endforeach; ?>

    </table>
    </center>
</br>
</body>
</html> 