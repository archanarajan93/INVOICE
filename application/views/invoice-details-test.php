<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>STORES | INVOICE</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <?php $this->load->view('inc/styles.php');
          $this->load->view('inc/alerts'); var_dump($records);?>
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <?php //$this->load->view('inc/header'); ?>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <?php //$this->load->view('inc/left-side-menu'); ?>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            

            <!-- Main content -->
            <section class="content">
                <form method="post" action="" name="invoice-form" id="invoice-form">
                    <div class="box">
                        <div class="box-body table-responsive">

                            <div class="box-body table-responsive">
                                <table class="table table-responsive" id="others-invoice-table" width="100%">
                                    <thead>
                                        <tr>
                                            <td colspan="12" style="color:#000000; background:#e7f2f4; font-weight:bold; border:1px solid #ecf0f5;"></td>
                                        </tr>
                                        <tr>
                                            <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;height:33px;">SlNo</td>
                                            <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;">Items</td>
                                            <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;" align="right">Quantity</td>
                                            <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;"align="right">Rate</td>
                                            <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;" align="right">Tax %</td>
                                            <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;" align="right">Tax Amnt</td>
                                            <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;" align="right">Rate(Inc.Tax)</td>
                                            <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;" align="right">Amount</td>
                                            <td style="color:#000000; background:rgb(244 186 186); font-weight:bold; border:1px solid #ecf0f5;text-align:center;">&nbsp;</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="no-rec">
                                            <td colspan='13' class='no-records'>
                                                No Records Found!
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td style="color:#616060 !important;border: 1px solid #e6e4e4;"></td>
                                            
                                            <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                                <input autocomplete="off" value="" placeholder="ITEM" type="text" class="form-control help_f2 movenext" id="item" name="item" />
                                            </td>
                                            <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                                <input autocomplete="off" value="" placeholder="QUANTITY" style="text-align:right;" type="number" class="form-control isNumberkey movenext" id="qty" name="qty" />
                                            </td>
                                            <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                                <input autocomplete="off" value="" placeholder="RATE" type="number" style="text-align:right;" class="form-control isNumberkey movenext" id="rate" name="rate" />
                                            </td>
                                            <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                                <input type="number" placeholder="CGST%" style="text-align:right;" class="form-control isNumberkey movenext" id="cgst_perc" name="cgst_perc" />
                                            </td>
                                            <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                                <input type="number" placeholder="CGST" style="text-align:right;" class="form-control isNumberkey" id="cgst" name="cgst" disabled />
                                            </td>
                                           
                                            <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                                <input autocomplete="off" value="" placeholder="RATE (INC.TAX)" style="text-align:right;" type="number" class="form-control isNumberkey" id="rate_inc_tax" name="rate_inc_tax" disabled/ />
                                            </td>
                                            <td style="color:#616060 !important;border: 1px solid #e6e4e4;">
                                                <input autocomplete="off" value="" placeholder="AMOUNT" style="text-align:right;" type="number" class="form-control isNumberkey" id="amount" name="amount" disabled />
                                            </td>
                                            <td style="color:#616060 !important;border: 1px solid #e6e4e4;text-align:center;" width="4%">
                                                <i class="fa fa-plus-square invoice_add_btn" id="invoice_add_btn" aria-hidden="true" style="color:#0b259e;font-size: 1.5em;margin-top: 4px;cursor:pointer;"></i>
                                            </td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                            <?php //table end ?>
                           
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 add_values" style="background: #f8ecec;background: #f8ecec;PADDING: 18px; box-shadow: blue; box-shadow: 1px 1px 1px 1px red;">
                               


                                    <input autocomplete="off" style="text-align: right;color:#ff0000" type="text" value="" isdecimal="true" tabindex="10" class="form-control isNumberKey hide" id="grand_total_val" name="grand_total_val" placeholder="0.00" />
                                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                        <label>Grand Total </label>
                                        <input autocomplete="off" readonly style="text-align: right; font-size:14px; font-weight:bold; color:#ff0000" type="text" value="" isdecimal="true" tabindex="10" class="form-control isNumberKey" id="grand_total" name="grand_total" placeholder="0.00" />
                                    </div>
                                </div>
                               
                            </div>


                        </div>
                        <div class="box-footer">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                <button class="btn btn-block btn-primary save_btn" id="save_btn" type="button" name="search" value="">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Save
                                </button>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                <button onclick="window.location='<?php echo base_url('Transactions/OthersInvoiceMaster');?>'"  class="btn btn-block btn-danger" type="button">
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Close
                                </button>
                            </div>
                        </div>
                    

                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
      
       
        ?>
        <form method="post" class="hide" target="_blank" id="open-trans-form" action=""></form>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('inc/scripts');?>
    <script>
    String.prototype.fmt = function () {
    var s = this,
        i = arguments.length;
    while (i--) {
        s = s.replace(new RegExp('\\{' + i + '\\}', 'gm'), arguments[i]);
    }
    return s;
};
        var page = 'OTHERS-INVOICE-MASTER';
       
        function clrAllHeadInputs() {
            $(".invoice_add_btn").closest('tr').find("td  #qty").val('');
            $(".invoice_add_btn").closest('tr').find("td  #item").val('');
            $(".invoice_add_btn").closest('tr').find("td  #item_rec_sel").val('');
            $(".invoice_add_btn").closest('tr').find("td  #rate").val('');
            $(".invoice_add_btn").closest('tr').find("td  #cgst_perc").val('');
            $(".invoice_add_btn").closest('tr').find("td  #cgst").val('');
            $(".invoice_add_btn").closest('tr').find("td  #amount").val('');
            $(".invoice_add_btn").closest('tr').find("td  #rate_inc_tax").val('');
        }
        function updateNarration() {
            var invDate =  $("#invoice_date").val(), 
                invNo =   $("#invoice_no").val(),
                narrationArray = [];
            if (invNo) { narrationArray.push('INVOICE NO : '  + invNo.toUpperCase()); }
            if (invDate) { narrationArray.push(' DATED : ' + invDate.toUpperCase()); }
            $("#narrate").val(narrationArray.join(""));
        }
                /* Calculation total amount*/
                $(document).on('change keydown paste input', "#cgst_perc", function () {
                    var totalAmount = 0, cgstAmount = 0,  subTotal = 0;
                    var quantity = $(this).closest('tr').find("td  #qty").val(),
                        rate = $(this).closest('tr').find("td  #rate").val(),
                        cGstPerc = $(this).closest('tr').find("td  #cgst_perc").val(),
                        rateIncTax = $(this).closest('tr').find("td  #rate_inc_tax").val();
                   
                    if (quantity && quantity != '0') {
                        totalAmount = (parseFloat(quantity) || 0) * (parseFloat(rate) || 0);
                    }
                    if (cGstPerc && cGstPerc != '0') {
                        cgstAmount = ((parseFloat(totalAmount) || 0) * (parseFloat(cGstPerc) || 0)) / 100;
                    }
                   
                    subTotal = (parseFloat(totalAmount) || 0) + (parseFloat(cgstAmount) || 0) ;
                    rateIncTax = (parseFloat(subTotal) || 0) / (parseFloat(quantity) || 0);
                    //console.log(rateIncTax);
                    $(this).closest('tr').find('td #amount').val(subTotal.toFixed(2));
                    $(this).closest('tr').find('td #cgst').val(cgstAmount.toFixed(2));
                    $(this).closest('tr').find('td #rate_inc_tax').val(rateIncTax.toFixed(2));

                });

                //Adding details
                $(".invoice_add_btn").click(function () {
                    event.preventDefault();
                    var rowTotal = grandTotal = grossAmt = cgstTotAmt = sgstTotAmt = igstTotAmt = tcsTotAmt = roundPlus = roundMinus = 0;

                    var itemRec = $(this).closest('tr').find("td  #item").val();
                    var quantity = $(this).closest('tr').find("td  #qty").val();
                    var rate = $(this).closest('tr').find("td  #rate").val();

                    var cgstPercentage = $(this).closest('tr').find("td  #cgst_perc").val();
                    var cgst = $(this).closest('tr').find("td  #cgst").val();
                    if (parseFloat(cgstPercentage) > 0 || parseFloat(sgstPercent) > 0) {
                        igstPercentage = 0;
                        igst = 0;
                        $(this).closest('tr').find("td  #igst_perc").val(0);
                        $(this).closest('tr').find("td  #igst").val(0);
                    }
                    var amount = $(this).closest('tr').find("td  #amount").val();
                    var incTaxRate = $(this).closest('tr').find("td  #rate_inc_tax").val();
                    roundPlus = $("#round_plus").val();
                    roundMinus = $("#round_minus").val();
                    var error = 0;
                    var newRow = '<tr class="sel-item" data-record=\'{0}\'>' +
                        '<td style="color:#616060 !important;border: 1px solid #e6e4e4;" class="slno">{1}</td>' +
                        '<td style="color:#616060 !important;border: 1px solid #e6e4e4;" class="item-rec">{2}</td>' +
                        '<td style="color:#616060 !important;border: 1px solid #e6e4e4;" class="qty" align="right">{3}</td>' +
                        '<td style="color:#616060 !important;border: 1px solid #e6e4e4;" class="rt" align="right">{4}</td>' +
                        '<td style="color:#616060 !important;border: 1px solid #e6e4e4;" class="cgst-per" align="right">{5}</td>' +
                        '<td style="color:#616060 !important;border: 1px solid #e6e4e4;" class="cgst-amnt" align="right">{6}</td>' +
                        '<td style="color:#616060 !important;border: 1px solid #e6e4e4;" class="rate_tax" align="right">{8}</td>' +
                        '<td style="color:#616060 !important;border: 1px solid #e6e4e4;" class="amnt" align="right">{7}</td>' +
                        '<td style="color:#616060 !important;border: 1px solid #e6e4e4;text-align:center;"><i class="fa fa-trash invoice_del_btn" style="color:red;font-size: 1.5em;cursor:pointer;" aria-hidden="true"></i></td>' +
                        '</tr>';
                    if (!quantity) {
                        $(this).closest('tr').find("td  #qty").addClass('haserror');
                        error++;
                    }
                    
                    if (!rate) {
                        $(this).closest('tr').find("td  #rate").addClass('haserror');
                        error++;
                    }
                    if (!cgst && !sgst && !igst) {
                        $(this).closest('tr').find("td  #cgst_perc").addClass('haserror');
                        error++;
                    }
                    if (!amount) {
                        $(this).closest('tr').find("td  #amount").addClass('haserror');
                        error++;
                    }
                    if (error == 0) {
                        invoiceItemRec = encodeURIComponent(JSON.stringify({
                            "item_rec": itemRec, "quantity": quantity, "rate": rate, "cgs_persnt": cgstPercentage, "cgst": cgst,
                             "amount": amount, "rate_incTax": incTaxRate
                        }));
                        $("table#others-invoice-table tbody").find(".no-rec").remove();
                        var itemRecord = itemRec;
                        $("table#others-invoice-table tbody").append(newRow.fmt(invoiceItemRec, $("#others-invoice-table tbody tr.sel-item").length + 1, (itemRecord), quantity, rate, cgstPercentage,
                            cgst,  amount, incTaxRate));
                        var tblAmount = 0, tblcgstAmount = tblsgstAmount = tbligstAmount = tbltcsAmount = 0, slNo = 1;
                        $("#others-invoice-table tbody tr.sel-item").each(function () {

                            rowTotal += parseFloat(tblAmount) + parseFloat($(this).find(".amnt").text());
                            cgstTotAmt += parseFloat(tblcgstAmount) + parseFloat($(this).find(".cgst-amnt").text());
                            slNo = slNo + 1;
                        });
                        //grossAmt = parseFloat(rowTotal);
                        grossAmt = rowTotal - cgstTotAmt - sgstTotAmt - igstTotAmt;
                        grandTotal = parseFloat(rowTotal) + parseFloat(roundPlus || 0) - parseFloat(roundMinus || 0);
                        grossAmt = parseFloat(grossAmt).toFixed(2)
                        $("div #gross_amt").val(parseFloat(grossAmt).toFixed(2));
                        $("div #tot_cgst").val(parseFloat(cgstTotAmt).toFixed(2));
                        $("div #grand_total").val(parseFloat(grandTotal).toFixed(2));
                        clrAllHeadInputs();
                    } else {
                        //ACCOUNTS.utils.hideLoader();
                        sweetAlert("Oops...", errMsg, "error");
                    }
                    $("#item").focus();
                });

                //Delete button
                $("#others-invoice-table").on('click', '.invoice_del_btn', function () {

                    var TMPL = {
                        "NORECORDS": '<tr class="no-rec"><td colspan="12" class="no-records" style="padding:40px !important"><i class="fa fa-fw fa-exclamation-circle"></i> Not Added Any Datas!</td></tr>',
                    };
                    var tcsValue = $("#to_tcs").val();
                    var roundPlus = $("#to_tcs").val();
                    var roundMinus = $("#to_tcs").val();
                    $(this).closest('tr').remove();
                    if ($("#others-invoice-table tbody").find('tr').length === 0) {
                        $("#others-invoice-table tbody").append(TMPL.NORECORDS);
                    }
                    var rowTotal = grossAmt = grandTotal = cgstAmount = sgstAmount = igstAmount = 0;
                    var slNo = 1;
                    $("#others-invoice-table tbody tr.sel-item").each(function () {
                        rowTotal = parseFloat(rowTotal) + parseFloat($(this).closest('tr').find("td.amnt").text());
                        cgstAmount = parseFloat(cgstAmount) + parseFloat($(this).closest('tr').find("td.cgst-amnt").text());
                        $(this).find(".slno").text(slNo);
                        slNo = slNo + 1;
                    });
                    grossAmt = rowTotal - cgstAmount - sgstAmount - igstAmount;
                    grandTotal = rowTotal + roundPlus - roundMinus;
                    $("div #gross_amt").val(parseFloat(grossAmt).toFixed(2));
                    $("div #tot_cgst").val(parseFloat(cgstAmount).toFixed(2));
                    grandTotal = (parseFloat(rowTotal) || 0) + (parseFloat(tcsValue) || 0) + (parseFloat(roundPlus) || 0) - (parseFloat(roundMinus) || 0);
                    $("div #grand_total").val(grandTotal.toFixed(2));
                    $("div #grand_total_val").val(grandTotal.toFixed(2));
                });

                

                //Save button and Update
                $("#save_btn,#update_btn").click(function () {

                    var invoiceForm = $("#invoice-form");
                        invoiceRecords = [],
                        error = 0,
                        cGST = $("#tot_cgst").val(),
                        grandTotal = $("#grand_total").val();
                    
                    if (!grandTotal) {
                        $("#grand_total").addClass('haserror');
                        errMsg = "Grand Total Should be Greater than Zero";
                        error++;
                    } 
                    if (error == 0) {
                        $("#others-invoice-table tbody tr.sel-item").each(function () {
                            var record = JSON.parse(decodeURIComponent($(this).attr("data-record")));
                            itemRecSel = record["item_rec"];
                            invoiceRecords.push({
                                "item_rec": itemRecSel ? itemRecSel : '',
                                "quantity": record['quantity'],
                                "rate": record['rate'],
                                "cgs_persnt": record['cgs_persnt'],
                                "cgst": record['cgst'],
                                "amount": record['amount'],
                                "rate_incTax": record['rate_incTax']
                            });
                        });
                        EMPLOYEE.utils.showLoader();
                        var formData = new FormData();
                        formData.append("invoice_records", JSON.stringify(invoiceRecords));
                        formData.append("cGST", cGST);
                        formData.append("grandTotal", grandTotal);
                        EMPLOYEE.utils.sendAjaxPost("Master/UpsertOthersInvoiceMaster", formData, 'json',
                            function successCallBack(data) {
                                EMPLOYEE.utils.hideLoader();
                                if (data.status === 200) {
                                    sweetAlert("", data.text, "success");
                                } else {
                                    EMPLOYEE.utils.hideLoader();
                                    sweetAlert("Oops...", data.text, "error");
                                }
                            },
                            function errorStatus(textStatus, errorThrown) {
                                EMPLOYEE.utils.hideLoader();
                                sweetAlert("Oops...", "Somthing went wrong", "error");
                            });
                    } else {
                        EMPLOYEE.utils.hideLoader();
                        sweetAlert("Oops...", errMsg, "error");
                    }
                });

       
    </script>
    <?php $this->load->view('inc/scripts'); ?>
    <?php if(ENVIRONMENT == 'development' || ENVIRONMENT == 'livedebug'){?>
    <script src="<?php //echo base_url('assets/js/transactions.js?v='.$this->config->item('version')); ?>"></script>
    <?php }?>
</body>
</html>
