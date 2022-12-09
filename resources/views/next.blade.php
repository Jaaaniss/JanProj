<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/design.css') }}" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body id="gradient-custom" class="no-chat-button gl-modal-open" style="overflow-y: scroll;" data-padding-right="85"
    img="https://jooinn.com/images/cloth-background-5.png">


<!-- Visi zīmoli -->


    <div class=lielss>
        <div class="liels1">
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
            <div class="lala">
                <img href="#collapse" class="nav-toggle"
                    src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQnv9ij36ZmZzFbQ3agBIbpsB-sXXJkqqTEGMP3KKyqgNEfgLKS" />
            </div>
            <div id="collapse" style="display:none">
                <div class="form-group ">
                    <div class="col-md-3" id="kk">
                        <label for="usr">Your foot size (cm):</label>
                        <input type="number" class="form-control " id="usr">
                        <input class="btn btn-info" id="bb" type="button" value="Notīrīt" onClick="Clean()" />
                    </div>
                    <hr  style="" />                  
                    <div class="uuu">
                        <h1 style="float: center">Your size in "EU" is : </h1>
                        <h1 style="float:center;" id="log"></h1>
                    </div>
                </div>

                <script>
                window.onload = function() {
                    let usr = document.querySelector("#usr");
                    var shoeSizeMap = [{
                            cm: '24,5',
                            euroSize: '38,5'
                        },
                        {
                            cm: '25',
                            euroSize: '39'
                        },
                        {
                            cm: '25,5',
                            euroSize: '40'
                        },
                        {
                            cm: '26',
                            euroSize: '40,5'
                        },
                        {
                            cm: '26,5',
                            euroSize: '41'
                        },
                        {
                            cm: '27',
                            euroSize: '42'
                        },
                        {
                            cm: '27,5',
                            euroSize: '42,5'
                        },
                        {
                            cm: '28',
                            euroSize: '43'
                        },
                        {
                            cm: '28,5',
                            euroSize: '44'
                        },
                        {
                            cm: '29',
                            euroSize: '44,5'
                        },
                        {
                            cm: '29,5',
                            euroSize: '45'
                        },
                        {
                            cm: '30',
                            euroSize: '46'
                        },
                        {
                            cm: '31',
                            euroSize: '47'
                        },

                    ]

                    function findEuroSizeByCm(inputCm) {
                        var result = shoeSizeMap.find(function(shoeSize) {
                            return shoeSize.cm == inputCm;
                        });
                        return result;
                    }

                    function getSize(ev) {
                        let size = findEuroSizeByCm(ev.target.value)
                        if (size) console.log(size.euroSize);
                    }

                    usr.addEventListener("input", getSize);

                    (function() {
                        var old = console.log;
                        var logger = document.getElementById('log');
                        console.log = function() {
                            for (var i = 0; i < arguments.length; i++) {
                                if (typeof arguments[i] == 'object') {
                                    logger.innerHTML += (JSON && JSON.stringify ? JSON.stringify(arguments[
                                        i], undefined, 2) : arguments[i]) + '<br />';
                                } else {
                                    logger.innerHTML += arguments[i] + '<br />';
                                }
                            }
                        }
                    })();
                }
                console.log(findEuroSizeByCm().euroSize);
                function Clean() {
                    document.getElementById('log').innerHTML = '';
                }
                </script>
            </div>

            <script>
            $(document).ready(function() {
                $('.nav-toggle').click(function() {
                    var collapse_content_selector = $(this).attr('href');
                    var toggle_switch = $(this);
                    $(collapse_content_selector).toggle(function() {
                        if ($(this).css('display') == 'none') {
                            toggle_switch.html('Show');
                        } else {
                            toggle_switch.html('Hide');
                        }
                    });
                });
            });
            </script>

            <div class="liels2">
                <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
                <div class="lala1">
                    <img href="#collapse2" class="nav-toggle2"
                        src="https://seeklogo.com/images/A/adidas-logo-49D5BEBA90-seeklogo.com.png" />
                </div>
                <div id="collapse2" style="display:none">
                    <div class="form-group ">
                        <div class="col-md-3" id="kk">
                            <label for="usr">Your foot size (cm):</label>
                            <input type="number" class="form-control " id="usr">
                            <input class="btn btn-info" id="bb" type="button" value="Notīrīt" onClick="Clean()" />
                        </div>
                        <div class="uuu">
                            <h1 style="float: center">Your size in "EU" is : </h1>
                            <h1 style="float:center;" id="log"></h1>
                        </div>
                    </div>

                    <script>
                    window.onload = function() {
                        let usr = document.querySelector("#usr");
                        var shoeSizeMap = [{
                                cm: '24,5',
                                euroSize: '38,5'
                            },
                            {
                                cm: '25',
                                euroSize: '39'
                            },
                            {
                                cm: '25,5',
                                euroSize: '40'
                            },
                            {
                                cm: '26',
                                euroSize: '40,5'
                            },
                            {
                                cm: '26,5',
                                euroSize: '41'
                            },
                            {
                                cm: '27',
                                euroSize: '42'
                            },
                            {
                                cm: '27,5',
                                euroSize: '42,5'
                            },
                            {
                                cm: '28',
                                euroSize: '43'
                            },
                            {
                                cm: '28,5',
                                euroSize: '44'
                            },
                            {
                                cm: '29',
                                euroSize: '44,5'
                            },
                            {
                                cm: '29,5',
                                euroSize: '45'
                            },
                            {
                                cm: '30',
                                euroSize: '46'
                            },
                            {
                                cm: '31',
                                euroSize: '47'
                            },

                        ]

                        function findEuroSizeByCm(inputCm) {
                            var result = shoeSizeMap.find(function(shoeSize) {
                                return shoeSize.cm == inputCm;
                            });
                            return result;
                        }

                        function getSize(ev) {
                            let size = findEuroSizeByCm(ev.target.value)
                            if (size) console.log(size.euroSize);
                        }

                        usr.addEventListener("input", getSize);

                        (function() {
                            var old = console.log;
                            var logger = document.getElementById('log');
                            console.log = function() {
                                for (var i = 0; i < arguments.length; i++) {
                                    if (typeof arguments[i] == 'object') {
                                        logger.innerHTML += (JSON && JSON.stringify ? JSON.stringify(
                                            arguments[i], undefined, 2) : arguments[i]) + '<br />';
                                    } else {
                                        logger.innerHTML += arguments[i] + '<br />';
                                    }
                                }
                            }
                        })();
                    }
                    console.log(findEuroSizeByCm().euroSize);
                    function Clean() {
                        document.getElementById('log').innerHTML = '';
                    }
                    </script>
                </div>

                <script>
                $(document).ready(function() {
                    $('.nav-toggle2').click(function() {
                        var collapse2_content_selector = $(this).attr('href');
                        var toggle_switch = $(this);
                        $(collapse2_content_selector).toggle(function() {
                            if ($(this).css('display') == 'none') {
                                toggle_switch.html('Show');
                            } else {
                                toggle_switch.html('Hide');
                            }
                        });
                    });
                });
                </script>
            </div>


            <div class="liels3">
                <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
                <div class="lala2">
                    <img href="#collapse3" class="nav-toggle3"
                        src="https://th.bing.com/th/id/OIP.-5BzDHfG77aUDltzc_LIKQAAAA?pid=ImgDet&rs=1" />
                </div>
                <div id="collapse3" style="display:none">




            

















                </div>

                <script>
                $(document).ready(function() {
                    $('.nav-toggle3').click(function() {
                        var collapse3_content_selector = $(this).attr('href');
                        var toggle_switch = $(this);
                        $(collapse3_content_selector).toggle(function() {
                            if ($(this).css('display') == 'none') {
                                toggle_switch.html('Show');
                            } else {
                                toggle_switch.html('Hide');
                            }
                        });
                    });
                });
                </script>
            </div>
        </div>
</body>
</html>
