<? php
print  " Preço incial da marcedoria: " ;
$ precoinicial  = ( float ) fgets ( STDIN );
print  " Porcentagem de desconto: " ;
$ porcentagemdesconto  = ( float ) fgets ( STDIN );
$ desconto =  $ cemdesconto / 100 ;
$ desocupado =  $ desconto * $ precoinicial ;
$ precofinal =  $ precoinicial - $ desocupado ;
print  " \ n O desconto foi de: $ descontoreal reais \ n O preço final é de: $ precofinal reais " ;