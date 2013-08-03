<?php
/**
 * In reality, this would not be in webroot...
 */
$html = ob_get_clean();

// Which theme are we using? (only one for now)
$theme = "Corona";
if (strpos($_SERVER['PHP_SELF'], "/corona/") !== false) {
	$theme = "Corona";
}

// Build config
$config = array(
	"theme" => $theme
);

require_once(__dir__ . "/../vendor/autoload.php");
$sparkle = new Sparkle\Core\Sparkle($config);
print $sparkle->run($html);