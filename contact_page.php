<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->

<body>
<!-- HIDDEN PANEL 
================================================== -->

<!-- HEADER
================================================== -->
<?php require_once('menu.html')?>
<div class="clear">
</div>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
    <!-- GOOGLE MAP IFRAME -->
	<div class="twelve columns">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.5936338942606!2d-46.635684484937464!3d-23.547113884690077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58553bcaac31%3A0xeb10a86307de6127!2sR.+Boa+Vista%2C+63+-+Centro%2C+S%C3%A3o+Paulo+-+SP%2C+01014-001!5e0!3m2!1spt-BR!2sbr!4v1515149770645" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
<div class="row">
	<!-- CONTACT FORM -->
	<div class="twelve columns">
		<div class="wrapcontact">
			<h5>Envie sua mensagem</h5>
			<div class="done">
				<div class="alert-box success">
                    Enviado com sucesso!<a href="" class="close">x</a>
				</div>
			</div>			
				<form method="post" action="contact.php" id="contactform">
				<div class="form">
				    <div class="six columns noleftmargin">
					<label>Nome</label>
					<input type="text" name="name" class="smoothborder" placeholder="Digite seu nome *"/>
					</div>
					<div class="six columns">
					<label>E-mail </label>
					<input type="text" name="email" class="smoothborder" placeholder="Digite seu email *"/>
					</div>
					<label>Mensagem</label>
					<textarea name="comment" class="smoothborder ctextarea" rows="14" placeholder="Mensagem, feedback, comentário *"></textarea>
					<input type="submit" id="submit" class="readmore" value="Enviar">
				</div>
				</form>			
		</div>
	</div>
												
</div>
<div class="hr">
</div>

<!-- FOOOTER 
================================================== -->
<?php require_once('footer.html')?>
<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/formvalidation.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/jquery.tweet.js"></script>


</body>
</html>