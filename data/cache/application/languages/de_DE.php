<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Aktiv',
      'Disabled' => 'Inaktiv',
      'System' => 'System',
      'Users' => 'Benutzer',
      'Email' => 'E-Mail',
      'Data' => 'Daten',
      'Customization' => 'Anpassung',
      'Available Fields' => 'Verfügbare Felder',
      'Layout' => 'Aktuelles Layout',
      'Add Panel' => 'Panel hinzufügen',
      'Add Field' => 'Feld hinzufügen',
      'Settings' => 'Einstellungen',
      'Scheduled Jobs' => 'Geplante Jobs',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Cache leeren',
      'Rebuild' => 'Neu aufbauen',
      'Teams' => 'Teams',
      'Roles' => 'Rollen',
      'Outbound Emails' => 'Ausgehende E-Mails',
      'Inbound Emails' => 'Eingehende E-Mails',
      'Email Templates' => 'E-Mail Vorlagen',
      'Import' => 'Import',
      'Layout Manager' => 'Layouts anpassen',
      'Field Manager' => 'Felder anpassen',
      'User Interface' => 'Benutzeroberfläche',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentifizierung:',
      'Currency' => 'Währung',
      'Integrations' => 'Integrations',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Detail',
      'listSmall' => 'Liste (Klein)',
      'detailSmall' => 'Detail (Klein)',
      'filters' => 'Suchfilter',
      'massUpdate' => 'Massenänderung',
      'relationships' => 'Beziehungen',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresse',
      'array' => 'Array',
      'foreign' => 'Fremd',
      'duration' => 'Dauer',
      'password' => 'Passwort',
      'parsonName' => 'Person Name',
      'autoincrement' => 'Automatisch hochzählen',
      'bool' => 'Bool',
      'currency' => 'Währung',
      'date' => 'Datum',
      'datetime' => 'Datum/Zeit',
      'email' => 'E-Mail',
      'enum' => 'Einfachauswahl',
      'enumInt' => 'Einfachauswahl Ganzzahlwerte',
      'enumFloat' => 'Einfachauswahl Fließkommawerte',
      'float' => 'Fließkomma',
      'int' => 'Ganzzahl',
      'link' => 'Link',
      'linkMultiple' => 'Mehrfachlinks',
      'linkParent' => 'Mutterlink',
      'multienim' => 'Mehrfachauswahl',
      'phone' => 'Telefon',
      'text' => 'Textbox',
      'url' => 'URL',
      'varchar' => 'Text (max. 255)',
      'file' => 'Datei',
      'image' => 'Bild',
    ),
    'fields' => 
    array (
      'type' => 'Typ',
      'name' => 'Name',
      'label' => 'Bezeichnung',
      'required' => 'Erforderlich',
      'default' => 'Standard',
      'maxLength' => 'Maximallänge',
      'options' => 'Optionen (Datenbank Werte, nicht übersetzt)',
      'after' => 'Nach (Feld)',
      'before' => 'Vor (Feld)',
      'link' => 'Link',
      'field' => 'Feld',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Übersetzung',
      'previewSize' => 'Vorschau Größe',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Ihr EspoCRM wird nun auf Version <strong>{version}</strong> aktualisiert. Dies kann eine Weile dauern.',
      'upgradeDone' => 'Ihr EspoCRM wurde auf Version <strong>{version}</strong> aktualisiert. Bitte aktualisieren Sie Ihren Browser.',
      'upgradeBackup' => 'Wir empfehlen, vor der Aktualisierung von EspoCRM Verzeichnis sowie Datenbank zu sichern.',
      'thousandSeparatorEqualsDecimalMark' => 'Das Tausendertrennzeichen kann nicht gleich dem Dezimaltrennzeichen sein',
      'userHasNoEmailAddress' => 'Der Benutzer hat keine E-Mail-Adresse.',
      'selectEntityType' => 'Modul links auswählen',
      'selectUpgradePackage' => 'Aktualisierungspaket auswählen',
      'selectLayout' => 'Layout zum Editieren links auswählen',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systemeinstellungen der Applikation.',
      'scheduledJob' => 'Aufgaben die durch einen Cronjob ausgeführt werden.',
      'upgrade' => 'EspoCRM aktualisieren.',
      'clearCache' => 'Alle Cache Dateien leeren.',
      'rebuild' => 'Wiederherstellung des Backends und Leeren des Cache.',
      'users' => 'Benutzerverwaltung.',
      'teams' => 'Teamverwaltung.',
      'roles' => 'Rollenverwaltung.',
      'outboundEmails' => 'SMTP Einstellungen für ausgehende E-Mails.',
      'inboundEmails' => 'IMAP Gruppen E-Mail Konten. E-Mail Import und E-Mail für Fälle.',
      'emailTemplates' => 'Vorlagen für ausgehende E-Mails.',
      'import' => 'Datenimport aus CSV Datei.',
      'layoutManager' => 'Layouts anpassen (Liste, Detailansicht, Bearbeitungsansicht, Suche, Massenaktualisierung).',
      'fieldManager' => 'Neue Felder erstellen oder bestehende anpassen.',
      'userInterface' => 'Benutzeroberfläche anpassen.',
      'authTokens' => 'Aktive Auth Sessions. IP Adresse und letztes Zugriffsdatum',
      'authentication' => 'Authentifizierungs Einstellungen.',
      'currency' => 'Währungseinstellungen und Kurse',
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
      'user' => 'Benutzer',
      'ipAddress' => 'IP Adresse',
      'lastAccess' => 'Letztes Zugriffsdatum',
      'createdAt' => 'Login Datum',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Betreff',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateSent' => 'Sendedatum',
      'from' => 'Von',
      'to' => 'An',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'selectTemplate' => 'Vorlage wählen',
      'fromEmailAddress' => 'Von Adresse',
      'toEmailAddresses' => 'An Adresse',
      'emailAddress' => 'E-Mail Adresse',
      'deliveryDate' => 'Delivery Date',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Entwurf',
      'Sending' => 'wird gesendet',
      'Sent' => 'Gesendet',
      'Archived' => 'Archiviert',
    ),
    'labels' => 
    array (
      'Create Email' => 'E-Mail archivieren',
      'Archive Email' => 'Archive Email',
      'Compose' => 'Erstellen',
      'Reply' => 'Reply',
      'Reply to All' => 'Reply to All',
      'Forward' => 'Forward',
      'Original message' => 'Original message',
      'Forwarded message' => 'Forwarded message',
      'Email Accounts' => 'Email Accounts',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Gesendet',
      'archived' => 'Archiviert',
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
      'Primary' => 'Primär',
      'Opted Out' => 'Keine E-Mails',
      'Invalid' => 'Ungültig',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Neue E-Mail Vorlage',
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
      'Email' => 'E-Mail',
      'User' => 'Benutzer',
      'Team' => 'Team',
      'Role' => 'Rolle',
      'EmailTemplate' => 'E-Mail Vorlage',
      'EmailAccount' => 'Email Account',
      'OutboundEmail' => 'Ausgehende E-Mail',
      'ScheduledJob' => 'Geplante Aufgabe',
      'ExternalAccount' => 'External Account',
      'Account' => 'Firma',
      'Contact' => 'Kontakt',
      'Lead' => 'Interessent',
      'Target' => 'Zielkontakt',
      'Opportunity' => 'Verkaufschance',
      'Meeting' => 'Meeting',
      'Calendar' => 'Kalender',
      'Call' => 'Anruf',
      'Task' => 'Aufgabe',
      'Case' => 'Fall',
      'InboundEmail' => 'Eingehende E-Mails',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-Mails',
      'User' => 'Benutzer',
      'Team' => 'Teams',
      'Role' => 'Rollen',
      'EmailTemplate' => 'E-Mail Vorlagen',
      'EmailAccount' => 'Email Accounts',
      'OutboundEmail' => 'Ausgehende E-Mails',
      'ScheduledJob' => 'Geplante Jobs',
      'ExternalAccount' => 'External Accounts',
      'Account' => 'Firmen',
      'Contact' => 'Kontakte',
      'Lead' => 'Interessenten',
      'Target' => 'Zielkontakte',
      'Opportunity' => 'Verkaufschancen',
      'Meeting' => 'Meetings',
      'Calendar' => 'Kalender',
      'Call' => 'Anrufe',
      'Task' => 'Aufgaben',
      'Case' => 'Fälle',
      'InboundEmail' => 'Eingehende E-Mails',
    ),
    'labels' => 
    array (
      'Misc' => 'Verschiedenes',
      'Merge' => 'Zusammenführen',
      'None' => 'Kein(e)',
      'by' => 'von',
      'Saved' => 'Gespeichert.',
      'Error' => 'Fehler',
      'Select' => 'Auswählen',
      'Not valid' => 'Ungültig',
      'Please wait...' => 'Bitte warten...',
      'Please wait' => 'Bitte warten',
      'Loading...' => 'Lade...',
      'Uploading...' => 'Lade hoch...',
      'Sending...' => 'Wird gesendet...',
      'Removed' => 'Entfernt',
      'Posted' => 'Geposted',
      'Linked' => 'Verlinkt',
      'Unlinked' => 'Verknüpfung gelöscht',
      'Access denied' => 'Zugriff verweigert',
      'Access' => 'Zugang',
      'Are you sure?' => 'Sind Sie sicher?',
      'Record has been removed' => 'Datensatz wurde gelöscht',
      'Wrong username/password' => 'Falscher Benutzername/Passwort',
      'Post cannot be empty' => 'Notiz dard nicht leer sein',
      'Removing...' => 'Entferne...',
      'Unlinking...' => 'Lösche Verknüpfung...',
      'Posting...' => 'Poste...',
      'Username can not be empty!' => 'Der Benutzername darf nicht leer sein!',
      'Cache is not enabled' => 'Cache ist nicht aktiviert',
      'Cache has been cleared' => 'Der Cache wurde geleert',
      'Rebuild has been done' => 'Wiederherstellen wurde durchgeführt',
      'Saving...' => 'Speichere...',
      'Modified' => 'Verändert',
      'Created' => 'Erstellt',
      'Create' => 'Erstellen',
      'create' => 'Erstellen',
      'Overview' => 'Überblick',
      'Details' => 'Details',
      'Add Filter' => 'Filter hinzufügen',
      'Add Dashlet' => 'Dashlet hinzufügen',
      'Add' => 'Hinzufügen',
      'Reset' => 'Zurücksetzen',
      'Menu' => 'Menü',
      'More' => 'Mehr',
      'Search' => 'Suchen',
      'Only My' => 'Nur Meine',
      'Open' => 'Offen',
      'Admin' => 'Admin',
      'About' => 'Über',
      'Refresh' => 'Aktualisieren',
      'Remove' => 'Entfernen',
      'Options' => 'Optionen',
      'Username' => 'Benutzername',
      'Password' => 'Passwort',
      'Login' => 'Anmelden',
      'Log Out' => 'Abmelden',
      'Preferences' => 'Benutzereinstellungen',
      'State' => 'Bundesland',
      'Street' => 'Straße',
      'Country' => 'Land',
      'City' => 'Ort',
      'PostalCode' => 'PLZ',
      'Followed' => 'Beobachtet',
      'Follow' => 'Beobachten',
      'Clear Local Cache' => 'Lokalen Cache leeren',
      'Actions' => 'Aktionen',
      'Delete' => 'Löschen',
      'Update' => 'Aktualisieren',
      'Save' => 'Speichern',
      'Edit' => 'Bearbeiten',
      'Cancel' => 'Abbrechen',
      'Unlink' => 'Link entfernen',
      'Mass Update' => 'Massenänderung',
      'Export' => 'Exportieren',
      'No Data' => 'Keine Daten',
      'All' => 'Alle',
      'Active' => 'Aktiv',
      'Inactive' => 'Inaktiv',
      'Write your comment here' => 'Notiz hier einfügen',
      'Post' => 'Senden',
      'Stream' => 'Vorgänge',
      'Show more' => 'Mehr anzeigen',
      'Dashlet Options' => 'Dashlet Optionen',
      'Full Form' => 'Komplettes Formular',
      'Insert' => 'Einfügen',
      'Person' => 'Person',
      'First Name' => 'Vorname',
      'Last Name' => 'Nachname',
      'Original' => 'Original',
      'You' => 'Sie',
      'you' => 'Sie',
      'change' => 'ändern',
      'Primary' => 'Primär',
      'Save Filters' => 'Filter speichern',
      'Administration' => 'Administration',
      'Run Import' => 'Import durchführen',
      'Duplicate' => 'Duplizieren',
      'Notifications' => 'Benachrichtigungen',
      'Mark all read' => 'Alle als gelesen markieren',
      'See more' => 'Mehr anzeigen',
      'Create InboundEmail' => 'Eingehende E-Mail erstellen',
      'Activities' => 'Aktivitäten',
      'History' => 'Verlauf',
      'Attendees' => 'Teilnehmer',
      'Schedule Meeting' => 'Meeting planen',
      'Schedule Call' => 'Anruf planen',
      'Compose Email' => 'E-Mail erstellen',
      'Log Meeting' => 'Meeting erfassen',
      'Log Call' => 'Anruf erfassen',
      'Archive Email' => 'E-Mail archivieren',
      'Create Task' => 'Neue Aufgabe',
      'Tasks' => 'Aufgaben',
    ),
    'messages' => 
    array (
      'notModified' => 'Sie haben den Datensatz nicht geändert',
      'duplicate' => 'Der Datensatz den Sie erstellen wollen, könnte eine Dublette sein',
      'fieldIsRequired' => '{field} wird benötigt',
      'fieldShouldBeEmail' => '{field} muss eine gültige E-Mail sein',
      'fieldShouldBeFloat' => '{field} muss eine gültige Fließkomma Zahl sein',
      'fieldShouldBeInt' => '{field} muss eine gültige Ganzzahl sein',
      'fieldShouldBeDate' => '{field} muss ein gültiges Datum sein',
      'fieldShouldBeDatetime' => '{field} muss ein gültiges Datum/Zeit Feld sein',
      'fieldShouldAfter' => '{field} muss nach {otherField} sein',
      'fieldShouldBefore' => '{field} muss vor {otherField} sein',
      'fieldShouldBeBetween' => '{field} muss zwischen {min} und {max} sein',
      'fieldShouldBeLess' => '{field} muss kleiner als {value} sein',
      'fieldShouldBeGreater' => '{field} muss größer als {value} sein',
      'fieldBadPasswordConfirm' => '{field} falsch bestätigt',
      'assignmentEmailNotificationSubject' => 'EspoCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} hat {entityType} \'{Entity.name}\' an Sie zugewiesen {recordUrl}',
      'confirmation' => 'Sind Sie sicher?',
      'removeRecordConfirmation' => 'Sind Sie sicher, dass Sie den Eintrag entfernen wollen?',
      'unlinkRecordConfirmation' => 'Sind Sie sicher dass Sie diese Beziehung lösen möchten?',
      'removeSelectedRecordsConfirmation' => 'Sind Sie sicher dass Sie die ausgewählten Sätze entfernen möchten?',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Nur Meine',
      'open' => 'Offen',
      'active' => 'Aktiv',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'firstName' => 'Vorname',
      'lastName' => 'Nachname',
      'salutationName' => 'Anrede',
      'assignedUser' => 'Zugewiesener Benutzer',
      'emailAddress' => 'E-Mail',
      'assignedUserName' => 'Zugewiesener Benutzername',
      'teams' => 'Teams',
      'createdAt' => 'Erstellt am',
      'modifiedAt' => 'Geändert am',
      'createdBy' => 'Erstellt von',
      'modifiedBy' => 'Geändert von',
      'title' => 'Funktion',
      'dateFrom' => 'Von Datum',
      'dateTo' => 'Bis Datum',
      'autorefreshInterval' => 'Aktualisierungsintervall',
      'displayRecords' => 'Sätze anzeigen',
      'billingAddressCity' => 'Ort',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'PLZ',
      'billingAddressState' => 'Bundesland',
      'billingAddressStreet' => 'Straße',
      'addressCity' => 'Ort',
      'addressStreet' => 'Straße',
      'addressCountry' => 'Land',
      'addressState' => 'Bundesland',
      'addressPostalCode' => 'PLZ',
      'shippingAddressCity' => 'Ort (Lieferadresse)',
      'shippingAddressStreet' => 'Straße (Lieferadresse)',
      'shippingAddressCountry' => 'Land (Lieferadresse)',
      'shippingAddressState' => 'Bundesland/Kanton (Lieferadresse)',
      'shippingAddressPostalCode' => 'PLZ (Lieferadresse)',
    ),
    'links' => 
    array (
      'teams' => 'Teams',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'leads' => 'Interessenten',
      'meetings' => 'Meetings',
      'calls' => 'Anrufe',
      'tasks' => 'Aufgaben',
      'emails' => 'E-Mails',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Vorgänge',
      'Leads' => 'Meine Interessenten',
      'Opportunities' => 'Meine Verkaufschancen',
      'Tasks' => 'Meine Aufgaben',
      'Cases' => 'Meine Fälle',
      'Calendar' => 'Kalender',
      'Calls' => 'Meine Anrufe',
      'Meetings' => 'Meine Meetings',
      'OpportunitiesByStage' => 'Verkaufschancen nach Verkaufsphase',
      'OpportunitiesByLeadSource' => 'Verkaufschancen nach Quelle',
      'SalesByMonth' => 'Umsätze nach Monat',
      'SalesPipeline' => 'Verkaufspipeline',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} hat {entityType} {entity} erstellt',
      'createAssigned' => '{user} hat {entityType} {entity} erstellt und an {assignee} zugewiesen',
      'assign' => '{user} hat {entityType} {entity} an {assignee} zugewiesen',
      'post' => '{user} hat zu {entityType} {entity} notiert',
      'attach' => '{user} hat zu {entityType} {entity} hinzugefügt',
      'status' => '{user} hat {field} von {entityType} {entity} aktualisiert',
      'update' => '{user} hat {entityType} {entity} aktualisiert',
      'createRelated' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit {entityType} {entity} erstellt',
      'emailReceived' => '{entity} wurde für {entityType} {entity} empfangen',
      'createThis' => '{user} hat {entityType} erstellt',
      'createAssignedThis' => '{user} hat {entityType} erstellt und an {assignee} zugewiesen',
      'assignThis' => '{user} hat {entityType} an {assignee} zugewiesen',
      'postThis' => '{user} hat notiert',
      'attachThis' => '{user} hat hinzugefügt',
      'statusThis' => '{user} hat {field} aktualiisiert',
      'updateThis' => '{user} hat diese(s/n) {entityType} aktualisiert',
      'createRelatedThis' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit diesem (r) {entityType} hinzugefügt',
      'emailReceivedThis' => '{entity} wurde empfangen',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Januar',
        1 => 'Februar',
        2 => 'März',
        3 => 'April',
        4 => 'Mai',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'August',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'Dezember',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mär',
        3 => 'Apr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dez',
      ),
      'dayNames' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
        2 => 'Dienstag',
        3 => 'Mittwoch',
        4 => 'Donnerstag',
        5 => 'Freitag',
        6 => 'Samstag',
      ),
      'dayNamesShort' => 
      array (
        0 => 'So',
        1 => 'Mo',
        2 => 'Di',
        3 => 'Mi',
        4 => 'Do',
        5 => 'Fr',
        6 => 'Sa',
      ),
      'dayNamesMin' => 
      array (
        0 => 'So',
        1 => 'Mo',
        2 => 'Di',
        3 => 'Mi',
        4 => 'Do',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Mr.',
        'Mrs.' => 'Mrs.',
        'Dr.' => 'Dr.',
        'Drs.' => 'Drs.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Aserbaidschanisch',
        'be_BY' => 'Weissrussisch',
        'bg_BG' => 'Bulgarisch',
        'bn_IN' => 'Benglaisch',
        'bs_BA' => 'Bosnisch',
        'ca_ES' => 'Katalanisch',
        'cs_CZ' => 'Tschechisch',
        'cy_GB' => 'Walisisch',
        'da_DK' => 'Dänisch',
        'de_DE' => 'Deutsch',
        'el_GR' => 'Griechisch',
        'en_GB' => 'Englisch (UK)',
        'en_US' => 'Englisch (US)',
        'es_ES' => 'Spanisch (ES)',
        'et_EE' => 'Estnisch',
        'eu_ES' => 'Baskisch',
        'fa_IR' => 'Persisch',
        'fi_FI' => 'Finnisch',
        'fo_FO' => 'Färöisch',
        'fr_CA' => 'Französisch (CN)',
        'fr_FR' => 'Französisch (FR)',
        'ga_IE' => 'Irisch',
        'gl_ES' => 'Galizisch',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebräisch',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Kroatisch',
        'hu_HU' => 'Ungarisch',
        'hy_AM' => 'Armenisch',
        'id_ID' => 'Indonesisch',
        'is_IS' => 'Isländisch',
        'it_IT' => 'Italienisch',
        'ja_JP' => 'Japanisch',
        'ka_GE' => 'Georgisch',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Koreanisch',
        'ku_TR' => 'Kurdisch',
        'lt_LT' => 'Litauisch',
        'lv_LV' => 'Lettisch',
        'mk_MK' => 'Mazedonisch',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malaiisch',
        'nb_NO' => 'Norwegisch Bokmál',
        'nn_NO' => 'Norwegisch Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Niederländisch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polnisch',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portugiesisch (BR)',
        'pt_PT' => 'Portugiesisch (PT)',
        'ro_RO' => 'Rumänisch',
        'ru_RU' => 'Russisch',
        'sk_SK' => 'Slowakisch',
        'sl_SI' => 'Slowenisch',
        'sq_AL' => 'Albanisch',
        'sr_RS' => 'Serbisch',
        'sv_SE' => 'Schwedisch',
        'sw_KE' => 'Suaheli',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thailändisch',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Tükisch',
        'uk_UA' => 'Ukrainisch',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamesisch',
        'zh_CN' => 'Chinesisch vereinfacht (CN)',
        'zh_HK' => 'Chinesisch traditionell (HK)',
        'zh_TW' => 'Chinesisch traditionell (TW)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Am',
        'notOn' => 'Nicht am',
        'after' => 'Nach',
        'before' => 'Vor',
        'between' => 'Zwischen',
        'today' => 'Heute',
        'past' => 'Vergangenheit',
        'future' => 'Zukunft',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Gleich',
        'notEquals' => 'Nicht gleich',
        'greaterThan' => 'Größer als',
        'lessThan' => 'Weniger als',
        'greaterThanOrEquals' => 'Größer oder gleich als',
        'lessThanOrEquals' => 'Weniger oder gleich als',
        'between' => 'Zwischen',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Kein(e)',
        '0.5' => '30 Sekunden',
        1 => '1 Minute',
        2 => '2 Minuten',
        5 => '5 Minuten',
        10 => '10 Minuten',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Telefon Mobil',
        'Office' => 'Büro',
        'Fax' => 'Fax',
        'Home' => 'Startseite',
        'Other' => 'Andere',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Sie finden die Übersetzung hier: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Fett',
          'italic' => 'Kursiv',
          'underline' => 'Unterstrichen',
          'strike' => 'Durchgestrichen',
          'clear' => 'Font Stil entfernen',
          'height' => 'Zeilenhöhe',
          'name' => 'Schriftfamilie',
          'size' => 'Schriftgröße',
        ),
        'image' => 
        array (
          'image' => 'Bild',
          'insert' => 'Bild einfügen',
          'resizeFull' => 'Originalgröße',
          'resizeHalf' => 'Größe 1/2',
          'resizeQuarter' => 'Größe 1/4',
          'floatLeft' => 'Linksbündig',
          'floatRight' => 'Rechtsbündig',
          'floatNone' => 'Kein Textfluss',
          'dragImageHere' => 'Ziehen Sie ein Bild mit der Maus hierher',
          'selectFromFiles' => 'Wählen Sie eine Datei aus',
          'url' => 'Grafik URL',
          'remove' => 'Grafik entfernen',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Link einfügen',
          'unlink' => 'Link entfernen',
          'edit' => 'Bearbeiten',
          'textToDisplay' => 'Anzeigetext',
          'url' => 'Ziel des Links?',
          'openInNewWindow' => 'In einem neuen Fenster öffnen',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Video einfügen',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram oder DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabelle',
        ),
        'hr' => 
        array (
          'insert' => 'Eine horizontale Linie einfügen',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Zitat',
          'pre' => 'Quellcode',
          'h1' => 'Überschrift 1',
          'h2' => 'Überschrift 2',
          'h3' => 'Überschrift 3',
          'h4' => 'Überschrift 4',
          'h5' => 'Überschrift 5',
          'h6' => 'Überschrift 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Unsortierte Liste',
          'ordered' => 'Nummerierte Liste',
        ),
        'options' => 
        array (
          'help' => 'Hilfe',
          'fullscreen' => 'Vollbild',
          'codeview' => 'HTML-Code anzeigen',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Absatz',
          'outdent' => 'Ausrückung',
          'indent' => 'Einrückung',
          'left' => 'Links ausrichten',
          'center' => 'Zentriert ausrichten',
          'right' => 'Rechts ausrichten',
          'justify' => 'Blocksatz',
        ),
        'color' => 
        array (
          'recent' => 'Letzte Farbe',
          'more' => 'Mehr Farben',
          'background' => 'Hintergrundfarbe',
          'foreground' => 'Schriftfarbe',
          'transparent' => 'Transparenz',
          'setTransparent' => 'Transparenz setzen',
          'reset' => 'Zurücksetzen',
          'resetToDefault' => 'Zurücksetzen auf Standard',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Tastaturkürzel',
          'close' => 'Schließen',
          'textFormatting' => 'Textformatierung',
          'action' => 'Aktion',
          'paragraphFormatting' => 'Absatzformatierung',
          'documentStyle' => 'Dokumentenstil',
        ),
        'history' => 
        array (
          'undo' => 'Rückgängig',
          'redo' => 'Wiederholen',
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
      'post' => 'Senden',
      'attachments' => 'Anhänge',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausender Trennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorisierung',
      'smtpSecurity' => 'Sicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'smtpEmailAddress' => 'E-Mail Adresse',
      'exportDelimiter' => 'Export Trennzeichen',
      'receiveAssignmentEmailNotifications' => 'E-Mail Nachrichten bei Zuweisungen erhalten',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Benachrichtigungen',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Rollen',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
      'teams' => 'Teams',
    ),
    'labels' => 
    array (
      'Access' => 'Zugang',
      'Create Role' => 'Neue Rolle',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nicht gesetzt',
        'enabled' => 'Aktiv',
        'disabled' => 'Inaktiv',
      ),
      'levelList' => 
      array (
        'all' => 'Alle',
        'team' => 'Team',
        'own' => 'Eigene',
        'no' => 'Nein',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Lesen',
      'edit' => 'Bearbeiten',
      'delete' => 'Löschen',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Alle Änderungen werden erst nach Leeren des Caches wirksam.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'job' => 'Job',
      'scheduling' => 'Planung (in Crontab Notation)',
    ),
    'links' => 
    array (
      'log' => 'Protokoll',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Geplante Aufgabe erstellen',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Eingehende E-Mail überprüfen',
        'Cleanup' => 'Aufräumen',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'mac' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'windows' => 'Hinweis: Erstellen Sie eine Stapeldatei mit den folgenden Kommandos um geplante Aufgaben mit dem Windows Aufgabenplaner durchzuführen:',
        'default' => 'Hinweis: fügen Sie dieses Kommando zum CronJob hinzu (Geplante Aufgaben):',
      ),
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Ausführungszeit',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Benutzer Cache',
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausender Trennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'baseCurrency' => 'Basiswährung',
      'currencyRates' => 'Wechselkurse',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'companyLogo' => 'Firmenlogo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorisierung',
      'smtpSecurity' => 'Sicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'outboundEmailFromName' => 'Von Name',
      'outboundEmailFromAddress' => 'Von Adresse',
      'outboundEmailIsShared' => 'Kann von allen Benutzern verwendet werden',
      'recordsPerPage' => 'Datensätze pro Seite',
      'recordsPerPageSmall' => 'Datensätze pro Seite (Klein)',
      'tabList' => 'Reiter Liste',
      'quickCreateList' => 'Liste Schnellerstellung',
      'exportDelimiter' => 'Export Trennzeichen',
      'authenticationMethod' => 'Authentifizierungs Methode',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorisierung',
      'ldapUsername' => 'Benutzername',
      'ldapPassword' => 'Passwort',
      'ldapBindRequiresDn' => 'Bind erfordert Dn',
      'ldapBaseDn' => 'Basis Dn',
      'ldapAccountCanonicalForm' => 'Kanonische Form Konto',
      'ldapAccountDomainName' => 'Domain Name Konto',
      'ldapTryUsernameSplit' => 'Benutzernamen Split versuchen',
      'ldapCreateEspoUser' => 'Benutzer in EspoCRM erstellen',
      'ldapSecurity' => 'Sicherheit',
      'ldapUserLoginFilter' => 'Login Filter benutzen',
      'ldapAccountDomainNameShort' => 'Domain Name Konto kurz',
      'ldapOptReferrals' => 'Opt Referrals',
      'disableExport' => 'Export deaktivieren (nur Admin ist berechtigt)',
      'assignmentEmailNotifications' => 'E-Mail Nachrichten bei Zuweisungen senden',
      'assignmentEmailNotificationsEntityList' => 'Module für Benachrichtigungen',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Anzahl Sätze in Beziehungssubpanels',
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Lokale Einstellungen',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguration',
      'Notifications' => 'Benachrichtigungen',
      'Currency Settings' => 'Währunsgseinstellungen',
      'Currency Rtes' => 'Währungskurse',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Rollen',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
    ),
    'tooltips' => 
    array (
      'roles' => 'Alle Benutzer dieses Teams erben die Zugriffsrechte von ausgewählten Rollen.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Neues Team',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'userName' => 'Benutzername',
      'title' => 'Funktion',
      'isAdmin' => 'Ist Admin',
      'defaultTeam' => 'Standard Team:',
      'emailAddress' => 'E-Mail',
      'phoneNumber' => 'Telefon',
      'roles' => 'Rollen',
      'password' => 'Passwort',
      'passwordConfirm' => 'Passwort bestätigen',
      'newPassword' => 'Neues Passwort',
    ),
    'links' => 
    array (
      'teams' => 'Teams',
      'roles' => 'Rollen',
    ),
    'labels' => 
    array (
      'Create User' => 'Neuer Benutzer',
      'Generate' => 'Erzeugen',
      'Access' => 'Zugang',
      'Preferences' => 'Benutzereinstellungen',
      'Change Password' => 'Passwort ändern',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Alle Datensätze dieses Benutzers werden standardmäßig seinem Team zugeordnet.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Das Passwort wird an die E-Mail Adresse des Benutzers gesendet',
      'accountInfoEmailSubject' => 'Kontoinformation',
      'accountInfoEmailBody' => 'Ihre Kontoinformation: Benutzername: {userName} - Passwort: {password} {siteUrl}',
      'passwordChanged' => 'Das Passwort wurde geändert',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Rechnungsadresse',
      'shippingAddress' => 'Lieferadresse',
      'description' => 'Beschreibung',
      'sicCode' => 'WKN Nummer',
      'industry' => 'Branche',
      'type' => 'Typ',
      'contactRole' => 'Rolle',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Kunde',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Wiederverkäufer',
      ),
      'industry' => 
      array (
        'Apparel' => 'Bekleidungsindustrie',
        'Banking' => 'Bankwesen',
        'Computer Software' => 'Computer Software',
        'Education' => 'Bildungswesen',
        'Electronics' => 'Elektronik',
        'Finance' => 'Finanzsektor',
        'Insurance' => 'Versicherung',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Neue Firma',
      'Copy Billing' => 'Copy Billing',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Monat',
      'week' => 'Woche',
      'day' => 'Tag',
      'agendaWeek' => 'Woche',
      'agendaDay' => 'Tag',
    ),
    'labels' => 
    array (
      'Today' => 'Heute',
      'Create' => 'Erstellen',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'direction' => 'Richtung',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Durchgeführt',
        'Not Held' => 'Nicht durchgeführt',
      ),
      'direction' => 
      array (
        'Outbound' => 'Ausgehend',
        'Inbound' => 'Eingehend',
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
      'Create Call' => 'Neuer Anruf',
      'Set Held' => 'Auf Gehalten setzen',
      'Set Not Held' => 'Auf nicht gehalten setzen',
      'Send Invitations' => 'Einladungen versenden',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Geplant',
      'held' => 'Durchgeführt',
      'todays' => 'Heutige',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'number' => 'Nummer',
      'status' => 'Status',
      'account' => 'Firma',
      'contact' => 'Kontakt',
      'priority' => 'Priorität',
      'type' => 'Typ',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'Pending' => 'Schwebend',
        'Closed' => 'Abgeschlossen',
        'Rejected' => 'Abgelehnt',
        'Duplicate' => 'Duplizieren',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
      'type' => 
      array (
        'Question' => 'Frage',
        'Incident' => 'Vorfall',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Neuer Fall',
    ),
    'presetFilters' => 
    array (
      'open' => 'Offen',
      'closed' => 'Abgeschlossen',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'account' => 'Firma',
      'accounts' => 'Firmen',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Firmentyp',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'opportunityRole' => 'Verkaufschance Rolle',
      'accountRole' => 'Rolle',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Neuer Kontakt',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Kein(e)--',
        'Decision Maker' => 'Entscheider',
        'Evaluator' => 'Vorentscheider',
        'Influencer' => 'Einflussreiche Person',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'team' => 'Team',
      'status' => 'Status',
      'assignToUser' => 'Mit Benutzer verknüpfen',
      'host' => 'Host',
      'username' => 'Benutzername',
      'password' => 'Passwort',
      'port' => 'Port',
      'monitoredFolders' => 'Überwachter Ordner',
      'trashFolder' => 'Papierkorb Ordner',
      'ssl' => 'SSL',
      'createCase' => 'Neuer Fall',
      'reply' => 'Antworten',
      'caseDistribution' => 'Fall Verteilung',
      'replyEmailTemplate' => 'Vorlage E-Mail Antwort',
      'replyFromAddress' => 'Von Adresse antworten',
      'replyToAddress' => 'Antwort an Adresse',
      'replyFromName' => 'Von Name antworten',
    ),
    'tooltips' => 
    array (
      'reply' => 'Absender informieren dass die E-Mail empfangen wurde.',
      'createCase' => 'Fall aus eingehender E-Mail automatisch erstellen.',
      'replyToAddress' => 'Geben Sie die E-Mail Adresse dieser Mailbox an, um Antworten hier zu empfangen.',
      'caseDistribution' => 'Wie Fälle zugewiesen werden. Entweder direkt dem Benutzer oder im Team.',
      'assignToUser' => 'Benutzer E-Mails/Fälle werden zugewiesen an',
      'team' => 'Team E-Mails/Fälle werden verknüpft mit',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Direkte Zuordnung',
        'Round-Robin' => 'Umlauf-Verfahren',
        'Least-Busy' => 'geringste Auslastung',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Eingehende E-Mail erstellen',
      'IMAP' => 'IMAP',
      'Actions' => 'Aktionen',
      'Main' => 'Wichtig',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kann keine Verbindung zum IMAP Server herstellen',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Umgewandelt zu',
      'Create Lead' => 'Neuer Interessent',
      'Convert' => 'Umwandeln',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Firmenname',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'status' => 'Status',
      'source' => 'Quelle',
      'opportunityAmount' => 'Verkaufschance Betrag',
      'opportunityAmountConverted' => 'Verkaufschance Betrag (konvertiert)',
      'description' => 'Beschreibung',
      'createdAccount' => 'Firma',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Verkaufschance',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'In Process' => 'In Arbeit',
        'Converted' => 'Umgewandelt',
        'Recycled' => 'Wiedereröffnet',
        'Dead' => '\'Gestorben\'',
      ),
      'source' => 
      array (
        'Call' => 'Anruf',
        'Email' => 'E-Mail',
        'Existing Customer' => 'Bestehender Kunde',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Seite',
        'Campaign' => 'Kampagne',
        'Other' => 'Andere',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Durchgeführt',
        'Not Held' => 'Nicht durchgeführt',
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
      'Create Meeting' => 'Neues Meeting',
      'Set Held' => 'Auf Gehalten setzen',
      'Set Not Held' => 'Auf nicht gehalten setzen',
      'Send Invitations' => 'Einladungen versenden',
      'Saved as Held' => 'Gespeichert als durchgeführt',
      'Saved as Not Held' => 'Gespeichert als nicht durchgeführt',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Geplant',
      'held' => 'Durchgeführt',
      'todays' => 'Heutige',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'account' => 'Firma',
      'stage' => 'Verkaufsphase',
      'amount' => 'Betrag',
      'probability' => 'Wahrscheinlichkeit (%)',
      'leadSource' => 'Quelle',
      'doNotCall' => 'Nicht anrufen',
      'closeDate' => 'Abschlussdatum',
      'contacts' => 'Kontakte',
      'description' => 'Beschreibung',
      'amountConverted' => 'Betrag (konvertiert)',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualifikation',
        'Needs Analysis' => 'Bedarfserhebung',
        'Value Proposition' => 'Richtangebot',
        'Id. Decision Makers' => 'Entscheider ident.',
        'Perception Analysis' => 'Analyse Sichtweise',
        'Proposal/Price Quote' => 'Preisangebot',
        'Negotiation/Review' => 'Verhandlung/Überarbeitung',
        'Closed Won' => 'Gewonnen',
        'Closed Lost' => 'Verloren',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Neue Verkaufschance',
    ),
    'presetFilters' => 
    array (
      'open' => 'Offen',
      'won' => 'Gewonnen',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'website' => 'Webseite',
      'accountName' => 'Firmenname',
      'phoneNumber' => 'Telefon',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Neuer Zielkontakt',
      'Convert to Lead' => 'Zu Interessent umwandeln',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Fällig am',
      'priority' => 'Priorität',
      'description' => 'Beschreibung',
      'isOverdue' => 'Ist überfällig',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nicht begonnen',
        'Started' => 'In Bearbeitung',
        'Completed' => 'Abgeschlossen',
        'Canceled' => 'Storniert',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Neue Aufgabe',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'completed' => 'Abgeschlossen',
      'todays' => 'Heutige',
      'overdue' => 'Überfällig',
    ),
  ),
);

?>