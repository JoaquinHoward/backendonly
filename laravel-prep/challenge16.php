/*
INSERT INTO posts (title, content, status) VALUES ('My First Post', 'Learning C Programming Language', 'draft');
INSERT INTO posts (title, content, status) VALUES ('My Second Post', 'Learning Frontend Development', published);
INSERT INTO posts (title, content, status) VALUES ('My Third Post', 'Learning Backend Development', 'published');
*/

// the update: write a query to change the title of post #1 to 'My First Updated Post'
UPDATE posts SET title = 'My First Updated Post' WHERE id = 1;
// the destruction: write a query to completely remove post #3 from the posts table 
DELETE  FROM posts WHERE id = 3;
// the audit: write a final query to view the entire table to verify that post #1 changed and post #3 is completely gone
SELECT * FROM posts;