SELECT last_name , first_name
FROM db_mkorniie.user_card
WHERE last_name LIKE '%-%' OR first_name LIKE '%-%'
ORDER BY last_name ASC, first_name ASC;