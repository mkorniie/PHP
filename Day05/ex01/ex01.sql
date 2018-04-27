USE db_mkorniie
CREATE TABLE ft_table(
    id				INT											PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login			VARCHAR(8)									DEFAULT 'toto' NOT NULL,
    `group`			ENUM('staff', 'student', 'other')			NOT NULL,
    `creation_date`	DATE										NOT NULL
);

-- TO SEE: describe [db_name.]table_name;
-- TO delete: DROP TABLE table_name;