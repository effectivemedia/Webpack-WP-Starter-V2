# Readme

## File Structure

```bash
repo
├─ /genesis_theme_mods
│  ├─ /includes
│  └─ /partials
├─ /src
│  ├─ /images
│  ├─ /js
│  │  ├─ cust.jQuery.js
│  │  └─ cust.scripts.js
│  └─ /sass
│     └─ cust.styles.scss
├─ .gitignore
├─ functions.php
├─ package.json
├─ postcss.config.json
├─ Readme.md
├─ style.css
├─ webpack.config.common.js
├─ webpack.config.dev.js
└─ webpack.config.prod.js
```

- `style.css` is just for WP theme info so WP can use the theme. Custom styles are defined via the SASS-outputted cust.styles.css.

## Initiation

1. In the terminal run `npm install` to install dependencies
2. Then run `npm run dev` for the initial compile. This is mainly to check for any errors
