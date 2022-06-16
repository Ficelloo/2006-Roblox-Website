<?php
include "../cfg/includes.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script type="text/javascript" src="../js/bundle-playback.js" charset="utf-8"></script>
<script type="text/javascript" src="../js/wombat.js" charset="utf-8"></script>

<link rel="stylesheet" type="text/css" href="../css/banner-styles.css">
<link rel="stylesheet" type="text/css" href="../css/iconochive.css">

<title>
  ROBLOX | Login
</title><link rel="stylesheet" type="text/css" href="../css/Roblox_002.css"><link id="_ctl0_Imports" rel="stylesheet" type="text/css" href="../css/Import.css"><link id="_ctl0_Favicon" rel="Shortcut Icon" type="image/ico" href="https://web.archive.org/web/20061214110445im_/http://www.roblox.com/roblox.ico"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="author" content="ROBLOX Corporation"><meta name="description" content="ROBLOX is SAFE for kids! ROBLOX is a FREE casual virtual world with fully constructible/desctructible environments and immersive physics. Build, battle, chat, or just hang out."><meta name="keywords" content="game, video game, building game, contstruction game, online game, LEGO game, LEGO, MMO, MMORPG, virtual world, avatar chat"><meta name="robots" content="all">

    <script type="text/javascript"></script>
  <link href="../css/Frontpage.css" type="text/css" rel="stylesheet"><link href="../css/Inbox.css" type="text/css" rel="stylesheet"><link href=../css/Install.css" type="text/css" rel="stylesheet"><link href="../css/Membership.css" type="text/css" rel="stylesheet"><link href="../css/Message.css" type="text/css" rel="stylesheet"><link href="../css/Roblox.css" type="text/css" rel="stylesheet"><link href="../css/Splash.css" type="text/css" rel="stylesheet"><link href="../css/Toolbox.css" type="text/css" rel="stylesheet"><link href="../css/User.css" type="text/css" rel="stylesheet"></head>
  <body>
<style type="text/css">
body {
  margin-top:0 !important;
  padding-top:0 !important;
  /*min-width:800px !important;*/
}
</style>


      
<script type="text/javascript"></script>
      <div id="Container">
        <div id="Header">
          <div id="Banner" style="background-color: lightsteelblue">
            <a id="_ctl0_Image1" title="ROBLOX" href="../" blankurl="/Thumbs/Blank.ashx?x=267&amp;y=70" imageurl="/images/Logo_267_70.png" style="display:inline-block;BEHAVIOR:url(/web/20061214110445im_/http://www.roblox.com/UI/Image.htc);cursor:hand;"></a>
          </div>
        </div>
        <div id="Body">

  <div id="FrameLogin" style="margin: 150px auto 150px auto; width: 500px; border: black thin solid; padding: 22px;">
    <div id="PaneNewUser">
      <h3>New User?</h3>
      <p>You need an account to play ROBLOX.</p>
      <p>If you aren't a ROBLOX member then <a id="_ctl0_cphRoblox_HyperLink1" href="New.aspx">register</a>. It's easy and we do <em>not</em> share your personal information with anybody.</p>
    </div>
    <div id="PaneLogin">
      <h3>Log In</h3>
      <form method='post'>
  <tbody><tr>
    <td><table cellpadding="0" border="0">
      <tbody><tr>
        <td class="TextboxLabel" align="right"><label>User Name:</label></td><td><input name="usernamefield" type="text" id="usernamefield">&nbsp;</td>
      </tr><tr>
        <td class="TextboxLabel" align="right"><label>Password:</label></td><td><input name="passwordfield" type="password" id="passwordfield">&nbsp;</td>
      </tr><tr>
        <td colspan="2" align="right"><input type="submit" name="Login" value="Log In"></td>
      </tr><tr>
        <td colspan="2"><a id="_ctl0_cphRoblox_lRobloxLogin_PasswordRecoveryLink" href="ResetPasswordRequest.aspx">Forgot your password?</a></td>
      </tr>
    </tbody></table></td>
  </tr>
  </form>
</tbody></table>
    </div>
  </div>

        </div>
        <div id="Footer">
          
<hr>
<p class="Legalese">
  ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a id="_ctl0_rbxFooter_hlRobloxCorporation" href="https://web.archive.org/web/20061214110445/http://www.roblox.com/info/About.aspx">ROBLOX Corporation</a>, 2006.  Patents pending.<br>
  Use of this site signifies your acceptance of the <a id="_ctl0_rbxFooter_hlTermsOfService" href="https://web.archive.org/web/20061214110445/http://www.roblox.com/info/TermsOfService.aspx">Terms and Conditions</a>.<br>
  <a id="_ctl0_rbxFooter_hlPrivacyPolicy" href="https://web.archive.org/web/20061214110445/http://www.roblox.com/info/Privacy.aspx">Privacy Policy</a> &nbsp;|&nbsp; <a href="https://web.archive.org/web/20061214110445/mailto:info@roblox.com">Contact Us</a> &nbsp;|&nbsp; <a id="_ctl0_rbxFooter_hlAboutRoblox" href="https://web.archive.org/web/20061214110445/http://www.roblox.com/info/About.aspx">About Us</a>
</p>

        </div>
      </div>
    
</form></body></html>


<?php
global $db;
  
  if(isset($_POST['Login'])) {
    extract($_POST);
    
    $q = $db->prepare("SELECT * FROM users WHERE name = :username");
    $q->execute(['username' => $usernamefield]);
    $result = $q->fetch();
    
    if($result == true) {
      if($passwordfield == $result['passwd']) {
         session_regenerate_id();
         $_SESSION['loggedin'] = TRUE;
         $_SESSION['name'] = $result['name'];
         $_SESSION['id'] = $result['id'];
         $_SESSION['banned'] = $result['banned'];
         $_SESSION['admin'] = $result['admin'];

         header('Location: ../');
      } else {
        ?>
        <h1>Invalid login credentials</h1>
        <?php
      }
    } else {
      ?>
      <h1>Invalid login credentials</h1>
      <?php
    }
  }
?>