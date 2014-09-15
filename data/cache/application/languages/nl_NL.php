<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Activeren',
      'Disabled' => 'Uitschakelen',
      'System' => 'Systeem',
      'Users' => 'Gebruikers',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Aanpassing',
      'Available Fields' => 'Beschikbare Velden',
      'Layout' => 'Opmaak',
      'Add Panel' => 'Kader toevoegen',
      'Add Field' => 'Veld toevoegen',
      'Settings' => 'Instellingen',
      'Scheduled Jobs' => 'Geplande Opdrachten',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Cache Opschonen',
      'Rebuild' => 'Herbouwen',
      'Teams' => 'Groepen',
      'Roles' => 'Regels',
      'Outbound Emails' => 'Uitgaande Emails',
      'Inbound Emails' => 'Inkomende Emails',
      'Email Templates' => 'Email Templates',
      'Import' => 'Importeren',
      'Layout Manager' => 'Layout Manager',
      'Field Manager' => 'Velden Manager',
      'User Interface' => 'Gebruikers Interface',
      'Auth Tokens' => 'Auth Token',
      'Authentication' => 'Authenticatie',
      'Currency' => 'Valuta',
      'Integrations' => 'Integrations',
    ),
    'layouts' => 
    array (
      'list' => 'Toon',
      'detail' => 'Detail',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Zoek Filters',
      'massUpdate' => 'Totale Update',
      'relationships' => 'Relaties',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adres',
      'array' => 'Array',
      'foreign' => 'Buitenland',
      'duration' => 'Gedurende',
      'password' => 'Wachtwoord',
      'parsonName' => 'Persoons Naam',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Bool',
      'currency' => 'Valuta',
      'date' => 'Datum',
      'datetime' => 'DateTime',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Drijvende komma',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Meerdere Links',
      'linkParent' => 'Link Parent',
      'multienim' => 'Multienum',
      'phone' => 'Telefoon',
      'text' => 'Tekst',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Bestand',
      'image' => 'Plaatje',
    ),
    'fields' => 
    array (
      'type' => 'Type',
      'name' => 'Record Naam',
      'label' => 'Eigen Veldnaam',
      'required' => 'Nodig',
      'default' => 'Voorkeur',
      'maxLength' => 'Max Lengte',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Link',
      'field' => 'Veld',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Vertaling',
      'previewSize' => 'Voorbeeld Maat',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Uw EspoCRM wordt geupgrade naar versie <strong>{version}</strong>. Dit kan enige tijd duren.',
      'upgradeDone' => 'Uw EspoCRM wordt geupgrade naar versie <strong>{version}</strong>. Herstart uw browser scherm.',
      'upgradeBackup' => 'We adviseren om eerst een backup te maken van uw EspoCRM bestanden en data, alvorens te upgraden.',
      'thousandSeparatorEqualsDecimalMark' => 'Het duizendtal scheidingsteken mag niet hetzelfde zijn als het honderdtal',
      'userHasNoEmailAddress' => 'Gebruiker heeft geen email adres.',
      'selectEntityType' => 'Selecteer de eenheid soort in het linker menu.',
      'selectUpgradePackage' => 'Selecteer het upgrade pakket',
      'selectLayout' => 'Selecteer de gewenste layout in het linker menu en pas dit aan.',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systeem instellingen van het programma.',
      'scheduledJob' => 'Opdrachten die uitgevoerd worden door cron.',
      'upgrade' => 'Upgrade EspoCRM.',
      'clearCache' => 'Verwijder achtergrond cache.',
      'rebuild' => 'Reconstrueer achtergrond en schoon het geheugen.',
      'users' => 'Gebruikers beheer.',
      'teams' => 'Groepen beheer.',
      'roles' => 'Rechten beheer.',
      'outboundEmails' => 'SMTP instellingen voor uitgaande emails.',
      'inboundEmails' => 'Group IMAP email accouts. Email import and Email-to-Case.',
      'emailTemplates' => 'Templates voor uitgaande emails.',
      'import' => 'Importeer data van CSV bestand.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'fieldManager' => 'Maak nieuwe of bewerk bestaande velden.',
      'userInterface' => 'Configureer UI.',
      'authTokens' => 'Actieve bevestigde sessie. IP adres en laatste datum.',
      'authentication' => 'Authentication settings.',
      'currency' => 'Currency settings and rates.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Gebruiker',
      'ipAddress' => 'IP Adres',
      'lastAccess' => 'Laatste toegangs datum',
      'createdAt' => 'Login Datum',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Onderwerp',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateSent' => 'Datum verzonden',
      'from' => 'Van',
      'to' => 'Naar',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Is Html',
      'body' => 'Inhoud',
      'subject' => 'Onderwerp',
      'attachments' => 'Bijlagen',
      'selectTemplate' => 'Selecteer Template',
      'fromEmailAddress' => 'Van Adres',
      'toEmailAddresses' => 'Naar Adres',
      'emailAddress' => 'Email Adres',
      'deliveryDate' => 'Delivery Date',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Tijdelijk',
      'Sending' => 'Verzenden',
      'Sent' => 'Verstuur',
      'Archived' => 'Archiveren',
    ),
    'labels' => 
    array (
      'Create Email' => 'Archiveer Email',
      'Archive Email' => 'Archive Email',
      'Compose' => 'Maak',
      'Reply' => 'Reply',
      'Reply to All' => 'Reply to All',
      'Forward' => 'Forward',
      'Original message' => 'Original message',
      'Forwarded message' => 'Forwarded message',
      'Email Accounts' => 'Email Accounts',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Verstuur',
      'archived' => 'Archiveren',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Port',
      'monitoredFolders' => 'Monitored Folders',
      'ssl' => 'SSL',
      'fetchSince' => 'Fetch Since',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Create Email Account',
      'IMAP' => 'IMAP',
      'Main' => 'Main',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Could not connect to IMAP server',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primair',
      'Opted Out' => 'Opted Out',
      'Invalid' => 'Onjuist',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'isHtml' => 'Is Html',
      'body' => 'Inhoud',
      'subject' => 'Onderwerp',
      'attachments' => 'Bijlagen',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Maak Email Template',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Connect',
    ),
    'help' => 
    array (
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Gebruiker',
      'Team' => 'Team',
      'Role' => 'Voorwaarde',
      'EmailTemplate' => 'Email Template',
      'EmailAccount' => 'Email Account',
      'OutboundEmail' => 'Uitgaande Email',
      'ScheduledJob' => 'Geplande Opdracht',
      'ExternalAccount' => 'External Account',
      'Account' => 'Relatie',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Doel',
      'Opportunity' => 'Kans',
      'Meeting' => 'Vergadering',
      'Calendar' => 'Kalender',
      'Call' => 'Oproep',
      'Task' => 'Taak',
      'Case' => 'Zaak',
      'InboundEmail' => 'Binnenkomende Email',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Emails',
      'User' => 'Gebruikers',
      'Team' => 'Groepen',
      'Role' => 'Regels',
      'EmailTemplate' => 'Email Templates',
      'EmailAccount' => 'Email Accounts',
      'OutboundEmail' => 'Uitgaande Emails',
      'ScheduledJob' => 'Geplande Opdrachten',
      'ExternalAccount' => 'External Accounts',
      'Account' => 'Relaties',
      'Contact' => 'Contactpersoon',
      'Lead' => 'Leads',
      'Target' => 'Doel',
      'Opportunity' => 'Kansen',
      'Meeting' => 'Afspraken',
      'Calendar' => 'Kalender',
      'Call' => 'Tel.gesprekken',
      'Task' => 'Taken',
      'Case' => 'Zaken',
      'InboundEmail' => 'Inkomende Emails',
    ),
    'labels' => 
    array (
      'Misc' => 'Versch.',
      'Merge' => 'Samenvoegen',
      'None' => 'Geen',
      'by' => 'door',
      'Saved' => 'Opgeslagen',
      'Error' => 'Fout',
      'Select' => 'Selecteer',
      'Not valid' => 'Niet juist',
      'Please wait...' => 'Even geduld...',
      'Please wait' => 'Even geduld',
      'Loading...' => 'Laden...',
      'Uploading...' => 'Uploaden...',
      'Sending...' => 'Verzenden...',
      'Removed' => 'Verwijderd',
      'Posted' => 'Geplaatst',
      'Linked' => 'Linked',
      'Unlinked' => 'Unlinked',
      'Access denied' => 'Verboden toegang',
      'Access' => 'Rechten',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Record is verwijderd',
      'Wrong username/password' => 'Verkeerde gebruikersnaam/wachtwoord',
      'Post cannot be empty' => 'Veld kan niet leeg zijn',
      'Removing...' => 'Verwijderen...',
      'Unlinking...' => 'Unlinken...',
      'Posting...' => 'Plaatsen...',
      'Username can not be empty!' => 'Gebruikersnaam kan niet leeg zijn!',
      'Cache is not enabled' => 'Cache is niet geactiveerd',
      'Cache has been cleared' => 'Cache is leeg gemaakt',
      'Rebuild has been done' => 'Het reconstrueren is klaar',
      'Saving...' => 'Opslaan...',
      'Modified' => 'Aangepast',
      'Created' => 'Gemaakt',
      'Create' => 'Maak',
      'create' => 'maak',
      'Overview' => 'Overzicht',
      'Details' => 'Details',
      'Add Filter' => 'Maak Filter',
      'Add Dashlet' => 'Dashlet Toevoegen',
      'Add' => 'Toevoegen',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Meer',
      'Search' => 'Zoeken',
      'Only My' => 'Ik Alleen ',
      'Open' => 'Open',
      'Admin' => 'Admin',
      'About' => 'Over',
      'Refresh' => 'Verversen',
      'Remove' => 'Verwijderen',
      'Options' => 'Opties',
      'Username' => 'Gebruikersnaam',
      'Password' => 'Wachtwoord',
      'Login' => 'Login',
      'Log Out' => 'Uitloggen',
      'Preferences' => 'Voorkeuren',
      'State' => 'Deelstaat',
      'Street' => 'Straat',
      'Country' => 'Land',
      'City' => 'Plaats',
      'PostalCode' => 'Postcode',
      'Followed' => 'Gevolgd',
      'Follow' => 'Volgen',
      'Clear Local Cache' => 'Lokale Cache Schonen',
      'Actions' => 'Acties',
      'Delete' => 'Verwijder',
      'Update' => 'Update',
      'Save' => 'Opslaan',
      'Edit' => 'Aanpassen',
      'Cancel' => 'Annuleren',
      'Unlink' => 'Unlink',
      'Mass Update' => 'Totale Update',
      'Export' => 'Exporteer',
      'No Data' => 'Geen Data',
      'All' => 'Alles',
      'Active' => 'Active',
      'Inactive' => 'Inactive',
      'Write your comment here' => 'Schrijf hier uw opmerkingen',
      'Post' => 'Plaats',
      'Stream' => 'Activiteiten',
      'Show more' => 'Meer tonen',
      'Dashlet Options' => 'Kader opties',
      'Full Form' => 'Volledig Formulier',
      'Insert' => 'Voeg in',
      'Person' => 'Persoon',
      'First Name' => 'Voornaam',
      'Last Name' => 'Achternaam',
      'Original' => 'Origineel',
      'You' => 'U',
      'you' => 'u',
      'change' => 'Pas aan',
      'Primary' => 'Primair',
      'Save Filters' => 'Filters opslaan',
      'Administration' => 'Administratie',
      'Run Import' => 'Start Import',
      'Duplicate' => 'Dupliceer',
      'Notifications' => 'Notificaties',
      'Mark all read' => 'Mark all read',
      'See more' => 'See more',
      'Create InboundEmail' => 'Instellen Email Gebruiker',
      'Activities' => 'Activiteiten',
      'History' => 'Historie',
      'Attendees' => 'Genodigden',
      'Schedule Meeting' => 'Plan Afspraak',
      'Schedule Call' => 'Geplande Oproep',
      'Compose Email' => 'Maak een Email',
      'Log Meeting' => 'Leg afspraak vast',
      'Log Call' => 'Leg tel.afspraak vast',
      'Archive Email' => 'Archiveer Email',
      'Create Task' => 'Maak een Taak',
      'Tasks' => 'Taken',
    ),
    'messages' => 
    array (
      'notModified' => 'U heeft het veld niet aangepast',
      'duplicate' => 'Het veld dat u maakt lijkt een duplicaat',
      'fieldIsRequired' => '{field} is nodig',
      'fieldShouldBeEmail' => '{field} moet een geldend mailadres zijn',
      'fieldShouldBeFloat' => '{field} moet een geldende \'float\'waarde zijn',
      'fieldShouldBeInt' => '{field} moet een geldende integer waarde zijn',
      'fieldShouldBeDate' => '{field} moet een geldende datum zijn',
      'fieldShouldBeDatetime' => '{field} moet een geldende datum/tijd zijn',
      'fieldShouldAfter' => '{field} moet na {otherField} zijn',
      'fieldShouldBefore' => '{field} moet voor {otherField} zijn',
      'fieldShouldBeBetween' => '{field} moet tussen {min} en {max}',
      'fieldShouldBeLess' => '{field} moet minder zijn dan {value}',
      'fieldShouldBeGreater' => '{field} moet groter zijn dan {value}',
      'fieldBadPasswordConfirm' => '{field} onjuist bevestigd',
      'assignmentEmailNotificationSubject' => 'EspoCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} has assigned {entityType} \'{Entity.name}\' to you

{recordUrl}',
      'confirmation' => 'Are you sure?',
      'removeRecordConfirmation' => 'Are you sure you want to remove the record?',
      'unlinkRecordConfirmation' => 'Are you sure you want to unlink relationship?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected records?',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Ik Alleen ',
      'open' => 'Open',
      'active' => 'Active',
    ),
    'fields' => 
    array (
      'name' => 'Record Naam',
      'firstName' => 'Voornaam',
      'lastName' => 'Achternaam',
      'salutationName' => 'Groeten',
      'assignedUser' => 'Toegewezen Gebruiker',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Toegewezen Gebruikers Naam',
      'teams' => 'Groepen',
      'createdAt' => 'Gemaakt op',
      'modifiedAt' => 'Aangepast op',
      'createdBy' => 'Gemaakt door',
      'modifiedBy' => 'Aangepast door',
      'title' => 'Titel',
      'dateFrom' => 'Datum Vanaf',
      'dateTo' => 'Datum Tot',
      'autorefreshInterval' => 'Auto-herstel Interval',
      'displayRecords' => 'Toon velden',
      'billingAddressCity' => 'Plaats',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'Postcode',
      'billingAddressState' => 'Deelstaat',
      'billingAddressStreet' => 'Straat',
      'addressCity' => 'Plaats',
      'addressStreet' => 'Straat',
      'addressCountry' => 'Land',
      'addressState' => 'Deelstaat',
      'addressPostalCode' => 'Postcode',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'teams' => 'Groepen',
      'users' => 'Gebruikers',
      'contacts' => 'Contactpersoon',
      'opportunities' => 'Kansen',
      'leads' => 'Leads',
      'meetings' => 'Afspraken',
      'calls' => 'Tel.gesprekken',
      'tasks' => 'Taken',
      'emails' => 'Emails',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Activiteiten',
      'Leads' => 'Mijn Leads',
      'Opportunities' => 'Mijn Kansen',
      'Tasks' => 'Mijn Taken',
      'Cases' => 'Mijn Zaken',
      'Calendar' => 'Kalender',
      'Calls' => 'Mijn Tel.gesprekken',
      'Meetings' => 'Mijn Afspraken',
      'OpportunitiesByStage' => 'Status van Kansen',
      'OpportunitiesByLeadSource' => 'Kans van Lead bron',
      'SalesByMonth' => 'Verkopen per maand',
      'SalesPipeline' => 'Verkoop mogelijkheden',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} maakte {entityType} {entity}',
      'createAssigned' => '{user} maakte {entityType} {entity} toegewezen aan {assignee}',
      'assign' => '{user} toegewezen {entityType} {entity} aan {assignee}',
      'post' => '{user} ingevoerd op {entityType} {entity}',
      'attach' => '{user} toegevoegd aan {entityType} {entity}',
      'status' => '{user} paste {field} aan op {entityType} {entity}',
      'update' => '{user} paste {entityType} {entity} aan',
      'createRelated' => '{user} maakte {relatedEntityType} {relatedEntity} gekoppeld aan {entityType} {entity}',
      'emailReceived' => '{entity} is ontvangen voor {entityType} {entity}',
      'createThis' => '{user} maakte dit {entityType}',
      'createAssignedThis' => '{user} maakte dit {entityType} toegewezen aan {assignee}',
      'assignThis' => '{user} wees dit {entityType} toe aan {assignee}',
      'postThis' => '{user} gepost',
      'attachThis' => '{user} toegevoegd',
      'statusThis' => '{user} paste {field} aan',
      'updateThis' => '{user} paste dit {entityType} aan',
      'createRelatedThis' => '{user} maakte {relatedEntityType} {relatedEntity} en koppelde dit aan {entityType}',
      'emailReceivedThis' => '{entity} is ontvangen',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Januari',
        1 => 'Februari',
        2 => 'Maart',
        3 => 'April',
        4 => 'Mei',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'Augustus',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'Mei',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Zondag',
        1 => 'Maandag',
        2 => 'Dinsdag',
        3 => 'Woensdag',
        4 => 'Donderdag',
        5 => 'Vrijdag',
        6 => 'Zaterdag',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Zon',
        1 => 'Maa',
        2 => 'Din',
        3 => 'Woe',
        4 => 'Don',
        5 => 'Vrij',
        6 => 'Zat',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Zo',
        1 => 'Ma',
        2 => 'Di',
        3 => 'Wo',
        4 => 'Do',
        5 => 'Vr',
        6 => 'Za',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Dhr.',
        'Mrs.' => 'Mevr.',
        'Dr.' => 'Dr.',
        'Drs.' => 'Drs.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbeidzjaans',
        'be_BY' => 'Wit-Russisch',
        'bg_BG' => 'Bulgaars',
        'bn_IN' => 'Bengaals',
        'bs_BA' => 'Bosnisch',
        'ca_ES' => 'Catalaans',
        'cs_CZ' => 'Tsjechisch',
        'cy_GB' => 'Wels',
        'da_DK' => 'Deens',
        'de_DE' => 'Duits',
        'el_GR' => 'Grieks',
        'en_GB' => 'English (UK)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estlands',
        'eu_ES' => 'Baskisch',
        'fa_IR' => 'Perzisch',
        'fi_FI' => 'Fins',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Iers',
        'gl_ES' => 'Galicisch',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebreeuws',
        'hi_IN' => 'Hindies',
        'hr_HR' => 'Kroatisch',
        'hu_HU' => 'Hungaars',
        'hy_AM' => 'Armeens',
        'id_ID' => 'Indonesisch',
        'is_IS' => 'IJSlands',
        'it_IT' => 'Italiaans',
        'ja_JP' => 'Japans',
        'ka_GE' => 'Georgisch',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Koreans',
        'ku_TR' => 'Koerdisch',
        'lt_LT' => 'Litouws',
        'lv_LV' => 'Lets',
        'mk_MK' => 'Macedonisch',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Maleis',
        'nb_NO' => 'Noorse Bokmål',
        'nn_NO' => 'Noorse Nynorsk',
        'ne_NP' => 'Nepalees',
        'nl_NL' => 'Nederlands',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Pools',
        'ps_AF' => 'Pasjtoe',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Roemeens',
        'ru_RU' => 'Russisch',
        'sk_SK' => 'Slowaaks',
        'sl_SI' => 'Sloveens',
        'sq_AL' => 'Albanees',
        'sr_RS' => 'Servisch',
        'sv_SE' => 'Zweeds',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thais',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turks',
        'uk_UA' => 'Oekraïens',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Viëtnamees',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Op',
        'notOn' => 'Niet op',
        'after' => 'Na',
        'before' => 'Voor',
        'between' => 'Tussen',
        'today' => 'Vandaag',
        'past' => 'Verleden',
        'future' => 'Toekomst',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Gelijk',
        'notEquals' => 'Ongelijk',
        'greaterThan' => 'Groter dan',
        'lessThan' => 'Minder dan',
        'greaterThanOrEquals' => 'Groter dan of gelijk',
        'lessThanOrEquals' => 'Minder dan of gelijk',
        'between' => 'Tussen',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Geen',
        '0.5' => '30 seconden',
        1 => '1 minuut',
        2 => '2 minuten',
        5 => '5 minuten',
        10 => '10 minuten',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobiel',
        'Office' => 'Kantoor',
        'Fax' => 'Fax',
        'Home' => 'Prive',
        'Other' => 'Ander',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'U kunt hier de vertaling vinden: https://github.com/xx',
        'font' => 
        array (
          'bold' => 'Vet',
          'italic' => 'Italic',
          'underline' => 'Onderstreept',
          'strike' => 'Opvallend',
          'clear' => 'Verwijder text Font',
          'height' => 'Lijn Hoogte',
          'name' => 'Font Familie',
          'size' => 'Font Grootte',
        ),
        'image' => 
        array (
          'image' => 'PLaatje',
          'insert' => 'Plaatje invoegen',
          'resizeFull' => 'Volledig schalen',
          'resizeHalf' => 'Helft verschalen',
          'resizeQuarter' => 'Een kwart verschalen',
          'floatLeft' => 'Float Left',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Plaatje naar hier verslepen',
          'selectFromFiles' => 'Selecteer vanuit bestanden',
          'url' => 'URL plaatje',
          'remove' => 'Verwijder plaatje',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Koppeling invoegen',
          'unlink' => 'Unlink',
          'edit' => 'Aanpassen',
          'textToDisplay' => 'Toon de tekst',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'In een nieuw scherm openen',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Video toevoegen',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabel',
        ),
        'hr' => 
        array (
          'insert' => 'Horizontale Regel toevoegen',
        ),
        'style' => 
        array (
          'style' => 'Stijl',
          'normal' => 'Normaal',
          'blockquote' => 'Aanhaling',
          'pre' => 'Code',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Ongesorteerde lijst',
          'ordered' => 'Gesorteerde lijst',
        ),
        'options' => 
        array (
          'help' => 'Help',
          'fullscreen' => 'Volledig scherm',
          'codeview' => 'Code View',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Hoofdstuk',
          'outdent' => 'Outdent',
          'indent' => 'Indent',
          'left' => 'Align left',
          'center' => 'Align center',
          'right' => 'Align right',
          'justify' => 'Justify full',
        ),
        'color' => 
        array (
          'recent' => 'Recent Color',
          'more' => 'More Color',
          'background' => 'BackColor',
          'foreground' => 'FontColor',
          'transparent' => 'Transparent',
          'setTransparent' => 'Set transparent',
          'reset' => 'Reset',
          'resetToDefault' => 'Reset to default',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Keyboard shortcuts',
          'close' => 'Close',
          'textFormatting' => 'Text formatting',
          'action' => 'Action',
          'paragraphFormatting' => 'Paragraph formatting',
          'documentStyle' => 'Document Style',
        ),
        'history' => 
        array (
          'undo' => 'Undo',
          'redo' => 'Redo',
        ),
      ),
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Enabled',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirect URI',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Select an integration in menu.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtain OAuth 2.0 credentials from the Google Developers Console.</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.</p>',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Plaats',
      'attachments' => 'Bijlagen',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datum notatie',
      'timeFormat' => 'Tijdnotatie',
      'timeZone' => 'Tijd Zone',
      'weekStart' => 'Eerste dag van de Week',
      'thousandSeparator' => 'Duizendtal scheidingsteken',
      'decimalMark' => 'Duizendtal scheidingsteken',
      'defaultCurrency' => 'Voorkeur Valuta',
      'currencyList' => 'Valuta Lijst',
      'language' => 'Taal',
      'smtpServer' => 'Server',
      'smtpPort' => 'Poort',
      'smtpAuth' => 'Authenticatie',
      'smtpSecurity' => 'Veiligheid',
      'smtpUsername' => 'Gebruikersnaam',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Wachtwoord',
      'smtpEmailAddress' => 'Email Adres',
      'exportDelimiter' => 'Scheidingsteken Export',
      'receiveAssignmentEmailNotifications' => 'Receive Email Notifications upon Assignment',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Zondag',
        1 => 'Maandag',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notificaties',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'roles' => 'Regels',
    ),
    'links' => 
    array (
      'users' => 'Gebruikers',
      'teams' => 'Groepen',
    ),
    'labels' => 
    array (
      'Access' => 'Rechten',
      'Create Role' => 'Maak Voorwaarde',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'niet-actief',
        'enabled' => 'ingeschakeld',
        'disabled' => 'uitgeschakeld',
      ),
      'levelList' => 
      array (
        'all' => 'allemaal',
        'team' => 'team',
        'own' => 'eigen',
        'no' => 'nee',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Lees',
      'edit' => 'Aanpassen',
      'delete' => 'Verwijder',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'All changes in an access control will be applied after cache will be cleared.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'job' => 'Opdracht',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Maak Geplande Opdracht',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Controleer Binnenkomende Emails',
        'Cleanup' => 'Opschonen',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Note: Voeg deze regel toe aan uw crontab bestand tbv de geplande Espo opdrachten:',
        'mac' => 'Note: Voeg deze regel toe aan uw crontab bestand tbv de geplande Espo opdrachten:',
        'windows' => 'Note: Maak een batch file met de volgende commando\'s om de geplande opdrachten voor Espo onder Windows te gebruiken:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Start Tijd',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Gebruik Cache',
      'dateFormat' => 'Datum notatie',
      'timeFormat' => 'Tijdnotatie',
      'timeZone' => 'Tijd Zone',
      'weekStart' => 'Eerste dag van de Week',
      'thousandSeparator' => 'Duizendtal scheidingsteken',
      'decimalMark' => 'Duizendtal scheidingsteken',
      'defaultCurrency' => 'Voorkeur Valuta',
      'baseCurrency' => 'Base Currency',
      'currencyRates' => 'Rate Values',
      'currencyList' => 'Valuta Lijst',
      'language' => 'Taal',
      'companyLogo' => 'Firma logo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Poort',
      'smtpAuth' => 'Authenticatie',
      'smtpSecurity' => 'Veiligheid',
      'smtpUsername' => 'Gebruikersnaam',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Wachtwoord',
      'outboundEmailFromName' => 'Naam van',
      'outboundEmailFromAddress' => 'Van Adres',
      'outboundEmailIsShared' => 'Is Gedeeld',
      'recordsPerPage' => 'Velden per pagina',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Tab lijst',
      'quickCreateList' => 'Snel gemaakte lijst',
      'exportDelimiter' => 'Scheidingsteken Export',
      'authenticationMethod' => 'Authentication Methode',
      'ldapHost' => 'Host',
      'ldapPort' => 'Poort',
      'ldapAuth' => 'Authenticatie',
      'ldapUsername' => 'Gebruikersnaam',
      'ldapPassword' => 'Wachtwoord',
      'ldapBindRequiresDn' => 'Bind heeft Dn Nodig',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Standaard Formulier Gebruiker',
      'ldapAccountDomainName' => 'Contact Domein Naam',
      'ldapTryUsernameSplit' => 'Probeer gesplitste Gebruikersnaam',
      'ldapCreateEspoUser' => 'Gebruiker aanmaken in EspoCRM',
      'ldapSecurity' => 'Veiligheid',
      'ldapUserLoginFilter' => 'Gebruikers Login Filter',
      'ldapAccountDomainNameShort' => 'Korte Contact Domein Naam',
      'ldapOptReferrals' => 'Opt Referentie',
      'disableExport' => 'Disable Export (only admin is allowed)',
      'assignmentEmailNotifications' => 'Send Email Notifications upon Assignment',
      'assignmentEmailNotificationsEntityList' => 'Entities to Notify About',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Zondag',
        1 => 'Maandag',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Count of records in relatinship panels.',
    ),
    'labels' => 
    array (
      'System' => 'Systeem',
      'Locale' => 'Lokaal',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuratie',
      'Notifications' => 'Notificaties',
      'Currency Settings' => 'Currency Settings',
      'Currency Rtes' => 'Currency Rates',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'roles' => 'Regels',
    ),
    'links' => 
    array (
      'users' => 'Gebruikers',
    ),
    'tooltips' => 
    array (
      'roles' => 'All users from this team will get access settings from selected roles.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Maak een Team',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'userName' => 'Gebruikers Naam',
      'title' => 'Titel',
      'isAdmin' => 'Is Admin',
      'defaultTeam' => 'Voorkeur Team',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefoon',
      'roles' => 'Regels',
      'password' => 'Wachtwoord',
      'passwordConfirm' => 'Bevestig Wachtwoord',
      'newPassword' => 'Nieuw Wachtwoord',
    ),
    'links' => 
    array (
      'teams' => 'Groepen',
      'roles' => 'Regels',
    ),
    'labels' => 
    array (
      'Create User' => 'Gebruiker Aanmaken',
      'Generate' => 'Genereer',
      'Access' => 'Rechten',
      'Preferences' => 'Voorkeuren',
      'Change Password' => 'Wachtwoord Aanpassen',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'All records created by this user will be related to this team by default.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Het Wachtwoord wordt naar het email adres van de gebruiker verzonden.',
      'accountInfoEmailSubject' => 'Gebruiker Informatie',
      'accountInfoEmailBody' => 'Uw gebruikers informatie:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChanged' => 'Het wachtwoord is aangepast',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'Email',
      'website' => 'Website',
      'phoneNumber' => 'Telefoon',
      'billingAddress' => 'Factuur Adres',
      'shippingAddress' => 'Bezoek adres',
      'description' => 'Beschrijving',
      'sicCode' => 'Sic Code',
      'industry' => 'Industrie',
      'type' => 'Type',
      'contactRole' => 'Voorwaarde',
    ),
    'links' => 
    array (
      'contacts' => 'Contactpersoon',
      'opportunities' => 'Kansen',
      'cases' => 'Zaken',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Klant',
        'Investor' => 'Investeerder',
        'Partner' => 'Partner',
        'Reseller' => 'Reseller',
      ),
      'industry' => 
      array (
        'Apparel' => 'Apparel',
        'Banking' => 'Banking',
        'Computer Software' => 'Computer Software',
        'Education' => 'Educatie',
        'Electronics' => 'Electronica',
        'Finance' => 'Finance',
        'Insurance' => 'Verzekeringen',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Maak Relatie',
      'Copy Billing' => 'Copy Billing',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Maand',
      'week' => 'Week',
      'day' => 'Dag',
      'agendaWeek' => 'Week',
      'agendaDay' => 'Dag',
    ),
    'labels' => 
    array (
      'Today' => 'Vandaag',
      'Create' => 'Maak',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Eind Datum',
      'direction' => 'Richting',
      'duration' => 'Gedurende',
      'description' => 'Beschrijving',
      'users' => 'Gebruikers',
      'contacts' => 'Contactpersoon',
      'leads' => 'Leads',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Plannen',
        'Held' => 'Volgen',
        'Not Held' => 'Niet volgen',
      ),
      'direction' => 
      array (
        'Outbound' => 'Uitgaande',
        'Inbound' => 'Binnenkomende',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
      ),
    ),
    'labels' => 
    array (
      'Create Call' => 'Maak Call',
      'Set Held' => 'Vasthouden',
      'Set Not Held' => 'Niet Vasthouden',
      'Send Invitations' => 'Uitnodiging versturen',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Plannen',
      'held' => 'Volgen',
      'todays' => 'Vandaag',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'number' => 'Nummer',
      'status' => 'Status',
      'account' => 'Relatie',
      'contact' => 'Contact',
      'priority' => 'Prioriteit',
      'type' => 'Type',
      'description' => 'Beschrijving',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nieuw',
        'Assigned' => 'Toegewezen',
        'Pending' => 'Pending',
        'Closed' => 'Gesloten',
        'Rejected' => 'Geweigerd',
        'Duplicate' => 'Dupliceer',
      ),
      'priority' => 
      array (
        'Low' => 'Laag',
        'Normal' => 'Normaal',
        'High' => 'Hoog',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Vraag',
        'Incident' => 'Incident',
        'Problem' => 'Probleem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Maak Case',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'closed' => 'Gesloten',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'Email',
      'title' => 'Titel',
      'account' => 'Relatie',
      'accounts' => 'Relaties',
      'phoneNumber' => 'Telefoon',
      'accountType' => 'Relatie Type',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Voorwaarde',
      'description' => 'Beschrijving',
    ),
    'links' => 
    array (
      'opportunities' => 'Kansen',
      'cases' => 'Zaken',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Maak Contact',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Geen--',
        'Decision Maker' => 'Beslisser',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Beinvloeder',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'team' => 'Team',
      'status' => 'Status',
      'assignToUser' => 'Toegewezen aan gebruiker',
      'host' => 'Host',
      'username' => 'Gebruikersnaam',
      'password' => 'Wachtwoord',
      'port' => 'Poort',
      'monitoredFolders' => 'Gecontroleerde Folders',
      'trashFolder' => 'Prullenbak Folder',
      'ssl' => 'SSL',
      'createCase' => 'Maak Case',
      'reply' => 'Antw.',
      'caseDistribution' => 'Zaak Verdelen',
      'replyEmailTemplate' => 'Antw. Email Template',
      'replyFromAddress' => 'Antw. van Adres',
      'replyToAddress' => 'Reply To Address',
      'replyFromName' => 'Antw. van Naam',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notify email senders that their emails has been received.',
      'createCase' => 'Automatically create case from incoming emails.',
      'replyToAddress' => 'Specify email address of this mailbox to make response come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'User emails/cases will be assigned to.',
      'team' => 'Team emails/cases will be related to.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Directe-Toewijzing',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Minst-Bezet',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Instellen Email Gebruiker',
      'IMAP' => 'IMAP',
      'Actions' => 'Acties',
      'Main' => 'Hoofd',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kan geen verbinding maken met IMAP server',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Vertaald naar',
      'Create Lead' => 'Grote Lead',
      'Convert' => 'Converteer',
    ),
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'Email',
      'title' => 'Titel',
      'website' => 'Website',
      'phoneNumber' => 'Telefoon',
      'accountName' => 'Relatie Naam',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'status' => 'Status',
      'source' => 'Bron',
      'opportunityAmount' => 'Aantal uitdagingen',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'Beschrijving',
      'createdAccount' => 'Relatie',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Kans',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nieuw',
        'Assigned' => 'Toegewezen',
        'In Process' => 'In Behandeling',
        'Converted' => 'Converteren',
        'Recycled' => 'Opnieuw verwerkt',
        'Dead' => 'Dood',
      ),
      'source' => 
      array (
        'Call' => 'Oproep',
        'Email' => 'Email',
        'Existing Customer' => 'Bestaande Klant',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Pagina',
        'Campaign' => 'Campagne',
        'Other' => 'Ander',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Eind Datum',
      'duration' => 'Gedurende',
      'description' => 'Beschrijving',
      'users' => 'Gebruikers',
      'contacts' => 'Contactpersoon',
      'leads' => 'Leads',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Plannen',
        'Held' => 'Volgen',
        'Not Held' => 'Niet volgen',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
      ),
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Plan Vergadering',
      'Set Held' => 'Vasthouden',
      'Set Not Held' => 'Niet Vasthouden',
      'Send Invitations' => 'Uitnodiging versturen',
      'Saved as Held' => 'Opslaan Bewaren',
      'Saved as Not Held' => 'Opslaan niet Bewaren',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Plannen',
      'held' => 'Volgen',
      'todays' => 'Vandaag',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'account' => 'Relatie',
      'stage' => 'Status',
      'amount' => 'Aantal',
      'probability' => 'Naar waarschijnlijkheid, %',
      'leadSource' => 'Lead Bron',
      'doNotCall' => 'Niet Bellen',
      'closeDate' => 'Datum gesloten',
      'contacts' => 'Contactpersoon',
      'description' => 'Beschrijving',
      'amountConverted' => 'Amount (converted)',
    ),
    'links' => 
    array (
      'contacts' => 'Contactpersoon',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Kwalificeren',
        'Needs Analysis' => 'Benodigde Analyse',
        'Value Proposition' => 'Waarde Schatting',
        'Id. Decision Makers' => 'Id. Beslissiers',
        'Perception Analysis' => 'Perceptie Analyse',
        'Proposal/Price Quote' => 'Prijs/Voorstel',
        'Negotiation/Review' => 'Onderhandeling/Herziening',
        'Closed Won' => 'Gesloten Gewonnen',
        'Closed Lost' => 'Gesloten Verloren',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Grote Uitdaging',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'won' => 'Gewonnen',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'Email',
      'title' => 'Titel',
      'website' => 'Website',
      'accountName' => 'Relatie Naam',
      'phoneNumber' => 'Telefoon',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'description' => 'Beschrijving',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Maak een doel',
      'Convert to Lead' => 'Naar Lead omzetten',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Vervaldatum',
      'priority' => 'Prioriteit',
      'description' => 'Beschrijving',
      'isOverdue' => 'Te Laat',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Niet Gestart',
        'Started' => 'Gestart',
        'Completed' => 'Beeindigd',
        'Canceled' => 'Geannuleerd',
      ),
      'priority' => 
      array (
        'Low' => 'Laag',
        'Normal' => 'Normaal',
        'High' => 'Hoog',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Maak een Taak',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'completed' => 'Beeindigd',
      'todays' => 'Vandaag',
      'overdue' => 'Laat',
    ),
  ),
);

?>