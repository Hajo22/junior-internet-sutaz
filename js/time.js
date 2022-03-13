//Time display for a web

$(document).ready(function(){

    console.log("Time script...");
    var dniT = ["Nedeľa", "Pondelok", "Utorok", "Streda", "Štvrtok", "Piatok", "Sobota"];

    startTime();

    function startTime(){
        var datum = new Date();
        var h = datum.getHours();
        var m = datum.getMinutes();
        var s = datum.getSeconds();
        var y = datum.getFullYear();
        var mo = datum.getMonth();
        var d = datum.getDate();
        mo += 1;
    
        h = checkTime(h);
        m = checkTime(m);
        s = checkTime(s);
        y = checkTime(y);
        mo = checkTime(mo);
        d = checkTime(d);
    
        var lastTime = h + ":" + m + ":" + s;
        var lastDate = d + "." + mo + "." + y;
        var lastDay = dniT[datum.getDay()];

        $("#realTime").text(lastTime);
        $("#realDate").text(lastDate);
        $("#day").text(lastDay);
    
        var t = setTimeout(startTime, 500);
    }
    
    function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
    }
});
