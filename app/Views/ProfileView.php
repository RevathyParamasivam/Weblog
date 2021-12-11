<!DOCTYPE html>
<html>

  <head>
    <title>Live with Nature</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="boot/css/style.css">
    <link rel="stylesheet" href="boot/css/stylesheet.css">
  </head>

  <body>
    
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <header style="background-color: #eceff1">
<div>
    <div class="d-flex justify-content-end" style="text-align:right; margin-top:20px">
              <a href="ProfileController/logout" class="btn btn-right btn-primary" id="logout-button">Logout</a>
            </div>

    <div style="text-align:center; margin-top: -120px">
		<img src="./images/logo_1.png" alt="LOGO" height="250">
    </div>
      
     </div>       
     <div class="heroe" style="margin-top: -60px; margin-bottom: -25px ">

          <h1 id="heading">Welcome <?php $session = session(); echo $session->get('user_name'); ?>  </h1>
          
        </div>
      <hr/>
      </header>
      
      <br/>

    <div id="main-container">  

      <div class="wrapper">
        
          <?php if(session()->get("failure")) { ?>
                <div class="alert alert-danger"> <?php foreach(session('failure') as $value) { print($value);?><br><?php }; ?> </div>
                <?php } ?>
          

          <form method="post"  action=""> 
            <input type="text" id="source"  name="source" placeholder="Source">
            <br/>
            <br/>
            <textarea class="textarea" id="benefits" name="benefits" cols="76%" rows="10">Product benefits here</textarea><br><br>
            
            <input id="submit-btn" type="submit" value="Create">
            <br/>
            <br/>
            <br/>
            <br/>
            <img  id="fruit-img" src="./images/fruits.jpg" alt="fruit image">
            </form>    
      
            <br/>
          <br/>
                  
           
       <div class="jumbotron bg-white">
          <?php if(isset($result)) { ?>
        <table class="table"  id="table" style="width:100%;margin-left:-35px ">
          <tr>
              <th id="th1" width="300">Source</td> 
              <th id="th2">Benefits</td>
              <th id="th2" width="100">Delete</td>
              <th id="th2"width="100">Update</td>
          </tr>
         <?php 
            foreach($result as $value)
            { ?>
            <tr>
              <td id="column1" class="source" style="vertical-align:middle"> <?= $value['source'] ?> </td> 
              <td id="column2"> <?= $value['benefits'] ?> </td>
              <td id="column4" style="vertical-align:middle"> <a href="OperationController/delete/<?=$value['id']?>">Delete</a></td>
              <?php   
                    $session=session();
                    $session->setFlashdata('lid1', $session->get('lid1'));
                    $session->setFlashdata("user_name",$session->get('user_name'));
                    ?>
              <td id="column5" style="vertical-align:middle"> <a href="OperationController/update/<?=$value['id']?>"">Update</a></td>
          <?php 
          }
          } ?>  
        </table>
      </div>
    </div>
</div>
  <footer style="margin-top: -60px;">
  <div class="copyrights">
		<p>&copy; <?= date('Y') ?> Live with Nature. All rights reserved</p>
	</div>

</footer>
  </body>

</html>