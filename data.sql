/*
    Auteur: Bruno Manuel Vieira Rosas
    Date: 17.11.2021
    Description: Test Data
*/

/* ARDUINOS */
INSERT INTO `arduinos` (`id`, `mac_address`, `created_at`, `updated_at`) VALUES 
(NULL, '00:00:5e:00:53:af', NULL, NULL), 
(NULL, '00:00:4e:00:43:bf', NULL, NULL); 

/* ROOMS */
INSERT INTO `rooms` (`id`, `name`, `number_of_people`, `created_at`, `updated_at`) VALUES 
(NULL, 'N508', 21, NULL, NULL), 
(NULL, 'N511', 6, NULL, NULL); 

/* RECORDS */
INSERT INTO `records` (`id`, `type`, `arduino_id`, `room_id`, `created_at`, `updated_at`) VALUES 
(NULL, 'entry', 1, 1, NOW(), NOW()), 
(NULL, 'entry', 1, 1, NOW(), NOW()), 
(NULL, 'entry', 1, 1, NOW(), NOW()), 
(NULL, 'exit', 1, 1, NOW(), NOW()), 
(NULL, 'exit', 1, 1, NOW(), NOW()), 
(NULL, 'entry', 2, 2, NOW(), NOW()), 
(NULL, 'entry', 2, 2, NOW(), NOW()), 
(NULL, 'entry', 2, 2, NOW(), NOW()), 
(NULL, 'entry', 2, 2, NOW(), NOW()), 
(NULL, 'entry', 2, 2, NOW(), NOW()), 
(NULL, 'entry', 2, 2, NOW(), NOW()), 
(NULL, 'exit', 2, 2, NOW(), NOW()),
(NULL, 'exit', 2, 2, NOW(), NOW()),
(NULL, 'exit', 2, 2, NOW(), NOW());