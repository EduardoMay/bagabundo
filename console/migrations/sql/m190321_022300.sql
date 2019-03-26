ALTER TABLE `hotel`
	DROP FOREIGN KEY `FK_hotel_room`;

ALTER TABLE `hotel`
	DROP COLUMN `id_room`;

ALTER TABLE `room`
	ADD COLUMN `id_hotel` INT NULL AFTER `id`,
	ADD CONSTRAINT `FK_room_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`);