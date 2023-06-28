@include('layout.plantilla')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .profile-card {
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-card .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-card h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .profile-card p {
            margin-bottom: 10px;
        }

        .profile-card .btn {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 700;
        }
    </style>
</head>

<body>
    
    
    @yield('menu')
    <div class="container">
        <div class="p-5">
            <div class="row">
                <div class="col-md-7 col-lg-9">
                    <div class="profile-card text-center">
                        
                        <h2 class="mb-3 text-primary">Perfil de Usuario</h2>
                        <table class="table">
                            <tr>
                                <td>
                                    <p class="form-label">Nombre:</p>
                                </td>
                                <td class="text-center align-middle">
                                    <span>{{ $perfil->name }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="form-label">Email:</p>
                                </td>
                                <td class="text-center align-middle">
                                    <span class="input-group-text"><ion-icon
                                            name="file-tray-outline"></ion-icon>{{ $perfil->email }}</span>
                                </td>
                            </tr>
                
                            
                        </table>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>