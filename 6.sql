CREATE DATABASE  IF NOT EXISTS `nurhadi`;
USE `nurhadi`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
);
ALTER TABLE `categories` ADD PRIMARY KEY (`id`);
ALTER TABLE `categories` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Nurhadi'),
(2, 'Aldo'),
(3, 'Dodi');

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
  
);
ALTER TABLE `hobbies` ADD PRIMARY KEY (`id`), ADD KEY `person_id` (`person_id`);
ALTER TABLE `hobbies` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `hobbies` ADD CONSTRAINT `hobbies_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `categories` (`id`);

INSERT INTO `hobbies` (`id`, `person_id`, `name`) VALUES
(1, 1, 'Bird watching'),
(2, 1, 'Martial arts'),
(3, 2, 'Hiking'),
(4, 1, 'Archery'),
(5, 2, 'Beekeeping'),
(6, 3, 'Book restoration');


SELECT categories.id, categories.name AS name, GROUP_CONCAT(hobbies.name) AS person_hobbies
FROM categories, hobbies WHERE hobbies.person_id = categories.id GROUP BY categories.id