\echo '2a. How many events are there?'
SELECT COUNT(*) FROM w5_event;

-- \echo '2b. How many participants are there?'
SELECT COUNT(*) FROM w5_participant;

-- \echo '3a. What is the third event when sorted alphabetically (by name)? '
SELECT name FROM w5_event
ORDER BY name
LIMIT 1 OFFSET 2;

-- \echo '3b. What is the third event when sorted by ID? '
SELECT id, name FROM w5_event
ORDER BY id
LIMIT 1 OFFSET 2;

-- \echo '4a. List the names alphabetically of all the participants in the ''Toughman Utah'' competition'
SELECT DISTINCT p.name FROM w5_event e
JOIN w5_event_participant ep ON e.id = ep.event_id
JOIN w5_participant p ON ep.participant_id = p.id
WHERE e.name = 'Toughman Utah'
ORDER BY p.name;

-- \echo '4b. List the names (sorted by id) of all the participants in the ''Kauai Marathon'' competition'
SELECT DISTINCT p.name, p.id FROM w5_event e
JOIN w5_event_participant ep ON e.id = ep.event_id
JOIN w5_participant p ON ep.participant_id = p.id
WHERE e.name = 'Kauai Marathon'
ORDER BY p.id;

-- \echo '5a. How many competitions has ''Black Panther'' competed in?'
SELECT COUNT(e.name) FROM w5_event e
JOIN w5_event_participant ep ON e.id = ep.event_id
JOIN w5_participant p ON ep.participant_id = p.id
WHERE p.name = 'Black Panther';

-- \echo '5b. How can you verify that your count is correct?'  
SELECT id, name from w5_participant
WHERE name = 'Black Panther';

SELECT ep.id, ep.event_id, ep.participant_id FROM w5_event e
JOIN w5_event_participant ep ON e.id = ep.event_id
JOIN w5_participant p ON ep.participant_id = p.id
WHERE p.name = 'Black Panther';

-- \echo '5c. Who has competed in the most competitions? How many have they competed in?'
SELECT p.name, COUNT(*) AS c FROM w5_event e
JOIN w5_event_participant ep ON e.id = ep.event_id
JOIN w5_participant p ON ep.participant_id = p.id
GROUP BY p.name
ORDER BY c DESC
LIMIT 1 OFFSET 0;

-- \echo '5d. Who has competed in the least competitions? How many have they competed in?'
SELECT p.name, COUNT(*) AS c FROM w5_event e
JOIN w5_event_participant ep ON e.id = ep.event_id
JOIN w5_participant p ON ep.participant_id = p.id
GROUP BY p.name
ORDER BY c
LIMIT 1 OFFSET 0;

-- \echo '5d. people who have competed in 1 or more'
SELECT p.name, COUNT(*) AS c FROM w5_event e
JOIN w5_event_participant ep ON e.id = ep.event_id
JOIN w5_participant p ON ep.participant_id = p.id
WHERE 2 > 0
GROUP BY p.name
ORDER BY c;

-- \echo '5d. - people that didn''t compete in any'
SELECT name FROM w5_participant
WHERE id NOT in (SELECT participant_id FROM w5_event_participant)
ORDER BY name;

-- \echo '6a. Is there anyone who has competed in the same competition twice? '
---------------- Your code here ----------------

-- \echo '6b. Which event had the most competitors? '
---------------- Your code here ----------------

-- \echo '6c. Which event had the least competitors? '
---------------- Your code here ----------------

-- \echo '6d. List all competitors that competed in the same event at least once '
---------------- Your code here ----------------
