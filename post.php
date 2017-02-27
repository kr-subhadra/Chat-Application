<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['password'])){
$text2 = $_POST['text2'];
if($text2=="friend1_friend2")
{
   $text = $_POST['text'];
   $fp = fopen("friend1_friend2.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
else if ($text2=="friend1_friend3")
{
   $text = $_POST['text'];
   $fp = fopen("friend1_friend3.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
else if ($text2=="friend1_friend4")
{
   $text = $_POST['text'];
   $fp = fopen("friend1_friend4.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
else if ($text2=="friend2_friend3")
{
   $text = $_POST['text'];
   $fp = fopen("friend2_friend3.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
else if ($text2=="friend2_friend4")
{
   $text = $_POST['text'];
   $fp = fopen("friend2_friend4.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
else if ($text2=="friend3_friend4")
{
   $text = $_POST['text'];
   $fp = fopen("friend3_friend4.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
else if ($text2=="friend1_Subhadra")
{
   $text = $_POST['text'];
   $fp = fopen("friend1_Subhadra.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
else if ($text2=="friend2_Subhadra")
{
   $text = $_POST['text'];
   $fp = fopen("friend2_Subhadra.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
else if ($text2=="friend3_Subhadra")
{
   $text = $_POST['text'];
   $fp = fopen("friend3_Subhadra.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
else if ($text2=="friend4_Subhadra")
{
   $text = $_POST['text'];
   $fp = fopen("friend4_Subhadra.html", 'a');
   fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   fclose($fp);
}
}
?>