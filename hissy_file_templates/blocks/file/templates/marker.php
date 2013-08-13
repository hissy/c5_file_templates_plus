<?php  defined('C5_EXECUTE') or die("Access Denied.");

$pkg = Package::getByHandle('hissy_file_templates');

$f = $controller->getFileObject();
$fv = $f->getApprovedVersion();
$ft = FileTypeList::getType($fv->fvFilename);

if (file_exists($pkg->getPackagePath() . '/blocks/file/icons/' . $ft->extension . '.png')) {
	$icon_url = $pkg->getRelativePath() . '/blocks/file/icons/' . $ft->extension . '.png';
}

$icon_position = 'pre';

include('default/view.php');