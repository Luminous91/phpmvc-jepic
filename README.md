phpmvc-jepic
============

## Installera Jepic

1. Börja med att klona Jepic från Github git clone git://github.com/Luminous91/phpmvc-jepic.git
2. Gör sedan databasen skrivbar genom att ta cd phpmvc-jepic; chmod 777 site/data
3. Du måste även ändra i .htaccess för att allt ska fungera. RewriteBase...
4. Det sista som måste göras är att initialisera modulerna. Det gör du via module/install. Då skapas automatiskt två användare: root:root samt doe:doe

## Ändra utseende på Jepic

### Logo

### Titel
Om du vill ändra titlen ska du gå till site/config.php och gå längst ner. Där finns det en rad där det står 'header' => 'Jepic'. Ändra Jepic till det namnet du vill ha.

### Footer
Om du vill ändra texten i footern gör dy precis som när du ändrade titeln. Fast leta istället upp raden där det står 'footer' => '<p>Jepic &copy; by Lisa Korsar</p>' och ändra till vad du vill att det ska stå.

### Navigeringsmeny

### Ändra färg och typsnitt mm

## Skapa innehåll i Jepic

### Blogg

### Sida
