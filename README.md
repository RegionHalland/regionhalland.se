# Instruktioner för regionhalland.se


## Hämta hem webbplatsen via Git

```sh
git clone https://github.com/RegionHalland/regionhalland.se.git
```


## Ställ om till rätt version på servern

```sh
git checkout v1.0.0
```


## Plugins från wpackagist

```sh
"wpackagist-plugin/wp-nested-pages": "2.0.4",
"wpackagist-plugin/disable-gutenberg": "*",
"wpackagist-plugin/admin-menu-editor": "1.8.5",
"wpackagist-plugin/wp-migrate-db": "1.0.10",
"wpackagist-plugin/user-role-editor": "^4.35",
"wpackagist-plugin/enable-media-replace":"3.2.9",
```


## Plügins för Mediaflow

```sh
"regionhalland/mfpconnect": "1.0.1",
"regionhalland/mfpconnectmedia": "1.0.1"
```


## Egna region-halland-plugins

```sh
"regionhalland/region-halland-a-b-c-page-links-repeater": "1.3.2",
"regionhalland/region-halland-acf-add-theme-subpage": "1.3.2",
"regionhalland/region-halland-acf-cookie-notice": "1.3.2",
"regionhalland/region-halland-acf-page-i-frame": "1.3.0",
"regionhalland/region-halland-acf-page-ingress": "1.3.0",
"regionhalland/region-halland-acf-page-kulturarrangemang": "2.5.0",
"regionhalland/region-halland-acf-page-kulturprogram": "2.3.0",
"regionhalland/region-halland-acf-page-links-blurbs": "1.7.0",
"regionhalland/region-halland-acf-page-personer-enheter": "1.2.0",
"regionhalland/region-halland-api-personer-enheter": "1.1.0",
"regionhalland/region-halland-array-pagination": "1.3.0",
"regionhalland/region-halland-breadcrumbs": "1.2.1",
"regionhalland/region-halland-breadcrumbs-pages-search": "1.2.0",
"regionhalland/region-halland-current-page-and-child-pages": "1.1.0",
"regionhalland/region-halland-find-on-page": "2.0.0",
"regionhalland/region-halland-findwise-region-halland": "1.2.0",
"regionhalland/region-halland-mixed-functions": "1.2.0",
"regionhalland/region-halland-mobile-detect": "1.3.0",
"regionhalland/region-halland-news-archive-taxonomi-category": "1.4.0",
"regionhalland/region-halland-page-children": "1.3.0",
"regionhalland/region-halland-parent-page": "1.1.0",
"regionhalland/region-halland-prepare-the-content": "1.2.0",
"regionhalland/region-halland-search-findwise-region-halland": "1.2.0",
"regionhalland/region-halland-site-map-regionhalland": "1.3.0",
"regionhalland/region-halland-tree-first-level": "1.4.0",
"regionhalland/region-halland-use-taxonomy-category-on-page": "1.1.0",
"regionhalland/region-halland-varbi-works": "1.6.0",
"regionhalland/region-halland-acf-options-page-site-message": "1.3.1",
"regionhalland/region-halland-meta-data-region-halland": "1.0.0",
```


## Versionhistorik

### 1.7.0
- Lagt till fältet "place" för enheter

### 1.6.0
- Flyttat article till en egen partial
- Delat upp personer/enheter till respektive partial
- Ny plugin med funktioner för sajtens metadata
- Viktigt meddelande, ny funktion för att kontrollera om det finns en länk
- Ny kontroll om det finns data för personer/enheter
- Uppdaterat Varbi-sidan så att man kan tömma valen via dropdown
- Döpt om temat till "Region Halland - WP Tema" + lagt till en screenshot med logga
- Justering av tillgänglighet, dvs nästling, kontrast, attribut m.m.

### 1.5.1
- Uppdaterat Varbi-pluginen från 1.4.0 till 1.5.0

### 1.5.0
- Lagt till plugin för site-map

### 1.4.0
- Paginering av lediga jobb
- Hämta personer/enheter via Hak
- Ändring av 404-sida

### 1.3.0
- Filtrering av lediga jobb via Varbi
- Ett flertal mindre justeringar av design

### 1.2.0
- Lediga jobb via Varbi tillagd
- Title-tag på samtliga sidor

### 1.1.0
- F5-kontroller ignoeras via .gitignore

### 1.1.0
- Stora korrigeringar av söksidan på mobil
- Sökrutan i sidhuvudet justerat fokusläge
- Puffarna har nytt responsivt beteende
- Vänsternavigationen har nytt responsivt beteende
- Bilder på innehållssidor är responsiva

### 1.0.0
- Release av nya regionhalland.se