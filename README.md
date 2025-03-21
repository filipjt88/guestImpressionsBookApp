# guestImpressionsBookApp
guestImpressionsBookApp/
├── 📂 core/ (za konfiguraciju i konekciju sa bazom)
│ ├── config.php
│ ├── db.php
│
├── 📂 views/ (frontend - HTML, CSS, Bootstrap, forme, prikaz podataka)
│ ├── index.view.php (glavna stranica - prikaz svih poruka)
│ ├── login.view.php (stranica za prijavu)
│ ├── register.view.php (stranica za registraciju)
│
├── 📂 actions/ (PHP fajlovi za procesiranje podataka)
│ ├── register.php (obrada registracije)
│ ├── login.php (obrada prijave)
│ ├── logout.php (odjava korisnika)
│ ├── add_message.php (dodavanje poruke u bazu)
│ ├── like_message.php (lajkovanje poruke pomoću AJAX-a)
│
├── style.css (custom stilizacija - opcionalno)
├── .htaccess (za routing ako želimo lepe URL-ove)