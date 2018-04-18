<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: ban.php 576 2017-01-28 21:04:28Z jan_skovsgaard $
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 time',
	'30_MINS'		=> '30 minutter',
	'6_HOURS'		=> '6 timer',

	'ACP_BAN_EXPLAIN'	=> 'Her administreres udelukkelse af brugere ved navn, IP- eller e-mailadresse. Disse metoder forhindrer en bruger i at få adgang til boardet. Du kan indtaste en kort (maksimalt 3000 tegn) begrundelse for udelukkelsen som vises i administratorloggen. Udelukkelsens varighed vælges i dropdown-menuen. Skal den ophæves på en bestemt dato, vælges <span style="text-decoration: underline;">Indtil -&gt;</span> og slutdato indtastes i formatet <kbd>ÅÅÅÅ-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Ekskluder fra udelukkelse',
	'BAN_LENGTH'			=> 'Varighed af udelukkelse',
	'BAN_REASON'			=> 'Udelukkelsesårsag',
	'BAN_GIVE_REASON'		=> 'Vist udelukkelsesårsag',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Udelukkelseslisten er blevet opdateret.',
	'BANNED_UNTIL_DATE'		=> 'indtil %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (indtil %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Udeluk e-mailadresser',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Vælg "Ja" for at ekskludere indtastede e-mailadresser fra en bredere udelukkelse.',
	'EMAIL_BAN_EXPLAIN'			=> 'Du kan udelukke flere e-mailadresser på en gang ved at indtaste hver adresse på en linje for sig. Brug * som ubekendt for at matche delvise adresser, for eksempel <samp>*@hotmail.com</samp>, <samp>*@*.domæne.tld</samp>, osv.',
	'EMAIL_NO_BANNED'			=> 'Der er ingen udelukkede e-mailadresser på boardet',
	'EMAIL_UNBAN'				=> 'Ophæv udelukkelse eller ekskludering',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Du kan ophæve flere e-mailadressers udelukkelse i en arbejdsgang, ved at bruge den rette kombination af mus og tastatur (afhængig af computer og browser). E-mailadresser ekskluderet fra udelukkelse er fremhævet.',

	'IP_BAN'					=> 'Udeluk IP-adresser',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Vælg "Ja" for at ekskludere indtastede IP-adresser fra en bredere udelukkelse.',
	'IP_BAN_EXPLAIN'			=> 'Du kan udelukke flere IP-adresser eller værtsnavne på en gang ved at indtaste hver adresse eller vært på linje for sig. For at specificere et interval af IP-adresser adskilles start og slut med en bindestreg (-). Brug * for at specificere en ubekendt.',
	'IP_HOSTNAME'				=> 'IP-adresser eller værtsnavne',
	'IP_NO_BANNED'				=> 'Der er ingen udelukkede IP-adresser på boardet',
	'IP_UNBAN'					=> 'Ophæv udelukkelse eller ekskludering',
	'IP_UNBAN_EXPLAIN'			=> 'Du kan ophæve flere IP-adressers udelukkelse i en arbejdsgang, ved at bruge den rette kombination af mus og tastatur (afhængig af computer og browser). IP-adresser ekskluderet fra udelukkelse er fremhævet.',

	'LENGTH_BAN_INVALID'		=> 'Datoen skal have formatet <kbd>ÅÅÅÅ-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Udelukket',
	'OPTIONS_EXCLUDED'			=> 'Ekskluderet',

	'PERMANENT'		=> 'Permanent',

	'UNTIL'						=> 'Indtil',
	'USER_BAN'					=> 'Udeluk en eller flere brugere',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Vælg "Ja" for at ophæve alle anførte brugeres tidligere udelukkelser.',
	'USER_BAN_EXPLAIN'			=> 'Du kan udelukke flere brugere på en gang ved at indtaste hver bruger på en linje for sig. Brug funktionen <span style="text-decoration: underline;">Find en tilmeldt bruger</span> til at finde og tilføje en eller flere brugere automatisk.',
	'USER_NO_BANNED'			=> 'Der er ingen udelukkede brugere på boardet',
	'USER_UNBAN'				=> 'Ophæv udelukkelse eller ekskludering',
	'USER_UNBAN_EXPLAIN'		=> 'Du kan ophæve flere brugeres udelukkelse i en arbejdsgang, ved at bruge den rette kombination af mus og tastatur (afhængig af computer og browser). Brugere ekskluderet fra udelukkelse er fremhævet.',
));
