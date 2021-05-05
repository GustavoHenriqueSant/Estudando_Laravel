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

* Pelo que vi o blade da uma abordagem a marcação HTML de codificação, consegue-se usar o html utilizando códigos blade sempre que é usada no começo de linha o caracter "@", exemplo: @if(10 > 2). Sua sintaxe é mt parecida com o PHP, e consegue-se um dinamismo pelo que parece superior ao que o PHP fornece, graças a outras vantagens que o prórpio Laravel proporciona. Porém, raramente, há funcionalidade que não poderão ser feitas usando Blade.

* Sempre que uma variável é usada em alguma tag HTML, ele deve ser menciona entre {{}}, exemplo: {{$nome}}.

* Duas características da sintaxe importantes: comnetário em blade são feitos da seguinte forma: {{-- Comentário aqui --}}. E para funcionalidade que o blade n conseguir dar conta, pode-se usar PHP puro, colocando o cód entre @php --code @endphp.

## Adicionando arquivos estáticos à aplicação:
* O laravel proporciona uma maneira muito prática para trabalhar com arquivos estáticos. Todos esses recursos ficam na pasta Public, e tem acesso direto nas tags que trabalham com arquivos estáticos.

## Layouts com Blade:
* A funcionalidade de criar um layout permite o reaproveitamento de código. Como isso é feito?
* Por exemplo: podemos utilizar o mesmo header e footer em todas as páginas da aplicação sem repetir código, proporcionando um código mais limpo, e concentra a atenção para o conteúdo da página.
* Além disso, proporciona também a possibilidade de criar sessões do site por meio do layout e também o title da página, e reaproveitar isso tudo em outras páginas.;
* Isso funciona através do método @yielt(). Em um folder que deve ser criado na sua pasta views chamado Layouts, poderá colocar os modelos de layout. Supomos que criamos o layout "main.blade.php";
* Nesse arquivo usará o método @yielt() sempre que implementr algo que vá reaproveitar como um layout. Podemos ter nele por exemplo o header e o footer como já exemplificado.
* O footer por exemplo fica dentro das tags <body> e </body>, antes de declarar o footer e qualquer outra coisa que fará parte do layout chama-se o método @yielt('content'). Imagino que é criado uma sessão por debaixo dos panos, com o index 'content'.
* Para usar esse layout em outra pág basta apenas declarar @extends('layouts.main'), dado o nome do arquivo que vc criou para implémentar o layout. Imagino que o extends informa a "pág pai", fazendo o Laravel executar aquela pág para ter acesso a session criada lá, e poder assim acessar o conteúdo na "pág filha".
* Para implementar o conteúdo próprio da "pág filha" basta apenas criar uma nova session: @section('content') //conteúdo... @endsection.

## Parâmetro nas rotas:
* Como imaginei ao ver rotas da para definir parâmetros dinamicamente a eles, evitando que tenha que ter páginas fixas para cada variabilidade da aplicação, onde para aplicações como o facebook seria impossível de ser feito.
* Ao definir as rotas pode-se estabelecer variáveis, nas rotas elas são cercadas por {}, por exemplo: get('/produtos/{id?}', function($id = 1){... . Nesse caso estamos definindo uma variável chamado id para podermos ter vários tipos de produtos, o caracter "?" define que é opcional dar valor à variável, com isso também definimos 1 como seu valor padrão.
* Imagino que para fazer isso é usada o método GET de requisição de dados, acho que há alguma maneira de definir esses dados a URL, e com o uso da funcionalidade que as Rotas do Laravel da poder manipular dados expecíficos usando o controller.

## Controllers:
