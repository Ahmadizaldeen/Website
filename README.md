# 🌐 Weblog Applikation (PHP Klausurprojekt)

## 📌 Beschreibung

Eine vollständige Frontend/Backend Weblog-Applikation, entwickelt als Klausurprojekt im Rahmen der Umschulung zum **Fachinformatiker für Anwendungsentwicklung**.

Benutzer können sich registrieren, einloggen und Blogbeiträge veröffentlichen. Die Startseite zeigt alle Beiträge in umgekehrter chronologischer Reihenfolge. Der Backend-Bereich ist nur für eingeloggte User zugänglich.

---

## 🛠️ Technologien

* PHP (Core)
* HTML5
* CSS3
* Git & GitHub

---

## 📂 Projektstruktur

```
/Website
│── index.php                   # Startseite – zeigt alle Blogbeiträge
│── login.php                   # Login-Formular & Logik
│── signup.php                  # Registrierung – Formular & Logik
│
│── /pages
│   ├── home.php                # Interne Startseite
│   ├── about.php
│   ├── contact.php
│   ├── agb.php
│   ├── imprint.php
│   ├── page1.php – page4.php
│   │
│   ├── /public_pages           # Frontend – für alle sichtbar
│   │   ├── lotto_generator.php
│   │   ├── schachbrett.php
│   │   ├── create_muster.php
│   │   └── create_table_form.php
│   │
│   └── /user_pages             # Backend – nur für eingeloggte User
│       ├── create_post.php     # Neuen Blogbeitrag erstellen
│       ├── statistic.php       # Statistiken (User & Beiträge)
│       ├── setting.php         # User-Einstellungen
│       └── signout.php         # Logout
│
│── /include
│   ├── config.php              # BASE_URL Konfiguration
│   ├── head.php                # HTML head-Tag & CSS
│   ├── header.php              # Seitentitel & h1
│   ├── footer.php              # Footer
│   ├── navigation.php          # Hauptnavigation
│   ├── footer_navi.php         # Footer-Navigation
│   ├── user_tools.php          # Navigation für eingeloggte User
│   ├── if_session.php          # Zentrale Session-Verwaltung
│   ├── blog_functions.php      # Blog-Kernfunktionen
│   ├── blog_form.php           # Blog-Formular
│   └── blog_statistic.php      # Statistik-Funktionen
│
│── /tools
│   ├── user_data_administration.php  # User CRUD-Funktionen
│   ├── validation.php                # Regex-Validierung & Input-Sanitizing
│   ├── funktionen.php                # Allgemeine Hilfsfunktionen
│   └── get_filename_as_title.php     # Dynamischer Seitentitel
│
│── /data
│   ├── users.txt               # User-Speicherung (serialisiert)
│   └── blogs.txt               # Blog-Speicherung (serialisiert)
│
│── /css
└── /js
```

---

## ⚙️ Installation & Nutzung

1. Repository klonen:

```bash
git clone https://github.com/Ahmadizaldeen/Website.git
cd Website
```

2. `include/config.php` anpassen:

```php
define('BASE_URL', '/dein-pfad/Website');
```

3. Lokalen Server starten (z.B. XAMPP, Laragon):

```
http://localhost/dein-pfad/Website/index.php
```

---

## 🧪 Features

### Authentifizierung
* [x] Benutzer-Registrierung mit Formularvalidierung (Regex)
* [x] Passwort-Bestätigung bei Registrierung
* [x] Sichere Passwort-Speicherung mit `password_hash()`
* [x] Login mit `password_verify()`
* [x] Session-Management nach Login & Registrierung
* [x] Logout-Funktion (`session_destroy`)
* [x] Sticky Forms – Eingaben bleiben bei Fehlern erhalten
* [x] Fehlermeldungen direkt im Formular

### Blog-System
* [x] Blogbeiträge erstellen (nur eingeloggte User)
* [x] Startseite zeigt alle Beiträge – neueste zuerst
* [x] Jeder Beitrag mit Titel, Autor, Inhalt & Datum
* [x] Post-Redirect-Get – kein doppeltes Speichern
* [x] Datei-basierte Speicherung (`serialize` / `unserialize`)

### Sicherheit & Struktur
* [x] Seitenschutz für `user_pages` – Weiterleitung ohne Session
* [x] Dynamische Navigation (Gäste & eingeloggte User)
* [x] Input-Sanitizing gegen XSS (`clean_input`, `htmlspecialchars`)
* [x] Zentrale URL-Konfiguration mit `BASE_URL`
* [x] Template-System mit wiederverwendbaren Includes

### Frontend – Public Pages
* [x] Lotto-Generator
* [x] Schachbrett-Darstellung
* [x] Farb-Muster Generator (6 Muster)
* [x] Dynamischer Tabellen-Generator

### Backend – User Pages
* [x] Blogbeitrag erstellen
* [x] Statistik-Seite (Anzahl User & Beiträge)
* [x] User-Einstellungen

---

## 📚 Umgesetzte PHP-Konzepte

* Funktionen, Parameter und Rückgabewerte
* Arrays, Schleifen und `switch`
* Trennung von Logik und UI (PHP vor HTML)
* Template-System mit `require_once`
* Formulare mit GET & POST
* Reguläre Ausdrücke (`preg_match`)
* Passwort-Hashing und -Verifikation
* Sessions (`session_start`, `$_SESSION`)
* HTTP-Header und Weiterleitungen
* Dateioperationen (`file_get_contents`, `file_put_contents`)
* Serialisierung (`serialize` / `unserialize`)
* Input-Sanitizing und XSS-Schutz
* Absolute Pfade mit `__DIR__` und `BASE_URL`
* Seitenschutz mit Session-Prüfung
* Anonyme Funktionen (`usort`)
* Dynamischer Seitentitel mit `$_SERVER['SCRIPT_NAME']`

---

## 🚧 Status

Projekt abgeschlossen. CSS-Finalisierung ausstehend. Bereit für Abgabe am 24.04.2026.

---

## 👨‍💻 Autor

Ahmad Izaldeen

---

## 📄 Lizenz

Dieses Projekt dient Lernzwecken.