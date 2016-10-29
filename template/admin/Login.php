	<?=Loader::access(array_merge($_SESSION['assets_css'] , array(
		'admin/assets/css/login.css'
	)))?>
</head>
<body>
	<div class="login">
		<form onsubmit="return adminLogin();">
			<input type="text" id="js-username">
			<input type="text" id="js-password">
			<button type="submit">登录</button>
		</form>


	</div>



<?php 
	$this->load->view('admin/template/footer');
	echo Loader::access(array_merge($_SESSION['assets_javascript'] , array(
		'admin/assets/js/login.js'
	)) , 'js');
?>