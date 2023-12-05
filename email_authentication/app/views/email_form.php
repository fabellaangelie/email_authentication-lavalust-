<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form </title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
    <div class="container mx-auto mt-8 p-8 bg-white rounded shadow-lg">
        <h2 class="mb-4 text-center text-primary">Send Email</h2>
        <?php $LAVA =& lava_instance(); ?>
        <?php echo $LAVA->form_validation->errors(); ?>    
        <?php if (isset($error_message)) { ?>
            <div class="alert alert-danger"><?= $error_message; ?></div>
        <?php } ?>
        <?php if (isset($success_message)) { ?>
            <div class="alert alert-success"><?= $success_message; ?></div>
        <?php } ?>
        <form action="<?= site_url('email'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="to" class="block text-gray-600 text-sm font-bold mb-2">To:</label>
                <input type="email" class="form-control w-full" id="to" name="to" required>
            </div>
            <div class="mb-4">
                <label for="from" class="block text-gray-600 text-sm font-bold mb-2">From:</label>
                <input type="email" class="form-control w-full" id="from" name="from" required>
            </div>
            <div class="mb-4">
                <label for="subject" class="block text-gray-600 text-sm font-bold mb-2">Subject:</label>
                <input type="text" class="form-control w-full" id="subject" name="subject" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-600 text-sm font-bold mb-2">Message:</label>
                <textarea class="form-control w-full" id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="mb-4">
                <label for="attachment" class="block text-gray-600 text-sm font-bold mb-2">Attachment:</label>
                <input type="file" class="form-control-file" id="attachment" name="attachment">
            </div>
            <div class="flex justify-center">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
