<?php 
/*
 *	Made by Samerton
 *  Translated by Aviortheking
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr2
 *
 *  License: MIT
 *
 *  French Language for Forum module
 */

$language = array(
	/*
	 *  Forums
	 */ 
	'forum' => 'Forum',
	'forums' => 'Forums',
	'forum_index' => 'Accueil',
	'no_users_online' => 'Aucuns utilisateurs en ligne',
	'online_users' => 'Utilisateurs en ligne',
	'discussion' => 'Discussion',
	'topic' => 'Sujet',
	'stats' => 'Stats',
	'topics' => 'Sujets',
	'views' => 'Vues',
	'posts' => 'Messages',
	'by' => 'par',
	'in' => 'dans',
	'last_reply' => 'Dernière réponse',
	'latest_discussions' => 'Dernières discussions',
	'users_registered' => '<strong>Utlisateurs enregistrées :</strong> {x}', // Don't replace "{x}"
	'latest_member' => '<strong>Dernier membre :</strong> {x}', // Don't replace "{x}"
	'subforums' => 'Sous-forums',
	'subforum' => 'sous-forum',
	'no_topics' => 'Aucun sujets n\'ont été créés.',
	'no_topics_short' => 'Aucun sujets',
	'new_topic' => 'Nouveau Sujet',
	'post_successful' => 'message envoyé',
	'post_edited_successfully' => 'message edité.',
	'user_tag' => 'Tu as été tagger dans un message.',
	'user_tag_info' => 'Tu as été tagger dans un message par {x}.', // Don't replace "{x}"
	'creating_topic_in_x' => 'Création du sujet dans {x}', // Don't replace "{x}"
	'topic_title' => 'Titre du sujet',
	'new_reply' => 'Nouvelle réponse',
	're' => 'Re : ',
	'topic_locked' => 'Sujet vérouillé',
	'mod_actions' => 'Moderation',
	'lock_topic' => 'Vérouiller le sujet',
	'unlock_topic' => 'Dévérouiller le sujet',
	'merge_topic' => 'Fusionner le sujet',
	'merge_topics' => 'Fusionner les sujets',
	'merge_instructions' => 'Les fils a fusionner <strong>doivent</strong> être dans le même forum. Déplacer un fil si nécessaire.',
	'confirm_delete_short' => 'Confirmer la supression',
	'confirm_delete_topic' => 'Est-tu sûr de vouloir suprimmer ce Sujet ?',
	'confirm_delete_post' => 'Est-tu sûr de vouloir suprimmer ce message ?',
	'delete_topic' => 'Suprimmer le Sujet',
	'move_topic' => 'déplacer le Sujet',
	'move_topic_to' => 'Déplacer le topic vers :',
	'stick_topic' => 'Épingler le sujet',
	'unstick_topic' => 'Désépingler le sujet',
	'share' => 'Partager',
	'share_twitter' => 'Partager sur Twitter',
	'share_facebook' => 'Partager sur Facebook',
	'edit' => 'Editer',
	'edit_post' => 'Editer le message',
	'last_edited' => 'Dernière modification : {x}', // Don't replace "{x}"
	'quote' => 'Citation',
	'topic_locked_notice' => 'Ce sujet est fermé, mais vos permissions vous autorise a y répondre.',
	'title_required' => 'Merci de mettre un titre au sujet',
	'content_required' => 'Merci de mettre du contenu dans votre message',
	'title_min_2' => 'Le nom du sujet doit avoir 2 charactères au minimun',
	'title_max_64' => 'Le nom du sujet doit avoir 64 charactères au maximun',
	'content_min_2' => 'Le contenu du message doit être de 2 charactères au minimun',
	'content_max_20480' => 'Le contenu du message doit être de 20480 charactères au maximun',
	'post_already_reported' => 'Vous vous êtes déjà plaint de ce sujet !',
	'quoted_post' => 'Message ajouté au messages citésPost added to quoted posts.',
	'removed_quoted_post' => 'Message suprimmer des messages cités',
	'quoting_posts' => 'Insertion des citations...',
	'error_quoting_posts' => 'Désolé, il y a eu une erreur lors de la citation des messages.',
	'error_rating_post' => 'Désolé, il y a eu une érreur lors de la notation du sujet.',
	'topic_stuck' => 'Topic has been stuck.',
	'topic_unstuck' => 'Topic has been unstuck.',
	'spam_wait' => 'Merci de patienter {x} secondes avant de reposter.',
	'overview' => 'Vue d\'ensemble',
	'no_label' => 'No label',
	
	// Homepage
	'latest_announcements' => 'Dernières annonces',
	'read_full_post' => 'Lire en entier',
	
	// Admin tab
	'labels' => 'Étiquettes',
	'new_forum' => '<i class="fa fa-plus-circle"></i> Nouveau forum',
	'new_label' => '<i class="fa fa-plus-circle"></i> Nouvelle étiquette',
	'new_label_type' => '<i class="fa fa-plus-circle"></i> Nouveau type d\'étiquette',
	'label_types' => 'Types d\'étiquette',
	'creating_label' => 'Création d\'un nouvelle étiquette',
	'creating_label_type' => 'Création d\'un nouveau type d\'étiquette',
	'editing_label' => 'Modification de l\'étiquette',
	'editing_label_type' => 'Modification du type d\'étiquette',
	'label_name' => 'Nom de l\'étiquette',
	'label_type' => 'Type de l\'étiquette',
	'label_type_name' => 'Nom du type d\'étiquette',
	'label_type_html' => 'HTML du type d\'étiquette',
	'label_type_html_help' => 'L\'HTML doit inclure {x} qui sera par la suite remplacer par le nom de l\'étiquette',
	'label' => 'Étiquette',
	'label_forums' => 'Étiquette du forum',
    'label_groups' => 'Label Groups',
	'no_forums' => 'Aucun forum',
	'no_labels_defined' => 'Aucune étiquettes n\'ont été définie.', 
	'no_label_types_defined' => 'Aucun type d\'étiquette n\'ont été définie.',
	'label_edit_success' => 'Étiquette modifié.',
	'label_type_edit_success' => 'Tpye d\'étiquette modifié.',
	'label_creation_success' => 'Étiquette créée.',
	'label_type_creation_success' => 'Tpye d\'étiquette créé.',
	'label_creation_error' => 'Il y a eu une erreur lors de la création du type d\'étiquette. Merci de vous assurer que le nom fait moins de 32 charactères et que et que vous avez spécifier un type.',
	'label_type_creation_error' => 'Il y a eu une erreur lors de la création du type d\'étiquette. Merci de vous assurer que le nom fait moins de 32 charactères et que le HTML moins de 64.',
	'creating_forum' => 'Création d\'un nouveau forum',
	'forum_name' => 'Nom du forum',
	'forum_description' => 'Description du forum',
	
	'delete_forum' => 'Suprimmer le forum',
	'move_topics_and_posts_to' => 'Déplacer les sujets et les messages vers',
	'delete_topics_and_posts' => 'Suprimmer les sujets et les messages',
	'forum_permissions' => 'Permissions du forum',
	'select_a_parent_forum' => 'Séléctionner un forum parent',
	'parent_forum' => 'Forum parent',
	'has_no_parent' => 'Aucun parent',
	'guests' => 'Invités',
	'group' => 'Groupe',
	'can_view_forum' => 'Peut voir le forum ?',
	'can_view_other_topics' => 'Peut voir les sujets des autres joueurs ?',
	'can_create_topic' => 'Peut créer des sujets',
	'can_post_reply' => 'Peut répondre ?',
	'can_moderate_forum' => 'Peut modérer ?',
	'display_topics_as_news' => 'Mettre les sujet sur la page d\'accueil ?',
	'forum_created_successfully' => 'Forum créé !.',
	'forum_layout' => 'Mise en page du forum',
	'table_view' => 'Voir les tables',
	'latest_discussions_view' => 'Dernières discussions',
	'input_forum_title' => 'Merci de mettre un titre au forum.',
	'input_forum_description' => 'Merci de mettre une description au forum.',
	'forum_name_minimum' => 'Le nom du forum doit avoir 2 charactères au minimun.',
	'forum_description_minimum' => 'La description du forum doit avoir 2 charactères au minimun.',
	'forum_name_maximum' => 'Le nom du forum doit avoir 150 charactères au maximun.',
	'forum_description_maximum' => 'La description du forum doit avoir 255 charactères au maximun.',
	'forum_type' => 'Type du forum',
	'forum_type_forum' => 'Forum',
	'forum_type_category' => 'Catégorie',
	'invalid_action' => 'Action invalide',
	'use_reactions' => 'Utiliser les réactions ?',

    // Search
    'forum_search' => 'Forum Search',
    'search_again_in_x_seconds' => 'Please wait {x} seconds before searching again.',
    'search_results' => 'Search Results',
    'new_search' => 'New Search',
    'invalid_search_query' => 'Please enter a search query between 3 and 128 characters long.',
    'no_results_found' => 'No results found.',
	
	// Profile tab
	'user_no_posts' => 'Cet utilisateur n\'a fait aucun posts.',
	'latest_posts' => 'Derniers Posts'
);