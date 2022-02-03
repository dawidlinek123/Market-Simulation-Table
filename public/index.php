<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dawid Linek">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="resources/style.css" />

    <title>Simulations</title>
    <style>

    </style>
</head>

<body>
    <div class='bg-gray-50 dark:bg-slate-900 pb-10' style="min-height: 100vh;">

    
<label id="theme-switch" class="theme-switch" for="checkbox_theme">
    <input type="checkbox" id="checkbox_theme">
</label>
    <div class="flex justify-center ">
        <div class="block p-6 rounded-lg shadow-lg bg-white dark:bg-slate-800 sm:w-1/2 w-11/12 mt-48">
            <h5 class="text-indigo-900 dark:text-slate-200 text-xl leading-tight font-medium mb-4 ml-1">Simulation list</h5>

                <?php
                    require __DIR__.'/../src/index.php';
                ?>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script  src="resources/script.js" ></script>
    </div>
</body>

</html>