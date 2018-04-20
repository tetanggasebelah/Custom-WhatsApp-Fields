<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="edit-Type" edit="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <title>WhatsApp</title>
    <link id="favicon" rel="shortcut icon" href="https://web.whatsapp.com/img/favicon/1x/favicon.png" type="image/png" />
    <link rel="apple-touch-icon" sizes="194x194" href="https://web.whatsapp.com/apple-touch-icon.png" type="image/png" />
    <style type="text/css">
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    body {
        background: #dbdbd3;
    }

    body:before {
        content: '';
        display: block;
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 127px;
        background: #009688;
    }

    b {
        font-weight: 500;
    }

    #wafield {
        text-rendering: optimizeLegibility;
        font-size: 16px;
        position: relative;
        display: flex;
        flex-direction: column;
        max-width: calc(100% - 20px);
        min-width: 280px;
        width: 760px;
        min-height: calc(100vh - 40px);
        border-radius: 3px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        margin: 20px auto;
        background: #e5ddd5 url(https://lh3.googleusercontent.com/-j4ZM9guJB7o/WtcreGub2CI/AAAAAAAAEoI/TwI7gBTRWFEj5XGOb4XFjeRAwVgZnWJlQCLcBGAs/s0/wa_bg.png) repeat center center;
        background-size: cover;
    }

    #wafield,
    #wafield * {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", sans-serif;
    }

    #wafield header {
        height: 60px;
        background: #eee;
        border-radius: 3px 3px 0 0;
        margin-bottom: 5px;
    }

    #wafield header img {
        width: 40px;
        height: 40px;
        border-radius: 40px;
        float: left;
        margin: 10px 20px;
    }

    #wafield header h4 {
        padding: 10px 0 0;
        margin: 0;
        font-weight: 500;
        font-size: 15px;
    }

    #wafield header h4 input {
        display: inline;
        background: transparent;
        border: none;
        outline: none;
    }

    #wafield header small {
        display: block;
        opacity: .7;
    }

    #wafield header small#menulis {
        color: green;
    }

    #wafield header small#status {
        display: none;
    }

    #wafield .chat {
        display: inline-block;
        opacity: 0;
        max-width: calc(100% - 20px);
        background: #fff;
        color: #4d4d4d;
        padding: 10px 15px;
        padding-right: 40px;
        font-size: 90%;
        margin: 5px auto 5px 10px;
        border-radius: 6px;
        position: relative;
    }

    @media(max-width:480px) {
        #wafield .chat {
            font-size: 14px;
        }
    }

    #wafield .chat small {
        font-size: 80%;
        opacity: .6;
        position: absolute;
        bottom: 5px;
        right: 5px;
    }

    #wafield .field {
        display: block;
        background: #f5f1ee;
        color: #989c9d;
        padding: 10px;
        margin-top: auto;
    }

    #wafield .field div.option {
        display: none;
        width: 100%;
        color: #4d4d4d;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.080);
    }

    #wafield .field div.option input {
        display: block;
        float: left;
        margin: 5px;
        width: calc(50% - 10px);
        height: 40px;
        line-height: 40px;
        padding: 0 10px;
        background: transparent;
        color: #4d4d4d;
        background: #fff;
        border-radius: 4px;
        border: none;
        outline: none;

        /* ICON */
        padding-left: 40px;
        background-color: #fff;
        background-repeat: no-repeat;
        background-size: auto 20px;
        background-position: 10px 10px;
    }

    #wafield input#email {
        background-image: url(https://lh3.googleusercontent.com/-mFocT5R7Bn4/WtczsKBCqFI/AAAAAAAAEow/VxtlqCVok-M6AvBcnNTZq0MFFm5plb4eQCLcBGAs/h20/email.png);
        text-transform:lowercase;
    }

    #wafield input#nama {
        background-image: url(https://lh3.googleusercontent.com/-AIQoz3eqd74/WtIab6tY5TI/AAAAAAAAEj0/VSt3vMVeiSoFzAgL9r51aE19mfXLbp-awCEwYBhgL/s20/default-avatar.png);
        text-transform:capitalize;
    }

    #wafield .field div.option select {
        display: block;
        margin: 5px;
        width: calc(100% - 10px);
        height: 40px;
        line-height: 40px;
        padding: 0 10px;
        background: #fff;
        color: #4d4d4d;
        background: #fff;
        border-radius: 4px;
        border: none;
        outline: none;
    }

    #wafield .field .clear:after {
        content: '';
        display: block;
        clear: both;
    }

    #wafield .field input#pesan {
        display: block;
        float: left;
        width: calc(100% - 80px);
        height: 50px;
        background: #fff;
        color: #4d4d4d;
        padding: 15px 20px;
        border-radius: 4px;
        border: none;
        outline: none;
        resize: none;
        overflow: hidden;
    }

    #wafield .field input#pesan:focus {
        overflow-y: auto;
    }

    #wafield .field a.kirimwa {
        display: block;
        float: left;
        background: transparent url(https://lh3.googleusercontent.com/-J_Dvg5M85ng/WtazGsvhUEI/AAAAAAAAEnU/Fe1xRGla5QUWeeP-n8cxdGj-F1-I-A_GwCLcBGAs/h20/send_wa.png) no-repeat center center;
        width: 80px;
        height: 50px;
        line-height: 80px;
        text-align: center;
        text-decoration: none;
        color: #4d4d4d;
        border-radius: 2px;
        border: none;
        outline: none;
        resize: none;
        font-size: 35px;
        font-weight: bold;
    }

    #wafield .field:last-of-type {
        border-radius: 0 0 3px 3px;
    }
    </style>
</head>

<body>
    <div id='wafield'>
        <audio id="my_audio" src="https://www.tetangga-sebelah.com/whatsapp/whatsapp_ringtone.mp3"></audio>
        <header>
            <a href='https://kangrian.tetangga-sebelah.com' target='_blank'>
      <img src='https://lh3.googleusercontent.com/-KKDl5K32rlE/WtaKsZ9LTXI/AAAAAAAAEnE/gQSTaic6MbgIFlRhIzfXWB9WseMtAvYCACLcBGAs/h40/ava.jpg' alt='ava'/>
    </a>
            <h4>Kang Rian</h4>
            <small id='menulis'>Sedang menulis...</small><small id='status'>Online @ <time id='dateTime'></time></small>
        </header>
        <br/>
        <div class='chat c1'>
            Terima kasih sudah mampir ke <b>Tetangga-sebelah.com</b> 🙏
        </div>
        <div class='chat c2'>
            Silahkan hubungi saya melalui "WhatsApp" untuk memudahkan Layanan & Percakapan selanjutnya.. <small id='chatTime'></small>
        </div>
        <div class='field'>
            <div id='option' class='option clear'>
                <select id='layanan'>
                    <option value='pilihLayanan' selected hidden>Pilih Layanan →</option>
                    <option value='Buat Website'>Buat Website</option>
                    <option value='Optimasi SEO'>Optimasi SEO</option>
                    <option value='Desain Template "Blogger"'>Desain Template "Blogger"</option>
                    <option value='Desain Template "Wordpress"'>Desain Template "Wordpress"</option>
                    <option value='Beli Template "PRO-File"'>Beli Template "PRO-File"</option>
                    <option value='Beli Template "Media ID"'>Beli Template "Media ID"</option>
                    <option value='Beli Template "Lite Media"'>Beli Template "Lite Media"</option>
                    <option value='Konsultasi...'>Konsultasi...</option>
                </select>
                <input autocomplete='off' type='text' id='nama' placeholder='Nama..'>
                <input autocomplete='off' type='email' id='email' placeholder='E-mail..'>
            </div>
            <div id='sendmessage' class='clear'>
                <input type='tel' name='tel' id='tel' value='62 896-1888-5066' hidden>
                <input type='text' name='pesan' id='pesan' placeholder='Tulis pesan...'>
                <a class='kirimwa' href='javascript:void(0);'></a>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(window).bind('load', function() {

        $("#menulis").delay(2000).fadeOut(0);
        $("#status").delay(2000).fadeIn(0);

        $(".c1").delay(2000).animate({ opacity: "1" }, 0);
        var notif = document.getElementById("my_audio");
        setTimeout(function() { notif.play(); }, 2000);

        $("#menulis").delay(1000).fadeIn(0);
        $("#status").delay(1000).fadeOut(0);

        $("#menulis").delay(3000).fadeOut(0);
        $("#status").delay(3000).fadeIn(0);

        $(".c2").delay(6000).animate({ opacity: "1" }, 0);
        var notiff = document.getElementById("my_audio");
        setTimeout(function() { notiff.play(); }, 6000);

    });

    $('#pesan').focus(function() {
        $('#wafield .field div.option').fadeIn();
        $('html, body').animate({ scrollTop: $('#option').offset().top }, 500);
    });
    
    var kirimWA = function() {
            
            if ($('#layanan').val() == 'pilihLayanan') {
                alert('Silahkan "Pilih Layanan" sebelum mengirim pesan...');
                $('#pesan').focus();
                return false;
            } else if ($('#nama').val() == '') {
                alert('Mohon tulis "Nama Lengkap" sebelum mengirim pesan...');
                $('#pesan').focus();
                return false;
            } else if ($('#email').val() == '') {
                alert('Alamat E-mail dibutuhkan...');
                $('#pesan').focus();
                return false;
            } else if ($('#pesan').val() == '') {
                alert('Silahkan tulis pesan...');
                $('#pesan').focus();
                return false;
            } else {
                        
                <?php
                    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
                    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
                    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
                    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
                    
                    // check if is a mobile
                    if ($iphone || $android || $palmpre || $ipod || $berry == true)
                    {
                     echo "
                        $(this).attr('href', 'https://api.whatsapp.com/send?phone=' + $('#tel').val() + '&text=Assallamu`alaikum kang, saya *' + $('#nama').val() + '*.. mau *' + $('#layanan').val() + '*.%0A%0A📨 E-mail: ' + $('#email').val() + '%0A%0A_Pesan tambahan:_%0A' + $('#pesan').val());
                     ";
                    }
                    
                    // all others
                    else {
                     echo "
                        $(this).attr('href', 'https://web.whatsapp.com/send?phone=' + $('#tel').val() + '&text=Assallamu`alaikum kang, saya *' + $('#nama').val() + '*.. mau *' + $('#layanan').val() + '*.%0A%0A📨 E-mail: ' + $('#email').val() + '%0A%0A_Pesan tambahan:_%0A' + $('#pesan').val());
                     ";
                    }
                ?>
                
                var w = 1000,
                    h = 500,
                    left = Number((screen.width / 2) - (w / 2)),
                    tops = Number((screen.height / 2) - (h / 2)),
                    popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
                popupWindow.focus();
                return false;
            }
    };
    
    $("input").keypress(function() {
        if (event.which == 13) kirimWA();
    });
    
    $('a.kirimwa').click(kirimWA);
    
    var today = new Date();
    var date = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes('ms');
    var dateTime = date + ' ' + time;

    document.getElementById('dateTime').innerHTML = dateTime;
    document.getElementById('chatTime').innerHTML = time;
    </script>
    <script>
</body>

</html>