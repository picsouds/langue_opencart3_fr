<?php
// Text
$_['text_new_card'] 					    = '+ Ajouter une nouvelle carte';
$_['text_loading']					        = 'Chargement ... Veuillez patienter ...';
$_['text_card_details'] 				    = 'Détails de la carte';
$_['text_saved_card'] 					    = 'Utiliser la carte enregistrée: ';
$_['text_card_ends_in'] 				    = 'Payer avec la carte %s existante qui se termine le XXXX XXXX XXXX %s';
$_['text_card_number'] 					    = 'Numéro de carte: ';
$_['text_card_expiry'] 					    = 'Expiration de la carte (MM / AA): ';
$_['text_card_cvc'] 					    = 'Code de sécurité de la carte (CVC): ';
$_['text_card_zip']					        = 'Code postal de la carte: ';
$_['text_card_save'] 					    = 'Enregistrer la carte pour une utilisation future?';
$_['text_trial'] 					        = '%s chaque %s %s pour %s paiements alors';
$_['text_recurring']					    = '%s chaque %s %s';
$_['text_length'] 					        = 'Pour %s paiements';
$_['text_cron_subject'] 				    = 'Square CRON job résumé ';
$_['text_cron_message'] 				    = 'Voici une liste de toutes les tâches CRON effectuées par votre extension Square: ';
$_['text_squareup_profile_suspended'] 		= 'Vos paiements récurrents ont été suspendus. Veuillez nous contacter pour plus de détails. ';
$_['text_squareup_trial_expired']			= 'Votre période d&rsquo;essai a expiré.';
$_['text_squareup_recurring_expired'] 		= 'Vos paiements récurrents ont expiré. C&rsquo;était votre dernier paiement. ';
$_['text_cron_summary_token_heading'] 		= 'Actualisation du token d&rsquo;accès: ';
$_['text_cron_summary_token_updated'] 		= 'Jeton d&rsquo;accès mis à jour avec succès!';
$_['text_cron_summary_error_heading'] 		= 'Erreurs de transaction: ';
$_['text_cron_summary_fail_heading'] 		= 'Transactions échouées (Profils suspendus): ';
$_['text_cron_summary_success_heading'] 	= 'Transactions réussies: ';
$_['text_cron_fail_charge'] 				= 'Le profil <strong>#%s</strong> n&rsquo;a pas pu être chargé avec <strong>%s</strong>';
$_['text_cron_success_charge'] 				= 'Le profil <strong>#%s</strong> a été chargé avec <strong>%s</strong>';
$_['text_card_placeholder'] 				= 'XXXX XXXX XXXX XXXX';
$_['text_cvv'] 						        = 'CVV';
$_['text_expiry']					        = 'MM / AA';
$_['text_default_squareup_name'] 			= 'Carte de crédit / débit';
$_['text_token_issue_customer_error'] 		= 'Nous rencontrons une panne technique dans notre système de paiement. Veuillez réessayer plus tard.';
$_['text_token_revoked_subject'] 			= 'Votre jeton d&rsquo;accès Square a été révoqué!';
$_['text_token_revoked_message'] 			= "L&rsquo;accès de l&rsquo;extension de paiement Square à votre compte Square a été révoqué via le tableau de bord Square. Vous devez vérifier les informations d&rsquo;identification de votre application dans les paramètres d&rsquo;extension et vous reconnecter.";
$_['text_token_expired_subject'] 			= 'Votre jeton d&rsquo;accès Square a expiré!';
$_['text_token_expired_message'] 			= 'Le jeton d&rsquo;accès de l&rsquo;extension de paiement Square connecté à votre compte Square a expiré. Vous devez vérifier vos références d&rsquo;application et votre job CRON dans les paramètres d&rsquo;extension et vous reconnecter.';

// Error
$_['error_browser_not_supported']			= 'Erreur: le système de paiement ne prend plus en charge votre navigateur Web. Veuillez mettre à jour ou utiliser un autre. ';
$_['error_card_invalid'] 			    	= 'Erreur: la carte est invalide!';
$_['error_squareup_cron_token'] 			= 'Erreur: le jeton d&rsquo;accès n&rsquo;a pas pu être actualisé. Veuillez connecter votre extension Square Payment via le panneau d&rsquo;administration OpenCart. ';

// Warning
$_['warning_test_mode'] 				    = 'Attention: le mode bac à sable est activé! Les transactions sembleront passer, mais aucun frais ne sera comptabilisé. ';

// Statuses
$_['squareup_status_comment_authorized'] 	= 'La transaction par carte a été autorisée mais pas encore capturée.';
$_['squareup_status_comment_captured'] 	 	= 'La transaction par carte a été autorisée puis capturée (c&rsquo;est à dire terminée).';
$_['squareup_status_comment_voided'] 	 	= 'La transaction par carte a été autorisée et annulée par la suite (c&rsquo;est à dire annulée). ';
$_['squareup_status_comment_failed'] 	 	= 'La transaction par carte a échoué.';

// Override errors
$_['squareup_override_error_billing_address.country'] 	= 'Le pays de l&rsquo;adresse de paiement n&rsquo;est pas valide. S&rsquo;il vous plaît modifiez le et essayez de nouveau.';
$_['squareup_override_error_shipping_address.country'] 	= 'Le pays de l&rsquo;adresse de livraison n&rsquo;est pas valide. S&rsquo;il vous plaît modifiez le et essayez de nouveau.';
$_['squareup_override_error_email_address'] 		    = 'Votre e-mail client n&rsquo;est pas valide. S&rsquo;il vous plaît modifiez le et essayez de nouveau.';
$_['squareup_override_error_phone_number'] 		        = 'Votre numéro de téléphone client n&rsquo;est pas valide. S&rsquo;il vous plaît modifiez le et essayez de nouveau.';
$_['squareup_error_field'] 				                = 'Champ: %s';