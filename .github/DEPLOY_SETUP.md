# Configuração do Deploy Automático

Este projeto está configurado para fazer deploy automático no servidor Hostinger após push na branch `main`.

## Configuração dos Secrets no GitHub

Para que o deploy automático funcione, você precisa configurar os seguintes secrets no repositório GitHub ou na organização:

1. Acesse: https://github.com/Nascidus/lpanjo/settings/secrets/actions
2. Ou configure na organização GitHub
3. Adicione os seguintes secrets:

### SSH_HOST
- Valor: `185.211.7.156`

### SSH_PORT
- Valor: `65002`

### SSH_USER
- Valor: `u451023057`

### SSH_KEY
- Valor: Conteúdo da chave SSH privada (hostinger_id_ed25519)

## Como Funciona

1. Quando um push é feito na branch `main`, o GitHub Actions é acionado
2. O workflow faz SSH no servidor Hostinger
3. Executa `git pull` para atualizar o código
4. Instala dependências do Composer (produção)
5. Limpa e otimiza os caches do Laravel
6. A aplicação está atualizada e pronta para uso

## Verificando o Deploy

Você pode acompanhar os deploys em:
https://github.com/Nascidus/lpanjo/actions
