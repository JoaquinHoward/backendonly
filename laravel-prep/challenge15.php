INSERT INTO posts (title, content, status) VALUES ('My First Post', 'Learning C Programming Language', 'draft');
INSERT INTO posts (title, content, status) VALUES ('My Second Post', 'Learning Frontend Development', 'published');
INSERT INTO posts (title, content, status) VALUES ('My Third Post', 'Learning Backend Development', 'published');

//fetch all columns for that posix_times
SELECT * FROM posts

//fetch only the title and created_at of posts where the status is 'published'
SELECT title, created_at FROM posts WHERE status = 'published'

//fetch a single post where the id is exactly 2
SELECT * FROM posts WHERE id = 2;