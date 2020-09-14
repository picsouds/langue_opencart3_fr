<?php
// Heading
$_['heading_title'] = 'Globalpay Remote';

// Text
$_['text_extension']        = 'Extensions';
$_['text_success']          = 'Succès: vous avez modifié le module « Globalpay Remote » !';
$_['text_edit']             = 'Modifier Globalpay Remote';
$_['text_card_type']        = 'Type de carte';
$_['text_enabled']          = 'Activé';
$_['text_use_default']      = 'Utilisation par défaut';
$_['text_merchant_id']      = 'Numéro de boutique';
$_['text_subaccount']       = 'Sous-compte';
$_['text_secret']           = 'Secret partagé';
$_['text_card_visa']        = 'Visa';
$_['text_card_master']      = 'Mastercard';
$_['text_card_amex']        = 'American Express';
$_['text_card_switch']      = 'Switch/Maestro';
$_['text_card_laser']       = 'Laser';
$_['text_card_diners']      = 'Diners';
$_['text_capture_ok']       = 'La capture a été réalisée avec succès';
$_['text_capture_ok_order'] = 'La capture a été réalisée avec succès, le statut de la commande a été mis à jour avec succès : réglé';
$_['text_rebate_ok']        = 'Le remboursement a réussi';
$_['text_rebate_ok_order']  = 'Le remboursement a réussi : le statut de la commande a été mis à jour';
$_['text_void_ok']          = 'L&rsquo;annulation a réussie : le statut de la commande a été mis à jour';
$_['text_settle_auto']      = 'Automatique';
$_['text_settle_delayed']   = 'Différé';
$_['text_settle_multi']     = 'Multi';
$_['text_ip_message']       = 'Vous devez fournir l&rsquo;adresse IP de votre serveur au gestionnaire du compte Globalpay avant de pouvoir mettre en production';
$_['text_payment_info']     = 'Information de paiement';
$_['text_capture_status']   = 'Paiement capturé';
$_['text_void_status']      = 'Paiement annulé';
$_['text_rebate_status']    = 'Paiement remboursé';
$_['text_order_ref']        = 'Référence de commande';
$_['text_order_total']      = 'Total autorisé';
$_['text_total_captured']   = 'Total capturé';
$_['text_transactions']     = 'Transactions';
$_['text_confirm_void']     = 'Etes-vous certain de vouloir annuler ce paiement ?';
$_['text_confirm_capture']  = 'Etes-vous certain de vouloir capturer le paiement ?';
$_['text_confirm_rebate']   = 'Etes-vous certain de vouloir rembourser le paiement ?';
$_['text_globalpay_remote'] = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Column
$_['text_column_amount']     = 'Montant';
$_['text_column_type']       = 'Type';
$_['text_column_date_added'] = 'Créé';

// Entry
$_['entry_merchant_id']              = 'Numéro de boutique';
$_['entry_secret']                   = 'Secret partagé';
$_['entry_rebate_password']          = 'Mot de passe de remboursement';
$_['entry_total']                    = 'Total';
$_['entry_sort_order']               = 'Ordre de tri';
$_['entry_geo_zone']                 = 'Zones géographiques';
$_['entry_status']                   = 'Statut';
$_['entry_debug']                    = 'Enregistrements de débogage';
$_['entry_auto_settle']              = 'Mode de règlement';
$_['entry_tss_check']                = 'Contrôles de TSS';
$_['entry_card_data_status']         = 'Inscription des informations de la carte bancaire';
$_['entry_3d']                       = 'Activer le protocole 3-D Secure';
$_['entry_liability_shift']          = 'Accepter les possibilités de non-responsabilité';
$_['entry_status_success_settled']   = 'Succès - réglé';
$_['entry_status_success_unsettled'] = 'Succès - non réglé';
$_['entry_status_decline']           = 'Refuser';
$_['entry_status_decline_pending']   = 'Refuser - autorisation hors-ligne';
$_['entry_status_decline_stolen']    = 'Refuser - carte bancaire perdue ou volée';
$_['entry_status_decline_bank']      = 'Refuser - erreur de la banque';
$_['entry_status_void']              = 'Annulée';
$_['entry_status_rebate']            = 'Remboursé';

// Help
$_['help_total']            = 'Le montant total que la commande doit atteindre avant que ce module de paiement devienne actif';
$_['help_card_select']      = 'Demander à l&rsquo;utilisateur de choisir le type de carte bancaire avant qu&rsquo;ils soient redirigés';
$_['help_notification']     = 'Vous devez fournir cette URL à Globalpay pour recevoir des notifications de paiement';
$_['help_debug']            = 'En activant le débogage, vous autorisez l&rsquo;écriture de données sensibles dans un fichier journal. Vous devriez toujours désactiver cette fonction sauf avis contraire.';
$_['help_liability']        = 'Accepter la responsabilité signifie que vous accepterez toujours les paiements lorsqu&rsquo;un utilisateur échoue le protocole 3-D secure.';
$_['help_card_data_status'] = 'Saisir les 4 derniers chiffres de la carte bancaire, la date d&rsquo;expiration, le nom, le type et les autres informations concernant la banque';

// Tab
$_['tab_api']          = 'Détails de l&rsquo;API';
$_['tab_account']      = 'Informations de l&rsquo;API';
$_['tab_order_status'] = 'Statut de la commande';
$_['tab_payment']      = 'Paramètres de paiement';

// Button
$_['button_capture'] = 'Réceptionner';
$_['button_rebate']  = 'Remise et/ou remboursement';
$_['button_void']    = 'Annulation';

// Error
$_['error_merchant_id'] = 'Un numéro de boutique est requis';
$_['error_secret']      = 'Un secret partagé est requis';
