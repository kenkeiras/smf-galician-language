<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Manexar Permisos';
$txt['permissions_modify'] = 'Modificar';
$txt['permissions_view'] = 'View';
$txt['permissions_allowed'] = 'Permitido';
$txt['permissions_denied'] = 'Rexeitado';
$txt['permission_cannot_edit'] = '<strong>Note:</strong> You cannot edit this permission profile as it is a predefined profile included within the forum software by default. If you wish to change the permissions of this profile you must first create a duplicate profile. You can carry out this task by clicking <a href="%1$s">here</a>.';

$txt['permissions_for_profile'] = 'Permissions for Profile';
$txt['permissions_boards_desc'] = 'The list below shows which set of permissions has been assigned to each board on your forum. You may edit the assigned permission profile by either clicking the board name or select &quot;edit all&quot; from the bottom of the page. To edit the profile itself simply click the profile name.';
$txt['permissions_board_all'] = 'Edit All';
$txt['permission_profile'] = 'Permission Profile';
$txt['permission_profile_desc'] = 'Which <a href="%1$s">permission set</a> the board should use.';
$txt['permission_profile_inherit'] = 'Inherit from parent board';

$txt['permissions_profile'] = 'Profile';
$txt['permissions_profiles_desc'] = 'Permission profiles are assigned to individual boards to allow you to easily manage your security settings. From this area you can create, edit and delete permission profiles.';
$txt['permissions_profiles_change_for_board'] = 'Edit Permission Profile For: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = 'Default';
$txt['permissions_profile_no_polls'] = 'No Polls';
$txt['permissions_profile_reply_only'] = 'Reply Only';
$txt['permissions_profile_read_only'] = 'Read Only';

$txt['permissions_profile_rename'] = 'Rename';
$txt['permissions_profile_edit'] = 'Edit Profiles';
$txt['permissions_profile_new'] = 'New Profile';
$txt['permissions_profile_new_create'] = 'Create';
$txt['permissions_profile_name'] = 'Profile Name';
$txt['permissions_profile_used_by'] = 'Used By';
$txt['permissions_profile_used_by_one'] = '1 Board';
$txt['permissions_profile_used_by_many'] = '%1$d Boards';
$txt['permissions_profile_used_by_none'] = 'No Boards';
$txt['permissions_profile_do_edit'] = 'Edit';
$txt['permissions_profile_do_delete'] = 'Delete';
$txt['permissions_profile_copy_from'] = 'Copy Permissions From';

$txt['permissions_includes_inherited'] = 'Inherited Groups';

$txt['permissions_all'] = 'todo';
$txt['permissions_none'] = 'ningún';
$txt['permissions_set_permissions'] = 'Establecer permisos';

$txt['permissions_advanced_options'] = 'Advanced Options';
$txt['permissions_with_selection'] = 'Con seleccion';
$txt['permissions_apply_pre_defined'] = 'Aplica-lo perfil predefinido de permisos';
$txt['permissions_select_pre_defined'] = 'Seleccionar un perfil predeterminado';
$txt['permissions_copy_from_board'] = 'Copiar permisos deste Foro';
$txt['permissions_select_board'] = 'Selecciona-lo foro';
$txt['permissions_like_group'] = 'Establecer os permisos como os deste grupo';
$txt['permissions_select_membergroup'] = 'Seleccionar un grupo de usuarios';
$txt['permissions_add'] = 'Agregar Permiso';
$txt['permissions_remove'] = 'Limpar Permiso';
$txt['permissions_deny'] = 'Rexeitar Permiso';
$txt['permissions_select_permission'] = 'Seleccionar un permiso';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Podes seleccionar solamente unha accion para modifica-los permisos';
$txt['permissions_no_action'] = 'Non se selecciono ningunha accion';
$txt['permissions_deny_dangerous'] = 'Estas a punto de negar un ou mais permisos.\\Nesto pode ser perigoso e causar resultados inesperados se \\"accidentalmente\\" deixaches a alguén nos grupos ós que lles negases permisos.\\n\\n&#191;Est&#225;s seguro que desexas continuar?';

$txt['permissions_modify_group'] = 'Modificar Grupo';
$txt['permissions_general'] = 'Permisos Xerais';
$txt['permissions_board'] = 'Permisos Globais do Foro';
$txt['permissions_board_desc'] = '<strong>Note</strong>: changing these board permissions will affect all boards currently assigned the &quot;Default&quot; permissions profile. Boards not using the &quot;Default&quot; profile will not be affected by changes to this page.';
$txt['permissions_commit'] = 'Gardar cambios';
$txt['permissions_on'] = 'no foro';
$txt['permissions_local_for'] = 'Permisos Locais por grupo';
$txt['permissions_option_on'] = 'P';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'N';
$txt['permissions_option_desc'] = 'Para cada permiso podes escoller \'Permitir\' (P), \'Rexeitar\' (X), ou <span style="color: rede;">\'Negar\' (N)</span>.<br /><br />Lembranza que se negas un permiso, calquera usuario - sexa moderador ou calquera outra cousa - que se atope nese grupo sera negado tamen.<br />Por esta razon, debes usar negar con cautela, solamente cando sexa <b>necesario</b>. Rexeitar, polo contrario, nega o acceso a menos que sexa permitido.';
$txt['permissions_change_view'] = 'Change View';
$txt['permissions_view_simple'] = 'Simple';
$txt['permissions_view_classic'] = 'Classic';

$txt['permissiongroup_general'] = 'Xeral';
$txt['permissionname_view_stats'] = 'Ve-las estadisticas do foro';
$txt['permissionhelp_view_stats'] = 'As estadisticas do foro é unha paxina resumindo tódalas estadisticas do foro, tales como o conteo de usuarios, numero diario de mensaxes, e varias estadisticas dos 10 mellores. Activar este permiso agrega unha liga a parte inferior do indice do foro (\'[Mais estadisticas]\').';
$txt['permissionname_view_mlist'] = 'Ve-la lista de usuarios';
$txt['permissionhelp_view_mlist'] = 'A lista de usuarios mostra a tódolos usuarios que se rexistraron no teu foro. A lista pode ser ordenada, asi como buscar nela. A lista de usuarios de enlaza dende o indice do foro e a paxina de estadisticas, ó facer click no numero de usuarios.';
$txt['permissionname_who_view'] = 'Ver Quen esta en linea';
$txt['permissionhelp_who_view'] = 'Quen esta en linea mostra a tódolos usuarios que estan conectados, asi como o que estan facendo. Este permiso funcionase solamente se tes activado tamen en \'Config. e Opcións\'. Podes accesar a pantalla de \'Quen esta en linea\' facendo click a liga na seccion de \'Usuarios en linea\' no indice do foro.';
$txt['permissionname_search_posts'] = 'Buscar por mensaxes e temas';
$txt['permissionhelp_search_posts'] = 'O permiso para busqueda permítelle ó usuario buscar en tódolos foros ós que ten acceso. Cando o permiso de busqueda esta activado, o boton de \'Buscar\' sera agregado á barra de botóns do foro.';
$txt['permissionname_karma_edit'] = 'Cambia-lo karma doutras persoas';
$txt['permissionhelp_karma_edit'] = 'Karma é unha funcion que mostra a popularidad dun usuario. Para poder usar esta funcion, precisar la te activa en \'Config. e Opcións\'. Este permiso lle permitira a un grupo o poder votar. Este permiso non ten efecto en convidados.';

$txt['permissiongroup_pm'] = 'Mensajeria Persoal';
$txt['permissionname_pm_read'] = 'Ler mensaxes persoais';
$txt['permissionhelp_pm_read'] = 'Este permiso permítelle ós usuarios acceder á seccion de Mensaxes Persoais para le-las súas mensaxes. Se este permiso, un usuario non pode enviar mensaxes persoais.';
$txt['permissionname_pm_send'] = 'Enviar mensaxes persoais';
$txt['permissionhelp_pm_send'] = 'Envía mensaxes persoais a outros usuarios rexistrados. Precisa do permiso Requires the \'Ler mensaxes persoais\'.';

$txt['permissiongroup_calendar'] = 'Calendario';
$txt['permissionname_calendar_view'] = 'Ve-lo calendario';
$txt['permissionhelp_calendar_view'] = 'O calendario mostra para cada mes, os aniversario, eventos e dias festivos. Este permiso permite o acceso ó calendario. Cando este permiso esta activo, un boton sera agregado á barra de botóns do foro e amosásese unha lista a parte inferior do indice do foro cos aniversario, eventos e dias festivos proximos. O calendario precisa ser activado en dende \'Config. e Opcións\'.';
$txt['permissionname_calendar_post'] = 'Crear eventos no calendario';
$txt['permissionhelp_calendar_post'] = 'Un evento é un tema ligado a certa data, ou rango de datas. Pódese face-la creacion de eventos dende o calendario. Un evento pode se crear solamente se o usuario que crea o evento pode crear novos temas.';
$txt['permissionname_calendar_edit'] = 'Editar eventos no calendario';
$txt['permissionhelp_calendar_edit'] = 'Un evento é un tema ligado a certa data, ou rango de datas. Os eventos poden ser editados ó facer click no asterisco vermello (*) ó lado do evento, na vista do calendario. Para poder modificar un evento, o usuario debe te-los permisos necesarios para edita-lo primeiro mensaxe do tema que esta ligado ó evento.';
$txt['permissionname_calendar_edit_own'] = 'Eventos propios';
$txt['permissionname_calendar_edit_any'] = 'Calquera evento';

$txt['permissiongroup_maintenance'] = 'Administracion do Foro';
$txt['permissionname_admin_forum'] = 'Administra-lo foro e a base de datos';
$txt['permissionhelp_admin_forum'] = 'Este permiso permítelle a un usuario cambia-la config. do foro e los tema, manexar paquetes, e usa-las ferramentas de mantemento do foro e a base de datos. Usa este permiso con precacucion, xa que é moi poderoso.';
$txt['permissionname_manage_boards'] = 'Administrar foros e categorias';
$txt['permissionhelp_manage_boards'] = 'Este permiso permite a creacion, edicion e eliminacion de foros e categorias.';
$txt['permissionname_manage_attachments'] = 'Administrar arquivos adjuntos e avatares';
$txt['permissionhelp_manage_attachments'] = 'Este permiso permite o acceso ó centro de arquivos adjuntos, onde estan listados tódolos arquivos adjuntos e avatares do foro, e de onde poden ser eliminados.';
$txt['permissionname_manage_smileys'] = 'Administrar smileys';
$txt['permissionhelp_manage_smileys'] = 'Este permite accesar ó centro de smileys. No centro de smileys podes engadir, editar e emilinar smileys e conxuntos de smileys.';
$txt['permissionname_edit_news'] = 'Editar Noticias';
$txt['permissionhelp_edit_news'] = 'A funcion de noticias permite que en cada pantalla apareza unha linea aleatoria de noticias. Para usa-la funcion de noticias, activala na Config. do foro.';
$txt['permissionname_access_mod_center'] = 'Access the moderation center';
$txt['permissionhelp_access_mod_center'] = 'With this permission any members of this group can access the moderation center from where they will have access to functionality to ease moderation. Note that this does not in itself grant any moderation privileges.';

$txt['permissiongroup_member_admin'] = 'Administracion de usuarios';
$txt['permissionname_moderate_forum'] = 'Moderar usuarios do foro';
$txt['permissionhelp_moderate_forum'] = 'Este permiso inclúe tódalas funcións importantes de moderacion de usuarios, tales como a prohibi-lo acceso, manexo do rexistro de usuarios, rastrexo de usuarios.';
$txt['permissionname_manage_membergroups'] = 'Administrar e asignar grupos de usuarios';
$txt['permissionhelp_manage_membergroups'] = 'Este permiso permítelle un usuario edita-los grupos de usuarios e lle asignar grupos de usuarios a outros usuarios.';
$txt['permissionname_manage_permissions'] = 'Administrar permisos';
$txt['permissionhelp_manage_permissions'] = 'Este permiso permítelle a un usuario editar tódolos permisos dun grupo de usuarios, en foros individuais ou globalmente.';
$txt['permissionname_manage_bans'] = 'Administra-la lista de accesos prohibidos';
$txt['permissionhelp_manage_bans'] = 'Este permiso permítelle a un usuario agregar ou eliminar usuarios, direccións IP, nomes de servidores e direccións de email da lista de usuarios con acceso prohibido. Tamen lles permite ver e elimina-las entradas do log dos usuarios con acceso prohibido que tentaron entrar.';
$txt['permissionname_send_mail'] = 'Enviar un email do foro ós usuarios';
$txt['permissionhelp_send_mail'] = 'Envío masivo de emails a tódolos usuarios do foro, ou solamente a algúns grupos de usuarios vexa email ou mensaxe persoal (este ultimo precisa o permiso \'Enviar Mensaxe Persoal\').';
$txt['permissionname_issue_warning'] = 'Issue warnings to members';
$txt['permissionhelp_issue_warning'] = 'Issue a warning to members of the forum and change that members\' warning level. Requires the warning system to be enabled.';

$txt['permissiongroup_profile'] = 'Perfís de Usuarios';
$txt['permissionname_profile_view'] = 'Ver resumo do perfil e estadisticas';
$txt['permissionhelp_profile_view'] = 'Este permiso permítelle ós usuarios facer click nun nome de usuario para ver un resumo da configuracion do seu perfil, algunhas estadisticas, e tódolos mensaxes do usuario.';
$txt['permissionname_profile_view_own'] = 'Perfil propio';
$txt['permissionname_profile_view_any'] = 'Calquera perfil';
$txt['permissionname_profile_identity'] = 'Edita-la config. da cuenta';
$txt['permissionhelp_profile_identity'] = 'A config. da conta son as caracteristicas basicas dun perfil, tales como contrasinal, direccion de email, grupo, e idioma preferido.';
$txt['permissionname_profile_identity_own'] = 'Perfil propio';
$txt['permissionname_profile_identity_any'] = 'Calquera perfil';
$txt['permissionname_profile_extra'] = 'Edita-la config. adicional do perfil';
$txt['permissionhelp_profile_extra'] = 'A config. adicional do perfil inclúe datos do avatar, preferencias do tema, notificacións, e mensaxes persoais.';
$txt['permissionname_profile_extra_own'] = 'Perfil propio';
$txt['permissionname_profile_extra_any'] = 'Calquera perfil';
$txt['permissionname_profile_title'] = 'Editar titulo personalizado';
$txt['permissionhelp_profile_title'] = 'O titulo personalizado se mostra na paxina onde se amosan temas, e debaixo do perfil de cada usuario que ten un titulo personalizado.';
$txt['permissionname_profile_title_own'] = 'Perfil propio';
$txt['permissionname_profile_title_any'] = 'Calquera perfil';
$txt['permissionname_profile_remove'] = 'Borrar cuenta';
$txt['permissionhelp_profile_remove'] = 'Este permiso permítelle a un usuario borra-la súa propia conta, cando teiene o valor de \'Cuenta propia\'.';
$txt['permissionname_profile_remove_own'] = 'Cuenta propia';
$txt['permissionname_profile_remove_any'] = 'Calquera cuenta';
$txt['permissionname_profile_server_avatar'] = 'Select an avatar from the server';
$txt['permissionhelp_profile_server_avatar'] = 'If enabled this will allow a user to select an avatar from the avatar collections installed on the server.';
$txt['permissionname_profile_upload_avatar'] = 'Upload an avatar to the server';
$txt['permissionhelp_profile_upload_avatar'] = 'This permission will allow a user to upload their personal avatar to the server.';
$txt['permissionname_profile_remote_avatar'] = 'Seleccionar un avatar remoto';
$txt['permissionhelp_profile_remote_avatar'] = 'Debido a que os avatares poden influír negativamente no tempo requirido para crear unha paxina, é posible deshabilitar a algúns grupos de usar avatares almacenados en servidores externos. ';

$txt['permissiongroup_general_board'] = 'Xeral';
$txt['permissionname_moderate_board'] = 'Moderar foro';
$txt['permissionhelp_moderate_board'] = 'O permiso para modera-lo foro agrega algúns poucos permisos que lle permitan a un moderador ser un moderador real. Os permisos inclúen responder a temas bloqueados, cambia-la expiracion dunha sondaxe, e ve-los resultados destas';

$txt['permissiongroup_topic'] = 'Temas';
$txt['permissionname_post_new'] = 'Publicar novos temas';
$txt['permissionhelp_post_new'] = 'Este permiso permítelle ós usuarios publicar novos temas. Non permite publicar respostas a temas.';
$txt['permissionname_merge_any'] = 'Combinar calquera tema';
$txt['permissionhelp_merge_any'] = 'Combinar dous ou mais temas nun. O orde dos mensaxes dentro do tema combinado baseásense na hora na que os mensaxes foron creados. Un usuario solamente pode mesturar temas nos foros nos que s ele permita ós usuarios combinar. Para combinar multiples nun, un usuario debe activa-la moderacion rapida na config. do seu perfil.';
$txt['permissionname_split_any'] = 'Dividir calquera tema';
$txt['permissionhelp_split_any'] = 'Dividir un tema en dúas temas separados.';
$txt['permissionname_send_topic'] = 'Enviar temas a amigos';
$txt['permissionhelp_send_topic'] = 'Este permiso permítelle a un usuario enviar un tema por email a un amigo, ó introduci-lo seu direccion de email, permite asimesmo agregar un mensaxe.';
$txt['permissionname_make_sticky'] = 'Fixar temas';
$txt['permissionhelp_make_sticky'] = 'Témalos fixados son temas que sempre permanecen a parte superior dun foro. Poden ser utiles para anuncios ou outros mensaxes importantes.';
$txt['permissionname_move'] = 'Mover temas';
$txt['permissionhelp_move'] = 'Mover un tema dun foro a outro. Os usuarios poden seleccionar solamente foros destinos ós que teñan acceso.';
$txt['permissionname_move_own'] = 'Tema propio';
$txt['permissionname_move_any'] = 'Calquera tema';
$txt['permissionname_lock'] = 'Bloquear temas';
$txt['permissionhelp_lock'] = 'Este permiso permítelle a un usuario bloquear un tema. Isto pódese facer para se asegurar que ninguén responda a un tema. Solamente usuarios co permiso de \'Moderar foro\' poden todavia publicar en temas bloqueados.';
$txt['permissionname_lock_own'] = 'Tema propio';
$txt['permissionname_lock_any'] = 'Calquera tema';
$txt['permissionname_remove'] = 'Borrar temas';
$txt['permissionhelp_remove'] = 'Borrar temas completos. &iexcl;Este permiso non lle permite borrar mensaxes especificos dentro do tema!';
$txt['permissionname_remove_own'] = 'Tema propio';
$txt['permissionname_remove_any'] = 'Calquera tema';
$txt['permissionname_post_reply'] = 'Publicar respostas a temas';
$txt['permissionhelp_post_reply'] = 'Este permiso permite o responder a temas.';
$txt['permissionname_post_reply_own'] = 'Tema propio';
$txt['permissionname_post_reply_any'] = 'Calquera tema';
$txt['permissionname_modify_replies'] = 'Modificar respostas los tema propios';
$txt['permissionhelp_modify_replies'] = 'Este permiso permítelle a un usuario que inicio un tema, o modificar tódalas respostas na súa tema.';
$txt['permissionname_delete_replies'] = 'Borrar respostas nas súas temas propios';
$txt['permissionhelp_delete_replies'] = 'Este permiso permítelle a un usuario que inicio un tema eliminar tódalas respostas na súa tema.';
$txt['permissionname_announce_topic'] = 'Tema de anuncios';
$txt['permissionhelp_announce_topic'] = 'Isto permite enviar un email de anuncios achega dun tema a tódolos usuarios ou solamente a algúns grupos de usuarios.';

$txt['permissiongroup_post'] = 'Mensaxes';
$txt['permissionname_delete'] = 'Borrar mensaxes';
$txt['permissionhelp_delete'] = 'Borrar mensaxes. Isto non lle permite a un usuario borra-lo primeiro mensaxe dun tema.';
$txt['permissionname_delete_own'] = 'Mensaxes propios';
$txt['permissionname_delete_any'] = 'Calquera mensaxe';
$txt['permissionname_modify'] = 'Modificar mensaxes';
$txt['permissionhelp_modify'] = 'Editar mensaxes';
$txt['permissionname_modify_own'] = 'Mensaxes propios';
$txt['permissionname_modify_any'] = 'Calquera mensaxe';
$txt['permissionname_report_any'] = 'Reportar mensaxes ós moderadores';
$txt['permissionhelp_report_any'] = 'Este permiso agrega unha liga a cada mensaxe, permitiendole a un usuario reporta-lo mensaxe ó moderador. Ó lo reporta, tódolos moderadores dese foro recibiran un email cunha liga ó mensaxe reportado e unha descripcion do problema (proporcionado polo usuario que o reporto).';

$txt['permissiongroup_poll'] = 'Sondaxes';
$txt['permissionname_poll_view'] = 'Ver sondaxes';
$txt['permissionhelp_poll_view'] = 'Este permiso permítelle a un usuario ver unha sondaxe. Sen este permiso, o usuario vera solamente o tema.';
$txt['permissionname_poll_vote'] = 'Votar en sondaxes';
$txt['permissionhelp_poll_vote'] = 'Este permiso permítelle a un usuario emitir un voto. Isto non aplica a convidados.';
$txt['permissionname_poll_post'] = 'Publicar sondaxes';
$txt['permissionhelp_poll_post'] = 'Este permiso permítelle a un usuario publicar unha nova sondaxe.';
$txt['permissionname_poll_add'] = 'Agregar sondaxes a temas';
$txt['permissionhelp_poll_add'] = 'Agregar sondaxes a temas permítelle a un usuario agregar unha sondaxe despues de crear o tema. Este permiso precisa permisos suficientes para edita-lo primeiro mensaxe dun tema.';
$txt['permissionname_poll_add_own'] = 'Temas propios';
$txt['permissionname_poll_add_any'] = 'Calquera tema';
$txt['permissionname_poll_edit'] = 'Editar sondaxes';
$txt['permissionhelp_poll_edit'] = 'Este permiso permite edita-las opcións dunha sondaxe asi como reiniciar a sondaxe. Para edita-lo maximo numero de votos e a data de expiracion, o usuario precisa te-lo permiso de \'Moderar foro\'.';
$txt['permissionname_poll_edit_own'] = 'Sondaxe propia';
$txt['permissionname_poll_edit_any'] = 'Calquera sondaxe';
$txt['permissionname_poll_lock'] = 'Bloquear sondaxes';
$txt['permissionhelp_poll_lock'] = 'O bloqueo de sondaxes impide que a sondaxe acepte mais votos.';
$txt['permissionname_poll_lock_own'] = 'Sondaxe propia';
$txt['permissionname_poll_lock_any'] = 'Calquera sondaxe';
$txt['permissionname_poll_remove'] = 'Eliminar sondaxes';
$txt['permissionhelp_poll_remove'] = 'Este permiso permite a eliminacion de sondaxes.';
$txt['permissionname_poll_remove_own'] = 'Sondaxe propia';
$txt['permissionname_poll_remove_any'] = 'Calquera sondaxe';

$txt['permissiongroup_approval'] = 'Post Moderation';
$txt['permissionname_approve_posts'] = 'Approve items awaiting moderation';
$txt['permissionhelp_approve_posts'] = 'This permission allows a user to approve all unapproved items on a board.';
$txt['permissionname_post_unapproved_replies'] = 'Post replies to topics, but hide until approved';
$txt['permissionhelp_post_unapproved_replies'] = 'This permission allows a user to post replies to a topic. The replies will not be shown until approved by a moderator.';
$txt['permissionname_post_unapproved_replies_own'] = 'Own topic';
$txt['permissionname_post_unapproved_replies_any'] = 'Any topic';
$txt['permissionname_post_unapproved_topics'] = 'Post new topics, but hide until approved';
$txt['permissionhelp_post_unapproved_topics'] = 'This permission allows a user to post a new topic which will require approval before being shown.';
$txt['permissionname_post_unapproved_attachments'] = 'Post attachments, but hide until approved';
$txt['permissionhelp_post_unapproved_attachments'] = 'This permission allows a user to attach files to their posts. The attached files will then require approval before being shown to other users.';

$txt['permissiongroup_notification'] = 'Notificacións';
$txt['permissionname_mark_any_notify'] = 'Solicitar notificacion en respostas';
$txt['permissionhelp_mark_any_notify'] = 'Este permiso permítelle ós usuarios recibir notificacións cada que alguén responda nun tema ó que esten suscritos.';
$txt['permissionname_mark_notify'] = 'Solicitar notificacion en temas novos';
$txt['permissionhelp_mark_notify'] = 'Este permise permítelle a un usuario o recibir un email cada que se cre un novo tema no foro no que esten suscritos.';

$txt['permissiongroup_attachment'] = 'Arquivos adxuntos';
$txt['permissionname_view_attachments'] = 'Ver arquivos adxuntos';
$txt['permissionhelp_view_attachments'] = 'Os arquivos adxuntos son arquivos que estan adxuntos a mensaxes publicados. Esta opcion pode ser activada e configurada en \'Config. e Opcións\'. Debido a que os arquivos adjuntos non se accesan directamente, podes evitar que estes sexan descargados por usuarios que non teñan este permiso.';
$txt['permissionname_post_attachment'] = 'Publicar aechivos adxuntos';
$txt['permissionhelp_post_attachment'] = 'Os arquivos adjuntos son arquivos que estan adxuntos a mensaxes publicados. Un mensaxe pode ter varios arquivos adjuntos.';

$txt['permissiongroup_simple_view_basic_info'] = 'Use basic forum functionality';
$txt['permissiongroup_simple_use_pm_system'] = 'Contact members using the personal messaging system';
$txt['permissiongroup_simple_post_calendar'] = 'Post events onto the calendar';
$txt['permissiongroup_simple_edit_profile'] = 'Personalize their profile';
$txt['permissiongroup_simple_delete_account'] = 'Delete their account';
$txt['permissiongroup_simple_use_avatar'] = 'Select or upload an avatar';
$txt['permissiongroup_simple_moderate_general'] = 'Moderate the entire forum';
$txt['permissiongroup_simple_administrate'] = 'Carry out administrative duties';

$txt['permissionname_simple_calendar_edit_own'] = 'Edit their own calendar events';
$txt['permissionname_simple_calendar_edit_any'] = 'Edit other people\'s calendar events';
$txt['permissionname_simple_profile_view_own'] = 'View their own profile';
$txt['permissionname_simple_profile_view_any'] = 'View other people\'s profiles';
$txt['permissionname_simple_profile_identity_own'] = 'Edit their account settings';
$txt['permissionname_simple_profile_identity_any'] = 'Edit other people\'s account settings';
$txt['permissionname_simple_profile_extra_own'] = 'Edit their additional profile options';
$txt['permissionname_simple_profile_extra_any'] = 'Edit other people\'s profile options';
$txt['permissionname_simple_profile_title_own'] = 'Choose a custom title for themselves';
$txt['permissionname_simple_profile_title_any'] = 'Edit other people\'s custom titles';
$txt['permissionname_simple_profile_remove_own'] = 'Delete their own account';
$txt['permissionname_simple_profile_remove_any'] = 'Delete other user\'s accounts';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Post topics and replies to the board <span style="text-decoration: underline">only</span> after they have been approved';
$txt['permissiongroup_simple_make_posts'] = 'Post topics and replies to the board';
$txt['permissiongroup_simple_post_polls'] = 'Make new polls';
$txt['permissiongroup_simple_participate'] = 'View additional board content';
$txt['permissiongroup_simple_modify'] = 'Modify their posts';
$txt['permissiongroup_simple_notification'] = 'Request notifications';
$txt['permissiongroup_simple_attach'] = 'Post attachments';
$txt['permissiongroup_simple_moderate'] = 'Moderate the board';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Post replies to their own topic - but require approval';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Post replies to any topic - but require approval';
$txt['permissionname_simple_post_reply_own'] = 'Post replies to a topic they started';
$txt['permissionname_simple_post_reply_any'] = 'Post replies to any topic';
$txt['permissionname_simple_move_own'] = 'Move their own topics';
$txt['permissionname_simple_move_any'] = 'Move anyone\'s topic';
$txt['permissionname_simple_lock_own'] = 'Lock their own topic';
$txt['permissionname_simple_lock_any'] = 'Lock anyone\'s topic';
$txt['permissionname_simple_remove_own'] = 'Remove their own topic';
$txt['permissionname_simple_remove_any'] = 'Remove anyone\'s topic';
$txt['permissionname_simple_delete_own'] = 'Delete a post that they made';
$txt['permissionname_simple_delete_any'] = 'Delete a post made by anyone';
$txt['permissionname_simple_modify_own'] = 'Modify their own post';
$txt['permissionname_simple_modify_any'] = 'Modify someone else\'s post';
$txt['permissionname_simple_poll_add_own'] = 'Add a poll to a topic they created';
$txt['permissionname_simple_poll_add_any'] = 'Add a poll to any topic';
$txt['permissionname_simple_poll_edit_own'] = 'Edit a poll they created';
$txt['permissionname_simple_poll_edit_any'] = 'Edit anyone\'s poll';
$txt['permissionname_simple_poll_lock_own'] = 'Lock their own poll';
$txt['permissionname_simple_poll_lock_any'] = 'Lock anyone\'s poll';
$txt['permissionname_simple_poll_remove_own'] = 'Remove a poll they created';
$txt['permissionname_simple_poll_remove_any'] = 'Remove anyone\'s poll';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Permission Settings';
$txt['groups_manage_permissions'] = 'Membergroups allowed to manage permissions';
$txt['permission_settings_submit'] = 'Save';
$txt['permission_settings_enable_deny'] = 'Enable the option to deny permissions';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Turning off this option will update \\\'Deny\\\'-permissions to \\\'Disallow\\\'.';
$txt['permission_by_board_desc'] = 'Here you can set which permissions profile a board uses. You can create new permission profiles from the &quot;Edit Profiles&quot; menu.';
$txt['permission_settings_desc'] = 'Here you can set who has permission to change permissions, as well as how sophisticated the permission system should be.';
$txt['permission_settings_enable_postgroups'] = 'Enable permissions for post count based groups';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Disabling this setting will remove permissions currently set to post count based groups.';

$txt['permissions_post_moderation_desc'] = 'From this page you can easily change which groups have their posts moderated for a particular permissions profile.';
$txt['permissions_post_moderation_deny_note'] = 'Note that while you have advanced permissions enabled you cannot apply the &quot;deny&quot; permission from this page. Please edit the permissions directly if you wish to apply a deny permission.';
$txt['permissions_post_moderation_select'] = 'Select Profile';
$txt['permissions_post_moderation_new_topics'] = 'New Topics';
$txt['permissions_post_moderation_replies_own'] = 'Own Replies';
$txt['permissions_post_moderation_replies_any'] = 'Any Replies';
$txt['permissions_post_moderation_attachments'] = 'Attachments';
$txt['permissions_post_moderation_legend'] = 'Legend';
$txt['permissions_post_moderation_allow'] = 'Can create';
$txt['permissions_post_moderation_moderate'] = 'Can create but requires approval';
$txt['permissions_post_moderation_disallow'] = 'Cannot create';
$txt['permissions_post_moderation_group'] = 'Group';

$txt['auto_approve_topics'] = 'Post new topics, without requiring approval';
$txt['auto_approve_replies'] = 'Post replies to topics, without requiring approval';
$txt['auto_approve_attachments'] = 'Post attachments, without requiring approval';

?>