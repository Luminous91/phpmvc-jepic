phpmvc-jepic
============

## Installera Jepic

1. Börja med att klona Jepic från Github git clone git://github.com/Luminous91/phpmvc-jepic.git
2. Gör sedan databasen skrivbar genom att ta cd phpmvc-jepic; chmod 777 site/data
3. Du måste även ändra i .htaccess för att allt ska fungera. Det är RewriteBase du ska ändra.
4. Det sista som måste göras är att initialisera modulerna. Det gör du via module/install. Då skapas automatiskt två användare: root:root samt doe:doe

## Ändra utseende på Jepic

### Logo
För att ändra din logo laddar du upp den i site/themes/mytheme/. Den ska vara 80x80 pixlar.

### Titel
Om du vill ändra titlen ska du gå till site/config.php och gå längst ner. Där finns det en rad där det står 'header' => 'Jepic'. Ändra Jepic till det namnet du vill ha.

### Footer
Om du vill ändra texten i footern gör du precis som när du ändrade titeln. Fast leta istället upp raden där det står 
'footer' => '<p>Jepic &copy; by Lisa Korsar</p>'. Ändra till vad du vill att det ska stå.

### Navigeringsmeny
Vill du ändra i navigeringsmenyn är även det i site/config.php, men leta upp raden där det står $je->config['menus'] = array(.

### Ändra färg och typsnitt mm
Om du vill ändra i stilmallen går du till site/themes/mytheme/style.css. 

## Skapa innehåll i Jepic

### Blogg

När du öppnar ramverket i browsern ska du lägga till /content/create i adressen för att komma till sidan 
där du kan skriva ett blogginlägg. Type måste vara post och Filter ska vara plain om du bara skriver vanlig text.

### Sida

Gör precis som du gjorde när du skapade ett blogginlägg, men Type måste vara page istället.
