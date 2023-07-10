<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Resmi LPK/LKP Indera" />
    <meta name="keywords" content="Kursus Mengemudi terbaik di Magelang" />
    <meta name="author" content="Muhammad Rizky Ibrahim" />
    <meta name="website" content="https://github.com/rizkyculture/" />
    <meta name="email" content="rizkyculture@gmail.com" />
    <meta name="version" content="v1.0" />
    <title>Lupa Password - Kursus Mengemudi Indera</title>
    <!-- BEGIN: Favicon-->
    <link rel="shortcut icon" href="<?= base_url(); ?>/frontend/images/favicon.ico">
    <!-- END: Favicon-->

    <!-- BEGIN: CSS Utama-->
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
    <!-- END: CSS Utama-->
</head>

<body>
    <!-- BEGIN: Lupa Password (Email)-->
    <div style="margin-top: 50px;">
        <table cellpadding="0" cellspacing="0"
            style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
            <thead>
                <tr
                    style="background-color: #2f55d4 ; padding: 3px 0; border: none; line-height: 68px; text-align: center; color: #fff; font-size: 24px; letter-spacing: 1px;">
                    <th scope="col"><img src="<?= base_url(); ?>/frontend/images/logo-white.png" height="24" alt="">
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td style="padding: 48px 24px 0; color: #161c2d; font-size: 18px; font-weight: 600;">
                        Halo, Peserta Kursus Indera</td>
                </tr>
                <tr>
                    <td style="padding: 15px 24px 15px; color: #8492a6;">
                        Seseorang telah meminta untuk mengatur ulang password untuk akun <?= site_url() ?>. Untuk
                        mengatur ulang password, silakan klik tombol di bawah ini dan ikuti petunjuknya:
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 24px;">
                        <a href="<?= site_url('reset-password') . '?token=' . $hash ?>"
                            style="padding: 8px 20px; outline: none; text-decoration: none; font-size: 16px; letter-spacing: 0.5px; transition: all 0.3s; font-weight: 600; border-radius: 6px; background-color: #2f55d4; border: 1px solid #2f55d4; color: #ffffff;">Reset
                            Password</a>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 24px 0; color: #8492a6;">
                        Atau copy & paste link berikut ini di tab browser Anda.
                    </td>
                </tr>
                <tr>
                    <td style="padding: 15px 24px 0; color: #2986cc;">
                        <?= site_url('reset-password') . '?token=' . $hash ?>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 24px 15px; color: #8492a6;">
                        Kursus Mengemudi Indera <br> Team Support
                    </td>
                </tr>

                <tr>
                    <td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">
                        © <script>
                        document.write(new Date().getFullYear())
                        </script> Kursus Mengemudi Indera.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END: Lupa Password (Email)-->

</body>

</html>