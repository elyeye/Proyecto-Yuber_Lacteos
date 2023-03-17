<?php
    //Enviar un email
    $msj ="Mi primer email en PHP";

    //Envoltura (wrap) si la linea tiene más de 70 caracteres
    $msj = wordwrap($msj, 70);

    //Enviar email
    mail("guamanjavi2003@gmail.com","Asunto: Correo PHP",$msj);


?>