<html>
<head>
    <title>Awesome Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-200 font-roboto">
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Contact Us</h2>
        <form id="myFomr" action="form-submit" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-400 font-medium mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-600 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-400 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-600 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Email">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-400 font-medium mb-2">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-600 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Message"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Send Message</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
