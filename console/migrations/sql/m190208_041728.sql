/**
	Primary Keys para todas las tablas
*/

ALTER TABLE `attracc_res`
	CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT FIRST,
	ADD PRIMARY KEY (`id`);

ALTER TABLE `attractions`
	CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT FIRST,
	ADD PRIMARY KEY (`id`);

ALTER TABLE `car`
	CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT FIRST,
	ADD PRIMARY KEY (`id`);
    
ALTER TABLE `car_res`
	CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT FIRST,
	ADD PRIMARY KEY (`id`);
    
ALTER TABLE `hotel`
	CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT FIRST,
	ADD PRIMARY KEY (`id`);

ALTER TABLE `hotel_res`
	CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT FIRST,
	ADD PRIMARY KEY (`id`);
    
ALTER TABLE `pax`
	CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT FIRST,
	ADD PRIMARY KEY (`id`);
    
ALTER TABLE `reservations`
	CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT FIRST,
	ADD PRIMARY KEY (`id`);

ALTER TABLE `room`
	CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT FIRST,
	ADD PRIMARY KEY (`id`);
    
/**
 llaves foraneas para todas las tablas
*/

ALTER TABLE `attracc_res`
	ADD INDEX `id_attracc` (`id_attracc`),
	ADD CONSTRAINT `FK_attracc_res_attractions` FOREIGN KEY (`id_attracc`) REFERENCES `attractions` (`id`);
    
ALTER TABLE `car_res`
	ADD INDEX `id_car` (`id_car`),
	ADD CONSTRAINT `FK_car_res_car` FOREIGN KEY (`id_car`) REFERENCES `car` (`id`);
    
ALTER TABLE `hotel`
	ADD INDEX `id_room` (`id_room`),
	ADD CONSTRAINT `FK_hotel_room` FOREIGN KEY (`id_room`) REFERENCES `room` (`id`);
    
ALTER TABLE `hotel_res`
	ADD INDEX `id_hotel` (`id_hotel`),
	ADD CONSTRAINT `FK_hotel_res_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`);
    
ALTER TABLE `reservations`
	ADD INDEX `id_user` (`id_user`),
	ADD INDEX `id_car_res` (`id_car_res`),
	ADD INDEX `id_hotel_res` (`id_hotel_res`),
	ADD INDEX `id_attracc_res` (`id_attracc_res`),
	ADD INDEX `id_pax` (`id_pax`),
	ADD CONSTRAINT `FK_reservations_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
	ADD CONSTRAINT `FK_reservations_car_res` FOREIGN KEY (`id_car_res`) REFERENCES `car_res` (`id`),
	ADD CONSTRAINT `FK_reservations_hotel_res` FOREIGN KEY (`id_hotel_res`) REFERENCES `hotel_res` (`id`),
	ADD CONSTRAINT `FK_reservations_attracc_res` FOREIGN KEY (`id_attracc_res`) REFERENCES `attracc_res` (`id`),
	ADD CONSTRAINT `FK_reservations_pax` FOREIGN KEY (`id_pax`) REFERENCES `pax` (`id`);