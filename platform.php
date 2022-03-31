<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<?php include('include/header.php');?>

    <section class="pop_section">
        <div class="container bg-1">
            <div class="row text-center ">
                <div class="col-sm-12 platform_text" style="margin-top: 30px;">
                    <div class="col-sm-12">
                        <h6 class = "platform_first_line" > Anda telah berjaya menyertai Cabutan Bertuah Raya QV dan berpeluang
                            memenangi</h6>
                        <h2  class = "platform_second_line" >Hadiah Wang Tunai bernilai RM 500! </h2>
                    </div>
                    <div class="platform_image_div" >
                   <img src="img/platform.png" class="platform_image">
                    </div>
                </div>
            </div>
            <div class="row formqv platform_sub" >
                <div class=" col-sm-12 qvclass">
                    <div class=" col-sm-6">
                        <p style="color: #293D8A;">Jangan lupa kongsikan permainan ini dengan rakan-rakan anda dan
                            meningkatkan peluang untuk menang! </p>
                        <a href="https://www.facebook.com/home.php">
                        <img src="img/fb.png">
                        <a href="https://www.instagram.com">
                        <img src="img/insta.png">
                        <input onclick="copy()" class="copy-input" value="https://www.qvskincare.com/my"
                            id="copyClipboard" readonly>
                        <button class="copy-btn" id="copyButton" onclick="copy()"><i class="far fa-copy"></i></button>
                    </div>
                    <div class="col-sm-6">
                        <p style="color: #293D8A;">Layari kedai e-dagang QV untuk pembelian produk QV! </p>
                        <a href="https://www.lazada.com.my/shop/qv-official-store/"><img src="img/qv1.png"></a>
                        <a href="https://shopee.com.my/qv.os"><img src="img/qv2.png"></a>
                    </div>
                </div>
                <div class="col-sm-12 text-center" style="background: #003AA5; padding: 30px;">
                    <p style="color: #fff;">Layari laman web untuk maklumat lebih lanjut berkaitan produk QV sekarang!
                    </p>
                    <a href="https://www.qvskincare.com/my/en/news-and-promos/qvbodycampaign21.html">
                    <img src="img/qv3.png">
                </div>
            </div>
        </div>
        </div>

    <script>
        function copy() {
            var copyText = document.getElementById("copyClipboard");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            $('#copied-success').fadeIn(800);
            $('#copied-success').fadeOut(800);
        }
    </script>
</body>
</html>