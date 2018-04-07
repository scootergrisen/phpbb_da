<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: cli.php 589 2018-01-20 07:54:36Z jan_skovsgaard $
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Vælg denne mulighed hvis konfigurationen ændres så ofte at den ikke bliver korrekt mellemlagret.',
	'CLI_CONFIG_CURRENT'				=> 'Nuværende konfigurationsværdi, brug 0 og 1 til at specificere boolske værdier',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfigurationen %s blev slettet.',
	'CLI_CONFIG_NEW'					=> 'Ny konfigurationsværdi, brug 0 og 1 til at specificere boolske værdier',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfigurationen %s eksisterer ikke',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfigurationmulighedens navn',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Anvend denne option hvis værdien skal printes uden ny linje ved afslutningen.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Værdi optælling øges med',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Optælling af konfigurationen %s blev gennemført',
	'CLI_CONFIG_SET_FAILURE'			=> 'Kunne ikke indstille konfigurationen %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Konfigurationen %s indstillet',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Print parate og ikke parate cron-opgaver.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Afvikler alle definerede cron-opgaver.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Navnet på den opgave der skal afvikles',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Vis alle installerede og tilgængelige migrationer.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Databasen opdateres ved at tilføre migrationer.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Tilbagefør en migration.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Sletter en konfigurationmulighed',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Deaktiverer anførte udvidelser.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Aktiverer anførte udvidelser.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Finder migrationer som ikke er afhængig af.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Reparerer træstrukturen på fora og moduler.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Finder en konfigurationmuligheds værdi',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Foretag optælling af en konfigurationmuligheds heltalsværdi',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Viser alle udvidelser i databasen og filsystemet.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Miljønavn.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Kør i fejlsikret tilstand (uden udvidelser).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Start kommandofortolker.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Tømmer den indtastede udvidelse.',

	'CLI_DESCRIPTION_REPARSER_LIST'				=> 'Vis typer af tekst der kan genfortolkes.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'		=> 'Tilgængelige genfortolkere:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> 'Genfortolker lagret tekst med den øjeblikkelige tekstformateringstjeneste.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> 'Teksttype der kan genfortolkes. Undlades at udfylde, genfortolkes alt.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Gem ingen ændringer, vis kun hvad der vil blive foretaget',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Lavest record ID der skal udføres',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Højeste record ID der skal udføres',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Cirka antal records der skal udføres på en gang',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Start genfortolkning hvor den sidste udførsel stoppede',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Genberegner kolonnen user_email_hash i tabellen users.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Indstiller kun værdien på en konfigurationmulighed hvis den tidligere værdi svarer til den nuværende',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Indstiller værdien på en konfigurationmulighed',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Slet alle eksisterende miniaturer.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Dan alle manglende miniaturer.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Gendan alle miniaturer.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Kontroller om boardet er opdateret.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Navnet på den udvidelse der skal kontrolleres (indtast all, hvis alle udvidelser skal kontrolleres)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Udfør kontrollen med mellemlager.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Vælg at udføre kontrollen på kun frigivne versioner eller udviklingsversioner.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Opdaterer forældet kryptering af adgangskode til kryptering med bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" er ikke en gyldig versionsangivelse.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktiver (eller deaktiver) en brugerkonto.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Brugernavn på den konto der skal aktiveres.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Deaktiver brugers konto',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Bruger er allerede aktiveret.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Bruger er allerede deaktiveret.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Tilføj ny bruger.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Ny brugers brugernavn',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Ny brugers adgangskode',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Ny brugers email-adresse',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Send email med kontoaktivering til ny bruger(den afsendes ikke som standard)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Slet en brugerkonto.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Brugernavn på den bruger der skal slettes',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Slet alle brugers indlæg. Undlades denne mulighed, bevares brugers indlæg.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Rens brugernavne.',
	
	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Udvidelsen %s kunne ikke deaktiveres',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Udvidelsen %s blev deaktiveret',
	'CLI_EXTENSION_DISABLED'			=> 'Udvidelsen %s er ikke aktiv',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Udvidelsen %s kunne ikke aktiveres',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Udvidelsen %s blev aktiveret',
	'CLI_EXTENSION_ENABLED'				=> 'Udvidelsen %s er allerede aktiv',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Udvidelsen %s eksisterer ikke',
	'CLI_EXTENSION_NAME'				=> 'Udvidelsens navn',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Udvidelsen %s kunne ikke slettes',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Udvidelsen %s blev slettet',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Udvidelsen %s kunne ikke opdateres',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Udvidelsen %s blev korrekt opdateret',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Ingen udvidelser fundet.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Udvidelsen %s kan ikke aktiveres.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Tilgængelig',
	'CLI_EXTENSIONS_DISABLED'			=> 'Deaktiveret',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktiveret',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Reparation af fora og modulers træstruktur fuldført.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Genberegning af alle email-krypteringer gennemført.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Opdatering af forældet  kryptering af adgangskode til bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Migrationsnavn, inklusiv navnerum (anvend retvendt skråstreg i stedet for omvendt skråstreg for at undgå problemer).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Tilgængelige migrationer',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Installerede migrationer',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Vis kun tilgængelige migrationer',
	'CLI_MIGRATIONS_EMPTY'                  => 'Ingen migrationer.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Genfortolker %1$s (område %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Genfortolker %s…',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Genfortolkning afsluttet med succes',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) slettet.',
	'CLI_THUMBNAIL_DELETING'	=> 'Sletter miniaturer',
	'CLI_THUMBNAIL_SKIPPED'		=> 'Sprang over %1$s (%2$s).',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) dannet.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Danner miniaturer',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Alle miniaturer er gendannet.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Alle miniaturer er slettet.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Der er ingen miniaturer at danne.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Der er ingen miniaturer at slette.',

	'CLI_USER_ADD_SUCCESS'		=> 'Bruger %s er tilføjet.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Er du sikker på, at du vil slette "%s"? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Rens brugernavne',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Udført. Ingen brugernavne behøvede rensning.',
		1	=> 'Udført. %d brugernavn blev renset.',
		2	=> 'Udført. %d brugernavne blev renset.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Alternativt kan du indtaste et navn, som kun skal afvikle den specifikke cron-opgave.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktiver eller deaktiver en brugerkonto ved at bruge funktionen <info>--deactivate</info>.
	For, i samme forbindelse, at sende en aktiveringsemail til brugeren bruges funktionen <info>--send-email</info>.',
	 	'CLI_HELP_USER_ADD'			=> 'Kommandoen <info>%command.name%</info> tilføjer en ny bruger:
		Afvikles kommandoen uden funktioner, bliver du bedt om at indtaste disse.
		For, i samme forbindelse, at sende en email til den nye bruger, bruges funktionen <info>--send-email</info>.',
		'CLI_HELP_USER_RECLEAN'		=> 'Funktionen rens brugernavne gennemgår alle lagrede brugernavne sikrer at rensede udgaver også er gemt. I et renset brugernavn er det underordnet om man anvender store eller små bogstaver, teksten er normaliseret til NFC og konverteret til ASCII.',
));
