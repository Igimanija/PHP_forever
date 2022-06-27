# PHP_forever

Prva nedelja
Ime mentora: Nemanja Sevaljević

Prvo sam prosao kroz SASS.
Prvi setup sam uradio u direktoriumu "experiments"
Isprobao par stvari sa kojima sam se susreo i sacuvao primere
koje mislim da ce najvise da mi koriste za buduci rad

Napocetku citav setup oko SASS-a sam radio kroz terminal,
u toku trazenja odgovora zasto mi deo koda nije radio 
na internetu naleteo sam na video gde sam saznao da
postoji extenzija za VS code koja dosta automatizuje
proces setupovanja SASS-a i cini ga dosta laksim.

*popravio sam gresku bez velikog napora

Blade je stvar za koju nikad nisam cuo pre, i prvo sam pogledao 
par video da vidim gde se koristi i zasto...
Shvatio sam kako je koristan i zanimljiv alat i zajsta nisam 
naletio na jedan probelem dok sam radio sa njim
Moje misljenje je da dosta pomaze u radu jer cini kod mnogo vise
struktiran i time olaksava snalazenje i brzi rad... i pored toga
dosta olaksava radenje sa templatima

Na pocetku nisam imao predstavu da ce imati problem
da povezem js i css ali bas sam naleteo na taj problem 
Sa toliko directoriuma u laravel projectu prsto sam se izgubio
gde treba biti smesten i na koj nacin biti povezan
Nakon par pokusaja i par pretraga na internetu dosao sam do odgovora
bez vecih problema 

Na kraju je ostalo da spojim sve do sada u jedno
Prvo sam raio sa Bladom da napravim sturkturu stranice, 
podelio u sectione i napravio template 
Zatim sam setupovao SASS i uz pomoc njega bio je 
zavrsen vizualni deo sajta

Zatim sam hteo da ponovim deo lekcije od prosle nedelje pa sam ponovo
uradio migraciju i controller 
* dodoa sam opciju za brisanje itema u bazi

I za kraj je ostalo pisanje javascripta za koj bi uradio 
potrebni call na REST api u zavisnosti koje dugme je pretisnuto

Na vise primera na internetu sam naso da prave ovako nesto u formi
ja sam se ipak odlucio da ne koristim formu vez same inpute
Sve do samog kraja je teklo glatko gde sam naleteo na error:
"script.js:13 POST http://127.0.0.1:8000/api/todos 500 (Internal Server Error)"
Nisam imao puno srece u nalazenju greske i ali sam iskustvom iz postmana doso na ideju
da ne moram da saljem JSON ili JSON.strigfy vec da mogu da probam da saljem raw string
sto je popravilo gresku i time resio zadnju problem na ovom projektu