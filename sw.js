'use strict';

var cacheno = 2;
var cacheno_old = 1;
var cachename = 'journal-club-v' + cacheno;
var cachename_old = 'journal-club-v' + cacheno_old;

var cachefiles = [
    './',
    './index.php',
    './manifest.json',
    './js/lazyload.min.js',
    './js/main.min.js',
    './js/manup.min.js',
    './notices/message.md',
    './notices/Parsedown.php',
    './images/01_carousel.jpg',
    './images/02_carousel.jpg',
    './images/03_carousel.jpg',
    './images/04_carousel.jpg',
    './images/arxiv.jpg',
    './images/dottorato.jpg',
    './images/infn.jpg',
    './images/inspire.jpg',
    './images/campusnet.png',
    './images/30.jpg',
    './images/250.jpg',
    './images/1400.jpg'
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
