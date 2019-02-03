<?php
// Heading
$_['heading_title'] = 'SagePay Server';

// Text
$_['text_extension']         = 'Extensions';
$_['text_success']           = 'Succès: vous avez modifié le module SagePay Server !';
$_['text_edit']              = 'Modifier SagePay Server';
$_['text_sagepay_server']    = '<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E511AF91-E4A0-42DE-80B0-09C981A3FB61" target="_blank"><img src="view/image/payment/sagepay.png" alt="SagePay" title="SagePay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_sim']               = 'Simulateur';
$_['text_test']              = 'Test';
$_['text_live']              = 'Production';
$_['text_defered']           = 'Différé';
$_['text_authenticate']      = 'Authentifier';
$_['text_payment']           = 'Paiement';
$_['text_release_ok']        = 'Envoi effectué';
$_['text_release_ok_order']  = 'Envoi effectué : le statut de la commande a été mis à jour';
$_['text_rebate_ok']         = 'Remboursement effectué';
$_['text_rebate_ok_order']   = 'Remboursement effectué : le statut de la commande a été mis à jour';
$_['text_void_ok']           = 'L&rsquo;annulation a réussie : le statut de la commande a été mis à jour';
$_['text_payment_info']      = 'Informations de paiement';
$_['text_release_status']    = 'Paiement envoyé';
$_['text_void_status']       = 'Paiement annulé';
$_['text_rebate_status']     = 'Paiement remboursé';
$_['text_order_ref']         = 'Référence de la commande';
$_['text_order_total']       = 'Total autorisé';
$_['text_total_released']    = 'Total envoyé';
$_['text_transactions']      = 'Transactions';
$_['text_column_amount']     = 'Montant';
$_['text_column_type']       = 'Type';
$_['text_column_date_added'] = 'Date de création';
$_['text_confirm_void']      = 'Etes-vous certain de vouloir annuler le paiement ?';
$_['text_confirm_release']   = 'Etes-vous certain de vouloir envoyer ce paiement ?';
$_['text_confirm_rebate']    = 'Etes-vous certain de vouloir remboursement le paiement ?';

// Entry
$_['entry_vendor']            = 'Fournisseur';
$_['entry_test']              = 'Mode de test';
$_['entry_transaction']       = 'Méthode de transaction';
$_['entry_total']             = 'Total';
$_['entry_order_status']      = 'Statut de la commande';
$_['entry_geo_zone']          = 'Zone géographique';
$_['entry_status']            = 'Statut';
$_['entry_sort_order']        = 'Ordre de tri';
$_['entry_debug']             = 'Enregistrement de débogage';
$_['entry_card']              = 'Cartes de magasin';
$_['entry_cron_job_token']    = 'Jeton secret';
$_['entry_cron_job_url']      = 'Cron Job&rsquo;s URL : ';
$_['entry_last_cron_job_run'] = 'Dernière date du fonctionnement CRON : ';

// Help
$_['help_total']          = 'Le montant total que la commande doit atteindre avant que ce module de paiement devienne actif.';
$_['help_debug']          = 'En activant le débogage, vous autorisez l&rsquo;écriture de données sensibles dans un fichier journal. Vous devriez toujours désactiver cette fonction sauf avis contraire.';
$_['help_transaction']    = 'La méthode de transaction doit être définie sur Paiement pour autoriser les prélèvements';
$_['help_cron_job_token'] = 'Utilisez une valeur longue et difficile à deviner';
$_['help_cron_job_url']   = 'Définissez une tâche CRON pour appeler cette URL';

// Button
$_['button_release'] = 'Envoi';
$_['button_rebate']  = 'Remise et/ou remboursement';
$_['button_void']    = 'Annulation';

// Error
$_['error_permission'] = 'Attention: vous n&rsquo;êtes pas autorisé à modifier payment SagePay !';
$_['error_vendor']     = 'ID fournisseur requis !';