/**     Menue Handling
 *
 *      Script to open and close the menue in the mobile (small)
 *      version of the homepage.
 *
 *      Upon first load of the page or upon resize of the window
 *      always open (close) it for a large (small) window.
 *
 *
 *      Author: M. Korsmeier
 */
var shown = 0;

function show(){
    var menue  = document.getElementById("menue");
    menue.style.height = "260px";
    shown=1;
};
function show50(){
    var menue  = document.getElementById("menue");
    menue.style.height = "50px";
    shown=1;
};
function hide(){
    var menue  = document.getElementById("menue");
    menue.style.height = "0px";
    shown=0;
};

function start_menue(){
    if(document.documentElement.clientWidth>1000){
        show50();
    }else{
        hide();
    }
};
window.onresize = function() {
    start_menue();
};
