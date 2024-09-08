# Bücherantiquariat
Beschreibung:
Dieses Projekt ist eine Webanwendung für ein Bücherantiquariat. Die Website ermöglicht es Nutzern, Bücher zu durchsuchen, Details anzuzeigen und mit verschiedenen Funktionen wie Suchfiltern und Dropdown-Menüs zu interagieren. Die Seite enthält auch Kontaktinformationen und eine Google Maps Integration. Ebenso gibt es ein Login für Admins und Benutzer. Admins haben zugriff auf eine Kundenseite, welche die gleichen Funktionen besitzt, wie die Bücherseite. Ebenso können Admins Bücher und Kunden bearbeiten, hinzufügen und löschen. 

## Inhaltsverzeichnis
- Technologien
- Projektstruktur
- Installation
- Verwendung
- Contributing
- Lizenz

## Technologien

- HTML5: Für die Strukturierung der Inhalte.
- CSS3: Für die Gestaltung der Webseite.
- JavaScript: Für die Interaktivität und dynamischen Elemente.
- PHP: Für serverseitige Logik, einschliesslich Benutzeranmeldung und Passwortänderung.
- Google Maps API: Für die Kartenintegration.
- Web Fonts: Verwendung von Google Fonts und benutzerdefinierten Schriftarten.

## Projektstruktur

/Buecherantiquariat/
├── Bilder/
│   ├── books-1163695_1280.jpg
│   ├── book-cover.svg
│   ├── bookshelf.svg
│   ├── delete.svg
│   ├── edit.svg
│   ├── heart.svg
│   └── magnify.svg
├── inc/
│   ├── MontserratAlt1-Regular.woff
│   ├── navigation.php
│   ├── footer.php
│   ├── inc.php
├── style.css
├── index.php
├── kontakt.php
├── benutzer.php
├── buchdetail.php
├── buecher.php
├── login.php
├── passwort.php
├── kunden.php
└── logout.php

- index.php: Startseite der Anwendung.
- kontakt.php: Kontaktseite mit Google Maps Integration.
- benutzer.php: Adminseite zum hinzufügen neuer Benutzer/Admins.
- buchdetail.php: Detailansicht für ein einzelnes Buch.
- buecher.php: Übersicht der Bücher, Such- und Filteroptionen.
- login.php: Login-Seite für Admin-/Benutzeranmeldung.
- passwort.php: PHP-Skript zum Ändern des Passworts.
- kunden.php: Adminseite, übersicht der Kunden, Such- und Filteroptionen.
- logout.php: Logout-Funktion.
- style.css: CSS-Datei für das Styling der Webseite.
- inc/: Ordner für PHP-Includes wie Navigationsleiste, Fußzeile und Datenbankverbindung.
- Bilder/: Ordner mit benötigten Bildern und Icons.

## Installation

Klonen Sie das Repository:

git clone https://github.com/vioMaj/Buecherantiquariat.git

Navigieren Sie in das Projektverzeichnis:

cd bücherantiquariat
Öffnen Sie die index.html Datei in einem Webbrowser:

Verwendung -> siehe Projektstruktur

## Lizenz
Dieses Projekt ist unter der MIT-Lizenz lizenziert. Weitere Informationen finden Sie in der LICENSE Datei.

