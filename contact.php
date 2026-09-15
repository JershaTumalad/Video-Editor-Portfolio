<?php 
require_once 'db.php'; 
require_once 'header.php'; 

$success_msg = "";
$error_msg = "";

// kapag nag send ng msg si user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        // magssave sa database 
        $stmt = $conn->prepare("INSERT INTO inquiries (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            $success_msg = "Message sent successfully and saved to database!";
        } else {
            $error_msg = "Database error: " . $conn->error;
        }
        $stmt->close();
    } else {
        $error_msg = "Please fill in all required fields.";
    }
}
?>

<main class="max-w-2xl mx-auto px-4 py-12 flex-grow w-full">
    
    <h1 class="text-3xl font-bold text-center mb-2">Let's Work Together</h1>
    <p class="text-slate-600 text-center mb-8">
        Have an AI video editing project or inquiry? Send a message below!
    </p>

    <!-- success msg alert-->
    <?php if (!empty($success_msg)): ?>
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg p-4 mb-6 text-sm">
            ✅ <strong>Success!</strong> <?php echo $success_msg; ?>
        </div>
    <?php endif; ?>

    <!-- error msg alert -->
    <?php if (!empty($error_msg)): ?>
        <div class="bg-rose-50 border border-rose-200 text-rose-800 rounded-lg p-4 mb-6 text-sm">
            ❌ <strong>Error!</strong> <?php echo $error_msg; ?>
        </div>
    <?php endif; ?>

    <!-- form -->
    <form action="contact.php" method="POST" class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm space-y-4">
        <div>
            <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Your Name</label>
            <input type="text" name="name" required class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-600">
        </div>

        <div>
            <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Email Address</label>
            <input type="email" name="email" required class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-600">
        </div>

        <div>
            <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Project Details / Message</label>
            <textarea name="message" rows="4" required class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-600"></textarea>
        </div>

        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 rounded-lg shadow transition">
            Send Message
        </button>
    </form>

</main>

<?php require_once 'footer.php'; ?>