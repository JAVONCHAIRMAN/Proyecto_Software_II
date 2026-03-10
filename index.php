<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="private_links.css">
    <link rel="icon" type="image/png" href="img/logo-link.png">
    <title>private_links</title>
    <!-- Se hace el llamado a las librerias AJAX -->
    <script src="ajax_functions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<!-- Se hace el llamado al archivo JavaScript -->
    
    <script src="ajax_functions.js"></script>
  
    <form id="form1" method="POST">
       <input type="text" name="nombre" id="nombre" placeholder="Nombre:"><br>
       <input type="number" name="telefono" id="telefono" placeholder="Telefono:"><br>
       <input type="number" name="edad" id="edad" placeholder="Edad:"><br>
       <button type="button" name="add_person" onclick="addLink()">Insertar persona</button>
    </form><br><br>

    <form id="form2" method="POST">
       <input type="number" name="id" id="id_persona" placeholder="Id:"><br>
       <input type="text" name="nombre" id="nombre" placeholder="Nombre:"><br>
       <input type="number" name="telefono" id="telefono" placeholder="Telefono:"><br>
       <input type="number" name="edad" id="edad" placeholder="Edad:"><br>
       <button type="button" name="edit_link" onclick="editLink()">Editar persona</button>
    </form><br><br>

    <form class="form3" id="form3" method="POST">
    <input type="number" name="id" id="id_persona" placeholder="Id:"><br>
    <button type="button" name="delete_person" onclick="deleteLink()">Eliminar persona</button>
    </form><br><br>

    <div>
    <ul class="lista_de_datos" id="lista_de_datos"></ul>
    </div>

</body>

</html>
