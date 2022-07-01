<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class=" pt-1 min-w-screen min-h-screen bg-gray-100 flex items-start justify-right bg-gray-100 font-sans py-6 ">
            <div class="container">
                <div class="card bg-white py-3 px-5 rounded-xl flex flex-col mb-5">
                    <div class="w-full py-3">
                        <form action="/adminCategories" method="post">
                        <div class="inline-block mr-2 mt-2">
                        <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">Categories</button>
                        </div>
                        </form>
                        <form  action="/adminCategories" method="post">
                        <div class="inline-block mr-2 mt-2">
                        <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-500 hover:bg-gray-600 hover:shadow-lg">Subcategories</button>
                        </div>
                        </form>
                        <form  action="/adminCategories" method="post">
                        <div class="inline-block mr-2 mt-2">
                        <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Products</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  