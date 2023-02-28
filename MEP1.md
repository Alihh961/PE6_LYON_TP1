#Enoncé
##Tester si une date est valide

...
FONCTION estValide(var annee, var mois, var jour) : booléen

    SI annee <> 0 OU 1 <= mois <= 12 OU 1 < jour > 31 ALORS
        RETOURNER faux
    SINON SI mois = 2 ALORS
        SI ((annee % 4 = 0) ET (annee % 100 <> 0)) OU (annee % 400 = 0) ET (jour <= 29) ALORS
            RETOURNER vrai
        SINON
            RETOURNER faux
        FINSI
    SINON SI mois = 4 OU mois = 6 OU mois = 9 OU mois = 11 ALORS
        SI jour <= 30 ALORS
            RETOURNER vrai
        SINON
            RETOURNER faux
        FINSI
    SINON
        RETOURNER vrai
    FINSI

FIN FONCTION
...