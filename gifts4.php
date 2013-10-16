<!DOCTYPE html>
<html>
<head>
<title>Spiritual Gifts Inventory - Results</title>
<link rel="stylesheet" type="text/css" href="gifts.css" />
</head>
<body>

<?php 
$f = $_POST;
	if($_POST) {
	$valid = true;
	$name = $f["name"];
	$last = $f["last"];
	$email = $f["email"];
	
	if(!$f["name"] || !$f["last"] || !$f["email"] ) { 
	$valid = false;
	echo "<h1>Please fill out all form fields</h1> <br/><br/> <input type='button' value='Go Back' onclick='window.history.back()'/>";
	}

/*             Administration */	$a1 = $f["q1"]+$f["q15"]+$f["q29"]+$f["q43"]+$f["q57"]+$f["q71"]+$f["q85"]+$f["q99"];
/*                Discernment */	$a2 = $f["q2"]+$f["q16"]+$f["q30"]+$f["q44"]+$f["q58"]+$f["q72"]+$f["q86"]+$f["q100"];
/*                 Evangelism */	$a3 = $f["q3"]+$f["q17"]+$f["q31"]+$f["q45"]+$f["q59"]+$f["q73"]+$f["q87"]+$f["q101"];
/*  Exhortation/Encouragement */	$a4 = $f["q4"]+$f["q18"]+$f["q32"]+$f["q46"]+$f["q60"]+$f["q74"]+$f["q88"]+$f["q102"];
/*                      Faith */	$a5 = $f["q5"]+$f["q19"]+$f["q33"]+$f["q47"]+$f["q61"]+$f["q75"]+$f["q89"]+$f["q103"];
/*                     Giving */	$a6 = $f["q6"]+$f["q20"]+$f["q34"]+$f["q48"]+$f["q62"]+$f["q76"]+$f["q90"]+$f["q104"];
/* Helps/Servings/Ministering */	$a7 = $f["q7"]+$f["q21"]+$f["q35"]+$f["q49"]+$f["q63"]+$f["q77"]+$f["q91"]+$f["q105"];
/*                Hospitality */	$a8 = $f["q8"]+$f["q22"]+$f["q36"]+$f["q50"]+$f["q64"]+$f["q78"]+$f["q92"]+$f["q106"];
/*                  Knowledge */	$a9 = $f["q9"]+$f["q23"]+$f["q37"]+$f["q51"]+$f["q65"]+$f["q79"]+$f["q93"]+$f["q107"];
/*                 Leadership */	$a10 = $f["q10"]+$f["q24"]+$f["q38"]+$f["q52"]+$f["q66"]+$f["q80"]+$f["q94"]+$f["q108"];
/*                      Mercy */	$a11 = $f["q11"]+$f["q25"]+$f["q39"]+$f["q53"]+$f["q67"]+$f["q81"]+$f["q95"]+$f["q109"];
/*      Pastoring/Shepherding */	$a12 = $f["q12"]+$f["q26"]+$f["q40"]+$f["q54"]+$f["q68"]+$f["q82"]+$f["q96"]+$f["q110"];
/*                   Teaching */	$a13 = $f["q13"]+$f["q27"]+$f["q41"]+$f["q55"]+$f["q69"]+$f["q83"]+$f["q97"]+$f["q111"];
/*                     Wisdom */	$a14 = $f["q14"]+$f["q28"]+$f["q42"]+$f["q56"]+$f["q70"]+$f["q84"]+$f["q98"]+$f["q112"];}

if ($valid){
$hide_form = true;

?>
<div id="answer"><p>Thank you for submitting the Spiritual Gifts Evaluation <?=$name?>.  Your responses have been submitted to a Calvary Christian Church staff member.  The highest scores indicate giftedness in those areas.</p><hr />
<p>
<strong>Administration</strong> = <?=$a1?><br />
<strong>Discernment</strong> = <?=$a2?><br />
<strong>Evangelism</strong> = <?=$a3?><br />
<strong>Exhortation/Encouragement</strong> = <?=$a4?><br />
<strong>Faith</strong> = <?=$a5?><br />
<strong>Giving</strong> = <?=$a6?><br />
<strong>Helps/Servings/Ministering</strong> = <?=$a7?><br />
<strong>Hospitality</strong> = <?=$a8?><br />
<strong>Knowledge</strong> = <?=$a9?><br />
<strong>Leadership</strong> = <?=$a10?><br />
<strong>Mercy</strong> = <?=$a11?><br />
<strong>Pastoring/Shepherding</strong> = <?=$a12?><br />
<strong>Teaching</strong> = <?=$a13?><br />
<strong>Wisdom</strong> = <?=$a14?><br />
</p>
When you are ready to begin serving, please visit <a target="_blank" href="http://serve.calvarychristianchurch.org/serve-finder">Serve Finder</a>.
</div>
<?php
}
?>
<?php
if($valid == true) {
            $headers  = 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
			//$headers .= 'Cc: jason.cooper@calvarychristianchurch.org' . "\n";
			$headers .= 'Bcc: office@calvarychristianchurch.org' . "\n"; 
			$headers .= 'From: Calvary Christian Church <DoNotReply@calvarychristianchurch.org>';
			$subject = 'A Spiritual Gifts Inventory has been submitted';
			$recipients = $email;
			$body = "<p><font face=\"verdana\" size=\"2\">A new spiritual gifts inventory has been submitted. The highest scores indicate your likely areas of gifting.<br /><br />";
			$body .= '<strong>Name:</strong> ' . $name . " ". $last . '<br /><br />';
			$body .= '<strong>Email:</strong> ' . $email . '<br /><br />';
			$body .= '<strong>Administration:</strong> ' . $a1 . '<br /><br />';
			$body .= '<strong>Discernment:</strong> ' . $a2 . '<br /><br />';
			$body .= '<strong>Evangelism:</strong> ' . $a3 . '<br /><br />';
			$body .= '<strong>Exhortation:</strong> ' . $a4 . '<br /><br />';
			$body .= '<strong>Faith:</strong> ' . $a5 . '<br /><br />';
			$body .= '<strong>Giving:</strong> ' . $a6 . '<br /><br />';
			$body .= '<strong>Helps/Servings/Ministering:</strong> ' . $a7 . '<br /><br />';
			$body .= '<strong>Hospitality:</strong> ' . $a8 . '<br /><br />';
			$body .= '<strong>Knowledge:</strong> ' . $a9 . '<br /><br />';
			$body .= '<strong>Leadership:</strong> ' . $a10 . '<br /><br />';
			$body .= '<strong>Mercy:</strong> ' . $a11 . '<br /><br />';
			$body .= '<strong>Pastoring/Shepherding:</strong> ' . $a12 . '<br /><br />';
			$body .= '<strong>Teaching:</strong> ' . $a13 . '<br /><br />';
			$body .= "When you are ready to begin serving, please visit <a target=\"_blank\" href=\"http://serve.calvarychristianchurch.org/serve-finder\">Serve Finder</a>.";

			
			mail($recipients, $subject, $body, $headers);}
			?>
	</body>
</html>