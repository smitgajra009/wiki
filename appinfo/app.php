<?php
/**
 * ownCloud - picocmsapp
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Jan Müller <jan.mueller@novapo.net>
 * @copyright Jan Müller 2015
 */
namespace OCA\PicoCmsApp\AppInfo;

$app = new Application();


\OCP\App::addNavigationEntry([
	// the string under which your app will be referenced in owncloud
	'id' => 'picocmsapp',

	// sorting weight for the navigation. The higher the number, the higher
	// will it be listed in the navigation
	'order' => 10,

	// the route that will be shown on startup
	'href' => \OCP\Util::linkToRoute('picocmsapp.page.index'),

	// the icon that will be shown in the navigation
	// this file needs to exist in img/
	'icon' => \OCP\Util::imagePath('picocmsapp', 'app.svg'),

	// the title of your application. This will be used in the
	// navigation or on the settings page of your app
	'name' => \OC_L10N::get('picocmsapp')->t('Pico Cms App')
]);
