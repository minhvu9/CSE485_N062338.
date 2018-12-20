<?php

    class Database{
        private $hostname = "localhost";
        private $severname = "root";
        private $password = "";
        private $db = "qlthanhvien_mvc";

        private $conn = NULL;
        private $result = NULL;

        public function connect(){
            $this->conn = new mysqli($this->hostname, $this->severname, $this->password, $this->db);
            if(!$this->conn){
               echo "kết nối thất bại";
               exit(); 
            }else{
                mysqli_set_charset($this->conn,"utf8");
            }
            return $this->conn;
        }

        //thực thi câu lệnh truy vấn
        public function implement($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        //phương thức lấy dữ liệu
        public function getData(){
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }

        public function getAllData(){
            if(!$this->result){
                $data = 0;
            }else{
                while($datas = $this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
        }

        //phương thức đếm số bản ghi

        //phương thức thêm dữ liệu
        public function InsertData($hoTen, $namSinh, $queQuan){
            $sql = "Insert into thanhvien(id, hoTen, namSinh, queQuan) 
            values(null,'$hoTen','$namSinh','$queQuan')";
            return $this->result($sql);
        }

        //phương thức sửa dữ liệu
        public function updateData($id, $hoTen, $namSinh, $queQuan){
            $sql = "update thanhvien set hoTen = '$hoTen',
             namSinh ='$namSinh', queQuan = '$queQuan' where id = '$id'";
             return $this->result($sql);
        }

        //phương thức xóa
        public function delete($id){
            $sql = "delete from thanhvien where id = '$id'";
            return $this->result($sql);
        }

    }

?>