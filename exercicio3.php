<? php
print  " Salário incial: " ;
$ salarionicial  = ( float ) fgets ( STDIN );
print  " Porcentagem de aumento: " ;
$ porcentagemaumento  = ( float ) fgets ( STDIN );
$ porcentagemreal =  $ porcentagemaumento / 100 ;
$ aumentosalario =  $ salarionicial * $ porcentagemreal ;
$ salariofinal =  $ salarionicial + $ aumentosalario ;
print  " \ n O aumento foi de: $ aumentosalario reais \ n O salário final foi: $ salariofinal reais " ;