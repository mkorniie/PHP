USE db_mkorniie

ALTER TABLE user_card
ADD `group` ENUM('other') DEFAULT 'other';
INSERT INTO ft_table (login, `creation_date`, `group`)
	SELECT last_name, birthdate, `group`
	FROM user_card
	WHERE last_name LIKE '%a%' AND LENGTH(last_name) < 9
	ORDER BY last_name ASC LIMIT 10;

ALTER TABLE user_card
DROP COLUMN `group`;