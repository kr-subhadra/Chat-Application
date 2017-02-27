<?php
session_start(); //starting the session
//Checking pair of friends whether they clicked exit chat
if(isset($_GET['logout_friend1_friend2'])){ 
//checking the user name and updating corresponding logged in entry in the database
if($_SESSION['name']=='Friend1') 
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test"); //connecting to database
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql); //executing query
mysqli_close($connection); //closing database connection
}
if($_SESSION['name']=='Friend2')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend1_friend2.html", 'a'); //opening corresponding html file (having log of previous chats)
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp); //closing the file
session_destroy(); //destroying the session
header("Location: index.php"); //redirect the user
}
else if(isset($_GET['logout_friend1_friend3'])){
if($_SESSION['name']=='Friend1')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
if($_SESSION['name']=='Friend3')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend1_friend3.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
}
else if(isset($_GET['logout_friend1_friend4'])){
if($_SESSION['name']=='Friend1')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
if($_SESSION['name']=='Friend4')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend1_friend4.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
} 
else if(isset($_GET['logout_friend2_friend3'])){
if($_SESSION['name']=='Friend2')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
if($_SESSION['name']=='Friend3')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend2_friend3.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
}
else if(isset($_GET['logout_friend2_friend4'])){
if($_SESSION['name']=='Friend2')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
if($_SESSION['name']=='Friend4')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend2_friend4.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
}
else if(isset($_GET['logout_friend3_friend4'])){
if($_SESSION['name']=='Friend3')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
if($_SESSION['name']=='Friend4')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend3_friend4.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
}
else if(isset($_GET['logout_friend1_Subhadra'])){
if($_SESSION['name']=='Subhadra')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
if($_SESSION['name']=='Friend1')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend1_Subhadra.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
}
else if(isset($_GET['logout_friend2_Subhadra'])){
if($_SESSION['name']=='Subhadra')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
if($_SESSION['name']=='Friend2')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend2_Subhadra.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
}
else if(isset($_GET['logout_friend3_Subhadra'])){
if($_SESSION['name']=='Subhadra')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
if($_SESSION['name']=='Friend3')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend3_Subhadra.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
}
else if(isset($_GET['logout_friend4_Subhadra'])){
if($_SESSION['name']=='Subhadra')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
if($_SESSION['name']=='Friend4')
{
$username = $_SESSION['name'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
$sql = "UPDATE users SET logged_in = 0 WHERE username='$username'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
}
$fp = fopen("friend4_Subhadra.html", 'a');
fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
fclose($fp);
session_destroy();
header("Location: index.php");
}

//if any friend is clicked, will call the chatform() function which is the actual chat window
if(isset($_GET['friend_1']) || isset($_GET['friend_2']) || isset($_GET['friend_3']) || isset($_GET['friend_4']) || isset($_GET['user_click'])){
chatform();
}

//initial page where the user needs to enter login details - username and password
function loginForm(){
echo'
<div id="loginform">
<form action="index.php" method="post">
<p>Please enter your username and password to continue:</p><br>
<label for="name">Username:</label>
<input type="text" name="name" id="name" /><br> <br>
<label for="password">Password: &nbsp</label>
<input type="password" name="password" id="password" /> <br> <br>
<input type="submit" name="enter" id="enter" value="Enter" />
</form>
</div>
';
}

//Friends are listed
function friends(){
echo'
<div id="wrapper">
<div id="menu">
<p class="friends"> <b>'; echo $_SESSION["name"]; echo'</b></p>
<div style="clear:both"></div>
</div>
<div id="chatbox"><br>
<ul style="list-style-type:none">';
if($_SESSION["name"] != Subhadra)
{
echo '
  <li><a id="user" href="#">Subhadra</a></li><br>';
 }

if($_SESSION["name"] != Friend1)
{
echo '
  <li><a id="friend1" href="#">Friend1</a></li><br>';
 }
 if($_SESSION["name"] != Friend2)
{
echo '
  <li><a id="friend2" href="#">Friend2</a></li><br>';
 }
if($_SESSION["name"] != Friend3)
{
echo '
  <li><a id="friend3" href="#">Friend3</a></li><br>';
 }
 if($_SESSION["name"] != Friend4)
{
echo '
  <li><a id="friend4" href="#">Friend4</a></li><br>';
 }
 echo '
</ul>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js">
</script>
<script type="text/javascript">

$(document).ready(function(){
  
   $("#friend1").click(function(){
       window.location = "index.php?friend_1=true";
   });  
   $("#friend2").click(function(){
       window.location = "index.php?friend_2=true";
   }); 
   $("#friend3").click(function(){
       window.location = "index.php?friend_3=true";
   }); 
   $("#friend4").click(function(){
       window.location = "index.php?friend_4=true";
   }); 
 $("#user").click(function(){
       window.location = "index.php?user_click=true";
   });     

});
</script>
';
}

//the actual chat window
function chatform(){
echo'
<div id="wrapper">
<div id="menu">
<p class="welcome">Welcome, <b>'; echo $_SESSION["name"]; echo'</b></p>
<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
<div style="clear:both"></div>
</div>

<div id="chatbox"></div>
';

//checking whether a pair of friends are chatting
if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Friend2') || (isset($_GET['friend2']) && $_SESSION['name'] == 'Friend1'))
{
if(file_exists("friend1_friend2.html") && filesize("friend1_friend2.html") > 0){
    $handle1 = fopen("friend1_friend2.html", "r");
    $contents1 = fread($handle1, filesize("friend1_friend2.html"));
    fclose($handle1);
    echo $contents1;
}
}
else if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Friend3') || (isset($_GET['friend3']) && $_SESSION['name'] == 'Friend1'))
{
if(file_exists("friend1_friend3.html") && filesize("friend1_friend3.html") > 0){
    $handle1 = fopen("friend1_friend3.html", "r");
    $contents1 = fread($handle1, filesize("friend1_friend3.html"));
    fclose($handle1);
    echo $contents1;
}
}
else if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Friend4') || (isset($_GET['friend4']) && $_SESSION['name'] == 'Friend1'))
{
if(file_exists("friend1_friend4.html") && filesize("friend1_friend4.html") > 0){
    $handle1 = fopen("friend1_friend4.html", "r");
    $contents1 = fread($handle1, filesize("friend1_friend4.html"));
    fclose($handle1);
    echo $contents1;
}
}
else if((isset($_GET['friend_2']) && $_SESSION['name'] == 'Friend3') || (isset($_GET['friend3']) && $_SESSION['name'] == 'Friend2'))
{
if(file_exists("friend2_friend3.html") && filesize("friend2_friend3.html") > 0){
    $handle1 = fopen("friend2_friend3.html", "r");
    $contents1 = fread($handle1, filesize("friend2_friend3.html"));
    fclose($handle1);
    echo $contents1;
}
}
else if((isset($_GET['friend_2']) && $_SESSION['name'] == 'Friend4') || (isset($_GET['friend4']) && $_SESSION['name'] == 'Friend2'))
{
if(file_exists("friend2_friend4.html") && filesize("friend2_friend4.html") > 0){
    $handle1 = fopen("friend2_friend4.html", "r");
    $contents1 = fread($handle1, filesize("friend2_friend4.html"));
    fclose($handle1);
    echo $contents1;
}
}
else if((isset($_GET['friend_3']) && $_SESSION['name'] == 'Friend4') || (isset($_GET['friend3']) && $_SESSION['name'] == 'Friend4'))
{
if(file_exists("friend3_friend4.html") && filesize("friend3_friend4.html") > 0){
    $handle1 = fopen("friend3_friend4.html", "r");
    $contents1 = fread($handle1, filesize("friend3_friend4.html"));
    fclose($handle1);
    echo $contents1;
}
}
else if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend1'))
{
if(file_exists("friend1_Subhadra.html") && filesize("friend1_Subhadra.html") > 0){
    $handle1 = fopen("friend1_Subhadra.html", "r");
    $contents1 = fread($handle1, filesize("friend1_Subhadra.html"));
    fclose($handle1);
    echo $contents1;
}
}
else if((isset($_GET['friend_2']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend2'))
{
if(file_exists("friend2_Subhadra.html") && filesize("friend2_Subhadra.html") > 0){
    $handle1 = fopen("friend2_Subhadra.html", "r");
    $contents1 = fread($handle1, filesize("friend2_Subhadra.html"));
    fclose($handle1);
    echo $contents1;
}
}
else if((isset($_GET['friend_3']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend3'))
{
if(file_exists("friend3_Subhadra.html") && filesize("friend3_Subhadra.html") > 0){
    $handle1 = fopen("friend3_Subhadra.html", "r");
    $contents1 = fread($handle1, filesize("friend3_Subhadra.html"));
    fclose($handle1);
    echo $contents1;
}
}
else if((isset($_GET['friend_4']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend4'))
{
if(file_exists("friend4_Subhadra.html") && filesize("friend4_Subhadra.html") > 0){
    $handle1 = fopen("friend4_Subhadra.html", "r");
    $contents1 = fread($handle1, filesize("friend4_Subhadra.html"));
    fclose($handle1);
    echo $contents1;
}
}

echo '
<form name="message" action="">
<input name="usermsg" type="text" id="usermsg" size="63" />
<input name="submitmsg" type="submit" id="submitmsg" value="Send" />
</form>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js">
</script>

<script type="text/javascript">

$(document).ready(function(){
  
   $("#exit").click(function(){';
   //when exit chat button is clicked
   if((isset($_GET['friend_1']) && ($_SESSION['name'] == 'Friend2'))|| (isset($_GET['friend_2']) && $_SESSION['name'] == 'Friend1')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend1_friend2=true";}'; }
	   
	   if((isset($_GET['friend_1']) && ($_SESSION['name'] == 'Friend3'))|| (isset($_GET['friend_3']) && $_SESSION['name'] == 'Friend1')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend1_friend3=true";}'; }
	   
	   if((isset($_GET['friend_1']) && ($_SESSION['name'] == 'Friend4'))|| (isset($_GET['friend_4']) && $_SESSION['name'] == 'Friend1')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend1_friend4=true";}'; }
	   
	   if((isset($_GET['friend_2']) && ($_SESSION['name'] == 'Friend3'))|| (isset($_GET['friend_3']) && $_SESSION['name'] == 'Friend2')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend2_friend3=true";}'; }
	   
	   if((isset($_GET['friend_2']) && ($_SESSION['name'] == 'Friend4'))|| (isset($_GET['friend_4']) && $_SESSION['name'] == 'Friend2')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend2_friend4=true";}'; }
	   
	   if((isset($_GET['friend_3']) && ($_SESSION['name'] == 'Friend4'))|| (isset($_GET['friend_4']) && $_SESSION['name'] == 'Friend3')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend3_friend4=true";}'; }
	   
	   if((isset($_GET['friend_1']) && ($_SESSION['name'] == 'Subhadra'))|| (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend1')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend1_Subhadra=true";}'; }
	   
	   if((isset($_GET['friend_2']) && ($_SESSION['name'] == 'Subhadra'))|| (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend2')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend2_Subhadra=true";}'; }
	   
	   if((isset($_GET['friend_3']) && ($_SESSION['name'] == 'Subhadra'))|| (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend3')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend3_Subhadra=true";}'; }
	   
	   if((isset($_GET['friend_4']) && ($_SESSION['name'] == 'Subhadra'))|| (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend4')) {
	  echo'
       var exit = confirm("Are you sure you want to end the session?");
       if(exit==true){window.location = "index.php?logout_friend4_Subhadra=true";}'; }
	   echo '
   });


   $("#submitmsg").click(function(){
      var clientmsg = $("#usermsg").val();';
	  //passing values to post.php
	  if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Friend2') || (isset($_GET['friend_2']) && $_SESSION['name'] == 'Friend1')) {
	  echo'
	  var clientmsg2 = "friend1_friend2";';
	  }
	  else if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Friend3') || (isset($_GET['friend_3']) && $_SESSION['name'] == 'Friend1')) {
	  echo'
	  var clientmsg2 = "friend1_friend3";';
	  }
	  else if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Friend4') || (isset($_GET['friend_4']) && $_SESSION['name'] == 'Friend1')) {
	  echo'
	  var clientmsg2 = "friend1_friend4";';
	  }
	   else if((isset($_GET['friend_2']) && $_SESSION['name'] == 'Friend3') || (isset($_GET['friend_3']) && $_SESSION['name'] == 'Friend2')) {
	  echo'
	  var clientmsg2 = "friend2_friend3";';
	  }
	  else if((isset($_GET['friend_2']) && $_SESSION['name'] == 'Friend4') || (isset($_GET['friend_4']) && $_SESSION['name'] == 'Friend2')) {
	  echo'
	  var clientmsg2 = "friend2_friend4";';
	  }
	  else if((isset($_GET['friend_3']) && $_SESSION['name'] == 'Friend4') || (isset($_GET['friend_4']) && $_SESSION['name'] == 'Friend3')) {
	  echo'
	  var clientmsg2 = "friend3_friend4";';
	  }
	  else if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend1')) {
	  echo'
	  var clientmsg2 = "friend1_Subhadra";';
	  }
	  else if((isset($_GET['friend_2']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend2')) {
	  echo'
	  var clientmsg2 = "friend2_Subhadra";';
	  }
	  else if((isset($_GET['friend_3']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend3')) {
	  echo'
	  var clientmsg2 = "friend3_Subhadra";';
	  }
	  else if((isset($_GET['friend_4']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend4')) {
	  echo'
	  var clientmsg2 = "friend4_Subhadra";';
	  }	 
	  echo'
      $.post("post.php", {text: clientmsg, text2: clientmsg2});
      $("#usermsg").attr("value", "");
      return false;
   });
   
   setInterval (loadLog, 1000);                   

function loadLog(){
    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;

	
    $.ajax({ url:'; 
	if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Friend2') || (isset($_GET['friend_2']) && $_SESSION['name'] == 'Friend1'))
	{ echo '"friend1_friend2.html",';
	}
	else if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Friend3') || (isset($_GET['friend_3']) && $_SESSION['name'] == 'Friend1'))
	{ echo '"friend1_friend3.html",';
	}
	else if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Friend4') || (isset($_GET['friend_4']) && $_SESSION['name'] == 'Friend1'))
	{ echo '"friend1_friend4.html",';
	}
	else if((isset($_GET['friend_2']) && $_SESSION['name'] == 'Friend3') || (isset($_GET['friend_3']) && $_SESSION['name'] == 'Friend2'))
	{ echo '"friend2_friend3.html",';
	}
	else if((isset($_GET['friend_2']) && $_SESSION['name'] == 'Friend4') || (isset($_GET['friend_4']) && $_SESSION['name'] == 'Friend2'))
	{ echo '"friend2_friend4.html",';
	}
	else if((isset($_GET['friend_3']) && $_SESSION['name'] == 'Friend4') || (isset($_GET['friend_4']) && $_SESSION['name'] == 'Friend3')) 
	{ echo '"friend3_friend4.html",';
	}
	else if((isset($_GET['friend_1']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend1'))
	{ echo '"friend1_Subhadra.html",';
	}
	else if((isset($_GET['friend_2']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend2'))
	{ echo '"friend2_Subhadra.html",';
	}
	else if((isset($_GET['friend_3']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend3')) 
	{ echo '"friend3_Subhadra.html",';
	}
	else if((isset($_GET['friend_4']) && $_SESSION['name'] == 'Subhadra') || (isset($_GET['user_click']) && $_SESSION['name'] == 'Friend4'))
	{ echo '"friend4_Subhadra.html",';
	}

	echo'
             cache: false,
             success: function(html){
                $("#chatbox").html(html);
                var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
                if(newscrollHeight > oldscrollHeight){
                    $("#chatbox").animate({ scrollTop: newscrollHeight }, "normal"); 
                }
             },
    });
}
});
</script>
';
}

//checking if user name and password are entered and are valid by checking values from the database
if(isset($_POST['enter'])){
  if($_POST['name'] != "" && $_POST['password'] != ""){
$username=$_POST['name'];
$password=$_POST['password'];
$connection = mysqli_connect("localhost", "root", "Downloadz90", "test");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$username = stripslashes($username);
$password = stripslashes($password);
$sql = "select * from users where password='$password' AND username='$username'";
$query = mysqli_query($connection, $sql);
if ((mysqli_num_rows($query)) == 1 ) {  

$query1 = "select * from users where username = '$username'";
$result = mysqli_query($connection,$query1);  
$row = mysqli_fetch_row($result);  
if ($row[2]==0) 
{
$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];
$sql = "UPDATE users SET logged_in = 1 WHERE username='$username'";
$query1 = mysqli_query($connection, $sql);
}
else
{
echo '
<script>
    alert("You have already logged in!");
</script>';
}
}
else {
echo '<span class="error">Username or Password is invalid</span>';
}
mysqli_close($connection);
}
  else{
    echo '<span class="error">Please type in username and password</span>';
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>chat</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<?php
//loginForm function will be called when the user name and password are not set
if(!isset($_SESSION['name']) || !isset($_SESSION['password'])){
loginForm();
}
//Friends list will be displayed when the friends variables are not set and also when user name and password are set
else if(!isset($_GET['friend_1']) && !isset($_GET['friend_2']) && !isset($_GET['friend_3']) && !isset($_GET['friend_4']) && !isset($_GET['user_click'])){
friends();
}
?>

</body>
</html>