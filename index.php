<?php
include "cfg/includes.php";  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" id="www-roblox-com"><head><script src="js/analytics.js" type="text/javascript"></script>

<script type="text/javascript" src="js/bundle-playback.js" charset="utf-8"></script>
<script type="text/javascript" src="js/wombat.js" charset="utf-8"></script>

<link rel="stylesheet" type="text/css" href="css/banner-styles.css">
<link rel="stylesheet" type="text/css" href="css/iconochive.css">
<title>
  ROBLOX
</title><link rel="stylesheet" type="text/css" href="css/Roblox.css"><link id="_ctl0_Imports" rel="stylesheet" type="text/css" href="css/Import.css"><link id="_ctl0_Favicon" rel="Shortcut Icon" type="image/ico" href="https://web.archive.org/web/20061230105806im_/http://www.roblox.com/roblox.ico"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="author" content="ROBLOX Corporation"><meta name="description" content="ROBLOX is SAFE for kids! ROBLOX is a FREE casual virtual world with fully constructible/desctructible environments and immersive physics. Build, battle, chat, or just hang out."><meta name="keywords" content="game, video game, building game, contstruction game, online game, LEGO game, LEGO, MMO, MMORPG, virtual world, avatar chat"><meta name="robots" content="all">

    <script type="text/javascript"></script>
  <link href="css/Badges.css" type="text/css" rel="stylesheet"><link href="css/Frontpage.css" type="text/css" rel="stylesheet"><link href="css/Inbox.css" type="text/css" rel="stylesheet"><link href="css/Install.css" type="text/css" rel="stylesheet"><link href="css/Membership.css" type="text/css" rel="stylesheet"><link href="css/Message.css" type="text/css" rel="stylesheet"><link href="css/Roblox_002.css" type="text/css" rel="stylesheet"><link href="css/Splash.css" type="text/css" rel="stylesheet"><link href="css/Toolbox.css" type="text/css" rel="stylesheet"><link href="css/User.css" type="text/css" rel="stylesheet"></head>
  <body>
<style type="text/css">
body {
  margn-top:0 !important;
  padding-top:0 !important;
  /*min-width:800px !important;*/
}
</style>

      <div id="Container">
        <div id="Header">
          <div id="Banner">
            <div id="Authentication">
                <?php
             if (isset($_SESSION["loggedin"])) {
                 ?>
             <span><a id="_ctl0_lsLoginStatus" href="Login/logout.php">Log out</a></span>
             <?php } else { ?>
             <span><a id="_ctl0_lsLoginStatus" href="Login/Default.aspx">Log In</a></span>
             <?php } ?>
            </div>
            <div id="Home"><a id="_ctl0_hlHome" class="BannerText" href="#">ROBLOX Home</a></div>
            <div id="Logo"><a id="_ctl0_rbxImage_Logo" title="ROBLOX" href="#" blankurl="/Thumbs/Blank.ashx?x=267&amp;y=70" imageurl="/images/Logo_267_70.png" style="display:inline-block;BEHAVIOR:url(/web/20061230105806im_/http://www.roblox.com/UI/Image.htc);cursor:hand;"></a></div>
            <?php
    if (isset($_SESSION["loggedin"])) {
      
      } else { ?>
            <div id="Alerts"><a id="_ctl0_rbxSignupAndPlay_hlSignupAndPlay" href="Login/New.aspx"><img src="images/SignupBanner.png" alt="Sign-up and Play!" border="0"></a></div>
            <?php } ?>
          </div>
          <div id="Navigation">
            <span><a id="_ctl0_hlMyRoblox" class="MenuItem" href="https://web.archive.org/web/20061230105806/http://www.roblox.com/User.aspx">My ROBLOX</a></span>
            <span class="Separator">&nbsp;|&nbsp;</span>
            <span><a id="_ctl0_hlGames" class="MenuItem" href="MP/Default.aspx">Games</a></span>
            <span class="Separator">&nbsp;|&nbsp;</span>
            <span><a id="_ctl0_hlBrowse" class="MenuItem" href="https://web.archive.org/web/20061230105806/http://www.roblox.com/Browse.aspx">Browse</a></span>
            <span id="_ctl0_BadgesItem" class="Separator">&nbsp;|&nbsp;<a id="_ctl0_hlBadges" class="MenuItem" href="https://web.archive.org/web/20061230105806/http://www.roblox.com/Badges.aspx">Badges</a></span>
            <span class="Separator">&nbsp;|&nbsp;</span>
            <span><a id="_ctl0_hlForum" class="MenuItem" href="https://web.archive.org/web/20061230105806/http://www.roblox.com/Forum/Default.aspx">Forum</a></span>
            <span class="Separator">&nbsp;|&nbsp;</span>
            <span><a id="_ctl0_hlNews" class="MenuItem" href="https://web.archive.org/web/20061230105806/http://blog.roblox.com/" target="_blank">News</a></span>
            <span class="Separator">&nbsp;|&nbsp;</span>
            <span><a id="_ctl0_hlHelp" class="MenuItem" href="https://web.archive.org/web/20061230105806/http://wiki.roblox.com/" target="_blank">Help</a></span>
            <span></span>
          </div>
        </div>
        <div id="Body">
          
  <div id="SplashContainer">
    <div id="SignInPane">
      
<?php
    if (isset($_SESSION["loggedin"])) { ?>
      <div id="LoginViewContainer">
  
      <div id="LoginView">
        <h5>Account info</h5>
        <table id="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td>
            <div class="AspNet-Login">
              <div class="AspNet-Login-UserPanel">
                <label for="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserName" id="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserNameLabel" class="Label">Welcome back, placeholder</label>
            </div>
          </td>
  </tr>
</tbody></table>
      </div>
    
</div>
      <?php
      } else { ?>
<div id="LoginViewContainer">
  
      <div id="LoginView">
        <h5>Member Log-In</h5>
        <table id="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td>
            <div class="AspNet-Login">
              <div class="AspNet-Login-UserPanel">
                <label for="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserName" id="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserNameLabel" class="Label">Character Name</label>
                <input name="_ctl0:cphRoblox:rbxLoginView:lvLoginView:lSignIn:UserName" type="text" id="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserName" tabindex="1" class="Text">
              </div>
              <div class="AspNet-Login-PasswordPanel">
                <label for="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_Password" id="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_PasswordLabel" class="Label">Password</label>
                <input name="_ctl0:cphRoblox:rbxLoginView:lvLoginView:lSignIn:Password" type="password" id="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_Password" tabindex="2" class="Text">
              </div>
              <div class="AspNet-Login-SubmitPanel">
                <a id="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_Login" tabindex="4" class="Button" href="javascript:__doPostBack('_ctl0$cphRoblox$rbxLoginView$lvLoginView$lSignIn$Login','')">Log In</a>
              </div>
              <div class="AspNet-Login-PasswordRecoveryPanel">
                <a id="_ctl0_cphRoblox_rbxLoginView_lvLoginView_lSignIn_hlPasswordRecovery" tabindex="5" href="Login/ResetPasswordRequest.aspx">Forgot your password?</a>
              </div>
            </div>
          </td>
  </tr>
</tbody></table>
      </div>
    
</div>
<?php } ?>
      <div id="Figure"><a id="_ctl0_cphRoblox_ImageFigure" disabled="disabled" title="Figure" onclick="return false" blankurl="/Thumbs/Blank.ashx?x=115&amp;y=130" imageurl="/images/figure.png" style="display:inline-block;BEHAVIOR:url(/web/20061230105806im_/http://www.roblox.com/UI/Image.htc);"></a></div>
    </div>
    <div id="RobloxAtAGlance">
      <h2>ROBLOX Virtual Playworld</h2>
      <h3>ROBLOX is Free!</h3>
      <ul id="ThingsToDo">
        <li id="Point1">
          <h3>Build your personal Place</h3>
          <div>Create buildings, vehicles, scenery, and traps with thousands of virtual bricks.</div>
        </li>
        <li id="Point2">
          <h3>Meet new friends online</h3>
          <div>Visit your friend's place, chat in 3D, and build together.</div>
        </li>
        <li id="Point3">
          <h3>Battle in the Brick Arenas</h3>
          <div>Play with the slingshot, rocket, or other brick battle tools.  Be careful not to get "bloxxed".</div>
        </li>
      </ul>
      <div id="Showcase">
        <embed style="width:400px; height:326px;" id="VideoPlayback" type="application/x-shockwave-flash" src="images/googleplayer.swf" flashvars="">
      </div>
      <div id="Install">
        <div id="CompatibilityNote"><div id="_ctl0_cphRoblox_pCompatibilityNote">
  Works with your<br>Windows PC!
</div></div>
<?php
    if (isset($_SESSION["loggedin"])) { ?>
       <div id="DownloadAndPlay"><a id="_ctl0_cphRoblox_hlDownloadAndPlay" href="Install/Default.aspx"><img src="images/DownloadAndPlay.png" alt="FREE - Download and Play!" border="0"></a></div>
       <?php
      } else { ?>
        <div id="DownloadAndPlay"><a id="_ctl0_cphRoblox_hlDownloadAndPlay" href="Login/New.aspx"><img src="images/DownloadAndPlay.png" alt="FREE - Download and Play!" border="0"></a></div>
        <?php } ?>
      </div>
    </div>
    <div id="UserPlacesPane">
      <div id="UserPlaces_Content">
        <span id="_ctl0_cphRoblox_DataListCoolPlace"><span class="CoolPlaceItem">
            <span class="UserPlace">
              <a id="_ctl0_cphRoblox_DataListCoolPlace__ctl0_rbxContentImage" title="Tank Terrain Course" href="#" style="display:inline-block;cursor:hand;"><img src="images/Level.jpg" border="0"></a>
            </span>
          </span><span class="CoolPlaceItem">
            <span class="UserPlace">
              <a id="_ctl0_cphRoblox_DataListCoolPlace__ctl1_rbxContentImage" title="PilotLuke's Cloud City" href="#" style="display:inline-block;cursor:hand;"><img src="images/Level_003.jpg" border="0"></a>
            </span>
          </span><span class="CoolPlaceItem">
            <span class="UserPlace">
              <a id="_ctl0_cphRoblox_DataListCoolPlace__ctl2_rbxContentImage" title="Pirate Ship" href="#" style="display:inline-block;cursor:hand;"><img src="images/Level_002.jpg" border="0"></a>
            </span>
          </span><span class="CoolPlaceItem">
            <span class="UserPlace">
              <a id="_ctl0_cphRoblox_DataListCoolPlace__ctl3_rbxContentImage" title="Katalyst's Place" href="#" style="display:inline-block;cursor:hand;"><img src="images/Level_004.jpg" border="0"></a>
            </span>
          </span><span class="CoolPlaceItem">
            <span class="UserPlace">
              <a id="_ctl0_cphRoblox_DataListCoolPlace__ctl4_rbxContentImage" title="Stairway to Heaven" href="#" style="display:inline-block;cursor:hand;"><img src="images/Level_005.jpg" border="0"></a>
            </span>
          </span></span>
      </div>
      <div id="UserPlaces_Header">
        <h3>Cool Places</h3>
        <p>Check out some of our favorite ROBLOX places!</p>
      </div>
    </div>
  </div>

        </div>
        <div id="Footer">
          
<hr>
<p class="Legalese">
  ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a id="_ctl0_Footer1_hlRobloxCorporation" href="https://web.archive.org/web/20061230105806/http://www.roblox.com/info/About.aspx">ROBLOX Corporation</a>, ©2006.  Patents pending.<br>
  Use of this site signifies your acceptance of the <a id="_ctl0_Footer1_hlTermsOfService" href="https://web.archive.org/web/20061230105806/http://www.roblox.com/info/TermsOfService.aspx">Terms and Conditions</a>.<br>
  <a id="_ctl0_Footer1_hlPrivacyPolicy" href="https://web.archive.org/web/20061230105806/http://www.roblox.com/info/Privacy.aspx">Privacy Policy</a> &nbsp;|&nbsp; <a href="https://web.archive.org/web/20061230105806/mailto:info@roblox.com">Contact Us</a> &nbsp;|&nbsp; <a id="_ctl0_Footer1_hlAboutRoblox" href="https://web.archive.org/web/20061230105806/http://www.roblox.com/info/About.aspx">About Us</a>
</p>

        </div>
      </div>
</body></html>

<!-- By Ficello.zip#9910 if you want to see the source code: https://github.com/Ficelloo/2006-Roblox-Website --> 
<!-- would be cool if ur not removing this credit lol -->
