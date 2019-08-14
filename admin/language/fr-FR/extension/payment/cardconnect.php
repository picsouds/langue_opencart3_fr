<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Paramètres';
$_['tab_order_status']              = 'Statut de la commande';

// Text
$_['text_extension']                = 'Extensions';
$_['text_success']                  = 'Succès: vous avez modifié le module CardConnect!';
$_['text_edit']                     = 'Modifier CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Paiement';
$_['text_authorize']                = 'Autoriser';
$_['text_live']                     = 'Live';
$_['text_test']                     = 'Test';
$_['text_no_cron_time']             = 'Le cron n&rsquo;a pas encore été exécuté ';
$_['text_payment_info']             = 'Informations de paiement';
$_['text_payment_method']           = 'Méthode de paiement';
$_['text_card']                     = 'Carte';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Référence';
$_['text_update']                   = 'Mettre à jour';
$_['text_order_total']              = 'Total de la commande';
$_['text_total_captured']           = 'Total capturé';
$_['text_capture_payment']          = 'Paiement de capture';
$_['text_refund_payment']           = 'Remboursement du paiement';
$_['text_void']                     = 'Annuler';
$_['text_transactions']             = 'Transactions';
$_['text_column_type']              = 'Type';
$_['text_column_reference']         = 'Référence';
$_['text_column_amount']            = 'Montant';
$_['text_column_status']            = 'Statut';
$_['text_column_date_modified']     = 'Date de modification';
$_['text_column_date_added']        = 'Date d&rsquo;ajout';
$_['text_column_update']            = 'Mettre à jour';
$_['text_column_void']              = 'Annuler';
$_['text_confirm_capture']          = 'Etes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_refund']           = 'Etes-vous sûr de vouloir rembourser le paiement?';
$_['text_inquire_success']          = 'Inquire a été couronné de succès';
$_['text_capture_success']          = 'La demande de capture a été réussie';
$_['text_refund_success']           = 'La demande de remboursement a été acceptée';
$_['text_void_success']             = 'La demande d&rsquo;annulation a réussi';

// Entry
$_['entry_merchant_id']             = 'Identifiant du marchand';
$_['entry_api_username']            = 'Nom d&rsquo;utilisateur de l&rsquo;API';
$_['entry_api_password']            = 'Mot de passe API';
$_['entry_token']                   = 'Jeton Secret';
$_['entry_transaction']             = 'Transaction';
$_['entry_environment']             = 'Environnement';
$_['entry_site']                    = 'Site';
$_['entry_store_cards']             = 'Enregistrer les cartes';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Total';
$_['entry_geo_zone']                = 'Zone géographique';
$_['entry_status']                  = 'Statut';
$_['entry_logging']                 = 'Journalisation du débogage';
$_['entry_sort_order']              = 'Ordre de tri';
$_['entry_cron_url']                = 'Cron Job URL';
$_['entry_cron_time']               = 'Cron Job Last Run';
$_['entry_order_status_pending']    = 'En attente';
$_['entry_order_status_processing'] = 'Traitement';

// Help
$_['help_merchant_id']              = 'Votre identifiant personnel de compte CardConnect.';
$_['help_api_username']             = 'Votre nom d&rsquo;utilisateur pour accéder à l&rsquo;API CardConnect.';
$_['help_api_password']             = 'Votre mot de passe pour accéder à l&rsquo;API CardConnect.';
$_['help_token']                    = 'Entrez un jeton aléatoire pour la sécurité ou utilisez celui créé.';
$_['help_transaction']              = 'Choisissez "Paiement" pour capturer le paiement immédiatement ou "Autoriser" pour devoir l&rsquo;approuver.';
$_['help_site']                     = 'Ceci détermine la première partie de l&rsquo;URL de l&rsquo;API. Ne changer que sur instruction. ';
$_['help_store_cards']              = 'Si vous voulez stocker des cartes avec tokenization.';
$_['help_echeck']                   = 'Si vous voulez offrir la possibilité de payer en utilisant un eCheck.';
$_['help_total']                    = 'Total de la commande à atteindre avant que cette méthode de paiement ne devienne active. Doit être une valeur sans signe de devise. ';
$_['help_logging']                  = 'L&rsquo;activation du débogage écrira des données sensibles dans un fichier journal. Vous devriez toujours désactiver sauf indication contraire. ';
$_['help_cron_url']                 = 'Configure un travail cron pour appeler cette URL afin que les commandes soient mises à jour automatiquement. Il est conçu pour être exécuté quelques heures après la dernière capture d&rsquo;un jour ouvrable. ';
$_['help_cron_time']                = 'C&rsquo;est la dernière fois que l&rsquo;URL du travail cron a été exécutée.';
$_['help_order_status_pending']     = 'Le statut de la commande lorsque la commande doit être autorisé par le marchand.';
$_['help_order_status_processing']  = 'Le statut de la commande lorsque la commande est automatiquement capturée.';

// Button
$_['button_inquire_all']            = 'Inquire tous';
$_['button_capture']                = 'Capture';
$_['button_refund']                 = 'Remboursement';
$_['button_void_all']               = 'Annuler tout';
$_['button_inquire']                = 'Inquire';
$_['button_void']                   = 'Annuler';

// Error
$_['error_permission']              = 'Attention: vous n&rsquo;êtes pas autorisé à modifier le paiement CardConnect!';
$_['error_merchant_id']             = 'Identifiant du marchand requis!';
$_['error_api_username']            = 'Nom d&rsquo;utilisateur de l&rsquo;API requis!';
$_['error_api_password']            = 'Mot de passe de l&rsquo;API requis!';
$_['error_token']                   = 'Jeton secret requis!';
$_['error_site']                    = 'Site requis!';
$_['error_amount_zero']             = 'Le montant doit être supérieur à zéro!';
$_['error_no_order']                = 'Aucune information de commande correspondante!';
$_['error_invalid_response']        = 'Réponse non valide reçue!';
$_['error_data_missing']            = 'Données manquantes!';
$_['error_not_enabled']             = 'Module non activé!';
