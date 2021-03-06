<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notification</title>

    <style>
        html,
        body {
            /* font-family: 'Montserrat', sans-serif;
            font-family: 'Poppins', sans-serif; */
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        main {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <main>
        <table style="width:100%; background:#f3f3f5">
            <tbody>
                <tr>
                    <td>
                        <div style="max-width: 640px; margin: 0 auto; padding:30px;">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td style="padding: 20px; background-color:#ffffff">
                                            <img style="display: inherit; margin:0 auto" src="{{asset('images/logo.png')}}" alt="SMK Al-Mustofha" srcset="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:30px; background-color:#ffffff">
                                            <table>
                                                <tr>
                                                   <td colspan="2">
                                                        Terdapat satu pengajuan portofolio baru dengan rincian berikut
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kategori</td>
                                                    <td>: {!! $data ?? '' !!}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        User
                                                    </td>
                                                    <td>
                                                        : {!! $user ?? '' !!}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="http://localhost:8000/{!! $data !!}">Link</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="padding:20px 30px 20px 30px; padding-bottom:10px;font-size:12px;line-height:16px;font-family:arial,sans-serif; background-color: #0434e4; color:white;text-align:center; line-height:20px">
                                            SMKS AL MUSTHOFA, JLN. RAYA GANDASOLI, Kec. Cireunghas Kab. Sukabumi Prov. Jawa Barat
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>