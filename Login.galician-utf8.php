<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Registration Agreement';
$txt['agreement_agree'] = 'I accept the terms of the agreement.';
$txt['agreement_agree_coppa_above'] = 'I accept the terms of the agreement and I am at least %1$d years old.';
$txt['agreement_agree_coppa_below'] = 'I accept the terms of the agreement and I am younger than %1$d years old.';

// Registration form.
$txt['registration_form'] = 'Registration Form';
$txt['need_username'] = 'You need to fill in a username.';
$txt['no_password'] = 'You didn\'t enter your password.';
$txt['incorrect_password'] = 'Password incorrect';
$txt['choose_username'] = 'Choose username';
$txt['maintain_mode'] = 'Maintenance Mode';
$txt['registration_successful'] = 'Registration Successful';
$txt['now_a_member'] = 'Success! You are now a member of the forum.';
// Use numeric entities in the below string.
$txt['your_password'] = 'and your password is';
$txt['valid_email_needed'] = 'Please enter a valid email address, %1$s.';
$txt['required_info'] = 'Required Information';
$txt['identification_by_smf'] = 'Used to identify you on the forum.';
$txt['additional_information'] = 'Additional Information';
$txt['warning'] = 'Warning!';
$txt['only_members_can_access'] = 'Only registered members are allowed to access this section.';
$txt['login_below'] = 'Please login below or';
$txt['register_an_account'] = 'register an account';
$txt['login_with_forum'] = 'with %1$s.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'You may change it after you login by going to the profile page, or by visiting this page after you login:';
$txt['your_username_is'] = 'Your username is: ';

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

$txt['coppa_no_concent'] = 'The administrator has still not received parent/guardian consent for your account.';
$txt['coppa_need_more_details'] = 'Need more details?';

$txt['awaiting_delete_account'] = '&iexcl;A túa conta foi marcada para se borrar!<br />Se desexas restaura-la túa conta, For favor selecciona a casiña &quot;Reactiva-la miña conta&quot;, e ingresa novamente.';
$txt['undelete_account'] = 'Reactiva-la miña cuenta';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalles da nova contrase&#241;a';
$txt['change_password_login'] = 'Your login details at';
$txt['change_password_new'] = 'have been changed and your password reset. Below are your new login details.';

$txt['in_maintain_mode'] = 'This board is in Maintenance Mode.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Favor de ler/acepta-los t&#233;rminos para poder envia-la forma.';
$txt['register_passwords_differ_js'] = 'Non coinciden as contrase&#241;as.';

$txt['approval_after_registration'] = 'Grazas por te rexistrar. O administrador debe aproba-lo teu rexistro antes de que poidas empezar a usa-la túa conta, recibiras un email á brevedad posible notificandote da decision do administrador.';

$txt['admin_settings_desc'] = 'Aqui podes cambiar varios parametros relacionados co rexistro de novos usuarios.';

$txt['setting_enableOpenID'] = 'Allow users to register using OpenID';

$txt['setting_registration_method'] = 'Method of registration employed for new members';
$txt['setting_registration_disabled'] = 'Registration Disabled';
$txt['setting_registration_standard'] = 'Immediate Registration';
$txt['setting_registration_activate'] = 'Email Activation';
$txt['setting_registration_approval'] = 'Admin Approval';
$txt['setting_notify_new_registration'] = 'Notify administrators when a new member joins';
$txt['setting_send_welcomeEmail'] = 'Send welcome email to new members';

$txt['setting_coppaAge'] = 'Age below which to apply registration restrictions';
$txt['setting_coppaAge_desc'] = '(Set to 0 to disable)';
$txt['setting_coppaType'] = 'Action to take when a user below minimum age registers';
$txt['setting_coppaType_reject'] = 'Reject their registration';
$txt['setting_coppaType_approval'] = 'Require parent/guardian approval';
$txt['setting_coppaPost'] = 'Postal address to which approval forms should be sent';
$txt['setting_coppaPost_desc'] = 'Only applies if age restriction is in place';
$txt['setting_coppaFax'] = 'Fax number to which approval forms should be faxed';
$txt['setting_coppaPhone'] = 'Contact number for parents to contact with age restriction queries';

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
$txt['admin_register_done'] = 'Member %1$s has been registered successfully!';

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

$txt['visual_verification_sound_again'] = 'Play again';
$txt['visual_verification_sound_close'] = 'Close window';
$txt['visual_verification_sound_direct'] = 'Having problems hearing this?  Try a direct link to it.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Username is available';
$txt['registration_username_unavailable'] = 'Username is not available';
$txt['registration_username_check'] = 'Check if username is available';
$txt['registration_password_short'] = 'Password is too short';
$txt['registration_password_reserved'] = 'Password contains your username/email';
$txt['registration_password_numbercase'] = 'Password must contain both upper and lower case, and numbers';
$txt['registration_password_no_match'] = 'Passwords do not match';
$txt['registration_password_valid'] = 'Password is valid';

$txt['registration_errors_occurred'] = 'The following errors were detected in your registration. Please correct them to continue:';

$txt['authenticate_label'] = 'Authentication Method';
$txt['authenticate_password'] = 'Password';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'OpenID Authentication URL';

?>