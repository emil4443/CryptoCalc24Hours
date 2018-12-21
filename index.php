<!DOCTYPE html>
<html lang="ru">

<head>
    <!--Created by Emil Latypov/ ЭН-2-18-->
    <meta charset="UTF-8">
    <meta name="language" content="ru">
    <meta name="author" content="Emil Latypov ">
    <meta name="group" content="ЭН-2-18">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
    <title>Crypto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <style>
        .green{
        color: rgba(38, 232, 22, 0.92);
        font-weight:600;
    }
    .red{
        color: rgba(214, 8, 8, 0.92);
        font-weight:600;
    }
    </style>
    <div class="container-fluid header-top">Created by Emil Latypov/ EN-2-18</div>
    <div class="header container-fluid">
        <h1>Your income in 24 hours</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="card card_1 col-sm-5">
                <div class="card-top card_top_1">
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th><b>Icon</b></th>
                                    <th><b>Code</b></th>
                                    <th><b>Name</b></th>
                                    <th><b>Change 24h%</b></th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
                <div class="card-center_1">
                    <div class='calc'>
                        <section>


                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td><img style="width:30px;" src="https://www.ok24pay.com/wp-content/uploads/Bitcoin.png" /></td>
                                            <td>BTC</td>
                                            <td>Bitcoin</td>
                                            <td class="btc td">
                                                <center><img style="width:20px;" src="images/giphy.gif"></center>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td><img style="width:30px;" src="https://www.ok24pay.com/wp-content/uploads/ripple.png" /></td>
                                            <td>XRP</td>
                                            <td>Ripple</td>
                                            <td class="xrp td">
                                                <center><img style="width:20px;" src="images/giphy.gif"></center>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td><img style="width:30px;" src="https://www.ok24pay.com/wp-content/uploads/ether.png" /></td>
                                            <td>ETH</td>
                                            <td>Ethereum</td>
                                            <td class="eth td">
                                                <center><img style="width:20px;" src="images/giphy.gif"></center>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td><img style="width:30px;" src="images/eos.png" /></td>
                                            <td>EOS</td>
                                            <td>EOS</td>
                                            <td class="eos td">
                                                <center><img style="width:20px;" src="images/giphy.gif"></center>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td><img style="width:30px;" src="images/Litecoin.png" /></td>
                                            <td>LTC</td>
                                            <td>Litecoin</td>
                                            <td class="ltc td">
                                                <center><img style="width:20px;" src="images/giphy.gif"></center>
                                            </td>
                                        </tr>



                                        <tr>
                                            <td><img style="width:30px;" src="https://www.netex24.net/images/paymentSystems/bitcoin_cash.png" /></td>
                                            <td>BTH</td>
                                            <td>Bitcoin Cash</td>
                                            <td class="bth td">
                                                <center><img style="width:20px;" src="images/giphy.gif"></center>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td><img style="width:30px;" src="images/dgc.png" /></td>
                                            <td>DASH</td>
                                            <td>DigitalCash</td>
                                            <td class="dash td">
                                                <center><img style="width:20px;" src="images/giphy.gif"></center>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>


            <div class="card card2 col-sm-5">
                <div class="card-top card-top_2">
                    <span class="desc desc1 "> Выберите криптовалюту</span>
                    <select name="potencial" id="potencial" class="custom-select sources" placeholder="Select">
                        <option value="BTC">Bitcoin BTC</option>
                        <option value="ETH">Ethereum ETH</option>
                        <option value="XRP">Ripple XRP</option>
                        <option value="EOS">EOS</option>
                        <option value="LTC">Litecoin</option>
                        <option value="XUC">Exchange Union</option>
                        <option value="BTH">BTC Cash</option>
                        <option value="DASH">Digital Cash</option>

                    </select>
                </div>
                <div class="card-center">

                    <div class="row">
                        <div class="col-sm-4 first_val "> <span class="desc "> Invested <span class="pre"></span>→</span></div>
                        <div class="col-sm-8"><input class="inp1" id="inp1" type="text" placeholder="RUB"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 first_val"><span class="desc "> Got <span class="post"></span> ←</span></div>
                        <div class="col-sm-8"><input disabled class="output" id="inp2" type="text" placeholder="RUB"></div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4 first_val"><span class="desc "> Income 24H <span class="money"></span> </span></div>
                        <div class="col-sm-8"><input disabled class="output2" id="inp3" type="text" placeholder="RUB"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("document").ready(function() {
            function update_Value(elClass, elValue) {
                var $el = $('.' + elClass);
                var oldValue = +$el.text();
                var newValue = +elValue;
                $el.text(elValue);
                if (oldValue < newValue) {
                    var class1 = "green";
                    var appen = '↑';
                } else if (oldValue > newValue) {
                    var class1 = "red";
                    var appen = "↓";
                } else {
                    var class1 = "";
                }
                $el.addClass(class1);
                $el.append(appen);
                setTimeout(function() {
                    $el.removeClass(class1);

                }, 4000);
            }

            function get() {
                $.ajax({
                    url: 'pars.php',
                    type: 'POST',
                    success: function(data) {
                        var obj = jQuery.parseJSON(data);
                        update_Value('btc', obj.resmath1);
                        update_Value('xrp', obj.resmath2);
                        update_Value('eth', obj.resmath3);
                        update_Value('eos', obj.resmath4);
                        update_Value('ltc', obj.resmath5);
                        update_Value('bth', obj.resmath7);
                        update_Value('dash', obj.resmath8);
                    }
                });
            }
            get();
            setInterval(get, 1000);



        });

    </script>
    <script>
        $("document").ready(function() {
            var a = 0;


            $('#inp1')[0].oninput = function() {
                var value = +$(this).val();
                $('#inp2').val((value + (a * value) / 100) + " " + "RUB");
                let money = ((value + (a * value) / 100) - value) + " " + "RUB";
                $('#inp3').val(money);
            };

            $('span[value="BTC"]').click(function() {
                a = $('.btc').text();
            });
            $('span[value="XRP"]').click(function() {
                a = $('.xrp').text();
            });
            $('span[value="ETH"]').click(function() {
                a = $('.eth').text();
            });
            $('span[value="BTH"]').click(function() {
                a = $('.bth').text();
            });
            $('span[value="EOS"]').click(function() {
                a = $('.eos').text();
            });
            $('span[value="XUC"]').click(function() {
                a = $('.xuc').text();
            });
            $('span[value="DASH"]').click(function() {
                a = $('.dash').text();
            });
            $('span[value="LTC"]').click(function() {
                a = $('.ltc').text();
            });

        });

    </script>
    <script>
        function date() {
            var time = new Date();
            var d = time.getDate();
            var m = time.getMonth();
            var datepre = d - 1 + "." + (m + 1);
            var datepost = d + "." + (m + 1);
            $('.pre').text(datepre);
            $('.post').text(datepost);
        }
        date();
        setInterval(date, 7200);

    </script>
    <script src="main.js"></script>
</body>

</html>
