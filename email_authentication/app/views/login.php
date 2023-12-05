<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <!-- Your custom styles -->
  <link rel="stylesheet" href="../public/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="../public/images/favicon.png" />
</head>

<body class="bg-gray-100">
  <div class="container mx-auto">
    <div class="flex justify-center items-center h-screen">
      <div class="w-full sm:w-96">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <h4 class="text-center text-xl font-bold mb-4">Login</h4>
          <h6 class="text-center text-sm font-light mb-4">Sign in to your account</h6>
          <?php $LAVA =& lava_instance(); ?>
          <?php echo $LAVA->form_validation->errors(); ?>
          <?php if (isset($error_message)) { ?>
            <div class="alert alert-danger"><?php echo $error_message; ?></div>
          <?php } ?>
          <?php if (isset($success_message)) { ?>
            <div class="alert alert-success"><?php echo $success_message; ?></div>
          <?php } ?>
          <form action="<?= site_url('validate_login'); ?> " method="post">
            <div class="mb-4">
              <input type="email" class="w-full px-4 py-2 border rounded-lg" placeholder="Email" name="email">
            </div>
            <div class="mb-4">
              <input type="password" class="w-full px-4 py-2 border rounded-lg" placeholder="Password" name="password">
            </div>
            <div class="flex justify-center">
              <div><input type="submit" value="Login" class="bg-blue-500 text-white px-4 py-2 rounded-lg cursor-pointer" /></div>
            </div>
            <div class="text-center mt-4 text-sm font-light">
              Enter your login information or <a href="register" class="text-blue-500">click here</a> to registration
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Tailwind CSS -->
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
  <!-- Your custom scripts -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../public/js/off-canvas.js"></script>
  <script src="../public/js/hoverable-collapse.js"></script>
  <script src="../public/js/template.js"></script>
  <script src="../public/js/settings.js"></script>
  <script src="../public/js/todolist.js"></script>
</body>

</html>
