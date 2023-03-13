<?php
include('inc/connect.php');
$adminid = $_SESSION['id'];
//Luật sư tư vấn
if(isset($_POST['addbd'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO luatsutuvan ( demuc, tieude, anh, noidung, taikhoanluatsu_id) 
    VALUES ( '{$loaibd}', '{$tieude}', '{$image}', '{$noidung}', '{$adminid}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: luatsutuvan.php?msg=1");
    } 
    else {
        header("Location: luatsutuvan.php?msg=2");
    }
}
if(isset($_POST['editbd'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `luatsutuvan` 
        SET `tieude`='{$tieude}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: luatsutuvan.php?msg=1");
        } 
        else {
            header("Location: luatsutuvan.php?msg=2");
        }
    }
    else{
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "./image/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE `luatsutuvan` 
        SET `tieude`='{$tieude}',`anh`='{$image}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: luatsutuvan.php?msg=1");
        } 
        else {
            header("Location: luatsutuvan.php?msg=2");
        }
    }
    
}
if(isset($_POST['deletebd'])){
    $id  = $_POST['id'];
        $query = "DELETE FROM luatsutuvan WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        header("Location: luatsutuvan.php?msg=1");
    
}
//Đăng ký kinh doanh
if(isset($_POST['adddkkd'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO dangkykinhdoanh ( demuc, tieude, anh, noidung, taikhoanluatsu_id) 
    VALUES ( '{$loaibd}', '{$tieude}', '{$image}', '{$noidung}', '{$adminid}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: dangkykinhdoanh.php?msg=1");
    } 
    else {
        header("Location: dangkykinhdoanh.php?msg=2");
    }
}
if(isset($_POST['editdkkd'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `dangkykinhdoanh` 
        SET `tieude`='{$tieude}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: dangkykinhdoanh.php?msg=1");
        } 
        else {
            header("Location: dangkykinhdoanh.php?msg=2");
        }
    }
    else{
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "./image/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE `dangkykinhdoanh` 
        SET `tieude`='{$tieude}',`anh`='{$image}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: dangkykinhdoanh.php?msg=1");
        } 
        else {
            header("Location: dangkykinhdoanh.php?msg=2");
        }
    }
    
}
if(isset($_POST['deletedkkd'])){
    $id  = $_POST['id'];
        $query = "DELETE FROM dangkykinhdoanh WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        header("Location: dangkykinhdoanh.php?msg=1");
    
}
//Dịch vụ sổ đỏ
if(isset($_POST['adddvsd'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO dichvusodo ( demuc, tieude, anh, noidung, taikhoanluatsu_id) 
    VALUES ( '{$loaibd}', '{$tieude}', '{$image}', '{$noidung}', '{$adminid}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: dichvusodo.php?msg=1");
    } 
    else {
        header("Location: dichvusodo.php?msg=2");
    }
}
if(isset($_POST['editdvsd'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `dichvusodo` 
        SET `tieude`='{$tieude}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: dichvusodo.php?msg=1");
        } 
        else {
            header("Location: dichvusodo.php?msg=2");
        }
    }
    else{
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "./image/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE `dichvusodo` 
        SET `tieude`='{$tieude}',`anh`='{$image}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: dichvusodo.php?msg=1");
        } 
        else {
            header("Location: dichvusodo.php?msg=2");
        }
    }
    
}
if(isset($_POST['deletedvsd'])){
    $id  = $_POST['id'];
        $query = "DELETE FROM dichvusodo WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        header("Location: dichvusodo.php?msg=1");
    
}
//Bảo hộ Logo
if(isset($_POST['addbhlg'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO baohologo ( demuc, tieude, anh, noidung, taikhoanluatsu_id) 
    VALUES ( '{$loaibd}', '{$tieude}', '{$image}', '{$noidung}', '{$adminid}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: baohologo.php?msg=1");
    } 
    else {
        header("Location: baohologo.php?msg=2");
    }
}
if(isset($_POST['editbhlg'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `baohologo` 
        SET `tieude`='{$tieude}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: baohologo.php?msg=1");
        } 
        else {
            header("Location: baohologo.php?msg=2");
        }
    }
    else{
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "./image/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE `baohologo` 
        SET `tieude`='{$tieude}',`anh`='{$image}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: baohologo.php?msg=1");
        } 
        else {
            header("Location: baohologo.php?msg=2");
        }
    }
    
}
if(isset($_POST['deletebhlg'])){
    $id  = $_POST['id'];
        $query = "DELETE FROM baohologo WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        header("Location: baohologo.php?msg=1");
    
}
//Dịch vụ khác
if(isset($_POST['adddvk'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO dichvukhac ( demuc, tieude, anh, noidung, taikhoanluatsu_id) 
    VALUES ( '{$loaibd}', '{$tieude}', '{$image}', '{$noidung}', '{$adminid}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: dichvukhac.php?msg=1");
    } 
    else {
        header("Location: dichvukhac.php?msg=2");
    }
}
if(isset($_POST['editdvk'])){
    $tieude = $_POST['tieude'];
    $noidung  = $_POST['noidung'];
    $loaibd = $_POST['loaibd'];
    $id  = $_POST['id'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `dichvukhac` 
        SET `tieude`='{$tieude}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: dichvukhac.php?msg=1");
        } 
        else {
            header("Location: dichvukhac.php?msg=2");
        }
    }
    else{
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "./image/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE `dichvukhac` 
        SET `tieude`='{$tieude}',`anh`='{$image}',`demuc`='{$loaibd}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: dichvukhac.php?msg=1");
        } 
        else {
            header("Location: dichvukhac.php?msg=2");
        }
    }
    
}
if(isset($_POST['deletedvk'])){
    $id  = $_POST['id'];
        $query = "DELETE FROM dichvukhac WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        header("Location: dichvukhac.php?msg=1");
    
}


?>
 