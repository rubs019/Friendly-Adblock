<div id="wpbody" role="main">
	<h1><?= MYPLUGIN_PLUGIN_NAME ?></h1>
	<div id="wpbody-content">
		<div id="body-content">
			<form action="<?= esc_url(plugins_url('first_plugin_wordpress/app/test_form.php')); ?> " method="post" id="config-popup">
				<div>
					<button class="jscolor {valueElement:'chosen-value', onFineChange:'setBgColor(this)'} button button-small">
						Choose background color
					</button>
					<span id="bgcolor">Background-color:</span> <input name="bgcolor" id="chosen-value" value="<?= $request->fa_bgcolor ?>">
				</div>
				<div>
					<button class="jscolor {valueElement:'chosen-value1', onFineChange:'setTitleColor(this)'} button button-small">
						Choose text color
					</button>
					<span id="bgcolor">Title-color:</span> <input name="titlecolor" id="chosen-value1" value="<?= $request->fa_color_title ?>"">
				</div>
				<div>
					<button class="jscolor {valueElement:'chosen-value2', onFineChange:'setTextColor(this)'} button button-small">
						Choose text color
					</button>
					<span id="bgcolor">Text-color:</span> <input name="contentcolor" id="chosen-value2" value="<?= $request->fa_color_content ?>">
				</div>

				<div id="titlediv">
					<div id="titlewrap">
						<label for="popup_title">
							<input type="text" value="<?= $request->fa_title ?>"name="popup_title" id="title">
						</label>
					</div>
				</div>
				<div id="postdivrich" class="postarea wp-editor-expand">
					<div id="wp-content-wrap" class="wp-core-ui wp-editor-wrap html-active has-dfw" style="padding-top: 55px;">
						<link rel="stylesheet" id="editor-buttons-css" href="http://local.dev/wordpress/wp-includes/css/editor.min.css?ver=4.6.1" type="text/css" media="all">
					</div>
					<div id="wp-content-editor-container" class="wp-editor-container">
						<textarea class="wp-editor-area" style="height: 300px; margin-top: 37px;" autocomplete="off" cols="40" name="content" id="content"><?= $request->fa_content ?></textarea>
					</div>
					<input name="save" type="submit" class="button button-primary button-large" id="publish" value="Save">
					<div class="uploader-editor">
						<div class="uploader-editor-content">
							<div class="uploader-editor-title">Drop files to upload</div>
						</div>
					</div>
					<div id="rules">
						<p>L'utilisateur pourra : </p>
						<p>Priorité</p>
						<ul>
							<li>Changer background-color</li>
							<li>Changer titre</li>
							<li>Changer paragraphe</li>
							<li>Choisir police</li>
							<li>Choisir persistance fenêtre</li>
						</ul>
						<p>Options</p>
						<ul>
							<li>Changer forme popup</li>
							<li>Changer position popupl</li>
							<li>Mettre image de fond</li>
						</ul>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="popup">
	<div id="pop-title"><span><?= $request->fa_title ?></span></div>
	<i id="pop-close" class="material-icons">close</i>
	<div id="pop-content">
		<?= $request->fa_content ?>
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