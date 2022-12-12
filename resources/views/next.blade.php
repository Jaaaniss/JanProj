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
                    <div class="uuu">
                        <h1 style="float: center">Your size in "EU" is : </h1>
                        <h1 style="float:center;" id="log"></h1>
                        <h1 style="float: center">Your size in "UK" is : </h1>
                        <h1 style="float:center;" id="log1"></h1>

                    </div>
                </div>

                <script>
                window.onload = function() {
                    let usr = document.querySelector("#usr");
                    var shoeSizeMap = [{
                            cm: '21.5',
                            euroSize: '34,5',
                            ukSize: '2,5',
                            usmSize: '3,5 M',
                            uswSize: '5 W'
                        },
                        {
                            cm: '22',
                            euroSize: '35',
                            ukSize: '3',
                            usmSize: '4 M',
                            uswSize: '5,5 W'
                        },
                        {
                            cm: '22.5',
                            euroSize: '36',
                            ukSize: '3,5',
                            usmSize: '4,5 M',
                            uswSize: '6 W'
                        },
                        {
                            cm: '23',
                            euroSize: '36,5',
                            ukSize: '4',
                            usmSize: '5 M',
                            uswSize: '6,5 W'
                        },
                        {
                            cm: '23.5',
                            euroSize: '37',
                            ukSize: '4,5',
                            usmSize: '5,5 M',
                            uswSize: '7 W'
                        },
                        {
                            cm: '24',
                            euroSize: '38',
                            ukSize: '5',
                            usmSize: '6 M',
                            uswSize: '7,5 W'
                        },
                        {
                            cm: '24.5',
                            euroSize: '38,5',
                            ukSize: '5,5',
                            usmSize: '6,5 M',
                            uswSize: '8 W'
                        },
                        {
                            cm: '25',
                            euroSize: '39',
                            ukSize: '6',
                            usmSize: '7 M',
                            uswSize: '8,5 W'
                        },
                        {
                            cm: '25.5',
                            euroSize: '40',
                            ukSize: '6,5',
                            usmSize: '7,5 M',
                            uswSize: '9 W'
                        },
                        {
                            cm: '26',
                            euroSize: '40,5',
                            ukSize: '7',
                            usmSize: '8 M',
                            uswSize: '9,5 W'
                        },
                        {
                            cm: '26.5',
                            euroSize: '41',
                            ukSize: '7,5',
                            usmSize: '8,5 M',
                            uswSize: '10 W'
                        },
                        {
                            cm: '27',
                            euroSize: '42',
                            ukSize: '8',
                            usmSize: '9 M',
                            uswSize: '10,5 W'
                        },
                        {
                            cm: '27.5',
                            euroSize: '42,5',
                            ukSize: '8,5',
                            usmSize: '9,5 M',
                            uswSize: '11 W'
                        },
                        {
                            cm: '28',
                            euroSize: '43',
                            ukSize: '9',
                            usmSize: '10 M',
                            uswSize: '11,5 W'
                        },
                        {
                            cm: '28.5',
                            euroSize: '44',
                            ukSize: '9,5',
                            usmSize: '10,5 M',
                            uswSize: '12 W'
                        },
                        {
                            cm: '29',
                            euroSize: '44,5',
                            ukSize: '10',
                            usmSize: '11 M',
                            uswSize: '12,5 W'
                        },
                        {
                            cm: '29.5',
                            euroSize: '45',
                            ukSize: '10,5',
                            usmSize: '11,5 M',
                            uswSize: '13 W'
                        },
                        {
                            cm: '30',
                            euroSize: '46',
                            ukSize: '11',
                            usmSize: '12 M',
                            uswSize: '13,5 W'
                        },
                        {
                            cm: '31',
                            euroSize: '47',
                            ukSize: '12',
                            usmSize: '13 M',
                            uswSize: '14 W'
                        },
                        {
                            cm: '32',
                            euroSize: '48',
                            ukSize: '13',
                            usmSize: '14 M',
                            uswSize: '14,5 W'
                        },
                        {
                            cm: '33',
                            euroSize: '49',
                            ukSize: '14',
                            usmSize: '15 M',
                            uswSize: '15 W'
                        },
                        {
                            cm: '34',
                            euroSize: '50',
                            ukSize: '15',
                            usmSize: '16 M',
                            uswSize: '15,5 W'
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
                <center> Available soon!</center>
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



            


               <center> Available soon!</center>














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
