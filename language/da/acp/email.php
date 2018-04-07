<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: email.php 576 2017-01-28 21:04:28Z jan_skovsgaard $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Her kan du sende en e-mail til enten alle dine brugere, eller til de brugere i en specifik gruppe som <strong>har muligheden for at modtage masse-e-mails aktiveret</strong>. Når en masse-e-mail afsendes bliver administrator sat som afsender, og afsendes med modtagere som blind kopi, som derfor ikke kan se øvrige modtagere. Som standard afsendes e-mailen til 20 brugere ad gangen. Vær tålmodig, når du sender e-mail til en stor gruppe af personer og stop ikke siden halvvejs. Afsendelsen af en masse-e-mail kan tage lang tid, men du bliver informeret når scriptet er fuldført.',
	'ALL_USERS'						=> 'Alle brugere',

	'COMPOSE'				=> 'Skriv e-mail',

	'EMAIL_SEND_ERROR'		=> 'Der opstod en eller flere fejl under afsendelsen af e-mailen. Kontroller venligst %sfejlloggen%s for oplysninger om fejlårsagen.',
	'EMAIL_SENT'			=> 'Denne e-mail er blevet sendt.',
	'EMAIL_SENT_QUEUE'		=> 'Denne e-mail er nu placeret i afsendelseskøen.',

	'LOG_SESSION'			=> 'Log mailsession til kritisk log',

	'SEND_IMMEDIATELY'		=> 'Send straks',
	'SEND_TO_GROUP'			=> 'Send til gruppe',
	'SEND_TO_USERS'			=> 'Send til brugere',
	'SEND_TO_USERS_EXPLAIN'	=> 'Indtastning af navne her vil overskrive enhver gruppe valgt ovenfor. Indtast hvert brugernavn på en linje for sig.',

	'MAIL_BANNED'      => 'Send også e-mail til udelukkede brugere',
	'MAIL_BANNED_EXPLAIN'  => 'Når du sender en masse-e-mail til en gruppe, kan du her vælge at også udelukkede brugere i gruppen, skal modtage e-mailen.',
	'MAIL_HIGH_PRIORITY'	=> 'Høj',
	'MAIL_LOW_PRIORITY'		=> 'Lav',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioritet for e-mail',
	'MASS_MESSAGE'			=> 'E-mailens tekst',
	'MASS_MESSAGE_EXPLAIN'	=> 'Bemærk venligst at du kun bør skrive ren tekst. Al opmærkning vil blive fjernet inden afsendelse.',

	'NO_EMAIL_MESSAGE'		=> 'Du skal skrive en besked.',
	'NO_EMAIL_SUBJECT'		=> 'Du skal skrive en overskrift i din e-mail.',
));
