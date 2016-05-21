<?php get_header(); ?>

<?php
   
   /**
    * Giftsfinder is a survey that consists of 112 rating scale questions designed to discover likely areas of giftedness in serving.
    * This main PHP page both presents the questions off of the GET request and processes the submit of the POST.  The PHP code at
    * the top of this page hanldes the POST by tablulating and displaying the results and emailing a copy.  This does use 
    * bootstrap.js to be responsive to smartphone, tablet and desktop screen sizes.
    *
    * Based on an earlier version from Eagle Brook Church, used with permission obtained by Jason Cooper.
    * 
    */

   session_start();

   $f = $_POST;
   $isPost = ($f["fname"] && $f["lname"] && $f["email"]);

   if($isPost) {
      $fname = $f["fname"];
      $lname = $f["lname"];
      $email = $f["email"];

      // IF POST, FIRST TABLULATE RESULTS

      /*             Administration */ $a1 = $f["q1"]+$f["q15"]+$f["q29"]+$f["q43"]+$f["q57"]+$f["q71"]+$f["q85"]+$f["q99"];
      /*                Discernment */ $a2 = $f["q2"]+$f["q16"]+$f["q30"]+$f["q44"]+$f["q58"]+$f["q72"]+$f["q86"]+$f["q100"];
      /*                 Evangelism */ $a3 = $f["q3"]+$f["q17"]+$f["q31"]+$f["q45"]+$f["q59"]+$f["q73"]+$f["q87"]+$f["q101"];
      /*  Exhortation/Encouragement */ $a4 = $f["q4"]+$f["q18"]+$f["q32"]+$f["q46"]+$f["q60"]+$f["q74"]+$f["q88"]+$f["q102"];
      /*                      Faith */ $a5 = $f["q5"]+$f["q19"]+$f["q33"]+$f["q47"]+$f["q61"]+$f["q75"]+$f["q89"]+$f["q103"];
      /*                     Giving */ $a6 = $f["q6"]+$f["q20"]+$f["q34"]+$f["q48"]+$f["q62"]+$f["q76"]+$f["q90"]+$f["q104"];
      /* Helps/Servings/Ministering */ $a7 = $f["q7"]+$f["q21"]+$f["q35"]+$f["q49"]+$f["q63"]+$f["q77"]+$f["q91"]+$f["q105"];
      /*                Hospitality */ $a8 = $f["q8"]+$f["q22"]+$f["q36"]+$f["q50"]+$f["q64"]+$f["q78"]+$f["q92"]+$f["q106"];
      /*                  Knowledge */ $a9 = $f["q9"]+$f["q23"]+$f["q37"]+$f["q51"]+$f["q65"]+$f["q79"]+$f["q93"]+$f["q107"];
      /*                 Leadership */ $a10 = $f["q10"]+$f["q24"]+$f["q38"]+$f["q52"]+$f["q66"]+$f["q80"]+$f["q94"]+$f["q108"];
      /*                      Mercy */ $a11 = $f["q11"]+$f["q25"]+$f["q39"]+$f["q53"]+$f["q67"]+$f["q81"]+$f["q95"]+$f["q109"];
      /*      Pastoring/Shepherding */ $a12 = $f["q12"]+$f["q26"]+$f["q40"]+$f["q54"]+$f["q68"]+$f["q82"]+$f["q96"]+$f["q110"];
      /*                   Teaching */ $a13 = $f["q13"]+$f["q27"]+$f["q41"]+$f["q55"]+$f["q69"]+$f["q83"]+$f["q97"]+$f["q111"];
      /*                     Wisdom */ $a14 = $f["q14"]+$f["q28"]+$f["q42"]+$f["q56"]+$f["q70"]+$f["q84"]+$f["q98"]+$f["q112"];


      // DISPLAY RESULTS
      echo "<div id='answer' style='margin: 10px'><p>Thank you for submitting the Spiritual Gifts Evaluation ". $fname .".  Your responses have been submitted to a Calvary Christian Church staff member.  The highest scores indicate giftedness in those areas.</p><hr /><p>";
      echo "<strong>Administration</strong> = ". $a1 ."<br />";
      echo "<strong>Discernment</strong> = ". $a2 ."<br />";
      echo "<strong>Evangelism</strong> = ". $a3 ."<br />";
      echo "<strong>Exhortation/Encouragement</strong> = ". $a4 ."<br />";
      echo "<strong>Faith</strong> = ". $a5 ."<br />";
      echo "<strong>Giving</strong> = ". $a6 ."<br />";
      echo "<strong>Helps/Servings/Ministering</strong> = ". $a7 ."<br />";
      echo "<strong>Hospitality</strong> = ". $a8 ."<br />";
      echo "<strong>Knowledge</strong> = ". $a9 ."<br />";
      echo "<strong>Leadership</strong> = ". $a10 ."<br />";
      echo "<strong>Mercy</strong> = ". $a11 ."<br />";
      echo "<strong>Pastoring/Shepherding</strong> = ". $a12 ."<br />";
      echo "<strong>Teaching</strong> = ". $a13 ."<br />";
      echo "<strong>Wisdom</strong> = ". $a14 ."<br /></p>";
      echo "When you are ready to begin serving, please visit <a target='_blank' href='http://serve.calvary.ch/serve-finder'>Serve Finder</a>. </div>";

      // EMAIL RESULTS
      $headers  = 'MIME-Version: 1.0' . "\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
      $headers .= 'Bcc: connections@calvary.ch' . "\n"; 
      $headers .= 'From: Calvary Christian Church <DoNotReply@calvary.ch>';
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
      mail($recipients, $subject, $body, $headers);

      //exit();  // exit to prevent GET markup below from being rendered
   }
?>

<?php if (!($isPost)): ?>



<div class="gdlr-content">
      <!-- Above Sidebar Section-->
      <?php global $gdlr_post_option, $above_sidebar_content, $with_sidebar_content, $below_sidebar_content; ?>
      <?php if(!empty($above_sidebar_content)){ ?>
         <div class="above-sidebar-wrapper"><?php gdlr_print_page_builder($above_sidebar_content); ?></div>
      <?php } ?>

      <!-- Sidebar With Content Section-->
      <?php 
         if( !empty($gdlr_post_option['sidebar']) && ($gdlr_post_option['sidebar'] != 'no-sidebar' )){
            global $gdlr_sidebar;
            
            $gdlr_sidebar = array(
               'type'=>$gdlr_post_option['sidebar'],
               'left-sidebar'=>$gdlr_post_option['left-sidebar'], 
               'right-sidebar'=>$gdlr_post_option['right-sidebar']
            ); 
            $gdlr_sidebar = gdlr_get_sidebar_class($gdlr_sidebar);
      ?>
         <div class="with-sidebar-wrapper">
            <div class="with-sidebar-container container">
               <div class="with-sidebar-left <?php echo $gdlr_sidebar['outer']; ?> columns">
                  <div class="with-sidebar-content <?php echo $gdlr_sidebar['center']; ?> columns">
                     <?php 
                        if( !empty($with_sidebar_content) ){
                           gdlr_print_page_builder($with_sidebar_content, false);
                        }
                        if( !empty($gdlr_post_option['show-content']) && $gdlr_post_option['show-content'] != 'disable' ){
                           get_template_part('single/content', 'page');
                        }
                     ?>                   
                  </div>
                  <?php get_sidebar('left'); ?>
                  <div class="clear"></div>
               </div>
               <?php get_sidebar('right'); ?>
               <div class="clear"></div>
            </div>            
         </div>            
      <?php 
         }else{ 
            if( !empty($with_sidebar_content) ){ 
               echo '<div class="with-sidebar-wrapper">';
               gdlr_print_page_builder($with_sidebar_content);
               echo '</div>';
            }
            if( empty($gdlr_post_option['show-content']) || $gdlr_post_option['show-content'] != 'disable' ){
               get_template_part('single/content', 'page');
            }
         } 
      ?>

      <!-- Below Sidebar Section-->
      <?php if(!empty($below_sidebar_content)){ ?>
         <div class="below-sidebar-wrapper"><?php gdlr_print_page_builder($below_sidebar_content); ?></div>
      <?php } ?>

   </div><!-- gdlr-content -->

      <!-- Bootstrap -->
	  <link href="<?php bloginfo('template_directory'); ?>/page-206-css/bootstrap.min.css" rel="stylesheet">
	  <link href="<?php bloginfo('template_directory'); ?>/page-206-css/bootstrap-theme.min.css" rel="stylesheet"> 
	  <!-- Giftsfinder styles -->
	  <link href="<?php bloginfo('template_directory'); ?>/page-206-css/giftsfinder.css" rel="stylesheet"> 

      <link href="<?php bloginfo('template_directory'); ?>/page-206-css/giftsfinder.css" rel="stylesheet"> 
                  
      <form action="<?php bloginfo('url'); ?>/gifts" method="post" style="background-image: url('<?php bloginfo('template_directory'); ?>/page-206-img/Melamine-wood-006.png'); ">
         <center>

         <div style="max-width:1020px;">
            <div class="container-fluid" id="questionDiv">
                  <!-- Questions appended here from giftsfinder.js -->
            </div>

            <div class="text-center">
               <table class="table borderless">
                  <tr>
                     <td><input id="fname" type="text" placeholder="First Name" class="text l" name="fname" value="<?=$f['fname']?>" required /></td>
                  </tr>
                  <tr>
                     <td><input id="lname" type="text" placeholder="Last Name" class="text l" name="lname" value="<?=$f['lname']?>" required /></td>
                  </tr>
                  <tr>
                     <td><input id="email" type="email" placeholder="Email Address" class="text l" name="email" value="<?=$f['email']?>" required /></td>
                  </tr>
               </table>
               <p>
               <input type="submit" class="btn btn-primary btn-lg active" name="Submit" value="Submit" id="Submit">
               </p>
               <p>&nbsp;</p>
            </div>
         </div>
         
         <?php
            foreach ($_POST as $key => $val) {
            echo '<input type="hidden" name="' . $key . '" value="' 
            . htmlentities($val, ENT_QUOTES) . '">' . "\r\n";
            }
            ?>
         </center>
      </form>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="<?php bloginfo('template_directory'); ?>/page-206-js/bootstrap.min.js"></script>
      <!-- Giftsfinder.js will populate the questions using the question array -->
      <script src="<?php bloginfo('template_directory'); ?>/page-206-js/giftsfinder.js"></script>

   <?php endif; ?>

<?php get_footer(); ?>