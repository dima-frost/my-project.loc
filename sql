1)
CREATE TABLE `categories` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `categоries_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

2, 3)
CREATE TABLE `products` (
  `products_id` int(255) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(255) NOT NULL,
  `categories_id` int(255) NOT NULL,
  PRIMARY KEY (`products_id`),
  KEY `categories_id` (`categories_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

4)
INSERT INTO `categories` (`categоries_name`)
VALUES ('Алкогольные напитки'), ('Безалкогольные напитки');

INSERT INTO `products` (`products_id`, `products_name`, `categories_id`) VALUES
(1,	'Johnnie Walker',	1),
(2,	'Chivas Regal',	1),
(3,	'Ballantine’s',	1),
(4,	'The Macallan',	1),
(5,	'Black and Whit\'e',	1),
(6,	'Jameson',	1),
(7,	'Coca-cola',	2),
(8,	'Pepsi',	2),
(9,	'Schweppes',	2),
(10, 'Яблочный сок',	2);

5)
SELECT * 
FROM `categories`
LIMIT 20;


6)
SELECT `products_name` 
FROM `products` 
WHERE `categories_id` = '1' 
LIMIT 20

7)
SELECT products.products_name, categоries_name
FROM `products`
LEFT JOIN `categories`
ON products.categories_id=categories.id;

8)
SELECT categоries_name, COUNT(products.products_name)
FROM `categories`
LEFT JOIN `products`
ON categories.id=products.categories_id
GROUP BY categоries_name;

