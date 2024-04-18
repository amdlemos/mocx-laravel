## Instruções

Após clonar o repositório é necessário instalar as dependências, siga os passos da [documentação](https://laravel.com/docs/11.x/sail#installing-composer-dependencies-for-existing-projects).
no meu caso eu precisei remover as aspas duplas no usuário:

```bash
docker run --rm \
    -u $(id-u):$(id -g) \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

Com as depenências do composer instaladas podemos executar as aplicações com o sail:

```bash
sail up -d
```

Agora podemos instalar as dependências do node:

```bash
sail npm install
```

O próximo passo é executar a migração:

```bash
sail php artisan migrate
```

Também precisamos executar o vite:

```bash
sail npm run dev
```

A aplicação estara rodando em `localhost:80`.
