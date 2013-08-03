<?php
$html = ob_get_clean();

require_once(__dir__ . "/vendor/autoload.php");
$sparkle = new Sparkle\Core\Sparkle();
print $sparkle->run($html);