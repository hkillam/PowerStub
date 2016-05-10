<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// https://myaccount.xcelenergy.com/oam/user/getMyBillsAccounts.req?account=6348558270
// http://powerstub.killamsolutions.ca/oam/user/getMyBillsAccounts.php?account=6348558270

$account = htmlspecialchars($_GET["account"]);
?>
{
    "avgMonthlyPayment": null,
    "currentBalance": 0.0,
    "currentCharges": [
        {
            "amount": 32.88,
            "name": "Electricity Service"
        },
        {
            "amount": 40.89,
            "name": "Natural Gas Service"
        },
        {
            "amount": 4.98,
            "name": "Taxes \u0026 Fees"
        }
    ],
    "disabled": false,
    "dueDate": "2016-05-02T12:00:00-07:00",
    "ebillEnrolled": true,
    "hasManySchedPayments": 0,
    "hasScheduledPayment": null,
    "isRapOrAutoPay": true,
    "lastPaymentAmt": 78.75,
    "lastPaymentDate": "Mon May 02 00:00:00 UTC 2016",
    "lastStmtDate": "2016-04-12T12:00:00-07:00",
    "lastStmtNum": 497327820,
    "nextPaymentDate": "",
    "nextSchedStatus": null,
    "nextScheduledPaymentAmount": null,
    "nextScheduledPaymentDate": null,
    "nickname": "ENERGY USERS INC",
    "number": "<? echo $account ?>",
    "overdue": false,
    "payments": [
        {
            "amount": -78.75,
            "date": "2016-05-02T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -83.78,
            "date": "2016-03-30T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -104.81,
            "date": "2016-03-01T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -154.18,
            "date": "2016-02-01T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -115.89,
            "date": "2015-12-29T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -73.61,
            "date": "2015-11-30T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -12.89,
            "date": "2015-10-27T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -60.53,
            "date": "2015-10-09T12:00:00-07:00",
            "isReturned": "",
            "type": "PHONE PAY"
        },
        {
            "amount": -22.34,
            "date": "2015-09-21T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -23.42,
            "date": "2015-08-24T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -18.52,
            "date": "2015-07-22T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -20.03,
            "date": "2015-06-23T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -20.91,
            "date": "2015-05-26T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -21.06,
            "date": "2015-04-22T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -20.95,
            "date": "2015-03-25T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -20.8,
            "date": "2015-02-24T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -25.97,
            "date": "2015-01-26T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -20.42,
            "date": "2014-12-22T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -20.22,
            "date": "2014-11-24T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -20.01,
            "date": "2014-10-20T12:00:00-07:00",
            "isReturned": "",
            "type": "Online Payment"
        },
        {
            "amount": -19.23,
            "date": "2014-09-10T12:00:00-07:00",
            "isReturned": "",
            "type": "ELECTRONIC PAYMENT"
        },
        {
            "amount": -21.77,
            "date": "2014-08-27T12:00:00-07:00",
            "isReturned": "",
            "type": "ELECTRONIC PAYMENT"
        },
        {
            "amount": -21.84,
            "date": "2014-07-11T12:00:00-07:00",
            "isReturned": "",
            "type": "ELECTRONIC PAYMENT"
        },
        {
            "amount": -21.32,
            "date": "2014-06-25T12:00:00-07:00",
            "isReturned": "",
            "type": "PHONE PAY"
        },
        {
            "amount": -20.75,
            "date": "2014-05-23T12:00:00-07:00",
            "isReturned": "",
            "type": "ELECTRONIC PAYMENT"
        }
    ],
    "programs": {
        "AMP_opportunity": false,
        "SAVERSSWITCH_enrolled": true,
        "PAYMENT_ARRANGEMENT": true,
        "WINDSOURCE_opportunity": false,
        "EBill": true
    },
    "reportAvailable": true,
    "scheduledPayments": [

    ],
    "state": "co",
    "statements": [
        {
            "balanceDue": 78.75,
            "billNumber": 497327820,
            "comparison": {
                "avgDailyTemp": {
                    "current": "43 F",
                    "previous": "52 F"
                },
                "electricCostPerDay": {
                    "current": 1.21,
                    "previous": 0.0
                },
                "electricPerDay": {
                    "current": 9.5,
                    "previous": 0.0
                },
                "gasCostPerDay": {
                    "current": 1.51,
                    "previous": 0.0
                },
                "gasPerDay": {
                    "current": 2.2,
                    "previous": 0.0
                }
            },
            "date": "2016-04-12T12:00:00-07:00",
            "dueDate": "2016-05-02T12:00:00-07:00",
            "paymentReceived": 78.75,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "xx-<? echo $account ?>-x"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "04/12/2016"
                },
                {
                    "label": "Due Date",
                    "value": "05/02/2016"
                },
                {
                    "label": "Mailing Address",
                    "value": "221B Baker Street"
                },
                {
                    "label": "",
                    "value": "LONDON CO 90210-1230"
                },
                {
                    "label": "Previous Balance 03/14",
                    "value": "$83.78"
                },
                {
                    "label": "Payments Received",
                    "value": "$83.78"
                },
                {
                    "label": "Balance Forward 04/12",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$78.75"
                },
                {
                    "label": "Actual Current Balance 04/12",
                    "value": "$78.75"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301480088"
                },
                {
                    "label": "Premises Identifier",
                    "value": "221B Baker Street"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$78.75"
                },
                {
                    "label": "Total Amount",
                    "value": "$78.75"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 83.78,
            "billNumber": 493594381,
            "comparison": {
                "avgDailyTemp": {
                    "current": "47 F",
                    "previous": "33 F"
                },
                "electricCostPerDay": {
                    "current": 1.23,
                    "previous": 0.0
                },
                "electricPerDay": {
                    "current": 10.1,
                    "previous": 0.0
                },
                "gasCostPerDay": {
                    "current": 1.39,
                    "previous": 0.0
                },
                "gasPerDay": {
                    "current": 2.0,
                    "previous": 0.0
                }
            },
            "date": "2016-03-14T12:00:00-07:00",
            "dueDate": "2016-04-01T12:00:00-07:00",
            "paymentReceived": 83.78,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "03/14/2016"
                },
                {
                    "label": "Due Date",
                    "value": "04/01/2016"
                },
                {
                    "label": "Mailing Address",
                    "value": "221B Baker Street"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80205-5307"
                },
                {
                    "label": "Previous Balance 02/11",
                    "value": "$104.81"
                },
                {
                    "label": "Payments Received",
                    "value": "$104.81"
                },
                {
                    "label": "Balance Forward 03/14",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$83.78"
                },
                {
                    "label": "Actual Current Balance 03/14",
                    "value": "$83.78"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301480088"
                },
                {
                    "label": "Premises Identifier",
                    "value": "221B Baker Street"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$83.78"
                },
                {
                    "label": "Total Amount",
                    "value": "$83.78"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 104.81,
            "billNumber": 489865647,
            "comparison": {
                "avgDailyTemp": {
                    "current": "36 F",
                    "previous": "42 F"
                },
                "electricCostPerDay": {
                    "current": 1.53,
                    "previous": 0.0
                },
                "electricPerDay": {
                    "current": 12.9,
                    "previous": 0.0
                },
                "gasCostPerDay": {
                    "current": 2.09,
                    "previous": 0.0
                },
                "gasPerDay": {
                    "current": 3.3,
                    "previous": 0.0
                }
            },
            "date": "2016-02-11T12:00:00-07:00",
            "dueDate": "2016-03-03T12:00:00-07:00",
            "paymentReceived": 104.81,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "02/11/2016"
                },
                {
                    "label": "Due Date",
                    "value": "03/03/2016"
                },
                {
                    "label": "Mailing Address",
                    "value": "221B Baker Street"
                },
                {
                    "label": "",
                    "value": "LONDON CO 90210-1234"
                },
                {
                    "label": "Previous Balance 01/13",
                    "value": "$154.18"
                },
                {
                    "label": "Payments Received",
                    "value": "$154.18"
                },
                {
                    "label": "Balance Forward 02/11",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$104.81"
                },
                {
                    "label": "Actual Current Balance 02/11",
                    "value": "$104.81"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301480088"
                },
                {
                    "label": "Premises Identifier",
                    "value": "221B Baker Street"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$104.81"
                },
                {
                    "label": "Total Amount",
                    "value": "$104.81"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 154.18,
            "billNumber": 486150688,
            "comparison": {
                "avgDailyTemp": {
                    "current": "30 F",
                    "previous": "29 F"
                },
                "electricCostPerDay": {
                    "current": 1.88,
                    "previous": 0.0
                },
                "electricPerDay": {
                    "current": 16.3,
                    "previous": 0.0
                },
                "gasCostPerDay": {
                    "current": 2.65,
                    "previous": 0.0
                },
                "gasPerDay": {
                    "current": 4.4,
                    "previous": 0.0
                }
            },
            "date": "2016-01-13T12:00:00-07:00",
            "dueDate": "2016-02-03T12:00:00-07:00",
            "paymentReceived": 154.18,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "01/13/2016"
                },
                {
                    "label": "Due Date",
                    "value": "02/03/2016"
                },
                {
                    "label": "Mailing Address",
                    "value": "221B Baker Street"
                },
                {
                    "label": "",
                    "value": "LONDON CO 90210-1234"
                },
                {
                    "label": "Previous Balance 12/10",
                    "value": "$115.89"
                },
                {
                    "label": "Payments Received",
                    "value": "$115.89"
                },
                {
                    "label": "Balance Forward 01/13",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$154.18"
                },
                {
                    "label": "Actual Current Balance 01/13",
                    "value": "$154.18"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301480088"
                },
                {
                    "label": "Premises Identifier",
                    "value": "221B Baker Street"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$154.18"
                },
                {
                    "label": "Total Amount",
                    "value": "$154.18"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 115.89,
            "billNumber": 482442819,
            "comparison": {
                "avgDailyTemp": {
                    "current": "40 F",
                    "previous": "34 F"
                },
                "electricCostPerDay": {
                    "current": 1.62,
                    "previous": 0.0
                },
                "electricPerDay": {
                    "current": 13.1,
                    "previous": 0.0
                },
                "gasCostPerDay": {
                    "current": 2.12,
                    "previous": 0.0
                },
                "gasPerDay": {
                    "current": 3.2,
                    "previous": 0.0
                }
            },
            "date": "2015-12-10T12:00:00-07:00",
            "dueDate": "2015-12-31T12:00:00-07:00",
            "paymentReceived": 115.89,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "12/10/2015"
                },
                {
                    "label": "Due Date",
                    "value": "12/31/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "221B Baker Street"
                },
                {
                    "label": "",
                    "value": "London CO 90210-1234"
                },
                {
                    "label": "Previous Balance 11/09",
                    "value": "$73.61"
                },
                {
                    "label": "Payments Received",
                    "value": "$73.61"
                },
                {
                    "label": "Balance Forward 12/10",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$115.89"
                },
                {
                    "label": "Actual Current Balance 12/10",
                    "value": "$115.89"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301480088"
                },
                {
                    "label": "Premises Identifier",
                    "value": "221B Baker Street"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$115.89"
                },
                {
                    "label": "Total Amount",
                    "value": "$115.89"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 73.61,
            "billNumber": 478700202,
            "comparison": {
                "avgDailyTemp": {
                    "current": "54 F",
                    "previous": "54 F"
                },
                "electricCostPerDay": {
                    "current": 1.24,
                    "previous": 0.0
                },
                "electricPerDay": {
                    "current": 9.5,
                    "previous": 0.0
                },
                "gasCostPerDay": {
                    "current": 1.13,
                    "previous": 0.0
                },
                "gasPerDay": {
                    "current": 1.3,
                    "previous": 0.0
                }
            },
            "date": "2015-11-09T12:00:00-07:00",
            "dueDate": "2015-12-01T12:00:00-07:00",
            "paymentReceived": 73.61,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "11/09/2015"
                },
                {
                    "label": "Due Date",
                    "value": "12/01/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "221B Baker Street"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80205-5307"
                },
                {
                    "label": "Previous Balance 10/09",
                    "value": "$12.89"
                },
                {
                    "label": "Payments Received",
                    "value": "$12.89"
                },
                {
                    "label": "Balance Forward 11/09",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$73.61"
                },
                {
                    "label": "Actual Current Balance 11/09",
                    "value": "$73.61"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301480088"
                },
                {
                    "label": "Premises Identifier",
                    "value": "221B Baker Street"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$73.61"
                },
                {
                    "label": "Total Amount",
                    "value": "$73.61"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 12.89,
            "billNumber": 475009368,
            "comparison": {
                "avgDailyTemp": {
                    "current": "66 F",
                    "previous": "62 F"
                },
                "electricCostPerDay": {
                    "current": -0.18,
                    "previous": 0.0
                },
                "electricPerDay": {
                    "current": 10.1,
                    "previous": 0.0
                },
                "gasCostPerDay": {
                    "current": 0.64,
                    "previous": 0.0
                },
                "gasPerDay": {
                    "current": 0.3,
                    "previous": 0.0
                }
            },
            "date": "2015-10-09T12:00:00-07:00",
            "dueDate": "2015-10-29T12:00:00-07:00",
            "paymentReceived": -21.96,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "10/09/2015"
                },
                {
                    "label": "Due Date",
                    "value": "10/29/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "221B Baker Street"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80205-5307"
                },
                {
                    "label": "Previous Balance 09/11",
                    "value": "$82.87"
                },
                {
                    "label": "Payments Received",
                    "value": "$82.87"
                },
                {
                    "label": "Balance Forward 10/09",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$12.89"
                },
                {
                    "label": "Actual Current Balance 10/09",
                    "value": "$12.89"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301480088"
                },
                {
                    "label": "Premises Identifier",
                    "value": "221B Baker Street"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$12.89"
                },
                {
                    "label": "Total Amount",
                    "value": "$12.89"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 82.87,
            "billNumber": 471638841,
            "comparison": null,
            "date": "2015-09-14T12:00:00-07:00",
            "dueDate": "2015-10-02T12:00:00-07:00",
            "paymentReceived": 60.53,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "09/14/2015"
                },
                {
                    "label": "Due Date",
                    "value": "10/02/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "221B Baker Street"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80205-5307"
                },
                {
                    "label": "Previous Balance 09/02",
                    "value": "$22.34"
                },
                {
                    "label": "Payments Received",
                    "value": "$0.00"
                },
                {
                    "label": "Balance Forward 09/14",
                    "value": "$22.34"
                },
                {
                    "label": "Current Charges",
                    "value": "$60.53"
                },
                {
                    "label": "Actual Current Balance 09/14",
                    "value": "$82.87"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$1.56"
                },
                {
                    "label": "Total Amount",
                    "value": "$60.53"
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301480088"
                },
                {
                    "label": "Premises Identifier",
                    "value": "221B Baker Street"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$58.97"
                },
                {
                    "label": "Total Amount",
                    "value": "$60.53"
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 22.34,
            "billNumber": 470359324,
            "comparison": {
                "avgDailyTemp": {
                    "current": "72 F",
                    "previous": "70 F"
                },
                "electricCostPerDay": {
                    "current": 0.77,
                    "previous": 0.66
                },
                "electricPerDay": {
                    "current": 5.0,
                    "previous": 3.5
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2015-09-02T12:00:00-07:00",
            "dueDate": "2015-09-23T12:00:00-07:00",
            "paymentReceived": 22.34,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "09/02/2015"
                },
                {
                    "label": "Due Date",
                    "value": "09/23/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 08/04",
                    "value": "$23.42"
                },
                {
                    "label": "Payments Received",
                    "value": "$23.42"
                },
                {
                    "label": "Balance Forward 09/02",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$22.34"
                },
                {
                    "label": "Non-Recurring Charges / Credits",
                    "value": "$0.00"
                },
                {
                    "label": "Actual Current Balance 09/02",
                    "value": "$22.34"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$22.34"
                },
                {
                    "label": "Total Amount",
                    "value": "$22.34"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 23.42,
            "billNumber": 466828164,
            "comparison": {
                "avgDailyTemp": {
                    "current": "72 F",
                    "previous": "74 F"
                },
                "electricCostPerDay": {
                    "current": 0.81,
                    "previous": 0.66
                },
                "electricPerDay": {
                    "current": 5.3,
                    "previous": 3.7
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2015-08-05T12:00:00-07:00",
            "dueDate": "2015-08-25T12:00:00-07:00",
            "paymentReceived": 23.42,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "08/05/2015"
                },
                {
                    "label": "Due Date",
                    "value": "08/25/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 07/06",
                    "value": "$18.52"
                },
                {
                    "label": "Payments Received",
                    "value": "$18.52"
                },
                {
                    "label": "Balance Forward 08/05",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$23.42"
                },
                {
                    "label": "Actual Current Balance 08/05",
                    "value": "$23.42"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$23.42"
                },
                {
                    "label": "Total Amount",
                    "value": "$23.42"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 18.52,
            "billNumber": 462917520,
            "comparison": {
                "avgDailyTemp": {
                    "current": "70 F",
                    "previous": "68 F"
                },
                "electricCostPerDay": {
                    "current": 0.6,
                    "previous": 0.75
                },
                "electricPerDay": {
                    "current": 3.2,
                    "previous": 4.1
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2015-07-06T12:00:00-07:00",
            "dueDate": "2015-07-24T12:00:00-07:00",
            "paymentReceived": 18.52,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "07/06/2015"
                },
                {
                    "label": "Due Date",
                    "value": "07/24/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 06/05",
                    "value": "$20.03"
                },
                {
                    "label": "Payments Received",
                    "value": "$20.03"
                },
                {
                    "label": "Balance Forward 07/06",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$18.52"
                },
                {
                    "label": "Actual Current Balance 07/06",
                    "value": "$18.52"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$18.52"
                },
                {
                    "label": "Total Amount",
                    "value": "$18.52"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 20.03,
            "billNumber": 459399042,
            "comparison": {
                "avgDailyTemp": {
                    "current": "54 F",
                    "previous": "59 F"
                },
                "electricCostPerDay": {
                    "current": 0.65,
                    "previous": 0.71
                },
                "electricPerDay": {
                    "current": 3.6,
                    "previous": 3.8
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2015-06-05T12:00:00-07:00",
            "dueDate": "2015-06-25T12:00:00-07:00",
            "paymentReceived": 20.03,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "06/05/2015"
                },
                {
                    "label": "Due Date",
                    "value": "06/25/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 05/05",
                    "value": "$20.91"
                },
                {
                    "label": "Payments Received",
                    "value": "$20.91"
                },
                {
                    "label": "Balance Forward 06/05",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$20.03"
                },
                {
                    "label": "Actual Current Balance 06/05",
                    "value": "$20.03"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$20.03"
                },
                {
                    "label": "Total Amount",
                    "value": "$20.03"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 20.91,
            "billNumber": 455691138,
            "comparison": {
                "avgDailyTemp": {
                    "current": "51 F",
                    "previous": "53 F"
                },
                "electricCostPerDay": {
                    "current": 0.72,
                    "previous": 0.65
                },
                "electricPerDay": {
                    "current": 4.1,
                    "previous": 3.4
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2015-05-06T12:00:00-07:00",
            "dueDate": "2015-05-27T12:00:00-07:00",
            "paymentReceived": 20.91,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "05/06/2015"
                },
                {
                    "label": "Due Date",
                    "value": "05/27/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 04/06",
                    "value": "$21.06"
                },
                {
                    "label": "Payments Received",
                    "value": "$21.06"
                },
                {
                    "label": "Balance Forward 05/06",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$20.91"
                },
                {
                    "label": "Actual Current Balance 05/06",
                    "value": "$20.91"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$20.91"
                },
                {
                    "label": "Total Amount",
                    "value": "$20.91"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 21.06,
            "billNumber": 451803922,
            "comparison": {
                "avgDailyTemp": {
                    "current": "51 F",
                    "previous": "43 F"
                },
                "electricCostPerDay": {
                    "current": 0.68,
                    "previous": 0.73
                },
                "electricPerDay": {
                    "current": 3.9,
                    "previous": 3.9
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2015-04-06T12:00:00-07:00",
            "dueDate": "2015-04-24T12:00:00-07:00",
            "paymentReceived": 21.06,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "04/06/2015"
                },
                {
                    "label": "Due Date",
                    "value": "04/24/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 03/06",
                    "value": "$20.95"
                },
                {
                    "label": "Payments Received",
                    "value": "$20.95"
                },
                {
                    "label": "Balance Forward 04/06",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$21.06"
                },
                {
                    "label": "Actual Current Balance 04/06",
                    "value": "$21.06"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$21.06"
                },
                {
                    "label": "Total Amount",
                    "value": "$21.06"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 20.95,
            "billNumber": 448284909,
            "comparison": {
                "avgDailyTemp": {
                    "current": "33 F",
                    "previous": "32 F"
                },
                "electricCostPerDay": {
                    "current": 0.7,
                    "previous": 0.78
                },
                "electricPerDay": {
                    "current": 4.0,
                    "previous": 4.8
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2015-03-09T12:00:00-07:00",
            "dueDate": "2015-03-27T12:00:00-07:00",
            "paymentReceived": 20.95,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "03/09/2015"
                },
                {
                    "label": "Due Date",
                    "value": "03/27/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 02/04",
                    "value": "$20.80"
                },
                {
                    "label": "Payments Received",
                    "value": "$20.80"
                },
                {
                    "label": "Balance Forward 03/09",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$20.95"
                },
                {
                    "label": "Actual Current Balance 03/09",
                    "value": "$20.95"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$20.95"
                },
                {
                    "label": "Total Amount",
                    "value": "$20.95"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 20.8,
            "billNumber": 444605381,
            "comparison": {
                "avgDailyTemp": {
                    "current": "38 F",
                    "previous": "31 F"
                },
                "electricCostPerDay": {
                    "current": 0.72,
                    "previous": 0.86
                },
                "electricPerDay": {
                    "current": 4.1,
                    "previous": 5.3
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2015-02-05T12:00:00-07:00",
            "dueDate": "2015-02-26T12:00:00-07:00",
            "paymentReceived": 20.8,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "02/05/2015"
                },
                {
                    "label": "Due Date",
                    "value": "02/26/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 01/06",
                    "value": "$25.97"
                },
                {
                    "label": "Payments Received",
                    "value": "$25.97"
                },
                {
                    "label": "Balance Forward 02/05",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$20.80"
                },
                {
                    "label": "Actual Current Balance 02/05",
                    "value": "$20.80"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$20.80"
                },
                {
                    "label": "Total Amount",
                    "value": "$20.80"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 25.97,
            "billNumber": 440738297,
            "comparison": {
                "avgDailyTemp": {
                    "current": "31 F",
                    "previous": "27 F"
                },
                "electricCostPerDay": {
                    "current": 0.74,
                    "previous": 0.81
                },
                "electricPerDay": {
                    "current": 4.8,
                    "previous": 5.4
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2015-01-06T12:00:00-07:00",
            "dueDate": "2015-01-27T12:00:00-07:00",
            "paymentReceived": 25.97,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "01/06/2015"
                },
                {
                    "label": "Due Date",
                    "value": "01/27/2015"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 12/02",
                    "value": "$20.42"
                },
                {
                    "label": "Payments Received",
                    "value": "$20.42"
                },
                {
                    "label": "Balance Forward 01/06",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$25.97"
                },
                {
                    "label": "Actual Current Balance 01/06",
                    "value": "$25.97"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$25.97"
                },
                {
                    "label": "Total Amount",
                    "value": "$25.97"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 20.42,
            "billNumber": 436894782,
            "comparison": {
                "avgDailyTemp": {
                    "current": "36 F",
                    "previous": "42 F"
                },
                "electricCostPerDay": {
                    "current": 0.64,
                    "previous": 0.67
                },
                "electricPerDay": {
                    "current": 3.6,
                    "previous": 4.0
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2014-12-02T12:00:00-07:00",
            "dueDate": "2014-12-22T12:00:00-07:00",
            "paymentReceived": 20.42,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "12/02/2014"
                },
                {
                    "label": "Due Date",
                    "value": "12/22/2014"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 10/31",
                    "value": "$20.22"
                },
                {
                    "label": "Payments Received",
                    "value": "$20.22"
                },
                {
                    "label": "Balance Forward 12/02",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$20.42"
                },
                {
                    "label": "Actual Current Balance 12/02",
                    "value": "$20.42"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$20.42"
                },
                {
                    "label": "Total Amount",
                    "value": "$20.42"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 20.22,
            "billNumber": 433522815,
            "comparison": {
                "avgDailyTemp": {
                    "current": "56 F",
                    "previous": "47 F"
                },
                "electricCostPerDay": {
                    "current": 0.7,
                    "previous": 0.76
                },
                "electricPerDay": {
                    "current": 3.9,
                    "previous": 4.4
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2014-11-03T12:00:00-07:00",
            "dueDate": "2014-11-24T12:00:00-07:00",
            "paymentReceived": 20.22,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "11/03/2014"
                },
                {
                    "label": "Due Date",
                    "value": "11/24/2014"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 10/02",
                    "value": "$20.01"
                },
                {
                    "label": "Payments Received",
                    "value": "$20.01"
                },
                {
                    "label": "Balance Forward 11/03",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$20.22"
                },
                {
                    "label": "Actual Current Balance 11/03",
                    "value": "$20.22"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$20.22"
                },
                {
                    "label": "Total Amount",
                    "value": "$20.22"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 20.01,
            "billNumber": 429669790,
            "comparison": {
                "avgDailyTemp": {
                    "current": "64 F",
                    "previous": "65 F"
                },
                "electricCostPerDay": {
                    "current": 0.69,
                    "previous": 0.74
                },
                "electricPerDay": {
                    "current": 3.8,
                    "previous": 4.4
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2014-10-02T12:00:00-07:00",
            "dueDate": "2014-10-22T12:00:00-07:00",
            "paymentReceived": 20.01,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "10/02/2014"
                },
                {
                    "label": "Due Date",
                    "value": "10/22/2014"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 09/03",
                    "value": "$19.23"
                },
                {
                    "label": "Payments Received",
                    "value": "$19.23"
                },
                {
                    "label": "Balance Forward 10/02",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$20.01"
                },
                {
                    "label": "Actual Current Balance 10/02",
                    "value": "$20.01"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$20.01"
                },
                {
                    "label": "Total Amount",
                    "value": "$20.01"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 19.23,
            "billNumber": 426178159,
            "comparison": {
                "avgDailyTemp": {
                    "current": "70 F",
                    "previous": "74 F"
                },
                "electricCostPerDay": {
                    "current": 0.66,
                    "previous": 0.79
                },
                "electricPerDay": {
                    "current": 3.5,
                    "previous": 5.1
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2014-09-04T12:00:00-07:00",
            "dueDate": "2014-09-24T12:00:00-07:00",
            "paymentReceived": 19.23,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "09/04/2014"
                },
                {
                    "label": "Due Date",
                    "value": "09/24/2014"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 08/05",
                    "value": "$21.77"
                },
                {
                    "label": "Payments Received",
                    "value": "$21.77"
                },
                {
                    "label": "Balance Forward 09/04",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$19.23"
                },
                {
                    "label": "Actual Current Balance 09/04",
                    "value": "$19.23"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$19.23"
                },
                {
                    "label": "Total Amount",
                    "value": "$19.23"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 21.77,
            "billNumber": 422486159,
            "comparison": {
                "avgDailyTemp": {
                    "current": "74 F",
                    "previous": "74 F"
                },
                "electricCostPerDay": {
                    "current": 0.66,
                    "previous": 1.08
                },
                "electricPerDay": {
                    "current": 3.7,
                    "previous": 5.2
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2014-08-05T12:00:00-07:00",
            "dueDate": "2014-08-25T12:00:00-07:00",
            "paymentReceived": 21.77,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "08/05/2014"
                },
                {
                    "label": "Due Date",
                    "value": "08/25/2014"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 07/03",
                    "value": "$21.84"
                },
                {
                    "label": "Payments Received",
                    "value": "$21.84"
                },
                {
                    "label": "Balance Forward 08/05",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$21.77"
                },
                {
                    "label": "Actual Current Balance 08/05",
                    "value": "$21.77"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$21.77"
                },
                {
                    "label": "Total Amount",
                    "value": "$21.77"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 21.84,
            "billNumber": 418790897,
            "comparison": {
                "avgDailyTemp": {
                    "current": "67 F",
                    "previous": "72 F"
                },
                "electricCostPerDay": {
                    "current": 0.75,
                    "previous": 0.0
                },
                "electricPerDay": {
                    "current": 4.1,
                    "previous": 0.0
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2014-07-07T12:00:00-07:00",
            "dueDate": "2014-07-25T12:00:00-07:00",
            "paymentReceived": 21.84,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "07/07/2014"
                },
                {
                    "label": "Due Date",
                    "value": "07/25/2014"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 06/04",
                    "value": "$21.32"
                },
                {
                    "label": "Payments Received",
                    "value": "$21.32"
                },
                {
                    "label": "Balance Forward 07/07",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$21.84"
                },
                {
                    "label": "Actual Current Balance 07/07",
                    "value": "$21.84"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$21.84"
                },
                {
                    "label": "Total Amount",
                    "value": "$21.84"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        },
        {
            "balanceDue": 21.32,
            "billNumber": 415094154,
            "comparison": {
                "avgDailyTemp": {
                    "current": "59 F",
                    "previous": "62 F"
                },
                "electricCostPerDay": {
                    "current": 0.71,
                    "previous": 0.0
                },
                "electricPerDay": {
                    "current": 3.8,
                    "previous": 0.0
                },
                "gasCostPerDay": {
                    "current": null,
                    "previous": null
                },
                "gasPerDay": {
                    "current": null,
                    "previous": null
                }
            },
            "date": "2014-06-05T12:00:00-07:00",
            "dueDate": "2014-06-25T12:00:00-07:00",
            "paymentReceived": 21.32,
            "quickview": [
                {
                    "label": "Billing Summary Details",
                    "value": ""
                },
                {
                    "label": "Account Number",
                    "value": "53-<? echo $account ?>-0"
                },
                {
                    "label": "Account Name",
                    "value": "<? echo $account ?>"
                },
                {
                    "label": "Statement Date",
                    "value": "06/05/2014"
                },
                {
                    "label": "Due Date",
                    "value": "06/25/2014"
                },
                {
                    "label": "Mailing Address",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "",
                    "value": "DENVER CO 80218-3049"
                },
                {
                    "label": "Previous Balance 05/05",
                    "value": "$20.75"
                },
                {
                    "label": "Payments Received",
                    "value": "$20.75"
                },
                {
                    "label": "Balance Forward 06/05",
                    "value": "$0.00"
                },
                {
                    "label": "Current Charges",
                    "value": "$21.32"
                },
                {
                    "label": "Actual Current Balance 06/05",
                    "value": "$21.32"
                },
                {
                    "label": "",
                    "value": ""
                },
                {
                    "label": "Premises Summary",
                    "value": ""
                },
                {
                    "label": "Premises Number",
                    "value": "301474396"
                },
                {
                    "label": "Premises Identifier",
                    "value": "344 WISTERIA LANE"
                },
                {
                    "label": "Current Bill Amount",
                    "value": "$21.32"
                },
                {
                    "label": "Total Amount",
                    "value": "$21.32"
                },
                {
                    "label": "",
                    "value": ""
                }
            ],
            "reportAvailable": true
        }
    ],
    "viewOnly": false
}