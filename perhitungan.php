<?php
 $bilangan_1 = $_REQUEST['code1'];
 $bilangan_2 = $_REQUEST['code2'];

 $tambah = $bilangan_1 + $bilangan_2;
 $kurang = $bilangan_1 - $bilangan_2;
 $kali = $bilangan_1 * $bilangan_2;
 ?>
<html>
    <body>
       <form>
        <table width="400" border="1">
            <tr>
                <td colspan="2" width="200" align="center">hasil</td>
            </tr>
            <tr>
                <td width="200"><?=$bilangan_1;?>+<?=$bilangan_2;?></td>
                <td><?=$tambah;?></td>
            </tr>
            <tr>
                <td width="200"><?=$bilangan_1;?>-<?=$bilangan_2;?></td>
                <td><?=$kurang;?></td>
            </tr>
            <tr>
                <td width="200"><?=$bilangan_1;?>*<?=$bilangan_2;?></td>
                <td><?=$kali;?></td>
            </tr>
            <tr>
                <td colspan="2" width="400" align="center">===</td>
            </tr>
        </table>
      </form>
    </body>
</html>

