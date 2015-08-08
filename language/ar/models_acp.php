<?php
/**
 *
 * @package Post Models Extension
 * @copyright (c) 2015 Zoddo <zoddo.ino@gmail.com>
 * @copyright (c) 2007 Elglobo <http://www.phpbb-services.com>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 * Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'ADD_NEW_MODEL'			=> 'إضافة نموذج مُشاركة',
	'FOUNDERS'				=> 'المؤسسين',
	'MODEL'					=> 'نموذج',
	'MODEL_ADD'				=> 'إضافة نموذج مُشاركة جديدة',
	'MODEL_ADDED'			=> 'تم إضافة نموذج المشاركة بنجاح.',
	'MODEL_AUTH'			=> 'الصلاحية ',
	'MODEL_AUTH_EXPLAIN'	=> 'حدد المجموعة التي سيتم إعطائهم الصلاحية المطلوبة لمُشاهدة نماذج المُشاركة.<br />يجب عليك إعطاء الصلاحية المطلوبة للأعضاء لكي يستطيعون استخدام نماذج المُشاركة.',
	'MODEL_ALREADY_EXIST'	=> 'عنوان النموذج الذي أدخلته موجود مُسبقاً. الرجاء تغيير العنوان.',
	'MODEL_CONTENT'			=> 'المحتوى',
	'MODEL_CONTENT_EXPLAIN'	=> 'سوف يتم إضافة محتوى هذا النموذج إلى محتوى المُشاركة أو الرسالة.',
	'MODEL_EDIT'			=> 'تعديل نموذج المُشاركة',
	'MODEL_EDIT_EXPLAIN'	=> 'هنا تستطيع تفعيل أو تعديل نموذج المُشاركة.',
	'MODEL_LANGUAGE'		=> 'اللغة ',
	'MODEL_PM'				=> 'العرض في الرسائل الخاصة ',
	'MODEL_PM_EXPLAIN'		=> 'يجب عليك إعطاء الصلاحية المطلوبة للأعضاء لكي يستطيعون استخدام نماذج المُشاركة في الرسائل الخاصة.',
	'MODEL_SETTINGS'		=> 'الإعدادات',
	'MODEL_TITLE'			=> 'إسم النموذج ',
	'MODEL_UPDATED'			=> 'تم تحديث نموذج المشاركة بنجاح.',
	'MODEL_REMOVED'			=> 'تم إزالة نموذج المشاركة بنجاح.',

	'NO_EXIST'				=> 'اللغة لم تعد متوفرة.',
	'NO_MODEL_INFO'			=> 'يجب إضافة العنوان / المحتوى / اللغة لهذا النموذج.',
	'NO_MODEL'				=> 'لم يتم العثور على نموذج المُشاركة.',
	'NO_PERMISSIONS'		=> 'ليس لديك الصلاحية المطلوبة لإدارة نماذج المُشاركة.',
));
