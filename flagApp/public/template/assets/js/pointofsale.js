$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//========================Global Variables===========================
var studentNumber_empno = "";
var dependentArray = new Array();
var dependentset = new Set(["sumit", "sumit", "amit", "anil", "anish"]);
var qoutationArray = new Array();
var globalBalance = "";
var canteenmealid = "";
var canteenmealname = "";
var dynamicBalance = 0;
var currentBalance = 0;
var globalDate = "";
var principleDateJoinedGlobal = "";
var claim = 0;
var docs = "";

var globalProductID = "";
var globalProductTicked = "";
var baseURL = "http://localhost/hcp-fcp/public/";



var acccode_dr = "";
var accname_dr = "";
var acccode_cr = "";
var accname_cr = "";




$(document).on("click", ".browse", function () {
    var file = $(this).parents().find(".file");
    file.trigger("click");
});
$('input[type="file"]').change(function (e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);
    var reader = new FileReader();
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});
$(document).ready(function () {



//    $.ajax({
//        type: 'GET',
//        dataType: "json",
//        url: "https://api.ipgeolocationapi.com/geolocate/184.149.48.32",
//        success: function (data) {
//            console.log(data);
//        }
//    })


});



$('#acccode_dr').keypress(function (event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        acccode_dr = $('#acccode_dr').val();

        $.ajax({
            type: 'POST',
            dataType: "json",
            data: {acccode: acccode_dr},
            url: "/gl/leaf/desc",
            success: function (data) {


                if (data.size > 0) {
                    console.log(data.accDesc.level8_description);
                    accname_dr = data.accDesc.level8_description;
                    $('#lblAccNameDR').text(": (" + data.accDesc.level8_description + ")");
                } else {

                    alert(acccode_dr + " is invalid or its not mapped");
                    $('#lblAccNameDR').text("");
                    accname_dr = "";
                    $("#acccode_dr").val("");

                }

            }
        })
    } else {
//        $('#lblAccNameDR').text("");
//        accname_dr = "";
//        $("#acccode_dr").val("");
    }
});


$('#acccode_cr').keypress(function (event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        acccode_cr = $('#acccode_cr').val();

        $.ajax({
            type: 'POST',
            dataType: "json",
            data: {acccode: acccode_cr},
            url: "/gl/leaf/desc",
            success: function (data) {

                if (data.size > 0) {
                    console.log(data.accDesc.level8_description);
                    accname_cr = data.accDesc.level8_description;
                    $('#lblAccNameCR').text(": (" + data.accDesc.level8_description + ")");
                } else {

                    alert(acccode_cr + " is invalid or its not mapped");
                    $('#lblAccNameCR').text("");
                    accname_cr = "";
                    $("#acccode_cr").val("");
                }


            }
        })
    } else {
//        $('#lblAccNameCR').text("");
//        accname_cr = "";
//        $("#acccode_cr").val("");

    }
});

$("#btnPostJEntry").on('click', function () {


    var jnumber_ = $('#jnumber_').val();
    var jperiod_ = $('#jperiod_').val();
    var acccode_dr = $('#acccode_dr').val();
//    var accname_dr = $('#accname_dr').val();
    var desc_dr = $('#desc_dr').val();
    var amount_dr = $('#amount_dr').val();
    var acccode_cr = $('#acccode_cr').val();
//    var accname_cr = $('#accname_cr').val();
    var desc_cr = $('#desc_cr').val();
    var amount_cr = $('#amount_cr').val();
    var _cglid = $('#_cglid').val();


    if (accname_cr.length > 0) {

        if (accname_dr.length > 0) {

            if (jnumber_.length > 0) {


                if (acccode_dr.length > 0) {

                    if (desc_dr.length > 0) {

                        if (amount_dr.length > 0) {


                            if (acccode_cr.length > 0) {

                                if (accname_cr.length > 0) {

                                    if (desc_cr.length > 0) {

                                        if (amount_cr.length > 0) {

                                            $.ajax({
                                                type: 'POST',
                                                url: '/journal/entry/post',
                                                dataType: 'JSON',
                                                data: {_cglid: _cglid, accname_dr: accname_dr, accname_cr: accname_cr, jnumber_: jnumber_, jperiod_: jperiod_, acccode_dr: acccode_dr, desc_dr: desc_dr, amount_dr: amount_dr, acccode_cr: acccode_cr, desc_cr: desc_cr, amount_cr: amount_cr},
                                                success: function (data) {
                                                    $('#journalEntryTable td').remove();
                                                    $("#journalEntryTable").append("<tr><td><strong>Description</strong></td><td><strong>Description</strong></td><td><strong>Description</strong></td><td><strong>Description</strong></td><td><strong>Description</strong></td></tr>");
//                                                    $.each(data.product_cover_settings, function (key, value) {
//                                                        console.log(value.menuid + "  " + value.desc + " " + value.amount);
//                                                        $("#coverDetailsTable").append("<tr></td><td>" + value.pcs_cover + "</td><td>" + value.pcs_contribution + "</td><td>" + value.pcs_age_from + " - " + value.pcs_age_to + "</td><td>" + value.f_name + "</td><td>" + value.pcs_date_updated + "</td></tr>");
//                                                    });
                                                }
                                            });

                                        } else {

                                            alert("credit amount required");

                                        }
                                    } else {

                                    }
                                } else {

                                }

                            } else {

                            }
                        } else {

                        }
                    } else {

                    }
                } else {

                }

            } else {

            }
        } else {

        }
    } else {

    }



});









































//$("#selectedEvent").on('change', function () {
//
//    var selectedEvent = $('#selectedEvent').find(":selected").text();
//    $("#selectedrace option").remove();
//    $.ajax({
//        type: 'POST',
//        url: '/getraces',
//        dataType: 'JSON',
//        data: {selectedEvent: selectedEvent},
//        success: function (data) {
//            $.each(data.races, function (index, value) { // Iterates through a collection
//                $('#selectedrace').append("<option>" + value.Description + "-" + value.adescription + "</option>");
//                console.log(data);
//            });
////
//        }
//    });
//});
//
//$('#EscalateBtn').on('click', function () {
//    var hidden_risk_id = $('#hidden_risk_id').val();
//    var comment = $('#comment').val();
//    var w_userID = $('#w_userID').val();
//    var status = $('#status').find(":selected").val();
//    var hidden_currentSec = $('#hidden_currentSec').val();
//    var hidden_nextSec = $('#hidden_nextSec').val();
//    var escalateTo = $('#escalateTo').find(":selected").val();
//
//
//
//
//    if (comment.length > 0) {
//
//        if (true) {
//            $.ajax({
//                type: 'POST',
//                url: '/update/risk',
//                dataType: 'JSON',
//                data: {status: status, hidden_currentSec: hidden_currentSec, hidden_nextSec: hidden_nextSec, hidden_risk_id: hidden_risk_id, comment: comment, escalateTo: escalateTo, w_userID: w_userID},
//                success: function (data, textStatus, jqXHR) {
//                    console.log("##### /update/risk " + data);
//
//                    if (data.svrResponse == "1") {
//                        $('#exampleModalCenter').modal('show');
//                    } else {
//                        $('#lblRiskNotUpdated').text(data.msg);
//                        $('#invalidUserModalCenter').modal('show');
//                    }
//
//                }
//            });
//        } else {
//            alert("section can not be null ");
//        }
//    } else {
//        alert("comment can not be null ");
//    }
//
//
//});
//
//$("#btnaddQoutation").on('click', function () {
//
//    var qcoverproductid = $("#qcoverproductid").val();
//    var qf_beneficiary_typeID = $("#qf_beneficiary_typeID").val();
//    var qcover = $("#qcover").val();
//    var qage = $("#qage").val();
//    $('#qoutedependantTbl td').remove();
//    if (qage.length > 0 && qcover.length > 0) {
//
//        $.ajax({
//            type: 'POST',
//            url: 'getQouation',
//            dataType: 'JSON',
//            data: {qcoverproductid: qcoverproductid, qf_beneficiary_typeID: qf_beneficiary_typeID, qcover: qcover, qage: qage},
//            success: function (data) {
//
//                var qoutationObject = new Object();
//                qoutationObject.premium = data.premium;
//                qoutationObject.membertype = data.membertype;
//                qoutationObject.cover = data.cover;
//                qoutationObject.age = data.age;
//                qoutationArray.push(qoutationObject);
//                var totalPremium = 0;
//                $.each(qoutationArray, function (key, value) {
////            console.log(value.menuid + "  " + value.desc + " " + value.amount);
//                    $("#qoutedependantTbl").append("<tr></td><td>" + value.cover + "</td><td>" + value.age + "</td><td>" + value.membertype + "</td><td>" + value.premium + "</td></tr>");
//                    totalPremium = totalPremium + value.premium;
//                });
//                $("#qoutedependantTbl").append("<tr class='danger'></td><td>Total Premium</td><td></td><td></td><td>" + totalPremium + "</td></tr>");
//            }
//        });
//    } else {
//        alert("Cover or  age cannot be empty ");
//    }
//
//});
//
//$("#w1-dob").blur(function () {
//    var dob = $("#w1-dob").val();
//    dob = new Date(dob);
//    var today = new Date();
//    var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
//    if (age >= 18) {
//
//        if (age < 80) {
//
//        } else {
//
//
//            alert("The Age  is " + age + ": Member's age Invalid");
//            $("#w1-dob").val("");
////            $.ajax({
////                type: 'POST',
////                url: 'editAgent',
////                dataType: 'JSON',
////                data: {id: id},
////                success: function (data) {
////
////                   
////                }
////            });
//        }
//
//    } else {
//        alert("The Age  is " + age + ": Member too young");
//        $("#w1-dob").val("");
//    }
//});
//$("#w1-phone").blur(function () {
//
//
//    var phone = $("#w1-phone").val();
//    $.ajax({
//        type: 'POST',
//        url: 'checkPhoneIfExists',
//        data: {phone: phone.trim()},
//        dataType: 'JSON',
//        success: function (data) {
//
//            if (data.phone != 0) {
//
//                alert("Member with mobile Phone: " + phone + " alrealdy Exist");
//                $("#w1-phone").val("");
//            }
//        }
//    });
//}
//
//);
//$('#btnsubmitbill').on('click', function () {
//
//
//    $('#productidBilling').val();
//    var productidBilling = $('#productidBilling').find(":selected").val();
//    var a_principleID = $("#a_principleID").val();
//    var dateBilling = $("#dateBilling").val();
//    if (productidBilling > 0 && dateBilling.length > 0) {
//        $.ajax({
//            type: 'POST',
//            url: 'getBilling',
//            dataType: 'JSON',
//            data: {productidBilling: productidBilling, a_principleID: a_principleID, dateBilling: dateBilling},
//            success: function (data) {
//
//                var totalPremium = 0;
//                if (data.billArray.length > 0) {
//
//                    $("#billingTbl td").remove();
//                    $.each(data.billArray, function (key, value) {
//                        $("#billingTbl").append("<tr></td><td>" + value.name + "</td><td>" + value.cover + "/ day</td><td>" + value.age + "</td><td>" + value.mtype + "</td><td>$" + value.contribution + "/per month</td></tr>");
//                        totalPremium = parseFloat(totalPremium) + parseFloat(value.contribution);
//                    });
//                    $("#billingTbl").append("<tr class='danger'></td><td>Total Premium</td><td></td><td></td><td></td><td>$" + totalPremium + "</td></tr>");
//                    new PNotify({
//                        title: 'Billing',
//                        text: 'Member successfully Billed.',
//                        type: 'custom',
//                        addclass: 'notification-success',
//                        icon: 'fa fa-check'
//                    });
//                } else {
//
//                    new PNotify({
//                        title: 'Billing',
//                        text: 'Record Already Exists.',
//                        type: 'custom',
//                        addclass: 'notification-success',
//                        icon: 'fa fa-check'
//                    });
//                }
//            }
//        });
//    } else {
//        alert("Date or Product can not be null");
//    }
//});
//$('#productidBilling').on('change', function () {
//
//
//
//});
//
//
//
//$("#principalcoverbtn").on('click', function () {
//
//
//
//
//    var dob = $("#w1-dob").val();
//    dob = new Date(dob);
//    var today = new Date();
//    var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
//    if (age >= 18) {
//
//        if (age < 80) {
//            var product = $('input[name="product"]:checked').serialize();
//            alert(product);
//        } else {
//
//
//
//
////            $.ajax({
////                type: 'POST',
////                url: 'editAgent',
////                dataType: 'JSON',
////                data: {id: id},
////                success: function (data) {
////
////                   
////                }
////            });
//        }
//
//    } else {
//        alert("The Age  is " + age + ": Member too young");
//        $("#w1-dob").val("");
//    }
//
//});
//// new PNotify({
//// title: 'Congratulations',
//// text: 'You completed the wizard form.',
//// type: 'custom',
//// addclass: 'notification-success',
//// icon: 'fa fa-check'
//// });