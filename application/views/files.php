<html>
<head>

</head>
<body>
    <br>
    <center>
    <table border="10" style="width:67%">
    <tr>
        
        <th><h4><center>Nama Kegiatan</center></h4></th>
        <th><h4><center>Tanggal Kegiatan</center></h4></th>
		<th><h4><center>Dana</center></h4></th>
		<th><h4><center>View</center></h4></th>
        
    
	<tr>
     <?php
if (isset($files) && count($files))
{
    ?>
        
            <?php
			
            foreach ($files->result() as $file)
            {
                ?>
				<tr>
                
					<h4>
					<th><h4><center><?php echo ($file->nama_kegiatan);?></center></h4></th>
					<th><h4><center><?php echo ($file->tanggal_kegiatan);?></center></h4></th>
					<?php if ($file->dana == 0) :?>
					<th><h4><center><?php echo ('Dana Himpunan');?></center></h4></th>
					<?php endif;?>
					<?php if ($file->dana == 1) :?>
					<th><h4><center><?php echo ('Dana Jurusan');?></center></h4></th>
					<?php endif;?>
					<th><a href="<?php echo base_url('files/'.$file->filename) ?>" target="_blank" class="download" data-file_id="<?php echo $file->id?>">show</a></th>
                    </h4>                
                <?php
            }
            ?>
			</tr>
        
    <?php
}
else
{
    ?>
    <p>No Files Uploaded</p>
    <?php
}
?>


    </table>
    </center>
</br>
</body>
</html> 