SELECT t1.user_id, t1.first_name, t1.last_name, t2.average, t2.last_appeared
FROM user t1
LEFT JOIN (select user_id, avg(correct) as average, max(time_taken) as last_appeared from test_result group by user_id) t2
ON t1.user_id = t2.user_id