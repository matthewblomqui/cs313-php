\echo '*********************List all restaurant names*********************'
-- SELECT name FROM w4_restaurant;

\echo '****************List restaurant names and addresses****************'
-- SELECT name, address FROM w4_restaurant;

\echo '************************List  all customers************************'
-- SELECT * FROM w4_customer;

\echo '**List  all menu item names and prices of a particular restaurant**'
-- SELECT r.name, m.name, m.price FROM w4_menu_item m
-- JOIN w4_restaurant r
-- ON (m.restaurant_id = r.id)
-- WHERE r.id = 1;

\echo '*View all orders of a particular customer - show the customer name*'
-- SELECT c.first_name, c.last_name, mi.name, mi.price FROM w4_customer c
-- INNER JOIN w4_order o ON c.id = o.customer_id AND c.first_name = 'James'
-- INNER JOIN w4_order_menu_items om ON o.id = om.order_id
-- INNER JOIN w4_menu_item mi ON mi.id = om.menu_item_id;

\echo '************List  all orders of a particular restaurant************'
SELECT c.first_name AS "First Name"
     , c.last_name  AS "Last Name"
     , omi.order_id AS "Order Number"
     , mi.name      AS "Item Ordered"
     , mi.price::float8::numeric::money AS "Price"
     , r.name       AS "Restaurant" 
FROM       w4_customer c
INNER JOIN w4_order o              ON c.id = o.customer_id
INNER JOIN w4_order_menu_items omi ON o.id = omi.order_id
INNER JOIN w4_menu_item mi         ON omi.menu_item_id = mi.restaurant_id
INNER JOIN w4_restaurant r         ON r.id = mi.restaurant_id
WHERE      r.id = 1 OR r.id = 2 
ORDER BY   r.id;