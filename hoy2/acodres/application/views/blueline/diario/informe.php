<?
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=nombre_del_archivo.xls");
header("Pragma: no-cache");
header("Expires: 0");?>
       
            <table >
              
                                            <thead >
                                                <tr class="headings" >
                                                  <th><P ALIGN="center">FECHA</</P></th>
                                                  <th><P ALIGN="center">VENTA ALIMENTOS</</P></th>
                                                  <th><p align="center">VENTA BEBIDAS</p></th>
                                                  <th><p align="center">CUBIERTOS</p></th>
                                                  <th><p align="center">CHEQUE PROMEDIO ALIMENTOS</p></th>
                                                  <th><p align="center">CHEQUE PROMEDIO BEBIDAS</p></th>
                                                  <th><p align="center">CHEQUE GENERAL</p></th>

                                                 </tr>
                                            </thead>

                                           <tbody>
                                          <?php  $x=0; foreach ($items as $value): $x++; ?>
                                          <tr class="table-flag-blue">
                                    
                                     <td ALIGN="center"><?=date("d-m-Y",strtotime($value->fecha));?></td>
                                     <td ALIGN="center"><?=number_format($value->alimentos,  0, '', '.');?></td>
                                     <td ALIGN="center"><?=number_format($value->bebidas, 0, '', '.');?></td>
                                     <td ALIGN="center"><?=number_format($value->cubiertos, 0, '', '.');?></td>
                                     <td ALIGN="center"><?php echo number_format($cpa=$value->alimentos/$value->cubiertos, 0, '', '.');   ?></td>
                                     <td ALIGN="center"><?php echo number_format($cpb=$value->bebidas/$value->cubiertos, 0, '', '.'); ?></td> 
                                     <td ALIGN="center"><?php echo number_format($general=$cpa+$cpb, 0, '', '.'); ?></td>
                     
                                        
                                          
                                        
                                            </tr>

             
                                 <?php   endforeach;?> 
                
 
             
                               </tbody>




                          </table>