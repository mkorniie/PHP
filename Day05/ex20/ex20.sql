SELECT db_mkorniie.film.id_genre, db_mkorniie.genre.name AS name_genre,  db_mkorniie.distrib.id_distrib, db_mkorniie.distrib.name AS name_distrib, db_mkorniie.film.title AS title_film
FROM db_mkorniie.film
INNER JOIN db_mkorniie.genre ON film.id_genre = genre.id_genre
INNER JOIN db_mkorniie.distrib ON film.id_distrib = distrib.id_distrib
WHERE (db_mkorniie.film.id_genre >=4 AND db_mkorniie.film.id_genre <=8);
