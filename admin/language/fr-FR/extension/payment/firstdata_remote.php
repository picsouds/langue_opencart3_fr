<?php
// Heading
$_['heading_title'] = 'First Data EMEA Web Service API';

// Text
$_['text_firstdata_remote']  = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']         = 'Extensions';
$_['text_success']           = 'Succès: vous avez modifié le module First Data !';
$_['text_edit']              = 'Modifier les paramètres';
$_['text_card_type']         = 'Type de carte';
$_['text_enabled']           = 'Activé';
$_['text_merchant_id']       = 'ID marchand';
$_['text_subaccount']        = 'Sous-compte';
$_['text_user_id']           = 'ID utilisateur';
$_['text_capture_ok']        = 'Le paiement a réussi';
$_['text_capture_ok_order']  = 'Le paiement a réussi : le statut de la commande a été mis à jour';
$_['text_refund_ok']         = 'Le remboursement a réussi';
$_['text_refund_ok_order']   = 'Le remboursement a réussi : le statut de la commande a été mis à jour';
$_['text_void_ok']           = 'L&rsquo;annulation a réussie : le statut de la commande a été mis à jour';
$_['text_settle_auto']       = 'Vente';
$_['text_settle_delayed']    = 'Règlement retardé';
$_['text_mastercard']        = 'Mastercard';
$_['text_visa']              = 'Visa';
$_['text_diners']            = 'Diners Club International';
$_['text_amex']              = 'American Express';
$_['text_maestro']           = 'Maestro';
$_['text_payment_info']      = 'Informations de paiement';
$_['text_capture_status']    = 'Paiement effectué';
$_['text_void_status']       = 'Paiement annulé';
$_['text_refund_status']     = 'Paiement remboursé';
$_['text_order_ref']         = 'Référence de la commande';
$_['text_order_total']       = 'Total autorisé';
$_['text_total_captured']    = 'Total reçu';
$_['text_transactions']      = 'Transactions';
$_['text_column_amount']     = 'Montant';
$_['text_column_type']       = 'Type';
$_['text_column_date_added'] = 'Date d&rsquo;ajout';
$_['text_confirm_void']      = 'Etes-vous certain de vouloir annuler le paiement ?';
$_['text_confirm_capture']   = 'Etes-vous certain de vouloir réceptionner le paiement ?';
$_['text_confirm_refund']    = 'Etes-vous certain de vouloir effectuer un remboursement du paiement ?';
$_['text_void']              = 'Annulé';
$_['text_payment']           = 'Paiement';
$_['text_refund']            = 'Remboursement';

// Entry
$_['entry_certificate_path']         = 'Chemin d&rsquo;accès du certificat';
$_['entry_certificate_key_path']     = 'Chemin d&rsquo;accès de la clef privée';
$_['entry_certificate_key_pw']       = 'Clef privée du certificat';
$_['entry_certificate_ca_path']      = 'Chemin CA';
$_['entry_merchant_id']              = 'Numéro de boutique';
$_['entry_user_id']                  = 'ID utilisateur';
$_['entry_password']                 = 'Mot de passe';
$_['entry_total']                    = 'Total';
$_['entry_sort_order']               = 'Ordre de tri';
$_['entry_geo_zone']                 = 'Zone géographique';
$_['entry_status']                   = 'Statut';
$_['entry_debug']                    = 'Enregistrement de débogage';
$_['entry_auto_settle']              = 'Mode de règlement';
$_['entry_status_success_settled']   = 'Paiement reçu';
$_['entry_status_success_unsettled'] = 'Paiement non-reçu';
$_['entry_status_decline']           = 'Refuser';
$_['entry_status_void']              = 'Annulé';
$_['entry_status_refund']            = 'Remboursé';
$_['entry_enable_card_store']        = 'Activer les jetons de stockage de carte';
$_['entry_cards_accepted']           = 'Types de cartes acceptées';

// Help
$_['help_total']        = 'Le montant total que la commande doit atteindre avant que ce module de paiement devienne actif';
$_['help_certificate']  = 'Les certificats et clefs privées doivent être stockés à l&rsquo;extérieur de vos dossiers web publiques';
$_['help_card_select']  = 'Demander à l&rsquo;utilisateur de choisir son type de carte avant d&rsquo;être redirigé';
$_['help_notification'] = 'Vous devez fournir cette URL à First Data pour recevoir des notifications de paiement';
$_['help_debug']        = 'En autorisant le débogage, vous autorisez l&rsquo;écriture des données sensibles dans un fichier journal. Vous devriez toujours désactiver sauf avis contraire .';
$_['help_settle']       = 'Si vous utilisez la pré-autorisation, vous devez effectuer une action post-auth dans 3-5 jours sinon votre transaction sera abandonnée';

// Tab
$_['tab_account']      = 'Informations de l&rsquo;API';
$_['tab_order_status'] = 'Statut de la commande';
$_['tab_payment']      = 'Paramètres de paiement';

// Button
$_['button_capture'] = 'Réceptionner';
$_['button_refund']  = 'Rembourser';
$_['button_void']    = 'Annulation';

// Error
$_['error_merchant_id'] = 'L&rsquo;ID du marchand est requis';
$_['error_user_id']     = 'L&rsquo;ID utilisateur est requis';
$_['error_password']    = 'Le mot de passe est requis';
$_['error_certificate'] = 'Le chemin d&rsquo;accès du certificat est requis';
$_['error_key']         = 'La clef de certificat est requise';
$_['error_key_pw']      = 'Le mot de passe de clef de certificat est requis';
$_['error_ca']          = 'L&rsquo;autorité de certification (AC) est requise';
