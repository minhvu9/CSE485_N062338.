<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập Lớn Web</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body style="height:2509px;width:1000px;padding:0px 150px 0px 150px;background:#f1cbf1;">
    <header id="top" style="width:1003px;">
        <div class="container" id="Banner" style="width:1000px;height:120px;"><img src="assets/img/Banner.jpg">
            <div class="row">
                <div class="col" style="width:375px;">
                    <div class="row" id="row1">
                        <div class="col" id="col_1" style="width:181px;"><button class="btn btn-primary" type="button" id="DangNhap" style="width:138px;"><a href="formLogin.php" style="color:#fff;" >Đăng nhập</a></button></div>
                        <div class="col-lg-6" id="col_2" style="width:184px;"><button class="btn btn-primary" type="button" id="DangKy" style="height:30px;width:136px;"><a href="formRegister.php" style="color:#fff;">Đăng ký</a></button></div>
                    </div>
                    <div class="row" id="row2">
                        <div class="col"><input type="search" class="seach_box" style="width:300px;height:41px;"><i class="fa fa-search" style="width:60px;height:35px;"></i></div>
                    </div>
                </div>
                <div class="col-lg-3" id="NgonNgu">
                    <p>Ngôn Ngữ</p>
                    <div class="row" id="Langu_Viet" style="width:137px;height:50px;">
                        <div class="col-lg-5"><img src="assets/img/VN.png" style="width:39px;height:28px;"></div>
                        <div class="col"><a href="#">Việt Nam</a></div>
                    </div>
                    <div class="row" id="Langu_Eng" style="width:137px;height:50px;">
                        <div class="col-lg-5"><img src="assets/img/English.png" style="width:38px;height:27px;"></div>
                        <div class="col"><a href="#" style="font-size:15px;">English</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header id="header_icon1" style="width:1007px;height:66px;">
        <div class="container" id="Cont_Menu" style="width:999px;height:65px;">
            <div class="row" id="Row_Menu" style="height:82px;width:965px;">
                <div class="col-lg-2" id="TrangChu" style="width:115px;"><button class="btn btn-primary" type="button" id="But_TrangChu" style="width:121px;height:42px;background-color:rgb(255,15,0);float:left;padding:0px;"><i class="fa fa-home" style="height:14px;margin:1px;font-size:21px;padding:0px;"></i><a href="#" style="color:#fff;">Trang chủ</a></button></div>
                <div
                    class="col" id="He2_Gamehay" style="height:82px;width:114px;"><button class="btn btn-primary" type="button" id="But_GameHay" style="width:103px;height:44px;background-color:rgb(250,255,0);color:rgb(255,255,255);"><a href="" style="color:#fff;">Game hay</a></button></div>
            <div class="col" id="He2_GameHot" style="width:121px;"><button class="btn btn-primary" type="button" id="But_GameHot" style="width:96px;height:43px;background-color:rgb(66,255,0);"><a href="" style="color:#fff;">Game hot</a></button></div>
            <div class="col" id="He2_GameMoi" style="width:119px;"><button class="btn btn-primary" type="button" id="But_GameMoi" style="width:98px;height:43px;"><a href="" style="color:#fff;">Game mới</a></button></div>
            <div class="col" id="He2_GameVui" style="width:120px;"><button class="btn btn-primary" type="button" id="But_GameVui" style="width:101px;height:44px;background-color:rgb(255,0,230);"><a href="" style="color:#fff;">Game vui</a></button></div>
            <div class="col" id="He2_GameTai" style="width:112px;"><button class="btn btn-primary" type="button" id="But_GameTN" style="width:113px;height:44px;background-color:rgb(112,0,255);font-size:14px;"><a href="" style="color:#fff;">Game tải nhiều</a></button></div>
            <div class="col" id="He2_GameSolo" style="width:195px;"><button class="btn btn-primary" type="button" id="GameSoLo" style="width:106px;height:44px;padding:1px;background-color:rgb(213,84,43);color:#ffffff;font-size:18px;"><a href="" style="color:#fff;">Game solo</a></button></div>
        </div>
        </div>
    </header>
    <header id="Header_Icon" style="width:999px;">
        <div class="container">
            <div class="row" style="width:1000px;">
                <div class="col" id="Icon_ChienThuat" style="height:119px;width:107px;"><img src="assets/img/GameChienThuat.jpg" style="width:90px;height:73px;"><a href="#" style="width:auto;font-size:14px;">Game Chiến Thuật</a></div>
                <div class="col" id="Icon_DoiKhang" style="width:100px;"><img src="assets/img/GameDoiKhang.jpg" style="width:79px;height:72px;"><a href="#">Game Đối Kháng</a></div>
                <div class="col" id="Icon_NauAn" style="width:100px;font-size:16px;"><img src="assets/img/Icon_Nâun.jpg" style="width:83px;height:72px;"><a href="#">Game Nấu Ăn</a></div>
                <div class="col" id="Icon_BanGai" style="width:100px;"><img src="assets/img/BanGai.jpg" style="width:87px;height:74px;"><a href="#">Game Bạn Gái</a></div>
                <div class="col" id="Icon_DuaXe" style="width:100px;"><img src="assets/img/dua-sieu-xe1-size-111x111-znd.jpg" style="width:87px;height:73px;"><a href="#">Game Đua Xe</a></div>
                <div class="col" id="Icon_TheThao" style="width:100px;"><img src="assets/img/Duaxe.jpg" style="width:88px;height:74px;"><a href="#">Game Đua Xe</a></div>
                <div class="col" id="Icon_PhieuLuu" style="width:100px;"><img src="assets/img/PhieuLuu.jpg" style="width:86px;height:75px;"><a href="#">Game Phiêu Lưu</a></div>
                <div class="col" id="Icon_HanhDong" style="width:100px;"><img src="assets/img/HanhDong.jpg" style="width:83px;height:74px;"><a href="#">Game Hành Động</a></div>
                <div class="col" id="Icon_TLKHAC" style="width:100px;"><img src="assets/img/TLKhac.jpg" style="width:87px;height:73px;"><a href="#">Thể Loại Khác</a></div>
            </div>
        </div>
    </header>
    <div class="simple-slider" style="height:200px;width:1000px;">
        <div class="swiper-container" style="height:200px;width:1000px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);height:198px;"><img src="assets/img/slideShow4.jpg" style="height:196px;width:995px;"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);height:197px;"><img src="assets/img/slideShow5.jpg" style="width:995px;height:197px;"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);height:197px;"><img src="assets/img/slideShow3.jpg" style="width:995px;height:197px;"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);height:197px;"><img src="assets/img/slideShow2.jpg" style="width:995px;height:197px;"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);height:197px;"><img src="assets/img/slideShow1.jpg" style="width:995px;height:197px;"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="container" id="Container1" style="height:458px;width:1000px;">
        <div class="row" id="row1_Cont1" style="width:1000px;height:30px;">
            <div class="col-lg-2" id="Cont1_Col1" style="color:rgb(33,35,41);">
                <h1 style="font-size:22px;color:#e5053a;">Game Hay</h1>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"><img src="assets/img/pi1.jpg" style="width:150px;"><a href="#">Pinball</a></div>
            <div class="col"><img src="assets/img/pi2.gif" style="width:150px;"><a href="#">Thổ dân</a></div>
            <div class="col"><img src="assets/img/pi3.jpg" style="width:150px;"><a href="#">Đại chiến robot</a></div>
            <div class="col"><img src="assets/img/pi4.jpg" style="width:150px;"><a href="#">Cuộc chiến sao anime</a></div>
            <div class="col"><img src="assets/img/pi5.jpg" style="width:150px;"><a href="#">Chú hề nấu ăn</a></div>
        </div>
        <div class="row">
            <div class="col"><img src="assets/img/pi6.jpg" style="width:150px;"><a href="#">Shin</a></div>
            <div class="col"><img src="assets/img/pi7.jpg" style="width:150px;"><a href="#">Chăm sóc vợ</a></div>
            <div class="col"><img src="assets/img/pi8.jpg" style="width:150px;"><a href="#">Bắn ếch</a></div>
            <div class="col"><img src="assets/img/pi9.jpg" style="width:150px;"><a href="#">Bắn cá</a></div>
            <div class="col"><img src="assets/img/pi10.jpg" style="width:150px;"><a href="#">Nuôi quái vật</a></div>
        </div>
        <div class="row">
            <div class="col"><img src="assets/img/pi11.jpg" style="width:150px;"><a href="#">Tranformer</a></div>
            <div class="col"><img src="assets/img/pi12.jpg" style="width:150px;"><a href="#">Phi Tiêu</a></div>
            <div class="col"><img src="assets/img/p13.jpg" style="width:150px;"><a href="#">Làm kem</a></div>
            <div class="col"><img src="assets/img/p14.jpg" style="width:150px;"><a href="#">Temprun 2</a></div>
            <div class="col"><img src="assets/img/p15.jpg" style="width:150px;"><a href="#">Bắn chim</a></div>
        </div>
        <div class="row" style="width:955px;height:63px;">
            <div class="col"></div>
            <div class="col-lg-2" id="XemThem1" style="padding:21px;"><a href="#" style="padding:0px;font-size:19px;color:#30383a;">Xem Thêm</a></div>
        </div>
    </div>
    <div class="container" id="Container2" style="height:484px;width:1001px;">
        <div class="row" id="row1_Cont2" style="height:30px;">
            <div class="col-lg-2">
                <h1 style="font-size:21px;color:#d81c3f;">Hành Động</h1>
            </div>
            <div class="col"></div>
        </div>
        <div class="row" style="width:954px;">
            <div class="col"><img src="assets/img/p30.jpg" style="width:150px;"><a href="#">Đột kích 3</a></div>
            <div class="col"><img src="assets/img/p31.jpg" style="width:150px;"><a href="#">Chiến đấu nào</a></div>
            <div class="col"><img src="assets/img/p32.jpg" style="width:150px;"><a href="#">Điệp vụ perry</a></div>
            <div class="col"><img src="assets/img/p22.jpg" style="width:150px;"><a href="#">Ramboo lùn</a></div>
            <div class="col"><img src="assets/img/p34.jpg" style="width:150px;"><a href="#">Sôngku4</a></div>
        </div>
        <div class="row">
            <div class="col"><img src="assets/img/p35.jpg" style="width:150px;"><a href="#">Anh hùng chiến loạn</a></div>
            <div class="col"><img src="assets/img/p36.jpg" style="width:150px;"><a href="#">Điệp vụ perry2</a></div>
            <div class="col"><img src="assets/img/p37.gif" style="width:150px;"><a href="maingame.php">Rồng đen</a></div>
            <div class="col"><img src="assets/img/p38.jpg" style="width:150px;"><a href="#">Naruto</a></div>
            <div class="col"><img src="assets/img/p39.jpg" style="width:150px;"><a href="#">Pokemon đại chiến</a></div>
        </div>
        <div class="row">
            <div class="col"><img src="assets/img/p40.gif" style="width:150px;"><a href="#">Rông đen 3</a></div>
            <div class="col"><img src="assets/img/p41.jpg" style="width:150px;"><a href="#">Songoku 5</a></div>
            <div class="col"><img src="assets/img/p42.jpg" style="width:150px;"><a href="#">Anh hùng chiến loạn 3</a></div>
            <div class="col"><img src="assets/img/p43.jpg" style="width:150px;"><a href="#">Đại chiến siêu nhân</a></div>
            <div class="col"><img src="assets/img/p44.gif" style="width:150px;"><a href="#">Võ sĩ giác đấu</a></div>
        </div>
        <div class="row" style="height:68px;">
            <div class="col-lg-9"></div>
            <div class="col" id="XemThem2" style="font-size:17px;"><a href="#" style="width:0px;font-size:20px;color:#6d3321;">Xem Thêm</a></div>
        </div>
    </div>
    <div class="container" id="Container3" style="height:484px;width:1001px;">
        <div class="row" id="row1_Cont3" style="height:30px;width:1000px;">
            <div class="col-lg-2">
                <p style="font-size:16px;color:rgb(33,34,41);">GAME TẢI NHIỀU</p>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"><img src="assets/img/chi-huy-thien-ha.png" style="width:150px;"><a href="#">Chỉ huy thiên hà</a></div>
            <div class="col"><img src="assets/img/chu-khi-buon-118.png" style="width:150px;"><a href="#">Chú khỉ buồn</a></div>
            <div class="col"><img src="assets/img/co-caro-2-nguoi.png" style="width:150px;"><a href="#">cờ caro hai người</a></div>
            <div class="col"><img src="assets/img/cong-nhan-cho-hang-6.png" style="width:150px;"><a href="#">công nhân chở hàng</a></div>
            <div class="col"><img src="assets/img/garen-om-tru.png" style="width:150px;"><a href="#">garen ôm trụ</a></div>
        </div>
        <div class="row">
            <div class="col"><img src="assets/img/gau-bong-diet-zombie.png" style="width:150px;"><a href="#">gấu bông diệt zombie</a></div>
            <div class="col"><img src="assets/img/hoa-qua-noi-gian-2.1.png" style="width:150px;"><a href="#">hoa quả nổi giận</a></div>
            <div class="col"><img src="assets/img/nguoi-que-dai-chien-hay.png" style="width:150px;"><a href="#">người que đại chiến</a></div>
            <div class="col"><img src="assets/img/lego-tim-sao.png" style="width:150px;"><a href="#">lego tìm sao</a></div>
            <div class="col"><img src="assets/img/lien-quan-online.png" style="width:150px;"><a href="#">liên quân mobile </a></div>
        </div>
        <div class="row">
            <div class="col"><img src="assets/img/Game_AngryBird.jpg" style="width:150px;"><a href="#">Game_AngryBird</a></div>
            <div class="col"><img src="assets/img/dieu-khien-may-bay.png" style="width:150px;"><a href="#">điều khiển máy bay</a></div>
            <div class="col"><img src="assets/img/gunny-size-111x111-znd.jpg" style="width:150px;"><a href="#">gunny</a></div>
            <div class="col"><img src="assets/img/robot-ban-sung-105-size-111x111-znd.jpg" style="width:150px;"><a href="#">robot bắn súng</a></div>
            <div class="col"><img src="assets/img/robot-khung-long-khong-lo-105-size-111x111-znd.jpg" style="width:150px;"><a href="#">khủng long khủng lồ</a></div>
        </div>
        <div class="row" style="height:111px;">
            <div class="col-lg-9"></div>
            <div class="col" id="xemThem3">
                <p style="height:43px;font-size:21px;">Xem Thêm</p>
            </div>
        </div>
    </div>
    <div class="container" id="Next_Cont" style="height:150px;width:1001px;">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col" id="ChuyenTrang">
                <p>Trang:&nbsp;</p>
            </div>
            <div class="col" id="trang1"><button class="btn btn-primary" type="button" style="width:35px;background-color:rgb(255,255,255);color:rgb(21,15,15);font-size:16px;">1</button></div>
            <div class="col" id="trang2"><button class="btn btn-primary" type="button" style="width:33px;background-color:rgb(255,255,255);font-size:16px;color:rgb(21,8,8);">2</button></div>
            <div class="col" id="trang3"><button class="btn btn-primary" type="button" style="width:32px;background-color:rgb(255,255,255);color:rgb(31,35,37);">3</button></div>
            <div class="col" id="trangGiua"><button class="btn btn-primary" type="button" style="width:32px;background-color:rgb(255,255,255);color:rgb(31,35,37);">....</button></div>
            <div class="col-lg-3"></div>
        </div>
        <hr style="width:945px;height:0px;color:rgb(33,33,41);">
    </div>
    <div class="container" id="Intro" style="height:229px;width:1002px;">
        <div class="row" id="Intro1" style="height:50px;">
            <div class="col-lg-2">
                <p>GIỚI THIỆU</p>
            </div>
            <div class="col"></div>
        </div>
        <p id="gioithieu" style="height:140px;width:963px;margin:-1px;padding:1px;font-size:15px;"><br>Game Vui - Chơi game thỏa thích với hàng vạn game trực tuyến cho máy tính và điện thoại, chơi game miễn phí trên&nbsp;<a href="https://gamevui.vn/">GameVui.vn</a>. Game Vui tự hào là website đầu tiên về game giải trí trực tuyến không cần cài
            đặt và có số lượng game lớn nhất hiện nay. Game Vui liên tục cập nhật nhiều game hay mỗi ngày với nhiều thể loại game như&nbsp;<a href="https://gamevui.vn/hanh-dong/games">game hành động</a>,&nbsp;<a href="https://gamevui.vn/game-dua-xe/games">game đua xe</a>,&nbsp;
            <a
                href="https://gamevui.vn/game-vui/games">game vui</a>,&nbsp;<a href="https://gamevui.vn/game-ban-gai/games">game bạn gái</a>,&nbsp;<a href="https://gamevui.vn/game-van-phong/games">game văn phòng</a>,&nbsp;<a href="https://gamevui.vn/game-tre-em/games">game trẻ em</a>,&nbsp;<a href="https://gamevui.vn/game-kinh-dien/games">game kinh điển</a>,&nbsp;
                <a
                    href="https://gamevui.vn/phieu-luu/games">game phiêu lưu</a>,&nbsp;<a href="https://gamevui.vn/game-ban-sung/games">game bắn súng</a>,&nbsp;<a href="https://gamevui.vn/game-nau-an/games">game nấu ăn</a>,&nbsp;<a href="https://gamevui.vn/thoi-trang/games">game thời trang</a>,&nbsp;
                    <a
                        href="https://gamevui.vn/game-bong-da/games">game bóng đá</a>,&nbsp;<a href="https://gamevui.vn/game-dao-vang/games">game đào vàng</a>,&nbsp;<a href="https://gamevui.vn/game-kim-cuong/games">game kim cương</a>,&nbsp;<a href="https://gamevui.vn/game-the-thao/games">game thể thao</a>,&nbsp;
                        <a
                            href="https://gamevui.vn/game-hoat-hinh/games">game hoạt hình</a>,&nbsp;<a href="https://gamevui.vn/game-kinh-dien/games">game kinh điển</a>,&nbsp;<a href="https://gamevui.vn/game-tri-tue/games">game trí tuệ</a>&nbsp;và nhiều game hay nhất<br><br><br></p>
        <hr>
    </div>
    <div class="container" id="Bottom" style="height:193px;width:1001px;">
        <div class="row" id="row_bottom" style="height:193px;width:1001px;">
            <div class="col" id="left_bottom">
                <div class="row" id="Gioi_thieu" style="height:50px;">
                    <div class="col">
                        <p style="font-size:20px;">Thông tin chính sách.</p>
                    </div>
                </div>
                <div class="row" id="ThongTin" style="height:143px;">
                    <div class="col">
                        <div class="row" style="height:43px;">
                            <div class="col"><a href="formInfor.php">Facebook</a></div>
                        </div>
                        <div class="row" style="height:44px;">
                            <div class="col"><a href="formInfor.php">Email</a></div>
                        </div>
                        <div class="row" style="height:45px;">
                            <div class="col"><a href="formInfor.php">Sđt liên hệ</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row" style="height:44px;">
                            <div class="col"><a href="formInfor.php">Giới thiệu</a></div>
                        </div>
                        <div class="row" style="height:43px;">
                            <div class="col"><a href="formInfor.php">Chính sách</a></div>
                        </div>
                        <div class="row" style="height:38px;">
                            <div class="col"><a href="formInfor.php">Điều khoản liên hệ</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" id="right_bottom">
                <h1 style="font-size:26px;">Thông tin liên hệ</h1>
                <p>địa chỉ: Chịu trách nhiệm nội dung: Nguyễn Đức Duyên. ©2018 Công ty Cổ phần Mạng trực tuyến META Địa chỉ: 56 Duy Tân, Dịch Vọng Hậu, Cầu Giấy, Hà Nội. Điện thoại: 024 2242 6188. Email: info@meta.vn. Giấy phép cung cấp dịch vụ trò chơi
                    điện tử trên mạng số 107/GCN-PTTH&amp;TTĐT.</p>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>
</body>

</html>