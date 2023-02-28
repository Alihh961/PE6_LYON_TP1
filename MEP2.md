# Enoncé 2
## FONCTION estAvant(var annee1, var mois1, var jour1, var annee2, var mois2, var jour2) : entier

...

FONCTION memeDate(annee1 , mois1 , jour1, annee2 , mois2 , jour2) :boolean
    DEBUT
        SI annee1 = annee2
        SI mois1 = mois2 
        SI jour1 = jour2
        retourner PAREIL
    FIN

FONCTION apresDATE(annee1 , mois1 , jour1, annee2 , mois2 , jour2) :boolean
    DEBUT
        SI ( annee1 > annee2)
        OU ( annee1 = annee2
        ET mois1 > mois2)
        OU ( annee1 = annee2 
        ET mois1 = mois2 
        ET jour1 > jour2)
        Retourne APRES
        FIN SI
    FIN



Fonction estAvant(var annee1, var mois1, var jour1, var 
annee2, var mois2, var jour2) : entier
DEBUT
    Declare AVANT <- -1
    Declare PAREIL <- 0
    Declare APRES <- 1

    #Meme Dates
    memeDate(annee1 , mois1 , jour1, annee2 , mois2 , jour2)

    #Apres Date2
    Fonction estAvant(var annee1, var mois1, var jour1, var annee2, var mois2, var jour2) : entier



    
   
FIN
...
