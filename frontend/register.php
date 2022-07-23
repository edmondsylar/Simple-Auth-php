<?php include "./includes/head.php"; ?>
<body class="main">
    <div class="container">
        <!-- my content here -->
        <h2>Register </h2>
        <!-- include navbar here -->
        <?php include "./includes/navbar.php"; ?>
        
        <!-- registration form -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="../backend/register.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input type="text" id="name" placeholder="Name" name="name" required="required" spellcheck="true">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

    </div>

<?php include "./includes/footer.php"; ?>
