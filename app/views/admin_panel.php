<div id="wpbody" role="main">
	<div id="wpbody-content">
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
		<div id="body-content">
			<div id="config-popup">
				<div>
					<button class="jscolor {valueElement:'chosen-value', onFineChange:'setBgColor(this)'} button button-small">
						Choose background color
					</button>
					<span id="bgcolor">Background-color:</span> <input id="chosen-value" value="000000">
				</div>
				<div>
					<button class="jscolor {valueElement:'chosen-value1', onFineChange:'setTitleColor(this)'} button button-small">
						Choose text color
					</button>
					<span id="bgcolor">Title-color:</span> <input id="chosen-value1" value="000000">
				</div>
				<div>
					<button class="jscolor {valueElement:'chosen-value2', onFineChange:'setTextColor(this)'} button button-small">
						Choose text color
					</button>
					<span id="bgcolor">Text-color:</span> <input id="chosen-value2" value="000000">
				</div>

				<div id="titlediv">
					<div id="titlewrap">
						<label for="popup_title">
							<input type="text" name="popup_title" id="title">
						</label>
					</div>
				</div>
				<div id="postdivrich" class="postarea wp-editor-expand">
					<div id="wp-content-wrap" class="wp-core-ui wp-editor-wrap html-active has-dfw" style="padding-top: 55px;">
						<link rel="stylesheet" id="editor-buttons-css" href="http://local.dev/wordpress/wp-includes/css/editor.min.css?ver=4.6.1" type="text/css" media="all">
					</div>
					<div id="wp-content-editor-container" class="wp-editor-container">
						<div id="ed_toolbar" class="quicktags-toolbar" style="position: absolute; top: 0px; width: 1043px;">
							<input type="button" id="qt_content_strong" class="ed_button button button-small" aria-label="Bold" value="b">
							<input type="button" id="qt_content_em" class="ed_button button button-small" aria-label="Italic" value="i">
							<input type="button" id="qt_content_link" class="ed_button button button-small" aria-label="Insert link" value="link">
							<input type="button" id="qt_content_block" class="ed_button button button-small" aria-label="Blockquote" value="b-quote">
							<input type="button" id="qt_content_del" class="ed_button button button-small" aria-label="Deleted text (strikethrough)" value="del">
							<input type="button" id="qt_content_ins" class="ed_button button button-small" aria-label="Inserted text" value="ins">
							<input type="button" id="qt_content_img" class="ed_button button button-small" aria-label="Insert image" value="img">
							<input type="button" id="qt_content_ul" class="ed_button button button-small" aria-label="Bulleted list" value="ul">
							<input type="button" id="qt_content_ol" class="ed_button button button-small" aria-label="Numbered list" value="ol">
							<input type="button" id="qt_content_li" class="ed_button button button-small" aria-label="List item" value="li">
							<input type="button" id="qt_content_code" class="ed_button button button-small" aria-label="Code" value="code">
							<input type="button" id="qt_content_more" class="ed_button button button-small" aria-label="Insert Read More tag" value="more">
							<input type="button" id="qt_content_close" class="ed_button button button-small" title="Close all open tags" value="close tags">
							<button type="button" id="qt_content_dfw" class="ed_button qt-dfw" title="Distraction-free writing mode"></button>
						</div>
						<textarea class="wp-editor-area" style="height: 300px; margin-top: 37px;" autocomplete="off" cols="40" name="content" id="content"></textarea>
					</div>
					<div class="uploader-editor">
						<div class="uploader-editor-content">
							<div class="uploader-editor-title">Drop files to upload</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="popup">
	<div id="pop-title"><span>Friendly Adblock</span></div>
	<i id="pop-close" class="material-icons">close</i>
	<div id="pop-content">
		<p>Oups... You may use Adblock ?</p>
		<p>This content is free, please desactivate your Adblock</p>
		<p>And enjoy !</p>
	</div>
</div>

<script>
	function setBgColor(picker) {
		document.getElementById('popup').style.backgroundColor = '#' + picker.toString()
	}
	function setTitleColor(picker) {
		document.getElementById('pop-title').style.color = '#' + picker.toString()
	}
	function setTextColor(picker) {
		document.getElementById('pop-content').style.color = '#' + picker.toString()
	}
</script>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Adbock tester</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<script type="text/javascript" src="assets/js/ads.js"></script>
</head>
<body>
	<div>
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
		<div id="config-popup">
			<div>
				<button class="jscolor {valueElement:'chosen-value', onFineChange:'setBgColor(this)'}">
					Choose background color
				</button>
				<span id="bgcolor">Background-color:</span> <input id="chosen-value" value="000000">
			</div>
			<div>
				<button class="jscolor {valueElement:'chosen-value', onFineChange:'setTitleColor(this)'}">
					Choose text color
				</button>
				<span id="bgcolor">Title-color:</span> <input id="chosen-value" value="000000">
			</div>
			<div>
				<button class="jscolor {valueElement:'chosen-value', onFineChange:'setTextColor(this)'}">
					Choose text color
				</button>
				<span id="bgcolor">Text-color:</span> <input id="chosen-value" value="000000">
			</div>
		</div>
	</div>

	<div id="popup">
		<div id="pop-title"><span>Friendly Adblock</span></div>
		<i id="pop-close" class="material-icons">close</i>
		<div id="pop-content">
			<p>Oups... You may use Adblock ?</p>
			<p>This content is free, please desactivate your Adblock</p>
			<p>And enjoy !</p>
			<button id="cool">Ok I got it ! I will desactivate my Adblock</button>
			<button id="bad">Let me do whatever I want !</button>
		</div>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jscolor.min.js"></script>
	<script>
		function setBgColor(picker) {
			document.getElementById('bgcolor').style.color = '#' + picker.toString()
			document.getElementById('popup').style.backgroundColor = '#' + picker.toString()
		}
		function setTitleColor(picker) {
			document.getElementById('pop-title').style.color = '#' + picker.toString()
		}
		function setTextColor(picker) {
			document.getElementById('pop-content').style.color = '#' + picker.toString()
		}
	</script>
	<script type="text/javascript" src="assets/js/popup.js"></script>
</body>
</html> -->