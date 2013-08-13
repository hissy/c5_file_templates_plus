<?php  defined('C5_EXECUTE') or die("Access Denied.");

$fp = new Permissions($f);
if ($fp->canViewFile()) { 
	$c = Page::getCurrentPage();
	if($c instanceof Page) {
		$cID = $c->getCollectionID();
	}
?>
<p>
<?php if (isset($icon_url) && isset($icon_position) && $icon_position == 'pre') : ?>
<img src="<?php	echo $icon_url?>" width="16" height="16" alt="" />
<?php endif;?>
<a href="<?php	echo View::url('/download_file', $controller->getFileID(), $cID) ?>"><?php	echo  stripslashes($controller->getLinkText()) ?></a>
<?php if (isset($icon_url) && isset($icon_position) && $icon_position == 'post') : ?>
<img src="<?php	echo $icon_url?>" width="16" height="16" alt="" />
<?php endif;?>
<?php if (isset($displayFileType) && !isset($displayFileSize)) :?>
&nbsp;(<?php	echo $ft->getName()?>)
<?php endif;?>
<?php if (!isset($displayFileType) && isset($displayFileSize)) :?>
&nbsp;(<?php echo $fv->getSize()?>)
<?php endif;?>
<?php if (isset($displayFileType) && isset($displayFileSize)) :?>
&nbsp;(<?php	echo $ft->getName()?> / <?php echo $fv->getSize()?>)
<?php endif;?>
<?php if (isset($displayFileName) && !isset($displayFileDescription)) : ?>
<br /><small><?php echo $fv->getFileName()?></small>
<?php endif;?>
<?php if (!isset($displayFileName) && isset($displayFileDescription)) : ?>
<br /><small><?php echo $fv->getDescription()?></small>
<?php endif;?>
<?php if (isset($displayFileName) && isset($displayFileDescription)) : ?>
<br /><small><?php echo $fv->getFileName();
if ($fv->getDescription() != '') echo ' / ' . $fv->getDescription(); ?></small>
<?php endif;?>
</p>
<?php	
}