SELECT UPPER(user_card.last_name) AS NAME, user_card.first_name AS first_name, subscription.price AS price
FROM db_mkorniie.user_card
INNER JOIN db_mkorniie.member ON member.id_member = user_card.id_user
INNER JOIN db_mkorniie.subscription ON subscription.id_sub = member.id_sub
WHERE price > 42
ORDER BY last_name ASC, first_name ASC;