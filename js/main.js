if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('./sw.js').then(function(reg) {
            console.log('[SW] Registration successful. Scope: ' + reg.scope);
        }, function(err) {
            console.log('[SW] Registration failed: ', err);
        })
    });
}

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
