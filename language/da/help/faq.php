<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: faq.php 576 2017-01-28 21:04:28Z jan_skovsgaard $
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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'En boardadministrator kan tillade og forbyde bestemte filtyper. Hvis du er usikker på hvilke typer der kan uploades, kan du kontakte boardadministratoren.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Hvilke filtyper er det tilladt at vedhæfte på dette board?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Via brugerkontrolpanelet kan du følge linket til vedhæftede filer, og her få vist en samlet liste over de filer du har uploadet.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Hvordan finder jeg alle mine vedhæftede filer?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Vedhæftede filer',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Bogmærker og overvågnings',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Formatering og emnetyper',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Venner og ignorerede brugere',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Brugerniveauer og -grupper',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB spørgsmål',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Login- og tilmelding',
	'HELP_FAQ_BLOCK_PMS'	=> 'Private beskeder',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Skrive et indlæg',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Søgning i fora',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Brugerindstillinger og muligheder',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'Bogmærker i phpBB3.0 fungerede stort set som bogmærker i din browser. Du fik ikke besked når der blev foretaget en opdatering. Fra phpBB3.1 virker bogmærker næsten som en overvågning. Du kan få en notifikation når et bogmærket emne opdateres. Hvis du derimod vælger at overvåge et emne, vil du modtage en besked hvis der foretages en opdatering i et emne eller et forum på boardet.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Hvad er forskellen på at bogmærke og på at overvåge?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'For at overvåge et bestemt forum, kan du, når du er i forummet, nederst på siden, se et link "Overvåg forum". Ved klikke på linket aktiverer du overvågning af hele forummet.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Hvordan overvåger jeg specifikke fora?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Du kan fjerne overvågninger i brugerkontrolpanelet ved at følge linket til dine overvågninger. Overvågninger af emner kan også fjernes når du viser indlæg i disse.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Hvordan fjerner jeg mine overvågninger?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Du kan bogmærke eller bede om overvågning af et bestemt emne ved at klikke på det rette link i menuen "Emneværktøjer", bekvemt placeret nær toppen og bunden når emnet læses.<br />Når du skriver et indlæg i et emne, med boksen "Giv mig besked ved besvarelse" vinget af, vil du også overvåge emnet.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Hvordan bogmærker eller overvåger jeg specifikke emner?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Bekendtgørelser indeholder typisk vigtige beskeder angående forummet, og du bør læse dem når muligt. Bekendtgørelser vises altid på toppen af alle sider i det forum de er skrevet til. Om det er muligt for dig at skrive en bekendtgørelse afgøres ud fra de tilladelser som du har, disse er fastsat af en administrator.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Hvad er bekendtgørelser?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBkoder er en speciel form for HTML, der giver dig formateringskontrol over visse dele af et indlæg. Om du kan bruge BBkoder er noget administratoren af boardet afgør. Du kan også fjerne muligheden for dette pr. emne. BBkoder skrives på samme måde som HTML, hvor teksten omsluttes af et start- og sluttag, koderne er omsluttet af hakparenteser [ og ] i stedet for &lt; og &gt; og de tilbyder større kontrol over hvad og hvordan teksten præsenteres. For at få mere information om BBkoder, se da venligst hjælpen som kan ses når du skriver et indlæg.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Hvad er BBkoder?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Globale bekendtgørelser indeholder vigtige informationer, og du bør læse dem når muligt. Globale bekendtgørelser vises i toppen af alle fora og tillige i dit brugerkontrolpanel. Om det er muligt for dig at skrive en global bekendtgørelse afgøres ud fra de tilladelser som du har, disse er fastsat af en administrator.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Hvad er globale bekendtgørelser?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Nej, det er ikke muligt at skrive HTML-kode i indlæg og få det vist som HTML. Det meste af den formatering, der kan udføres med HTML, kan udføres ved at anvende BBkode i stedet.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Kan jeg bruge HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Emneikoner er små billeder som kan tilknyttes et indlæg for at indikere indholdet i emnet. Muligheden for at anvende emneikonerne afhænger af de tilladelser administratoren har defineret.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Hvad er emneikoner?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Ja, det kan du. Hvis administratoren har tilladt vedhæftede filer, kan du uploade billedet til boardet. Ellers kan det være nødvendigt med et link til et andet websted (komplet URL) hvor billedet altid kan hentes fra. En komplet URL kan for eksempel se ud som http://www.eksempel.dk/billeder/mit-billede.gif. Du kan ikke henvise til billeder på din egen maskine (medmindre disse er på en server der altid er forbundet med Internettet). Ej heller billeder gemt bag loginfunktioner, for eksempel hotmail-/yahoo-postkasser eller andre steder beskyttet af adgangskoder. For at vise et billede skal du anvende BBkode [img].',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Kan jeg få vist billeder i mit indlæg?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Låste emner er sat således enten af en administrator eller af en redaktør. Du kan ikke svare på indlæg i sådan et emne, og eventuelle afstemninger vil ligeledes være afsluttede. Emnet kan være blevet låst af en administrator eller redaktør af mange årsager. Du kan også have mulighed for at låse dine egne emner, afhængig af de tilladelser administratoren har tildelt dig.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Hvad er låste emner?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Smileys, er små grafiske ikoner - eller billeder, som kan benyttes til at signalere bestemte følelser. De bruges via en kort tekstkode, for eksempel :) betyder glad, :( betyder ked af det. Den komplette liste over alle smileys kan ses når der skrives et nyt indlæg. Bemærk at det ikke er god tone at overdrive brugen smileys. De kan hurtigt gøre et indlæg uoverskueligt, og en redaktør eller administrator kan beslutte at fjerne dem med hård hånd, måske endda selve indlægget. Boardadministratoren kan også have sat et maksimum for antallet af smileys pr. indlæg.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Hvad er smileys?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Opslag er indlæg som altid vises lige under bekendtgørelserne i et forum, til forskel fra bekendtgørelserne vises opslag kun på den første side. De er ofte også temmelig vigtige, og du bør læse dem, når du har mulighed for det. Ligesom med bekendtgørelser er det boardets administrator, der fastsætter de nødvendige tilladelser for at kunne skrive et opslag i et forum.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Hvad er opslag?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Du kan bruge listerne til at organisere andre brugere af boardet. Brugere på din venneliste bliver listet i brugerkontrolpanelet, så du hurtigt kan se deres onlinestatus og sende dem private beskeder. Afhængig af om boardets skabelon understøtter dette, vil indlæg fra disse brugere også blive fremhævet. Hvis du vælger at ignorere en bruger, vil alle indlæg fra denne som standard blive skjult for dig.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Hvad indeholder listerne "Venner og ignorerede brugere"?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Du kan føje brugere til listerne på to måder. I hver brugers profil findes et link som kan bruges, enten til at føje brugeren til din venneliste, eller til listen over ignorerede brugere. Alternativt kan du i brugerkontrolpanelet tilføje brugere direkte ved at indtaste brugernavne. Her kan du også fjerne brugere fra dine lister.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Hvordan tilføjer og fjerner jeg brugere på mine lister over venner og ignorerede brugere?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administratorer er de personer der er tildelt det højeste trin af indstillingsmuligheder omkring alle fora på boardet. Disse personer kan, afhængig af hvad boardets grundlægger har givet administratorerne tilladelse til, indstille alle mulige ting om foraene, såsom tilladelser, udelukkelse af bestemte brugere, tilføje brugergrupper eller redaktører osv. De har også samme rettigheder som redaktører under alle fora.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Hvad er administratorer?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Boardadministratoren kan vælge at tilknytte en bestemt farve til medlemmerne af en brugergruppe, for at gøre det enklere at identificere medlemmerne af denne gruppe.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Hvorfor vises nogle brugergrupper med en anden farve?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Hvis du er medlem af mere end en brugergruppe, vil din standardbrugergruppe være afgørende for hvilken gruppefarve og rang der vises for dig. En boardadministrator kan give dig tilladelse til at ændre din standardbrugergruppe i brugerkontrolpanelet.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Hvad er "Standardbrugergruppe"?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Redaktører er udpegede personer (eller grupper af personer) hvis job er at holde øje med driften af foraene fra dag til dag. De har retten til at rette eller slette andres indlæg, låse et emne eller låse et emne op igen, flytte eller dele et emne i forummet som de er redaktører for. I almindelighed er redaktørens opgave at forhindre at folk skriver indlæg som <em>ikke hører hjemme under emnet</em> eller hvis de skriver absurde eller andre aggressive ting.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Hvad er redaktører?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Siden viser dig brugernavnene på personerne bag dette board, hvem der er administratorer, redaktører og hvilke fora de hver især redigerer.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Hvad viser linket til "Holdet"?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Brugergrupper anvendes af boardets administratorer til at opdele brugere i overskuelige grupper. En bruger kan være medlem af flere grupper og hver gruppe kan tildeles individuelle tilladelser. Det gør det enkelt for administratorerne at ændre tilladelser for mange brugere samtidig, som at tildele redaktørtilladelser i et bestemt forum, eller til at give brugere adgang til private fora.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'I brugerkontrolpanelet finder du en samlet oversigt under fanebladet "brugergrupper". Ønsker du at tilmelde dig en af disse, klikker du på den rette knap. Imidlertid er ikke alle grupper åbne, nogle kræver godkendelse, andre er lukkede og andre kan desuden have skjult medlemmerne. Hvis gruppen er en åben, kan du tilmelde dig ved at klikke dig frem. Hvis tilmelding til en gruppe kræver godkendelse, skal gruppelederen godkende din tilmelding og vedkommende ønsker måske en begrundelse for dit ønske om at tilmelde dig gruppen. Plag ikke lederen hvis din ansøgning ikke bliver godkendt, vedkommende har nok sine grunde.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Hvordan finder jeg brugergrupperne og hvordan tilmelder jeg mig?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Lederen af en brugergruppe udpeges normalt ved oprettelsen af gruppen af en boardadministrator. Hvis du er interesseret i at få oprettet en brugergruppe, skal du som det første kontakte en administrator; forsøg at sende en privat besked.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Hvordan bliver jeg leder af en gruppe?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Hvad er brugergrupper?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Alle boardet brugere kan benytte formularen "Kontakt os", hvis boardadministrator har aktiveret denne.<br />Tilmeldte brugere kan også anvende linket til "Holdet".',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Hvordan kommer jeg i kontakt med en boardadministrator?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Denne software er udviklet og stillet til rådighed på licens af phpBB Limited. Hvis du mener der er en funktion der mangler, besøg venligst <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>, hvor du kan forelå nye funktioner eller stemme på allerede stillede forslag.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Hvorfor er X funktioner ikke til stede?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Du kan kontakte enhver af administratorerne anført på siden "Holdet". Hvis du ikke får nogen tilbagemelding, kan du forsøge at kontakte ejeren af domænet (udfør en <a href="http://www.google.com/search?q=whois">whois søgning</a>). Hvis boardet afvikles hos en af de mange gratis tjenester: Yahoo!, free.fr, f2s.com m.fl., bør du kontakte den pågældende udbyders kundekontor eller misbrugsafdeling. Vær venligst opmærksom på at phpBB Group <strong>absolut ingen kontrol</strong> har over indholdet, og ej heller kan holdes ansvarlige for hvordan, hvor eller af hvem dette board bliver benyttet. Kontakt derfor ikke phpBB Limited i forbindelse med eventuelle ulovligheder, eller for at få stoppet uansvarlige brugere eller æreskrænkende indlæg, hvis disse <strong>ikke har direkte forbindelse</strong> med webstedet www.phpbb.com eller funktionen af softwaren phpBB. Hvis du sender en email til phpBB Group angående <strong>enhver tredjeparts</strong> brug af denne software, kan du forvente et kort eller slet intet svar.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Hvem kontakter jeg vedr. misbrug og/eller lovligheden af indlæg skrevet til dette board?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Denne software (i sin umodificerede udgave) er udviklet og udgivet af <a href="https://www.phpbb.com/">phpBB Limited</a>, som har ophavsret. Den er offentligt tilgængelig under GNU General Public License, version 2 (GPL-2.0) og kan frit distribueres. Læs <a href="https://www.phpbb.com/about/">About phpBB</a> for yderligere information.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Hvem har skrevet koden til dette board?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Når du logger ind, vil du automatisk blive logget af efter et stykke tid. Tidsbegrænsningen er sat for at mindske risikoen for misbrug af din konto. Du kan vælge at blive logget automatisk ind ved at vælge boksen <em>Husk mig</em>, når du logger ind. Du bør <strong>IKKE</strong> anvende denne indstilling på en offentlig computer, som også bruges af andre personer, for eksempel på biblioteker, skoler osv. Hvis du ikke kan se boksen ved log ind, har administratoren slået muligheden for automatisk indlogning fra.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Hvorfor bliver jeg logget ud hele tiden?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Der kan være flere grunde til, at du ikke kan logge ind. Først bør du sikre dig, at du taster brugernavn og adgangskode korrekt. Husk, at der skelnes mellem store og små bogstaver i adgangskoden - kontroller tasten "Caps Lock". Hvis oplysningerne er korrekte, kan problemet skyldes en af følgende årsager: Hvis COPPA-understøttelse er slået til på boardet, og du har klikket på <em>jeg er under 13 år</em>, da du tilmeldte dig, skal du følge instruktionen i den email, du har modtaget. Det kan også skyldes, at din konto skal aktiveres. Nogle boards kræver at nyoprettede brugerkonti aktiveres af enten brugeren selv eller en administrator, inden disse kan benyttes. Da du tilmeldte dig, skulle du gerne være blevet gjort opmærksom på om aktivering af kontoen er nødvendig. Hvis du har modtaget en email, skal du følge instruktionen i den. Hvis du ikke har modtaget nogen email, kan det skyldes, at den email-adresse du angav ved tilmeldingen ikke var korrekt. Aktivering benyttes for at mindske muligheden for, at <em>uønskede</em> personer misbruger systemet ved at give ukorrekte oplysninger. Hvis du er 100% sikker på, at du har skrevet den rigtige email-adresse, bør du kontakte en boardadministrator.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Der kan være flere grunde til, at du ikke kan logge ind. Først bør du sikre dig, at du taster brugernavn og adgangskode korrekt. Husk, at der skelnes mellem store og små bogstaver i adgangskoden - kontroller tasten "Caps Lock". Problemet kan også skyldes, at administratoren har slettet eller deaktiveret din konto, fordi du ikke har skrevet nogle indlæg. Det er normal procedure med jævne mellemrum at fjerne brugere, som aldrig har skrevet indlæg. Tilmeld dig igen for at blande dig i diskussionerne.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Jeg har tilmeldt mig for et stykke tid siden, og kan nu ikke logge ind længere?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Hvorfor kan jeg ikke logge ind?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Det kan skyldes at en boardadministrator har udelukket din IP-adresse eller har forbudt brugernavnet, du forsøger at tilmelde dig med. En boardadministrator kan også have slået muligheden for at tilmelde sig fra og bevidst have lukket for nye tilmeldinger. Kontakt en boardadministrator for at få hjælp.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Hvorfor kan jeg ikke tilmelde mig?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA står for Child Online Privacy and Protection Act of 1998 og er en lov i United States of America (USA), som kræver, at et websted, som potentielt samler information fra mindreårige under 13 år, skal have en skriftlig tilladelse fra forældrene eller på anden måde have en legal godkendelse af, at siden samler personlige oplysninger fra mindreårige. Hvis du er usikker på, om du er omfattet af denne lov, fordi mindreårige forsøger at tilmelde sig, eller om boardet, du forsøger at tilmelde dig, er under denne lovgivning, bør du kontakte en advokat. Vær venligst opmærksom på at phpBB Limited ikke kan rådgive yderligere i sager omhandlende COPPA.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Hvad er COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> 'Funktionen sletter alle cookies dannet af phpBB. Hvis du har problemer med at logge ind eller ud, kan det hjælpe at slette boardcookies. phpBB bruger cookies til at identificere dig og holde dig logget ind på boardet. Hvis en boardadministrator har slået funktionen til, kan cookies bl.a. også bruges til at registrere, hvilke indlæg du har læst.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Hvilken funktion har "Slet alle boardcookies"?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Gå ikke i panik! Det er ikke muligt at finde din gamle adgangskode, men der kan dannes en ny. Gå til loginsiden ved at klikke på linket <em>Log ind</em> øverst på siden. På denne side kan du klikke på <em>Jeg har glemt min adgangskode</em>. Her kan du indtaste dit brugernavn og din email-adresse. Der fremsendes en email til dig, som udover en ny adgangskode, indeholder et aktiveringslink som skal besøges før de nye adgangskode kan benyttes.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Jeg har glemt min adgangskode!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Det er ikke sikkert, at det er nødvendigt; det er boardets administrator, der afgør, om det er nødvendigt at tilmelde sig for at skrive indlæg. Tilmelding er dog altid en god ide, da det giver adgang til flere muligheder, som ikke er tilgængelige for anonyme brugere; funktioner som personligt billede på dine indlæg, private beskeder, sende emails til andre tilmeldte brugere, brugergrupper osv. Det anbefales derfor at tilmelde sig, og det tager kun et øjeblik.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Der kan være flere grunde til, at du ikke kan logge ind. Først bør du sikre dig, at du taster brugernavn og adgangskode korrekt. Husk, at der skelnes mellem store og små bogstaver i adgangskoden - kontroller tasten "Caps Lock". Hvis oplysningerne er korrekte, kan problemet skyldes en af følgende årsager: Hvis COPPA-understøttelse er slået til på boardet, og du har klikket på <em>jeg er under 13 år</em>, da du tilmeldte dig, skal du følge instruktionen i den email, du har modtaget. Det kan også skyldes, at din konto skal aktiveres. Nogle boards kræver at nyoprettede brugerkonti aktiveres af enten brugeren selv eller en administrator, inden disse kan benyttes. Da du tilmeldte dig, skulle du gerne være blevet gjort opmærksom på om aktivering af kontoen er nødvendig. Hvis du har modtaget en email, skal du følge instruktionen i den. Hvis du ikke har modtaget nogen email, kan det skyldes, at den email-adresse du angav ved tilmeldingen ikke var korrekt. Aktivering benyttes for at mindske muligheden for, at <em>uønskede</em> personer misbruger systemet ved at give ukorrekte oplysninger. Hvis du er 100% sikker på, at du har skrevet den rigtige email-adresse, bør du kontakte en boardadministrator.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Jeg har tilmeldt mig, men kan ikke logge ind!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Hvorfor er det nødvendigt at tilmelde sig?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Der er tre muligheder; du er ikke tilmeldt og/eller ikke logget ind, en boardadministrator har generelt slået private beskeder fra på dette board eller har specifikt fjernet denne mulighed for dig. Kontakt boardadministrator for mere information.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Jeg kan ikke sende private beskeder!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Vi er meget kede af at høre dette. Dette boards emailsystem har indbygget sikkerhedsforanstaltninger, som hjælper med til at identificere brugere, der sender den slags indhold. Du bør sende en kopi af emailen til dette boards administrator. Der er meget vigtigt at denne indeholder den såkaldte header, som indeholder information om den bruger der afsendte emailen. Boardadministratoren kan herefter vurdere evt. sanktioner.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Jeg har modtaget en email, indeholdende spam eller en fornærmelse, fra en bruger på dette board!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'I brugerkontrolpanelet kan du automatisk slette private beskeder fra en eller flere brugere, ved at benytte beskedreglerne i brugerkontrolpanelet. Hvis du modtager grove eller generende beskeder fra en bestemt bruger, kan du informere administratorerne; de kan lukke for brugeres mulighed for at sende private beskeder.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Jeg bliver ved med at få uønskede private beskeder!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Ved at klikke på linket "Placer øverst" når du viser dit emne, kan du flytte emnet til toppen af forummet på den første side. Hvis du ikke kan se linket, kan det skyldes at denne mulighed er slået fra eller at det mindst tilladte tidsrum for at kunne placere øverst endnu ikke er forløbet. Du kan også flytte emnet øverst ved simpelthen at skrive et svar i emnet. Men følg boardets regler herfor, når du gør dette.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Hvordan får jeg placeret mit emne øverst?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'For at skrive et nyt emne i et forum, klikker du på knappen "Nyt emne". For at skrive et indlæg i et eksisterende emne, klikker du på "Besvar". Det kan være det er nødvendigt at tilmelde sig som bruger før du kan skrive et nyt indlæg. Dine tilladelser i hvert forum vises altid i bunden af forum- og emnesiden.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Hvordan opretter jeg et nyt emne eller besvarer et indlæg?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Den giver dig mulighed for at gemme dit indlæg som en kladde og dermed færdiggøre det og indsende det på et senere tidspunkt. Du får adgang til dine gemte kladder via brugerkontrolpanelet.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Hvad kan "Gem" knappen, når jeg skriver et indlæg, bruges til?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Med mindre du er boardets administrator eller forummets redaktør, så kan du kun redigere og slette egne indlæg. Du kan redigere et indlæg, nogle gange kun i et begrænset tidsrum efter det er skrevet, ved at klikke på <em>rediger</em> knappen ud for det rette indlæg. Hvis der allerede er svaret på dit indlæg, bliver der indsat en bemærkning nederst i indlægget om hvornår og hvor mange gange du har redigeret. Denne bemærkning indsættes ikke automatisk, hvis det er administratorer eller redaktører der redigerer. De kan dog vælge at indsætte bemærkningen med info om hvad der er redigeret og hvorfor. Vær opmærksom på, at almindelige brugere ikke kan slette et indlæg, når først der er blevet svaret på det',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Hvordan redigerer eller sletter jeg et indlæg?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Nogle fora kan være begrænsede til udvalgte brugere eller grupper. For at læse og skrive i disse kræves specielle tilladelser. Kun forummets redaktører eller en boardadministrator kan give disse tilladelser. Du bør kontakte en af disse, hvis du mener at du bør have denne tilladelse.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Hvorfor kan jeg ikke få adgang til et forum?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Muligheden for at vedhæfte filer kan tillades pr. forum, pr. brugergruppe, eller for hver enkelt bruger. Boardadministratoren kan have udeladt muligheden for at vedhæfte filer i det specifikke forum du skriver indlæg i, eller måske er det kun administratorgruppen der har denne mulighed. Kontakt administratoren hvis du stadig er usikker på hvorfor du ikke kan vedhæfte filer.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Hvorfor kan jeg ikke vedhæfte filer?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Det maksimale antal afstemningsmuligheder er indstillet af boardadministrator. Hvis du har behov for at tilføje flere afstemningsmuligheder til din afstemning end tilladt, kontakt da venligst en boardadministrator.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Hvorfor kan jeg ikke tilføje flere afstemningsmuligheder?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Når du skriver et nyt emne (eller hvis du har tilladelse: retter i det første indlæg i et emne) findes, lige under feltet hvor selve indlægget skrives, fanebladet "Tilføj en afstemning". Hvis du ikke kan se dette, er det sandsynligvis fordi du ikke har tilladelse til at oprette en afstemning. Her skal du indtaste en overskrift som beskriver afstemningen, og mindst to valgmuligheder i tekstfeltet (det maksimale antal afstemningsmuligheder er fastsat af boardadministratoren). Hver afstemningsmulighed indtastes på en linje for sig, og lige under defineres hvor mange af disse, der kan vælges. Desuden kan du bestemme i hvor lang tid afstemningen skal køre. Hvis du ikke indtaster et tidsrum eller skriver 0, fortsætter afstemningen, og du kan bestemme om brugere skal have mulighed for at ændre deres stemme.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Hvordan opretter jeg en afstemning?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Ligesom med andre emneindlæg, kan afstemninger kun rettes af den person som oprindeligt oprettede afstemningen, eller af en administrator eller redaktør af forummet. For at rette i en afstemning (teksten), klik da på det første indlæg i afstemningen. Det er altid dette indlæg, som har afstemningen tilknyttet. Såfremt der ikke er afgivet nogen stemmer, kan der rettes og slettes i afstemningsmulighederne. Hvis der derimod er blevet afgivet stemmer er det kun forummets redaktører og administratorer, der kan rette eller slette en afstemning. Dette er for at forhindre at folk kan manipulere med resultatet ved at ændre i betydningen halvvejs inde i afstemningen.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Hvordan retter eller sletter jeg en afstemning?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Boardadministratoren kan beslutte at det forum du skriver til, skal have alle indlæg gennemset og godkendt inden de offentliggøres. Der er også mulighed for at administratoren har placeret dig i en speciel gruppe af brugere, som han eller hun mener skal have indlæg gennemset og godkendt, inden de offentliggøres. Kontakt eventuelt venligst en administrator for yderligere information.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Hvorfor skal mit indlæg godkendes?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Hvis boardadministratoren har tilladt det, kan du gå til det indlæg du ønsker at rapportere, og du vil på siden kunne se en knap som er beregnet til at rapportere indlægget. Ved at klikke på denne, vil du blive ledt gennem de nødvendige trin i forbindelse med rapporteringen.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Hvordan rapporterer jeg indlæg til en redaktør?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'For et indsætte en signatur nederst i dit indlæg, skal du først oprette en signatur i brugerkontrolpanelet under din profil. Når den er oprettet, kan du vælge boksen <em>Tilføj signatur</em> når du skriver indlægget. Du kan også vælge at der altid skal indsættes en signatur til dine indlæg, ved at gå ind i <em>Rediger skriveindstillinger</em> og vælge at signaturen skal tilføjes som standard. Hvis du gør dette, kan du stadig undgå at din signatur medtages i et specifikt indlæg ved at fravælge <em>Indsæt signatur</em> inden du indsender indlægget.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Hvordan indsætter jeg en signatur i mine indlæg?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Hver boardadministrator har sit eget regelsæt for sit websted. Hvis du har overtrådt en af disse regler, kan der udstedes en advarsel til dig. Bemærk venligst at det er administratorens beslutning, og at phpBB Limited intet har at gøre med en advarsel udstedt fra et givent board. Kontakt venligst en boardadministrator hvis du er usikker på hvorfor du har modtaget en advarsel.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Hvorfor modtog jeg en advarsel?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Din søgning returnerede for mange resultater til at serveren kunne håndtere visningen. Brug den avancerede søgning og prøv at være mere specifik i søgningen og i hvilke fora der skal søges.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Hvorfor returnerer min søgning en blank side!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Ved at indtaste en søgestreng i søgeboksen, som afhængig af boardets typografi, normalt findes øverst på siden. Du får adgang til den avancerede søgning ved at at klikke på "Avanceret søgning" lige under førnævnte boks.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Hvordan søger jeg i et forum eller på boardet?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Brug linket "Tilmeldte brugere" øverst på siden og klik herefter på "Find en tilmeldt bruger".',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Hvordan søger jeg efter brugere?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Din søgning var formentlig for bred og indeholdt sikkert mange almindelige ord, som ikke indekseres af phpBB. Prøv at søge mere specifikt og at bruge mulighederne i den avancerede søgning.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Hvorfor giver min søgning ingen resultater?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Dine egne indlæg kan listes enten ved at klikke på "Dine indlæg" forrest i brugerkontrolpanelet, ved at klikke på "Brugers indlæg" forrest på din profilside eller "Dine indlæg" øverst på boardindekset under hurtige links. For at søge i dine emner bruges den avancerede søgning og udfyld de relevante søgekriterier i overenstemmelse hermed.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Hvor kan jeg finde alle mine indlæg og emner?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Der kan vises to billeder sammen med et brugernavn når indlæg læses. Det ene er et billede tilknyttet din rang som tilmeldt bruger på boardet, normalt udformet som stjerner,  kasser eller prikker, som indikerer hvor mange indlæg du har skrevet eller din status på boardet. Det andet, normalt et større billede, er kendt som en avatar og er sædvanligvis unikt og personligt for hver bruger.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'I brugerkontrolpanelet, under "Profilindstillinger", kan du tilføje en avatar med en af de fire muligheder: Gravatar, Galleri, Fjern eller Upload. Det er boardadministrator der aktiverer brugen af avatarer og bestemmer hvilke typer avatarer der kan anvendes. Hvis du ikke er i stand til at tilknytte avatarer, kontakt da venligst en boardadministrator.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Hvordan vælger jeg en avatar?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Hvad betyder billedet efter mit brugernavn?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Som tilmeldt bruger kan du ændre på, hvordan boardet fungerer for dig. For at se eller ændre indstillingerne skal du finde <em>Brugerkontrolpanelet</em>. Du finder normalt linket ved at klikke på dit brugernavn i toppen af siden. Boardets administrator kan dog have placeret linket til brugerkontrolpanelet et andet sted. Alle dine indstillinger bliver gemt til dine næste besøg.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Hvordan ændrer jeg mine boardindstillinger?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Kun tilmeldte brugere kan sende emails via det indbyggede emailsystem, og kun hvis en administrator har slået denne funktion til. Dette er for at forhindre gæster i at misbruge emailsystemet.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Når jeg klikker på en brugers email, bliver jeg bedt om at logge ind?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'Du kan bruge indstillingen <em>Skjul min onlinestatus</em>, som du finder i brugerkontrolpanelet under boardindstillinger. Hvis du vælger <em>Ja</em>, er det kun boardets administratorer, redaktører og dig selv, der kan se, når du er online. For alle andre vil du i onlinelisten herefter fremtræde som "skjult bruger".',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Hvordan forhindrer jeg at mit navn fremgår af listen "Hvem er online nu"?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Det er enten fordi boardadministratorerne ikke har installeret dit sprog, eller fordi det ikke er oversat endnu. Prøv at spørge en boardadministrator om det er muligt at installere den sprogpakke som du har brug for. Hvis den ikke eksisterer er du velkommen til selv at foretage oversættelsen. Mere information om hvordan dette gøres findes på <a href="https://www.phpbb.com/">phpBB Group</a>\'s websted.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Mit sprog er ikke i listen!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Din rang, som vises under dit brugernavn, indikerer  særlige brugere, for eksempel medlemskab af bestemte brugergrupper, herunder redaktører og administratorer. Du kan ikke ændre teksten for en rang, de er indstillet af en boardadministrator. Misbrug venligst ikke boardet ved at skrive unødvendige indlæg blot for at forøge din rang. De fleste boards vil ikke tolerere dette, og en redaktør eller administrator vil simpelthen formindske dit antal indlæg.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Hvad er min rang og hvordan ændrer jeg den?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Hvis du har indstillet tidszone korrekt og klokkeslæt stadig vises forkert, er det fordi serverens ur er indstillet forkert. Kontakt venligst en boardadministrator for at få fejlen korrigeret.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Jeg har ændret tidszonen og tiden er stadig forkert!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Da det usædvanligt sjældent sker at webstedets (webserverens) tidsindstilling er forkert, kan du næsten med sikkerhed gå ud fra at den tid du ser er rigtig. Det du muligvis ser er en tid i en anden tidszone end den du selv er i. Hvis det er tilfældet, bør du rette i din profil hvor du kan indstille hvilken tidszone du befinder dig i, for eksempel København, London, Paris, New York, Sydney, osv. Vær opmærksom på at det kun er muligt for tilmeldte brugere at ændre tidszonen, ligesom de fleste andre indstillinger kun kan ændres af tilmeldte brugere, så hvis ikke du er tilmeldt er det måske på tide at blive det!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Tiden er ikke vist korrekt!',
));
