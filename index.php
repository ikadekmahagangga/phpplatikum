<?php
 $code1 = $_REQUEST['bilangan_1']
 $code2 = $_REQUEST['bilangan_2']

echo $code1 + $code2 = $tambah;
echo $code1 - $code2 = $kurang;

<html>
    <body>
    <form name= form2 >
        <table width="400" border="1">
            <tr>
                <td colspan="2" width="400" align="center">perhintungan_bilangan</td>
            </tr>
            <tr>
                <td width="200"><?=$code1;?>+<?=$code2;?></td>
                <td><?=$tambah;?></td>
            </tr>
            <tr>
                <td width="200"><?=$code1;?>-<?=$code2></td>
                <td><?=$kurang;?></td>
            </tr>
            <tr>
                <td colspan="2" width="400"></td>
            </tr>
        </table>
    </form>
    <body>
<html>
?>