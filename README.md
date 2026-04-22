# 🌐 Website Projekt (PHP Learning Project)

## 📌 Beschreibung

Dieses Projekt ist eine selbst entwickelte Website, die im Rahmen meiner Weiterbildung zum **Fachinformatiker für Anwendungsentwicklung** entsteht.

Ziel ist es, praktische Erfahrungen in der Webentwicklung zu sammeln und zentrale Konzepte aus **PHP**, **HTML**, **CSS** und **JavaScript** strukturiert umzusetzen.

Die Website wird schrittweise erweitert und dient als Experimentier- und Lernplattform.

---

## 🛠️ Technologien

* PHP (Core)
* HTML5
* CSS3
* JavaScript (grundlegend)
* Git & GitHub

---

## 📂 Projektstruktur

```
/Website
│── login.php               # Einstiegspunkt – Login-Formular & Logik
│── signup.php              # Registrierung – Formular & Logik
│── /pages
│   ├── home.php            # Startseite (Gäste & eingeloggte User)
│   ├── page1.php – page4.php
│   ├── about.php
│   ├── contact.php
│   ├── agb.php
│   ├── imprint.php
│   └── /user_pages         # Nur für eingeloggte User (Seitenschutz aktiv)
│       ├── setting.php
│       ├── static.php
│       └── signout.php
│── /include
│   ├── config.php          # BASE_URL Konfiguration
│   ├── navigation.php      # Wiederverwendbare Navigation
│   ├── footer_navi.php     # Wiederverwendbarer Footer
│   └── user_tools.php      # Navigation für eingeloggte User
│── /data
│   └── users.txt           # Datei-basierte User-Speicherung (serialisiert)
│── /tools
│   ├── user_data_administration.php  # User CRUD-Funktionen
│   ├── validation.php                # Regex-Validierung & Input-Sanitizing
│   └── pages_template.php            # Vorlage für neue Seiten
│── /css
│── /js
```

---

## ⚙️ Installation & Nutzung

1. Repository klonen:

```bash
git clone https://github.com/Ahmadizaldeen/Website.git
cd Website
git checkout feat_login
```

2. `include/config.php` anpassen:

```php
define('BASE_URL', '/dein-pfad/Website');
```

3. Lokalen Server starten (z.B. XAMPP, Laragon):

```
http://localhost/dein-pfad/Website/login.php
```

---

## 🧪 Features

* [x] Seitenstruktur mit wiederverwendbaren Includes (Navigation, Footer)
* [x] Zentrale URL-Konfiguration mit `BASE_URL` (`config.php`)
* [x] Benutzer-Registrierung mit Formularvalidierung
* [x] Passwort-Bestätigung bei Registrierung
* [x] Eingabevalidierung mit Regex (Username & Passwort)
* [x] Input-Sanitizing gegen XSS (`clean_input`, `htmlspecialchars`)
* [x] Sichere Passwort-Speicherung mit `password_hash()`
* [x] Datei-basierte User-Speicherung (`serialize` / `unserialize`)
* [x] Login mit `password_verify()`
* [x] Session-Management nach Login
* [x] Weiterleitung nach Login & Registrierung
* [x] Logout-Funktion (`session_destroy`)
* [x] Seitenschutz für `user_pages` – nicht eingeloggte User werden weitergeleitet
* [x] Dynamische Navigation (unterschiedlich für Gäste & eingeloggte User)
* [x] Sticky Forms – Formulareingaben bleiben bei Fehlern erhalten
* [x] Fehlermeldungen direkt im Formular (ohne Seitenwechsel)
* [ ] Datenbankanbindung (MySQL)
* [ ] MVC-Struktur

---

## 📚 Lernfokus

Bisher umgesetzte PHP-Konzepte:

* Funktionen, Parameter und Rückgabewerte
* Arrays und Schleifen
* Trennung von Logik und UI (PHP vor HTML)
* Wiederverwendbarer Code mit `require_once`
* Formulare mit GET/POST
* Reguläre Ausdrücke (`preg_match`)
* Passwort-Hashing und -Verifikation
* Sessions (`session_start`, `$_SESSION`)
* HTTP-Header und Weiterleitungen
* Dateioperationen (`file_get_contents`, `file_put_contents`)
* Input-Sanitizing und XSS-Schutz
* Absolute Pfade mit `__DIR__` und `BASE_URL`
* Seitenschutz mit Session-Prüfung
* Debugging und Fehlerbehandlung

---

## 🚧 Status

Branch `feat_login` – vollständiges Login- & Registrierungssystem mit Seitenschutz, Logout und Fehlermeldungen. Bereit für Merge in `main`.

---

## 👨‍💻 Autor

Ahmad Izaldeen

---

## 📄 Lizenz

Dieses Projekt dient Lernzwecken.