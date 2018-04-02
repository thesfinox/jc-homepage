/* This is needed to activate the Service Worker for offline use and the
 * Progressive Web App capabilities. We should keep this deactivated unless we
 * specifically want to test it.


if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('./sw.js').then(function(reg) {
            console.log('[SW] Registration successful. Scope: ' + reg.scope);
        }, function(err) {
            console.log('[SW] Registration failed: ', err);
        })
    });
}

 */

/* This enables the administration button to generate the PDF's for abstract
 * and title export. Unless we have a PHP capable server this is useless.

function admin(e) {
    var key = window.event ? e.keyCode : e.which;
    if (key == 65 && e.ctrlKey && e.altKey) {
        console.log('[JS] CTRL + ALT + A have been pressed');
        var admin = document.getElementsByClassName('admin');
        for (i=0; i<admin.length; i++) {
            admin[i].style.display = 'block';
        };
    };
    if (key == 67 && e.ctrlKey && e.altKey) {
        console.log('[JS] CTRL + ALT + C have been pressed');
        var admin = document.getElementsByClassName('admin');
        for (i=0; i<admin.length; i++) {
            admin[i].style.display = 'none';
        };
    };
};

if (document.attachEvent) document.attachEvent('onkeydown', admin);
else document.addEventListener('keydown', admin);

 */
