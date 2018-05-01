/**     Picture Gallery
 *
 *      The scripts contain functions to start and execute the slideshow
 *      of the picture gallery. Furthermore, there are functions to manually
 *      move through the show. They properly restart the show afterwards.
 *
 *      Author: M. Korsmeier
 */


// Variables to store the current and last displayed picutre
var gallery_currentPicture = 0;
var gallery_lastPicture = 0;
// Function to go to the next picture and restart the slideshow
function gallery_next(){
    var images  = document.getElementsByClassName("galleryPicture");
    gallery_lastPicture    = gallery_currentPicture;
    gallery_currentPicture = (gallery_currentPicture  + 1) % (images.length);
    images[gallery_lastPicture].style.opacity = 0;
    images[gallery_currentPicture].style.opacity = 100;
    Slideshow_restartCounter++;
    window.setTimeout( function(){ Slideshow_restart(); }, 8000);
}
// Function to go to the last picture and restart the slideshow
function gallery_last(){
    var images  = document.getElementsByClassName("galleryPicture");
    gallery_lastPicture = gallery_currentPicture;
    gallery_currentPicture = (gallery_currentPicture  + -1 + images.length) % (images.length);
    images[gallery_lastPicture].style.opacity = 0;
    images[gallery_currentPicture].style.opacity = 100;
    Slideshow_restartCounter++;
    window.setTimeout( function(){ Slideshow_restart(); }, 8000);
}


// Variables to use always the last activation of the slide show's restart
// It disentangles slideshow and manual clicks
var Slideshow_restartCounter = 0;
var Slideshow_restartCheck = 0;

// Function to move to next image in slide show
// Checkes wheter there where intermediate manual clicks
function Slideshow_restart(){
    Slideshow_restartCheck ++;
    if(Slideshow_restartCheck==Slideshow_restartCounter){
        Slideshow_restartCounter = 0;
        Slideshow_restartCheck = 0;
        gallery_next();
    }
}

// Start slideshow (onload of body)
function StartSlideShow(){
    window.setTimeout( function(){ gallery_next(); }, 8000);
}

// Listeners to move forward and backward in touch screens
// FIXME: check that this works or remove
var startT = 0;
var startM = 0;
function startTouch(){
    var box = document.getElementsByClassName("galleryTouch")[0];
    box.addEventListener('touchstart', function(e){
                         startT = e.changedTouches[0].pageX;
                         e.preventDefault();
                         }, false)
    box.addEventListener('touchend', function(e){
                         var diff = startT - e.changedTouches[0].pageX;
                         if(diff>100){
                         gallery_next();
                         }
                         if(diff<-100){
                         gallery_last();
                         }
                         e.preventDefault();
                         }, false)
    box.addEventListener('mousedown', function(e){
                         startM = e.x;
                         }, false)
    box.addEventListener('mouseup', function(e){
                         var diff = e.x;
                         diff = startM - diff;
                         if(diff>100){
                         gallery_next();
                         }
                         if(diff<-100){
                         gallery_last();
                         }
                         }, false)
    
    }
