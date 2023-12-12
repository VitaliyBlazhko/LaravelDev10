
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сторінка авторизації</title>

</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Увійти до облікового запису</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Електронна пошта</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Електронна пошта" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Пароль</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Пароль" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Запам'ятати мене</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Увійти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Скрипти Bootstrap (необхідно для роботи деяких компонентів) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

