
SET FOREIGN_KEY_CHECKS=0;

SET @tables = NULL;

SELECT GROUP_CONCAT(' `', TABLE_SCHEMA, '`.`', TABLE_NAME, '`')
	INTO @tables 
	FROM  `information_schema`.`TABLES` 
	WHERE  `TABLE_SCHEMA` =  'db_name'
	AND `TABLE_NAME` NOT IN ('tables that will not be dropped');


SET @tables = CONCAT('DROP TABLE ', @tables);

PREPARE stmt1 FROM @tables;

EXECUTE stmt1;

DEALLOCATE PREPARE stmt1;

SET FOREIGN_KEY_CHECKS=1;
