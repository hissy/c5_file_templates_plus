<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class HissyFileTemplatesPackage extends Package {
	protected $pkgHandle = 'hissy_file_templates';
	protected $appVersionRequired = '5.6';
	protected $pkgVersion = '0.1';
	public function getPackageDescription() {
		return t('Additional File block templates');
	}
	public function getPackageName() {
		return t('File Templates+');
	}
}