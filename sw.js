'use strict';

var cacheno = 3;
var cacheno_old = 2;
var cachename = 'journal-club-v' + cacheno;
var cachename_old = 'journal-club-v' + cacheno_old;

var cachefiles = [
    './',
    './index.php',
    './manifest.json',
    './js/gallery.min.js',
    './js/main.min.js',
    './js/menue.min.js',
    './images/campusnet_banner.png',
    './images/01_carousel.jpg',
    './images/02_carousel.jpg',
    './images/03_carousel.jpg',
    './images/04_carousel.jpg',
    './images/arxiv.jpg',
    './images/dottorato.jpg',
    './images/infn.jpg',
    './images/inspire.jpg',
    './images/pictures_button_left.png',
    './images/pictures_button_right.png',
    './images/bg/bg01.png',
    './images/bg/bg02.png',
    './images/bg/bg03.png',
    './css/main.min.css',
    './bulletin/message.md',
    './bulletin/Parsedown.php'
];

self.addEventListener('install', function(e) {
    console.log('[SW] Installing Service Worker.');
    e.waitUntil(
        caches.open(cachename).then(function(cache) {
            console.log('[SW] Caching ' + cachename + '.');
            return cache.addAll(cachefiles);
        })
    );
    self.skipWaiting();
});

self.addEventListener('activate', function(e) {
    console.log('[SW] Activating new Service Worker.');
    console.log('[SW] Deleting old cache: ' + cachename_old + '.');
    e.waitUntil(
        caches.delete(cachename_old)
    );
});

self.addEventListener('fetch', function(e) {
    e.respondWith(
        caches.open(cachename).then(function(cache) {
            console.log('[SW] Fetching ' + e.request.url + '.');
            return cache.match(e.request).then(function(response) {
                var fetchpromise = fetch(e.request).then(function(network) {
                    cache.put(e.request, network.clone());
                    return network;
                })
                return response || fetchpromise;
            });
        })
    );
});
