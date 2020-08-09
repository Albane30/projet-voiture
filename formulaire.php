<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Contact</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/merci.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/style2.css'>
 
</head>
<?php


$LNAME = htmlspecialchars($_POST["LNAME"]);
$FNAME = htmlspecialchars($_POST["FNAME"]);
$EMAIL = htmlspecialchars($_POST["EMAIL"]);
$PHONE = htmlspecialchars($_POST["PHONE"]);

// 1 : on ouvre le fichier
$monfichier = fopen('donneesformulaire.txt', 'a+');
fputs($monfichier, "==================================\n");
fputs($monfichier, $LNAME."\n"); 
fputs($monfichier, $FNAME."\n"); 
fputs($monfichier, $EMAIL."\n"); 
fputs($monfichier, $PHONE."\n"); 

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);

include ('merci.php');
?>

<div id="mc_embed_signup" class="hidden">
<form action="https://gmail.us17.list-manage.com/subscribe/post?u=4dd38927685c8bae4d310ecd8&amp;id=c58468f099" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="<?php echo $_POST['LNAME'];?>" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="<?php echo $_POST['FNAME'];?> " name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="<?php echo $_POST['EMAIL'];?>" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group size1of2">
	<label for="mce-PHONE">Phone Number </label>
	<input type="phone" name="PHONE" class="required" value="<?php echo $_POST['PHONE'];?>" id="mce-PHONE">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4dd38927685c8bae4d310ecd8_c58468f099" tabindex="-1" value=""></div>
    <div class="clear"></div>
    </div>
    <input id="mc-embedded-subscribe" type="submit" value="Subscribe" name="subscribe" class="button">
    
</form>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[2]='LNAME';ftypes[2]='text';fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='PHONE';ftypes[4]='phone'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: FR
 */
$.extend($.validator.messages, {
        required: "Ce champ est requis.",
        remote: "Veuillez remplir ce champ pour continuer.",
        email: "Veuillez entrer une adresse email valide.",
        url: "Veuillez entrer une URL valide.",
        date: "Veuillez entrer une date valide.",
        dateISO: "Veuillez entrer une date valide (ISO).",
        number: "Veuillez entrer un nombre valide.",
        digits: "Veuillez entrer (seulement) une valeur numérique.",
        creditcard: "Veuillez entrer un numéro de carte de crédit valide.",
        equalTo: "Veuillez entrer une nouvelle fois la même valeur.",
        accept: "Veuillez entrer une valeur avec une extension valide.",
        maxlength: $.validator.format("Veuillez ne pas entrer plus de {0} caractères."),
        minlength: $.validator.format("Veuillez entrer au moins {0} caractères."),
        rangelength: $.validator.format("Veuillez entrer entre {0} et {1} caractères."),
        range: $.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
        max: $.validator.format("Veuillez entrer une valeur inférieure ou égale à {0}."),
        min: $.validator.format("Veuillez entrer une valeur supérieure ou égale à {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>

	<script type='text/javascript'>

function clickOnBtn() {
	document.getElementById('mc-embedded-subscribe').click();
}

window.setTimeout(clickOnBtn(), 2000);

</script>

</div>
</html>
