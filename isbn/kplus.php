<?php

/**
 * rdsURL = "https://rds-blb.ibs-bw.de/solr/select?q=" + suchString + '&wt=json';http://kvk.bibliothek.kit.edu/hylib-bin/kvk/nph-kvk2.cgi?maske=kvk-json&input-charset=utf-8&title=Bibliotheksportal+Karlsruhe+%3A+Ergebnisanzeige&head=http%3A%2F%2Fwww.bibliotheksportal-karlsruhe.de%2Fasset%2Fhtml%2Fhead.html&header=http%3A%2F%2Fwww.bibliotheksportal-karlsruhe.de%2Fasset%2Fhtml%2Fheader.html&footer=http%3A%2F%2Fwww.bibliotheksportal-karlsruhe.de%2Fasset%2Fhtml%2Ffooter.html&css=none&spacer=http%3A%2F%2Fwww.bibliotheksportal-karlsruhe.de%2Fasset%2Fhtml%2Fspacer.html&target=_blank&olix_returnTo=http%3A%2F%2Fbibliotheksportal-karlsruhe.de%2F&ALL=477711812&TI=&AU=&CI=&ST=&PY=&SB=&SS=&PU=&kataloge=BLB_OPAC&kataloge=STABIKA&kataloge=KIT&kataloge=BERUFSAKADEMIE_KA&kataloge=HSMUSIK_KA&kataloge=HSB&kataloge=MERKUR_KA&kataloge=AKBILDKUENSTE_KA&kataloge=BGH_OPAC&kataloge=BVG_OPAC&kataloge=KUNST_BADLAMUSEUM&kataloge=BISMARCK_KA&kataloge=EV_OBERKIRCHENRAT&kataloge=LBB&kataloge=MELANCHTON&kataloge=SCHEFFEL&kataloge=RELPAED_INST&kataloge=KUNST_KUHAKA&kataloge=ZKM&ref=direct&client-js=yes&inhibit_redirect=1
 */

$isbn = trim($_GET['isbn']);
$ppn = trim($_GET['ppn']);

$searchTerm = (!empty($isbn)) ? $isbn : $ppn;

$rdsURL = "https://rds-blb.ibs-bw.de/solr/select?q=" . $searchTerm . "&wt=json";
$fileContent = file_get_contents($rdsURL);

echo $fileContent;
exit;
