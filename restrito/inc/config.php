<?php
/**********************************************************************************
 Sistema e-SIC Livre: sistema de acesso a informa��o baseado na lei de acesso.
 
 Copyright (C) 2014 Prefeitura Municipal do Natal
 
 Este programa � software livre; voc� pode redistribu�-lo e/ou
 modific�-lo sob os termos da Licen�a GPL2.
***********************************************************************************/

error_reporting(E_ERROR);

define("SISTEMA_NOME", "e-SIC"); //nome do sistema para exibi��o em lugares diversos
define("SISTEMA_CODIGO", "ldarestrito"); //codigo para defini��o da lista de sess�o do sistema


define("MAIL_HOST", "mail.camponovo.ro.gov.br");
define("DBHOST", "dbesiclivre.mysql.uhserver.com");
define("DBUSER", "camponovo_6");
define("DBPASS", "@!1Z5fM+PWEH!@");
define("DBNAME", "dbesiclivre");

define("SITELNK", "http://localhost:888/e-sic2/");	//endere�o principal do site

define("URL_BASE_SISTEMA", "http://localhost:888/e-sic2/");	//endere�o principal do site

//caminho para arquivo da classes do projeto de lei de acesso
define("DIR_CLASSES_LEIACESSO","../../class");

?>
