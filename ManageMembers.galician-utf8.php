<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'Groups';
$txt['viewing_groups'] = 'Viewing Membergroups';

$txt['membergroups_title'] = 'Manexar Grupos de usuarios';
$txt['membergroups_description'] = 'Os grupos de usuarios serven para agrupar usuarios que teñen a mesma configuracion de permisos, aparencia, ou dereitos de acceso. Algúns grupos estan baseados no numero de mensaxes que un usuario publicou. Podes asignar a alguén a un grupo seleccionando o seu perfil e cambiando a configuracion da súa conta.';
$txt['membergroups_modify'] = 'Modificar';

$txt['membergroups_add_group'] = 'Agregar grupo';
$txt['membergroups_regular'] = 'Grupos regulares';
$txt['membergroups_post'] = 'Grupos baseados no conteo de mensaxes';

$txt['membergroups_group_name'] = 'Nome do grupo de usuarios';
$txt['membergroups_new_board'] = 'Foros Visibles';
$txt['membergroups_new_board_desc'] = 'Foros que o grupo de usuarios pode ver.';
$txt['membergroups_new_board_post_groups'] = '<em>Nota: normalmente, os grupos baseados en conteo de mensaxes non precisan acceso porque o grupo no que o usuario se encontra lles dara acceso.</em>';
$txt['membergroups_new_as_inherit'] = 'inherit from';
$txt['membergroups_new_as_type'] = 'por tipo';
$txt['membergroups_new_as_copy'] = 'en base a';
$txt['membergroups_new_copy_none'] = '(ningún)';
$txt['membergroups_can_edit_later'] = 'podes los edita despues.';

$txt['membergroups_edit_group'] = 'Editar Group';
$txt['membergroups_edit_name'] = 'Nome do grupo';
$txt['membergroups_edit_inherit_permissions'] = 'Inherit Permissions';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Select &quot;No&quot; to enable group to have own permission set.';
$txt['membergroups_edit_inherit_permissions_no'] = 'No - Use Unique Permissions';
$txt['membergroups_edit_inherit_permissions_from'] = 'Inherit From';
$txt['membergroups_edit_hidden'] = 'Visibility';
$txt['membergroups_edit_hidden_no'] = 'Visible';
$txt['membergroups_edit_hidden_boardindex'] = 'Visible - Except in Group Key';
$txt['membergroups_edit_hidden_all'] = 'Invisible';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Are you sure you want to disallow assignment of this group as a users primary group?\\n\\nDoing so will restrict assignment to additional groups only, and will update all current &quot;primary&quot; members to have it as an additional group only.';
$txt['membergroups_edit_desc'] = 'Group description';
$txt['membergroups_edit_group_type'] = 'Group Type';
$txt['membergroups_edit_select_group_type'] = 'Select Group Type';
$txt['membergroups_group_type_private'] = 'Private <span class="smalltext">(Membership must be assigned)</span>';
$txt['membergroups_group_type_protected'] = 'Protected <span class="smalltext">(Only administrators can manage and assign)</span>';
$txt['membergroups_group_type_request'] = 'Requestable <span class="smalltext">(User may request membership)</span>';
$txt['membergroups_group_type_free'] = 'Free <span class="smalltext">(User may leave and join group at will)</span>';
$txt['membergroups_group_type_post'] = 'Post Based <span class="smalltext">(Membership based on post count)</span>';
$txt['membergroups_min_posts'] = 'Numero de mensaxes requiridos';
$txt['membergroups_online_color'] = 'Color na lista de usuarios en linea';
$txt['membergroups_star_count'] = 'Numero de imagenes de estrela';
$txt['membergroups_star_image'] = 'Arquivo de imaxe de estrela';
$txt['membergroups_star_image_note'] = 'podes usar $language para usa-lo idioma do usuario.';
$txt['membergroups_max_messages'] = 'Max. mensaxes persoais';
$txt['membergroups_max_messages_note'] = '0 = ilimitado';
$txt['membergroups_edit_save'] = 'Gardar';
$txt['membergroups_delete'] = 'Borrar';
$txt['membergroups_confirm_delete'] = '&iexcl;&iquest;Estas seguro que desexas borrar este grupo?!';

$txt['membergroups_members_title'] = 'Amosando tódolos usuarios do grupo';
$txt['membergroups_members_group_members'] = 'Group Members';
$txt['membergroups_members_no_members'] = 'Este grupo se encuantra actualmente vacio';
$txt['membergroups_members_add_title'] = 'Agregar un usuario a este grupo';
$txt['membergroups_members_add_desc'] = 'Lista de Usuarios a Agregar';
$txt['membergroups_members_add'] = 'Agregar Usuarios';
$txt['membergroups_members_remove'] = 'Lo elimina do Grupo';
$txt['membergroups_members_last_active'] = 'Last Active';
$txt['membergroups_members_additional_only'] = 'Add as additional group only.';
$txt['membergroups_members_group_moderators'] = 'Group Moderators';
$txt['membergroups_members_description'] = 'Description';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Are you sure you wish to remove yourself from the Administration group?';

$txt['membergroups_postgroups'] = 'Grupos baseados no conteo de mensaxes';
$txt['membergroups_settings'] = 'Membergroup Settings';
$txt['groups_manage_membergroups'] = 'Groups allowed to change membergroups';
$txt['membergroups_select_permission_type'] = 'Select permission profile';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Show boards';
$txt['membergroups_members_top'] = 'Members';
$txt['membergroups_name'] = 'Name';
$txt['membergroups_stars'] = 'Stars';

$txt['admin_browse_approve'] = 'Usuarios que estan agardando aprobacion das súas cuentas';
$txt['admin_browse_approve_desc'] = 'Dende aqui podes manexar a tódolos usuarios que estan agardando a aprobacion das súas contas.';
$txt['admin_browse_activate'] = 'Usuarios que as súas contas estan agardando activacion';
$txt['admin_browse_activate_desc'] = 'Esta pantalla lista tódolos usuarios que aínda non activaron as súas contas.';
$txt['admin_browse_awaiting_approval'] = 'Agardando Aprobacion <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Agardando Activacion <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Nome de usuario';
$txt['admin_browse_email'] = 'Direccion email';
$txt['admin_browse_ip'] = 'Direccion IP';
$txt['admin_browse_registered'] = 'Rexistrado';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Seleccionado con';
$txt['admin_browse_no_members_approval'] = 'Non members currently awaite approval.';
$txt['admin_browse_no_members_activate'] = 'Non members currently have not activated their accounts.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = '&#191;Tódolos usuarios seleccionados?';
$txt['admin_browse_outstanding_warn'] = '&iquest;tódolos usuarios afectados?';
$txt['admin_browse_w_approve'] = 'Aprobar';
$txt['admin_browse_w_activate'] = 'Activar';
$txt['admin_browse_w_delete'] = 'Borrar';
$txt['admin_browse_w_reject'] = 'Rexeitar';
$txt['admin_browse_w_remind'] = 'Lembrar';
$txt['admin_browse_w_approve_deletion'] = 'Aprobar (Borrar Contas)';
$txt['admin_browse_w_email'] = 'e enviar email';
$txt['admin_browse_w_approve_require_activate'] = 'Approve and Require Activation';

$txt['admin_browse_filter_by'] = 'Filtrar por';
$txt['admin_browse_filter_show'] = 'Amosando';
$txt['admin_browse_filter_type_0'] = 'Cuentas novas sen activar';
$txt['admin_browse_filter_type_2'] = 'Cambios de Email sen activar';
$txt['admin_browse_filter_type_3'] = 'Novas contas sen aprobar';
$txt['admin_browse_filter_type_4'] = 'Borrado de contas sen aprobar';
$txt['admin_browse_filter_type_5'] = 'Cuentas "debaixo da idade" sen aprobar';

$txt['admin_browse_outstanding'] = 'Usuarios Sobresaentes';
$txt['admin_browse_outstanding_days_1'] = 'Con tódolos usuarios que se rexistraron fai mais de';
$txt['admin_browse_outstanding_days_2'] = 'dias';
$txt['admin_browse_outstanding_perform'] = 'Realiza a seguinte accion';
$txt['admin_browse_outstanding_go'] = 'Realizar Accion';

$txt['check_for_duplicate'] = 'Check for Duplicates';
$txt['dont_check_for_duplicate'] = 'Don\'t Check for Duplicates';
$txt['duplicates'] = 'Duplicates';

$txt['not_activated'] = 'Not activated';

?>