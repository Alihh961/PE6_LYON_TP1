## Enoncé 3


...
FONCTION afficherDurée(var secondes)
    heures = 0
    minutes = 0
    result = ""

    SI secondes >= 3600 ALORS
        heures = ENTIER(secondes / 3600)
        secondes = secondes MOD 3600
        result += heures + " h"
        SI heures > 1 ALORS
        FINSI
    FINSI

    SI secondes >= 60 ALORS
        minutes = ENTIER(secondes / 60)
        secondes = secondes MOD 60
        result += minutes + " min"
        SI minutes > 1 ALORS
        FINSI
    FINSI

    SI secondes != 0 OU result == "" ALORS
        result += secondes + " sec"
        SI secondes > 1 ALORS
        FINSI
    FINSI

    AFFICHER result
FINPROCEDURE
