<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>STUDENT DETAILS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <?php $this->load->view('inc/styles.php');
          $this->load->view('inc/alerts');?>
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">
        
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            
            <!-- Main content -->
            <section class="content">
                <?php include_once('inc/alerts.php'); ?>
                <div class="box-body table-responsive">
                    <table class="table table-responsive" id="invoice-table" width="100%">
                        <thead>
                            <tr>
                                <td colspan="8" style="color:#000000; background:#e7f2f4; font-weight:bold; border:1px solid #ecf0f5;"></td>
                            </tr>
                            <tr>
                                <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;height:33px;padding: 5px;">ID</td>
                                <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;padding: 5px;">NAME</td>
                                <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;padding: 5px;">QUANTITY</td>
                                <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;padding: 5px;">UNIT PRICE</td>
                                <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;padding: 5px;" align="right">TAX</td>
                                <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;padding: 5px;" align="right">AMOUNT(INC.TAX)</td>
                                <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;padding: 5px;" align="right">AMOUNT(WITHOUT TAX)</td>
                                <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;padding: 5px;" align="right">&nbsp;</td>

                            </tr>
                        </thead>
                        <tbody>

                            <tr class="append_row">
                                <td style="color:#616060 !important;border: 1px solid #e6e4e4;">1</td>
                                <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                    <input autocomplete="on" value="" type="text" placeholder="NAME" class="form-control isNumberkey movenext" name="reel_no" />
                                </td>
                                <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                    <div class="input-group search-module" data-selected="true">
                                        <input autocomplete="on" value="" type="text" placeholder="QUANTITY" class="form-control isNumberkey movenext qty" name="qty" />

                                    </div>
                                </td>
                                <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                    <div class="input-group search-module" data-selected="true">
                                        <input autocomplete="on" value="" type="text" placeholder="PRICE" class="form-control isNumberkey movenext price"  name="price" />
                                    </div>
                                </td>
                                <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                    <div class="input-group search-module" data-selected="true">
                                        <input autocomplete="on" value="" type="text" placeholder="TAX" class="form-control isNumberkey movenext tax_perc" name="tax_perc" />
                                    </div>
                                </td>
                                <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                    <div class="input-group search-module" data-selected="true">
                                        <input autocomplete="on" value="" type="text" placeholder="AMOUNT" class="form-control isNumberkey movenext rate_inc_tax"  name="rate_inc_tax" />
                                    </div>
                                </td>
                                <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                    <input autocomplete="on" value="" type="text" placeholder="AMOUNT" class="form-control isNumberkey movenext amnt" name="amnt" />
                                </td>
                                <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                    <button class="add_btn">ADD</button>
                                </td>

                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td style="color:#000000; background:rgb(244 186 186);border: 1px solid #e6e4e4;">&nbsp;</td>
                                <td style="color:#000000; background:rgb(244 186 186);border: 1px solid #e6e4e4;"></td>
                                <td style="color:#000000; background:rgb(244 186 186);border: 1px solid #e6e4e4;" ></td>
                                <td style="color:#000000; background:rgb(244 186 186);border: 1px solid #e6e4e4;" > <input type="text" id="tot_price"  value=""/></td>
                                <td style="color:#000000; background:rgb(244 186 186);border: 1px solid #e6e4e4;"></td>
                                <td style="color:#000000; background:rgb(244 186 186);border: 1px solid #e6e4e4;"></td>
                                <td style="color:#000000; background:rgb(244 186 186);border: 1px solid #e6e4e4;"></td>
                                <td style="color:#000000; background:rgb(244 186 186);border: 1px solid #e6e4e4;">
                                    &nbsp;
                                </td>

                            </tr>
                        </tfoot>

                    </table>
                </div>
                <div class="box-footer">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;">

                        <div class="col-md-2">
                            <button  class="btn btn-block btn-success" id="pl_finalise" type="button">
                                 SUBMIT
                            </button>
                        </div>

                        
                        <div class="col-md-2">
                            <button onclick="window.close();" class="btn btn-block btn-danger" type="button">
                                <i class="fa fa-times-o" aria-hidden="true"></i> Close
                            </button>
                        </div>

                    </div>
                </div>
                
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        
     
    </div>
    <!-- ./wrapper -->
    <script>
        var page = 'Student-Details';
    </script>
    <?php $this->load->view('inc/scripts');?>
    <?php if(ENVIRONMENT == 'development' || ENVIRONMENT == 'livedebug'){?>
    <script src="<?php echo base_url('assets/js/master.js?v='.$this->config->item('version')); ?>"></script>
    <?php }?>
          <script>
                         var slno = 1;
              $(".add_btn").click(function () {
                  
               var Tblebody = $("#invoice-table tbody");
               slno++;
                             
               var html = '<tr class="append_row">'
                                +'<td style="color:#616060 !important;border: 1px solid #e6e4e4;">'+ slno +'</td>'
                               +' <td style="color:#616060 !important;border: 1px solid #e6e4e4;">'
                                    +'<input autocomplete="on" value="" type="text" placeholder="NAME" class="form-control isNumberkey movenext" id="reel_no" name="reel_no" />'
                                +'</td>'
                                +'<td style="color:#616060 !important;border: 1px solid #e6e4e4;">'
                                    +'<div class="input-group search-module" data-selected="true">'
                                        +' <input autocomplete="on" value="" type="text" placeholder="QUANTITY" class="form-control isNumberkey movenext qty"  name="qty" />'
                                        
                                    +'</div>'
                                +'</td>'
                                +'<td style="color:#616060 !important;border: 1px solid #e6e4e4;">'
                                    +'<div class="input-group search-module" data-selected="true">'
                                        +'<input autocomplete="on" value="" type="text" placeholder="PRICE" class="form-control isNumberkey movenext price"  name="price" />'
                                       
                                    +'</div>'
                                +'</td>'
                                +'<td style="color:#616060 !important;border: 1px solid #e6e4e4;">'
                                    +'<div class="input-group search-module" data-selected="true">'
                                        +'<input autocomplete="on" value="" type="text" placeholder="TAX" class="form-control isNumberkey movenext tax_perc"  name="tax_perc" />'
                                       
                                    +'</div>'
                                +'</td>'
                                +'<td style="color:#616060 !important;border: 1px solid #e6e4e4;">'
                                +'<div class="input-group search-module" data-selected="true">'
                                        +'<input autocomplete="on" value="" type="text" placeholder="AMOUNT" class="form-control isNumberkey movenext rate_inc_tax"  name="rate_inc_tax" />'
                                       
                                    +'</div>'
                                +'</td>'
                                +'<td>'
                                +'<div class="input-group search-module" data-selected="true">'
                                        +' <input autocomplete="on" value="" type="text" placeholder="AMOUNT" class="form-control isNumberkey movenext amnt"  name="amnt" />'
                                       
                                    +'</div>'
                                +'</td>'
                                +'<td style="color:#616060 !important;border: 1px solid #e6e4e4;">'
                                   
                                +'</td>'

                            +'</tr>'
                  Tblebody.append(html);
                                          var rowTotal = 0;
                              var tblAmount = 0, tblcgstAmount = tblsgstAmount = tbligstAmount = tbltcsAmount = 0, slNo = 1;
                             //$("#invoice-table tbody tr.append_row").each(function () {
                                          
                            //rowTotal += parseFloat(tblAmount) + parseFloat($(this).find(".price").val());
                                 $("#invoice-table tbody tr.append_row").each(function () {
                                     //rowTotal += $(this).find(".price").val();
                                     rowTotal += parseFloat($(".price").val());
                                 });
                                                
                                               //$("#tot_price").val(parseFloat(rowTotal).toFixed(2));
                                               $("#tot_price").val(parseFloat(rowTotal).toFixed(2));
                             //});
                                              console.log(rowTotal);
                        //grossAmt = parseFloat(rowTotal);
                        //grossAmt = rowTotal - cgstTotAmt - sgstTotAmt - igstTotAmt;
                        //grandTotal = parseFloat(rowTotal) + parseFloat(roundPlus || 0) - parseFloat(roundMinus || 0);
                  //grossAmt = parseFloat(grossAmt).toFixed(2)
                 
                        //$("div #gross_amt").val(parseFloat(grossAmt).toFixed(2));


           });


           //CALCULATION
                         $(document).on('change keydown paste input', ".tax_perc", function () {
                    var totalAmount = 0, rateIncTax = 0;
                    var quantity = $(this).closest('tr').find("td  .qty").val(),
                        rate = $(this).closest('tr').find("td  .price").val(),
                        taxPerc = $(this).closest('tr').find("td  .tax_perc").val();
                    
                    if (rate && rate != '0') {
                        totalAmount =  (parseFloat(rate) || 0);
                    }
                             if (taxPerc && taxPerc != '0') {
                                         gstAmount  =(parseFloat(taxPerc) || 0) / 100;
                                      rateIncTax = (parseFloat(totalAmount) || 0)+(parseFloat(gstAmount) || 0);
                             }
                    
                    //subTotal = (parseFloat(totalAmount) || 0) + (parseFloat(cgstAmount) || 0) + (parseFloat(sgstAmount) || 0) + (parseFloat(igstAmount) || 0);
                    //rateIncTax = (parseFloat(subTotal) || 0) / (parseFloat(quantity) || 0);
                    //console.log(rateIncTax);
                    //$(this).closest('tr').find('td #amount').val(subTotal.toFixed(2));
                    $(this).closest('tr').find('td .rate_inc_tax').val(rateIncTax.toFixed(2));
                    $(this).closest('tr').find('td .amnt').val(totalAmount.toFixed(2));

                });
          </script>
</body>
</html>
