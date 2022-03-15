//Dark theme / Light theme

$(document).ready(function(){

    console.log("Theme script...");

    $("#switch1").click(function(){
        let selectedTheme = "dark";
        localStorage.setItem("storageTheme", selectedTheme);
        changeThemeDark();
    });

    $("#switch2").click(function(){
        let selectedTheme = "light";
        localStorage.setItem("storageTheme", selectedTheme);
        changeThemeLight();
    });

    if(localStorage.getItem("storageTheme") == "dark"){
        changeThemeDark();
    }else{
        changeThemeLight();
    }

    function changeThemeDark(){
        
        let colorNav = "#343a40";
        let colorPost = "#212529";
        let colorText = "white";
        var post = $("div[id='post']");

        //Index
        $("body").css("background-color", "#495057");
        $(".navbar").css("background-color", colorNav);
        $(".dropdown-menu").css("background-color", colorNav);
        $(".newPost").css("background-color", colorPost);
        $("#newPost-textarea[placeholder]").css("color", colorText);
        $(post).css("background-color", colorPost);
        $("#aside-panel").css("background-color", colorPost);
        $("p,a,h1,h2,label").css("color", colorText);

        //Profil
        $("body").css("background-color", "#495057");
        $(".navbar").css("background-color", colorNav);
        $(".dropdown-menu").css("background-color", colorNav);
        $("#mainProfil").css("background-color", colorPost);
        $(post).css("background-color", colorPost);
        $("p,a,h1,h2,label").css("color", colorText);

        //Projekt
        $("body").css("background-color", "#495057");
        $(".navbar").css("background-color", colorNav);
        $(".dropdown-menu").css("background-color", colorNav);
        $("#mainProjekt").css("background-color", colorPost);
        $("p,a,h1,h2,label").css("color", colorText);

        console.log("Tema sa zmenila");
    }

    function changeThemeLight(){

        let colorNav = "#f8f9fa";
        let colorPost = "#e9ecef";
        let colorText = "black";
        var post = $("div[id='post']");

        //Index 
        $("body").css("background-color", "white");
        $(".navbar").css("background-color", colorNav);
        $(".dropdown-menu").css("background-color", colorNav);
        $(".newPost").css("background-color", colorPost);
        $("#newPost-textarea[placeholder]").css("color", colorText);
        $(post).css("background-color", colorPost);
        $("#aside-panel").css("background-color", colorPost);
        $("p,a,h1,h2,label").css("color", colorText);
        $(".conclusion-title").css("color", "white");

        //Profil
        $("body").css("background-color", "white");
        $(".navbar").css("background-color", colorNav);
        $(".dropdown-menu").css("background-color", colorNav);
        $("#mainProfil").css("background-color", colorPost);
        $(post).css("background-color", colorPost);
        $("p,a,h1,h2,label").css("color", colorText);
        $(".conclusion-title").css("color", "white");

        //Projekt
        $("body").css("background-color", "white");
        $(".navbar").css("background-color", colorNav);
        $(".dropdown-menu").css("background-color", colorNav);
        $("#mainProjekt").css("background-color", colorPost);
        $("p,a,h1,h2,label").css("color", colorText);
        $(".conclusion-title").css("color", "white");

        console.log("Tema sa zmenila");
    }

});
