	<?=Loader::access(array_merge($_SESSION['assets_css'] , array(
		'admin/assets/css/home.css'
	)))?>
</head>
<body>
	<?php $this->load->view('admin/template/Menu.php' , array('active' => 0));?>

	<div class="warpper">
		<div class="box">
			xxx
		</div>
		
	</div>



	<?php $this->load->view('admin/template/footer');?>
	<?php Loader::access(array_merge($_SESSION['assets_javascript'] , array(
		'admin/assets/js/login.js'
	)) , 'js');?>
</body>
</html>