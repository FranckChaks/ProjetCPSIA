// alert("Hello world");    Affiche une alerte              ///////////!\Débuguer avec console.log();

////////////////////////

// var nom;         Boîte de dialogue avec prompt (possible saisie)
// nom = prompt("Veuillez saisir un nom");
// alert(nom);

////////////////////////

// var res;         Boîte de dialogue avec confirm
// res = confirm("Aimez-vous le JS ?");
// alert(res);

////////////////////////

// var res;         Déclaration de variable (bool, string, object, function, number, undefined)

////////////////////////

// var a = parseInt(prompt("Saisir a"));
// var b = parseInt(prompt("Saisir b"));
// // var b = prompt("Saisir b");           //Le prompt renvoie un string -> la var res ne fait pas l'addition mais la concaténation, préciser le type avec parseInt
// var res = a + b;
// var res2 = "" + a + b;                   // Convertit en string et concatène les variables au lieu de les additionnées
// alert("Le résultat est: " + res);        //Le + concatène et sert d'operateur d'addition
// alert("Le résultat est: " + res2);       //Le + concatène et sert d'operateur d'addition

////////////////////////Z

// var age = 20;           //Condition en JS (similaire aux autres langages)
// if(age < 18){
//     alert("Accès non autorisé petit");
// }else alert("Bienvenue mon sauce");

////////////////////////

// var tab = ["test", "again", "anotherone"];
// tab.push("Marty");                           //Ajoute dans le tableau à la suite
// tab.unshift("Marty");                        //Ajoute dans le tableau en première position
// console.log(tab);                            //Affiche le résultat de tab dans la console du navigateur(F12)
//
// for(var i=0; i < tab.length; i++){
//     alert(tab[i]);
// }

////////////////////////

// function  Hello(nom) {      //Fonction en JS
//     alert("Bonjour " + nom);
// }
// Hello("Monsieur");

////////////////////////

// var Hello2 = function (nom) {      //Fonction anonyme (stockée dans une variable) en JS
//     alert("Bonjour " + nom);
// }
// Hello2("Madame");

////////////////////////

// (function(tmp){                             //Autre type de fonction
//     var nom = prompt("Saisir un nom", tmp);
//     alert(nom);
// })("Franck");   //On ajoute des () à la fin de la fonction pour l'appeler //On peut remplir les () pour mettre une valeur au prompt appelé

////////////////////////

// var tmp = "Jotaro";
// (function(){                             //On peut accéder à une variable déclarée en dehors de la fonction dans ce cas
//     var tmp = "toto";
//     var nom = prompt("Saisir un nom", tmp);
//     alert(nom);
// })();
// alert(tmp);

////////////////////////

// var obj = {
//     nom: "Chaks",
//     prenom: "Franck",
//     age: 23,
//     presentation:function(){
//         alert("Bonjour " + this.prenom + " " + this.nom);
//     },
// };
// alert(obj.prenom); //Appeler un attribut de l'objet
// console.log(obj);
// obj.presentation();

// var attribut = prompt("Saisissez un attribut: ");
// alert(obj[attribut]);

////////////////////////

// var objet = {
//     nom: "Chaks",
//     prenom: "Franck",
//     age: 23,
//     test:function(){
//         var champ = prompt("Saisissez un champ");
//         if(champ === "age") alert(this.age);
//         if(champ === "nom") alert(this.nom);
//         if(champ === "prenom") alert(this.prenom);
//     }
// };
//
// objet.test();

////////////////////////

// var Eleve = function(nom, prenom){
//     this.nom = nom;
//     this.prenom = prenom;
//     this.note = [];
//     this.bonjour = function(){      //Pour dire que cette fonction est utilisée dans la class on utilise le this
//         alert("Bonjour " + this.prenom + " " + this.nom);
//     }
// };
//
// Eleve.prototype.addNote = function(note){       //Création prototype
//     this.note.push(note);
// };
//
// Eleve.prototype.moyenne = function(){
//     if(this.notes.length == 0) return -1;
//     var total = 0;
//     for(var i=0; i < this.notes.length; i++){
//         total += this.notes[i];
//     }
//     return total/this.notes.length;
// };
// var e1 = new Eleve("Chaks", "Franck");
// var e2 = new Eleve("Fooka", "Muther");
//
// e1.addNote(13);
// e1.addNote(18);
// console.log(e1);
//
// Professeur.prototype = Object.create(Eleve.prototype);  //Sorte d'héritage-> le prototype Professeur hérite des prototypes d'Eleve <=> ici addNote et moyenne

////////////////////////

// var titre = prompt("Saisir un nouveau titre");       //Change le titre de l'élément ayant l'id titre
// var elem = document.getElementById("titre");
// elem.innerHTML = titre;                              //Modifie le contenu HTML de l'élément
//
// console.log(document);

////////////////////////

// var elem = document.getElementsByTagName("h1");     //Cherche tous les élements h1
// for(var i =0; i< elem.length; i++){                 //elem est un tableau
//     // elem[i].innerHTML = "Titre " + (i+1);
// }
//
// var elem = document.getElementsByClassName("para"); //Cherche tous les élements avec la class "para"
// for(var i =0; i< elem.length; i++){                 //elem est un tableau
//     // elem[i].innerHTML = "Titre " + (i+1);
// }
//
var liste = document.getElementById("liste");          //Récupere la liste avec l'id liste (ul)
var items = liste.children;                            //Récupère les "enfants" de l'élément parent sélectionné
// console.log(items);
// var premier = liste.firstElementChild;              //Récupère le premier élément de la liste
// var deuxieme = premier.nextElementSibling;          //Récupère l'élément suivant de "premier" ayant la même balise
//
// var li = document.createElement("li");              //Crée un élément li
// li.setAttribute("id", "li-5");                      //Ajoute un id à l'élément li
// li.setAttribute("class","classe1 classe2");         //Ajoute une class à l'élément li
// li.innerHTML = '<a href="#">Mon lien</a>';
//
// liste.appendChild(li);                              //Ajoute l'élément crée dans l'élément ciblé à la fin(ici ul)
// liste.insertBefore(li, premier);                    //Ajoute l'élément crée dans liste (cas présenté) avant l'élément ciblé (ici premier)
//
// liste.removeChild(premier);                         //Supprimer l'élément "premier"

// liste.addEventListener("click",function(){              //Ajoute un évènement sur la liste ici quand on clique sur un élément de la liste une alerte affiche "coucou"
//     alert("Coucou");
// });

// for(i = 0; i < items.length; i++){                      //Comme item n'est pas un element mais une HTML collection,
//     items[i].addEventListener("click", function(e){     //on ne peut pas drectement mettre un addEventListener, il faut passer par un tabelau
//         alert(e.target.innerHTML);                      //Récupère le texte compris entre les balises li du champ cliqué (ne pas oublier le "e" dans fonction => callback)
//         alert(this.innerHTML);                          //Similaire à la ligne d'au-dessus
//     })
// }

////////////////////////

for(var i = 0; i < items.length; i++){                  //Suppression
    items[i].addEventListener("click", function(){
        var res;
        var elemli = this.innerHTML;
        res = confirm("Voulez vous supprimer "+elemli+ " ?");

        if(res === true){
            liste.removeChild(this);
        }
    })
}

btn.addEventListener("click",function(){        //Ajout élément
    var txtelem = prompt("Nom de l'élément ?");

    if(txtelem.trim().length == 0) return;      //Si la chaine est vide ou si elle ne contient que des espaces on sort de la fonction
    var li = document.createElement("li");      //"trim" supprime les espaces avant et apres la chaîne
    li.innerHTML = txtelem;
    liste.appendChild(li);
});


selectbtn.addEventListener("change", function(){        //Modification couleur
        btn.className = "btn " + this.value;
});

////////////////////////

var tbelem = document.getElementById("tbelem");          //Cocher checkbox en cliquant sur la ligne
// var tbelem = document.querySelectorAll(".tbelem");    //Permet de cibler pas seulement par id (#id)  mais par class (.class) et attribut
var tr = tbelem.children;

for(var j = 0; j < tr.length; j++){
    tr[j].addEventListener("click", function(){
       
        var ligne = this;
        var td = ligne.firstElementChild;
        var chkbx = td.firstElementChild;
        chkbx.addEventListener("click", function (e) {
           e.stopPropagation();                         //Permet d'activer le check en cliquant sur la checkbox aussi
        });
        if(chkbx.checked == false)
            chkbx.checked = true;
        else
            chkbx.checked = false;

        console.log(chkbx);
    })
}

///////////////////////////

const TVA = 20;         //Constante, ne peut être modifiée dans le code

///////////////////////////         -->SYNTAXE FONCTION<--

// var Bonjour = function(nom){
//     alert("Bonjour " + nom);
// };

// var Bonjour = (nom)=>{        //Autre syntaxe pour les fonctions
//     alert("Bonjour " + nom);
// };
//
// Bonjour("test");

///////////////////////////         -->SYNTAXE STRING<--

// var nom = test; //On ne peut pas faire de retour à la ligne quand on a ouvert une string,
// let exemple = `Bonjour
//                tout le monde et ${nom}`; //Pour régler ce problème on utilise `` (altgr+7) et on peut insérer une variable sous
                                         //la forme ${variable}

///////////////////////////         -->SYNTAXE OBJET<--

// var a = "OK";
// var b = "Pas OK";
//
// let obj = {                 //Autre manière d'écrire un objet si les variables ont le même nom que les attributs de l'objet
//     a,                      //
//     b,
//     Bonjour(nom){               //Autre manière d'écrire une fonction pour que l'élément this soit bien ciblé
//         console.log(this);
//         alert("Bonjour "+ nom);
//     }
// };

///////////////////////////     Classes en JS

class Animal{
    constructor(){
        this.pattes = 4;        //element
    }

    cri(message){               //prototype
        console.log(message);
    }
}

class Araignee extends Animal{
    constructor(){
        super();
        this.pattes = 8;
    }

}

let ani = new Araignee();
ani.cri("hiiiiiiiiiiiiiiiiiiii");
console.log(ani);

                            
// var i = 5;
// setTimeout(function(){
//     i = i*2;
//     console.log(i);
// },3000);

alert(i);
var j = 5;
var ChangerJ = ()=>{
    var promise = new Promise((resolve, reject)=>{      //Effectue une action à "retardement" et evite que toutes les lignes se resolvent en même temps
        SetTimeOut(()=>{
        j *= 3;
        resolve(true);      //On applique le paramètre true pour dire que la fonction est bien effectuée et qu'on peut passer à l'instruction suivante
    },3000);
    });
    return promise;
};

var ChangerJ5 = ()=>{
    var promise = new Promise((resolve, reject)=>{      //Effectue une action à "retardement" et evite que toutes les lignes se resolvent en même temps
        SetTimeOut(()=>{
        j *= 5;
        resolve(true);      //On applique le paramètre true pour dire que la fonction est bien effectuée et qu'on peut passer à l'instruction suivante
    },5000);
});
    return promise;
};

var prom1 = ChangerJ();
var prom2 = ChangerJ5();
promise.all([prom1, prom2]).then(()=>{  //Lance en même temps les fonctions passées en paramètres

});


// ChangerJ().then(()=>{       //then = applique le code suivant quand la fonction est bien effectuée
//     alert(j);
// });


///////////////////////////JQUERY

// En JS :
// document.getElementById('test');

//En JQuery:
// $('#test')