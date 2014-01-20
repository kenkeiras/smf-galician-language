<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Boards';
$txt['admin_users'] = 'Members';
$txt['admin_newsletters'] = 'Newsletters';
$txt['admin_edit_news'] = 'News';
$txt['admin_groups'] = 'Membergroups';
$txt['admin_members'] = 'Manage Members';
$txt['admin_members_list'] = 'Below is a listing of all the members currently registered with your forum.';
$txt['admin_next'] = 'Next';
$txt['admin_censored_words'] = 'Censored Words';
$txt['admin_censored_where'] = 'Put the word to be censored on the left, and what to change it to on the right.';
$txt['admin_censored_desc'] = 'Due to the public nature of forums there may be some words that you wish to prohibit being posted by users of your forum. You can enter any words below that you wish to be censored whenever used by a member.<br />Blank a box to remove that word.';
$txt['admin_reserved_names'] = 'Reserved Names';
$txt['admin_template_edit'] = 'Edit Your Forum Template';
$txt['admin_modifications'] = 'Modification Settings';
$txt['admin_security_moderation'] = 'Security and Moderation';
$txt['admin_server_settings'] = 'Server Settings';
$txt['admin_reserved_set'] = 'Set Reserved Names';
$txt['admin_reserved_line'] = 'One reserved word per line.';
$txt['admin_basic_settings'] = 'This page allows you to change the basic settings for your forum.  Be very careful with these settings, as they may render the forum dysfunctional.';
$txt['admin_maintain'] = 'Enable Maintenance Mode';
$txt['admin_title'] = 'Forum Title';
$txt['admin_url'] = 'Forum URL';
$txt['cookie_name'] = 'Cookie Name';
$txt['admin_webmaster_email'] = 'Webmaster Email Address';
$txt['boarddir'] = 'SMF Directory';
$txt['sourcesdir'] = 'Sources Directory';
$txt['cachedir'] = 'Cache Directory';
$txt['admin_news'] = 'Enable News';
$txt['admin_guest_post'] = 'Enable Guest Posting';
$txt['admin_manage_members'] = 'Members';
$txt['admin_main'] = 'Main';
$txt['admin_config'] = 'Configuration';
$txt['admin_version_check'] = 'Detailed Version Check';
$txt['admin_smffile'] = 'SMF File';
$txt['admin_smfpackage'] = 'SMF Package';
$txt['admin_maintenance'] = 'Maintenance';
$txt['admin_image_text'] = 'Show buttons as images instead of text';
$txt['admin_credits'] = 'Credits';
$txt['admin_agreement'] = 'Show and require agreement letter when registering';
$txt['admin_agreement_default'] = 'Default';
$txt['admin_agreement_select_language'] = 'Language to edit';
$txt['admin_agreement_select_language_change'] = 'Change';
$txt['admin_delete_members'] = 'Delete Selected Members';
$txt['admin_repair'] = 'Repair All Boards and Topics';
$txt['admin_main_welcome'] = 'This is your &quot;%1$s&quot;.  From here, you can edit settings, maintain your forum, view logs, install packages, manage themes, and many other things.<div style="margin-top: 1ex;">If you have any trouble, please look at the &quot;Support &amp; Credits&quot; page.  If the information there doesn\'t help you, feel free to <a href="http://www.simplemachines.org/community/index.php" target="_blank" class="new_win">look to us for help</a> with the problem.</div>You may also find answers to your questions or problems by clicking the <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" /> symbols for more information on the related functions.';
$txt['admin_news_desc'] = 'Please place one news item per box. BBC tags, such as <span title="Are you bold?">[b]</span>, <span title="I tall icks!!">[i]</span> and <span title="Brackets are great, no?">[u]</span> are allowed in your news, as well as smileys. Clear a news item\'s text box to remove it.';
$txt['administrators'] = 'Forum Administrators';
$txt['admin_reserved_desc'] = 'Reserved names will keep members from registering certain usernames or using these words in their displayed names. Choose the options you wish to use from the bottom before submitting.';
$txt['admin_activation_email'] = 'Send activation email to new members upon registration';
$txt['admin_match_whole'] = 'Match whole name only. If unchecked, search within names.';
$txt['admin_match_case'] = 'Match case. If unchecked, search will be case insensitive.';
$txt['admin_check_user'] = 'Check username.';
$txt['admin_check_display'] = 'Check display name.';
$txt['admin_newsletter_send'] = 'You can email anyone from this page. The email addresses of the selected membergroups should appear below, but you may remove or add any email addresses you wish. Be sure that each address is separated in this fashion: \'address1; address2\'.';
$txt['admin_fader_delay'] = 'Fading delay between items for the news fader';
$txt['admin_bbc'] = 'Show BBC Buttons on Posting and PM Send Pages';

$txt['admin_backup_fail'] = 'Failed to make backup of Settings.php - make sure Settings_bak.php exists and is writable.';
$txt['modSettings_info'] = 'Cambia ou especifica as opcións de control coas que opera este foro.';
$txt['database_server'] = 'Database Server';
$txt['database_user'] = 'Database Username';
$txt['database_password'] = 'Database Password';
$txt['database_name'] = 'Database Name';
$txt['registration_agreement'] = 'Registration Agreement';
$txt['registration_agreement_desc'] = 'This agreement is shown when a user registers an account on this forum and has to be accepted before users can continue registration.';
$txt['database_prefix'] = 'Database Tables Prefix';
$txt['errors_list'] = 'Listing of forum errors';
$txt['errors_found'] = 'The following errors are fouling up your forum';
$txt['errors_fix'] = 'Would you like to attempt to fix these errors?';
$txt['errors_do_recount'] = 'All errors fixed - a salvage area has been created! Please click the button below to recount some key statistics.';
$txt['errors_recount_now'] = 'Recount Statistics';
$txt['errors_fixing'] = 'Fixing forum errors';
$txt['errors_fixed'] = 'All errors fixed! Please check on any categories, boards, or topics created to decide what to do with them.';
$txt['attachments_avatars'] = 'Attachments and Avatars';
$txt['attachments_desc'] = 'From here you can administer the attached files on your system. You can delete attachments by size and by date from your system. Statistics on attachments are also displayed below.';
$txt['attachment_stats'] = 'File Attachment Statistics';
$txt['attachment_integrity_check'] = 'Attachment Integrity Check';
$txt['attachment_integrity_check_desc'] = 'This function will check the integrity and sizes of attachments and filenames listed in the database and, if necessary, fix errors it encounters.';
$txt['attachment_check_now'] = 'Run check now';
$txt['attachment_pruning'] = 'Attachment Pruning';
$txt['attachment_pruning_message'] = 'Message to add to post';
$txt['attachment_pruning_warning'] = 'Are you sure you want to delete these attachments?\\nThis cannot be undone!';
$txt['attachment_total'] = 'Total Attachments';
$txt['attachmentdir_size'] = 'Total Size of Attachment Directory';
$txt['attachmentdir_size_current'] = 'Total Size of Current Attachment Directory';
$txt['attachment_space'] = 'Total Space Available in Attachment Directory';
$txt['attachment_space_current'] = 'Total Space Available in Current Attachment Directory';
$txt['attachment_options'] = 'File Attachment Options';
$txt['attachment_log'] = 'Attachment Log';
$txt['attachment_remove_old'] = 'Remove attachments older than';
$txt['attachment_remove_size'] = 'Remove attachments larger than';
$txt['attachment_name'] = 'Attachment Name';
$txt['attachment_file_size'] = 'File Size';
$txt['attachmentdir_size_not_set'] = 'No maximum directory size is currently set';
$txt['attachment_delete_admin'] = '[attachment deleted by admin]';
$txt['live'] = 'Live from Simple Machines...';
$txt['remove_all'] = 'Remove All';
$txt['approve_new_members'] = 'Admin must approve all new members';
$txt['agreement_not_writable'] = 'Warning - agreement.txt is not writable, any changes you make will NOT be saved.';

$txt['version_check_desc'] = 'This shows you the versions of your installation\'s files versus those of the latest version. If any of these files are out of date, you should download and upgrade to the latest version at <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(more detailed)';

$txt['lfyi'] = 'Non podes te conectar ó &uacute;ltimo arquivo de noticias de simplemachines.org.';

$txt['manage_calendar'] = 'Calendario';
$txt['manage_search'] = 'Buscar';

$txt['smileys_manage'] = 'Conxunto de Smileys e Iconas de Mensaxes';
$txt['smileys_manage_info'] = 'Instalar novos conxuntos de smileys ou agregar smileys ós conxuntos existentes, adem&aacute;s de administra-los iconas dos mensaxes.';
$txt['package_info'] = 'Instalar novas caracter&#237;sticas ou modifica-las existentes con esta interface.';
$txt['theme_admin'] = 'Temas e Dise&ntilde;ou';
$txt['theme_admin_info'] = 'Configurar e administra-las túas temas, as&iacute; como especificar ou reininicalizar as opcións do tema.';
$txt['registration_center'] = 'Rexistro de Usuarios';
$txt['member_center_info'] = 'View the member list, search for members and manage not-yet-approved members and members that haven\'t activated their account yet.';

$txt['viewmembers_name'] = 'Nome de usuario (nome amosado)';
$txt['viewmembers_online'] = '&Uacute;ltima vez en l&iacute;nea';
$txt['viewmembers_today'] = 'Hoxe';
$txt['viewmembers_day_ago'] = 'd&iacute;a';
$txt['viewmembers_days_ago'] = 'd&iacute;as';

$txt['display_name'] = 'Nome a amosar';
$txt['email_address'] = 'Direcci&oacute;n Email';
$txt['ip_address'] = 'Direcci&oacute;n IP';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'unknown';
$txt['security_wrong'] = '&iexcl;Tento de ingreso a administraci&oacute;n!' . "\n" .
	'Referer: ' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'descoñecido') . "\n" .
	'User agent: ' . $_SERVER['HTTP_USER_AGENT'] . "\n" .
	'IP: ' . $GLOBALS['user_info']['ip'];

$txt['email_as_html'] = 'Enviar en formato HTML.  (con isto, podes poñer HTML no email.)';
$txt['email_parsed_html'] = 'Agregar &lt;br /&gt;s e &amp;nbsp;s a este mensaxe.';
$txt['email_variables'] = 'Neste mensaxe podes usar algunhas &quot;variables&quot;.  Haz <i>click</i> <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return Reqwin(this.href);" class="help">aqu&iacute;</a> para m&aacute;s informaci&oacute;n.';
$txt['email_force'] = 'Enviar a estes usuarios a&uacute;n se eles elixiron non recibir anuncios.';
$txt['email_as_pms'] = 'Enviar isto a eses grupos usando mensaxes persoais.';
$txt['email_continue'] = 'Continuar';
$txt['email_done'] = 'finalizado.';

$txt['ban_title'] = 'Lista de accesos prohibidos';
$txt['ban_ip'] = 'IP banning: (e.g. 192.168.12.213 or 128.0.*.*) - one entry per line';
$txt['ban_email'] = 'Email banning: (e.g. badguy@somewhere.com) - one entry per line';
$txt['ban_username'] = 'User name banning: (e.g. l33tuser) - one entry per line';

$txt['ban_description'] = 'Aqu&iacute; podes lle restrinxi-lo acceso a persoas conflitivas xa sexa por IP, nome de servidor, nome de usuario, ou email.';
$txt['ban_add_new'] = 'Agregar nova restricci&oacute;n de acceso';
$txt['ban_banned_entity'] = 'Elemento restrinxido';
$txt['ban_on_ip'] = 'Restingir por IP (ex. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Restrinxir por nome de dominio (ex. *.mil)';
$txt['ban_on_email'] = 'Restrinxir por direcci&oacute;n de Email (ex. *@sitiomalo.com)';
$txt['ban_on_username'] = 'Restrinxir por nome de usuario';
$txt['ban_notes'] = 'Notas';
$txt['ban_restriction'] = 'Restricci&oacute;n';
$txt['ban_full_ban'] = 'Restricci&oacute;n completa';
$txt['ban_partial_ban'] = 'Partial ban';
$txt['ban_cannot_post'] = 'Non&nbsp;pode&nbsp;publicar';
$txt['ban_cannot_register'] = 'Non&nbsp;pode&nbsp;se rexistrar';
$txt['ban_cannot_login'] = 'Cannot login';
$txt['ban_add'] = 'Agregar';
$txt['ban_edit_list'] = 'Editar lista de accesos prohibidos';
$txt['ban_type'] = 'Tipo de restricci&oacute;n';
$txt['ban_days'] = 'd&iacute;a(s)';
$txt['ban_will_expire_within'] = 'A restricci&oacute;n expirar&aacute; en';
$txt['ban_added'] = 'Added';
$txt['ban_expires'] = 'Expira';
$txt['ban_hits'] = 'Hits';
$txt['ban_actions'] = 'Accións';
$txt['ban_expiration'] = 'Expiraci&oacute;n';
$txt['ban_reason_desc'] = 'Motivo polo que se lle restringi&oacute; o acceso, para ser amosado ó usuario en cuesti&oacute;n.';
$txt['ban_notes_desc'] = 'Notas que poidan axudar a outros membros do staff.';
$txt['ban_remove_selected'] = 'Eliminar seleccionados';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = '&#191;Est&#225;s seguro que desexas elimina-los accesos restrinxidos seleccionados?';
$txt['ban_modify'] = 'Modificar';
$txt['ban_name'] = 'Name';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Edit ban';
$txt['ban_add_notes'] = '<b>Note</b>: after creating the above ban, you can add additional entries that trigger the ban, like IP addresses, hostnames and email adresses.';
$txt['ban_expired'] = 'Expired / disabled';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Non restriction selected.';

$txt['ban_triggers'] = 'Triggers';
$txt['ban_add_trigger'] = 'Add ban trigger';
$txt['ban_add_trigger_submit'] = 'Add';
$txt['ban_edit_trigger'] = 'Modify';
$txt['ban_edit_trigger_title'] = 'Edit ban trigger';
$txt['ban_edit_trigger_submit'] = 'Modify';
$txt['ban_remove_selected_triggers'] = 'Remove selected ban triggers';
$txt['ban_no_entries'] = 'There are currently no bans in effect.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Are you sure you want to remove the selected ban triggers?';
$txt['ban_trigger_browse'] = 'Browse Ban Triggers';
$txt['ban_trigger_browse_description'] = 'This screen shows all banned entities sorted by IP, hostname, email address or username.';

$txt['ban_log'] = 'Log de restricións de acceso';
$txt['ban_log_description'] = 'O log de accesos prohibidos mostra tódolos intentos de ingreso ó foro polos usuarios ós que se lles restringi&oacute; o acceso. (\'restricci&oacute;n completa\' e \'non&nbsp;pode&nbsp;se rexistrar\' solamente).';
$txt['ban_log_no_entries'] = 'Non hai entradas do log de restricións de acceso';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Direcci&oacute;n Email';
$txt['ban_log_member'] = 'Usuario';
$txt['ban_log_date'] = 'Data';
$txt['ban_log_remove_all'] = 'Eliminar Todos';
$txt['ban_log_remove_all_confirm'] = '&#191;Est&#225;s seguro que desexas eliminar tódalas entradas do log de accesos prohibidos?';
$txt['ban_log_remove_selected'] = 'Eliminar seleccionados';
$txt['ban_log_remove_selected_confirm'] = '&#191;Est&#225;s seguro que desexas eliminar tódalas entradas seleccionadas do log de accesos prohibidos?';
$txt['ban_no_triggers'] = 'Non ban triggers';

$txt['settings_not_writable'] = 'Esta configuraci&oacute;n non pode se gardar, xa que Settings.php é de s&oacute;o lectura.';

$txt['maintain_title'] = 'Mantemento do Foro';
$txt['maintain_info'] = 'Con esas ferramentas podes optimizar táboas, facer respaldos, revisar erros, e podar foros.';
$txt['maintain_sub_database'] = 'Database';
$txt['maintain_sub_routine'] = 'Routine';
$txt['maintain_sub_members'] = 'Members';
$txt['maintain_sub_topics'] = 'Topics';
$txt['maintain_done'] = 'Completado o Mantemento.';
$txt['maintain_no_errors'] = '&iexcl;Felicidades, non se encontr&oacute; ning&uacute;n erro!  Grazas por verificar.';

$txt['maintain_tasks'] = 'Scheduled Tasks';
$txt['maintain_tasks_desc'] = 'Manage all the tasks scheduled by SMF.';

$txt['scheduled_log'] = 'Task Log';
$txt['scheduled_log_desc'] = 'Lists logs of the tasks that have be ran.';
$txt['admin_log'] = 'Administration Log';
$txt['admin_log_desc'] = 'Lists administrative tasks that have been performed by admins of your forum.';
$txt['moderation_log'] = 'Moderation Log';
$txt['moderation_log_desc'] = 'Lists moderation activities that have been performed by moderators on your forum.';
$txt['spider_log_desc'] = 'Review the entries related to search engine spider activity on your forum.';
$txt['pruning_log_desc'] = 'Use these tools to prune older entries in the various logs.';

$txt['mailqueue_title'] = 'Mail';

$txt['db_error_send'] = 'Enviar emails en erros de conexi&oacute;n de MySQL';
$txt['db_persist'] = 'Usar unha conexi&oacute;n persistente';
$txt['ssi_db_user'] = 'Database username to use in SSI mode';
$txt['ssi_db_passwd'] = 'Database password to use in SSI mode';

$txt['default_language'] = 'Idioma por defecto no foro';

$txt['maintenance_subject'] = 'Subject for display';
$txt['maintenance_message'] = 'Message for display';

$txt['errlog_desc'] = 'The error log tracks every error encountered by your forum.  To delete any errors from the database, mark the checkbox, and click the %1$s button at the bottom of the page.';
$txt['errlog_no_entries'] = 'There are currently no error log entries.';

$txt['theme_settings'] = 'Theme Settings';
$txt['theme_current_settings'] = 'Tema actual';

$txt['dvc_your'] = 'O teu versi&oacute;n';
$txt['dvc_current'] = 'Versi&oacute;n actual';
$txt['dvc_sources'] = 'Fontes';
$txt['dvc_default'] = 'Plantillas default';
$txt['dvc_templates'] = 'Plantillas actuais';
$txt['dvc_languages'] = 'Arquivos de idioma';

$txt['smileys_default_set_for_theme'] = 'Selecciona a colecci&oacute;n de smileys para este tema';
$txt['smileys_no_default'] = '(usar conxunto global default de smileys)';

$txt['censor_test'] = 'Probar palabras censuradas';
$txt['censor_test_save'] = 'Probar';
$txt['censor_case'] = 'Ignorar may&uacute;sculas/min&uacute;sculas cando se est&eacute; censurando';
$txt['censor_whole_words'] = 'Check only whole words';

$txt['admin_confirm_password'] = '(confirmar)';
$txt['admin_incorrect_password'] = 'Incorrect Password';

$txt['date_format'] = '(DD-MM-AAAA)';
$txt['undefined_gender'] = 'Non definido';
$txt['age'] = 'Idade do usuario';
$txt['activation_status'] = 'Status da activaci&oacute;n';
$txt['activated'] = 'Activado';
$txt['not_activated'] = 'Non activado';
$txt['primary'] = 'Primario';
$txt['additional'] = 'Adicional';
$txt['messenger_address'] = 'Direcci&oacute;n do Messenger';
$txt['wild_cards_allowed'] = 'Son permitidos os carácteres * e ?';
$txt['search_for'] = 'Buscar por';
$txt['member_part_of_these_membergroups'] = 'Usuario é parte destes grupos';
$txt['membergroups'] = 'Grupos de usuario';
$txt['confirm_delete_members'] = '&#191;Est&#225;s seguro que desexas elimina-los usuarios seleccionados?';

$txt['support_credits_title'] = 'Soporte e Cr&eacute;ditos';
$txt['support_credits_info'] = 'Obt&eacute;n soporte de problemas comúns e informaci&oacute;n da versi&oacute;n para proporcionar en caso que teñas problemas.';
$txt['support_title'] = 'Informaci&oacute;n de Soporte';
$txt['support_versions_current'] = 'Versi&oacute;n actual de SMF';
$txt['support_versions_forum'] = 'Versi&oacute;n do Foro';
$txt['support_versions_php'] = 'Versi&oacute;n de PHP';
$txt['support_versions_db'] = '%1$s version';
$txt['support_versions_server'] = 'Versi&oacute;n do Servidor';
$txt['support_versions_gd'] = 'Versi&oacute;n de GD';
$txt['support_versions'] = 'Informaci&oacute;n de versións';
$txt['support_resources'] = 'Support Resources';
$txt['support_resources_p1'] = 'Our <a href="%1$s">Online Manual</a> provides the main documentation for SMF. The SMF Online Manual has many documents to help answer support questions and explain <a href="%2$s">Features</a>, <a href="%3$s">Settings</a>, <a href="%4$s">Themes</a>, <a href="%5$s">Packages</a>, etc. The Online Manual documents each area of SMF thoroughly and should answer most questions quickly.';
$txt['support_resources_p2'] = 'If you can\'t find the answers to your questions in the Online Manual, you may want to search our <a href="%1$s">Support Community</a> or ask for assistance in either our <a href="%2$s">English</a> or one of our many <a href="%3$s">international support boards</a>. The SMF Support Community can be used for <a href="%4$s">support</a>, <a href="%5$s">customization</a>, and many other things such as discussing SMF, finding a host, and discussing administrative issues with other forum administrators.';

$txt['support_latest'] = 'Soporte &amp; Asuntos comúns';
$txt['support_latest_fetch'] = 'Obtendo informaci&oacute;n do soporte...';

$txt['edit_permissions_info'] = 'Cambiar restricións e caracter&iacute;sticas dispoñibles globalmente ou a foros espec&iacute;ficos.';
$txt['membergroups_members'] = 'Usuarios regulares';
$txt['membergroups_guests'] = 'Visitantes';
$txt['membergroups_guests_na'] = 'n/a';
$txt['membergroups_add_group'] = 'Agregar grupo';
$txt['membergroups_permissions'] = 'Permisos';

$txt['permitgroups_restrict'] = 'Restrictivo';
$txt['permitgroups_standard'] = 'Est&aacute;ndar';
$txt['permitgroups_moderator'] = 'Moderador';
$txt['permitgroups_maintenance'] = 'Mantemento';
$txt['permitgroups_inherit'] = 'Herdar';

$txt['confirm_delete_attachments_all'] = '&#191;Est&#225;s seguro que desexas eliminar tódolos arquivos adjuntos?';
$txt['confirm_delete_attachments'] = '&#191;Est&#225;s seguro que desexas elimina-los arquivos adjuntos seleccionados?';
$txt['attachment_manager_browse_files'] = 'Examinar Arquivos';
$txt['attachment_manager_repair'] = 'Maintain';
$txt['attachment_manager_avatars'] = 'Avatares';
$txt['attachment_manager_attachments'] = 'Arquivos adjuntos';
$txt['attachment_manager_thumbs'] = 'Thumbnails';
$txt['attachment_manager_last_active'] = '&Uacute;ltima vez activo';
$txt['attachment_manager_member'] = 'Usuario';
$txt['attachment_manager_avatars_older'] = 'Eliminar avatares de usuarios non activos por m6aacute;s de';
$txt['attachment_manager_total_avatars'] = 'Total de Avatares';

$txt['attachment_manager_avatars_no_entries'] = 'There are currently no avatars.';
$txt['attachment_manager_attachments_no_entries'] = 'There are currently no attachments.';
$txt['attachment_manager_thumbs_no_entries'] = 'There are currently no thumbnails.';

$txt['attachment_manager_settings'] = 'Configuraci&oacute;n dos Arquivos adjuntos';
$txt['attachment_manager_avatar_settings'] = 'Configuraci&oacute;n dos Avatares';
$txt['attachment_manager_browse'] = 'Examinar arquivos';
$txt['attachment_manager_maintenance'] = 'Mantemento de Arquivos';
$txt['attachment_manager_save'] = 'Gardar';

$txt['attachmentEnable'] = 'Attachments mode';
$txt['attachmentEnable_deactivate'] = 'Disable attachments';
$txt['attachmentEnable_enable_all'] = 'Enable all attachments';
$txt['attachmentEnable_disable_new'] = 'Disable new attachments';
$txt['attachmentCheckExtensions'] = 'Revisar extensi&oacute;n do arquivo adjunto';
$txt['attachmentExtensions'] = 'Extensións permitidas dos arquivos adjuntos';
$txt['attachmentRecodeLineEndings'] = 'Recode line endings in textual attachments';
$txt['attachmentShowImages'] = 'Amosar arquivos adjuntos como im&aacute;genes debaixo do mensaxe';
$txt['attachmentEncryptFilenames'] = 'Encripta-los nomes dos arquivos almacenados';
$txt['attachmentUploadDir'] = 'Ruta onde se gardar&aacute;n os arquivos adjuntos';
$txt['attachmentUploadDir_multiple'] = 'Attachments directory';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Configure multiple attachment directories]</a>';
$txt['attachmentDirSizeLimit'] = 'Tama&ntilde;ou m&aacute;ximo do directorio de arquivos adjuntos';
$txt['attachmentPostLimit'] = 'Tama&ntilde;ou m&aacute;ximo do arquivos engado por mensaxe';
$txt['attachmentSizeLimit'] = 'Tama&ntilde;ou m&aacute;ximo do arquivos adjunto';
$txt['attachmentNumPerPostLimit'] = 'N&uacute;mero m&aacute;ximo de arquivos adjuntos nun mensaxe';
$txt['attachment_gd_warning'] = 'The GD module is currently not installed. Image re-encoding is not possible.';
$txt['attachment_image_reencode'] = 'Re-encode potentially dangerous image attachments';
$txt['attachment_image_reencode_note'] = '(requires GD module)';
$txt['attachment_image_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected attachments.';
$txt['attachment_image_paranoid'] = 'Perform extensive security checks on uploaded image attachments';
$txt['attachmentThumbnails'] = 'Resize images when showing under posts';
$txt['attachment_thumb_png'] = 'Save thumbnails as PNG';
$txt['attachmentThumbWidth'] = 'Maximum width of thumbnails';
$txt['attachmentThumbHeight'] = 'Maximum height of thumbnails';

$txt['attach_dir_does_not_exist'] = 'Does Not Exist';
$txt['attach_dir_not_writable'] = 'Not Writable';
$txt['attach_dir_files_missing'] = 'Files Missing (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Repair</a>)';
$txt['attach_dir_unused'] = 'Unused';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Manage Attachment Paths';
$txt['attach_paths'] = 'Attachment Paths';
$txt['attach_current_dir'] = 'Current Directory';
$txt['attach_path'] = 'Path';
$txt['attach_current_size'] = 'Current Size (KB)';
$txt['attach_num_files'] = 'Files';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Add Path';
$txt['attach_path_current_bad'] = 'Invalid current attachment path.';

$txt['mods_cat_avatars'] = 'Avatares';
$txt['avatar_directory'] = 'Directorio de Avatares';
$txt['avatar_url'] = 'URL dos Avatars';
$txt['avatar_dimension_note'] = '(0 = sen l&iacute;mite)';
$txt['avatar_max_width_external'] = 'Ancho m&aacute;ximo do avatar externo';
$txt['avatar_max_height_external'] = 'Alto m&aacute;ximo de avatar externo';
$txt['avatar_action_too_large'] = 'Se o avatar é demasiado grande...';
$txt['option_refuse'] = 'Lo rexeita';
$txt['option_html_resize'] = 'Lle permitir ó HTML lle axusta-lo tama&ntilde;ou';
$txt['option_js_resize'] = 'Resize it with JavaScript';
$txt['option_download_and_resize'] = 'Lo descarga e lle axusta-lo tama&ntilde;ou (precísase do m&oacute;dulo GD)';
$txt['avatar_max_width_upload'] = 'Ancho m&aacute;ximo de avatar subido';
$txt['avatar_max_height_upload'] = 'Alto m&aacute;ximo de avatar subido';
$txt['avatar_resize_upload'] = 'Lle axusta-lo tama&ntilde;ou ós avatares moi grandes';
$txt['avatar_resize_upload_note'] = '(precísase do m&oacute;dulo GD)';
$txt['avatar_download_png'] = '&iquest;Usar PNG para os avatares ós que se lles ajust&oacute; o tama&ntilde;ou?';
$txt['avatar_gd_warning'] = 'O modulo de GD non se encontra instalado. Algunhas funcións para manexo de avatares est&aacute;n desactivadas.';
$txt['avatar_external'] = 'Avatares externos';
$txt['avatar_upload'] = 'Pódense subir avatares';
$txt['avatar_server_stored'] = 'Avatares almacenados no servidor';
$txt['avatar_server_stored_groups'] = 'Membergroups allowed to select a server stored avatar';
$txt['avatar_upload_groups'] = 'Membergroups allowed to upload an avatar to the server';
$txt['avatar_external_url_groups'] = 'Grupos de usuarios ós que se lles permitir&aacute;seleccionar un URL externo';
$txt['avatar_select_permission'] = 'Selecciona os permisos para cada grupo de usuarios';
$txt['avatar_download_external'] = 'Descargar un avatar do URL especificado';
$txt['custom_avatar_enabled'] = 'Subir avatares a...';
$txt['option_attachment_dir'] = 'Directorio de Arquivos adjuntos';
$txt['option_specified_dir'] = 'Directorio espec&iacute;fico...';
$txt['custom_avatar_dir'] = 'Directorio no que se subir&aacute;n os arquivos';
$txt['custom_avatar_dir_desc'] = 'This should not be the same as the server-stored directory.';
$txt['custom_avatar_url'] = 'Subir avatar do UEL';
$txt['custom_avatar_check_empty'] = 'The custom avatar directory you have specified may be empty or invalid. Please ensure these settings are correct.';
$txt['avatar_reencode'] = 'Re-encode potentially dangerous avatars';
$txt['avatar_reencode_note'] = '(requires GD module)';
$txt['avatar_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected avatars.';
$txt['avatar_paranoid'] = 'Perform extensive security checks on uploaded avatars';

$txt['repair_attachments'] = 'Maintain Attachments';
$txt['repair_attachments_complete'] = 'Maintenance Complete';
$txt['repair_attachments_complete_desc'] = 'All selected errors have now been corrected';
$txt['repair_attachments_no_errors'] = 'Non errors were found!';
$txt['repair_attachments_error_desc'] = 'The follow errors were found during maintenance. Check the box next to the errors you wish to fix and hit continúe.';
$txt['repair_attachments_continue'] = 'Continúe';
$txt['repair_attachments_cancel'] = 'Cancelo';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d thumbnails are missing a parent attachment';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d parents are flagged as having thumbnails but don\'t';
$txt['attach_repair_file_missing_on_disk'] = '%d attachments/avatars have an entry but non longer exist on disk';
$txt['attach_repair_file_wrong_size'] = '%1$d attachments/avatars are being reported as the wrong filesize';
$txt['attach_repair_file_size_of_zero'] = '%1$d attachments/avatars have a size of zero on disk. (These will be deleted)';
$txt['attach_repair_attachment_no_msg'] = '%d attachments non longer have a message associated with them';
$txt['attach_repair_avatar_no_member'] = '%d avatars non longer have a member associated with them';
$txt['attach_repair_wrong_folder'] = '%1$d attachments are in the wrong folder';

$txt['news_title'] = 'News and Newsletters';
$txt['news_settings_desc'] = 'Here you can change the settings and permissions related to news and newsletters.';
$txt['news_settings_submit'] = 'Save';
$txt['news_mailing_desc'] = 'Dende este men&uacute; podes enviar mensaxes a tódolos usuarios que se rexistraron, e introducido o seu direcci&oacute;n de email. Podes edita-la lista de distribici&oacute;n, ou enviar mensaxes a todos. &Uacute;til para informaci&oacute;n de noticias ou modificacións.';
$txt['groups_edit_news'] = 'Groups allowed to edit news items';
$txt['groups_send_mail'] = 'Groups allowed to send out forum newsletters';
$txt['xmlnews_enable'] = '&iquest;Activar noticias XML/RSS?';
$txt['xmlnews_maxlen'] = 'Lonxitude m&aacute;xima do mensaxe:<div class="smalltext">(cero para deshabilitarlo.)</div>';
$txt['editnews_clickadd'] = 'Haz <i>click</i> aqu&iacute; para agregar outro elemento.';
$txt['editnews_remove_selected'] = 'Eliminar seleccionados';
$txt['editnews_remove_confirm'] = '&#191;Est&#225;s seguro que desexas elimina-los elementos de notificas seleccionados?';
$txt['censor_clickadd'] = 'Haz <i>click</i> aqu&iacute; para agregar outra palabra.';

$txt['layout_controls'] = 'Controis de Temas e Dise&ntilde;ou';
$txt['logs'] = 'Logs';
$txt['generate_reports'] = 'Reports';

$txt['update_available'] = 'Update Available!';
$txt['update_message'] = 'You\'re using an outdated version of SMF, which contains some bugs which have since been fixed.
	It is recommended that you <a href="" ide="update-link">update your forum</a> to the latest version as soon as possible. It only takes a minute!';

$txt['manageposts'] = 'Posts and Topics';
$txt['manageposts_title'] = 'Manage Posts and Topics';
$txt['manageposts_description'] = 'Fire you can manage all settings related to topics and posts.';

$txt['manageposts_seconds'] = 'seconds';
$txt['manageposts_minutes'] = 'minutos';
$txt['manageposts_characters'] = 'characters';
$txt['manageposts_days'] = 'days';
$txt['manageposts_posts'] = 'posts';
$txt['manageposts_topics'] = 'topics';

$txt['manageposts_settings'] = 'Post Settings';
$txt['manageposts_settings_description'] = 'here you can set everything related to posts and posting.';
$txt['manageposts_settings_submit'] = 'Save';

$txt['manageposts_bbc_settings'] = 'Bulletin Board Code';
$txt['manageposts_bbc_settings_description'] = 'Bulletin board code can be used to add markup to forum messages. For example, to <b>highlight</b> the word \'house\' you can type [b]house[/b]. All Bulletin board code tags are surrounded by square brackets (\'[\' and \']\').';
$txt['manageposts_bbc_settings_title'] = 'Bulletin Board Code Settings';
$txt['manageposts_bbc_settings_submit'] = 'Save';

$txt['manageposts_topic_settings'] = 'Topic Settings';
$txt['manageposts_topic_settings_description'] = 'Fire you can set all settings involving topics.';
$txt['manageposts_topic_settings_submit'] = 'Save';

$txt['removeNestedQuotes'] = 'Activar Eliminar citas aniñadas';
$txt['enableEmbeddedFlash'] = 'Incrustar flash? (o contrario, lo amosa como unha liga)';
$txt['enableEmbeddedFlash_warning'] = '&iexcl;pode ser un risco de seguridade!';
$txt['enableSpellChecking'] = 'Activa-la correcci&oacute;n ortogr&aacute;fica';
$txt['enableSpellChecking_warning'] = '&iexcl;isto non funciona en tódolos servidores!</div>';
$txt['disable_wysiwyg'] = 'Disable WYSIWYG editor';
$txt['max_messageLength'] = 'Carácteres m&aacute;ximos permitidos nos mensaxes';
$txt['max_messageLength_zero'] = '0 para que non haxa m&aacute;x';
$txt['fixLongWords'] = 'Partir palabras que teñan m&aacute;s letras que';
$txt['fixLongWords_zero'] = '0 para desactivar';
$txt['fixLongWords_warning'] = 'this does not work on all servers!';
$txt['topicSummaryPosts'] = 'Mensaxes a amosar no resumo do tema';
$txt['spamWaitTime'] = 'Tempo m&iacute;nimo entre dúas publicacións dende a mesma IP';
$txt['edit_wait_time'] = 'Editar Tempo de Agarda';
$txt['edit_disable_time'] = 'Tempo m&aacute;ximo despues de publicar para permitir lo edita';
$txt['edit_disable_time_zero'] = '0 para desactivar';

$txt['enableBBC'] = 'Activar Bulletin Board Code';
$txt['enablePostHTML'] = 'Activa-la publicaci&oacute;n de Tags b&aacute;sicos de HTML';
$txt['autoLinkUrls'] = 'Crear autom&aacute;ticamente las liga cando se escriben URLs';
$txt['disabledBBC'] = 'Enabled BBC tags';
$txt['bbcTagsToUse'] = 'Enabled BBC tags';
$txt['bbcTagsToUse_select'] = 'Select the tags allowed to be used';
$txt['bbcTagsToUse_select_all'] = 'Select all tags';

$txt['enableStickyTopics'] = 'Activar Temas Fixados';
$txt['enableParticipation'] = 'Activar Iconas de participaci&oacute;n';
$txt['oldTopicDays'] = 'D&iacute;as antes de que se advirta que un tema é vello, ó querer publicar unha resposta';
$txt['oldTopicDays_zero'] = '0 para desactivar';
$txt['defaultMaxTopics'] = 'M&aacute;ximo n&uacute;mero de temas a amosar no &Iacute;ndice de Mensaxes';
$txt['defaultMaxMessages'] = 'M&aacute;ximo n&uacute;mero de mensaxes a amosar nunha p&aacute;gina de Tema';
$txt['hotTopicPosts'] = '&iquest;N&uacute;mero de mensaxes para un tema quente?';
$txt['hotTopicVeryPosts'] = '&iquest;N&uacute;mero de mensaxes para un tema moi quente?';
$txt['enableAllMessages'] = 'N&uacute;mero m&aacute;ximo de respostas nun tema para amosar &quot;Todos&quot; os mensaxes';
$txt['enableAllMessages_zero'] = '0 para nunca amosar &quot;Todos&quot;';
$txt['disableCustomPerPage'] = 'Disable user defined topic/message count per page';
$txt['enablePreviousNext'] = 'Activa-lo Mod Tema Anterior/Seguinte';

$txt['not_done_title'] = 'Not done yet!';
$txt['not_done_reason'] = 'To avoid overloading your server, the process has been temporarily paused.  It should automatically continue in a few seconds.  If it doesn\'t, please click continue below.';
$txt['not_done_continue'] = 'Continue';

$txt['general_settings'] = 'General';
$txt['database_paths_settings'] = 'Database and Paths';
$txt['cookies_sessions_settings'] = 'Cookies and Sessions';
$txt['caching_settings'] = 'Caching';
$txt['load_balancing_settings'] = 'Load Balancing';

$txt['language_configuration'] = 'Languages';
$txt['language_description'] = 'This section allows you to edit languages installed on your forum, download new ones from the Simple Machines website. You may also edit language-related settings here.';
$txt['language_edit'] = 'Edit Languages';
$txt['language_add'] = 'Add Language';
$txt['language_settings'] = 'Settings';

$txt['advanced'] = 'Advanced';
$txt['simple'] = 'Simple';

$txt['admin_news_select_recipients'] = 'Please select who should receive a copy of the newsletter';
$txt['admin_news_select_group'] = 'Membergroups';
$txt['admin_news_select_group_desc'] = 'Select the groups to receive this newsletter.';
$txt['admin_news_select_members'] = 'Members';
$txt['admin_news_select_members_desc'] = 'Additional members to receive newsletter.';
$txt['admin_news_select_excluded_members'] = 'Excluded Members';
$txt['admin_news_select_excluded_members_desc'] = 'Members who should not receive newsletter.';
$txt['admin_news_select_excluded_groups'] = 'Excluded Groups';
$txt['admin_news_select_excluded_groups_desc'] = 'Select groups who should definitely not receive the newsletter.';
$txt['admin_news_select_email'] = 'Email Addresses';
$txt['admin_news_select_email_desc'] = 'A semi-colon separated list of email addresses which should be sent newsletter. (i.e. address1; address2)';
$txt['admin_news_select_override_notify'] = 'Override Notification Settings';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'You cannot send a personal message to an email address. If you continue all entered email addresses will be ignored.\\n\\nAre you sure you wish to do this?';

$txt['mailqueue_browse'] = 'Browse Queue';
$txt['mailqueue_settings'] = 'Settings';

$txt['admin_search'] = 'Quick Search';
$txt['admin_search_type_internal'] = 'Task/Setting';
$txt['admin_search_type_member'] = 'Member';
$txt['admin_search_type_online'] = 'Online Manual';
$txt['admin_search_go'] = 'Go';
$txt['admin_search_results'] = 'Search Results';
$txt['admin_search_results_desc'] = 'Results for search: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Search again';
$txt['admin_search_results_none'] = 'No results found!';

$txt['admin_search_section_sections'] = 'Section';
$txt['admin_search_section_settings'] = 'Setting';

$txt['core_settings_title'] = 'Core Features';
$txt['mods_cat_features'] = 'General';
$txt['mods_cat_security_general'] = 'General';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'Miscellaneous';
$txt['mods_cat_layout'] = 'Layout';
$txt['karma'] = 'Karma';
$txt['moderation_settings_short'] = 'Moderation';
$txt['signature_settings_short'] = 'Signatures';
$txt['custom_profile_shorttitle'] = 'Profile Fields';
$txt['pruning_title'] = 'Log Pruning';

$txt['boardsEdit'] = 'Modify Boards';
$txt['mboards_new_cat'] = 'Create New Category';
$txt['manage_holidays'] = 'Manage Holidays';
$txt['calendar_settings'] = 'Calendar Settings';
$txt['search_weights'] = 'Weights';
$txt['search_method'] = 'Search Method';

$txt['smiley_sets'] = 'Smiley Sets';
$txt['smileys_add'] = 'Add Smiley';
$txt['smileys_edit'] = 'Edit Smileys';
$txt['smileys_set_order'] = 'Set Smiley Order';
$txt['icons_edit_message_icons'] = 'Edit Message Icons';

$txt['membergroups_new_group'] = 'Add Membergroup';
$txt['membergroups_edit_groups'] = 'Edit Membergroups';
$txt['permissions_groups'] = 'General Permissions';
$txt['permissions_boards'] = 'Board Permissions';
$txt['permissions_profiles'] = 'Edit Profiles';
$txt['permissions_post_moderation'] = 'Post Moderation';

$txt['browse_packages'] = 'Browse Packages';
$txt['download_packages'] = 'Download Packages';
$txt['installed_packages'] = 'Installed Packages';
$txt['package_file_perms'] = 'File Permissions';
$txt['package_settings'] = 'Options';
$txt['themeadmin_admin_title'] = 'Manage and Install';
$txt['themeadmin_list_title'] = 'Theme Settings';
$txt['themeadmin_reset_title'] = 'Member Options';
$txt['themeadmin_edit_title'] = 'Modify Themes';
$txt['admin_browse_register_new'] = 'Register New Member';

$txt['search_engines'] = 'Search Engines';
$txt['spiders'] = 'Spiders';
$txt['spider_logs'] = 'Spider Log';
$txt['spider_stats'] = 'Stats';

$txt['paid_subscriptions'] = 'Paid Subscriptions';
$txt['paid_subs_view'] = 'View Subscriptions';

?>