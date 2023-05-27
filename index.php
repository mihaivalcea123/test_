<?php
//1.Cum fac un fisier PHP?

// Se incepe cu tagul mai mic si semnul intrebarii urmat de cuvantul php si se inchide cu semnul intrebari si cu semnul mai mare

//2.Ce este o variabila?
// Este un container in care se depoziteaza valoarea variabilei 
//3.Cum adaug comentarii si care sunt modurile prin care pot adauga?
// Comentariile se adauga prin // comentariu pe o linie; # comentariu pe o linie; /* */ comentariu pe mai multe linii 
/* 4.Ce reprezinta simbolul ( . ) ? si la ce ne ajuta? 
Punctul reprezinta concatenarea a doua variabile sau mai multe, siruri
5.Dupa terminarea unei linii de cod ce se pune ?
La terminarea unei linii de cod se pune semnul punct si virgula
6.Ce este ghilimeaua dubla si la ce ne ajuta? dar simpla? care este diferenta? 
" se pot introduce stringuri" iar 'sir de caractere' se poate evidentia de exemplu "Invat 'PHP'"
7.Ce afiseaza urmatorul exercitiu : 
?>*/
$a = 20;
$b = 10;
echo print($a)+10;//Afiseaza 301
echo "</br>";
echo print($b) + print($a) + 10;//Afiseaza 30111
/*8.Ce afiseaza echo ? 
Afiseaza un mesaj , poate avea mai multi parametri
9.Ce afiseaza print ?  de da rezultatul respectiv? 
Print afiseaza valoarea 1 de tip boolean adica adevarat
10.Ce este un array indexat, multidimensional dar asociativ?
Un array indexat este un array  reprezentat printr-un index -numar care acest index incepe cu zero
Un arary multidimensional este un array care contine mai multe array-uri
Un array asociativ este un array care foloseste chei si valori cheie-valoare

11. Am array de mai jos, cum adaug o noua vloare?*/

	$lista = array(	"paine" , "lapte" , "oua"	);

	/*Vreau o noua valoare dupa oua, si anume ciocolata, doresc raspunsul doar, utilizand variabila de la array */

    $lista[3]="ciocolata";
    print_r($lista);
    /*
    12. Exercitiu : 

	$a = 10;
	$b = 30;
	
	echo pow($a,2) + pow($b,2); // ce o sa afiseze si de ce raspunsul x?
	
	echo ((10+2) / 2 + (3 * 10 ) / 0) * 0 ) // ce o sa afiseze? si cu ce incepem prima oara cand avem o astfel de ecuatie?
    */
    $a = 10;
	$b = 30;
	
	echo pow($a,2) + pow($b,2); // ce o sa afiseze si de ce raspunsul x? Afiseaza 1000 este ridicarea la putere face fucntia pow 
	echo "<br>";
	// echo ((10+2) / 2 + (3 * 10 ) / 0) * 0 ; // afiseaza ca nu este divizibil cu zero

    /*13. Ce este un float? 
    Float este un tip de date de tip virgula mobila
    14, Ce este un int?
    Int este un tip de date de tip integer
    15. Ce functie folosim pentru rontunjirea numarului 2.6 la 3?
    round()
    16. Ce functie folosim pentru verificarea numarului de caractere dintr-un sir?
	Functia strln()
    17. Ce face isset? - verifica daca o variabila are atribuita o valoare
    18. Ce face empty? - verifica daca valoarea unei variabile este goala
    19. Ce inseamna semnul < ? dar > ? - sunt prescurtarea de la <?php ?> sunt tag de deschidere si inchidere in php

    20. Ce inseamna != este operatorul de negare ? -  dar !==  ,? dar === indentare verifca daca valoarea operanzilor este aceasi cat si tipul de date al operanziilor , == - verifica daca operanzi au aceasi valoare dar pot avea tipuri diferite? dar si <=>  ? :)