<?php
// Russian extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/russian

class YellowRussian {
    const VERSION = "0.8.43";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: ru",
            "LanguageLocale: ru_RU",
            "LanguageDescription: Русский",
            "LanguageTranslator: Сергей Ворон",
            "AudioDescription: Аудиоплеер HTML5.",
            "BerlinDescription: Берлин - это тема, вдохновленная Dieter Rams.",
            "BlogDescription: Блог для вашего сайта.",
            "BlogBy: Автор",
            "BlogTag: Тэги:",
            "BlogMore: Читать далее…",
            "BreadcrumbDescription: Навигация по навигационным цепочкам.",
            "BreadcrumbNavigation: Навигационная цепочка",
            "BundleDescription: Объединение файлов сайта.",
            "CatalanDescription: Каталонский язык.",
            "ChineseDescription: Китайский язык.",
            "CodefileDescription: Скачать блоки кода в виде текстового файла.",
            "ContactDescription: Страница контактов.",
            "ContactName: Имя:",
            "ContactEmail: Email:",
            "ContactMessage: Сообщение:",
            "ContactConsent: Я согласен с тем, что мое сообщение будет храниться на этом веб-сайте.",
            "ContactButton: Отправить мое сообщение",
            "ContactMailSpam: [Спам]",
            "ContactMailHeader: Вы получили сообщение от @sender:",
            "ContactMailFooter: Это письмо было отправлено через @sitename - @title",
            "ContactStatusNone: Скажи привет. Мы очень рады вашим отзывам.",
            "ContactStatusIncomplete: Пожалуйста, заполните все поля.",
            "ContactStatusInvalid: Пожалуйста, укажите правильный Email.",
            "ContactStatusReview: Пожалуйста, удалите ссылки из сообщения.",
            "ContactStatusDone: Ваше письмо отправлено. Спасибо!",
            "ContactStatusError: Письмо не может быть отправлено, попробуйте еще раз позже!",
            "CopenhagenDescription: Копенгаген - красивая тема.",
            "CoreDescription: Основные функции сайта.",
            "CoreNavigation: Главная",
            "CorePagination: Страница",
            "CorePaginationPrevious: ← Назад",
            "CorePaginationNext: Далее →",
            "CoreTimeFormatShort: H:i",
            "CoreTimeFormatMedium: H:i:s",
            "CoreTimeFormatLong: H:i:s T",
            "CoreDateFormatShort: F Y",
            "CoreDateFormatMedium: d.m.Y",
            "CoreDateFormatLong: d.m.Y H:i",
            "CoreDatePast: сегодня, вчера, @x дней назад, 1 месяц назад, @x месяцев назад, 1 год назад, @x лет назад, на @x",
            "CoreDateFuture: скоро, завтра, через @x дней, через 1 месяц, через @x месяцев, через 1 год, через @x лет, на @x",
            "CoreDateMonthsNominative: январь, февраль, март, апрель, май, июнь, июль, август, сентябрь, октябрь, ноябрь, декабрь",
            "CoreDateMonthsGenitive: январь, февраль, март, апрель, май, июнь, июль, август, сентябрь, октябрь, ноябрь, декабрь",
            "CoreDateWeekdays: понедельник, вторник, среда, четверг, пятница, суббота, воскресенье",
            "CoreDateWeekstart: понедельник",
            "CoreDecimalSeparator: ,",
            "CoreError404Title: Файл не найден",
            "CoreError404Text: Запрашиваемый файл не найден. О нет...",
            "CoreError420Title: Страница не доступна",
            "CoreError420Text: Запрошенная страница не является общедоступной. [yellow error]",
            "CoreError430Title: Ошибка входа",
            "CoreError430Text: Неверный email или пароль. [Пожалуйста, попробуйте еще раз](#data-action-login).",
            "CoreError434Title: Страница не найдена",
            "CoreError434Text: Запрошенная страница не найдена. [Вы можете создать эту страницу](#data-action-edit).",
            "CoreError435Title: Страница не найдена",
            "CoreError435Text: Запрошенная страница удалена. [Вы можете восстановить эту страницу](#data-action-restore).",
            "CoreError450Title: Ошибка обновления",
            "CoreError450Text: Не удается подключиться к серверу обновлений. Требуется подключение к Интернету.",
            "CoreError500Title: Ошибка сервера",
            "CoreError500Text: Что-то пошло не так. [yellow error]",
            "CsvDescription: Парсер файлов CSV.",
            "CzechDescription: Чешский язык.",
            "DailyDescription: Показывать ежедневные страницы.",
            "DanishDescription: Датский язык.",
            "DisqusDescription: Показывать комментарии Disqus в блоге.",
            "DraftDescription: Поддержка черновиков страниц.",
            "DraftPageError: Пожалуйста, войдите.",
            "DutchDescription: Голландский язык.",
            "EditDescription: Редактируйте свой сайт в веб-браузере.",
            "EditLoginTitle: Добро пожаловать",
            "EditLoginEmail: Email:",
            "EditLoginPassword: Пароль:",
            "EditLoginForgot: Забыли пароль?",
            "EditLoginSignup: Создать учетную запись?",
            "EditLoginButton: Войти",
            "EditSignupTitle: Создать учетную запись",
            "EditSignupName: Имя:",
            "EditSignupEmail: Email:",
            "EditSignupPassword: Пароль:",
            "EditSignupConsent: Я согласен с тем, что мои личные данные будут храниться на этом веб-сайте.",
            "EditSignupButton: Создать",
            "EditSignupStatusNone: Здесь вы можете создать новую учетную запись.",
            "EditSignupStatusIncomplete: Пожалуйста, заполните все поля.",
            "EditSignupStatusInvalid: Пожалуйста, введите действительный адрес Email.",
            "EditSignupStatusWeak: Пожалуйста, введите другой пароль.",
            "EditSignupStatusShort: Пожалуйста, введите более длинный пароль.",
            "EditSignupStatusNext: Учетная запись создана, пожалуйста, проверьте ваш Email.",
            "EditForgotTitle: Забыли пароль",
            "EditForgotEmail: Email:",
            "EditForgotStatusNone: Нет проблем, вы можете создать новый пароль.",
            "EditForgotStatusInvalid: Пожалуйста, введите действительный адрес Email.",
            "EditForgotStatusNext: Учетная запись восстановлена, пожалуйста, проверьте ваш Email.",
            "EditRecoverTitle: Забыли пароль",
            "EditRecoverPassword: Пароль:",
            "EditRecoverStatusPassword: Пожалуйста, введите новый пароль.",
            "EditRecoverStatusWeak: Пожалуйста, введите другой пароль.",
            "EditRecoverStatusShort: Пожалуйста, введите более длинный пароль.",
            "EditRecoverStatusDone: Учетная запись восстановлена. Спасибо!",
            "EditConfirmSubject: Подтверждение учетной записи",
            "EditConfirmMessage: Привет @usershort,\\n\\nпожалуйста, подтвердите свою учетную запись. Нажмите на следующую ссылку.",
            "EditConfirmTitle: Учетная запись пользователя",
            "EditConfirmStatusDone: Учетная запись подтверждена и ждет одобрения. Спасибо!",
            "EditApproveSubject: Подтвердите учетную запись",
            "EditApproveMessage: Привет @usershort,\\n\\nпожалуйста, подтвердите новую учетную запись для @useraccount. Нажмите на следующую ссылку.",
            "EditApproveTitle: Учетная запись пользователя",
            "EditApproveStatusDone: Учетная запись подтверждена. Спасибо!",
            "EditReactivateSubject: Повторная активация учетной записи",
            "EditReactivateMessage: Привет @usershort,\\n\\nпожалуйста, повторно активируйте свою учетную запись. Было слишком много неудачных попыток входа в систему. Нажмите на следующую ссылку.",
            "EditReactivateTitle: Учетная запись пользователя",
            "EditReactivateStatusDone: Аккаунт пользователя активирован. Спасибо!",
            "EditVerifySubject: Изменение учетной записи",
            "EditVerifyMessage: Привет @usershort,\\n\\nпожалуйста, подтвердите новый email для своей учетной записи. Нажмите на следующую ссылку.",
            "EditVerifyTitle: Учетная запись пользователя",
            "EditVerifyStatusDone: Учетная запись изменена. Спасибо!",
            "EditChangeSubject: Изменение учетной записи",
            "EditChangeMessage: Привет @usershort,\\n\\nподтвердите, что хотите изменить свою учетную запись. Нажмите на следующую ссылку.",
            "EditChangeTitle: Учетная запись пользователя",
            "EditChangeStatusDone: Учетная запись изменена. Спасибо!",
            "EditRemoveSubject: Удалить учетную запись",
            "EditRemoveMessage: Привет @usershort,\\n\\nподтвердите, что хотите удалить свою учетную запись. Нажмите на следующую ссылку.",
            "EditRemoveTitle: Учетная запись пользователя",
            "EditRemoveStatusDone: Учетная запись удалена. Спасибо!",
            "EditRecoverSubject: Восстановление учетной записи",
            "EditRecoverMessage: Привет @usershort,\\n\\nподтвердите, что вы забыли свой пароль. Нажмите на следующую ссылку.",
            "EditWelcomeSubject: Добро пожаловать",
            "EditWelcomeMessage: Привет @usershort,\\n\\nваша учетная запись создана. Получайте удовольствие редактируя сайт.",
            "EditGoodbyeSubject: До свидания",
            "EditGoodbyeMessage: Привет @usershort,\\n\\nваша учетная запись была удалена. Берегите себя.",
            "EditAccountTitle: Пользователь",
            "EditAccountInformation: Вы можете удалить свою учетную запись в любое время.",
            "EditAccountMore: Читать далее…",
            "EditAccountStatusNone: Здесь вы можете изменить свою учетную запись.",
            "EditAccountStatusInvalid: Пожалуйста, введите действительный адрес Email.",
            "EditAccountStatusTaken: Пожалуйста, введите другой адрес электронной почты.",
            "EditAccountStatusWeak: Пожалуйста, введите другой пароль.",
            "EditAccountStatusShort: Пожалуйста, введите более длинный пароль.",
            "EditAccountStatusNext: Учетная запись пользователя будет изменена, проверьте электронную почту.",
            "EditQuitTitle: Удалить учетную запись пользователя",
            "EditQuitStatusNone: Введите свое имя для подтверждения.",
            "EditQuitStatusMismatch: Введите другое имя.",
            "EditQuitStatusNext: Учетная запись пользователя будет удалена, проверьте электронную почту.",
            "EditConfigureTitle: Веб-сайт",
            "EditConfigureSitename: Имя сайта:",
            "EditConfigureAuthor: Имя автора:",
            "EditConfigureEmail: Email автора:",
            "EditConfigureInformation: Автор является может утверждать новые учетные записи пользователей.",
            "EditConfigureStatusNone: Здесь вы можете настроить свой сайт.",
            "EditConfigureStatusInvalid: Пожалуйста, введите действительный email.",
            "EditUpdateTitle: Обновления",
            "EditUpdateStatusNone: Datenstrom Yellow для людей, которые создают небольшие веб-сайты.",
            "EditUpdateStatusCheck: Проверка обновлений…",
            "EditUpdateStatusUpdates: Доступны следующие обновления:",
            "EditUpdateStatusOk: Ваш сайт обновлен.",
            "EditOkButton: Ok",
            "EditCancelButton: Отмена",
            "EditChangeButton: Изменить",
            "EditCreateButton: Создать",
            "EditEditButton: Сохранить",
            "EditDeleteButton: Удалить",
            "EditUpdateButton: Обновить",
            "EditEdit: Редактировать",
            "EditCreate: +",
            "EditDelete: -",
            "EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧",
            "EditToolbarFormat: Формат",
            "EditToolbarHeading: Заголовок",
            "EditToolbarH1: Заголовок 1",
            "EditToolbarH2: Заголовок 2",
            "EditToolbarH3: Заголовок 3",
            "EditToolbarParagraph: Обычный текст",
            "EditToolbarPre: Исходный код",
            "EditToolbarNotice: Уведомление",
            "EditToolbarQuote: Цитата",
            "EditToolbarBold: Жирный",
            "EditToolbarItalic: Курсивный",
            "EditToolbarStrikethrough: Зачеркнутый",
            "EditToolbarCode: Код",
            "EditToolbarList: Список",
            "EditToolbarUl: • Неупорядоченный список",
            "EditToolbarOl: 1. Упорядоченный список",
            "EditToolbarTl: ✓ Список заданий",
            "EditToolbarLink: Ссылка",
            "EditToolbarFile: Файл",
            "EditToolbarEmoji: Эмо́дзи",
            "EditToolbarIcon: Иконка",
            "EditToolbarStatus: Статус",
            "EditToolbarUndo: Отменить",
            "EditToolbarRedo: Повторить",
            "EditToolbarPreview: Просмотр",
            "EditToolbarHelp: Помощь",
            "EditMailFooter: @sitename",
            "EditDataGenerated: Эта страница генерируется автоматически.",
            "EditUploadProgress: Загрузка файла...",
            "EditUserDescription: Редактор",
            "EditMenuSettings: Настройки",
            "EditMenuHelp: Помощь",
            "EditMenuLogout: Выход",
            "EditYellowUrl: https://datenstrom.se/yellow/",
            "EditYellowHelpUrl: https://datenstrom.se/yellow/help/",
            "EmojiDescription: Множество эмо́дзи.",
            "EnglishDescription: Английский язык.",
            "FeedDescription: Лента с последними изменениями.",
            "FrenchDescription: Французский язык.",
            "GalleryDescription: Галерея изображений с всплывающим окном.",
            "GermanDescription: Немецкий язык.",
            "GooglecalendarDescription: Вставить календарь Google.",
            "GooglemapDescription: Вставить карту Google.",
            "HelloworldDescription: Сделать анимированный текст.",
            "HelpDescription: Помощь для вашего сайта.",
            "HighlightDescription: Подсветка исходного кода.",
            "HungarianDescription: Венгерский язык.",
            "IconDescription: Иконки и символы.",
            "ImageDescription: Изображения и миниатюры.",
            "ImageDefaultAlt: Изображение без описания",
            "InstagramDescription: Вставить фото из Instagram.",
            "InstallTitle: Здравствуйте",
            "InstallLanguage: Какой ваш язык?",
            "InstallExtension: Что вы хотите сделать?",
            "InstallExtensionWebsite: Небольшой веб-сайт",
            "InstallExtensionBlog: Небольшой блог",
            "InstallExtensionWiki: Небольшую wiki",
            "InstallButton: Установить",
            "InstallHomeTitle: Главная",
            "InstallHomeText: [image photo.jpg Пример rounded]\\n\\n[редактировать - Вы можете редактировать эту страницу в веб-браузере] или использовать текстовый редактор. [Получить помощь](https://datenstrom.se/yellow/help/).",
            "InstallAboutTitle: Информация",
            "InstallAboutText: [Сделано в Datenstrom Yellow](https://datenstrom.se/yellow/).",
            "InstallDefaultTitle: Страница",
            "InstallDefaultText: Это новая страница.",
            "InstallBlogTitle: Страница блога",
            "InstallBlogText: Это новая страница блога.",
            "InstallWikiTitle: Wiki страница",
            "InstallWikiText: Это новая wiki страница.",
            "InstallExampleImage: Это пример изображения",
            "ItalianDescription: Итальянский язык.",
            "JapaneseDescription: Японский язык.",
            "MarkdownDescription: Форматирование текста для людей.",
            "MetaDescription: Мета-данные для людей и машин.",
            "NorwegianDescription: Норвежский язык.",
            "ParisDescription: Париж - элегантная тема.",
            "ParsedownDescription: Форматирование текста для людей.",
            "PodcastDescription: Веб лента, оптимизированная для публикации подкастов.",
            "PolishDescription: Польский язык.",
            "PortugueseDescription: Португальский язык.",
            "PreviousnextDescription: Показать ссылки на предыдущую/следующую страницу.",
            "PreviousnextNavigation: Страница",
            "PreviousnextPagePrevious: ← Назад: @title",
            "PreviousnextPageNext: Далее: @title →",
            "PrivateDescription: Поддержка защищенных паролем страниц.",
            "PrivatePageError: Пожалуйста, введите пароль.",
            "ProfileDescription: Профиль автора для страниц блога.",
            "PublishDescription: Создавайте и публикуйте расширения.",
            "RadiobossDescription: Виджеты для RadioBoss Cloud.",
            "RandomDescription: Показывать случайные страницы.",
            "ReadingtimeDescription: Показать предполагаемое время чтения контента на странице.",
            "RedirectDescription: Альтернативное перенаправление страницы.",
            "RussianDescription: Русский язык.",
            "SearchDescription: Полнотекстовый поиск.",
            "SearchResultsNone: Введите слово для поиска.",
            "SearchResultsEmpty: Ничего не найдено.",
            "SearchSpecialChanges: Последние изменения",
            "SearchButton: Искать",
            "ServeDescription: Встроенный веб-сервер.",
            "SitemapDescription: Карта сайта со всеми страницами.",
            "SliderDescription: Галерея изображений со слайдером.",
            "SlovakDescription: Словацкий язык.",
            "SoundcloudDescription: Вставить аудио Soundcloud.",
            "SpanishDescription: Испанский язык.",
            "SpoilerDescription: Скрыть определенные элементы страницы.",
            "StaticDescription: Создайте статический веб-сайт.",
            "StockholmDescription: Стокгольм - чистая тема.",
            "SwedishDescription: Шведский язык.",
            "TocDescription: Оглавление.",
            "TrafficDescription: Создать аналитику трафика из лог-файлов.",
            "TurkishDescription: Турецкий язык.",
            "TwitterDescription: Вставить сообщения Twitter.",
            "UpdateDescription: Держите свой сайт в актуальном состоянии.",
            "UpdateExtensionDefaultDescription: Описание недоступно.",
            "UpdateExtensionDeveloper: Разработчик @x.",
            "UpdateExtensionDesigner: Дизайн @x.",
            "UpdateExtensionTranslator: Перевод @x.",
            "WikiDescription: Wiki для вашего сайта.",
            "WikiModified: Последнее обновление",
            "WikiTag: Тэги:",
            "WikiSpecialPages: Все страницы",
            "WikiSpecialChanges: Последние изменения",
            "WittstockDescription: Wittstock - бесклассовая тема.",
            "YoutubeDescription: Вставить видео с Youtube."));
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "ru"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="ru") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
}
