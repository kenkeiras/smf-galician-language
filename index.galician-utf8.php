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
$txt['moderate'] = 'Moderate';

$txt['save'] = 'Save';

$txt['modify'] = 'Modify';
$txt['forum_index'] = '%1$s - Index';
$txt['members'] = 'Members';
$txt['board_name'] = 'Board name';
$txt['posts'] = 'Posts';

$txt['member_postcount'] = 'Posts';
$txt['no_subject'] = '(No subject)';
$txt['view_profile'] = 'View Profile';
$txt['guest_title'] = 'Guest';
$txt['author'] = 'Author';
$txt['on'] = 'on';
$txt['remove'] = 'Remove';
$txt['start_new_topic'] = 'Start new topic';

$txt['login'] = 'Login';
// Use numeric entities in the below string.
$txt['username'] = 'Username';
$txt['password'] = 'Password';

$txt['username_no_exist'] = 'That username does not exist.';
$txt['no_user_with_email'] = 'There are no usernames associated with that email.';

$txt['board_moderator'] = 'Board Moderator';
$txt['remove_topic'] = 'Remove Topic';
$txt['topics'] = 'Topics';
$txt['modify_msg'] = 'Modify message';
$txt['name'] = 'Name';
$txt['email'] = 'Email';
$txt['subject'] = 'Subject';
$txt['message'] = 'Message';
$txt['redirects'] = 'Redirects';
$txt['quick_modify'] = 'Modify Inline';

$txt['choose_pass'] = 'Choose password';
$txt['verify_pass'] = 'Verify password';
$txt['position'] = 'Position';

$txt['profile_of'] = 'View the profile of';
$txt['total'] = 'Total';
$txt['posts_made'] = 'Posts';
$txt['website'] = 'Website';
$txt['register'] = 'Register';
$txt['warning_status'] = 'Warning Status';
$txt['user_warn_watch'] = 'User is on moderator watch list';
$txt['user_warn_moderate'] = 'User posts join approval queue';
$txt['user_warn_mute'] = 'User is banned from posting';
$txt['warn_watch'] = 'Watched';
$txt['warn_moderate'] = 'Moderated';
$txt['warn_mute'] = 'Muted';

$txt['message_index'] = 'Message Index';
$txt['news'] = 'News';
$txt['home'] = 'Home';

$txt['lock_unlock'] = 'Lock/Unlock Topic';
$txt['post'] = 'Post';
$txt['error_occured'] = 'An Error Has Occurred!';
$txt['at'] = 'at';
$txt['logout'] = 'Logout';
$txt['started_by'] = 'Started by';
$txt['replies'] = 'Replies';
$txt['last_post'] = 'Last post';
$txt['admin_login'] = 'Administration Login';
// Use numeric entities in the below string.
$txt['topic'] = 'Topic';
$txt['help'] = 'Help';
$txt['notify'] = 'Notify';
$txt['unnotify'] = 'Unnotify';
$txt['notify_request'] = 'Do you want a notification email if someone replies to this topic?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Regards,' . "\n" . 'The ' . $context['forum_name'] . ' Team.';
$txt['notify_replies'] = 'Notify of replies';
$txt['move_topic'] = 'Move Topic';
$txt['move_to'] = 'Move to';
$txt['pages'] = 'Pages';
$txt['users_active'] = 'Users active in past %1$d minutes';
$txt['personal_messages'] = 'Personal Messages';
$txt['reply_quote'] = 'Reply with quote';
$txt['reply'] = 'Reply';
$txt['reply_noun'] = 'Reply';
$txt['approve'] = 'Approve';
$txt['approve_all'] = 'approve all';
$txt['awaiting_approval'] = 'Awaiting Approval';
$txt['attach_awaiting_approve'] = 'Attachments awaiting approval';
$txt['post_awaiting_approval'] = 'Note: This message is awaiting approval by a moderator.';
$txt['there_are_unapproved_topics'] = 'There are %1$s topics and %2$s posts awaiting approval in this board. Click <a href="%3$s">here</a> to view them all.';

$txt['msg_alert_none'] = 'No messages...';
$txt['msg_alert_you_have'] = 'you have';
$txt['msg_alert_messages'] = 'messages';
$txt['remove_message'] = 'Remove this message';

$txt['online_users'] = 'Users Online';
$txt['personal_message'] = 'Personal Message';
$txt['jump_to'] = 'Jump to';
$txt['go'] = 'go';
$txt['are_sure_remove_topic'] = 'Are you sure you want to remove this topic?';
$txt['yes'] = 'Yes';
$txt['no'] = 'No';

$txt['search_end_results'] = 'End of results';
$txt['search_on'] = 'on';

$txt['search'] = 'Search';
$txt['all'] = 'All';

$txt['back'] = 'Back';
$txt['password_reminder'] = 'Password reminder';
$txt['topic_started'] = 'Topic started by';
$txt['title'] = 'Title';
$txt['post_by'] = 'Post by';
$txt['memberlist_searchable'] = 'Searchable list of all registered members.';
$txt['welcome_member'] = 'Please welcome';
$txt['admin_center'] = 'Administration Center';
$txt['last_edit'] = 'Last Edit';
$txt['notify_deactivate'] = 'Would you like to deactivate notification on this topic?';

$txt['recent_posts'] = 'Recent Posts';

$txt['location'] = 'Location';
$txt['gender'] = 'Gender';
$txt['date_registered'] = 'Date Registered';

$txt['recent_view'] = 'View the most recent posts on the forum.';
$txt['recent_updated'] = 'is the most recently updated topic';

$txt['male'] = 'Male';
$txt['female'] = 'Female';

$txt['error_invalid_characters_username'] = 'Invalid character used in Username.';

$txt['welcome_guest'] = 'Benvido(a), <b>' . $txt[28] . '</b>. Favor de <a href="' . $scripturl . '?action=login">ingresar</a> ou <a href="' . $scripturl . '?action=register">se rexistrar</a>.';
$txt['login_or_register'] = 'Please <a href="' . $scripturl . '?action=login">login</a> or <a href="' . $scripturl . '?action=register">register</a>.';
$txt['welcome_guest_activate'] = '<br />&iquest;Perdíche-ltu  <a href="' . $scripturl . '?action=activate">email de activacion?</a>';
$txt['hello_member'] = 'Ola,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Benvido(a),';
$txt['welmsg_hey'] = 'Hey,';
$txt['welmsg_welcome'] = 'Welcome,';
$txt['welmsg_please'] = 'Please';
$txt['select_destination'] = 'Please select a destination';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Posted by';

$txt['icon_smiley'] = 'Smiley';
$txt['icon_angry'] = 'Angry';
$txt['icon_cheesy'] = 'Cheesy';
$txt['icon_laugh'] = 'Laugh';
$txt['icon_sad'] = 'Sad';
$txt['icon_wink'] = 'Wink';
$txt['icon_grin'] = 'Grin';
$txt['icon_shocked'] = 'Shocked';
$txt['icon_cool'] = 'Cool';
$txt['icon_huh'] = 'Huh';
$txt['icon_rolleyes'] = 'Roll Eyes';
$txt['icon_tongue'] = 'Tongue';
$txt['icon_embarrassed'] = 'Embarrassed';
$txt['icon_lips'] = 'Lips sealed';
$txt['icon_undecided'] = 'Undecided';
$txt['icon_kiss'] = 'Kiss';
$txt['icon_cry'] = 'Cry';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderators';

$txt['mark_board_read'] = 'Mark Topics as Read for this Board';
$txt['views'] = 'Views';
$txt['new'] = 'New';

$txt['view_all_members'] = 'View All Members';
$txt['view'] = 'View';

$txt['viewing_members'] = 'Viewing Members %1$s to %2$s';
$txt['of_total_members'] = 'of %1$s total members';

$txt['forgot_your_password'] = 'Forgot your password?';

$txt['date'] = 'Date';
// Use numeric entities in the below string.
$txt['from'] = 'From';
$txt['check_new_messages'] = 'Check for new messages';
$txt['to'] = 'To';

$txt['board_topics'] = 'Topics';
$txt['members_title'] = 'Members';
$txt['members_list'] = 'Members List';
$txt['new_posts'] = 'New Posts';
$txt['old_posts'] = 'No New Posts';
$txt['redirect_board'] = 'Redirect Board';

$txt['sendtopic_send'] = 'Enviar';
$txt['report_sent'] = 'Your report has been sent successfully.';

$txt['time_offset'] = 'Time Offset';
$txt['or'] = 'or';

$txt['no_matches'] = 'Sorry, no matches were found';

$txt['notification'] = 'Notification';

$txt['your_ban'] = 'Sorry %1$s, you are banned from using this forum!';
$txt['your_ban_expires'] = 'This ban is set to expire %1$s.';
$txt['your_ban_expires_never'] = 'This ban is not set to expire.';
$txt['ban_continue_browse'] = 'You may continue to browse the forum as a guest.';

$txt['mark_as_read'] = 'Mark ALL messages as read';

$txt['hot_topics'] = 'Hot Topic (More than %1$d replies)';
$txt['very_hot_topics'] = 'Very Hot Topic (More than %1$d replies)';
$txt['locked_topic'] = 'Locked Topic';
$txt['normal_topic'] = 'Normal Topic';
$txt['participation_caption'] = 'Temas nos que publicaches';

$txt['go_caps'] = 'GO';

$txt['print'] = 'Print';
$txt['profile'] = 'Profile';
$txt['topic_summary'] = 'Topic Summary';
$txt['not_applicable'] = 'N/A';
$txt['message_lowercase'] = 'message';
$txt['name_in_use'] = 'This name is already in use by another member.';

$txt['total_members'] = 'Total Members';
$txt['total_posts'] = 'Total Posts';
$txt['total_topics'] = 'Total Topics';

$txt['mins_logged_in'] = 'Minutes to stay logged in';

$txt['preview'] = 'Preview';
$txt['always_logged_in'] = 'Always stay logged in';

$txt['logged'] = 'Logged';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'by';

$txt['hours'] = 'hours';
$txt['days_word'] = 'days';

$txt['newest_member'] = ', our newest member.';

$txt['search_for'] = 'Search for';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = '&iquest;Estas.+ahi?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'Remember, this forum is in \'Maintenance Mode\'.';

$txt['read'] = 'Read';
$txt['times'] = 'times';

$txt['forum_stats'] = 'Forum Stats';
$txt['latest_member'] = 'Latest Member';
$txt['total_cats'] = 'Total Categories';
$txt['latest_post'] = 'Latest Post';

$txt['you_have'] = 'You\'ve got';
$txt['click'] = 'Click';
$txt['here'] = 'here';
$txt['to_view'] = 'to view them.';

$txt['total_boards'] = 'Total Boards';

$txt['print_page'] = 'Print Page';

$txt['valid_email'] = 'This must be a valid email address.';

$txt['geek'] = 'I am a geek!!';
$txt['info_center_title'] = '%1$s - Info Center';

$txt['send_topic'] = 'Send this topic';

$txt['sendtopic_title'] = 'Enviar tema &#171; %s &#187; a un amigo.';
$txt['sendtopic_sender_name'] = 'O teu nome';
$txt['sendtopic_sender_email'] = 'O teu direccion de email';
$txt['sendtopic_receiver_name'] = 'Nome do destinatario';
$txt['sendtopic_receiver_email'] = 'Direccion email do destinatario';
$txt['sendtopic_comment'] = 'Agregar un comentario';

$txt['allow_user_email'] = 'Allow users to email me';

$txt['check_all'] = 'Check all';

// Use numeric entities in the below string.
$txt['database_error'] = 'Database Error';
$txt['try_again'] = 'Please try again.  If you come back to this error screen, report the error to an administrator.';
$txt['file'] = 'File';
$txt['line'] = 'Line';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF has detected and automatically tried to repair an error in your database.  If you continue to have problems, or continue to receive these emails, please contact your host.';
$txt['database_error_versions'] = '<b>Nota:</b> Asemella que a túa base de datos pode precisar unha actualizacion. A version dos arquivos do teu foro estan na version ' . $forum_version . ', mentres que a túa base de datos esta na version de SMF ' . $modSettings['smfVersion'] . '. Recomendámoste que execúte-la ultima versi&oacuten de upgrade.php.';
$txt['template_parse_error'] = '&iexcl;Erro ó parsear o Template!';
$txt['template_parse_error_message'] = 'Asemella que algo se estragou no foro co sistema de temas.  Este problema pode que solamente sexa temporal, por favor, regresa nuns momentos e intentalo novamente.  Se continúas vendo este mensaxe, por favor contacta ó administrador.<br /><br />Podes tentar <a href="javascript:location.reload();">actualizar esta pagina</a>.';
$txt['template_parse_error_details'] = 'Houbo un problema cargando o tema ou arquivo de idioma <tt><b>%1$s</b></tt>.  Por favor revisa a sintaxe e tenta novamente - lembranza, os apostrofes (<tt>\'</tt>) polo xeral deben ter unha secuencia de escape coa diagonal investida (<tt>\\</tt>).  Para ver informaci&#243;n especifica do erro do sitio de PHP tenta <a href="' . $boardurl . '%1$s">acceder ó arquivo directamente</a>.<br /><br />Podes tentar <a href="javascript:location.reload();">actualizar esta pagina</a> ou <a href="' . $scripturl . '?theme=1">usa-lo tema de default</a>.';

$txt['today'] = '<strong>Today</strong> at ';
$txt['yesterday'] = '<strong>Yesterday</strong> at ';
$txt['new_poll'] = 'New poll';
$txt['poll_question'] = 'Question';
$txt['poll_vote'] = 'Submit Vote';
$txt['poll_total_voters'] = 'Total Members Voted';
$txt['shortcuts'] = 'shortcuts: hit alt+s to submit/post or alt+p to preview';
$txt['shortcuts_firefox'] = 'shortcuts: hit shift+alt+s to submit/post or shift+alt+p to preview';
$txt['poll_results'] = 'View results';
$txt['poll_lock'] = 'Lock Voting';
$txt['poll_unlock'] = 'Unlock Voting';
$txt['poll_edit'] = 'Edit Poll';
$txt['poll'] = 'Poll';
$txt['one_day'] = '1 Day';
$txt['one_week'] = '1 Week';
$txt['one_month'] = '1 Month';
$txt['forever'] = 'Forever';
$txt['quick_login_dec'] = 'Login with username, password and session length';
$txt['one_hour'] = '1 Hour';
$txt['moved'] = 'MOVED';
$txt['moved_why'] = 'Please enter a brief description as to<br />why this topic is being moved.';
$txt['board'] = 'Board';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Sticky Topic';

$txt['delete'] = 'Delete';

$txt['your_pms'] = 'Your Personal Messages';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[More Stats]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Code';
$txt['code_select'] = '[Select]';
$txt['quote_from'] = 'Quote from';
$txt['quote'] = 'Quote';

$txt['merge_to_topic_id'] = 'ID of target topic';
$txt['split'] = 'Split Topic';
$txt['merge'] = 'Merge Topics';
$txt['subject_new_topic'] = 'Subject For New Topic';
$txt['split_this_post'] = 'Only split this post.';
$txt['split_after_and_this_post'] = 'Split topic after and including this post.';
$txt['select_split_posts'] = 'Select posts to split.';
$txt['new_topic'] = 'New Topic';
$txt['split_successful'] = 'Topic successfully split into two topics.';
$txt['origin_topic'] = 'Origin Topic';
$txt['please_select_split'] = 'Please select which posts you wish to split.';
$txt['merge_successful'] = 'Topics successfully merged.';
$txt['new_merged_topic'] = 'Newly Merged Topic';
$txt['topic_to_merge'] = 'Topic to be merged';
$txt['target_board'] = 'Target board';
$txt['target_topic'] = 'Target topic';
$txt['merge_confirm'] = 'Are you sure you want to merge';
$txt['with'] = 'with';
$txt['merge_desc'] = 'This function will merge the messages of two topics into one topic. The messages will be sorted according to the time of posting. Therefore the earliest posted message will be the first message of the merged topic.';

$txt['set_sticky'] = 'Set topic sticky';
$txt['set_nonsticky'] = 'Set topic non-sticky';
$txt['set_lock'] = 'Lock topic';
$txt['set_unlock'] = 'Unlock topic';

$txt['search_advanced'] = 'Advanced search';

$txt['security_risk'] = 'MAJOR SECURITY RISK:';
$txt['not_removed'] = 'You have not removed ';
$txt['not_removed_extra'] = '%1$s is a backup of %2$s that was not generated by SMF. It can be accessed directly and used to gain unauthorised access to your forum. You should delete it immediately.';

$txt['cache_writable_head'] = 'Performance Warning';
$txt['cache_writable'] = 'The cache directory is not writable - this will adversely affect the performance of your forum.';

$txt['page_created'] = 'Page created in ';
$txt['seconds_with'] = ' seconds with ';
$txt['queries'] = ' queries.';

$txt['report_to_mod_func'] = 'Use this function to inform the moderators and administrators of an abusive or wrongly posted message.<br /><em>Please note that your email address will be revealed to the moderators if you use this.</em>';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Personal Message (Online)';
$txt['pm_offline'] = 'Personal Message (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Go Up';
$txt['go_down'] = 'Go Down';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2011</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Birthdays:';
$txt['events'] = 'Events:';
$txt['birthdays_upcoming'] = 'Upcoming Birthdays:';
$txt['events_upcoming'] = 'Upcoming Events:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Month:';
$txt['calendar_year'] = 'Year:';
$txt['calendar_day'] = 'Day:';
$txt['calendar_event_title'] = 'Event Title';
$txt['calendar_event_options'] = 'Event Options';
$txt['calendar_post_in'] = 'Post In:';
$txt['calendar_edit'] = 'Edit Event';
$txt['event_delete_confirm'] = 'Delete this event?';
$txt['event_delete'] = 'Delete Event';
$txt['calendar_post_event'] = 'Post Event';
$txt['calendar'] = 'Calendar';
$txt['calendar_link'] = 'Link to Calendar';
$txt['calendar_upcoming'] = 'Upcoming Calendar';
$txt['calendar_today'] = 'Today\'s Calendar';
$txt['calendar_week'] = 'Week';
$txt['calendar_week_title'] = 'Week %1$d of %2$d';
$txt['calendar_numb_days'] = 'Number of Days:';
$txt['calendar_how_edit'] = '&iquest;como editas eses eventos?';
$txt['calendar_link_event'] = 'Enlazar Evento ó Mensaxe:';
$txt['calendar_confirm_delete'] = '&#191;Est&#225;s seguro que desexas borrar este evento?';
$txt['calendar_linked_events'] = 'Eventos Ligados';
$txt['calendar_click_all'] = 'click to see all %1$s';

$txt['moveTopic1'] = 'Publicar un tema de redireccionamiento';
$txt['moveTopic2'] = 'Cambia-lo titulo do tema';
$txt['moveTopic3'] = 'Novo asunto';
$txt['moveTopic4'] = 'Cambia-lo asunto de cada mensaxe';
$txt['move_topic_unapproved_js'] = 'Warning! This topic has not yet been approved.\\n\\nIt is not recommended that you create a redirection topic unless you intend to approve the post immediately following the move.';

$txt['theme_template_error'] = 'Non se puido carga-la plantilla \'%s\'.';
$txt['theme_language_error'] = 'Non se puido carga-lo arquivo de idioma \'%s\'.';

$txt['parent_boards'] = 'Subforos';

$txt['smtp_no_connect'] = 'Non foi posible se conectar ó servidor SMTP';
$txt['smtp_port_ssl'] = 'SMTP port setting incorrect; it should be 465 for SSL servers.';
$txt['smtp_bad_response'] = 'Non se puideron obterer os codigos de resposta do servidor de mail';
$txt['smtp_error'] = 'Houbo problemas ó envia-lo mail. Erro: ';
$txt['mail_send_unable'] = 'Non s ele puido envia-lo email á direccion \'%s\'';

$txt['mlist_search'] = 'Buscar por usuarios';
$txt['mlist_search_again'] = 'Search again';
$txt['mlist_search_email'] = 'Buscar por direccion de email';
$txt['mlist_search_messenger'] = 'Buscar por nick de messenger';
$txt['mlist_search_group'] = 'Buscar por grupo';
$txt['mlist_search_name'] = 'Buscar por nome';
$txt['mlist_search_website'] = 'Buscar por sitio Web';
$txt['mlist_search_results'] = 'Buscar resultados por';
$txt['mlist_search_by'] = 'Search by %1$s';
$txt['mlist_menu_view'] = 'View the memberlist';

$txt['attach_downloaded'] = 'descargado';
$txt['attach_viewed'] = 'visto';
$txt['attach_times'] = 'veces';

$txt['settings'] = 'Configuracion';
$txt['never'] = 'Nunca';
$txt['more'] = 'mais';

$txt['hostname'] = 'Nome do servidor';
$txt['you_are_post_banned'] = 'Sentímolo %s, te-lo restrinxido o poder publicar mensaxes ou enviar mensaxes persoais no foro.';
$txt['ban_reason'] = 'Razon';

$txt['tables_optimized'] = 'Táboas da base de datos optimizadas';

$txt['add_poll'] = 'Agregar sondaxe';
$txt['poll_options6'] = 'Podes seleccionar ata %s opcións.';
$txt['poll_remove'] = 'Eliminar sondaxe';
$txt['poll_remove_warn'] = '&iquest;Estas seguro que desexas eliminar esta sondaxe do tema?';
$txt['poll_results_expire'] = 'Os resultados amosásense unha vez que a sondaxe péchese';
$txt['poll_expires_on'] = 'A votacion péchase';
$txt['poll_expired_on'] = 'Votacion pechada';
$txt['poll_change_vote'] = 'Eliminar Voto';
$txt['poll_return_vote'] = 'Opcións de votacion';
$txt['poll_cannot_see'] = 'You cannot see the results of this poll at the moment.';

$txt['quick_mod_approve'] = 'Approve selected';
$txt['quick_mod_remove'] = 'Eliminar seleccionado(s)';
$txt['quick_mod_lock'] = 'Bloquear seleccionado(s)';
$txt['quick_mod_sticky'] = 'Fixar seleccionado(s)';
$txt['quick_mod_move'] = 'Mover seleccionado(s) a';
$txt['quick_mod_merge'] = 'Combinar seleccionado(s)';
$txt['quick_mod_markread'] = 'Marcar seleccionados como lidos';
$txt['quick_mod_go'] = '&iexcl;Ir!';
$txt['quickmod_confirm'] = '&#191;Est&#225;s seguro que desexas facer isto?';

$txt['spell_check'] = 'Revisar Ortografia';

$txt['quick_reply'] = 'Quick Reply';
$txt['quick_reply_desc'] = 'With <em>Quick-Reply</em> you can write a post when viewing a topic without loading a new page. You can still use bulletin board code and smileys as you would in a normal post.';
$txt['quick_reply_warning'] = '&iexcl;Advertencia: o tema esta bloqueado!<br />Solamente admins e moderadores poden responder.';
$txt['quick_reply_verification'] = 'After submitting your post you will be directed to the regular post page to verify your post %1$s.';
$txt['quick_reply_verification_guests'] = '(required for all guests)';
$txt['quick_reply_verification_posts'] = '(required for all users with less than %1$d posts)';
$txt['wait_for_approval'] = 'Note: this post will not display until it\'s been approved by a moderator.';

$txt['notification_enable_board'] = '&iquest;Estas seguro que desexas activa-la notificacion de novos temas para este foro?';
$txt['notification_disable_board'] = '&iquest;Estas seguro que desexas desactiva-la notificacion de novos temas para este foro?';
$txt['notification_enable_topic'] = '&iquest;Estas seguro que desexas activa-la notificacion de novas respostas para este tema?';
$txt['notification_disable_topic'] = '&iquest;Estas seguro que desexas desactiva-la notificacion de novas respostas para este tema?';

$txt['report_to_mod'] = 'Report to moderator';
$txt['issue_warning_post'] = 'Issue a warning because of this message';

$txt['unread_topics_visit'] = 'Novos temas non lidos';
$txt['unread_topics_visit_none'] = 'Non se han temas non lidos dende a túa ultima visita.  <a href="' . $scripturl . '?action=unread;all">Fai <i>click</i> aqui para tentar los tema non lidos</a>.';
$txt['unread_topics_all'] = 'los tema non lidos';
$txt['unread_replies'] = 'Temas actualizados';

$txt['who_title'] = 'Quen esta en linea';
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
$txt['most_online_ever'] = 'Most Online Ever';
$txt['most_online_today'] = 'Most Online Today';

$txt['merge_select_target_board'] = 'Selecciona o foro destino do tema combinado';
$txt['merge_select_poll'] = 'Selecciona cal sondaxe tendra o tema combinado';
$txt['merge_topic_list'] = 'Selecciona témalos a combinar';
$txt['merge_select_subject'] = 'Selecciona o titulo do tema combinado';
$txt['merge_custom_subject'] = 'Titulo personalizado';
$txt['merge_enforce_subject'] = 'Cambia-lo titulo de tódolos mensaxes';
$txt['merge_include_notifications'] = '&iquest;Incluír notificacións?';
$txt['merge_check'] = '&iquest;Combinar?';
$txt['merge_no_poll'] = 'Sen sondaxe';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Icona actual';
$txt['message_icon'] = 'Message Icon';

$txt['smileys_current'] = 'Conxunto actual de Smileys';
$txt['smileys_none'] = 'Sen Smileys';
$txt['smileys_forum_board_default'] = 'As que o foro este utilizando por defecto';

$txt['search_results'] = 'Resultados da busqueda';
$txt['search_no_results'] = 'Non se atoparon resultados';

$txt['totalTimeLogged1'] = 'Tempo total en linea: ';
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
$txt['error_old_topic'] = 'Warning: this topic has not been posted in for at least %1$d days.<br />Unless you\'re sure you want to reply, please consider starting a new topic.';

$txt['split_selected_posts'] = 'Mensaxes seleccionados';
$txt['split_selected_posts_desc'] = 'Os mensaxes amosados a continuacion formasen un novo tema unha vez divididos.';
$txt['split_reset_selection'] = 'reinicializar seleccion';

$txt['modify_cancel'] = 'Cancelo';
$txt['mark_read_short'] = 'Marcar como lido';

$txt['pm_short'] = 'My Messages';
$txt['pm_menu_read'] = 'Read your messages';
$txt['pm_menu_send'] = 'Send a message';

$txt['hello_member_ndt'] = 'Hello';

$txt['unapproved_posts'] = 'Unapproved Posts (Topics: %1$d, Posts: %2$d)';

$txt['ajax_in_progress'] = 'Loading...';

$txt['mod_reports_waiting'] = 'There are currently %1$d moderator reports open.';

$txt['view_unread_category'] = 'Unread Posts';
$txt['verification'] = 'Verification';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_request_new'] = 'Request another image';

// Sub menu labels
$txt['summary'] = 'Summary';
$txt['account'] = 'Account Settings';
$txt['forumprofile'] = 'Forum Profile';

$txt['modSettings_title'] = 'Features and Options';
$txt['package'] = 'Package Manager';
$txt['errlog'] = 'Error Log';
$txt['edit_permissions'] = 'Permissions';
$txt['mc_unapproved_attachments'] = 'Unapproved Attachments';
$txt['mc_unapproved_poststopics'] = 'Unapproved Posts and Topics';
$txt['mc_reported_posts'] = 'Reported Posts';
$txt['modlog_view'] = 'Moderation Log';
$txt['calendar_menu'] = 'View Calendar';

//!!! Send email strings - should move?
$txt['send_email'] = 'Send Email';
$txt['send_email_disclosed'] = 'Note this will be visible to the recipient.';
$txt['send_email_subject'] = 'Email Subject';

$txt['ignoring_user'] = 'You are ignoring this user.';
$txt['show_ignore_user_post'] = 'Show me the post.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spiders';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Filesize';
$txt['subscribe_webslice'] = 'Subscribe to Webslice';

// Restore topic
$txt['restore_topic'] = 'Restore Topic';
$txt['restore_message'] = 'Restore';
$txt['quick_mod_restore'] = 'Restore Selected';

// Editor prompt.
$txt['prompt_text_email'] = 'Please enter the email address.';
$txt['prompt_text_ftp'] = 'Please enter the ftp address.';
$txt['prompt_text_url'] = 'Please enter the URL you wish to link to.';
$txt['prompt_text_img'] = 'Enter image location';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Delete Item';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Templates: ';
$txt['debug_subtemplates'] = 'Sub templates: ';
$txt['debug_language_files'] = 'Language files: ';
$txt['debug_stylesheets'] = 'Style sheets: ';
$txt['debug_files_included'] = 'Files included: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'show';
$txt['debug_cache_hits'] = 'Cache hits: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s bytes';
$txt['debug_queries_used'] = 'Queries used: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Queries used: %1$d, %2$d warnings.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> line <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'which took %1$s seconds.';
$txt['debug_query_which_took_at'] = 'which took %1$s seconds at %2$s into request.';
$txt['debug_show_queries'] = '[Show Queries]';
$txt['debug_hide_queries'] = '[Hide Queries]';

?>