<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm thành viên - Quản lý thành viên</title>
</head>
<body>
    <div class="content">
        <a href="" class ="list">Danh sách</a>
        <div class="dangkythanhvien">
            <h4>Thêm thành viên</h4>
            <form action="" method="POST">
                <table>
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
                        <td><input type="submit" name="add_user" value="Thêm mới user"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div> 
</body>
</html>