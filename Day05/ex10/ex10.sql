SELECT title AS Title, summary AS Summary, prod_year
FROM db_mkorniie.film
WHERE id_genre = 25
ORDER BY prod_year DESC;