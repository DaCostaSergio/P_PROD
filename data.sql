/*
    Auteur: Bruno Manuel Vieira Rosas
    Date: 17.11.2021
    Description: Test Data
*/

/* ARDUINOS */
INSERT INTO `arduinos` (`id`, `mac-address`, `created_at`, `updated_at`) VALUES 
(NULL, '00:00:5e:00:53:af', NULL, NULL), 
(NULL, '00:00:4e:00:43:bf', NULL, NULL); 

/* ROOMS */
INSERT INTO `rooms` (`id`, `name`, `created_at`, `updated_at`) VALUES 
(NULL, 'N508', NULL, NULL), 
(NULL, 'N511', NULL, NULL); 

/* RECORDS */
INSERT INTO `records` (`id`, `date-time-of-record`, `type`, `arduino_id`, `room_id`, `created_at`, `updated_at`) VALUES 
(NULL, '2021-11-17 16:22:22', 'Entrée', '1', '1', NULL, NULL), 
(NULL, '2021-11-18 16:22:22', 'Sortie', '2', '2', NULL, NULL);