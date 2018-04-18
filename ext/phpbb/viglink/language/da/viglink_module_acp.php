<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * @modified and translated by Olympus DK Team
 * @version $Id: viglink_module_acp.php 590 2018-01-20 08:00:32Z jan_skovsgaard $
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
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink-indstillinger',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink er en tredje parts-tjeneste, som diskret omsætter links skrevet indsendt af brugerne på dit board til penge, uden at ændre på brugeroplevelsen. Når en bruger klikker på et link til produkter eller services og køber via linket, betaler den handlende en kommission til VigLink, en del af denne kommission doneres til phpBB-projektet. Vælger du at aktivere VigLink og donere indtjeningen til phpBB-projektet, hjælper du vor open source-organisation og er med til at sikre vor fortsatte financielle sikkerhed.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Du kan til enhver tid ændre disse indstillinger i "<a href="%1$s">VigLink-indstillinger</a>".',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Når du har foretaget dine valg herunder, og indsendt disse, bliver du ikke længere dirigeret til denne side.',
	'ACP_VIGLINK_ENABLE'			=> 'Aktiver VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Aktiverer brugen af VigLink-tjenester.',
	'ACP_VIGLINK_EARNINGS'			=> 'Anmod om egen indtjening (valgfri)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Du kan anmode om din egen indtjening ved at oprette en VigLink konverteringskonto.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink-tjenester er blevet deaktiveret af phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Bed om dine indtjeninger',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Du kan forlange dit boards indtjeninger fra VigLinks kommisioner, i stedet for at donere disse til phpBB-projektet. Opret en "VigLink konverteringskonto" ved at klikke på "Konverter konto", for at ændre dette.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Konverter konto',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Linket til VigLink konverteringskonto findes ikke.',
));
