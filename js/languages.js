/* Language changer */

$(document).ready(function(){

    console.log("Načitávanie scriptu jazykov...");
    let lang = ["sk", "en", "ru"];

    $("#langEN").click(function(){
        translateEN();
    });

    $("#langRU").click(function(){
        translateRU();
    });

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
        $(".langAddPost").text("Add");
        $(".langSavePost").text("Save");

        //Aside
        $(".aside-panel-title").text("Information");
        $(".langSavedPosts").text("Saved");

        console.log("Translated... ");
    }

    function translateRU(){
        console.log("Translating to Russian...");

        console.log("Translated... ");
    }
    
});

