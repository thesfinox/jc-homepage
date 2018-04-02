# Journal Club Homepage

## What is this?

Since the _Journal Club_ homepage is hosted on a **Apache** server through
**PHP**, this is a static port in pure **HTML** in order to be able to work on
it and improve the code which will then be translated into the needed code.

You can find all the information you need inside the `index.html` file together
with a detailed description of all the libraries used, etc.

## What can I find here?

Here you will find almost the same files which are hosted on the server. The
differences being:

- **CSS/Javascript**:
    - _Server_: minified version and mostly served through CDN in order to
      speed up execution time
    - _GitLab_: full version, generally hosted directly here in order to work
      independently
- [**Service Worker**](https://developers.google.com/web/fundamentals/primers/service-workers/):
    - _Server_: fully enabled and working. The Progressive Web App is active
      and the page is operational even offline
    - _GitLab_: you can find the file `sw.js` and the relative code in
      `js/main.js` but they are disabled or not referenced. We should activate
      them carefully and just to check some small part of code
- **PHP**:
    - `index.php.bak` is the original page hosted on the server with the whole
      code
    - `abstract/abstract.php` is the generator for abstract and title PDF file
    - `bulletin/Parsedown.php` together with `bulletin/message.md` is the
      generator of the bulletin board: we write Markdown code in `message.md`
      and then use the parser to display it on the page
- **Manifest**:
    - _Server_: `manifest.json` is used to pass every information, favicon,
      icon, image to the Web App functionalities,
    - _GitLab_: `manifest.json` is present but not referenced inside
      `index.html`

## How can I contribute?

You can add, modify, delete every part of the code as long as every change is
accompanied by **proper comments**. Here you can find some inspiration from
where you can start coding:

- there are some incompatibility issues with Chrome when using the `.carousel`
  class in _Bootstrap_ which should be solved,
- we need a new fancier interface,
- we might want an administrator interface (with the service worker we can send
  push notifications) to keep in touch with people,
- as a consequence: we might integrate a mailing list for updates through
  email,
- we definitely want a fancier title and icon (something different from the
  Campusnet logo),
- we should try and rewrite the lazy load function as well as some of the CSS
  code (at least): this is actually a **huge** effort but it should be a goal.
