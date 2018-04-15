<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: board.php 591 2018-01-20 08:15:27Z jan_skovsgaard $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Her kan du bestemme en række vigtige standardindstillinger. Dit boards navn og beskrivelsen af det, og også indstillingerne for tidszone, sprog m.v.',
	'BOARD_INDEX_TEXT'				=> 'Teksterstatning for boardindeks',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Vises i stedet for boardindeks i boardets navigationsmenu. Anføres intet, anvendes som standard "Boardindeks".',
	'BOARD_STYLE'					=> 'Typografi',
	'CUSTOM_DATEFORMAT'				=> 'Brugerdefineret…',
	'DEFAULT_DATE_FORMAT'			=> 'Datoformat',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Datoformatet er det samme som PHP\'s <code>date</code>-funktion.',
	'DEFAULT_LANGUAGE'				=> 'Standardsprog',
	'DEFAULT_STYLE'					=> 'Standardtypografi',
	'DEFAULT_STYLE_EXPLAIN'			=> 'For nye tilmeldte brugere.',
	'DISABLE_BOARD'					=> 'Deaktiver boardet',
	'DISABLE_BOARD_EXPLAIN'			=> 'Sætter boardet offline for brugere, som ikke er administratorer eller redaktører. Du kan vælge at indtaste en kort besked, der skal vises i stedet (maksimalt 255 tegn).',
	'DISPLAY_LAST_SUBJECT'			=> 'Vis seneste indlægs emnefelt på forumlisten',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Emnefeltets indhold for seneste indlæg vises på forumlisten, med et link til indlægget. Emner fra fora beskyttet af adgangskode og fra fora hvor bruger ikke har læseadgang til, vises ikke.',
	'GUEST_STYLE'					=> 'Gæstetypografi',
	'GUEST_STYLE_EXPLAIN'			=> 'Vises for besøgende som ikke er logget ind.',
	'OVERRIDE_STYLE'				=> 'Tilsidesæt brugeres valg af typografi',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Erstatter brugeres valg af typografi og gæstetypografien med boardets standardtypografi.',
	'SITE_DESC'						=> 'Boardbeskrivelse',
	'SITE_HOME_TEXT'				=> 'Webstedtekst',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Denne tekst vises med et link til dit websted i boardets stier. Anføres intet, linkes som standard til "Hjem".',
	'SITE_HOME_URL'					=> 'URL-websted',
	'SITE_HOME_URL_EXPLAIN'			=> 'Her kan indtastes en absolut URL, eksempelvis <samp>http://www.phpbb.com</samp>. Denne URL bliver indsat foran dit boards stier og boardlogoet vil linke hertil, fremfor forumindekset.',
	'SITE_NAME'						=> 'Boardnavn',
	'SYSTEM_TIMEZONE'				=> 'Tidszone for gæster',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Den tidszone der vises for brugere der ikke er logget ind (gæster, botter). Tilmeldte brugere vælger selv foretrukken tidszone under tilmeldingen og kan ændre denne i brugerkontrolpanelet.',
	'WARNINGS_EXPIRE'				=> 'Varighed for advarsler',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Antal dage fra en advarsel udstedes, til den fjernes fra brugeres profildata. Indtastes 0, vil advarsler være permanent.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Her kan du aktivere eller deaktivere flere af boardets udvidede funktioner.',

	'ALLOW_ATTACHMENTS'			=> 'Tillad at vedhæfte filer',
	'ALLOW_BIRTHDAYS'			=> 'Brugeres alder og fødselsdage',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Vis brugeres alder i brugerprofil. Fødselsdag vises desuden på boardindekset, hvis fødselsdagslisten er aktiveret under Serverkonfiguration -> Belastning.',
	'ALLOW_BOOKMARKS'			=> 'Tillad bogmærker på emner',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Brugere kan gemme personlige bogmærker.',
	'ALLOW_BBCODE'				=> 'Tillad BBkode',
	'ALLOW_FORUM_NOTIFY'		=> 'Tillad forumovervågning',
	'ALLOW_NAME_CHANGE'			=> 'Tillad ændring af brugernavn',
	'ALLOW_NO_CENSORS'			=> 'Tillad deaktivering af ordcensur',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Brugere kan vælge at slå censur af ord fra i indlæg og private beskeder.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Tillad vedhæftede filer i private beskeder',
	'ALLOW_PM_REPORT'			=> 'Tillad at brugere kan rapportere private beskeder',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Rapporterede beskeder bliver herved tilgængelige og læsbare for redaktører via i redaktørkontrolpanelet.',
	'ALLOW_QUICK_REPLY'			=> 'Tillad brug af kommentarfelt',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Bestemmer om feltet til skrivning af hurtige kommentarer overordnet er deaktiveret på boardet. Funktionen skal desuden aktiveres pr. forum.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Aktiver kommentarfunktion i alle fora',
	'ALLOW_SIG'					=> 'Tillad signaturer',
	'ALLOW_SIG_BBCODE'			=> 'Tillad BBkode i brugersignaturer',
	'ALLOW_SIG_FLASH'			=> 'Tillad brug af BBkode-tagget <code>[FLASH]</code> i brugersignaturer',
	'ALLOW_SIG_IMG'				=> 'Tillad brug af BBkode-tagget <code>[IMG]</code> i brugersignaturer',
	'ALLOW_SIG_LINKS'			=> 'Tillad brug af links i brugersignaturer',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Hvis brugen af BBkode-tagget <code>[URL]</code> forbydes, afbrydes samtidig automatiske (magiske) URL\'er.',
	'ALLOW_SIG_SMILIES'			=> 'Tillad brug af smileys i brugersignaturer',
	'ALLOW_SMILIES'				=> 'Tillad smileys',
	'ALLOW_TOPIC_NOTIFY'		=> 'Tillad emneovervågning',
	'BOARD_PM'					=> 'Tillad private beskeder',
	'BOARD_PM_EXPLAIN'			=> 'Alle brugere kan sende private beskeder.',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Tillad boardnotifikationer',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatarer er generelt små, unikke billeder en bruger kan knytte til sin profil. Afhængig af boardets typografi, vises disse oftest lige under brugernavnet, når man viser et indlæg. Herfra styrer du hvordan brugerne kan definere deres avatarer. Bemærk venligst at for at kunne uploade avatarer, skal der på forhånd være oprettet en mappe til dette. Der skal desuden kunne skrives til mappen fra serveren. Bemærk også, at begrænsningerne for filstørrelse kun bruges på uploadede avatarer, de gælder ikke for eksternt linkede billeder.',

	'ALLOW_AVATARS'					=> 'Aktiver avatarer',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Tillad generel anvendelse af avatarer.<br>Deaktiveres den generelle anvendelse af avatarer eller andre af avatarmulighederne, vises disse avatarer ikke på boardet, men brugere vil stadig kunne se egne avatarer i brugerkontrolpanelet.',
	'ALLOW_GRAVATAR'				=> 'Tillad gravatar-avatarer',
	'ALLOW_LOCAL'					=> 'Aktiver galleri-avatarer',
	'ALLOW_REMOTE'					=> 'Tillad eksterne avatarer',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatarer placeret på et andet websted, hvor der kan linkes til.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Tillad upload af eksterne avatarer',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Avatarer placeret på et andet websted kan uploades til boardet.',
	'ALLOW_UPLOAD'					=> 'Tillad upload af avatarer',
	'AVATAR_GALLERY_PATH'			=> 'Avatargalleri-mappens placering',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Sti under din phpBB-rodmappe for forhåndsuploadede avatarer, for eksempel <samp>images/avatars/gallery</samp>.<br>Dobbelt punktum, som <samp>../</samp>, vil blive fjernet af sikkerhedsgrunde.',
	'AVATAR_STORAGE_PATH'			=> 'Avatarmappens placering',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Sti under din phpBB-rodmappe, for eksempel <samp>images/avatars/upload</samp>.<br>Der skal kunne skrives til denne mappe, ellers er det <strong>ikke muligt</strong> at uploade avatarer.<br>Dobbelt punktum, som <samp>../</samp>, vil blive fjernet af sikkerhedsgrunde.',
	'MAX_AVATAR_SIZE'				=> 'Største dimensioner for avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Bredde x højde i pixels.',
	'MAX_FILESIZE'					=> 'Maksimal filstørrelse for avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'For uploadede avatarfiler. Er størrelsen sat til 0, er det alene din interne PHP-konfiguration, der begrænser filstørrelsen.',
	'MIN_AVATAR_SIZE'				=> 'Mindste dimensioner for avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Bredde x højde i pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse alle standardindstillinger for private beskeder.',

	'ALLOW_BBCODE_PM'			=> 'Tillad BBkode i private beskeder',
	'ALLOW_FLASH_PM'			=> 'Tillad brug af BBkode-tagget <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Bemærk at muligheden for at anvende flash i private beskeder, forudsætter at flash også er tilladt i de overordnede tilladelsesindstillinger.',
	'ALLOW_FORWARD_PM'			=> 'Tillad videresending af private beskeder',
	'ALLOW_IMG_PM'				=> 'Tillad brug af BBkode-tagget <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Tillad samtidig afsending til flere brugere og grupper',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Afsending til grupper kan indstilles for hver gruppe under gruppeadministration.',
	'ALLOW_PRINT_PM'			=> 'Tillad printervenlig visning af private beskeder',
	'ALLOW_QUOTE_PM'			=> 'Tillad citater i private beskeder',
	'ALLOW_SIG_PM'				=> 'Tillad signatur i private beskeder',
	'ALLOW_SMILIES_PM'			=> 'Tillad smileys i private beskeder',
	'BOXES_LIMIT'				=> 'Maksimalt antal private beskeder pr. mappe',
	'BOXES_LIMIT_EXPLAIN'		=> 'Brugere kan ikke modtage flere end dette antal beskeder i hver af deres mapper til private beskeder. Sæt til 0 for ubegrænset antal beskeder.',
	'BOXES_MAX'					=> 'Maksimalt antal mapper til private beskeder',
	'BOXES_MAX_EXPLAIN'			=> 'Brugere kan oprette op til dette antal mapper til private beskeder.',
	'ENABLE_PM_ICONS'			=> 'Tillad brug af emneikoner',
	'FULL_FOLDER_ACTION'		=> 'Handling ved fuld mappe',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Udført standardhandling hvis en brugers mappe er fuld og eventuelle brugerdefinerede mappehandlinger ikke er anvendelige. Eneste undtagelse er mappen "Sendte beskeder", hvor standardhandlingen altid er sletning af ældste beskeder.',
	'HOLD_NEW_MESSAGES'			=> 'Tilbagehold nye beskeder',
	'PM_EDIT_TIME'				=> 'Begræns redigeringstid',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Begrænser hvor længe en endnu ikke afleveret besked kan redigeres. Sæt til 0 for deaktivering af denne begrænsning.',
	'PM_MAX_RECIPIENTS'			=> 'Maksimalt antal tilladte modtagere',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Det maksimale antal modtagere af en privat besked. Hvis 0 tillades ubegrænset antal. Indstillingen kan sættes for hver gruppe under gruppeadministration.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Her kan du tilpasse alle standardindstillinger for at skrive indlæg.',
	'ALLOW_POST_LINKS'					=> 'Tillad at anvende links i indlæg og private beskeder',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Hvis anvendelse ikke er tilladt, er BBkode-tag for URL\'er og automatiske(magiske) URL\'er slået fra.',
	'ALLOWED_SCHEMES_LINKS'				=> 'Tilladte protokoller i links',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> 'Brugere kan kun skrive links med prokolangivelse, hvis de er tilladte på den komma-separerede liste.',
	'ALLOW_POST_FLASH'					=> 'Tillad brug af BBkode-tagget <code>[FLASH]</code> i indlæg',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Hvis anvendelse ikke er tilladt, er BBkode-tagget <code>[FLASH]</code> ikke synlig når der skrives indlæg. Ellers kan tilladelsessystemet anvendes til af definere hvilke brugere der må bruge BBkode-tagget<code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Interval for placer øverst',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Antal minutter, timer eller dage siden seneste indlæg i et emne, inden det kan placeres øverst. 0 deaktiverer muligheden for at placere et emne øverst.',
	'CHAR_LIMIT'					=> 'Maksimalt antal tegn pr. besked',
	'CHAR_LIMIT_EXPLAIN'			=> 'Det maksimale antal tegn tilladt i indlæg og private beskeder. 0 deaktiverer denne begrænsning.',
	'DELETE_TIME'					=> 'Slettegrænse',
	'DELETE_TIME_EXPLAIN'			=> 'Et nyt indlæg kan slettes indenfor dette tidsrum. 0 deaktiverer denne begrænsning.',
	'DISPLAY_LAST_EDITED'			=> 'Vis seneste redigering',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Vælg om seneste redigeringstidspunkt skal vises i indlæg.',
	'EDIT_TIME'						=> 'Begræns tidsrum for redigering',
	'EDIT_TIME_EXPLAIN'				=> 'Begrænser tidsrummet hvori man kan redigere et nyt indlæg. Sæt til 0 for deaktivering af denne begrænsning.',
	'FLOOD_INTERVAL'				=> 'Interval mellem nye indlæg',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Antal sekunder en bruger skal vente mellem indsendelse af nye indlæg. For at lade brugerne ignorere denne indstilling skal du rette i deres tilladelser.',
	'HOT_THRESHOLD'					=> 'Grænse for populært emne',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Antal indlæg pr. emne for at dette kategoriseres populært emne. Sæt til 0 for at slå populære emner fra.',
	'MAX_POLL_OPTIONS'				=> 'Maksimalt antal afstemningsmuligheder',
	'MAX_POST_FONT_SIZE'			=> 'Maksimal skriftstørrelse i indlæg',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Den maksimalt anvendelige skriftstørrelse i indlæg. 0 for deaktiverer denne begrænsning.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maksimal billedhøjde i indlæg',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maksimal højde på billeder og flash-filer i indlæg. Sæt til 0 for ubegrænset højde.',
	'MAX_POST_IMG_WIDTH'			=> 'Maksimal billedbredde i indlæg',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maksimal bredde på billeder og flash-filer i indlæg. Sæt til 0 for ubegrænset bredde.',
	'MAX_POST_URLS'					=> 'Maksimalt antal links i indlæg',
	'MAX_POST_URLS_EXPLAIN'			=> 'Højeste antal URL\'er pr. indlæg. Sæt til 0 for ubegrænset antal links.',
	'MIN_CHAR_LIMIT'				=> 'Mindste antal tegn pr. besked',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Indlæg og private beskeder skal indeholde minimum dette antal tegn. 1 er den mindste værdi i denne indstilling.',
	'POSTING'						=> 'Indlæg',
	'POSTS_PER_PAGE'				=> 'Indlæg pr. side',
	'QUOTE_DEPTH_LIMIT'				=> 'Maksimal dybde for citeringer',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Bestemmer hvor mange tidligere citeringer et citat kan indeholde. Sæt til 0 for ubegrænset dybde.',
	'SMILIES_LIMIT'					=> 'Maksimalt antal smileys pr. indlæg',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Sæt til 0 for ubegrænset antal smileys.',
	'SMILIES_PER_PAGE'				=> 'Smileys pr. side',
	'TOPICS_PER_PAGE'				=> 'Emner pr. side',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Her kan du tilpasse alle standardindstillinger for signaturer.',

	'MAX_SIG_FONT_SIZE'				=> 'Maksimal skriftstørrelse i signatur',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maksimal skriftstørrelse tilladt i brugersignaturer. Sæt til 0 for ubegrænset størrelse.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maksimal billedhøjde i signatur',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maksimal højde på et billede eller flashfil i brugersignaturer. Sæt til 0 for ubegrænset højde.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maksimal billedbredde i signatur',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maksimal bredde på et billede eller flashfil i brugersignaturer. Sæt til 0 for ubegrænset bredde.',
	'MAX_SIG_LENGTH'				=> 'Maksimal længde af signatur',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maksimalt antal tegn i brugersignaturer.',
	'MAX_SIG_SMILIES'				=> 'Maksimalt antal smileys i signatur',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maksimalt antal smileys tilladt i brugersignaturer. Sæt til 0 for ubegrænset antal.',
	'MAX_SIG_URLS'					=> 'Maksimalt antal links i signatur',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maksimalt antal links i brugersignaturer. Sæt til 0 for ubegrænset antal links.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse tilmeldings- og profilrelaterede indstillinger.',

	'ACC_ACTIVATION'				=> 'Kontoaktivering',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Bestemmer om brugere har øjeblikkelig adgang til boardet eller om der kræves anden form for bekræftelse. Du kan også deaktivere muligheden for at tilmelde sig boardet. <em>Boardets e-mailsystem skal være aktiveret for at anvende bruger- og administratoraktivering.</em>',
	'ACC_ACTIVATION_WARNING'		=> 'Bemærk at den nuværende valgte aktiveringsmetode forudsætter at e-mailsystemet er aktiveret, i modsat fald vil muligheden for tilmelding blive deaktiveret. Vi anbefaler enten at vælge en anden aktiveringsmetode eller at aktivere boardets e-mailsystem.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Øvre grænse for "Nye brugere"',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Brugere forbliver medlem af gruppen <em>Nye brugere</em>, indtil dette antal indlæg er indsendt. Du kan også vælge at medlemmer af denne gruppe eksempelvis ikke må anvende PB-systemet eller at nye indlæg skal gennemses og godkendes. <strong>0 deaktiverer denne mulighed.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Vælg "Nye brugere" som standardgruppe',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Bestem om gruppen <em>Nye brugere</em> også skal være nye brugeres standardgruppe. Forudsætningen er at der er defineret en øvre grænse for nye brugere. Det kan være nyttigt hvis du ønsker at knytte en grupperang eller avatar til medlemmer af denne gruppe.',

	'ACC_ADMIN'					=> 'Af administrator',
	'ACC_DISABLE'				=> 'Inaktiv',
	'ACC_NONE'					=> 'Ingen (øjeblikkelig adgang)',
	'ACC_USER'					=> 'Af bruger (verificeres pr. e-mail)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Tillad genbrug af e-mailadresse',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Forskellige brugere kan tilmelde sig med samme e-mailadresse.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA-telefaxnummer',
	'COPPA_MAIL'				=> 'COPPA-e-mailadresse',
	'COPPA_MAIL_EXPLAIN'		=> 'Indtast den e-mailadresse hvortil forældre eller værge kan sende COPPA-tilmeldingsformularerne.',
	'ENABLE_COPPA'				=> 'Aktiver COPPA-funktion',
	'ENABLE_COPPA_EXPLAIN'		=> 'For at overholde den amerikanske U.S. COPPA-lovgivning, afkræves brugere i forbindelse med tilmeldingen, en erklæring om hvorvidt de er 13 år eller ældre. Hvis COPPA-funktionen deaktiveres, vises COPPA-specifikke grupper ikke.',
	'MAX_CHARS'					=> 'Maks',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Intet passende plugin blev fundet.',
	'PASSWORD_LENGTH'			=> 'Adgangskodes længde',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimalt og maksimalt antal tegn i adgangskode.',
	'REG_LIMIT'					=> 'Tilmeldingsforsøg',
	'REG_LIMIT_EXPLAIN'			=> 'Antal forsøg på at løse den stillede opgave, hvorefter den pågældende session låses.',
	'USERNAME_ALPHA_ONLY'		=> 'Kun bogstaver og tal',
	'USERNAME_ALPHA_SPACERS'	=> 'Bogstaver, tal og mellemrumstegn',
	'USERNAME_ASCII'			=> 'ASCII (ingen international unicode)',
	'USERNAME_LETTER_NUM'		=> 'Ethvert bogstav og tal',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Ethvert bogstav, tal og mellemrum',
	'USERNAME_CHARS'			=> 'Begræns brugbare tegn i brugernavn',
	'USERNAME_CHARS_ANY'		=> 'Ethvert tegn',
	'USERNAME_CHARS_EXPLAIN'	=> 'Begræns typen af tegn, der kan bruges i brugernavne, mellemrumstegn er: mellemrum, -, +, _, [ og ].',
	'USERNAME_LENGTH'			=> 'Brugernavns længde',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimalt og maksimalt antal tegn i brugernavne.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Generelle indstillinger for samtidig offentliggørelse af feeds', 
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Modulet giver adgang til ATOM-feeds. BBkoder i indlæg fortolkes korrekt, så de kan læses i eksterne feeds.',

	'ACP_FEED_GENERAL'					=> 'Generelle indstillinger for feeds',
	'ACP_FEED_POST_BASED'				=> 'Indlægsbaserede indstillinger',
	'ACP_FEED_TOPIC_BASED'				=> 'Emnebaserede indstillinger',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Andre feeds og indstillinger',
 
	'ACP_FEED_ENABLE'					=> 'Feeds er',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Bestemmer om ATOM-feeds er aktiv for hele boardet.<br>En deaktivering gælder alle feeds, uanset indstillingerne valgt nedenfor.',
	'ACP_FEED_LIMIT'					=> 'Antal elementer',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Der vises maksimalt dette antal feed-elementer.', 
 
	'ACP_FEED_OVERALL' 					=> 'Feeds for hele boardet',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Seneste indlæg overalt på boardet vises.',
	'ACP_FEED_FORUM'					=> 'Feeds for enkeltfora',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Visning af seneste indlæg i udvalgte fora.',
	'ACP_FEED_TOPIC'					=> 'Feeds pr. emne',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Visning af seneste indlæg i udvalgte emner.',

	'ACP_FEED_TOPICS_NEW'				=> 'Feeds for nye emner',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Viser de seneste emner, inklusiv første indlæg i disse.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Feeds for aktive emner',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Viser de senest aktive emner, inklusiv første indlæg i disse.',
	'ACP_FEED_NEWS'						=> 'Nyheds-feeds',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Viser seneste indlæg i disse fora. Vælges ingen fora, deaktiveres nyheds-feed.<br>Vælg flere fora ved at holde <samp>Ctrl</samp> nede og klikke.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Forum-feeds',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Der vises en liste over alle fora.',

	'ACP_FEED_HTTP_AUTH' 				=> 'HTTP-godkendelse er',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Med HTTP-godkendelse kan brugere modtage feeds med indhold som er skjult for gæster. Parameteret auth=http skal tilføjes i feed-URL\'en. Bemærk venligst at nogle PHP-konfigurationer forudsætter tilføjelser i .htaccess-filen. Instruktioner hertil findes i selve filen.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Elementstatistikker er',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Viser individuelle statistikker under feed-elementer<br>(f. eks. indsendt af, svar, visninger, dato og tid)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Ekskluder disse fora',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Indholdet i disse bliver <strong>ikke medtaget i feeds</strong>. Vælges ingen fora, medtages data fra samtlige fora.<br>Vælg flere fora ved at holde <samp>Ctrl</samp> nede og klikke.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Her kan du vælge, samt konfigurere moduler, som er designet til at beskytte mod automatiserede tilmeldinger og indlæg fra spambotter. Modulerne vil typisk udfordre bruger med en <em>CAPTCHA</em>, en test som er vanskelig at løse for computere.',
	'ACP_VC_EXT_GET_MORE'					=> 'Flere (og sikkert bedre) antispam-moduler kan findes på <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Extensions Database</strong></a>. Mere information om hvordan du forebygger spam på dit board findes på <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Knowledge Base</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Tilgængelige plugins',
	'CAPTCHA_UNAVAILABLE'					=> 'Dette plugin kan ikke vælges, dets krav er ikke opfyldt.',
	'CAPTCHA_GD'							=> 'GD-billede',
	'CAPTCHA_GD_3D'							=> '3D GD-billede',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Forgrundsstøj',
	'CAPTCHA_GD_EXPLAIN'					=> 'Anvender GD til et mere avanceret billede.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Anvender forgrundsstøj for at gøre billede vanskeligere at aflæse.',
	'CAPTCHA_GD_X_GRID'						=> 'Baggrundsstøj i x-akse',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'En lavere indstilling gør det vanskeligere at aflæse billedet. 0 deaktiverer baggrundsstøj i x-aksen.',
	'CAPTCHA_GD_Y_GRID'						=> 'Baggrundsstøj i y-akse',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'En lavere indstilling gør det vanskeligere at aflæse billedet. 0 deaktiverer baggrundsstøj i y-aksen.',
	'CAPTCHA_GD_WAVE'						=> 'Bølgeforvrængning',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Tilføjer bølgeforvrængning til billede.',
	'CAPTCHA_GD_3D_NOISE'					=> '3D-støj objekter',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Tilføjer yderligere objekter over tegnene i billede.',
	'CAPTCHA_GD_FONTS'						=> 'Brug forskellige skrifttyper',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Bestemmer hvor mange forskellige skrifttyper der anvendes. Du kan vælge at bruge en skrifttype, eller at der skal ændres skrifttype i ny bekræftelseskode. Desuden kan anvendelse af små bogstaver tilføjes.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Standard',
	'CAPTCHA_FONT_NEW'						=> 'Ændring af skrifttyper',
	'CAPTCHA_FONT_LOWER'					=> 'Anvend også små bogstaver',
	'CAPTCHA_NO_GD'							=> 'Simpelt billede',
	'CAPTCHA_PREVIEW_MSG'					=> 'Dine ændringer af indstillingerne er ikke gemt. Visningen er kun en prøve.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Plugin - som det vil vises med de nuværende valg.',

	'CAPTCHA_SELECT'						=> 'Installerede plugins',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'I dropdown-menuen vises plugins genkendt af boardet. Gråfarvede plugins kan ikke vælges før den nødvendige konfiguration er foretaget.',
	'CAPTCHA_CONFIGURE'						=> 'Konfigurer plugins',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Ændre indstillingerne for det valgte plugin.',
	'CONFIGURE'								=> 'Konfigurer',
	'CAPTCHA_NO_OPTIONS'					=> 'Plugin kan ikke konfigureres.',

	'VISUAL_CONFIRM_POST'					=> 'Spambot-beskyttelse ved indlæg fra gæster',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'For at hindre automatiserede indsendelse af indlæg, udfordres ikke tilmeldte brugere med en CAPTCHA-opgave.',
	'VISUAL_CONFIRM_REG'					=> 'Spambot-beskyttelse ved tilmelding',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'For at hindre automatiserede tilmeldinger, udfordres nye brugere med en CAPTCHA-opgave.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Brugere kan bede om ny opgave',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Tillader at brugere kan bede om ny opgave, hvis den første ikke kan løses under tilmelding. Ikke alle plugins understøtter ikke denne mulighed.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'En cookie er en lille mængde data, der sendes til brugernes browser. Den omfatter bl.a. et anonymt, men entydigt id, som eksempelvis anvendes til at logge dine brugere automatisk ind. Indstillingerne her bestemmer de parametre boardets cookies afsendes med. I de fleste tilfælde er de valgte standardværdier tilstrækkelige. Ændrer du indstillingerne på et board i drift, så gør det med forsigtighed. I værste fald kan dine brugere ikke mere logge ind automatisk. Hvis du oplever problemer med brugere der ikke kan forblive logget ind, kan du eventuelt besøge <b><a href="https://www.phpbb.com/support/go/cookie-settings/">phpBB.com Knowledge Base - Fixing incorrect cookie settings</a></b>.',

	'COOKIE_DOMAIN'				=> 'Cookiedomæne',
	'COOKIE_DOMAIN_EXPLAIN'		=> 'Almindeligvis er cookiedomæne en option. Undlad det, hvis du er usikker.<br><br> I tilfælde hvor dit board er integreret med anden software, eller har flere domæner, skal du gøre følgende for at bestemme cookiedomænet. Hvis du for eksempel har <i>example.com</i> og <i>forums.example.com</i>, eller måske <i>forums.example.com</i> og <i>blog.example.com</i>. Slet subdomænerne så du finder det overordnede domæne, <i>example.com</i>. Tilføj nu et punktum foran dette og du skal bruge .example.com som cookiedomæne(bemærk forreste punktum).',
	'COOKIE_NAME'				=> 'Cookienavn',
	'COOKIE_NAME_EXPLAIN'		=> 'Det bestemmer du, gør det unikt. Navnet skal altid ændres når cookieindstillingerne ændres.',
	'COOKIE_NOTICE'				=> 'Cookienote',
	'COOKIE_NOTICE_EXPLAIN'		=> 'Viser en note til brugere når boardet besøges. Kan være et lovkrav, afhængig af indholdet boardets indhold og hvilke udvidelser der anvendes.',
	'COOKIE_PATH'				=> 'Sti til cookie',
	'COOKIE_PATH_EXPLAIN'		=> 'Stien vil normalt være identisk med stien til dit script eller blot en skråstreg, for at gøre cookien tilgængelig på tværs af domænet.',
	'COOKIE_SECURE'				=> 'Sikker cookie',
	'COOKIE_SECURE_EXPLAIN'		=> 'Sættes kun aktiv hvis din server kommunikerer via SSL. Sættes indstillingen aktiv på et domæne, der ikke kører SSL, vil det resultere i serverfejl ved viderestillinger.',
	'ONLINE_LENGTH'				=> 'Varighed af onlineinformation',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Inaktive brugere fjernes fra "Hvem er online" listen efter den indtastede periode. Jo større tidsrum, desto længere behandlingstid for at generere listen.',
	'SESSION_LENGTH'			=> 'Sessionslængde',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessioner udløber automatisk efter dette tidsrum.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Her kan du aktivere formularen, og tilføje en tekst som vises på siden.',

	'CONTACT_US_ENABLE'				=> 'Aktiver kontaktside',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Siden giver brugere mulighed for at sende e-mails til boardadministratorer. Bemærk venligst at boardets e-mailsystem også skal være aktiveret. Denne indstilling finder du under Generelt > Klientkonfiguration > E-mails.',

	'CONTACT_US_INFO'				=> 'Kontaktinformation',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Beskeden vises på kontaktsiden',
	'CONTACT_US_INFO_PREVIEW'		=> 'Kontaktsideinformation - forhåndsvisning',
	'CONTACT_US_INFO_UPDATED'		=> 'Kontaktsideinformation opdateret.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Her kan du slå visse boardfunktioner fra, for at reducere boardets belastning af serveren. På de fleste servere skulle der ikke være brug for at slå nogen funktioner fra. Men på visse systemer eller i delte værtsmiljøer kan det være en fordel at slå unødvendige funktioner fra. Desuden kan du definere tærskler for systembelastning og antal aktive sessioner, overskrides disse vil boardet gå offline.',

	'ALLOW_CDN'						=> 'Tillad eksterne Content Delivery Networks',
	'ALLOW_CDN_EXPLAIN'				=> 'Nogle filer hentes fra andre eksterne servere, i stedet for din egen. Det reducerer din servers båndbreddeforbrug, men kan medføre en problemstilling omkring datahemmelighed for nogle administratorer. I en standardinstallation inkluderer det at "jQuery" og skrifttypen "Open Sans" hentes fra Googles Content Delivery Detværk.',
	'ALLOW_LIVE_SEARCHES'			=> 'Tillad livesøgninger',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Når bruger taster i søgefelter på boardet, foreslås løbende nøgleord.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Tilpassede profilfelter',
	'LIMIT_LOAD'					=> 'Begræns systembelastning',
	'LIMIT_LOAD_EXPLAIN'			=> 'Hvis systembelastningen i gennemsnit over 1 minut overskrider denne værdi, vil boardet gå offline, 1.0 er lig ~100% belastning af en processor. Dette virker kun på UNIX-baserede servere og hvor denne information er tilgængelig. Værdien nulstiller sig selv hvis phpBB ikke var i stand til at finde belastningsgrænsen.',
	'LIMIT_SESSIONS'				=> 'Begræns sessioner',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Hvis antallet af sessioner overskrider denne værdi indenfor 1 minut, vil boardet gå offline. Sæt til 0 for ubegrænset antal sessioner.',
	'LOAD_CPF_MEMBERLIST'			=> 'Vis tilpassede profilfelter i listen med tilmeldte brugere',
	'LOAD_CPF_PM'					=> 'Vis tilpassede profilfelter i private beskeder',
	'LOAD_CPF_VIEWPROFILE'			=> 'Vis tilpassede profilfelter i brugerprofiler',
	'LOAD_CPF_VIEWTOPIC'			=> 'Vis tilpassede profilfelter på emnesider',
	'LOAD_USER_ACTIVITY'			=> 'Brugeres aktivitet',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Viser aktivt emne og forum i brugerprofiler og brugerkontrolpanel. Det anbefales at deaktivere dette for boards med mere end en million indlæg.',
	'LOAD_USER_ACTIVITY_LIMIT'		=> 'Brugeres grænse for indlægsaktivitet',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> 'Det aktive emne/forum vil ikke blive vist for brugere med flere indlæg end denne grænse. Vælg 0, for at fravælge denne grænse.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Varighed af læs notifikationer',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Læs notifikationer slettes automatisk efter det valgte antal dage. Vælg 0, for at gøre notifikationer permanente.',
	'RECOMPILE_STYLES'				=> 'Rekompiler fastfrosne typografikomponenter',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Kontrollerer for opdaterede typografikomponenter i filsystemet og rekompilerer.',
	'YES_ANON_READ_MARKING'			=> 'Emnemarkering for gæster',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Gem læst/ulæst statusinformation for gæster. Vælges "Nej", mærkes indlæg altid som læste for gæster.',
	'YES_BIRTHDAYS'					=> 'Vis fødselsdagslisten',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Brugere med fødselsdag vises nederst på boardindekset. Visning af listen forudsætter at fødselsdage er tilladt under boardfinesser.',
	'YES_JUMPBOX'					=> 'Vis "Gå til"-boksen',
	'YES_MODERATORS'				=> 'Vis redaktører',
	'YES_ONLINE'					=> 'Vis brugere online',
	'YES_ONLINE_EXPLAIN'			=> 'Brugernavn vises nederst på boardindeks, forum og emnesider.',
	'YES_ONLINE_GUESTS'				=> 'Antal gæster online',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Vis antal gæster i listen "Hvem er online", i fora og emner.',
	'YES_ONLINE_TRACK'				=> 'Vis brugeres online- og offline-status',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Status vises med relevant ikon i profilfelt.',
	'YES_POST_MARKING'				=> 'Anvend prikkede emner',
	'YES_POST_MARKING_EXPLAIN'		=> 'Et prikket emneikon viser bruger om denne har skrevet indlæg i emnet.',
	'YES_READ_MARKING'				=> 'Database-emnemarkering',
	'YES_READ_MARKING_EXPLAIN'		=> 'Gem læst/ulæst statusinformation i databasen, i stedet for i en cookie.',
	'YES_UNREAD_SEARCH'				=> 'Aktiver søgning efter ulæste indlæg',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB understøtter forskellige godkendelsesmoduler, som giver mulighed for at bestemme hvordan en bruger skal godkendes ved login på boardet. Der er fire standardmoduler med i phpBB: DB, LDAP, Apache og OAuth. Ikke alle metoderne kræver yderligere information, så udfyld kun felterne, hvis det er relevant til den valgte metode.',

	'AUTH_METHOD'				=> 'Vælg godkendelsesmetode',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Både key og secret skal have OAuth-tjenesten aktiveret fra udbyderen. Kun en af disse blev kvitteret for af udbyderen.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'OAuth-udbyderen forlanger en unik key og secret for at kunne godkende med den eksterne server. Begge bliver leveret når du tilmelder dit websted til OAuth-udbyderen, og skal indtastes helt nøjagtigtigt herunder.<br>Udbydere, som ikke udleverer både key og secret, kan ikke anvendes af boardets brugere. Bemærk at brugere fortsat vil kunne tilmelde sig og logge in med almindeligt plug-in til DB-godkendelse.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Key',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Secret',

	'APACHE_SETUP_BEFORE_USE'	=> 'Du skal konfigurere godkendelse i Apache, før du ændrer phpBB til at anvende denne metode. Husk at det anvendte brugernavn til godkendelsen skal være det samme som dit phpBB-brugernavn. Godkendelse i Apache kan kun anvendes med mod_php (ikke med en CGI-version) og med safe_mod slået fra.',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP-base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Dette er LDAP Distinguished Name som angiver brugerinformationen for eksempel <samp>o=mit firma,c=dk</samp>.',
	'LDAP_EMAIL'					=> 'LDAP-e-mailattribut',
	'LDAP_EMAIL_EXPLAIN'			=> 'Sæt denne til navnet på din brugertabels e-mailattribut (hvis en sådan findes) for automatisk at sætte e-mailadressen for nye brugere. Ved at lade dette felt være tomt vil brugere ved første login få tildelt en tom e-mailadresse.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Forbindelse til LDAP-server mislykkedes med anvendte brugernavn og adgangskode.',
	'LDAP_NO_EMAIL'					=> 'Den indtastede e-mail-attribut findes ikke.',
	'LDAP_NO_IDENTITY'				=> 'Kunne ikke finde en login-identitet for %s.',
	'LDAP_PASSWORD'					=> 'LDAP-adgangskode',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Efterlades tomt for at benytte anonym tilslutning, udfyldes ellers med ovenstående brugers adgangskode. Kræves af Active Directory-servere.<br><em><strong>ADVARSEL:</strong> Adgangskoden bliver lagret i databasen i klar og ukrypteret tekst, og vil være synligt for alle med adgang til databasen eller til denne konfigurationsside.</em>',
	'LDAP_PORT'						=> 'LDAP-serverport',
	'LDAP_PORT_EXPLAIN'				=> 'Hvis standardporten 389 ikke anvendes når der tilsluttes til LDAP serveren, kan du her indtaste hvilken alternativ port phpBB skal anvende i stedet.',
	'LDAP_SERVER'					=> 'LDAP-servernavn',
	'LDAP_SERVER_EXPLAIN'			=> 'Ved brug af LDAP er dette navnet eller IP-adressen på LDAP-serveren. Alternativt kan du indtaste en URL, eksempelvis ldap://værtsnavn:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Dette er den nøgle under hvilken der søges efter et givent login, for eksempel <var>uid</var>, <var>sn</var>, osv.',
	'LDAP_USER'						=> 'LDAP-bruger <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Efterlades tomt for at benytte anonym tilslutning. Udfyldes feltet vil phpBB anvende det indtastede Distinguished Name (DN) ved loginforsøg for at bestemme den korrekte bruger, for eksempel <samp>uid=Brugernavn,ou=MinAfdeling,o=MitFirma,c=DK</samp>. Kræves af Active Directory-servere.',
	'LDAP_USER_FILTER'				=> 'LDAP-brugerfilter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Ved at anvende yderligere filtre har du mulighed for at begrænse de objekter der søges i. For eksempel vil <samp>objectClass=posixGroup</samp> betyde at <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp> anvendes',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Her kan du tilpasse server- og domæneafhængige indstillinger. Du bør sikre dig at data er akkurate, da fejl her vil resultere i e-mails med forkerte links. Bemærk at indtastning af domænenavn inkluderer http:// eller anden protokolangivelse. Ret kun portnummeret hvis du ved at din server bruger en anden værdi, port 80 er korrekt i de fleste tilfælde.',

	'ENABLE_GZIP'				=> 'Aktiver GZip-komprimering',
	'ENABLE_GZIP_EXPLAIN'		=> 'Det genererede indhold bliver komprimeret inden afsendelse. Det mindsker netværkstrafikken, og dermed også båndbreddeforbruget, til gengæld øges belastningen af både serverens og brugeres CPU. Det forudsætter at PHP-udvidelsen zlib er aktiv.',
	'FORCE_SERVER_VARS'			=> 'Gennemtving servers URL-indstillinger',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Serverindstillingerne indtastet nedenfor vil blive brugt frem for de automatisk læste værdier.',
	'ICONS_PATH'				=> 'Indlægsikon-mappens placering',
	'ICONS_PATH_EXPLAIN'		=> 'Sti under din phpBB-rodmappe, for eksempel <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Aktiver URL-rewriting',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'URL\'er indeholdende "app.php" bliver omskrevet for at fjerne filnavnet, som eksempel bliver app.php/foo til /foo. <strong>Apache-serverens mod_rewrite-modul er krævet for at denne funktionalitet virker. Aktiveres funktionen uden modulet, er der risiko for at URL\'er på dit board ikke virker.</strong>',
	'MOD_REWRITE_DISABLED'		=> '<strong>mod_rewrite</strong>-modulet på din Apache-webserver er deaktiveret. Aktiver modulet eller kontakt din hostingudbyder, hvis du ønsker at gøre brug af denne funktion.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Vi kan ikke afgøre om denne server understøtter URL-rewriting. Funktionen kan aktiveres, men er URL-rewriting ikke tilgængelig, er der risiko for at stier dannet af boardet ikke er korrekte (for eksempel i links). Kontakt din hostingudbyder, hvis du er usikker på om du risikofrit kan aktivere funktionen.',
	'PATH_SETTINGS'				=> 'Stikonfigurationer',
	'RANKS_PATH'				=> 'Rangikonmappens placering',
	'RANKS_PATH_EXPLAIN'		=> 'Sti under din phpBB-rodmappe, for eksempel <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Sti til script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Sti til phpBB relativt i forhold til domænenavnet, eksempelvis <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domænenavn',
	'SERVER_NAME_EXPLAIN'		=> 'Domænenavn hvorfra dette board kører (for eksempel: <samp>www.eksempel.dk</samp>).',
	'SERVER_PORT'				=> 'Serverport',
	'SERVER_PORT_EXPLAIN'		=> 'Port 80 anvendes som standard af alle webservere. Indstillingen skal kun ændres i helt særlige tilfælde.',
	'SERVER_PROTOCOL'			=> 'Serverprotokol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Denne indstilling kan sættes til enten http:// eller https:// og er dermed fast defineret. Hvis feltet ikke udfyldes, fastsættes protokollen ud fra sikkerhedsindstillingerne i cookies (<samp>http://</samp> eller <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Servers URL-indstillinger',
	'SMILIES_PATH'				=> 'Smiley-mappens placering',
	'SMILIES_PATH_EXPLAIN'		=> 'Sti under din phpBB-rodmappe, for eksempel <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Filtypeikon-mappens placering',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Sti under din phpBB-rodmappe, for eksempel <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'		=> 'Udfør opgaver med faste intervaller',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'Vælges nej, udfører phpBB med faste intervaller automatisk nogle foruddefinerede opgaver. Vælges ja, stoppes denne automatik, og de ønskede opgaver skal defineres i filen <code>bin/phpbbcli.php cron.php</code>, og hvor ofte de skal udføres, eksempelvis hver 5. minut.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse sessions- og loginrelaterede indstillinger.',

	'ALL'							=> 'Alle',
	'ALLOW_AUTOLOGIN'				=> 'Tillad login med "Husk mig"',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Ved første login får brugere mulighed for at vælge "Husk mig", og vil automatisk blive logget in ved fremtidige besøg på boardet.',
	'ALLOW_PASSWORD_RESET'			=> 'Tillad nulstilling af adgangskode ("Glem adgangskode")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Bestemmer om brugere kan gøre brug af linket "Jeg har glemt min adgangskode" på login-siden. Det kan være nyttigt at deaktivere denne funktion, hvis du anvender en ekstern godkendelsesmekaniske.',
	'AUTOLOGIN_LENGTH'				=> '"Husk mig"-nøgle udløber efter',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Nøglen udløber efter det indtastede antal dage. Indtastes nul udløber nøglen ikke.',
	'BROWSER_VALID'					=> 'Valider browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Brugeres browser valideres for hver session.',
	'CHECK_DNSBL'					=> 'Kontroller IP-adresser imod DNS blackhole liste',
	'CHECK_DNSBL_EXPLAIN'			=> 'Brugeres IP-adresse kontrolleres ved tilmelding og når der indsendes indlæg, i følgende DNSBL-tjenester: <a href="http://spamcop.net">spamcop.net</a> og <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Opslaget kan tage lidt tid, afhængig af serverkonfigurationen. Hvis kontrollen medfører for mange fejlagtige afvisninger eller nedsætter "ekspeditionstiden", anbefales det at slå kontrollen fra.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Kontroller e-maildomæne',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'E-maildomæne kontrolleres for en gyldig MX-record ved tilmelding og ændring i brugerprofiler.',
	'FORCE_PASS_CHANGE'				=> 'Gennemtving adgangskodeændring efter',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Tilmeldte brugere bliver bedt om at skifte adgangskode efter det valgte antal dage. 0 deaktiverer denne tvungne ændring.',
	'FORM_TIME_MAX'					=> 'Maksimal tid til at indsende formularer',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Tidsrummet brugere har til at indsende en formular. Sæt værdien til -1 for at slå indstillingen fra. Bemærk at en formular kan blive ugyldig hvis sessionen udløber, uanset denne indstilling.',
	'FORM_SID_GUESTS'				=> 'Knyt formularer til gæstesessioner',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Formularers token udgivet til gæster baseres på enkeltsessioner. Bemærk at denne indstilling kan give problemer i forhold til nogle værter.',
	'FORWARDED_FOR_VALID'			=> 'Valider <var>X_FORWARDED_FOR</var>-hoved',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessioner vil kun blive fortsat, hvis det sendte <var>X_FORWARDED_FOR</var>-hoved svarer til det, der blev sendt med den forrige anmodning. Udelukkelser bliver også kontrolleret imod IP-adresser i <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Validering af IP-adresser',
	'IP_VALID_EXPLAIN'				=> 'Afgør hvor meget af brugeres IP-adresse, der bruges til at validere en session. <samp>Alle</samp> sammenligner hele adressen, <samp>A.B.C</samp> de første x.x.x, <samp>A.B</samp> de første x.x, <samp>Ingen</samp> slår kontrol fra. I IPv6 adresser vil <samp>A.B.C</samp> sammenligne de første 4 blokke og <samp>A.B</samp> de første 3 blokke.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Maksimalt antal loginforsøg pr. IP-adresse',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Overskrides denne grænse, udfordres bruger med en anti-spambot-opgave. 0 giver et ubegrænset antal loginforsøg.',
	'IP_LOGIN_LIMIT_TIME'			=> 'Udløbstid for loginforsøg pr. IP-adresse',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Det tidsrum loginforsøg accepteres fra en IP-adresse.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Begræns loginforsøg pr. <var>X_FORWARDED_FOR</var>',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'I stedet for at sætte grænsen for loginforsøg pr. IP-adresse, identificeres loginforsøg efter for værdierne i <var>X_FORWARDED_FOR</var>-hovedet. <br><em><strong>Advarsel:</strong> Anvend kun denne identificering hvis din proxy-server sætter pålidelige værdier i <var>X_FORWARDED_FOR</var>.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maksimalt antal loginforsøg pr. bruger',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Overskrides denne grænse, udfordres bruger med en anti-spambot-opgave. 0 giver et ubegrænset antal loginforsøg.',
	'NO_IP_VALIDATION'				=> 'Ingen',
	'NO_REF_VALIDATION'				=> 'Ingen',
	'PASSWORD_TYPE'					=> 'Adgangskodekompleksitet',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Bestem kompleksiteten af brugeres adgangskode. Dit valg i dropdown-menuen inkluderer ovenstående krav, eksklusiv "Ingen krav".',
	'PASS_TYPE_ALPHA'				=> 'Skal indeholde bogstaver og tal',
	'PASS_TYPE_ANY'					=> 'Ingen krav',
	'PASS_TYPE_CASE'				=> 'Skal indeholde store og små bogstaver',
	'PASS_TYPE_SYMBOL'				=> 'Skal indeholde symboler',
	'REF_HOST'						=> 'Valider kun vært',
	'REF_PATH'						=> 'Valider også sti',
	'REFERRER_VALID'				=> 'Valider reference',
	'REFERRER_VALID_EXPLAIN'		=> 'Hvis kontrollen er aktiveret, bliver referencens POST-forespørgsler kontrolleret mod hosten/indstillinger for scriptsti. Denne kontrol kan medføre problemer på boards med flere domæner og/eller eksterne logins.',
	'TPL_ALLOW_PHP'					=> 'Tillad PHP i skabeloner',
	'TPL_ALLOW_PHP_EXPLAIN'			=> '<code>PHP</code>- og <code>INCLUDEPHP</code>-statements i skabelonfilerne bliver genkendt og fortolket.',
	'UPLOAD_CERT_VALID'				=> 'Valider upload-certifikat',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> 'Remote upload-certifikat skal godkendes, hvis denne aktiveres. Det forudsætter at CA-bundlen er defineret i indstillingerne <samp>openssl.cafile</samp> eller <samp>curl.cainfo</samp> i din php.ini.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Disse indstillinger anvendes af boardet ved forsendelse af e-mails til tilmeldte brugere. Bemærk venligst at denne e-mailadresse skal være gyldig, da enhver tilbagesendt eller vildfaren e-mail sandsynligvis vil blive returneret til denne e-mailadresse. Hvis din vært ikke lader dig bruge den indbyggede (PHP-baserede) e-mail-tjeneste, kan du i stedet sende e-mails direkte igennem SMTP. Dette kræver adressen på en passende server (spørg om nødvendigt din vært). Hvis serveren kræver godkendelse (og kun hvis den gør), indtastes det nødvendige brugernavn, adgangskode og godkendelsesmetoden.',

	'ADMIN_EMAIL'					=> 'Afsender e-mailadresse',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Denne e-mailadresse bruges som afsenderadresse for alle e-mails, dvs. e-mailadressen for teknisk kontakt. Den bruges altid som <samp>Sender</samp> adressen i e-mails.',
	'BOARD_EMAIL_FORM'				=> 'Brugere sender e-mails via boardet',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Brugere kan tilsendes e-mail via boardets e-mailsystem, selvom e-mailadresser er skjulte.',
	'BOARD_HIDE_EMAILS'				=> 'Skjul e-mailadresser',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Denne funktion holder e-mailadresser fuldstændigt private.',
	'CONTACT_EMAIL'					=> 'E-mailadresse for kontakt',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Denne e-mailadresse bruges overalt, hvor der er specifikke kontaktpunkter, for eksempel spam, fejlmeddelelser, problemer med tilmelding osv. Den vil altid blive anvendt som <samp>From</samp> og <samp>Reply-To</samp>-adresserne i e-mails.',
	'CONTACT_EMAIL_NAME'			=> 'Kontaktnavn',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Det navn som modtagere af e-mail vil se. Ønsker du ikke et kontaktnavn, efterlades feltet tomt.',
	'EMAIL_FORCE_SENDER'			=> 'Gennemtving afsender e-mailadresse',
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> 'Indstiller <samp>Return-Path</samp> til afsender e-mailadressen i stedet for at anvende den lokale bruger og serverens hostnavn. Denne indstilling anvendes ikke når der bruges SMTP.<br><em><strong>Advarsel:</strong> Forudsætter at webserveren kører som tilføjet troværdig bruger til sendmail-konfigurationen.</em>',
	'EMAIL_PACKAGE_SIZE'			=> 'Pakkestørrelse for e-mails',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Antallet af e-mails der afsendes i en pakke. Indstillingen tilføjes den interne kø. Sæt indstillingen til 0 hvis du oplever problemer med ikke leverede e-mails.',
	'EMAIL_SIG'						=> 'Signatur i e-mails',
	'EMAIL_SIG_EXPLAIN'				=> 'Denne tekst bruges som signatur i alle e-mails udsendt af boardet.',
	'ENABLE_EMAIL'					=> 'Boardets e-mailsystem er',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Er systemet deaktiveret, afsendes absolut ingen e-mails fra boardet. <em>Bemærk, at skal nye konti aktiveres af bruger eller administrator, forudsætter det at systemet er aktivt. Er kontoaktivering allerede indstillet til "bruger" eller "administrator", vil deaktivering af denne indstilling samtidig bevirke at muligheden for tilmelding også deaktiveres.</em>',
	'SEND_TEST_EMAIL'				=> 'Send en test-e-mail',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'Der afsendes en test-e-mail til den adresse der er tilknyttet din konto.',
	'SMTP_ALLOW_SELF_SIGNED'		=> 'Tillad selvsignerede SSL-certifikater',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> 'Tillad forbindelser til SMTP-server med selvsigneret SSL-certifikat. <br><em><strong>Advarsel:</strong> Det kan medføre sikkerhedsrelaterede implikationer at tillade dette.</em>',
	'SMTP_AUTH_METHOD'				=> 'Godkendelsesmetode for SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Bruges kun, hvis et brugernavn og adgangskode er indtastet, spørg din vært, hvis du er usikker på hvilken metode, der skal bruges.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP-adgangskode',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Indtast kun en adgangskode, hvis din SMTP-server kræver det.<br><em><strong>Advarsel:</strong> Adgangskoden bliver lagret i databasen i klar og ukrypteret tekst, og vil være synligt for alle med adgang til databasen eller til denne konfigurationsside.</em>',
	'SMTP_PLAIN'					=> 'Almindelig',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-før-SMTP',
	'SMTP_PORT'						=> 'SMTP-serverport',
	'SMTP_PORT_EXPLAIN'				=> 'Skift kun denne, hvis du ved, at din SMTP-server benytter en anden port.',
	'SMTP_SERVER'					=> 'Adresse på SMTP-server',
	'SMTP_SERVER_EXPLAIN'			=> 'Bemærk at du skal anføre den protokol din server anvender. Hvis der anvendes SSL, anføres "ssl://example.com"',
	'SMTP_SETTINGS'					=> 'SMTP-indstillinger',
	'SMTP_USERNAME'					=> 'SMTP-brugernavn',
	'SMTP_USERNAME_EXPLAIN'			=> 'Indtast kun et brugernavn, hvis din SMTP-server kræver det.',
	'SMTP_VERIFY_PEER'				=> 'Verificer SSL-certifikat',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'Kræver verifikation af SMTP-servers SSL-certifikat.<br><em><strong>Advarsel:</strong> Det kan medføre sikkerhedsrelaterede implikationer at forbinde servere med ikke verificerede SSL-certifikater.</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'Verificer SMTP peer-navn',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'Kræver verifikation af peer-navn for SMTP-servere der bruger SSL/TLS-forbindelser.<br><em><strong>Advarsel:</strong> Det kan medføre sikkerhedsrelaterede implikationer at undlade dette.</em>',
	'TEST_EMAIL_SENT'				=> 'Der er netop afsendt en test-e-mail.<br>Modtager du den ikke, bedes du kontrollere dine e-mailkonfigurationer.<br><br>Har du brug for assistance, kan du søge hjælp på <a href="https://www.phpbb.com/community/">phpBB support forums</a>.',
	'USE_SMTP'						=> 'Brug SMTP-server til e-mail',
	'USE_SMTP_EXPLAIN'				=> 'Vælg "Ja", hvis du vil eller skal bruge en navngiven server til at sende e-mail i stedet for boardets indbyggede e-mailfunktion.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Herfra kan du aktivere og administrere brugen af Jabber til at fremsende notifikationer om nye private beskeder og ved opdateringer i overvågede emner og fora. Jabber er en protokol udviklet som Open Source og kan derfor bruges af enhver. Nogle Jabber-servere inkluderer adgangspunkter eller transporter, der tillader dig at kontakte brugere af andre netværk. Ikke alle servere tilbyder alle former for transporter, og ændringer i protokoller kan forhindre transporter i at fungere. Indtast her omhyggeligt en til formålet oprettet Jabber-konto - phpBB gør brug af disse data.',

	'JAB_ALLOW_SELF_SIGNED'			=> 'Tillad selvsignerede SSL-certifikater',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> 'Tillader forbindelser til Jabber-servere med selvsigneret SSL-certifikat.<br><em><strong>Advarsel:</strong> Det kan medføre sikkerhedsrelaterede implikationer at tillade dette.</em>',
	'JAB_ENABLE'					=> 'Jabber er',
	'JAB_ENABLE_EXPLAIN'			=> 'Jabber kan anvendes til at sende beskeder og notifikationer.',
	'JAB_GTALK_NOTE'				=> 'Bemærk venligst at funktionen <samp>dns_get_record</samp> ikke blev fundet, hvorfor anvendelsen af GTalk ikke fungerer. <samp>dns_get_record</samp> er ikke tilgængelig i PHP4 og ikke implementeret på Windowsplatformene. Den fungerer i øjeblikket heller ikke på BSD-baserede systemer, som også inkluderer MacOS.',
	'JAB_PACKAGE_SIZE'				=> 'Pakkestørrelse for Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'		=> 'Dette er antallet af beskeder sendt i en pakke. Hvis indstillet til 0 sendes beskeden med det samme og sættes ikke i kø til senere afsendelse.',
	'JAB_PASSWORD'					=> 'Jabber-adgangskode',
	'JAB_PASSWORD_EXPLAIN'			=> '<em><strong>Advarsel:</strong> Adgangskoden bliver lagret i databasen i klar og ukrypteret tekst, og vil være synligt for alle med adgang til databasen eller til denne konfigurationsside.</em>',
	'JAB_PORT'						=> 'Jabber-port',
	'JAB_PORT_EXPLAIN'				=> 'Udfyldes ikke, med mindre du ved at det ikke er port 5222.',
	'JAB_SERVER'					=> 'Jabber-server',
	'JAB_SERVER_EXPLAIN'			=> 'Se listen over offentligt tilgængelige servere på %sjabber.org%s.',
	'JAB_SETTINGS_CHANGED'			=> 'Jabber-indstillinger korrekt opdateret.',
	'JAB_USE_SSL'					=> 'Tilslut med SSL',
	'JAB_USE_SSL_EXPLAIN'			=> 'En sikker forbindelse forsøges etableret. Den anvendte Jabber-port bliver ændret til 5223, hvis port 5222 er indtastet.',
	'JAB_USERNAME'					=> 'Jabber-brugernavn eller JID',
	'JAB_USERNAME_EXPLAIN'			=> 'Indtast en tilmeldt Jabber-konto eller et gyldigt JID. Brugernavnets gyldighed kontrolleres ikke. Anfører du alene brugernavn, sættes dit JID som dette og serveren som specificeret ovenfor. Ellers indtastes et gyldigt JID, eksempelvis bruger@jabber.org.',
	'JAB_VERIFY_PEER'				=> 'Verificer SSL-certifikat',
	'JAB_VERIFY_PEER_EXPLAIN'		=> 'Kræver verifikation af Jabber-servers SSL-certifikat.<br><em><strong>Advarsel:</strong> Det kan medføre sikkerhedsrelaterede implikationer at forbinde servere med ikke verificerede SSL-certifikater.</em>',
	'JAB_VERIFY_PEER_NAME'			=> 'Verificer Jabber peer-navn',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> 'Kræver verifikation af peer-navn for Jabber-servere der bruger SSL/TLS-forbindelser.<br><em><strong>Advarsel:</strong> Det kan medføre sikkerhedsrelaterede implikationer at undlade dette.</em>',
));
