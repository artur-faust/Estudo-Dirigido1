<? php
print  " Quantidade de cigarros fumados por dia: " ;
$ cigarrosfumados  = ( int ) fgets ( STDIN );
print  " Anos que você fumou: " ;
$ anosfumando  = ( int ) fgets ( STDIN );
$ minutosdevidaperdidos = ( $ cigarrosfumados + ( $ anosfumando * 365 )) * 10 ;
$ diasdevidaperdidos =  $ minutosdevidaperdidos / 1440 ; / * 1440 são quantos minutos há em um dia * /
$ diasdevidaperdidos =  round ( $ diasdevidaperdidos );
print  " \ n A Quantidade de Minutos perdidos de vida é de: $ minutosdevidaperdidos Minutos \ n A Quantidade de dias perdidos de vida é de: $ diasdevidaperdidos dias " ;
