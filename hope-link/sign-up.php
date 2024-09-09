<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hope Link</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/sign-up.css">
</head>
<body>
  <!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">
                <img src="assets/images/logo.png" alt="logo" width="150">
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-5 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="assets/images/orphanage_vector.png" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Create an Account</h1>
            </p>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="#">
                <div class="row">

                    <!-- Role -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <select id="role" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md"  onchange="updateForm()" required>
                            <option value="" selected disabled>Choose your Role</option>
                            <option value="1">Orphanage</option>
                            <option value="2">Public</option>
                        </select>
                    </div>

                    <!-- ORPHANAGE FORM -->
                    <div id="orphanage" class="col-lg-12">
                          <!-- Orphanage Name -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="orphanage_name" type="text" name="orphanage_name" placeholder="Orphanage Name" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Orphanage Category -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-black-tie text-muted"></i>
                                </span>
                            </div>
                            <select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="">Select the Category</option>
                                <option value="">Child</option>
                                <option value="">Old</option>
                                <option value="">Mentally Disabled</option>
                                <option value="">Physically Disabled</option>
                            </select>
                        </div>

                        <!-- Orphanage Image -->
                        <div class="input-group col-lg-12 mb-4">
                          <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-upload text-muted"></i>
                                </span>
                            </div>
                          <div class="custom-file">
                            <input type="file" class="form-control bg-white border-left-0 border-md custom-file-input" id="inputGroupFile01" required>
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>

                        <!-- Orphanage Location -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-map-marker text-muted"></i>
                                </span>
                            </div>
                            <input id="orphanage_location" type="text" name="orphanage_location" placeholder="Location" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Orphanage User Name -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="orphanage_username" type="text" name="orphanage_username" placeholder="User Name" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="orphanage_password" type="text" name="orphanage_password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                        </div>
                    </div>

                    <!-- PUBLIC FORM -->
                    <div id="public" class="col-lg-12">
                          
                        <!-- User Name -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="public_username" type="text" name="publ_username" placeholder="User Name" class="form-control bg-white border-left-0 border-md"  required>
                        </div>

                        

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="public_email" type="email" name="public_email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="public_password" type="text" name="public_password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div id="submit-button" class="form-group col-lg-12 mx-auto mb-0">
                        <a href="#" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Create your account</span>
                        </a>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="index.php" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<script type="text/javascript">
  function updateForm() {
    const role = document.getElementById('role');
    const public = document.getElementById('public');
    const orphanage = document.getElementById('orphanage');
    const submit_button = document.getElementById('submit-button');

    const public_username = document.getElementById('public_username');
    const public_email = document.getElementById('public_email');
    const public_password = document.getElementById('public_password');

    if (role.value === '1') {
        orphanage.style.display = "block";
        public.style.display = "none";
        submit_button.style.display = "block";
        
        public_username.required = false;
        public_email.required =false;
        public_password.required = false;

        orphanage.querySelectorAll('input').forEach((e)=>{e.required=true;})

    } else if (role.value === '2') {
        orphanage.style.display = "none";
        public.style.display = "block";
        submit_button.style.display = "block";
        
        public_username.required = "true";
        public_email.required = "true";
        public_password.required = "true";

        orphanage.querySelectorAll('input').forEach((e)=>{e.required=false;})
    }
}
</script>