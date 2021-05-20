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
* O Controllers são parte fundamental de toda a palicação em Laravel, geralmente condensam a maior parte da lógica. 
* Tem o papel de enviar e receber respostas do banco de dados. E também de receber e enviar alguma resposta para as views.
* Os Controller podem ser criados via Artisan, economizando tempo.
* É comum também redirecionar ou retornar uma view por um Controller. Por exemplo do logoff.
* O controller é reponsável pela lógica da aplicação, ou seja tudo envolvido com a manipulação dos dados ficam neles. Os códigos colocados nas rotas anteriormente tds ficarão nos controleers.
* Um Controller pode ser criado com o seguinte comando "php artisan make:controller *controller_name*".
* Para informamos ao arquivos de rotas que estamos usando um Controller expecíficos, declaramos "use App\Http\Controllers\EventController;".
* A lógica do controller é feito com funções, cada função é expevificada para uma view. Supomos que para a view Welcome estamos usando a função "index(){}" no controller para a sua lógica, definiremos no arquivo de rotas "Route::get('/', [EventController::class, 'index']);".
* Tudo funciona como antes, ao definirmos uma rota dizemos para qual view estamos querendo encaminhar, podemos usa-las na marcação HTML. Na lógica (controller) retornamos a view desejada.

## Conexão do Laravel com Banco de Dados:
* A conexão do Laravel com o banco de dados é configurada pelo arquivo .env, nele temos informações como o nome do banco de dados, endreço, nome de usuário, senhta, etc. Não entendi ainda como o arquivo .env ajuda, a n ser na segurança.
* O Laravel utiliza  o *ORM* (Object-Relational Mapping) chamado *Eloquent*. Veremos mais detalhes futuramente.
* E para a ciração e remoção de tabelas, criação e remoção de parâmetros, usa-se as *migrations*. Veremos mais detalhes futuramente.
* Não entendi muito dessa aula, muita coisa rasa, se quiser entender isso terá q ir para a documentação.
* Após expecificar qual banco de dados irá trabalhar no .env, tabelas default serão criadas ao executar o comando "php artisan migrate".

## Introdução a Migrations:
* As migrations são como ferramentas de versionamento para banco de dados. Ou seja podemos retroceder operações feitas no banco de dados, tanto como adição ou remoção de dados, criação de tabelas, adição ou remoção de parâmetros, etc.
* Não são isso, mas tbm podemos manipular nosso banco de dados, como zera-lo por exemplo.
* Podemos verificar as migrations com o comando "php artisan migrate:status".
* Pelo que entendi as migrations são classes que herdam a classe Migrate. É uma criado uma classe migrate para cada tabela desejada no banco de dados. Essa classe Migrate possui uma lógica para criar a tabela, com seus campos, e também de apaga-la.
* Atualmente não consigo imaginar como isso é feito, se ficar curioso procure depois.
* Alguns comandos básico do migration são: "php artisan migrate" - cria na primeira vez as tabelas iniciais com todos os seus migrates, "php artisan migrate:fresh" - para atualizar suas tabelas caso tenha criado uma nova migrate ou atualizou uma delas, "php artisan migrate:status" - para saber o que foi executado das migration.

