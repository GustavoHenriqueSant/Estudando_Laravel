# Sobre o laravel

* Framework feita com a linguagem PHP  
* Utiliza a arquitetura de software MCV  
* POssui recursos muito interessantes que auxiliam o desenvolvimento de aplicações: artisan, migrations, blade, etc...  
* Estrutura de pasta simples, acelerando o desenovlimento e auxiliando a palicação MVC  

## Revisão arquitetura MVC:



## Rotas e views:

* Rotas são todas as localizações das páginas da aplicação, por exemplo: www.xxx.com/login, www.xxx.com/events, etc.  

* Imgino que usando o php para definir as rotas torna possível maiores volumes de páginas. A aplicação do Facebook por exemplo requer milhões de págnias de usuários, com as rotas o nome de cada usuário, ou dados do model podem ser pegos de maneira mais rápida do que carregando uma página física do servidor, e após carregar os dados dessa página.

* Imagino que ao definir um servidor para uma aplicação é preciso estabelecer as rotas do servidor, porém de maneira mais complicada. Imagino que ao colocar rotas do modo do Laravel, ele faça por debaixo dos panos esse trabalho.

* **Sintaxe:** '''
                Route::get('ULR_aqui', function(){
                    return view('Nome da view para essa página aqui');
                });
               '''

## Conhecendo blade:
* O blade é a template engine do Laravel, isto é, o blade fornece uma estrutura da qual podemos dar um template a view e torná-la mais dinâmica acessando mais facilmente o conroller da aplicação. (Não entendi essa afirmação, na minha visão não há sentido devido a arquitetura mvc **Tire essa dúvida!!!**)

* Pelo que vi o blade da uma abordagem a marcação HTML de codificação, consegue-se usar o html utilizando códigos blade sempre que é usada no começo de linha o caracter "@", exemplo: @if(10 > 2). Sua sintaxe é mt parecida com o PHP, e consegue-se um dinamismo pelo que parece superior ao que o PHP da, graças a outras vantagens que o prórpio Laravel proporciona. Porém, raramente há funcionalidade que não poderão ser feitas usando Blade.

* Sempre que uma variável é usada em alguma tag HTML, ele deve ser menciona entre {{}}, exemplo: {{$nome}}.

* Duas características da sintaxe importantes: comnetário em blade são feitos da seguinte forma: {{-- Comentário aqui --}}. E para funcionalidade que o blade n conseguir dar conta, pode-se usar PHP puro, colocando o cód entre @php --code @endphp.

## Adicionando arquivos estáticos à aplicação:
* O laravel proporciona uma maneira muito prática para trabalhar com arquivos estáticos. Todos esses recursos ficam na pasta Public, e tem acesso direto nas tags que trabalham com arquivos estáticos.

