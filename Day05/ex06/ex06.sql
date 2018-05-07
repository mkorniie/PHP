SELECT title, summary FROM db_mkorniie.film
WHERE lower(summary) LIKE '%vincent%'
ORDER BY id_film ASC;