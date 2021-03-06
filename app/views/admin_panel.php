<div id="wpbody" role="main">

	<h1><?= MYPLUGIN_PLUGIN_NAME ?></h1>

	<div id="wpbody-content">
		<div id="body-content">

			<form action="<?= plugins_url() ?>/<?= $path ?>/controller/test_form.php" method="post" id="config-popup">
				<div class="choose-options">
					<button class="jscolor {valueElement:'chosen-value', onFineChange:'setBgColor(this)'} button button-small">
						<?php esc_html_e('Background-color', 'friendly_adblock'); ?> :
					</button>
					<span class="choose-color" id="bgcolor">Background-color:</span> <input name="bgcolor" id="chosen-value" value="<?= stripslashes_deep($request->fa_bgcolor); ?>">
				</div>
				<div class="choose-options">
					<button class="jscolor {valueElement:'chosen-value1', onFineChange:'setTitleColor(this)'} button button-small">
						<?php esc_html_e('Choose title color', 'friendly_adblock'); ?> :
					</button>
					<span class="choose-color" id="titlecolor">Title-color:</span> <input name="titlecolor" id="chosen-value1" value="<?= stripslashes_deep($request->fa_color_title); ?>"">
				</div>
				<div class="choose-options">
					<button class="jscolor {valueElement:'chosen-value2', onFineChange:'setTextColor(this)'} button button-small">
						<?php esc_html_e('Choose text color', 'friendly_adblock'); ?> :
					</button>
					<span class="choose-color" id="contentcolor">Text-color:</span> <input name="contentcolor" id="chosen-value2" value="<?= stripslashes_deep($request->fa_color_content); ?>">
				</div>

				<div id="titlediv">
					<div id="titlewrap">
						<label for="popup_title">
							<input type="text" value="<?= stripslashes_deep($request->fa_title); ?>"name="popup_title" id="title">
						</label>
					</div>
				</div>
				<div id="postdivrich" class="postarea wp-editor-expand">
					<div id="wp-content-wrap" class="wp-core-ui wp-editor-wrap html-active has-dfw" style="padding-top: 55px;">
						<link rel="stylesheet" id="editor-buttons-css" href="http://local.dev/wordpress/wp-includes/css/editor.min.css?ver=4.6.1" type="text/css" media="all">
					</div>
					<div id="wp-content-editor-container" class="wp-editor-container">
						<?php wp_editor( stripslashes_deep($request->fa_content) , 'content', array("media_buttons"=> false)); ?>
					</div>
					<input name="save" type="submit" class="button button-primary button-large" id="publish" value="Save">
					<div class="uploader-editor">
						<div class="uploader-editor-content">
							<div class="uploader-editor-title">Drop files to upload</div>
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>

<div id="popup">
	<div id="pop-title"><span><?= stripslashes_deep($request->fa_title); ?></span></div>
	<i id="pop-close" class="material-icons">close</i>
	<div id="pop-content">
		<?= stripslashes_deep($request->fa_content); ?>
	</div>
</div>

<script>
	var initPop = function(){
		var bgColor = document.getElementById('chosen-value').value;
		var titleColor = document.getElementById('chosen-value1').value;
		var contentColor = document.getElementById('chosen-value2').value;

		document.getElementById('popup').style.backgroundColor = '#' + bgColor
		document.getElementById('pop-title').style.color = '#' + titleColor
		document.getElementById('pop-content').style.color = '#' + contentColor

		return true;
	}
	function setBgColor(picker) {
		console.log(picker.toString())
		document.getElementById('popup').style.backgroundColor = '#' + picker.toString()
	}
	function setTitleColor(picker) {
		document.getElementById('pop-title').style.color = '#' + picker.toString()
	}
	function setTextColor(picker) {
		document.getElementById('pop-content').style.color = '#' + picker.toString()
	}
</script>