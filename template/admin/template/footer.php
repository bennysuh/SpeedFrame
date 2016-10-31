	<?php
		$this->load->view($admin_template_name . '/template/dom');
	?>
	<?php $_SESSION['assets_javascript'] = array(
		'{admin_template_name}/assets/js/global/jquery-3.1.1.min.js' ,
		'{admin_template_name}/assets/js/global/api.js',
		'{admin_template_name}/assets/js/global/global.js',

		// widget
		'{admin_template_name}/assets/js/global/widget/dom.js',
		'{admin_template_name}/assets/js/global/widget/rule.js',
		'{admin_template_name}/assets/js/global/widget/form.js',
		'{admin_template_name}/assets/js/global/widget/button.js',
		'{admin_template_name}/assets/js/global/widget/popup.js',
		'{admin_template_name}/assets/js/global/widget/submit.js',


		'{admin_template_name}/assets/js/global/bin.js',
	);?>
