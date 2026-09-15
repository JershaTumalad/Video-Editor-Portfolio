<?php 
session_start(); //para sa session at magstay na login si user
require_once 'db.php'; 
require_once 'header.php'; 

$error_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        //hahanapin yung user account
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            //iccheck kung tama ang password base sa database
            if (password_verify($password, $user['password'])) {
                //kapag tama issave yung session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
                // babalik sa index.php or html
                header("Location: index.php");
                exit();
            } else {
                $error_msg = "Maling password. Pakisubok ulit.";
            }
        } else {
            $error_msg = "Walang nahanap na account gamit ang Username na 'yan.";
        }
        $stmt->close();
    } else {
        $error_msg = "Pakisagutan ang lahat ng fields.";
    }
}
?>

<main class="max-w-md mx-auto px-4 py-12 flex-grow w-full">
    
    <h1 class="text-3xl font-bold text-center mb-2">Welcome Back</h1>
    <p class="text-slate-600 text-center mb-8 text-sm">Log in to your Jersha.Edits account.</p>

    <!-- error alert -->
    <?php if (!empty($error_msg)): ?>
        <div class="bg-rose-50 border border-rose-200 text-rose-800 rounded-lg p-4 mb-6 text-sm">
            ❌ <?php echo $error_msg; ?>
        </div>
    <?php endif; ?>

    <!-- login form -->
    <form action="login.php" method="POST" class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm space-y-4">
        <div>
            <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Username</label>
            <input type="text" name="username" required class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-600">
        </div>

        <div>
            <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Password</label>
            <input type="password" name="password" required class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-600">
        </div>

        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg shadow transition">
            Log In
        </button>
        
        <p class="text-center text-xs text-slate-500 mt-4">
            Don't have an account? <a href="register.php" class="text-indigo-600 font-semibold hover:underline">Sign up</a>
        </p>
    </form>

</main>

<?php require_once 'footer.php'; ?>