<?php
/**
*
* @package Support Toolkit - Add User
* @version $Id: add_user.php 244 2009-10-22 11:00:13Z erikfrerejean $
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADD_USER'				=> 'Kullanıcı ekle',
	'ADD_USER_GROUP'		=> 'Gruplara kullanıcı ekle',

	'DEFAULT_GROUP'			=> 'Varsayılan fgrup',
	'DEFAULT_GROUP_EXPLAIN'	=> 'Bu kullanıcı için varsayılan grup.',

	'GROUP_LEADER'			=> 'Grup lideri',
	'GROUP_LEADER_EXPLAIN'	=> 'Bu kullanıcıyı seçilen grupların grup lideri yap.',

	'USER_ADDED'			=> 'Kullanıcı başarıyla oluşturuldu!',
	'USER_GROUPS'			=> 'Kullanıcı grupları',
	'USER_GROUPS_EXPLAIN'	=> 'Bu kullanıcıyı seçilen grupların bir üyesi yap.',
));
