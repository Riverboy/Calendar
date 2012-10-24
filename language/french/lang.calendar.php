<?php

 /**
 * Solspace - Calendar
 *
 * @package		Solspace:Calendar
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2010-2012, Solspace, Inc.
 * @link		http://www.solspace.com/docs/addon/c/Calendar/
 * @version		1.7.1
 * @filesource 	./system/expressionengine/third_party/calendar/language/english/
 */

$L = $lang = array(

//----------------------------------------
// Required for MODULES page
//----------------------------------------

'calendar_module_name' =>
'Calendrier',

'calendar_module_description' =>
'Un module complet de calendrier pour ExpressionEngine',

'calendar_module_version' =>
'Calendrier',

//----------------------------------------
//  Installation
//----------------------------------------

'calendars_field_group_already_exists' =>
'Le groupe de champs "Calendrier : Calendriers" existe d�j�.',

'events_field_group_already_exists' =>
'Le groupe de champs "Calendrier : �v�nements" existe d�j�.',

'calendars_weblog_already_exists' =>
'Le canal "Calendrier : Calendriers" existe d�j�.',

'events_weblog_already_exists' =>
'Le canal "Calendrier : �v�nements" existe d�j�.',

'cannot_install' =>
'Le module Calendrier ne peut �tre install� tant que ces erreurs ne sont pas corrig�es :',

//----------------------------------------
//  Upgradeification
//----------------------------------------

'update_calendar' =>
'Mettre � jour Calendrier',

"update_successful"	=>
"Le module a �t� mis � jour avec succ�s.",

'calendar_update_message' =>
'Une nouvelle version de Calendrier est disponible. Souhaitez-vous appliquer la mise � jour ?',

'update_failure' =>
'La mise � jour du module Calendrier a �chou�.',

'update_successful' =>
'Le module Calendrier a �t� mis � jour avec succ�s.',

//----------------------------------------
//  Main Menu
//----------------------------------------

'calendars' =>
'Calendriers',

'events' =>
'�v�nements',

'occurrences' =>
'Occurrences',

'reminders' =>
'Rappels',

'permissions' =>
'Autorisations',

'preferences' =>
'Pr�f�rences',

'documentation' =>
'Documentation en ligne',

'online_documentation' =>
'Documentation en ligne',

//----------------------------------------
//  Publish/Edit
//----------------------------------------

'filter' =>
'Filtre', /**verb or noun? verb => 'Filtrer' */

'remove_edited_occurrences' =>
'Supprimer les occurrences �dit�es',

'remove_edited_occurrences_desc' =>
'D�cocher ceci si vous ne fa�tes qu\'�diter les d�tails de cet �v�nement. Il est recommand� de LAISSER CECI COCH� si vous changez les HORAIRES, DATES ou DATES DE FIN, au risque, dans le cas contraire, de cr�er des �v�nements orphelins.',

'create_calendar_first' =>
'Vous devez d'\'abord cr�er un calendrier avant de cr�er un �v�nement.',

'select_a_calendar' =>
'S�lectionner un calendrier',

'new_date' =>
'Nouvelle date',

'add_rule' =>
'Ajouter une r�gle',

'editing_occurrence' =>
'L\'occurrence <strong>%date%</strong> de <strong>%title%</strong> est en cours d\'�dition',

'type' =>
'Type',

'include' =>
'Inclure',

'exclude' =>
'Exclure',

'repeat' =>
'R�p�ter',

'none' =>
'Aucun',

'daily' =>
'Quotidiennement',

'weekly' =>
'Hebdomadairement',

'monthly' =>
'Mensuellement',

'yearly' =>
'Annuellement',

'select_dates' =>
'S�lectionner les dates',

'all_day_event' =>
'�v�nement sur la journ�e enti�re',

'from' =>
'� partir de',

'to' =>
'Jusqu\'�',

'every' =>
'Tous/toutes les',

'day_s' =>
'jour(s)',

'week_s_on' =>
'semaine(s)', /**� voir dans le contexte : "semaine(s) � venir ?" */

'at' =>
'�',

'month_s_by_day_of' =>
'mois par jour de', /**� voir dans le contexte */

'1st' =>
'1er',

'2nd' =>
'2d', /** norme typographique fran�aise : 2d/2de et non 2nd/2nde */

'3rd' =>
'3e', /** norme typographique fran�aise : 3e et non 3i�me ou 3�me */

'4th' =>
'4e',

'5th' =>
'5e',

'only_on' =>
'Seulement le', /**� voir dans le contexte */

'year_s' =>
'ann�e(s)',

'end' =>
'Fin',

'never' =>
'Jamais',

'by_date' =>
'par date',

'after' =>
'Apr�s',

'time_s' =>
'horaire(s)',

//----------------------------------------
//  CP Calendars
//----------------------------------------

'calendar_id' =>
'ID du calendrier',

'calendar_name' =>
'Nom du calendrier',

'status' =>
'Statut',

'total_events' =>
'Nombre total d\'�v�nements',

//----------------------------------------
//  CP Events
//----------------------------------------

'event_id' =>
'ID de l\'�v�nement',

'event_name' =>
'Nom de l\'�v�nement',

'recurs' =>
'Se r�p�te', /** � voir dans le contexte */

'first_date' =>
'Premi�re date',

'last_date' =>
'Derni�re date',

'filter_events' =>
"Filtrer les �v�nements",

'filter_by_calendar' =>
'Filtrer par calendrier',

'filter_by_status' =>
'Filtrer par statut',

'filter_by_recurs' =>
'Filtrer selon ceux qui se r�p�tent', /** � voir dans le contexte */

'order_by' =>
'Trier selon',

'date_is' =>
'La date est',

'event_id' =>
'ID de l\'�v�nement',

'event_title' =>
'Titre de l\'�v�nement',

'calendar_name' =>
'Nom du calendrier',

'status' =>
'Statut',

'recurs' =>
'Se r�p�te', /** � voir dans le contexte */

'first_date_is' =>
'La premi�re date est',

'last_date' =>
'Derni�re date',

'ascending' =>
'Croissant',

'descending' =>
'D�croissant',

'or_later' =>
'Ou plus tard',

'or_earlier' =>
'Ou plus t�t',

'this_date' =>
'Cette date',

'time' =>
'Horaire',

'all_day' =>
'Journ�e enti�re',

//----------------------------------------
//  CP Events Delete
//----------------------------------------

'delete' =>
'Supprimer',

'delete_events' =>
'Supprimer les �v�nements',

'delete_events_title' =>
'Supprimer l\'(es) �v�nement(s) ?',

'delete_events_question' =>
'Voulez-vous VRAIMENT supprimer {COUNT} �v�nement(s) ?',

'events_deleted' =>
'�v�nement(s) ont �t� supprim�(s)',

//----------------------------------------
//  CP Occurrences
//----------------------------------------

'occurrence_id' =>
'ID de l\'occurrence',

'event_date' =>
'Date de l\'�v�nement',

'limit' =>
'Limite',

'page_limit' =>
'Limite de page',

'occurrences_limit' =>
'Limite des occurrences', /** Limite du nombre d'occurrences ? */

// -------------------------------------
//	Permissions
// -------------------------------------

'calendar_permissions_desc' =>
"Les autorisations peuvent �tre d�finies lors de la cr�ation du calendrier, ou modifi�es ici. Les Supers Administrateurs et les groupes s�lectionn�s dans 'Autoriser l\'acc�s complet aux groupes :' ont acc�s � tous les calendriers. Les groupes s�lectionn�s dans 'Interdire tout acc�s aux groupes :' n'auront acc�s � aucun calendrier.",

'allowed_groups' =>
"Groupes autoris�s",

'allow_full_access' =>
'Autoriser l\'acc�s complet aux groupes :',

'permissions_enabled' =>
'Autorisations activ�es',

'save_permissions' =>
'Autorisations enregistr�es',

'all_groups' =>
'Tous les groupes',


'allow_all' =>
'Les autoriser tous',

'deny_all_access' =>
'Interdire tout acc�s aux groupes :',

'deny_takes_precedence' =>
"Est prioritaire sur le param�trage calendrier 'Les autoriser tous'",

'permissions_saved' =>
"Autorisations enregistr�es",

'group_permissions' =>
'Autorisations de groupe',

'permissions_instructions' =>
"Choisissez les groupes que vous autorisez � �diter le calendrier et ses �v�nements (Les Supers Administrateurs ont toujours acc�s � tous les calendriers). Si un groupe n'est pas visible, c'est qu'il se trouve d�j� dans l'onglet Autorisations du panneau de contr�le calendrier (listes Les Autoriser Tous ou Les Interdire Tous).",

'disallowed_behavior_for_edit_page' =>
"Comportement interdit pour la page d'�dition", /** Fonctionnement plut�t que Comportement ? */

'none' =>
"Aucun",

'search_filter' =>
"Filtre de recherche",

'disable_link' =>
"Lien de d�sactivation", /** � revoir dans le contexte */

'permission_dialog_title' =>
"Erreur d'autorisation",

'ok' => "OK",

//----------------------------------------
//  CP Preferences
//----------------------------------------

'preference' =>
'Pr�f�rence',

'setting' =>
'Param�tre',

'description' =>
'Description',

'first_day_of_week' =>
'Premier jour de la semaine',

'first_day_of_week_description' =>
'Le dimanche et le lundi sont les choix les plus probables.',

'clock_type' =>
'Type d\'horloge',

'clock_type_description' =>
'Dans le panneau de contr�le, utiliser une horloge sur une base 12 heures ou 24 heures ?',

'12_hour' =>
'12 heures',

'24_hour' =>
'24 heures',

'default_timezone' =>
'Fuseau horaire par d�faut',

'default_timezone_description' =>
'Fuseau horaire par d�faut pour les nouveaux calendriers.',

'preferences_updated' =>
'Pr�f�rences mises � jour.',

'default_date_format' =>
'Format de date',

'default_date_format_description' =>
'Format de date par d�faut.',

'default_time_format' =>
'Format d\'heure par d�faut',

'default_time_format_description' =>
'Format d\'heure par d�faut pour les nouveaux calendriers.',

'calendar_weblog' =>
'Canal (ou canaux) pour le calendrier',

'calendar_weblog_description' =>
'Canal (ou canaux) devant �tre d�sign�(s) en tant que canal (ou canaux) pour g�rer le calendrier',

'event_weblog' =>
'Canal (ou canaux) pour les �v�nements',

'event_weblog_description' =>
'Canal (ou canaux) devant �tre d�sign�(s) en tant que canal (ou canaux) pour g�rer les �v�nements',

//----------------------------------------
//  Buttons
//----------------------------------------

'save' =>
'Enregistrer',

'delete_selected_items' =>
'Supprimer les �l�ments s�lectionn�s',

//----------------------------------------
//  Errors
//----------------------------------------

'no_results' =>
'Aucun r�sultat.',

'no_title' =>
'Aucun titre',

'invalid_request' =>
"Requ�te invalide",

'calendar_module_disabled' =>
"Le module Calendrier est actuellement d�sactiv�. Merci de vous assurer qu'il est install� et � jour en vous rendant sur le panneau de contr�le du module dans le Panneau de Contr�le Expressionengine",

'disable_module_to_disable_extension' =>
"Pour d�sactiver cette extension, vous devez d�sactiver son <a href='%url%'>module</a> correspondant.",

'enable_module_to_enable_extension' =>
"Pour activer cette extension, vous devez installer son <a href='%url%'>module</a> correspondant.",

'cp_jquery_requred' =>
"L'extension 'jQuery pour le Panneau de Contr�le' doit �tre <a href='%extensions_url%'>activ�e</a> pour utiliser ce module.",

'invalid_weblog_id' =>
'ID de canal invalide',

'invalid_entry_id' =>
'ID d\'entr�e invalide',

'invalid_site_id' =>
'ID de site invalide',

'invalid_calendar_id' =>
'ID de calendrier invalide',

'invalid_ymd' =>
'Date invalide',

'invalid_start_date' =>
'Date de d�but invalide',

'invalid_end_date' =>
'Date de fin invalide',

'invalid_year' =>
'Ann�e invalide',

'invalid_month' =>
'Mois invalide',

'invalid_day' =>
'Jour invalide',

'invalid_date' =>
'Date invalide',

'invalid_time' =>
'Horaire invalide',

'invalid_start_time' =>
'Horaire de d�marrage invalide',

'invalid_end_time' =>
'Horaire de fin invalide',

'invalid_hour' =>
'Heure invalide',

'invalid_minute' =>
'Minute invalide',

'invalid_repeat_dates' =>
'Dates r�p�t�es invalides',

'invalid_calendar_permissions' =>
'Vous n\'�tes pas autoris� � �diter ou � ajouter des �v�nements � ce calendrier',

'no_permissions_for_any_calendars' =>
"Vous n'�tes pas autoris� � ajouter ou � �diter des �v�nements sur un quelconque calendrier",

'invalid_permissions_json_request' =>
"Requ�te JSON invalide. Le group_id et EE 2.x+ sont exig�s.",

//----------------------------------------
//  Days /** Normalement, pas de majuscule. Sauf si c'est le 1er mot de la phrase. Choix fait de la conserver */
//----------------------------------------

'day_1_full' =>
'Lundi',

'day_2_full' =>
'Mardi',

'day_3_full' =>
'Mercredi',

'day_4_full' =>
'Jeudi',

'day_5_full' =>
'Vendredi',

'day_6_full' =>
'Samedi',

'day_0_full' =>
'Dimanche',

//----------------------------------------
//  Days - 2 Letters
//----------------------------------------

'day_1_2' =>
'Lu',

'day_2_2' =>
'Ma',

'day_3_2' =>
'Me',

'day_4_2' =>
'Je',

'day_5_2' =>
'Ve',

'day_6_2' =>
'Sa',

'day_0_2' =>
'Di',

//----------------------------------------
//  Days - 3 Letters
//----------------------------------------

'day_1_3' =>
'Lun',

'day_2_3' =>
'Mar',

'day_3_3' =>
'Mer',

'day_4_3' =>
'Jeu',

'day_5_3' =>
'Ven',

'day_6_3' =>
'Sam',

'day_0_3' =>
'Dim',

//----------------------------------------
//  Days - Short /** il n'y a pas d'abr�viation courte officielle pour les jours de la semaine en langue fran�aise ; abr�viation fa�te sur 3 caract�res */
//----------------------------------------

'day_1_short' =>
'Lun',

'day_2_short' =>
'Mar',

'day_3_short' =>
'Mer',

'day_4_short' =>
'Jeu',

'day_5_short' =>
'Ven',

'day_6_short' =>
'Sam',

'day_0_short' =>
'Dim',

//----------------------------------------
//  Days - 1 letter
//----------------------------------------

'day_1_1' =>
'L',

'day_2_1' =>
'M',

'day_3_1' =>
'M',

'day_4_1' =>
'J',

'day_5_1' =>
'V',

'day_6_1' =>
'S',

'day_0_1' =>
'D',

//----------------------------------------
//  Ordinal suffixes /** abr�viations officielles des ordinaux en fran�ais : er/�re ; d/de ; e  .Besoin de v�rifier dans le contexte si ces donn�es sont n�cessaires*/
//----------------------------------------

'suffix_0' =>
'e',

'suffix_1' =>
'er',

'suffix_2' =>
'd',

'suffix_3' =>
'e',

'suffix_4' =>
'e',

'suffix_5' =>
'e',

'suffix_6' =>
'e',

'suffix_7' =>
'e',

'suffix_8' =>
'e',

'suffix_9' =>
'e',

'suffix_10' =>
'e',

'suffix_11' =>
'e',

'suffix_12' =>
'e',

'suffix_13' =>
'e',

'suffix_14' =>
'e',

'suffix_15' =>
'e',

'suffix_16' =>
'e',

'suffix_17' =>
'e',

'suffix_18' =>
'e',

'suffix_19' =>
'e',

//----------------------------------------
//  Months /** pas de majuscule */
//----------------------------------------

'month_1_full' =>
'janvier',

'month_2_full' =>
'f�vrier',

'month_3_full' =>
'mars',

'month_4_full' =>
'avril',

'month_5_full' =>
'mai',

'month_6_full' =>
'juin',

'month_7_full' =>
'juillet',

'month_8_full' =>
'ao�t',

'month_9_full' =>
'septembre',

'month_10_full' =>
'octobre',

'month_11_full' =>
'novembre',

'month_12_full' =>
'd�cembre',

//----------------------------------------
//  Months - 3 letters
//----------------------------------------

'month_1_3' =>
'jan',

'month_2_3' =>
'f�v',

'month_3_3' =>
'mar',

'month_4_3' =>
'avr',

'month_5_3' =>
'mai',

'month_6_3' =>
'jun', /** jun conserv� pour diff�rencier de juillet */

'month_7_3' =>
'jul', /** jul conserv� pour diff�rencier de juin */

'month_8_3' =>
'ao�',

'month_9_3' =>
'sep',

'month_10_3' =>
'oct',

'month_11_3' =>
'nov',

'month_12_3' =>
'd�c',

//----------------------------------------
//  am/pm /** abr�viations conserv�es telles quelles car issues du latin */
//----------------------------------------

'am' =>
'am',

'pm' =>
'pm',

'AM' =>
'AM',

'PM' =>
'PM',

'am_dot' =>
'a.m.',

'pm_dot' =>
'p.m.',

//----------------------------------------
//  Date parameters
//----------------------------------------

'today' =>
'aujourd\'hui',

'yesterday' =>
'hier',

'tomorrow' =>
'demain',

'day' =>
'jour',

'week' =>
'semaine',

'month' =>
'mois',

'year' =>
'ann�e',

'ago' =>
'', /** pas de traduction, � voir dans contexte : "5 years ago => il y a 5 ann�es => 5 ann�es auparavant ?" */

'begin' =>
'd�bute',

'last' =>
'dernier/derni�re', /** � voir dans contexte : dernier mois / derni�re ann�e => conserver les 2 */

//----------------------------------------
//  Time parameters
//----------------------------------------

'now' =>
'maintenant',

'noon' =>
'midi',

'midnight' =>
'minuit',

//----------------------------------------
//  field verbage
//----------------------------------------

'summary' =>
'R�sum�',

'location' =>
'Emplacement',

'dates_and_options' =>
'Dates & Options',

'ics_url_label' =>
'Adresse URL du fichier iCalendar (.ics)',

'ics_url_desc' =>
"Ajouter une ou plusieurs adresses URL vers des fichiers .ics - s�par�es sur des lignes diff�rentes - � importer dans ce calendrier. Tous les horaires import�s seront ajust�s selon les param�tres de fuseau horaire de ce calendrier.",

'ics_url_stub' =>
"Tous les horaires import�s seront ajust�s selon les param�tres de fuseau horaire de ce calendrier.",

'time_format_label' =>
'Format d\'heure',

'time_format_desc' =>
'Format d\'heure par d�faut � utiliser pour ce calendrier.',

'timezone' =>
'Fuseau horaire',

/* END */
''=>''
);