<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * @modified and translated by Olympus DK Team
 * @version $Id: install.php 592 2018-01-20 08:38:08Z jan_skovsgaard $
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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Installationspanel',
	'SELECT_LANG'	=> 'Vælg sprog',

	'STAGE_INSTALL'	=> 'Installerer phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introduktion',
	'INTRODUCTION_BODY'		=> 'Velkommen til phpBB3!<br /><br />phpBB® er verdens mest anvendte bulletin board-løsning, baseret på Open Source. phpBB3 er den seneste version i rækken af udgivelser startet i 2000. Som forgængerne er phpBB3 fyldt med funktioner, er brugervenlig og med fuld support fra phpBB Team. Det der gjorde phpBB2 så populær er yderligere forbedret i phpBB3, og tilfører desuden ofte ønskede muligheder, som ikke er tilstede i tidligere versioner. Vi håber phpBB3 overgår dine forventninger.<br /><br />Installationsystemet leder dig gennem den grundlæggende installation af phpBB3, opdatering til seneste version af phpBB3 fra tidligere udgivelser, og tillige konvertering fra andre boardsystemer til phpBB3 (phpBB2 inkluderet). Ønsker du mere information, anbefaler vi dig at læse <a href="../docs/INSTALL.html">installationsvejledningen</a>.<br /><br />I sidemenuen kan du vælge at læse phpBB3-licensen og finde ud af hvordan du kan få support og vor holdning til at yde support. Vælg venligst det rette faneblad foroven for at forsætte.',

	// Support page
	'SUPPORT_TITLE'		=> 'Support',
	'SUPPORT_BODY'		=> 'Der ydes fuld gratis support til denne stabile udgivelse af phpBB3. Supporten inkluderer:</p><ul><li>installation</li><li>konfiguration</li><li>tekniske spørgsmål</li><li>problemer relateret til potentielle fejl i softwaren</li><li>opdatering fra release candidate-versioner (RC) til den senest stabile version</li><li>konvertering fra phpBB 2.0.x til phpBB3</li><li>konvertering fra andre boardsystemer til phpBB3 (se venligst <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Vi opfordrer brugere, der stadig anvender Beta-versioner af phpBB3, til at erstatte installationen med en frisk kopi af den seneste version.</p><h2>Udvidelser og typografier</h2><p>Spørgsmål angående udvidelser bedes stillet i <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />Spørgsmål angående typografier, skabeloner og temaer bedes stillet i <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Angår dit spørgsmål en bestemt pakke, bedes du indsende det direkte i emnet omhandlende denne pakke.</p><h2>Få support</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBB velkomstpakken</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Engelsk Quick Start Guide</a><br /><br />Hvis du <a href="https://www.phpbb.com/support/">tilmelder dig vores mailingliste</a> sikrer du, at du bliver holdt opdateret med de seneste nyheder og udgivelser.<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Velkommen til installationen',
	'INSTALL_INTRO_BODY'	=> 'Med denne funktion er det muligt at installere phpBB3 på din server.</p><p>For at fortsætte skal du have dine databaseindstillinger klarlagt. Hvis du ikke kender dine databaseindstillinger, kontakt da venligst din vært. Uden disse kan du ikke fortsætte installationen. Du skal bruge følgende informationer:</p>
	
	<ul>
		<li>Databasetype - databasen du vil bruge.</li>
		<li>Databaseserverens værtsnavn eller DSN - adressen på serveren.</li>
		<li>Databaseserverens port - den port hvorpå phpBB3 skal kommunikere med serveren (denne er som regel helt unødvendig).</li>
		<li>Databasenavnet - databasens navn på ovennævnte server.</li>
		<li>Brugernavnet og adgangskoden til databasen - loginoplysninger for at få adgang til databasen.</li>
	</ul>

	<p><strong>Bemærk:</strong> Hvis du ønsker at anvend SQLite, skal du indtaste den fulde sti til din databasefil i DSN-feltet, og efterlade felterne for brugernavn og adgangskode tomme. Af hensyn til sikkerheden bør du sikre dig, at man ikke kan få direkte adgang til databasefilen fra Internettet.</p>
	
	<p>phpBB3 understøtter følgende databasetyper:</p>
	<ul>
		<li>MySQL 3.23 eller nyere (MySQLi er understøttet)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 eller nyere (direkte eller via ODBC)</li>
		<li>MS SQL Server 2005 eller nyere (indbygget)</li>
		<li>Oracle</li>
	</ul>
	
	<p>På næste side vises kun de databasetyper der understøttes af din server.',

	'ACP_LINK'	=> 'Gå til <a href="%1$s">ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB er allerede installeret.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB er endnu ikke installeret.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Filen findes ikke',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'For at kunne installere phpBB skal filen %1$s være til stede.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'For at give brugere af boardet den bedste oplevelse, anbefales det at filen %1$s er til stede.',
	'FILE_NOT_WRITABLE'						=> 'Der kan ikke skrives til filen',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'For at kunne installere phpBB skal der kunne skrives til filen %1$s.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'For at give brugere af boardet den bedste oplevelse, anbefales det at der skal kunne skrives til filen %1$s.',

	'DIRECTORY_NOT_EXISTS'						=> 'Mappen findes ikke',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'For at kunne installere phpBB skal mappen %1$s være til stede.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'For at give brugere af boardet den bedste oplevelse, anbefales det at mappen %1$s er til stede.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Der kan ikke skrives til mappen.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'For at kunne installere phpBB skal der kunne skrives til mappen %1$s.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'For at give brugere af boardet den bedste oplevelse, anbefales det at der skal kunne skrives til mappen %1$s.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP-version',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB kræver PHP version 5.4.0 eller højere.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP\'s funktion getimagesize() er nødvendig',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Krævet</strong> - For at få phpBB til at virke korrekt er funktionen getimagesize nødvendig.',
	'PCRE_UTF_SUPPORT'					=> 'Understøttelse af PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB vil <strong>ikke</strong> fungere hvis din PHP-installation ikke er kompileret med understøttelse af UTF-8 i PCRE-udvidelsen.',
	'PHP_JSON_SUPPORT'					=> 'Understøttelse af PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'For at få phpBB til at fungere korrekt, er det nødvendigt at udvidelsen PHP JSON er tilgængelig.',
	'PHP_XML_SUPPORT'					=> 'Understøttelse af PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'For at få phpBB til at fungere korrekt, er det nødvendigt at udvidelsen PHP XML/DOM er tilgængelig.',
	'PHP_SUPPORTED_DB'					=> 'Understøttede databaser',
	'PHP_SUPPORTED_DB_EXPLAIN'			=>	'<strong>Krævet</strong> - Du skal have understøttelse for mindst en kompatibel database i PHP. Hvis der ikke er vist nogen moduler som værende tilgængelige, bør du kontakte din vært eller gennemgå dokumentationen for din PHP-installation for yderligere hjælp.',

	'RETEST_REQUIREMENTS'	=> 'Gentest om krav er opfyldt',

	'STAGE_REQUIREMENTS'	=> 'Krav',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Du skal udfylde samtlige felter i denne blok.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Installationen registrerede en timeout',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Installationsprocessen har registreret en timeout. Du kan forsøge at genindlæse siden. Det kan i værste tilfælde ødelægge data, som et alternativ foreslår vi at, du enten øger dine indstillinger for timeout, eller anvender CLIen.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Indstil installationsdata',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administratordetaljer',

	// Form labels
	'ADMIN_CONFIG'				=> 'Administratorkonfiguration',
	'ADMIN_PASSWORD'			=> 'Adgangskode for administrator',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bekræft administratoradgangskode',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Vælg en adgangskode på mindst 6 og højst 30 tegn.',
	'ADMIN_USERNAME'			=> 'Brugernavn for administrator',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Vælg et brugernavn på mindst 3 og højst 20 tegn.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Den indtastede e-mailadresse er ugyldig.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'De indtastede adgangskoder matchede ikke.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Den indtastede adgangskode er for langt. Den maksimale længde er 30 tegn.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Den indtastede adgangskode er for kort. Den minimale længde er 6 tegn.',
	'INST_ERR_USER_TOO_LONG'		=> 'Brugernavnet du indtastede er for langt. Den maksimale længde er 20 tegn.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Brugernavnet du indtastede er for kort. Den minimale længde er 3 tegn.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Boardkonfiguration',
	'DEFAULT_LANGUAGE'	=> 'Standardsprog',
	'BOARD_NAME'		=> 'Boardets titel',
	'BOARD_DESCRIPTION'	=> 'Kort beskrivelse af boardet',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Databaseindstillinger',

	// Form labels
	'DB_CONFIG'				=> 'Databasekonfiguration',
	'DBMS'					=> 'Databasetype',
	'DB_HOST'				=> 'Værtsnavn for databaseserver eller DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN står for Data Source Name og er kun relevant for ODBC-installationer. Ved PostgreSQL anvendes localhost til at forbinde til lokal server via UNIX domain socket og 127.0.0.1 til at forbinde via TCP. Ved SQLite indtastes den komplette sti til databasefilen.',
	'DB_PORT'				=> 'Port for databaseserver',
	'DB_PORT_EXPLAIN'		=> 'Udfyldes kun hvis serveren ikke kommunikerer på standardporten.',
	'DB_PASSWORD'			=> 'Adgangskode for databasebruger',
	'DB_NAME'				=> 'Databasenavn',
	'DB_USERNAME'			=> 'Navn på databasebruger',
	'DATABASE_VERSION'		=> 'Databaseversion',
	'TABLE_PREFIX'			=> 'Præfiks for tabeller i database',
	'TABLE_PREFIX_EXPLAIN'	=> 'Præfikset skal starte med et bogstav, og må ellers kun indeholde bogstaver, tal og underscores.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Indbygget ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL med MySQLi-udvidelse',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Kan ikke indlæse PHP-modulet til den valgte databasetype.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Tabelpræfikset du har indtastet er ugyldigt. Præfix skal starte med et bogstav, og kun bestå af bogstaver, tal og underscores.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Tabelpræfikset du har indtastet er for langt. Den maksimale længde er %d tegn.',
	'INST_ERR_DB_NO_NAME'			=> 'Intet databasenavn indtastet.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Den indtastede databasefil findes i dine boardmapper. Du bør anbringe denne fil et sted hvor den ikke kan tilgås fra nettet.',
	'INST_ERR_DB_CONNECT'			=> 'Kunne ikke forbinde til databasen, se fejlmeddelelsen herunder.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Der skal skulle kunne skrives til både databasen og den mappe hvori den befinder sig.',
	'INST_ERR_DB_NO_ERROR'			=> 'Ingen fejlmeddelelse.',
	'INST_ERR_PREFIX'				=> 'Tabeller med det indtastede præfiks findes allerede, indtast venligst et alternativ.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Versionen af MySQL installeret på denne server er ikke kompatibel med den valgte indstilling "MySQL med MySQLi-udvidelse". Prøv venligst indstillingen "MySQL" i stedet for.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Den installerede version af SQLite udvidelsen er for gammel, den skal opdateres til mindst 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Den installerede version af Oracle på denne server kræver at du sætter parameteret <var>NLS_CHARACTERSET</var> til <var>UTF8</var>. Opdater venligst enten din installation til 9.2+ eller korriger indstillingen af parameteret.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Den valgte database blev ikke oprettet i <var>UNICODE</var>- eller <var>UTF8</var>-kodning. Prøv at installere med en database i <var>UNICODE</var>- eller <var>UTF8</var>-kodning.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Der kan ikke skrives til skemafilen',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mailkonfiguration',

	// Package info
	'PACKAGE_VERSION'				=> 'Pakke version installeret',
	'UPDATE_INCOMPLETE'				=> 'Din phpBB-installation blev ikke korrekt opdateret.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Læs venligst nedenstående information, for at løse denne fejl.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Ukomplet opdatering</h1>

		<p>Vi bemærkede at den seneste opdatering af din phpBB-installation ikke blev fuldført. Klik på <a href="%1$s" title="%1$s">databaseopdatering</a>, og kontroller at <em>Opdater kun database</em> er valgt, klik herefter på <strong>Indsend</strong>. Husk at slette "install"-mappen når databasen er korrekt opdateret.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Der er en ny udgivelse <strong>%1$s</strong> tilgængelig. Læs om de nye funktioner i <a href="%2$s" title="%2$s"><strong>udgivelsesbekendtgørelsen</strong></a>, og hvordan du foretager en opdatering.',
	'SERVER_CONFIG'				=> 'Serverkonfiguration',
	'SCRIPT_PATH'				=> 'Sti til script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Stien hvor phpBB er placeret relativt til domænenavnet, for eksempel <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Tak, ledelsen',
	'CONFIG_SITE_DESC'				=> 'En kort tekst til at beskrive dit board',
	'CONFIG_SITENAME'				=> 'eksempel.dk',

	'DEFAULT_INSTALL_POST'			=> 'Dette er et eksempel på et indlæg på dit nye phpBB3-board. Alt ser ud til at fungere! Du kan slette dette indlæg, hvis du har lyst, og fortsætte opsætningen af dit board. Under installationen er din første kategori og dit første forum tildelt et passende sæt tilladelser for de prædefinerede brugergrupper, administratorer, botter, globale redaktører, gæster, tilmeldte brugere og tilmeldte COPPA-brugere. Hvis du vælger også at slette din første kategori og dit første forum, skal du huske at tildele tilladelser for samtlige disse brugergrupper for alle nye kategorier og fora du opretter. Det anbefales derfor at omdøbe din første kategori og dit første forum og kopiere tilladelser fra disse ved oprettelsen af nye kategorier og fora. God fornøjelse!',

	'FORUMS_FIRST_CATEGORY'			=> 'Din første kategori',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beskrivelse af dit første forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Dit første forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator',
	'REPORT_WAREZ'					=> 'Det rapporterede indlæg indeholder link til illegal software.',
	'REPORT_SPAM'					=> 'Det rapporterede indlæg har kun til formål at annoncere for et websted eller et produkt.',
	'REPORT_OFF_TOPIC'				=> 'Det rapporterede indlæg er off topic.',
	'REPORT_OTHER'					=> 'Det rapporterede indlæg kan ikke placeres i nogen af de foruddefinerede kategorier. Anvend feltet "Yderligere information".',

	'SMILIES_ARROW'					=> 'Pil',
	'SMILIES_CONFUSED'				=> 'Forvirret',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Græder',
	'SMILIES_EMARRASSED'			=> 'Flov',
	'SMILIES_EVIL'					=> 'Ond',
	'SMILIES_EXCLAMATION'			=> 'Udråbstegn',
	'SMILIES_GEEK'					=> 'Nørd',
	'SMILIES_IDEA'					=> 'Ide',
	'SMILIES_LAUGHING'				=> 'Griner',
	'SMILIES_MAD'					=> 'Sur',
	'SMILIES_MR_GREEN'				=> 'Hr. Grøn',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Spørgsmål',
	'SMILIES_RAZZ'					=> 'Ivrig',
	'SMILIES_ROLLING_EYES'			=> 'Rullende øjne',
	'SMILIES_SAD'					=> 'Trist',
	'SMILIES_SHOCKED'				=> 'Chokeret',
	'SMILIES_SMILE'					=> 'Smil',
	'SMILIES_SURPRISED'				=> 'Overrasket',
	'SMILIES_TWISTED_EVIL'			=> 'Meget ond',
	'SMILIES_UBER_GEEK'				=> 'Meganørd',
	'SMILIES_VERY_HAPPY'			=> 'Meget glad',
	'SMILIES_WINK'					=> 'Blink',

	'TOPICS_TOPIC_TITLE'			=> 'Velkommen til phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Oversigt',
	'MENU_INTRO'		=> 'Introduktion',
	'MENU_LICENSE'		=> 'Licens',
	'MENU_SUPPORT'		=> 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Opretter konfigurationsfil',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Tilføjer konfigurationsindstillinger',
	'TASK_ADD_DEFAULT_DATA'				=> 'Tilføjer standardindstillinger til databasen',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Opretter databaseskemafil',
	'TASK_SETUP_DATABASE'				=> 'Indstiller database',
	'TASK_CREATE_TABLES'				=> 'Opretter tabeller',

	// Install data
	'TASK_ADD_BOTS'				=> 'Tilmelder botter',
	'TASK_ADD_LANGUAGES'		=> 'Installerer tilgængelige sprog',
	'TASK_ADD_MODULES'			=> 'Installerer moduler',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Danner søgeindeks',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Installerer udvidelsepakker',
	'TASK_NOTIFY_USER'			=> 'Send notifikation med e-mail',
	'TASK_POPULATE_MIGRATIONS'	=> 'Udfyld migrationer',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Installationen afsluttede med succes',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul ikke fundet',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Et modul blev ikke fundet fordi tjenesten, %s, ikke er defineret.',

	'TASK_NOT_FOUND'				=> 'Opgave ikke fundet',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'En opgave blev ikke fundet fordi tjenesten, %s, ikke er defineret.',

	'SKIP_MODULE'	=> 'Ignorer modulet "%s"',
	'SKIP_TASK'		=> 'Ignorer opgaven "%s"',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Alle installationens opgavetjenester bør starte med "installer"',
	'TASK_CLASS_NOT_FOUND'				=> 'Definitionen for installationens opgavetjeneste er ugyldig. Tjenestens navn er "%1$s", det forventede class navnerum er "%2$s". Læs mere information i dokumentationen af task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Der kunne ikke skrives til installationens konfigurationsfil.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Installer phpBB',
	'CLI_UPDATE_BOARD'				=> 'Opdater phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Vis den konfiguration som vil blive anvendt',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Valider en konfigurationsfil',
	'CLI_CONFIG_FILE'				=> 'Konfigurationsfil der skal anvendes',
	'MISSING_FILE'					=> 'Kunne ikke tilgå filen %1$s',
	'MISSING_DATA'					=> 'Konfigurationsfilen mangler data eller indeholder ugyldige indstillinger.',
	'INVALID_YAML_FILE'				=> 'YAML-filen %1$s kunne ikke fortolkes',
	'CONFIGURATION_VALID'			=> 'Konfigurationsfilen er godkendt',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Opdater phpBB-installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Du har nu mulighed for at opdatere din phpBB-installation til den seneste version.<br />Alle dine filer bliver i processen kontrolleret for deres integritet. Du får forud for opdateringen af filerne mulighed for selv at kontrollere filforskelle i de filer opdateringsprocessen måtte foretage ændringer i.<br /><br />Selve filopdateringen kan foretages på to forskellige måder.</p><h2>Manuel opdatering</h2><p>Med denne metode downloader du dit personlige sæt af de ændrede filer for at sikre du ikke mister de filmodifikationer, du måtte have foretaget. Efter at du har downloadet denne pakke er det nødvendigt at du manuelt uploader filerne til deres korrekte placering under din phpBB-rodmappe. Når dette er gjort, er du i stand til at gennemføre trinet for filkontrol igen for at se om du flyttede filerne til deres korrekte placering.</p><h2>Automatisk opdatering med FTP</h2><p>Denne metode ligner den første, men er uden behov for at du selv downloader de ændrede filer og uploader dem. Dette vil blive gjort for dig. For at anvende denne metode bliver du undervejs bedt om kontoinformation for FTP. Efter afslutning vil du blive viderestillet til filkontrollen igen for at sikre at alt blev opdateret korrekt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Udgivelsesbekendtgørelse</h1>

		<p>Læs venligst udgivelsesbekendtgørelsen for den seneste version før du fortsætter din opdateringsprocedure, den kan indeholde nyttig information. Den indeholder såvel fulde downloadlinks som ændringsloggen.</p>

		<br />

		<h1>Sådan opdaterer du din installation med den automatiske opdateringspakke (Automatic Update Package)</h1>

		<p>Den her beskrevne metode for opdatering af din installation, gælder kun for opdatering med den automatiske opdateringspakke. Der findes to andre opdateringsmetoder, de er beskrevet i INSTALL.html. For at udføre en automatisk opdatering, skal disse trin udføres:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Gå til <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com</a> og download pakken "Automatic Update Package", i det pakkeformat du foretrækker.<br /><br /></li>
			<li>Udpak pakken<br /><br /></li>
			<li>Upload de fuldstændige, og ikke komprimerede mapper "install" og "vendor" til din phpBB-rodmappe (hvor din config.php-fil er).<br /><br /></li>
		</ul>

		<p>Når upload har fundet sted, vil dit board være offline for normale brugere, fordi install-mappen nu er tilstede.<br /><br />
		<strong><a href="%1$s" title="%1$s">Begynd nu opdateringsproceduren ved at pege din browser på install-mappen</a>.</strong><br />
		<br />
		Du bliver ledt gennem hele opdateringsproceduren, og bliver informeret når denne er fuldført.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Hvilken type opdatering skal udføres',

	'UPDATE_TYPE_ALL'		=> 'Opdater filsystem og database',
	'UPDATE_TYPE_DB_ONLY'	=> 'Opdater kun database',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Filopdateringsmetoder',

	'UPDATE_FILE_METHOD'			=> 'Filopdateringsmetode',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Download ændrede filer i en pakket fil',
	'UPDATE_FILE_METHOD_FTP'		=> 'Opdater filer via FTP (automatisk)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Opdater filer via direkte filadgang (automatisk)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Vælg pakkeformat for fil',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP-indstillinger',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Ingen gyldig opdateringsmappe fundet. Undersøg venligst om du fik uploadet de relevante filer.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Din version er opdateret. Der er ikke behov for at køre opdateringsværktøjet. Hvis du ønsker at foretage en integritetskontrol af dine filer, skal du sørge for at uploade de korrekte opdateringsfiler.',
	'OLD_UPDATE_FILES'				=> 'Opdateringsfilerne er ikke opdaterede, de kan anvendes til at opdatere fra phpBB %1$s til phpBB %2$s. Den seneste version af phpBB er %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'De fundne opdateringsfiler er ikke kompatible med din installerede version. Din version er %1$s og opdateringsfilerne er til opdatering af phpBB %2$s til %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Opdater filer',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Kontroller filer der skal opdateres',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Filkontrollen kunne ikke åbne %s.',

	'UPDATE_FILE_DIFF'		=> 'Kontrollerer ændrede filer',
	'ALL_FILES_DIFFED'		=> 'Alle ændrede filer er blevet kontrolleret.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Opdater filer',

	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_CONFLICTS'				=> 'Download konflikter for denne fil',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Søg efter &lt;&lt;&lt; for at finde konflikter',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download arkiv med ændrede filer',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Når du har downloadet og udpakket filen indeholdende alle de ændrede filer, uploades disse til deres rette placering i din phpBB-installation. Filerne bør herefter kontrolleres endnu gang med venstre knap nedenfor.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Fil er allerede opdateret.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Visning af filforskelle tillades ikke.',
	'FILE_USED'						=> 'Information brugt fra',			// Single file
	'FILES_CONFLICT'				=> 'Konfliktende filer',
	'FILES_CONFLICT_EXPLAIN'		=> 'Følgende filer er modificeret i forhold til det originale indhold af den version du opdaterer fra. phpBB mener at disse filer vil skabe konflikter hvis de forsøges sammenlagt. Undersøg venligst konflikterne og prøv manuelt at løse dem eller fortsæt opdateringen ved at vælge den foretrukne sammenlægningsmetode. Hvis du løser konflikterne manuelt, kontroller filerne igen efter du har ændret dem. Du kan også vælge den foretrukne sammenlægningsmetode for hver fil. Den første vil resultere i en fil, hvor linier med konflikter mistes, den anden vil resultere i at ændringerne fra den nye fil mistes.',
	'FILES_DELETED'					=> 'Slettede filer',
	'FILES_DELETED_EXPLAIN'			=> 'Følgende filer findes ikke i den nye version. Disse filer skal derfor slettes i din installation.',
	'FILES_MODIFIED'				=> 'Ændrede filer',
	'FILES_MODIFIED_EXPLAIN'		=> 'Følgende filer er modificeret i forhold til det originale indhold af den version du opdaterer fra. Den opdaterede fil vil bestå af en sammenlægning af disse modifikationer og indholdet af den nye fil.',
	'FILES_NEW'						=> 'Nye filer',
	'FILES_NEW_EXPLAIN'				=> 'Følgende filer eksisterer for nuværende ikke i din installation. Disse tilføjes automatisk din installation under opdateringen.',
	'FILES_NEW_CONFLICT'			=> 'Nye konfliktende filer',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Følgende filer er nye i den nyeste version, men det er blevet fastslået, at der er allerede en fil med det samme navn med den samme placering. Denne fil vil blive overskrevet af den nye fil.',
	'FILES_NOT_MODIFIED'			=> 'Ikke ændrede filer',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Følgende filer er ikke ændret og i overenstemmelse med de originale phpBB-filer i den version du ønsker at opdatere fra.',
	'FILES_UP_TO_DATE'				=> 'Allerede opdaterede filer',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'De følgende filer er allerede opdaterede og behøver derfor ingen opdateringer.',
	'FILES_VERSION'					=> 'Filer version',
	'TOGGLE_DISPLAY'				=> 'Vis eller skjul fillisten',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Opdaterer filer',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Filopdateringen af "%1$s" fejlede. Processen prøver at anvende "%2$s".',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Filopdateringen fejlede. Der er ikke tilgængelige alternativer at afprøve.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Fortsæt opdateringsprocessen',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Kontroller filer igen',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Opdater databasen',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Databaseopdateringen blev gennemført med succes.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Opdaterer udvidelser',
));
// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Den indtastede konverter eksisterer ikke.',
	'DEV_NO_TEST_FILE'			=> 'Ingen værdi er blevet indtastet for test_file-variablen i konverteren. Hvis du er bruger af denne konverter, burde du ikke se denne fejl, rapporter venligst denne fejl til konverterens forfatteren. Hvis du er en konverterforfatter, skal du indtaste navnet på en fil som eksisterer i kildeboardet for at muliggøre verifikation af stien til det.',
	'COULD_NOT_FIND_PATH'		=> 'Kunne ikke finde stien til kildeboardet. Kontroller venligst dine indstillinger og prøv igen.<br />» %s var indtastet som kildesti.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3\'s konfigurationsvariabel for "%s" er tom.',

	'MAKE_FOLDER_WRITABLE'		=> 'Vær venlig at sikre dig at denne mappe findes og at serveren kan skrive til den, og prøv så igen:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Vær venlig at sikre dig at disse mapper findes og at serveren kan skrive til dem, og prøv derefter igen:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Test igen',

	'NO_TABLES_FOUND'			=> 'Ingen tabeller fundet.',
	'TABLES_MISSING'			=> 'Kunne ikke finde disse tabeller<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Kontroller venligst dit tabelpræfiks og prøv igen.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Fortsæt konvertering',
	'CONTINUE_CONVERT_BODY'		=> 'Et tidligere konverteringsforsøg er blevet afbrudt. Du kan nu vælge at genstarte dette eller starte en ny konvertering.',
	'CONVERT_NEW_CONVERSION'	=> 'Ny konvertering',
	'CONTINUE_OLD_CONVERSION'	=> 'Genstart tidligere påbegyndt konvertering',

	// Start conversion
	'SUB_INTRO'					=> 'Introduktion',
	'CONVERT_INTRO'				=> 'Velkommen til phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Herfra er du i stand til at importere data fra andre (installerede) boardsystemer. Listen nedenfor viser alle for nuværende tilgængelige konverteringsmoduler. Hvis der ikke er vist en konverter i denne liste for den boardsoftware du ønsker at konvertere fra, kontroller da venligst phpBB.com\'s websted, hvor yderligere konverteringsmoduler kan være tilgængelige for download.',
	'AVAILABLE_CONVERTORS'		=> 'Tilgængelige konvertere',
	'NO_CONVERTORS'				=> 'Der er ingen konvertere til rådighed.',
	'CONVERT_OPTIONS'			=> 'Vælg konverter',
	'SOFTWARE'					=> 'Boardsoftware',
	'VERSION'					=> 'Version',
	'CONVERT'					=> 'Konverter',

	// Settings
	'STAGE_SETTINGS'			=> 'Indstillinger',
	'TABLE_PREFIX_SAME'			=> 'Tabelpræfikset skal være det som bruges af softwaren du konverterer fra.<br />» Indtastet tabelpræfiks var %s.',
	'DEFAULT_PREFIX_IS'			=> 'Konverteren kunne ikke finde tabeller med det indtastede præfiks. Kontroller venligst at du indtastet de korrekte data for boardet du ønsker at konvertere. Standardtabelpræfiks for %1$s er <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Verificerer konverteringsindstillinger',
	'FORUM_PATH'				=> 'Sti til board',
	'FORUM_PATH_EXPLAIN'		=> 'Den <strong>relative</strong> sti på disken til dit tidligere board fra <strong>roden af din phpBB3-installation</strong>.',
	'REFRESH_PAGE'				=> 'Opdater siden for at forsætte konvertering',
	'REFRESH_PAGE_EXPLAIN'		=> 'Hvis ja er valgt, vil konverteren opdatere siden for at forsætte konverteringen efter afslutning af hver fase. Hvis dette er din første konvertering med det formål at teste for eventuelle fejl på forhånd, anbefales det at sætte denne til "Nej".',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Konvertering i gang',

	'AUTHOR_NOTES'				=> 'Forfatternoter<br />» %s',
	'STARTING_CONVERT'			=> 'Starter konverteringsproces',
	'CONFIG_CONVERT'			=> 'Konverterer konfigurationen',
	'DONE'						=> 'Udført',
	'PREPROCESS_STEP'			=> 'Udfører forbehandlingsfunktioner og -forespørgsler',
	'FILLING_TABLE'				=> 'Udfylder tabel <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Udfylder tabeller',
	'DB_ERR_INSERT'				=> 'Fejl under behandling af <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Fejl under behandling af <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fejl under behandling af <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fejl under behandling af <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Fejl under kørsel af <code>SELECT</code>-forespørgsel.',
	'STEP_PERCENT_COMPLETED'	=> 'Trin <strong>%d</strong> af <strong>%d</strong>',
	'FINAL_STEP'				=> 'Udfør afsluttende trin',
	'SYNC_FORUMS'				=> 'Synkroniserer fora',
	'SYNC_POST_COUNT'			=> 'Synkroniserer antal indlæg',
	'SYNC_POST_COUNT_ID'		=> 'Synkroniserer indlæg fra <var>id</var> %1$s til %2$s.',
	'SYNC_TOPICS'				=> 'Synkronisering af emner',
	'SYNC_TOPIC_ID'				=> 'Synkroniserer emner fra <var>emne_id</var> %1$s til %2$s.',
	'PROCESS_LAST'				=> 'Behandler sidste forespørgsler',
	'UPDATE_TOPICS_POSTED'		=> 'Opdaterer informationer om indsendte emner',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Der opstod en fejl under forsøget på at opdatere informationer om indsendte emner. Du kan forsøge denne opdatering igen i ACP, når konverteringsprocessen er afsluttet.',
	'CONTINUE_LAST'				=> 'Fortsæt',
	'CLEAN_VERIFY'				=> 'Rydder op og verificerer den endelige struktur',
	'NOT_UNDERSTAND'			=> 'Kunne ikke forstå %s #%d, tabel %s ("%s")',
	'NAMING_CONFLICT'			=> 'Navnekonflikt: %s og %s er begge aliaser<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Konvertering fuldført',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Du har nu konverteret dit board til phpBB 3.2. Du kan nu logge ind og <a href="../">tilgå dit board</a>. Kontroller venligst at alle indstillinger blev konverteret korrekt, inden du gør dit board tilgængeligt ved at slette install mappen. Husk at hjælp til brugen af phpBB er tilgængelig online via <a href="https://www.phpbb.com/support/docs/en/3.2/ug/">dokumentationen</a> og i <a href="https://www.phpbb.com/community/viewforum.php?f=466">support foraene</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-upload for vedhæftede filer er slået til på det oprindelige board. Slå muligheden for FTP-upload fra og sørg for at en gyldig uploadmappe er indtastet, kopier herefter venligst alle vedhæftede filer til denne nye mappe, der skal kunne tilgås fra serveren. Når du har du gjort dette, genstartes konverteren.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Der er ingen konfigurationsinformation tilgængelig for konverteringen.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Kan ikke skaffe adgangsinformation.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kan ikke skaffe kategorier.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kan ikke finde din boardkonfiguration.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Kan ikke tilgå/læse "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Kan ikke skaffe information om tilladelser for grupper.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inkonsistens i gruppetabel opdaget i add_bots() - du er nødt til at tilføje alle specielle grupper hvis du gør det manuelt.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kan ikke indsætte bot i tabellen user.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Kan ikke indsætte bot i tabellen bot.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kan ikke indsætte bruger i tabellen user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Fejl ved fortolkning af meddelelse',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note til udvikler: du skal indtaste $convertor[\'avatar_path\'] for at bruge %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Den relative sti til kildeboardet er ikke blevet indtastet.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Note til udvikler: du skal indtaste $convertor[\'avatar_gallery_path\'] for at bruge %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Gruppe "%1$s" fandtes ikke i %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note til udvikler: du skal indtaste $convertor[\'ranks_path\'] for at bruge %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Note til udvikler: du skal indtaste $convertor[\'smilies_path\'] for at bruge %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note til udvikler: du skal indtaste $convertor[\'upload_path\'] for at bruge %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Kan ikke indsætte/opdatere tilladelsesindstilling.',
	'CONV_ERROR_PM_COUNT'				=> 'Kan ikke vælge antal PB mapper.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Kan ikke til at indsætte nyt forum til erstatning for tidligere kategori.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Kan ikke indsætte nyt forum til erstatning for tidligere forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kan ikke skaffe information om tilladelser for brugere.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Forkert gruppe "%1$s" defineret i %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Denne side indsamler de nødvendige data for at kunne tilgå boardet der skal konverteres (kildeboardet). Indtast databaseindstillingerne for dette board, konverteren ændrer intet i kildeboardets database. Kildeboardet bør slås fra eller tages offline under konverteringen for at sikre en konsistent konvertering.',
	'CONV_SAVED_MESSAGES'				=> 'Gemte beskeder',

	'PRE_CONVERT_COMPLETE'			=> 'Alle indledende konverteringstrin er korrekt gennemført. Du kan nu begynde den egentlige konverteringsproces. Bemærk venligst at du kan være nødsaget til efterfølgende at justere flere parametre. Kontroller især tildelte tilladelser, og om filer, avatarer og smileys blev kopieret korrekt. Dit nykonverterede board indeholder intet søgeindeks, det kan du danne i administratorkontrolpanelet.',
));
