<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jersha.Edits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">

<nav class="bg-white border-b border-slate-200 p-4 sticky top-0 z-50">
    <div class="max-w-5xl mx-auto flex justify-between items-center">
        <a href="index.php" class="text-xl font-bold text-indigo-600">
            Jersha<span class="text-slate-800">.Edits</span>
        </a>

        <div class="space-x-6 font-medium text-sm flex items-center">
            <a href="index.php" class="hover:text-indigo-600 transition">Home</a>
            <a href="services.php" class="hover:text-indigo-600 transition">Services</a>
            <a href="about.php" class="hover:text-indigo-600 transition">About</a>
            <a href="contact.php" class="hover:text-indigo-600 transition">Contact</a>

            <?php if (isset($_SESSION['username'])): ?>
                <span class="text-xs bg-indigo-50 text-indigo-700 px-2.5 py-1 rounded-full font-semibold">
                    👤 <?php echo htmlspecialchars($_SESSION['username']); ?>
                </span>
                <a href="logout.php" class="text-rose-600 hover:underline">Logout</a>
            <?php else: ?>
                <a href="login.php" class="text-indigo-600 hover:underline">Login</a>
                <a href="register.php" class="bg-indigo-600 text-white px-3 py-1.5 rounded-lg hover:bg-indigo-700 transition">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>
</nav>