<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = 'Data';
$txt['modlog_member'] = 'Membro';
$txt['modlog_position'] = 'Posición';
$txt['modlog_action'] = 'Acción';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Resultados da procura';
$txt['modlog_total_entries'] = 'Entradas totais';
$txt['modlog_ac_approve_topic'] = 'Temas aprobados &quot;{topic}&quot; por &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'Mensaxe aprobado &quot;{subject}&quot; en &quot;{topic}&quot; por &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Pechado &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = 'Avisado {member} por &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Desbloqueado &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Marcado coma permanente &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Desmarcado coma permanente &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = 'Eliminado &quot;{subject}&quot; por &quot;{member}&quot; de &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Eliminado membro &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'Eliminado tema &quot;{topic}&quot; de &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Editado &quot;{message}&quot; por &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Xuntados temas para crear &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Dividido &quot;{topic}&quot; para crear &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'Movido &quot;{topic}&quot; dende &quot;{board_from}&quot; a &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Editado o perfil de &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Podados algúns posts con máis de {days} días';
$txt['modlog_ac_news'] = 'Editadas as novas';
$txt['modlog_enter_comment'] = 'Entra ó Comentario de Moderación';
$txt['modlog_moderation_log'] = 'Log de Moderación';
$txt['modlog_moderation_log_desc'] = 'Debaixo está a lista de tódalas accións de moderación que executaron os moderadores do foro.<br /><strong>Por favor teña en conta:</strong> As entradas non poden ser eliminadas deste log ata que teñan pasado polo menos vintecatro horas.';
$txt['modlog_no_entries_found'] = 'Non hai entradas no log de moderación neste momento.';
$txt['modlog_remove'] = 'Eliminar';
$txt['modlog_removeall'] = 'Eliminar todos';
$txt['modlog_go'] = 'Ir';
$txt['modlog_add'] = 'Engadir';
$txt['modlog_search'] = 'Procura rápida';
$txt['modlog_by'] = 'Por';
$txt['modlog_id'] = '<em>Eliminado - ID:%1$d</em>';

$txt['modlog_ac_add_warn_template'] = 'Engadida plantilla de aviso: &quot;{template}&quot;';
$txt['modlog_ac_modify_warn_template'] = 'Editada a plantilla de aviso: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Eliminada a plantilla de aviso: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Engadidos disparadores de ban:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Membro:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = ' <em>Email:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = ' <em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Hostname:</em> {hostname}';

$txt['modlog_admin_log'] = 'Log de Administración.';
$txt['modlog_admin_log_desc'] = 'Máis abaixo hai una lista de accións dos administradores do teu foro.<br /><strong>Por favor teña en conta:</strong> As entradas non poden ser eliminadas deste log ata que teñan pasado polo menos vintecatro horas.';
$txt['modlog_admin_log_no_entries_found'] = 'Non hai entradas no log de administración neste momento.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Actualizado o foro a versión {version}';
$txt['modlog_ac_install'] = 'Instalada versión {version}';
$txt['modlog_ac_add_board'] = 'Engadido novo taboleiro: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Editado o taboleiro &quot;{board}&quot;';
$txt['modlog_ac_delete_board'] = 'Eliminado o taboleiro &quot;{boardname}&quot;';
$txt['modlog_ac_add_cat'] = 'Engadida unha nova categoría, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Editada a categoría &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = 'Eliminada a categoría &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = 'Eliminado o grupo &quot;{group}&quot;';
$txt['modlog_ac_add_group'] = 'Engadido o grupo &quot;{group}&quot;';
$txt['modlog_ac_edited_group'] = 'Editado o grupo &quot;{group}&quot;';
$txt['modlog_ac_added_to_group'] = 'Engadido &quot;{member}&quot; o grupo &quot;{group}&quot;';
$txt['modlog_ac_removed_from_group'] = 'Eliminado &quot;{member}&quot; do grupo &quot;{group}&quot;';
$txt['modlog_ac_removed_all_groups'] = 'Eliminado &quot;{member}&quot; de tódolos grupos';

$txt['modlog_ac_remind_member'] = 'Enviado un recordatorio a &quot;{member}&quot; para activar a súa conta';
$txt['modlog_ac_approve_member'] = 'Aprobada/Activada a conta de &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Boletín de novas enviado';

$txt['modlog_ac_install_package'] = 'Instalado novo paquete: &quot;{package}&quot;, versión {version}';
$txt['modlog_ac_upgrade_package'] = 'Actializado paquete: &quot;{package}&quot; á versión {version}';
$txt['modlog_ac_uninstall_package'] = 'Desinstalado paquete: &quot;{package}&quot;, versión {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Restaurado tema &quot;{topic}&quot; de &quot;{board}&quot; a &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Restaurados posts de &quot;{subject}&quot; ó tema- &quot;{topic}&quot; no taboleiro &quot;{board}&quot;.';

$txt['modlog_parameter_guest'] = '<em>Invitado</em>';

?>
