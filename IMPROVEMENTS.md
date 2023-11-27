Bonjour, 

Beaucoup d'ameliorations envisageables:
    Reussir a mocker l'appel a l'API de withings afin de pouvoir tester le controller
    Reussir a afficher un bouton sur index.php pour lancer le processus d'authentification, a cause de mon incapacite a router mes URLS lors de la redirection, j'ai du me passer de l'UI, et laisser la page index.php par defaut de symfony.
    Reussir a debugger le seul pauvre test que j'ai reussi a creer. A cause de mon temps perdu au debut de l'epreuve, je n'ai meme plus le temps pour debugger et comprendre pourquoi le test dit recevoir null, quand je lui envoi un string.
    plutot qu'un 'forward' dans mon '/token' j'aurai aime un redirect, qui pointerait vers '/getmesures' mais je n'ai pas reussi a faire fonctionner '$this->generateUrl([...])'
    Recuperer le contenu des mesures de poids et les envoyer dans une array de mesure, ou un objet mesures contenant une array de mesures, j'ai manque de temps pour parse la reponse json de '/getmesures'

Je suis globalement tres decu de ce que je vous rend. Cette semaine j'avais pas mal travaille sur les API avec symfony, et j'avais fais un beau CRUD pour interragir avec des User en base, avec des tests pertinents pour les controllers, et je me retrouve a vous rendre une triste API avec 2 endpoints et aucun test fonctionnel.

Je vous remercie du temps que vous avez consenti a m'accorder.

Cordialement, 

Thibault JOUAN