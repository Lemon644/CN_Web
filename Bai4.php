<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $so_dau = isset($_POST["so_dau"]) ? intval($_POST["so_dau"]) : 0;
    $so_cuoi = isset($_POST["so_cuoi"]) ? intval($_POST["so_cuoi"]) : 0;
    $tong = 0;
    $tong_chan = 0;
    $tong_le = 0;
    $tich = 1;

    for ($i = $so_dau; $i <= $so_cuoi; $i++) {
        $tong += $i;
        $tich *= $i;

        if ($i % 2 == 0) {
            $tong_chan += $i;
        } else {
            $tong_le += $i;
        }
    }
}
?>
<form action="Bai4.php" method="post">
        <table width="728" border="1">
            <tr>
                <td width="122">&nbsp;</td>
                <td width="76">Số bắt đầu</td>
                <td width="169">
                    <input type="text" name="so_dau" id="textfield" value="<?php echo $so_dau; ?>"/>
                </td>
                <td width="152">Số kết thúc</td>
                <td width="175">
                    <input type="text" name="so_cuoi" id="textfield2" value="<?php echo $so_cuoi; ?>"/>
                </td>
            </tr>
            <tr>
                <td colspan="5">Kết quả
                    <label for="textfield3"></label>
                </td>
            </tr>
            <tr>
                <td>Tổng các số</td>
                <td colspan="4">
                    <input type="text" name="tong" id="textfield4" value="<?php echo $tong; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Tích các số</td>
                <td colspan="4">
                    <input type="text" name="tich" id="textfield5" value="<?php echo $tich; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Tổng các số chẵn</td>
                <td colspan="4">
                    <input type="text" name="tong_chan" id="textfield6" value="<?php echo $tong_chan; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Tổng các số lẻ</td>
                <td colspan="4">
                    <input type="text" name="tong_le" id="textfield7" value="<?php echo $tong_le; ?>"/>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <input type="submit" name="button" id="button" value="Tính toán" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>