
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php echo base_url()?>js/site.js"></script>
    <script src="<?php echo base_url()?>js/ajaxfileupload.js"></script>
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" /><link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  
    <link rel="stylesheet" href="<?php echo base_url()?>css/BeatPicker.min.css"/>
    <script src="<?php echo base_url()?>js/jquery-1.11.0.min.js"></script>
    <script src="<?php echo base_url()?>js/BeatPicker.min.js"></script>
    <style>
	* { box-sizing: border-box; padding:0; margin: 0; }


form {
 	
  width:300px;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}

form:after {
  content:"";
  display:block;
  position:absolute;
  height:1px;
  width:100px;
  left:20%;
  background:linear-gradient(left, #111, #444, #b6b6b8, #444, #111);
  top:0;
}

form:before {
 	content:"";
  display:block;
  position:absolute;
  width:8px;
  height:5px;
  border-radius:50%;
  left:34%;
  top:-7px;
  box-shadow: 0 0 6px 4px #fff;
}

.inset {
 	padding:20px; 
  border-top:1px solid #19191a;
}

form h1 {
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
}

form h1:after {
 	content:"";
  display:block;
  width:250px;
  height:100px;
  position:absolute;
  top:0;
  left:50px;
  pointer-events:none;
  transform:rotate(70deg);
  -webkit-transform: rotate(70deg);
  background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
   background-image: -webkit-linear-gradient(50deg, rgba(255,255,255,0.05), rgba(0,0,0,0)); /* For Safari */

}

label {
 	color:#666;
  display:block;
  padding-bottom:9px;
}

input[type=text],
input[type=password] {
 	width:100%;
  padding:8px 5px;
  
  border:1px solid #222;
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
}

label[for=remember]{
 	color:white;
  display:inline-block;
  padding-bottom:0;
  padding-top:5px;
}

input[type=checkbox] {
 	display:inline-block;
  vertical-align:top;
}

.p-container {
 	padding:0 20px 20px 20px; 
}

.p-container:after {
 	clear:both;
  display:table;
  content:"";
}

.p-container span {
  display:block;
  float:left;
  color:#0d93ff;
  padding-top:8px;
}

input[type=submit] {
 	padding:5px 20px;
  border:1px solid rgba(0,0,0,0.4);
  text-shadow:0 -1px 0 rgba(0,0,0,0.4);
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 10px 10px rgba(255,255,255,0.1);
  border-radius:0.3em;
  	background:#0043A8; 
	background: -moz-linear-gradient(#43A9FF, #0043A8);
  background: -o-linear-gradient(#43A9FF, #0043A8);
  background: -webkit-linear-gradient(#43A9FF, #0043A8);
  color:white;
  float:center;
  font-weight:bold;
  cursor:pointer;
  font-size:13px;
}

input[type=submit]:hover {
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 -10px 10px rgba(255,255,255,0.1);
}


	</style>
</head>
<body>

<form>
  <h1>Form ACC Kegiatan</h1>
  <div class="inset">

	<?php echo form_open('acc/update_data/'); ?>
<center>
<br>
	<?php if(count($nama_kegiatan)!=NULL) : ?>
		<?php echo form_dropdown('nama_kegiatan', $nama_kegiatan); ?>
	<?php endif; ?>
</center>
</br>

<?php if($this->session->userdata('email') == 'raditiyo@gmail.com'  ) : ?>
<?php if(count($nama_kegiatan)==NULL) : ?>
<center>
	<h1>TIDAK ADA</h1>
	<br>
	<h1>PROPOSAL</h1>
</center>
<?php endif; ?>
<?php if(count($nama_kegiatan)!=NULL) : ?>
<center>
	<h4><input id="acc" type="radio" name="acc" value ="3" for="acc1">Setuju (Kegiatan tidak Menggunakan dana Jurusan)</h4>
	<br>	
	<h4><input id="acc" type="radio" name="acc" value ="2" for="acc2">Meneruskan proposal ke Pak Dwi</h4>
	</br>
		
	<h4><input id="acc" type="radio" name="acc" value ="0" for="acc3">Tolak</h4>
	</br>	
	<center>
	<h1><label for="title">Catatan :</label></h1>
    <textarea type="text" name="catatan1" id="catatan1" value="" /></textarea>
    </center>
	</br>	
	<?php endif; ?>
<?php endif; ?>

<?php if($this->session->userdata('email') == 'dwis@gmail.com') : ?>
<?php if(count($nama_kegiatan)==NULL) : ?>
<center>
	<h1>TIDAK ADA</h1>
	<br>
	<h1>PROPOSAL</h1>
</center>
<?php endif; ?>
<?php if(count($nama_kegiatan)!=NULL) : ?>
	<h4><input id="acc" type="radio" name="acc" value ='3' for="acc1">Setuju</h4>
	<br>
	<h4><input id="acc" type="radio" name="acc" value ='0' for="acc2">Tolak</h4>
	</br>		
	<center>
	<h1><label for="title">Catatan :</label></h1>
    <textarea type="text" name="catatan2" id="catatan2" value="" /></textarea>
    </center>
	</br>
	<?php endif; ?>
<?php endif; ?>
<?php if($this->session->userdata('email') == 'naniks@gmail.com') : ?>
<?php if(count($nama_kegiatan)==NULL) : ?>
<center>
	<h1>TIDAK ADA</h1>
	<br>
	<h1>PROPOSAL</h1>
</center>
<?php endif; ?>
<?php if(count($nama_kegiatan)!=NULL) : ?>
	<h4><input id="acc" type="radio" name="acc" value ='4' for="acc1">Setuju</h4>
	<br>
	<h4><input id="acc" type="radio" name="acc" value ='0' for="acc2">Tolak</h4>
	</br>		
	<center>
	<h1><label for="title">Catatan :</label></h1>
    <textarea type="text" name="catatan3" id="catatan3" value="" /></textarea>
    </center>
	</br>
<?php endif; ?>
<?php endif; ?>
<?php if(count($nama_kegiatan)!=NULL) : ?>
<center>
	 <td><?php echo form_submit('submit','Submit'); ?></td>
</center>
<?php endif; ?>
</br>
<?php echo form_close(); ?>
	

	
  </div>
</form>

</body>
</html>





