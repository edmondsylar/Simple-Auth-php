<?php include "./includes/head.php"; ?>
<body class="main">
    <div class="container">
        
        <!-- my content here -->
        <h2>Login </h2>
        <!-- bootstrap login form -->
        <!-- include navvar -->
        <?php include "./includes/navbar.php"; ?>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="../backend/login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

    </div>
    </div>

<?php include "./includes/footer.php"; ?>