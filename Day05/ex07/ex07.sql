USE db_mkorniie

SELECT title, summary FROM film
WHERE summary LIKE '%42%' OR title LIKE '%42%'
ORDER BY duration ASC;

-- TO TEST
-- SELECT title, summary, duration FROM film
-- WHERE summary LIKE '%The%' OR title LIKE '%The%'
-- ORDER BY duration ASC;