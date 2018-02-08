SELECT name FROM Books 
LEFT JOIN Authors ON Books.author_id = Authors.id
GROUP BY name
HAVING COUNT(Books.author_id) = 3;