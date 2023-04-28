![screenshot.png](screenshot.png)

# Mind Studios Theme

## Structure

### ACF Blocks

**PHP**: Blocks are located in template-parts/block-PLACEHOLDER.php

**CSS**: Styles for each block are in assets/scss/parts/_block-PLACEHOLDER.scss

### Templates

**CSS**: Styles for each template are in assets/scss/templates/_PLACEHOLDER.scss

### Components

**CSS**: Universal CSS classes that neither belong exclusively to a template or block, are located in assets/scss/components/_PLACEHOLDER.scss

### Loops

**PHP**: Content for have_posts() loop is located in template-parts/content-PLACEHOLDER.php

**CSS**: Styles for each content part are located in assets/scss/parts/_content-PLACEHOLDER.scss

### Page Header

Not to be confused with /header.php. These are headers that differ per template

**PHP**: Located in template-parts/header-PLACEHOLDER.php

## Translations / i18n

Use acf fields as much as possible and try to avoid __(), _x(), and other wordpress translation functions.

If you must use the translation functions, always use the main site language as the source string.

Translate via WPML.

DO **NOT** HARDCODE STRINGS!

To generate the .pot file, run

``make i18n`` (quick) or ``make`` (w/ dependency check if the former fails)

The translation generator is only part of the ``make`` build process. If you use ``make development``, you need to execute ``make i18n`` manually.

## Building

Compiled/Minified JS and CSS files are located in assets/dist/

You are free to use either a file watcher of your IDE, but this approach is **preferred**:

- In active development: (does NOT minify)

``make development``

Reloads the browser on every file change. Turn off automatic upload in your IDE to test changes on the live site, without actually touching the live site.

- Small changes in production: "build and upload"

``make``

---

**IMPORTANT**: If ``make`` complains about missing dependencies, or even the ``make`` command cannot be found, you must install the devkit from here first: