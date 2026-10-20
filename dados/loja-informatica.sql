-- Loja de informática: dados gerados com ChatGPT, inteiramente fictícios para aulas de PHP e MySQL.
-- Importação: phpMyAdmin > Importar > escolher este arquivo > Executar.
-- Cria e seleciona loja_informatica. Execute uma única vez em banco novo.
-- Não apaga nem substitui tabelas existentes: nomes em conflito causarão erro.
-- Charset: utf8mb4 / collation: utf8mb4_unicode_ci; tabelas InnoDB.
-- Senhas em texto puro EXCLUSIVAMENTE para a etapa inicial da aula.
-- Em etapa posterior, migrar para senha_hash e password_hash/password_verify.
-- Estoque representa o saldo atual. As vendas abaixo já estão consideradas.
-- Não há gatilhos de atualização automática de estoque.
-- Cada venda corresponde a um produto, com uma ou mais unidades.
-- criado_em registra o cadastro; data_venda registra quando a venda ocorreu.
-- categorias.descricao será adicionado em uma aula posterior.

SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE DATABASE IF NOT EXISTS loja_informatica
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE loja_informatica;

CREATE TABLE imagens (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    caminho_imagem VARCHAR(255) NOT NULL,
    alt VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE categorias (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE funcionarios (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    nome VARCHAR(60) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    senha VARCHAR(255) NOT NULL COMMENT 'Texto puro apenas para demonstração didática',
    imagem_id INT UNSIGNED NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_funcionarios_email (email),
    CONSTRAINT fk_funcionarios_imagens FOREIGN KEY (imagem_id)
        REFERENCES imagens (id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE produtos (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL(10,2) UNSIGNED NOT NULL,
    estoque INT UNSIGNED NOT NULL DEFAULT 0,
    categoria_id INT UNSIGNED NOT NULL,
    imagem_id INT UNSIGNED NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_produtos_categorias FOREIGN KEY (categoria_id)
        REFERENCES categorias (id),
    CONSTRAINT fk_produtos_imagens FOREIGN KEY (imagem_id)
        REFERENCES imagens (id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE vendas (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    funcionario_id INT UNSIGNED NOT NULL,
    produto_id INT UNSIGNED NOT NULL,
    quantidade INT UNSIGNED NOT NULL,
    data_venda DATETIME NOT NULL,
    preco_unitario DECIMAL(10,2) UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_vendas_funcionarios FOREIGN KEY (funcionario_id)
        REFERENCES funcionarios (id),
    CONSTRAINT fk_vendas_produtos FOREIGN KEY (produto_id)
        REFERENCES produtos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

START TRANSACTION;

INSERT INTO imagens (id, caminho_imagem, alt) VALUES
    (1, 'imagens/funcionarios/ana.jpg', 'Foto de Ana Souza'),
    (2, 'imagens/funcionarios/bruno.jpg', 'Foto de Bruno Oliveira'),
    (3, 'imagens/funcionarios/carla.jpg', 'Foto de Carla Santos'),
    (4, 'imagens/produtos/mouse.jpg', 'Mouse óptico USB'),
    (5, 'imagens/produtos/teclado.jpg', 'Teclado USB ABNT2'),
    (6, 'imagens/produtos/monitor.jpg', 'Monitor LED 24 polegadas'),
    (7, 'imagens/produtos/ssd.jpg', 'SSD SATA 480 GB'),
    (8, 'imagens/produtos/pen-drive.jpg', 'Pen drive 64 GB'),
    (9, 'imagens/produtos/hd-externo.jpg', 'HD externo 1 TB'),
    (10, 'imagens/produtos/memoria-ram.jpg', 'Memória RAM DDR4 8 GB'),
    (11, 'imagens/produtos/fonte.jpg', 'Fonte ATX 500 W');

INSERT INTO categorias (id, nome) VALUES
    (1, 'Periféricos'),
    (2, 'Armazenamento'),
    (3, 'Componentes');

INSERT INTO funcionarios (id, criado_em, nome, sobrenome, email, senha, imagem_id) VALUES
    (1, '2026-08-01 08:00:00', 'Ana', 'Souza', 'ana@example.com', 'ana123', 1),
    (2, '2026-08-01 08:10:00', 'Bruno', 'Oliveira', 'bruno@example.com', 'bruno123', 2),
    (3, '2026-08-03 08:00:00', 'Carla', 'Santos', 'carla@example.com', 'carla123', 3);

INSERT INTO produtos (id, nome, descricao, preco, estoque, categoria_id, imagem_id) VALUES
    (1, 'Mouse óptico USB', 'Mouse preto com três botões e conexão USB.', 39.90, 25, 1, 4),
    (2, 'Teclado USB ABNT2', 'Teclado preto com teclado numérico e padrão brasileiro ABNT2.', 89.90, 18, 1, 5),
    (3, 'Monitor LED 24 polegadas', 'Monitor Full HD com conexão HDMI e tela de 24 polegadas.', 799.90, 6, 1, 6),
    (4, 'SSD SATA 480 GB', 'Unidade SSD de 2,5 polegadas com capacidade de 480 GB.', 249.90, 12, 2, 7),
    (5, 'Pen drive 64 GB', 'Pen drive USB 3.0 com capacidade de 64 GB.', 49.90, 30, 2, 8),
    (6, 'HD externo 1 TB', 'Disco rígido externo USB 3.0 com capacidade de 1 TB.', 359.90, 0, 2, 9),
    (7, 'Memória RAM DDR4 8 GB', 'Módulo de memória DDR4 de 8 GB e frequência de 3200 MHz.', 159.90, 15, 3, 10),
    (8, 'Fonte ATX 500 W', 'Fonte para computador desktop com potência nominal de 500 W.', 229.90, 3, 3, 11);

INSERT INTO vendas (id, criado_em, funcionario_id, produto_id, quantidade, data_venda, preco_unitario) VALUES
    (1, '2026-09-02 09:05:00', 1, 1, 1, '2026-09-01 09:00:00', 29.90),
    (2, '2026-09-02 10:19:00', 2, 6, 1, '2026-09-02 10:17:00', 359.90),
    (3, '2026-09-04 11:36:00', 3, 3, 2, '2026-09-04 11:34:00', 799.90),
    (4, '2026-09-05 12:53:00', 1, 8, 1, '2026-09-05 12:51:00', 229.90),
    (5, '2026-09-07 13:10:00', 2, 5, 1, '2026-09-07 13:08:00', 49.90),
    (6, '2026-09-08 14:27:00', 3, 2, 1, '2026-09-08 14:25:00', 89.90),
    (7, '2026-09-10 15:44:00', 1, 7, 1, '2026-09-10 15:42:00', 149.90),
    (8, '2026-09-12 17:04:00', 2, 4, 1, '2026-09-11 16:59:00', 249.90),
    (9, '2026-09-13 09:18:00', 3, 2, 3, '2026-09-13 09:16:00', 89.90),
    (10, '2026-09-14 10:35:00', 1, 7, 1, '2026-09-14 10:33:00', 159.90),
    (11, '2026-09-16 11:52:00', 2, 4, 1, '2026-09-16 11:50:00', 249.90),
    (12, '2026-09-18 12:09:00', 3, 1, 1, '2026-09-18 12:07:00', 39.90),
    (13, '2026-09-19 13:26:00', 1, 6, 1, '2026-09-19 13:24:00', 349.90),
    (14, '2026-09-21 14:43:00', 2, 3, 1, '2026-09-21 14:41:00', 799.90),
    (15, '2026-09-23 16:03:00', 3, 8, 1, '2026-09-22 15:58:00', 229.90),
    (16, '2026-09-24 16:17:00', 1, 5, 1, '2026-09-24 16:15:00', 49.90),
    (17, '2026-09-25 09:34:00', 2, 3, 3, '2026-09-25 09:32:00', 799.90),
    (18, '2026-09-27 10:51:00', 3, 8, 1, '2026-09-27 10:49:00', 229.90),
    (19, '2026-09-28 11:08:00', 1, 5, 3, '2026-09-28 11:06:00', 39.90),
    (20, '2026-09-30 12:25:00', 2, 2, 2, '2026-09-30 12:23:00', 89.90),
    (21, '2026-10-01 13:42:00', 3, 7, 1, '2026-10-01 13:40:00', 159.90),
    (22, '2026-10-04 15:02:00', 1, 4, 1, '2026-10-03 14:57:00', 249.90),
    (23, '2026-10-05 15:16:00', 2, 1, 3, '2026-10-05 15:14:00', 39.90),
    (24, '2026-10-06 16:33:00', 3, 6, 2, '2026-10-06 16:31:00', 359.90),
    (25, '2026-10-08 09:50:00', 1, 4, 2, '2026-10-08 09:48:00', 239.90),
    (26, '2026-10-09 10:07:00', 2, 1, 1, '2026-10-09 10:05:00', 39.90),
    (27, '2026-10-11 11:24:00', 3, 6, 1, '2026-10-11 11:22:00', 359.90),
    (28, '2026-10-12 12:41:00', 1, 3, 2, '2026-10-12 12:39:00', 799.90),
    (29, '2026-10-15 14:01:00', 2, 8, 1, '2026-10-14 13:56:00', 229.90),
    (30, '2026-10-15 14:15:00', 3, 5, 1, '2026-10-15 14:13:00', 49.90),
    (31, '2026-10-17 15:32:00', 1, 2, 3, '2026-10-17 15:30:00', 79.90),
    (32, '2026-10-19 16:49:00', 2, 7, 1, '2026-10-19 16:47:00', 159.90);

COMMIT;

-- Conferência das quantidades importadas:
SELECT 'funcionarios' AS tabela, COUNT(*) AS quantidade FROM funcionarios
UNION ALL SELECT 'produtos', COUNT(*) FROM produtos
UNION ALL SELECT 'categorias', COUNT(*) FROM categorias
UNION ALL SELECT 'vendas', COUNT(*) FROM vendas
UNION ALL SELECT 'imagens', COUNT(*) FROM imagens;
