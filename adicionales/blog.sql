-- Crear la base de datos
CREATE DATABASE blog_db;

-- Usar la base de datos
USE blog_db;

-- Crear la tabla posts
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    image VARCHAR(255),
    category VARCHAR(100)
);

-- Inserción de datos
INSERT INTO `posts` (`title`, `created_at`, `image`, `category`) VALUES
('Exploring the Future of AI', '2023-10-01 00:00:00', '1753169800_c544d742f6f4550dd132.jpeg', 'Tech'),
('Designing for Accessibility', '2023-09-29 00:00:00', '1753169846_8b093be505a24c049d97.jpg', 'Design'),
('The Rise of JavaScript Frameworks', '2023-09-28 00:00:00', '1753169886_5a8a0b0f02baee766940.jpeg', 'Development'),
('Effective Digital Marketing Strategies', '2023-09-27 00:00:00', '1753169945_9be1e4c8aae8834b9779.jpg', 'Marketing'),
('Entrepreneurship in the Modern Age', '2023-09-26 00:00:00', '1753169995_bfdea18abcfbfeb7936e.jpg', 'Business'),
('Balancing Work and Life', '2023-09-25 00:00:00', '1753170080_435c16751fbcd299b285.jpg', 'Lifestyle'),
('The Importance of Mental Health', '2023-09-24 00:00:00', '1753170127_7c1a3672c16776fcb5ea.jpg', 'Health'),
('Top Destinations for 2024', '2023-09-23 00:00:00', '1753242296_ffa6aabf576946365f4b.jpg', 'Travel');