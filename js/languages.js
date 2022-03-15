/* Language changer */

$(document).ready(function(){

    console.log("Načitávanie scriptu jazykov...");

    let lang = ["sk", "en", "ru"];

    $("select#language").change(function(){
        var selectedLanguage = $(this).children("option:selected").val();
        localStorage.setItem("storageLang", Number(selectedLanguage));

        switch(Number(localStorage.getItem("storageLang"))){
            case 1:
                translateSK();
                break;
            case 2:
                translateEN();
                break;
            case 3:
                translateRU();
                break;
        }
    });

    switch(Number(localStorage.getItem("storageLang"))){
        case 1:
            translateSK();
            break;
        case 2:
            translateEN();
            break;
        case 3:
            translateRU();
            break;
    }

    function translateSK(){
        console.log("Prekladanie do Slovenčiny...");

        //Navbar
        $(".langTimeline").text("Časová os");
        $(".langProject").text("Projekt");
        $(".langAccount").text("Účet");
        $(".langLogin").text("Prihlásenie");
        $(".langRegister").text("Registrácia");
        $(".langLogout").text("Odhlásiť sa");
        $(".langProfile").text("Profil");
        $(".langLanguage").text("Jazyk");
        $(".langThemeDark").text("Téma Dark");
        $(".langThemeLight").text("Téma Light");
        $(".langSearch").text("Hľadať");
        $("#search").attr("placeholder", "Zadajte hľadaný výraz");

        //Casova os
        $(".langNewPost").text("Vytvoriť príspevok");
        $("#newPost-textarea").attr("placeholder", "Čo je nové?");
        $(".langAddPost").text("Pridať");
        $(".langSavePost").text("Uložiť");

        //Aside
        $(".aside-panel-title").text("Informácie");
        $(".langSavedPosts").text("Uložené");
        $("#chooseLanguageTitle").text("Vyberte jazyk:");

        console.log("Preložené... ");
    }

    function translateEN(){
        console.log("Translating to English...");

        //Navbar
        $(".langTimeline").text("Timeline");
        $(".langProject").text("Project");
        $(".langAccount").text("Account");
        $(".langLogin").text("Login");
        $(".langRegister").text("Register");
        $(".langLogout").text("Logout");
        $(".langProfile").text("Profile");
        $(".langLanguage").text("Language");
        $(".langThemeDark").text("Dark Theme");
        $(".langThemeLight").text("Dark Light");
        $(".langSearch").text("Search");
        $("#search").attr("placeholder", "Type your answer here");

        //Timeline
        $(".langNewPost").text("Create post");
        $("#newPost-textarea").attr("placeholder", "What's new?");
        $(".langAddPost").text("Send");
        $(".langSavePost").text("Save");

        //Aside
        $(".aside-panel-title").text("Information");
        $(".langSavedPosts").text("Saved");
        $("#chooseLanguageTitle").text("Choose language:");

        //Podstranka - Projekt
        $(".langProjektTitle").text("Project");

        console.log("Translated... ");
    }

    function translateRU(){
        console.log("Перевод на россию...");

        //Navbar
        $(".langTimeline").text("Лента новостей");
        $(".langProject").text("Проект");
        $(".langAccount").text("Аккаунт");
        $(".langLogin").text("Войти");
        $(".langRegister").text("Регистрация");
        $(".langLogout").text("Выйти");
        $(".langProfile").text("Профиль");
        $(".langLanguage").text("Язык");
        $(".langThemeDark").text("Темная тема");
        $(".langThemeLight").text("Светлая тема");
        $(".langSearch").text("Поиск");
        $("#search").attr("placeholder", "Введите ответ здесь");

        //Timeline
        $(".langNewPost").text("Создать сообщение");
        $("#newPost-textarea").attr("placeholder", "Какие новости?");
        $(".langAddPost").text("Добавить");
        $(".langSavePost").text("Сохранять");

        //Aside
        $(".aside-panel-title").text("Информация");
        $(".langSavedPosts").text("Сохранено");
        $("#chooseLanguageTitle").text("Язык:");

        console.log("Переведено... ");
    }
    
});

