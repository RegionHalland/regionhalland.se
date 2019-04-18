# Instruktioner för regionhalland.se


## Hämta hem webbplatsen via Git

```sh
git clone https://github.com/RegionHalland/regionhalland.se.git
```


## Ställ om till rätt version på servern

```sh
git checkout v1.0.0
```


## Vendor filer i root-mappen

```sh
"composer/installers": "^1.4"
"vlucas/phpdotenv": "^2.0.1"
"johnpbloch/wordpress": "4.9.8"
"oscarotero/env": "^1.1.0"
"roots/wp-password-bcrypt": "1.0.0"
"roots/wp-config": "1.0.0"
```


## Vendor filer i tema-mappen

```sh
"illuminate/support": "5.6.*"
"roots/sage-lib": "~9.0.5"
"soberwp/controller": "~2.1.0"
```


## ACF

```sh
"advanced-custom-fields/advanced-custom-fields-pro": "*"
```


## Plugins från wpackagist

```sh
"wpackagist-plugin/wp-nested-pages": "2.0.4"
"wpackagist-plugin/disable-gutenberg": "*"
"wpackagist-plugin/admin-menu-editor": "1.8.5"
"wpackagist-plugin/google-sitemap-generator": "4.1.0"
"wpackagist-plugin/wp-migrate-db": "1.0.10"
"wpackagist-plugin/user-role-editor": "^4.35"
"wpackagist-plugin/enable-media-replace":"3.2.9"
```


## Plügins för Mediaflow

```sh
"regionhalland/mfpconnect": "1.0.1",
"regionhalland/mfpconnectmedia": "1.0.1"
```


## Egna region-halland-plugins

```sh
"regionhalland/region-halland-acf-add-theme-subpage": "1.0.0"
"regionhalland/region-halland-acf-cookie-notice": "1.0.0"
"regionhalland/region-halland-breadcrumbs": "1.1.1"
"regionhalland/region-halland-tree-first-level": "1.1.0"
"regionhalland/region-halland-mobile-detect": "1.0.0"
"regionhalland/region-halland-varbi-works": "1.0.0"
"regionhalland/region-halland-prepare-the-content": "1.0.0"
"regionhalland/region-halland-find-on-page": "1.1.0"
"regionhalland/region-halland-mixed-functions": "1.1.0"
"regionhalland/region-halland-page-children": "1.1.0"
"regionhalland/region-halland-nav-sidebar": "1.0.1"
"regionhalland/region-halland-nav-site": "1.0.1"
"regionhalland/region-halland-news-archive-taxonomi-category": "1.3.2"
"regionhalland/region-halland-acf-page-kulturprogram": "2.0.0"
"regionhalland/region-halland-acf-options-page-site-message": "1.0.1"
"regionhalland/region-halland-acf-page-ingress": "1.1.2"
"regionhalland/region-halland-acf-page-kulturarrangemang": "2.3.0"
"regionhalland/region-halland-use-taxonomy-category-on-page": "1.0.0"
"regionhalland/region-halland-acf-page-links-blurbs": "1.4.2"
"regionhalland/region-halland-a-b-c-page-links-repeater": "1.0.2"
"regionhalland/region-halland-current-page-and-child-pages": "1.0.0"
"regionhalland/region-halland-parent-page": "1.0.0"
"regionhalland/region-halland-findwise-region-halland": "1.1.1"
"regionhalland/region-halland-search-findwise-region-halland": "1.1.0"
"regionhalland/region-halland-dummy-data-personer-enheter": "1.0.0"
"regionhalland/region-halland-breadcrumbs-pages-search": "1.1.0"
"regionhalland/region-halland-acf-page-personer-enheter": "1.0.1"
"regionhalland/region-halland-acf-page-i-frame": "1.1.0"
```


## Versionhistorik

### 1.1.0
- Stora korrigeringar av söksidan på mobil
- Sökrutan i sidhuvudet justerat fokusläge
- Puffarna har nytt responsivt beteende
- Vänsternavigationen har nytt responsivt beteende
- Bilder på innehållssidor är responsiva

### 1.0.0
- Release av nya regionhalland.se