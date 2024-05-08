<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app" class="vh-100">

        <!-- header -->
        <header class="p-3 bg-success bg-gradient text-success-emphasis">
            <div class="container">
                <nav>
                    LOGO
                </nav>
            </div>
        </header>

        <!-- main -->
        <main class=" py-3 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div v-for="disc in discs" class="card text-center">
                            <img :src="disc.poster" alt="" class=" card-img-top">
                            <div class="card-body">
                                <h2 class="card-title"> {{ disc.title }}</h2>
                                <h5 class="card-subtitle"> {{ disc.author }}</h5>
                                <h3 class="card-text"> {{ disc.year}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <script src="./js/app.js"></script>
</body>

</html>