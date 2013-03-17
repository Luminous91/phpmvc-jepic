<?php
//
// PHASE: BOOTSTRAP
//
define('JEPIC_INSTALL_PATH', dirname(__FILE__));
define('JEPIC_SITE_PATH', JEPIC_INSTALL_PATH . '/site');

require(JEPIC_INSTALL_PATH.'/src/CJepic/bootstrap.php');

$je = CJepic::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$je->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$je->ThemeEngineRender();