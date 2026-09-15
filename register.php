<?php 
require_once 'db.php'; 
require_once 'header.php'; 

$success_msg = "";
$error_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($email) && !empty($password)) {
        // encryption ng password para sa security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // direct na pupunta sa db
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $success_msg = "Registration successful! You can now <a href='login.php' class='underline font-bold'>Login here</a>.";
        } else {
            // dito malalaman if merong duplicate na email o kaya nakuha na yung email
            $error_msg = "Error: Username or Email is already taken.";
        }
        $stmt->close();
    } else {
        $error_msg = "Please fill in all fields.";
    }
}
?>

<main class="max-w-md mx-auto px-4 py-12 flex-grow w-full">
    
    <h1 class="text-3xl font-bold text-center mb-2">Create an Account</h1>
    <p class="text-slate-600 text-center mb-8 text-sm">Join Jersha.Edits platform today.</p>

    <!-- success msg-->
    <?php if (!empty($success_msg)): ?>
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg p-4 mb-6 text-sm">
            ✅ <?php echo $success_msg; ?>
        </div>
    <?php endif; ?>

    <!-- error msg -->
    <?php if (!empty($error_msg)): ?>
        <div class="bg-rose-50 border border-rose-200 text-rose-800 rounded-lg p-4 mb-6 text-sm">
            ❌ <?php echo $error_msg; ?>
        </div>
    <?php endif; ?>

    <!-- regisyer form -->
    <form action="register.php" method="POST" class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm space-y-4">
        <div>
            <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Username</label>
            <input type="text" name="username" required class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-600">
        </div>

        <div>
            <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Email Address</label>
            <input type="email" name="email" required class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-600">
        </div>

        <div>
            <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Password</label>
            <input type="password" name="password" required class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-600">
        </div>

        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg shadow transition">
            Sign Up
        </button>
        
        <p class="text-center text-xs text-slate-500 mt-4">
            Already have an account? <a href="login.php" class="text-indigo-600 font-semibold hover:underline">Log in</a>
        </p>
    </form>

</main>

<?php require_once 'footer.php'; ?>