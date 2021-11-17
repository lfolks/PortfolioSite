<?php
header("HTTP/1.0 404 Not Found");
if(file_exists("../assets/lls/lls.conf.php")){
	require_once("../assets/lls/lls.conf.php");
}else{
	exit("
        <div style='background:#ccc; border: 1px solid #ccc; border-radius: 10px; padding-bottom: 10px; width: 950px; margin: 0 auto; text-align:center;'>
            <p>Well...our site appears to be down for the moment. Don't worry we are working on the issue and will be back up shortly.</p>
            <p><em>Error: Page File - Lost Config</em></p>
            <img src='https://www.legacylearningsolutions.net/bin/assets/img/logo/lls-y-g.png' height='60' alt='Legacy Learning Solutions, LLC' title='Legacy Learning Solutions, LLC'/>
        </div>
    ");
}
//Error Page Configuration
$page_redirected_from = $_SERVER['REQUEST_URI'];  // this is especially useful with error 404 to indicate the missing page.
$server_url = $wwwroot;
$redirect_url = $_SERVER["REDIRECT_URL"];
$redirect_url_array = parse_url($redirect_url);
$end_of_path = strrchr($redirect_url_array["path"], "/");
$error_code = "404 - Not Found";
$explanation = "The requested resource '" . $page_redirected_from . "' could not be found on this server. Please verify the address and try again.";
$error_detail = "Recently our site went through some major changes! It appears that the link you followed to get here is no longer working.";
$redirect_to = "";

// Site Information
$SI = new SiteInfo("err", $error_code . " - Legacy Learning Solutions", "Error page for Legacy Learning Solutions, LLC", "Legacy Learning Solutions, Error");

if(file_exists($root . "/bin/assets/inc/lls.header.php")){
	require_once($root . "/bin/assets/inc/lls.header.php");
}else{
	lls_incErr("header");
}
?>
<div class="container">
	<div class="row my-4">
		<div class="col">
			<h1 class="ctitle">Error Code <?php echo $error_code; ?></h1>
			<p class="errtext"><?PHP echo $explanation; ?></p>
			<p><?php echo $error_detail; ?></p>
			<p>You may also want to try starting from the home page: <a href="<?php echo ($server_url); ?>"><?php echo ($server_url); ?></a></p>
			<hr>
			<p><i>If you feel you have reached this in error, please email our Support Center at <a href="mailto:support@legacylearningsolutions.net?subject=Error%20Code%3A%20<?php echo $error_code; ?>&amp;body=I%20have%20received%20the%20following%20error%20code%3A%20<?php echo $error_code; ?>%20while%20visiting%20the%20Legacy%20Learning%20Solutions%20website.%0A%0AI%20am%20attempting%20to%20find%20<?php echo $page_redirected_from;?>">support@legacylearningsolutions.net</a>.</i></p>
			<p><i>Your friends at <a href="https://www.legacylearningsolutions.net">Legacy Learning Solutions, LLC</a>.</i></p>
		</div>
	</div>
</div>
<!-- Begin Footer -->
<?php
if(file_exists($root . "/bin/assets/inc/lls.footer.php")){
	require_once($root . "/bin/assets/inc/lls.footer.php");
}else{
	lls_incErr("footer");
}
?>