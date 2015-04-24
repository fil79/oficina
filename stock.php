
<?php

include ('includes/config.php');
include ('includes/mysql.php');
include ('includes/session_start.php');
include ('includes/funcoes.php');
include ('includes/Reading.php');
$dbo = new DB();
$reading = new Reading();

$tit = "Stock";

$SessionID = $_SESSION['id'];
$sql ="SELECT * from utilizadores_permissions WHERE user_id=$SessionID and menu_id=3";
$result = $dbo->query($sql);   	  
while($row1 = mysql_fetch_array ($result)){	
$Tipo = $row1['TipoAcesso'];  
}

if ($Tipo == 0){
	echo "<center>Não tem permissões para esta página<br><br><a href='dashboard.php'>Voltar</a></center>";
	exit;
}

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
    <script id="_OSrequestInfoScript" type="text/javascript">(function(global) { global.outsystems = global.outsystems || {};global.outsystems.internal = global.outsystems.internal || {};global.outsystems.internal.requestInfo = {requestKey:'59a93108-0c1f-402c-9674-06f960753c99',visitorKey:'092c2729-e113-44ff-93da-6d5680e4c7c5',visitKey:'57954c04-2cde-4fd6-82d2-089f1dc8214e',sessionKey:'cc75706e-58d8-864e-56b9-d1412ad4d6ba',userKey:'0282ae38-6e8a-0c63-5366-9e84bd9fc3e8',username:'isp2017439',environmentKey:'da9355e1-e60b-4be6-81bb-cc4bf7c48e1e',frontendName:'ptsrv000out01',applicationKey:'00000000-0000-0000-0000-006f74686572',applicationName:'Independent Modules',espaceKey:'66497887-96ec-4f99-be95-b768b5661b14',espaceName:'Clients',webScreenKey:'ec4eda96-fa8e-487a-b0e8-13cfb9dffe5c',webScreenName:'Clients_General_Show',tenantKey:'0e6aeb13-4c25-7633-135a-9f51e4f42444',tenantName:'UserManagementBR'}})(this);</script>
    <script src="js/_osjs.js?8_0_1_7" type="text/javascript" charset="UTF-8"></script>
    <script src="js/_jquery-1-4-2.js?8_0_1_7" type="text/javascript" charset="UTF-8"></script>
    <script src="js/_OSGlobalJS.js?8322" type="text/javascript" charset="UTF-8"></script>
    <script src="js/Header.js?8157" type="text/javascript" charset="UTF-8"></script>
    <script src="js/FastMenu_NL.js?8157" type="text/javascript" charset="UTF-8"></script>
    <script src="js/Help.js?8157" type="text/javascript" charset="UTF-8"></script>
    <script src="js/ServerSideTabs.js?8157" type="text/javascript" charset="UTF-8"></script>
    <script src="js/LoadingScreenBlock.js?8157" type="text/javascript" charset="UTF-8"></script>
<link rel="stylesheet" type="text/css" href="css/table.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
		<style type="text/css" title="currentStyle">
			@import "media/css/TableTools.css";
		</style>
 
	<script type="text/javascript" charset="utf-8" src="media/js/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" src="media/js/ZeroClipboard.js"></script>
	<script type="text/javascript" charset="utf-8" src="media/js/TableTools.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
	<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
		    $(document).ready(function() {
		       $('.dttabela').dataTable( {
					"bJQueryUI": true,
					"iDisplayLength": 50,
					"aaSorting": [[ 6, "asc" ]] ,
					"bPaginate": false,
					"sDom": '<"H"Tfr>t<"F"ip>'
		       } );
		     } )
</script>


</head>
   <body onclick="hideSubMenu();">
    
<div>

</div>


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
							<!--MENU-->										</tr>
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
										<td class="Heading1"><table id="ConnectFramework_wtBlock10_block_wtTable1" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0" class="FastMenu">
											<tr>
												<td style="width: 100%"></td>
												<td nowrap="nowrap"><div  align="right"></div ></td>
												<td nowrap="nowrap"><div  align="right"></td>
												
											</tr>
										</table></td>
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
										<td></td>
									</tr>



									
											<tr>
												<td class="TitleTopic"><span id="ConnectFramework_wt7_block_wt1_wtTABZONE">
													<table class='tabs' cellpadding='0' cellspacing='0'>
														<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
														<td  id='TAB1'   ><a  onclick="javascript:showProcessing('processing');" href='abastecimento_mes.php'>&nbsp;Abastecimentos Mês</a></td>
														<td  id='TAB5' ><a  onclick="javascript:showProcessing('processing');" href='abastecimento.php'>&nbsp;Abastecimento Totais</a></td>
														<? if ($Tipo == 1){ ?>
														<td  id='TAB2'  ><a  onclick="javascript:showProcessing('processing');" href='novo_abastecimento.php'>&nbsp;Novo Abastecimento</a></td>
														<? } ?>
														<td  id='TAB3'><a  onclick="javascript:showProcessing('processing');" href='stock.php'>&nbsp;Stock</a></td>
														<? if ($Tipo == 1){ ?>
														<td  id='TAB4'><a  onclick="javascript:showProcessing('processing');" href='update_stock.php'>&nbsp;Entrada Stock</a></td>
														<? } ?>
															
															</tr></table><script type="text/javascript">initializeMenu();</script><iframe id="iframe" style="width: 0px; height: 0px; left: 0px; position: absolute; top: 0px; z-index: 1000; display: none;" src="javascript:false;" frameborder="0" scrolling="no"></iframe>
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
															<td class="formContainer"  style="background:#9faac3;"><table id="wt2_wtTable1" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
															<tr>
																<td></td>
															</tr>
														</table><table id="wt2_wtTable2" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
															<tr>
																<td>
														          

																  
																  
																  
	
  					<table class="dttabela" cellpadding="0" cellspacing="0" border="0" id="wt2_wtCategoryTableRecord" style="width: 100%; border-spacing: 0px">
			                           <thead>
                                <tr>
					
                                        <th>Litros</th>
                                        <th>Preço por Litro</th>
                                       
                                        
                                        <!-- <th>Valor Total</th><th>Acção</th>-->
								</tr>	
						    </thead>
                                <tbody>

                                     <?php

                              
                                     $sql ="SELECT * from stock";


                                      $result = $dbo->query($sql);

                                      while($row1 = mysql_fetch_array ($result)){

						

							?>
									<tr valign="top">
										<td><?=number_format($row1['litros'],2)?> Litros</td>
										
										<td align="right"><?=number_format($row1['media_litro'],3)?> &euro;</td>

									
									<!--										<td align="right"><?=number_format($row1['preco'],2)?>  &euro;</td>	            <td align="right" style="padding-left:10px;">
													
													<a href="edita_stock.php?id=<?=$row1['id']?>" class="btn btn-small" alt="Actualizar"  Title="Actualizar" > <img width="16" height="16" border="0" alt="Actualizar" title="Actualizar" src="images/ico-support-01.png"></a>
												
											   </td>-->
									</tr>	

                                    <?php

                                    

                                                        }

                                    ?>

                                

                                </tbody>
																</table>
															  
																  
																  
	<br><br>
  					<table class="dttabela" cellpadding="0" cellspacing="0" border="0" id="wt2_wtCategoryTableRecord" style="width: 100%; border-spacing: 0px">
			                           <thead>
                                <tr>
									<td colspan="5">Histórico do Stock </td>
								</tr>
								<tr>
					
                                        <th style="width:200px;">Data</th>
                                        <th style="width:100px;">Utilizador</th>
                                        <th>Descrição</th>
                                        <th>Valor</th>
                                        <th>Nº Litros</th>
                                        <th>Preço/Litro</th>
										<th>Ficheiro</th>
								</tr>	
						    </thead>
                                <tbody>

                                     <?php
									 $sql ="SELECT * from historico_stock";
                                     $result = $dbo->query($sql);

                                      while($row1 = mysql_fetch_array ($result)){
										$ficheiro = ($row1['ficheiro']=="")? $ficheiro="<a href='ficheiros_abastecimento.php?id=".$row1['id']."'>Não</a>" : $ficheiro="<a href='".$row1['ficheiro']."' target='_blank'><img width='16' height='16' border='0' alt='Ficheiro' title='Ficheiro' src='images/acroread.png'></a>";
										$plTot+= ($row1['preco_litro']*$row1['litros']);	
										$plTot1+= ($row1['litros']);	
							?>
									<tr valign="top">
                                               <td><?=utf8_encode($row1['data_abastecimento'])?></td>
                                               <td align="center"><?=mostraJoin($row1['user'],"utilizadores","user_id","username")?></td>
                                               <td align="right">Abastecimento</td>
                                               <td align="right"><?=number_format($row1['preco_litro']*$row1['litros'],2)?> &euro;</td>
                                               <td align="right"><?=($row1['litros'])?></td>
                                               <td align="right"><?=number_format($row1['preco_litro'],3,'.',',')?> &euro;</td>
                                               <td align="right"><?=$ficheiro?> </td>
									</tr>	

                                    <?php

                                    

                                                        }

                                    ?>

                                

                                </tbody>
                                <tfoot>
                                <tr>
                                	<td>&nbsp;</td>
                                	<td>&nbsp;</td>
                                	<td>&nbsp;</td>
                                	<td align="right">&nbsp;<?=number_format($plTot,2 )?></td>
                                	<td align="right">&nbsp;<?=number_format($plTot1,2 )?></td>
                                </tr>
                                </tfoot>


																</table>

													
																
																</td>
															</tr>
														</table></td>
													</tr>
												</table></td>
											</tr>
										</table></td>
									</tr>
									<tr>
										<td class="buttons"><table id="wtTable34" style="width: 100%; border-spacing: 0px" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td class="buttonsTitle"></td>
												<td class="buttonsTitleRight"> </td>
											</tr>
										</table></td>
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
