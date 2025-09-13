<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mcq Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar ></x-user-navbar>
    
    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
    <h1 class="text-2xl text-center text-green-800 mb-6 font-bold ">
        Java 10 questions for Interview
    </h1>
   <h2 class="text-2xl text-center text-green-800 mb-6 font-bold ">
        Question No.3
    </h2>
    <div class="mt-2 p-4 bg-white shadow-2xl rounded-xl w-140">
        <h3 class="text-green-900 font-bold text-xl mb-1">Q.1 What is Java?</h3>
        <form action="" class="space-y-4" method="get">
            <label for="option_1" class="flex border p-3 mt-2 rounded-2xl shadow-2xl cursor-pointer hover:bg-blue-50">
                <input id="option_1" class="form-radio text-blue-500" type="radio">
                <span>Programming Language</span>
            </label>
            <label for="option_2" class="flex border p-3 mt-2 rounded-2xl shadow-2xl">
                <input id="option_2" class="form-radio text-blue-500" type="radio">
                <span>Programming Language</span>
            </label>
            <label for="option_3" class="flex border p-3 mt-2 rounded-2xl shadow-2xl">
                <input id="option_3" class="form-radio text-blue-500" type="radio">
                <span>Programming Language</span>
            </label>
            <label for="option_4" class="flex border p-3 mt-2 rounded-2xl shadow-2xl">
                <input id="option_4" class="form-radio text-blue-500" type="radio">
                <span>Programming Language</span>
            </label>
            <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Submit Answer and Next</button>
        </form>
    </div>
</div>
<x-footer-user></x-footer-user>
</body>
</html>