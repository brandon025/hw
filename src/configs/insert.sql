
create table chartPlot(title_id INT not null AUTO_INCREMENT PRIMARY KEY, month VARCHAR(3) not null, xcord float DEFAULT 0, ycord float DEFAULT 0)
create table titles(title_id INT not null AUTO_INCREMENT PRIMARY KEY, chart_title VARCHAR(20) not null)

INSERT INTO chartPlot (title_id, month, xcord, ycord) VALUES (0, 'Jan',600, 5.0);
INSERT INTO chartPlot (title_id, month, xcord, ycord) VALUES (0, 'Jan',600, 5.0);

INSERT INTO titles (title_id, chart_title) VALUES (0, 'Dog and Cat Population');


