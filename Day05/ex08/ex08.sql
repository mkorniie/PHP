USE db_mkorniie

SELECT last_name, first_name, DATE(birthdate) FROM user_card
WHERE YEAR(birthdate)=1989
ORDER BY last_name ASC;

-- Display the last_name, first_name and birthdate (only the date, not the time)
-- Can check by entering 1974