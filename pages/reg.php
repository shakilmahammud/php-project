 <?php
 require_once('../includes/header.php')
 ?>
 
 <div class="container ">
    <div class="row mt-5">
        <div class="col-md-6 offset-3">
                <form action="reg_post.php" method="POST">
                     <div class="card text-white bg-success mb-3"">
                        <div class="card-header">
                        <h2>Registation Form</h2>
                        </div> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="email" type="email" class="form-control" id="exampleInputPassword1" require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleCheck1" require>
                     
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
             </form>
        </div>
        
    </div>
 
 </div>
 <?php
 require_once('../includes/footer.php')
 ?>