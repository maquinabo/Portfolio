<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.0.309
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Jogos Formulário envio',
	'heading' => 'Envio de novo formulário',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcado',
		'checkbox_unchecked' => 'Desmarcado',
		'submitted_from' => 'Formulário enviado do site: %s',
		'submitted_by' => 'Endereço IP do visitante: %s',
		'too_many_submissions' => 'Muitos envios recentes deste IP',
		'failed_to_send_email' => 'Falha no envio do email',
		'invalid_reCAPTCHA_private_key' => 'Chave privada do reCAPTCHA inválida.',
		'invalid_field_type' => 'Tipo de campo desconhecido \"%s\".',
		'invalid_form_config' => 'O campo \"%s\" possui uma configuração inválida.',
		'unknown_method' => 'Método de solicitação de servidor desconhecido'
	),
	'email' => array(
		'from' => 'recriaJogos@outlook.com',
		'to' => 'recriaJogos@outlook.com'
	),
	'fields' => array(
		'custom_U10298' => array(
			'order' => 1,
			'type' => 'string',
			'label' => '  Nome  da personagem',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"  Nome  da personagem\" é obrigatório.'
			)
		),
		'custom_U10302' => array(
			'order' => 2,
			'type' => 'string',
			'label' => ' Curiosidades',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \" Curiosidades\" é obrigatório.'
			)
		),
		'custom_U11910' => array(
			'order' => 3,
			'type' => 'string',
			'label' => ' Motivos dos Personagens',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \" Motivos dos Personagens\" é obrigatório.'
			)
		)
	)
);

process_form($form);
?>
