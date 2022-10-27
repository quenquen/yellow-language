<?php
// Polish extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/polish

class YellowPolish {
    const VERSION = "0.8.37";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefault($this->getDefault());
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "pl"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="pl") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
    
    // Return default language settings
    public function getDefault() {
        return <<< 'END'
        Language: pl
        LanguageLocale: pl_PL
        LanguageDescription: Polski
        LanguageTranslator: Paweł Klockiewicz, Kanbeq
        AntispamDescription: Alternative email address obfuscator.
        AudioDescription: HTML5 audio player.
        BerlinDescription: Berlin to motyw zainspirowany Dieter Rams.
        BlogDescription: System blogowania dla Twojej strony.
        BlogBy: przez
        BlogTag: Tagi:
        BlogMore: Czytaj dalej…
        BreadcrumbDescription: Nawigacja okruszkowa (breadcrumb).
        BreadcrumbNavigation: Breadcrumb
        BundleDescription: Połącz pliki strony internetowej w zestawy.
        ChineseDescription: Chiński/简体中文 z językiem 'zh'.
        CodefileDescription: Download code blocks as text file.
        CommandDescription: Wiersz poleceń witryny.
        ContactDescription: Strona kontaktowa e-mail.
        ContactName: Nazwa:
        ContactEmail: Email:
        ContactMessage: Wiadomość:
        ContactConsent: Zgadzam się na przechowywanie mojej wiadomości przez tę witrynę.
        ContactButton: Wyślij moją wiadomość
        ContactMailSpam: [Płotka]
        ContactMailHeader: Otrzymałeś wiadomość od @sender:
        ContactMailFooter: Ten e-mail został wysłany za pośrednictwem @sitename - @title
        ContactStatusNone: Przywitaj się. Twoja opinia jest mile widziana.
        ContactStatusIncomplete: Wypełnij wszystkie pola.
        ContactStatusInvalid: Wprowadź poprawny adres email.
        ContactStatusReview: Usuń linki z wiadomości.
        ContactStatusDone: Wiadomość została wysłana. Dziękujemy!
        ContactStatusError: Wiadomość nie mogła zostać wysłana. Prosimy spróbować ponownie później.
        CopenhagenDescription: Copenhagen is a beautiful theme.
        CoreDescription: Podstawowa funkcjonalność strony internetowej.
        CoreNavigation: Main
        CorePagination: Page
        CorePaginationPrevious: ← Poprzednia
        CorePaginationNext: Następna →
        CoreTimeFormatShort: H:i
        CoreTimeFormatMedium: H:i:s
        CoreTimeFormatLong: H:i:s T
        CoreDateFormatShort: F Y
        CoreDateFormatMedium: d-m-Y
        CoreDateFormatLong: d-m-Y H:i
        CoreDatePast: dzisiaj, wczoraj, @x dni temu, miesiąc temu, @x miesiące(-ęcy) temu, rok temu, @x lat(-a) temu, @x
        CoreDateFuture: wkrótce, jutro, za @x dni, za miesiąc, za @x miesiące(-y), za rok, za @x lat(-a), @x
        CoreDateMonthsNominative: styczeń, luty, marzec, kwiecień, maj, czerwiec, lipiec, sierpień, wrzesień, październik, listopad, grudzień
        CoreDateMonthsGenitive: stycznia, lutego, marca, kwietnia, maja, czerwca, lipca, sierpnia, września, października, listopada, grudnia
        CoreDateWeekdays: poniedziałek, wtorek, środa, czwartek, piątek, sobota, niedziela
        CoreDateWeekstart: poniedziałek
        CoreDecimalSeparator: ,
        CoreError404Title: Nie znaleziono pliku
        CoreError404Text: Żądany plik nie został znaleziony. O nie...
        CoreError420Title: Strona nie jest publiczna
        CoreError420Text: Żądana strona nie jest publiczna. [yellow error]
        CoreError430Title: Logowanie nie powiodło się
        CoreError430Text: Adres e-mail lub hasło jest nieprawidłowe. [Spróbuj ponownie](#data-action-login).
        CoreError434Title: Nie znaleziono strony
        CoreError434Text: Żądana strona nie została znaleziona. [Możesz utworzyć tę stronę](#data-action-edit).
        CoreError435Title: Nie znaleziono strony
        CoreError435Text: Żądana strona została usunięta. [Możesz przywrócić tę stronę](#data-action-restore).
        CoreError450Title: Update error
        CoreError450Text: Nie można połączyć się z serwerem aktualizacji. Wymagane jest połączenie z Internetem.
        CoreError500Title: Błąd serwera
        CoreError500Text: Coś poszło nie tak. [yellow error]
        CsvDescription: CSV file parser.
        CzechDescription: Czeski/Čeština z językiem 'cs'.
        DailyDescription: Show daily pages.
        DanishDescription: Duński/Dansk z językiem 'da'.
        DisqusDescription: Pokaż komentarze Disqus na blogu.
        DraftDescription: Obsługa wersji roboczych stron.
        DraftPageError: Proszę się zalogować.
        DutchDescription: Holenderski/Nederlands z językiem 'nl'.
        EditDescription: Edytuj swoją witrynę w przeglądarce internetowej.
        EditLoginTitle: Witaj
        EditLoginEmail: Email:
        EditLoginPassword: Hasło:
        EditLoginForgot: Zapomniane hasło?
        EditLoginSignup: Brak konta użytkownika?
        EditLoginButton: Zaloguj się
        EditSignupTitle: Tworzenie konta użytkownika
        EditSignupName: Nazwa:
        EditSignupEmail: Email:
        EditSignupPassword: Hasło:
        EditSignupConsent: Wyrażam zgodę na przechowywanie moich danych osobowych na tej stronie.
        EditSignupButton: Utwórz
        EditSignupStatusNone: Tutaj możesz stworzyć nowe konto użytkownika.
        EditSignupStatusIncomplete: Proszę wypełnić wszystkie pola.
        EditSignupStatusInvalid: Proszę podać poprawny adres email.
        EditSignupStatusWeak: Proszę podać inne hasło.
        EditSignupStatusShort: Proszę podać dłuższe hasło.
        EditSignupStatusNext: Konto użytkownika zostanie utworzone, proszę sprawdzić pocztę.
        EditForgotTitle: Zapomniane hasło
        EditForgotEmail: Email:
        EditForgotStatusNone: Nie ma problemu, możesz utworzyć nowe hasło.
        EditForgotStatusInvalid: Proszę podać poprawny adres email.
        EditForgotStatusNext: Konto użytkownika zostanie przywrócone, proszę sprawdzić pocztę.
        EditRecoverTitle: Zapomniane hasło
        EditRecoverPassword: Hasło:
        EditRecoverStatusPassword: Prosze podać nowe hasło.
        EditRecoverStatusWeak: Proszę podać inne hasło.
        EditRecoverStatusShort: Proszę podać dłuższe hasło.
        EditRecoverStatusDone: Konto użytkownika zostało przywrócone. Dziękujemy!
        EditConfirmSubject: Potwierdzenie założenia konta użytkownika
        EditConfirmMessage: Hej @usershort!\n\nPotwierdź założenie konta klikając w poniższy link.
        EditConfirmTitle: Konto użytkownika
        EditConfirmStatusDone: Założenie konta zostało potwierdzone i czeka na aktywację. Dziękujemy!
        EditApproveSubject: Zatwierdzenie konta użytkownika
        EditApproveMessage: Hej @usershort!\n\nProsimy zatwierdzić konto użytkownika @useraccount. Kliknij w poniższy link.
        EditApproveTitle: Konto użytkownika
        EditApproveStatusDone: Konto użytkownika zostało zatwierdzone. Dziękujemy!
        EditReactivateSubject: Ponownie aktywuj konto użytkownika
        EditReactivateMessage: Hej @usershort,\n\nproszę ponownie aktywować swoje konto użytkownika. Zarejestrowaliśmy zbyt wiele nieudanych prób logowania. Kliknij w poniższy link.
        EditReactivateTitle: Ponowna aktywacja konta użytkownika
        EditReactivateStatusDone: Konto użytkownika zostało ponownie aktywowane. Dziękujemy!
        EditVerifySubject: Zmiana konta użytkownika
        EditVerifyMessage: Hej @usershort!\n\nProsimy o potwierdzenie nowego maila dla Twojego konta. Kliknij w poniższy link.
        EditVerifyTitle: Konto użytkownika
        EditVerifyStatusDone: Konto użytkownika zostało zmienione. Dziękujemy!
        EditChangeSubject: Zmiana konta użytkownika
        EditChangeMessage: Hej @usershort!\n\nProsimy o potwierdzenie, że chcesz dokonać zmian w Twoim koncie. Kliknij w poniższy link.
        EditChangeTitle: Konto użytkownika
        EditChangeStatusDone: Konto użytkownika zostało zmienione. Dziękujemy!
        EditRemoveSubject: Usuwanie konta użytkownika
        EditRemoveMessage: Hej @usershort,\n\npotwierdź, że chcesz usunąć swoje konto użytkownika. Kliknij w poniższy link.
        EditRemoveTitle: Usuwanie konta użytkownika
        EditRemoveStatusDone: Konto użytkownika zostało usunięte. Dziękujemy!
        EditRecoverSubject: Odzyskiwanie konta użytkownika
        EditRecoverMessage: Hej @usershort!\n\nProsimy o potwierdzenie, że zapomniałeś/aś hasła. Kliknij w poniższy link.
        EditWelcomeSubject: Powitanie
        EditWelcomeMessage: Hej @usershort!\n\nTwoje konto użytkownika zostało utworzone. Miłej edycji strony.
        EditGoodbyeSubject: Do widzenia
        EditGoodbyeMessage: Hej @usershort,\n\nTwoje konto użytkownika zostało usunięte. Trzymaj się.
        EditAccountTitle: Użytkownik
        EditAccountInformation: W każdej chwili możesz usunąć swoje konto użytkownika.
        EditAccountMore: Dowiedz się więcej…
        EditAccountStatusNone: Tutaj możesz zmienić ustawienia swojego konta.
        EditAccountStatusInvalid: Podaj poprawny adres email.
        EditAccountStatusTaken: Podaj inny email.
        EditAccountStatusWeak: Podaj inne hasło.
        EditAccountStatusShort: Podaj dłuższe hasło.
        EditAccountStatusNext: Konto użytkownika zostanie zmienione, proszę sprawdzić pocztę.
        EditQuitTitle: Usuń konto użytkownika
        EditQuitStatusNone: Wpisz nazwę konta, aby potwierdzić.
        EditQuitStatusMismatch: Wpisz inną nazwę.
        EditQuitStatusNext: Konto użytkownika zostanie usunięte, proszę sprawdzić pocztę.
        EditConfigureTitle: Strona
        EditConfigureSitename: Nazwa strony internetowej:
        EditConfigureAuthor: Nazwa webmastera:
        EditConfigureEmail: Email webmastera:
        EditConfigureInformation: Webmaster może zatwierdzać nowe konta użytkowników.
        EditConfigureStatusNone: Tutaj możesz skonfigurować swoją witrynę.
        EditConfigureStatusInvalid: Podaj poprawny adres email.
        EditUpdateTitle: Aktualizacje
        EditUpdateStatusNone: Datenstrom Yellow jest dla tych, którzy tworzą małe strony internetowe.
        EditUpdateStatusCheck: Sprawdzanie aktualizacji…
        EditUpdateStatusUpdates: Dostępne są następujące aktualizacje:
        EditUpdateStatusOk: Twoja strona jest aktualna.
        EditOkButton: Ok
        EditCancelButton: Anuluj
        EditChangeButton: Zmień
        EditCreateButton: Utwórz
        EditEditButton: Zapisz
        EditDeleteButton: Usuń
        EditUpdateButton: Aktualizacja
        EditEdit: Edytuj stronę
        EditCreate: +
        EditDelete: -
        EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧
        EditToolbarFormat: Formatowanie
        EditToolbarHeading: Nagłówek
        EditToolbarH1: Nagłówek 1
        EditToolbarH2: Nagłówek 2
        EditToolbarH3: Nagłówek 3
        EditToolbarParagraph: Normalny tekst
        EditToolbarPre: Kod źródłowy
        EditToolbarNotice: Ostrzeżenie
        EditToolbarQuote: Cytat
        EditToolbarBold: Pogrubienie
        EditToolbarItalic: Kursywa
        EditToolbarStrikethrough: Przekreślenie
        EditToolbarCode: Kod
        EditToolbarList: Lista
        EditToolbarUl: • Lista punktowana
        EditToolbarOl: 1. Lista numerowana
        EditToolbarTl: ✓ Lista zadań
        EditToolbarLink: Link
        EditToolbarFile: Plik
        EditToolbarEmojiawesome: Emoji
        EditToolbarFontawesome: Ikona
        EditToolbarStatus: Status
        EditToolbarUndo: Cofnij
        EditToolbarRedo: Ponów
        EditToolbarPreview: Podgląd
        EditToolbarHelp: Pomoc
        EditMailFooter: @sitename
        EditDataGenerated: Ta strona jest generowana automatycznie.
        EditUploadProgress: Przesyłanie pliku…
        EditUserDescription: Editor
        EditMenuSettings: Ustawienia
        EditMenuHelp: Pomoc
        EditMenuLogout: Wyloguj
        EditYellowUrl: https://datenstrom.se/yellow/
        EditYellowHelpUrl: https://datenstrom.se/yellow/help/
        EmojiawesomeDescription: Całe mnóstwo emoji.
        EnglishDescription: Angielski/English z językiem 'en'.
        FeedDescription: RSS z ostatnimi zmianami.
        FontawesomeDescription: Ikony i symbole.
        FrenchDescription: Francuski/Français z językiem 'fr'.
        GalleryDescription: Galeria zdjęć z wyskakującym okienkiem.
        GermanDescription: Niemiecki/Deutsch z językiem 'de'.
        GooglecalendarDescription: Osadzanie Kalendarza Google.
        GooglemapDescription: Osadzanie Map Google.
        HelloworldDescription: Przykładowa funkcja dla Datenstrom Yellow.
        HelpDescription: Pomoc dla Twojej strony.
        HighlightDescription: Podświetl kod źródłowy.
        HungarianDescription: Węgierski/Magyar z językiem 'hu'.
        ImageDescription: Obrazy i miniatury.
        ImageDefaultAlt: Obraz bez opisu
        IncludeDescription: Includes page content from other pages.
        InstagramDescription: Osadzanie zdjęć z Instagrama.
        InstallTitle: Witaj
        InstallLanguage: Jaki jest twój język?
        InstallExtension: Co chcesz stworzyć?
        InstallExtensionWebsite: Mała strona internetowa
        InstallExtensionBlog: Mały blog
        InstallExtensionWiki: Mała wiki
        InstallButton: Zainstaluj
        InstallHomeTitle: Strona główna
        InstallHomeText: [image photo.jpg Przykład rounded]\n\n[edit - Możesz edytować tę stronę w przeglądarce internetowej] lub skorzystać z edytora tekstu. [Uzyskać pomoc](https://datenstrom.se/yellow/help/).
        InstallAboutTitle: O
        InstallAboutText: [Wykonane w Datenstrom Yellow](https://datenstrom.se/yellow/).
        InstallDefaultTitle: Strona
        InstallDefaultText: To jest nowa strona.
        InstallBlogTitle: Strona bloga
        InstallBlogText: To jest nowa strona bloga.
        InstallWikiTitle: Strona wiki
        InstallWikiText: To jest nowa strona wiki.
        InstallExampleImage: To jest przykładowe zdjęcie
        ItalianDescription: Włoski/Italiano z językiem 'it'.
        JapaneseDescription: Japoński/日本語 z językiem 'ja'.
        MarkdownDescription: Formatowanie tekstu dla ludzi.
        MetaDescription: Metadane dla ludzi i maszyn.
        NorwegianDescription: Norweski/Norsk z językiem 'nb'.
        PagesourceDescription: Display Markdown source on pages.
        ParisDescription: Paris to elegancki motyw.
        ParsedownDescription: Formatowanie tekstu dla ludzi.
        PodcastDescription: Web feed optimized for podcast publishing.
        PolishDescription: Polski/Polski z językiem 'pl'.
        PortugueseDescription: Portugalski/Português z językiem 'pt'.
        PreviousnextDescription: Pokaż linki do poprzedniej/następnej strony.
        PreviousnextNavigation: Page
        PreviousnextPagePrevious: ← Poprzednie: @title
        PreviousnextPageNext: Następne: @title →
        PrivateDescription: Support for password-protected pages.
        PrivatePageError: Please enter the password.
        ProfileDescription: Author profile for blog pages.
        PublishDescription: Twórz i publikuj rozszerzenia.
        RadiobossDescription: Widgets for RadioBoss Cloud.
        RandomDescription: Display random pages.
        ReadingtimeDescription: Show estimated reading time for page content.
        RedirectDescription: Alternative page redirection.
        RussianDescription: Rosyjski/Русский z językiem 'ru'.
        SearchDescription: Wyszukiwanie pełnotekstowe.
        SearchResultsNone: Wpisz szukaną frazę.
        SearchResultsEmpty: Nie znaleziono wyników.
        SearchSpecialChanges: Ostatnie zmiany
        SearchButton: Szukaj
        ServeDescription: Wbudowany serwer WWW.
        SitemapDescription: Mapa witryny ze wszystkimi stronami.
        SliderDescription: Galeria zdjęć z suwakiem.
        SlovakDescription: Słowacki/Slovenčina z językiem 'sk'.
        SoundcloudDescription: Osadzanie ścieżek dźwiękowych z Soundcloud'a.
        SpanishDescription: Hiszpański/Español z językiem 'es'.
        SpoilerDescription: Hide certain page elements.
        StockholmDescription: Stockholm to czysty (podstawowy) motyw.
        SwedishDescription: Szwedzki/Svenska z językiem 'sv'.
        TickerDescription: RSS feed parser.
        TocDescription: Spis treści.
        TrafficDescription: Twórz analizy ruchu z plików dziennika.
        TurkishDescription: Turkish/Türkçe with language 'tr'.
        TwitterDescription: Osadzanie wiadomości z Twittera.
        UpdateDescription: Aktualizuj swoją witrynę.
        UpdateExtensionDefaultDescription: No description available.
        UpdateExtensionDeveloper: Developed by @x.
        UpdateExtensionDesigner: Designed by @x.
        UpdateExtensionTranslator: Translated by @x.
        WikiDescription: Wiki dla Twojej strony.
        WikiModified: Ostatnia aktualizacja
        WikiTag: Tagi:
        WikiSpecialPages: Wszystkie strony
        WikiSpecialChanges: Ostatnie zmiany
        WittstockDescription: Wittstock is a classless theme.
        YoutubeDescription: Osadzanie filmów z YouTube.
END;
    }
}
