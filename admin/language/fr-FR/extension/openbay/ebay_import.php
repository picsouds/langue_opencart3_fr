<?php
// Heading
$_['heading_title']           	 = 'Importation d&rsquo;objet';
$_['text_openbay'] 			  	 = 'OpenBay Pro';
$_['text_ebay'] 			  	 = 'eBay';

// Text
$_['text_sync_import_line1']  	 = '<strong>Attention !</strong>Ceci importera tous vos produits eBay et construira une structure de catégories dans votre boutique. Il est conseillé de supprimer toutes vos catégories et produits avant d&rsquo;exécuter cette option.<br/>La structure des catégories importée sera celle d&rsquo;eBay (dans le cas où vous avez une boutique eBay). Vous pouvez renommer, supprimer et modifier les catégories importées sans affecter vos produits eBay.';
$_['text_sync_import_line3']  	 = 'Vous devez vous assurer que votre serveur peut accepter et traiter un grand nombre de données POST. 1000 objets eBay requièrent environ 40 Mo, vous devrez donc calculer vos besoins. Si l&rsquo;importation de données échoue, le problème pourra provenir probablement d&rsquo;un réglage concernant la limite de données POST. La limite de mémoire PHP doit être d&rsquo;environ 128 Mo.';
$_['text_sync_server_size']   	 = 'Actuellement, votre serveur peut accepter : ';
$_['text_sync_memory_size']   	 = 'Votre limite de mémoire PHP : ';
$_['text_import_confirm']     	 = 'Ceci importera tous vos objets eBay en tant que nouveaux produits, êtes-vous sûr ? Cette fonction est irréversible ! Assurez-vous d&rsquo;abord de disposer d&rsquo;une sauvegarde !';
$_['text_import_notify'] 	  	 = 'Votre demande d&rsquo;importation a été envoyé pour traitement. Une importation prend environ 1 heure pour 1000 éléments.';
$_['text_import_images_msg1'] 	 = 'Des images sont en attente d&rsquo;importation/copie depuis eBay. Veuillez actualisez cette page, Si le nombre d&rsquo;éléments ne diminue pas alors';
$_['text_import_images_msg2'] 	 = 'Cliquez ici';
$_['text_import_images_msg3'] 	 = 'Et patientez. Vous trouverez plus d&rsquo;informations concernant ce processus <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">ici</a>';

// Entry
$_['entry_import_item_advanced'] = 'Obtenir des données avancées';
$_['entry_import_categories'] 	 = 'Importer des catégories';
$_['entry_import_description'] 	 = 'Importer les descriptions d&rsquo;objet';
$_['entry_import'] 				 = 'Importer des objets eBay';

// Buttons
$_['button_import'] 			 = 'Importer';
$_['button_complete'] 			 = 'Terminé';

// Help
$_['help_import_item_advanced']  = 'Il faut compter jusqu&rsquo;à 10 fois plus de temps pour importer des éléments. Importer les poids, tailles, ISBN, etc. Si disponible';
$_['help_import_categories'] 	 = 'Importer une structure de catégories dans votre boutique à partir des catégories eBay';
$_['help_import_description'] 	 = 'Ceci importera tout, y compris la partie HTML, les compteurs de visites, etc.';

// Error
$_['error_import'] 				 = 'Echec du chargement';
$_['error_maintenance'] 		 = 'Votre boutique est en mode maintenance. L&rsquo;importation échouera !';
$_['error_ajax_load'] 			 = 'Impossible de se connecter au serveur';
$_['error_validation'] 			 = 'Vous devez vous inscrire afin d&rsquo;obtenir le jeton de votre API et activer le module.';
