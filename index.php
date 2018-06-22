
<?php
require_once("ipaDistrubution.php");
$folder = "";
if( isset( $_REQUEST['f'] ) )
	$folder = $_REQUEST['f'] . "/";
?>

<html class="pixel-ratio-1 watch-active-state pixel-ratio-2 retina ios ios-11 ios-11-0 ios-gt-10 ios-gt-9 ios-gt-8 ios-gt-7 ios-gt-6"><head>
    <meta charset="utf-8">
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<body>
   <div id="app" class="true">
            <div class="pages navbar-through">
                <div data-page="categories" class="page">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="center sliding" style="left: 0px;">اداة التوقيع</div>
                            <div class="right">
                                <a href="#" class="install-favs item-link external link"><span class="nav-glyph ion-ios-download"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="list-block media-list">
                            <ul class="favorites-list">
                            </ul>
                        </div>
                        <div class="container" style="background-image: url('../images/bg-01.jpg');">
                        <div class="wrap">
			    					<form action="resing.php" method="post">
					<span class="titleI">الصق رابط التطبيق الذي تريد توقيعه</span>
					<div class="inputO" data-validate="Enter username">
						<input name="url" size="50" placeholder="Source URL" class="input100" required>
						<span class="focus-input100" data-placeholder="🚀"></span>
					</div>
					<div class="container-login100-form-btn">
					
						<input name="submit" type="submit" value="🚀	وقّع" class="login100-form-btn">

					</div>
				</form>
				
                        </div>
                        </div>
                        <hr>
                        
                            <div class="list">
       
        <?php
$plists = glob( 'files/' . $folder . "*.ipa");
if( is_array( $plists ) && count( $plists ) > 0 ) {
foreach( $plists as $plist_path ) {
$ipa = new ipaDistrubution( $plist_path, $folder );

$link = $ipa->applink;
$provision_profile = $ipa->mobileprovision;
$icon = $ipa->appicon;
$app_name = $ipa->appname;
$bundle_version = $ipa->bundleversion;

?>
      <div data-reactroot="">
	
	<div class="card">
	<div class="shadow">
		
	<div class="shadowImage" style="background-image: url(<?=$icon?>);">
	</div>
	</div>
	<div class="image" style="background-image: url(<?=$icon?>);">
		
		<img class="appImage" src="<?=$icon?>" width="55">
		
	<div id="text" class="noFlicker">
      <span><?=$app_name?></span>
		
		<div id="name" class="noFlicker">
      <span id="first">  </span>
      <br>
      <span id="second" class="noFlicker">Version:<?=$bundle_version?></span>
      		<a href="#" onclick="window.location='itms-services://?action=download-manifest&url=<?=$link?>';" class="get">GET</a>

    </div>
		

		
    </div>
	</div>

</div>



</div>

        <?php
}
} else {
?>

<?php
}
?>
                    
                        
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

    <!-- Path to Framework7 Library JS-->
 
<div id="dropDownSelect1"></div>
</body></html>
