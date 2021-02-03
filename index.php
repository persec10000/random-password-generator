<html>

    <head>
        <title>Randam Password generation</title>
        <!--<meta name="keywords" content="Randam Password generation">
        <meta name="description" content="It is a tool that can generate(Automatic generation) your favorite password.">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="apple-mobile-web-app-title" content="LUFTTOOLS">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="msapplication-TileColor" content="#fff">
        <meta name="msapplication-TileImage" content="../msapplication-tile-icon.png">
        <meta property="og:locale" content="ja_JP">
        <meta property="og:type" content="article">
        <meta property="og:site_name" content="Convenient collection of tools to help LUFTTOOLS web, and web production.">
        <meta property="og:title" content="Randam Password generation">
        <meta property="og:description" content="It is a tool that can generate(Automatic generation) your favorite password.">-->
        <meta property="og:image" content="../share.gif">
        <!--<meta property="og:url" content="https://www.luft.co.jp/cgi/randam.php">-->
        <!--<meta property="fb:app_id" content="444202198989867">-->
        <!--<link rel="shortcut icon" href="https://www.luft.co.jp/cgi/favicon.ico" type="image/x-icon">-->
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../apple-touch-icon-152x152.png">
        <!--<link rel="start" href="https://www.luft.co.jp/cgi/" title="Convenient collection of tools to help LUFTTOOLS web, and web production. | produced by luft co.,ltd.">-->
        <!--<link rel="canonical" href="https://www.luft.co.jp/cgi/randam.php">-->
        <link href="css/base.css" rel="stylesheet" media="all">
        <link href="css/contents.css" rel="stylesheet" media="all">
        <script src="js/modernizr.js"></script>

        <style>


            .card-1 {
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            }

            .card-1:hover {
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            }
        </style>

    </head>
    <body>
        <div id="wrapper" class="randamPage lowerCommon">
            <?php include_once './header.php'; ?>
            <div id="contents_wrap">
                <div id="container">
                    <div id="container_in">
                        <div id="main" role="main" class="">
                            <section id="sections_wrap">
                                <div id="tool_box" class="card-1">
                                    <header class="tool_box_header">
                                        <h2 class="tool_box_ttl">
                                            <span class="jp">Randam Password generation</span>
                                            <!-- <span class="en">Randam password generation</span> -->
                                        </h2>
                                        <i class="tool_box_icon">
                                            <img src="images/common/icon_randam.png" width="25" height="35" alt=">Randam Password generation">
                                        </i>
                                        <!-- /.tool_box_header --></header>
                                    <div class="tool_box_body">
                                        <div class="tool_box_desc">
                                            <p class="pgp">
                                                It is a tool that can generate(Automatic generation) your favorite password.<br>
                                                The number of characters from 2 to 40 characters, Quantity you can generate up to 1,000 maximum
                                            </p>
                                            <!-- /.tool_box_desc --></div>
                                        <form method="post" action="" name="formcheck">
                                            <div class="randam_selects">
                                                <dl>
                                                    <dt>Strength</dt>
                                                    <dd>
                                                        <div class="check_wrap">
                                                            <input type="radio" id="Enable" name="stg" onClick="enable()" value="0" checked="checked">
                                                            <i class="shape radio"></i><label class="txt" for="Enable">custom</label>
                                                        </div>
                                                        <div class="check_wrap">
                                                            <input type="radio" id="Disable2" name="stg" onClick="disable()" value="2">
                                                            <i class="shape radio"></i><label class="txt" for="Disable2">strongest</label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>character</dt>
                                                    <dd>
                                                        <div class="check_wrap">
                                                            <input type="checkbox" id="Cbox0" name="str_style[]" value="0" checked="checked">
                                                            <i class="shape checkbox"></i><label class="txt" for="Cbox0">English(Capital letter)</label>
                                                        </div>
                                                        <div class="check_wrap">
                                                            <input type="checkbox" id="Cbox1" name="str_style[]" value="1" checked="checked">
                                                            <i class="shape checkbox"></i><label class="txt" for="Cbox1">English(Small letter)</label>
                                                        </div>
                                                        <div class="check_wrap size_s">
                                                            <input type="checkbox" id="Cbox2" name="str_style[]" value="2" checked="checked">
                                                            <i class="shape checkbox"></i><label class="txt" for="Cbox2">figure</label>
                                                        </div>
                                                        <div class="check_wrap size_s">
                                                            <input type="checkbox" id="Cbox3" name="str_style[]" value="3">
                                                            <i class="shape checkbox"></i><label class="txt" for="Cbox3">Symbol</label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>Number of characters</dt>
                                                    <dd>
                                                        <div class="check_wrap plus_form">
                                                            <input type="radio" id="Digit0" name="digit" value="0">
                                                            <i class="shape radio"></i><input type="number" name="digit_s" id="digit_s" value="" onFocus="d_focus()" class="form_txt"><label class="txt" for="Digit0">characters</label>
                                                        </div>
                                                        <div class="check_wrap">
                                                            <input type="radio" id="Digit2" name="digit" value="8" checked="checked">
                                                            <i class="shape radio"></i><label class="txt" for="Digit2">8 characters</label>
                                                        </div>
                                                        <div class="check_wrap">
                                                            <input type="radio" id="Digit3" name="digit" value="12">
                                                            <i class="shape radio"></i><label class="txt" for="Digit3">12 characters</label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>Quantity</dt>
                                                    <dd>
                                                        <div class="check_wrap plus_form" style="display:none">
                                                            <input type="radio" id="Su0" name="su" value="0">
                                                            <i class="shape radio"></i><input type="number" id="su_s" name="su_s" value="" onFocus="s_focus()" class="form_txt"><label class="txt" for="Su0">units</label>
                                                        </div>
                                                        <div class="check_wrap">
                                                            <input type="radio" id="Su2" name="su" value="10" checked="checked">
                                                            <i class="shape radio"></i><label class="txt" for="Su2">10 units</label>
                                                        </div>
                                                        <div class="check_wrap">
                                                            <input type="radio" id="Su3" name="su" value="50">
                                                            <i class="shape radio"></i><label class="txt" for="Su3">50 units</label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>Others</dt>
                                                    <dd>
                                                        <div class="check_wrap row">
                                                            <input type="checkbox" id="Condition0" name="condition[]" value="0" checked="checked">
                                                            <i class="shape checkbox"></i><label class="txt" for="Condition0">Omit the alphanumeric character which closely</label>
                                                        </div>
                                                        <div class="check_wrap row">
                                                            <input type="checkbox" id="Condition1" name="condition[]" value="1" checked="checked">
                                                            <i class="shape checkbox"></i><label class="txt" for="Condition1">Don't use the same character more than twice ,in the case of less than 8 characters</label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                                <!-- /.randam_selects --></div>

                                <!--<input type="hidden" name="submit" value="submit">-->
                                            <input type="button" class="btn_form btn_submit" onclick="randomPassword()" value="Generation">
                                        </form>
                                        <form method="post" action="">
                                            <input type="hidden" name="reset" value="reser">
                                            <button type="submit" class="btn_form btn_cancel2">Reset</button>
                                        </form>

<!--                                        <form method="post" action="">
                                            <input type="hidden" name="down" value="downer">
                                            <button type="submit" class="btn_form btn_download">Password Data Download</button>
                                        </form>-->
                                        <!--
                                        <p class="exp_txt">
                                          ※スマートフォンやタブレットではパスワードデータを開けない場合があります。
                                        </p>
                                        -->
                                        <div>
                                            <img src="images/468x100.png" style="width: 100%;padding-top: 10px;">
                                        </div>
                                        <div class="main_adv">
                                            <div class="adv_wrap">
                                                <div class="adv">
                                                    <!-- main_adv START -->
                                                    <script async src="../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                                                    <!-- LUFTTOOLS_responsive_2 -->
                                                    <ins class="adsbygoogle"
                                                         style="display:block"
                                                         data-ad-client="ca-pub-3811226361667200"
                                                         data-ad-slot="3187610174"
                                                         data-ad-format="auto"></ins>
                                                    <script>
                                                (adsbygoogle = window.adsbygoogle || []).push({});
                                                    </script>
                                                    <!-- main_adv END -->
                                                </div>
                                            </div>
                                            <!-- /.main_adv --></div>
                                        <div class="randam_gene_block">
                                            <div class="randam_gene_block_in">
                                                <div class="item_wrap">
                                                    <input type="text" value="iXqUHka4" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <input type="text" value="iueWGUdr" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <input type="text" value="nVmdh3gi" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <input type="text" value="HEgHfKTQ" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <input type="text" value="bUyvxiHz" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <input type="text" value="SGgFcGPB" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <input type="text" value="PM3iPt6t" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <input type="text" value="SQqDArWd" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <input type="text" value="pjjmfZKN" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <input type="text" value="j4A7r7tc" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">
                                                    <!-- /.item_wrap --></div>
                                                <!-- /.randam_gene_block_in --></div>
                                            <!-- /.randam_gene_block --></div>
                                        <!--
                                                        <div class="tool_box_add">
                                                          <p class="pgp">
                                        ※文字数は2～40文字まで指定できます。
                                                          </p>
                                                          <p class="pgp">
                                        ※個数は最大1,000個まで生成できます。
                                                          </p>
                                                        </div>
                                        -->
                                        <!-- /.tool_box_body --></div>
                                    <!-- /#tool_box --></div>
                                <section class="sec">
                                    <header class="sec_header">
                                        <h3 class="sec_ttl">
                                            <span class="txt">How to use</span>
                                        </h3>
                                    </header>
                                    <div class="sec_body">
                                        <div class="txt_wrap">
                                            <p class="pgp">
                                                It is a tool that can generate(Automatic generation) your favorite password.<br>
                                                You can specify kind of the characters to use for a password(Figure, English characters,Symbols), length of the number of characters,the number to be create.<br>
                                                If you wish have Security Strength,character,Number of characters,Quantity,please click on the "Generate" button after your input and selection.<br>
                                                A new password by pressing the "Generate" button will be generated,again.<br>
                                                <span class="pc_view">
                                                    ※The generated password is available for download in the text file.<br>
                                                    Please download by clicking on the "Password Data Download"button.<br>
                                                </span>
                                                <span class="sp_view">
                                                    ※Those who use a smartphone or tablet, please use the generated password directly copy.<br>
                                                </span>
                                                ※The number of characters up to a maximum of 40 characters,Quantity is up to 1000.
                                            </p>
                                        </div>
                                        <!-- /.sec_body --></div>
                                    <!-- /.sec --></section>
                                <section class="sec">
                                    <header class="sec_header">
                                        <h3 class="sec_ttl">
                                            <span class="txt">Others about"Omit the alphanumeric character which closely"</span>
                                        </h3>
                                    </header>
                                    <div class="sec_body">
                                        <div class="txt_wrap">
                                            <p class="pgp">
                                                If you check the"Omit the alphanumeric character which closely"button,the following characters will not be included in the password that is generated.<br>
                                                I=English(Capital letter)I<br>
                                                l=English(Small letter)l<br>
                                                1=Figure's 1
                                            </p>
                                            <p class="pgp">
                                                O=English(Capital letter)O<br>
                                                o=English(Small letter)o<br>
                                                0=Figure's 0
                                            </p>
                                        </div>
                                        <!-- /.sec_body --></div>
                                    <!-- /.sec --></section>
                                <section class="sec" style="display:none">
                                    <header class="sec_header">
                                        <h3 class="sec_ttl">
                                            <span class="txt">About symbols character</span>
                                        </h3>
                                    </header>
                                    <div class="sec_body">
                                        <div class="txt_wrap">
                                            <p class="pgp">
                                                In this tool we use the following symbols character.<br>
                                                &#47;&#42;&#45;&#43;&#46;&#44;&#33;&#35;&#36;&#37;&#38;&#40;&#41;&#126;&#124;&#95;
                                            </p>
                                        </div>
                                        <!-- /.sec_body --></div>
                                    <!-- /.sec --></section>
                                <div class="notes" style="display:none">
                                    <p class="pgp">
                                        ※This program is created and confirm the operation in PHP5.2.6.<br>
                                        ※If you have any inquiries, opinions, or requests that you would like to make,
                                        <a href="" target="_blank">please fill out the following form</a>
                                    </p>
                                    <!-- /.notes --></div>
                                <!-- /#sections_wrap --></section>
                            <!-- /#main --></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/core.js"></script>
        <script src="js/common.js"></script>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/config.js"></script>
        <script src="js/disable.js"></script>

        <script>
			function randomPassword() {
				$(".item_wrap").empty();
				var radioValue = $("input[name='su']:checked").val();
				var passwor_len_value = $("input[name='digit']:checked").val();
				
				var condOmit = $("input[id='Condition0']:checked").val();
				var condSame = $("input[id='Condition1']:checked").val();
				if (radioValue == 0) {

					radioValue = $("#su_s").val();
				}
				if (passwor_len_value == 0) {

					passwor_len_value = $("#digit_s").val();
				}

				

				var length = passwor_len_value,
				charset = "";			
				var charsetEngCap="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				var charsetEngSmall="abcdefghijklmnopqrstuvwxyz";
				var charsetNum="0123456789";
				var charsetSymbol="~!@#$%^&*()_+{}|:?><[]\';/.,";//"/*-+.,!#$%&()~|_"
				
				if(condOmit == 0)
				{
					charsetEngCap="ABCDEFGHJKLMNPQRSTUVWXYZ";
					charsetEngSmall="abcdefghijkmnpqrstuvwxyz";
					charsetNum="23456789";
					charsetSymbol="~!@#$%^&*()_+{}:?><[]\';/.,";//"/*-+.,!#$%&()~|_"
				}
				var charsetType1 = $("input[id='Cbox0']:checked").val();
				var charsetType2 = $("input[id='Cbox1']:checked").val();
				var charsetType3 = $("input[id='Cbox2']:checked").val();
				var charsetType4 = $("input[id='Cbox3']:checked").val();
				if(charsetType1==0)
				{
					charset += charsetEngCap;
				}
				if(charsetType2==1)
				{
					charset += charsetEngSmall;
				}
				if(charsetType3==2)
				{
					charset += charsetNum;
				}
				if(charsetType4==3)
				{
					charset += charsetSymbol;
				}


String.prototype.shuffle = function () {
    var a = this.split(""),
        n = a.length;

    for(var i = n - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var tmp = a[i];
        a[i] = a[j];
        a[j] = tmp;
    }
    return a.join("");
}



				for (var i = 0; i < radioValue; i++) {
					var retVal = "";
					for (var j = 0, n = charset.length; j < length; ++j) {
						retVal += charset.charAt(Math.floor(Math.random() * n));
					}
					if(condSame==1)
					{
						if(passwor_len_value<=8)
						{
							var retShuffle=charset;
							retShuffle=retShuffle.shuffle();
							retVal =retShuffle.substring(0,passwor_len_value);
						}							
					}

					$('.item_wrap').append('<input type="text" value="'+retVal+'" style="width:98%;" readonly="readonly" onclick="this.focus();this.select()" class="form_txt">');
				}



			}
			function reset() {

				location.reload();
			}
        </script>

    </body>
</html> 
