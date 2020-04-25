<? php
    / **
     * GUIÓN DE DESPLIEGUE GIT
     * *
     * Se utiliza para implementar sitios web automáticamente a través de GitHub
     * *
     * /

    // conjunto de comandos
    $ comandos = matriz (
        'echo $ PWD',
        'quién soy',
        'git pull',
        'git status',
        'sincronización de submódulo git',
        'actualización de submódulo git',
        'git submodule status',
    );

    // comandos exec
    $ salida = '';
    foreach ($ command AS $ command) {
        $ tmp = shell_exec ($ comando);
        
        $ output. = "<span style = \" color: # 6BE234; \ "> \ $ </span> <span style = \" color: # 729FCF; \ "> {$ command} \ n </span> < br /> ";
        $ output. = htmlentities (trim ($ tmp)). "\ n <br /> <br />";
    }
?>

<! DOCTYPE HTML>
<html lang = "en-US">
<head>
    <meta charset = "UTF-8">
    <title> GIT DE DESPLIEGUE GIT </title>
</head>
<body style = "background-color: # 000000; color: #FFFFFF; font-weight: bold; relleno: 0 10px;">
<div style = "width: 700px">
    <div style = "float: left; width: 350px;">
    <p style = "color: white;"> Script de implementación de Git </p>
    <? php echo $ salida; ?>
    </div>
</div>
</body>
</html>
