<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h3>Form Input dengan Validasi</h3>
    <form id="validationForm">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="nama">
        <span id="name-error" style="color:red"></span>
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color:red"></span>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color:red"></span>
        <br>
        <input type="submit" value="Submit">
    </form>

    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $('#validationForm').submit(function(event) {
                event.preventDefault();

                var nama = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var valid = true;

                if (nama === '') {
                    $('#name-error').text("Nama harus diisi.");
                    valid = false;
                } else {
                    $('#name-error').text("");
                }

                if (email === '') {
                    $('#email-error').text("Email harus diisi.");
                    valid = false;
                } else {
                    $('#email-error').text("");
                }

                if (password.length < 8) {
                    $('#password-error').text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $('#password-error').text("");
                }

                if (valid) {
                    $.ajax({
                        url: 'proses_validasi.php',
                        type: 'POST',
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            $('#result').html(response); // Display result from PHP
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>