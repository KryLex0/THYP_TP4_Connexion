<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style/upload.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="script/script.js"></script>
</head>


<meta charset="UTF-8">

<h1 style="text-align: center;">Page de connexion</h1>
<section class="sectionConnexion">
    <form action="index.php?numPage=1" method="POST">
        <div class="divConnexion">
            <table>
                <tbody>
                    <tr>
                        <td><label>Nom d'utilisateur: </label></td><td><input type="text" id="login" name="login" placeholder="Nom d'utilisateur" required></td>
                    </tr>
                    <tr>
                        <td><label>Mot de passe: </label></td><td><input type="password" id="password" name="password" placeholder="Mot de passe" required></td>
                    </tr>                
                </tbody>
            </table>
        </div>
        <input type="submit" class="btn btn-info" value="Se connecter">
    </form>
</section>

<div id="div_result">

</div>