
<div id="content">

    <div class="inner" style="min-height: 700px;">
        <div class="row">
            <div class="col-lg-12">
                <center><h1 style="text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9,
                            0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2),
                            0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);"> वानिकी फोरेस्टी अकादमी :: रिपोर्ट पैनल </h1></center>
            </div>
        </div>
        <hr />


        <div class="row">
            <div class="col-lg-12">
                <input id="btnExport" class="btn btn-primary btn-sm" type="button" value="EXPORT IN EXCEL">
                <input id="printTable" class="btn btn-primary btn-sm" type="button" value="PRINT REPORT">
                <hr>

                <table id="tblExport" border="1" cellpadding="3" cellspacing="5" class="table table-bordered sortableTable responsive-table">
                    <thead>
                    <th><img src="<?php echo Yii::app()->baseUrl; ?>/img/statelogo.png" /></th>
                    <th colspan="9" valign="middle"><center><h2> वानिकी फोरेस्टी अकादमी :: उत्तराखण्ड </h2></center></th>
<!--                    <th><img src="<?php echo Yii::app()->baseUrl; ?>/img/CampaLogo.jpg" /></th>-->
                    </thead>
                    <thead>
                    <thead>
<!--                    <th><?php echo FUsers::model()->getName($userid); ?></th>-->
                    <th colspan="10"><center style="color:green;"><h3> एल आई पी(Linear Inventory Plot) </h3></center></th>

                    </thead>
                    <thead>
                    <th><center>क्र. सं.</center></th>
                    <th><center>जनपद</center></th>
                    <th><center>भोगोलिक क्षेत्रफल(वर्ग किमी.)</center></th>                                              
                    <th colspan="4"><center>मूल्यांकन</center></th>                    
                    <th><center>भोगोलिक क्षेत्रफल का प्रतिशत</center></th>   
                    <th><center>परिवर्तन</center></th> 
                    <th><center>मलना</center></th> 
                    </thead>

                    <thead>
                    <th><center></center></th>
                    <th><center></center></th>
                    <th><center></center></th>                                              
                    <th><center>बहुत घने जंगल</center></th>
                    <th><center>आधुनिक घने जंगल</center></th>
                    <th><center>आधुनिक खुले जंगल</center></th>
                    <th><center>योग</center></th>
                    <th><center></center></th>   
                    <th><center></center></th>   
                    <th><center></center></th>   
                    </thead>


                    <thead>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>


                    </thead>

                    <tbody>

                        <?php
                        $t1 = 0;
                        $t2 = 0;
                        $t3 = 0;
                        $t4 = 0;
                        $t5 = 0;
                        $t6 = 0;
                     

                        $i = 1;


                        $sqld = "SELECT varsh,chain_no as t1,species as t2,tree_no as t3,dia as t4,dia_dia as t5,regeneration	 as t6 FROM lip  WHERE  user_id IN (" . $userid . ") ";

                        $source = Lip::model()->findAllBySql($sqld);

                        foreach ($source as $animal) {                        
                             
                            //all total variables
                            $t1+=$animal['t1'];
                            $t2+=$animal['t2'];
                            $t3+=$animal['t3'];
                            $t4+=$animal['t4'];
                            $t5+=$animal['t5'];
                            $t6+=$animal['t6'];                       
                           
                            ?>

                            <tr style="background:blanchedalmond;">
                                <td><?php echo $i; ?></td>                                                             
                                <td><?php echo $animal['t1']; ?></td>                                
                                <td><?php echo $animal['t2']; ?></td>
                                <td><?php echo $animal['t3']; ?></td> 
                                <td><?php echo Varsh::model()->getName($animal['varsh']); ?></td> 
                                <td><?php echo $animal['t4']; ?></td>                                                              
                                <td><?php echo $animal['t5']; ?></td>
                                <td><?php echo $animal['t6']; ?></td>

                            </tr>
                            <?php
                            $i++;
                        }                      
                     
                        ?>
                        <tr style="color: red; font-weight: bold;background:yellow;">
                    <td colspan="2"><center>Total</center></td>
                    <td><?php echo $t1; ?></td>
                    <td><?php echo $t2; ?></td>
                    <td><?php echo $t3; ?></td>
                    <td><?php echo $t4; ?></td>                  
                    <td><?php echo $t6; ?></td> 
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- END COMMENT AND NOTIFICATION  SECTION -->

    </div>

</div>
<!--END PAGE CONTENT -->


</div>

<script type="text/javascript">

    function printData()
    {
        var divToPrint = document.getElementById("tblExport");
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('#printTable').on('click', function () {
        printData();
    });


    $(document).ready(function () {

        $("#btnExport").click(function () {
            $("#tblExport").battatech_excelexport({
                containerid: "tblExport"
                , datatype: 'table'
                , worksheetName: 'Division Wise Report'
            });
        });
    });
</script>