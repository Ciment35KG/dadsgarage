<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DadsGarage 1982</title>
    <!-- Tu môžete pridať linky na CSS, JavaScript a ďalšie zdroje, ktoré budete potrebovať -->
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="top-bar">
        <div class="info">
            <div class="left-info">
              <span class="cervene">Miesto servisu:</span> <span class="uzke"> Novozámocká 4, Komjatice</span>  | <span class="cervene">Otváracie hodiny:</span><span class="uzke"> Po-Pia 8:00 - 17:00</span>
            </div>
            <div class="right-info">
              <span class="cervene">Telefón:</span><span class="uzke"> +421 907 391 235</span> |<span class="cervene"> E-mail:</span><span class="uzke"> Dads.Garage1982@gmail.com</span>
            </div>
        </div>
    </div>

    <img class="logo" src="logomale.jpg" alt="Logo servisu" >

<!-- Menu vpravo hore -->
  <div class="menu">
        <a href="index.php">Domov</a> | <a href="#sluzby">Služby</a> | <a href="#">Cenník</a> | <a href="#kontakt">Kontakt</a>
        | <a href="dvatyzdne.php">Končiace STK</a> | <a href="maturitnauka.php">STK-autá</a> | <a href="vlozenie.php">Vloženie</a>
    </div>
  <section id="sluzby">
    <div class="service-bar">
        <h1>Služby ktoré ponúkame</h1>
    </div>
    <!-- Kontajner s okienkami a textom -->
    <div class="window-container">
        <!-- Prvé okienko -->
        <div class="window" onclick="toggleWindow(this)">
            <div class="window-title">
                <h2>Diagnostika</h2>
            </div>
            <div class="window-text">
              <p>
                <strong>Diagnostika auta</strong> je proces, pri ktorom sa skúmajú rôzne systémy a komponenty v aute. Cieľom diagnostiky je zistiť, či v aute nie sú prítomné akékoľvek problémy alebo poruchy, ktoré by mohli ohroziť jeho bezpečnosť alebo výkonnosť.
              </p>
            </div>
        </div>

        <div class="window" onclick="toggleWindow(this)">
            <div class="window-title">
                <h2>STK</h2>
            </div>
            <div class="window-text">
              <p>
                <strong>Nemáte čas na STK? </strong> nevadí my vám vaše auto skontrolujeme poprípade opravíme nedostatky, skontrolujeme kvapaliny v prípade nedostatku dolejeme a zoberieme vozidlo na STK. 
              </p>
              <p>
                <strong>Kontrola pred STK: </strong> vaše auto skontrolujeme poprípade opravíme nedostatky, skontrolujeme kvapaliny v prípade nedostatku dolejeme a vy môžete v kľude na STK. 
              </p>
            </div>
        </div>

        <div class="window" onclick="toggleWindow(this)">
            <div class="window-title">
                <h2>Výmena Olejov a Filtrov</h2>
            </div>
            <div class="window-text">
            <strong>Výmena Olejov a Filtrov má stanovené určité intervaly ktoré by sa mali dodržiavať </strong>aby sa dosiahol čo najväčší výkon, najlepšie bezpečie a zároveň dlhá životnosť auta. Nižšie možno vidieť tieto intervaly avšak tieto hodnoty <strong>sú len informačné</strong> a ich skrátenie záleží len od vás.</strong> 
            <p>
            <strong>Olej:</strong> každých 15 000 kilometrov alebo raz ročne.
            </p>
            <p>
            <strong>Olej v prevodovke:</strong> každých 60 000 kilometrov.
            </p>
            <p>
            <strong>Olejový filter:</strong> každých 15 000 kilometrov alebo raz ročne.
            </p>
            <p>
            <strong>Kabínový filter:</strong> najneskôr po 30 000 km.
            </p>
            <p>
            <strong>Vzduchový filter:</strong> V po prejdení 20 000 km.
            </p>
            <p>
            <strong>Palivový filter:</strong> 20 000 až 40 000 kilometrov, alebo raz za 1 až 2 roky.
            </p>
            </div>
        </div>

        <div class="window" onclick="toggleWindow(this)">
            <div class="window-title">
                <h2>Pneuservis</h2>
            </div>
            <div class="window-text">
              <p>
                <strong>Defekty:</strong> Ak sa vám náhodou stane že dostanete defekt stačí priniesť koleso do servisu kde vám povedia či je ešte zachranitelné alebo už je na vyhodenie 
              </p>
              <p>
                <strong>Výmena kolies za nové:</strong> Pneumatiky by sa mali meniť každé 4 roky alebo v prípade že : Pneumatika má trhliny , neopravitelný defekt, opotrebovanie dezénu - pod 1,6mm .
              </p>
              <p>
                <strong>Prezúvanie na Zimné/Letné pneumatiky:</strong> Je individúalne, zákon o cestnej premávke stanovuje povinnosť používania zimných pneumatík v období od 15. novembra do 31. marca, pokiaľ je na vozovke súvislá snehová alebo ľadová vrstva. 
              </p>
              <p>
                <strong>Kam vyhodiť zlé pneumatiky? :</strong> Sme servis ktorý od vás bez akýchkoľvek problémov a poplatkov zoberie pneumatiky ktoré sa potom ekologicky spracujú. 
              </p>
            </div>
        </div>

        <div class="window" onclick="toggleWindow(this)">
            <div class="window-title">
                <h2>Servis náprav a brźd</h2>
            </div>
            <div class="window-text">
              <p>
                <strong>Kedy ísť na servis nápravy? :</strong> Ak pociťujete vibrácie vo vozidle, cinkanie, drnčanie alebo iné neobvyklé zvuky/pohyby auta (nedrží v zákrute, zodraná pneumatika z jednej strany viac ako z druhej (neznamená nutne že je to niečo s nápravou môže byť iba zlá geometria)).
              </p>
              <p>
                <strong>Kedy meniť brzdovú sústavu? :</strong> Záleži od štýlu jazdenia no platničky by mali všeobecne vydržať okolo 90 000 kilometrov no toto číslo sa môže znížiť ale na opak aj zvýšiť. Potrebnú výmenu môžeme pociťovať napríklad pri brzdení a to pišťaním bŕzd, ak sa nám zdá že to už málo brzdí alebo ak brzdíme a začne nám trásť volantom najmä keď brzdíme prudšie.   
              </p>
            </div>
        </div>
        <!-- Druhé okienko -->
        <div class="window" onclick="toggleWindow(this)">
            <div class="window-title">
                <h2>Opravy Motora</h2>
            </div>
            <div class="window-text">
              <p>
                <strong>Opravy motora :</strong>sa vykonávajú najčastejšie v prípade ak motor nadmerne spotrebúva motorový olej , má nepravidelný chod ktorý je  sprevádzaný poklesom výkonu alebo zistením mechanika ktorý diagnostikuje vozidlo.
              </p>
            </div>
        </div>

        <!-- Tretie okienko -->
        <div class="window" onclick="toggleWindow(this)">
          <div class="window-title">
                <h2>Opravy Prevodoviek</h2>
            </div>
            <div class="window-text">
              <p>
                <strong>Opravy prevodovky :</strong> sa vykonávaju najčastejšie v prípade ak prevodovka radí tvrdo/ neskoro, nefunguje nejaká rýchlosť , preklzuje (otáčky sa síce zdvíhajú ale rýchlosť nie), otáčky motora kolísajú.
              </p>
            </div>
        </div>

        <!-- Piate okienko -->
        <div class="window" onclick="toggleWindow(this)">
            <div class="window-title">
                <h2>Klampiarske práce</h2>
            </div>
            <div class="window-text">
              <p>
                <strong>Karosárske práce :</strong>sú potrebné ak je vozidlo po nehode a treba tieto časti vozidla opraviť  alebo vymeniť, tak isto sem patrí aj obnova drobných preliačin a odstránenie hrdze z auta.
              </p>
              <p>
                <strong>Lakovanie :</strong> pre diely inej farby.
              <p>
                <strong>Leštenie :</strong> sa vykonáva najmä aby sa z auta odstránili všetky škrábance poprípade zablednutá farba. 
              </p>
            </div>
        </div>
    </div>

    <script>
        function toggleWindow(element) {
            // Najdeme všechny okénka a skryjeme text u všech
            const windows = document.querySelectorAll(".window");
            windows.forEach((window) => {
                window.classList.remove("active");
            });

            // Zobrazíme text vedle kliknutého okénka
            element.classList.add("active");
        }
    </script>
</section>
<section id="kontakt">
<div class="container">
      <div class="content">
        <h1>Kontaktujte nás</h1>

        <p><strong>TEL:</strong> +421 907 391 235 </p>
        <p><strong>E-mail:</strong> Dads.Garage1982@gmail.com</p>

        <strong><p>Dadsgarage1982 s.r.o.</p></strong>
        <strong><p>Novozámocká 1473/4</p></strong>
        <strong><p>941 06 Komjatice</p></strong>

        <p><strong>IČO:</strong> 53908406</p>
        <p><strong>IČ DPH:</strong> SK2121524240</p>
        <p><strong>DIČ:</strong> 2121524240</p>
      </div>
        <div class="opening-hours">
            <p><strong>Otváracie hodiny</strong></p>
            <p>Pondelok - 8:00 - 17:00 hod.</p>
            <p>Utorok - 8:00 - 17:00 hod.</p>
            <p>Streda - 8:00 - 17:00 hod.</p>
            <p>Štvrtok - 8:00 - 17:00 hod.</p>
            <p>Piatok - 8:00 - 17:00 hod.</p>
            <p>Sobota - Zatvorené</p>
            <p>Nedeľa - Zatvorené</p>
        </div>

        <form method="post" action="send-email.php">
            <label for="name">Meno</label>
            <input type="text" name="name" required>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="phone">Telefónné číslo</label>
            <input type="tel" name="phone" required>

            <label for="message">Správa</label>
            <textarea name="message" required></textarea>

            <div class="gdpr-checkbox">
                    <input type="checkbox" name="gdpr" required>
                    <label for="gdpr">Súhlasím so spracovaním osobných údajov v súlade s nariadením GDPR o ochrane osobných údajov</label>
            </div>

            <input type="submit" value="ODOSLAŤ SPRÁVU">
        </form>
    </div>
</section>

</body>
</html>