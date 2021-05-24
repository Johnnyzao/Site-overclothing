<?php
session_start();
?>
<script type="text/javascript"> </script>
<?php
include "header.php";
include "menu.php";
?>
<?php
$link=mysqli_connect("localhost","root","usbw");
mysqli_select_db($link,"overclothing");
?>
        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Adicionar produto</h2>
                    <div class="block">
                    	<form name="form1" action="" method="post" enctype="multipart/form-data">
                    		<table>
                    			<tr>
                    				<td>Nome Produto</td>
                    				<td><input type="text" name="pnm"></td>
                    			</tr>
                    			<tr>
                    				<td>Preço Produto</td>
                    				<td><input type="text" name="pprice"></td>
                    			</tr>
                    			<tr>
                    				<td>Imagem Produto</td>
                    				<td><input type="file" name="pimage"></td>
                    			</tr>
                    			<tr>
                    				<td>Categoria Produto</td>
                    				<td><select name="pcategory">
                    					<option value="Roupa_Homem">Roupa Homem</option>
                    					<option value="Roupa_Mulher">Roupa Mulher</option>
                    					<option value="Roupa_Crianca">Roupa Criança</option>
                    				</select></td>
                    			</tr>
                    			<tr>
                    				<td colspan="2" align="center"><input type="submit" name="submit1" value="Inserir"></td>
                    			</tr>
                         
                    		</table>
                    	</form>
                    </div>
                    <?php
                    if (isset($_POST["submit1"]))
                    {
                    	$v1=rand(1111,9999);
                    	$v2=rand(1111,9999);

                    	$v3=$v1.$v2;
                    	$v3=md5($v3);
                    	$fnm=$_FILES["pimage"]["name"];
                    	$dst="./product_image/".$v3.$fnm;
                    	$dst1="product_image/".$v3.$fnm;
                    	move_uploaded_file($_FILES["pimage"] ["tmp_name"],$dst);

                    	mysqli_query($link,"insert into product values('', '$_POST[pnm]',$_POST[pprice],'$dst1','$_POST[pcategory]')");
                    }
                    ?>
               
            </div>
            
</div>