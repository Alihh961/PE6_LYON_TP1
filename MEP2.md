DEBUT
...
Fonction estAvant(var annee1, var mois1, var jour1, var 
annee2, var mois2, var jour2) : entier

Si annee1 < annee2, retourner -1
Si annee1 > annee2, retourner 1
Si annee1 = annee2
    Si mois1 < mois2, retourner -1
    Si mois1 > mois2, retourner 1
    Si mois1 = mois2 
        Si jour1 < jour2, retourner -1
        Si jour1 > jour2, retourner 1
Sinon, retourner 0
...
FIN