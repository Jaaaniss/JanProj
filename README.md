<!-- SELECT * FROM shoesize.vans;
SELECT * FROM shoesize.vans where v_eu=20;  -->



<!-- Visu izmēru masīvs un tā funkcijas -->


                <script>
                window.onload = function() {
                    let usr = document.querySelector("#usr");
                    var shoeSizeMap = [{
                            cm: '21.5',
                            euroSize: '34,5',
                            ukSize: '2,5',
                            usmSize: '3,5',
                            uswSize: '5'
                        },
                        {
                            cm: '22',
                            euroSize: '35',
                            ukSize: '3',
                            usmSize: '4',
                            uswSize: '5,5'
                        },
                        // make db migrations and migration tables
                        // make controllers and select the data needed
                        // pass needed controller via api routes
                        // send controller output to blade.php
                        {
                            cm: '22.5',
                            euroSize: '36',
                            ukSize: '3,5',
                            usmSize: '4,5',
                            uswSize: '6'
                        },
                        {
                            cm: '23',
                            euroSize: '36,5',
                            ukSize: '4',
                            usmSize: '5',
                            uswSize: '6,5'
                        },
                        {
                            cm: '23.5',
                            euroSize: '37',
                            ukSize: '4,5',
                            usmSize: '5,5',
                            uswSize: '7'
                        },
                        {
                            cm: '24',
                            euroSize: '38',
                            ukSize: '5',
                            usmSize: '6',
                            uswSize: '7,5'
                        },
                        {
                            cm: '24.5',
                            euroSize: '38,5',
                            ukSize: '5,5',
                            usmSize: '6,5',
                            uswSize: '8'
                        },
                        {
                            cm: '25',
                            euroSize: '39',
                            ukSize: '6',
                            usmSize: '7',
                            uswSize: '8,5'
                        },
                        {
                            cm: '25.5',
                            euroSize: '40',
                            ukSize: '6,5',
                            usmSize: '7,5',
                            uswSize: '9'
                        },
                        {
                            cm: '26',
                            euroSize: '40,5',
                            ukSize: '7',
                            usmSize: '8',
                            uswSize: '9,5'
                        },
                        {
                            cm: '26.5',
                            euroSize: '41',
                            ukSize: '7,5',
                            usmSize: '8,5',
                            uswSize: '10'
                        },
                        {
                            cm: '27',
                            euroSize: '42',
                            ukSize: '8',
                            usmSize: '9',
                            uswSize: '10,5'
                        },
                        {
                            cm: '27.5',
                            euroSize: '42,5',
                            ukSize: '8,5',
                            usmSize: '9,5', 
                            uswSize: '11'
                        },
                        {
                            cm: '28',
                            euroSize: '43',
                            ukSize: '9',
                            usmSize: '10',
                            uswSize: '11,5'
                        },
                        {
                            cm: '28.5',
                            euroSize: '44',
                            ukSize: '9,5',
                            usmSize: '10,5',
                            uswSize: '12'
                        },
                        {
                            cm: '29',
                            euroSize: '44,5',
                            ukSize: '10',
                            usmSize: '11',
                            uswSize: '12,5'
                        },
                        {
                            cm: '29.5',
                            euroSize: '45',
                            ukSize: '10,5',
                            usmSize: '11,5',
                            uswSize: '13'
                        },
                        {
                            cm: '30',
                            euroSize: '46',
                            ukSize: '11',
                            usmSize: '12',
                            uswSize: '13,5'
                        },
                        {
                            cm: '31',
                            euroSize: '47',
                            ukSize: '12',
                            usmSize: '13',
                            uswSize: '14'
                        },
                        {
                            cm: '32',
                            euroSize: '48',
                            ukSize: '13',
                            usmSize: '14',
                            uswSize: '14,5'
                        },
                        {
                            cm: '33',
                            euroSize: '49',
                            ukSize: '14',
                            usmSize: '15',
                            uswSize: '15'
                        },
                        {
                            cm: '34',
                            euroSize: '50',
                            ukSize: '15',
                            usmSize: '16',
                            uswSize: '15,5'
                        },

                    ]


// - Izmēru funkcijas - EU


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


// - Izmēru funkcijas - UK


                    function findUkSizeByCm(inputCm) {
                        var result = shoeSizeMap.find(function(shoeSize) {
                            return shoeSize.cm == inputCm;
                        });
                        return result;
                    }

                    function getSize1(ev) {
                        let size = findUkSizeByCm(ev.target.value)
                        if (size) console.log(size.ukSize);
                    }

                    usr.addEventListener("input", getSize1);

                    (function() {
                        var old = console.log;
                        var logger = document.getElementById('log1');
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


// - Izmēru funkcijas - US M


                    function findUsmSizeByCm(inputCm) {
                        var result = shoeSizeMap.find(function(shoeSize) {
                            return shoeSize.cm == inputCm;
                        });
                        return result;
                    }

                    function getSize2(ev) {
                        let size = findUsmSizeByCm(ev.target.value)
                        if (size) console.log(size.usmSize);
                    }

                    usr.addEventListener("input", getSize2);

                    (function() {
                        var old = console.log;
                        var logger = document.getElementById('log1');
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


// - Izmēru funkcijas - US W


                    function findUswSizeByCm(inputCm) {
                        var result = shoeSizeMap.find(function(shoeSize) {
                            return shoeSize.cm == inputCm;
                        });
                        return result;
                    }

                    function getSize3(ev) {
                        let size = findUswSizeByCm(ev.target.value)
                        if (size) console.log(size.uswSize);
                    }

                    usr.addEventListener("input", getSize3);

                    (function() {
                        var old = console.log;
                        var logger = document.getElementById('log1');
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


// - Pogas funkcija lai notīrītu izvadīto


                function Clean() {
                    document.getElementById('log1').innerHTML = '';
                }
                </script>