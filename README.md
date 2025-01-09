# MVC
Model View Controller

É um padão de arquitetura utilizado como forma de estruturação  de código, que gera uma interface para o usúario. A ideia central é 
separar a sua aplicação em três componentes lógicos;

### Controller
É responsavel por receber os dados do usuário e decidir o que fazer com eles, ele vai processar requisições, transformar os dados que vierem por GETs e POSTs, e enviar para o model.

### Model 
Aqui fica a parte da aplicação que lida com a lógica das suas entidades, os códigos, como funciona, o dóminio do problema ou as Regras de négocio do sistema.

### View
Camada responsável pela exibição da inteface gráfica e a interação com o usuário. Recebe os dados do controller depois dele ter passado na Model assim já sabendo o que deve exibir.