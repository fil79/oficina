<?php
header('Cache-Control: no-store, private, no-cache, must-revalidate');
header('Cache-Control: pre-check=0, post-check=0, max-age=0, max-stale = 0', false);
header('Pragma: public');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Expires: 0', false);
header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
header('Pragma: no-cache');

include ('includes/config.php');
include ('includes/mysql.php');
include ('includes/session_start.php');
include ('includes/funcoes.php');
include ('includes/Form.php');
$dbo = new DB();
$form = new Form();
$tit = "Abastecimento";

$SessionID = $_SESSION['id'];
$sql ="SELECT * from utilizadores_permissions WHERE user_id=$SessionID and menu_id=3";
$result = $dbo->query($sql);   	  
while($row1 = mysql_fetch_array ($result)){	
$Tipo = $row1['TipoAcesso'];  
}

if ($Tipo == 0 || $Tipo == 2){
	echo "<center>Não tem permissões para esta página<br><br><a href='dashboard.php'>Voltar</a></center>";
	exit;
}


$sql="SELECT* from stock order by id DESC LIMIT 1";
$result = $dbo->query($sql) or die($sql.mysql_error()); 
$linha = mysql_fetch_assoc($result);
$preco_litro = $linha['media_litro'];
$preco_litro = number_format($preco_litro,3);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" >
  <head><title>
	Oficina 24 Horas
</title><link type="image/x-icon" rel="shortcut icon" href="images/icon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" /><meta http-equiv="Content-Style-Type" content="text/css" />
    <link href="css/_Basic.css?8322" type="text/css" rel="stylesheet" />
    <link href="css/Notification.css?8157" type="text/css" rel="stylesheet" />
    <link href="css/Theme.ConnectFramework.css?8322" type="text/css" rel="stylesheet" />
    <link href="css/Clients_General_Show.css?8322" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>



    <script src="js/Header.js?8157" type="text/javascript" charset="UTF-8"></script>
    <script src="js/FastMenu_NL.js?8157" type="text/javascript" charset="UTF-8"></script>
    <script src="js/Help.js?8157" type="text/javascript" charset="UTF-8"></script>
    <script src="js/ServerSideTabs.js?8157" type="text/javascript" charset="UTF-8"></script>
    

	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
	<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript" charset="utf-8"></script>


	<!-- start DROPDOWNS: CSS -->
	    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
	<!-- end DROPDOWNS: CSS -->	
    <script type="text/javascript">
        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
               // 'selectedText': 'cat'
            });

            // $('.selectpicker').selectpicker('hide');
        });
    </script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#edit").validationEngine();

       
            $(".datepicker1").mask("2099-99-99 99:99");     
            $(".datepicker").mask("2099-99-99 99:99");     
    });

	function checkHELLO(field, rules, i, options){
		if (field.val() != "HELLO") {
			// this allows to use i18 for the error msgs
			return options.allrules.validate2fields.alertText;
		}
	}
</script>
</head>
   <body>
 
 <form id="edit" action="bin/insere_abastecimento.php?id=<?=$linha['id']?>" method="post" enctype="multipart/form-data">


								<input type='hidden' value='<?=$preco_litro?>' name='preco_litro'>
								<input type='hidden' value='abastecimento' name='varNomeTabela'>
								<input type='hidden' value='abastecimento.php' name='local'>
								<input type='hidden' value='<?echo $Tipo;?>' name='TipoUser'>

<table id="wtTable19" style="width: 100%; height: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td class="main" style="vertical-align: top"><table id="wtTable21" style="width: 100%; height: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td style="height: 10px"><span id="ConnectFramework_wtBlock2_block"><span id="ConnectFramework_wtBlock2_block_wtConnectFramework_e_Theme_Calendar"><script src="js/ConnectFramework.js" language="javascript" type="text/javascript">
  <!-- Hide script from old browsers  -->
</script><link rel="StyleSheet" href="css/calendar_theme.css" type="text/css" media="all"></span><DIV class="noprint"><table id="ConnectFramework_wtBlock2_block_wtTable1" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td class="header" style="vertical-align: top"><table id="ConnectFramework_wtBlock2_block_wtTable4" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td><table id="ConnectFramework_wtBlock2_block_wtTable2" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td nowrap="nowrap" style="vertical-align: top">
										<a id="ConnectFramework_wtBlock2_block_wt62" tabindex="3" href="dashboard.php">
												<h2>OFICINA 24 HORAS</h2>
										</a>
									 </td>
							
							<!--MENU-->
							<!--MENU-->
							<!--MENU-->
								<?
									include("includes/menu_top.php")
								?>
							<!--MENU-->
							<!--MENU-->
							<!--MENU-->	
									</tr>
								</table></td>
							</tr>
							<tr>
								<td style="height: 3px"></td>
							</tr>
							<tr>
								<td class="status"><table id="ConnectFramework_wtBlock2_block_wtTable5" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td class="statusText"><div  align="left"><span class="Bold">Utilizador:</span><?=$_SESSION['username']?>   <a id="ConnectFramework_wtBlock2_block_wtLink3" tabindex="9" class="small" href="dados_pessoais.php">Dados pessoais</a></div ></td>
										<td align="right"><div  class="Paragraph statusText" align="right">
										<input style="FONT:12px arial,verdana,helvetica,sans-serif;padding-right:2px;MARGIN-RIGHT:2px;BORDER-COLLAPSE:collapse;BORDER:none;BACKGROUND-COLOR:#969696;COLOR:White;" class="relogio"  name="relogio" type="text" maxlength="34" size="54" id="ConnectFramework_wtBlock2_block_wtdataCompleta" tabindex="10" />
										<span style="display: none;" class="ValidationMessage" id="ValidationMessage_ConnectFramework_wtBlock2_block_wtdataCompleta"></span><script>dataHoraFunction('ConnectFramework_wtBlock2_block_wtdataCompleta')</script></div ></td>
									</tr>
								</table></td>
							</tr>
						</table></td>
					</tr>
				</table></DIV></span></td>
			</tr>
			<tr>
				<td style="vertical-align: top"><table id="wtTable23" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="width: 10px;vertical-align: top"><DIV class="noprint" id="Col1"><table id="ConnectFramework_wtBlock4_block_wtTable1" style="width: 147px; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
							
							
							
							<!--MENU-->
							<!--MENU-->
							<!--MENU-->
								<?
									include("includes/menu.php")
								?>
							<!--MENU-->
							<!--MENU-->
							<!--MENU-->	
							
							
							
						</table></DIV><script>CookieToggler()</script></td>
						
					
						<td class="centerStage" style="vertical-align: top"><table id="wtTable8" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td class="path"><a id="wtLink8" tabindex="11" href="dashboard.php">Home</a> </td>
							</tr>
							<tr>
								<td><table id="wtTable9" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td class="Heading1"><?=$tit?></td>

									</tr>
								</table></td>
							</tr>

							<tr>
								<td>
							<!--CONTAINER-->
							<!--CONTAINER-->
							<!--CONTAINER-->							
								
								<table id="wtTable32" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
									



									
											<tr>
												<td class="TitleTopic"><span id="ConnectFramework_wt7_block_wt1_wtTABZONE">
													<table class='tabs' cellpadding='0' cellspacing='0'>
														<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
														<? if ($Tipo == 1 ){ ?>
														<td  id='TAB1'  ><a  onclick="javascript:showProcessing('processing');" href='abastecimento_mes.php'>&nbsp;Abastecimentos Mês</a></td>
														<td  id='TAB5' ><a  onclick="javascript:showProcessing('processing');" href='abastecimento.php'>&nbsp;Abastecimento Totais</a></td>

														<?}?>
														
														<td  id='TAB2'  class='on'   ><a  onclick="javascript:showProcessing('processing');" href='novo_abastecimento.php'>&nbsp;Novo Abastecimento</a></td>
														<? if ($Tipo == 1 ){ ?>
														<td  id='TAB3'><a  onclick="javascript:showProcessing('processing');" href='stock.php'>&nbsp;Stock</a></td>
														<td  id='TAB4'><a  onclick="javascript:showProcessing('processing');" href='update_stock.php'>&nbsp;Entrada Stock</a></td>
														<? } ?>							
															</tr></table>
															<ul class="mmenu" id="subareas"><li class="hdr">Outros Ecrãs</li></ul></span></td>
											</tr>	
									
								
									
									
									
									<tr>
										<td class="formContainer"><table id="wtTable1" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td></td>
											</tr>
										</table><table id="wtTable2" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td><table id="wt2_wtTable32" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
															<tr>
																<td class="ShowRecord"><table class="EditRecord" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">

																	<tr>
																		<td style="width: 150px" colspan="2"> </td>
																	</tr>
																</table>
																<table style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
																	<tr>
																		<td class="section">Criar Novo Abastecimento</td>
																	</tr>
												
																			
																	<tr>
																	<td class="FieldCaption" style="width: 150px">Viatura :</td>

																		<td class="EditRecord_Value"><span id="viatura1"><?=$form->CriaComboSelectNameWidthMatricula("viatura",5,"viatura","id","matricula",0,0,null,0);?></span>
																		<!--<a href="nova_viatura.php"><img src="images/icons/edit.gif" alt="Adicionar" width="20" height="20" title="Adicionar" style="cursor:pointer;" > </a>
																		-->
																		</td>
																		
																		<td class="FieldCaption" style="width: 150px">Motorista :</td>

																		<td class="EditRecord_Value">
																		
																		<input type='text' name='cliente'  class='validate[required] text-input'>


																		</td>
																		
																	</tr>
																	
																	
																	<tr>
																		<td class="FieldCaption" style="width: 150px">Kms:</td>

																		<td class="EditRecord_Value"><input type='text' name='kms' class='validate[required] text-input   smallInput tinySmall'></td>
																		  <input type="hidden" name="user" value="<?=$_SESSION['id']?>">
																		<td class="FieldCaption" style="width: 150px">Data Abastecimento:</td>

																		<td class="EditRecord_Value">
																		<input type='text' name='data_abastecimento'  class='validate[required] text-input   datepicker1'>
																		</td>
																		

																	
																		
																	</tr>
														
																	
																	<tr>
																		<td class="FieldCaption" style="width: 150px">Contador<br><small>Antes Abastecimento</small></td>
																		<td class="EditRecord_Value"><input type='text' name='contador' class='validate[required] text-input'></td></td>
																		<td class="FieldCaption" style="width: 150px">Contador<br><small>Depois Abastecimento</small></td>
																		<td class="EditRecord_Value"><input type='text' name='contador2' class='validate[required] text-input'></td></td>
	
																	</tr>
																	
																	 <tr>
																		<td class="FieldCaption" style="width: 150px">Litros <?="<strong>(disponiveis:".$linha['litros'].")</strong>"?> :</td>
																		<td class="EditRecord_Value"><input type='text' name='litros' class='validate[required,max[<?=$linha['litros']?>]] '></td>
																		<td class="FieldCaption" style="width: 150px">Número Talão  :</td>
																		<td class="EditRecord_Value"><input type='text' name='numero_talao'></td></td>
																	</tr>
																	<tr>
																	<td class="FieldCaption" style="width: 150px">Ficheiro  :</td>
																		<td class="EditRecord_Value" colspan="4" tabindex="3">
																				<input type="file" name="ficheiro">
																	</td>
																	</tr>
																		
																		
																
																	
																																				
																				
																		

																	
																	</tr>
																	

																			
																	
																			
																		</table> <br/></td>
																	</tr>
																</table></td>
															</tr>
														</table>
														</td>
													</tr>
												</table></td>
											</tr>
											<tr>
												<td class="buttons"><table id="wtTable12" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td class="buttonsTitle"></td>
														<td class="buttonsTitleRight"><div  class="Paragraph"><input  type="submit" value="Gravar" id="wt82" tabindex="43" class="Button" /></div ></td>
													</tr>
												</table></td>
											</tr></table></td>
									</tr>
								</table>
								
							<!--CONTAINER-->
							<!--CONTAINER-->
							<!--CONTAINER-->
								
								
								
								</td>
							</tr>
						</table></td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td style="height: 10px"><table id="ConnectFramework_wtBlock6_block_wtTable2" style="width: 100%; height: 2px; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="height: 2px"></td>
					</tr>
				</table><table id="ConnectFramework_wtBlock6_block_wtTable1" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td class="footer">&#169; 2014 Oficina 24 Horas</td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td>
<div id='prCover' class='prCover'>
<iframe id='iframe' style='width:107%;height:130%;left:0px;position:absolute;top:0px;z-index:1000;' src='about:blank' frameBorder='0' scrolling='no'></iframe>
</div><div class='processing' id='processing'><div><img id="ConnectFramework_wt245_block_wtimg" title="A processar o seu pedido..." alt="A processar o seu pedido..." src="images/processing.gif?8157" style="height:30px;width:30px;" /><script type='text/javascript'>
createBar(180,12,'#9FAAC3',0,'#7080A6','#7080A6',85,7);</script>A processar o seu pedido...</div></div></td>
			</tr>			
			
		</table></td>
	</tr>
</table>
    
 
</form> 

  </body>
</html>
