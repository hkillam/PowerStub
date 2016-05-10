<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// https://myaccount.xcelenergy.com/oam/user/getJsonAccountUsages.req?premise=301480088

$premise= htmlspecialchars($_GET["premise"]);
?>
{
    "accountType": "RESIDENTIAL",
    "addressLine1": "356 DEMIFEY LANE",
    "addressLine2": "",
    "addressLine3": "PIXYVILLE CA 90210-5307",
    "complex": false,
    "current": true,
    "data": {
        "services": [
            {
                "name": "ELECTRICITY-1",
                "data": [
                    {
                        "series": [
                            {
                                "data": [
                                    555.0,
                                    375.0,
                                    324.0,
                                    276.0,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2016"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    327.0,
                                    282.0,
                                    295.0,
                                    407.0
                                ],
                                "label": "2015"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2014"
                            }
                        ],
                        "name": "Usage",
                        "label": "Usage (kWh)"
                    },
                    {
                        "series": [
                            {
                                "data": [
                                    30.01,
                                    36.26,
                                    46.66,
                                    43.16,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2016"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    70.75,
                                    65.91,
                                    54.35,
                                    39.42
                                ],
                                "label": "2015"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2014"
                            }
                        ],
                        "name": "Temperature",
                        "label": "Temperature(F)"
                    },
                    {
                        "series": [
                            {
                                "data": [
                                    63.97,
                                    44.27,
                                    39.36,
                                    35.1,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2016"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    44.61,
                                    -40.0,
                                    38.54,
                                    50.1
                                ],
                                "label": "2015"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2014"
                            }
                        ],
                        "name": "Amount",
                        "label": "Cost ($)"
                    }
                ]
            },
            {
                "name": "NATURAL GAS-1",
                "data": [
                    {
                        "series": [
                            {
                                "data": [
                                    150.0,
                                    97.0,
                                    63.0,
                                    64.0,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2016"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    5.0,
                                    8.0,
                                    39.0,
                                    98.0
                                ],
                                "label": "2015"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2014"
                            }
                        ],
                        "name": "Usage",
                        "label": "Usage (Therms)"
                    },
                    {
                        "series": [
                            {
                                "data": [
                                    30.01,
                                    36.26,
                                    46.66,
                                    43.16,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2016"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    70.75,
                                    65.91,
                                    54.35,
                                    39.42
                                ],
                                "label": "2015"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2014"
                            }
                        ],
                        "name": "Temperature",
                        "label": "Temperature(F)"
                    },
                    {
                        "series": [
                            {
                                "data": [
                                    90.21,
                                    60.54,
                                    44.42,
                                    43.65,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2016"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    6.07,
                                    18.04,
                                    35.07,
                                    65.79
                                ],
                                "label": "2015"
                            },
                            {
                                "data": [
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null,
                                    null
                                ],
                                "label": "2014"
                            }
                        ],
                        "name": "Amount",
                        "label": "Cost ($)"
                    }
                ]
            }
        ],
        "labels": [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec"
        ]
    },
    "endDate": null,
    "greenEnergy": [

    ],
    "number": "<? echo $premise ?>",
    "overview": [
        {
            "cost": 35.1,
            "emissions": 369.288,
            "type": "ELECTRICITY-1",
            "usage": {
                "amount": 276.0,
                "unit": "kWh"
            }
        },
        {
            "cost": 43.65,
            "emissions": 748.8,
            "type": "NATURAL GAS-1",
            "usage": {
                "amount": 64.0,
                "unit": "Therms"
            }
        }
    ],
    "services": [
        {
            "reads": [
                {
                    "billingDays": 29,
                    "details": [
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Actual Demand"
                        },
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Billable Demand"
                        },
                        {
                            "amount": 32.88,
                            "unit": "$",
                            "label": "Electric Charges"
                        },
                        {
                            "amount": 35.1,
                            "unit": "$",
                            "label": "Total Electric Charges"
                        },
                        {
                            "amount": 1.21,
                            "unit": "$",
                            "label": "Total Electric Charges / Day"
                        },
                        {
                            "amount": 43.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 0.0,
                            "unit": "",
                            "label": "Cooling Degree Days"
                        },
                        {
                            "amount": 631.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Tue Apr 12 00:00:00 UTC 2016",
                    "method": "Actual",
                    "usage": {
                        "amount": 276.0,
                        "unit": "kWh"
                    }
                },
                {
                    "billingDays": 32,
                    "details": [
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Actual Demand"
                        },
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Billable Demand"
                        },
                        {
                            "amount": 36.87,
                            "unit": "$",
                            "label": "Electric Charges"
                        },
                        {
                            "amount": 39.36,
                            "unit": "$",
                            "label": "Total Electric Charges"
                        },
                        {
                            "amount": 1.23,
                            "unit": "$",
                            "label": "Total Electric Charges / Day"
                        },
                        {
                            "amount": 47.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 0.0,
                            "unit": "",
                            "label": "Cooling Degree Days"
                        },
                        {
                            "amount": 585.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Mon Mar 14 00:00:00 UTC 2016",
                    "method": "Actual",
                    "usage": {
                        "amount": 324.0,
                        "unit": "kWh"
                    }
                },
                {
                    "billingDays": 29,
                    "details": [
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Actual Demand"
                        },
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Billable Demand"
                        },
                        {
                            "amount": 41.46,
                            "unit": "$",
                            "label": "Electric Charges"
                        },
                        {
                            "amount": 44.27,
                            "unit": "$",
                            "label": "Total Electric Charges"
                        },
                        {
                            "amount": 1.53,
                            "unit": "$",
                            "label": "Total Electric Charges / Day"
                        },
                        {
                            "amount": 36.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 0.0,
                            "unit": "",
                            "label": "Cooling Degree Days"
                        },
                        {
                            "amount": 834.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Thu Feb 11 00:00:00 UTC 2016",
                    "method": "Actual",
                    "usage": {
                        "amount": 375.0,
                        "unit": "kWh"
                    }
                },
                {
                    "billingDays": 34,
                    "details": [
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Actual Demand"
                        },
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Billable Demand"
                        },
                        {
                            "amount": 59.92,
                            "unit": "$",
                            "label": "Electric Charges"
                        },
                        {
                            "amount": 63.97,
                            "unit": "$",
                            "label": "Total Electric Charges"
                        },
                        {
                            "amount": 1.88,
                            "unit": "$",
                            "label": "Total Electric Charges / Day"
                        },
                        {
                            "amount": 30.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 0.0,
                            "unit": "",
                            "label": "Cooling Degree Days"
                        },
                        {
                            "amount": 1189.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Wed Jan 13 00:00:00 UTC 2016",
                    "method": "Actual",
                    "usage": {
                        "amount": 555.0,
                        "unit": "kWh"
                    }
                },
                {
                    "billingDays": 31,
                    "details": [
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Actual Demand"
                        },
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Billable Demand"
                        },
                        {
                            "amount": 46.93,
                            "unit": "$",
                            "label": "Electric Charges"
                        },
                        {
                            "amount": 50.1,
                            "unit": "$",
                            "label": "Total Electric Charges"
                        },
                        {
                            "amount": 1.62,
                            "unit": "$",
                            "label": "Total Electric Charges / Day"
                        },
                        {
                            "amount": 39.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 0.0,
                            "unit": "",
                            "label": "Cooling Degree Days"
                        },
                        {
                            "amount": 792.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Thu Dec 10 00:00:00 UTC 2015",
                    "method": "Actual",
                    "usage": {
                        "amount": 407.0,
                        "unit": "kWh"
                    }
                },
                {
                    "billingDays": 31,
                    "details": [
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Actual Demand"
                        },
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Billable Demand"
                        },
                        {
                            "amount": 36.1,
                            "unit": "$",
                            "label": "Electric Charges"
                        },
                        {
                            "amount": 38.54,
                            "unit": "$",
                            "label": "Total Electric Charges"
                        },
                        {
                            "amount": 1.24,
                            "unit": "$",
                            "label": "Total Electric Charges / Day"
                        },
                        {
                            "amount": 54.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 19.0,
                            "unit": "",
                            "label": "Cooling Degree Days"
                        },
                        {
                            "amount": 345.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Mon Nov 09 00:00:00 UTC 2015",
                    "method": "Actual",
                    "usage": {
                        "amount": 295.0,
                        "unit": "kWh"
                    }
                },
                {
                    "billingDays": 28,
                    "details": [
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Actual Demand"
                        },
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Billable Demand"
                        },
                        {
                            "amount": 0.0,
                            "unit": "$",
                            "label": "Electric Charges"
                        },
                        {
                            "amount": -40.0,
                            "unit": "$",
                            "label": "Total Electric Charges"
                        },
                        {
                            "amount": -1.43,
                            "unit": "$",
                            "label": "Total Electric Charges / Day"
                        },
                        {
                            "amount": 66.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 88.0,
                            "unit": "",
                            "label": "Cooling Degree Days"
                        },
                        {
                            "amount": 65.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Fri Oct 09 00:00:00 UTC 2015",
                    "method": "Actual",
                    "usage": {
                        "amount": 282.0,
                        "unit": "kWh"
                    }
                },
                {
                    "billingDays": 8,
                    "details": [
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Actual Demand"
                        },
                        {
                            "amount": 0.0,
                            "unit": "kW",
                            "label": "Billable Demand"
                        },
                        {
                            "amount": 41.78,
                            "unit": "$",
                            "label": "Electric Charges"
                        },
                        {
                            "amount": 44.61,
                            "unit": "$",
                            "label": "Total Electric Charges"
                        },
                        {
                            "amount": 5.58,
                            "unit": "$",
                            "label": "Total Electric Charges / Day"
                        },
                        {
                            "amount": 71.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 47.0,
                            "unit": "",
                            "label": "Cooling Degree Days"
                        },
                        {
                            "amount": 1.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Fri Sep 11 00:00:00 UTC 2015",
                    "method": "Actual",
                    "usage": {
                        "amount": 327.0,
                        "unit": "kWh"
                    }
                }
            ],
            "name": "ELECTRICITY-1"
        },
        {
            "reads": [
                {
                    "billingDays": 29,
                    "details": [
                        {
                            "amount": 40.89,
                            "unit": "$",
                            "label": "Gas Charges"
                        },
                        {
                            "amount": 43.65,
                            "unit": "$",
                            "label": "Total Gas Charges"
                        },
                        {
                            "amount": 1.51,
                            "unit": "$",
                            "label": "Total Gas Charges / Day"
                        },
                        {
                            "amount": 43.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 631.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Tue Apr 12 00:00:00 UTC 2016",
                    "method": "Actual",
                    "usage": {
                        "amount": 64.0,
                        "unit": "Therms"
                    }
                },
                {
                    "billingDays": 32,
                    "details": [
                        {
                            "amount": 41.62,
                            "unit": "$",
                            "label": "Gas Charges"
                        },
                        {
                            "amount": 44.42,
                            "unit": "$",
                            "label": "Total Gas Charges"
                        },
                        {
                            "amount": 1.39,
                            "unit": "$",
                            "label": "Total Gas Charges / Day"
                        },
                        {
                            "amount": 47.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 585.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Mon Mar 14 00:00:00 UTC 2016",
                    "method": "Actual",
                    "usage": {
                        "amount": 63.0,
                        "unit": "Therms"
                    }
                },
                {
                    "billingDays": 29,
                    "details": [
                        {
                            "amount": 56.7,
                            "unit": "$",
                            "label": "Gas Charges"
                        },
                        {
                            "amount": 60.54,
                            "unit": "$",
                            "label": "Total Gas Charges"
                        },
                        {
                            "amount": 2.09,
                            "unit": "$",
                            "label": "Total Gas Charges / Day"
                        },
                        {
                            "amount": 36.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 834.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Thu Feb 11 00:00:00 UTC 2016",
                    "method": "Actual",
                    "usage": {
                        "amount": 97.0,
                        "unit": "Therms"
                    }
                },
                {
                    "billingDays": 34,
                    "details": [
                        {
                            "amount": 84.5,
                            "unit": "$",
                            "label": "Gas Charges"
                        },
                        {
                            "amount": 90.21,
                            "unit": "$",
                            "label": "Total Gas Charges"
                        },
                        {
                            "amount": 2.65,
                            "unit": "$",
                            "label": "Total Gas Charges / Day"
                        },
                        {
                            "amount": 30.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 1189.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Wed Jan 13 00:00:00 UTC 2016",
                    "method": "Actual",
                    "usage": {
                        "amount": 150.0,
                        "unit": "Therms"
                    }
                },
                {
                    "billingDays": 31,
                    "details": [
                        {
                            "amount": 61.63,
                            "unit": "$",
                            "label": "Gas Charges"
                        },
                        {
                            "amount": 65.79,
                            "unit": "$",
                            "label": "Total Gas Charges"
                        },
                        {
                            "amount": 2.12,
                            "unit": "$",
                            "label": "Total Gas Charges / Day"
                        },
                        {
                            "amount": 39.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 792.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Thu Dec 10 00:00:00 UTC 2015",
                    "method": "Actual",
                    "usage": {
                        "amount": 98.0,
                        "unit": "Therms"
                    }
                },
                {
                    "billingDays": 31,
                    "details": [
                        {
                            "amount": 32.85,
                            "unit": "$",
                            "label": "Gas Charges"
                        },
                        {
                            "amount": 35.07,
                            "unit": "$",
                            "label": "Total Gas Charges"
                        },
                        {
                            "amount": 1.13,
                            "unit": "$",
                            "label": "Total Gas Charges / Day"
                        },
                        {
                            "amount": 54.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 345.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Mon Nov 09 00:00:00 UTC 2015",
                    "method": "Actual",
                    "usage": {
                        "amount": 39.0,
                        "unit": "Therms"
                    }
                },
                {
                    "billingDays": 28,
                    "details": [
                        {
                            "amount": 16.89,
                            "unit": "$",
                            "label": "Gas Charges"
                        },
                        {
                            "amount": 18.04,
                            "unit": "$",
                            "label": "Total Gas Charges"
                        },
                        {
                            "amount": 0.64,
                            "unit": "$",
                            "label": "Total Gas Charges / Day"
                        },
                        {
                            "amount": 66.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 65.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Fri Oct 09 00:00:00 UTC 2015",
                    "method": "Actual",
                    "usage": {
                        "amount": 8.0,
                        "unit": "Therms"
                    }
                },
                {
                    "billingDays": 8,
                    "details": [
                        {
                            "amount": 5.68,
                            "unit": "$",
                            "label": "Gas Charges"
                        },
                        {
                            "amount": 6.07,
                            "unit": "$",
                            "label": "Total Gas Charges"
                        },
                        {
                            "amount": 0.76,
                            "unit": "$",
                            "label": "Total Gas Charges / Day"
                        },
                        {
                            "amount": 71.0,
                            "unit": "°F",
                            "label": "Average Temperature"
                        },
                        {
                            "amount": 1.0,
                            "unit": "",
                            "label": "Heating Degree Days"
                        }
                    ],
                    "lastReadDate": "Fri Sep 11 00:00:00 UTC 2015",
                    "method": "Actual",
                    "usage": {
                        "amount": 5.0,
                        "unit": "Therms"
                    }
                }
            ],
            "name": "NATURAL GAS-1"
        }
    ],
    "startDate": "2015-09-03T12:00:00-07:00",
    "state": "co",
    "status": "CURRENT",
    "twelveMonthDataAvailable": true
}
