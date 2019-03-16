<? php
print  " Quantidade de Km percorridos: " ;
$ kmpercorridos  = ( float ) fgets ( STDIN );
print  "Este mês foi alugado: " ;
$ diascarroalugados  = ( float ) fgets ( STDIN );
$ aluguelpordia =  $ diascarroalugados * 60 ;
$ aluguelporkm =  $ kmpercorridos * 0,15 ;
$ precototal =  $ aluguelpordia + $ aluguelporkm ;
print  " \ n O Preço total de um Pagar POR km: $ aluguelporkm reais \ n O Preço total de um dia Pagar por: $ aluguelpordia reais \ n O Preço total de um Pagar: $ precototal reais " ;
© 2019 GitHub , Inc.