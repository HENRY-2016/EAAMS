
// var baseUrl = "https://drkgbeddings.com";
var baseUrl = "http://127.0.0.1:8000";

// orders
var APIorderdetails = baseUrl+"/api/orders/list/customer/order/details/by/admin/by/id/";
var APIListNewOrders =  baseUrl+"/api/orders/list/all/new/orders";
var APIListPendingOrders =  baseUrl+"/api/orders/list/all/pending/orders";
var APIListClearedOrders =  baseUrl+"/api/orders/list/all/cleared/orders";

// payments
var APIListClearedPayments =  baseUrl+"/api/payments/list/all/cleared";
var APIListNotClearedPayments =  baseUrl+"/api/payments/list/all/not/cleared";
var APIListNewPayments =  baseUrl+"/api/payments/list/all/new/payment";
var APIListFullPayments =  baseUrl+"/api/payments/list/all/full/payment";
var APIListHalfPayments =  baseUrl+"/api/payments/list/all/half/payment";



// dashboard orders
var APIListDashboardClearedPayments = baseUrl+"/api/dashboard/list/all/cleared/order/payments";
var APIListDashboardNotClearedPayments = baseUrl+"/api/dashboard/list/all/not/cleared/order/payments";
var APIListDashboardNewOrders = baseUrl+"/api/dashboard/list/all/new/orders";
var APIListDashboardTotalOrders = baseUrl+"/api/dashboard/list/all/total/orders";

// dashboard payments
var APIListDashboardNewPayments = baseUrl+"/api/dashboard/list/all/new/payments";
var APIListDashboardPendingPayments = baseUrl+"/api/dashboard/list/all/pending/payments";
var APIListDashboardHalfPayments = baseUrl+"/api/dashboard/list/all/half/payments";
var APIListDashboardFullPayments = baseUrl+"/api/dashboard/list/all/full/payments";
var APIListDashboardTotalPayments = baseUrl+"/api/dashboard/list/all/total/payments";

var APIImages = baseUrl+"/images/";


// ============>>>> Mobile App - Edit
var APIMobileAppEditOthersHome = baseUrl+"/api/mobile/edit/others/home/by/id/"; 
var APIMobileAppEditOthersOffers = baseUrl+"/api/mobile/edit/others/offers/by/id/";
var APIMobileAppEditOthersSlider = baseUrl+"/api/mobile/edit/others/slider/by/id/";
var APIMobileAppEditOthersBabies = baseUrl+"/api/mobile/edit/others/babies/by/id/";

var APIMobileAppEditBathRoomOneRobs = baseUrl+"/api/mobile/edit/bath/room/robs/by/id/";
var APIMobileAppEditBathRoomTowels = baseUrl+"/api/mobile/edit/bath/room/towels/by/id/";
var APIMobileAppEditBathRoomDoorMats = baseUrl+"/api/mobile/edit/bath/room/door/mats/by/id/";
var APIMobileAppEditBathRoomCurtains = baseUrl+"/api/mobile/edit/bath/room/curtains/by/id/";

var APIMobileAppEditLivingRoomCurtains = baseUrl+"/api/mobile/edit/living/room/curtains/by/id/";
var APIMobileAppEditLivingRoomSeats = baseUrl+"/api/mobile/edit/living/room/seats/by/id/";
var APIMobileAppEditLivingRoomSideBoards = baseUrl+"/api/mobile/edit/living/room/side/boards/by/id/";
var APIMobileAppEditLivingRoomTables = baseUrl+"/api/mobile/edit/living/room/tables/by/id/";
var APIMobileAppEditLivingRoomCarpets = baseUrl+"/api/mobile/edit/living/room/carpets/by/id/";
var APIMobileAppEditLivingRoomIroningBoards = baseUrl+"/api/mobile/edit/living/room/ironing/boards/by/id/";

var APIMobileAppEditBedRoomOneBeds = baseUrl+"/api/mobile/edit/bed/room/one/beds/by/id/";
var APIMobileAppEditBedRoomOneBedSides = baseUrl+"/api/mobile/edit/bed/room/one/bed/sides/by/id/";
var APIMobileAppEditBedRoomOneBedSheets = baseUrl+"/api/mobile/edit/bed/room/one/bed/sheets/by/id/";
var APIMobileAppEditBedRoomOneMattress = baseUrl+"/api/mobile/edit/bed/room/one/mattress/by/id/";
var APIMobileAppEditBedRoomOneProtector = baseUrl+"/api/mobile/edit/bed/room/one/protector/by/id/";

var APIMobileAppEditBedRoomTwoNets = baseUrl+"/api/mobile/edit/bed/room/two/nets/by/id/";
var APIMobileAppEditBedRoomTwoPillows = baseUrl+"/api/mobile/edit/bed/room/two/pillows/by/id/";
var APIMobileAppEditBedRoomTwoCussions = baseUrl+"/api/mobile/edit/bed/room/two/cussions/by/id/";
var APIMobileAppEditBedRoomTwoBedCovers = baseUrl+"/api/mobile/edit/bed/room/two/covers/by/id/";
var APIMobileAppEditBedRoomTwoBlankets = baseUrl+"/api/mobile/edit/bed/room/two/blankets/by/id/";

var APIMobileAppEditBedRoomThreeClosets = baseUrl+"/api/mobile/edit/bed/room/three/closets/by/id/";
var APIMobileAppEditBedRoomThreeShoeRack = baseUrl+"/api/mobile/edit/bed/room/three/shoe/rack/by/id/";
var APIMobileAppEditBedRoomThreeMirrors = baseUrl+"/api/mobile/edit/bed/room/three/mirrors/by/id/";
var APIMobileAppEditBedRoomThreeNightWear = baseUrl+"/api/mobile/edit/bed/room/three/night/wear/by/id/";
var APIMobileAppEditBedRoomThreeSandals = baseUrl+"/api/mobile/edit/bed/room/three/sandals/by/id/";


// ============>>>> Mobile App - Delete
// var APIMobileAppDeleteBabies = baseUrl+"/api/delete/babies/by/id/";

var APIMobileAppDeleteOthersHome = baseUrl+"/api/mobile/delete/others/home/by/id/"; 
var APIMobileAppDeleteOthersOffers = baseUrl+"/api/mobile/delete/others/offers/by/id/";
var APIMobileAppDeleteOthersSlider = baseUrl+"/api/mobile/delete/others/slider/by/id/";
var APIMobileAppDeleteOthersBabies = baseUrl+"/api/mobile/delete/others/babies/by/id/";

var APIMobileAppDeleteBathRoomOneRobs = baseUrl+"/api/mobile/delete/bath/room/robs/by/id/";
var APIMobileAppDeleteBathRoomTowels = baseUrl+"/api/mobile/delete/bath/room/towels/by/id/";
var APIMobileAppDeleteBathRoomDoorMats = baseUrl+"/api/mobile/delete/bath/room/door/mats/by/id/";
var APIMobileAppDeleteBathRoomCurtains = baseUrl+"/api/mobile/delete/bath/room/curtains/by/id/";

var APIMobileAppDeleteLivingRoomCurtains = baseUrl+"/api/mobile/delete/living/room/curtains/by/id/";
var APIMobileAppDeleteLivingRoomSeats = baseUrl+"/api/mobile/delete/living/room/seats/by/id/";
var APIMobileAppDeleteLivingRoomSideBoards = baseUrl+"/api/mobile/delete/living/room/side/boards/by/id/";
var APIMobileAppDeleteLivingRoomTables = baseUrl+"/api/mobile/delete/living/room/tables/by/id/";
var APIMobileAppDeleteLivingRoomCarpets = baseUrl+"/api/mobile/delete/living/room/carpets/by/id/";
var APIMobileAppDeleteLivingRoomIroningBoards = baseUrl+"/api/mobile/delete/living/room/ironing/boards/by/id/";

var APIMobileAppDeleteBedRoomOneBeds = baseUrl+"/api/mobile/delete/bed/room/one/beds/by/id/";
var APIMobileAppDeleteBedRoomOneBedSides = baseUrl+"/api/mobile/delete/bed/room/one/bed/sides/by/id/";
var APIMobileAppDeleteBedRoomOneBedSheets = baseUrl+"/api/mobile/delete/bed/room/one/bed/sheets/by/id/";
var APIMobileAppDeleteBedRoomOneMattress = baseUrl+"/api/mobile/delete/bed/room/one/mattress/by/id/";
var APIMobileAppDeleteBedRoomOneProtector = baseUrl+"/api/mobile/delete/bed/room/one/protector/by/id/";

var APIMobileAppDeleteBedRoomTwoNets = baseUrl+"/api/mobile/delete/bed/room/two/nets/by/id/";
var APIMobileAppDeleteBedRoomTwoPillows = baseUrl+"/api/mobile/delete/bed/room/two/pillows/by/id/";
var APIMobileAppDeleteBedRoomTwoCussions = baseUrl+"/api/mobile/delete/bed/room/two/cussions/by/id/";
var APIMobileAppDeleteBedRoomTwoBedCovers = baseUrl+"/api/mobile/delete/bed/room/two/covers/by/id/";
var APIMobileAppDeleteBedRoomTwoBlankets = baseUrl+"/api/mobile/delete/bed/room/two/blankets/by/id/";

var APIMobileAppDeleteBedRoomThreeClosets = baseUrl+"/api/mobile/delete/bed/room/three/closets/by/id/";
var APIMobileAppDeleteBedRoomThreeShoeRack = baseUrl+"/api/mobile/delete/bed/room/three/shoe/rack/by/id/";
var APIMobileAppDeleteBedRoomThreeMirrors = baseUrl+"/api/mobile/delete/bed/room/three/mirrors/by/id/";
var APIMobileAppDeleteBedRoomThreeNightWear = baseUrl+"/api/mobile/delete/bed/room/three/night/wear/by/id/";
var APIMobileAppDeleteBedRoomThreeSandals = baseUrl+"/api/mobile/delete/bed/room/three/sandals/by/id/";

// ============>>>> Mobile App - View
// var URLViewOthersBabies  = baseUrl+"/mobile/babies/view";




var URLViewOthersHome  = baseUrl+"/mobile/others/home/view";
var URLViewOthersOffers  = baseUrl+"/mobile/others/offers/view";
var URLViewOthersSlider  = baseUrl+"/mobile/others/slider/view";
var URLViewOthersBabies  = baseUrl+"/mobile/others/babies/view";

var URLViewBathroomRobs   = baseUrl+"/mobile/bath/room/robs/view";
var URLViewBathRoomTowels   = baseUrl+"/mobile/bath/room/towels/view";
var URLViewBathRoomDoorMat   = baseUrl+"/mobile/bath/room/door/mats/view";
var URLViewBathRoomCurtains   = baseUrl+"/mobile/bath/room/curtains/view";

var URLViewLivingRoomCurtains   = baseUrl+"/mobile/living/room/curtains/view";
var URLViewLivingRoomSeats   = baseUrl+"/mobile/living/room/seats/view";
var URLViewLivingRoomSideBoards   = baseUrl+"/mobile/living/room/side/boards/view";
var URLViewLivingRoomTables  = baseUrl+"/mobile/living/room/tables/view";
var URLViewLivingRoomCarpets   = baseUrl+"/mobile/living/room/carpets/view";
var URLViewLivingRoomBoards   = baseUrl+"/mobile/living/room/ironing/boards/view";

var URLViewBedRoomOneBeds   = baseUrl+"/mobile/bed/room/one/beds/view";
var URLViewBedRoomOneBedSide  = baseUrl+"/mobile/bed/room/one/bed/sides/view";
var URLViewBedRoomOneBedSheets   = baseUrl+"/mobile/bed/room/one/bed/sheets/view";
var URLViewBedRoomOneMattress  = baseUrl+"/mobile/bed/room/one/mattress/view";
var URLViewBedRoomOneProtector = baseUrl+"/mobile/bed/room/one/protector/view";

var URLViewBedRoomTwoNets  = baseUrl+"/mobile/bed/room/two/nets/view";
var URLViewedRoomTwoPillows   = baseUrl+"/mobile/bed/room/two/pillows/view";
var URLViewedRoomTwoCussions  = baseUrl+"/mobile/bed/room/two/cussions/view";
var URLViewedRoomTwoCovers   = baseUrl+"/mobile/bed/room/two/bed/covers/view";
var URLViewedRoomTwoBlankets  = baseUrl+"/mobile/bed/room/two/blankets/view";

var URLViewBedRoomThreeClosets   = baseUrl+"/mobile/bed/room/three/closets/view";
var URLViewBedRoomThreeShoeRack   = baseUrl+"/mobile/bed/room/three/shoe/rack/view";
var URLViewBedRoomThreeMirrors   = baseUrl+"/mobile/bed/room/three/mirrors/view";
var URLViewBedRoomThreeNightWear  = baseUrl+"/mobile/bed/room/three/night/wear/view";
var URLViewBedRoomThreeSandals = baseUrl+"/mobile/bed/room/three/sandals/view";


function OloadInitiApplication ()
{
    display_Date ();
    LogInUser();
}
function display_Date ()
{

    let today = new Date();
    let date = today.getDate()+'/'+(today.getMonth()+1)+'/ '+today.getFullYear() ;
    let time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    let day = weekday[today.getDay()];

    date_and_time = day+ " " +date+" " + " "+time;
    document.getElementById('date-span').innerText = date_and_time;
}


function Log_InPage (){window.location= baseUrl+"/login"}
function LogInUser ()
{
    // get uer credentials
    username = localStorage.getItem("username");

    if (username)
    {
        // usernameinput.value = username

    }
    else{Log_InPage();}
}
function Log_Out_User ()
{

    localStorage.removeItem("username");
    Log_InPage ();
}

////////////////////////////////////////////// laravel /////////////////
function Show_Customer_Order_Details (id)
{
    document.getElementById("orderlist-table-view-div").style.display="none";
    document.getElementById("orderlist-details-view-div").style.display="block";
    $.ajax({
            url:APIorderdetails+id,
            type:'get',
            dataType:'JSON',
            error: function ()
            {
                console.log("Request Unsuccessful")
            },
            success: function (response)
            {
                console.log(response.data.Status)

                let PaymentMethod = response.data.PaymentMethod;
                let DeliveryMethod = response.data.DeliveryMethod;
                let amount = response.data.Amount;
                let time = response.data.created_at.slice(0, 10);
                let Status = response.data.Status;
                let id = response.data.id;
                let phone = response.data.Phone;
                let ordernumber = response.data.Reference;
                let orderListArray = response.data.OrderListArray;

                let htmlstatus = document.getElementById("status");
                let htmlPhone = document.getElementById("phone");
                let htmlDeliveryMethod = document.getElementById("DeliveryMethod");
                let htmlOrdernumber = document.getElementById("ordernumber");
                let htmlPaymentMethod = document.getElementById("PaymentMethod");
                let htmlAmount = document.getElementById("amount");
                let htmlTime = document.getElementById("time");
                let htmlOrderList = document.getElementById("order");
                let formated_Orderlist =  orderListArray.replace(/\\/g, '');

                htmlstatus.innerText = Status;
                htmlPhone.innerText = phone;
                htmlDeliveryMethod .innerText = DeliveryMethod;
                htmlOrdernumber.innerText = ordernumber;
                htmlPaymentMethod.innerText =PaymentMethod;
                htmlAmount.innerText =amount;
                htmlTime.innerText =time;
                // htmlOrderList.innerText = formated_Orderlist;


                let parentDiv = document.getElementById('mycard');
                let list = formated_Orderlist.slice(1, -1);
                let jsonList= JSON.parse(list);
                console.log(jsonList);
                // console.log(list2[0].name);

                for (i=0; i<jsonList.length; i++)
                {
                    let namelabel = document.createElement("Label");
                    let statuslabel = document.createElement("Label");
                    let amountlabel = document.createElement("Label");
                    let qtylabel = document.createElement("Label");
                    let brlabel = document.createElement("Label");
                    let image = document.createElement("img");


                    image.setAttribute("class","listImage");
                    namelabel.setAttribute("class","namelistlabels");
                    statuslabel.setAttribute("class","listlabels");
                    amountlabel.setAttribute("class","listlabels");
                    qtylabel.setAttribute("class","listlabels");



                    // asign values
                    namelabel.innerHTML ="Name :: "+jsonList[i].name+"<br>";
                    statuslabel.innerHTML ="Size :: "+jsonList[i].status+"<br>";
                    amountlabel.innerHTML ="Amount :: "+jsonList[i].amount+"<br>";
                    qtylabel.innerHTML = "Qty :: "+jsonList[i].qty +"<br><br>";
                    image.src= APIImages+jsonList[i].image
                    brlabel.innerHTML ="<br><br><br>"

                    image.appendChild(brlabel);
                    qtylabel.appendChild(image);
                    amountlabel.appendChild(qtylabel);
                    statuslabel.appendChild(amountlabel);
                    namelabel.appendChild(statuslabel);
                    parentDiv.appendChild(namelabel);

                }

            }
            });
}

function Show_Cleared_Customer_Payments_Details (APICall)
{
    $.ajax({
            url:APICall,
            type:'get',
            dataType:'JSON',
            error: function ()
            {
                console.log("Request Unsuccessful")
            },
            success: function (response)
            {

                let thead = '<tr class="table-thead">'+
                            '<th class="table-thead-th">'+'Customer'+'</th>'+
                            '<th class="table-thead-th">'+'Order Date'+'</th>'+
                            '<th class="table-thead-th">'+' Reference '+'</th>'+
                            '<th class="table-thead-th">'+'Order Amount'+'</th>'+
                            '<th class="table-thead-th">'+'Payment Status'+'</th>'+
                            '<th class="table-thead-th">'+'Payment Made'+'</th>'+
                            '<th class="table-thead-th">'+'PaymentDate'+'</th>'+


                            '</tr>';
                $('#html-table-id tbody').append(thead);

                let results = response
                for (i=0; i<results.length; i++)
                {
                    let Phone = response[i].Phone;
                    let OrderDate = response[i].PalaceHolderOne;
                    let Amount = response[i].Amount
                    let Reference = response[i].Reference;
                    let PaymentStatus = response[i].PalaceHolderTwo;
                    let AmountPaid = response[i].PalaceHolderThree;
                    let PaymentDate = response[i].PalaceHolderFive;


                    let tablerow = '<tr class="table-row">'+
                                        '<td class="table-row-td">'  +  Phone + "</td>" +
                                        '<td class="table-row-td">'  +  OrderDate + "</td>" +
                                        '<td class="table-row-td">'  +  Reference+ "</td>" +
                                        '<td class="table-row-td">'  +  Amount + "</td>" +
                                        '<td class="table-row-td">'  +  PaymentStatus + "</td>" +
                                        '<td class="table-row-td">'  +  AmountPaid + "</td>" +
                                        '<td class="table-row-td">'  +  PaymentDate + "</td>" +

                                    "</tr>"
                    $('#html-table-id tbody').append(tablerow);

                }

            }
            });
}


function Show_Not_Cleared_Customer_Payments_Details ()
{
    $.ajax({
            url:APIListNotClearedPayments,
            type:'get',
            dataType:'JSON',
            error: function ()
            {
                console.log("Request Unsuccessful")
            },
            success: function (response)
            {

                let thead = '<tr class="table-thead">'+
                            '<th class="table-thead-th">'+'Customer'+'</th>'+
                            '<th class="table-thead-th">'+'Order Date'+'</th>'+
                            '<th class="table-thead-th">'+' Reference '+'</th>'+
                            '<th class="table-thead-th">'+'Order Amount'+'</th>'+
                            '<th class="table-thead-th">'+'Payment Status'+'</th>'+

                            '</tr>';
                $('#html-table-id tbody').append(thead);

                let results = response
                for (i=0; i<results.length; i++)
                {
                    let Phone = response[i].Phone;
                    let OrderDate = response[i].PalaceHolderOne;
                    let Amount = response[i].Amount
                    let Reference = response[i].Reference;
                    let PaymentStatus = response[i].PalaceHolderTwo;


                    let tablerow = '<tr class="table-row">'+
                                        '<td class="table-row-td">'  +  Phone + "</td>" +
                                        '<td class="table-row-td">'  +  OrderDate + "</td>" +
                                        '<td class="table-row-td">'  +  Reference+ "</td>" +
                                        '<td class="table-row-td">'  +  Amount + "</td>" +
                                        '<td class="table-row-td">'  +  PaymentStatus + "</td>" +
                                    "</tr>"
                    $('#html-table-id tbody').append(tablerow);

                }

            }
            });
}



function Show_Dashboard_Orders_Status (APICall,CustomerId,AmountId)
{
    $.ajax({
            url:APICall,
            type:'get',
            dataType:'JSON',
            error: function ()
            {
                alert("Request Unsuccessful")
            },
            success: function (response)
            {
                let total = 0;
                let results = response;
                let customers = response.length;
                for (i=0; i<results.length; i++)
                {
                    let Amount = response[i].Amount;
                    let withoutCommas = Amount.replace(/,/g, '');
                    total += parseInt(withoutCommas);
                }
                document.getElementById(CustomerId).innerHTML = customers
                document.getElementById(AmountId).innerHTML = total.toLocaleString()
            }
            });
}
function Show_Dashboard_Payments_Status (APICall,CustomerId,AmountId)
{
    $.ajax({
            url:APICall,
            type:'get',
            dataType:'JSON',
            error: function ()
            {
                alert("Request Unsuccessful")
            },
            success: function (response)
            {
                let total = 0;
                let results = response;
                let customers = response.length;
                for (i=0; i<results.length; i++)
                {
                    let Amount = response[i].PalaceHolderThree;
                    let withoutCommas = Amount.replace(/,/g, '');
                    total += parseInt(withoutCommas);
                }
                document.getElementById(CustomerId).innerHTML = customers
                document.getElementById(AmountId).innerHTML = total.toLocaleString()
            }
            });
}


function Show_Orders_Details (APICall)
{
    $.ajax({
            url:APICall,
            type:'get',
            dataType:'JSON',
            error: function ()
            {
                console.log("Request Unsuccessful")
            },
            success: function (response)
            {

                let thead = '<tr class="table-thead">'+
                            '<th class="table-thead-th">'+'Customer'+'</th>'+
                            '<th class="table-thead-th">'+'Order Date'+'</th>'+
                            '<th class="table-thead-th">'+' Reference '+'</th>'+
                            '<th class="table-thead-th">'+'Order Amount'+'</th>'+
                            '<th class="table-thead-th">'+'Delivery Method'+'</th>'+
                            '<th class="table-thead-th">'+'Payment Method'+'</th>'+
                            '<th class="table-thead-th">'+'Payment Made'+'</th>'+
                            '<th class="table-thead-th">'+'Order Status'+'</th>'+



                            '</tr>';
                $('#html-table-id tbody').append(thead);

                let results = response
                for (i=0; i<results.length; i++)
                {
                    let Phone = response[i].Phone;
                    let OrderDate = response[i].PalaceHolderOne;
                    let Amount = response[i].Amount
                    let Reference = response[i].Reference;
                    let DeliveryMethod = response[i].DeliveryMethod;
                    let PaymentMethod = response[i].PaymentMethod;
                    let PaymentStatus = response[i].PalaceHolderTwo;
                    let OrderStatus = response[i].Status;



                    let tablerow = '<tr class="table-row">'+
                                        '<td class="table-row-td">'  +  Phone + "</td>" +
                                        '<td class="table-row-td">'  +  OrderDate + "</td>" +
                                        '<td class="table-row-td">'  +  Reference+ "</td>" +
                                        '<td class="table-row-td">'  +  Amount + "</td>" +
                                        '<td class="table-row-td">'  +  DeliveryMethod + "</td>" +
                                        '<td class="table-row-td">'  +  PaymentMethod + "</td>" +
                                        '<td class="table-row-td">'  +  PaymentStatus + "</td>" +
                                        '<td class="table-row-td">'  +  OrderStatus + "</td>" +
                                    "</tr>"
                    $('#html-table-id tbody').append(tablerow);

                }

            }
            });
}

