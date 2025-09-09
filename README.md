# WordPress + Tailwind CSS v4 Setup

This project is a custom WordPress theme using **Tailwind CSS v4** for styling.  
It uses the Tailwind CLI to build assets and outputs a single compiled CSS file.

---

## 📂 Project Structure
```
theme/
 ├─ assets/
 │   ├─ js/
 │   │   └─ scripts.js
 │   └─ img/
 ├─ dist/
 │   └─ output.css        # Compiled Tailwind CSS
 ├─ src/
 │   └─ input.css         # Tailwind source file
 ├─ functions.php         # Theme scripts & styles enqueued here
 ├─ package.json
 └─ README.md
```

---

## ⚙️ Setup

### 1. Install Dependencies
```bash
npm install
```

### 2. Development (Watch Mode)
Run this while developing:
```bash
npm run watch
```
This will rebuild CSS whenever you save changes.

### 3. Production Build
To generate a minified CSS file:
```bash
npm run build
```

---

## 🎨 Tailwind Setup

Your `src/input.css` should look like this:

```css
@import "tailwindcss";

/* Theme customization */
@theme {
  --color-blue: #1F9FAF;
  --color-light-blue: rgba(15, 148, 174, 0.25);
  --color-dark-blue: #125666;
  --color-orange: #F37A21;
  --color-light-orange: rgba(242, 185, 128, 1);
  --color-white: #ffffff;
}
```

---

## 📌 WordPress Integration
In `functions.php`, the compiled stylesheet is enqueued:

```php
function main_files() {
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/dist/output.css', array(), null);
    wp_enqueue_style('main-css', get_stylesheet_uri());
    // other scripts & styles...
}
add_action('wp_enqueue_scripts', 'main_files');
```

---

## 🚀 Usage

- Edit your templates and apply Tailwind utility classes directly in your PHP/HTML.
- Modify `src/input.css` for theme extensions.
- Run `npm run build` before deploying.

---

## ✅ Requirements
- Node.js v18+  
- WordPress (latest)

---

## 📝 License
MIT
