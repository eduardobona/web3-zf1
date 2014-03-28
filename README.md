web3-zf1
========

Projeto Base Blog para Web 3 em ZF1.

Sobre o Projeto Base (HTML/CSS)
---
O projeto base HTML está utilizando Bootstrap e a estrutura disponível em:
http://bootstrapzero.com/bootstrap-template/blog

O estilo CSS está utilizando um CSS customizado do Bootstrap disponível em:
http://bootstrapzero.com/bootstrap-template/superhero-theme

Os códigos foram retirados do site http://bootstrapzero.com/ 

Objetivos
---

Este repositório foi criado para servir de base para o conteúdo dado ao longo do ano de 2014 para turma de sistemas para internet do Cesumar.
O material é básico e servirá para CRUD nos primeiros projetos a serem desenvolvidos.

Escopo Negativo
---

Este projeto não servirá de base para outros projetos com complexidade média.
Muitos dos códigos estarão ainda em níveis básicos e sem aperfeiçoamento pois visa ser desenvolvido durante as aulas
Não estão sendo desenvolvidos testes

Instalação
---

- Adicione a pasta library/Zend com a biblioteca do Zend 1.12
- Crie uma base de dados com o nome blog (recomendado)
- Importe o arquivo scripts/blog.sql para este banco de dados mysql
- Caso necessário, edite o arquivo application/configs/application.ini para a conexão com o banco de dados

Recomendações para quem estiver usando WAMP
---

Para quem estiver usando WAMP (Cesumar usa este programa) alguns cuidados são necessários
- Certifique-se de que o módulo rewrite do apache esteja habilitado
- Certifique-se de que a configuração short_open_tag esteja habilitada
- Certifique-se de que a configuração DOCUMENT_ROOT do seu apache contenha o caminho para a pasta public deste projeto
