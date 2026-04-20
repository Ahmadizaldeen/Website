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
│   ├── home.php
│   ├── page1.php – page4.php
│   ├── about.php
│   ├── contact.php
│   ├── agb.php
│   └── imprint.php
│── /include
│   ├── navigation.php      # Wiederverwendbare Navigation
│   └── footer_navi.php     # Wiederverwendbarer Footer
│── /data
│   └── users.txt           # Datei-basierte User-Speicherung (serialisiert)
│── /tools
│   ├── user_data_administration.php  # User CRUD-Funktionen
│   ├── validation.php                # Regex-Validierung
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

2. Lokalen Server starten:

```bash
php -S localhost:8000
```

3. Im Browser öffnen:

```
http://localhost:8000/login.php
```

---

## 🧪 Features

* [x] Seitenstruktur mit wiederverwendbaren Includes (Navigation, Footer)
* [x] Benutzer-Registrierung mit Formularvalidierung
* [x] Passwort-Bestätigung bei Registrierung
* [x] Eingabevalidierung mit Regex (Username & Passwort)
* [x] Sichere Passwort-Speicherung mit `password_hash()`
* [x] Datei-basierte User-Speicherung (`serialize` / `unserialize`)
* [x] Login mit `password_verify()`
* [x] Session-Management nach Login
* [x] Weiterleitung nach Login & Registrierung
* [ ] Logout-Funktion
* [ ] Seitenschutz für eingeloggte User
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
* Debugging und Fehlerbehandlung

---

## 🚧 Status

Branch `feat_login` – Login & Registrierungssystem funktionsfähig. Projekt wird kontinuierlich erweitert.

---

## 👨‍💻 Autor

Ahmad Izaldeen

---

## 📄 Lizenz

Dieses Projekt dient Lernzwecken.