<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Acordo de rexistro';
$txt['agreement_agree'] = 'Acepto os termos do acordo';
$txt['agreement_agree_coppa_above'] = 'Acepto os termos do acordo e teño polo menos %1$d anos.';
$txt['agreement_agree_coppa_below'] = 'Acepto os termos do acordo e teño menos de %1$d anos.';

// Registration form.
$txt['registration_form'] = 'Formulario de rexistro';
$txt['need_username'] = 'Tes que cubrir o nome de usuario.';
$txt['no_password'] = 'Non introduciches un contrasinal.';
$txt['incorrect_password'] = 'Contrasinal incorrecto';
$txt['choose_username'] = 'Escolle un nome de usuario';
$txt['maintain_mode'] = 'Modo de mantemento';
$txt['registration_successful'] = 'Rexistro completado con éxito';
$txt['now_a_member'] = 'Éxito! Agora es un membro do foro.';
// Use numeric entities in the below string.
$txt['your_password'] = 'e o teu contrasinal é';
$txt['valid_email_needed'] = 'Por favor, introduce un email válido, %1$s.';
$txt['required_info'] = 'Información necesaria';
$txt['identification_by_smf'] = 'Usada para identificalo no foro.';
$txt['additional_information'] = 'Información adicional';
$txt['warning'] = 'Aviso!';
$txt['only_members_can_access'] = 'So os membros rexistrados teñen permitido o acceso a esta sección.';
$txt['login_below'] = 'Por favor, inicia sesión máis abaixo ou';
$txt['register_an_account'] = 'rexistra unha conta';
$txt['login_with_forum'] = 'con %1$s.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Poderás cambialo/a despois de iniciar sesión accedendo a páxina do perfil, ou visitando esta:';
$txt['your_username_is'] = 'O teu nome de usuario é: ';

$txt['login_hash_error'] = 'O esquema para a seguridade das contrasinais foi actualizado recentemente.  Por favor, introduce a túa contrasinal novamente.';

$txt['ban_register_prohibited'] = 'Síntoo, non estas autorizado para te rexistrar neste foro';
$txt['under_age_registration_prohibited'] = 'Sentímolo, pero non se permite o rexistro neste foro de persoas menores de %d anos';

$txt['activate_account'] = 'Activacion da cuenta';
$txt['activate_success'] = 'A túa conta foi activada satisfactoriamente. Agora podes proceder a ingresar ó foro.';
$txt['activate_not_completed1'] = 'A túa conta de email precisa ser validada antes de que poidas ingresar.';
$txt['activate_not_completed2'] = '&iquest;Precisas outro email de activacion?';
$txt['activate_after_registration'] = 'Grazas por te rexistrar. Recibiras en breve un email cun enlace para activa-la túa conta.  If you don\'t receive an email after some estafe, check your spam folder.';
$txt['invalid_userid'] = 'O usuario non existe';
$txt['invalid_activation_code'] = 'Codigo de activacion invalido';
$txt['invalid_activation_username'] = 'Nome de usuario ou email';
$txt['invalid_activation_new'] = 'Se te rexistraches cunha direccion de email incorrecta, escribe aqui unha nova xunto coa túa contrasinal.';
$txt['invalid_activation_new_email'] = 'Nova direccion de email';
$txt['invalid_activation_password'] = 'Contrasinal anterior';
$txt['invalid_activation_resend'] = 'Reenviar codigo de activacion';
$txt['invalid_activation_known'] = 'Se xa coñéce-lo teu c&oacutedigo de activacion, escribelo aqui.';
$txt['invalid_activation_retry'] = 'Codigo de activacion';
$txt['invalid_activation_submit'] = 'Activar';

$txt['coppa_no_concent'] = 'O administador aínda non recibiu o consentemento do teu pai/nai/tutor/a para a túa conta.';
$txt['coppa_need_more_details'] = 'Necesita máis detalles?';

$txt['awaiting_delete_account'] = '&iexcl;A túa conta foi marcada para se borrar!<br />Se desexas restaura-la túa conta, For favor selecciona a casiña &quot;Reactiva-la miña conta&quot;, e ingresa novamente.';
$txt['undelete_account'] = 'Reactiva-la miña cuenta';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalles da nova contrase&#241;a';
$txt['change_password_login'] = 'Os detalles para o inicio da sesión en';
$txt['change_password_new'] = 'cambiaron e o teu contrasinal reiniciouse. Debaixo están os novos detalles.';

$txt['in_maintain_mode'] = 'Este taboleiro está en modo de mantemento.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Favor de ler/acepta-los t&#233;rminos para poder envia-la forma.';
$txt['register_passwords_differ_js'] = 'Non coinciden as contrase&#241;as.';

$txt['approval_after_registration'] = 'Grazas por te rexistrar. O administrador debe aproba-lo teu rexistro antes de que poidas empezar a usa-la túa conta, recibiras un email á brevedad posible notificandote da decision do administrador.';

$txt['admin_settings_desc'] = 'Aqui podes cambiar varios parametros relacionados co rexistro de novos usuarios.';

$txt['setting_enableOpenID'] = 'Permitir os usuarios iniciar sesión usando OpenID';

$txt['setting_registration_method'] = 'Método de rexistro empregado por novos membros';
$txt['setting_registration_disabled'] = 'Rexistro desactivado';
$txt['setting_registration_standard'] = 'Rexistro inmediato';
$txt['setting_registration_activate'] = 'Activación por email';
$txt['setting_registration_approval'] = 'Aprobación do administrador';
$txt['setting_notify_new_registration'] = 'Notificar os administradores cando se une un novo membro';
$txt['setting_send_welcomeEmail'] = 'Enviar mensaxe de benvida os novos membros';

$txt['setting_coppaAge'] = 'Idade baixo a cal se aplican restriccións no rexistro';
$txt['setting_coppaAge_desc'] = '(Introduza 0 para desactivar)';
$txt['setting_coppaType'] = 'Acción a tomar cando se rexistre un usuario por debaixo da idade mínima';
$txt['setting_coppaType_reject'] = 'Rexeitar o rexistro';
$txt['setting_coppaType_approval'] = 'Requerir a aprovación do pai/nai/tutor/a';
$txt['setting_coppaPost'] = 'Enderezo postal onde o formulario de aprovación debe ser enviado';
$txt['setting_coppaPost_desc'] = 'So se aplica se se establen restriccións de idade';
$txt['setting_coppaFax'] = 'Número de fax onde os formularios de aprobación deben ser enviados';
$txt['setting_coppaPhone'] = 'Número de contacto para as dúbidas sobre a restricción de idade';

$txt['admin_register'] = 'Rexistro dun novo usuario';
$txt['admin_register_desc'] = 'Dende aqui podes rexistrar no foro novos usuarios e, de asi lo desexa, lles envia-los seus detalles por email.';
$txt['admin_register_username'] = 'Novo Nome de usuario';
$txt['admin_register_email'] = 'Nova Direccion de email';
$txt['admin_register_password'] = 'Contrasinal';
$txt['admin_register_username_desc'] = 'Nome de usuario para o novo usuario';
$txt['admin_register_email_desc'] = 'Direccion email do usuario<br />(requirida se seleccionáche-la opcion de lles enviar por email os seus detalles)';
$txt['admin_register_password_desc'] = 'Nova contrasinal para o usuario';
$txt['admin_register_email_detail'] = 'Enviar por email a nova contrasinal ó usuario';
$txt['admin_register_email_detail_desc'] = 'É necesaria a direccion email, aínda se non esta seleccionado';
$txt['admin_register_email_activate'] = 'Lle pedir ó usuario que active a cuenta';
$txt['admin_register_group'] = 'Grupo primario';
$txt['admin_register_group_desc'] = 'Grupo de usuario primario ó que o novo usuario pertenecera';
$txt['admin_register_group_none'] = '(sen grupo primario)';
$txt['admin_register_done'] = 'O membro %1$s foi rexistrado con éxito!';

$txt['coppa_title'] = 'Foro con restriccion de idade';
$txt['coppa_after_registration'] = 'Grazas por te rexistrar con ' . $context['forum_name'] . '.<br /><br />Debido a que estas por debaixo da idade de {MINIMUM_AGE}, hai un requirimento legal
	para obte-lo permiso dos teus pais/titor antes de que poidas empezar a usa-la túa conta. Para proceder coa activacion da conta por favor imprima a forma que a continuacion se mostra:';
$txt['coppa_form_link_popup'] = 'Carga-la forma nunha xanela nova';
$txt['coppa_form_link_download'] = 'Descargar forma';
$txt['coppa_send_to_one_option'] = 'Entón solicitale ós teus pais/titor que envíen a forma propiamente enchida por:';
$txt['coppa_send_to_two_options'] = 'Entón solicitale ós teus pais/titor que envíen a forma propiamente enchida por calquera destas dúas opcións:';
$txt['coppa_send_by_post'] = 'Correo, á seguinte direccion:';
$txt['coppa_send_by_fax'] = 'Fax, ó seguinte numero:';
$txt['coppa_send_by_phone'] = 'Alternativamente, fai que lle falen ó administrador ó numero {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Forma de permiso para se rexistrar en ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Direccion';
$txt['coppa_form_date'] = 'Data';
$txt['coppa_form_body'] = 'Eu {PARENT_NAME},<br /><br />dou o permiso para que {CHILD_NAME} (child name) convértase nun usuario rexistrado do foro: ' . $context['forum_name'] . ', co nome de usuario: {USER_NAME}.<br /><br />Entendo que certa informacion persoal proporcionada por {USER_NAME} pode que sexa amosada a outros usuarios do foro.<br /><br />Asinado por:<br />{PARENT_NAME} (Pai/Titor).';

$txt['visual_verification_sound_again'] = 'Reproducir de novo';
$txt['visual_verification_sound_close'] = 'Pechar xanela';
$txt['visual_verification_sound_direct'] = 'Problemas escoitando isto? Probe unha ligazón directa.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Nome de usuario dispoñible';
$txt['registration_username_unavailable'] = 'Nome de usuario non dispoñible';
$txt['registration_username_check'] = 'Comprobar se o nome de usuario está dispoñible';
$txt['registration_password_short'] = 'O contrasinal é moi curto';
$txt['registration_password_reserved'] = 'O contrasinal contén o teu nome de usuario/email';
$txt['registration_password_numbercase'] = 'O contrasianl debe incluir letras maiúsculas, minúsculas e números';
$txt['registration_password_no_match'] = 'Os contrasinais non coinciden';
$txt['registration_password_valid'] = 'Contrasinal válido';

$txt['registration_errors_occurred'] = 'Os erros seguintes foron detectados no teu rexistro. Por favor, corrixeos para continuar:';

$txt['authenticate_label'] = 'Métodos de autenticación';
$txt['authenticate_password'] = 'Contrasinal';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'URL para autenticación OpenID';

?>
