USE `pcm`;

DROP PROCEDURE IF EXISTS removeUsers;
DROP FUNCTION IF EXISTS getUserID;

DELIMITER //

CREATE PROCEDURE removeUsers()
BEGIN
	SET SQL_SAFE_UPDATES = 0;
    DELETE FROM `users` WHERE (DATE(NOW()) > `expiration_date`);
END;

CREATE FUNCTION getUserID(login char(255)) 
	RETURNS INT
BEGIN
	DECLARE uid int;
	
	SELECT `id_user` INTO uid FROM `users` WHERE `email`=login;
    
	RETURN uid;
END;

//

DELIMITER ;
