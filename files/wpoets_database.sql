 
 /*
    SQL Database CRUD(Create Read Update Delete) operations
 */
 
 create database wpoets_db;
 use wpoets_db;

/***** CREATE QUERY *****/

 CREATE TABLE `slider` (
    ->   `id` int(20) NOT NULL,
    ->   `title` varchar(1000) NOT NULL,
    ->   `description` varchar(1000) NOT NULL,
    ->   `picture` varchar(1000) NOT NULL
    -> ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/***** INSERT QUERY *****/

INSERT INTO `slider` (`id`, `title`, `description`, `picture`) VALUES
    -> (1, 'Learning', 'Usability enhancement and Training for Transaction Portal for Customers', 'DL-Learning-1.jpg'),
    -> (2, 'Technology', 'This is technology section', 'DL-Technology.jpg'),
    -> (3, 'Communication', 'This is communication section', 'DL-Communication.jpg');

/*
select* from slider;
+----+---------------+-------------------------------------------------------------------------+----------------------+
| id | title         | description                                                             | picture              |
+----+---------------+-------------------------------------------------------------------------+----------------------+
|  1 | Learning      | Usability enhancement and Training for Transaction Portal for Customers | DL-Learning-1.jpg    | 
|  2 | Technology    | This is technology section                                              | DL-Technology.jpg    | 
|  3 | Communication | This is communication section                                           | DL-Communication.jpg | 
+----+---------------+-------------------------------------------------------------------------+----------------------+
*/


/***** UPDATE QUERY *****/

UPDATE slider SET description = 'This is technology enhancement Portal for Customers' where id = 2;

UPDATE slider SET description = 'This is communication enhancement Portal for Customers and Company' where id = 3;

/*
select* from slider;
+----+---------------+-------------------------------------------------------------------------+----------------------+
| id | title         | description                                                             | picture              |
+----+---------------+-------------------------------------------------------------------------+----------------------+
|  1 | Learning      | Usability enhancement and Training for Transaction Portal for Customers | DL-Learning-1.jpg    | 
|  2 | Technology    | This is technology enhancement Portal for Customers                     | DL-Technology.jpg    | 
|  3 | Communication | This is communication enhancement Portal for Customers and Company      | DL-Communication.jpg | 
+----+---------------+-------------------------------------------------------------------------+----------------------+
*/

INSERT INTO `slider` (`id`, `title`, `description`, `picture`) VALUEs (4, 'Training', 'Usability enhancement and Training for Transaction Portal for Customers', 'DL-Learning-1.jpg');
/*
SELECT* from slider;
+----+---------------+-------------------------------------------------------------------------+----------------------+
| id | title         | description                                                             | picture              |
+----+---------------+-------------------------------------------------------------------------+----------------------+
|  1 | Learning      | Usability enhancement and Training for Transaction Portal for Customers | DL-Learning-1.jpg    | 
|  2 | Technology    | This is technology enhancement Portal for Customers                     | DL-Technology.jpg    | 
|  3 | Communication | This is communication enhancement Portal for Customers and Company      | DL-Communication.jpg | 
|  4 | Training      | Usability enhancement and Training for Transaction Portal for Customers | DL-Learning-1.jpg    | 
+----+---------------+-------------------------------------------------------------------------+----------------------+
*/


/***** DELETE QUERY *****/

DELETE from slider where id="4";
/*
select* from slider;
+----+---------------+-------------------------------------------------------------------------+----------------------+
| id | title         | description                                                             | picture              |
+----+---------------+-------------------------------------------------------------------------+----------------------+
|  1 | Learning      | Usability enhancement and Training for Transaction Portal for Customers | DL-Learning-1.jpg    | 
|  2 | Technology    | This is technology enhancement Portal for Customers                     | DL-Technology.jpg    | 
|  3 | Communication | This is communication enhancement Portal for Customers and Company      | DL-Communication.jpg | 
+----+---------------+-------------------------------------------------------------------------+----------------------+
*/