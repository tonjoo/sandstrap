**Hi. I built it to use on one of my projects. If you really want to use it, feel free.**

- - -

# Sandstrap - Lightweight and simple css framework with no dependencies

Full docs with examples: [https://devel.tongkolspace.com/sandstrap/demo/](https://devel.tongkolspace.com/sandstrap/demo/).

If you are using a module bundler like Webpack or Browserify...

```
not uploaded yet
```

```js

```

...or manually inject the minified script into your website.

```html
<link rel="stylesheet" href="assets/css/sandstrap.min.css">
<script src="assets/js/sandstrap.min.js"></script>
```

## what's the difference with bootstrap?

- limited unitilities
- does not have all bootstrap components (Alerts, Badge, Buttons, Button group, Card, Carousel, Collapse, Dropdowns, Forms, Input group, Jumbotron, List group, Modal, Navs, Navbar, Popovers, Progress, Scrollspy, Tooltips).
- does not have all bootstrap javascript

## Advantages 
- Total css built size: 25KB
- Total js built size: 6KB
- Support pure javascript without jQuery

## Sanstrap Components
- Pagination
- Breadcrumb
- Typography
- Icon
- Share button
- Button Function
- Header Footer
- Javacript -> collapse function

## How to recompile grid

- If you need to edit recompile grid and using sass. Make sure you have installed `grunt`, if you haven't already installed it please check [https://gruntjs.com/getting-started](https://gruntjs.com/getting-started first)
- Run `npm install` to install all dependencies
- Run `grunt watch` to watch all changes and recompile the css/js file that you changed
- Now you can edit sass/js files based on your needs and enjoy!
- Feel free to edit & delete `src/sass/_grid.scss`

## Browser support

![Chrome][chrome-image] | ![Firefox][firefox-image] | ![IE][ie-image] | ![Opera][opera-image] | ![Safari][safari-image]
--- | --- | --- | --- | --- |
Latest ✔ | Latest ✔ | 10+ ✔ | Latest ✔ | 9.1+ ✔ |

# License

MIT

[chrome-image]: https://raw.github.com/alrra/browser-logos/master/src/chrome/chrome_48x48.png
[firefox-image]: https://raw.github.com/alrra/browser-logos/master/src/firefox/firefox_48x48.png
[ie-image]: https://raw.github.com/alrra/browser-logos/master/src/archive/internet-explorer_9-11/internet-explorer_9-11_48x48.png
[opera-image]: https://raw.github.com/alrra/browser-logos/master/src/opera/opera_48x48.png
[safari-image]: https://raw.github.com/alrra/browser-logos/master/src/safari/safari_48x48.png