<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'You are not allowed to access this section';
$txt['wireless_error_notyet'] = 'Sorry, this section isn\'t available for wireless users at this time.';

$txt['mods_only'] = 'Only Moderators can use the direct remove function, please remove this message through the modify feature.';
$txt['no_name'] = 'You didn\'t fill the name field out.  It is required.';
$txt['no_email'] = 'You didn\'t fill the email field out.  It is required.';
$txt['topic_locked'] = 'This topic is locked, you are not allowed to post or modify messages...';
$txt['no_password'] = 'Password field empty';
$txt['already_a_user'] = 'The username you tried to use already exists.';
$txt['cant_move'] = 'You are not allowed to move topics...';
$txt['login_to_post'] = 'To post you must be logged in. If you don\'t have an account yet, please <a href="' . $scripturl . '?action=register">register</a>.';
$txt['passwords_dont_match'] = 'Passwords aren\'t the same.';
$txt['register_to_use'] = 'Sorry, you must register before using this feature.';
$txt['password_invalid_character'] = 'Invalid character used in password.';
$txt['name_invalid_character'] = 'Invalid character used in name.';
$txt['email_invalid_character'] = 'Invalid character used in email.';
$txt['username_reserved'] = 'The username you tried to use contains the reserved name \'%1$s\'. Please try another username.';
$txt['numbers_one_to_nine'] = 'This field only accepts numbers from 0-9';
$txt['not_a_user'] = 'The user whose profile you are trying to view does not exist.';
$txt['not_a_topic'] = 'This topic doesn\'t exist on this board.';
$txt['not_approved_topic'] = 'This topic has not been approved yet.';
$txt['email_in_use'] = 'That email address (%1$s) is being used by a registered member already. If you feel this is a mistake, go to the login page and use the password reminder with that address.';

$txt['didnt_select_vote'] = 'You didn\'t select a vote option.';
$txt['poll_error'] = 'Either that poll doesn\'t exist, the poll has been locked, or you tried to vote twice.';
$txt['members_only'] = 'This option is only available to registered members.';
$txt['locked_by_admin'] = 'This was locked by an administrator.  You cannot unlock it.';
$txt['not_enough_posts_karma'] = 'Sorry, you don\'t have enough posts to modify karma - you need at least %1$d.';
$txt['cant_change_own_karma'] = 'Sorry, you are not permitted to modify your own karma.';
$txt['karma_wait_time'] = 'Sorry, you can\'t repeat a karma action without waiting %1$s %2$s.';
$txt['feature_disabled'] = 'Sorry, this feature is disabled.';
$txt['cant_access_upload_path'] = 'Cannot access attachments upload path!';
$txt['file_too_big'] = 'Your file is too large. The maximum attachment size allowed is %1$d KB.';
$txt['attach_timeout'] = 'Your attachment couldn\'t be saved. This might happen because it took too long to upload or the file is bigger than the server will allow.<br /><br />Please consult your server administrator for more information.';
$txt['filename_exists'] = 'Sorry! There is already an attachment with the same filename as the one you tried to upload. Please rename the file and try again.';
$txt['bad_attachment'] = 'Your attachment has failed security checks and cannot be uploaded. Please consult the forum administrator.';
$txt['ran_out_of_space'] = 'The upload folder is full. Please try a smaller file and/or contact an administrator.';
$txt['couldnt_connect'] = 'Could not connect to server or could not find file';
$txt['no_board'] = 'The board you specified doesn\'t exist';
$txt['cant_split'] = 'You are not allowed to split topics';
$txt['cant_merge'] = 'You are not allowed to merge topics';
$txt['no_topic_id'] = 'You specified an invalid topic ID.';
$txt['split_first_post'] = 'You cannot split a topic at the first post.';
$txt['topic_one_post'] = 'This topic only contains one message and cannot be split.';
$txt['no_posts_selected'] = 'No messages selected';
$txt['selected_all_posts'] = 'Unable to split. You have selected every message.';
$txt['cant_find_messages'] = 'Unable to find messages';
$txt['cant_find_user_email'] = 'Unable to find user\'s email address.';
$txt['cant_insert_topic'] = 'Unable to insert topic';
$txt['already_a_mod'] = 'You have chosen a username of an already existing moderator. Please choose another username';
$txt['session_timeout'] = 'Your session timed out while posting.  Please go back and try again.';
$txt['session_verify_fail'] = 'Session verification failed.  Please try logging out and back in again, and then try again.';
$txt['verify_url_fail'] = 'Unable to verify referring url.  Please go back and try again.';
$txt['guest_vote_disabled'] = 'Guests cannot vote in this poll.';

$txt['cannot_access_mod_center'] = 'You do not have permission to access the moderation center.';
$txt['cannot_admin_forum'] = 'Non estas autorizado para administrar este foro.';
$txt['cannot_announce_topic'] = 'Non estas autorizado para publicar anuncios neste foro.';
$txt['cannot_approve_posts'] = 'You do not have permission to approve items.';
$txt['cannot_post_unapproved_attachments'] = 'You do not have permission to post unapproved attachments.';
$txt['cannot_post_unapproved_topics'] = 'You do not have permission to post unapproved topics.';
$txt['cannot_post_unapproved_replies_own'] = 'You do not have permission to post unapproved replies to your topics.';
$txt['cannot_post_unapproved_replies_any'] = 'You do not have permission to post unapproved replies to other users\' topics.';
$txt['cannot_calendar_edit_any'] = 'Non podes edita-los eventos do calendario.';
$txt['cannot_calendar_edit_own'] = 'Non te-los privilegios necesarios para edita-los teus propios eventos.';
$txt['cannot_calendar_post'] = 'A edicion de eventos non esta permitida - Sentímolo.';
$txt['cannot_calendar_view'] = 'Sentímolo, pero non estas autorizado para ve-lo calendario.';
$txt['cannot_remove_any'] = 'Sentímolo, pero non te-los privilegios para eliminar temas.';
$txt['cannot_remove_own'] = 'Non podes elimina-los teus propios temas neste foro.';
$txt['cannot_edit_news'] = 'Non estas autorizado para edita-los elementos das noticias neste foro.';
$txt['cannot_pm_read'] = 'Sentímolo, non estas autorizado para le-las túas mensaxes persoais.';
$txt['cannot_pm_send'] = 'Non estas autorizado para enviar mensaxes persoais.';
$txt['cannot_karma_edit'] = 'Non estas autorizado para modifica-lo karma doutras persoas.';
$txt['cannot_lock_any'] = 'Non estas autorizado para bloquear temas aqui.';
$txt['cannot_lock_own'] = 'Sentímolo, pero non podes bloquea-los teus propios temas aqui.';
$txt['cannot_make_sticky'] = 'Non estas autorizado para fixar este tema.';
$txt['cannot_manage_attachments'] = 'Non estas autorizado para administrar arquivos adjuntos ou avatares.';
$txt['cannot_manage_bans'] = 'Non estas autorizado para cambia-la lista de accesos prohibidos.';
$txt['cannot_manage_boards'] = 'Non estas autorizado para administrar foros e categoris.';
$txt['cannot_manage_membergroups'] = 'Non te-los permisos necesarios para modificar ou asignar grupos de usuarios.';
$txt['cannot_manage_permissions'] = 'Non te-los permisos necesarios para administra-los permisos.';
$txt['cannot_manage_smileys'] = 'Non estas autorizado para administrar smileys.';
$txt['cannot_mark_any_notify'] = 'Non te-los permisos necesarios para obter notificacións deste tema.';
$txt['cannot_mark_notify'] = 'Sentímolo, pero non podes solicitar notificacións dende este foro.';
$txt['cannot_merge_any'] = 'Non estas autorizado para combinar temas neste foro.';
$txt['cannot_moderate_forum'] = 'Non estas autorizado para moderar este foro.';
$txt['cannot_moderate_board'] = 'You are not allowed to moderate this board.';
$txt['cannot_modify_any'] = 'Non estas autorizado para modificar mensaxes.';
$txt['cannot_modify_own'] = 'Sentímolo, pero non estas autorizado para edita-los teus propios mensaxes.';
$txt['cannot_modify_replies'] = 'A pesar que este mensaxe é en resposta á túa tema, non lo pode editar.';
$txt['cannot_move_own'] = 'You are not allowed to move your own topics in this board.';
$txt['cannot_move_any'] = 'Non estas autorizado para mover temas neste foro.';
$txt['cannot_poll_add_own'] = 'Sentímolo, pero non estas autorizado para lle agregar sondaxes ás túas temas neste foro.';
$txt['cannot_poll_add_any'] = 'Non podes lle agregar sondaxes a este tema.';
$txt['cannot_poll_edit_own'] = 'Non podes editar esta sondaxe, aínda que sexa túa.';
$txt['cannot_poll_edit_any'] = 'Rexeitóuseche o acceso para editar sondaxes neste foro.';
$txt['cannot_poll_lock_own'] = 'Non estas autorizado para bloquea-las túas propias sondaxes neste foro.';
$txt['cannot_poll_lock_any'] = 'Sentímolo, pero non estas autorizado para bloquear calquera sondaxe.';
$txt['cannot_poll_post'] = 'Non estas autorizado para publicar sondaxes no foro actual.';
$txt['cannot_poll_remove_own'] = 'Non te-los permisos para eliminar esta sondaxe da túa tema.';
$txt['cannot_poll_remove_any'] = 'Non podes eliminar sondaxes neste foro.';
$txt['cannot_poll_view'] = 'Non estas autorizado para ver sondaxes neste foro.';
$txt['cannot_poll_vote'] = 'Sentímolo, pero non podes votar nas sondaxes deste foro.';
$txt['cannot_post_attachment'] = 'Non te-los permisos necesarios para subir arquivos adjuntos aqui.';
$txt['cannot_post_new'] = 'Sentímolo, pero non podes publicar novos temas neste foro.';
$txt['cannot_post_reply_any'] = 'Non te-los permisos necesarios para publicar respostas a temas neste foro.';
$txt['cannot_post_reply_own'] = 'Non estas autorizado para publicar respostas aínda para os teus propios temas neste foro.';
$txt['cannot_profile_remove_own'] = 'Sentímolo, pero non estas autorizado para borra-la túa cuenta.';
$txt['cannot_profile_remove_any'] = '&iquest;Non te-los permisos necesarios para elimina-las cuentas doutras persoas!';
$txt['cannot_profile_extra_any'] = 'Non te-los permisos necesarios modifica-la configuracion doutros perfís.';
$txt['cannot_profile_identity_any'] = 'Non estas autorizado para modifica-la configuracion doutras cuentas.';
$txt['cannot_profile_title_any'] = 'Non podes edita-los titulos personalizados doutras persoas.';
$txt['cannot_profile_extra_own'] = 'Sentímolo, pero non te-los permisos necesarios para edita-los datos do teu perfil.';
$txt['cannot_profile_identity_own'] = 'Polo momento, non podes cambia-la túa identidade.';
$txt['cannot_profile_title_own'] = 'Non estas autorizado para cambia-lo teu titulo personalizado.';
$txt['cannot_profile_server_avatar'] = 'You are not permitted to use a server stored avatar.';
$txt['cannot_profile_upload_avatar'] = 'You do not have permission to upload an avatar.';
$txt['cannot_profile_remote_avatar'] = 'Non te-lo privilexio de usar un avatar remoto.';
$txt['cannot_profile_view_own'] = 'Sentímolo, pero non podes ve-lo teu propio perfil.';
$txt['cannot_profile_view_any'] = 'Sentímolo, pero non podes ve-lo perfil doutras persoas.';
$txt['cannot_delete_own'] = 'Non estas, neste foro, autorizado para borra-los teus propios mensaxes.';
$txt['cannot_delete_replies'] = 'Sentímolo, pero non podes eliminar estes mensaxes, aínda cando son respostas á túa tema.';
$txt['cannot_delete_any'] = 'Non esta permitido borrar mensaxes neste foro.';
$txt['cannot_report_any'] = 'Non estas autorizado para reportar mensaxes neste foro.';
$txt['cannot_search_posts'] = 'Non estas autorizado a buscar mensaxes neste foro.';
$txt['cannot_send_mail'] = 'Non te-lo privilexio de enviar mails.';
$txt['cannot_issue_warning'] = 'Sorry, you do not have permission to issue warnings to members.';
$txt['cannot_send_topic'] = 'Sentímolo, pero o administrador desactivou a opcion de enviar temas neste foro.';
$txt['cannot_split_any'] = 'Non esta permitido dividir temas neste foro.';
$txt['cannot_view_attachments'] = 'Asemella que non estas autorizado para descargar ou ver arquivos adjuntos neste foro.';
$txt['cannot_view_mlist'] = 'Non podes ve-la lista de usuarios, xa que non tes permisos para elo.';
$txt['cannot_view_stats'] = 'Non estas autorizado para ve-las estadisticas do foro.';
$txt['cannot_who_view'] = 'Sentímolo - non te-los permisos necesarios para ve-la lista de usuarios en linea.';

$txt['no_theme'] = 'That theme does not exist.';
$txt['theme_dir_wrong'] = 'O directorio de default los tema é incorrecto, favor de lo corrixi facendo <i>click</i> neste texto.';
$txt['registration_disabled'] = 'Sentímolo, o rexistro de usuarios esta actualmente deshabilitado.';
$txt['registration_no_secret_question'] = 'Sentímolo, non se especificou pregunta segreda para este usuario.';
$txt['poll_range_error'] = 'Sentímolo, a sondaxe debe durar mais de 0 dias.';
$txt['delFirstPost'] = 'Non estas autorizado para borra-lo primeiro pos deste tema.<p>Se desexas borrar este tema, haz click en \'Eliminar Tema\', ou pidele a un Administrador/Moderador para que o borre por ti.</p>';
$txt['parent_error'] = '&iexcl;Non se puido crea-lo foro!';
$txt['login_cookie_error'] = 'Non puideches ingresar.  Favor de revisa-la configuracion dos teus cookies.';
$txt['incorrect_answer'] = 'Sorry, but you did not answer your question correctly.  Please click back to try again, or click back twice to use the default method of obtaining your password.';
$txt['no_mods'] = 'No moderators found!';
$txt['parent_not_found'] = 'Estrutura corrupta do foro: non se puido encontrar o foro pai';
$txt['modify_post_time_passed'] = 'Non podes modificar este mensaxe xa que o tempo limite permitido para editar mensaxes transcorreu.';

$txt['calendar_off'] = 'O calendario esta deshabilitado, non podes accesarlo neste momento.';
$txt['invalid_month'] = 'Invalid month value.';
$txt['invalid_year'] = 'Invalid year value.';
$txt['invalid_day'] = 'Invalid day value.';
$txt['event_month_missing'] = 'Event month is missing.';
$txt['event_year_missing'] = 'Event year is missing.';
$txt['event_day_missing'] = 'Event day is missing.';
$txt['event_title_missing'] = 'Event title is missing.';
$txt['invalid_date'] = 'Invalid date.';
$txt['no_event_title'] = 'No event title was entered.';
$txt['missing_event_id'] = 'Missing event ID.';
$txt['cant_edit_event'] = 'You do not have permission to edit this event.';
$txt['missing_board_id'] = 'Board ID is missing.';
$txt['missing_topic_id'] = 'Topic ID is missing.';
$txt['topic_doesnt_exist'] = 'Topic doesn\'t exist.';
$txt['not_your_topic'] = 'You are not the owner of this topic.';
$txt['board_doesnt_exist'] = 'The board does not exist.';
$txt['no_span'] = 'The span feature is currently disabled.';
$txt['invalid_days_numb'] = 'Invalid number of days to span.';

$txt['moveto_noboards'] = '&iexcl;Non hai foros a onde mover este tema!';

$txt['already_activated'] = 'A túa cuenta xa foi previamente activada.';
$txt['still_awaiting_approval'] = 'A túa cuenta esta todavia en agarda da aprovacion dun administrador.';

$txt['invalid_email'] = 'Email invalido / rango do email.<br />Exemplo dunha direccion de email valida: webmaster@HABLAJAPONES.org.<br />Exemplo dun rango de direccion email valido: *@*.HABLAJAPONES.org';
$txt['invalid_expiration_date'] = 'A data de expiracion non é valida';
$txt['invalid_hostname'] = 'Nome do dominio invalido/ rango do dominio.<br />Exemplo dun nome de dominio valido: proxy4.HABLAJAPONES.org<br />Exemplo dun rango de dominio valido: *.HABLAJAPONES.org';
$txt['invalid_ip'] = 'IP invalido / rango de IPS.<br />Exemplo dunha direccion IP valida: 127.0.0.1<br />Exemplo dun rango valido de direccións IP: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Invalid IP / IP range.<br />Example of a valid IP address: 127.0.0.1<br />Example of a valid IP range: 127.0.0.*';
$txt['invalid_username'] = 'Nome do usuario non encontrado';
$txt['no_ban_admin'] = '&iexcl;Non podes lle prohibi-lo acceso a un administrador - Debes lo degrada primeiro!';
$txt['no_bantype_selected'] = 'Non se selecciono o tipo prohibicion de acceso';
$txt['ban_not_found'] = 'Non se encontro esta restriccion de acceso';
$txt['ban_unknown_restriction_type'] = 'Tipo de restriccion descoñecida';
$txt['ban_name_empty'] = 'The name of the ban was left empty';
$txt['ban_name_exists'] = 'The name of this ban (%1$s) already exists. Please choose a different name.';
$txt['ban_trigger_already_exists'] = 'This ban trigger (%1$s) already exists in %2$s.';

$txt['recycle_no_valid_board'] = 'Non se seleccionou un foro valido para reciclar temas';

$txt['login_threshold_fail'] = 'Sentímolo, polo momento non cuentas con intentos para ingresar.  Favor de tentar novamente mais tarde.';
$txt['login_threshold_brute_fail'] = 'Sorry, but you\'ve reached your login attempts threshold.  Please wait 30 seconds and try again later.';

$txt['who_off'] = 'Non podes accesar a lista de usuarios en linea polo momento, xa que esta deshabilitada.';

$txt['merge_create_topic_failed'] = 'Erro ó tentar crear un novo tema.';
$txt['merge_need_more_topics'] = 'O combinar temas precisa de ó menos 2 temas para combinar.';

$txt['postWaitTime_broken'] = 'The last posting from your IP was less than %1$d seconds ago. Please try again later.';
$txt['registerWaitTime_broken'] = '&iexcl;Rexistrácheste fai apenas %d segundos!';
$txt['loginWaitTime_broken'] = 'Tendras que agardar aproximadamente %d segundos para ingresar novamente.';
$txt['pmWaitTime_broken'] = 'The last personal message from your IP was less than %1$d seconds ago. Please try again later.';
$txt['reporttmWaitTime_broken'] = 'The last topic report from your IP was less than %1$d seconds ago. Please try again later.';
$txt['sendtopcWaitTime_broken'] = 'The last topic sent from your IP was less than %1$d seconds ago. Please try again later.';
$txt['sendmailWaitTime_broken'] = 'The last email sent from your IP was less than %1$d seconds ago. Please try again later.';
$txt['searchWaitTime_broken'] = 'Your last search was less than %1$d seconds ago. Please try again later.';

$txt['email_missing_data'] = 'You must enter something in both the subject and message boxes.';

$txt['topic_gone'] = 'O tema ou foro que estas buscando asemella que non existe, ou fóra dos teus limites.';
$txt['theme_edit_missing'] = '&iexcl;O arquivo que tentas editar... non pode encontrarse!';

$txt['attachments_no_write'] = 'Non pode se escribir no directorio para subir arquivos adjuntos.  O teu arquivo adjunto ou avatar non se puido gardar.';
$txt['attachments_limit_per_post'] = 'Non podes subir mais de %d arquivos adjuntos por mensaxe';

$txt['no_dump_database'] = 'iexcl;Solamente os administradores poden facer respaldos da base de datos!';
$txt['pm_not_yours'] = 'O mensaxe persoal que estas tratando de citar non é teu ou non existe, por favor regresa e tenta novamente.';
$txt['mangled_post'] = 'Datos da forma destrozados - por favor regresa e tenta novamente.';
$txt['quoted_post_deleted'] = 'The pos you are trying to quote either does not exist, was deleted, or is non longer viewable by you.';
$txt['pm_too_many_per_hour'] = 'You have exceeded the limit of %1$d personal messages per hour.';
$txt['labels_too_many'] = 'Sorry, %1$s messages already had the maximum amount of labels allowed!';

$txt['register_only_once'] = 'Sentímolo, pero non tes permitido o rexistrar multiples cuentas ó mesmo tempo dende a mesma computadora.';
$txt['admin_setting_coppa_require_contact'] = 'You must enter either a postal or fax contact if parent/guardian approval is required.';

$txt['error_long_name'] = 'O nome que utilizaches foi moi longo.';
$txt['error_no_name'] = 'Non se proporciono ningun nome.';
$txt['error_bad_name'] = 'O nome que envíaches non se puido utilizar, xa que é un nome reservado.';
$txt['error_no_email'] = 'Non se proporciono ningunha direccion de email.';
$txt['error_bad_email'] = 'Proporciónose unha direccion de email invalida.';
$txt['error_no_event'] = 'Non se proporciono un nome de evento.';
$txt['error_no_subject'] = 'Non se cheo o asunto.';
$txt['error_no_question'] = '&iexcl;A sondaxe debe ter unha pregunta!';
$txt['error_no_message'] = 'O corpo do mensaxe déixose vaci.';
$txt['error_long_message'] = 'O mensaxe excede a lonxitude maxima permitida (' . $modSettings['max_messageLength'] . ' carácteres).';
$txt['error_no_comment'] = 'The comment field was left empty.';
$txt['error_session_timeout'] = 'O teu sesion ha expirado. Favor de reenviar a túa mensaxe.';
$txt['error_no_to'] = 'Non se especificaron destinatarios.';
$txt['error_bad_to'] = 'Non se encontraron un ou mais destinatarios-\'para\'.';
$txt['error_bad_bcc'] = 'Non se encontraron un ou mais destinatarios-\'bcc\'.';
$txt['error_form_already_submitted'] = '&iexcl;Xa haz envíado previamente este mensaxe!  Probablemente fixeches dobre-click, ou tentaches refresca-lo navegador.';
$txt['error_poll_few'] = '&iexcl;Debes ter ó menos dúas opcións!';
$txt['error_need_qr_verification'] = 'Please complete the verification section below to complete your post.';
$txt['error_wrong_verification_code'] = 'The letters you typed don\'t match the letters that were shown in the picture.';
$txt['error_wrong_verification_answer'] = 'You did not answer the verification questions correctly.';
$txt['error_need_verification_code'] = 'Please enter the verification code below to continue to the results.';
$txt['error_bad_file'] = 'Sorry but the file specified could not be opened: %1$s';
$txt['error_bad_line'] = 'The line you specified is invalid.';

$txt['smiley_not_found'] = 'Non se encontro o smiley.';
$txt['smiley_has_no_code'] = 'Non se proporciono codigo para este smiley.';
$txt['smiley_has_no_filename'] = 'Non se proporciono o nome do arquivo para este smiley.';
$txt['smiley_not_unique'] = 'Un smiley con ese codigo xa existe previamente.';
$txt['smiley_set_already_exists'] = 'Un smiley con ese URL xa existe previamente';
$txt['smiley_set_not_found'] = 'Non se encontro esa coleccion de smileys';
$txt['smiley_set_path_already_used'] = 'O URL para esa coleccion de smileys esta sendo utilizado actualmente por outra coleccion de smileys.';
$txt['smiley_set_unable_to_import'] = 'Non se puido importa-la coleccion de smileys. O directorio é invalido ou non puido ser accesado.';

$txt['smileys_upload_error'] = 'Non se puido subi-lo arquivo.';
$txt['smileys_upload_error_blank'] = '&iexcl;Tódolos conxuntos de smileys deben ter unha imaxe!';
$txt['smileys_upload_error_name'] = '&iexcl;Tódolos smileys deben te-lo mesmo nome de arquivo!';
$txt['smileys_upload_error_illegal'] = 'Tipo Ilegal.';

$txt['search_invalid_weights'] = 'Buscar pesos que non esten configurados adecuadamente. Ó menos un peso debe estar configurado para que sexa diferente de cero. Favor de reportar este erro a un administrador.';
$txt['unable_to_create_temporary'] = 'A funcion de busqueda non puido crear táboas temporais.  Favor de tentar novamente.';

$txt['package_no_file'] = '&iexcl;Non se puido encontrar o arquivo!';
$txt['packageget_unable'] = 'Non foi posible se conectar ó servidor.  Favor de tentar usando <a href="%s" target="_blank">este url</a>.';
$txt['not_on_simplemachines'] = 'Sentímolo, os paquetes só poden ser descargados desta maneira do servidor de simplemachines.org.';
$txt['package_cant_uninstall'] = 'Este paquete ou nunca foi instalado, ou xa foi desinstalado previamente - non podes lo desinstala agora.';
$txt['package_cant_download'] = '&iexcl;Non podes descargar ou instalar novos paquetes xa que non se pode escribir no directorio &quot;Packages&quot;!';
$txt['package_upload_error_nofile'] = 'You did not select a package to upload.';
$txt['package_upload_error_failed'] = 'Could not upload package, please check directory permissions!';
$txt['package_upload_error_exists'] = 'O arquivo que estas subindo xa existe no servidor. Favor de lo borra e tentar novamente.';
$txt['package_upload_error_supports'] = 'The package manager currently allows only these file types: %1$s.';
$txt['package_upload_error_broken'] = 'Package upload failed due to the following error:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'The package you are trying to install cannot be located. You may want to manually upload the package to your Packages directory.';
$txt['package_get_error_missing_xml'] = 'The package you are attempting to install is missing the package-info.xml that must be in the root package directory.';
$txt['package_get_error_is_zero'] = 'Although the package was downloaded to the server it appears to be empty. Please check the Packages directory, and the &quot;temp&quot; sub-directory are both writable. If you continue to experience this problem you should try extracting the package on your PC and uploading the extracted files into a subdirectory in your Packages directory and try again. For example, if the package was called shout.tar.gz you should:<br />1) Download the package to your local PC and extract it into files.<br />2) Using an FTP client create a new directory in your &quot;Packages&quot; folder, in this example you may call it "shout".<br />3) Upload all the files from the extracted package to this directory.<br />4) Go back to the package manager browse page and the package will be automatically found by SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF was unable to find any valid information within the package-info.xml file included within the Package. There may be an error with the modification, or the package may be corrupt.';

$txt['no_membergroup_selected'] = 'Non se selecciono ningun grupo de usuarios';
$txt['membergroup_does_not_exist'] = 'The membergroup doesn\'t exist or is invalid.';

$txt['at_least_one_admin'] = '&iexcl;Debe haber polo menos un administrador no foro!';

$txt['error_functionality_not_windows'] = 'Sorry, this functionality is currently not available for servers running Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Non se encontro o arquivo adjunto';

$txt['error_no_boards_selected'] = '&iexcl;Non se selecciono ningun foro valido!';
$txt['error_invalid_search_string'] = '&iquest;Esqueciches escribi-lo que se buscara?';
$txt['error_invalid_search_string_blacklist'] = 'Your search query contained too trivial words. Please try again with a different query.';
$txt['error_search_string_small_words'] = 'Each word must be at least two characters long.';
$txt['error_query_not_specific_enough'] = 'Consúltaa non é o suficientemente especifica. Favor de utilizar palabras mais longas.';
$txt['error_no_messages_in_time_frame'] = 'Non se encontraron mensaxes no tempo que se especifico';
$txt['error_no_labels_selected'] = 'Non labels were selected!';
$txt['error_no_search_daemon'] = 'Unable to access the search daemon';

$txt['profile_errors_occurred'] = 'Ocurrieron os seguintes erros mentres se tentaba garda-lo teu perfil';
$txt['profile_error_bad_offset'] = 'A diferenza horaria esta fóra de rango';
$txt['profile_error_no_name'] = 'O campo do nome déixose en branco';
$txt['profile_error_name_taken'] = 'O nome de usuario especificado xa esta sendo utilizado por alguén mais';
$txt['profile_error_name_too_long'] = 'The selected name is too long. It should be non greater than 60 characters long';
$txt['profile_error_no_email'] = 'O campo de email déixose en branco';
$txt['profile_error_bad_email'] = 'Non proporcionaches unha direccion de email valida';
$txt['profile_error_email_taken'] = 'Outro usuario xa se encuentra rexistrado con esa direccion de email';
$txt['profile_error_no_password'] = 'Non especificáche-la túa contrasinal';
$txt['profile_error_bad_new_password'] = 'As novas contrasinais que especificaches non coinciden';
$txt['profile_error_bad_password'] = 'A contrasinal que proporcionaches é incorrecta';
$txt['profile_error_bad_avatar'] = 'O avatar que seleccionaches é moi grande';
$txt['profile_error_password_short'] = 'Your password must be at least ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' characters long.';
$txt['profile_error_password_restricted_words'] = 'Your password must not contain your username, email address or other commonly used words.';
$txt['profile_error_password_chars'] = 'Your password must contain a mix of upper and lower case letters, as well as digits.';
$txt['profile_error_already_requested_group'] = 'You already have an outstanding request for this group!';
$txt['profile_error_openid_in_use'] = 'Another user is already using that OpenID authentication URL';

$txt['mysql_error_space'] = ' - revisa o espazo dispoñible da base de datos.';

$txt['icon_not_found'] = 'O icona non se puido encontrar no tema default - por favor revisa que a imaxe foi suba ó seu respectivo directorio e tenta novamente.';
$txt['icon_after_itself'] = '&iexcl;O icona non pode se colocar despues de se mesmo!';
$txt['icon_name_too_long'] = 'Icon filenames cannot be morre than 16 characters long';

$txt['name_censored'] = 'Sentímolo, o nome que tentaches usar, %s, contén palabras que foron censuradas.  Por favor tenta con outro nome.';

$txt['poll_already_exists'] = 'A topic can only have one poll associated with it!';
$txt['poll_not_found'] = 'There is no poll associated with this topic!';

$txt['error_while_adding_poll'] = 'The following error or errors occurred while adding this poll';
$txt['error_while_editing_poll'] = 'The following error or errors occurred while editing this poll';

$txt['loadavg_search_disabled'] = 'Due to high stress on the server, the search function is temporarily disabled.';
$txt['loadavg_generic_disabled'] = 'Sorry, because of high stress on the server, this feature is currently unavailable.';
$txt['loadavg_allunread_disabled'] = 'The server\'s resources are temporarily under too high a demand to find all the topics you have not read.';
$txt['loadavg_unreadreplies_disabled'] = 'The server is currently under high stress.  Please try again shortly.';
$txt['loadavg_show_posts_disabled'] = 'Please try again later.  This member\'s posts are not currently available due to high load on the server.';
$txt['loadavg_unread_disabled'] = 'The server\'s resources are temporarily under too high a demand to list out the topics you have not read.';

$txt['cannot_edit_permissions_inherited'] = 'You cannot edit inherited permissions directly, you must either edit the parent group or edit the membergroup inheritance.';

$txt['mc_no_modreport_specified'] = 'You need to specify which report you wish to view.';
$txt['mc_no_modreport_found'] = 'The specified report either doesn\'t exist or is off limits to you';

$txt['st_cannot_retrieve_file'] = 'Could not retrieve the file %1$s.';
$txt['admin_file_not_found'] = 'Could not load the requested file: %1$s.';

$txt['themes_none_selectable'] = 'At least one theme must be selectable.';
$txt['themes_default_selectable'] = 'The overall forum default theme must be a selectable theme.';
$txt['ignoreboards_disallowed'] = 'The option to ignore boards has not been enabled.';

$txt['mboards_delete_error'] = 'No category selected!';
$txt['mboards_delete_board_error'] = 'No board selected!';

$txt['mboards_parent_own_child_error'] = 'Unable to make a parent its own child!';
$txt['mboards_board_own_child_error'] = 'Unable to make a board its own child!';

$txt['smileys_upload_error_notwritable'] = 'The following smiley directories are not writable: %1$s';
$txt['smileys_upload_error_types'] = 'Smiley images can only have the following extensions: %1$s.';

$txt['change_email_success'] = 'Your email address has been changed, and a new activation email has been sent to it.';
$txt['resend_email_success'] = 'A new activation email has successfully been sent.';

$txt['custom_option_need_name'] = 'The profile option must have a name!';
$txt['custom_option_not_unique'] = 'Field name is not unique!';

$txt['warning_no_reason'] = 'You must enter a reason for altering the warning state of a member';
$txt['warning_notify_blank'] = 'You selected to notify the user but did not fill in the subject/message fields';

$txt['cannot_connect_doc_site'] = 'Could not connect to the Simple Machines Online Manual. Please check that your server configuration allows external internet connections and try again later.';

$txt['movetopic_no_reason'] = 'You must enter a reason for moving the topic, or uncheck the option to \'post a redirection topic\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'The requested identifier did not return the proper information.';
$txt['openid_return_no_mode'] = 'The identity provider did not respond with the OpenID mode.';
$txt['openid_not_resolved'] = 'The identity provider did not approve your request.';
$txt['openid_no_assoc'] = 'Could not find the requested association with the identity provider.';
$txt['openid_sig_invalid'] = 'The signature from the identity provider is invalid.';
$txt['openid_load_data'] = 'Could not load the data from your login request.  Please try again.';
$txt['openid_not_verified'] = 'The OpenID address given has not been verified yet.  Please log in to verify.';

$txt['error_custom_field_too_long'] = 'The &quot;%1$s&quot; field cannot be greater than %2$d characters in length.';
$txt['error_custom_field_invalid_email'] = 'The &quot;%1$s&quot; field must be a valid email address.';
$txt['error_custom_field_not_number'] = 'The &quot;%1$s&quot; field must be numeric.';
$txt['error_custom_field_inproper_format'] = 'The &quot;%1$s&quot; field is an invalid format.';
$txt['error_custom_field_empty'] = 'The &quot;%1$s&quot; field cannot be left blank.';

$txt['email_no_template'] = 'The email template &quot;%1$s&quot; could not be found.';

$txt['search_api_missing'] = 'The search API could not be found! Please contact the admin to check they have uploaded the correct files.';
$txt['search_api_not_compatible'] = 'The selected search API the forum is using is out of date - falling back to standard search. Please check file %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'You cannot restore the first post in a topic.';
$txt['parent_topic_missing'] = 'The parent topic of the post you are trying to restore has been deleted.';
$txt['restored_disabled'] = 'The restoration of topics has been disabled.';
$txt['restore_not_found'] = 'The following messages could not be restored; the original topic may have been removed:<ul style="margin-top: 0px;">%1$s</ul>You will need to move these manually.';

$txt['error_invalid_dir'] = 'The directory you entered is invalid.';

$txt['error_sqlite_optimizing'] = 'Sqlite is optimizing the database, the forum can not be accessed until it has finished.  Please try refreshing this page momentarily.';

?>