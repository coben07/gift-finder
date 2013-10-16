<!DOCTYPE html>
<html>
  <head>
    <title>Spiritual Gifts Inventory - Step 3</title>
    <link rel="stylesheet" type="text/css" href="gifts.css" />
    <script src="gifts.js"></script>
  </head>
  <body>
    <form method="post" action="gifts4.php">
            <?php 
              foreach ($_POST as $key => $val) {
        echo '<input type="hidden" name="' . $key . '" value="' 
          . htmlentities($val, ENT_QUOTES) . '" />' . "\r\n";
      }       
              ?>
      <table border="0" cellpadding="0" cellspacing="0">
        <tr><td colspan="5" class"stepInfo"> Step 3: Questions 81 - 112 of 112 </td></tr>
        <tr class="odd">
          <td align="left">I enjoy helping people sometimes regarded as undeserving or beyond help.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q81" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q81" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q81" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q81" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I enjoy patiently but firmly nurturing others in their development as believers.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q82" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q82" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q82" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q82" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I like to take a systematic approach to my study of the Bible.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q83" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q83" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q83" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q83" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I can anticipate the likely consequences of an individual's or group's action.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q84" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q84" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q84" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q84" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I enjoy learning how organizations function.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q85" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q85" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q85" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q85" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I can identify preaching, teaching, or communication which is not true to the Bible.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q86" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q86" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q86" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q86" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I seek opportunities to talk about spiritual matters with unbelievers.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q87" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q87" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q87" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q87" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I can empathize with those experiencing weakness or temptation so that I have the opportunity to encourage them to seek God's strength and forgiveness.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q88" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q88" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q88" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q88" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I have confidence in God's continuing provision and help, even in difficult times.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q89" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q89" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q89" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q89" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I am challenged to limit my lifestyle in order to give away a higher percentage of my income.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q90" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q90" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q90" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q90" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I readily and happily use my natural or learned skills to help wherever needed.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q91" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q91" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q91" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q91" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I regularly open my home to my friends.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q92" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q92" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q92" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q92" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I confidently share my knowledge and insights with others.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q93" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q93" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q93" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q93" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">When I have a task to accomplish I naturally recruit others to help me.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q94" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q94" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q94" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q94" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I have great compassion for hurting people.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q95" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q95" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q95" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q95" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I tend to be patient with Christians who are making slow spiritual progress.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q96" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q96" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q96" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q96" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I can communicate scripture in ways that motivate others to study and want to learn more.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q97" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q97" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q97" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q97" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I give practical advice to help others through complicated situations.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q98" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q98" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q98" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q98" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I can visualize a coming event, anticipate potential problems, and develop backup plans.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q99" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q99" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q99" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q99" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I see most actions as right or wrong and feel the need to correct wrong.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q100" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q100" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q100" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q100" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">My conversations with non-believers usually leads me to telling them about my faith.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q101" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q101" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q101" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q101" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I can challenge others without making them feel condemned.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q102" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q102" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q102" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q102" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I can move forward in spite of opposition or lack of support when I sense God's blessing on an undertaking.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q103" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q103" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q103" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q103" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I like knowing that my financial support makes a real difference in the lives and ministries of God's people.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q104" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q104" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q104" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q104" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I am excited and willing to serve others when I am needed to do so.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q105" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q105" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q105" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q105" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I have often helped provide a place for visitors to stay in my home.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q106" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q106" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q106" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q106" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I recognize cultural trends, teachings, or events which contradict biblical principles.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q107" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q107" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q107" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q107" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I am more than willing to step up and make sure a project or initiative gets accomplished.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q108" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q108" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q108" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q108" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I enjoy bringing hope and joy to people living in difficult circumstances.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q109" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q109" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q109" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q109" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">God has consistently used me to guide others toward progress in their spiritual journey.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q110" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q110" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q110" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q110" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="odd">
          <td align="left">I enjoy explaining things to people so that they can grow spiritually and personally.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q111" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q111" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q111" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q111" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr class="even">
          <td align="left">I have insights into how to solve problems that others do not see.</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q112" value="0" />
          <br />Disagree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q112" value="1" />
          <br />Somewhat Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q112" value="2" />
          <br />Agree</td>
          <td class="myStyleSmall" align="center" onclick="checkRadioBtn(this)">
          <input type="radio" name="q112" value="3" />
          <br />Strongly Agree</td>
        </tr>
        <tr>
          <td colspan="7" height="10" style="background-image: url(table_bg.png); background-repeat:repeat"></td>
        </tr>
        <tr style="background-image: url(table_edgepixel.png); background-repeat: repeat-x" height="1">
          <td colspan="9"></td>
        </tr>
      </table>

      <p>
        We hope that this spiritual gifts assessment helps you better figure out how God has wired you for service. In order to complete the form, please enter your first name, last name, and email address in the fields below and click &quot;submit.&quot; Your results will be displayed on the next page and emailed to you for your convenience.
      </p>

      <table>
        <tr>
          <td><input id="name" type="text" placeholder="First Name" class="text l" name="name" value="<?=$f['name']?>" required /></td>
        </tr>
        <tr>
          <td><input id="last" type="text" placeholder="Last Name" class="text l" name="last" value="<?=$f['last']?>" required /></td>
        </tr>
        <tr>
          <td><input id="email" type="email" placeholder="email address" class="text l" name="email" value="<?=$f['email']?>" required /></td>
        </tr>
      </table>
      <p style="text-align:center">
          <input type="submit" class="button" name="Submit" value="Submit" id="Submit" /> 
      </p>

    </form>
  </body>
</html>
