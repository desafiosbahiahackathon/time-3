redesigned-couscous
========

Projeto criado na Hackathon Salvador 2017 - Respeita as Minas.

Motivação
----------
✿ Diante do controle das visitas da ronda por planilha excel, número de certidões resultantes por visitas, com grande quantidade de dados e filtros para traçar o perfil das assistidas, visualizamos a possibilidade de melhoria dos processos por meio de soluções em TI.  

✿ Otimizando o tempo e serviço prestado às mulheres em situação de violência no estado da Bahia, estaremos cooperando para uma sociedade melhor e mais igualitária.

Equipe
----------
- Adeilson Silva;
- Caroline Ferraz;
- Juliana Luz;
- Neyde Karen.

Descrição das Soluções
-------------
- No sistema há o cadastro de todos os campos necessários à produção e edição do Questionário de Acolhimento. Eles são armazenados no banco de dados, facilitando a busca e atualização destes.

- Há filtro das assistidas para estabelecimento de perfis e exportação de PDF/EXCEL.

- Em página específica, há filtro que disponibiliza as datas das últimas visitas, inclusive priorizando área de atuação, risco, e período sem visita por chamado. Isso otimizará a busca por assistidas em situação de risco que tenham acompanhamento mais esporádico e as que necessitem de maior acompanhamento.

- Há mapa de rota com as menores distâncias à percorrer pelas viaturas em sua visita diária. Possibilitará a redução do gasto de combustível, otimização do tempo gasto no percurso da ronda e talvez até aumente a quantidade de assistidas acompanhadas em cada ronda.


Tecnologias utilizadas
-------------

- [Laravel Framework](https://laravel.com/)
- [GainTime](https://gaintime.github.io/)

-------------

Dicas
-------------

Instalação
-------------
Após a clonagem do repositório:

1. `composer install`
2. `cp .env.example .env`
3. `php artisan key:generate`

Migrations e Seeds
--------------

1. Para criar o banco: `mysql < database/create.sql --user=seuusuario -p`
2. `php artisan migrate:refresh --seed`

Rodar a aplicação
--------------

1. `php artisan serve`
