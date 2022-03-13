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
        $(".langProfile").text("Profil");
        $(".langLanguage").text("Jazyk");
        $(".langTheme").text("Téma");
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
        $(".langProfile").text("Profile");
        $(".langLanguage").text("Language");
        $(".langTheme").text("Theme");
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
        $(".langProfile").text("Профиль");
        $(".langLanguage").text("Язык");
        $(".langTheme").text("Тема");
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

        console.log("Переведено... ");
    }
    
});

