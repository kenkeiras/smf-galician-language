<?php
// Version: 2.0.4; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'gl_ES.utf8';
$txt['lang_dictionary'] = 'gl';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('Domingo', 'Luns', 'Martes', 'Mércores', 'Xoves', 'Venres', 'Sabado');
$txt['days_short'] = array('Dom', 'Lun', 'Mar', 'Miañe', 'Jue', 'Ve', 'Sab');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Xaneiro', 'Febreiro', 'Marzo', 'Abril', 'Maio', 'Xuño', 'Xullo', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Decembro');
$txt['months_titles'] = array(1 => 'Xaneiro', 'Febreiro', 'Marzo', 'Abril', 'Maio', 'Xuño', 'Xullo', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Decembro');
$txt['months_short'] = array(1 => 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = 'é novo';
$txt['newmessages1'] = 'son novos';
$txt['newmessages3'] = 'Novo(s)';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Admin';
$txt['moderate'] = 'Moderar';

$txt['save'] = 'Gardar';

$txt['modify'] = 'Modificar';
$txt['forum_index'] = '%1$s - Índice';
$txt['members'] = 'Membros';
$txt['board_name'] = 'Nome do foro';
$txt['posts'] = 'Posts';

$txt['member_postcount'] = 'Posts';
$txt['no_subject'] = '(Sen asunto)';
$txt['view_profile'] = 'Ver perfil';
$txt['guest_title'] = 'Invitado';
$txt['author'] = 'Autor';
$txt['on'] = 'on';
$txt['remove'] = 'Eliminar';
$txt['start_new_topic'] = 'Empezar novo tema';

$txt['login'] = 'Login';
// Use numeric entities in the below string.
$txt['username'] = 'Nome da usuario';
$txt['password'] = 'Contrasinal';

$txt['username_no_exist'] = 'Ese nome de usuario non existe.';
$txt['no_user_with_email'] = 'Non hai un nome de usuario asociado a ese email.';

$txt['board_moderator'] = 'Moderador';
$txt['remove_topic'] = 'Eliminar tema';
$txt['topics'] = 'Temas';
$txt['modify_msg'] = 'Modificar mensaxe';
$txt['name'] = 'Nome';
$txt['email'] = 'Email';
$txt['subject'] = 'Asunto';
$txt['message'] = 'Mensaxe';
$txt['redirects'] = 'Redireccións';
$txt['quick_modify'] = 'Modify en liña';

$txt['choose_pass'] = 'Escoller contrasinal';
$txt['verify_pass'] = 'Verificar contrasinal';
$txt['position'] = 'Posición';

$txt['profile_of'] = 'Ver o perfil de';
$txt['total'] = 'Total';
$txt['posts_made'] = 'Posts';
$txt['website'] = 'Sitio web';
$txt['register'] = 'Rexistrarse';
$txt['warning_status'] = 'Aviso de estado';
$txt['user_warn_watch'] = 'O usuario está na lista de monitorización dos moderadores';
$txt['user_warn_moderate'] = 'Cola de aprobación de mensaxes de usuario';
$txt['user_warn_mute'] = 'O usuario ten prohibido postear';
$txt['warn_watch'] = 'Monitorizado';
$txt['warn_moderate'] = 'Moderado';
$txt['warn_mute'] = 'En sordina';

$txt['message_index'] = 'Índice de mensaxes';
$txt['news'] = 'Novas';
$txt['home'] = 'Inicio';

$txt['lock_unlock'] = 'Bloquear/Desbloquear Tema';
$txt['post'] = 'Post';
$txt['error_occured'] = 'Ocorreu un erro!';
$txt['at'] = 'en';
$txt['logout'] = 'Pechar sesión';
$txt['started_by'] = 'Comezado por';
$txt['replies'] = 'Respostas';
$txt['last_post'] = 'Último post';
$txt['admin_login'] = 'Login da administración';
// Use numeric entities in the below string.
$txt['topic'] = 'Tema';
$txt['help'] = 'Axuda';
$txt['notify'] = 'Notificar';
$txt['unnotify'] = 'Non notificar';
$txt['notify_request'] = 'Queres un mensaxe de notificación se alguen resposta neste tema?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Saúdos,' . "\n" . 'O equipo de ' . $context['forum_name'] . '.';
$txt['notify_replies'] = 'Notificar das respostas';
$txt['move_topic'] = 'Mover tema';
$txt['move_to'] = 'Mover a';
$txt['pages'] = 'Páxinas';
$txt['users_active'] = 'Usuarios activos os últimos %1$d minutos';
$txt['personal_messages'] = 'Mensaxes persoais';
$txt['reply_quote'] = 'Respostar cunha cita';
$txt['reply'] = 'Respostar';
$txt['reply_noun'] = 'Respostar';
$txt['approve'] = 'Aprobar';
$txt['approve_all'] = 'Aprobar todos';
$txt['awaiting_approval'] = 'Esperando aprobación';
$txt['attach_awaiting_approve'] = 'Adxuntos esperando aprobación';
$txt['post_awaiting_approval'] = 'Nota: Este mensaxe está pendente da aprobación dun moderador.';
$txt['there_are_unapproved_topics'] = 'Hai %1$s temas e %2$s posts esperando aprobación neste taboleiro. Fai click <a href="%3$s">aquí</a> para velos todos.';

$txt['msg_alert_none'] = 'Sen mesaxes...';
$txt['msg_alert_you_have'] = 'tes';
$txt['msg_alert_messages'] = 'mesaxes';
$txt['remove_message'] = 'Eliminar esta mesaxe';

$txt['online_users'] = 'Usuarios Online';
$txt['personal_message'] = 'Mensaxe persoal';
$txt['jump_to'] = 'Saltar a';
$txt['go'] = 'ir';
$txt['are_sure_remove_topic'] = 'Estás seguro de querer eliminar este tema?';
$txt['yes'] = 'Si';
$txt['no'] = 'Non';

$txt['search_end_results'] = 'Fin dos resultados';
$txt['search_on'] = 'acendida';

$txt['search'] = 'Procura';
$txt['all'] = 'Todos';

$txt['back'] = 'Voltar';
$txt['password_reminder'] = 'Recordatorio do contrasinal';
$txt['topic_started'] = 'Tema comezado por';
$txt['title'] = 'Título';
$txt['post_by'] = 'Post por';
$txt['memberlist_searchable'] = 'Lista procurable dos membros rexistrados.';
$txt['welcome_member'] = 'Darlle a benvida a';
$txt['admin_center'] = 'Centro de administración';
$txt['last_edit'] = 'Última edición';
$txt['notify_deactivate'] = 'Desexa desactivar a notificación neste tema?';

$txt['recent_posts'] = 'Posts recentes';

$txt['location'] = 'Localización';
$txt['gender'] = 'Xénero';
$txt['date_registered'] = 'Data do rexistro';

$txt['recent_view'] = 'Ver os posts máis recentes do foro.';
$txt['recent_updated'] = 'é o tema actualizado máis recentemente';

$txt['male'] = 'Home';
$txt['female'] = 'Muller';

$txt['error_invalid_characters_username'] = 'Carácter inválido no nome de usuario.';

$txt['welcome_guest'] = 'Benvido(a), <strong>%1$s</strong>. Favor de <a href="' . $scripturl . '?action=login">ingresar</a> ou <a href="' . $scripturl . '?action=register">se rexistrar</a>.';
$txt['login_or_register'] = 'Por favor <a href="' . $scripturl . '?action=login">inicia sesión</a> ou <a href="' . $scripturl . '?action=register">rexistrate</a>.';
$txt['welcome_guest_activate'] = '<br />&iquest;Perdíche-lo teu  <a href="' . $scripturl . '?action=activate">email de activacion?</a>';
$txt['hello_member'] = 'Ola,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Benvido(a),';
$txt['welmsg_hey'] = 'Ei,';
$txt['welmsg_welcome'] = 'Benvido(a),';
$txt['welmsg_please'] = 'Por favor';
$txt['select_destination'] = 'Por favor, seleccione un destino';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Posteado por';

$txt['icon_smiley'] = 'Sorriso';
$txt['icon_angry'] = 'Enfado';
$txt['icon_cheesy'] = 'Cheesy';
$txt['icon_laugh'] = 'Rir';
$txt['icon_sad'] = 'Triste';
$txt['icon_wink'] = 'Palpebrar';
$txt['icon_grin'] = 'Arreganhar';
$txt['icon_shocked'] = 'Chocado';
$txt['icon_cool'] = 'Mola';
$txt['icon_huh'] = 'Huh';
$txt['icon_rolleyes'] = 'Xirar os ollos';
$txt['icon_tongue'] = 'Lingua';
$txt['icon_embarrassed'] = 'Avergoñado';
$txt['icon_lips'] = 'Beizos selados';
$txt['icon_undecided'] = 'Indeciso';
$txt['icon_kiss'] = 'Bico';
$txt['icon_cry'] = 'Chorar';

$txt['moderator'] = 'Moderador';
$txt['moderators'] = 'Moderadores';

$txt['mark_board_read'] = 'Marcar temas coma lidos para este taboleiro';
$txt['views'] = 'Vistos';
$txt['new'] = 'Novos';

$txt['view_all_members'] = 'Ver tódos os membros';
$txt['view'] = 'Ver';

$txt['viewing_members'] = 'Vendo membros do %1$s a %2$s';
$txt['of_total_members'] = 'de %1$s membros totais';

$txt['forgot_your_password'] = 'Olvidaches o teu contrasinal?';

$txt['date'] = 'Data';
// Use numeric entities in the below string.
$txt['from'] = 'De';
$txt['check_new_messages'] = 'Comprobar novas mensaxes';
$txt['to'] = 'Para';

$txt['board_topics'] = 'Temas';
$txt['members_title'] = 'Membros';
$txt['members_list'] = 'Lista de membros';
$txt['new_posts'] = 'Novos posts';
$txt['old_posts'] = 'Sen posts novos';
$txt['redirect_board'] = 'Taboleiro redirixido';

$txt['sendtopic_send'] = 'Enviar';
$txt['report_sent'] = 'O teu informe foi enviado exitosamente.';

$txt['time_offset'] = 'Diferencia de tempo';
$txt['or'] = 'ou';

$txt['no_matches'] = 'Perdón, non houbo coincidencias';

$txt['notification'] = 'Notificación';

$txt['your_ban'] = 'Perdón %1$s, tes prohibido usar este foro!';
$txt['your_ban_expires'] = 'Esta prohibición expirará %1$s.';
$txt['your_ban_expires_never'] = 'Esta prohibición non expirará.';
$txt['ban_continue_browse'] = 'Podes continuar navegando polo foro coma un invitado.';

$txt['mark_as_read'] = 'Marcar TODOS os temas coma lidos';

$txt['hot_topics'] = 'Tema quente (Máis de %1$d respostas)';
$txt['very_hot_topics'] = 'Tema moi quente (Máis de %1$d respostas)';
$txt['locked_topic'] = 'Tema bloqueado';
$txt['normal_topic'] = 'Tema normal';
$txt['participation_caption'] = 'Temas nos que publicaches';

$txt['go_caps'] = 'Ir';

$txt['print'] = 'Imprimir';
$txt['profile'] = 'Perfil';
$txt['topic_summary'] = 'Resumo de temas';
$txt['not_applicable'] = 'N/A';
$txt['message_lowercase'] = 'mesaxe';
$txt['name_in_use'] = 'Este nome xa está en uso por outro membro.';

$txt['total_members'] = 'Membros totais';
$txt['total_posts'] = 'Posts totais';
$txt['total_topics'] = 'Temas totais';

$txt['mins_logged_in'] = 'Minutos para manter a sesión';

$txt['preview'] = 'Previsualizar';
$txt['always_logged_in'] = 'Sempre manter a sesión iniciada';

$txt['logged'] = 'Sesión iniciada';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'por';

$txt['hours'] = 'hora';
$txt['days_word'] = 'días';

$txt['newest_member'] = ', o noso membro máis recente.';

$txt['search_for'] = 'Procurar';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = '&iquest;Estás.+ahí?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'Recorda, este foro está en \'Modo de mantemento\'.';

$txt['read'] = 'Ler';
$txt['times'] = 'veces';

$txt['forum_stats'] = 'Estadísticas do foro';
$txt['latest_member'] = 'Último membro';
$txt['total_cats'] = 'Categorías totais';
$txt['latest_post'] = 'Último post';

$txt['you_have'] = 'Tes';
$txt['click'] = 'Click';
$txt['here'] = 'aquí';
$txt['to_view'] = 'para velos.';

$txt['total_boards'] = 'Taboleiros totais.';

$txt['print_page'] = 'Imprimir páxina';

$txt['valid_email'] = 'Esta debe ser un email válido.';

// 'posts' => $profile['posts'] > 500000 ? $txt['geek'] : comma_format($profile['posts']),
$txt['geek'] = 'Paseime :P!!';
$txt['info_center_title'] = '%1$s - Centro de información';

$txt['send_topic'] = 'Enviar este tema';

$txt['sendtopic_title'] = 'Enviar tema &#171; %s &#187; a un amigo.';
$txt['sendtopic_sender_name'] = 'O teu nome';
$txt['sendtopic_sender_email'] = 'O teu direccion de email';
$txt['sendtopic_receiver_name'] = 'Nome do destinatario';
$txt['sendtopic_receiver_email'] = 'Direccion email do destinatario';
$txt['sendtopic_comment'] = 'Agregar un comentario';

$txt['allow_user_email'] = 'Permitir a outros usuarios mandarme emails';

$txt['check_all'] = 'Marcar todos';

// Use numeric entities in the below string.
$txt['database_error'] = 'Erro na base de datos';
$txt['try_again'] = 'Intentao de novo. Se voltas a esta pantaia de erro, informa do error a un administrador.';
$txt['file'] = 'Ficheiro';
$txt['line'] = 'Liña';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF detectou e tentou reparar automáticamente un erro na túa base de datos. Se continúas tendo problemas, ou continúas a recibir estes emails, por favor contacta o teu auxiliar.';
$txt['database_error_versions'] = '<b>Nota:</b> Asemella que a túa base de datos pode precisar unha actualizacion. A version dos arquivos do teu foro estan na version ' . $forum_version . ', mentres que a túa base de datos esta na version de SMF ' . $modSettings['smfVersion'] . '. Recomendámoste que execúte-la ultima versi&oacuten de upgrade.php.';
$txt['template_parse_error'] = '&iexcl;Erro ó parsear o Template!';
$txt['template_parse_error_message'] = 'Asemella que algo se estragou no foro co sistema de temas.  Este problema pode que solamente sexa temporal, por favor, regresa nuns momentos e intentalo novamente.  Se continúas vendo este mensaxe, por favor contacta ó administrador.<br /><br />Podes tentar <a href="javascript:location.reload();">actualizar esta pagina</a>.';
$txt['template_parse_error_details'] = 'Houbo un problema cargando o tema ou arquivo de idioma <tt><b>%1$s</b></tt>.  Por favor revisa a sintaxe e tenta novamente - lembranza, os apostrofes (<tt>\'</tt>) polo xeral deben ter unha secuencia de escape coa diagonal investida (<tt>\\</tt>).  Para ver informaci&#243;n especifica do erro do sitio de PHP tenta <a href="' . $boardurl . '%1$s">acceder ó arquivo directamente</a>.<br /><br />Podes tentar <a href="javascript:location.reload();">actualizar esta pagina</a> ou <a href="' . $scripturl . '?theme=1">usa-lo tema de default</a>.';

$txt['today'] = '<strong>Hoxe</strong> en ';
$txt['yesterday'] = '<strong>Onte</strong> en ';
$txt['new_poll'] = 'Nova enquisa';
$txt['poll_question'] = 'Questión';
$txt['poll_vote'] = 'Emitir voto';
$txt['poll_total_voters'] = 'Total de membros que votaron';
$txt['shortcuts'] = 'atallos: pulsa alt+s para enviar ou alt+p para previsualizar';
$txt['shortcuts_firefox'] = 'atallos: pulsa shift+alt+s para enviar ou shift+alt+p para previsualizar';
$txt['poll_results'] = 'Ver resultados';
$txt['poll_lock'] = 'Bloquear votación';
$txt['poll_unlock'] = 'Desbloquear votación';
$txt['poll_edit'] = 'Editar enquisa';
$txt['poll'] = 'Enquisa';
$txt['one_day'] = '1 Día';
$txt['one_week'] = '1 Semá';
$txt['one_month'] = '1 Mes';
$txt['forever'] = 'Para sempre';
$txt['quick_login_dec'] = 'Iniciar sesión co nome de usuario, contrasinal e lonxitude de sesión';
$txt['one_hour'] = '1 Hora';
$txt['moved'] = 'MOVIDO';
$txt['moved_why'] = 'Por favor, introduce unha pequena descripción de por que o<br />tema foi movido.';
$txt['board'] = 'Taboleiro';
$txt['in'] = 'en';
$txt['sticky_topic'] = 'Tema fixado';

$txt['delete'] = 'Borrar';

$txt['your_pms'] = 'Os teus mensaxes persoais';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Máis estadíasticas]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Código';
$txt['code_select'] = '[Seleccionar]';
$txt['quote_from'] = 'Cita de';
$txt['quote'] = 'Cita';

$txt['merge_to_topic_id'] = 'ID do tema objectivo';
$txt['split'] = 'Dividir tema';
$txt['merge'] = 'Xuntar temas';
$txt['subject_new_topic'] = 'Asunto do novo tema';
$txt['split_this_post'] = 'Só dividir este post';
$txt['split_after_and_this_post'] = 'Dividir este tema despois de e incluíndo este post.';
$txt['select_split_posts'] = 'Seleccionar posts para dividir.';
$txt['new_topic'] = 'Novo tema';
$txt['split_successful'] = 'Tema dividido en dous exitosamente.';
$txt['origin_topic'] = 'Tema orixe';
$txt['please_select_split'] = 'Por favor, seleccione os posts que desexa dividir.';
$txt['merge_successful'] = 'Temas xuntados con éxito.';
$txt['new_merged_topic'] = 'Temas recen xuntados';
$txt['topic_to_merge'] = 'Temas a xuntar';
$txt['target_board'] = 'Taboleiro objectivo';
$txt['target_topic'] = 'Tema objectivo';
$txt['merge_confirm'] = 'Está seguro de que quere xuntalos';
$txt['with'] = 'con';
$txt['merge_desc'] = 'Esta función xuntará as mensaxes de dous temas en un. As mensaxes ordearanse de acordo o momento da súa publicación. Así, a mensaxe máis antiga será a primeira mensaxe do tema xuntado.';

$txt['set_sticky'] = 'Fixar tema';
$txt['set_nonsticky'] = 'Des-fixar tema';
$txt['set_lock'] = 'Bloquear tema';
$txt['set_unlock'] = 'Desbloquear tema';

$txt['search_advanced'] = 'Procura avanzada';

$txt['security_risk'] = 'RISCO DE SECURIDADE IMPORTANTE:';
$txt['not_removed'] = 'Non eliminaches ';
$txt['not_removed_extra'] = '%1$s é unha copia de seguridade de %2$s que non foi xerada por SMF. Pode accederse a ela directamente e usada para gañar acceso sen autorización ó foro. Debería eliminala inmediatamente.';

$txt['cache_writable_head'] = 'Aviso de rendemento';
$txt['cache_writable'] = 'O directorio de cache non é escribible - isto afectará adversamente o rendemento do foro.';

$txt['page_created'] = 'Páxina creada en ';
$txt['seconds_with'] = ' segundos con ';
$txt['queries'] = ' queries.';

$txt['report_to_mod_func'] = 'Usa esta función para informar os moderadores e administradores de un mensaxe abusivo os posteado incorrectamente.<br /><em>Por favor note que o seu enderezo de email será revelado os moderadores se usa isto.</em>';

$txt['online'] = 'En liña';
$txt['offline'] = 'Fora de liña';
$txt['pm_online'] = 'Mensaxe persoal (En liña)';
$txt['pm_offline'] = 'Mensaxe persoal (Fora de liña)';
$txt['status'] = 'Estado';

$txt['go_up'] = 'Subir';
$txt['go_down'] = 'Baixar';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2011</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Aniversarios:';
$txt['events'] = 'Eventos:';
$txt['birthdays_upcoming'] = 'Aniversarios futuros:';
$txt['events_upcoming'] = 'Eventos futuros:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Mes:';
$txt['calendar_year'] = 'Ano:';
$txt['calendar_day'] = 'Día:';
$txt['calendar_event_title'] = 'Título do evento';
$txt['calendar_event_options'] = 'Opcións do evento';
$txt['calendar_post_in'] = 'Publicado en:';
$txt['calendar_edit'] = 'Editar evento';
$txt['event_delete_confirm'] = 'Borrar este evento?';
$txt['event_delete'] = 'Borrar evento';
$txt['calendar_post_event'] = 'Publicar evento';
$txt['calendar'] = 'Calendario';
$txt['calendar_link'] = 'Ligazón o Calendario';
$txt['calendar_upcoming'] = 'Calendario futuro';
$txt['calendar_today'] = 'Calendario de hoxe';
$txt['calendar_week'] = 'Semá';
$txt['calendar_week_title'] = 'Semá %1$d de %2$d';
$txt['calendar_numb_days'] = 'Número de días:';
$txt['calendar_how_edit'] = '&iquest;como editas eses eventos?';
$txt['calendar_link_event'] = 'Enlazar Evento ó Mensaxe:';
$txt['calendar_confirm_delete'] = '&#191;Est&#225;s seguro que desexas borrar este evento?';
$txt['calendar_linked_events'] = 'Eventos Ligados';
$txt['calendar_click_all'] = 'clica para ver todas as %1$s';

$txt['moveTopic1'] = 'Publicar un tema de redireccionamiento';
$txt['moveTopic2'] = 'Cambia-lo titulo do tema';
$txt['moveTopic3'] = 'Novo asunto';
$txt['moveTopic4'] = 'Cambia-lo asunto de cada mensaxe';
$txt['move_topic_unapproved_js'] = 'Aviso! Este tema non foi aprobado aínda.\\n\\nNon é recomendable crear unha redirección do tema a non ser que pretenda aprobar o post inmediatamente despois do movemento.';

$txt['theme_template_error'] = 'Non se puido carga-la plantilla \'%s\'.';
$txt['theme_language_error'] = 'Non se puido carga-lo arquivo de idioma \'%s\'.';

$txt['parent_boards'] = 'Subforos';

$txt['smtp_no_connect'] = 'Non foi posible se conectar ó servidor SMTP';
$txt['smtp_port_ssl'] = 'O axuste de porto SMTP é incorrecto; debe ser 465 para servidores SSL.';
$txt['smtp_bad_response'] = 'Non se puideron obterer os codigos de resposta do servidor de mail';
$txt['smtp_error'] = 'Houbo problemas ó envia-lo mail. Erro: ';
$txt['mail_send_unable'] = 'Non s ele puido envia-lo email á direccion \'%s\'';

$txt['mlist_search'] = 'Procurar por usuarios';
$txt['mlist_search_again'] = 'Procurar de novo';
$txt['mlist_search_email'] = 'Procurar por direccion de email';
$txt['mlist_search_messenger'] = 'Procurar por nick de messenger';
$txt['mlist_search_group'] = 'Procurar por grupo';
$txt['mlist_search_name'] = 'Procurar por nome';
$txt['mlist_search_website'] = 'Procurar por sitio Web';
$txt['mlist_search_results'] = 'Procurar resultados por';
$txt['mlist_search_by'] = 'Procurar por %1$s';
$txt['mlist_menu_view'] = 'Ver a lista de membros';

$txt['attach_downloaded'] = 'descargado';
$txt['attach_viewed'] = 'visto';
$txt['attach_times'] = 'veces';

$txt['settings'] = 'Configuración';
$txt['never'] = 'Nunca';
$txt['more'] = 'máis';

$txt['hostname'] = 'Nome do servidor';
$txt['you_are_post_banned'] = 'Sentímolo %s, tes restrinxido o poder publicar mensaxes ou enviar mensaxes persoais no foro.';
$txt['ban_reason'] = 'Razón';

$txt['tables_optimized'] = 'Táboas da base de datos optimizadas';

$txt['add_poll'] = 'Agregar sondaxe';
$txt['poll_options6'] = 'Podes seleccionar ata %s opcións.';
$txt['poll_remove'] = 'Eliminar sondaxe';
$txt['poll_remove_warn'] = '&iquest;Estás seguro que desexas eliminar esta sondaxe do tema?';
$txt['poll_results_expire'] = 'Os resultados amosásense unha vez que a sondaxe péchese';
$txt['poll_expires_on'] = 'A votacion péchase';
$txt['poll_expired_on'] = 'Votacion pechada';
$txt['poll_change_vote'] = 'Eliminar Voto';
$txt['poll_return_vote'] = 'Opcións de votacion';
$txt['poll_cannot_see'] = 'Non podes ver os resultados desta sondaxe neste momento.';

$txt['quick_mod_approve'] = 'Aprobar seleccionados';
$txt['quick_mod_remove'] = 'Eliminar seleccionado(s)';
$txt['quick_mod_lock'] = 'Bloquear seleccionado(s)';
$txt['quick_mod_sticky'] = 'Fixar seleccionado(s)';
$txt['quick_mod_move'] = 'Mover seleccionado(s) a';
$txt['quick_mod_merge'] = 'Combinar seleccionado(s)';
$txt['quick_mod_markread'] = 'Marcar seleccionados como lidos';
$txt['quick_mod_go'] = '&iexcl;Ir!';
$txt['quickmod_confirm'] = '&#191;Est&#225;s seguro que desexas facer isto?';

$txt['spell_check'] = 'Revisar Ortografia';

$txt['quick_reply'] = 'Resposta rápida';
$txt['quick_reply_desc'] = 'Coa <em>resposta rápida</em> podes escribir un post mentres ves un tema sen cargar unha páxina nova. Podes seguir usando os BBCode e smileys coma se fose un post normal.';
$txt['quick_reply_warning'] = '&iexcl;Advertencia: o tema esta bloqueado!<br />Solamente admins e moderadores poden responder.';
$txt['quick_reply_verification'] = 'Despois de enviar o teu post serás dirixido a páxina normal dos posts para verificar o teu post %1$s.';
$txt['quick_reply_verification_guests'] = '(requerido para todos os invitados)';
$txt['quick_reply_verification_posts'] = '(requerido para todos os usuarios con menos de %1$d posts)';
$txt['wait_for_approval'] = 'Nota: este post non se amosará ata que sexa aprobado por un moderador.';

$txt['notification_enable_board'] = '&iquest;Estas seguro que desexas activa-la notificacion de novos temas para este foro?';
$txt['notification_disable_board'] = '&iquest;Estas seguro que desexas desactiva-la notificacion de novos temas para este foro?';
$txt['notification_enable_topic'] = '&iquest;Estas seguro que desexas activa-la notificacion de novas respostas para este tema?';
$txt['notification_disable_topic'] = '&iquest;Estas seguro que desexas desactiva-la notificacion de novas respostas para este tema?';

$txt['report_to_mod'] = 'Informar o moderador';
$txt['issue_warning_post'] = 'Emitir un aviso por esta mensaxe';

$txt['unread_topics_visit'] = 'Novos temas non lidos';
$txt['unread_topics_visit_none'] = 'Non se han temas non lidos dende a túa ultima visita.  <a href="' . $scripturl . '?action=unread;all">Fai <i>click</i> aqui para tentar los tema non lidos</a>.';
$txt['unread_topics_all'] = 'los tema non lidos';
$txt['unread_replies'] = 'Temas actualizados';

$txt['who_title'] = 'Quen esta en liña';
$txt['who_and'] = ' e ';
$txt['who_viewing_topic'] = ' estan vendo este tema.';
$txt['who_viewing_board'] = ' estan vendo este foro.';
$txt['who_member'] = 'Usuario';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'CSS valido!';

// Current footer strings
$txt['valid_html'] = 'HTML 4.01 valido';
$txt['valid_xhtml'] = 'XHTML 1.0 valido!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Visitante';
$txt['guests'] = 'Visitantes';
$txt['user'] = 'Usuario';
$txt['users'] = 'Usuarios';
$txt['hidden'] = 'Oculto(s)';
$txt['buddy'] = 'Amigo';
$txt['buddies'] = 'Amigos';
$txt['most_online_ever'] = 'Máis en liña';
$txt['most_online_today'] = 'Máis en liña hoxe';

$txt['merge_select_target_board'] = 'Selecciona o foro destino do tema combinado';
$txt['merge_select_poll'] = 'Selecciona cal sondaxe tendra o tema combinado';
$txt['merge_topic_list'] = 'Selecciona témalos a combinar';
$txt['merge_select_subject'] = 'Selecciona o titulo do tema combinado';
$txt['merge_custom_subject'] = 'Titulo personalizado';
$txt['merge_enforce_subject'] = 'Cambia-lo titulo de tódalas mensaxes';
$txt['merge_include_notifications'] = '&iquest;Incluír notificacións?';
$txt['merge_check'] = '&iquest;Combinar?';
$txt['merge_no_poll'] = 'Sen sondaxe';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Icona actual';
$txt['message_icon'] = 'Icoa da mensaxe';

$txt['smileys_current'] = 'Conxunto actual de Smileys';
$txt['smileys_none'] = 'Sen Smileys';
$txt['smileys_forum_board_default'] = 'As que o foro este utilizando por defecto';

$txt['search_results'] = 'Resultados da busqueda';
$txt['search_no_results'] = 'Non se atoparon resultados';

$txt['totalTimeLogged1'] = 'Tempo total en liña: ';
$txt['totalTimeLogged2'] = ' dias, ';
$txt['totalTimeLogged3'] = ' horas e ';
$txt['totalTimeLogged4'] = ' minutos.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Hai';
$txt['approve_thereare'] = 'Hai';
$txt['approve_member'] = 'un usuario';
$txt['approve_members'] = 'usuarios';
$txt['approve_members_waiting'] = 'agardando aprobacion.';

$txt['notifyboard_turnon'] = '&iquest;Desexas unha notificacion por email cando alguén publique un novo tema neste foro?';
$txt['notifyboard_turnoff'] = '&iquest;Estas seguro que NON desexas recibir notificacións de temas novos neste foro?';

$txt['activate_code'] = 'O teu c&#243;digo de activaci&#243;n é';

$txt['find_members'] = 'Buscar usuarios';
$txt['find_username'] = 'Nome, nome de usuario, ou direccion de email';
$txt['find_buddies'] = '&iquest;Amosar amigos solamente?';
$txt['find_wildcards'] = 'Comodines permitidos: *, ?';
$txt['find_no_results'] = 'Non se atoparon resultados';
$txt['find_results'] = 'Resultados';
$txt['find_close'] = 'Pechar';

$txt['unread_since_visit'] = 'Amosar mensaxes non lidos dende a ultima visita.';
$txt['show_unread_replies'] = 'Amosar novas respostas ás túas mensaxes.';

$txt['change_color'] = 'Cambiar Color';

$txt['quickmod_delete_selected'] = 'Borrar seleccionados';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Recibiches un ou m&#225;s novos mensaxes persoais.\\n&#191;Desexas los ve agora (nunha nova xanela)?';

$txt['previous_next_back'] = '&laco; anterior';
$txt['previous_next_forward'] = 'proximo &raquo;';

$txt['movetopic_auto_board'] = '[FORO]';
$txt['movetopic_auto_topic'] = '[URL DO TEMA]';
$txt['movetopic_default'] = 'O tema foi movido a ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Encoger ou expandir encabezado.';

$txt['mark_unread'] = 'Marcar como non lidos';

$txt['ssi_not_direct'] = 'Por favor non acceses SSI.php usando directamente o URL; mellor usa a ubicacion (%s) ou agrega ?ssi_function=algun_valor.';
$txt['ssi_session_broken'] = '&iexcl;SSI.php non puido cargar unha sesion!  Isto pode causar problemas con algunhas funcións, tales como ingresar ou saír - &iexcl;Favor de se asegurar que SSI.php este incluído sempre ó principio *antes de calquera outro codigo* en tódolos teus scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Previsualizar mensaxe';
$txt['preview_fetch'] = 'Obtendo a previsualizacion...';
$txt['preview_new'] = 'Novo mensaxe';
$txt['error_while_submitting'] = 'Houbo un erro mentres se envíaba este mensaxe.';
$txt['error_old_topic'] = 'Aviso: non houbo posts neste tema dende polo menos %1$d días.<br />A non ser que esteas seguro de que queres respostar, por favor considera comezar un novo tema.';

$txt['split_selected_posts'] = 'Mensaxes seleccionados';
$txt['split_selected_posts_desc'] = 'Os mensaxes amosados a continuacion formasen un novo tema unha vez divididos.';
$txt['split_reset_selection'] = 'reinicializar seleccion';

$txt['modify_cancel'] = 'Cancelo';
$txt['mark_read_short'] = 'Marcar como lido';

$txt['pm_short'] = 'Miñas mensaxes';
$txt['pm_menu_read'] = 'Ler as túas mensaxes';
$txt['pm_menu_send'] = 'Enviar unha mensaxe';

$txt['hello_member_ndt'] = 'Boas';

$txt['unapproved_posts'] = 'Posts sen aprobar (Topics: %1$d, Posts: %2$d)';

$txt['ajax_in_progress'] = 'Cargando...';

$txt['mod_reports_waiting'] = 'Hay actualmente %1$d informes de moderación abertos.';

$txt['view_unread_category'] = 'Posts sin ler';
$txt['verification'] = 'Verificación';
$txt['visual_verification_description'] = 'Escribe as letras amosadas na imaxe';
$txt['visual_verification_sound'] = 'Escoita as letras';
$txt['visual_verification_request_new'] = 'Pedir outra imaxe';

// Sub menu labels
$txt['summary'] = 'Resumo';
$txt['account'] = 'Axustes de conta';
$txt['forumprofile'] = 'Perfil do foro';

$txt['modSettings_title'] = 'Características é opcións';
$txt['package'] = 'Xestor de paquetes';
$txt['errlog'] = 'Histórico de erros';
$txt['edit_permissions'] = 'Permisos';
$txt['mc_unapproved_attachments'] = 'Adxuntos sen aprobar';
$txt['mc_unapproved_poststopics'] = 'Posts e Temas sen aprobar';
$txt['mc_reported_posts'] = 'Posts informados';
$txt['modlog_view'] = 'Histórico de moderación';
$txt['calendar_menu'] = 'Ver Calendario';

//!!! Send email strings - should move?
$txt['send_email'] = 'Enviar Email';
$txt['send_email_disclosed'] = 'Note que isto será visible o receptor.';
$txt['send_email_subject'] = 'Asunto do Email';

$txt['ignoring_user'] = 'Estás ignorado este usuario.';
$txt['show_ignore_user_post'] = 'Amosame o post.';

$txt['spider'] = 'Araña';
$txt['spiders'] = 'Arañas';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Descargas';
$txt['filesize'] = 'Tamaño do arquivo';
$txt['subscribe_webslice'] = 'Suscribirse o Webslice';

// Restore topic
$txt['restore_topic'] = 'Restablecer Tema';
$txt['restore_message'] = 'Restablecer';
$txt['quick_mod_restore'] = 'Restablecer seleccionados';

// Editor prompt.
$txt['prompt_text_email'] = 'Por favor introduce o enderezo de email.';
$txt['prompt_text_ftp'] = 'Por favor introduce o enderezo FTP.';
$txt['prompt_text_url'] = 'Por favor introduce a URL que desexa ligar.';
$txt['prompt_text_img'] = 'Introduza a localización da imaxe';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Borrar elemento';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Modelos: ';
$txt['debug_subtemplates'] = 'Sub Modelos: ';
$txt['debug_language_files'] = 'Arquivos da linguaxe: ';
$txt['debug_stylesheets'] = 'Follas de estilo: ';
$txt['debug_files_included'] = 'Arquivos incluídos: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'amosar';
$txt['debug_cache_hits'] = 'Acertos na cache: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s bytes';
$txt['debug_queries_used'] = 'Queries usadas: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Queries usadas: %1$d, %2$d avisos.';
$txt['debug_query_in_line'] = 'en <em>%1$s</em> liña <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'que tomou %1$s segundos.';
$txt['debug_query_which_took_at'] = 'que tomou %1$s segundos con %2$s na petición.';
$txt['debug_show_queries'] = '[Amosar Queries]';
$txt['debug_hide_queries'] = '[Ocultar Queries]';

?>
