<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <title>Document</title>
</head>
<body>

    <form action="" method="post" style="align: center; margin:5% 5% 5% 15%">
        @csrf
        <table>
            
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nom de la base de donnée</span>
                        <input type="text" class="form-control" placeholder="DB Name" aria-label="DB Name" aria-describedby="basic-addon1">
                    </div> 
              
                nom d'utilisateur
                   <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
            
                        Mot de passe
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
                            </div>   

        
        
        
              
                <div class="input-group">
                  <span class="input-group-text">Description du fichier</span>
                  <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
          
                
            fichier XML
                <div class="input-group mb-3">
                  <input type="file" class="form-control" id="inputGroupFile02">
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
        


            <tr>
                <table>
                    <tr>
                        <td>    <a href="../" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Annuler</a>  </td>
                        <td>    <input class="btn btn-primary" type="submit" value="Enregistrer dans la base de données">   </td>
                    </tr>
                </table>

            </tr>
    
        </table>

          
        
          

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>