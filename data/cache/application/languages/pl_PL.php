<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Włączony',
      'Disabled' => 'Wyłączony',
      'System' => 'System',
      'Users' => 'Użytkownik',
      'Email' => 'E-mail',
      'Data' => 'Data',
      'Customization' => 'Dostosowanie',
      'Available Fields' => 'Dostępne Pola',
      'Layout' => 'Układ',
      'Add Panel' => 'Dodaj Panel',
      'Add Field' => 'Dodaj Pole',
      'Settings' => 'Ustawienia',
      'Scheduled Jobs' => 'Zaplanowane działanie',
      'Upgrade' => 'Aktualizacja',
      'Clear Cache' => 'Wyczyść Pamięć Podręczną',
      'Rebuild' => 'Przebuduj',
      'Teams' => 'Zespoły',
      'Roles' => 'Rola',
      'Outbound Emails' => 'Poczta Wychodząca',
      'Inbound Emails' => 'Poczta Przychodząca',
      'Email Templates' => 'Szkice Wiadomości',
      'Import' => 'Import',
      'Layout Manager' => 'Menadżer Widoku',
      'Field Manager' => 'Mendżer Pól',
      'User Interface' => 'Interfejs Użytkonika',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Autoryzacja',
      'Currency' => 'Waluta',
      'Integrations' => 'Integrations',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detale',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Filtry Wyszukiwania',
      'massUpdate' => 'Masowa Akrualizacja',
      'relationships' => 'Relacje',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adres',
      'array' => 'Tablica',
      'foreign' => 'Zagraniczny',
      'duration' => 'Czas',
      'password' => 'Hasło',
      'parsonName' => 'Imię',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Bool',
      'currency' => 'Waluta',
      'date' => 'Data',
      'datetime' => 'DataCzas',
      'email' => 'E-mail',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'multienim' => 'Multienum',
      'phone' => 'Telefon',
      'text' => 'Tekst',
      'url' => 'Strona Internetowa',
      'varchar' => 'Varchar',
      'file' => 'Plik',
      'image' => 'Obraz',
    ),
    'fields' => 
    array (
      'type' => 'Rodzaj',
      'name' => 'Imię',
      'label' => 'Etykieta',
      'required' => 'Wymagany',
      'default' => 'Standardowy',
      'maxLength' => 'Długość Maksymalna',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Link',
      'field' => 'Pole',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Tłumaczenie',
      'previewSize' => 'Podgląd Rozmiaru',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Twój EspoCRM jest aktualizowany do wersji <strong>{version}</strong>. To może zająć trochę czasu.',
      'upgradeDone' => 'Twój CRM został zaaktualizowany do najnowszej wersji <strong>{version}</strong>. Odśwież swoją przeglądarke aby zobaczyć zmiany.',
      'upgradeBackup' => 'Zalecamy abyś wykonał archiwizacje swoich danych, przed aktualizacją.',
      'thousandSeparatorEqualsDecimalMark' => 'Separator dziesiętny nie może być taki sam jak znak oddzielenia',
      'userHasNoEmailAddress' => 'Użytkownik nie ma przypisanego adres e-mail.',
      'selectEntityType' => 'Wybierz jednostkę z menu po lewej stonie.',
      'selectUpgradePackage' => 'Wypierz paczkę do aktualizacji',
      'selectLayout' => 'Wybierz interesujący Cię układ z menu po lewej stronie i zacznij go edytować.',
    ),
    'descriptions' => 
    array (
      'settings' => 'Ustawienia systemu dla aplikacji.',
      'scheduledJob' => 'Zadania wykonywane przez skrypt cron.',
      'upgrade' => 'Aktualizuj EspoCRM.',
      'clearCache' => 'Wyczyść wszystkie dane zapisane w pamięci podręcznej.',
      'rebuild' => 'Przebuduj oraz wyczyść pamięć podręczną.',
      'users' => 'Zarządzanie użytkonikami.',
      'teams' => 'Zarządzanie zespołami.',
      'roles' => 'Zarządzanie Rolami.',
      'outboundEmails' => 'Ustawienia SMTP dla poczty wychodzącej.',
      'inboundEmails' => 'Glabalne ustawienia IMAP. Importowanie wiadomości i e-mail-do-zadania.',
      'emailTemplates' => 'Szkice wiadomości dla poczty wychodzącej.',
      'import' => 'Importuj dane z pliku CSV.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'fieldManager' => 'Utwórz nowe pole lub dopasuj istniejące.',
      'userInterface' => 'Konfiguruj UI(interfejs użytkownika).',
      'authTokens' => 'Aktywuj autoryzacje sesji. Adres IP oraz data ostaniego wejścia.',
      'authentication' => 'Ustawinia Autoryzacji.',
      'currency' => 'Ustawienia waluty oraz przelicznika.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Bardzo Małe',
        'small' => 'Małe',
        'medium' => 'Średnie',
        'large' => 'Duże',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Użytkownik',
      'ipAddress' => 'IP Adres',
      'lastAccess' => 'Data ostatniego logowania',
      'createdAt' => 'Data Logowania',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Temat',
      'parent' => 'Konto',
      'status' => 'Status',
      'dateSent' => 'Data Wysłania',
      'from' => 'Od',
      'to' => 'Do',
      'cc' => 'Kopia Do',
      'bcc' => 'Ukryta Kopia Do',
      'isHtml' => 'Format HTML',
      'body' => 'Treść',
      'subject' => 'Temat',
      'attachments' => 'Załącznik',
      'selectTemplate' => 'Wybierz szkic wiadomości',
      'fromEmailAddress' => 'Z adresu',
      'toEmailAddresses' => 'Do adresu',
      'emailAddress' => 'E-mail Adres',
      'deliveryDate' => 'Delivery Date',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Szkic',
      'Sending' => 'Wysyłam',
      'Sent' => 'Wysłane',
      'Archived' => 'Zapisane',
    ),
    'labels' => 
    array (
      'Create Email' => 'Archiwizuj e-mail',
      'Archive Email' => 'Archiwizuj e-mail',
      'Compose' => 'Utwórz',
      'Reply' => 'Odpowiedz',
      'Reply to All' => 'Reply to All',
      'Forward' => 'Forward',
      'Original message' => 'Original message',
      'Forwarded message' => 'Forwarded message',
      'Email Accounts' => 'Email Accounts',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Wysłane',
      'archived' => 'Zapisane',
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
      'Primary' => 'Główny',
      'Opted Out' => 'Porzucony',
      'Invalid' => 'Błędny',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'status' => 'Status',
      'isHtml' => 'Format HTML',
      'body' => 'Treść',
      'subject' => 'Temat',
      'attachments' => 'Załącznik',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Utwórz Szkic Wiadomości',
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
      'Email' => 'E-mail',
      'User' => 'Użytkownik',
      'Team' => 'Zespół',
      'Role' => 'Rola',
      'EmailTemplate' => 'Szkic wiadomości',
      'EmailAccount' => 'Email Account',
      'OutboundEmail' => 'Poczta Wychodząca',
      'ScheduledJob' => 'Automatyczne działanie',
      'ExternalAccount' => 'External Account',
      'Account' => 'Konto',
      'Contact' => 'Kontakty',
      'Lead' => 'Potencjalny Kontakt',
      'Target' => 'Cel',
      'Opportunity' => 'Szansa Sprzedaży',
      'Meeting' => 'Spotkanie',
      'Calendar' => 'Kalendarz',
      'Call' => 'Telefon',
      'Task' => 'Zadanie',
      'Case' => 'Sprawa',
      'InboundEmail' => 'Poczta Przychodząca',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Emails',
      'User' => 'Użytkownik',
      'Team' => 'Zespoły',
      'Role' => 'Rola',
      'EmailTemplate' => 'Szkice Wiadomości',
      'EmailAccount' => 'Email Accounts',
      'OutboundEmail' => 'Poczta Wychodząca',
      'ScheduledJob' => 'Zaplanowane działanie',
      'ExternalAccount' => 'External Accounts',
      'Account' => 'Klienci',
      'Contact' => 'Kontakty',
      'Lead' => 'Potencjalne Kontakty',
      'Target' => 'Cele',
      'Opportunity' => 'Szanse Sprzedaży',
      'Meeting' => 'Spotkania',
      'Calendar' => 'Kalendarz',
      'Call' => 'Telefony',
      'Task' => 'Zadania',
      'Case' => 'Zlecenia',
      'InboundEmail' => 'Poczta Przychodząca',
    ),
    'labels' => 
    array (
      'Misc' => 'Misc',
      'Merge' => 'Merge',
      'None' => 'None',
      'by' => 'przez',
      'Saved' => 'Zapisane',
      'Error' => 'Błąd',
      'Select' => 'Wybierz',
      'Not valid' => 'Nie poprawnie',
      'Please wait...' => 'Proszę Czekać...',
      'Please wait' => 'Proszę Czekać',
      'Loading...' => 'Ładuje...',
      'Uploading...' => 'Wgrywam na serwer...',
      'Sending...' => 'Wysyłam...',
      'Removed' => 'Usunięty',
      'Posted' => 'Opublikowany',
      'Linked' => 'Linked',
      'Unlinked' => 'Unlinked',
      'Access denied' => 'Dostęp zabroniony',
      'Access' => 'Dostęp',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Rekord został usunięty',
      'Wrong username/password' => 'Zła nazwa użytkonika/hasło',
      'Post cannot be empty' => 'Notatka nie może byc pusta',
      'Removing...' => 'Usuwam...',
      'Unlinking...' => 'Unlinking...',
      'Posting...' => 'Nadaje...',
      'Username can not be empty!' => 'Nazwa użytkownika nie może byc pusta!',
      'Cache is not enabled' => 'Pamięć podręczna jest nie dostępna',
      'Cache has been cleared' => 'Pamięć podręczna została wyczyszczona',
      'Rebuild has been done' => 'Przebudowanie zostało zakończone',
      'Saving...' => 'Zapisuje...',
      'Modified' => 'Zmieniony',
      'Created' => 'Utworzony',
      'Create' => 'Utwórz',
      'create' => 'utwórz',
      'Overview' => 'Podgląd',
      'Details' => 'Detale',
      'Add Filter' => 'Dodaj Filtr',
      'Add Dashlet' => 'Dodaj Podgląd',
      'Add' => 'Dodaj',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Więcej',
      'Search' => 'Szukaj',
      'Only My' => 'Tylko Moje',
      'Open' => 'Otwórz',
      'Admin' => 'Admin',
      'About' => 'O',
      'Refresh' => 'Odśwież',
      'Remove' => 'Usuń',
      'Options' => 'Opcje',
      'Username' => 'Użytkownik',
      'Password' => 'Hasło',
      'Login' => 'Login',
      'Log Out' => 'Wyloguj się',
      'Preferences' => 'Preferencje',
      'State' => 'Województwo',
      'Street' => 'Ulica',
      'Country' => 'Kraj',
      'City' => 'Miasto',
      'PostalCode' => 'Kod Pocztowy',
      'Followed' => 'Śledzony',
      'Follow' => 'Śledź',
      'Clear Local Cache' => 'Wyczyść Pamięć Podręczną',
      'Actions' => 'Akcja',
      'Delete' => 'Usuń',
      'Update' => 'Aktualizuj',
      'Save' => 'Zapisz',
      'Edit' => 'Edytuj',
      'Cancel' => 'Anuluj',
      'Unlink' => 'Unlink',
      'Mass Update' => 'Masowa Akrualizacja',
      'Export' => 'Eksportuj',
      'No Data' => 'Brak Danych',
      'All' => 'Wszystko',
      'Active' => 'Aktywny',
      'Inactive' => 'Nie Aktywny',
      'Write your comment here' => 'Dodaj swój komentarz tutaj',
      'Post' => 'Opublikuj',
      'Stream' => 'Komunikator',
      'Show more' => 'Pokaż Więcej',
      'Dashlet Options' => 'Opcje Podglądu',
      'Full Form' => 'Pełen Formularz',
      'Insert' => 'Wstaw',
      'Person' => 'Osoba',
      'First Name' => 'Imię',
      'Last Name' => 'Nazwisko',
      'Original' => 'Originalny',
      'You' => 'Ty',
      'you' => 'ty',
      'change' => 'zmień',
      'Primary' => 'Główny',
      'Save Filters' => 'Zapisz filtry wyszukiwania',
      'Administration' => 'Administracja',
      'Run Import' => 'Uruchom Importowanie',
      'Duplicate' => 'Powielony',
      'Notifications' => 'powiadomienia',
      'Mark all read' => 'Oznacz wszystko jako przeczytane',
      'See more' => 'Zobacz więcej',
      'Create InboundEmail' => 'Utwórz Pocztę Przychodzącą',
      'Activities' => 'Aktywności',
      'History' => 'Historia',
      'Attendees' => 'Uczestnicy',
      'Schedule Meeting' => 'Zaplanuj Spotkanie',
      'Schedule Call' => 'Zaplanuj Telefon',
      'Compose Email' => 'Utwórz Wiadomość',
      'Log Meeting' => 'Zarejestruj Spotkanie',
      'Log Call' => 'Zarejestruj Telefon',
      'Archive Email' => 'Archiwizuj e-mail',
      'Create Task' => 'Utwórz Zadanie',
      'Tasks' => 'Zadania',
    ),
    'messages' => 
    array (
      'notModified' => 'Nie zmodyfikowałeś żadnych danych',
      'duplicate' => 'Dane które wprowadziłeś wyglądają na powielone',
      'fieldIsRequired' => '{field} wymagane',
      'fieldShouldBeEmail' => '{field} wprowadź poprawny adres e-mail',
      'fieldShouldBeFloat' => '{field} powinno być poprawnie wyjustowane',
      'fieldShouldBeInt' => '{field} powinno być poprawną liczbą całkowitą',
      'fieldShouldBeDate' => '{field} powinno być poprawną datą',
      'fieldShouldBeDatetime' => '{field} powinno być poprawną datą/czasem',
      'fieldShouldAfter' => '{field} powinno być po {otherField}',
      'fieldShouldBefore' => '{field} powinno być po {otherField}',
      'fieldShouldBeBetween' => '{field} powinno być między {min} i {max}',
      'fieldShouldBeLess' => '{field} powinno być mniejsze niż {value}',
      'fieldShouldBeGreater' => '{field} powinno być większe niż {value}',
      'fieldBadPasswordConfirm' => '{field} błędnie potwierdzony',
      'assignmentEmailNotificationSubject' => 'EspoCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} został przypisany  {entityType} \'{Entity.name}\' do Ciebie

{recordUrl}',
      'confirmation' => 'Are you sure?',
      'removeRecordConfirmation' => 'Are you sure you want to remove the record?',
      'unlinkRecordConfirmation' => 'Are you sure you want to unlink relationship?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected records?',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Tylko Moje',
      'open' => 'Otwórz',
      'active' => 'Aktywny',
    ),
    'fields' => 
    array (
      'name' => 'Imię',
      'firstName' => 'Imię',
      'lastName' => 'Nazwisko',
      'salutationName' => 'Zwrot',
      'assignedUser' => 'Przypisany użytkownik',
      'emailAddress' => 'E-mail',
      'assignedUserName' => 'Przypisana Nazwa Użytkownika',
      'teams' => 'Zespoły',
      'createdAt' => 'Utworzony do',
      'modifiedAt' => 'Zmodyfikowany do',
      'createdBy' => 'Utworzony przez',
      'modifiedBy' => 'Zmodyfikowany przez',
      'title' => 'Tytuł',
      'dateFrom' => 'Data Od',
      'dateTo' => 'Data Do',
      'autorefreshInterval' => 'Odświeżanie co',
      'displayRecords' => 'Wyświetlane Dane',
      'billingAddressCity' => 'Miasto',
      'billingAddressCountry' => 'Kraj',
      'billingAddressPostalCode' => 'Kod Pocztowy',
      'billingAddressState' => 'Województwo',
      'billingAddressStreet' => 'Ulica',
      'addressCity' => 'Miasto',
      'addressStreet' => 'Ulica',
      'addressCountry' => 'Kraj',
      'addressState' => 'Województwo',
      'addressPostalCode' => 'Kod Pocztowy',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'teams' => 'Zespoły',
      'users' => 'Użytkownik',
      'contacts' => 'Kontakty',
      'opportunities' => 'Szanse Sprzedaży',
      'leads' => 'Potencjalne Kontakty',
      'meetings' => 'Spotkania',
      'calls' => 'Telefony',
      'tasks' => 'Zadania',
      'emails' => 'Emails',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Komunikator',
      'Leads' => 'Moje Potencjalne Kontakty',
      'Opportunities' => 'Moje Szanse Sprzedaży',
      'Tasks' => 'Moje Zadania',
      'Cases' => 'Moje Zlecenia',
      'Calendar' => 'Kalendarz',
      'Calls' => 'Moje Telefony',
      'Meetings' => 'Moje Spotkania',
      'OpportunitiesByStage' => 'Szansa Sprzedaży/Etap/',
      'OpportunitiesByLeadSource' => 'Szansa Sprzedaży/Potencjalny kontakt/',
      'SalesByMonth' => 'Sprzedaż Miesięczna',
      'SalesPipeline' => 'Lejek Sprzedaży',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} utworzony {entityType} {entity}',
      'createAssigned' => '{user} utworzony {entityType} {entity} assigned to {assignee}',
      'assign' => '{user} przypisany {entityType} {entity} to {assignee}',
      'post' => '{user} opublikował {entityType} {entity}',
      'attach' => '{user} załączył {entityType} {entity}',
      'status' => '{user} zaaktualizował {field} on {entityType} {entity}',
      'update' => '{user} zaaktualizował {entityType} {entity}',
      'createRelated' => '{user} created {relatedEntityType} {relatedEntity} linked to {entityType} {entity}',
      'emailReceived' => '{entity} został otrzymane dla {entityType} {entity}',
      'createThis' => '{user} utwórz to {entityType}',
      'createAssignedThis' => '{user} utwórz to {entityType} assigned to {assignee}',
      'assignThis' => '{user} przypisz to {entityType} to {assignee}',
      'postThis' => '{user} opublikował',
      'attachThis' => '{user} załączył',
      'statusThis' => '{user} zaaktualizował {field}',
      'updateThis' => '{user} aktualizuj to {entityType}',
      'createRelatedThis' => '{user} created {relatedEntityType} {relatedEntity} linked to this {entityType}',
      'emailReceivedThis' => '{entity} has been received',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Styczeń',
        1 => 'Luty',
        2 => 'Marzec',
        3 => 'Kwiecień',
        4 => 'Maj',
        5 => 'Czerwiec',
        6 => 'Lipiec',
        7 => 'Sierpień',
        8 => 'Wrzesień',
        9 => 'Październik',
        10 => 'Listopad',
        11 => 'Grudzień',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Sty',
        1 => 'Lut',
        2 => 'Mar',
        3 => 'Kwi',
        4 => 'Maj',
        5 => 'Czer',
        6 => 'Lip',
        7 => 'Sie',
        8 => 'Wrze',
        9 => 'Paź',
        10 => 'Lis',
        11 => 'Gru',
      ),
      'dayNames' => 
      array (
        0 => 'Niedziela',
        1 => 'Poniedziałek',
        2 => 'Wtorek',
        3 => 'Środa',
        4 => 'Czwartek',
        5 => 'Piątek',
        6 => 'Sobota',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Ndz',
        1 => 'Pon',
        2 => 'Wto',
        3 => 'Śro',
        4 => 'Czwa',
        5 => 'Pią',
        6 => 'Sob',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Nd',
        1 => 'Pn',
        2 => 'Wt',
        3 => 'Śr',
        4 => 'Czw',
        5 => 'Pi',
        6 => 'So',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Pan.',
        'Mrs.' => 'Pani.',
        'Dr.' => 'Dr.',
        'Drs.' => 'Drs.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polski',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Włączony',
        'notOn' => 'Nie Włączony',
        'after' => 'Po',
        'before' => 'Przed',
        'between' => 'Między',
        'today' => 'Dziś',
        'past' => 'Przeszłość',
        'future' => 'Przyszłość',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Równy',
        'notEquals' => 'Nie Równy',
        'greaterThan' => 'Większy Niż',
        'lessThan' => 'Mniejszy Niż',
        'greaterThanOrEquals' => 'Większy lub Równy',
        'lessThanOrEquals' => 'Mniejszy lub Równy',
        'between' => 'Między',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'None',
        '0.5' => '30 sekund',
        1 => '1 minuta',
        2 => '2 minuty',
        5 => '5 minut',
        10 => '10 minut',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Komórka',
        'Office' => 'Biuro',
        'Fax' => 'Faks',
        'Home' => 'Domowy',
        'Other' => 'Inny',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Możesz znaleść tłumaczenie tutaj: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Pogrubiony',
          'italic' => 'Pochylenie',
          'underline' => 'Podkreślenie',
          'strike' => 'Przekreślnie',
          'clear' => 'Usunięto formatowanie tekstu',
          'height' => 'Szerokość Lini',
          'name' => 'Czcionka',
          'size' => 'Rozmiar Czcionki',
        ),
        'image' => 
        array (
          'image' => 'Obraz',
          'insert' => 'Dodaj Obraz',
          'resizeFull' => 'Przeskaluj na pełny rozmiar',
          'resizeHalf' => 'Przeszkaluj na połowę rozmiaru',
          'resizeQuarter' => 'Przeskaluj do 1/4 rozmiaru',
          'floatLeft' => 'Równaj do lewej',
          'floatRight' => 'Równaj do prawej',
          'floatNone' => 'Nie zmieniaj ',
          'dragImageHere' => 'Upuść obraz tutaj',
          'selectFromFiles' => 'Wybierz plik z dysku',
          'url' => 'Adres do Obrazu',
          'remove' => 'Usuń Obraz',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Insert Link',
          'unlink' => 'Unlink',
          'edit' => 'Edytuj',
          'textToDisplay' => 'Tekst do wyświetlenia',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Otwórz w nowym oknie',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Wstaw Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabela',
        ),
        'hr' => 
        array (
          'insert' => 'Wstaw Linię Poziomą',
        ),
        'style' => 
        array (
          'style' => 'Styl',
          'normal' => 'Normalny',
          'blockquote' => 'Cytat',
          'pre' => 'Code',
          'h1' => 'Nagłówek 1',
          'h2' => 'Nagłówek 2',
          'h3' => 'Nagłówek 3',
          'h4' => 'Nagłówek 4',
          'h5' => 'Nagłówek 5',
          'h6' => 'Nagłówek 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Niewypunktowana lista',
          'ordered' => 'Wypunktowana lista',
        ),
        'options' => 
        array (
          'help' => 'Pomoc',
          'fullscreen' => 'Pełny Ekran',
          'codeview' => 'Źródło',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Akapit',
          'outdent' => 'Zmniejsz wcięcie',
          'indent' => 'Zwiększ wcięcie',
          'left' => 'Wyrównaj do lewej',
          'center' => 'Wyrównaj do środka',
          'right' => 'Wyrównaj do prawej',
          'justify' => 'Wyrównaj do lewej i prawej',
        ),
        'color' => 
        array (
          'recent' => 'Ostatni Kolor',
          'more' => 'Więcej Kolorów',
          'background' => 'Kolor Tła',
          'foreground' => 'Kolor Czcionki',
          'transparent' => 'Przeźroczystość',
          'setTransparent' => 'Ustwa przeźroczystość',
          'reset' => 'Reset',
          'resetToDefault' => 'Domyślnie',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Skróty klawiaturowe',
          'close' => 'Zamknij',
          'textFormatting' => 'Formatowanie tekstu',
          'action' => 'Akcja',
          'paragraphFormatting' => 'Formatowanie akapitu',
          'documentStyle' => 'Style dokumentu',
        ),
        'history' => 
        array (
          'undo' => 'Cofnij',
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
      'post' => 'Opublikuj',
      'attachments' => 'Załącznik',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Format Daty',
      'timeFormat' => 'Format Czasu',
      'timeZone' => 'Strefa Czasowa',
      'weekStart' => 'Pierwszy dzień tygodnia',
      'thousandSeparator' => 'Separator Dziesiętny',
      'decimalMark' => 'Znak rozdzielenia',
      'defaultCurrency' => 'Domyślna Waluta',
      'currencyList' => 'Domyślana Lista',
      'language' => 'Język',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Zabezpieczenia',
      'smtpUsername' => 'Użytkownik',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Hasło',
      'smtpEmailAddress' => 'E-mail Adres',
      'exportDelimiter' => 'Znak rodzielenia eksportu',
      'receiveAssignmentEmailNotifications' => 'Otrzymać informację w trakcie jej przypisywania',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Niedziela',
        1 => 'Poniedziałek',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'powiadomienia',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'roles' => 'Rola',
    ),
    'links' => 
    array (
      'users' => 'Użytkownik',
      'teams' => 'Zespoły',
    ),
    'labels' => 
    array (
      'Access' => 'Dostęp',
      'Create Role' => 'Utwórz Role ',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nie ustawiony',
        'enabled' => 'włączony',
        'disabled' => 'wyłączony',
      ),
      'levelList' => 
      array (
        'all' => 'wszystko',
        'team' => 'zespół',
        'own' => 'własny',
        'no' => 'nie',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Przeczytany',
      'edit' => 'Edytuj',
      'delete' => 'Usuń',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Wszystkie zmiany w dostępie zostaną aktywowany w momencie wyczyszczenia pamięci.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'status' => 'Status',
      'job' => 'Zadanie',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Utwórz zaplanowane działania',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Sprawdź pocztę przychodzącą',
        'Cleanup' => 'Wyczyść',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Uwaga: Dodaj tą linię do pliku crontab, aby uruchomić zaplanowane zadania Espo:',
        'mac' => 'Uwaga: Dodaj tą linię do pliku crontab, aby uruchomić zaplanowane zadania Espo:',
        'windows' => 'Uwaga: Utwórz plik wsadowy z następujących poleceń, aby uruchomić zaplanowane zadania Espo w systemie Windows:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Aktywny',
        'Inactive' => 'Nie Aktywny',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Czas realizacji',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Użyj pamięci podręcznej',
      'dateFormat' => 'Format Daty',
      'timeFormat' => 'Format Czasu',
      'timeZone' => 'Strefa Czasowa',
      'weekStart' => 'Pierwszy dzień tygodnia',
      'thousandSeparator' => 'Separator Dziesiętny',
      'decimalMark' => 'Znak rozdzielenia',
      'defaultCurrency' => 'Domyślna Waluta',
      'baseCurrency' => 'Podstawowa Waluta',
      'currencyRates' => 'Kurs Waluty',
      'currencyList' => 'Domyślana Lista',
      'language' => 'Język',
      'companyLogo' => 'Logo Firmowe',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Zabezpieczenia',
      'smtpUsername' => 'Użytkownik',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Hasło',
      'outboundEmailFromName' => 'Od',
      'outboundEmailFromAddress' => 'Z adresu',
      'outboundEmailIsShared' => 'Jest Udostępniane',
      'recordsPerPage' => 'Wyników na stronę',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Lista ',
      'quickCreateList' => 'Szybkie utworzenie listy',
      'exportDelimiter' => 'Znak rodzielenia eksportu',
      'authenticationMethod' => 'Metoda autentykcji',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Użytkownik',
      'ldapPassword' => 'Hasło',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Nazwa konta domeny',
      'ldapTryUsernameSplit' => 'Spróbuj rodzielić nazwę użytkonika',
      'ldapCreateEspoUser' => 'Utwórz uzytkonika w EspoCRM',
      'ldapSecurity' => 'Zabezpieczenia',
      'ldapUserLoginFilter' => 'Filtr użytkoników ',
      'ldapAccountDomainNameShort' => 'Krótka nazwa konta domeny',
      'ldapOptReferrals' => 'Opt Referrals',
      'disableExport' => 'Disable Export (only admin is allowed)',
      'assignmentEmailNotifications' => 'Wyślij powiadominie do użytkonika o przypisaniu',
      'assignmentEmailNotificationsEntityList' => 'Entities to Notify About',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Niedziela',
        1 => 'Poniedziałek',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Policz wyniki w panelu relacji.',
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Lokalne',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguracja',
      'Notifications' => 'powiadomienia',
      'Currency Settings' => 'Ustwienia Waluty',
      'Currency Rtes' => 'Ustawienia Kursu',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'roles' => 'Rola',
    ),
    'links' => 
    array (
      'users' => 'Użytkownik',
    ),
    'tooltips' => 
    array (
      'roles' => 'Wszyscy użytkownicy z zespołu, otrzymają dostęp do ustawień zgodnie z rolami .',
    ),
    'labels' => 
    array (
      'Create Team' => 'Utwórz Zespół',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'userName' => 'Nazwa Użytkownika',
      'title' => 'Tytuł',
      'isAdmin' => 'Czy jest Administratorem',
      'defaultTeam' => 'Domyślny Zespół',
      'emailAddress' => 'E-mail',
      'phoneNumber' => 'Telefon',
      'roles' => 'Rola',
      'password' => 'Hasło',
      'passwordConfirm' => 'Potwierdź Hasło',
      'newPassword' => 'Nowe Hasło',
    ),
    'links' => 
    array (
      'teams' => 'Zespoły',
      'roles' => 'Rola',
    ),
    'labels' => 
    array (
      'Create User' => 'Utwórz Użytkonika',
      'Generate' => 'Generuj',
      'Access' => 'Dostęp',
      'Preferences' => 'Preferencje',
      'Change Password' => 'Zmień hasło',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Wszytskie dane utworzone przez tego użytkonika, zostaną przypisane do domyślnego zespołu.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Hasło zostanie wysłane na adres e-mail użytkonika.',
      'accountInfoEmailSubject' => 'Informacje o koncie',
      'accountInfoEmailBody' => 'Informacje o twoim koncie:

Użytkonik: {userName}
Hasło: {password}

{siteUrl}',
      'passwordChanged' => 'Hasło zostało zmienione',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'emailAddress' => 'E-mail',
      'website' => 'Strona Internetowa',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Adres Firmy',
      'shippingAddress' => 'Adres Dostawy',
      'description' => 'Opis ',
      'sicCode' => 'PKD',
      'industry' => 'Branża',
      'type' => 'Rodzaj',
      'contactRole' => 'Rola',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakty',
      'opportunities' => 'Szanse Sprzedaży',
      'cases' => 'Zlecenia',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Klient',
        'Investor' => 'Inwestor',
        'Partner' => 'Partner',
        'Reseller' => 'Sprzedawca',
      ),
      'industry' => 
      array (
        'Apparel' => 'Odzież',
        'Banking' => 'Bankowość',
        'Computer Software' => 'Oprogramowanie Komputerowe',
        'Education' => 'Edukacja',
        'Electronics' => 'Elektronika',
        'Finance' => 'Finanse',
        'Insurance' => 'Ubezpieczenia',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Utwórz Konto',
      'Copy Billing' => 'Copy Billing',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Miesiąc',
      'week' => 'Tydzień',
      'day' => 'Dzień',
      'agendaWeek' => 'Tydzień',
      'agendaDay' => 'Dzień',
    ),
    'labels' => 
    array (
      'Today' => 'Dziś',
      'Create' => 'Utwórz',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'parent' => 'Konto',
      'status' => 'Status',
      'dateStart' => 'Data Startu',
      'dateEnd' => 'Data Zakończenia',
      'direction' => 'Kierunek',
      'duration' => 'Czas',
      'description' => 'Opis ',
      'users' => 'Użytkownik',
      'contacts' => 'Kontakty',
      'leads' => 'Potencjalne Kontakty',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planowane',
        'Held' => 'Zatrzymany',
        'Not Held' => 'Nie zatrzymany',
      ),
      'direction' => 
      array (
        'Outbound' => 'Wychodzący',
        'Inbound' => 'Przychodzący',
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
      'Create Call' => 'Utwórz Telefon',
      'Set Held' => 'Ustaw Zatrzymanie',
      'Set Not Held' => 'Ustaw nie Zatrzymany',
      'Send Invitations' => 'Wyślij Powiadomienie',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planowane',
      'held' => 'Zatrzymany',
      'todays' => 'Dzisiaj',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'number' => 'Numer',
      'status' => 'Status',
      'account' => 'Konto',
      'contact' => 'Kontakty',
      'priority' => 'Pryjorytet',
      'type' => 'Rodzaj',
      'description' => 'Opis ',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nowy',
        'Assigned' => 'Przypisany',
        'Pending' => 'Oczekuje',
        'Closed' => 'Zamknięty',
        'Rejected' => 'Odrzucony',
        'Duplicate' => 'Powielony',
      ),
      'priority' => 
      array (
        'Low' => 'Niski',
        'Normal' => 'Normalny',
        'High' => 'Wysoki',
        'Urgent' => 'Pilne',
      ),
      'type' => 
      array (
        'Question' => 'Pytanie',
        'Incident' => 'Zdarzenie',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Utwórz Sprawę',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otwórz',
      'closed' => 'Zamknięty',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'emailAddress' => 'E-mail',
      'title' => 'Tytuł',
      'account' => 'Konto',
      'accounts' => 'Klienci',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Typ Klienta',
      'doNotCall' => 'Nie Dzwoń',
      'address' => 'Adres',
      'opportunityRole' => 'Rola Szansy Sprzedaży',
      'accountRole' => 'Rola',
      'description' => 'Opis ',
    ),
    'links' => 
    array (
      'opportunities' => 'Szanse Sprzedaży',
      'cases' => 'Zlecenia',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Utwórz Kontakt',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--NIC--',
        'Decision Maker' => 'Osoba Decyzyjna',
        'Evaluator' => 'Oceniający',
        'Influencer' => 'Wpływający',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'team' => 'Zespół',
      'status' => 'Status',
      'assignToUser' => 'Przypisz do Użytkonika',
      'host' => 'Host',
      'username' => 'Użytkownik',
      'password' => 'Hasło',
      'port' => 'Port',
      'monitoredFolders' => 'Monitorowane Foldery',
      'trashFolder' => 'Elementy Usunięte',
      'ssl' => 'SSL',
      'createCase' => 'Utwórz Sprawę',
      'reply' => 'Odpowiedz',
      'caseDistribution' => 'Dystrybucja Spraw',
      'replyEmailTemplate' => 'Szablon Odpowiedzi',
      'replyFromAddress' => 'Odpowiedz z Adresu',
      'replyToAddress' => 'Odpowiedz na Adres',
      'replyFromName' => 'Odpowiedz z Nazwy',
    ),
    'tooltips' => 
    array (
      'reply' => 'Potwierdzenie otrzymania wiadomości.',
      'createCase' => 'Automatycznie utwórz sprawę z przychodzącej wiadomości.',
      'replyToAddress' => 'Podaj adres e-mail z tej skrzynki pocztowej, aby tu odpowiedź.',
      'caseDistribution' => 'Jak zlecenie zostanie przypisane do. Przypisane bezpośrednio do użytkownika lub między zespołem',
      'assignToUser' => 'E-mail użytkownika/zlecenia zostanie przypisany do.',
      'team' => 'E-mail do zespołu/zlecenia zostaną związane z.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktywny',
        'Inactive' => 'Nie Aktywny',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Przypisanie bezpośrednio',
        'Round-Robin' => 'Przypisanie Karuzelowe',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Utwórz Pocztę Przychodzącą',
      'IMAP' => 'IMAP',
      'Actions' => 'Akcja',
      'Main' => 'Główny',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nie mogę połączyć się z serwerem IMAP',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Przekształcony w ',
      'Create Lead' => 'Utwórz Potencjalny Kontakt',
      'Convert' => 'Przekształć',
    ),
    'fields' => 
    array (
      'name' => 'Imię',
      'emailAddress' => 'E-mail',
      'title' => 'Tytuł',
      'website' => 'Strona Internetowa',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Nazwa Konta',
      'doNotCall' => 'Nie Dzwoń',
      'address' => 'Adres',
      'status' => 'Status',
      'source' => 'Źródło',
      'opportunityAmount' => 'Wartość Szansy Sprzewdaży',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'Opis ',
      'createdAccount' => 'Konto',
      'createdContact' => 'Kontakty',
      'createdOpportunity' => 'Szansa Sprzedaży',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nowy',
        'Assigned' => 'Przypisany',
        'In Process' => 'W trakcie',
        'Converted' => 'Przekształcony',
        'Recycled' => 'Usunięty',
        'Dead' => 'Martwy',
      ),
      'source' => 
      array (
        'Call' => 'Telefon',
        'Email' => 'E-mail',
        'Existing Customer' => 'Istniejący klient',
        'Partner' => 'Partner',
        'Public Relations' => 'Relacje',
        'Web Site' => 'Stwona Internetowa',
        'Campaign' => 'Kampania',
        'Other' => 'Inny',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktywny',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'parent' => 'Konto',
      'status' => 'Status',
      'dateStart' => 'Data Startu',
      'dateEnd' => 'Data Zakończenia',
      'duration' => 'Czas',
      'description' => 'Opis ',
      'users' => 'Użytkownik',
      'contacts' => 'Kontakty',
      'leads' => 'Potencjalne Kontakty',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planowane',
        'Held' => 'Zatrzymany',
        'Not Held' => 'Nie zatrzymany',
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
      'Create Meeting' => 'Utwórz Spotkanie',
      'Set Held' => 'Ustaw Zatrzymanie',
      'Set Not Held' => 'Ustaw nie Zatrzymany',
      'Send Invitations' => 'Wyślij Powiadomienie',
      'Saved as Held' => 'Zapisz jako zatrzymany',
      'Saved as Not Held' => 'Zapisz jako nie utrzymany',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planowane',
      'held' => 'Zatrzymany',
      'todays' => 'Dzisiaj',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'account' => 'Konto',
      'stage' => 'Estap',
      'amount' => 'Wartość',
      'probability' => 'Prawdopodobieństwo, %',
      'leadSource' => 'Zródło Potencjalnego Kontaktu',
      'doNotCall' => 'Nie Dzwoń',
      'closeDate' => 'Data Zamknięcia',
      'contacts' => 'Kontakty',
      'description' => 'Opis ',
      'amountConverted' => 'Amount (converted)',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakty',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'I Spotkanie',
        'Qualification' => 'Kwalifikacja',
        'Needs Analysis' => 'Dodatkowa Analiza',
        'Value Proposition' => 'Oferta Produktowa',
        'Id. Decision Makers' => 'Oferta przekazna do osoby decyzyjnej',
        'Perception Analysis' => 'Perception Analysis',
        'Proposal/Price Quote' => 'Oferta Cenowa',
        'Negotiation/Review' => 'Negocjacje ',
        'Closed Won' => 'Zakończone Wygrane',
        'Closed Lost' => 'Zakończone Przegrane',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Utwórz Szanse',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otwórz',
      'won' => 'Wygrane',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'emailAddress' => 'E-mail',
      'title' => 'Tytuł',
      'website' => 'Strona Internetowa',
      'accountName' => 'Nazwa Konta',
      'phoneNumber' => 'Telefon',
      'doNotCall' => 'Nie Dzwoń',
      'address' => 'Adres',
      'description' => 'Opis ',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Utwórz Cel',
      'Convert to Lead' => 'Przekształć w Potencjalny Kontakt',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Imię',
      'parent' => 'Konto',
      'status' => 'Status',
      'dateStart' => 'Data Startu',
      'dateEnd' => 'Data Zwrotu',
      'priority' => 'Pryjorytet',
      'description' => 'Opis ',
      'isOverdue' => 'Przegrzany',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nie Rozpoczęte',
        'Started' => 'Rozpoczęte',
        'Completed' => 'Ukończone',
        'Canceled' => 'Anulowane',
      ),
      'priority' => 
      array (
        'Low' => 'Niski',
        'Normal' => 'Normalny',
        'High' => 'Wysoki',
        'Urgent' => 'Pilne',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Utwórz Zadanie',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktywny',
      'completed' => 'Ukończone',
      'todays' => 'Dzisiaj',
      'overdue' => 'Przegrzane',
    ),
  ),
);

?>