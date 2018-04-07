<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: mcp.php 576 2017-01-28 21:04:28Z jan_skovsgaard $
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

$lang = array_merge($lang, array(
	'ACTION'				=> 'Handling',
	'ACTION_NOTE'			=> 'Handling eller notat',
	'ADD_FEEDBACK'			=> 'Tilføj brugernotat',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Brugernotatet tilføjes i nedenstående felt. Brug kun ren tekst. HTML, BBkode osv. er ikke tilladt.',
	'ADD_WARNING'			=> 'Udsted advarsel',
	'ADD_WARNING_EXPLAIN'	=> 'For at udstede en advarsel til denne bruger skal efterfølgende formular udfyldes. Brug kun ren tekst, HTML, BBkode osv. er ikke tilladt.',
	'ALL_ENTRIES'			=> 'Alle data',
	'ALL_NOTES_DELETED'		=> 'Alle brugernotater er slettet.',
	'ALL_REPORTS'			=> 'Alle rapporter',
	'ALREADY_REPORTED'		=> 'Dette indlæg er allerede blevet rapporteret.',
	'ALREADY_REPORTED_PM'	=> 'Denne private besked er allerede blevet rapporteret.',
	'ALREADY_WARNED'		=> 'Der er allerede udstedt en advarsel vedrørende dette indlæg.',
	'APPROVE'				=> 'Godkend',
	'APPROVE_POST'			=> 'Godkend indlæg',
	'APPROVE_POST_CONFIRM'	=> 'Er du sikker på, at du vil godkende dette indlæg?',
	'APPROVE_POSTS'			=> 'Godkende indlæg',
	'APPROVE_POSTS_CONFIRM'	=> 'Er du sikker på, at du vil godkende valgte indlæg?',
	'APPROVE_TOPIC'      => 'Godkend emne',
	'APPROVE_TOPIC_CONFIRM'  => 'Er du sikker på, at du vil godkende emnet?',
	'APPROVE_TOPICS'    => 'Godkend emner',
	'APPROVE_TOPICS_CONFIRM'=> 'Er du sikker på, at du vil godkende valgte emner?', 	

	'CANNOT_MOVE_SAME_FORUM'=> 'Du kan ikke flytte et emne til det forum, hvori det allerede befinder sig.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Du kan ikke udstede en advarsel til en ikke tilmeldt bruger.',
	'CANNOT_WARN_SELF'		=> 'Du kan ikke udstede en advarsel til dig selv.',
	'CAN_LEAVE_BLANK'		=> 'Behøves ikke at blive udfyldt.',
	'CHANGE_POSTER'			=> 'Ændre forfatter',
	'CLOSE_PM_REPORT'		=> 'Luk PB-rapport',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Er du sikker på, at du vil lukke denne PB-rapport?',
	'CLOSE_PM_REPORTS'		=> 'Luk PB-rapporter',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Er du sikker på, at du vil lukke disse PB-rapporter?',
	'CLOSE_REPORT'			=> 'Luk rapport',
	'CLOSE_REPORT_CONFIRM'	=> 'Er du sikker på, at du vil lukke denne rapport?',
	'CLOSE_REPORTS'			=> 'Luk rapporter',
	'CLOSE_REPORTS_CONFIRM'	=> 'Er du sikker på, at du vil lukke valgte rapporter?',

	'DELETE_PM_REPORT'			=> 'Slet PB-rapport',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Er du sikker på, at du vil slette denne PB-rapport?',
	'DELETE_PM_REPORTS'			=> 'Slet PB-rapporter',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Er du sikker på, at du vil slette disse PB-rapporter?',
	'DELETE_POSTS'			=> 'Slet indlæg',
	'DELETE_REPORT'			=> 'Slet rapport',
	'DELETE_REPORT_CONFIRM'	=> 'Er du sikker på, at du vil slette denne rapport?',
	'DELETE_REPORTS'		=> 'Slet rapporter',
	'DELETE_REPORTS_CONFIRM'	=> 'Er du sikker på, at du vil slette valgte rapporter?',
	'DELETE_SHADOW_TOPIC'	=> 'Slet skyggeemne',
	'DELETE_TOPICS'			=> 'Slet valgte emner',
	'DISAPPROVE'			=> 'Afvis',
	'DISAPPROVE_REASON'		=> 'Grund til afvisning',
	'DISAPPROVE_POST'		=> 'Afvis indlæg',
	'DISAPPROVE_POST_CONFIRM'	=> 'Er du sikker på, at du vil afvise dette indlæg?',
	'DISAPPROVE_POSTS'		=> 'Afvis indlæg',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Er du sikker på, at du vil afvise valgte indlæg?',
	'DISPLAY_LOG'			=> 'Vis datalog',
	'DISPLAY_OPTIONS'		=> 'Vis muligheder',

	'EMPTY_REPORT'			=> 'Du skal indtaste en beskrivelse når denne mulighed vælges.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Bemærk at et eller flere emner er slettet fra databasen, da de enten var eller blev tomme.',

	'FEEDBACK'				=> 'Brugernotater',
	'FORK'					=> 'Kopier',
	'FORK_TOPIC'			=> 'Kopier emne',
	'FORK_TOPIC_CONFIRM'	=> 'Er du sikker på, at du vil kopiere dette emne?',
	'FORK_TOPICS'			=> 'Kopier valgte emner',
	'FORK_TOPICS_CONFIRM'	=> 'Er du sikker på, at du vil kopiere valgte emner?',
	'FORUM_DESC'			=> 'Beskrivelse',
	'FORUM_NAME'			=> 'Forumnavn',
	'FORUM_NOT_EXIST'		=> 'Det valgte forum eksisterer ikke.',
	'FORUM_NOT_POSTABLE'	=> 'Du kan ikke skrive indlæg i det valgte forum.',
	'FORUM_STATUS'			=> 'Forumstatus',
	'FORUM_STYLE'			=> 'Forumtypografi',

	'GLOBAL_ANNOUNCEMENT'	=> 'Global bekendtgørelse',

	'IP_INFO'				=> 'Information om IP-adresse',
	'IPS_POSTED_FROM'		=> 'IP-adresser denne bruger har skrevet fra',

	'LATEST_LOGS'				=> 'De seneste 5 loggede handlinger',
	'LATEST_REPORTED'			=> 'De seneste 5 rapporter der afventer behandling',
	'LATEST_REPORTED_PMS'		=> 'De seneste 5 rapporter om private beskeder',
	'LATEST_UNAPPROVED'			=> 'De seneste 5 indlæg der afventer godkendelse',
	'LATEST_WARNING_TIME'		=> 'Brugers seneste advarsel',
	'LATEST_WARNINGS'			=> 'De seneste 5 advarsler',
	'LEAVE_SHADOW'				=> 'Efterlad skyggeemne i oprindelige forum',
	'LIST_REPORTS' => array(
		1 => '%d rapport',
		2 => '%d rapporter',
	),
	'LOCK'						=> 'Lås',
	'LOCK_POST_POST'			=> 'Lås indlæg',
	'LOCK_POST_POST_CONFIRM'	=> 'Er du sikker på, at du vil låse dette indlæg?',
	'LOCK_POST_POSTS'			=> 'Lås valgte indlæg',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Er du sikker på, at du vil låse disse indlæg?',
	'LOCK_TOPIC_CONFIRM'		=> 'Er du sikker på, at du vil låse dette emne?',
	'LOCK_TOPICS'				=> 'Lås valgte emner',
	'LOCK_TOPICS_CONFIRM'		=> 'Er du sikker på, at du vil låse alle de valgte emner?',
	'LOGS_CURRENT_TOPIC'		=> 'I øjeblikket kan logge ikke ses:',
	'LOGIN_EXPLAIN_MCP'			=> 'For at redigere i forummet skal du logge ind.',
	'LOGVIEW_VIEWPOST'			=> 'Se indlæg',
	'LOGVIEW_VIEWTOPIC'			=> 'Se emne',
	'LOGVIEW_VIEWLOGS'			=> 'Se emnets log',
	'LOGVIEW_VIEWFORUM'			=> 'Se forum',
	'LOOKUP_ALL'				=> 'Se alle IP-adresser',
	'LOOKUP_IP'					=> 'Se IP-adresse',

	'MARKED_NOTES_DELETED'		=> 'Alle valgte brugernotater er slettet.',

	'MCP_ADD'						=> 'Tilføj en advarsel',

	'MCP_BAN'					=> 'Udelukkelse',
	'MCP_BAN_EMAILS'			=> 'Udeluk e-mailadresser',
	'MCP_BAN_IPS'				=> 'Udeluk IP-adresser',
	'MCP_BAN_USERNAMES'			=> 'Udeluk brugere',

	'MCP_LOGS'						=> 'Redaktørlog',
	'MCP_LOGS_FRONT'				=> 'Forside',
	'MCP_LOGS_FORUM_VIEW'			=> 'Forumlogge',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Emnelogge',

	'MCP_MAIN'						=> 'Oversigt',
	'MCP_MAIN_FORUM_VIEW'			=> 'Se forum',
	'MCP_MAIN_FRONT'				=> 'Forside',
	'MCP_MAIN_POST_DETAILS'			=> 'Vis information',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Se emne',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Ændre til "Bekendtgørelse"',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Er du sikker på, at du vil ændre dette emne til en bekendtgørelse?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Ændre til "Bekendtgørelser"',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Er du sikker på, at du vil ændre de valgte emner til bekendtgørelser?',
	'MCP_MAKE_GLOBAL'				=> 'Ændre til "Global bekendtgørelse"',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Er du sikker på, at du vil ændre dette emne til en global bekendtgørelse?',
	'MCP_MAKE_GLOBALS'				=> 'Ændre til "Globale bekendtgørelser"',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Er du sikker på, at du vil ændre de valgte emner til globale bekendtgørelser?',
	'MCP_MAKE_STICKY'				=> 'Ændre til "Opslag"',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Er du sikker på, at du vil ændre dette emne til et opslag?',
	'MCP_MAKE_STICKIES'				=> 'Ændre til "Opslag"',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Er du sikker på, at du vil ændre de valgte emner til opslag?',
	'MCP_MAKE_NORMAL'				=> 'Ændre til "Standardemne"',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Er du sikker på, at du vil ændre dette emne til et standardemne?',
	'MCP_MAKE_NORMALS'				=> 'Ændre til "Standardemner"',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Er du sikker på, at du vil ændre de valgte emner til standardemner?',

	'MCP_NOTES'						=> 'Brugernotater',
	'MCP_NOTES_FRONT'				=> 'Forside',
	'MCP_NOTES_USER'				=> 'Brugerinformation',
	
	'MCP_POST_REPORTS'				=> 'Rapporter med baggrund i dette indlæg',

	'MCP_PM_REPORTS'				=> 'Rapporterede private beskeder',
	'MCP_PM_REPORT_DETAILS'			=> 'PB-rapportens indhold',
	'MCP_PM_REPORTS_CLOSED'			=> 'Lukkede PB-rapporter',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Alle behandlede rapporter om private beskeder.',
	'MCP_PM_REPORTS_OPEN'			=> 'Åbne PB-rapporter',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Disse PB-rapporter afventer behandling.',

	'MCP_REPORTS'					=> 'Rapporterede beskeder',
	'MCP_REPORT_DETAILS'			=> 'Indhold af rapport',
	'MCP_REPORTS_CLOSED'			=> 'Lukkede rapporter',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Alle behandlede rapporter om indlæg.',
	'MCP_REPORTS_OPEN'				=> 'Åbne rapporter',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Disse rapporter afventer behandling.',

	'MCP_QUEUE'								=> 'Godkendelseskø',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Godkend indhold',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Indlæg der afventer godkendelse',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Disse indlæg skal godkendes før de vises på boardet.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Emner der afventer godkendelse',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Disse emner skal godkendes før de vises på boardet.',
	'MCP_QUEUE_DELETED_POSTS'        => 'Skjulte indlæg',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'    => 'Du kan gendanne eller slette disse indlæg permanent fra denne side.',
	'MCP_QUEUE_DELETED_TOPICS'        => 'Skjulte emner',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'    => 'Du kan gendanne eller slette disse emner permanent fra denne side.',

	'MCP_VIEW_USER'			=> 'Vis advarsler til en specifik bruger',

	'MCP_WARN'				=> 'Advarsler',
	'MCP_WARN_FRONT'		=> 'Forside',
	'MCP_WARN_LIST'			=> 'Liste over advarsler',
	'MCP_WARN_POST'			=> 'Advarsler for et specifikt indlæg',
	'MCP_WARN_USER'			=> 'Advar bruger',

	'MERGE_POSTS_CONFIRM'	=> 'Er du sikker på, at du vil flytte de valgte indlæg?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Ved at bruge nedenstående kan du flytte valgte indlæg til et andet emne. Indlæg flyttes til nyt emne med uændrede indsendelsesdata og vil se ud som brugerne har skrevet dem i det nye emne.<br />Indtast venligst det emne indlæg skal flyttes til, eller klik på "Vælg emne" knappen for at søge efter det.',
	'MERGE_TOPIC_ID'		=> 'Det modtagende emnes identifikationsnummer',
	'MERGE_TOPICS'			=> 'Sammenlæg emner',
	'MERGE_TOPICS_CONFIRM'	=> 'Er du sikker på, at du vil sammenlægge de valgte emner?',
	'MODERATE_FORUM'		=> 'Rediger forum',
	'MODERATE_TOPIC'		=> 'Rediger emne',
	'MODERATE_POST'			=> 'Rediger indlæg',
	'MOD_OPTIONS'			=> 'Redigeringsmuligheder',
	'MORE_INFO'				=> 'Yderligere informationer',
	'MOST_WARNINGS'			=> 'Brugere med flest advarsler',
	'MOVE_TOPIC_CONFIRM'	=> 'Er du sikker på, at du vil flytte emnet til et nyt forum?',
	'MOVE_TOPICS'			=> 'Flyt valgte emner',
	'MOVE_TOPICS_CONFIRM'	=> 'Er du sikker på, at du vil flytte de valgte emner til et nyt forum?',

	'NOTIFY_POSTER_APPROVAL'=> 'Informer afsender om godkendelse?',
	'NOTIFY_POSTER_DISAPPROVAL' => 'Informer afsender om afvisning?',
	'NOTIFY_USER_WARN'		=> 'Informer bruger om advarsel?',
	'NOT_MODERATOR'			=> 'Du er ikke redaktør i dette forum.',
	'NO_DESTINATION_FORUM'	=> 'Vælg venligst det forum der skal modtage.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Der er intet modtageforum tilgængeligt.',
	'NO_ENTRIES'			=> 'Der er ingen logge.',
	'NO_FEEDBACK'			=> 'Der er ingen notater om denne bruger.',
	'NO_FINAL_TOPIC_SELECTED'	=> 'Du skal vælge et emne som skal modtage de indlæg du ønsker at samle.',
	'NO_MATCHES_FOUND'		=> 'Ingen sammenfald fundet.',
	'NO_POST'				=> 'Du skal vælge et indlæg for at advare brugeren om et indlæg.',
	'NO_POST_REPORT'		=> 'Dette indlæg blev ikke rapporteret.',
	'NO_POST_SELECTED'		=> 'Du skal vælge mindst et indlæg for at udføre denne handling.',
	'NO_POSTS_DELETED'      => 'Der er ingen skjulte indlæg.',
	'NO_POSTS_QUEUE'        => 'Ingen indlæg afventer godkendelse.',
	'NO_REASON_DISAPPROVAL'	=> 'Indtast venligst en fornuftig begrundelse for afvisningen.',
	'NO_REPORT'				=> 'Ingen rapport fundet.',
	'NO_REPORTS'			=> 'Ingen rapporter fundet.',
	'NO_REPORT_SELECTED'	=> 'Du skal vælge mindst en rapport for at udføre denne handling.',
	'NO_TOPIC_ICON'			=> 'Ingen',
	'NO_TOPIC_SELECTED'		=> 'Du skal vælge mindst et emne for at udføre denne handling.',
	'NO_TOPICS_DELETED'     => 'Der er ingen skjulte emner.',
	'NO_TOPICS_QUEUE'		=> 'Ingen emner afventer godkendelse.',

	'ONLY_TOPIC'			=> 'Kun emne "%s"',
	'OTHER_USERS'			=> 'Andre brugere der skriver fra denne IP-adresse',
	
	'QUICKMOD_ACTION_NOT_ALLOWED' => '"%s" er ikke tilladt som hurtigværktøj',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Den valgte PB-rapport er nu lukket.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Den valgte PB-rapport er nu slettet.',
	'PM_REPORTED_SUCCESS'		=> 'Denne private besked er nu rapporteret.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'De valgte PB-rapporter er nu lukket.',
	'PM_REPORTS_DELETED_SUCCESS'	=> 'De valgte PB-rapporter er nu slettet.',
	'PM_REPORTS_TOTAL'	=> array(
		0	=> 'Ingen ubehandlede PB-rapporter.',
		1	=> '<strong>1</strong> PB-rapport afventer behandling.',
		2	=> '<strong>%d</strong> PB-rapporter afventer behandling.',
	),
	'PM_REPORT_DETAILS'			=> 'PB-rapportens indhold',
	'POSTER'				=> 'Afsender',
	'POSTS_APPROVED_SUCCESS'=> 'De valgte indlæg er nu blevet godkendt.',
	'POSTS_DELETED_SUCCESS'	=> 'De valgte indlæg er nu blevet slettet fra databasen.',
	'POSTS_DISAPPROVED_SUCCESS'=> 'De valgte indlæg er nu blevet afvist.',
	'POSTS_LOCKED_SUCCESS'	=> 'De valgte indlæg er nu blevet låst.',
	'POSTS_MERGED_SUCCESS'	=> 'De valgte indlæg er nu blevet sammenlagt.',
	'POSTS_PER_PAGE'		=> 'Indlæg pr. side',
	'POSTS_PER_PAGE_EXPLAIN'=> '(Sæt til 0 for at se alle indlæg).',
	'POSTS_RESTORED_SUCCESS'  => 'De valgte indlæg er nu gendannet.',
	'POSTS_UNLOCKED_SUCCESS'=> 'De valgte indlæg er nu blevet låst op.',
	'POST_APPROVED_SUCCESS'	=> 'Det valgte indlæg er nu blevet godkendt.',
	'POST_DELETED_SUCCESS'	=> 'De valgte indlæg er nu blevet slettet fra databasen.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Det valgte indlæg er nu blevet afvist.',
	'POST_LOCKED_SUCCESS'	=> 'Indlægget er nu blevet låst.',
	'POST_NOT_EXIST'		=> 'Indlægget eksisterer ikke.',
	'POST_REPORTED_SUCCESS'	=> 'Indlægget er nu blevet rapporteret.',
	'POST_RESTORED_SUCCESS' => 'Indlægget er blevet gendannet.',
	'POST_UNLOCKED_SUCCESS'	=> 'Indlægget er nu blevet låst op.',

	'READ_USERNOTES'		=> 'Brugernotater',
	'READ_WARNINGS'			=> 'Brugeradvarsler',
	'REPORTER'				=> 'Rapporterende bruger',
	'REPORTED'				=> 'Rapporteret',
	'REPORTED_BY'			=> 'Rapporteret af',
	'REPORTED_ON_DATE'		=> '',	// bevidst udeladt
	'REPORTS_CLOSED_SUCCESS'	=> 'De valgte rapporter er nu blevet lukket.',
	'REPORTS_DELETED_SUCCESS'	=> 'De valgte rapporter er nu slettet.',
	'REPORTS_TOTAL'	=> array(
		0	=> 'Ingen ubehandlede rapporter.',
		1	=> '<strong>1</strong> rapport afventer gennemsyn.',
		2	=> '<strong>%d</strong> rapporter afventer gennemsyn.',
	),
	'REPORT_CLOSED'			=> 'Denne rapport er allerede lukket.',
	'REPORT_CLOSED_SUCCESS'	=> 'Den valgte rapport er nu blevet lukket.',
	'REPORT_DELETED_SUCCESS'	=> 'Den valgte rapport er nu blevet slettet.',
	'REPORT_DETAILS'		=> 'Rapportoplysninger',
	'REPORT_MESSAGE'		=> 'Rapporter denne besked',
	'REPORT_MESSAGE_EXPLAIN'=> 'Brug denne formular for at rapportere valgte private besked. Generelt skal man kun rapportere, hvis beskeder bryder med forummets regler. <strong>Når en privat besked rapporteres bliver indholdet synligt for alle redaktører.</strong>',
	'REPORT_NOTIFY'			=> 'Informer mig',
	'REPORT_NOTIFY_EXPLAIN'	=> 'Du modtager information når din rapport er behandlet.',
	'REPORT_POST_EXPLAIN'	=> 'Brug denne formular for at rapportere det valgte indlæg til boardets administratorer og redaktører. Generelt skal man kun rapportere, hvis indlæg bryder med forummets regler.',
	'REPORT_REASON'			=> 'Begrundelse for rapporten',
	'REPORT_TIME'			=> 'Rapporteret',
	'RESTORE'          => 'Gendan',
	'RESTORE_POST'        => 'Gendan indlæg',
	'RESTORE_POST_CONFIRM'    => 'Er du sikker på, at du vil gendanne dette indlæg?',
	'RESTORE_POSTS'        => 'Gendan indlæg',
	'RESTORE_POSTS_CONFIRM'    => 'Er du sikker på, at du vil gendanne valgte indlæg?',
	'RESTORE_TOPIC'        => 'Gendan emne',
	'RESTORE_TOPIC_CONFIRM'    => 'Er du sikker på, at du vil gendanne dette emne?',
	'RESTORE_TOPICS'      => 'Gendan emner',
	'RESTORE_TOPICS_CONFIRM'  => 'Er du sikker på, at du vil gendanne valgte emner?',
	'RESYNC'				=> 'Synkroniser',
	'RETURN_MESSAGE'		=> '%sTilbage til besked%s',
	'RETURN_NEW_FORUM'		=> '%sGå til det nye forum%s',
	'RETURN_NEW_TOPIC'		=> '%sGå til det nye emne%s',
	'RETURN_PM'					=> '%sTilbage til den private besked%s',
	'RETURN_POST'			=> '%sTilbage til indlægget%s',
	'RETURN_QUEUE'			=> '%sTilbage til køen%s',
	'RETURN_REPORTS'		=> '%sTilbage til rapporteringerne%s',
	'RETURN_TOPIC_SIMPLE'	=> '%sTilbage til emnet%s',

	'SEARCH_POSTS_BY_USER'	=> 'Vælg indlæg fra',
	'SELECT_ACTION'			=> 'Vælg ønskede handling',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Vælg venligst det forum hvori du ønsker denne globale bekendtgørelse vist.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Et eller flere af de valgte emner er globale bekendtgørelser. Vælg venligst det forum hvori du ønsker disse vist.',
	'SELECT_MERGE'			=> 'Vælg til sammenlægning',
	'SELECT_TOPICS_FROM'	=> 'Vælg emne fra',
	'SELECT_TOPIC'			=> 'Vælg emne',
	'SELECT_USER'			=> 'Vælg bruger',
	'SORT_ACTION'			=> 'Loghændelse',
	'SORT_DATE'				=> 'Dato',
	'SORT_IP'				=> 'IP-adresse',
	'SORT_WARNINGS'			=> 'Advarsler',
	'SPLIT_AFTER'			=> 'Del emne fra valgte indlæg og fremefter',
	'SPLIT_FORUM'			=> 'Forum til det nye emne',
	'SPLIT_POSTS'			=> 'Del valgte indlæg',
	'SPLIT_SUBJECT'			=> 'Nyt emne',
	'SPLIT_TOPIC_ALL'		=> 'Del emne fra valgte indlæg',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Er du sikker på, at du vil dele dette emne?',
	'SPLIT_TOPIC_BEYOND'	=> 'Del emnet ved valgte indlæg',
	'SPLIT_TOPIC_BEYOND_CONFIRM'	=> 'Er du sikker på, at du vil dele emnet ved valgte indlæg?',
	'SPLIT_TOPIC_EXPLAIN'	=> 'Ved at bruge nedenstående kan du dele et emne i to, enten ved at vælge indlæggene individuelt eller ved at dele ved et valgt indlæg.',

	'THIS_PM_IP'				=> 'Beskeden er afsendt fra IP-adressen',
	'THIS_POST_IP'			=> 'Indlægget er indsendt fra IP-adressen',
	'TOPICS_APPROVED_SUCCESS'	=> 'De valgte emner er nu blevet godkendt.',
	'TOPICS_DELETED_SUCCESS'=> 'De valgte emner er nu slettet fra databasen.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'De valgte emner er nu blevet afvist.',
	'TOPICS_FORKED_SUCCESS'	=> 'De valgte emner er nu blevet kopieret.',
	'TOPICS_LOCKED_SUCCESS'	=> 'De valgte emner er nu blevet låst.',
	'TOPICS_MOVED_SUCCESS'	=> 'De valgte emner er nu blevet flyttet.',
	'TOPICS_RESTORED_SUCCESS'  => 'De valgte emner er nu gendannet.',
	'TOPICS_RESYNC_SUCCESS'	=> 'De valgte emner er nu blevet resynkroniseret.',
	'TOPICS_TYPE_CHANGED'	=> 'Emnetype er blevet ændret.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'De valgte emner er nu blevet låst op.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Det valgte emne er nu blevet godkendt.',
	'TOPIC_DELETED_SUCCESS'	=> 'Det valgte emne er nu slettet fra databasen.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Det valgte emne er nu blevet afvist.',
	'TOPIC_FORKED_SUCCESS'	=> 'Det valgte emne er nu blevet kopieret.',
	'TOPIC_LOCKED_SUCCESS'	=> 'Det valgte emne er nu blevet låst.',
	'TOPIC_MOVED_SUCCESS'	=> 'Det valgte emne er nu blevet flyttet.',
	'TOPIC_NOT_EXIST'		=> 'Det valgte emne eksisterer ikke.',
	'TOPIC_RESTORED_SUCCESS'  => 'Det valgte emne er nu gendannet.',
	'TOPIC_RESYNC_SUCCESS'	=> 'Det valgte emne er nu blevet resynkroniseret.',
	'TOPIC_SPLIT_SUCCESS'	=> 'Det valgte emner er nu blevet delt.',
	'TOPIC_TIME'			=> 'Emnets tid',
	'TOPIC_TYPE_CHANGED'	=> 'Emnets type er ændret.',
	'TOPIC_UNLOCKED_SUCCESS'=> 'Det valgte emne er nu låst op.',
	'TOTAL_WARNINGS'		=> 'Antal advarsler i alt',

	'UNAPPROVED_POSTS_TOTAL'	=> array(
		0	=> 'Ingen indlæg afventer godkendelse.',
		1	=> '1 indlæg afventer godkendelse.',
		2	=> '<strong>%d</strong> indlæg afventer godkendelse.',
	),
	'UNLOCK'						=> 'Lås op',
	'UNLOCK_POST'					=> 'Lås op for indlæg',
	'UNLOCK_POST_EXPLAIN'			=> 'Tillad ændringer',
	'UNLOCK_POST_POST'				=> 'Lås op for indlæg',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Er du sikker på, at du vil tillade ændringer i dette indlæg?',
	'UNLOCK_POST_POSTS'				=> 'Lås op for de valgte indlæg',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Er du sikker på, at du vil tillade ændringer i de valgte indlæg?',
	'UNLOCK_TOPIC'					=> 'Lås op for emne',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Er du sikker på, at du vil låse op for dette emne?',
	'UNLOCK_TOPICS'					=> 'Lås op for valgte emner',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Er du sikker på, at du vil låse op for de valgte emner?',
	'USER_CANNOT_POST'				=> 'Du kan ikke skrive indlæg i dette forum.',
	'USER_CANNOT_REPORT'			=> 'Du kan ikke rapportere indlæg i dette forum.',
	'USER_FEEDBACK_ADDED'			=> 'Brugernotat er nu tilføjet.',
	'USER_WARNING_ADDED'			=> 'Bruger er nu advaret.',

	'VIEW_DETAILS'			=> 'Vis information',
	'VIEW_PM'				=> 'Vis privat besked',
	'VIEW_POST'					=> 'Vis indlæg',

	'WARNED_USERS'			=> 'Brugere med advarsler',
	'WARNED_USERS_EXPLAIN'	=> 'Endnu ikke udløbne advarsler.',
	'WARNING_PM_BODY'		=> 'Dette er en advarsel udstedt af en administrator eller redaktør på denne side.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Advarsel givet',
	'WARNING_POST_DEFAULT'	=> 'Dette er en advarsel vedrørende det indlæg du har skrevet: %s.',
	'NO_WARNINGS'	=> 'Ingen advarsler.',

	'YOU_SELECTED_TOPIC'	=> 'Du valgte emne nummer %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off topic',
			'OTHER'		=> 'Andet',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Indlægget indeholder links til illegal eller piratsoftware.',
			'SPAM'		=> 'Indlægget har kun til formål at reklamere for et websted eller et produkt.',
			'OFF_TOPIC'	=> 'Indlægget er off topic.',
			'OTHER'		=> 'Indlægget kan ikke kategoriseres. Anvend feltet "Yderligere information".'
		),
	),
));
