<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>overset - Multiday Calendar Datepicker JQuery Plugin</title>
	<meta name="description" content="Multiday Calendar Datepicker JQuery Plugin"/>
	<meta name="keywords" content=""/>
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/md5c.js"></script>
	<script type="text/javascript" src="/assets/js/jsyn.js"></script>
	<script type="text/javascript" src="/assets/js/blaj.js"></script>
	<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
	<script type="text/javascript" src="/assets/js/jVal.js" defer="defer"></script>
	<script type="text/javascript" src="/assets/js/jquery.tojson.js" defer="defer"></script>
	<link href="/assets/css/blaj.css" type="text/css" rel="stylesheet"></link>
	<link href="/assets/css/jVal.css" type="text/css" rel="stylesheet"></link>
	<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon"></link>
	<link href="/rss.xml" type="application/rss+xml" rel="alternate" title="overset RSS feed" />
</head>
<body>

<div class="r">

	<div class="cell">
		
		<div class="tit">
			CURRENT PROJECTS
		</div>

		<div class="projects">
			<object height="40" width="40" data="/assets/img/t.swf" type="application/x-shockwave-flash" style="float:left;">
				<param value="/assets/img/t.swf" name="movie"/>
				<param value="transparent" name="wmode"/>
			</object>
			
		</div>

	</div>
	
<!--
	<div style="padding:15px 10px; padding-bottom:10px; height:26px; margin-top:0px; vertical-align:bottom; text-align:left;">
		<input type="text" name="search" style="border-width:1px; background:#fff url(g.gif) 99% 1px no-repeat; width:280px; float:left; margin-right:10px;" />
	</div>
-->

</div>
<div class="l">

	<a href="/"><img src="/assets/img/overset.png" alt="overset" /></a>
	<div class="about">
		DEVELOPMENT LOG FOR <a href="http://www.linkedin.com/in/jimbob" target="_blank">JIM PALMER</a>
	</div>

	<div class="slug">
		<div class="posttit">
			<a href="/2008/05/12/multiday-calendar-datepicker-jquery-plugin">Multiday Calendar Datepicker JQuery Plugin</a>
		</div>
		Posted 05/12/2008 in <a href="/jquery">jquery</a>
	</div>
	<br /><br />

Multi-day, multi-month animated datepicker jQuery plugin that weighs in at 14KB with the uncompressed development version.
<br /><br />
<div id="demo1" style="padding:5px;">loading demo..</div>
<script type="text/javascript">
	//<![CDATA[
		function changeCalSize (daySize) {
			var daySize = (parseInt(daySize) || 30), 
				monthSize = ( daySize + 2 ) * 7,
				titleSize = monthSize - 16,
				titleMsgSize = ( titleSize / 2 ) - 4;
			$('head:first').append(
				'<style>' +
					'.jCalMo .day,.jCalMo .invday,.jCalMo .pday,.jCalMo .aday,.jCalMo .selectedDay,.jCalMo .dow { width:' + daySize + 'px !important; height:' + daySize + 'px !important; }' +
					'.jCalMo .dow { height:auto !important }' +
					'.jCalMo, .jCalMo .jCal { width:' + monthSize + 'px !important; }' +
					'.jCalMo .month { width:' + titleSize + 'px !important; }' +
					'.jCalMo .month span { width:' + titleMsgSize  + 'px !important; }' +
				'</style>');
		}
		$(function () {
			$('head:first').append('<link rel="stylesheet" type="text/css" href="jquery-jcal/jCal.css">');
			$.getScript('jquery-jcal/jquery.animate.clip.js');
			$.getScript('jquery-jcal/jCal.js', function () {
				$('#demo1').load('jCal.blog.html', function () {
					$('#calOne').jCal({
						day:			new Date(),
						days:			4,
						showMonths:		2,
						monthSelect:	true,
drawBack: function () {
changeCalSize($('#calOneSize').val());
},
						dCheck:			function (day) {
								if ( day.getTime() == (new Date('8/7/2008')).getTime() )
									return 'invday';
								else if (day.getDate() != 3)
									return 'day';
							},
						callback:		function (day, days) {
								$('#calOneDays').val( days );
								$(this._target).find('.dInfo').remove();
								var dCursor = new Date( day.getTime() );
								for (var di=0; di < days; di++) {
									var currDay = $(this._target).find('[id*=d_' + ( dCursor.getMonth() + 1 ) + '_' + dCursor.getDate() + '_' + dCursor.getFullYear() + ']');
									if (currDay.length) currDay.append('<div class="dInfo"><span style="color:#ccc">$</span>1231</div>');
									dCursor.setDate( dCursor.getDate() + 1 );
								}
								return true;
							}
						});
				});
			});
		});
	//]]>
</script>
<br />


<strong>USAGE</strong><br />
<pre class="code tab4">// append side-by-side jCal with 4 day selection to jCalTarget element
$('#jCalTarget').jCal({
	day:			new Date(),
	days:			4,
	showMonths:		2,
	monthSelect:	true,
	callback:		function (day, days) {
			console.log('selected ' + days + ' days starting ' + day);
		}
	});</pre>
<br />

Google Code Page <a href="http://code.google.com/p/jquery-jcal">http://code.google.com/p/jquery-jcal</a>
<br />
jQuery.com Project Page <a href="http://plugins.jquery.com/project/jCal">http://plugins.jquery.com/project/jCal</a>
<br /><br />

<strong>CURRENT RELEASE</strong><br />
<a href="http://overset.com/2008/05/12/multiday-calendar-datepicker-jquery-plugin/jCal.0.3.6.zip">jCal.0.3.6.zip</a> - LATEST includes jCal.js core, jCal-light.js (lighter version without month or year pulldowns), jsmin'd versions, packer versions, pre-compressed gzip .jsgz versions, jCal.css, jquery.animate.clip.js plugin, example instantiation and images
<br /><br />

<strong>CORE ASSETS</strong>
<ul>
	<li><a href="http://jquery-jcal.googlecode.com/svn/trunk/jCal.js">jCal.js</a> - current jCal core</li>
	<li><a href="http://jquery-jcal.googlecode.com/svn/trunk/jCal.css">jCal.css</a> - current default jCal stylesheet</li>
</ul>



To change the sizing of the calendars on the fly via jQuery, as done in the in-line demo at top, here's a quick function:
<pre class="code tab4">function changeCalSize (daySize) {
	var daySize = (parseInt(daySize) || 30), 
		monthSize = ( daySize + 2 ) * 7,
		titleSize = monthSize - 16,
		titleMsgSize = ( titleSize / 2 ) - 4;
	$('head:first').append(
		'&lt;style&gt;' +
			'.jCalMo .day,.jCalMo .invday,.jCalMo .pday,.jCalMo .aday,.jCalMo .selectedDay,.jCalMo .dow { width:' + daySize + 'px !important; height:' + daySize + 'px !important; }' +
			'.jCalMo .dow { height:auto !important }' +
			'.jCalMo, .jCalMo .jCal { width:' + monthSize + 'px !important; }' +
			'.jCalMo .month { width:' + titleSize + 'px !important; }' +
			'.jCalMo .month span { width:' + titleMsgSize  + 'px !important; }' +
		'&lt;/style&gt;');
}</pre>


	<div class="ctit"><img src="/assets/img/comments.png" alt="comments" /></div>

	<div class="comments">
		<object height="40" width="40" data="/assets/img/t.swf" type="application/x-shockwave-flash" style="float:left;">
			<param value="/assets/img/t.swf" name="movie"/>
			<param value="transparent" name="wmode"/>
		</object>
		<span class="loading">loading</span>
	</div>

	<div class="cadd">

		<div class="ctit"><img src="/assets/img/newcomment.png" alt="new comment" /></div>

		<div>
			<div class="cfname">NAME</div>
			<input type="text" name="name" size="40" />
		</div>
		<div class="crow cf fr">
			<select name="update">
				<option value="0">no</option>
				<option value="1">yes</option>
			</select>
			EMAIL ME ON UPDATES
		</div>
		<div class="crow">
			<div class="cfname">EMAIL <span class="sub">(hidden)</span></div>
			<input type="text" name="email" size="40" />
		</div>
		<div class="crow">
			<div class="cfname">URL</div>
			<input type="text" name="url" size="40" />
		</div>
		<div class="crow">
			<div class="cmrow">
				MESSAGE	<span class="sub">TAGS ALLOWED: &lt;code&gt; &lt;a&gt; &lt;pre class="code [tab4|tabX|inline|bash]"&gt; &lt;br&gt; </span>
			</div>
			<textarea name="message" cols="" rows="8"></textarea>
		</div>
		<div class="crow">
			<div class="fr">
				<div class="btn previewComment" onclick="if ($('.cadd').jVal()) previewComment();">
					<div class="s"></div><div class="m"><div class="c">PREVIEW COMMENT</div></div><div class="s"></div>
					<div class="cb"></div>
				</div>
			</div>
			<div>
				<div class="cfname">TURING TEST</div>
				<select name="turing">
					<option value=""></option>
					<option value="9">i am machine</option>
					<option value="2">i am human</option>
				</select>
			</div>
		</div>
	</div>

</div>

<div class="templates">
	<div class="com">
		<img height="50" width="50" class="gravatar" alt="gravatar" src="/assets/img/unknown.gif" />
		<div class="post">
			<div class="usr"></div>
			<div class="msg"></div>
		</div>
		<br class="cb" />
	</div>
</div>

<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-87585-5");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
