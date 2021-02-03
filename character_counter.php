<!DOCTYPE HTML>
<html class="no-js" lang="ja">

<!-- Mirrored from www.luft.co.jp/cgi/en/str_counter.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 16:35:17 GMT -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="shift_jis">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="requiresActiveX=true">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<title>Number of characters counter</title>
<meta name="keywords" content="Number of characters counter">
<meta name="description" content="Number of characters count tool.You can count byte counts(full-width=2 bytes,half-width=1byte,line feed= 2 bytes) such as the number of characters excluding the line breaks and blanks in a wide range of conditions.">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-title" content="LUFTTOOLS">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="msapplication-TileColor" content="#fff">
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Convenient collection of tools to help LUFTTOOLS web, and web production.">
<meta property="og:title" content="Number of characters counter">

<link href="css/base.css" rel="stylesheet" media="all">
<link href="css/contents.css" rel="stylesheet" media="all">
<script src="js/modernizr.js"></script>
</head>
<body>
<div id="wrapper" class="str_counterPage lowerCommon">
	<?php include_once 'header.php'; ?>

	<div id="contents_wrap">
		<div id="container">
			<div id="container_in">
				<div id="main" role="main">
					<section id="sections_wrap">
						<div id="tool_box">
							<header class="tool_box_header">
								<h2 class="tool_box_ttl">
									<span class="jp">Number of characters counter</span>
									<!-- <span class="en">Number of characters counter</span> -->
								</h2>
								<i class="tool_box_icon">
									<img src="images/common/icon_str_counter.png" width="36" height="33" alt="Number of characters counter">
								</i>
							<!-- /.tool_box_header --></header>
							<div class="tool_box_body">
								<div class="tool_box_desc">
									<p class="pgp">
1)Enter the text you want to check the number of characters  (byte counts) in the text field of the following.<br>
Or please go to copy and paste.
									</p>
									<p class="pgp">
2）When you click the " Count" button ,<br>
displays on text field lower part to the number of characters (byte counts).
									</p>
								<!-- /.tool_box_desc --></div>
                                                            <!--<form method="post" action="" name="string" id="string">-->
								<div class="str_counter_inputs">
									<textarea name="str" id="input_text" rows="13" cols="60" class="resizable"></textarea>
								<!-- /.str_counter_inputs --></div>
<!--<input type="hidden" name="submit" value="submit" />-->
                                                            <input type="button" class="btn_form btn_submit" onclick="generate_count()" id="btn_submit" value="Count">
<!--</form>-->
                                                            <!--<form method="get" action="character_counter.php">-->
<!--<input type="hidden" name="reset" value="reser" />-->
                                                            <input type="button" class="btn_form btn_cancel" onclick="reset_form()" value="Reset">
</form>
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
//(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- main_adv END -->
		</div>
	</div>
<!-- /.main_adv --></div>
								<div class="str_counter_gene_block">
<dl>
<dt>■ Number of characters (including spaces)</dt>
<dd><input type="text" name="bytes" id="bytes" value="" size="8" class="form_txt" readonly="readonly"></dd>
<dt>■ Number of characters (not including spaces)</dt>
<dd><input type="text" name="strings" id="strings" value="" size="8" class="form_txt" readonly="readonly"></dd>

<!--
<dt>■byte counts　<span class="att">※Convert as full-width=2 bytes,half-width=1byte.line feed is 2 bytes.</span></dt>
<dd><input type="text" name="bytes" id="bytes" value="" size="8" class="form_txt" readonly="readonly"></dd>
<dt>■The number of characters that were converted as 1 character to full-width,half-width both.</dt>
<dd><input type="text" name="strings" id="strings" value="" size="8" class="form_txt" readonly="readonly"></dd>
<dt>■The number of characters that were converted as 1 character=full-width,0.5character=half-width.</dt>
<dd><input type="text" name="strings_num" id="strings_num" value="" size="8" class="form_txt" readonly="readonly"></dd>
<dt>■The number of characters that were converted as 1 character to full-width,half-width both.(line feed,blank except)</dt>
<dd><input type="text" name="strings_l" id="strings_l" value="" size="8" class="form_txt" readonly="readonly"></dd>
<dt>■The number of characters that were converted as 1 character=full-width,0.5character=half-width.(line feed,blank except)</dt>
<dd><input type="text" name="strings_num_l" id="strings_num_l" value="" size="8" class="form_txt" readonly="readonly"></dd>
<dt>■byte counts(line feed,blank except)</dt>
<dd><input type="text" name="bytes_l" id="bytes_l" value="" size="8" class="form_txt" readonly="readonly"></dd>
!-->
<dt>■ Number of lines</dt>
<dd><input type="text" name="lines" id="lines" value="" size="8" class="form_txt" readonly="readonly"></dd>
</dl>
								<!-- /.str_counter_gene_block --></div>
							<!-- /.tool_box_body --></div>
						<!-- /#tool_box --></div>

						<section class="sec">
							<header class="sec_header">
								<h3 class="sec_ttl">
									<span class="txt">How to use</span>
								</h3>
							</header>
						<div class="notes" >
							<p class="pgp">
It is a tool that can generate(Automatic generation) your favorite password.</p>
						</div>

						<div class="notes">
							<p class="pgp">
<br>Copyright 2020 Password Generator All rights Reserved.
							</p>
						</div>

							<div class="sec_body" style="display:none">
								<div class="txt_wrap">
									<dl class="pgp_dfl">
<dt>
■byte counts
</dt>
<dd>
It displays the byte counts converting the full-width as 2 bytes,thehalf-width as 1byte.line feed is 2 bytes.
</dd>
									<!-- /.pgp_dfl --></dl>
									<dl class="pgp_dfl">
<dt>
■The number of characters that were converted as 1 character to full-width,half-width both.
</dt>
<dd>
It displays the number of characters converting as 1 character to full-width,half-width both.line feed does not count.
</dd>
									<!-- /.pgp_dfl --></dl>
									<dl class="pgp_dfl">
<dt>
■The number of characters that were converted as 1 character=full-width,0.5character=half-width.
</dt>
<dd>
It displays the number of characters converting the full-width characters as 1character,thehalf-width as 0.5 character.line feed does not count.
</dd>
									<!-- /.pgp_dfl --></dl>
									<dl class="pgp_dfl">
<dt>
■The number of characters that were converted as 1 character to full-width,half-width both.(line feed,blank except)
</dt>
<dd>
It displays the number of characters converting the full-width characters,half-width characters except the line feed character and the blank character (full-width,half-width,blank )as 1 character.
</dd>
									<!-- /.pgp_dfl --></dl>
									<dl class="pgp_dfl">
<dt>
■The number of characters that were converted as 1 character=full-width,0.5character=half-width.(line feed,blank except)
</dt>
<dd>
It displays the number of characters converting the full-width characters as 1character except the line feed character and the blank character,thehalf-width as 0.5 character.
</dd>
									<!-- /.pgp_dfl --></dl>
									<dl class="pgp_dfl">
<dt>
■byte counts(line feed,blank except)
</dt>
<dd>
It displays the byte counts, except the line feed character and the blank character (full-width,half-width,blank).
</dd>
									<!-- /.pgp_dfl --></dl>
									<dl class="pgp_dfl">
<dt>
■Number of lines
</dt>
<dd>
It displays number of lines.
</dd>
									<!-- /.pgp_dfl --></dl>
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

				

			<!-- /#container_in --></div>
		<!-- /#container --></div>
		

		

	<!-- /#contents_wrap --></div>
<!-- /#wrapper --></div>
<script src="js/core.js"></script>
<script src="js/common.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/config.js"></script>
<script src="js/jquery.cookie.compressed.js"></script>
<script src="js/jquery.textarearesizer.compressed.js"></script>
<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>--> 
<script>
    
    function generate_count(){
         var myStr = $("textarea").val();
         var withSpace = myStr.length;
         var lines = myStr.split("\n");  
         var withoutSpace = myStr.replace(/ /g,'').length;   
         var remText = myStr.replace(/\s/g, "");
         $("#bytes").val(withSpace + lines.length - 1);
         $("#strings").val(withoutSpace);
         $("#strings_num").val(withoutSpace/2);
         $("#strings_l").val(remText.length);
         $("#strings_num_l").val(remText.length/2);
         $("#bytes_l").val(remText.length);
         $("#lines").val(lines.length);


            
    }
    function reset_form(){
        $("textarea").val('');
        $("#bytes").val('');
         $("#strings").val('');
         $("#strings_num").val('');
         $("#strings_l").val('');
         $("#strings_num_l").val('');
         $("#bytes_l").val('');
         $("#lines").val('');
    }
$(document).ready(function() {
	$('textarea.resizable:not(.processed)').TextAreaResizer();
	$('textarea.resizable').css({'height' : $.cookie('cookiename') +'px'});
        
});
</script>


</body>

</html>

