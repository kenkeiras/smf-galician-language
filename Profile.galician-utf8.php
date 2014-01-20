<?php
// Version: 2.0; Profile

global $scripturl, $context;

$txt['no_profile_edit'] = 'You are not allowed to change this person\'s profile.';
$txt['website_title'] = 'Website title';
$txt['website_url'] = 'Website URL';
$txt['signature'] = 'Signature';
$txt['profile_posts'] = 'Posts';
$txt['change_profile'] = 'Change profile';
$txt['delete_user'] = 'Delete user';
$txt['current_status'] = 'Current Status:';
$txt['personal_text'] = 'Personal Text';
$txt['personal_picture'] = 'Personalized Picture';
$txt['no_avatar'] = 'No avatar';
$txt['choose_avatar_gallery'] = 'Choose avatar from gallery';
$txt['picture_text'] = 'Picture/Text';
$txt['reset_form'] = 'Reset Form';
$txt['preferred_language'] = 'Preferred Language';
$txt['age'] = 'Age';
$txt['no_pic'] = '(no pic)';
$txt['latest_posts'] = 'Latest posts of: ';
$txt['additional_info'] = 'Additional Information';
$txt['avatar_by_url'] = 'Specify your own avatar by URL. (e.g.: <em>http://www.mypage.com/mypic.gif</em>)';
$txt['my_own_pic'] = 'Specify avatar by URL';
$txt['date_format'] = 'The format here will be used to show dates throughout this forum.';
$txt['time_format'] = 'Time Format';
$txt['display_name_desc'] = 'This is the displayed name that people will see.';
$txt['personal_time_offset'] = 'Number of hours to +/- to make displayed time equal to your local time.';
$txt['dob'] = 'Birthdate';
$txt['dob_month'] = 'Month (MM)';
$txt['dob_day'] = 'Day (DD)';
$txt['dob_year'] = 'Year (YYYY)';
$txt['password_strength'] = 'For best security, you should use eight or more characters with a combination of letters, numbers, and symbols.';
$txt['include_website_url'] = 'This must be included if you specify a URL below.';
$txt['complete_url'] = 'This must be a complete URL.';
$txt['your_icq'] = 'This is your ICQ number.';
$txt['your_aim'] = 'This is your AOL Instant Messenger nickname.';
$txt['your_yim'] = 'This is your Yahoo! Instant Messenger nickname.';
$txt['sig_info'] = 'Signatures are displayed at the bottom of each post or personal message. BBCode and smileys may be used in your signature.';
$txt['max_sig_characters'] = 'Max characters: %1$d; characters remaining: ';
$txt['send_member_pm'] = 'Send this member a personal message';
$txt['hidden'] = 'hidden';
$txt['current_time'] = 'Current forum time';
$txt['digits_only'] = 'The \'number of posts\' box can only contain digits.';

$txt['language'] = 'Language';
$txt['avatar_too_big'] = 'Avatar image is too big, please resize it and try again (max';
$txt['invalid_registration'] = 'Invalid Date Registered value, valid example:';
$txt['msn_email_address'] = 'Your MSN messenger email address';
$txt['current_password'] = 'Current Password';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'For security reasons, your current password is required to make changes to your account.';

$txt['timeoffset_autodetect'] = '(detectar automaticamente)';

$txt['secret_question'] = 'Secret Question';
$txt['secret_desc'] = 'Podes introducir aqui unha pregunta e unha resposta que ninguén coñeza, para facer mais facil a recuperacion da túa contrasinal.';
$txt['secret_desc2'] = '&iexcl;Eligela coidadosamente, non desearias que alguén adiviñe a túa resposta!';
$txt['secret_answer'] = 'Answer';
$txt['secret_ask'] = 'Ask me my question';
$txt['cant_retrieve'] = 'You can\'t retrieve your password, but you can set a new one by following a link sent to you by email.  You also have the option of setting a new password by answering your secret question.';
$txt['incorrect_answer'] = 'Sorry, but you did not specify a valid combination of Secret Question and Answer in your profile.  Please click on the back button, and use the default method of obtaining your password.';
$txt['enter_new_password'] = 'Please enter the answer to your question, and the password you would like to use.  Your password will be changed to the one you select provided you answer the question correctly.';
$txt['password_success'] = 'Your password was changed successfully.<br />Click <a href="' . $scripturl . '?action=login">here</a> to login.';
$txt['secret_why_blank'] = '&iquest;porque isto esta en branco?';

$txt['authentication_reminder'] = 'Authentication Reminder';
$txt['password_reminder_desc'] = 'If you\'ve forgotten your login details, don\'t worry, they can be retrieved. To start this process please enter your username or email address below.';
$txt['authentication_options'] = 'Please select one of the two options below';
$txt['authentication_openid_email'] = 'Email me a reminder of my OpenID identity';
$txt['authentication_openid_secret'] = 'Answer my &quot;secret question&quot; to display my OpenID identity';
$txt['authentication_password_email'] = 'Email me a new password';
$txt['authentication_password_secret'] = 'Let me set a new password by answering my &quot;secret question&quot;';
$txt['openid_secret_reminder'] = 'Please enter your answer to the question below. If you get it correct your OpenID identity will be shown.';
$txt['reminder_openid_is'] = 'The OpenID identity associated with your account is:<br />&nbsp;&nbsp;&nbsp;&nbsp;<strong>%1$s</strong><br /><br />Please make a note of this for future reference.';
$txt['reminder_continue'] = 'Continue';

$txt['current_theme'] = 'Current Theme';
$txt['change'] = '(change)';
$txt['theme_preferences'] = 'Theme preferences';
$txt['theme_forum_default'] = 'Default da comunidade, ou do foro local';
$txt['theme_forum_default_desc'] = 'Este é o tema default, o que significa que a túa tema cambiase de acordo á configuracion establecida polo administrador, e do foro que estes vendo.';

$txt['profileConfirm'] = '&#191;Realmente desexas borrar este usuario?';

$txt['custom_title'] = 'Custom Title';

$txt['lastLoggedIn'] = 'ultima vez activo';

$txt['notify_settings'] = 'Notification Settings:';
$txt['notify_save'] = 'Save settings';
$txt['notify_important_email'] = 'Receive forum newsletters, announcements and important notifications by email.';
$txt['notify_regularity'] = 'For topics and boards I\'ve requested notification on, notify me';
$txt['notify_regularity_instant'] = 'Instantly';
$txt['notify_regularity_first_only'] = 'Instantly - but only for the first unread reply';
$txt['notify_regularity_daily'] = 'Daily';
$txt['notify_regularity_weekly'] = 'Weekly';
$txt['auto_notify'] = 'Activa-la notificacion cando publiques ou respondas a un tema.';
$txt['notify_send_types'] = 'Para los tema e foros dos que solicitei notificacións, notificame de';
$txt['notify_send_type_everything'] = 'Todo o que aconteza';
$txt['notify_send_type_everything_own'] = 'Todo, se eu cre o tema';
$txt['notify_send_type_only_replies'] = 'Só respostas';
$txt['notify_send_type_nothing'] = 'Nada';
$txt['notify_send_body'] = 'Cando se envíe notificacion dunha resposta a un tema, envia-lo mensaxe no email (pero por favor non respondas a eses emails.)';

$txt['notifications_topics'] = 'Notificacións actuais de Temas';
$txt['notifications_topics_list'] = 'A túa estas sendo notificado ó haber novas respostas nos seguintes temas';
$txt['notifications_topics_none'] = 'A túa non estas recibindo polo momento, notificacións de ningun tema.';
$txt['notifications_topics_howto'] = 'Para recibir notificacións dun tema, fai click no boton &quot;notificar&quot; mentres estes viendolo.';
$txt['notifications_boards'] = 'Notificacións actuais de Foros';
$txt['notifications_boards_list'] = 'A túa estas sendo notificado ó haber novos temas nos seguintes foros';
$txt['notifications_boards_none'] = 'A túa non estas recibindo polo momento, notificacións de ningun foro.';
$txt['notifications_boards_howto'] = 'Para recibir notificacións dun foro especifico, fai click no boton &quot;notificar&quot; no indice do foro.';
$txt['notifications_update'] = 'Desinscribirse';

$txt['statPanel_showStats'] = 'Estadisticas de usuario para: ';
$txt['statPanel_users_votes'] = 'Numero de Votos emitidos';
$txt['statPanel_users_polls'] = 'Numero de Sondaxes creadas';
$txt['statPanel_total_time_online'] = 'Tempo total en linea';
$txt['statPanel_noPosts'] = '&iexcl;Non fai publicado ningun mensaxe!';
$txt['statPanel_generalStats'] = 'Estadisticas Xerais';
$txt['statPanel_posts'] = 'mensaxes';
$txt['statPanel_topics'] = 'temas';
$txt['statPanel_total_posts'] = 'Total de Mensaxes';
$txt['statPanel_total_topics'] = 'Total de Temas creados';
$txt['statPanel_votes'] = 'votos';
$txt['statPanel_polls'] = 'sondaxes';
$txt['statPanel_topBoards'] = 'Foros mais populares por Mensaxes';
$txt['statPanel_topBoards_posts'] = '%1$d posts of the board\'s %2$d posts (%3$01.2f%%)';
$txt['statPanel_topBoards_memberposts'] = '%1$d posts of the member\'s %2$d posts (%3$01.2f%%)';
$txt['statPanel_topBoardsActivity'] = 'Foros mais populares por Actividade';
$txt['statPanel_activityTime'] = 'Actividade de publicacións por Hora';
$txt['statPanel_activityTime_posts'] = '%1$d posts (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'Hora';

$txt['deleteAccount_warning'] = '&iexcl;Advertencia - Estas accións son irreversibles!';
$txt['deleteAccount_desc'] = 'Dende esta pantalla, podes borra-la conta e os mensaxes deste usuario.';
$txt['deleteAccount_member'] = 'Borra-la conta deste usuario';
$txt['deleteAccount_posts'] = 'Mensaxes do usuario que seran eliminados';
$txt['deleteAccount_none'] = 'Ningún';
$txt['deleteAccount_all_posts'] = 'Tódolos Mensaxes';
$txt['deleteAccount_topics'] = 'Temas e Mensaxes';
$txt['deleteAccount_confirm'] = '&#191;Est&#225;s completamente seguro de desexar borrar esta conta?';
$txt['deleteAccount_approval'] = 'É importante mencionar que os moderadores do foro tendran que aproba-lo borrado desta conta para que poida ser eliminada';

$txt['profile_of_username'] = 'Profile of %1$s';
$txt['profileInfo'] = 'Informacion do Perfil';
$txt['showPosts'] = 'Amosar Mensaxes';
$txt['showPosts_help'] = 'This section allows you to view all posts made by this member. Note that you can only see posts made in areas you currently have access to.';
$txt['showMessages'] = 'Messages';
$txt['showTopics'] = 'Topics';
$txt['showAttachments'] = 'Attachments';
$txt['statPanel'] = 'Amosar Estadisticas';
$txt['editBuddyIgnoreLists'] = 'Buddies/Ignore List';
$txt['editBuddies'] = 'Edit Buddies';
$txt['editIgnoreList'] = 'Edit Ignore List';
$txt['trackUser'] = 'Rastrear Usuario';
$txt['trackActivity'] = 'Activity';
$txt['trackIP'] = 'Rastrear IP';

$txt['authentication'] = 'Authentication';
$txt['change_authentication'] = 'From this section you can change how you login to the forum. You may choose to either use an OpenID account for your authentication, or alternatively switch to use a username and password.';

$txt['profileEdit'] = 'Editar Perfil';
$txt['account_info'] = 'esta é a configuracion da túa conta. Esta paxina contén toda a informacion critica que te identifica no foro. Por razóns de seguridade, debes introduci-la túa contrasinal (actual) para poder modificar esta informacion.';
$txt['forumProfile_info'] = 'O teu podes cambia-lo teu informacion persoal nesta paxina. Esta informacion sera amosada a traves de ' . $context['forum_name'] . '. Se non queres compartir esta informacion , simplemente dejalo en branco - nada aqui é obrigatorio.';
$txt['theme'] = 'Configuracion de Aparencia e Deseño';
$txt['theme_info'] = 'Esta seccion permítete personaliza-la aparencia e o deseño do foro.';
$txt['notification'] = 'Notificacións e email';
$txt['notification_info'] = 'SMF permite que s eche envíen notificacións cando haxa respostas ós mensaxes, novos temas, e anuncios do foro. Podes cambiar estes valores aqui, ou revisa-los temas e foros dos que actualmente estas recibindo notificacións.';
$txt['groupmembership'] = 'Group Membership';
$txt['groupMembership_info'] = 'In this section of your profile you can change which groups you belong to.';
$txt['ignoreboards'] = 'Ignore Boards Options';
$txt['ignoreboards_info'] = 'This page lets you ignore particular boards.  When a board is ignored, the new post indicator will not show up on the board index.  New posts will not show up using the "unread post" search link (when searching it will not look in those boards) however, ignored boards will still appear on the board index and upon entering will show which topics have new posts.  When using the "unread replies" link, new posts in an ignored board will still be shown.';
$txt['pmprefs'] = 'Configuracion de Mensaxes Persoais';

$txt['profileAction'] = 'Accións';
$txt['deleteAccount'] = 'Borrar esta cuenta';
$txt['profileSendIm'] = 'Enviar Mensaxe Persoal';
$txt['profile_sendpm_short'] = 'Send PM';

$txt['profileBanUser'] = 'Lle prohibi-lo acceso ó usuario';

$txt['display_name'] = 'Amosar Nome';
$txt['enter_ip'] = 'Introduce IP (rango)';
$txt['errors_by'] = 'Mensaxes de erro por';
$txt['errors_desc'] = 'Debaixo hai unha lista con tódolos erros recentes que este usuario xerou/experimentado.';
$txt['errors_from_ip'] = 'Mensaxes de erro dende o IP (rango)';
$txt['errors_from_ip_desc'] = 'Debaixo esta a lista de tódolos mensaxes de erro xerados dende esta IP (rango)';
$txt['ip_address'] = 'Direccion IP';
$txt['ips_in_errors'] = 'IPs usadas nos mensaxes de erro';
$txt['ips_in_messages'] = 'IPs usadas nos mensaxes';
$txt['members_from_ip'] = 'Usuarios dende o IP (rango)';
$txt['members_in_range'] = 'Usuarios probablemente no mesmo rango';
$txt['messages_from_ip'] = 'Mensaxes envíados dende o IP (rango)';
$txt['messages_from_ip_desc'] = 'Debaixo esta a lista de tódolos mensaxes publicados dende esta IP (rango).';
$txt['most_recent_ip'] = 'Direccións IP mais recentes';
$txt['why_two_ip_address'] = 'Why are there two IP addresses listed?';
$txt['no_errors_from_ip'] = 'Non se atoparon mensaxes de erro dende o IP especificado (rango)';
$txt['no_errors_from_user'] = 'Non se atoparon mensaxes de erro do usuario especificado';
$txt['no_members_from_ip'] = 'Non se atoparon usuarios dende o IP especificado (rango)';
$txt['no_messages_from_ip'] = 'Non se atoparon mensaxes dende o IP especificado (rango)';
$txt['none'] = 'Ningún';
$txt['own_profile_confirm'] = '&iquest;Realmente desexas borra-lo teu propio perfil?';
$txt['view_ips_by'] = 'Ver IPS usados por';

$txt['avatar_will_upload'] = 'Subire a miña propia imaxe';

$txt['activate_changed_email_title'] = 'Email Address Changed';
$txt['activate_changed_email_desc'] = 'You\'ve changed your email address. In order to validate this address you will receive an email. Click the link in that email to reactivate your account.';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'Unable to send reminder email.';
$txt['send_email'] = 'Send an email to';
$txt['to_ask_password'] = 'to ask for your authentication details';

$txt['user_email'] = 'Username/Email';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'New password for ' . $context['forum_name'];
$txt['reminder_mail'] = 'This mail was sent because the \'forgot password\' function has been applied to your account. To set a new password, click the following link';
$txt['reminder_sent'] = 'A mail has been sent to your email address. Click the link in that mail to set a new password.';
$txt['reminder_openid_sent'] = 'Your current OpenID identity has been sent to your email address.';
$txt['reminder_set_password'] = 'Set Password';
$txt['reminder_password_set'] = 'Password successfully set';
$txt['reminder_error'] = '%1$s failed to answer their secret question correctly when attempting to change a forgotten password.';

$txt['registration_not_approved'] = 'Sorry, this account has not yet been approved. If you need to change your email address please click';
$txt['registration_not_activated'] = 'Sorry, this account has not yet been activated. If you need to resend the activation email please click';

$txt['primary_membergroup'] = 'Grupo de usuarios Primario';
$txt['additional_membergroups'] = 'Grupos Adicionais';
$txt['additional_membergroups_show'] = '[ amosar grupos adicionais ]';
$txt['no_primary_membergroup'] = '(sen grupo primario)';
$txt['deadmin_confirm'] = '&#191;Estas seguro que desexas eliminar irrevocablemente o teu status de administrador?';

$txt['account_activate_method_2'] = 'A conta require reactivacion despues dun cambio de email';
$txt['account_activate_method_3'] = 'A conta non esta aprobada';
$txt['account_activate_method_4'] = 'A conta esta agardando aprobacion para o seu eliminacion';
$txt['account_activate_method_5'] = 'A conta é unha conta &quot;por debaixo da idade&quot; agardando aprobacion';
$txt['account_not_activated'] = 'A conta non esta actualmente activa';
$txt['account_activate'] = 'activar';
$txt['account_approve'] = 'aprobar';
$txt['user_is_banned'] = 'User is currently banned';
$txt['view_ban'] = 'View';
$txt['user_banned_by_following'] = 'This user is currently affected by the following bans';
$txt['user_cannot_due_to'] = 'User cannot %1$s as a result of ban: &quot;%2$s&quot;';
$txt['ban_type_post'] = 'post';
$txt['ban_type_register'] = 'register';
$txt['ban_type_login'] = 'login';
$txt['ban_type_access'] = 'access forum';

$txt['show_online'] = '&iquest;Amosar a outros usuarios que estas conectado?';

$txt['return_to_post'] = 'Regresar, por defecto, los tema despues de publicar un mensaxe.';
$txt['no_new_reply_warning'] = 'Non advertir de novas respostas mentres se esta publicando un mensaxe.';
$txt['posts_apply_ignore_list'] = 'Hide messages posted by members on my ignore list.';
$txt['recent_posts_at_top'] = 'Amosa-los mensaxes mais recentes a parte superior';
$txt['recent_pms_at_top'] = 'Amosa-los mensaxes persoais mais recentes a parte superior.';
$txt['wysiwyg_default'] = 'Show WYSIWYG editor on post page by default.';

$txt['timeformat_default'] = '(Forum Default)';
$txt['timeformat_easy1'] = 'Mes Día, Ano, HH:MM:SS a/pm';
$txt['timeformat_easy2'] = 'Mes Día, Ano, HH:MM:SS (24 hrs.)';
$txt['timeformat_easy3'] = 'YYYY-MM-DD, HH:MM:SS';
$txt['timeformat_easy4'] = 'DD Month YYYY, HH:MM:SS';
$txt['timeformat_easy5'] = 'DD-MM-YYYY, HH:MM:SS';

$txt['poster'] = 'Poster';

$txt['board_desc_inside'] = 'Show board descriptions inside boards.';
$txt['show_children'] = 'Amosa-los subforos en cada paxina dentro do foro, non solamente na primeira.';
$txt['use_sidebar_menu'] = 'Use sidebar menus instead of dropdown menus when possible.';
$txt['show_no_avatars'] = 'Non amosa-los avatares doutros usuarios.';
$txt['show_no_signatures'] = 'Non amosa-las sinaturas doutros usuarios.';
$txt['show_no_censored'] = 'Deixa-las palabras sen censurar.';
$txt['topics_per_page'] = 'Topics to display per page:';
$txt['messages_per_page'] = 'Messages to display per page:';
$txt['per_page_default'] = 'forum default';
$txt['calendar_start_day'] = 'Primeiro día da semana no calendario';
$txt['display_quick_reply'] = 'Usa-la resposta rapida ó amosar temas: ';
$txt['display_quick_reply1'] = 'non lo amosa';
$txt['display_quick_reply2'] = 'lo amosa, desactivado por defecto';
$txt['display_quick_reply3'] = 'lo amosa, activado por defecto';
$txt['display_quick_mod'] = 'Amosa-la moderacion rapida no indice de mensaxes como ';
$txt['display_quick_mod_none'] = 'non amosar.';
$txt['display_quick_mod_check'] = 'checkboxes.';
$txt['display_quick_mod_image'] = 'iconas.';

$txt['whois_title'] = 'Buscar IP nun servidor rexional de whois';
$txt['whois_afrinic'] = 'AfriNIC (africa)';
$txt['whois_apnic'] = 'APNIC (Region Asa Pacifico)';
$txt['whois_arin'] = 'ARIN (Norteamerica, unha porcion do Caribe, e africa de sub-Sahara)';
$txt['whois_lacnic'] = 'LACNIC (America Latina e region do Caribe)';
$txt['whois_ripe'] = 'RIPE (Europa, Este Medio, e partes de africa e Asa)';

$txt['moderator_why_missing'] = '&iquest;porque non esta moderador aqui?';
$txt['username_change'] = 'cambiar';
$txt['username_warning'] = 'Para cambia-lo nome de usuario deste usuario, o foro debe tamen resetear a súa contrasinal, a cal s ele envíase por email ó usuario co seu novo nome de usuario.';

$txt['show_member_posts'] = 'View Member Posts';
$txt['show_member_topics'] = 'View Member Topics';
$txt['show_member_attachments'] = 'View Member Attachments';
$txt['show_posts_none'] = 'No posts have been posted yet.';
$txt['show_topics_none'] = 'No topics have been posted yet.';
$txt['show_attachments_none'] = 'No attachments have been posted yet.';
$txt['show_attach_filename'] = 'Filename';
$txt['show_attach_downloads'] = 'Downloads';
$txt['show_attach_posted'] = 'Posted';

$txt['showPermissions'] = 'Amosar Permisos';
$txt['showPermissions_status'] = 'Permission status';
$txt['showPermissions_help'] = 'This section allows you to view all permissions for this member (denied permissions are <del>struck out</del>).';
$txt['showPermissions_given'] = 'Outorgados por';
$txt['showPermissions_denied'] = 'Rexeitados por';
$txt['showPermissions_permission'] = 'Permisos (os permisos rexeitados estan <do>tachados</do>)';
$txt['showPermissions_none_general'] = 'Este usuario non ten establecido ningun permiso xeral.';
$txt['showPermissions_none_board'] = 'Este usuario non ten permisos especificos en algun foro.';
$txt['showPermissions_all'] = 'Como administrador, este usuario ten tódolos permisos posibles.';
$txt['showPermissions_select'] = 'Permisos especificos do foro para';
$txt['showPermissions_general'] = 'Permisos Xerais';
$txt['showPermissions_global'] = 'Tódolos foros';
$txt['showPermissions_restricted_boards'] = 'Restricted boards';
$txt['showPermissions_restricted_boards_desc'] = 'The following boards are not accessible by this user';

$txt['local_time'] = 'Hora Local';
$txt['posts_per_day'] = 'por día';

$txt['buddy_ignore_desc'] = 'This area allows you to maintain your buddy and ignore lists for this forum. Adding members to these lists will, amongst other things, help control mail and PM traffic, depending on your preferences.';

$txt['buddy_add'] = 'Agregar á lista de amigos';
$txt['buddy_remove'] = 'Eliminar da lista de amigos';
$txt['buddy_add_button'] = 'Add';
$txt['no_buddies'] = 'Your buddy list is currently empty';

$txt['ignore_add'] = 'Add To Ignore List';
$txt['ignore_remove'] = 'Remove From Ignore List';
$txt['ignore_add_button'] = 'Add';
$txt['no_ignore'] = 'Your ignore list is currently empty';

$txt['regular_members'] = 'Registered Members';
$txt['regular_members_desc'] = 'Every member of the forum is a member of this group.';
$txt['group_membership_msg_free'] = 'Your group membership was successfully updated.';
$txt['group_membership_msg_request'] = 'Your request has been submitted, please be patient while the request is considered.';
$txt['group_membership_msg_primary'] = 'Your primary group has been updated';
$txt['current_membergroups'] = 'Current Membergroups';
$txt['available_groups'] = 'Available Groups';
$txt['join_group'] = 'Join Group';
$txt['leave_group'] = 'Leave Group';
$txt['request_group'] = 'Request Membership';
$txt['approval_pending'] = 'Approval Pending';
$txt['make_primary'] = 'Make Primary Group';

$txt['request_group_membership'] = 'Request Group Membership';
$txt['request_group_membership_desc'] = 'Before you can join this group your membership must be approved by the moderator. Please give a reason for joining this group';
$txt['submit_request'] = 'Submit Request';

$txt['profile_updated_own'] = 'Your profile has been updated successfully.';
$txt['profile_updated_else'] = 'The profile for %1$s has been updated successfully.';

$txt['profile_error_signature_max_length'] = 'Your signature cannot be greater than %1$d characters';
$txt['profile_error_signature_max_lines'] = 'Your signature cannot span more than %1$d lines';
$txt['profile_error_signature_max_image_size'] = 'Images in your signature must be no greater than %1$dx%2$d pixels';
$txt['profile_error_signature_max_image_width'] = 'Images in your signature must be no wider than %1$d pixels';
$txt['profile_error_signature_max_image_height'] = 'Images in your signature must be no higher than %1$d pixels';
$txt['profile_error_signature_max_image_count'] = 'You cannot have more than %1$d images in your signature';
$txt['profile_error_signature_max_font_size'] = 'Text in your signature must be smaller than %1$s in size';
$txt['profile_error_signature_allow_smileys'] = 'You are not allowed to use any smileys within your signature';
$txt['profile_error_signature_max_smileys'] = 'You are not allowed to use more than %1$d smileys within your signature';
$txt['profile_error_signature_disabled_bbc'] = 'The following BBC is not allowed within your signature: %1$s';

$txt['profile_view_warnings'] = 'View Warnings';
$txt['profile_issue_warning'] = 'Issue a Warning';
$txt['profile_warning_level'] = 'Warning Level';
$txt['profile_warning_desc'] = 'From this section you can adjust the user\'s warning level and issue them with a written warning if necessary. You can also track their warning history and view the effects of their current warning level as determined by the administrator.';
$txt['profile_warning_name'] = 'Member Name';
$txt['profile_warning_impact'] = 'Result';
$txt['profile_warning_reason'] = 'Reason for Warning';
$txt['profile_warning_reason_desc'] = 'This is required and will be logged.';
$txt['profile_warning_effect_none'] = 'None.';
$txt['profile_warning_effect_watch'] = 'User will be added to moderator watch list.';
$txt['profile_warning_effect_own_watched'] = 'You are on the moderator watch list.';
$txt['profile_warning_is_watch'] = 'being watched';
$txt['profile_warning_effect_moderation'] = 'All users posts will be moderated.';
$txt['profile_warning_effect_own_moderated'] = 'All your posts will be moderated.';
$txt['profile_warning_is_moderation'] = 'posts are moderated';
$txt['profile_warning_effect_mute'] = 'User will not be able to post.';
$txt['profile_warning_effect_own_muted'] = 'You will not be able to post.';
$txt['profile_warning_is_muted'] = 'cannot post';
$txt['profile_warning_effect_text'] = 'Level >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Send a Notification';
$txt['profile_warning_notify_template'] = 'Select template:';
$txt['profile_warning_notify_subject'] = 'Notification Subject';
$txt['profile_warning_notify_body'] = 'Notification Message';
$txt['profile_warning_notify_template_subject'] = 'You have received a warning';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '{MEMBER},' . "\n\n" . 'You have received a warning for %1$s. Please cease these activities and abide by the forum rules otherwise we will take further action.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_template_outline_post'] = '{MEMBER},' . "\n\n" . 'You have received a warning for %1$s in regards to the message:' . "\n" . '{MESSAGE}.' . "\n\n" . 'Please cease these activities and abide by the forum rules otherwise we will take further action.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_for_spamming'] = 'spamming';
$txt['profile_warning_notify_title_spamming'] = 'Spamming';
$txt['profile_warning_notify_for_offence'] = 'posting offensive material';
$txt['profile_warning_notify_title_offence'] = 'Posting Offensive Material';
$txt['profile_warning_notify_for_insulting'] = 'insulting other users and/or staff members';
$txt['profile_warning_notify_title_insulting'] = 'Insulting Users/Staff';
$txt['profile_warning_issue'] = 'Issue Warning';
$txt['profile_warning_max'] = '(Max 100)';
$txt['profile_warning_limit_attribute'] = 'Note you can not adjust this user\'s level by more than %1$d%% in a 24 hour period.';
$txt['profile_warning_errors_occured'] = 'Warning has not been sent due to following errors';
$txt['profile_warning_success'] = 'Warning Successfully Issued';
$txt['profile_warning_new_template'] = 'New Template';

$txt['profile_warning_previous'] = 'Previous Warnings';
$txt['profile_warning_previous_none'] = 'This user has not received any previous warnings.';
$txt['profile_warning_previous_issued'] = 'Issued By';
$txt['profile_warning_previous_time'] = 'Time';
$txt['profile_warning_previous_level'] = 'Points';
$txt['profile_warning_previous_reason'] = 'Reason';
$txt['profile_warning_previous_notice'] = 'View Notice Sent to Member';

$txt['viewwarning'] = 'View Warnings';
$txt['profile_viewwarning_for_user'] = 'Warnings for %1$s';
$txt['profile_viewwarning_no_warnings'] = 'No warnings have yet been issued.';
$txt['profile_viewwarning_desc'] = 'Below is a summary of all the warnings that have been issued by the forum moderation team.';
$txt['profile_viewwarning_previous_warnings'] = 'Previous Warnings';
$txt['profile_viewwarning_impact'] = 'Warning Impact';

$txt['subscriptions'] = 'Paid Subscriptions';

$txt['pm_settings_desc'] = 'From this page you can change a variety of personal messaging options, including how messages are displayed and who may send them to you.';
$txt['email_notify'] = 'Notify by email every time you receive a personal message:';
$txt['email_notify_never'] = 'Nunca';
$txt['email_notify_buddies'] = 'Solamente dos amigos';
$txt['email_notify_always'] = 'Sempre';

$txt['pm_receive_from'] = 'Receive personal messages from:';
$txt['pm_receive_from_everyone'] = 'All members';
$txt['pm_receive_from_ignore'] = 'All members, except those on my ignore list';
$txt['pm_receive_from_admins'] = 'Administrators only';
$txt['pm_receive_from_buddies'] = 'Buddies and Administrators only';

$txt['copy_to_outbox'] = 'Gardar, por defecto, unha copia de cada Mensaxe Persoal no meu buzon de saída.';
$txt['popup_messages'] = '&iquest;Amosar un popup cando recibas un novo mensaxe?';
$txt['pm_remove_inbox_label'] = 'Remove the inbox label when applying another label';
$txt['pm_display_mode'] = 'Display personal messages';
$txt['pm_display_mode_all'] = 'All at once';
$txt['pm_display_mode_one'] = 'One at a time';
$txt['pm_display_mode_linked'] = 'As a conversation';
// Use entities in the below string.
$txt['pm_recommend_enable_outbox'] = 'To make the most of this setting we suggest you enable &quot;Save a copy of each Personal Message in my sent items by default&quot;\\n\\nThis will help ensure that the conversations flow better as you can see both sides of the conversation.';

$txt['tracking'] = 'Tracking';
$txt['tracking_description'] = 'This section allows you to review certain profile actions performed on this member\'s profile as well as track their IP address.';

$txt['trackEdits'] = 'Profile Edits';
$txt['trackEdit_deleted_member'] = 'Deleted Member';
$txt['trackEdit_no_edits'] = 'No edits have so far been recorded for this member.';
$txt['trackEdit_action'] = 'Field';
$txt['trackEdit_before'] = 'Value Before';
$txt['trackEdit_after'] = 'Value After';
$txt['trackEdit_applicator'] = 'Changed By';

$txt['trackEdit_action_real_name'] = 'Member Name';
$txt['trackEdit_action_usertitle'] = 'Custom Title';
$txt['trackEdit_action_member_name'] = 'Username';
$txt['trackEdit_action_email_address'] = 'Email Address';
$txt['trackEdit_action_id_group'] = 'Primary Membergroup';
$txt['trackEdit_action_additional_groups'] = 'Additional Membergroups';

?>