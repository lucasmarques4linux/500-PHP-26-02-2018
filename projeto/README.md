# Criar banco de dados

```(code)
sudo su
su postgres
psql
CREATE DATABASE projeto;
ALTER DATABASE projeto OWNER TO meu_usuario;
\q
psql -h localhost -U meu_usuario projeto < bd.sql
```