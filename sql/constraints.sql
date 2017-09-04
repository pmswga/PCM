USE `pcm`;

/* Связка таблицы "users" с таблицей "acoount_types" */
ALTER TABLE `users`            ADD CONSTRAINT R1  FOREIGN KEY (account_type)       REFERENCES `account_types` (id_account_type) ON UPDATE CASCADE ON DELETE CASCADE; 

/* Связка таблицы "users" с таблицей "acoount_types" */
ALTER TABLE `user_images`            ADD CONSTRAINT R2  FOREIGN KEY (id_user)       REFERENCES `users` (id_user) ON UPDATE CASCADE ON DELETE CASCADE; 

