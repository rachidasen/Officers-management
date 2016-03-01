CREATE TRIGGER destroy_officer AFTER DELETE on officers
FOR EACH ROW
BEGIN
    DELETE  FROM personal_datas WHERE personal_datas.id = old.id;
    DELETE  FROM work_infos WHERE work_infos.id = old.id;
    DELETE  FROM reportingofficers_part3 WHERE `reportingofficers_part3`.`reporting-officer-id` = old.id;
    DELETE  FROM reportingofficers_part3 WHERE `reportingofficers_part3`.`id` = old.id;
    DELETE  FROM reporting_officer WHERE reporting_officer.`reporting-officer-id` = old.`officer_id`;
    DELETE  FROM reporting_officer WHERE reporting_officer.id = old.`officer_id`;
    DELETE  FROM reviewingofficers WHERE reviewingofficers.`review_id`= old.`officer_id`;
    DELETE  FROM reviewingofficers WHERE reviewingofficers.`officer_id` = old.`officer_id`;
    DELETE  FROM reviewing_officer WHERE reviewing_officer.`review_officer-id` = old.`officer_id`;
    DELETE  FROM reviewing_officer WHERE reviewing_officer.`reporting-officer-id` = old.`officer_id`;
END$$