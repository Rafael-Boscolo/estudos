## Entendendo Injeção de Dependência

Injeção de dependencia serve para estruturarmos uma classe e inserirmos outra como parametro e a classe a qual teve uma inserção por paramêtro, continua fucionando normalmente.

Pense em um sistema com mais de um tipo de db (banco de dados), podemos criar uma classe para cada banco com suas query's e somente mudar o objeto que vamos mudar em qual db estaremos trabalhando. 