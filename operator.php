<html>
<body>
 
    <?php
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
    ?>
 
    <form method="post" action="">
    <table frame="box" style="background-color:#2F495A; border:#2F495A;">
        <tr width="335" height="75">

            <td width="100" align="center">
                <input type="text" name="bil1" style="width:90; height:45; font-size:23px; text-align: center" placeholder="Bil. 1"
                <?php if(isset($_POST['cancel']))
                { ?>
                    value=""
                <?php }
                    else
                { ?>
                    value="<?php echo $bil1; ?>"
                <?php } ?>
                />
            </td>
             
            <td width="100" align="center">
                <input type="text" name="bil2" style="width:90; height:45; font-size:23px; text-align: center" placeholder="Bil. 2"
                <?php if(isset($_POST['cancel']))
                { ?>
                    value=""
                <?php }
                    else
                { ?>
                    value="<?php echo $bil2; ?>"
                <?php } ?>
                />
            </td>
             
            <td width="35" style="font-size: 30px; color:white;" align="center"><b>=</b></td>
            <td width="100" align="center">
                <input type="text" style="width:90; height:45; font-size:23px; text-align: center" placeholder="Hasil"
                <?php if(isset($_POST['tambah']))
                { ?>
                    value="<?php echo $bil1 + $bil2; ?>" 
                <?php } 
                 
                Else If(isset($_POST['kali']))
                { ?>
                    value="<?php echo $bil1 * $bil2; ?>" 
                <?php }
                 
                Else If(isset($_POST['bagi']))
                { ?>
                    value="<?php echo $bil1 / $bil2; ?>" 
                <?php }
                 
                Else If(isset($_POST['kurang']))
                { ?>
                    value="<?php echo $bil1 - $bil2; ?>" 
                <?php }
                 
                Else If(isset($_POST['mod']))
                { ?>
                    value="<?php echo $bil1 % $bil2; ?>" 
                <?php } ?>    
                />
            </td>
        </tr>
         
        <tr height="50">
            <td colspan=4 align="center">
                <input type="submit" name="kali" value="x" style="font-size:30px; width:154; height:45; border:#F2F2F2;" />
				                <input type="submit" name="bagi" value="/" style="font-size:30px; width:154; height:45; border:#F2F2F2;" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
         
        <tr height="50">
            <td colspan=4 align="center">
                <input type="submit" name="cancel" value="Cancel" style="font-size:23px; width:154; height:45; color:white; background-color:#BF3D3D; border:#BF3D3D;" />
            </td>
        </tr>
         
    </table>
</body>
</html>