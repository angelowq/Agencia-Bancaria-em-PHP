# Agência Bancária - PGDS
- Trabalho feito pelos alunos: Gabriel, Samir, Danielly e Pedro.

## Objetivo
- Criar um simples sistema para uma agência bancária para colocarmos em prática o que aprendemos na disciplina de prática de programação. 


## Como rodar localmente
1. Construa e suba os containers (recomendado):

```bash
docker compose up --build -d
```

2. Abra no navegador:
- Aplicação PHP: http://localhost:8000
- phpMyAdmin: http://localhost:8080 (host: `db`, usuário: `agencia_user`, senha: `secret`)

Credenciais (Caso precise)
- MySQL root: `rootpassword`
- Banco: `agencia`
- Usuário: `agencia_user`
- Senha: `secret`

## Comandos SQL para criar as tabelas
```
CREATE TABLE IF NOT EXISTS `dadoscliente` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `nome` VARCHAR(150) NOT NULL, `cpf` VARCHAR(20) NOT NULL, `endereco` VARCHAR(255) DEFAULT NULL, `numeroconta` INT UNSIGNED NOT NULL, `numeroagencia` VARCHAR(50) DEFAULT NULL, `saldo` DECIMAL(12,2) NOT NULL DEFAULT 0.00, PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci; 
```

# Usando o sistema
- acesse o arquivo no caminho: ´/dadoscliente.php´