# Journal Club Homepage

Welcome to the homepage for the _Journal Club_ seminars and meetings of the [_Doctoral School in Physics and Astrophysics_](http://dottorato.ph.unito.it/) of the [**Universit&agrave; degli Studi di Torino**](https://www.unito.it/). This is the code associated to the page, which however is separately hosted on a [Raspbian](https://www.raspberrypi.org/downloads/raspbian/) server on a Raspberry Pi (at least for the time being) using [Apache](https://httpd.apache.org/), [MySQL/MariaDB](https://mariadb.org/) and [PHP v.7](http://www.php.net/).

## Introduction

This is the static version of the dynamic hosted webpage. Once you clone the project with `git clone`, you can simply open [index.html](https://gitlab.com/phd-torino-physics/jc-homepage/blob/master/index.html) in a web browser to display the page.

In this repository you will find generally the whole file tree which is hosted on the server. You can also find the PHP version of the main file ([index.php](https://gitlab.com/phd-torino-physics/jc-homepage/blob/master/index.php) as a reference, though it will not work unless you can run a [LAMP](https://en.wikipedia.org/wiki/LAMP_(software_bundle)) server.

The dynamic page is also a [Progressive Web App](https://developers.google.com/web/progressive-web-apps/): it can be displayed as a native app on most smartphones and it can work offline using the caching system. This static version has no such function but you can find the [Service Worker](https://developers.google.com/web/fundamentals/primers/service-workers/) file [sw.js](https://gitlab.com/phd-torino-physics/jc-homepage/blob/master/sw.js) in the project, as well.

## Project Structure

Inside the project you can find several file and directories, such as:

- `abstract`:
  - `abstract.php`: this is the file that **in the hosted page** (not the static version) generates the PDF files which you can access through buttons. As you can find in [main.js](https://gitlab.com/phd-torino-physics/jc-homepage/blob/master/js/main.js), though in the static version it has been disabled, there exist a sort of _administrator view_ accessible through a keyboard shortcut which will let you generate the PDF for the first time.
- `bulletin`:
  - `message.md`: Markdown file with the message of the day/week/month
  - `Parsedown.php`: external [library](http://parsedown.org/) which translates the message of the day in HTML tags to be displayed on the hosted page (in the static version it is not referenced)
- `css`:
  - `main.css`: CSS file for the page
  - `main.min.css`: minified version of the CSS file
- `images`:
  - most of the images are needed for the Progressive Web App functionality in the [manifest.json](https://developers.google.com/web/fundamentals/web-app-manifest/). In the page you will mostly need the `jpg` files (which should be Progressive JPEG).
- `js`:
  - `gallery.js`: Javascript for the slideshow
  - `gallery.min.js`: minified version
  - `main.js`: admin mode code and service worker registration
  - `main.min.js`: minified version
  - `menue.js`: navbar code
  - `menue.min.js`: minified version
- `index.html`: static webpage
- `index.php`: dynamic PHP page
- `manifest.json`: declaration of the page properties
- `sw.js`: Service Worker file
- `README.md`: this file
- `CONTRIBUTING.md`: contribution guidelines
- `LICENSE`: license file

## Contributions

You can have a look at [CONTRIBUTING.md](https://gitlab.com/phd-torino-physics/jc-homepage/blob/master/CONTRIBUTING.md) for some guidelines.

## Authors

This is a group project by the students of the **Doctoral School in Physics and Astrophysics** in Torino, Italy.

Please, refer to this page for bug reports and info.

## License

Since this is a free project, designed to be open source, the code is released
under the MIT license.
