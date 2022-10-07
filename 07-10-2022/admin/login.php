<?php include './template/header.php'; ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <br/><br/><br/><br/>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form id="login" class="user">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="senha" class="form-control form-control-user" placeholder="Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Entrar">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
        $("#login").submit(function(e){
            e.preventDefault();
            let form = $(this);
            
            $.ajax({
                type: "POST",
                url: "./api/login.php",
                data: form.serialize(),
                success: function(data){
                    console.log(data)
                    if(data == 'login efetuado com sucesso'){
                        window.location.href = './index.php';
                    }
                }
            });
        })

    </script>

    <?php include './template/footer.php'; ?>