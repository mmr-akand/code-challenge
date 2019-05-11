# code-challenge

1. (PHP/HTML)
Write a PHP class that inherits from PHP's ArrayObject class. Give your new class a public function called displayAsTable() that outputs all the set keys and values as an HTML table. Instantiate an instance of this class, set some keys for the object, and call the object's displayAsTable() function to display your data as an HTML table.

      NOTE: Use functionality inherited from ArrayObject. 

2. (JS/HTML/CSS)
Using HTML and CSS make a plain white web page that has a 100x100 pixel blue square on it. Position the square along the left side of the page, 50 pixels from the top. Using javascript animate this square so that it moves 10 pixels right and 10 pixels down per second. When the box hits or goes over an edge of the window, change the direction for the related axis.

      NOTE: Please use OOP JS or ES6. Please don’t use any javascript framework (e.g. jquery)

3. (MySQL)
Given the two tables below ( user and test_result ), write a SQL query that uses a join statement to list all users from the user table, their average correct answers, as well as the time of their most recently taken test. All user entries should appear, even if they have not taken a test.

#### user
| user_id | first_name | last_name |
| --- | --- | --- |
| 1 | Bob | Sanders |
| 2 | Dave | Greggers |
| 3 | Susan | Bowie |
| 4 | Gray | Anderson |


#### test_result
| user_id | test_id | correct | time_taken |
| --- | --- | --- | --- |
| 1 | 1 | 88 | 2012-09-02 13:01:28 |
| 3 | 2 | 56 | 2012-09-03 09:39:02 |
| 1 | 2 | 44 | 2012-09-05 16:22:11 |
| 2 | 3 | 97 | 2012-09-15 11:27:51 |
| 3 | 4 | 22 | 2012-09-15 15:01:49 |
