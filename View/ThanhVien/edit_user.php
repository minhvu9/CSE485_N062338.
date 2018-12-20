<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa thông tin</title>
</head>
<body>
    <div class="content">
        <div class="list">Danh sách</div>
            <div class="chinhsuathongtin">
            <h4>Sửa thông tin thành viên</h4>
            <form action="" method ="POST">
                <table>
                    <tr>
                        <td>Nhập id: </td>
                        <td><input type="text" name = "id" placehoder ="Mã user"></td>
                    </tr>
                    <tr>
                        <td>Tên thành viên: </td>
                        <td><input type="text" name= "hoten" placeholder="Tên thành viên"></td>
                    </tr>
                    <tr>
                        <td>Năm sinh: </td>
                        <td><input type="text" name= "namsinh" placeholder="Năm sinh"></td>
                    </tr>
                    <tr>
                        <td>Quê quán</td>
                        <td><input type="text" name = "quequan" placeholder = "Quê quán"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name ="edit_user" placehoder = "Sửa thông tin"></td>
                    </tr>
                </table>
            </form>
            </div>
    </div>
</body>
</html>